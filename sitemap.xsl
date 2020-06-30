<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet version="2.0"
                xmlns:image="http://www.google.com/schemas/sitemap-image/1.1"
                xmlns:sitemap="http://www.sitemaps.org/schemas/sitemap/0.9"
                xmlns:xsl="http://www.w3.org/1999/XSL/Transform"
                xmlns:xhtml="http://www.w3.org/1999/xhtml">
  <xsl:output method="html" encoding="UTF-8" indent="yes"/>

  <!-- Root template -->
  <xsl:template match="/">
    <html>
      <head>
        <title>Archivo del mapa del sitio</title>
        <script type="text/javascript" src="/core/assets/vendor/jquery/jquery.min.js"/>
        <script type="text/javascript" src="/modules/contrib/simple_sitemap/xsl/jquery.tablesorter.min.js"/>
        <script type="text/javascript" src="/modules/contrib/simple_sitemap/xsl/parser-date-iso8601.min.js"/>
        <script type="text/javascript" src="/modules/contrib/simple_sitemap/xsl/simple_sitemap.xsl.js"/>
        <link href="/modules/contrib/simple_sitemap/xsl/simple_sitemap.xsl.css" type="text/css" rel="stylesheet"/>
      </head>
      <body>
        <h1>Archivo del mapa del sitio</h1>

        <xsl:choose>
          <xsl:when test="//sitemap:url">
            <xsl:call-template name="sitemapTable"/>
          </xsl:when>
          <xsl:otherwise>
            <xsl:call-template name="sitemapIndexTable"/>
          </xsl:otherwise>
        </xsl:choose>

        <div id="footer">
          <p>Generated by the <a href="https://www.drupal.org/project/simple_sitemap">Simple XML Sitemap</a> Drupal module.</p>
        </div>
      </body>
    </html>
  </xsl:template>

  <!-- sitemapIndexTable template -->
  <xsl:template name="sitemapIndexTable">
    <div id="information">
      <p>Número de mapas de sitio en este índice:
        <xsl:value-of select="count(sitemap:sitemapindex/sitemap:sitemap)"/>
      </p>
    </div>
    <table class="sitemap index">
      <thead>
        <tr>
          <th>URL del mapa del sitio</th>
          <th>Última fecha de modificación</th>
        </tr>
      </thead>
      <tbody>
        <xsl:apply-templates select="sitemap:sitemapindex/sitemap:sitemap"/>
      </tbody>
    </table>
  </xsl:template>

  <!-- sitemapTable template -->
  <xsl:template name="sitemapTable">
    <div id="information">
      <p>Cantidad de URL en este mapa del sitio:
        <xsl:value-of select="count(sitemap:urlset/sitemap:url)"/>
      </p>
    </div>
    <table class="sitemap">
      <thead>
        <tr>
          <th>Ubicacion de URL</th>
          <th>Última fecha de modificación</th>
          <th>Frecuencia de cambio</th>
          <th>Prioridad</th>
          <!-- Show this header only if xhtml:link elements are present -->
          <xsl:if test="sitemap:urlset/sitemap:url/xhtml:link">
            <th>Conjunto de traducción</th>
          </xsl:if>
          <!-- Show this header only if image:image elements are present -->
          <xsl:if test="sitemap:urlset/sitemap:url/image:image">
            <th>Imágenes</th>
          </xsl:if>
        </tr>
      </thead>
      <tbody>
        <xsl:apply-templates select="sitemap:urlset/sitemap:url"/>
      </tbody>
    </table>
  </xsl:template>

  <!-- sitemap:sitemap template -->
  <xsl:template match="sitemap:sitemap">
    <tr>
      <td>
        <xsl:variable name="sitemap_location">
          <xsl:value-of select="sitemap:loc"/>
        </xsl:variable>
        <a href="{$sitemap_location}">
          <xsl:value-of select="$sitemap_location"/>
        </a>
      </td>
      <td>
        <xsl:value-of select="sitemap:lastmod"/>
      </td>
    </tr>
  </xsl:template>

  <!-- sitemap:url template -->
  <xsl:template match="sitemap:url">
    <tr>
      <td>
        <xsl:variable name="url_location">
          <xsl:value-of select="sitemap:loc"/>
        </xsl:variable>
        <a href="{$url_location}">
          <xsl:value-of select="$url_location"/>
        </a>
      </td>
      <td>
        <xsl:value-of select="sitemap:lastmod"/>
      </td>
      <td>
        <xsl:value-of select="sitemap:changefreq"/>
      </td>
      <td>
        <xsl:choose>
          <!-- If priority is not defined, show the default value of 0.5 -->
          <xsl:when test="sitemap:priority">
            <xsl:value-of select="sitemap:priority"/>
          </xsl:when>
          <xsl:otherwise>0.5</xsl:otherwise>
        </xsl:choose>
      </td>
      <!-- Show this column only if xhtml:link elements are present -->
      <xsl:if test="/sitemap:urlset/sitemap:url/xhtml:link">
        <td>
          <xsl:if test="xhtml:link">
            <ul class="translation-set">
              <xsl:apply-templates select="xhtml:link"/>
            </ul>
          </xsl:if>
        </td>
      </xsl:if>
      <!-- Show this column only if image:image elements are present -->
      <xsl:if test="/sitemap:urlset/sitemap:url/image:image">
        <td>
          <xsl:if test="image:image">
            <ul class="images">
              <xsl:apply-templates select="image:image"/>
            </ul>
          </xsl:if>
        </td>
      </xsl:if>
    </tr>
  </xsl:template>

  <!-- xhtml:link template -->
  <xsl:template match="xhtml:link">
    <xsl:variable name="url_location">
      <xsl:value-of select="@href"/>
    </xsl:variable>
    <li>
      <span>
        <xsl:value-of select="@hreflang"/>
      </span>
      <a href="{$url_location}">
        <xsl:value-of select="$url_location"/>
      </a>
    </li>
  </xsl:template>

  <!-- image:image template -->
  <xsl:template match="image:image">
    <xsl:variable name="image_location">
      <xsl:value-of select="image:loc"/>
    </xsl:variable>
    <xsl:variable name="image_title">
      <xsl:value-of select="image:title"/>
    </xsl:variable>
    <li>
      <a href="{$image_location}" title="{$image_title}">
        <xsl:choose>
          <xsl:when test="image:caption">
            <xsl:value-of select="image:caption"/>
          </xsl:when>
          <xsl:otherwise>
            <xsl:value-of select="$image_location"/>
          </xsl:otherwise>
        </xsl:choose>
      </a>
    </li>
  </xsl:template>

</xsl:stylesheet>

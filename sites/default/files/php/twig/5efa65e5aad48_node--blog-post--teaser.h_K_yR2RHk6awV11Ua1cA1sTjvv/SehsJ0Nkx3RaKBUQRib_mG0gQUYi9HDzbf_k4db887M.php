<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post--teaser.html.twig */
class __TwigTemplate_8c4b15d9c50edf02ff0a21175caa417d2c7693166212a78501ff56006d7a8390 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 69, "if" => 85, "trans" => 90];
        $filters = ["clean_class" => 71, "date" => 79, "escape" => 80, "without" => 146];
        $functions = ["attach_library" => 80];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'trans'],
                ['clean_class', 'date', 'escape', 'without'],
                ['attach_library']
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        // line 69
        $context["classes"] = [0 => "node", 1 => ("node--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 71
($context["node"] ?? null), "bundle", [])))), 2 => (($this->getAttribute(        // line 72
($context["node"] ?? null), "isPromoted", [], "method")) ? ("node--promoted") : ("")), 3 => (($this->getAttribute(        // line 73
($context["node"] ?? null), "isSticky", [], "method")) ? ("node--sticky") : ("")), 4 => (( !$this->getAttribute(        // line 74
($context["node"] ?? null), "isPublished", [], "method")) ? ("node--unpublished") : ("")), 5 => ((        // line 75
($context["view_mode"] ?? null)) ? (("node--view-mode-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : ("")), 6 => "clearfix", 7 => "container"];
        // line 79
        $context["date"] = twig_date_format_filter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute(($context["node"] ?? null), "created", []), "value", [])), "d.m.Y");
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("classy/node"), "html", null, true);
        echo "
<div class=\"article-wrapper\">
  <article";
        // line 82
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    <div class=\"row article-row \">
      <div class=\"title-row-for-mobile col-sm-12\">
        ";
        // line 85
        if (($context["display_submitted"] ?? null)) {
            // line 86
            echo "          <div class=\"node__meta\">
            ";
            // line 87
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "

            <div";
            // line 89
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null)), "html", null, true);
            echo ">
              ";
            // line 90
            echo t("@date", array("@date" => ($context["date"] ?? null), ));
            // line 91
            echo "
              ";
            // line 92
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_blog_category", []), "#object", [], "array")) {
                // line 93
                echo "                / ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_blog_category", [])), "html", null, true);
                echo "
              ";
            }
            // line 95
            echo "            </div>
            ";
            // line 96
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 99
        echo "
        ";
        // line 100
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "

        ";
        // line 102
        if ( !($context["page"] ?? null)) {
            // line 103
            echo "          <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node_blog_post_title"], "method")), "html", null, true);
            echo ">
            <a href=\"";
            // line 104
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
          </h2>
        ";
        }
        // line 107
        echo "
        ";
        // line 108
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
      </div>

      <div class=\"col-md-7 col-xl-6 blog-main-image-row\">
        <div>
          ";
        // line 113
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_blog_media_main_image", [])), "html", null, true);
        echo "
        </div>
      </div>

      <div class=\"col-md-5 col-xl-5 offset-xl-1\">
        <div class=\"title-row\">
          ";
        // line 119
        if (($context["display_submitted"] ?? null)) {
            // line 120
            echo "            <div class=\"node__meta col-10\">
              ";
            // line 121
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_picture"] ?? null)), "html", null, true);
            echo "

              <div";
            // line 123
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["author_attributes"] ?? null)), "html", null, true);
            echo ">
                ";
            // line 124
            echo t("@date", array("@date" => ($context["date"] ?? null), ));
            // line 125
            echo "
                ";
            // line 126
            if ($this->getAttribute($this->getAttribute(($context["content"] ?? null), "field_blog_category", []), "#object", [], "array")) {
                // line 127
                echo "                  / ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_blog_category", [])), "html", null, true);
                echo "
                ";
            }
            // line 129
            echo "              </div>
              ";
            // line 130
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["metadata"] ?? null)), "html", null, true);
            echo "
            </div>
          ";
        }
        // line 133
        echo "
          ";
        // line 134
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null)), "html", null, true);
        echo "

          ";
        // line 136
        if ( !($context["page"] ?? null)) {
            // line 137
            echo "            <h2";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => "node_blog_post_title"], "method")), "html", null, true);
            echo ">
              <a href=\"";
            // line 138
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null)), "html", null, true);
            echo "\" rel=\"bookmark\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</a>
            </h2>
          ";
        }
        // line 141
        echo "
          ";
        // line 142
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null)), "html", null, true);
        echo "
        </div>

        <div";
        // line 145
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_attributes"] ?? null), "addClass", [0 => "node__content", 1 => "clearfix"], "method")), "html", null, true);
        echo ">
          ";
        // line 146
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_blog_media_main_image", "field_blog_category"), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </article>
</div>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  226 => 146,  222 => 145,  216 => 142,  213 => 141,  205 => 138,  200 => 137,  198 => 136,  193 => 134,  190 => 133,  184 => 130,  181 => 129,  175 => 127,  173 => 126,  170 => 125,  168 => 124,  164 => 123,  159 => 121,  156 => 120,  154 => 119,  145 => 113,  137 => 108,  134 => 107,  126 => 104,  121 => 103,  119 => 102,  114 => 100,  111 => 99,  105 => 96,  102 => 95,  96 => 93,  94 => 92,  91 => 91,  89 => 90,  85 => 89,  80 => 87,  77 => 86,  75 => 85,  69 => 82,  64 => 80,  62 => 79,  60 => 75,  59 => 74,  58 => 73,  57 => 72,  56 => 71,  55 => 69,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post--teaser.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/modules/custom/d_blog/templates/node--blog-post--teaser.html.twig");
    }
}

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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig */
class __TwigTemplate_bbe3439e7ab971b721c609e8f7b14bcb95cf32ea14d3475f2a0e0b3851f8d7fa extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'featured' => [$this, 'block_featured'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 70, "if" => 97, "include" => 145];
        $filters = ["t" => 69, "escape" => 100];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'include'],
                ['t', 'escape'],
                []
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
        // line 67
        echo "<div id=\"page-wrapper\" class=\"page-wrapper\">
  <header id=\"header\" class=\"header\" role=\"banner\"
          aria-label=\"";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Site header"));
        echo "\">
    ";
        // line 70
        $this->displayBlock('head', $context, $blocks);
        // line 95
        echo "  </header>

  ";
        // line 97
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", [])) {
            // line 98
            echo "    <div class=\"highlighted\">
      <aside class=\"container section clearfix\" role=\"complementary\">
        ";
            // line 100
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "highlighted", [])), "html", null, true);
            echo "
      </aside>
    </div>
  ";
        }
        // line 104
        echo "  ";
        if ($this->getAttribute(($context["page"] ?? null), "featured_top", [])) {
            // line 105
            echo "    ";
            $this->displayBlock('featured', $context, $blocks);
            // line 113
            echo "  ";
        }
        // line 114
        echo "
  ";
        // line 115
        if ($this->getAttribute(($context["page"] ?? null), "admin_tabs", [])) {
            // line 116
            echo "    ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "admin_tabs", [])), "html", null, true);
            echo "
  ";
        }
        // line 118
        echo "  <div id=\"main-wrapper\" class=\"layout-main-wrapper clearfix\">
    ";
        // line 119
        $this->displayBlock('content', $context, $blocks);
        // line 134
        echo "  </div>
  ";
        // line 135
        if ((($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", []) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])) || $this->getAttribute(($context["page"] ?? null), "featured_bottom_third", []))) {
            // line 136
            echo "    <div class=\"featured-bottom\">
      <aside class=\"container clearfix\" role=\"complementary\">
        ";
            // line 138
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_first", [])), "html", null, true);
            echo "
        ";
            // line 139
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_second", [])), "html", null, true);
            echo "
        ";
            // line 140
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_bottom_third", [])), "html", null, true);
            echo "
      </aside>
    </div>
  ";
        }
        // line 144
        echo "
  ";
        // line 145
        $this->loadTemplate("@droopler_theme/includes/footer.html.twig", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig", 145)->display($context);
        // line 146
        echo "</div>
";
    }

    // line 70
    public function block_head($context, array $blocks = [])
    {
        // line 71
        echo "      <nav";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["navbar_attributes"] ?? null), "addClass", [0 => "navbar-wrapper"], "method")), "html", null, true);
        echo ">
        <div class=\"container no-padding-md\">
          <div class=\"navbar-brand d-flex align-items-center\">
            ";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "header", [])), "html", null, true);
        echo "
          </div>
          <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbar-nav\" aria-controls=\"navbar-nav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
            <span class=\"navbar-toggler-icon\"></span>
          </button>
          <nav class=\"navbar navbar-expand-lg main-navbar px-0 collapse ml-auto flex-column d-lg-flex\" id=\"navbar-nav\">
            <div class=\"navbar-inner d-flex\">
              ";
        // line 81
        if ($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])) {
            // line 82
            echo "                <div class=\"secondary-menu-region\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "secondary_menu", [])), "html", null, true);
            echo "</div>
              ";
        }
        // line 84
        echo "              ";
        if ($this->getAttribute(($context["page"] ?? null), "primary_menu", [])) {
            // line 85
            echo "                <div class=\"menu-region\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "primary_menu", [])), "html", null, true);
            echo "</div>
              ";
        }
        // line 87
        echo "              ";
        if ($this->getAttribute(($context["page"] ?? null), "lang_menu", [])) {
            // line 88
            echo "                <div class=\"lang-region\">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "lang_menu", [])), "html", null, true);
            echo "</div>
              ";
        }
        // line 90
        echo "            </div>
          </nav>
        </div>
      </nav>
    ";
    }

    // line 105
    public function block_featured($context, array $blocks = [])
    {
        // line 106
        echo "      <div class=\"featured-top\">
        <aside class=\"featured-top__inner section container clearfix\"
               role=\"complementary\">
          ";
        // line 109
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "featured_top", [])), "html", null, true);
        echo "
        </aside>
      </div>
    ";
    }

    // line 119
    public function block_content($context, array $blocks = [])
    {
        // line 120
        echo "      ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_top_content", [])), "html", null, true);
        echo "
      <div";
        // line 121
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_attributes"] ?? null)), "html", null, true);
        echo ">
        <div class=\"row clearfix\">
          ";
        // line 123
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
          <main";
        // line 124
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_content_attributes"] ?? null)), "html", null, true);
        echo ">
            <section class=\"section\">
              <a id=\"main-content\" tabindex=\"-1\"></a>
              ";
        // line 127
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
            </section>
          </main>
        </div>
      </div>
      ";
        // line 132
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "page_bottom_content", [])), "html", null, true);
        echo "
    ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 132,  237 => 127,  231 => 124,  227 => 123,  222 => 121,  217 => 120,  214 => 119,  206 => 109,  201 => 106,  198 => 105,  190 => 90,  184 => 88,  181 => 87,  175 => 85,  172 => 84,  166 => 82,  164 => 81,  154 => 74,  147 => 71,  144 => 70,  139 => 146,  137 => 145,  134 => 144,  127 => 140,  123 => 139,  119 => 138,  115 => 136,  113 => 135,  110 => 134,  108 => 119,  105 => 118,  99 => 116,  97 => 115,  94 => 114,  91 => 113,  88 => 105,  85 => 104,  78 => 100,  74 => 98,  72 => 97,  68 => 95,  66 => 70,  62 => 69,  58 => 67,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/layout/page.html.twig");
    }
}

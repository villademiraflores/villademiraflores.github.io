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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/product/page--views--products-list.html.twig */
class __TwigTemplate_5bc2d5e7e6b51f73bfcb010f50ab44ce976982f0b4dc5aef7cc00601c69fec40 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["include" => 71, "if" => 85];
        $filters = ["escape" => 76, "trans" => 94];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['include', 'if'],
                ['escape', 'trans'],
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

    protected function doGetParent(array $context)
    {
        // line 67
        return "@droopler_theme/layout/page.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $this->parent = $this->loadTemplate("@droopler_theme/layout/page.html.twig", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/product/page--views--products-list.html.twig", 67);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 69
    public function block_content($context, array $blocks = [])
    {
        // line 70
        echo "
  ";
        // line 71
        $this->loadTemplate("@droopler_theme/misc/listing-header.html.twig", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/product/page--views--products-list.html.twig", 71)->display(twig_array_merge($context, ["header_class" => "products-header-wrapper", "title" => $this->getAttribute(        // line 73
($context["page"] ?? null), "#title", [], "array")]));
        // line 75
        echo "
  <div";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["main_attributes"] ?? null)), "html", null, true);
        echo ">
    <div class=\"row clearfix\">
    ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "breadcrumb", [])), "html", null, true);
        echo "
      <main class=\"main-content\">
        <section class=\"section\">
          <a id=\"main-content\" tabindex=\"-1\"></a>
          <div class=\"container\">
            <div class=\"row\">
              <div class=\"col-lg-3 filters\">
                ";
        // line 85
        if ($this->getAttribute(($context["page"] ?? null), "facets_left_top", [])) {
            // line 86
            echo "                  ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "facets_left_top", [])), "html", null, true);
            echo "
                ";
        }
        // line 88
        echo "                ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "facets_left", [])), "html", null, true);
        echo "
              </div>
              <div class=\"col-lg-9 product-listing\">
                <div class=\"top-product-info row\">
                  <div class=\"d-none d-lg-block col-sm-6 col-lg-8 product-item-counter\">
                    ";
        // line 93
        if (($context["pager_total_items"] ?? null)) {
            // line 94
            echo "                      <strong>";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager_total_items"] ?? null)), "html", null, true);
            echo " </strong> ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Products"));
            echo "
                    ";
        }
        // line 96
        echo "                  </div>
                  <div class=\"col-lg-4 top-product-info-sort-wrapper\">
                      ";
        // line 98
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "facets_top", [])), "html", null, true);
        echo "
                  </div>
                </div>

                ";
        // line 102
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "content", [])), "html", null, true);
        echo "
              </div>
            </div>
          </div>
        </section>
      </main>
    </div>
  </div>

";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/product/page--views--products-list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 102,  122 => 98,  118 => 96,  110 => 94,  108 => 93,  99 => 88,  93 => 86,  91 => 85,  81 => 78,  76 => 76,  73 => 75,  71 => 73,  70 => 71,  67 => 70,  64 => 69,  54 => 67,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/product/page--views--products-list.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/product/page--views--products-list.html.twig");
    }
}

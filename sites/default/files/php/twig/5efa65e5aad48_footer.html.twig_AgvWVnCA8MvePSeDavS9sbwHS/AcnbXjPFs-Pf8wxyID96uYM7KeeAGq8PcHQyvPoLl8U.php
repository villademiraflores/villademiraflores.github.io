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

/* @droopler_theme/includes/footer.html.twig */
class __TwigTemplate_68149b5f8ef88959c45df3787132079c62048703381df8464b0a05cb905ecdfc extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'footer' => [$this, 'block_footer'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["block" => 38, "if" => 40, "for" => 42, "set" => 44];
        $filters = ["escape" => 59, "length" => 43];
        $functions = ["create_attribute" => 49];

        try {
            $this->sandbox->checkSecurity(
                ['block', 'if', 'for', 'set'],
                ['escape', 'length'],
                ['create_attribute']
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
        // line 37
        echo "<footer class=\"site-footer\">
  ";
        // line 38
        $this->displayBlock('footer', $context, $blocks);
        // line 58
        echo "  <div class=\"bottom-footer\">
    ";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), "footer_main", [])), "html", null, true);
        echo "
  </div>
</footer>
";
    }

    // line 38
    public function block_footer($context, array $blocks = [])
    {
        // line 39
        echo "    <div class=\"container\">
      ";
        // line 40
        if (((($this->getAttribute(($context["page"] ?? null), "footer_first", []) || $this->getAttribute(($context["page"] ?? null), "footer_second", [])) || $this->getAttribute(($context["page"] ?? null), "footer_third", [])) || $this->getAttribute(($context["page"] ?? null), "footer_fourth", []))) {
            // line 41
            echo "        <div class=\"site-footer-blocks row\">
          ";
            // line 42
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["filled_regions"] ?? null));
            foreach ($context['_seq'] as $context["i"] => $context["region"]) {
                // line 43
                echo "            ";
                if ((twig_length_filter($this->env, ($context["filled_regions"] ?? null)) == ($context["i"] + 1))) {
                    // line 44
                    echo "              ";
                    $context["classes"] = (((($context["i"] == 0) || ($context["i"] % 2 == 1))) ? ("col") : ([0 => "col-6", 1 => "col-xl"]));
                    // line 45
                    echo "            ";
                } else {
                    // line 46
                    echo "              ";
                    $context["classes"] = [0 => "col-6", 1 => "col-xl-2"];
                    // line 47
                    echo "            ";
                }
                // line 48
                echo "
            ";
                // line 49
                $context["footer_attributes"] = $this->env->getExtension('Drupal\Core\Template\TwigExtension')->createAttribute();
                // line 50
                echo "            <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["footer_attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
                echo ">
              ";
                // line 51
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["page"] ?? null), $context["region"], [], "array")), "html", null, true);
                echo "
            </div>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['i'], $context['region'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 54
            echo "        </div>
      ";
        }
        // line 56
        echo "    </div>
  ";
    }

    public function getTemplateName()
    {
        return "@droopler_theme/includes/footer.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 56,  121 => 54,  112 => 51,  107 => 50,  105 => 49,  102 => 48,  99 => 47,  96 => 46,  93 => 45,  90 => 44,  87 => 43,  83 => 42,  80 => 41,  78 => 40,  75 => 39,  72 => 38,  64 => 59,  61 => 58,  59 => 38,  56 => 37,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "@droopler_theme/includes/footer.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/includes/footer.html.twig");
    }
}

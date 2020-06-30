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

/* profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-p-reference-content.html.twig */
class __TwigTemplate_2d18533266d03e23d2a029d3d18e4cf2d7e55eb1f22561004d94e16771d9502d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 42, "if" => 74, "for" => 86];
        $filters = ["clean_class" => 44, "length" => 74, "escape" => 85];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'for'],
                ['clean_class', 'length', 'escape'],
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
        // line 40
        echo "
";
        // line 42
        $context["classes"] = [0 => "field", 1 => ("field--name-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 44
($context["field_name"] ?? null)))), 2 => ("field--type-" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(        // line 45
($context["field_type"] ?? null)))), 3 => ("field--label-" . $this->sandbox->ensureToStringAllowed(        // line 46
($context["label_display"] ?? null)))];
        // line 50
        $context["title_classes"] = [0 => "field__label", 1 => (((        // line 52
($context["label_display"] ?? null) == "visually_hidden")) ? ("visually-hidden") : (""))];
        // line 55
        $context["field_classes"] = [0 => "d-flex", 1 => "flex-wrap", 2 => "field--wrapper"];
        // line 60
        $context["item_classes"] = [0 => "d-flex", 1 => "field__item--wrapper", 2 => "col-lg-3", 3 => "col-sm-6", 4 => "col-xs-12"];
        // line 67
        echo "
";
        // line 68
        $context["justify"] = [0 => "justify-content-between"];
        // line 71
        $context["spacing"] = [];
        // line 74
        if ((twig_length_filter($this->env, ($context["items"] ?? null)) < 4)) {
            // line 75
            echo "    ";
            $context["justify"] = [0 => "justify-content-center"];
            // line 78
            echo "    ";
            $context["spacing"] = [];
        }
        // line 82
        echo "
";
        // line 83
        if (($context["label_hidden"] ?? null)) {
            // line 84
            echo "    ";
            if (($context["multiple"] ?? null)) {
                // line 85
                echo "        <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "field__items", 1 => ($context["field_classes"] ?? null), 2 => ($context["justify"] ?? null)], "method")), "html", null, true);
                echo ">
            ";
                // line 86
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 87
                    echo "                <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null), 1 => ($context["spacing"] ?? null), 2 => "field__item"], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                    echo "</div>
            ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 89
                echo "        </div>
    ";
            } else {
                // line 91
                echo "        ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 92
                    echo "            <div";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => "field__item", 1 => ($context["field_classes"] ?? null), 2 => ($context["justify"] ?? null)], "method")), "html", null, true);
                    echo ">";
                    echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                    echo "</div>
        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 94
                echo "    ";
            }
        } else {
            // line 96
            echo "    <div";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
            echo ">
        <div";
            // line 97
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["title_attributes"] ?? null), "addClass", [0 => ($context["title_classes"] ?? null)], "method")), "html", null, true);
            echo ">";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["label"] ?? null)), "html", null, true);
            echo "</div>
        ";
            // line 98
            if (($context["multiple"] ?? null)) {
                // line 99
                echo "        <div ";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["field_classes"] ?? null), 1 => ($context["justify"] ?? null), 2 => "field__items"], "method")), "html", null, true);
                echo "\">
            ";
            }
            // line 101
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 102
                echo "                <div";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($this->getAttribute($context["item"], "attributes", []), "addClass", [0 => ($context["item_classes"] ?? null), 1 => ($context["spacing"] ?? null), 2 => "field__item"], "method")), "html", null, true);
                echo ">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute($context["item"], "content", [])), "html", null, true);
                echo "</div>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 104
            echo "            ";
            if (($context["multiple"] ?? null)) {
                // line 105
                echo "        </div>
        ";
            }
            // line 107
            echo "    </div>
";
        }
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-p-reference-content.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  180 => 107,  176 => 105,  173 => 104,  162 => 102,  157 => 101,  151 => 99,  149 => 98,  143 => 97,  138 => 96,  134 => 94,  123 => 92,  118 => 91,  114 => 89,  103 => 87,  99 => 86,  94 => 85,  91 => 84,  89 => 83,  86 => 82,  82 => 78,  79 => 75,  77 => 74,  75 => 71,  73 => 68,  70 => 67,  68 => 60,  66 => 55,  64 => 52,  63 => 50,  61 => 46,  60 => 45,  59 => 44,  58 => 42,  55 => 40,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-p-reference-content.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/modules/custom/d_p_reference_content/templates/field--paragraph--field-d-p-reference-content.html.twig");
    }
}

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

/* profiles/contrib/droopler/themes/custom/droopler_theme/templates/menu/we-megamenu-li.html.twig */
class __TwigTemplate_6eeef50b837d820e2da60ee8eb3f78d7191a96aa85a63732255b411658ae08a5 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["if" => 9, "set" => 10];
        $filters = ["escape" => 21, "trim" => 32];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape', 'trim'],
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
        // line 8
        echo "
";
        // line 9
        if ($this->getAttribute(($context["attributes"] ?? null), "hasClass", [0 => "dropdown-menu"], "method")) {
            // line 10
            echo "  ";
            $context["attributes"] = $this->getAttribute($this->getAttribute(($context["attributes"] ?? null), "removeClass", [0 => "dropdown-menu"], "method"), "addClass", [0 => "with-submenu"], "method");
        }
        // line 12
        echo "
";
        // line 13
        if (twig_test_empty($this->getAttribute(($context["attributes"] ?? null), "description", []))) {
            // line 14
            echo "  ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeAttribute", [0 => "description"], "method");
        }
        // line 16
        echo "
";
        // line 17
        if (((($this->getAttribute(($context["attributes"] ?? null), "hide", []) - ($context["sub"] ?? null)) - ($context["when"] ?? null)) - twig_test_empty(($context["collapse"] ?? null)))) {
            // line 18
            echo "  ";
            $context["attributes"] = $this->getAttribute(($context["attributes"] ?? null), "removeAttribute", [0 => "hide-sub-when-collapse"], "method");
        }
        // line 20
        echo "
<li ";
        // line 21
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null)), "html", null, true);
        echo ">
  ";
        // line 22
        if (twig_test_empty(($context["href"] ?? null))) {
            // line 23
            echo "    <span data-drupal-link-system-path=\"<front>\" class=\"we-megamenu-nolink\">
      ";
            // line 24
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "

      ";
            // line 26
            if (($context["content"] ?? null)) {
                // line 27
                echo "        <span class=\"d-submenu-toggler\"></span>
      ";
            }
            // line 29
            echo "    </span>
  ";
        } else {
            // line 31
            echo "    <a class=\"we-mega-menu-li\" title=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "description")), "html", null, true);
            echo "\" href=\"";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["href"] ?? null)), "html", null, true);
            echo "\" ";
            if ( !twig_test_empty($this->getAttribute(($context["attributes"] ?? null), "data-target"))) {
                echo " target=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "data-target")), "html", null, true);
                echo "\" ";
            }
            echo ">
      ";
            // line 32
            if (($this->getAttribute(($context["attributes"] ?? null), "data-icon", [], "any", true, true) && twig_trim_filter($this->getAttribute(($context["attributes"] ?? null), "data-icon")))) {
                // line 33
                echo "        <i class=\"";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "data-icon")), "html", null, true);
                echo "\"></i>
      ";
            }
            // line 35
            echo "
      ";
            // line 36
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null)), "html", null, true);
            echo "

      ";
            // line 38
            if (($this->getAttribute(($context["attributes"] ?? null), "data-caption", [], "any", true, true) && twig_trim_filter($this->getAttribute(($context["attributes"] ?? null), "data-caption")))) {
                // line 39
                echo "        <span class=\"we-mega-menu-caption\">";
                echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "data-caption")), "html", null, true);
                echo "</span>
      ";
            }
            // line 41
            echo "
      ";
            // line 42
            if (($context["content"] ?? null)) {
                // line 43
                echo "        <span class=\"d-submenu-toggler\"></span>
      ";
            }
            // line 45
            echo "    </a>
  ";
        }
        // line 47
        echo "  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
</li>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/themes/custom/droopler_theme/templates/menu/we-megamenu-li.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  159 => 47,  155 => 45,  151 => 43,  149 => 42,  146 => 41,  140 => 39,  138 => 38,  133 => 36,  130 => 35,  124 => 33,  122 => 32,  109 => 31,  105 => 29,  101 => 27,  99 => 26,  94 => 24,  91 => 23,  89 => 22,  85 => 21,  82 => 20,  78 => 18,  76 => 17,  73 => 16,  69 => 14,  67 => 13,  64 => 12,  60 => 10,  58 => 9,  55 => 8,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/themes/custom/droopler_theme/templates/menu/we-megamenu-li.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/themes/custom/droopler_theme/templates/menu/we-megamenu-li.html.twig");
    }
}

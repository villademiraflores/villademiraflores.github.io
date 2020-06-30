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

/* profiles/contrib/droopler/modules/custom/d_p_form/templates/paragraph--d-p-form.html.twig */
class __TwigTemplate_b606911a1fd0f95741ae0b2b157b7febbe8a15062293be0a05fae2a49b7374c6 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'background' => [$this, 'block_background'],
            'content' => [$this, 'block_content'],
            'form' => [$this, 'block_form'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "if" => 52, "block" => 68, "include" => 73];
        $filters = ["clean_class" => 43, "default" => 50, "escape" => 69];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block', 'include'],
                ['clean_class', 'default', 'escape'],
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
        // line 41
        $context["classes"] = [0 => "paragraph", 1 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 43
($context["paragraph"] ?? null), "bundle", [])))), 2 => ((        // line 44
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 46
        $context["paragraph_classes"] = [0 => "paragraph-d-form"];
        // line 49
        echo "
";
        // line 50
        $context["d_p_form_placement"] = (((isset($context["d_p_form_placement"]) || array_key_exists("d_p_form_placement", $context))) ? (_twig_default_filter($this->sandbox->ensureToStringAllowed(($context["d_p_form_placement"] ?? null)), "bottom")) : ("bottom"));
        // line 51
        echo "
";
        // line 52
        if ((($context["d_p_form_placement"] ?? null) == "bottom")) {
            // line 53
            echo "  ";
            $context["row_classes"] = "";
            // line 54
            echo "  ";
            $context["content_classes"] = "col-md-8";
            // line 55
            echo "  ";
            $context["form_classes"] = "col-md-8";
        }
        // line 57
        if ((($context["d_p_form_placement"] ?? null) == "right")) {
            // line 58
            echo "  ";
            $context["row_classes"] = "";
            // line 59
            echo "  ";
            $context["content_classes"] = "col-md-5 col-12";
            // line 60
            echo "  ";
            $context["form_classes"] = "col-md-7 col-12";
        }
        // line 62
        if ((($context["d_p_form_placement"] ?? null) == "left")) {
            // line 63
            echo "  ";
            $context["row_classes"] = "";
            // line 64
            echo "  ";
            $context["content_classes"] = "col-md-5 col-12 order-1 order-md-2";
            // line 65
            echo "  ";
            $context["form_classes"] = "col-md-7 col-12 order-md-1 order-2";
        }
        // line 67
        echo "
";
        // line 68
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 69
        echo "  <section ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
        echo ">
    <div";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
      <div ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["paragraph_attributes"] ?? null), "addClass", [0 => ($context["paragraph_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        ";
        // line 72
        $this->displayBlock('background', $context, $blocks);
        // line 77
        echo "        <div class=\"content-wrapper\">
          <div class=\"container\">
            <div class=\"row justify-content-center ";
        // line 79
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["d_p_form_placement"] ?? null)), "html", null, true);
        echo " ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["row_classes"] ?? null)), "html", null, true);
        echo "\">
              <div class=\"content ";
        // line 80
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content_classes"] ?? null)), "html", null, true);
        echo "\">
                ";
        // line 81
        $this->displayBlock('content', $context, $blocks);
        // line 84
        echo "              </div>
              <div class=\"form ";
        // line 85
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["form_classes"] ?? null)), "html", null, true);
        echo "\">
                ";
        // line 86
        $this->displayBlock('form', $context, $blocks);
        // line 89
        echo "              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
";
    }

    // line 72
    public function block_background($context, array $blocks = [])
    {
        // line 73
        echo "          ";
        $this->loadTemplate("@d_media/d-background-media.html.twig", "profiles/contrib/droopler/modules/custom/d_p_form/templates/paragraph--d-p-form.html.twig", 73)->display(twig_to_array(["content" => $this->getAttribute(        // line 74
($context["content"] ?? null), "group_d_form_background", [])]));
        // line 76
        echo "        ";
    }

    // line 81
    public function block_content($context, array $blocks = [])
    {
        // line 82
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "group_d_form_content", [])), "html", null, true);
        echo "
                ";
    }

    // line 86
    public function block_form($context, array $blocks = [])
    {
        // line 87
        echo "                  ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "group_d_form_fields", [])), "html", null, true);
        echo "
                ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_form/templates/paragraph--d-p-form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  193 => 87,  190 => 86,  183 => 82,  180 => 81,  176 => 76,  174 => 74,  172 => 73,  169 => 72,  158 => 89,  156 => 86,  152 => 85,  149 => 84,  147 => 81,  143 => 80,  137 => 79,  133 => 77,  131 => 72,  127 => 71,  123 => 70,  118 => 69,  112 => 68,  109 => 67,  105 => 65,  102 => 64,  99 => 63,  97 => 62,  93 => 60,  90 => 59,  87 => 58,  85 => 57,  81 => 55,  78 => 54,  75 => 53,  73 => 52,  70 => 51,  68 => 50,  65 => 49,  63 => 46,  61 => 44,  60 => 43,  59 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_form/templates/paragraph--d-p-form.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/modules/custom/d_p_form/templates/paragraph--d-p-form.html.twig");
    }
}

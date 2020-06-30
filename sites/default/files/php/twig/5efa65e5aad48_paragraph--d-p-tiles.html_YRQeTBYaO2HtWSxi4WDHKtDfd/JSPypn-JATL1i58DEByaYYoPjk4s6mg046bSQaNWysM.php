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

/* profiles/contrib/droopler/modules/custom/d_p_tiles/templates/paragraph--d-p-tiles.html.twig */
class __TwigTemplate_facc87d06842110de5add6f8979da583f483a3828bb8fcc2d14f6a53c738bf19 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "block" => 57];
        $filters = ["clean_class" => 45, "escape" => 58];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape'],
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
        $context["classes"] = [0 => "paragraph", 1 => "tiles", 2 => "clearfix", 3 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 45
($context["paragraph"] ?? null), "bundle", [])))), 4 => ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 48
        $context["wrapper_classes"] = [0 => ((((twig_test_empty($this->getAttribute($this->getAttribute(        // line 49
($context["paragraph"] ?? null), "field_d_media_icon", []), "value", [])) && twig_test_empty($this->getAttribute($this->getAttribute(        // line 50
($context["paragraph"] ?? null), "field_d_main_title", []), "value", []))) && twig_test_empty($this->getAttribute($this->getAttribute(        // line 51
($context["paragraph"] ?? null), "field_d_long_text", []), "value", [])))) ? ("paragraph-top-dark") : ("paragraph-top-light")), 1 => "paragraph-bottom-dark"];
        // line 54
        $context["paragraph_classes"] = [0 => "d-p-tiles"];
        // line 57
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 58
        echo "<section ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["wrapper_attributes"] ?? null), "addClass", [0 => ($context["wrapper_classes"] ?? null)], "method")), "html", null, true);
        echo ">
  <div";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    <div ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["paragraph_attributes"] ?? null), "addClass", [0 => ($context["paragraph_classes"] ?? null)], "method")), "html", null, true);
        echo ">
      ";
        // line 61
        $this->displayBlock('content', $context, $blocks);
        // line 64
        echo "    </div>
  </div>
</section>
";
    }

    // line 61
    public function block_content($context, array $blocks = [])
    {
        // line 62
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_tiles/templates/paragraph--d-p-tiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  99 => 62,  96 => 61,  89 => 64,  87 => 61,  83 => 60,  79 => 59,  74 => 58,  68 => 57,  66 => 54,  64 => 51,  63 => 50,  62 => 49,  61 => 48,  59 => 46,  58 => 45,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_tiles/templates/paragraph--d-p-tiles.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/modules/custom/d_p_tiles/templates/paragraph--d-p-tiles.html.twig");
    }
}

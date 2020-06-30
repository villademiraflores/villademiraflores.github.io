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

/* profiles/contrib/droopler/modules/custom/d_p_side_embed/templates/paragraph--d-p-side-embed.html.twig */
class __TwigTemplate_7ea9af77a230f9bb926baa1c4c61073d352078c426f16300e5a645338b667c05 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "block" => 69];
        $filters = ["clean_class" => 45, "escape" => 70, "raw" => 74, "without" => 78];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'raw', 'without'],
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
        $context["classes"] = [0 => "paragraph", 1 => "container-fluid", 2 => "d-p-side-embed", 3 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 45
($context["paragraph"] ?? null), "bundle", [])))), 4 => ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 48
        $context["d_p_side_embed_wrapper_classes"] = [0 => "clearfix", 1 => "d-p-side-embed-wrapper", 2 => "row", 3 => ("embed-side-" . $this->sandbox->ensureToStringAllowed(        // line 52
($context["embed_side"] ?? null)))];
        // line 54
        echo "
";
        // line 55
        $context["embed_side_classes"] = [0 => "d-p-side-embed-embed", 1 => (((        // line 57
($context["embed_side"] ?? null) == "full")) ? ("col-12") : ("col-md-6"))];
        // line 59
        $context["content_side_classes"] = [0 => "d-p-side-embed-content", 1 => (((        // line 61
($context["embed_side"] ?? null) == "full")) ? ("col-md-6 col-12 p-md-0 d-flex justify-content-end") : ("col-md-6")), 2 => "p-md-0"];
        // line 64
        $context["content_fields_classes"] = [0 => "d-p-side-embed-content-fields", 1 => (((        // line 66
($context["embed_side"] ?? null) == "full")) ? ("d-flex flex-column container-half") : (""))];
        // line 68
        echo "
";
        // line 69
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 70
        echo "<section ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
        echo ">
  <div";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    <div ";
        // line 72
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["d_p_side_embed_wrapper_attributes"] ?? null), "addClass", [0 => ($context["d_p_side_embed_wrapper_classes"] ?? null)], "method")), "html", null, true);
        echo ">
      <div ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["embed_side_attributes"] ?? null), "addClass", [0 => ($context["embed_side_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        ";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->sandbox->ensureToStringAllowed(($context["embed"] ?? null)));
        echo "
      </div>
      <div ";
        // line 76
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_side_attributes"] ?? null), "addClass", [0 => ($context["content_side_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        <div ";
        // line 77
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_fields_attributes"] ?? null), "addClass", [0 => ($context["content_fields_classes"] ?? null)], "method")), "html", null, true);
        echo ">
          ";
        // line 78
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_d_embed"), "html", null, true);
        echo "
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_side_embed/templates/paragraph--d-p-side-embed.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 78,  110 => 77,  106 => 76,  101 => 74,  97 => 73,  93 => 72,  89 => 71,  84 => 70,  78 => 69,  75 => 68,  73 => 66,  72 => 64,  70 => 61,  69 => 59,  67 => 57,  66 => 55,  63 => 54,  61 => 52,  60 => 48,  58 => 46,  57 => 45,  56 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_side_embed/templates/paragraph--d-p-side-embed.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/modules/custom/d_p_side_embed/templates/paragraph--d-p-side-embed.html.twig");
    }
}

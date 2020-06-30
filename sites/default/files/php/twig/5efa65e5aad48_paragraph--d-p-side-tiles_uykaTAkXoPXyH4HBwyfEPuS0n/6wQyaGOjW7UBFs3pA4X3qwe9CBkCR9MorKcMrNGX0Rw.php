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

/* profiles/contrib/droopler/modules/custom/d_p_side_tiles/templates/paragraph--d-p-side-tiles.html.twig */
class __TwigTemplate_620d9d7a23a1ce8e60f24dd061cb604f043162f0722a375ca80a0ece8c291c3c extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "block" => 65];
        $filters = ["clean_class" => 45, "escape" => 67, "without" => 75];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block'],
                ['clean_class', 'escape', 'without'],
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
        $context["classes"] = [0 => "paragraph", 1 => "container-fluid", 2 => "d-p-side-tiles-banner", 3 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 45
($context["paragraph"] ?? null), "bundle", [])))), 4 => ((        // line 46
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 48
        $context["tiles_wrapper_classes"] = [0 => "clearfix", 1 => "d-p-side-tiles-wrapper", 2 => "row", 3 => ("image-side-" . $this->sandbox->ensureToStringAllowed(        // line 52
($context["tiles_side"] ?? null)))];
        // line 54
        $context["images_side_classes"] = [0 => "d-p-side-tiles-images", 1 => "col-md-6"];
        // line 58
        $context["content_side_classes"] = [0 => "d-p-side-tiles-content", 1 => "col-md-6 p-md-0"];
        // line 62
        $context["content_fields_classes"] = [0 => "d-p-side-tiles-content-fields"];
        // line 65
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 66
        echo "
<section ";
        // line 67
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
        echo ">
  <div ";
        // line 68
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    <div ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["tiles_wrapper_attributes"] ?? null), "addClass", [0 => ($context["tiles_wrapper_classes"] ?? null)], "method")), "html", null, true);
        echo ">
      <div ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["images_side_attributes"] ?? null), "addClass", [0 => ($context["images_side_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_d_media_image", [])), "html", null, true);
        echo "
      </div>
      <div ";
        // line 73
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_side_attributes"] ?? null), "addClass", [0 => ($context["content_side_classes"] ?? null)], "method")), "html", null, true);
        echo ">
        <div ";
        // line 74
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content_fields_attributes"] ?? null), "addClass", [0 => ($context["content_fields_classes"] ?? null)], "method")), "html", null, true);
        echo ">
          ";
        // line 75
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_d_media_image"), "html", null, true);
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
        return "profiles/contrib/droopler/modules/custom/d_p_side_tiles/templates/paragraph--d-p-side-tiles.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  107 => 75,  103 => 74,  99 => 73,  94 => 71,  90 => 70,  86 => 69,  82 => 68,  78 => 67,  75 => 66,  69 => 65,  67 => 62,  65 => 58,  63 => 54,  61 => 52,  60 => 48,  58 => 46,  57 => 45,  56 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_side_tiles/templates/paragraph--d-p-side-tiles.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/modules/custom/d_p_side_tiles/templates/paragraph--d-p-side-tiles.html.twig");
    }
}

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

/* profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig */
class __TwigTemplate_125e2237f9ad3404f35bac288de16e7cca6d787c5c6a436f03fb6079b557a702 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'background' => [$this, 'block_background'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "block" => 57, "include" => 63];
        $filters = ["clean_class" => 44, "escape" => 58];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'include'],
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
        $context["classes"] = [0 => "paragraph", 1 => "d-p-side-image-banner", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", [])))), 3 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 47
        $context["paragraph_classes"] = [0 => "d-image", 1 => "h-100"];
        // line 51
        $context["side_image_banner_wrapper_classes"] = [0 => "d-p-side-image-banner-wrapper", 1 => "clearfix", 2 => "position-relative"];
        // line 56
        echo "
";
        // line 57
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 58
        echo "<section ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
        echo ">
  <div";
        // line 59
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
    <div ";
        // line 60
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["d_p_side_image_attributes"] ?? null), "addClass", [0 => ($context["side_image_banner_wrapper_classes"] ?? null)], "method")), "html", null, true);
        echo ">
      <div ";
        // line 61
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["paragraph_attributes"] ?? null), "addClass", [0 => ($context["paragraph_classes"] ?? null), 1 => ($context["image_class"] ?? null)], "method")), "html", null, true);
        echo ">
        ";
        // line 62
        $this->displayBlock('background', $context, $blocks);
        // line 67
        echo "      </div>
      <div class=\"container\">
        <div class=\"row\">
          <div class=\"container-half ";
        // line 70
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["text_class"] ?? null)), "html", null, true);
        echo "\">
            ";
        // line 71
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "group_d_side_image_content", [])), "html", null, true);
        echo "
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
";
    }

    // line 62
    public function block_background($context, array $blocks = [])
    {
        // line 63
        echo "          ";
        $this->loadTemplate("@d_media/d-background-media.html.twig", "profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig", 63)->display(twig_to_array(["content" => $this->getAttribute(        // line 64
($context["content"] ?? null), "group_d_side_image_background", [])]));
        // line 66
        echo "        ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 66,  119 => 64,  117 => 63,  114 => 62,  102 => 71,  98 => 70,  93 => 67,  91 => 62,  87 => 61,  83 => 60,  79 => 59,  74 => 58,  68 => 57,  65 => 56,  63 => 51,  61 => 47,  59 => 45,  58 => 44,  57 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/modules/custom/d_p_side_image/templates/paragraph--d-p-side-image.html.twig");
    }
}

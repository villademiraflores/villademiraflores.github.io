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

/* profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig */
class __TwigTemplate_0c6bed0b0d9f0c074fd0434ff68d8b8e0f5d55a7ef1c0508756cbe68206ac06d extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'background' => [$this, 'block_background'],
            'content' => [$this, 'block_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "block" => 48, "if" => 60, "include" => 51];
        $filters = ["clean_class" => 44, "escape" => 49];
        $functions = ["attach_library" => 61];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'block', 'if', 'include'],
                ['clean_class', 'escape'],
                ['attach_library']
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
        $context["classes"] = [0 => "paragraph", 1 => "d-p-text-block", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", [])))), 3 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 47
        echo "
";
        // line 48
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 49
        echo "  <section ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
        echo ">
    ";
        // line 50
        $this->displayBlock('background', $context, $blocks);
        // line 55
        echo "    <div";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
      ";
        // line 56
        $this->displayBlock('content', $context, $blocks);
        // line 59
        echo "
      ";
        // line 60
        if (($context["with_price"] ?? null)) {
            // line 61
            echo "        ";
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->attachLibrary("d_p/d_p_with_price"), "html", null, true);
            echo "
        <div class=\"with-price-stripe\">
          <div class=\"with-price-wrapper\">
            <div class=\"with-price-data d-flex justify-content-center\">
          <span class=\"with-price-value\">
            <div class=\"spinner-border text-danger\" role=\"status\"><span class=\"sr-only\">Loading...</span></div>
          </span>&nbsp;
              <span class=\"with-price-currency\"></span>
            </div>
            <div class=\"change d-flex align-items-baseline justify-content-center\">
              <span class=\"with-price-arrow\"></span>
              <span class=\"with-price-percentage\"></span>
            </div>
            <div class=\"with-price-timestamp\"></div>
          </div>
        </div>
      ";
        }
        // line 78
        echo "    </div>
  </section>
";
    }

    // line 50
    public function block_background($context, array $blocks = [])
    {
        // line 51
        echo "      ";
        $this->loadTemplate("@d_media/d-background-media.html.twig", "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig", 51)->display(twig_to_array(["content" => $this->getAttribute(        // line 52
($context["content"] ?? null), "group_d_block_background", [])]));
        // line 54
        echo "    ";
    }

    // line 56
    public function block_content($context, array $blocks = [])
    {
        // line 57
        echo "        ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "group_d_block_content", [])), "html", null, true);
        echo "
      ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  131 => 57,  128 => 56,  124 => 54,  122 => 52,  120 => 51,  117 => 50,  111 => 78,  90 => 61,  88 => 60,  85 => 59,  83 => 56,  78 => 55,  76 => 50,  71 => 49,  65 => 48,  62 => 47,  60 => 45,  59 => 44,  58 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-single-text-block.html.twig");
    }
}

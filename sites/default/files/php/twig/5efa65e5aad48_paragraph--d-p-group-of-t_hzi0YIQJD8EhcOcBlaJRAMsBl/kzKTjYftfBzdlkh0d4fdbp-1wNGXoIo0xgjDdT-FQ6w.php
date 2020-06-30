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

/* profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-group-of-text-blocks.html.twig */
class __TwigTemplate_6b5558786d1825c7628e8aeebe79db3de70bfbc6b2270113d77809a4b12c5426 extends \Twig\Template
{
    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = [
            'paragraph' => [$this, 'block_paragraph'],
            'paragraph_content' => [$this, 'block_paragraph_content'],
            'tiles_content' => [$this, 'block_tiles_content'],
            'paragraph_cta_content' => [$this, 'block_paragraph_cta_content'],
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $tags = ["set" => 41, "if" => 48, "block" => 52];
        $filters = ["clean_class" => 44, "render" => 48, "merge" => 49, "escape" => 53, "without" => 57];
        $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if', 'block'],
                ['clean_class', 'render', 'merge', 'escape', 'without'],
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
        $context["classes"] = [0 => "paragraph", 1 => "d-p-group-of-text-blocks", 2 => ("paragraph--type--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed($this->getAttribute(        // line 44
($context["paragraph"] ?? null), "bundle", [])))), 3 => ((        // line 45
($context["view_mode"] ?? null)) ? (("paragraph--view-mode--" . \Drupal\Component\Utility\Html::getClass($this->sandbox->ensureToStringAllowed(($context["view_mode"] ?? null))))) : (""))];
        // line 47
        echo "
";
        // line 48
        if ($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute(($context["content"] ?? null), "field_d_long_text", []))) {
            // line 49
            echo "  ";
            $context["classes"] = twig_array_merge($this->sandbox->ensureToStringAllowed(($context["classes"] ?? null)), [0 => "with-long-text"]);
        }
        // line 51
        echo "
";
        // line 52
        $this->displayBlock('paragraph', $context, $blocks);
    }

    public function block_paragraph($context, array $blocks = [])
    {
        // line 53
        echo "  <section ";
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["wrapper_attributes"] ?? null)), "html", null, true);
        echo ">
    <div";
        // line 54
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method")), "html", null, true);
        echo ">
      ";
        // line 55
        $this->displayBlock('paragraph_content', $context, $blocks);
        // line 60
        echo "      ";
        $this->displayBlock('tiles_content', $context, $blocks);
        // line 67
        echo "      ";
        $this->displayBlock('paragraph_cta_content', $context, $blocks);
        // line 72
        echo "    </div>
  </section>
";
    }

    // line 55
    public function block_paragraph_content($context, array $blocks = [])
    {
        // line 56
        echo "        <div class=\"container d-p-group-of-text-blocks-header-wrapper\">
          ";
        // line 57
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->env->getExtension('Drupal\Core\Template\TwigExtension')->withoutFilter($this->sandbox->ensureToStringAllowed(($context["content"] ?? null)), "field_d_p_tb_block_reference", "field_d_cta_link"), "html", null, true);
        echo "
        </div>
      ";
    }

    // line 60
    public function block_tiles_content($context, array $blocks = [])
    {
        // line 61
        echo "        ";
        if (($this->getAttribute($this->getAttribute(($context["paragraph"] ?? null), "field_d_p_tb_block_reference", []), "isEmpty", [], "method") == false)) {
            // line 62
            echo "          <div class=\"d-p-tiles-wrapper container expandable-content\">
            ";
            // line 63
            echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_d_p_tb_block_reference", [])), "html", null, true);
            echo "
          </div>
        ";
        }
        // line 66
        echo "      ";
    }

    // line 67
    public function block_paragraph_cta_content($context, array $blocks = [])
    {
        // line 68
        echo "        <div class=\"container\">
          ";
        // line 69
        echo $this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed($this->getAttribute(($context["content"] ?? null), "field_d_cta_link", [])), "html", null, true);
        echo "
        </div>
      ";
    }

    public function getTemplateName()
    {
        return "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-group-of-text-blocks.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 69,  139 => 68,  136 => 67,  132 => 66,  126 => 63,  123 => 62,  120 => 61,  117 => 60,  110 => 57,  107 => 56,  104 => 55,  98 => 72,  95 => 67,  92 => 60,  90 => 55,  86 => 54,  81 => 53,  75 => 52,  72 => 51,  68 => 49,  66 => 48,  63 => 47,  61 => 45,  60 => 44,  59 => 41,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Source("", "profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-group-of-text-blocks.html.twig", "/home/rafa/trabajo/acadimgh/web/profiles/contrib/droopler/modules/custom/d_p_text_blocks/templates/paragraph--d-p-group-of-text-blocks.html.twig");
    }
}

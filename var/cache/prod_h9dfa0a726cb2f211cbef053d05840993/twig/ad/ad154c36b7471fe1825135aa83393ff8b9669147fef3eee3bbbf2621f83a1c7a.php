<?php

use Twig\Environment;
use function Shopware\Core\Framework\Adapter\Twig\sw_get_attribute;
use function Shopware\Core\Framework\Adapter\Twig\sw_escape_filter;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* @Storefront/storefront/block/cms-block-image-cover.html.twig */
class __TwigTemplate_cd170d0d8c876c32c031810bc7d128f3b7bc64fcca0d83d2416253e2b55cb93e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'block_image_cover' => [$this, 'block_block_image_cover'],
            'block_image_cover_inner' => [$this, 'block_block_image_cover_inner'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $this->displayBlock('block_image_cover', $context, $blocks);
    }

    public function block_block_image_cover($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 2
        echo "    ";
        $context["element"] = sw_get_attribute($this->env, $this->source, sw_get_attribute($this->env, $this->source, ($context["block"] ?? null), "slots", [], "any", false, false, false, 2), "getSlot", [0 => "image"], "method", false, false, false, 2);
        // line 3
        echo "    ";
        $context["columns"] = 1;
        // line 4
        echo "    
    <div class=\"col-12\" data-cms-element-id=\"";
        // line 5
        echo sw_escape_filter($this->env, sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "id", [], "any", false, false, false, 5), "html", null, true);
        echo "\">
        ";
        // line 6
        $this->displayBlock('block_image_cover_inner', $context, $blocks);
        // line 9
        echo "    </div>
";
    }

    // line 6
    public function block_block_image_cover_inner($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "            ";
        $__internal_compile_0 = null;
        try {
            $__internal_compile_0 =             ((function () use ($context, $blocks) {
                $finder = $this->env->getExtension('Shopware\Core\Framework\Adapter\Twig\Extension\NodeExtension')->getFinder();

                $includeTemplate = $finder->find((("@Storefront/storefront/element/cms-element-" . sw_get_attribute($this->env, $this->source, ($context["element"] ?? null), "type", [], "any", false, false, false, 7)) . ".html.twig"));

                return $this->loadTemplate($includeTemplate ?? null, "@Storefront/storefront/block/cms-block-image-cover.html.twig", 7);
            })());
        } catch (LoaderError $e) {
            // ignore missing template
        }
        if ($__internal_compile_0) {
            $__internal_compile_0->display($context);
        }
        // line 8
        echo "        ";
    }

    public function getTemplateName()
    {
        return "@Storefront/storefront/block/cms-block-image-cover.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  87 => 8,  70 => 7,  66 => 6,  61 => 9,  59 => 6,  55 => 5,  52 => 4,  49 => 3,  46 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "@Storefront/storefront/block/cms-block-image-cover.html.twig", "/var/www/html/vendor/shopware/storefront/Resources/views/storefront/block/cms-block-image-cover.html.twig");
    }
}

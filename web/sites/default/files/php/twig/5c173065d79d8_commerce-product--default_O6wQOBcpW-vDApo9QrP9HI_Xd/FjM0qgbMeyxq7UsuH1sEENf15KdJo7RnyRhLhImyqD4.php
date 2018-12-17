<?php

/* themes/addweb_ecomme/templates/products/commerce-product--default--teaser.html.twig */
class __TwigTemplate_2e620f57537491871cd16268c0cf391560355c1a75ff184a4908e1233e23e46e extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setSourceContext($this->getSourceContext());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 22
        echo "<article";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  <div class=\"summer-product\">";
        // line 24
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["product"] ?? null), "field_featured_image", array()), "html", null, true));
        // line 25
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["product"] ?? null), "variation_field_discount_percentage", array()), "html", null, true));
        // line 26
        echo "<div class=\"product-info\">
      <div class=\"btn-wrap\">";
        // line 28
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["product"] ?? null), "variations", array()), "html", null, true));
        // line 29
        echo "</div>
    </div>
  </div>
</article>
";
    }

    public function getTemplateName()
    {
        return "themes/addweb_ecomme/templates/products/commerce-product--default--teaser.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 29,  55 => 28,  52 => 26,  50 => 25,  48 => 24,  43 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{#
/**
 * @file
 *
 * Default product template.
 *
 * Available variables:
 * - attributes: HTML attributes for the wrapper.
 * - product: The rendered product fields.
 *   Use 'product' to print them all, or print a subset such as
 *   'product.title'. Use the following code to exclude the
 *   printing of a given field:
 *   @code
 *   {{ product|without('title') }}
 *   @endcode
 * - product_entity: The product entity.
 * - product_url: The product URL.
 *
 * @ingroup themeable
 */
#}
<article{{ attributes }}>
  <div class=\"summer-product\">
    {{- product.field_featured_image -}}
    {{- product.variation_field_discount_percentage -}}
    <div class=\"product-info\">
      <div class=\"btn-wrap\">
        {{- product.variations -}}
      </div>
    </div>
  </div>
</article>
", "themes/addweb_ecomme/templates/products/commerce-product--default--teaser.html.twig", "/var/www/html/addweb-ecomme/web/themes/addweb_ecomme/templates/products/commerce-product--default--teaser.html.twig");
    }
}

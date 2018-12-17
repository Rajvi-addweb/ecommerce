<?php

/* themes/addweb_ecomme/templates/views/views-view-unformatted--customer_says--block_1.html.twig */
class __TwigTemplate_62dcb79b470ddbb3cb81739f9558c02e7d9f45876596380b219c8e8b374b9929 extends Twig_Template
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
        $tags = array("if" => 18, "set" => 22, "for" => 25);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'set', 'for'),
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

        // line 18
        if (($context["title"] ?? null)) {
            // line 19
            echo "  <h3>";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true));
            echo "</h3>
";
        }
        // line 21
        echo "
";
        // line 22
        $context["myVal"] = 0;
        // line 23
        echo "
<div class=\"row\">
  ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 26
            echo "    ";
            // line 27
            $context["row_classes"] = array(0 => ((            // line 28
($context["default_row_class"] ?? null)) ? ("views-row col-md-6") : ("")));
            // line 31
            echo "   ";
            $context["myVal"] = (($context["myVal"] ?? null) + 1);
            // line 32
            echo "    ";
            if ((($context["myVal"] ?? null) == 2)) {
                // line 33
                echo "      <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => ($context["row_classes"] ?? null)), "method"), "html", null, true));
                echo " >
      <div class=\"review row-reverse text-right\">";
                // line 34
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
                echo "</div>
    </div>
    ";
            } else {
                // line 37
                echo "    <div";
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => ($context["row_classes"] ?? null)), "method"), "html", null, true));
                echo " >
      <div class=\"review\">";
                // line 38
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
                echo "</div>
    </div>
    ";
            }
            // line 41
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 42
        echo "</div>
";
    }

    public function getTemplateName()
    {
        return "themes/addweb_ecomme/templates/views/views-view-unformatted--customer_says--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  103 => 42,  97 => 41,  91 => 38,  86 => 37,  80 => 34,  75 => 33,  72 => 32,  69 => 31,  67 => 28,  66 => 27,  64 => 26,  60 => 25,  56 => 23,  54 => 22,  51 => 21,  45 => 19,  43 => 18,);
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
 * Theme override to display a view of unformatted rows.
 *
 * Available variables:
 * - title: The title of this group of rows. May be empty.
 * - rows: A list of the view's row items.
 *   - attributes: The row's HTML attributes.
 *   - content: The row's content.
 * - view: The view object.
 * - default_row_class: A flag indicating whether default classes should be
 *   used on rows.
 *
 * @see template_preprocess_views_view_unformatted()
 */
#}
{% if title %}
  <h3>{{ title }}</h3>
{% endif %}

{% set myVal = 0 %}

<div class=\"row\">
  {% for row in rows %}
    {%
      set row_classes = [
        default_row_class ? 'views-row col-md-6',
      ]
    %}
   {% set myVal = myVal + 1 %}
    {% if(myVal == 2) %}
      <div{{ row.attributes.addClass(row_classes) }} >
      <div class=\"review row-reverse text-right\">{{- row.content -}}</div>
    </div>
    {% else %}
    <div{{ row.attributes.addClass(row_classes) }} >
      <div class=\"review\">{{- row.content -}}</div>
    </div>
    {% endif %}
  {% endfor %}
</div>
", "themes/addweb_ecomme/templates/views/views-view-unformatted--customer_says--block_1.html.twig", "/var/www/html/addweb-ecomme/web/themes/addweb_ecomme/templates/views/views-view-unformatted--customer_says--block_1.html.twig");
    }
}

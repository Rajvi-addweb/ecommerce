<?php

/* themes/addweb_ecomme/templates/views/views-view-unformatted--category_listing--block_1.html.twig */
class __TwigTemplate_d1014a85b8177b01562f7137b4f3383ba3e0860dbce69430cdc3eaa05214b77a extends Twig_Template
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
        $tags = array("if" => 18, "for" => 22, "set" => 24);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if', 'for', 'set'),
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
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["rows"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["row"]) {
            // line 23
            echo "  ";
            // line 24
            $context["row_classes"] = array(0 => ((            // line 25
($context["default_row_class"] ?? null)) ? ("views-row") : ("")));
            // line 28
            echo "
  ";
            // line 29
            $context["myVal"] = (($context["myVal"] ?? null) + 1);
            // line 30
            echo "    ";
            if ((($context["myVal"] ?? null) == 4)) {
                // line 31
                echo "      <div class=\"product prod-1\">
        <div";
                // line 32
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => ($context["row_classes"] ?? null)), "method"), "html", null, true));
                echo " >";
                // line 33
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
                // line 34
                echo "</div>
      </div>
    ";
            } else {
                // line 37
                echo "    <div class=\"product\">
      <div";
                // line 38
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["row"], "attributes", array()), "addClass", array(0 => ($context["row_classes"] ?? null)), "method"), "html", null, true));
                echo " >";
                // line 39
                echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["row"], "content", array()), "html", null, true));
                // line 40
                echo "</div>
    </div>
    ";
            }
            // line 43
            echo "

";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['row'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 46
        echo "
";
    }

    public function getTemplateName()
    {
        return "themes/addweb_ecomme/templates/views/views-view-unformatted--category_listing--block_1.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  105 => 46,  97 => 43,  92 => 40,  90 => 39,  87 => 38,  84 => 37,  79 => 34,  77 => 33,  74 => 32,  71 => 31,  68 => 30,  66 => 29,  63 => 28,  61 => 25,  60 => 24,  58 => 23,  54 => 22,  51 => 21,  45 => 19,  43 => 18,);
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

{% for row in rows %}
  {%
    set row_classes = [
      default_row_class ? 'views-row',
    ]
  %}

  {% set myVal = myVal + 1 %}
    {% if(myVal == 4) %}
      <div class=\"product prod-1\">
        <div{{ row.attributes.addClass(row_classes) }} >
          {{- row.content -}}
        </div>
      </div>
    {% else %}
    <div class=\"product\">
      <div{{ row.attributes.addClass(row_classes) }} >
        {{- row.content -}}
      </div>
    </div>
    {% endif %}


{% endfor %}

", "themes/addweb_ecomme/templates/views/views-view-unformatted--category_listing--block_1.html.twig", "/var/www/html/addweb-ecomme/web/themes/addweb_ecomme/templates/views/views-view-unformatted--category_listing--block_1.html.twig");
    }
}

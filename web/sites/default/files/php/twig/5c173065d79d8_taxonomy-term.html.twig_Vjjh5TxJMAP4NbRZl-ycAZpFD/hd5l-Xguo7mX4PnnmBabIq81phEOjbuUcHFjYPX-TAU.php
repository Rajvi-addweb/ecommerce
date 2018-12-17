<?php

/* themes/addweb_ecomme/templates/texonomy/taxonomy-term.html.twig */
class __TwigTemplate_9efd746ad83fbd7bfb300f75ba939f2de498f541a41f093b2013324474e966ca extends Twig_Template
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
        $tags = array("if" => 30);
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('if'),
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

        // line 28
        echo "<div";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["attributes"] ?? null), "html", null, true));
        echo ">
  ";
        // line 29
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_prefix"] ?? null), "html", null, true));
        echo "
  ";
        // line 30
        if ( !($context["page"] ?? null)) {
            // line 31
            echo "    ";
            // line 32
            echo "  ";
        }
        // line 33
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["title_suffix"] ?? null), "html", null, true));
        echo "
  ";
        // line 34
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["content"] ?? null), "html", null, true));
        echo "
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/addweb_ecomme/templates/texonomy/taxonomy-term.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  64 => 34,  59 => 33,  56 => 32,  54 => 31,  52 => 30,  48 => 29,  43 => 28,);
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
 * Default theme implementation to display a taxonomy term.
 *
 * Available variables:
 * - url: URL of the current term.
 * - name: Name of the current term.
 * - content: Items for the content of the term (fields and description).
 *   Use 'content' to print them all, or print a subset such as
 *   'content.description'. Use the following code to exclude the
 *   printing of a given child element:
 *   @code
 *   {{ content|without('description') }}
 *   @endcode
 * - attributes: HTML attributes for the wrapper.
 * - page: Flag for the full page state.
 * - term: The taxonomy term entity, including:
 *   - id: The ID of the taxonomy term.
 *   - bundle: Machine name of the current vocabulary.
 * - view_mode: View mode, e.g. 'full', 'teaser', etc.
 *
 * @see template_preprocess_taxonomy_term()
 *
 * @ingroup themeable
 */
#}
<div{{ attributes }}>
  {{ title_prefix }}
  {% if not page %}
    {#<h2><a href=\"{{ url }}\">{{ name }}</a></h2>#}
  {% endif %}
  {{ title_suffix }}
  {{ content }}
</div>
", "themes/addweb_ecomme/templates/texonomy/taxonomy-term.html.twig", "/var/www/html/addweb-ecomme/web/themes/addweb_ecomme/templates/texonomy/taxonomy-term.html.twig");
    }
}

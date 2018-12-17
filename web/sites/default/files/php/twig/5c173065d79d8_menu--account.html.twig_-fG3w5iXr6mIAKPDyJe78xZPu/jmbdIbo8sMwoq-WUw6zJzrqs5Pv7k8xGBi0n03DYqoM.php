<?php

/* themes/addweb_ecomme/templates/menu/menu--account.html.twig */
class __TwigTemplate_e6fd981fc1ce0499b9da5473b1a0701024bd039e4174a9c92ffebd2e88f7d633 extends Twig_Template
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
        $tags = array("macro" => 20, "if" => 21, "for" => 23, "set" => 25);
        $filters = array("clean_class" => 55, "split" => 25, "without" => 37);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('macro', 'if', 'for', 'set'),
                array('clean_class', 'split', 'without'),
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

        // line 49
        echo "
";
        // line 55
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this, "menu_links", array(0 => ($context["items"] ?? null), 1 => ($context["attributes"] ?? null), 2 => 0, 3 => ((($context["classes"] ?? null)) ? (($context["classes"] ?? null)) : (array(0 => "menu", 1 => ("menu--" . \Drupal\Component\Utility\Html::getClass(($context["menu_name"] ?? null))), 2 => "nav")))), "method")));
        echo "
";
    }

    // line 20
    public function getmenu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, $__classes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "classes" => $__classes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 21
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 22
                echo "    <ul>
    ";
                // line 23
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 24
                    echo "      ";
                    // line 25
                    $context["item_classes"] = twig_split_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($context["item"], "url", array()), "getOption", array(0 => "container_attributes"), "method"), "class", array()), " ");
                    // line 27
                    echo "      ";
                    // line 28
                    $context["item_classes"] = array(0 => ((($this->getAttribute(                    // line 29
$context["item"], "is_expanded", array()) && $this->getAttribute($context["item"], "below", array()))) ? ("expanded dropdown") : ("")), 1 => (($this->getAttribute(                    // line 30
$context["item"], "in_active_trail", array())) ? ("active-trail") : ("")), 2 => (($this->getAttribute(                    // line 31
$context["loop"], "first", array())) ? ("first") : ("")), 3 => (($this->getAttribute(                    // line 32
$context["loop"], "last", array())) ? ("last") : ("")));
                    // line 35
                    echo "      <li";
                    echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "attributes", array()), "addClass", array(0 => ($context["item_classes"] ?? null)), "method"), "html", null, true));
                    echo ">
      ";
                    // line 36
                    if ((((($context["menu_level"] ?? null) == 0) && $this->getAttribute($context["item"], "is_expanded", array())) && $this->getAttribute($context["item"], "below", array()))) {
                        // line 37
                        echo "        <a";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, twig_without($this->getAttribute($this->getAttribute($context["item"], "link_attributes", array()), "addClass", array(0 => array(0 => "dropdown-toggle", 1 => (($this->getAttribute($context["item"], "in_active_trail", array())) ? ("active-trail") : ("")))), "method"), "data-toggle"), "html", null, true));
                        echo " href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\" data-toggle=\"dropdown\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo "<span class=\"caret\"></span></a>
      ";
                    } else {
                        // line 39
                        echo "        <a";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($this->getAttribute($context["item"], "link_attributes", array()), "addClass", array(0 => (($this->getAttribute($context["item"], "in_active_trail", array())) ? ("active-trail") : (""))), "method"), "html", null, true));
                        echo " href=\"";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "url", array()), "html", null, true));
                        echo "\">";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute($context["item"], "title", array()), "html", null, true));
                        echo "</a>
      ";
                    }
                    // line 41
                    echo "      ";
                    if ($this->getAttribute($context["item"], "below", array())) {
                        // line 42
                        echo "        ";
                        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar($this->getAttribute($this, "menu_links", array(0 => $this->getAttribute($context["item"], "below", array()), 1 => $this->getAttribute(($context["attributes"] ?? null), "removeClass", array(0 => ($context["classes"] ?? null)), "method"), 2 => (($context["menu_level"] ?? null) + 1), 3 => ($context["classes"] ?? null)), "method")));
                        echo "
      ";
                    }
                    // line 44
                    echo "      </li>
    ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 46
                echo "    </ul>
  ";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "themes/addweb_ecomme/templates/menu/menu--account.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  153 => 46,  138 => 44,  132 => 42,  129 => 41,  119 => 39,  109 => 37,  107 => 36,  102 => 35,  100 => 32,  99 => 31,  98 => 30,  97 => 29,  96 => 28,  94 => 27,  92 => 25,  90 => 24,  73 => 23,  70 => 22,  67 => 21,  52 => 20,  46 => 55,  43 => 49,);
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
 * Default theme implementation to display a menu.
 *
 * Available variables:
 * - menu_name: The machine name of the menu.
 * - items: A nested list of menu items. Each menu item contains:
 *   - attributes: HTML attributes for the menu item.
 *   - below: The menu item child items.
 *   - title: The menu link title.
 *   - url: The menu link url, instance of \\Drupal\\Core\\Url
 *   - localized_options: Menu link localized options.
 *
 * @ingroup templates
 *
 * Define a custom macro that will render all menu trees.
 */
#}
{% macro menu_links(items, attributes, menu_level, classes) %}
  {% if items %}
    <ul>
    {% for item in items %}
      {%
        set item_classes = item.url.getOption('container_attributes').class | split(\" \")
      %}
      {%
        set item_classes = [
          item.is_expanded and item.below ? 'expanded dropdown',
          item.in_active_trail ? 'active-trail',
          loop.first ? 'first',
          loop.last ? 'last',
        ]
      %}
      <li{{ item.attributes.addClass(item_classes) }}>
      {% if menu_level == 0 and item.is_expanded and item.below %}
        <a{{ item.link_attributes.addClass(['dropdown-toggle', item.in_active_trail ? 'active-trail']) | without('data-toggle') }} href=\"{{ item.url }}\" data-toggle=\"dropdown\">{{ item.title }}<span class=\"caret\"></span></a>
      {% else %}
        <a{{ item.link_attributes.addClass(item.in_active_trail ? 'active-trail') }} href=\"{{ item.url }}\">{{ item.title }}</a>
      {% endif %}
      {% if item.below %}
        {{ _self.menu_links(item.below, attributes.removeClass(classes), menu_level + 1, classes) }}
      {% endif %}
      </li>
    {% endfor %}
    </ul>
  {% endif %}
{% endmacro %}

{#
  Invoke the custom macro defined above. If classes were provided, use them.
  This allows the template to be extended without having to also duplicate the
  code above. @see http://twig.sensiolabs.org/doc/tags/macro.html
#}
{{ _self.menu_links(items, attributes, 0, classes ? classes : ['menu', 'menu--' ~ menu_name|clean_class, 'nav']) }}
", "themes/addweb_ecomme/templates/menu/menu--account.html.twig", "/var/www/html/addweb-ecomme/web/themes/addweb_ecomme/templates/menu/menu--account.html.twig");
    }
}

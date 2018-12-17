<?php

/* themes/addweb_ecomme/templates/system/page.html.twig */
class __TwigTemplate_9b8c77ba23a774785fef26fba7e732a8428ed824eb2ac2d5ff4d0e48a71bf7d8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'navbar' => array($this, 'block_navbar'),
            'main' => array($this, 'block_main'),
            'header' => array($this, 'block_header'),
            'sidebar_first' => array($this, 'block_sidebar_first'),
            'highlighted' => array($this, 'block_highlighted'),
            'help' => array($this, 'block_help'),
            'content' => array($this, 'block_content'),
            'sidebar_second' => array($this, 'block_sidebar_second'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array("set" => 54, "if" => 56, "block" => 57);
        $filters = array("clean_class" => 62, "t" => 84);
        $functions = array();

        try {
            $this->env->getExtension('Twig_Extension_Sandbox')->checkSecurity(
                array('set', 'if', 'block'),
                array('clean_class', 't'),
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

        // line 54
        $context["container"] = (($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "fluid_container", array())) ? ("container-fluid") : ("container"));
        // line 56
        if (($this->getAttribute(($context["page"] ?? null), "navigation", array()) || $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()))) {
            // line 57
            echo "  ";
            $this->displayBlock('navbar', $context, $blocks);
        }
        // line 114
        echo "
";
        // line 116
        $this->displayBlock('main', $context, $blocks);
        // line 182
        echo "

 <footer class=\"footer bg-dark-grey\" role=\"contentinfo\">
  <div class=\"";
        // line 185
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo "\">
    <div class=\"row\">
      <div class=\"col-md-7\">
        <div class=\"row\">
          ";
        // line 189
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_left", array()), "html", null, true));
        echo "
        </div>
      </div>
      <div class=\"col-md-5\">
        ";
        // line 193
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "footer_top_right", array()), "html", null, true));
        echo "
      </div>
    </div>
    <div class=\"bottom-footer\">
      ";
        // line 197
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "bottom_footer", array()), "html", null, true));
        echo "
    </div>
  </div>
</footer>
";
    }

    // line 57
    public function block_navbar($context, array $blocks = array())
    {
        // line 58
        echo "    ";
        // line 59
        $context["navbar_classes"] = array(0 => "navbar", 1 => (($this->getAttribute($this->getAttribute(        // line 61
($context["theme"] ?? null), "settings", array()), "navbar_inverse", array())) ? ("navbar-inverse") : ("navbar-default")), 2 => (($this->getAttribute($this->getAttribute(        // line 62
($context["theme"] ?? null), "settings", array()), "navbar_position", array())) ? (("navbar-" . \Drupal\Component\Utility\Html::getClass($this->getAttribute($this->getAttribute(($context["theme"] ?? null), "settings", array()), "navbar_position", array())))) : (($context["container"] ?? null))));
        // line 65
        echo "    <header id=\"navbar\" role=\"banner\">
      <div class=\"top-header bg-light-grey\">
        <div class=\"container\">
          ";
        // line 68
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "top_header", array()), "html", null, true));
        echo "
        </div>
      </div>

      <div class=\"main-header\">
        <nav class=\"navbar\">

        ";
        // line 75
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 76
            echo "          <div class=\"";
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
            echo "\">
        ";
        }
        // line 78
        echo "
          <div class=\"navbar-header\">
            ";
        // line 80
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation", array()), "html", null, true));
        echo "
            ";
        // line 82
        echo "            ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 83
            echo "              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                <span class=\"sr-only\">";
            // line 84
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->renderVar(t("Toggle navigation")));
            echo "</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            ";
        }
        // line 90
        echo "          </div>

          ";
        // line 93
        echo "          ";
        if ($this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array())) {
            // line 94
            echo "            <div id=\"navbar-collapse\" class=\"navbar-collapse collapse pull-left\">
              <div class=\"main-menu horizontal-nav\">
                ";
            // line 96
            echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "navigation_collapsible", array()), "html", null, true));
            echo "
              </div>
            </div>
          ";
        }
        // line 100
        echo "
          <div class=\"social-icon pull-right\">
            ";
        // line 102
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "main_header_right", array()), "html", null, true));
        echo "
          </div>

        ";
        // line 105
        if ( !$this->getAttribute(($context["navbar_attributes"] ?? null), "hasClass", array(0 => ($context["container"] ?? null)), "method")) {
            // line 106
            echo "          </div>
        ";
        }
        // line 108
        echo "
        </nav>
      </div>
    </header>
  ";
    }

    // line 116
    public function block_main($context, array $blocks = array())
    {
        // line 117
        echo "  ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "banner_block", array()), "html", null, true));
        echo "
  <div role=\"main\" class=\"main-container ";
        // line 118
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, ($context["container"] ?? null), "html", null, true));
        echo " js-quickedit-main-content\">
    <div class=\"row\">

      ";
        // line 122
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "header", array())) {
            // line 123
            echo "        ";
            $this->displayBlock('header', $context, $blocks);
            // line 128
            echo "      ";
        }
        // line 129
        echo "
      ";
        // line 131
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())) {
            // line 132
            echo "        ";
            $this->displayBlock('sidebar_first', $context, $blocks);
            // line 137
            echo "      ";
        }
        // line 138
        echo "
      ";
        // line 140
        echo "      ";
        // line 141
        $context["content_classes"] = array(0 => ((($this->getAttribute(        // line 142
($context["page"] ?? null), "sidebar_first", array()) && $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()))) ? ("col-sm-6") : ("")), 1 => ((($this->getAttribute(        // line 143
($context["page"] ?? null), "sidebar_first", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-9") : ("")), 2 => ((($this->getAttribute(        // line 144
($context["page"] ?? null), "sidebar_second", array()) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_first", array())))) ? ("col-sm-9") : ("")), 3 => (((twig_test_empty($this->getAttribute(        // line 145
($context["page"] ?? null), "sidebar_first", array())) && twig_test_empty($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())))) ? ("col-sm-12") : ("")));
        // line 148
        echo "      <section";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["content_attributes"] ?? null), "addClass", array(0 => ($context["content_classes"] ?? null)), "method"), "html", null, true));
        echo ">

        ";
        // line 151
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "highlighted", array())) {
            // line 152
            echo "          ";
            $this->displayBlock('highlighted', $context, $blocks);
            // line 155
            echo "        ";
        }
        // line 156
        echo "
        ";
        // line 158
        echo "        ";
        if ($this->getAttribute(($context["page"] ?? null), "help", array())) {
            // line 159
            echo "          ";
            $this->displayBlock('help', $context, $blocks);
            // line 162
            echo "        ";
        }
        // line 163
        echo "
        ";
        // line 165
        echo "        ";
        $this->displayBlock('content', $context, $blocks);
        // line 169
        echo "      </section>

      ";
        // line 172
        echo "      ";
        if ($this->getAttribute(($context["page"] ?? null), "sidebar_second", array())) {
            // line 173
            echo "        ";
            $this->displayBlock('sidebar_second', $context, $blocks);
            // line 178
            echo "      ";
        }
        // line 179
        echo "    </div>
  </div>
";
    }

    // line 123
    public function block_header($context, array $blocks = array())
    {
        // line 124
        echo "          <div class=\"col-sm-12\" role=\"heading\">
            ";
        // line 125
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "header", array()), "html", null, true));
        echo "
          </div>
        ";
    }

    // line 132
    public function block_sidebar_first($context, array $blocks = array())
    {
        // line 133
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 134
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_first", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    // line 152
    public function block_highlighted($context, array $blocks = array())
    {
        // line 153
        echo "            <div class=\"highlighted\">";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "highlighted", array()), "html", null, true));
        echo "</div>
          ";
    }

    // line 159
    public function block_help($context, array $blocks = array())
    {
        // line 160
        echo "            ";
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "help", array()), "html", null, true));
        echo "
          ";
    }

    // line 165
    public function block_content($context, array $blocks = array())
    {
        // line 166
        echo "          <a id=\"main-content\"></a>
          ";
        // line 167
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "content", array()), "html", null, true));
        echo "
        ";
    }

    // line 173
    public function block_sidebar_second($context, array $blocks = array())
    {
        // line 174
        echo "          <aside class=\"col-sm-3\" role=\"complementary\">
            ";
        // line 175
        echo $this->env->getExtension('Twig_Extension_Sandbox')->ensureToStringAllowed($this->env->getExtension('Drupal\Core\Template\TwigExtension')->escapeFilter($this->env, $this->getAttribute(($context["page"] ?? null), "sidebar_second", array()), "html", null, true));
        echo "
          </aside>
        ";
    }

    public function getTemplateName()
    {
        return "themes/addweb_ecomme/templates/system/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  358 => 175,  355 => 174,  352 => 173,  346 => 167,  343 => 166,  340 => 165,  333 => 160,  330 => 159,  323 => 153,  320 => 152,  313 => 134,  310 => 133,  307 => 132,  300 => 125,  297 => 124,  294 => 123,  288 => 179,  285 => 178,  282 => 173,  279 => 172,  275 => 169,  272 => 165,  269 => 163,  266 => 162,  263 => 159,  260 => 158,  257 => 156,  254 => 155,  251 => 152,  248 => 151,  242 => 148,  240 => 145,  239 => 144,  238 => 143,  237 => 142,  236 => 141,  234 => 140,  231 => 138,  228 => 137,  225 => 132,  222 => 131,  219 => 129,  216 => 128,  213 => 123,  210 => 122,  204 => 118,  199 => 117,  196 => 116,  188 => 108,  184 => 106,  182 => 105,  176 => 102,  172 => 100,  165 => 96,  161 => 94,  158 => 93,  154 => 90,  145 => 84,  142 => 83,  139 => 82,  135 => 80,  131 => 78,  125 => 76,  123 => 75,  113 => 68,  108 => 65,  106 => 62,  105 => 61,  104 => 59,  102 => 58,  99 => 57,  90 => 197,  83 => 193,  76 => 189,  69 => 185,  64 => 182,  62 => 116,  59 => 114,  55 => 57,  53 => 56,  51 => 54,);
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
 * Default theme implementation to display a single page.
 *
 * The doctype, html, head and body tags are not in this template. Instead they
 * can be found in the html.html.twig template in this directory.
 *
 * Available variables:
 *
 * General utility variables:
 * - base_path: The base URL path of the Drupal installation. Will usually be
 *   \"/\" unless you have installed Drupal in a sub-directory.
 * - is_front: A flag indicating if the current page is the front page.
 * - logged_in: A flag indicating if the user is registered and signed in.
 * - is_admin: A flag indicating if the user has permission to access
 *   administration pages.
 *
 * Site identity:
 * - front_page: The URL of the front page. Use this instead of base_path when
 *   linking to the front page. This includes the language domain or prefix.
 *
 * Page content (in order of occurrence in the default page.html.twig):
 * - title_prefix: Additional output populated by modules, intended to be
 *   displayed in front of the main title tag that appears in the template.
 * - title: The page title, for use in the actual content.
 * - title_suffix: Additional output populated by modules, intended to be
 *   displayed after the main title tag that appears in the template.
 * - messages: Status and error messages. Should be displayed prominently.
 * - tabs: Tabs linking to any sub-pages beneath the current page (e.g., the
 *   view and edit tabs when displaying a node).
 * - node: Fully loaded node, if there is an automatically-loaded node
 *   associated with the page and the node ID is the second argument in the
 *   page's path (e.g. node/12345 and node/12345/revisions, but not
 *   comment/reply/12345).
 *
 * Regions:
 * - page.header: Items for the header region.
 * - page.navigation: Items for the navigation region.
 * - page.navigation_collapsible: Items for the navigation (collapsible) region.
 * - page.highlighted: Items for the highlighted content region.
 * - page.help: Dynamic help text, mostly for admin pages.
 * - page.content: The main content of the current page.
 * - page.sidebar_first: Items for the first sidebar.
 * - page.sidebar_second: Items for the second sidebar.
 * - page.footer: Items for the footer region.
 *
 * @ingroup templates
 *
 * @see template_preprocess_page()
 * @see html.html.twig
 */
#}
{% set container = theme.settings.fluid_container ? 'container-fluid' : 'container' %}
{# Navbar #}
{% if page.navigation or page.navigation_collapsible %}
  {% block navbar %}
    {%
      set navbar_classes = [
        'navbar',
        theme.settings.navbar_inverse ? 'navbar-inverse' : 'navbar-default',
        theme.settings.navbar_position ? 'navbar-' ~ theme.settings.navbar_position|clean_class : container,
      ]
    %}
    <header id=\"navbar\" role=\"banner\">
      <div class=\"top-header bg-light-grey\">
        <div class=\"container\">
          {{ page.top_header }}
        </div>
      </div>

      <div class=\"main-header\">
        <nav class=\"navbar\">

        {% if not navbar_attributes.hasClass(container) %}
          <div class=\"{{ container }}\">
        {% endif %}

          <div class=\"navbar-header\">
            {{ page.navigation }}
            {# .btn-navbar is used as the toggle for collapsed navbar content #}
            {% if page.navigation_collapsible %}
              <button type=\"button\" class=\"navbar-toggle\" data-toggle=\"collapse\" data-target=\"#navbar-collapse\">
                <span class=\"sr-only\">{{ 'Toggle navigation'|t }}</span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
                <span class=\"icon-bar\"></span>
              </button>
            {% endif %}
          </div>

          {# Navigation (collapsible) #}
          {% if page.navigation_collapsible %}
            <div id=\"navbar-collapse\" class=\"navbar-collapse collapse pull-left\">
              <div class=\"main-menu horizontal-nav\">
                {{ page.navigation_collapsible }}
              </div>
            </div>
          {% endif %}

          <div class=\"social-icon pull-right\">
            {{ page.main_header_right }}
          </div>

        {% if not navbar_attributes.hasClass(container) %}
          </div>
        {% endif %}

        </nav>
      </div>
    </header>
  {% endblock %}
{% endif %}

{# Main #}
{% block main %}
  {{ page.banner_block }}
  <div role=\"main\" class=\"main-container {{ container }} js-quickedit-main-content\">
    <div class=\"row\">

      {# Header #}
      {% if page.header %}
        {% block header %}
          <div class=\"col-sm-12\" role=\"heading\">
            {{ page.header }}
          </div>
        {% endblock %}
      {% endif %}

      {# Sidebar First #}
      {% if page.sidebar_first %}
        {% block sidebar_first %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_first }}
          </aside>
        {% endblock %}
      {% endif %}

      {# Content #}
      {%
        set content_classes = [
          page.sidebar_first and page.sidebar_second ? 'col-sm-6',
          page.sidebar_first and page.sidebar_second is empty ? 'col-sm-9',
          page.sidebar_second and page.sidebar_first is empty ? 'col-sm-9',
          page.sidebar_first is empty and page.sidebar_second is empty ? 'col-sm-12'
        ]
      %}
      <section{{ content_attributes.addClass(content_classes) }}>

        {# Highlighted #}
        {% if page.highlighted %}
          {% block highlighted %}
            <div class=\"highlighted\">{{ page.highlighted }}</div>
          {% endblock %}
        {% endif %}

        {# Help #}
        {% if page.help %}
          {% block help %}
            {{ page.help }}
          {% endblock %}
        {% endif %}

        {# Content #}
        {% block content %}
          <a id=\"main-content\"></a>
          {{ page.content }}
        {% endblock %}
      </section>

      {# Sidebar Second #}
      {% if page.sidebar_second %}
        {% block sidebar_second %}
          <aside class=\"col-sm-3\" role=\"complementary\">
            {{ page.sidebar_second }}
          </aside>
        {% endblock %}
      {% endif %}
    </div>
  </div>
{% endblock %}


 <footer class=\"footer bg-dark-grey\" role=\"contentinfo\">
  <div class=\"{{ container }}\">
    <div class=\"row\">
      <div class=\"col-md-7\">
        <div class=\"row\">
          {{ page.footer_top_left }}
        </div>
      </div>
      <div class=\"col-md-5\">
        {{ page.footer_top_right }}
      </div>
    </div>
    <div class=\"bottom-footer\">
      {{page.bottom_footer}}
    </div>
  </div>
</footer>
", "themes/addweb_ecomme/templates/system/page.html.twig", "/var/www/html/addweb-ecomme/web/themes/addweb_ecomme/templates/system/page.html.twig");
    }
}

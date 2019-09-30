<?php

use Twig\Environment;
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

/* Post/list.html.twig */
class __TwigTemplate_026ed9f1ad725b63fb9c845f84a7d19bdad4367cf802068712491dc63bfe41b9 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.html.twig", "Post/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Liste des Posts ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"jumbotron p-3 p-md-5 text-white rounded bg-dark\">
        <div class=\"col-md-6 px-0\">
            <h1 class=\"display-4 font-italic\">CESI BLOG</h1>
            <p class=\"lead my-3\">Ce blog vous présentera les tendances actuelles des langages de programmation, ainsi que de nombreuses astuces dans tous les langages</p>
        </div>
    </div>
    ";
        // line 11
        if ((($context["maxPage"] ?? null) > 0)) {
            // line 12
            echo "        <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination justify-content-center\">
            ";
            // line 15
            echo "            ";
            $context["disable"] = "";
            // line 16
            echo "            ";
            $context["numeroPagePecedent"] = (($context["numeroPage"] ?? null) - 1);
            // line 17
            echo "            ";
            if ((($context["numeroPage"] ?? null) <= 1)) {
                $context["disable"] = "disabled";
            }
            // line 18
            echo "            <li class=\"page-item ";
            echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
            echo "\">
                <a class=\"page-link\" href=\"/Post/List/";
            // line 19
            echo twig_escape_filter($this->env, ($context["numeroPagePecedent"] ?? null), "html", null, true);
            echo "\" tabindex=\"-1\">Précédent</a>
            </li>

            ";
            // line 23
            echo "            ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, ($context["maxPage"] ?? null)));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 24
                echo "                ";
                $context["active"] = "";
                // line 25
                echo "                ";
                if ((($context["numeroPage"] ?? null) == $context["i"])) {
                    $context["active"] = "active";
                }
                // line 26
                echo "                <li class=\"page-item ";
                echo twig_escape_filter($this->env, ($context["active"] ?? null), "html", null, true);
                echo "\"><a class=\"page-link\" href=\"/Post/List/";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $context["i"], "html", null, true);
                echo "</a></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 28
            echo "

            ";
            // line 31
            echo "            ";
            $context["disable"] = "";
            // line 32
            echo "            ";
            $context["numeroPageSuivant"] = (($context["numeroPage"] ?? null) + 1);
            // line 33
            echo "            ";
            if ((($context["numeroPage"] ?? null) == ($context["maxPage"] ?? null))) {
                $context["disable"] = "disabled";
            }
            // line 34
            echo "            <li class=\"page-item ";
            echo twig_escape_filter($this->env, ($context["disable"] ?? null), "html", null, true);
            echo "\">
                <a class=\"page-link\" href=\"/Post/List/";
            // line 35
            echo twig_escape_filter($this->env, ($context["numeroPageSuivant"] ?? null), "html", null, true);
            echo "\" tabindex=\"-1\">Suivant</a>
            </li>
        </ul>
        </nav>
    ";
        }
        // line 40
        echo "
    <div class=\"row mb-2\">
        ";
        // line 42
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataPosts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 43
            echo "            <div class=\"col-md-6\">
                <div class=\"card flex-md-row mb-4 box-shadow h-md-250\">
                    <div class=\"card-body d-flex flex-column align-items-start\">
                        <strong class=\"d-inline-block mb-2 text-primary\">";
            // line 46
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "Auteur", [], "any", false, false, false, 46), "html", null, true);
            echo "</strong>
                        <h3 class=\"mb-0\">
                            <a class=\"text-dark\" href=\"/Post/Detail/";
            // line 48
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "Id", [], "any", false, false, false, 48), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "Titre", [], "any", false, false, false, 48), "html", null, true);
            echo "</a>
                        </h3>
                        <div class=\"mb-1 text-muted\">";
            // line 50
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "DateAjout", [], "any", false, false, false, 50), "d/m/Y"), "html", null, true);
            echo "</div>
                        <p class=\"card-text mb-auto\">";
            // line 51
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "firstXwords", [0 => 20], "method", false, false, false, 51), "html", null, true);
            echo "</p>
                        <a href=\"/Post/Detail/";
            // line 52
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "Id", [], "any", false, false, false, 52), "html", null, true);
            echo "\">Continuer la lecture</a>
                    </div>
                    ";
            // line 54
            if ((call_user_func_array($this->env->getFunction('file_exist')->getCallable(), [((("./uploads/images/" . twig_get_attribute($this->env, $this->source, $context["post"], "getImageRepository", [], "any", false, false, false, 54)) . "/") . twig_get_attribute($this->env, $this->source, $context["post"], "getImageFileName", [], "any", false, false, false, 54))]) && (twig_get_attribute($this->env, $this->source, $context["post"], "getImageFileName", [], "any", false, false, false, 54) != ""))) {
                // line 55
                echo "                        <img src=\"/uploads/images/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getImageRepository", [], "any", false, false, false, 55), "html", null, true);
                echo "/";
                echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "getImageFileName", [], "any", false, false, false, 55), "html", null, true);
                echo "\" class=\"img-thumbnail\" style=\"width: 200px; height: 250px;\"/>
                    ";
            } else {
                // line 57
                echo "                        <img class=\"card-img-right flex-auto d-none d-md-block\" data-src=\"holder.js/200x250?theme=thumb\" alt=\"Thumbnail [200x250]\" style=\"width: 200px; height: 250px;\" src=\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16b8dc97f7f%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16b8dc97f7f%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E\" data-holder-rendered=\"true\">
                    ";
            }
            // line 59
            echo "                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 62
        echo "    </div>
";
    }

    public function getTemplateName()
    {
        return "Post/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  209 => 62,  201 => 59,  197 => 57,  189 => 55,  187 => 54,  182 => 52,  178 => 51,  174 => 50,  167 => 48,  162 => 46,  157 => 43,  153 => 42,  149 => 40,  141 => 35,  136 => 34,  131 => 33,  128 => 32,  125 => 31,  121 => 28,  108 => 26,  103 => 25,  100 => 24,  95 => 23,  89 => 19,  84 => 18,  79 => 17,  76 => 16,  73 => 15,  69 => 12,  67 => 11,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}{{ parent() }} - Liste des Posts {% endblock %}

{% block body %}
    <div class=\"jumbotron p-3 p-md-5 text-white rounded bg-dark\">
        <div class=\"col-md-6 px-0\">
            <h1 class=\"display-4 font-italic\">CESI BLOG</h1>
            <p class=\"lead my-3\">Ce blog vous présentera les tendances actuelles des langages de programmation, ainsi que de nombreuses astuces dans tous les langages</p>
        </div>
    </div>
    {% if maxPage > 0  %}
        <nav aria-label=\"Page navigation example\">
        <ul class=\"pagination justify-content-center\">
            {# Bouton précédent #}
            {% set disable=\"\" %}
            {% set numeroPagePecedent = numeroPage  -1 %}
            {% if numeroPage <= 1 %}{% set disable=\"disabled\" %}{% endif %}
            <li class=\"page-item {{ disable }}\">
                <a class=\"page-link\" href=\"/Post/List/{{ numeroPagePecedent }}\" tabindex=\"-1\">Précédent</a>
            </li>

            {# boucle numéro de page #}
            {% for i in 1..maxPage %}
                {%  set active =\"\" %}
                {% if numeroPage == i %}{%  set active =\"active\" %}{% endif %}
                <li class=\"page-item {{ active }}\"><a class=\"page-link\" href=\"/Post/List/{{ i }}\">{{ i }}</a></li>
            {% endfor %}


            {# Bouton suivant #}
            {% set disable=\"\" %}
            {% set numeroPageSuivant = numeroPage  + 1 %}
            {% if numeroPage == maxPage %}{% set disable=\"disabled\" %}{% endif %}
            <li class=\"page-item {{ disable }}\">
                <a class=\"page-link\" href=\"/Post/List/{{ numeroPageSuivant }}\" tabindex=\"-1\">Suivant</a>
            </li>
        </ul>
        </nav>
    {% endif %}

    <div class=\"row mb-2\">
        {% for post in dataPosts %}
            <div class=\"col-md-6\">
                <div class=\"card flex-md-row mb-4 box-shadow h-md-250\">
                    <div class=\"card-body d-flex flex-column align-items-start\">
                        <strong class=\"d-inline-block mb-2 text-primary\">{{ post.Auteur }}</strong>
                        <h3 class=\"mb-0\">
                            <a class=\"text-dark\" href=\"/Post/Detail/{{ post.Id }}\">{{ post.Titre }}</a>
                        </h3>
                        <div class=\"mb-1 text-muted\">{{ post.DateAjout|date('d/m/Y') }}</div>
                        <p class=\"card-text mb-auto\">{{ post.firstXwords(20) }}</p>
                        <a href=\"/Post/Detail/{{ post.Id }}\">Continuer la lecture</a>
                    </div>
                    {% if file_exist( './uploads/images/'~post.getImageRepository~'/'~post.getImageFileName ) and post.getImageFileName !=\"\" %}
                        <img src=\"/uploads/images/{{ post.getImageRepository }}/{{ post.getImageFileName }}\" class=\"img-thumbnail\" style=\"width: 200px; height: 250px;\"/>
                    {% else %}
                        <img class=\"card-img-right flex-auto d-none d-md-block\" data-src=\"holder.js/200x250?theme=thumb\" alt=\"Thumbnail [200x250]\" style=\"width: 200px; height: 250px;\" src=\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16b8dc97f7f%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16b8dc97f7f%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E\" data-holder-rendered=\"true\">
                    {% endif %}
                </div>
            </div>
        {% endfor %}
    </div>
{% endblock %}", "Post/list.html.twig", "C:\\www\\php\\templates\\Post\\list.html.twig");
    }
}

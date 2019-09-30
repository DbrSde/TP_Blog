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

/* AdminPost/list.html.twig */
class __TwigTemplate_545079ca904484756b54963424ad801f2098e8503bc0fc0eef16a795419ebcb1 extends \Twig\Template
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
        return "base.admin.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("base.admin.html.twig", "AdminPost/list.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Liste des articles ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des articles</h1>
        <form name=\"recherche\" method=\"POST\" class=\"form-inline my-2 my-lg-0\">
            <div class=\"col-2\">
                <input class=\"form-control mr-sm-2\" name=\"search\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            </div>
            <div class=\"col-8\"></div>
            <div class=\"col-2\"><a class=\"btn btn-primary\" href=\"/Adminpost/Add\">Ajouter</a></div>
        </form>
    </div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Auteur</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Actions</th>
        </tr>
        </thead>
        <tbody>
        ";
        // line 27
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["dataPosts"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["post"]) {
            // line 28
            echo "            <tr>
                <th scope=\"row\"><a href=\"/AdminPost/View/";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "\">#";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 29), "html", null, true);
            echo "</a></th>
                <td>";
            // line 30
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "Titre", [], "any", false, false, false, 30), "html", null, true);
            echo "</td>
                <td>";
            // line 31
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "Auteur", [], "any", false, false, false, 31), "html", null, true);
            echo "</td>
                <td>";
            // line 32
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "DateAjout", [], "any", false, false, false, 32), "d/m/Y"), "html", null, true);
            echo "</td>
                <td>
                    <a class=\"btn btn-success\" href=\"/AdminPost/View/";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 34), "html", null, true);
            echo "\">Voir</a>
                    <a class=\"btn btn-warning\" href=\"/AdminPost/Edit/";
            // line 35
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 35), "html", null, true);
            echo "\">Editer</a>
                    <a class=\"btn btn-danger\" href=\"/AdminPost/Delete/";
            // line 36
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["post"], "id", [], "any", false, false, false, 36), "html", null, true);
            echo "\">Supprimer</a>
                </td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['post'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "
        </tbody>
    </table>

";
    }

    public function getTemplateName()
    {
        return "AdminPost/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  127 => 40,  117 => 36,  113 => 35,  109 => 34,  104 => 32,  100 => 31,  96 => 30,  90 => 29,  87 => 28,  83 => 27,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.admin.html.twig\" %}
{% block title %}{{ parent() }} - Liste des articles {% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Liste des articles</h1>
        <form name=\"recherche\" method=\"POST\" class=\"form-inline my-2 my-lg-0\">
            <div class=\"col-2\">
                <input class=\"form-control mr-sm-2\" name=\"search\" type=\"search\" placeholder=\"Search\" aria-label=\"Search\">
            </div>
            <div class=\"col-8\"></div>
            <div class=\"col-2\"><a class=\"btn btn-primary\" href=\"/Adminpost/Add\">Ajouter</a></div>
        </form>
    </div>
    <table class=\"table table-striped\">
        <thead>
        <tr>
            <th scope=\"col\">#</th>
            <th scope=\"col\">Titre</th>
            <th scope=\"col\">Auteur</th>
            <th scope=\"col\">Date</th>
            <th scope=\"col\">Actions</th>
        </tr>
        </thead>
        <tbody>
        {% for post in dataPosts %}
            <tr>
                <th scope=\"row\"><a href=\"/AdminPost/View/{{ post.id }}\">#{{ post.id }}</a></th>
                <td>{{ post.Titre }}</td>
                <td>{{ post.Auteur }}</td>
                <td>{{ post.DateAjout|date(\"d/m/Y\") }}</td>
                <td>
                    <a class=\"btn btn-success\" href=\"/AdminPost/View/{{ post.id }}\">Voir</a>
                    <a class=\"btn btn-warning\" href=\"/AdminPost/Edit/{{ post.id }}\">Editer</a>
                    <a class=\"btn btn-danger\" href=\"/AdminPost/Delete/{{ post.id }}\">Supprimer</a>
                </td>
            </tr>
        {% endfor %}

        </tbody>
    </table>

{% endblock %}", "AdminPost/list.html.twig", "C:\\www\\php\\templates\\AdminPost\\list.html.twig");
    }
}

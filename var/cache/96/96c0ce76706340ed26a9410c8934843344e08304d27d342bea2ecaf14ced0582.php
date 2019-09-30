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

/* AdminPost/view.html.twig */
class __TwigTemplate_a5ca9ec2db406923f0498a0378df7e44267c175887e4133bd6f520379ac4b0dc extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "AdminPost/view.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Article ";
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Titre", [], "any", false, false, false, 2), "html", null, true);
        echo " ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Détails de l'article</h1>
        <div class=\"row\">
            <div class=\"col-6\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item active\">";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Titre", [], "any", false, false, false, 11), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\">Ecrit par : ";
        // line 12
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Auteur", [], "any", false, false, false, 12), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\">Ecrit le : ";
        // line 13
        echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "DateAjout", [], "any", false, false, false, 13), "d/m/Y"), "html", null, true);
        echo "</li>
                    <li class=\"list-group-item\">";
        // line 14
        echo nl2br(twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "Description", [], "any", false, false, false, 14), "html", null, true));
        echo "</li>
                </ul>
            </div>
            <div class=\"col-6\">
                ";
        // line 18
        if ((call_user_func_array($this->env->getFunction('file_exist')->getCallable(), [((("./uploads/images/" . twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageRepository", [], "any", false, false, false, 18)) . "/") . twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageFileName", [], "any", false, false, false, 18))]) && (twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageFileName", [], "any", false, false, false, 18) != ""))) {
            // line 19
            echo "                    <img src=\"/uploads/images/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageRepository", [], "any", false, false, false, 19), "html", null, true);
            echo "/";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["post"] ?? null), "getImageFileName", [], "any", false, false, false, 19), "html", null, true);
            echo "\" class=\"img-thumbnail\"/>
                ";
        } else {
            // line 21
            echo "                    <img class=\"card-img-right flex-auto d-none d-md-block\" data-src=\"holder.js/200x250?theme=thumb\" alt=\"Thumbnail [200x250]\"  src=\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16b8dc97f7f%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16b8dc97f7f%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E\" data-holder-rendered=\"true\">
                ";
        }
        // line 23
        echo "            </div>
        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AdminPost/view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  102 => 23,  98 => 21,  90 => 19,  88 => 18,  81 => 14,  77 => 13,  73 => 12,  69 => 11,  61 => 5,  57 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.admin.html.twig\" %}
{% block title %}{{ parent() }} - Article {{ post.Titre }} {% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Détails de l'article</h1>
        <div class=\"row\">
            <div class=\"col-6\">
                <ul class=\"list-group\">
                    <li class=\"list-group-item active\">{{ post.Titre }}</li>
                    <li class=\"list-group-item\">Ecrit par : {{ post.Auteur }}</li>
                    <li class=\"list-group-item\">Ecrit le : {{ post.DateAjout|date(\"d/m/Y\") }}</li>
                    <li class=\"list-group-item\">{{ post.Description|nl2br }}</li>
                </ul>
            </div>
            <div class=\"col-6\">
                {% if file_exist( './uploads/images/'~post.getImageRepository~'/'~post.getImageFileName ) and post.getImageFileName !=\"\" %}
                    <img src=\"/uploads/images/{{ post.getImageRepository }}/{{ post.getImageFileName }}\" class=\"img-thumbnail\"/>
                {% else %}
                    <img class=\"card-img-right flex-auto d-none d-md-block\" data-src=\"holder.js/200x250?theme=thumb\" alt=\"Thumbnail [200x250]\"  src=\"data:image/svg+xml;charset=UTF-8,%3Csvg%20width%3D%22200%22%20height%3D%22250%22%20xmlns%3D%22http%3A%2F%2Fwww.w3.org%2F2000%2Fsvg%22%20viewBox%3D%220%200%20200%20250%22%20preserveAspectRatio%3D%22none%22%3E%3Cdefs%3E%3Cstyle%20type%3D%22text%2Fcss%22%3E%23holder_16b8dc97f7f%20text%20%7B%20fill%3A%23eceeef%3Bfont-weight%3Abold%3Bfont-family%3AArial%2C%20Helvetica%2C%20Open%20Sans%2C%20sans-serif%2C%20monospace%3Bfont-size%3A13pt%20%7D%20%3C%2Fstyle%3E%3C%2Fdefs%3E%3Cg%20id%3D%22holder_16b8dc97f7f%22%3E%3Crect%20width%3D%22200%22%20height%3D%22250%22%20fill%3D%22%2355595c%22%3E%3C%2Frect%3E%3Cg%3E%3Ctext%20x%3D%2256.1953125%22%20y%3D%22131%22%3EThumbnail%3C%2Ftext%3E%3C%2Fg%3E%3C%2Fg%3E%3C%2Fsvg%3E\" data-holder-rendered=\"true\">
                {% endif %}
            </div>
        </div>
    </div>

{% endblock %}", "AdminPost/view.html.twig", "C:\\www\\php\\templates\\AdminPost\\view.html.twig");
    }
}

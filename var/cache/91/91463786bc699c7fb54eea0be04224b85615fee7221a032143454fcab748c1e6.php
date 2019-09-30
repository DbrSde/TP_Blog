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

/* AdminPost/add.html.twig */
class __TwigTemplate_8617d0bd9b8860f7e4fa896f0289e09d0d76f089aff3e7fdc5ea08051c009e68 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "AdminPost/add.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Ajout article ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Ajout Article</h1>
        <form name=\"postAdd\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label for=\"postTitre\">Titre</label>
                <input type=\"text\" class=\"form-control\" id=\"postTitre\" name=\"postTitre\" placeholder=\"titre de l'article\">
            </div>

            <div class=\"form-group\">
                <label for=\"postDescription\">Description</label>
                <textarea class=\"form-control\" id=\"postDescription\" name=\"postDescription\" rows=\"3\" placeholder=\"Description de l'article\"></textarea>
            </div>

            <div class=\"form-group\">
                <label for=\"postAuteur\">Auteur</label>
                <select class=\"form-control\" id=\"postAuteur\" name=\"postAuteur\">
                    <option value=\"Brice\">Brice</option>
                    <option value=\"Bruno\">Bruno</option>
                    <option value=\"Fabien\">Fabien</option>
                    <option value=\"Marion\">Marion</option>
                    <option value=\"Benoit\">Benoit</option>
                    <option value=\"Sylvie\">Sylvie</option>
                    <option value=\"Emmanuel\">Emmanuel</option>
                    <option value=\"Jean-Pierre\">Jean-Pierre</option>
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"postDate\">Date de l'article</label>
                <input type=\"date\" class=\"form-control\" id=\"postDate\" name=\"postDate\" >
            </div>
            <div class=\"form-group\">
                <label for=\"postImage\">fichier Image</label>
                <input type=\"file\" class=\"form-control\" id=\"postImage\" name=\"postImage\" >
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
        </form>
    </div>

";
    }

    public function getTemplateName()
    {
        return "AdminPost/add.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.admin.html.twig\" %}
{% block title %}{{ parent() }} - Ajout article {% endblock %}

{% block body %}

    <div class=\"jumbotron\">
        <h1 class=\"display-4\">Ajout Article</h1>
        <form name=\"postAdd\" method=\"post\" enctype=\"multipart/form-data\">
            <div class=\"form-group\">
                <label for=\"postTitre\">Titre</label>
                <input type=\"text\" class=\"form-control\" id=\"postTitre\" name=\"postTitre\" placeholder=\"titre de l'article\">
            </div>

            <div class=\"form-group\">
                <label for=\"postDescription\">Description</label>
                <textarea class=\"form-control\" id=\"postDescription\" name=\"postDescription\" rows=\"3\" placeholder=\"Description de l'article\"></textarea>
            </div>

            <div class=\"form-group\">
                <label for=\"postAuteur\">Auteur</label>
                <select class=\"form-control\" id=\"postAuteur\" name=\"postAuteur\">
                    <option value=\"Brice\">Brice</option>
                    <option value=\"Bruno\">Bruno</option>
                    <option value=\"Fabien\">Fabien</option>
                    <option value=\"Marion\">Marion</option>
                    <option value=\"Benoit\">Benoit</option>
                    <option value=\"Sylvie\">Sylvie</option>
                    <option value=\"Emmanuel\">Emmanuel</option>
                    <option value=\"Jean-Pierre\">Jean-Pierre</option>
                </select>
            </div>
            <div class=\"form-group\">
                <label for=\"postDate\">Date de l'article</label>
                <input type=\"date\" class=\"form-control\" id=\"postDate\" name=\"postDate\" >
            </div>
            <div class=\"form-group\">
                <label for=\"postImage\">fichier Image</label>
                <input type=\"file\" class=\"form-control\" id=\"postImage\" name=\"postImage\" >
            </div>
            <button type=\"submit\" class=\"btn btn-primary\">Valider</button>
        </form>
    </div>

{% endblock %}", "AdminPost/add.html.twig", "C:\\dev\\www\\php\\templates\\AdminPost\\add.html.twig");
    }
}

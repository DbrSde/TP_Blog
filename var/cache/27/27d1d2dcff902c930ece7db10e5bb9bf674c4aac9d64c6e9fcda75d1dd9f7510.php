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

/* AdminFile/write.html.twig */
class __TwigTemplate_55b245bd8e55625d1c56b967011726f3bf9711e1f6b8dbecdaba75670e9ad0f2 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.admin.html.twig", "AdminFile/write.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Lecture de fichier ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1 class=\"display-4\">Ecrire dans un fichier</h1>
            <form method=\"post\">
                <div class=\"form-group\">
                    <label for=\"postDescription\">Données</label>
                    <textarea class=\"form-control\" id=\"postDescription\" name=\"postDescription\" rows=\"10\">";
        // line 12
        echo twig_escape_filter($this->env, ($context["postData"] ?? null), "html", null, true);
        echo "</textarea>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Ecrire</button>
            </form>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "AdminFile/write.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 12,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.admin.html.twig\" %}
{% block title %}{{ parent() }} - Lecture de fichier {% endblock %}

{% block body %}

    <div class=\"container\">
        <div class=\"jumbotron\">
            <h1 class=\"display-4\">Ecrire dans un fichier</h1>
            <form method=\"post\">
                <div class=\"form-group\">
                    <label for=\"postDescription\">Données</label>
                    <textarea class=\"form-control\" id=\"postDescription\" name=\"postDescription\" rows=\"10\">{{ postData }}</textarea>
                </div>
                <button type=\"submit\" class=\"btn btn-primary\">Ecrire</button>
            </form>
        </div>
    </div>


{% endblock %}", "AdminFile/write.html.twig", "C:\\www\\php\\templates\\AdminFile\\write.html.twig");
    }
}

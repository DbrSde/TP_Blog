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

/* Contact/send.html.twig */
class __TwigTemplate_1471221865eae926616bcbc71c7de95701f9ac33a8b2f5574f8315704218edc7 extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Contact/send.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Contact ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "
    <form method=\"post\">
        <div class=\"card border-primary rounded-0\">
            <div class=\"card-header p-0\">
                <div class=\"bg-info text-white text-center py-2\">
                    <h3><i class=\"fa fa-envelope\"></i> Formulaire de contact</h3>
                    <p class=\"m-0\">Veuillez renseigner les champs suivants :</p>
                </div>
            </div>
            <div class=\"card-body p-3\">

                <!--Body-->
                <div class=\"form-group\">
                    <div class=\"input-group mb-2\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text\"><i class=\"fa fa-user text-info\"></i></div>
                        </div>
                        <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nom\" placeholder=\"Votre nom\" required>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"input-group mb-2\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text\"><i class=\"fa fa-envelope text-info\"></i></div>
                        </div>
                        <input type=\"email\" class=\"form-control\" id=\"nombre\" name=\"email\" placeholder=\"ejemplo@gmail.com\" required>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"input-group mb-2\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text\"><i class=\"fa fa-comment text-info\"></i></div>
                        </div>
                        <textarea class=\"form-control\" placeholder=\"Votre message\" required name=\"message\"></textarea>
                    </div>
                </div>

                <div class=\"text-center\">
                    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-info btn-block rounded-0 py-2\">
                </div>
            </div>

        </div>
    </form>


";
    }

    public function getTemplateName()
    {
        return "Contact/send.html.twig";
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
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}{{ parent() }} - Contact {% endblock %}

{% block body %}

    <form method=\"post\">
        <div class=\"card border-primary rounded-0\">
            <div class=\"card-header p-0\">
                <div class=\"bg-info text-white text-center py-2\">
                    <h3><i class=\"fa fa-envelope\"></i> Formulaire de contact</h3>
                    <p class=\"m-0\">Veuillez renseigner les champs suivants :</p>
                </div>
            </div>
            <div class=\"card-body p-3\">

                <!--Body-->
                <div class=\"form-group\">
                    <div class=\"input-group mb-2\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text\"><i class=\"fa fa-user text-info\"></i></div>
                        </div>
                        <input type=\"text\" class=\"form-control\" id=\"nombre\" name=\"nom\" placeholder=\"Votre nom\" required>
                    </div>
                </div>
                <div class=\"form-group\">
                    <div class=\"input-group mb-2\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text\"><i class=\"fa fa-envelope text-info\"></i></div>
                        </div>
                        <input type=\"email\" class=\"form-control\" id=\"nombre\" name=\"email\" placeholder=\"ejemplo@gmail.com\" required>
                    </div>
                </div>

                <div class=\"form-group\">
                    <div class=\"input-group mb-2\">
                        <div class=\"input-group-prepend\">
                            <div class=\"input-group-text\"><i class=\"fa fa-comment text-info\"></i></div>
                        </div>
                        <textarea class=\"form-control\" placeholder=\"Votre message\" required name=\"message\"></textarea>
                    </div>
                </div>

                <div class=\"text-center\">
                    <input type=\"submit\" value=\"Envoyer\" class=\"btn btn-info btn-block rounded-0 py-2\">
                </div>
            </div>

        </div>
    </form>


{% endblock %}", "Contact/send.html.twig", "C:\\www\\php\\templates\\Contact\\send.html.twig");
    }
}

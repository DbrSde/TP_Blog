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

/* Login/inscription.html.twig */
class __TwigTemplate_fbbc143b2cb032c8be7a94d8394d6e102b335043dc6d39b0d4a6f62f541b294f extends \Twig\Template
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
        $this->parent = $this->loadTemplate("base.html.twig", "Login/inscription.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->displayParentBlock("title", $context, $blocks);
        echo " - Login ";
    }

    // line 4
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        echo "    <div class=\"row\">
        <div class=\"col-sm-9 col-md-7 col-lg-5 mx-auto\">
            <div class=\"card card-signin my-5\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center\">Inscription</h5>

                    <form class=\"form-signin\" name=\"authentification\" method=\"POST\">
                        <div class=\"form-label-group\">
                            <label for=\"inputLogin\">E-mail</label>
                            <input type=\"text\" name=\"mail\" id=\"inputLogin\" class=\"form-control\" placeholder=\"Votre Email\" required autofocus value=\"";
        // line 14
        echo twig_escape_filter($this->env, (($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 = ($context["arrayRememberMe"] ?? null)) && is_array($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4) || $__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4 instanceof ArrayAccess ? ($__internal_f607aeef2c31a95a7bf963452dff024ffaeb6aafbe4603f9ca3bec57be8633f4[0] ?? null) : null), "html", null, true);
        echo "\">

                        </div>

                        <div class=\"form-label-group\">
                            <label for=\"inputPassword\"> Mot de passe</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Votre mot de passe\" required value=\"";
        // line 20
        echo twig_escape_filter($this->env, (($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 = ($context["arrayRememberMe"] ?? null)) && is_array($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144) || $__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144 instanceof ArrayAccess ? ($__internal_62824350bc4502ee19dbc2e99fc6bdd3bd90e7d8dd6e72f42c35efd048542144[1] ?? null) : null), "html", null, true);
        echo "\">

                        </div>

                        <div class=\"form-label-group\">
                            <label for=\"inputPassword\"> Pseudo </label>
                            <input type=\"text\" name=\"pseudo\" id=\"inputPseudo\" class=\"form-control\" placeholder=\"Votre Pseudo\" required value=\"";
        // line 26
        echo twig_escape_filter($this->env, (($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b = ($context["arrayRememberMe"] ?? null)) && is_array($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b) || $__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b instanceof ArrayAccess ? ($__internal_1cfccaec8dd2e8578ccb026fbe7f2e7e29ac2ed5deb976639c5fc99a6ea8583b[1] ?? null) : null), "html", null, true);
        echo "\">

                        </div>

                        <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\"> Valider </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


";
    }

    public function getTemplateName()
    {
        return "Login/inscription.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  88 => 26,  79 => 20,  70 => 14,  59 => 5,  55 => 4,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends \"base.html.twig\" %}
{% block title %}{{ parent() }} - Login {% endblock %}

{% block body %}
    <div class=\"row\">
        <div class=\"col-sm-9 col-md-7 col-lg-5 mx-auto\">
            <div class=\"card card-signin my-5\">
                <div class=\"card-body\">
                    <h5 class=\"card-title text-center\">Inscription</h5>

                    <form class=\"form-signin\" name=\"authentification\" method=\"POST\">
                        <div class=\"form-label-group\">
                            <label for=\"inputLogin\">E-mail</label>
                            <input type=\"text\" name=\"mail\" id=\"inputLogin\" class=\"form-control\" placeholder=\"Votre Email\" required autofocus value=\"{{ arrayRememberMe[0] }}\">

                        </div>

                        <div class=\"form-label-group\">
                            <label for=\"inputPassword\"> Mot de passe</label>
                            <input type=\"password\" name=\"password\" id=\"inputPassword\" class=\"form-control\" placeholder=\"Votre mot de passe\" required value=\"{{ arrayRememberMe[1] }}\">

                        </div>

                        <div class=\"form-label-group\">
                            <label for=\"inputPassword\"> Pseudo </label>
                            <input type=\"text\" name=\"pseudo\" id=\"inputPseudo\" class=\"form-control\" placeholder=\"Votre Pseudo\" required value=\"{{ arrayRememberMe[1] }}\">

                        </div>

                        <button class=\"btn btn-lg btn-primary btn-block text-uppercase\" type=\"submit\"> Valider </button>
                    </form>
                </div>
            </div>
        </div>
    </div>


{% endblock %}", "Login/inscription.html.twig", "C:\\wamp64\\www\\TP_Blog\\templates\\Login\\inscription.html.twig");
    }
}

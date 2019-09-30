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

/* Contact/mail.html.twig */
class __TwigTemplate_57fe159853e795b7cfb2795d33aba4eea28b492204dc97cc8e4de7ddcb086a26 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<html>
<head></head>
<body>
<h1>Demande de contact </h1>
<p>
    Une nouvelle personne souhaiterais obtenir plus d'information</a>
</p>

<p>Nom";
        // line 9
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "nom", [], "any", false, false, false, 9), "html", null, true);
        echo "</p>
<p>Email";
        // line 10
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "email", [], "any", false, false, false, 10), "html", null, true);
        echo "</p>
<p>Message";
        // line 11
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, ($context["contact"] ?? null), "message", [], "any", false, false, false, 11), "html", null, true);
        echo "</p>
</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "Contact/mail.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  55 => 11,  51 => 10,  47 => 9,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<html>
<head></head>
<body>
<h1>Demande de contact </h1>
<p>
    Une nouvelle personne souhaiterais obtenir plus d'information</a>
</p>

<p>Nom{{ contact.nom }}</p>
<p>Email{{ contact.email }}</p>
<p>Message{{ contact.message }}</p>
</body>
</html>
", "Contact/mail.html.twig", "C:\\www\\php\\templates\\Contact\\mail.html.twig");
    }
}

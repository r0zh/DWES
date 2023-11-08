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

/* main.php.twig */
class __TwigTemplate_e2acbbfcc6100384def21ddf4d4931f5 extends Template
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
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>Document</title>
</head>
<body>
    <div class=\"container\">
\t\t<div class=\"row row-cols-1 row-cols-md-3 g-4\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["series"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 12
            echo "            <div class=\"col\">
\t\t\t\t<div class=\"card shadow\" style=\"width:18rem;\">
\t\t\t\t\t<img src=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "cartel", [], "any", false, false, false, 14), "html", null, true);
            echo "\" class=\"card-img-top\" />
\t\t\t\t\t<div class=\"card-body\">
\t\t\t\t\t\t<h4 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "titulo", [], "any", false, false, false, 16), "html", null, true);
            echo "</h4>
\t\t\t\t\t\tESTRELLAS
\t\t\t\t\t\t<h6>";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "plataforma", [], "any", false, false, false, 18), "html", null, true);
            echo "</h6>
\t\t\t\t\t\t<p class=\"card-text\">";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["serie"], "argumento", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
\t\t\t\t\t\t<a href=\"info.php?id=4\" class=\"btn btn-dark btn-sm\">Mas info.</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "\t\t</div>
\t</div>
</body>
</html>";
    }

    public function getTemplateName()
    {
        return "main.php.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  83 => 25,  71 => 19,  67 => 18,  62 => 16,  57 => 14,  53 => 12,  49 => 11,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.php.twig", "/var/www/html/Ejercicios/T1/series2/vistas/main.php.twig");
    }
}

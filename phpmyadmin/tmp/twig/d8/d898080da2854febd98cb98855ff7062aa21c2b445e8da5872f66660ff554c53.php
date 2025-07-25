<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* display/results/row_data.twig */
class __TwigTemplate_d02d625a01c586d95cc33a9116afced705e85becba50f77932909efe7671583a extends Template
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
        yield "<td data-decimals=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["decimals"] ?? null), "html", null, true);
        yield "\" data-type=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["type"] ?? null), "html", null, true);
        yield "\"";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["original_length"] ?? null))) {
            yield " data-originallength=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["original_length"] ?? null), "html", null, true);
            yield "\"";
        }
        yield " class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["td_class"] ?? null), "html", null, true);
        yield "\">";
        // line 2
        yield ($context["value"] ?? null);
        // line 3
        yield "</td>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "display/results/row_data.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  54 => 3,  52 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "display/results/row_data.twig", "/export/sd216/www/jp/r/e/gmoserver/1/0/sd0999110/hw-symphony.jp/phpmyadmin/templates/display/results/row_data.twig");
    }
}

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

/* message.twig */
class __TwigTemplate_81fa279228ba8996ce4159f4e75a948242522264a6372b7d710e424d76618731 extends Template
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
        yield "<div class=\"alert alert-";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["context"] ?? null), "html", null, true);
        yield "\" role=\"alert\">
  ";
        // line 2
        yield ($context["message"] ?? null);
        yield "
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "message.twig";
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
        return array (  43 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "message.twig", "/export/sd216/www/jp/r/e/gmoserver/1/0/sd0999110/hw-symphony.jp/phpmyadmin/templates/message.twig");
    }
}

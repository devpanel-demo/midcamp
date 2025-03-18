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
use Twig\TemplateWrapper;

/* themes/custom/hatter/templates/fields/address-plain.html.twig */
class __TwigTemplate_6cb3f5dfd82285d9a4ed6d83a3ffcf43 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->extensions[SandboxExtension::class];
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 35
        yield "<p class=\"map__address\" translate=\"no\">
  ";
        // line 36
        if ((($context["given_name"] ?? null) || ($context["family_name"] ?? null))) {
            // line 37
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["given_name"] ?? null), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["family_name"] ?? null), "html", null, true);
            yield " <br>
  ";
        }
        // line 39
        yield "  ";
        if (($context["organization"] ?? null)) {
            // line 40
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["organization"] ?? null), "html", null, true);
            yield " <br>
  ";
        }
        // line 42
        yield "  ";
        if (($context["address_line1"] ?? null)) {
            // line 43
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["address_line1"] ?? null), "html", null, true);
            yield " <br>
  ";
        }
        // line 45
        yield "  ";
        if (($context["address_line2"] ?? null)) {
            // line 46
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["address_line2"] ?? null), "html", null, true);
            yield " <br>
  ";
        }
        // line 48
        yield "  ";
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["dependent_locality"] ?? null), "code", [], "any", false, false, true, 48)) {
            // line 49
            yield "    ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["dependent_locality"] ?? null), "code", [], "any", false, false, true, 49), "html", null, true);
            yield " <br>
  ";
        }
        // line 51
        yield "  ";
        if (((($context["locality"] ?? null) || ($context["postal_code"] ?? null)) || CoreExtension::getAttribute($this->env, $this->source, ($context["administrative_area"] ?? null), "code", [], "any", false, false, true, 51))) {
            // line 52
            yield "    ";
            if (($context["locality"] ?? null)) {
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["locality"] ?? null), "html", null, true);
                yield ", ";
            }
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["administrative_area"] ?? null), "code", [], "any", false, false, true, 52), "html", null, true);
            yield " ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["postal_code"] ?? null), "html", null, true);
            yield "<br>
  ";
        }
        // line 54
        yield "</p>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["given_name", "family_name", "organization", "address_line1", "address_line2", "dependent_locality", "locality", "postal_code", "administrative_area"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/hatter/templates/fields/address-plain.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  108 => 54,  96 => 52,  93 => 51,  87 => 49,  84 => 48,  78 => 46,  75 => 45,  69 => 43,  66 => 42,  60 => 40,  57 => 39,  49 => 37,  47 => 36,  44 => 35,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/hatter/templates/fields/address-plain.html.twig", "/var/www/html/web/themes/custom/hatter/templates/fields/address-plain.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 36];
        static $filters = ["escape" => 37];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape'],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}

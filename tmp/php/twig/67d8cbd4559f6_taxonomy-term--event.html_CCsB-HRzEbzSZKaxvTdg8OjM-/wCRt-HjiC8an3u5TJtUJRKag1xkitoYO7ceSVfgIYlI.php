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

/* themes/custom/hatter/templates/term/taxonomy-term--event.html.twig */
class __TwigTemplate_d1be41af0a3d6c42a44391c3e2ef1fce extends Template
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
        // line 1
        $context["startDate"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "field_date", [], "any", false, false, true, 1), "start_date", [], "any", false, false, true, 1);
        // line 2
        $context["endDate"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "field_date", [], "any", false, false, true, 2), "end_date", [], "any", false, false, true, 2);
        // line 3
        yield "
";
        // line 4
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["content"] ?? null), "field_date", [], "any", false, false, true, 4))))) {
            // line 5
            yield "  ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "field_date_has_time", [], "any", false, false, true, 5), "value", [], "any", false, false, true, 5) == "1")) {
                // line 6
                yield "    <div class=\"event__date\">";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "field_date", [], "any", false, false, true, 6), "value", [], "any", false, false, true, 6), "M. jS, Y"), "html", null, true);
                yield "
      <div class=\"event__time\">";
                // line 7
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "field_date", [], "any", false, false, true, 7), "start_date", [], "any", false, false, true, 7), "ga"), "html", null, true);
                yield " &mdash; ";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "field_date", [], "any", false, false, true, 7), "end_date", [], "any", false, false, true, 7), "ga"), "html", null, true);
                yield "</div>
    </div>
  ";
            } else {
                // line 10
                yield "    ";
                if (($this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["endDate"] ?? null), "M j Y") > $this->extensions['Twig\Extension\CoreExtension']->formatDate(($context["startDate"] ?? null), "M j Y"))) {
                    // line 11
                    yield "      <div class=\"event__date\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "field_date", [], "any", false, false, true, 11), "start_date", [], "any", false, false, true, 11), "M. jS"), "html", null, true);
                    yield " &mdash; ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "field_date", [], "any", false, false, true, 11), "end_date", [], "any", false, false, true, 11), "jS, Y"), "html", null, true);
                    yield "</div>
    ";
                } else {
                    // line 13
                    yield "      <div class=\"event__date\">";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["term"] ?? null), "field_date", [], "any", false, false, true, 13), "value", [], "any", false, false, true, 13), "M. jS, Y"), "html", null, true);
                    yield "</div>
    ";
                }
                // line 15
                yield "  ";
            }
        }
        // line 17
        yield "
";
        // line 18
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(($context["content"] ?? null), "field_date", "field_date_has_time"), "html", null, true);
        yield "
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["term", "content"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/hatter/templates/term/taxonomy-term--event.html.twig";
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
        return array (  93 => 18,  90 => 17,  86 => 15,  80 => 13,  72 => 11,  69 => 10,  61 => 7,  56 => 6,  53 => 5,  51 => 4,  48 => 3,  46 => 2,  44 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/hatter/templates/term/taxonomy-term--event.html.twig", "/var/www/html/web/themes/custom/hatter/templates/term/taxonomy-term--event.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 1, "if" => 4];
        static $filters = ["trim" => 4, "render" => 4, "escape" => 6, "date" => 6, "without" => 18];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
                ['trim', 'render', 'escape', 'date', 'without'],
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

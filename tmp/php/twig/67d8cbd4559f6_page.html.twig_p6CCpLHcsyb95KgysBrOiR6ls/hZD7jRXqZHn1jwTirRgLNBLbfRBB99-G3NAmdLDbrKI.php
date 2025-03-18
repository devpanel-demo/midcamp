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

/* themes/custom/hatter/templates/page/page.html.twig */
class __TwigTemplate_e27b3e719685541647fd00a93383e08e extends Template
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
        // line 48
        yield "
";
        // line 49
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "branding", [], "any", false, false, true, 49), "html", null, true);
        yield "

";
        // line 51
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 51))))) {
            // line 52
            yield "  <header class=\"site-header\">
    ";
            // line 53
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 53), "html", null, true);
            yield "
  </header>
";
        }
        // line 56
        yield "
";
        // line 57
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 57))))) {
            // line 58
            yield "  <section class=\"banner\">
    <div class=\"container\">";
            // line 59
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "content", [], "any", false, false, true, 59), "html", null, true);
            yield "</div>
  </section>
";
        }
        // line 62
        yield "
";
        // line 63
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 63))))) {
            // line 64
            yield "  <section class=\"map-banner\">
    ";
            // line 65
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_first", [], "any", false, false, true, 65), "html", null, true);
            yield "
  </section>
";
        }
        // line 68
        yield "
";
        // line 69
        if ( !Twig\Extension\CoreExtension::testEmpty(Twig\Extension\CoreExtension::trim($this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 69))))) {
            // line 70
            yield "  <section class=\"banner\">
    ";
            // line 71
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "featured_bottom_second", [], "any", false, false, true, 71), "html", null, true);
            yield "
  </section>
";
        }
        // line 74
        yield "
";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_left", [], "any", false, false, true, 75) || CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_right", [], "any", false, false, true, 75))) {
            // line 76
            yield "  <footer class=\"site-footer\">
    <div class=\"container\">
      <div class=\"l-2up--1\">";
            // line 78
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_left", [], "any", false, false, true, 78), "html", null, true);
            yield "</div>
      <div class=\"l-2up--2\">";
            // line 79
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["page"] ?? null), "footer_right", [], "any", false, false, true, 79), "html", null, true);
            yield "</div>
    </div>
  </footer>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["page"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/hatter/templates/page/page.html.twig";
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
        return array (  118 => 79,  114 => 78,  110 => 76,  108 => 75,  105 => 74,  99 => 71,  96 => 70,  94 => 69,  91 => 68,  85 => 65,  82 => 64,  80 => 63,  77 => 62,  71 => 59,  68 => 58,  66 => 57,  63 => 56,  57 => 53,  54 => 52,  52 => 51,  47 => 49,  44 => 48,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/hatter/templates/page/page.html.twig", "/var/www/html/web/themes/custom/hatter/templates/page/page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 51];
        static $filters = ["escape" => 49, "trim" => 51, "render" => 51];
        static $functions = [];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['escape', 'trim', 'render'],
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

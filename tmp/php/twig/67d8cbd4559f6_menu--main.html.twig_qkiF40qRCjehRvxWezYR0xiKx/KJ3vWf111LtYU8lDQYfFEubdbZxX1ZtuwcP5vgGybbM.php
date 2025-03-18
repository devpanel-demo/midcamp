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

/* themes/custom/hatter/templates/navigation/menu--main.html.twig */
class __TwigTemplate_3c35fc9686697d7320d084e5cb980425 extends Template
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
        // line 21
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 22
        yield "
";
        // line 27
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 27, $this->getSourceContext())->macro_menu_links(...[($context["items"] ?? null), ($context["attributes"] ?? null), 0]));
        yield "

";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["_self", "items", "attributes", "menu_level"]);        yield from [];
    }

    // line 29
    public function macro_menu_links($items = null, $attributes = null, $menu_level = null, ...$varargs): string|Markup
    {
        $macros = $this->macros;
        $context = [
            "items" => $items,
            "attributes" => $attributes,
            "menu_level" => $menu_level,
            "varargs" => $varargs,
        ] + $this->env->getGlobals();

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 30
            yield "  ";
            $macros["menus"] = $this;
            // line 31
            yield "

";
            // line 33
            if ((($context["menu_level"] ?? null) == 0)) {
                // line 34
                yield "<button class=\"primary-nav__trigger\">";
                yield from $this->loadTemplate(($this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath() . "/svg/menu.svg"), "themes/custom/hatter/templates/navigation/menu--main.html.twig", 34)->unwrap()->yield($context);
                yield " Menu</button>
  <ul";
                // line 35
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["primary-nav__list"], "method", false, false, true, 35), "html", null, true);
                yield ">
";
            } else {
                // line 37
                yield "<button class=\"primary-nav__sublist--trigger\">
  <span class=\"element-invisible\">Open Menu</span>
  ";
                // line 39
                yield from $this->loadTemplate(($this->extensions['Drupal\Core\Template\TwigExtension']->getActiveThemePath() . "/svg/arrow.svg"), "themes/custom/hatter/templates/navigation/menu--main.html.twig", 39)->unwrap()->yield($context);
                // line 40
                yield "</button>
  <ul class=\"primary-nav__sublist\">
";
            }
            // line 43
            yield "  ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["items"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                // line 44
                yield "    ";
                $context["classes"] = [(((                // line 45
($context["menu_level"] ?? null) == 0)) ? ("primary-nav__item") : ("primary-nav__sublist-item")), ((CoreExtension::getAttribute($this->env, $this->source,                 // line 46
$context["item"], "below", [], "any", false, false, true, 46)) ? ("has-children") : ("")), ("item--" . \Drupal\Component\Utility\Html::getClass(CoreExtension::getAttribute($this->env, $this->source,                 // line 47
$context["item"], "title", [], "any", false, false, true, 47)))];
                // line 49
                yield "    <li";
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 49), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 49), "html", null, true);
                yield ">
        ";
                // line 50
                yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 50), CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50)), "html", null, true);
                yield "
        ";
                // line 51
                if (CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 51)) {
                    // line 52
                    yield "            ";
                    yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($macros["menus"]->getTemplateForMacro("macro_menu_links", $context, 52, $this->getSourceContext())->macro_menu_links(...[CoreExtension::getAttribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 52), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)]));
                    yield "
        ";
                }
                // line 54
                yield "    </li>
  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 56
            yield "</ul>
";
            yield from [];
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/hatter/templates/navigation/menu--main.html.twig";
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
        return array (  137 => 56,  130 => 54,  124 => 52,  122 => 51,  118 => 50,  113 => 49,  111 => 47,  110 => 46,  109 => 45,  107 => 44,  102 => 43,  97 => 40,  95 => 39,  91 => 37,  86 => 35,  81 => 34,  79 => 33,  75 => 31,  72 => 30,  58 => 29,  49 => 27,  46 => 22,  44 => 21,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/hatter/templates/navigation/menu--main.html.twig", "/var/www/html/web/themes/custom/hatter/templates/navigation/menu--main.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["import" => 21, "macro" => 29, "if" => 33, "include" => 34, "for" => 43, "set" => 44];
        static $filters = ["escape" => 35, "clean_class" => 47];
        static $functions = ["active_theme_path" => 34, "link" => 50];

        try {
            $this->sandbox->checkSecurity(
                ['import', 'macro', 'if', 'include', 'for', 'set'],
                ['escape', 'clean_class'],
                ['active_theme_path', 'link'],
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

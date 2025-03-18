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

/* themes/custom/hatter/templates/block/block--system-branding-block.html.twig */
class __TwigTemplate_b240404c5c02a720351590230b3dd075 extends Template
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
        // line 15
        yield "
<section class=\"event-banner__wrapper\">
  <div class=\"event-banner\">
    <div class=\"container\">
      <div class=\"l-1up\">
        <div class=\"event-banner__block\">
          ";
        // line 21
        if (($context["site_logo"] ?? null)) {
            // line 22
            yield "            <a href=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar($this->extensions['Drupal\Core\Template\TwigExtension']->getPath("<front>"));
            yield "\" title=\"";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Home"));
            yield "\" rel=\"home\" tabindex=-1>
              <img class=\"event__druplicon\" src=\"";
            // line 23
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_logo"] ?? null), "html", null, true);
            yield "\" alt=\"Druplicon wearing a Hatter's Hat\" />
            </a>
          ";
        }
        // line 26
        yield "          ";
        if (($context["site_name"] ?? null)) {
            // line 27
            yield "            <h1 class=\"event__title\">";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_name"] ?? null), "html", null, true);
            yield "</h1>
          ";
        }
        // line 29
        yield "          <h2 class=\"event__subtitle\">";
        yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["site_slogan"] ?? null), "html", null, true);
        yield "</h2>
          ";
        // line 31
        yield "          ";
        // line 32
        yield "          ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "title", [], "any", false, false, true, 32) && CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "uri", [], "any", false, false, true, 32))) {
            // line 33
            yield "            ";
            yield $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink(CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "title", [], "any", false, false, true, 33), CoreExtension::getAttribute($this->env, $this->source, ($context["button"] ?? null), "uri", [], "any", false, false, true, 33), $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => ["event__button", "button--primary"]])), "html", null, true);
            yield "
          ";
        }
        // line 35
        yield "        </div>
      </div>
    </div>
  </div>
</section>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["site_logo", "site_name", "site_slogan", "button"]);        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "themes/custom/hatter/templates/block/block--system-branding-block.html.twig";
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
        return array (  92 => 35,  86 => 33,  83 => 32,  81 => 31,  76 => 29,  70 => 27,  67 => 26,  61 => 23,  54 => 22,  52 => 21,  44 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "themes/custom/hatter/templates/block/block--system-branding-block.html.twig", "/var/www/html/web/themes/custom/hatter/templates/block/block--system-branding-block.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 21];
        static $filters = ["t" => 22, "escape" => 23];
        static $functions = ["path" => 22, "link" => 33, "create_attribute" => 33];

        try {
            $this->sandbox->checkSecurity(
                ['if'],
                ['t', 'escape'],
                ['path', 'link', 'create_attribute'],
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

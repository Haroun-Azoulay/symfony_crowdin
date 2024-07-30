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

/* @WebProfiler/Collector/config.html.twig */
class __TwigTemplate_dd46a6e6f851f7de14e41ab8c8f80e8f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'head' => [$this, 'block_head'],
            'toolbar' => [$this, 'block_toolbar'],
            'menu' => [$this, 'block_menu'],
            'panel' => [$this, 'block_panel'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@WebProfiler/Collector/config.html.twig"));

        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "@WebProfiler/Collector/config.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_head($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "head"));

        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("head", $context, $blocks);
        yield "

    <style>
        .config-symfony-version-lts {
            border: 0;
            color: var(--color-muted);
            font-size: 21px;
            line-height: 33px;
        }
        .config-symfony-version-lts[title] {
            text-decoration: none;
        }
        .config-symfony-version-status-badge {
            background-color: var(--badge-background);
            border-radius: 4px;
            color: var(--badge-color);
            display: inline-block;
            font-size: 15px;
            font-weight: bold;
            margin: 10px 0 5px;
            padding: 3px 7px;
            white-space: nowrap;
        }
        .config-symfony-version-status-badge.status-success {
            background-color: var(--badge-success-background);
            color: var(--badge-success-color);
        }
        .config-symfony-version-status-badge.status-warning {
            background-color: var(--badge-warning-background);
            color: var(--badge-warning-color);
        }
        .config-symfony-version-status-badge.status-error {
            background-color: var(--badge-danger-background);
            color: var(--badge-danger-color);
        }
        .config-symfony-version-roadmap-link {
            display: inline-block;
            margin: 10px 5px 5px;
        }
        .config-symfony-eol {
            margin-top: 5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 49
    public function block_toolbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "toolbar"));

        // line 50
        yield "    ";
        if (("unknown" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 50, $this->source); })()), "symfonyState", [], "any", false, false, false, 50))) {
            // line 51
            yield "        ";
            $context["block_status"] = "";
            // line 52
            yield "        ";
            $context["symfony_version_status"] = "Unable to retrieve information about the Symfony version.";
            // line 53
            yield "    ";
        } elseif (("eol" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 53, $this->source); })()), "symfonyState", [], "any", false, false, false, 53))) {
            // line 54
            yield "        ";
            $context["block_status"] = "red";
            // line 55
            yield "        ";
            $context["symfony_version_status"] = "This Symfony version will no longer receive security fixes.";
            // line 56
            yield "    ";
        } elseif (("eom" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 56, $this->source); })()), "symfonyState", [], "any", false, false, false, 56))) {
            // line 57
            yield "        ";
            $context["block_status"] = "yellow";
            // line 58
            yield "        ";
            $context["symfony_version_status"] = "This Symfony version will only receive security fixes.";
            // line 59
            yield "    ";
        } elseif (("dev" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 59, $this->source); })()), "symfonyState", [], "any", false, false, false, 59))) {
            // line 60
            yield "        ";
            $context["block_status"] = "yellow";
            // line 61
            yield "        ";
            $context["symfony_version_status"] = "This Symfony version is still in the development phase.";
            // line 62
            yield "    ";
        } else {
            // line 63
            yield "        ";
            $context["block_status"] = "";
            // line 64
            yield "        ";
            $context["symfony_version_status"] = "";
            // line 65
            yield "    ";
        }
        // line 66
        yield "
    ";
        // line 67
        $context["icon"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 68
            yield "        <span class=\"sf-toolbar-label\">
            ";
            // line 69
            yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/symfony.svg");
            yield "
        </span>
        <span class=\"sf-toolbar-value\">";
            // line 71
            ((CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyState", [], "any", true, true, false, 71)) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 71, $this->source); })()), "symfonyversion", [], "any", false, false, false, 71), "html", null, true)) : (yield "n/a"));
            yield "</span>
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 73
        yield "
    ";
        // line 74
        $context["text"] = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 75
            yield "        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    ";
            // line 79
            if ((isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 79, $this->source); })())) {
                // line 80
                yield "                        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((isset($context["profiler_url"]) || array_key_exists("profiler_url", $context) ? $context["profiler_url"] : (function () { throw new RuntimeError('Variable "profiler_url" does not exist.', 80, $this->source); })()), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 80, $this->source); })()), "token", [], "any", false, false, false, 80), "html", null, true);
                yield "</a>
                    ";
            } else {
                // line 82
                yield "                        ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 82, $this->source); })()), "token", [], "any", false, false, false, 82), "html", null, true);
                yield "
                    ";
            }
            // line 84
            yield "                </span>
            </div>

            ";
            // line 87
            if ( !("n/a" === CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 87, $this->source); })()), "env", [], "any", false, false, false, 87))) {
                // line 88
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>";
                // line 90
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 90, $this->source); })()), "env", [], "any", false, false, false, 90), "html", null, true);
                yield "</span>
                </div>
            ";
            }
            // line 93
            yield "
            ";
            // line 94
            if ( !("n/a" === CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 94, $this->source); })()), "debug", [], "any", false, false, false, 94))) {
                // line 95
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-";
                // line 97
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 97, $this->source); })()), "debug", [], "any", false, false, false, 97)) ? ("green") : ("red"));
                yield "\">";
                yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 97, $this->source); })()), "debug", [], "any", false, false, false, 97)) ? ("enabled") : ("disabled"));
                yield "</span>
                </div>
            ";
            }
            // line 100
            yield "        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span";
            // line 105
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 105, $this->source); })()), "phpversionextra", [], "any", false, false, false, 105)) {
                yield " title=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 105, $this->source); })()), "phpversion", [], "any", false, false, false, 105) . CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 105, $this->source); })()), "phpversionextra", [], "any", false, false, false, 105)), "html", null, true);
                yield "\"";
            }
            yield ">
                    ";
            // line 106
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 106, $this->source); })()), "phpversion", [], "any", false, false, false, 106), "html", null, true);
            yield "
                    &nbsp; <a href=\"";
            // line 107
            yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
            yield "\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                ";
            // line 113
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 113, $this->source); })()), "hasXdebugInfo", [], "any", false, false, false, 113)) {
                // line 114
                yield "                    <a href=\"";
                yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_xdebug");
                yield "\" title=\"View xdebug_info()\">
                ";
            }
            // line 116
            yield "                <span class=\"sf-toolbar-status sf-toolbar-status-";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 116, $this->source); })()), "hasXdebug", [], "any", false, false, false, 116)) ? ("green") : ("gray"));
            yield "\">Xdebug ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 116, $this->source); })()), "hasXdebug", [], "any", false, false, false, 116)) ? ("✓") : ("✗"));
            yield "</span>
                ";
            // line 117
            if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 117, $this->source); })()), "hasXdebugInfo", [], "any", false, false, false, 117)) {
                // line 118
                yield "                    </a>
                ";
            }
            // line 120
            yield "                <span class=\"sf-toolbar-status sf-toolbar-status-";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 120, $this->source); })()), "hasapcu", [], "any", false, false, false, 120)) ? ("green") : ("gray"));
            yield "\">APCu ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 120, $this->source); })()), "hasapcu", [], "any", false, false, false, 120)) ? ("✓") : ("✗"));
            yield "</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-";
            // line 121
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 121, $this->source); })()), "haszendopcache", [], "any", false, false, false, 121)) ? ("green") : ("red"));
            yield "\">OPcache ";
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 121, $this->source); })()), "haszendopcache", [], "any", false, false, false, 121)) ? ("✓") : ("✗"));
            yield "</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>";
            // line 126
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 126, $this->source); })()), "sapiName", [], "any", false, false, false, 126), "html", null, true);
            yield "</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            ";
            // line 131
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["collector"] ?? null), "symfonyversion", [], "any", true, true, false, 131)) {
                // line 132
                yield "                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        <a href=\"https://symfony.com/doc/";
                // line 135
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 135, $this->source); })()), "symfonyversion", [], "any", false, false, false, 135), "html", null, true);
                yield "/index.html\" rel=\"help\">
                            Read Symfony ";
                // line 136
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 136, $this->source); })()), "symfonyversion", [], "any", false, false, false, 136), "html", null, true);
                yield " Docs
                        </a>
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"https://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            ";
            }
            // line 149
            yield "        </div>
    ";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
        // line 151
        yield "
    ";
        // line 152
        yield Twig\Extension\CoreExtension::include($this->env, $context, "@WebProfiler/Profiler/toolbar_item.html.twig", ["link" => true, "name" => "config", "status" => (isset($context["block_status"]) || array_key_exists("block_status", $context) ? $context["block_status"] : (function () { throw new RuntimeError('Variable "block_status" does not exist.', 152, $this->source); })()), "additional_classes" => "sf-toolbar-block-right", "block_attrs" => (("title=\"" . (isset($context["symfony_version_status"]) || array_key_exists("symfony_version_status", $context) ? $context["symfony_version_status"] : (function () { throw new RuntimeError('Variable "symfony_version_status" does not exist.', 152, $this->source); })())) . "\"")]);
        yield "
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 155
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 156
        yield "    <span class=\"label label-status-";
        yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 156, $this->source); })()), "symfonyState", [], "any", false, false, false, 156) == "eol")) ? ("red") : (((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 156, $this->source); })()), "symfonyState", [], "any", false, false, false, 156), ["eom", "dev"])) ? ("yellow") : (""))));
        yield "\">
        <span class=\"icon\">";
        // line 157
        yield Twig\Extension\CoreExtension::source($this->env, "@WebProfiler/Icon/config.svg");
        yield "</span>
        <strong>Configuration</strong>
    </span>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    // line 162
    public function block_panel($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "panel"));

        // line 163
        yield "    <h2>Symfony Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">
                ";
        // line 168
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 168, $this->source); })()), "symfonyversion", [], "any", false, false, false, 168), "html", null, true);
        yield "

                ";
        // line 170
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 170, $this->source); })()), "symfonylts", [], "any", false, false, false, 170)) {
            // line 171
            yield "                    <abbr class=\"config-symfony-version-lts\" title=\"This is a Long-Term Support version\">(LTS)</abbr>
                ";
        }
        // line 173
        yield "            </span>
            <span class=\"label\">Symfony version</span>
        </div>

        ";
        // line 177
        if ( !("n/a" === CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 177, $this->source); })()), "env", [], "any", false, false, false, 177))) {
            // line 178
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 179
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 179, $this->source); })()), "env", [], "any", false, false, false, 179), "html", null, true);
            yield "</span>
                <span class=\"label\">Environment</span>
            </div>
        ";
        }
        // line 183
        yield "
        ";
        // line 184
        if ( !("n/a" === CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 184, $this->source); })()), "debug", [], "any", false, false, false, 184))) {
            // line 185
            yield "            <div class=\"metric\">
                <span class=\"value\">";
            // line 186
            yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 186, $this->source); })()), "debug", [], "any", false, false, false, 186)) ? ("enabled") : ("disabled"));
            yield "</span>
                <span class=\"label\">Debug</span>
            </div>
        ";
        }
        // line 190
        yield "    </div>

    ";
        // line 192
        $context["symfony_status"] = ["dev" => "In Development", "stable" => "Maintained", "eom" => "Security Fixes Only", "eol" => "Unmaintained"];
        // line 193
        yield "    ";
        $context["symfony_status_class"] = ["dev" => "warning", "stable" => "success", "eom" => "warning", "eol" => "error"];
        // line 194
        yield "
    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">
                    <span class=\"config-symfony-version-status-badge status-";
        // line 199
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["symfony_status_class"]) || array_key_exists("symfony_status_class", $context) ? $context["symfony_status_class"] : (function () { throw new RuntimeError('Variable "symfony_status_class" does not exist.', 199, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 199, $this->source); })()), "symfonystate", [], "any", false, false, false, 199), [], "array", false, false, false, 199), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["symfony_status"]) || array_key_exists("symfony_status", $context) ? $context["symfony_status"] : (function () { throw new RuntimeError('Variable "symfony_status" does not exist.', 199, $this->source); })()), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 199, $this->source); })()), "symfonystate", [], "any", false, false, false, 199), [], "array", false, false, false, 199)), "html", null, true);
        yield "</span>
                </span>
                <span class=\"label\">Your Symfony version status</span>
            </div>

            ";
        // line 204
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 204, $this->source); })()), "symfonylts", [], "any", false, false, false, 204)) {
            // line 205
            yield "                <div class=\"metric\">
                    <span class=\"value config-symfony-eol\">
                        ";
            // line 207
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 207, $this->source); })()), "symfonyeom", [], "any", false, false, false, 207), "html", null, true);
            yield "
                    </span>
                    <span class=\"label\">Bug fixes ";
            // line 209
            yield ((CoreExtension::inFilter(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 209, $this->source); })()), "symfonystate", [], "any", false, false, false, 209), ["eom", "eol"])) ? ("ended on") : ("until"));
            yield "</span>
                </div>
            ";
        }
        // line 212
        yield "
            <div class=\"metric\">
                <span class=\"value config-symfony-eol\">
                    ";
        // line 215
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 215, $this->source); })()), "symfonyeol", [], "any", false, false, false, 215), "html", null, true);
        yield "
                </span>
                <span class=\"label\">
                    ";
        // line 218
        yield ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 218, $this->source); })()), "symfonylts", [], "any", false, false, false, 218)) ? ("Security fixes") : ("Bug fixes and security fixes"));
        yield "
                    ";
        // line 219
        yield ((("eol" == CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 219, $this->source); })()), "symfonystate", [], "any", false, false, false, 219))) ? ("ended on") : ("until"));
        yield "</span>
            </div>
        </div>
    </div>

    <a class=\"config-symfony-version-roadmap-link\" href=\"https://symfony.com/releases/";
        // line 224
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 224, $this->source); })()), "symfonyminorversion", [], "any", false, false, false, 224), "html", null, true);
        yield "\">View Symfony ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 224, $this->source); })()), "symfonyversion", [], "any", false, false, false, 224), "html", null, true);
        yield " release details</a>

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">";
        // line 230
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 230, $this->source); })()), "phpversion", [], "any", false, false, false, 230), "html", null, true);
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 230, $this->source); })()), "phpversionextra", [], "any", false, false, false, 230)) {
            yield " <span class=\"unit\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 230, $this->source); })()), "phpversionextra", [], "any", false, false, false, 230), "html", null, true);
            yield "</span>";
        }
        yield "</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 235
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 235, $this->source); })()), "phparchitecture", [], "any", false, false, false, 235), "html", null, true);
        yield " <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 240, $this->source); })()), "phpintllocale", [], "any", false, false, false, 240), "html", null, true);
        yield "</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">";
        // line 245
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 245, $this->source); })()), "phptimezone", [], "any", false, false, false, 245), "html", null, true);
        yield "</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 253
        yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 253, $this->source); })()), "haszendopcache", [], "any", false, false, false, 253)) ? ("value-shows-no-color") : (""));
        yield "\">";
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 253, $this->source); })()), "haszendopcache", [], "any", false, false, false, 253)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                <span class=\"label\">OPcache</span>
            </div>

            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 258
        yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 258, $this->source); })()), "hasapcu", [], "any", false, false, false, 258)) ? ("value-shows-no-color") : (""));
        yield "\">";
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 258, $this->source); })()), "hasapcu", [], "any", false, false, false, 258)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                <span class=\"label\">APCu</span>
            </div>

            <div class=\"metric\">
                <span class=\"value value-is-icon ";
        // line 263
        yield (( !CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 263, $this->source); })()), "hasxdebug", [], "any", false, false, false, 263)) ? ("value-shows-no-color") : (""));
        yield "\">";
        yield Twig\Extension\CoreExtension::source($this->env, (("@WebProfiler/Icon/" . ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 263, $this->source); })()), "hasxdebug", [], "any", false, false, false, 263)) ? ("yes") : ("no"))) . ".svg"));
        yield "</span>
                <span class=\"label\">Xdebug</span>
            </div>
        </div>
    </div>

    <p>
        <a href=\"";
        // line 270
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("_profiler_phpinfo");
        yield "\">View full PHP configuration</a>
    </p>

    ";
        // line 273
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 273, $this->source); })()), "bundles", [], "any", false, false, false, 273)) {
            // line 274
            yield "        <h2>Enabled Bundles <small>(";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 274, $this->source); })()), "bundles", [], "any", false, false, false, 274)), "html", null, true);
            yield ")</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                ";
            // line 283
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::keys(CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 283, $this->source); })()), "bundles", [], "any", false, false, false, 283))));
            foreach ($context['_seq'] as $context["_key"] => $context["name"]) {
                // line 284
                yield "                <tr>
                    <th scope=\"row\" class=\"font-normal\">";
                // line 285
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["name"], "html", null, true);
                yield "</th>
                    <td class=\"font-normal\">";
                // line 286
                yield $this->extensions['Symfony\Bundle\WebProfilerBundle\Twig\WebProfilerExtension']->dumpData($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["collector"]) || array_key_exists("collector", $context) ? $context["collector"] : (function () { throw new RuntimeError('Variable "collector" does not exist.', 286, $this->source); })()), "bundles", [], "any", false, false, false, 286), $context["name"], [], "array", false, false, false, 286));
                yield "</td>
                </tr>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['name'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 289
            yield "            </tbody>
        </table>
    ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "@WebProfiler/Collector/config.html.twig";
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
        return array (  669 => 289,  660 => 286,  656 => 285,  653 => 284,  649 => 283,  636 => 274,  634 => 273,  628 => 270,  616 => 263,  606 => 258,  596 => 253,  585 => 245,  577 => 240,  569 => 235,  556 => 230,  545 => 224,  537 => 219,  533 => 218,  527 => 215,  522 => 212,  516 => 209,  511 => 207,  507 => 205,  505 => 204,  495 => 199,  488 => 194,  485 => 193,  483 => 192,  479 => 190,  472 => 186,  469 => 185,  467 => 184,  464 => 183,  457 => 179,  454 => 178,  452 => 177,  446 => 173,  442 => 171,  440 => 170,  435 => 168,  428 => 163,  418 => 162,  403 => 157,  398 => 156,  388 => 155,  375 => 152,  372 => 151,  367 => 149,  351 => 136,  347 => 135,  342 => 132,  340 => 131,  332 => 126,  322 => 121,  315 => 120,  311 => 118,  309 => 117,  302 => 116,  296 => 114,  294 => 113,  285 => 107,  281 => 106,  273 => 105,  266 => 100,  258 => 97,  254 => 95,  252 => 94,  249 => 93,  243 => 90,  239 => 88,  237 => 87,  232 => 84,  226 => 82,  218 => 80,  216 => 79,  210 => 75,  208 => 74,  205 => 73,  199 => 71,  194 => 69,  191 => 68,  189 => 67,  186 => 66,  183 => 65,  180 => 64,  177 => 63,  174 => 62,  171 => 61,  168 => 60,  165 => 59,  162 => 58,  159 => 57,  156 => 56,  153 => 55,  150 => 54,  147 => 53,  144 => 52,  141 => 51,  138 => 50,  128 => 49,  72 => 4,  62 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends '@WebProfiler/Profiler/layout.html.twig' %}

{% block head %}
    {{ parent() }}

    <style>
        .config-symfony-version-lts {
            border: 0;
            color: var(--color-muted);
            font-size: 21px;
            line-height: 33px;
        }
        .config-symfony-version-lts[title] {
            text-decoration: none;
        }
        .config-symfony-version-status-badge {
            background-color: var(--badge-background);
            border-radius: 4px;
            color: var(--badge-color);
            display: inline-block;
            font-size: 15px;
            font-weight: bold;
            margin: 10px 0 5px;
            padding: 3px 7px;
            white-space: nowrap;
        }
        .config-symfony-version-status-badge.status-success {
            background-color: var(--badge-success-background);
            color: var(--badge-success-color);
        }
        .config-symfony-version-status-badge.status-warning {
            background-color: var(--badge-warning-background);
            color: var(--badge-warning-color);
        }
        .config-symfony-version-status-badge.status-error {
            background-color: var(--badge-danger-background);
            color: var(--badge-danger-color);
        }
        .config-symfony-version-roadmap-link {
            display: inline-block;
            margin: 10px 5px 5px;
        }
        .config-symfony-eol {
            margin-top: 5px;
        }
    </style>
{% endblock %}

{% block toolbar %}
    {% if 'unknown' == collector.symfonyState %}
        {% set block_status = '' %}
        {% set symfony_version_status = 'Unable to retrieve information about the Symfony version.' %}
    {% elseif 'eol' == collector.symfonyState %}
        {% set block_status = 'red' %}
        {% set symfony_version_status = 'This Symfony version will no longer receive security fixes.' %}
    {% elseif 'eom' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version will only receive security fixes.' %}
    {% elseif 'dev' == collector.symfonyState %}
        {% set block_status = 'yellow' %}
        {% set symfony_version_status = 'This Symfony version is still in the development phase.' %}
    {% else %}
        {% set block_status = '' %}
        {% set symfony_version_status = '' %}
    {% endif %}

    {% set icon %}
        <span class=\"sf-toolbar-label\">
            {{ source('@WebProfiler/Icon/symfony.svg') }}
        </span>
        <span class=\"sf-toolbar-value\">{{ collector.symfonyState is defined ? collector.symfonyversion : 'n/a' }}</span>
    {% endset %}

    {% set text %}
        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece\">
                <b>Profiler token</b>
                <span>
                    {% if profiler_url %}
                        <a href=\"{{ profiler_url }}\">{{ collector.token }}</a>
                    {% else %}
                        {{ collector.token }}
                    {% endif %}
                </span>
            </div>

            {% if 'n/a' is not same as(collector.env) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Environment</b>
                    <span>{{ collector.env }}</span>
                </div>
            {% endif %}

            {% if 'n/a' is not same as(collector.debug) %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Debug</b>
                    <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.debug ? 'green' : 'red' }}\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                </div>
            {% endif %}
        </div>

        <div class=\"sf-toolbar-info-group\">
            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php\">
                <b>PHP version</b>
                <span{% if collector.phpversionextra %} title=\"{{ collector.phpversion ~ collector.phpversionextra }}\"{% endif %}>
                    {{ collector.phpversion }}
                    &nbsp; <a href=\"{{ path('_profiler_phpinfo') }}\">View phpinfo()</a>
                </span>
            </div>

            <div class=\"sf-toolbar-info-piece sf-toolbar-info-php-ext\">
                <b>PHP Extensions</b>
                {% if collector.hasXdebugInfo %}
                    <a href=\"{{ path('_profiler_xdebug') }}\" title=\"View xdebug_info()\">
                {% endif %}
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasXdebug ? 'green' : 'gray' }}\">Xdebug {{ collector.hasXdebug ? '✓' : '✗' }}</span>
                {% if collector.hasXdebugInfo %}
                    </a>
                {% endif %}
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.hasapcu ? 'green' : 'gray' }}\">APCu {{ collector.hasapcu ? '✓' : '✗' }}</span>
                <span class=\"sf-toolbar-status sf-toolbar-status-{{ collector.haszendopcache ? 'green' : 'red' }}\">OPcache {{ collector.haszendopcache ? '✓' : '✗' }}</span>
            </div>

            <div class=\"sf-toolbar-info-piece\">
                <b>PHP SAPI</b>
                <span>{{ collector.sapiName }}</span>
            </div>
        </div>

        <div class=\"sf-toolbar-info-group\">
            {% if collector.symfonyversion is defined %}
                <div class=\"sf-toolbar-info-piece\">
                    <b>Resources</b>
                    <span>
                        <a href=\"https://symfony.com/doc/{{ collector.symfonyversion }}/index.html\" rel=\"help\">
                            Read Symfony {{ collector.symfonyversion }} Docs
                        </a>
                    </span>
                </div>
                <div class=\"sf-toolbar-info-piece\">
                    <b>Help</b>
                    <span>
                        <a href=\"https://symfony.com/support\">
                            Symfony Support Channels
                        </a>
                    </span>
                </div>
            {% endif %}
        </div>
    {% endset %}

    {{ include('@WebProfiler/Profiler/toolbar_item.html.twig', { link: true, name: 'config', status: block_status, additional_classes: 'sf-toolbar-block-right', block_attrs: 'title=\"' ~ symfony_version_status ~ '\"' }) }}
{% endblock %}

{% block menu %}
    <span class=\"label label-status-{{ collector.symfonyState == 'eol' ? 'red' : collector.symfonyState in ['eom', 'dev'] ? 'yellow' }}\">
        <span class=\"icon\">{{ source('@WebProfiler/Icon/config.svg') }}</span>
        <strong>Configuration</strong>
    </span>
{% endblock %}

{% block panel %}
    <h2>Symfony Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">
                {{ collector.symfonyversion }}

                {% if collector.symfonylts %}
                    <abbr class=\"config-symfony-version-lts\" title=\"This is a Long-Term Support version\">(LTS)</abbr>
                {% endif %}
            </span>
            <span class=\"label\">Symfony version</span>
        </div>

        {% if 'n/a' is not same as(collector.env) %}
            <div class=\"metric\">
                <span class=\"value\">{{ collector.env }}</span>
                <span class=\"label\">Environment</span>
            </div>
        {% endif %}

        {% if 'n/a' is not same as(collector.debug) %}
            <div class=\"metric\">
                <span class=\"value\">{{ collector.debug ? 'enabled' : 'disabled' }}</span>
                <span class=\"label\">Debug</span>
            </div>
        {% endif %}
    </div>

    {% set symfony_status = { dev: 'In Development', stable: 'Maintained', eom: 'Security Fixes Only', eol: 'Unmaintained' } %}
    {% set symfony_status_class = { dev: 'warning', stable: 'success', eom: 'warning', eol: 'error' } %}

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value\">
                    <span class=\"config-symfony-version-status-badge status-{{ symfony_status_class[collector.symfonystate] }}\">{{ symfony_status[collector.symfonystate]|upper }}</span>
                </span>
                <span class=\"label\">Your Symfony version status</span>
            </div>

            {% if collector.symfonylts %}
                <div class=\"metric\">
                    <span class=\"value config-symfony-eol\">
                        {{ collector.symfonyeom }}
                    </span>
                    <span class=\"label\">Bug fixes {{ collector.symfonystate in ['eom', 'eol'] ? 'ended on' : 'until' }}</span>
                </div>
            {% endif %}

            <div class=\"metric\">
                <span class=\"value config-symfony-eol\">
                    {{ collector.symfonyeol }}
                </span>
                <span class=\"label\">
                    {{ collector.symfonylts ? 'Security fixes' : 'Bug fixes and security fixes' }}
                    {{ 'eol' == collector.symfonystate ? 'ended on' : 'until' }}</span>
            </div>
        </div>
    </div>

    <a class=\"config-symfony-version-roadmap-link\" href=\"https://symfony.com/releases/{{ collector.symfonyminorversion }}\">View Symfony {{ collector.symfonyversion }} release details</a>

    <h2>PHP Configuration</h2>

    <div class=\"metrics\">
        <div class=\"metric\">
            <span class=\"value\">{{ collector.phpversion }}{% if collector.phpversionextra %} <span class=\"unit\">{{ collector.phpversionextra }}</span>{% endif %}</span>
            <span class=\"label\">PHP version</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.phparchitecture }} <span class=\"unit\">bits</span></span>
            <span class=\"label\">Architecture</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.phpintllocale }}</span>
            <span class=\"label\">Intl locale</span>
        </div>

        <div class=\"metric\">
            <span class=\"value\">{{ collector.phptimezone }}</span>
            <span class=\"label\">Timezone</span>
        </div>
    </div>

    <div class=\"metrics\">
        <div class=\"metric-group\">
            <div class=\"metric\">
                <span class=\"value value-is-icon {{ not collector.haszendopcache ? 'value-shows-no-color' }}\">{{ source('@WebProfiler/Icon/' ~ (collector.haszendopcache ? 'yes' : 'no') ~ '.svg') }}</span>
                <span class=\"label\">OPcache</span>
            </div>

            <div class=\"metric\">
                <span class=\"value value-is-icon {{ not collector.hasapcu ? 'value-shows-no-color' }}\">{{ source('@WebProfiler/Icon/' ~ (collector.hasapcu ? 'yes' : 'no') ~ '.svg') }}</span>
                <span class=\"label\">APCu</span>
            </div>

            <div class=\"metric\">
                <span class=\"value value-is-icon {{ not collector.hasxdebug ? 'value-shows-no-color' }}\">{{ source('@WebProfiler/Icon/' ~ (collector.hasxdebug ? 'yes' : 'no') ~ '.svg') }}</span>
                <span class=\"label\">Xdebug</span>
            </div>
        </div>
    </div>

    <p>
        <a href=\"{{ path('_profiler_phpinfo') }}\">View full PHP configuration</a>
    </p>

    {% if collector.bundles %}
        <h2>Enabled Bundles <small>({{ collector.bundles|length }})</small></h2>
        <table>
            <thead>
                <tr>
                    <th class=\"key\">Name</th>
                    <th>Class</th>
                </tr>
            </thead>
            <tbody>
                {% for name in collector.bundles|keys|sort %}
                <tr>
                    <th scope=\"row\" class=\"font-normal\">{{ name }}</th>
                    <td class=\"font-normal\">{{ profiler_dump(collector.bundles[name]) }}</td>
                </tr>
                {% endfor %}
            </tbody>
        </table>
    {% endif %}
{% endblock %}
", "@WebProfiler/Collector/config.html.twig", "/home/haroun/Documents/etna/symfony_crowdin/vendor/symfony/web-profiler-bundle/Resources/views/Collector/config.html.twig");
    }
}

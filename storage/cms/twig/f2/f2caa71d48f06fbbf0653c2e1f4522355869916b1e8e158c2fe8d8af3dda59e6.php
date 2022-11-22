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

/* C:\fourcargo/themes/fourcargo/partials/site/header.htm */
class __TwigTemplate_ec4b9b450df20385f9fbc18370a5e15c91249f69511b1b02285062ebeb122e49 extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<header class=\"w-full absolute tablets-mini:relative tablets-mini:bg-orange1 md:top-4 top-0 left-0 flex items-center justify-center p-8 tablets-mini:py-0 z-50\">
    <nav class=\"relative md:container md:mx-auto w-full flex items-center justify-between text-white\">
        <a class=\"nav-logo\">
            <img src=\"";
        // line 4
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 4, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 4, $this->source));
        echo "\" alt=\"Logo\"
                class=\"block w-40 tablets-mini:w-[5rem] absolute tablets-mini:relative tablets-mini:top-[0px] md:-top-20 -top-14 sm:left-6 left-0 mb-2\" />
        </a>

        <ul
            class=\"nav flex md:items-center md:justify-between gap-4 lg:gap-9 md:gap-4 md:text-md text-md font-semibold md:flex md:static md:flex-row flex-col fixed md:bg-transparent bg-white md:text-white text-orange1 md:p-0 p-6 top-0 md:w-fit w-60 ease-out duration-300 md:h-fit h-full md:opacity-100 opacity-0 -left-72\">
            <li class=\"md:hidden -translate-x-1 btn-nav-close\">
                <span class=\"iconify text-4xl cursor-pointer mb-4\" data-icon=\"radix-icons:cross-2\"></span>
            </li>
            <li class=\"link-navbar\"><a href=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo " \" class=\"\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link1"] ?? null), 13, $this->source), "html", null, true);
        echo "</a></li>
            <li class=\"link-navbar\"><a href=\"";
        // line 14
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("about");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link2"] ?? null), 14, $this->source), "html", null, true);
        echo "</a></li>
            <li class=\"link-navbar\"><a href=\"";
        // line 15
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("our-service-air");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link3"] ?? null), 15, $this->source), "html", null, true);
        echo "</a></li>
            <li class=\"link-navbar\"><a href=\"";
        // line 16
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tracking");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link4"] ?? null), 16, $this->source), "html", null, true);
        echo "</a></li>
            <li class=\"link-navbar\"><a href=\"";
        // line 17
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("jasa-belanja");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link5"] ?? null), 17, $this->source), "html", null, true);
        echo "</a></li>
            <li class=\"link-navbar\"><a href=\"";
        // line 18
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("artikel");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link6"] ?? null), 18, $this->source), "html", null, true);
        echo "</a></li>
            <li class=\"link-navbar\"><a href=\"";
        // line 19
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link7"] ?? null), 19, $this->source), "html", null, true);
        echo "</a></li>
        </ul>

        <button class=\"md:hidden block btn-nav-open\">
            <span class=\"iconify text-4xl\" data-icon=\"fluent:list-16-filled\"></span>
        </button>
    </nav>
</header>";
    }

    public function getTemplateName()
    {
        return "C:\\fourcargo/themes/fourcargo/partials/site/header.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 19,  87 => 18,  81 => 17,  75 => 16,  69 => 15,  63 => 14,  57 => 13,  44 => 4,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"w-full absolute tablets-mini:relative tablets-mini:bg-orange1 md:top-4 top-0 left-0 flex items-center justify-center p-8 tablets-mini:py-0 z-50\">
    <nav class=\"relative md:container md:mx-auto w-full flex items-center justify-between text-white\">
        <a class=\"nav-logo\">
            <img src=\"{{ url }}{{ logo |media }}\" alt=\"Logo\"
                class=\"block w-40 tablets-mini:w-[5rem] absolute tablets-mini:relative tablets-mini:top-[0px] md:-top-20 -top-14 sm:left-6 left-0 mb-2\" />
        </a>

        <ul
            class=\"nav flex md:items-center md:justify-between gap-4 lg:gap-9 md:gap-4 md:text-md text-md font-semibold md:flex md:static md:flex-row flex-col fixed md:bg-transparent bg-white md:text-white text-orange1 md:p-0 p-6 top-0 md:w-fit w-60 ease-out duration-300 md:h-fit h-full md:opacity-100 opacity-0 -left-72\">
            <li class=\"md:hidden -translate-x-1 btn-nav-close\">
                <span class=\"iconify text-4xl cursor-pointer mb-4\" data-icon=\"radix-icons:cross-2\"></span>
            </li>
            <li class=\"link-navbar\"><a href=\"{{ 'home'|page }} \" class=\"\">{{ link1 }}</a></li>
            <li class=\"link-navbar\"><a href=\"{{ 'about'|page }}\">{{ link2 }}</a></li>
            <li class=\"link-navbar\"><a href=\"{{ 'our-service-air'|page }}\">{{ link3 }}</a></li>
            <li class=\"link-navbar\"><a href=\"{{ 'tracking'|page }}\">{{ link4 }}</a></li>
            <li class=\"link-navbar\"><a href=\"{{ 'jasa-belanja'|page }}\">{{ link5 }}</a></li>
            <li class=\"link-navbar\"><a href=\"{{ 'artikel'|page }}\">{{ link6 }}</a></li>
            <li class=\"link-navbar\"><a href=\"{{ 'contact'|page }}\">{{ link7 }}</a></li>
        </ul>

        <button class=\"md:hidden block btn-nav-open\">
            <span class=\"iconify text-4xl\" data-icon=\"fluent:list-16-filled\"></span>
        </button>
    </nav>
</header>", "C:\\fourcargo/themes/fourcargo/partials/site/header.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 4, "media" => 4, "page" => 13);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape', 'media', 'page'],
                []
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

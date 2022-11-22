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

/* C:\fourcargo/themes/fourcargo/partials/site/footer.htm */
class __TwigTemplate_ebe222f64cd2c8848feb2c0320b718b9d051dbc1d7836a669fcea9f954aa5e74 extends \Twig\Template
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
        echo "<footer
    class=\" overflow-hidden relative bg-cover bg-center bg-no-repeat before:block before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-orange1 before:opacity-90\" style=\"background-image: url(";
        // line 2
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 2, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["background"] ?? null), 2, $this->source));
        echo ");\">
    <div class=\"relative md:container md:mx-auto pt-10 pr-20 flex items-center gap-10\">
        <div class=\"logo\">
            <img src=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 5, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(($context["logo"] ?? null), 5, $this->source));
        echo "\" alt=\"\" class=\"img w-44 absolute -top-10 left-10\" />
        </div>
        <div class=\"content lg:pl-60 sm:pl-0 lg:mt-0 sm:mt-36 mt-48 w-full\">
            <div class=\"heading-footer flex justify-between text-white items-center border-b pb-4 px-6\">
                <h1 class=\"name-pt font-bold text-2xl sm:text-left text-center\">";
        // line 9
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 9, $this->source), "html", null, true);
        echo "</h1>
                <div class=\"heading-sosmed flex justify-center sm:w-fit items-center text-5xl gap-4\">
                    ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["social_media"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["sosmed"]) {
            // line 12
            echo "                        <a href=\"";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sosmed"], "link", [], "any", false, false, true, 12), 12, $this->source), "html", null, true);
            echo "\" >
                            <img src=\"";
            // line 13
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["url"] ?? null), 13, $this->source), "html", null, true);
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["sosmed"], "icon", [], "any", false, false, true, 13), 13, $this->source));
            echo "\" alt=\"\" class=\"w-12\">
                        </a>                
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['sosmed'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 16
        echo "                </div>
            </div>
            <div class=\"mt-8 flex md:flex-row flex-col items-start justify-between\">
                <div>
                    <div class=\"footer-info\">
                        <span class=\"iconify \" data-icon=\"bx:home-alt\" style=\"color: #fac745\"></span>
                        <div>
                            ";
        // line 23
        echo $this->sandbox->ensureToStringAllowed(($context["address"] ?? null), 23, $this->source);
        echo "
                        </div>
                    </div>
                    <div class=\"footer-info items-center\">
                        <span class=\"iconify\" data-icon=\"eva:email-outline\" style=\"color: #ffc32f\"></span>
                        <div>
                            ";
        // line 29
        echo $this->sandbox->ensureToStringAllowed(($context["email"] ?? null), 29, $this->source);
        echo "
                        </div>
                    </div>
                    <div class=\"footer-info\">
                        <span class=\"iconify\" data-icon=\"mdi-light:phone\" style=\"color: #ffc32f\"></span>
                        <div class=\"flex flex-col\">
                            ";
        // line 35
        echo $this->sandbox->ensureToStringAllowed(($context["phone"] ?? null), 35, $this->source);
        echo "
                        </div>
                    </div>
                </div>
                <div class=\"flex gap-4 md:mt-0 mt-10 w-60 sm:inherit justify-between\">
                    <div class=\"footer-link\">
                        <a href=\"";
        // line 41
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("home");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link1"] ?? null), 41, $this->source), "html", null, true);
        echo "</a>
                        <a href=\"about.html\">";
        // line 42
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link2"] ?? null), 42, $this->source), "html", null, true);
        echo "</a>
                        <a href=\"";
        // line 43
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("our-service-air");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link3"] ?? null), 43, $this->source), "html", null, true);
        echo "</a>
                        <a href=\"";
        // line 44
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("tracking");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link4"] ?? null), 44, $this->source), "html", null, true);
        echo "</a>
                    </div>
                    <div class=\"footer-link\">
                        <a href=\"";
        // line 47
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("jasa-belanja");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link5"] ?? null), 47, $this->source), "html", null, true);
        echo "</a>
                        <a href=\"";
        // line 48
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("artikel");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link6"] ?? null), 48, $this->source), "html", null, true);
        echo "</a>
                        <a href=\"";
        // line 49
        echo $this->extensions['Cms\Twig\Extension']->pageFilter("contact");
        echo "\">";
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["link7"] ?? null), 49, $this->source), "html", null, true);
        echo "</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"absolute bottom-0 w-full bg-orange2 py-4 mt-20 text-white font-semibold\">
        <div class=\"md:container mx-auto copyright w-full px-10 text-left font-bold\">
            <div>";
        // line 58
        echo $this->sandbox->ensureToStringAllowed(($context["copyright"] ?? null), 58, $this->source);
        echo "</div>
        </div>
    </div>
</footer>";
    }

    public function getTemplateName()
    {
        return "C:\\fourcargo/themes/fourcargo/partials/site/footer.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 58,  153 => 49,  147 => 48,  141 => 47,  133 => 44,  127 => 43,  123 => 42,  117 => 41,  108 => 35,  99 => 29,  90 => 23,  81 => 16,  71 => 13,  66 => 12,  62 => 11,  57 => 9,  49 => 5,  42 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<footer
    class=\" overflow-hidden relative bg-cover bg-center bg-no-repeat before:block before:absolute before:top-0 before:left-0 before:w-full before:h-full before:bg-orange1 before:opacity-90\" style=\"background-image: url({{ url }}{{ background|media}});\">
    <div class=\"relative md:container md:mx-auto pt-10 pr-20 flex items-center gap-10\">
        <div class=\"logo\">
            <img src=\"{{ url }}{{ logo |media }}\" alt=\"\" class=\"img w-44 absolute -top-10 left-10\" />
        </div>
        <div class=\"content lg:pl-60 sm:pl-0 lg:mt-0 sm:mt-36 mt-48 w-full\">
            <div class=\"heading-footer flex justify-between text-white items-center border-b pb-4 px-6\">
                <h1 class=\"name-pt font-bold text-2xl sm:text-left text-center\">{{ title }}</h1>
                <div class=\"heading-sosmed flex justify-center sm:w-fit items-center text-5xl gap-4\">
                    {% for sosmed in social_media  %}
                        <a href=\"{{ sosmed.link }}\" >
                            <img src=\"{{ url }}{{ sosmed.icon |media }}\" alt=\"\" class=\"w-12\">
                        </a>                
                    {% endfor %}
                </div>
            </div>
            <div class=\"mt-8 flex md:flex-row flex-col items-start justify-between\">
                <div>
                    <div class=\"footer-info\">
                        <span class=\"iconify \" data-icon=\"bx:home-alt\" style=\"color: #fac745\"></span>
                        <div>
                            {{ address|raw }}
                        </div>
                    </div>
                    <div class=\"footer-info items-center\">
                        <span class=\"iconify\" data-icon=\"eva:email-outline\" style=\"color: #ffc32f\"></span>
                        <div>
                            {{ email|raw }}
                        </div>
                    </div>
                    <div class=\"footer-info\">
                        <span class=\"iconify\" data-icon=\"mdi-light:phone\" style=\"color: #ffc32f\"></span>
                        <div class=\"flex flex-col\">
                            {{ phone|raw }}
                        </div>
                    </div>
                </div>
                <div class=\"flex gap-4 md:mt-0 mt-10 w-60 sm:inherit justify-between\">
                    <div class=\"footer-link\">
                        <a href=\"{{ 'home'|page }}\">{{ link1 }}</a>
                        <a href=\"about.html\">{{ link2 }}</a>
                        <a href=\"{{ 'our-service-air'|page }}\">{{ link3 }}</a>
                        <a href=\"{{ 'tracking'|page }}\">{{ link4 }}</a>
                    </div>
                    <div class=\"footer-link\">
                        <a href=\"{{ 'jasa-belanja'|page }}\">{{ link5 }}</a>
                        <a href=\"{{ 'artikel'|page }}\">{{ link6 }}</a>
                        <a href=\"{{ 'contact'|page }}\">{{ link7 }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class=\"absolute bottom-0 w-full bg-orange2 py-4 mt-20 text-white font-semibold\">
        <div class=\"md:container mx-auto copyright w-full px-10 text-left font-bold\">
            <div>{{ copyright|raw }}</div>
        </div>
    </div>
</footer>", "C:\\fourcargo/themes/fourcargo/partials/site/footer.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("for" => 11);
        static $filters = array("escape" => 2, "media" => 2, "raw" => 23, "page" => 41);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['for'],
                ['escape', 'media', 'raw', 'page'],
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

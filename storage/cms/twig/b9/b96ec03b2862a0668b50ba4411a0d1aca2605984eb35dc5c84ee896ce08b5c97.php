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

/* C:\fourcargo/themes/fourcargo/pages/home.htm */
class __TwigTemplate_f64fc9b53d49b37249f616feae94d4f48d9d3a5f6f4fcdec791371410f4bafc2 extends \Twig\Template
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
        $context["BASEURL"] = "http://127.0.0.1:8000";
        // line 2
        echo "
";
        // line 3
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['link1'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "navbar_link1", [], "any", false, false, true, 3)        ;
        $context['__cms_partial_params']['link2'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "navbar_link2", [], "any", false, false, true, 3)        ;
        $context['__cms_partial_params']['link3'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "navbar_link3", [], "any", false, false, true, 3)        ;
        $context['__cms_partial_params']['link4'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "navbar_link4", [], "any", false, false, true, 3)        ;
        $context['__cms_partial_params']['link5'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "navbar_link5", [], "any", false, false, true, 3)        ;
        $context['__cms_partial_params']['link6'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "navbar_link6", [], "any", false, false, true, 3)        ;
        $context['__cms_partial_params']['link7'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "navbar_link7", [], "any", false, false, true, 3)        ;
        $context['__cms_partial_params']['logo'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 3), "navbar_logo", [], "any", false, false, true, 3)        ;
        $context['__cms_partial_params']['url'] = ($context["BASEURL"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 4
        echo "
  <section>
      <!-- Swiper -->
      <div class=\"swiper mySwiper\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img src=\"";
        // line 10
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Home/bg1.jpg");
        echo "\" alt=\"\" class=\"w-full\">
          </div>
          <div class=\"swiper-slide\">
            <img src=\"";
        // line 13
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Home/bg2.jpg");
        echo "\" alt=\"\" class=\"w-full\">
          </div>
        </div>
        <div class=\"swiper-pagination\"></div>
      </div>

  </section>



  <!-- <section
    class='bar-section-header h-45 bg-cover relative before:block before:absolute before:right-0 before:bg-linear-orange before:w-full xl:before:w-3/5 lg:before:w-3/4 lg:before:opacity-100 before:opacity-80 before:h-full' style=\"background-image: url(";
        // line 24
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 24, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 24), "section1_background", [], "any", false, false, true, 24), 24, $this->source));
        echo ");\">
    <div class=\"md:container md:mx-auto w-full h-full flex flex-col items-center pt-10\">
      <div class=\"w-full flex justify-center lg:justify-end md:justify-end tablets:justify-center tablets:items-center mb-36 z-10 lg:mx-7 pt-20 px-8\">
        <div class=\"content mt-20 lg:mr-16 md:mr-10 text-left lg:translate-x-16  tablets:mr-0\">
          <h1 class=\"sm:text-4/5xl text-4xl leading-tight text-white font-bold\">
            <span class=\"bg-linear-text-orange px-1 md:px-2 pb-4\">";
        // line 29
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 29), "section1_title1", [], "any", false, false, true, 29), 29, $this->source), "html", null, true);
        echo "</span>
            <br>
            <span class=\"bg-linear-text-orange px-1 md:px-2 pb-3\"> ";
        // line 31
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 31), "section1_title2", [], "any", false, false, true, 31), 31, $this->source), "html", null, true);
        echo "</span>
            <br>
            <span class=\"px-1\">";
        // line 33
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 33), "section1_title3", [], "any", false, false, true, 33), 33, $this->source), "html", null, true);
        echo "&nbsp;</span></h1>
          <h4 class=\" mt-4 text-xl text-orange1 font-bold bg-white w-fit py-0.5 px-2 rounded-xl\">";
        // line 34
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 34), "section1_subtitle", [], "any", false, false, true, 34), 34, $this->source), "html", null, true);
        echo "</h4>
        </div>
      </div>

      <div class=\"lg:w-2/4 w-10/12 bg-white p-4 z-20 sm:-mt-0 -mt-10\">
        <label for=\"resi\" class=\"text-grey font-medium\">";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 39), "section1_input_title", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</label>
        <div class=\"w-full flex justify-between items-center sm:flex-row flex-col gap-3 mt-2\">
          <input
            class=\"h-full sm:w-fit w-full flex-auto border py-4 px-5 font-semibold text-sm placeholder-slate-700 inline-block \"
            type=\"text\" placeholder=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 43), "section1_input_placeholder", [], "any", false, false, true, 43), 43, $this->source), "html", null, true);
        echo "\" id=\"resi\"/>
            <button name=\"submit\" class=\"sm:w-fit w-full py-3 px-9 text-lg bg-orange2 text-white font-extrabold \" id=\"checkResi\">
              Lacak
            </button>
        </div>
      </div>
    </div>
  </section> -->
  <section class=\"service-container relative md:h-96 bg-cover before:absolute before:top-0 before:left-0 before:h-full before:w-full before:bg-black before:opacity-40 before:z-[-1] z-10 \" style=\"background-image: url(";
        // line 51
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 51, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 51), "section2_background", [], "any", false, false, true, 51), 51, $this->source));
        echo "); \">
    <div class=\"md:container md:mx-auto sm:p-16 p-8  text-white\">
      <article class=\"content\">
        <h1 class=\"font-bold text-4xl mb-5 leading-snug\">
        <span class=\"px-1\">";
        // line 55
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 55), "section2_title1", [], "any", false, false, true, 55), 55, $this->source), "html", null, true);
        echo "</span>
        <br>
        <span class=\"bg-white rounded-sm text-orange1 px-1\">";
        // line 57
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 57), "section2_title2", [], "any", false, false, true, 57), 57, $this->source), "html", null, true);
        echo "
        </span>
      </h1>
      <div class=\"lg:w-1/2 md:w-5/6\">";
        // line 60
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 60), "section2_description", [], "any", false, false, true, 60), 60, $this->source);
        echo "</div>
      </article>

      <div
        class=\"service w-full flex flex-wrap sm:flex-row flex-col semi-tablets:items-center justify-center lg:translate-y-16 sm:translate-y-11 sm:mt-0 mt-10 text-center before:absolute  before:h-[27.5rem] before:sm:h-[24rem] before:md:h-[10rem] before:phones:top-[38rem] before:top-[30rem] before:left-0 before:sm:left-auto  before:sm:top-10 before:sm:mx-auto before:sm:mr-0 before:w-full
         before:bg-white before:lg:w-[63rem] before:md:top-6 before:rounded-xl \">

          <div class=\"flex\">
            <div class=\"service-box z-10\">
              <img src=\"";
        // line 69
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 69, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 69), "section2_service1_image", [], "any", false, false, true, 69), 69, $this->source));
        echo "\" alt=\"Gambar Icon Service\" />
              <h5>";
        // line 70
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 70), "section2_service1", [], "any", false, false, true, 70), 70, $this->source), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"service-box z-10\">
              <img src=\"";
        // line 73
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 73, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 73), "section2_service2_image", [], "any", false, false, true, 73), 73, $this->source));
        echo "\" alt=\"Gambar Icon Service\" />
              <h5>";
        // line 74
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 74), "section2_service2", [], "any", false, false, true, 74), 74, $this->source), "html", null, true);
        echo "</h5>
            </div>
          </div>
          <div class=\"flex\">
            <div class=\"service-box z-10\">
              <img src=\"";
        // line 79
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 79, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 79), "section2_service3_image", [], "any", false, false, true, 79), 79, $this->source));
        echo "\" alt=\"Gambar Icon Service\" />
              <h5> ";
        // line 80
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 80), "section2_service3", [], "any", false, false, true, 80), 80, $this->source), "html", null, true);
        echo "</h5>
            </div>
            <div class=\"service-box z-10\">
              <img src=\"";
        // line 83
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 83, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 83), "section2_service4_image", [], "any", false, false, true, 83), 83, $this->source));
        echo "\" alt=\"Gambar Icon Service\" />
              <h5>";
        // line 84
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 84), "section2_service4", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
        echo "</h5>
            </div>
          </div>
          <div class=\"flex\">
            <div class=\"service-box z-10\">
              <img src=\"";
        // line 89
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 89, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 89), "section2_service5_image", [], "any", false, false, true, 89), 89, $this->source));
        echo "\" alt=\"Gambar Icon Service\" />
              <h5>";
        // line 90
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 90), "section2_service5", [], "any", false, false, true, 90), 90, $this->source), "html", null, true);
        echo "</h5>
            </div>
          </div>
      </div>
    </div>
  </section>

  <section class=\"overflow-hidden\">
    <div class=\"relative md:container md:mx-auto  flex justify-center items-center p-8 lg:mt-32 md:mt-80 mt-20\">
      <div class=\"lg:max-w-[67rem] md:max-w-4xl w-full\">
        <div class=\"owl-carousel owl-theme carousel-excess \">
          ";
        // line 101
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "cardexcess", [], "any", false, false, true, 101));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 102
            echo "            <div class=\"card-excess relative  bg-bottom\"
              style=\"background-image: url(";
            // line 103
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 103, $this->source), "html", null, true);
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "background", [], "any", false, false, true, 103), 103, $this->source));
            echo ")\">
              <div class=\"card-body absolute bottom-0 text-white p-8\">
                <h2 class=\"font-bold\">";
            // line 105
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, true, 105), 105, $this->source), "html", null, true);
            echo "</h2>
                <p class=\"italic\">
                  ";
            // line 107
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "description", [], "any", false, false, true, 107), 107, $this->source), "html", null, true);
            echo "
                </p>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 112
        echo "        </div>
      </div>
    </div>
  </section>

  <section>
    <div class=\"relative md:container mx-auto mt-8 p-8 flex flex-col justify-center items-center\">
      <div class=\"content sm:text-center sm:p-0 p-8\">
        <h1 class=\"font-bold sm:text-3xl text-2xl text-center\">
          <span class=\"text-slate-600\"> ";
        // line 121
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 121), "section3_title", [], "any", false, false, true, 121), 121, $this->source), "html", null, true);
        echo "</span>
          <span class=\"text-orange1\">";
        // line 122
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 122), "section3_title_orange", [], "any", false, false, true, 122), 122, $this->source), "html", null, true);
        echo "</span>
            <img
              src=\"";
        // line 124
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 124, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 124), "section3_line_image", [], "any", false, false, true, 124), 124, $this->source));
        echo "\"
              class=\"mt-5 w-24 mx-auto\"
              alt=\"\"
            />
        </h1>
        <div class=\"mt-10 font-bold text-lg text-orange1 lg:px-40 sm:px-20 how-import-desk \">
          ";
        // line 130
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 130), "section3_description", [], "any", false, false, true, 130), 130, $this->source);
        echo "
        </div>
      </div>

      <div class=\"relative max-w-4xl w-full\">
        <div class=\"owl-carousel owl-theme carousel mt-8\">
          ";
        // line 136
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "cardhow", [], "any", false, false, true, 136));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 137
            echo "            <div class=\"card-how-to-impor relative bg-bottom\" style=\"background-image: url(";
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 137, $this->source), "html", null, true);
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "background", [], "any", false, false, true, 137), 137, $this->source));
            echo ");\">
              <div class=\"card-body absolute bottom-0 text-white p-8\">
                <div class=\"circle w-28 h-28 absolute flex justify-center items-center font-bold text-4xl rounded-full\">
                  <h6>";
            // line 140
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "number", [], "any", false, false, true, 140), 140, $this->source), "html", null, true);
            echo "</h6>
                </div>
                <h3 class=\"font-bold\">
                  ";
            // line 143
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "title", [], "any", false, false, true, 143), 143, $this->source), "html", null, true);
            echo "
                </h3>
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 148
        echo "        </div>
      </div>
    </div>
  </section>

  <section class=\"bg-orange1 mt-14\">
    <div class=\"md:container md:mx-auto\">
      <form action=\"\" method=\"POST\">
        <div class=\"content grid lg:grid-cols-2 grid-cols-1 sm:p-16 p-8\">
          <div>
            <div class=\"font-bold text-white mb-10\">
              <h1 class=\"w-fit bg-linear-text-orange sm:text-4xl text-3xl p-medium\">";
        // line 159
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 159), "section5_title", [], "any", false, false, true, 159), 159, $this->source), "html", null, true);
        echo "</h1>
              <h2 class=\"sm:text-3xl text-2xl p-medium\">";
        // line 160
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 160), "section5_subtitle", [], "any", false, false, true, 160), 160, $this->source), "html", null, true);
        echo "</h2>
            </div>

            <div class=\"p-medium text-white\">
              <label class=\"font-bold\">";
        // line 164
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 164), "section5_title_shipping", [], "any", false, false, true, 164), 164, $this->source), "html", null, true);
        echo "</label>
              <div class=\"flex mt-2 gap-6 jalur-pengiriman\">
                  <div class=\"flex gap-2 items-center\">
                    <input type=\"radio\" name=\"pengiriman\" id=\"via_laut\" value=\"via laut\" />
                    <label for=\"via_laut\">Via Laut</label>
                  </div>
                  <div class=\"flex gap-2 items-center\">
                    <input type=\"radio\" name=\"pengiriman\" id=\"via_udara\" />
                    <label for=\"via_udara\">Via Udara</label>
                  </div>
              </div>
            </div>

            <div class=\"grid sm:grid-cols-2 md:grid-cols-3 grid-cols-1 gap-3 p-medium font-bold text-white\">
              <div class=\"input-group\">
                <label for=\"kategori\">";
        // line 179
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 179), "section5_title_category_product", [], "any", false, false, true, 179), 179, $this->source), "html", null, true);
        echo "</label>
                <select id=\"kategori\">
                  
                </select>
              </div>
              <div class=\"input-group\">
                <label for=\"berat\">";
        // line 185
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 185), "section5_title_weight", [], "any", false, false, true, 185), 185, $this->source), "html", null, true);
        echo "</label>
                <input type=\"text\" name=\"berat\" id=\"berat\"  />
              </div>
              <div class=\"input-group\">
                <label for=\"volume\">";
        // line 189
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 189), "section5_title_volume", [], "any", false, false, true, 189), 189, $this->source), "html", null, true);
        echo "</label>
                <input type=\"text\" name=\"volume\" id=\"volume\" />
              </div>
              <div class=\"input-group\">
                <label for=\"panjang\">";
        // line 193
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 193), "section5_title_long", [], "any", false, false, true, 193), 193, $this->source), "html", null, true);
        echo "</label>
                <input type=\"text\" name=\"panjang\" id=\"panjang\" />
              </div>
              <div class=\"input-group\">
                <label for=\"lebar\">";
        // line 197
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 197), "section5_title_wide", [], "any", false, false, true, 197), 197, $this->source), "html", null, true);
        echo "</label>
                <input type=\"text\" name=\"lebar\" id=\"lebar\" />
              </div>
              <div class=\"input-group\">
                <label for=\"tinggi\">";
        // line 201
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 201), "section5_title_tall", [], "any", false, false, true, 201), 201, $this->source), "html", null, true);
        echo "</label>
                <input type=\"text\" name=\"tinggi\" id=\"tinggi\" />
              </div>
            </div>
          </div>
          <div class=\"flex flex-col justify-start items-center lg:mt-0 mt-10\">
            
            <div class=\"grid grid-cols-6 gap-4\">
              <div id=\"china\" class=\"btn-country\">
                <h5>CN</h5>
                <img src=\"";
        // line 211
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Country/china.png");
        echo "\" alt=\"\" class=\"w-10\">
              </div>
              <div id=\"thailand\" class=\"btn-country\">
                <h5>TH</h5>
                <img src=\"";
        // line 215
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Country/thailand.png");
        echo "\" alt=\"\" class=\"w-10\">
              </div>
              <div id=\"taiwan\" class=\"btn-country\">
                <h5>TW</h5>
                <img src=\"";
        // line 219
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Country/taiwan.png");
        echo "\" alt=\"\" class=\"w-10\">
              </div>
              <div id=\"korea\" class=\"btn-country\">
                <h5>KR</h5>
                <img src=\"";
        // line 223
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Country/korea.png");
        echo "\" alt=\"\" class=\"w-10 \">
              </div>
              <div id=\"singapura\"  class=\"btn-country\">
                <h5>SG</h5>
                <img src=\"";
        // line 227
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Country/singapura.png");
        echo "\" alt=\"\" class=\"w-10\">
              </div>
              <div id=\"hongkong\"  class=\"btn-country\">
                <h5>HK</h5>
                <img src=\"";
        // line 231
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/Country/hongkong.png");
        echo "\" alt=\"\" class=\"w-10\">
              </div>
            </div>
            <div class=\"card card-estimasi bg-linear-text-orange pt-2 pb-10 px-3 rounded-3xl w-fit font-semibold text-white mt-10\">
              <!-- ";
        // line 235
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 235), "section5_description_estimasi", [], "any", false, false, true, 235), 235, $this->source);
        echo " -->
              <h4>";
        // line 236
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 236), "section5_text_estimasi", [], "any", false, false, true, 236), 236, $this->source), "html", null, true);
        echo "</h4>
              <h3 class=\"mt-4\" id=\"estimasi-harga\">Rp 0,00</h3>
              <h5>";
        // line 238
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 238), "section5_text_estimasi_tiba", [], "any", false, false, true, 238), 238, $this->source), "html", null, true);
        echo "</h5>
            </div>
            <button
              class=\"btn-submit mt-5 text-white border-white border rounded-full bg-orange2 shadow-btn-sh h-8 font-semibold\" id=\"submit\">
              ";
        // line 242
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 242), "section5_text_button", [], "any", false, false, true, 242), 242, $this->source), "html", null, true);
        echo "
            </button>
          </div>
        </div>
        <div class=\"description text-white font-semibold lg:-translate-y-9 sm:px-20 px-8 sm:pb-16 pb-8\">
          ";
        // line 247
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 247), "section5_description_terms", [], "any", false, false, true, 247), 247, $this->source);
        echo "
        </div>
      </form>
    </div>
  </section>

  <section>
    <div class=\"relative md:container md:mx-auto mt-8 p-8 flex flex-col justify-center items-center\">
      <div class=\"content sm:text-center sm:p-0 p-8\">
        <h1 class=\"font-bold sm:text-3xl text-2xl\">
          <span class=\"text-slate-600\"> ";
        // line 257
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 257), "section6_title", [], "any", false, false, true, 257), 257, $this->source), "html", null, true);
        echo "</span>
          <span class=\"text-orange1\">";
        // line 258
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 258), "section6_title_orange", [], "any", false, false, true, 258), 258, $this->source), "html", null, true);
        echo "</span>
          <img src=\"";
        // line 259
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 259, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 259), "section6_line_image", [], "any", false, false, true, 259), 259, $this->source));
        echo "\" class=\"mt-5 w-24 sm:mx-auto\" alt=\"\" />
        </h1>
        <div class=\"mt-10 font-bold text-lg text-orange1 lg:px-40 sm:px-20\">
          ";
        // line 262
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 262), "section6_description", [], "any", false, false, true, 262), 262, $this->source);
        echo "
        </div>
      </div>
      <div class=\"relative max-w-4xl w-full mt-10\">
        <div class=\"owl-carousel owl-theme carousel-testi\">
          ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "cardtesti", [], "any", false, false, true, 267));
        foreach ($context['_seq'] as $context["_key"] => $context["card"]) {
            // line 268
            echo "            <div
              class=\"card-testimoni relative  bg-cover bg-no-repeat bg-left\" style=\"background-image: url(";
            // line 269
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 269, $this->source), "html", null, true);
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["card"], "image_testi", [], "any", false, false, true, 269), 269, $this->source));
            echo ");\">
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['card'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 272
        echo "        </div>

      </div>
    </div>
  </section>

  <section class=\"faq\">
    <div class=\"md:container md:mx-auto mt-6 flex flex-col justify-center items-center\">
      <div class=\"content max-w-4xl grid md:grid-cols-3 sm:grid-cols-2 gap-3 p-8\">
          ";
        // line 281
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "galery", [], "any", false, false, true, 281));
        foreach ($context['_seq'] as $context["_key"] => $context["galery"]) {
            // line 282
            echo "            <div class=\"img-group\">
              <img src=\"";
            // line 283
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 283, $this->source), "html", null, true);
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["galery"], "image", [], "any", false, false, true, 283), 283, $this->source));
            echo "\" alt=\"\" />
              <div class=\"w-full h-64 kutip flex flex-row justify-center\">
                <img src=\"";
            // line 285
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 285, $this->source), "html", null, true);
            echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["galery"], "kutip", [], "any", false, false, true, 285), 285, $this->source));
            echo "\" alt=\"\" class=\"\" />
              </div>
            </div>
          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['galery'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 289
        echo "      </div>
      <div class=\"faq mt-8 font-poppins p-8\">
        <h1 class=\"font-extrabold sm:text-3xl text-2xl text-center\">
          <span class=\"text-slate-600\"> ";
        // line 292
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 292), "section7_title", [], "any", false, false, true, 292), 292, $this->source), "html", null, true);
        echo "</span>
          <span class=\"text-orange1\">";
        // line 293
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 293), "section7_title_orange", [], "any", false, false, true, 293), 293, $this->source), "html", null, true);
        echo "</span>
          <img src=\"";
        // line 294
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 294, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 294), "section7_line_image", [], "any", false, false, true, 294), 294, $this->source));
        echo "\" class=\"mt-5 w-24 mx-auto\" alt=\"\" />
        </h1>

        <div class=\"relative flex flex-col items-center justify-center sm:px-0 px-0 z-20 pb-32 mt-10\">
          <div class=\"w-full max-w-5xl bg-white\">
            ";
        // line 299
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "faq", [], "any", false, false, true, 299));
        foreach ($context['_seq'] as $context["_key"] => $context["faq"]) {
            // line 300
            echo "              <div class=\"px-8 mb-2\">
                <div class=\"flex items-center justify-between \">
                  <div>
                    <h2
                      class=\"text-base font-semibold leading-relaxed text-grey2 flex justify-center items-center gap-2 pt-6 \">
                      <span class=\"iconify text-4xl  text-orange2 bells hidden\" data-icon=\"bx:bell\"></span>
                      <span class=\"flex-1\">";
            // line 306
            echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq"], "title", [], "any", false, false, true, 306), 306, $this->source), "html", null, true);
            echo "</span>
                    </h2>
                  </div>
                  <button data-menu class=\"px-1 py-1.5 rounded dark:bg-gray-400  ring-offset-white cursor-pointer\">
                    <span class=\"iconify icon text-3xl hidden\" data-icon=\"akar-icons:circle-minus\"
                      style=\"color: #ff5a01;\"></span>
                    <span class=\"iconify icon text-3xl ml-4\" data-icon=\"akar-icons:circle-plus-fill\"
                      style=\"color: #ff5a01;\"></span>
                  </button>
                </div>
                <ul class=\"hidden\">
                  <li class=\"faq-description text-base leading-relaxed text-gray-600 dark:text-gray-200 mt-6  md:pl-10\">
                      ";
            // line 318
            echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["faq"], "description", [], "any", false, false, true, 318), 318, $this->source);
            echo "
                  </li>
                </ul>
                <hr class=\"mt-2 border-faq\">
              </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['faq'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 324
        echo "          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <div class=\"contact-whatsapp fixed bottom-10 right-10 z-[999] w-16\">
    <a href=\"https://wa.me/6282114444792\">
      <img src=\"";
        // line 333
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/whatsapp.png");
        echo "\" alt=\"oke\">
  </a>
</div>



  ";
        // line 339
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['title'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 339), "footer_title", [], "any", false, false, true, 339)        ;
        $context['__cms_partial_params']['address'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 339), "footer_address", [], "any", false, false, true, 339)        ;
        $context['__cms_partial_params']['email'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 339), "footer_email", [], "any", false, false, true, 339)        ;
        $context['__cms_partial_params']['phone'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 339), "footer_phone", [], "any", false, false, true, 339)        ;
        $context['__cms_partial_params']['copyright'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 339), "footer_copyright", [], "any", false, false, true, 339)        ;
        $context['__cms_partial_params']['background'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 339), "footer_background", [], "any", false, false, true, 339)        ;
        $context['__cms_partial_params']['logo'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 339), "footer_logo", [], "any", false, false, true, 339)        ;
        $context['__cms_partial_params']['link1'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 339), "navbar_link1", [], "any", false, false, true, 339)        ;
        $context['__cms_partial_params']['link2'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 339), "navbar_link2", [], "any", false, false, true, 339)        ;
        $context['__cms_partial_params']['link3'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 339), "navbar_link3", [], "any", false, false, true, 339)        ;
        $context['__cms_partial_params']['link4'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 339), "navbar_link4", [], "any", false, false, true, 339)        ;
        $context['__cms_partial_params']['link5'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 340
($context["this"] ?? null), "page", [], "any", false, false, true, 340), "navbar_link5", [], "any", false, false, true, 340)        ;
        $context['__cms_partial_params']['link6'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 340), "navbar_link6", [], "any", false, false, true, 340)        ;
        $context['__cms_partial_params']['link7'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 340), "navbar_link7", [], "any", false, false, true, 340)        ;
        $context['__cms_partial_params']['social_media'] = twig_get_attribute($this->env, $this->source, ($context["viewBag"] ?? null), "footersosmed", [], "any", false, false, true, 340)        ;
        $context['__cms_partial_params']['url'] = ($context["BASEURL"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 341
        echo "
  <script>
    const resi = document.getElementById(\"resi\");
    const btnCheckResi = document.getElementById(\"checkResi\");

    btnCheckResi.addEventListener(\"click\", (e) => {
      e.preventDefault();
      window.location.href = `http://127.0.0.1:8000/tracking?resi=\${resi.value}`;
    });

 
  </script>";
    }

    public function getTemplateName()
    {
        return "C:\\fourcargo/themes/fourcargo/pages/home.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  677 => 341,  669 => 340,  656 => 339,  647 => 333,  636 => 324,  624 => 318,  609 => 306,  601 => 300,  597 => 299,  588 => 294,  584 => 293,  580 => 292,  575 => 289,  564 => 285,  558 => 283,  555 => 282,  551 => 281,  540 => 272,  530 => 269,  527 => 268,  523 => 267,  515 => 262,  508 => 259,  504 => 258,  500 => 257,  487 => 247,  479 => 242,  472 => 238,  467 => 236,  463 => 235,  456 => 231,  449 => 227,  442 => 223,  435 => 219,  428 => 215,  421 => 211,  408 => 201,  401 => 197,  394 => 193,  387 => 189,  380 => 185,  371 => 179,  353 => 164,  346 => 160,  342 => 159,  329 => 148,  318 => 143,  312 => 140,  304 => 137,  300 => 136,  291 => 130,  281 => 124,  276 => 122,  272 => 121,  261 => 112,  250 => 107,  245 => 105,  239 => 103,  236 => 102,  232 => 101,  218 => 90,  213 => 89,  205 => 84,  200 => 83,  194 => 80,  189 => 79,  181 => 74,  176 => 73,  170 => 70,  165 => 69,  153 => 60,  147 => 57,  142 => 55,  134 => 51,  123 => 43,  116 => 39,  108 => 34,  104 => 33,  99 => 31,  94 => 29,  85 => 24,  71 => 13,  65 => 10,  57 => 4,  44 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set BASEURL = 'http://127.0.0.1:8000' %}

{% partial 'site/header' link1=this.page.navbar_link1 link2=this.page.navbar_link2 link3=this.page.navbar_link3 link4=this.page.navbar_link4 link5=this.page.navbar_link5 link6=this.page.navbar_link6 link7=this.page.navbar_link7 logo=this.page.navbar_logo url=BASEURL  %}

  <section>
      <!-- Swiper -->
      <div class=\"swiper mySwiper\">
        <div class=\"swiper-wrapper\">
          <div class=\"swiper-slide\">
            <img src=\"{{ 'assets/image/Home/bg1.jpg'|theme }}\" alt=\"\" class=\"w-full\">
          </div>
          <div class=\"swiper-slide\">
            <img src=\"{{ 'assets/image/Home/bg2.jpg'|theme }}\" alt=\"\" class=\"w-full\">
          </div>
        </div>
        <div class=\"swiper-pagination\"></div>
      </div>

  </section>



  <!-- <section
    class='bar-section-header h-45 bg-cover relative before:block before:absolute before:right-0 before:bg-linear-orange before:w-full xl:before:w-3/5 lg:before:w-3/4 lg:before:opacity-100 before:opacity-80 before:h-full' style=\"background-image: url({{ BASEURL }}{{ this.page.section1_background |media }});\">
    <div class=\"md:container md:mx-auto w-full h-full flex flex-col items-center pt-10\">
      <div class=\"w-full flex justify-center lg:justify-end md:justify-end tablets:justify-center tablets:items-center mb-36 z-10 lg:mx-7 pt-20 px-8\">
        <div class=\"content mt-20 lg:mr-16 md:mr-10 text-left lg:translate-x-16  tablets:mr-0\">
          <h1 class=\"sm:text-4/5xl text-4xl leading-tight text-white font-bold\">
            <span class=\"bg-linear-text-orange px-1 md:px-2 pb-4\">{{ this.page.section1_title1 }}</span>
            <br>
            <span class=\"bg-linear-text-orange px-1 md:px-2 pb-3\"> {{ this.page.section1_title2 }}</span>
            <br>
            <span class=\"px-1\">{{ this.page.section1_title3 }}&nbsp;</span></h1>
          <h4 class=\" mt-4 text-xl text-orange1 font-bold bg-white w-fit py-0.5 px-2 rounded-xl\">{{ this.page.section1_subtitle }}</h4>
        </div>
      </div>

      <div class=\"lg:w-2/4 w-10/12 bg-white p-4 z-20 sm:-mt-0 -mt-10\">
        <label for=\"resi\" class=\"text-grey font-medium\">{{ this.page.section1_input_title }}</label>
        <div class=\"w-full flex justify-between items-center sm:flex-row flex-col gap-3 mt-2\">
          <input
            class=\"h-full sm:w-fit w-full flex-auto border py-4 px-5 font-semibold text-sm placeholder-slate-700 inline-block \"
            type=\"text\" placeholder=\"{{ this.page.section1_input_placeholder }}\" id=\"resi\"/>
            <button name=\"submit\" class=\"sm:w-fit w-full py-3 px-9 text-lg bg-orange2 text-white font-extrabold \" id=\"checkResi\">
              Lacak
            </button>
        </div>
      </div>
    </div>
  </section> -->
  <section class=\"service-container relative md:h-96 bg-cover before:absolute before:top-0 before:left-0 before:h-full before:w-full before:bg-black before:opacity-40 before:z-[-1] z-10 \" style=\"background-image: url({{ BASEURL }}{{ this.page.section2_background |media }}); \">
    <div class=\"md:container md:mx-auto sm:p-16 p-8  text-white\">
      <article class=\"content\">
        <h1 class=\"font-bold text-4xl mb-5 leading-snug\">
        <span class=\"px-1\">{{ this.page.section2_title1 }}</span>
        <br>
        <span class=\"bg-white rounded-sm text-orange1 px-1\">{{ this.page.section2_title2 }}
        </span>
      </h1>
      <div class=\"lg:w-1/2 md:w-5/6\">{{ this.page.section2_description|raw }}</div>
      </article>

      <div
        class=\"service w-full flex flex-wrap sm:flex-row flex-col semi-tablets:items-center justify-center lg:translate-y-16 sm:translate-y-11 sm:mt-0 mt-10 text-center before:absolute  before:h-[27.5rem] before:sm:h-[24rem] before:md:h-[10rem] before:phones:top-[38rem] before:top-[30rem] before:left-0 before:sm:left-auto  before:sm:top-10 before:sm:mx-auto before:sm:mr-0 before:w-full
         before:bg-white before:lg:w-[63rem] before:md:top-6 before:rounded-xl \">

          <div class=\"flex\">
            <div class=\"service-box z-10\">
              <img src=\"{{ BASEURL }}{{ this.page.section2_service1_image|media }}\" alt=\"Gambar Icon Service\" />
              <h5>{{ this.page.section2_service1 }}</h5>
            </div>
            <div class=\"service-box z-10\">
              <img src=\"{{ BASEURL }}{{ this.page.section2_service2_image|media }}\" alt=\"Gambar Icon Service\" />
              <h5>{{ this.page.section2_service2 }}</h5>
            </div>
          </div>
          <div class=\"flex\">
            <div class=\"service-box z-10\">
              <img src=\"{{ BASEURL }}{{ this.page.section2_service3_image|media }}\" alt=\"Gambar Icon Service\" />
              <h5> {{ this.page.section2_service3 }}</h5>
            </div>
            <div class=\"service-box z-10\">
              <img src=\"{{ BASEURL }}{{ this.page.section2_service4_image|media }}\" alt=\"Gambar Icon Service\" />
              <h5>{{ this.page.section2_service4 }}</h5>
            </div>
          </div>
          <div class=\"flex\">
            <div class=\"service-box z-10\">
              <img src=\"{{ BASEURL }}{{ this.page.section2_service5_image|media }}\" alt=\"Gambar Icon Service\" />
              <h5>{{ this.page.section2_service5 }}</h5>
            </div>
          </div>
      </div>
    </div>
  </section>

  <section class=\"overflow-hidden\">
    <div class=\"relative md:container md:mx-auto  flex justify-center items-center p-8 lg:mt-32 md:mt-80 mt-20\">
      <div class=\"lg:max-w-[67rem] md:max-w-4xl w-full\">
        <div class=\"owl-carousel owl-theme carousel-excess \">
          {% for card in viewBag.cardexcess %}
            <div class=\"card-excess relative  bg-bottom\"
              style=\"background-image: url({{ BASEURL }}{{ card.background |media }})\">
              <div class=\"card-body absolute bottom-0 text-white p-8\">
                <h2 class=\"font-bold\">{{ card.title }}</h2>
                <p class=\"italic\">
                  {{ card.description }}
                </p>
              </div>
            </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </section>

  <section>
    <div class=\"relative md:container mx-auto mt-8 p-8 flex flex-col justify-center items-center\">
      <div class=\"content sm:text-center sm:p-0 p-8\">
        <h1 class=\"font-bold sm:text-3xl text-2xl text-center\">
          <span class=\"text-slate-600\"> {{ this.page.section3_title }}</span>
          <span class=\"text-orange1\">{{ this.page.section3_title_orange }}</span>
            <img
              src=\"{{ BASEURL }}{{  this.page.section3_line_image |media }}\"
              class=\"mt-5 w-24 mx-auto\"
              alt=\"\"
            />
        </h1>
        <div class=\"mt-10 font-bold text-lg text-orange1 lg:px-40 sm:px-20 how-import-desk \">
          {{ this.page.section3_description|raw }}
        </div>
      </div>

      <div class=\"relative max-w-4xl w-full\">
        <div class=\"owl-carousel owl-theme carousel mt-8\">
          {% for card in viewBag.cardhow %}
            <div class=\"card-how-to-impor relative bg-bottom\" style=\"background-image: url({{ BASEURL }}{{ card.background |media }});\">
              <div class=\"card-body absolute bottom-0 text-white p-8\">
                <div class=\"circle w-28 h-28 absolute flex justify-center items-center font-bold text-4xl rounded-full\">
                  <h6>{{ card.number }}</h6>
                </div>
                <h3 class=\"font-bold\">
                  {{ card.title }}
                </h3>
              </div>
            </div>
          {% endfor %}
        </div>
      </div>
    </div>
  </section>

  <section class=\"bg-orange1 mt-14\">
    <div class=\"md:container md:mx-auto\">
      <form action=\"\" method=\"POST\">
        <div class=\"content grid lg:grid-cols-2 grid-cols-1 sm:p-16 p-8\">
          <div>
            <div class=\"font-bold text-white mb-10\">
              <h1 class=\"w-fit bg-linear-text-orange sm:text-4xl text-3xl p-medium\">{{ this.page.section5_title }}</h1>
              <h2 class=\"sm:text-3xl text-2xl p-medium\">{{ this.page.section5_subtitle }}</h2>
            </div>

            <div class=\"p-medium text-white\">
              <label class=\"font-bold\">{{ this.page.section5_title_shipping }}</label>
              <div class=\"flex mt-2 gap-6 jalur-pengiriman\">
                  <div class=\"flex gap-2 items-center\">
                    <input type=\"radio\" name=\"pengiriman\" id=\"via_laut\" value=\"via laut\" />
                    <label for=\"via_laut\">Via Laut</label>
                  </div>
                  <div class=\"flex gap-2 items-center\">
                    <input type=\"radio\" name=\"pengiriman\" id=\"via_udara\" />
                    <label for=\"via_udara\">Via Udara</label>
                  </div>
              </div>
            </div>

            <div class=\"grid sm:grid-cols-2 md:grid-cols-3 grid-cols-1 gap-3 p-medium font-bold text-white\">
              <div class=\"input-group\">
                <label for=\"kategori\">{{ this.page.section5_title_category_product }}</label>
                <select id=\"kategori\">
                  
                </select>
              </div>
              <div class=\"input-group\">
                <label for=\"berat\">{{ this.page.section5_title_weight }}</label>
                <input type=\"text\" name=\"berat\" id=\"berat\"  />
              </div>
              <div class=\"input-group\">
                <label for=\"volume\">{{ this.page.section5_title_volume }}</label>
                <input type=\"text\" name=\"volume\" id=\"volume\" />
              </div>
              <div class=\"input-group\">
                <label for=\"panjang\">{{ this.page.section5_title_long }}</label>
                <input type=\"text\" name=\"panjang\" id=\"panjang\" />
              </div>
              <div class=\"input-group\">
                <label for=\"lebar\">{{ this.page.section5_title_wide }}</label>
                <input type=\"text\" name=\"lebar\" id=\"lebar\" />
              </div>
              <div class=\"input-group\">
                <label for=\"tinggi\">{{ this.page.section5_title_tall }}</label>
                <input type=\"text\" name=\"tinggi\" id=\"tinggi\" />
              </div>
            </div>
          </div>
          <div class=\"flex flex-col justify-start items-center lg:mt-0 mt-10\">
            
            <div class=\"grid grid-cols-6 gap-4\">
              <div id=\"china\" class=\"btn-country\">
                <h5>CN</h5>
                <img src=\"{{ 'assets/image/Country/china.png'|theme }}\" alt=\"\" class=\"w-10\">
              </div>
              <div id=\"thailand\" class=\"btn-country\">
                <h5>TH</h5>
                <img src=\"{{ 'assets/image/Country/thailand.png'|theme }}\" alt=\"\" class=\"w-10\">
              </div>
              <div id=\"taiwan\" class=\"btn-country\">
                <h5>TW</h5>
                <img src=\"{{ 'assets/image/Country/taiwan.png'|theme }}\" alt=\"\" class=\"w-10\">
              </div>
              <div id=\"korea\" class=\"btn-country\">
                <h5>KR</h5>
                <img src=\"{{ 'assets/image/Country/korea.png'|theme }}\" alt=\"\" class=\"w-10 \">
              </div>
              <div id=\"singapura\"  class=\"btn-country\">
                <h5>SG</h5>
                <img src=\"{{ 'assets/image/Country/singapura.png'|theme }}\" alt=\"\" class=\"w-10\">
              </div>
              <div id=\"hongkong\"  class=\"btn-country\">
                <h5>HK</h5>
                <img src=\"{{ 'assets/image/Country/hongkong.png'|theme }}\" alt=\"\" class=\"w-10\">
              </div>
            </div>
            <div class=\"card card-estimasi bg-linear-text-orange pt-2 pb-10 px-3 rounded-3xl w-fit font-semibold text-white mt-10\">
              <!-- {{ this.page.section5_description_estimasi|raw }} -->
              <h4>{{ this.page.section5_text_estimasi }}</h4>
              <h3 class=\"mt-4\" id=\"estimasi-harga\">Rp 0,00</h3>
              <h5>{{ this.page.section5_text_estimasi_tiba }}</h5>
            </div>
            <button
              class=\"btn-submit mt-5 text-white border-white border rounded-full bg-orange2 shadow-btn-sh h-8 font-semibold\" id=\"submit\">
              {{ this.page.section5_text_button }}
            </button>
          </div>
        </div>
        <div class=\"description text-white font-semibold lg:-translate-y-9 sm:px-20 px-8 sm:pb-16 pb-8\">
          {{ this.page.section5_description_terms|raw }}
        </div>
      </form>
    </div>
  </section>

  <section>
    <div class=\"relative md:container md:mx-auto mt-8 p-8 flex flex-col justify-center items-center\">
      <div class=\"content sm:text-center sm:p-0 p-8\">
        <h1 class=\"font-bold sm:text-3xl text-2xl\">
          <span class=\"text-slate-600\"> {{ this.page.section6_title }}</span>
          <span class=\"text-orange1\">{{ this.page.section6_title_orange }}</span>
          <img src=\"{{ BASEURL }}{{ this.page.section6_line_image |media }}\" class=\"mt-5 w-24 sm:mx-auto\" alt=\"\" />
        </h1>
        <div class=\"mt-10 font-bold text-lg text-orange1 lg:px-40 sm:px-20\">
          {{ this.page.section6_description|raw }}
        </div>
      </div>
      <div class=\"relative max-w-4xl w-full mt-10\">
        <div class=\"owl-carousel owl-theme carousel-testi\">
          {% for card in viewBag.cardtesti %}
            <div
              class=\"card-testimoni relative  bg-cover bg-no-repeat bg-left\" style=\"background-image: url({{ BASEURL }}{{ card.image_testi |media }});\">
            </div>
          {% endfor %}
        </div>

      </div>
    </div>
  </section>

  <section class=\"faq\">
    <div class=\"md:container md:mx-auto mt-6 flex flex-col justify-center items-center\">
      <div class=\"content max-w-4xl grid md:grid-cols-3 sm:grid-cols-2 gap-3 p-8\">
          {% for galery in viewBag.galery %}
            <div class=\"img-group\">
              <img src=\"{{ BASEURL }}{{ galery.image |media}}\" alt=\"\" />
              <div class=\"w-full h-64 kutip flex flex-row justify-center\">
                <img src=\"{{ BASEURL }}{{ galery.kutip |media}}\" alt=\"\" class=\"\" />
              </div>
            </div>
          {% endfor %}
      </div>
      <div class=\"faq mt-8 font-poppins p-8\">
        <h1 class=\"font-extrabold sm:text-3xl text-2xl text-center\">
          <span class=\"text-slate-600\"> {{ this.page.section7_title }}</span>
          <span class=\"text-orange1\">{{ this.page.section7_title_orange }}</span>
          <img src=\"{{ BASEURL }}{{ this.page.section7_line_image|media }}\" class=\"mt-5 w-24 mx-auto\" alt=\"\" />
        </h1>

        <div class=\"relative flex flex-col items-center justify-center sm:px-0 px-0 z-20 pb-32 mt-10\">
          <div class=\"w-full max-w-5xl bg-white\">
            {% for faq in viewBag.faq %}
              <div class=\"px-8 mb-2\">
                <div class=\"flex items-center justify-between \">
                  <div>
                    <h2
                      class=\"text-base font-semibold leading-relaxed text-grey2 flex justify-center items-center gap-2 pt-6 \">
                      <span class=\"iconify text-4xl  text-orange2 bells hidden\" data-icon=\"bx:bell\"></span>
                      <span class=\"flex-1\">{{ faq.title }}</span>
                    </h2>
                  </div>
                  <button data-menu class=\"px-1 py-1.5 rounded dark:bg-gray-400  ring-offset-white cursor-pointer\">
                    <span class=\"iconify icon text-3xl hidden\" data-icon=\"akar-icons:circle-minus\"
                      style=\"color: #ff5a01;\"></span>
                    <span class=\"iconify icon text-3xl ml-4\" data-icon=\"akar-icons:circle-plus-fill\"
                      style=\"color: #ff5a01;\"></span>
                  </button>
                </div>
                <ul class=\"hidden\">
                  <li class=\"faq-description text-base leading-relaxed text-gray-600 dark:text-gray-200 mt-6  md:pl-10\">
                      {{ faq.description|raw }}
                  </li>
                </ul>
                <hr class=\"mt-2 border-faq\">
              </div>
            {% endfor %}
          </div>
        </div>
      </div>
    </div>
  </div>
  </section>

  <div class=\"contact-whatsapp fixed bottom-10 right-10 z-[999] w-16\">
    <a href=\"https://wa.me/6282114444792\">
      <img src=\"{{ 'assets/image/whatsapp.png'|theme }}\" alt=\"oke\">
  </a>
</div>



  {% partial 'site/footer' title=this.page.footer_title address=this.page.footer_address email=this.page.footer_email phone=this.page.footer_phone copyright=this.page.footer_copyright background=this.page.footer_background logo=this.page.footer_logo link1=this.page.navbar_link1 link2=this.page.navbar_link2 link3=this.page.navbar_link3 link4=this.page.navbar_link4
  link5=this.page.navbar_link5 link6=this.page.navbar_link6 link7=this.page.navbar_link7 social_media=viewBag.footersosmed url=BASEURL %}

  <script>
    const resi = document.getElementById(\"resi\");
    const btnCheckResi = document.getElementById(\"checkResi\");

    btnCheckResi.addEventListener(\"click\", (e) => {
      e.preventDefault();
      window.location.href = `http://127.0.0.1:8000/tracking?resi=\${resi.value}`;
    });

 
  </script>", "C:\\fourcargo/themes/fourcargo/pages/home.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "partial" => 3, "for" => 101);
        static $filters = array("theme" => 10, "escape" => 24, "media" => 24, "raw" => 60);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial', 'for'],
                ['theme', 'escape', 'media', 'raw'],
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

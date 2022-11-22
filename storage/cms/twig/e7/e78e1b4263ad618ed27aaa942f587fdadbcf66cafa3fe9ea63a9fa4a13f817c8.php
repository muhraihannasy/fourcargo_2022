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

/* C:\fourcargo/themes/fourcargo/pages/tracking.htm */
class __TwigTemplate_f6fe34d65c112feff341d6417d7e559f03d807f8ca9a65dd622e6c6368ecec19 extends \Twig\Template
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
        $context["BASEURL"] = "http://localhost:8080/fourcargo";
        // line 2
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['link1'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 2), "navbartracking_link1", [], "any", false, false, true, 2)        ;
        $context['__cms_partial_params']['link2'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 2), "navbartracking_link2", [], "any", false, false, true, 2)        ;
        $context['__cms_partial_params']['link3'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 3
($context["this"] ?? null), "page", [], "any", false, false, true, 3), "navbartracking_link3", [], "any", false, false, true, 3)        ;
        $context['__cms_partial_params']['link4'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 4
($context["this"] ?? null), "page", [], "any", false, false, true, 4), "navbartracking_link4", [], "any", false, false, true, 4)        ;
        $context['__cms_partial_params']['link5'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "navbartracking_link5", [], "any", false, false, true, 4)        ;
        $context['__cms_partial_params']['link6'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 4), "navbartracking_link6", [], "any", false, false, true, 4)        ;
        $context['__cms_partial_params']['link7'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 5
($context["this"] ?? null), "page", [], "any", false, false, true, 5), "navbartracking_link7", [], "any", false, false, true, 5)        ;
        $context['__cms_partial_params']['logo'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 6
($context["this"] ?? null), "page", [], "any", false, false, true, 6), "navbartracking_logo", [], "any", false, false, true, 6)        ;
        $context['__cms_partial_params']['url'] = ($context["BASEURL"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/header"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 7
        echo "
<section
    class=\"h-97 bg-cover relative before:block before:absolute before:right-0 before:bg-linear-orange before:w-full xl:before:w-2/4 lg:before:w-3/5 md:before:w-3/4 md:before:opacity-100 before:opacity-80 before:h-full bg-left-top\"
    style=\"background-image: url(";
        // line 10
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(($context["BASEURL"] ?? null), 10, $this->source), "html", null, true);
        echo $this->extensions['System\Twig\Extension']->mediaFilter($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 10), "section1tracking_background", [], "any", false, false, true, 10), 10, $this->source));
        echo ");\">
    <div class=\"md:container md:mx-auto w-full h-full flex flex-col items-center pt-10\">
        <div class=\"w-full flex justify-center lg:justify-end md:justify-end mb-36 z-10 lg:mx-7 pt-20\">
            <div class=\"content mt-20 lg:mr-16 md:mr-10 md:text-left text-center -translate-y-3\">
                <h1 class=\"sm:text-6xl text-5xl text-white font-semibold md:-translate-x-1/3 md:-translate-y-4\">
                    ";
        // line 15
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 15), "section1tracking_title1", [], "any", false, false, true, 15), 15, $this->source), "html", null, true);
        echo " <br />
                    ";
        // line 16
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 16), "section1tracking_title2", [], "any", false, false, true, 16), 16, $this->source), "html", null, true);
        echo "
                </h1>
            </div>
        </div>
    </div>
</section>


<section class=\"mt-20\">
    <div class=\"title-tracking text-center mb-15 font-poppins p-8 flex flex-col items-center justify-center\">
        <h1 class=\"font-extrabold text-4xl text-center mb-12 text-blueOld flex items-center flex-col justify-center\">
            ";
        // line 27
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 27), "section2tracking_title", [], "any", false, false, true, 27), 27, $this->source), "html", null, true);
        echo "
            <img src=\"";
        // line 28
        echo $this->extensions['Cms\Twig\Extension']->themeFilter("assets/image/line.png");
        echo "\" class=\"mt-5 w-24\" alt=\"\" />
        </h1>
        <div class=\"font-normal leading-snug font-poppins text-grey lg:w-49\">
            ";
        // line 31
        echo $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 31), "section2tracking_description", [], "any", false, false, true, 31), 31, $this->source);
        echo "
        </div>
    </div>
    <div class=\"md:container: md:mx-auto sm:px-16 p-8\" id=\"container-tracking\">
       
        
        <form class=\"flex flex-col items-center \">
            <label for=\"resi\" class=\"font-medium text-grey mb-5\">";
        // line 38
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 38), "section2tracking_input_title1", [], "any", false, false, true, 38), 38, $this->source), "html", null, true);
        echo "
                <span class=\"italic text-orange2 mb-5 font-bold \">";
        // line 39
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 39), "section2tracking_title_orange", [], "any", false, false, true, 39), 39, $this->source), "html", null, true);
        echo "</span>
                ";
        // line 40
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 40), "section2tracking_input_title2", [], "any", false, false, true, 40), 40, $this->source), "html", null, true);
        echo "
            </label>
            <div class=\"w-full max-w-2xl flex items-center gap-3 font-poppins md:flex-row flex-col\">
                <input type=\"text\"  id=\"resi\"
                    class=\"w-100 input-resi flex-3 rounded-none bg-slate-100 border-dotted border px-4 py-5 font-semibold text-1xl text-brown w-full\"
                    placeholder=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 45), "section2tracking_input_placeholder", [], "any", false, false, true, 45), 45, $this->source), "html", null, true);
        echo "\" />
                    <button  id=\"checkResi\" class=\"bg-orange2 py-5 text-lg font-extrabold text-white md:w-72 w-full\">
                    ";
        // line 47
        echo twig_escape_filter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 47), "section2tracking_title_button", [], "any", false, false, true, 47), 47, $this->source), "html", null, true);
        echo "
                    </button>
            </div>
        </form>
    </div>
</section>



";
        // line 56
        $context['__cms_partial_params'] = [];
        $context['__cms_partial_params']['title'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 56), "footertracking_title", [], "any", false, false, true, 56)        ;
        $context['__cms_partial_params']['address'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 56), "footertracking_address", [], "any", false, false, true, 56)        ;
        $context['__cms_partial_params']['email'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 57
($context["this"] ?? null), "page", [], "any", false, false, true, 57), "footertracking_email", [], "any", false, false, true, 57)        ;
        $context['__cms_partial_params']['phone'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 58
($context["this"] ?? null), "page", [], "any", false, false, true, 58), "footertracking_phone", [], "any", false, false, true, 58)        ;
        $context['__cms_partial_params']['copyright'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 58), "footertracking_copyright", [], "any", false, false, true, 58)        ;
        $context['__cms_partial_params']['background'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 59
($context["this"] ?? null), "page", [], "any", false, false, true, 59), "footertracking_background", [], "any", false, false, true, 59)        ;
        $context['__cms_partial_params']['logo'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 60
($context["this"] ?? null), "page", [], "any", false, false, true, 60), "footertracking_logo", [], "any", false, false, true, 60)        ;
        $context['__cms_partial_params']['link1'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 60), "navbartracking_link1", [], "any", false, false, true, 60)        ;
        $context['__cms_partial_params']['link2'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 60), "navbartracking_link2", [], "any", false, false, true, 60)        ;
        $context['__cms_partial_params']['link3'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 61
($context["this"] ?? null), "page", [], "any", false, false, true, 61), "navbartracking_link3", [], "any", false, false, true, 61)        ;
        $context['__cms_partial_params']['link4'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 62
($context["this"] ?? null), "page", [], "any", false, false, true, 62), "navbartracking_link4", [], "any", false, false, true, 62)        ;
        $context['__cms_partial_params']['link5'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source,         // line 63
($context["this"] ?? null), "page", [], "any", false, false, true, 63), "navbartracking_link5", [], "any", false, false, true, 63)        ;
        $context['__cms_partial_params']['link6'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 63), "navbartracking_link6", [], "any", false, false, true, 63)        ;
        $context['__cms_partial_params']['link7'] = twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["this"] ?? null), "page", [], "any", false, false, true, 63), "navbartracking_link7", [], "any", false, false, true, 63)        ;
        $context['__cms_partial_params']['url'] = ($context["BASEURL"] ?? null)        ;
        echo $this->env->getExtension('Cms\Twig\Extension')->partialFunction("site/footer"        , $context['__cms_partial_params']        , true        );
        unset($context['__cms_partial_params']);
        // line 64
        echo "
<script>
    const URL = 'http://127.0.0.1:8000/';
    const resi = document.getElementById(\"resi\");
    const btnCheckResi = document.getElementById(\"checkResi\");
    let container = document.getElementById(\"container-tracking\");
    let dataTraking;

    async function showHint(str) {
        const API = await fetch(`\${URL}/resi/\${str}`);
        const res = await API.json();
        const data = await res.data;
         
        return data;
     }

    function renderDetailTraking(data) {
       container.innerHTML =  ` <div class=\"box-detail max-w-4xl mx-auto\">
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5   text-grey3 mb-1 sm:w-[37rem]  \">
                <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Customer</p>
                        <span> : </span>
                    </div>  
                </div>    
                <p class=\"\">\${data.customer}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
                 <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Nomor Pesanan</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.no_resi}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
                <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Shipping Mark</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.shipping_mark}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
               <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>PL No</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.pl_no}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
                <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Receive Good Date</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.receive_good_date}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
                <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Total Carton</p>
                        <span> : </span>
                    </div>  
                </div> 

                <p class=\"\">\${data.total_carton}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
              <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>No Resi Local China</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.no_resi_local_china}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
            <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Total Cbm</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.total_cbm}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
                 <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Est Arrived Jakarta</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.est_arrived_jakarta}</p>
            </div>
        </div>`;

    }

    function renderTrackingStatus(data) {
       let statusTracking1 = false; 
       let statusTracking2 = false; 
       let statusTracking3 = false; 
       let statusTracking4 = false; 
       const containerJalurTracking = document.createElement(\"div\");

       switch(true) {
           case data.history[0].date_time == data.last_status.date_time:
               statusTracking1 = true;
               break;
           case data.history[1].date_time == data.last_status.date_time:
               statusTracking2 = true;
               break;
           case data.history[2].date_time == data.last_status.date_time:
               statusTracking3 = true;
               break;
           case data.history[3].date_time == data.last_status.date_time:
               statusTracking4 = true;
               break;
            default:
               statusTracking1 = false;
               statusTracking2 = false;
               statusTracking3 = false;
               statusTracking4 = false;
               break;
       }

       containerJalurTracking.innerHTML = `<div class=\"status bg-slate-50 sm:p-8 p-2 max-w-4xl mx-auto mt-10 mb-5\">
            <div class=\"bg-white p-10 grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 relative before:absolute before:w-11/12 before:border before:border-orange1 before:border-dashed lg:before:border-opacity-[0.5] before:left-8 before:top-[4.5rem] before:z-[-1] before:border-opacity-0 z-20\"> ` +
                
                `<div class=\"status-item flex flex-col items-center lg:mb-0 mb-10\">
                    <div class=\"icon flex items-center justify-center w-16 h-16 bg-slate-100 rounded-full border  border-orange1 border-dashed\">
                        <span class=\"iconify text-3xl text-slate-400 \" data-icon=\"fluent:box-24-filled\"></span>
                    </div>
                     <p class=\"time text-xs text-center mt-5\">
                            \${data.history[2].date_time}
                        </p>
                        <h3 class=\"status-item-title text-center font-bold mt-1\">
                            \${data.history[2].status}
                        </h3>
                </div>
                <div class=\"status-item flex flex-col items-center lg:mb-0 mb-10\">
                    <div class=\"icon flex items-center justify-center w-16 h-16 bg-slate-100 rounded-full border border-orange1 border-dashed\">
                        <span class=\"iconify text-3xl text-slate-400\" data-icon=\"mdi:garage-variant\"></span>
                    </div>
                   <p class=\"time text-xs text-center mt-5\">
                            \${data.history[1].date_time}
                        </p>
                        <h3 class=\"status-item-title text-center font-bold mt-1\">
                            \${data.history[1].status}
                        </h3>
                </div>
                <div class=\"status-item flex flex-col items-center lg:mb-0 mb-10\">
                    <div class=\"icon flex items-center justify-center w-16 h-16  \${statusTracking1 ? \"bg-red-500 text-white\" : 'bg-slate-100  text-slate-400'} rounded-full border border-orange1 border-dashed\">
                        <span class=\"iconify text-3xl\" data-icon=\"ci:location\"></span>
                    </div>
                        
                        <div>
                        <p class=\"time text-xs text-center mt-5\">
                            \${data.history[0].date_time}
                        </p>
                        <h3 class=\"status-item-title text-center font-bold mt-1  \${statusTracking1 ? \"text-red-600\" : ''}\">
                            \${data.history[0].status}
                        </h3>
                    </div>
                </div>
                <div class=\"status-item flex flex-col items-center lg:mb-0 mb-10\">
                    <div class=\"icon flex items-center justify-center w-16 h-16 bg-slate-100 rounded-full border border-orange1 border-dashed\">
                        <span class=\"iconify text-2xl text-slate-400\" data-icon=\"fa-solid:truck-loading\"></span>
                    </div>
                        <p class=\"time text-xs text-center mt-5\">
                            -----
                        </p>
                        <h3 class=\"status-item-title text-center font-bold mt-1 \${statusTracking3 ?  \"text-red-600\" : ''}\">
                            RECEIVED GUDANG JAKARTA
                        </h3>
                </div>`
            +
           `</div> 
           </div>

           <div class=\"flex flex-col items-center\">
             <p class=\"text-center text-grey3 mb-8\">\${data.last_status.note}</p>
            <hr class=\"max-w-4xl mx-auto\">

            <a href=\"http://localhost:8080/fourcargo/tracking\" class=\"text-center bg-orange2 p-5 text-lg font-extrabold text-white md:w-72 w-full\"> Lacak Pesanan Lain</a>
            </div>
        `; 
         
            
        container.appendChild(containerJalurTracking)
        console.log()
        console.log(data)
    }

    function LoadingScreen() {
        container.innerHTML = `
            <h2 class=\"text-center text-lg\">Loading...<h2>
            `;
    }

    function Alert(message) {
        container.innerHTML = `
            <div class=\"flex flex-col items-center gap-10\">
                <h2 class=\"text-center text-lg text-red-500\">\${message}<h2>
                <a href=\"\${URL}/tracking\" class=\"text-center bg-orange2 p-5 text-lg font-extrabold text-white md:w-72 w-full\"> Lacak Pesanan Lain</a>      
            <div> 
            `;
    }

    async function run(resi){
        if (resi == \"\") {
            Alert(\"Anda Belum Memasukan Nomer Resi\");
            return;
        }

        if (resi != \"\") {
            LoadingScreen();
        }

        let data = await showHint(resi);
        setTimeout(() => {
            if (data != undefined) {
                renderDetailTraking(data);
                renderTrackingStatus(data)
            }

            if (data == undefined) {
                Alert(\"Barang Tidak Ditemukan. Coba Cek Kembali No Resi Anda\");
            }
        }, 1000);
    }

    let params = new URLSearchParams(window.location.search);
    let name = params.get(\"resi\");
    if(params.has('resi')) {
        run(name);
    }

    btnCheckResi.addEventListener(\"click\", async (e) => {
        LoadingScreen();
        e.preventDefault();
        window.location.href  = `\${URL}?resi=\${resi.value}`;
    });

    
 
   
     
</script>";
    }

    public function getTemplateName()
    {
        return "C:\\fourcargo/themes/fourcargo/pages/tracking.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  169 => 64,  162 => 63,  160 => 62,  158 => 61,  154 => 60,  152 => 59,  149 => 58,  147 => 57,  143 => 56,  131 => 47,  126 => 45,  118 => 40,  114 => 39,  110 => 38,  100 => 31,  94 => 28,  90 => 27,  76 => 16,  72 => 15,  63 => 10,  58 => 7,  53 => 6,  51 => 5,  47 => 4,  45 => 3,  41 => 2,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set BASEURL = 'http://localhost:8080/fourcargo' %}
{% partial 'site/header' link1=this.page.navbartracking_link1 link2=this.page.navbartracking_link2
link3=this.page.navbartracking_link3
link4=this.page.navbartracking_link4 link5=this.page.navbartracking_link5 link6=this.page.navbartracking_link6
link7=this.page.navbartracking_link7
logo=this.page.navbartracking_logo url=BASEURL %}

<section
    class=\"h-97 bg-cover relative before:block before:absolute before:right-0 before:bg-linear-orange before:w-full xl:before:w-2/4 lg:before:w-3/5 md:before:w-3/4 md:before:opacity-100 before:opacity-80 before:h-full bg-left-top\"
    style=\"background-image: url({{ BASEURL }}{{ this.page.section1tracking_background |media }});\">
    <div class=\"md:container md:mx-auto w-full h-full flex flex-col items-center pt-10\">
        <div class=\"w-full flex justify-center lg:justify-end md:justify-end mb-36 z-10 lg:mx-7 pt-20\">
            <div class=\"content mt-20 lg:mr-16 md:mr-10 md:text-left text-center -translate-y-3\">
                <h1 class=\"sm:text-6xl text-5xl text-white font-semibold md:-translate-x-1/3 md:-translate-y-4\">
                    {{ this.page.section1tracking_title1 }} <br />
                    {{ this.page.section1tracking_title2 }}
                </h1>
            </div>
        </div>
    </div>
</section>


<section class=\"mt-20\">
    <div class=\"title-tracking text-center mb-15 font-poppins p-8 flex flex-col items-center justify-center\">
        <h1 class=\"font-extrabold text-4xl text-center mb-12 text-blueOld flex items-center flex-col justify-center\">
            {{ this.page.section2tracking_title }}
            <img src=\"{{ 'assets/image/line.png'|theme }}\" class=\"mt-5 w-24\" alt=\"\" />
        </h1>
        <div class=\"font-normal leading-snug font-poppins text-grey lg:w-49\">
            {{ this.page.section2tracking_description|raw }}
        </div>
    </div>
    <div class=\"md:container: md:mx-auto sm:px-16 p-8\" id=\"container-tracking\">
       
        
        <form class=\"flex flex-col items-center \">
            <label for=\"resi\" class=\"font-medium text-grey mb-5\">{{ this.page.section2tracking_input_title1 }}
                <span class=\"italic text-orange2 mb-5 font-bold \">{{ this.page.section2tracking_title_orange }}</span>
                {{ this.page.section2tracking_input_title2 }}
            </label>
            <div class=\"w-full max-w-2xl flex items-center gap-3 font-poppins md:flex-row flex-col\">
                <input type=\"text\"  id=\"resi\"
                    class=\"w-100 input-resi flex-3 rounded-none bg-slate-100 border-dotted border px-4 py-5 font-semibold text-1xl text-brown w-full\"
                    placeholder=\"{{ this.page.section2tracking_input_placeholder }}\" />
                    <button  id=\"checkResi\" class=\"bg-orange2 py-5 text-lg font-extrabold text-white md:w-72 w-full\">
                    {{ this.page.section2tracking_title_button }}
                    </button>
            </div>
        </form>
    </div>
</section>



{% partial 'site/footer' title=this.page.footertracking_title address=this.page.footertracking_address
email=this.page.footertracking_email
phone=this.page.footertracking_phone copyright=this.page.footertracking_copyright
background=this.page.footertracking_background
logo=this.page.footertracking_logo link1=this.page.navbartracking_link1 link2=this.page.navbartracking_link2
link3=this.page.navbartracking_link3
link4=this.page.navbartracking_link4
link5=this.page.navbartracking_link5 link6=this.page.navbartracking_link6 link7=this.page.navbartracking_link7 url=BASEURL %}

<script>
    const URL = 'http://127.0.0.1:8000/';
    const resi = document.getElementById(\"resi\");
    const btnCheckResi = document.getElementById(\"checkResi\");
    let container = document.getElementById(\"container-tracking\");
    let dataTraking;

    async function showHint(str) {
        const API = await fetch(`\${URL}/resi/\${str}`);
        const res = await API.json();
        const data = await res.data;
         
        return data;
     }

    function renderDetailTraking(data) {
       container.innerHTML =  ` <div class=\"box-detail max-w-4xl mx-auto\">
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5   text-grey3 mb-1 sm:w-[37rem]  \">
                <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Customer</p>
                        <span> : </span>
                    </div>  
                </div>    
                <p class=\"\">\${data.customer}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
                 <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Nomor Pesanan</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.no_resi}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
                <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Shipping Mark</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.shipping_mark}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
               <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>PL No</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.pl_no}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
                <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Receive Good Date</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.receive_good_date}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
                <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Total Carton</p>
                        <span> : </span>
                    </div>  
                </div> 

                <p class=\"\">\${data.total_carton}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
              <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>No Resi Local China</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.no_resi_local_china}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
            <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Total Cbm</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.total_cbm}</p>
            </div>
            <div class=\"fields grid grid-cols-2 sm:gap-0 gap-5  text-grey3 mb-1 sm:w-[37rem]\">
                 <div class=\"\">
                    <div class=\"flex justify-between item-center sm:w-[80%]\">
                        <p>Est Arrived Jakarta</p>
                        <span> : </span>
                    </div>  
                </div> 
                <p class=\"\">\${data.est_arrived_jakarta}</p>
            </div>
        </div>`;

    }

    function renderTrackingStatus(data) {
       let statusTracking1 = false; 
       let statusTracking2 = false; 
       let statusTracking3 = false; 
       let statusTracking4 = false; 
       const containerJalurTracking = document.createElement(\"div\");

       switch(true) {
           case data.history[0].date_time == data.last_status.date_time:
               statusTracking1 = true;
               break;
           case data.history[1].date_time == data.last_status.date_time:
               statusTracking2 = true;
               break;
           case data.history[2].date_time == data.last_status.date_time:
               statusTracking3 = true;
               break;
           case data.history[3].date_time == data.last_status.date_time:
               statusTracking4 = true;
               break;
            default:
               statusTracking1 = false;
               statusTracking2 = false;
               statusTracking3 = false;
               statusTracking4 = false;
               break;
       }

       containerJalurTracking.innerHTML = `<div class=\"status bg-slate-50 sm:p-8 p-2 max-w-4xl mx-auto mt-10 mb-5\">
            <div class=\"bg-white p-10 grid lg:grid-cols-4 sm:grid-cols-2 grid-cols-1 relative before:absolute before:w-11/12 before:border before:border-orange1 before:border-dashed lg:before:border-opacity-[0.5] before:left-8 before:top-[4.5rem] before:z-[-1] before:border-opacity-0 z-20\"> ` +
                
                `<div class=\"status-item flex flex-col items-center lg:mb-0 mb-10\">
                    <div class=\"icon flex items-center justify-center w-16 h-16 bg-slate-100 rounded-full border  border-orange1 border-dashed\">
                        <span class=\"iconify text-3xl text-slate-400 \" data-icon=\"fluent:box-24-filled\"></span>
                    </div>
                     <p class=\"time text-xs text-center mt-5\">
                            \${data.history[2].date_time}
                        </p>
                        <h3 class=\"status-item-title text-center font-bold mt-1\">
                            \${data.history[2].status}
                        </h3>
                </div>
                <div class=\"status-item flex flex-col items-center lg:mb-0 mb-10\">
                    <div class=\"icon flex items-center justify-center w-16 h-16 bg-slate-100 rounded-full border border-orange1 border-dashed\">
                        <span class=\"iconify text-3xl text-slate-400\" data-icon=\"mdi:garage-variant\"></span>
                    </div>
                   <p class=\"time text-xs text-center mt-5\">
                            \${data.history[1].date_time}
                        </p>
                        <h3 class=\"status-item-title text-center font-bold mt-1\">
                            \${data.history[1].status}
                        </h3>
                </div>
                <div class=\"status-item flex flex-col items-center lg:mb-0 mb-10\">
                    <div class=\"icon flex items-center justify-center w-16 h-16  \${statusTracking1 ? \"bg-red-500 text-white\" : 'bg-slate-100  text-slate-400'} rounded-full border border-orange1 border-dashed\">
                        <span class=\"iconify text-3xl\" data-icon=\"ci:location\"></span>
                    </div>
                        
                        <div>
                        <p class=\"time text-xs text-center mt-5\">
                            \${data.history[0].date_time}
                        </p>
                        <h3 class=\"status-item-title text-center font-bold mt-1  \${statusTracking1 ? \"text-red-600\" : ''}\">
                            \${data.history[0].status}
                        </h3>
                    </div>
                </div>
                <div class=\"status-item flex flex-col items-center lg:mb-0 mb-10\">
                    <div class=\"icon flex items-center justify-center w-16 h-16 bg-slate-100 rounded-full border border-orange1 border-dashed\">
                        <span class=\"iconify text-2xl text-slate-400\" data-icon=\"fa-solid:truck-loading\"></span>
                    </div>
                        <p class=\"time text-xs text-center mt-5\">
                            -----
                        </p>
                        <h3 class=\"status-item-title text-center font-bold mt-1 \${statusTracking3 ?  \"text-red-600\" : ''}\">
                            RECEIVED GUDANG JAKARTA
                        </h3>
                </div>`
            +
           `</div> 
           </div>

           <div class=\"flex flex-col items-center\">
             <p class=\"text-center text-grey3 mb-8\">\${data.last_status.note}</p>
            <hr class=\"max-w-4xl mx-auto\">

            <a href=\"http://localhost:8080/fourcargo/tracking\" class=\"text-center bg-orange2 p-5 text-lg font-extrabold text-white md:w-72 w-full\"> Lacak Pesanan Lain</a>
            </div>
        `; 
         
            
        container.appendChild(containerJalurTracking)
        console.log()
        console.log(data)
    }

    function LoadingScreen() {
        container.innerHTML = `
            <h2 class=\"text-center text-lg\">Loading...<h2>
            `;
    }

    function Alert(message) {
        container.innerHTML = `
            <div class=\"flex flex-col items-center gap-10\">
                <h2 class=\"text-center text-lg text-red-500\">\${message}<h2>
                <a href=\"\${URL}/tracking\" class=\"text-center bg-orange2 p-5 text-lg font-extrabold text-white md:w-72 w-full\"> Lacak Pesanan Lain</a>      
            <div> 
            `;
    }

    async function run(resi){
        if (resi == \"\") {
            Alert(\"Anda Belum Memasukan Nomer Resi\");
            return;
        }

        if (resi != \"\") {
            LoadingScreen();
        }

        let data = await showHint(resi);
        setTimeout(() => {
            if (data != undefined) {
                renderDetailTraking(data);
                renderTrackingStatus(data)
            }

            if (data == undefined) {
                Alert(\"Barang Tidak Ditemukan. Coba Cek Kembali No Resi Anda\");
            }
        }, 1000);
    }

    let params = new URLSearchParams(window.location.search);
    let name = params.get(\"resi\");
    if(params.has('resi')) {
        run(name);
    }

    btnCheckResi.addEventListener(\"click\", async (e) => {
        LoadingScreen();
        e.preventDefault();
        window.location.href  = `\${URL}?resi=\${resi.value}`;
    });

    
 
   
     
</script>", "C:\\fourcargo/themes/fourcargo/pages/tracking.htm", "");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 1, "partial" => 2);
        static $filters = array("escape" => 10, "media" => 10, "theme" => 28, "raw" => 31);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'partial'],
                ['escape', 'media', 'theme', 'raw'],
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

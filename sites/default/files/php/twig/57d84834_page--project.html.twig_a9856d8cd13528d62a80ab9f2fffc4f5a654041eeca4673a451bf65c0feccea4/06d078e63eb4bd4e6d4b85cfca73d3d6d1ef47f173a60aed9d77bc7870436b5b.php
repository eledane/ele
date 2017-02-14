<?php

/* themes/ele/templates/page--project.html.twig */
class __TwigTemplate_e35c6fe9c9c946d1189fd30231e656c19eb53008ecd51205b1a09eae28866cc2 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $tags = array();
        $filters = array();
        $functions = array();

        try {
            $this->env->getExtension('sandbox')->checkSecurity(
                array(),
                array(),
                array()
            );
        } catch (Twig_Sandbox_SecurityError $e) {
            $e->setTemplateFile($this->getTemplateName());

            if ($e instanceof Twig_Sandbox_SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof Twig_Sandbox_SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

        // line 45
        echo "
\t<!-- Begin Navigation -->
<nav class=\"mobile\">

\t\t<!-- Search -->
\t\t<div class=\"search-trigger\"></div>
\t\t<div class=\"search-form disabled\">
\t\t\t<form action=\"404.html\">
\t\t\t\t<input name=\"search\" id=\"search\" type=\"text\" class=\"search\" onFocus=\"if(this.value == 'Search...') { this.value = ''; }\" onBlur=\"if(this.value == '') { this.value = 'Search...'; }\" value=\"Search...\" />
\t\t\t</form>
\t\t</div><!-- END -->

\t\t<!-- Menu -->
\t\t<ul class=\"nav-content clearfix\">
\t\t\t<li id=\"magic-line\"></li>
\t\t\t<li class=\"drop first upper\">
\t\t\t\t<a class=\"drop-btn\" href=\"#\">Home</a>
\t\t\t\t<ul class=\"drop-list\">
\t\t\t\t\t<li><a href=\"index.html\">Standard</a></li>
\t\t\t\t\t<li><a href=\"home-alternative.html\">Alternative</a></li>
\t\t\t\t\t<li><a href=\"home-portfolio-galore.html\">Portfolio Galore</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"upper\"><a href=\"about.html\">About</a></li>
\t\t\t<li class=\"current-page drop upper\">
\t\t\t\t<a class=\"drop-btn\" href=\"#\">Work</a>
\t\t\t\t<ul class=\"drop-list\">
\t\t\t\t\t<li><a href=\"portfolio.html\">Portfolio</a></li>
\t\t\t\t\t<li><a href=\"portfolio-gallery.html\">Gallery</a></li>
\t\t\t\t\t<li><a href=\"single-project.html\">Single Project</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"upper\"><a href=\"blog.html\">Journal</a></li>
\t\t\t<li class=\"upper\"><a href=\"contact.html\">Contact</a></li>
\t\t\t<li class=\"upper\"><a href=\"http://www.weidea.net\">More theme</a></li>
\t\t</ul><!-- END -->

\t</nav>
\t<header class=\"mobile\">

\t\t<!-- Logo -->
\t\t<a href=\"index.html\"><img class=\"logo\" src=\"";
        // line 86
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/images/logo.png\" alt=\"Form Logo\" width=\"96\" height=\"35\" /></a>

\t\t<!-- Menu Button -->
\t\t<button type=\"button\" class=\"nav-button\">
\t\t  <div class=\"button-bars\"></div>
\t    </button><!-- END -->

\t</header>

\t<div class=\"sticky-head\"></div>
\t<!-- End Navigation -->

  ";
        // line 98
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "help", array()), "html", null, true));
        echo "

    <a id=\"main-content\" tabindex=\"-1\"></a>";
        // line 101
        echo "
      ";
        // line 102
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, $this->getAttribute((isset($context["page"]) ? $context["page"] : null), "content", array()), "html", null, true));
        echo "

\t<!-- Begin Footer -->
\t<footer>
\t\t<div class=\"container\">
\t\t\t<div class=\"row\">

\t\t\t\t<!-- Contact List -->
\t\t\t\t<ul class=\"contact-list col-md-8\">
\t\t\t\t\t<li><i class=\"fa fa-envelope-o\"></i><a href=\"mailto:hello@form.com\">hello@form.com</a></li>
\t\t\t\t\t<li><i class=\"fa fa-phone\"></i><a href=\"#\">+ 714-555-1212</a></li>
\t\t\t\t\t<li><i class=\"fa fa-map-marker\"></i><a href=\"#\">1000 Coney Island Ave. NY 11230</a></li>
\t\t\t\t</ul><!-- END -->

\t\t\t\t<!-- Social List -->
\t\t\t\t<ul class=\"social-list col-md-4\">
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-twitter\"></i></a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-facebook\"></i></a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-instagram\"></i></a></li>
\t\t\t\t\t<li><a href=\"#\"><i class=\"fa fa-pinterest\"></i></a></li>
\t\t\t\t\t<li class=\"copyright\">© 2014 Form, LLC</li>
\t\t\t\t</ul><!-- END -->

\t\t\t</div>
\t\t</div>
\t</footer>
\t<!-- End Footer -->

";
    }

    public function getTemplateName()
    {
        return "themes/ele/templates/page--project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  109 => 102,  106 => 101,  101 => 98,  86 => 86,  43 => 45,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a single page.*/
/*  **/
/*  * The doctype, html, head and body tags are not in this template. Instead they*/
/*  * can be found in the html.html.twig template in this directory.*/
/*  **/
/*  * Available variables:*/
/*  **/
/*  * General utility variables:*/
/*  * - base_path: The base URL path of the Drupal installation. Will usually be*/
/*  *   "/" unless you have installed Drupal in a sub-directory.*/
/*  * - is_front: A flag indicating if the current page is the front page.*/
/*  * - logged_in: A flag indicating if the user is registered and signed in.*/
/*  * - is_admin: A flag indicating if the user has permission to access*/
/*  *   administration pages.*/
/*  **/
/*  * Site identity:*/
/*  * - front_page: The URL of the front page. Use this instead of base_path when*/
/*  *   linking to the front page. This includes the language domain or prefix.*/
/*  **/
/*  * Page content (in order of occurrence in the default page.html.twig):*/
/*  * - node: Fully loaded node, if there is an automatically-loaded node*/
/*  *   associated with the page and the node ID is the second argument in the*/
/*  *   page's path (e.g. node/12345 and node/12345/revisions, but not*/
/*  *   comment/reply/12345).*/
/*  **/
/*  * Regions:*/
/*  * - page.header: Items for the header region.*/
/*  * - page.primary_menu: Items for the primary menu region.*/
/*  * - page.secondary_menu: Items for the secondary menu region.*/
/*  * - page.highlighted: Items for the highlighted content region.*/
/*  * - page.help: Dynamic help text, mostly for admin pages.*/
/*  * - page.content: The main content of the current page.*/
/*  * - page.sidebar_first: Items for the first sidebar.*/
/*  * - page.sidebar_second: Items for the second sidebar.*/
/*  * - page.footer: Items for the footer region.*/
/*  * - page.breadcrumb: Items for the breadcrumb region.*/
/*  **/
/*  * @see template_preprocess_page()*/
/*  * @see html.html.twig*/
/*  *//* */
/* #}*/
/* */
/* 	<!-- Begin Navigation -->*/
/* <nav class="mobile">*/
/* */
/* 		<!-- Search -->*/
/* 		<div class="search-trigger"></div>*/
/* 		<div class="search-form disabled">*/
/* 			<form action="404.html">*/
/* 				<input name="search" id="search" type="text" class="search" onFocus="if(this.value == 'Search...') { this.value = ''; }" onBlur="if(this.value == '') { this.value = 'Search...'; }" value="Search..." />*/
/* 			</form>*/
/* 		</div><!-- END -->*/
/* */
/* 		<!-- Menu -->*/
/* 		<ul class="nav-content clearfix">*/
/* 			<li id="magic-line"></li>*/
/* 			<li class="drop first upper">*/
/* 				<a class="drop-btn" href="#">Home</a>*/
/* 				<ul class="drop-list">*/
/* 					<li><a href="index.html">Standard</a></li>*/
/* 					<li><a href="home-alternative.html">Alternative</a></li>*/
/* 					<li><a href="home-portfolio-galore.html">Portfolio Galore</a></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 			<li class="upper"><a href="about.html">About</a></li>*/
/* 			<li class="current-page drop upper">*/
/* 				<a class="drop-btn" href="#">Work</a>*/
/* 				<ul class="drop-list">*/
/* 					<li><a href="portfolio.html">Portfolio</a></li>*/
/* 					<li><a href="portfolio-gallery.html">Gallery</a></li>*/
/* 					<li><a href="single-project.html">Single Project</a></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 			<li class="upper"><a href="blog.html">Journal</a></li>*/
/* 			<li class="upper"><a href="contact.html">Contact</a></li>*/
/* 			<li class="upper"><a href="http://www.weidea.net">More theme</a></li>*/
/* 		</ul><!-- END -->*/
/* */
/* 	</nav>*/
/* 	<header class="mobile">*/
/* */
/* 		<!-- Logo -->*/
/* 		<a href="index.html"><img class="logo" src="{{ base_path ~ directory }}/images/logo.png" alt="Form Logo" width="96" height="35" /></a>*/
/* */
/* 		<!-- Menu Button -->*/
/* 		<button type="button" class="nav-button">*/
/* 		  <div class="button-bars"></div>*/
/* 	    </button><!-- END -->*/
/* */
/* 	</header>*/
/* */
/* 	<div class="sticky-head"></div>*/
/* 	<!-- End Navigation -->*/
/* */
/*   {{ page.help }}*/
/* */
/*     <a id="main-content" tabindex="-1"></a>{# link is in html.html.twig #}*/
/* */
/*       {{ page.content }}*/
/* */
/* 	<!-- Begin Footer -->*/
/* 	<footer>*/
/* 		<div class="container">*/
/* 			<div class="row">*/
/* */
/* 				<!-- Contact List -->*/
/* 				<ul class="contact-list col-md-8">*/
/* 					<li><i class="fa fa-envelope-o"></i><a href="mailto:hello@form.com">hello@form.com</a></li>*/
/* 					<li><i class="fa fa-phone"></i><a href="#">+ 714-555-1212</a></li>*/
/* 					<li><i class="fa fa-map-marker"></i><a href="#">1000 Coney Island Ave. NY 11230</a></li>*/
/* 				</ul><!-- END -->*/
/* */
/* 				<!-- Social List -->*/
/* 				<ul class="social-list col-md-4">*/
/* 					<li><a href="#"><i class="fa fa-twitter"></i></a></li>*/
/* 					<li><a href="#"><i class="fa fa-facebook"></i></a></li>*/
/* 					<li><a href="#"><i class="fa fa-instagram"></i></a></li>*/
/* 					<li><a href="#"><i class="fa fa-pinterest"></i></a></li>*/
/* 					<li class="copyright">© 2014 Form, LLC</li>*/
/* 				</ul><!-- END -->*/
/* */
/* 			</div>*/
/* 		</div>*/
/* 	</footer>*/
/* 	<!-- End Footer -->*/
/* */
/* */

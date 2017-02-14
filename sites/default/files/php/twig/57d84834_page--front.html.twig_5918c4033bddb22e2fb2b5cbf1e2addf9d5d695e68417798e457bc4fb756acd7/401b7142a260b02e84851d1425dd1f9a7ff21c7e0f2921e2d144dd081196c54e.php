<?php

/* themes/ele/templates/bak/page--front.html.twig */
class __TwigTemplate_d570841e9236c6a3c433e9dbe165858cc7b387f88ded7947e2b2ac109438e578 extends Twig_Template
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

        // line 1
        echo "\t<!-- Begin Navigation -->
\t<nav class=\"mobile\">

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
\t\t\t<li class=\"current-page drop first upper\">
\t\t\t\t<a class=\"drop-btn\" href=\"#\">Home</a>
\t\t\t\t<ul class=\"drop-list\">
\t\t\t\t\t<li><a href=\"index.html\">Standard</a></li>
\t\t\t\t\t<li><a href=\"home-alternative.html\">Alternative</a></li>
\t\t\t\t\t<li><a href=\"home-portfolio-galore.html\">Portfolio Galore</a></li>
\t\t\t\t</ul>
\t\t\t</li>
\t\t\t<li class=\"upper\"><a href=\"about.html\">About</a></li>
\t\t\t<li class=\"drop upper\">
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
        // line 41
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/logo.png\" alt=\"Form Logo\" width=\"96\" height=\"35\" /></a>

\t\t<!-- Menu Button -->
\t\t<button type=\"button\" class=\"nav-button\">
\t\t  <div class=\"button-bars\"></div>
\t    </button><!-- END -->

\t</header>

\t<div class=\"sticky-head\"></div>
\t<!-- End Navigation -->

\t<!-- Begin Large Hero Block -->
\t<section class=\"hero accent parallax\" style=\"background-image: url(";
        // line 54
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/3a.jpg);\">

\t\t<!-- Heading -->
\t\t<div class=\"hero-content container\">
\t\t\t<p><em>The power of your brand - back in your hands.</em></p>
\t\t\t<h1>Show off your work. The right way.</h1>
\t\t</div><!-- END -->

\t\t<!-- Button -->
\t\t<div class=\"sub-hero container\">
\t\t\t<span class=\"line\"></span>
\t\t\t<a href=\"about.html\" class=\"button white\">Learn More</a>
\t\t</div><!-- END -->

\t</section>
\t<!-- End Large Hero Block -->

\t<!-- Begin Overview Block -->
\t<section class=\"center-mobile content container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<h2>What.</h2>
\t\t\t\t<p>Say hello to Form - a new revolution in template design and usability. The power of your brand - back in your hands not your designer.</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<h2>Who.</h2>
\t\t\t\t<p>This template is a perfect fit for both beginners and experts at web design. It is built around pure simplicity and features amazing innovations.</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<h2>How.</h2>
\t\t\t\t<p>With a new approach to building templates - gone are the days of wondering what to edit. You have the power to build yourself!</p>
\t\t\t</div>

\t\t</div>
\t</section>
\t<!-- End Overview Block -->

\t<!-- Begin Video Background Block -->
\t<section class=\"video-background content dark\">
\t\t<div id=\"bgVideo\"></div>
\t\t<div class=\"container\">

\t\t\t<!-- Title -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"center title col-lg-12\">
\t\t\t\t\t<h2>Our services.</h2>
\t\t\t\t\t<p>A selection of services you can edit to show what you can do.</p>
\t\t\t\t</div>
\t\t\t</div><!-- END -->

\t\t\t<!-- Phases -->
\t\t\t<ul class=\"center-mobile phases row\">
\t\t\t\t<li class=\"col-sm-4 clearfix\"><h3><i class=\"icon white target\"></i>Branding.</h3><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p></li>
\t\t\t\t<li class=\"col-sm-4 clearfix\"><h3><i class=\"icon white camera\"></i>Photography.</h3><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium molestias.</p></li>
\t\t\t\t<li class=\"col-sm-4 clearfix\"><h3><i class=\"icon white browser\"></i>Web design.</h3><p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p></li>
\t\t\t</ul>

\t\t\t<!-- Button -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"center padded col-lg-12\">
\t\t\t\t\t<a href=\"about.html\" class=\"button white\">Learn more</a>
\t\t\t\t</div>
\t\t\t</div><!-- END -->

\t\t</div>
\t</section>
\t<!-- End Video Background Block -->

\t<!-- Begin Feature Block -->

<section class=\"feature-box light absolute clearfix\">
\t\t
\t\t<div class=\"content container center-mobile\">

\t\t\t<!-- Title -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"title col-sm-6 col-sm-push-6\">
\t\t\t\t\t<h2>Our services.</h2>
\t\t\t\t\t<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium dolores et quas molestias. Sed ut perspiciatis unde omnis iste natus error.</p>
\t\t\t\t</div>
\t\t\t</div><!-- END-->

\t\t\t<!-- Features -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"feature col-sm-6 col-sm-push-6 clearfix\">
\t\t\t\t\t<i class=\"icon gray target\"></i><h3>Branding.</h3>
\t\t\t\t\t<p class=\"small\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium molestias.</p>
\t\t\t\t</div>
\t\t\t</div><!-- END -->

\t\t\t<!-- Features -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"feature col-sm-6 col-sm-push-6 clearfix\">
\t\t\t\t\t<i class=\"icon gray monitor\"></i><h3>Graphic design.</h3>
\t\t\t\t\t<p class=\"small\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium lorem ipsum.</p>
\t\t\t\t</div>
\t\t\t</div><!-- END -->

\t\t\t<!-- Features -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"feature col-sm-6 col-sm-push-6 clearfix\">
\t\t\t\t\t<i class=\"icon gray browser\"></i><h3>Web design.</h3>
\t\t\t\t\t<p class=\"small\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium molestias.</p>
\t\t\t\t</div>
\t\t\t</div><!-- END -->

\t\t\t<!-- Button -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"feature col-sm-6 col-sm-offset-6\">
\t\t\t\t\t<a href=\"about.html\" class=\"button gray\">Learn More</a>
\t\t\t\t</div>
\t\t\t</div><!-- END -->
\t\t
\t\t</div>

\t\t<div class=\"image-absolute\"></div>
\t</section>


\t<!-- End Feature Block -->



\t<!-- Begin Recent Work  Block -->
\t<section class=\"recent-work content dark parallax\" style=\"background-image: url(";
        // line 179
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/ipad-hands.jpg);\">

\t\t\t<!-- Title and Subtitle -->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-sm-12 center\">
\t\t\t\t\t<h2>Our recent work.</h2>
\t\t\t\t\t<p>A selection of hand-picked portfolio items. Super-easy to include or remove from your designs.</p>
\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div><!-- END -->

\t\t\t<!-- Slider -->
\t\t\t<div id=\"recent-gallery\" class=\"royalSlider rsDefault visibleNearby\">
\t\t\t\t<a class=\"rsImg\" href=\"";
        // line 193
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/work/1.jpg\" data-rsw=\"566\" data-rsh=\"375\"></a>
\t\t\t\t<a class=\"rsImg\" href=\"";
        // line 194
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/work/2.jpg\" data-rsw=\"566\" data-rsh=\"375\"></a>
\t\t\t\t<a class=\"rsImg\" href=\"";
        // line 195
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/work/3.jpg\" data-rsw=\"566\" data-rsh=\"375\"></a>
\t\t\t\t<a class=\"rsImg\" href=\"";
        // line 196
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/work/4.jpg\" data-rsw=\"566\" data-rsh=\"375\"></a>
\t\t\t\t<a class=\"rsImg\" href=\"";
        // line 197
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/work/5.jpg\" data-rsw=\"566\" data-rsh=\"375\"></a>
\t\t\t\t<a class=\"rsImg\" href=\"";
        // line 198
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/work/6.jpg\" data-rsw=\"566\" data-rsh=\"375\"></a>
\t\t\t</div><!-- END -->



\t\t\t<!-- Button -->
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"center padded col-sm-12\">
\t\t\t\t\t<a href=\"portfolio.html\" class=\"button white\">View work</a>
\t\t\t\t</div>
\t\t\t</div><!-- END -->

\t</section>
\t<!-- End Recent Work Block -->

\t<!-- Begin Client Logos Block -->
\t<section class=\"clients container\">
\t\t<div class=\"row\">
\t\t\t<div class=\"logo animated fade col-sm-3\" data-appear-bottom-offset=\"100\">
\t\t\t\t<img src=\"";
        // line 217
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/logos/1.jpg\" alt=\"client\">
\t\t\t</div>
\t\t\t<div class=\"logo animated fade col-sm-3\" data-appear-bottom-offset=\"100\">
\t\t\t\t<img src=\"";
        // line 220
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/logos/2.jpg\" alt=\"client\">
\t\t\t</div>
\t\t\t<div class=\"logo animated fade col-sm-3\" data-appear-bottom-offset=\"100\">
\t\t\t\t<img src=\"";
        // line 223
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/logos/3.jpg\" alt=\"client\">
\t\t\t</div>
\t\t\t<div class=\"logo animated fade col-sm-3\" data-appear-bottom-offset=\"100\">
\t\t\t\t<img src=\"";
        // line 226
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, (isset($context["directory"]) ? $context["directory"] : null), "html", null, true));
        echo "/images/logos/4.jpg\" alt=\"client\">
\t\t\t</div>
\t\t</div>
\t</section>
\t<!-- End Client Logos Block -->

\t<!-- Begin Call to Action Block -->
\t<section class=\"call-to-action content light\">
\t\t<div class=\"container\">

\t\t\t<!-- Title -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"title col-lg-12\">
\t\t\t\t\t<h2>Are you impressed?</h2>
\t\t\t\t\t<p>If so, why don’t you get in touch with us so we can talk about your projects.</p>
\t\t\t\t</div>
\t\t\t</div><!-- END -->

\t\t\t<!-- Actions -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"actions padded col-lg-12\">
\t\t\t\t\t<a class=\"button accent-alt\" href=\"#\">Contact us</a>
\t\t\t\t\t<span class=\"choice\">or</span>
\t\t\t\t\t<a class=\"button gray\" href=\"#\">View Blog</a>
\t\t\t\t</div>
\t\t\t</div><!-- END -->
\t\t</div>
\t</section>
\t<!-- End Call to Action Block -->

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
        return "themes/ele/templates/bak/page--front.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  306 => 226,  300 => 223,  294 => 220,  288 => 217,  266 => 198,  262 => 197,  258 => 196,  254 => 195,  250 => 194,  246 => 193,  229 => 179,  101 => 54,  85 => 41,  43 => 1,);
    }
}
/* 	<!-- Begin Navigation -->*/
/* 	<nav class="mobile">*/
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
/* 			<li class="current-page drop first upper">*/
/* 				<a class="drop-btn" href="#">Home</a>*/
/* 				<ul class="drop-list">*/
/* 					<li><a href="index.html">Standard</a></li>*/
/* 					<li><a href="home-alternative.html">Alternative</a></li>*/
/* 					<li><a href="home-portfolio-galore.html">Portfolio Galore</a></li>*/
/* 				</ul>*/
/* 			</li>*/
/* 			<li class="upper"><a href="about.html">About</a></li>*/
/* 			<li class="drop upper">*/
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
/* 		<a href="index.html"><img class="logo" src="{{ directory }}/images/logo.png" alt="Form Logo" width="96" height="35" /></a>*/
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
/* 	<!-- Begin Large Hero Block -->*/
/* 	<section class="hero accent parallax" style="background-image: url({{ directory }}/images/3a.jpg);">*/
/* */
/* 		<!-- Heading -->*/
/* 		<div class="hero-content container">*/
/* 			<p><em>The power of your brand - back in your hands.</em></p>*/
/* 			<h1>Show off your work. The right way.</h1>*/
/* 		</div><!-- END -->*/
/* */
/* 		<!-- Button -->*/
/* 		<div class="sub-hero container">*/
/* 			<span class="line"></span>*/
/* 			<a href="about.html" class="button white">Learn More</a>*/
/* 		</div><!-- END -->*/
/* */
/* 	</section>*/
/* 	<!-- End Large Hero Block -->*/
/* */
/* 	<!-- Begin Overview Block -->*/
/* 	<section class="center-mobile content container">*/
/* 		<div class="row">*/
/* */
/* 			<div class="col-sm-4">*/
/* 				<h2>What.</h2>*/
/* 				<p>Say hello to Form - a new revolution in template design and usability. The power of your brand - back in your hands not your designer.</p>*/
/* 			</div>*/
/* 			<div class="col-sm-4">*/
/* 				<h2>Who.</h2>*/
/* 				<p>This template is a perfect fit for both beginners and experts at web design. It is built around pure simplicity and features amazing innovations.</p>*/
/* 			</div>*/
/* 			<div class="col-sm-4">*/
/* 				<h2>How.</h2>*/
/* 				<p>With a new approach to building templates - gone are the days of wondering what to edit. You have the power to build yourself!</p>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* 	</section>*/
/* 	<!-- End Overview Block -->*/
/* */
/* 	<!-- Begin Video Background Block -->*/
/* 	<section class="video-background content dark">*/
/* 		<div id="bgVideo"></div>*/
/* 		<div class="container">*/
/* */
/* 			<!-- Title -->*/
/* 			<div class="row">*/
/* 				<div class="center title col-lg-12">*/
/* 					<h2>Our services.</h2>*/
/* 					<p>A selection of services you can edit to show what you can do.</p>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* */
/* 			<!-- Phases -->*/
/* 			<ul class="center-mobile phases row">*/
/* 				<li class="col-sm-4 clearfix"><h3><i class="icon white target"></i>Branding.</h3><p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque.</p></li>*/
/* 				<li class="col-sm-4 clearfix"><h3><i class="icon white camera"></i>Photography.</h3><p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium molestias.</p></li>*/
/* 				<li class="col-sm-4 clearfix"><h3><i class="icon white browser"></i>Web design.</h3><p>Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p></li>*/
/* 			</ul>*/
/* */
/* 			<!-- Button -->*/
/* 			<div class="row">*/
/* 				<div class="center padded col-lg-12">*/
/* 					<a href="about.html" class="button white">Learn more</a>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* */
/* 		</div>*/
/* 	</section>*/
/* 	<!-- End Video Background Block -->*/
/* */
/* 	<!-- Begin Feature Block -->*/
/* */
/* <section class="feature-box light absolute clearfix">*/
/* 		*/
/* 		<div class="content container center-mobile">*/
/* */
/* 			<!-- Title -->*/
/* 			<div class="row">*/
/* 				<div class="title col-sm-6 col-sm-push-6">*/
/* 					<h2>Our services.</h2>*/
/* 					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium dolores et quas molestias. Sed ut perspiciatis unde omnis iste natus error.</p>*/
/* 				</div>*/
/* 			</div><!-- END-->*/
/* */
/* 			<!-- Features -->*/
/* 			<div class="row">*/
/* 				<div class="feature col-sm-6 col-sm-push-6 clearfix">*/
/* 					<i class="icon gray target"></i><h3>Branding.</h3>*/
/* 					<p class="small">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium molestias.</p>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* */
/* 			<!-- Features -->*/
/* 			<div class="row">*/
/* 				<div class="feature col-sm-6 col-sm-push-6 clearfix">*/
/* 					<i class="icon gray monitor"></i><h3>Graphic design.</h3>*/
/* 					<p class="small">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium lorem ipsum.</p>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* */
/* 			<!-- Features -->*/
/* 			<div class="row">*/
/* 				<div class="feature col-sm-6 col-sm-push-6 clearfix">*/
/* 					<i class="icon gray browser"></i><h3>Web design.</h3>*/
/* 					<p class="small">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium molestias.</p>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* */
/* 			<!-- Button -->*/
/* 			<div class="row">*/
/* 				<div class="feature col-sm-6 col-sm-offset-6">*/
/* 					<a href="about.html" class="button gray">Learn More</a>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* 		*/
/* 		</div>*/
/* */
/* 		<div class="image-absolute"></div>*/
/* 	</section>*/
/* */
/* */
/* 	<!-- End Feature Block -->*/
/* */
/* */
/* */
/* 	<!-- Begin Recent Work  Block -->*/
/* 	<section class="recent-work content dark parallax" style="background-image: url({{ directory }}/images/ipad-hands.jpg);">*/
/* */
/* 			<!-- Title and Subtitle -->*/
/* 			<div class="container">*/
/* 				<div class="row">*/
/* 				<div class="col-sm-12 center">*/
/* 					<h2>Our recent work.</h2>*/
/* 					<p>A selection of hand-picked portfolio items. Super-easy to include or remove from your designs.</p>*/
/* 				</div>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* */
/* 			<!-- Slider -->*/
/* 			<div id="recent-gallery" class="royalSlider rsDefault visibleNearby">*/
/* 				<a class="rsImg" href="{{ directory }}/images/work/1.jpg" data-rsw="566" data-rsh="375"></a>*/
/* 				<a class="rsImg" href="{{ directory }}/images/work/2.jpg" data-rsw="566" data-rsh="375"></a>*/
/* 				<a class="rsImg" href="{{ directory }}/images/work/3.jpg" data-rsw="566" data-rsh="375"></a>*/
/* 				<a class="rsImg" href="{{ directory }}/images/work/4.jpg" data-rsw="566" data-rsh="375"></a>*/
/* 				<a class="rsImg" href="{{ directory }}/images/work/5.jpg" data-rsw="566" data-rsh="375"></a>*/
/* 				<a class="rsImg" href="{{ directory }}/images/work/6.jpg" data-rsw="566" data-rsh="375"></a>*/
/* 			</div><!-- END -->*/
/* */
/* */
/* */
/* 			<!-- Button -->*/
/* 			<div class="container">*/
/* 				<div class="center padded col-sm-12">*/
/* 					<a href="portfolio.html" class="button white">View work</a>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* */
/* 	</section>*/
/* 	<!-- End Recent Work Block -->*/
/* */
/* 	<!-- Begin Client Logos Block -->*/
/* 	<section class="clients container">*/
/* 		<div class="row">*/
/* 			<div class="logo animated fade col-sm-3" data-appear-bottom-offset="100">*/
/* 				<img src="{{ directory }}/images/logos/1.jpg" alt="client">*/
/* 			</div>*/
/* 			<div class="logo animated fade col-sm-3" data-appear-bottom-offset="100">*/
/* 				<img src="{{ directory }}/images/logos/2.jpg" alt="client">*/
/* 			</div>*/
/* 			<div class="logo animated fade col-sm-3" data-appear-bottom-offset="100">*/
/* 				<img src="{{ directory }}/images/logos/3.jpg" alt="client">*/
/* 			</div>*/
/* 			<div class="logo animated fade col-sm-3" data-appear-bottom-offset="100">*/
/* 				<img src="{{ directory }}/images/logos/4.jpg" alt="client">*/
/* 			</div>*/
/* 		</div>*/
/* 	</section>*/
/* 	<!-- End Client Logos Block -->*/
/* */
/* 	<!-- Begin Call to Action Block -->*/
/* 	<section class="call-to-action content light">*/
/* 		<div class="container">*/
/* */
/* 			<!-- Title -->*/
/* 			<div class="row">*/
/* 				<div class="title col-lg-12">*/
/* 					<h2>Are you impressed?</h2>*/
/* 					<p>If so, why don’t you get in touch with us so we can talk about your projects.</p>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* */
/* 			<!-- Actions -->*/
/* 			<div class="row">*/
/* 				<div class="actions padded col-lg-12">*/
/* 					<a class="button accent-alt" href="#">Contact us</a>*/
/* 					<span class="choice">or</span>*/
/* 					<a class="button gray" href="#">View Blog</a>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* 		</div>*/
/* 	</section>*/
/* 	<!-- End Call to Action Block -->*/
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

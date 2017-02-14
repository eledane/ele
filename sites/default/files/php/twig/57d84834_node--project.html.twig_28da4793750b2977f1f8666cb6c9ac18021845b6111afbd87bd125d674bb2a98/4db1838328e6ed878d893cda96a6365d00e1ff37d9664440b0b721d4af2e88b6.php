<?php

/* themes/ele/templates/node--project.html.twig */
class __TwigTemplate_78bb34f2786eba8907e386769b0271825c7e004e4889f99f789c0186c62c0468 extends Twig_Template
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

        // line 73
        echo "\t<!-- Begin Small Hero Block -->
\t<section class=\"hero small accent parallax\" style=\"background-image: url(";
        // line 74
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/images/hero-project.jpg);\">

\t\t<!-- Heading -->
\t\t<div class=\"hero-content container\">
\t\t\t<h1>Project Name.</h1>
\t\t</div><!-- END -->

\t\t<!-- Navigation -->
\t\t<div class=\"sub-hero container\">
\t\t\t<ul class=\"project-nav\">
\t\t\t\t<li class=\"prev-project clearfix\"><a href=\"#\">Previous</a></li>
\t\t\t\t<li class=\"all-project clearfix\"><a href=\"portfolio.html\"><i class=\"icon keypad white\"></i></a></li>
\t\t\t\t<li class=\"next-project clearfix\"><a href=\"#\">Next</a></li>
\t\t\t</ul>
\t\t</div><!-- END -->

\t</section>
\t<!-- End Small Hero Block -->

\t<!-- Begin Overview Block -->
\t<section class=\"center-mobile overview-block content container\">
\t\t<div class=\"row\">

\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<h2>Challange.</h2>
\t\t\t\t<p>Vivamus iaculis metus eget nibh dapibus fringilla. Duis vel justo venenatis ligula bibendum vulputate et et tellus.</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<h2>Solution.</h2>
\t\t\t\t<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed nunc risus, ac vehicula turpis. Duis fringilla fringilla lorem, at ultricies tortor.</p>
\t\t\t</div>
\t\t\t<div class=\"col-sm-4\">
\t\t\t\t<h2>Result.</h2>
\t\t\t\t<p>Duis fringilla fringilla lorem, at ultricies tortor. Et harum quidem rerum facilis est et expedita distinctio.</p>
\t\t\t</div>

\t\t</div>

\t\t<!-- Button -->
\t\t<div class=\"row\">
\t\t\t<div class=\"center padded col-sm-12\">
\t\t\t\t<a href=\"#\" class=\"button accent\">View online</a>
\t\t\t</div>
\t\t</div><!-- END -->
\t</section>
\t<!-- End Overview Block -->

\t<!-- Begin Project Slider Block -->
\t<section class=\"project-gallery\">
\t\t<ul class=\"project-slider\">
\t\t\t<li><img class=\"bg-check\" src=\"";
        // line 124
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/images/work/slide1.jpg\" alt=\"\"></li>
\t\t\t<li><img class=\"bg-check\" src=\"";
        // line 125
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/images/work/slide2.jpg\" alt=\"\"></li>
\t\t\t<li><img class=\"bg-check\" src=\"";
        // line 126
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/images/work/slide3.jpg\" alt=\"\"></li>
\t\t\t<li><img class=\"bg-check\" src=\"";
        // line 127
        echo $this->env->getExtension('sandbox')->ensureToStringAllowed($this->env->getExtension('drupal_core')->escapeFilter($this->env, ((isset($context["base_path"]) ? $context["base_path"] : null) . (isset($context["directory"]) ? $context["directory"] : null)), "html", null, true));
        echo "/images/work/slide4.jpg\" alt=\"\"></li>
\t\t</ul>
\t\t<div class=\"project-prev\"></div>
\t\t<div class=\"project-next\"></div>
\t\t<div class=\"project-controls\"></div>
\t</section>
\t<!-- End Project Slider Block -->

\t<!-- Begin Milestone Block -->
\t<section class=\"container\">
\t\t<div class=\"row\">

\t\t\t<!-- Milestone -->
\t\t\t<div class=\"milestone col-sm-4\">
\t\t\t\t<span class=\"timer value\" data-from=\"0\" data-to=\"5\" data-speed=\"1000\" data-refresh-interval=\"100\">0</span>
\t\t\t\t<h6>Propositions</h6>
\t\t\t</div><!-- END -->

\t\t\t<!-- Milestone -->
\t\t\t<div class=\"milestone col-sm-4\">
\t\t\t\t<span class=\"timer value\" data-from=\"0\" data-to=\"100\" data-speed=\"1000\" data-refresh-interval=\"100\">0</span>
\t\t\t\t<h6>Hours</h6>
\t\t\t</div><!-- END -->

\t\t\t<!-- Milestone -->
\t\t\t<div class=\"milestone col-sm-4\">
\t\t\t\t<span class=\"timer value\" data-from=\"0\" data-to=\"90\" data-speed=\"1000\" data-refresh-interval=\"100\">0</span>
\t\t\t\t<h6>Coffees</h6>
\t\t\t</div><!-- END -->

\t\t</div>
\t</section>
\t<!-- End Milestone Block -->

\t<!-- Begin Absolute Feature Block -->
\t<section class=\"feature-box light absolute clearfix\">
\t\t
\t\t<div class=\"center-mobile content container\">

\t\t\t<!-- Title -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"title col-sm-6 col-sm-push-6\">
\t\t\t\t\t<h2>What we did.</h2>
\t\t\t\t\t<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium dolores et quas molestias..</p>
\t\t\t\t</div>
\t\t\t</div><!-- END-->

\t\t\t<!-- Features -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"feature col-sm-6 col-sm-push-6 clearfix\">
\t\t\t\t\t<i class=\"icon gray albums\"></i><h3>Wireframing.</h3>
\t\t\t\t\t<p class=\"small\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium molestias.</p>
\t\t\t\t</div>
\t\t\t</div><!-- END -->

\t\t\t<!-- Features -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"feature col-sm-6 col-sm-push-6 clearfix\">
\t\t\t\t\t<i class=\"icon gray repeat\"></i><h3>Revisions.</h3>
\t\t\t\t\t<p class=\"small\">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium lorem ipsum.</p>
\t\t\t\t</div>
\t\t\t</div><!-- END -->

\t\t\t<!-- Features -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"feature col-sm-6 col-sm-push-6 clearfix\">
\t\t\t\t\t<i class=\"icon gray mouse\"></i><h3>Design.</h3>
\t\t\t\t\t<p class=\"small\">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>
\t\t\t\t</div>
\t\t\t</div><!-- END -->

\t\t\t<!-- Features -->
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"feature col-sm-6 col-sm-push-6 clearfix\">
\t\t\t\t\t<i class=\"icon gray browser\"></i><h3>Development.</h3>
\t\t\t\t\t<p class=\"small\">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium molestias.</p>
\t\t\t\t</div>
\t\t\t</div><!-- END -->
\t\t
\t\t</div>

\t\t<div class=\"image-absolute\"></div>
\t</section>
\t<!-- End Feature Block -->

\t<!-- Begin Share Block -->
\t<section class=\"share-block container\">

\t\t<!-- Title -->
\t\t<div class=\"row\">
\t\t\t<div class=\"title col-sm-12\">
\t\t\t\t<h2>Sharing makes you an awesome human being.</h2>
\t\t\t\t<p>A selection of hand-picked share buttons. Super-easy to include or remove from your designs.</p>
\t\t\t</div>
\t\t</div><!-- END-->

\t\t<!-- Share Buttons -->
\t\t<!-- END -->
\t\t
\t</section>
\t<!-- End Share Block -->

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

";
    }

    public function getTemplateName()
    {
        return "themes/ele/templates/node--project.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  111 => 127,  107 => 126,  103 => 125,  99 => 124,  46 => 74,  43 => 73,);
    }
}
/* {#*/
/* /***/
/*  * @file*/
/*  * Theme override to display a node.*/
/*  **/
/*  * Available variables:*/
/*  * - node: The node entity with limited access to object properties and methods.*/
/*  *   Only method names starting with "get", "has", or "is" and a few common*/
/*  *   methods such as "id", "label", and "bundle" are available. For example:*/
/*  *   - node.getCreatedTime() will return the node creation timestamp.*/
/*  *   - node.hasField('field_example') returns TRUE if the node bundle includes*/
/*  *     field_example. (This does not indicate the presence of a value in this*/
/*  *     field.)*/
/*  *   - node.isPublished() will return whether the node is published or not.*/
/*  *   Calling other methods, such as node.delete(), will result in an exception.*/
/*  *   See \Drupal\node\Entity\Node for a full list of public properties and*/
/*  *   methods for the node object.*/
/*  * - label: The title of the node.*/
/*  * - content: All node items. Use {{ content }} to print them all,*/
/*  *   or print a subset such as {{ content.field_example }}. Use*/
/*  *   {{ content|without('field_example') }} to temporarily suppress the printing*/
/*  *   of a given child element.*/
/*  * - author_picture: The node author user entity, rendered using the "compact"*/
/*  *   view mode.*/
/*  * - metadata: Metadata for this node.*/
/*  * - date: Themed creation date field.*/
/*  * - author_name: Themed author name field.*/
/*  * - url: Direct URL of the current node.*/
/*  * - display_submitted: Whether submission information should be displayed.*/
/*  * - attributes: HTML attributes for the containing element.*/
/*  *   The attributes.class element may contain one or more of the following*/
/*  *   classes:*/
/*  *   - node: The current template type (also known as a "theming hook").*/
/*  *   - node--type-[type]: The current node type. For example, if the node is an*/
/*  *     "Article" it would result in "node--type-article". Note that the machine*/
/*  *     name will often be in a short form of the human readable label.*/
/*  *   - node--view-mode-[view_mode]: The View Mode of the node; for example, a*/
/*  *     teaser would result in: "node--view-mode-teaser", and*/
/*  *     full: "node--view-mode-full".*/
/*  *   The following are controlled through the node publishing options.*/
/*  *   - node--promoted: Appears on nodes promoted to the front page.*/
/*  *   - node--sticky: Appears on nodes ordered above other non-sticky nodes in*/
/*  *     teaser listings.*/
/*  *   - node--unpublished: Appears on unpublished nodes visible only to site*/
/*  *     admins.*/
/*  * - title_attributes: Same as attributes, except applied to the main title*/
/*  *   tag that appears in the template.*/
/*  * - content_attributes: Same as attributes, except applied to the main*/
/*  *   content tag that appears in the template.*/
/*  * - author_attributes: Same as attributes, except applied to the author of*/
/*  *   the node tag that appears in the template.*/
/*  * - title_prefix: Additional output populated by modules, intended to be*/
/*  *   displayed in front of the main title tag that appears in the template.*/
/*  * - title_suffix: Additional output populated by modules, intended to be*/
/*  *   displayed after the main title tag that appears in the template.*/
/*  * - view_mode: View mode; for example, "teaser" or "full".*/
/*  * - teaser: Flag for the teaser state. Will be true if view_mode is 'teaser'.*/
/*  * - page: Flag for the full page state. Will be true if view_mode is 'full'.*/
/*  * - readmore: Flag for more state. Will be true if the teaser content of the*/
/*  *   node cannot hold the main body content.*/
/*  * - logged_in: Flag for authenticated user status. Will be true when the*/
/*  *   current user is a logged-in member.*/
/*  * - is_admin: Flag for admin user status. Will be true when the current user*/
/*  *   is an administrator.*/
/*  **/
/*  * @see template_preprocess_node()*/
/*  **/
/*  * @todo Remove the id attribute (or make it a class), because if that gets*/
/*  *   rendered twice on a page this is invalid CSS for example: two lists*/
/*  *   in different view modes.*/
/*  *//* */
/* #}*/
/* 	<!-- Begin Small Hero Block -->*/
/* 	<section class="hero small accent parallax" style="background-image: url({{ base_path ~ directory }}/images/hero-project.jpg);">*/
/* */
/* 		<!-- Heading -->*/
/* 		<div class="hero-content container">*/
/* 			<h1>Project Name.</h1>*/
/* 		</div><!-- END -->*/
/* */
/* 		<!-- Navigation -->*/
/* 		<div class="sub-hero container">*/
/* 			<ul class="project-nav">*/
/* 				<li class="prev-project clearfix"><a href="#">Previous</a></li>*/
/* 				<li class="all-project clearfix"><a href="portfolio.html"><i class="icon keypad white"></i></a></li>*/
/* 				<li class="next-project clearfix"><a href="#">Next</a></li>*/
/* 			</ul>*/
/* 		</div><!-- END -->*/
/* */
/* 	</section>*/
/* 	<!-- End Small Hero Block -->*/
/* */
/* 	<!-- Begin Overview Block -->*/
/* 	<section class="center-mobile overview-block content container">*/
/* 		<div class="row">*/
/* */
/* 			<div class="col-sm-4">*/
/* 				<h2>Challange.</h2>*/
/* 				<p>Vivamus iaculis metus eget nibh dapibus fringilla. Duis vel justo venenatis ligula bibendum vulputate et et tellus.</p>*/
/* 			</div>*/
/* 			<div class="col-sm-4">*/
/* 				<h2>Solution.</h2>*/
/* 				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec sed nunc risus, ac vehicula turpis. Duis fringilla fringilla lorem, at ultricies tortor.</p>*/
/* 			</div>*/
/* 			<div class="col-sm-4">*/
/* 				<h2>Result.</h2>*/
/* 				<p>Duis fringilla fringilla lorem, at ultricies tortor. Et harum quidem rerum facilis est et expedita distinctio.</p>*/
/* 			</div>*/
/* */
/* 		</div>*/
/* */
/* 		<!-- Button -->*/
/* 		<div class="row">*/
/* 			<div class="center padded col-sm-12">*/
/* 				<a href="#" class="button accent">View online</a>*/
/* 			</div>*/
/* 		</div><!-- END -->*/
/* 	</section>*/
/* 	<!-- End Overview Block -->*/
/* */
/* 	<!-- Begin Project Slider Block -->*/
/* 	<section class="project-gallery">*/
/* 		<ul class="project-slider">*/
/* 			<li><img class="bg-check" src="{{ base_path ~ directory }}/images/work/slide1.jpg" alt=""></li>*/
/* 			<li><img class="bg-check" src="{{ base_path ~ directory }}/images/work/slide2.jpg" alt=""></li>*/
/* 			<li><img class="bg-check" src="{{ base_path ~ directory }}/images/work/slide3.jpg" alt=""></li>*/
/* 			<li><img class="bg-check" src="{{ base_path ~ directory }}/images/work/slide4.jpg" alt=""></li>*/
/* 		</ul>*/
/* 		<div class="project-prev"></div>*/
/* 		<div class="project-next"></div>*/
/* 		<div class="project-controls"></div>*/
/* 	</section>*/
/* 	<!-- End Project Slider Block -->*/
/* */
/* 	<!-- Begin Milestone Block -->*/
/* 	<section class="container">*/
/* 		<div class="row">*/
/* */
/* 			<!-- Milestone -->*/
/* 			<div class="milestone col-sm-4">*/
/* 				<span class="timer value" data-from="0" data-to="5" data-speed="1000" data-refresh-interval="100">0</span>*/
/* 				<h6>Propositions</h6>*/
/* 			</div><!-- END -->*/
/* */
/* 			<!-- Milestone -->*/
/* 			<div class="milestone col-sm-4">*/
/* 				<span class="timer value" data-from="0" data-to="100" data-speed="1000" data-refresh-interval="100">0</span>*/
/* 				<h6>Hours</h6>*/
/* 			</div><!-- END -->*/
/* */
/* 			<!-- Milestone -->*/
/* 			<div class="milestone col-sm-4">*/
/* 				<span class="timer value" data-from="0" data-to="90" data-speed="1000" data-refresh-interval="100">0</span>*/
/* 				<h6>Coffees</h6>*/
/* 			</div><!-- END -->*/
/* */
/* 		</div>*/
/* 	</section>*/
/* 	<!-- End Milestone Block -->*/
/* */
/* 	<!-- Begin Absolute Feature Block -->*/
/* 	<section class="feature-box light absolute clearfix">*/
/* 		*/
/* 		<div class="center-mobile content container">*/
/* */
/* 			<!-- Title -->*/
/* 			<div class="row">*/
/* 				<div class="title col-sm-6 col-sm-push-6">*/
/* 					<h2>What we did.</h2>*/
/* 					<p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium dolores et quas molestias..</p>*/
/* 				</div>*/
/* 			</div><!-- END-->*/
/* */
/* 			<!-- Features -->*/
/* 			<div class="row">*/
/* 				<div class="feature col-sm-6 col-sm-push-6 clearfix">*/
/* 					<i class="icon gray albums"></i><h3>Wireframing.</h3>*/
/* 					<p class="small">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium molestias.</p>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* */
/* 			<!-- Features -->*/
/* 			<div class="row">*/
/* 				<div class="feature col-sm-6 col-sm-push-6 clearfix">*/
/* 					<i class="icon gray repeat"></i><h3>Revisions.</h3>*/
/* 					<p class="small">Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium lorem ipsum.</p>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* */
/* 			<!-- Features -->*/
/* 			<div class="row">*/
/* 				<div class="feature col-sm-6 col-sm-push-6 clearfix">*/
/* 					<i class="icon gray mouse"></i><h3>Design.</h3>*/
/* 					<p class="small">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus.</p>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* */
/* 			<!-- Features -->*/
/* 			<div class="row">*/
/* 				<div class="feature col-sm-6 col-sm-push-6 clearfix">*/
/* 					<i class="icon gray browser"></i><h3>Development.</h3>*/
/* 					<p class="small">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium molestias.</p>*/
/* 				</div>*/
/* 			</div><!-- END -->*/
/* 		*/
/* 		</div>*/
/* */
/* 		<div class="image-absolute"></div>*/
/* 	</section>*/
/* 	<!-- End Feature Block -->*/
/* */
/* 	<!-- Begin Share Block -->*/
/* 	<section class="share-block container">*/
/* */
/* 		<!-- Title -->*/
/* 		<div class="row">*/
/* 			<div class="title col-sm-12">*/
/* 				<h2>Sharing makes you an awesome human being.</h2>*/
/* 				<p>A selection of hand-picked share buttons. Super-easy to include or remove from your designs.</p>*/
/* 			</div>*/
/* 		</div><!-- END-->*/
/* */
/* 		<!-- Share Buttons -->*/
/* 		<!-- END -->*/
/* 		*/
/* 	</section>*/
/* 	<!-- End Share Block -->*/
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
/* */

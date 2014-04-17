<?php

/* GoldenCageShopBundle::template.html.twig */
class __TwigTemplate_98acb49956510811a42a35c94a2b963f07a9410e384996ba2e162c4ee71ad437 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!doctype html>
<html>

<head>
<meta charset=\"utf-8\">
<meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge,chrome=1\">
<meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1\"/>
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 8
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/style.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/jquery-ui.css"), "html", null, true);
        echo "\" /> 
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/responsive-options.css"), "html", null, true);
        echo "\" /> 
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 11
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/bootstrap.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/megamenu.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 13
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/bootstrap-responsive.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 14
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/jquery.formstyler.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 15
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/elastic-slideshow.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/dlmenu.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 17
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/smartwizard.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 18
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/font-awesome.css"), "html", null, true);
        echo "\" />
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 19
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/multizoom.css"), "html", null, true);
        echo "\" /> 
<link rel=\"stylesheet\" type=\"text/css\" href=\"";
        // line 20
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/css/jquery.modal.css"), "html", null, true);
        echo "\"  media=\"screen\" />
<link rel=\"shortcut icon\" href=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/images/favicon.ico"), "html", null, true);
        echo "\">

<script src";
        // line 23
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/modernizr.custom.js"), "html", null, true);
        echo "></script>


<title>Right Choice</title>

</head>
<body>
";
        // line 30
        $this->displayBlock('body', $context, $blocks);
        // line 32
        echo "</body>
<script type=\"text/javascript\" src=\"";
        // line 33
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 34
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.eislideshow.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 35
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/bootstrap.min.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.easing.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 37
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.dlmenu.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 38
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.smartwizard.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 39
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.formstyler.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 40
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.nicescroll.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 41
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.carouFredSel-6.2.1-packed.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 42
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.ui.core.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 43
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.ui.widget.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 44
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.ui.mouse.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 45
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.ui.slider.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 46
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.ui.tabs.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 47
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.modal.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 48
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/jquery.jcountdown.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\" src=\"";
        // line 49
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/GoldenCageShop/js/script.js"), "html", null, true);
        echo "\"></script>
<script type=\"text/javascript\">
//<![CDATA[
\tjQuery(document).ready(function(\$){
\t\t
\t\t// Activate Sign Up Modal Block on Page Load
\t\t\$(\"#sign-up-modal\").modal();
\t\t
\t\t
\t\t// Daily Deal CountDown Clock Settings
\t\tvar date = new Date().getTime();\t\t\t// This example is just to show how this function works.
\t\tvar new_date = new Date(date + 86400000);\t// You can set your own time whenever you want.
\t\tvar n = new_date.toUTCString();\t\t\t\t// 'date' value is given in milliseconds.
\t\t
\t\t\$(\"#time\").countdown({
\t\t\tdate: new_date,
\t\t\tyearsAndMonths: true,
\t\t\tleadingZero: true
\t\t});
\t\t
\t\t
\t\t// CarouFredSel Functions
\t\t\$('#carouFredSel-big').carouFredSel({
\t\t\tresponsive:true,
\t\t\theight: 'auto',
\t\t\tprev: '#prev_big',
\t\t\tnext: '#next_big',
\t\t\tauto: {
\t\t\t\t\ttimeoutDuration: 10000,
\t\t\t\t\tpauseOnHover: true
\t\t\t\t  }
\t\t})/*.find(\"li\").hover(
\t\t\tfunction() { \$(this).find(\"div\").slideDown(); },
\t\t\tfunction() { \$(this).find(\"div\").slideUp();}
\t\t)*/;
\t\t\t
\t\t\$('#productBestSale').carouFredSel({
\t\t\tresponsive:true,
\t\t\twidth: '100%',
\t\t\tscroll: {duration:500,items:1},
\t\t\tprev: '#prev_productBestSale',
\t\t\tnext: '#next_productBestSale',
\t\t\tauto: false,
\t\t\titems: {
\t\t\t\theight: 'auto',
\t\t\t//\theight: '30%',\t//\toptionally resize item-height
\t\t\t\tvisible: {
\t\t\t\t\tmin: 1,
\t\t\t\t\tmax: 6
\t\t\t\t}
\t\t\t}
\t\t});
\t\t\$('#productNew').carouFredSel({
\t\t\tresponsive:true,
\t\t\twidth: '100%',
\t\t\tscroll: {duration:500,items:1},
\t\t\tprev: '#prev_productNew',
\t\t\tnext: '#next_productNew',
\t\t\tauto: false,
\t\t\titems: {
\t\t\t\theight: 'auto',
\t\t\t//\theight: '30%',\t//\toptionally resize item-height
\t\t\t\tvisible: {
\t\t\t\t\tmin: 1,
\t\t\t\t\tmax: 6
\t\t\t\t}
\t\t\t}
\t\t});
\t\t\$('#productFeatured').carouFredSel({
\t\t\tresponsive:true,
\t\t\twidth: '100%',
\t\t\tscroll: {duration:500,items:1},
\t\t\tprev: '#prev_productFeatured',
\t\t\tnext: '#next_productFeatured',
\t\t\tauto: false,
\t\t\titems: {
\t\t\t\theight: 'auto',
\t\t\t//\theight: '30%',\t//\toptionally resize item-height
\t\t\t\tvisible: {
\t\t\t\t\tmin: 1,
\t\t\t\t\tmax: 6
\t\t\t\t}
\t\t\t}
\t\t});
\t\t\$('#partner').carouFredSel({
\t\t\tresponsive: true,
\t\t\twidth: '100%',
\t\t\tscroll: 1,
\t\t\titems: {
\t\t\t\theight:'100%',
\t\t\t//\theight: '30%',\t//\toptionally resize item-height
\t\t\t\tvisible: {
\t\t\t\t\tmin: 1,
\t\t\t\t\tmax: 6
\t\t\t\t}
\t\t\t}
\t\t});
\t});
//]]>
</script>

</html>
";
    }

    // line 30
    public function block_body($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "GoldenCageShopBundle::template.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  272 => 30,  165 => 49,  161 => 48,  157 => 47,  153 => 46,  149 => 45,  145 => 44,  141 => 43,  137 => 42,  133 => 41,  129 => 40,  125 => 39,  121 => 38,  117 => 37,  113 => 36,  109 => 35,  105 => 34,  101 => 33,  98 => 32,  96 => 30,  86 => 23,  81 => 21,  77 => 20,  73 => 19,  69 => 18,  65 => 17,  61 => 16,  57 => 15,  53 => 14,  49 => 13,  45 => 12,  41 => 11,  37 => 10,  33 => 9,  29 => 8,  20 => 1,  1407 => 1270,  1403 => 1269,  1399 => 1268,  1395 => 1267,  1391 => 1266,  1210 => 1088,  1193 => 1074,  1184 => 1068,  1175 => 1062,  1130 => 1020,  1095 => 988,  1064 => 960,  1029 => 928,  996 => 898,  941 => 846,  902 => 810,  867 => 778,  828 => 742,  791 => 708,  772 => 692,  727 => 650,  688 => 614,  653 => 582,  614 => 546,  577 => 512,  555 => 493,  548 => 489,  518 => 462,  503 => 450,  488 => 438,  473 => 426,  434 => 390,  402 => 361,  360 => 322,  274 => 239,  261 => 229,  248 => 219,  31 => 4,  28 => 3,);
    }
}

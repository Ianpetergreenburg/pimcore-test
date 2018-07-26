<?php

/* @PimcoreCore/Analytics/Tracking/Google/Analytics/universalTrackingCode.html.twig */
class __TwigTemplate_cf141e56fa5ec576adbb7e2e7f376966bc1ce1dd01e63fdf47ffae9b5768d246 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'beforeScriptTag' => array($this, 'block_beforeScriptTag'),
            'beforeScript' => array($this, 'block_beforeScript'),
            'beforeInit' => array($this, 'block_beforeInit'),
            'trackInit' => array($this, 'block_trackInit'),
            'beforeTrack' => array($this, 'block_beforeTrack'),
            'track' => array($this, 'block_track'),
            'afterTrack' => array($this, 'block_afterTrack'),
            'afterScript' => array($this, 'block_afterScript'),
            'afterScriptTag' => array($this, 'block_afterScriptTag'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $this->displayBlock('beforeScriptTag', $context, $blocks);
        // line 2
        echo "
<script>
    ";
        // line 4
        $this->displayBlock('beforeScript', $context, $blocks);
        // line 5
        echo "
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

    ";
        // line 11
        $this->displayBlock('beforeInit', $context, $blocks);
        // line 12
        echo "
    ";
        // line 13
        $this->displayBlock('trackInit', $context, $blocks);
        // line 22
        echo "
    ";
        // line 23
        $this->displayBlock('beforeTrack', $context, $blocks);
        // line 24
        echo "
    ";
        // line 25
        $this->displayBlock('track', $context, $blocks);
        // line 36
        echo "
    ";
        // line 37
        $this->displayBlock('afterTrack', $context, $blocks);
        // line 38
        echo "    ";
        $this->displayBlock('afterScript', $context, $blocks);
        // line 39
        echo "</script>

";
        // line 41
        $this->displayBlock('afterScriptTag', $context, $blocks);
    }

    // line 1
    public function block_beforeScriptTag($context, array $blocks = array())
    {
        echo twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "beforeScriptTag", array());
    }

    // line 4
    public function block_beforeScript($context, array $blocks = array())
    {
        echo twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "beforeScript", array());
    }

    // line 11
    public function block_beforeInit($context, array $blocks = array())
    {
        echo twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "beforeInit", array());
    }

    // line 13
    public function block_trackInit($context, array $blocks = array())
    {
        // line 14
        echo "    ";
        if (($context["universalConfiguration"] ?? null)) {
            // line 15
            echo "    ga('create', '";
            echo twig_escape_filter($this->env, ($context["trackId"] ?? null), "html", null, true);
            echo "', ";
            echo ($context["universalConfiguration"] ?? null);
            echo ");
    ";
        } else {
            // line 17
            echo "    ga('create', '";
            echo twig_escape_filter($this->env, ($context["trackId"] ?? null), "html", null, true);
            echo "');
    ";
        }
        // line 19
        echo "
    ga('set', 'anonymizeIp', true);
    ";
    }

    // line 23
    public function block_beforeTrack($context, array $blocks = array())
    {
        echo twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "beforeTrack", array());
    }

    // line 25
    public function block_track($context, array $blocks = array())
    {
        // line 26
        echo "    if (typeof _gaqPageView != \"undefined\"){
        ga('send', 'pageview', _gaqPageView);
    } else {
        ";
        // line 29
        if (($context["defaultPath"] ?? null)) {
            // line 30
            echo "        ga('send', 'pageview', '";
            echo twig_escape_filter($this->env, ($context["defaultPath"] ?? null), "html", null, true);
            echo "');
        ";
        } else {
            // line 32
            echo "        ga('send', 'pageview');
        ";
        }
        // line 34
        echo "    }
    ";
    }

    // line 37
    public function block_afterTrack($context, array $blocks = array())
    {
        echo twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "afterTrack", array());
    }

    // line 38
    public function block_afterScript($context, array $blocks = array())
    {
        echo twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "afterScript", array());
    }

    // line 41
    public function block_afterScriptTag($context, array $blocks = array())
    {
        echo twig_get_attribute($this->env, $this->source, ($context["blocks"] ?? null), "afterScriptTag", array());
    }

    public function getTemplateName()
    {
        return "@PimcoreCore/Analytics/Tracking/Google/Analytics/universalTrackingCode.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  168 => 41,  162 => 38,  156 => 37,  151 => 34,  147 => 32,  141 => 30,  139 => 29,  134 => 26,  131 => 25,  125 => 23,  119 => 19,  113 => 17,  105 => 15,  102 => 14,  99 => 13,  93 => 11,  87 => 4,  81 => 1,  77 => 41,  73 => 39,  70 => 38,  68 => 37,  65 => 36,  63 => 25,  60 => 24,  58 => 23,  55 => 22,  53 => 13,  50 => 12,  48 => 11,  40 => 5,  38 => 4,  34 => 2,  32 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@PimcoreCore/Analytics/Tracking/Google/Analytics/universalTrackingCode.html.twig", "/opt/bitnami/apps/pimcore/htdocs/pimcore/lib/Pimcore/Bundle/CoreBundle/Resources/views/Analytics/Tracking/Google/Analytics/universalTrackingCode.html.twig");
    }
}

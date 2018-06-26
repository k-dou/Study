<?php

/* ScourgenWebBundle:Default:index.html.twig */
class __TwigTemplate_a35829f02650fab9c9123cb2e3f115bb4bc8b68e6924231fface8104184fa74d extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("ScourgenWebBundle::layout.html.twig", "ScourgenWebBundle:Default:index.html.twig", 1);
        $this->blocks = array(
            'maincontent' => array($this, 'block_maincontent'),
            'footer' => array($this, 'block_footer'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "ScourgenWebBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_maincontent($context, array $blocks = array())
    {
        // line 4
        echo "
    ";
        // line 5
        $this->displayParentBlock("maincontent", $context, $blocks);
        echo "
";
    }

    // line 8
    public function block_footer($context, array $blocks = array())
    {
        // line 9
        echo "    ";
        $this->displayParentBlock("footer", $context, $blocks);
        echo "
";
    }

    public function getTemplateName()
    {
        return "ScourgenWebBundle:Default:index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  44 => 9,  41 => 8,  35 => 5,  32 => 4,  29 => 3,  11 => 1,);
    }
}
/* {% extends 'ScourgenWebBundle::layout.html.twig' %}*/
/* */
/* {% block maincontent %}*/
/* */
/*     {{ parent() }}*/
/* {% endblock %}*/
/* */
/* {% block footer %}*/
/*     {{ parent() }}*/
/* {% endblock %}*/

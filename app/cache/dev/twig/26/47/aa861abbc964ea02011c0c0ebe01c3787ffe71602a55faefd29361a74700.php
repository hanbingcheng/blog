<?php

/* BloggerBlogBundle::layout.html.twig */
class __TwigTemplate_2647aa861abbc964ea02011c0c0ebe01c3787ffe71602a55faefd29361a74700 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'stylesheets' => array($this, 'block_stylesheets'),
            'sidebar' => array($this, 'block_sidebar'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 4
        echo "    ";
        $this->displayParentBlock("stylesheets", $context, $blocks);
        echo "
    <link href=\"";
        // line 5
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("bundles/bloggerblog/css/blog.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
";
    }

    // line 7
    public function block_sidebar($context, array $blocks = array())
    {
        // line 8
        echo "    Sidebar content
";
    }

    public function getTemplateName()
    {
        return "BloggerBlogBundle::layout.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  46 => 8,  43 => 7,  32 => 4,  29 => 3,  87 => 24,  78 => 20,  72 => 19,  64 => 14,  60 => 13,  55 => 11,  47 => 8,  40 => 6,  37 => 5,  31 => 4,  28 => 3,);
    }
}

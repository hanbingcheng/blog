<?php

/* ::base.html.twig */
class __TwigTemplate_52242f64d47e0db13fb8f1af89a3c2e92134471c0d663bdabee7630ddfe53e18 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'navigation' => array($this, 'block_navigation'),
            'blog_title' => array($this, 'block_blog_title'),
            'blog_tagline' => array($this, 'block_blog_tagline'),
            'body' => array($this, 'block_body'),
            'sidebar' => array($this, 'block_sidebar'),
            'footer' => array($this, 'block_footer'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv=\"Content-Type\" content=\"text/html\"; charset=utf-8\" />
        <title>";
        // line 5
        $this->displayBlock('title', $context, $blocks);
        echo " - iStudy</title>
        <!--[if lt IE 9]>
            <script src=\"http://html5shim.googlecode.com/svn/trunk/html5.js\"></script>
        <![endif]-->
        ";
        // line 9
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "        <link rel=\"shortcut icon\" href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("favicon.ico"), "html", null, true);
        echo "\" />
    </head>
    <body>
        <section id=\"wrapper\">
            <header id=\"header\">
                <div class=\"top\">
                    ";
        // line 20
        $this->displayBlock('navigation', $context, $blocks);
        // line 29
        echo "                </div>

                <hgroup>
                    <h2>";
        // line 32
        $this->displayBlock('blog_title', $context, $blocks);
        echo "</h2>
                    <h3>";
        // line 33
        $this->displayBlock('blog_tagline', $context, $blocks);
        echo "</h3>
                </hgroup>
            </header>

            <section class=\"main-col\">
                ";
        // line 38
        $this->displayBlock('body', $context, $blocks);
        // line 39
        echo "            </section>
            <aside class=\"sidebar\">
                ";
        // line 41
        $this->displayBlock('sidebar', $context, $blocks);
        // line 42
        echo "            </aside>

            <div id=\"footer\">
                ";
        // line 45
        $this->displayBlock('footer', $context, $blocks);
        // line 48
        echo "            </div>
        </section>

        ";
        // line 51
        $this->displayBlock('javascripts', $context, $blocks);
        // line 52
        echo "    </body>
</html>";
    }

    // line 5
    public function block_title($context, array $blocks = array())
    {
        echo "blog";
    }

    // line 9
    public function block_stylesheets($context, array $blocks = array())
    {
        // line 10
        echo "            <link href='http://fonts.googleapis.com/css?family=Irish+Grover' rel='stylesheet' type='text/css'>
            <link href='http://fonts.googleapis.com/css?family=La+Belle+Aurore' rel='stylesheet' type='text/css'>
            <link href=\"";
        // line 12
        echo twig_escape_filter($this->env, $this->env->getExtension('assets')->getAssetUrl("css/screen.css"), "html", null, true);
        echo "\" type=\"text/css\" rel=\"stylesheet\" />
        ";
    }

    // line 20
    public function block_navigation($context, array $blocks = array())
    {
        // line 21
        echo "                        <nav>
                            <ul class=\"navigation\">
                                <li><a href=\"";
        // line 23
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">Home</a></li>
\t\t\t\t\t\t\t\t<li><a href=\"";
        // line 24
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_about");
        echo "\">About</a></li>
                                <li><a href=\"";
        // line 25
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_contact");
        echo "\">Contact</a></li>
                            </ul>
                        </nav>
                    ";
    }

    // line 32
    public function block_blog_title($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">blog</a>";
    }

    // line 33
    public function block_blog_tagline($context, array $blocks = array())
    {
        echo "<a href=\"";
        echo $this->env->getExtension('routing')->getPath("BloggerBlogBundle_homepage");
        echo "\">creating a blog</a>";
    }

    // line 38
    public function block_body($context, array $blocks = array())
    {
    }

    // line 41
    public function block_sidebar($context, array $blocks = array())
    {
    }

    // line 45
    public function block_footer($context, array $blocks = array())
    {
        // line 46
        echo "                    blog tutorial - created by <a href=\"https://github.com/hanbingcheng\">hanbingcheng</a>
                ";
    }

    // line 51
    public function block_javascripts($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "::base.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  175 => 51,  170 => 46,  167 => 45,  162 => 41,  157 => 38,  149 => 33,  141 => 32,  133 => 25,  129 => 24,  125 => 23,  121 => 21,  118 => 20,  112 => 12,  108 => 10,  105 => 9,  99 => 5,  94 => 52,  92 => 51,  85 => 45,  80 => 42,  74 => 39,  53 => 20,  41 => 9,  34 => 5,  46 => 8,  43 => 14,  32 => 4,  29 => 3,  87 => 48,  78 => 41,  72 => 38,  64 => 33,  60 => 32,  55 => 29,  47 => 8,  40 => 6,  37 => 5,  31 => 4,  28 => 1,);
    }
}

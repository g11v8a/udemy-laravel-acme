<?php

/* C:\xampp\htdocs\udemy_laravel_build_10_projects\acme/themes/responsiv-clean/partials/site/scripts.htm */
class __TwigTemplate_481b46f0178f303deb9350d0a848189c6767f7cdb9cba0c1d68b8e8f9de53d20 extends Twig_Template
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
        // line 1
        echo "<script src=\"";
        echo $this->env->getExtension('Cms\Twig\Extension')->themeFilter(array(0 => "@jquery", 1 => "@framework", 2 => "@framework.extras", 3 => "assets/vendor/bootstrap.js", 4 => "assets/javascript/app.js"));
        // line 7
        echo "\"></script>
";
        // line 8
        echo $this->env->getExtension('Cms\Twig\Extension')->assetsFunction('js');
        echo $this->env->getExtension('Cms\Twig\Extension')->displayBlock('scripts');
    }

    public function getTemplateName()
    {
        return "C:\\xampp\\htdocs\\udemy_laravel_build_10_projects\\acme/themes/responsiv-clean/partials/site/scripts.htm";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 8,  22 => 7,  19 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<script src=\"{{ [
    '@jquery',
    '@framework',
    '@framework.extras',
    'assets/vendor/bootstrap.js',
    'assets/javascript/app.js'
]|theme }}\"></script>
{% scripts %}", "C:\\xampp\\htdocs\\udemy_laravel_build_10_projects\\acme/themes/responsiv-clean/partials/site/scripts.htm", "");
    }
}

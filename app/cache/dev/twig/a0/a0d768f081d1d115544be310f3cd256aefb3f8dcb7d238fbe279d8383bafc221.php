<?php

/* FOSUserBundle:Security:login.html.twig */
class __TwigTemplate_9124802755f2d540d0e64fd5df8d739ca1f8f08e87d8a5f84bcc11243296a5e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 12
        $this->parent = $this->loadTemplate("SonataUserBundle:Security:base_login.html.twig", "FOSUserBundle:Security:login.html.twig", 12);
        $this->blocks = array(
        );
    }

    protected function doGetParent(array $context)
    {
        return "SonataUserBundle:Security:base_login.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_ecad8244ccc62ef318f4fdefe0a8da88cf29720fff1d72f82daf2af10dc37261 = $this->env->getExtension("native_profiler");
        $__internal_ecad8244ccc62ef318f4fdefe0a8da88cf29720fff1d72f82daf2af10dc37261->enter($__internal_ecad8244ccc62ef318f4fdefe0a8da88cf29720fff1d72f82daf2af10dc37261_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Security:login.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_ecad8244ccc62ef318f4fdefe0a8da88cf29720fff1d72f82daf2af10dc37261->leave($__internal_ecad8244ccc62ef318f4fdefe0a8da88cf29720fff1d72f82daf2af10dc37261_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Security:login.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  11 => 12,);
    }
}
/* {#*/
/* */
/* This file is part of the Sonata package.*/
/* */
/* (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>*/
/* */
/* For the full copyright and license information, please view the LICENSE*/
/* file that was distributed with this source code.*/
/* */
/* #}*/
/* */
/* {% extends "SonataUserBundle:Security:base_login.html.twig" %}*/

<?php

/* IoshBlogBundle:Blog:byebye.html.twig */
class __TwigTemplate_bdde96b6c844bd7e3b440183516fd5c1 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma deuxième page avec le Site du Zéro !</title>
    </head>
    <body>
        <h1>Bye bye World ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
        echo "!</h1>

        <p>
            FUFUFUFUFUFUFU !
        </p>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "IoshBlogBundle:Blog:byebye.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

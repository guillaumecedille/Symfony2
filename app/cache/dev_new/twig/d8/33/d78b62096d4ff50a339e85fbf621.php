<?php

/* IoshBlogBundle:Blog:voir.html.twig */
class __TwigTemplate_d833d78b62096d4ff50a339e85fbf621 extends Twig_Template
{
    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <title>Bienvenue sur ma deuxi�me page avec le Site du Z�ro !</title>
    </head>
    <body>
        <h1>Voici l'article n° ";
        // line 7
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "!</h1>

        <p>
            Ici nous pourrons lire l'article ayant comme id : ";
        // line 10
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "<br />
            Cet article pourrait avoir comme tag \" ";
        // line 11
        echo twig_escape_filter($this->env, $this->getContext($context, "tag"), "html", null, true);
        echo " \"<br />
            Mais pour l'instant, nous ne savons pas encore le faire, cela viendra !
        </p>
    </body>
</html>
";
    }

    public function getTemplateName()
    {
        return "IoshBlogBundle:Blog:voir.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }
}

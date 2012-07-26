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
        <title>Bienvenue sur ma deuxi�me page avec le Site du Zéro !</title>
    </head>
    <body>
        <h1>Lecture d'un article</h1>

       <p>
            ";
        // line 11
        echo "            
            ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getContext($context, "app"), "session"), "getFlashes", array(), "method"));
        foreach ($context['_seq'] as $context["key"] => $context["flash"]) {
            // line 13
            echo "                ";
            echo twig_escape_filter($this->env, $this->getContext($context, "flash"), "html", null, true);
            echo "
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['flash'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 15
        echo "        </p>

        <p>
            Ici nous pourrons lire l'article ayant comme id : ";
        // line 18
        echo twig_escape_filter($this->env, $this->getContext($context, "id"), "html", null, true);
        echo "<br />
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

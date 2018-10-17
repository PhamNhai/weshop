<?php

/* Block/plg_shiro8_welcome_block.twig */
class __TwigTemplate_9aefe1e3b483b17620d78882ae536fe49a9422466ab75ac9d9dc5982566e0b68 extends Twig_Template
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
        echo "<!-- ▼ようこそプラグイン -->
<div id=\"s8_wellcome\" class=\"col-sm-5 pull-right\" style=\"text-align:right;margin-top:-17px;\">
";
        // line 3
        if (($this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "name01", array()) != "")) {
            // line 4
            echo "    <p class=\"text-info\" style=\" display:block;margin:0;\"><small>ようこそ ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "name01", array()), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "user", array()), "name02", array()), "html", null, true);
            echo " 様</small></p>
    ";
        } else {
            // line 6
            echo "        <p class=\"text-success\" style=\"display:block;margin:0 0 3px;\"><small>ようこそ ゲスト 様</small></p>
    ";
        }
        // line 8
        echo "</div>
<!-- ▲ようこそプラグイン -->";
    }

    public function getTemplateName()
    {
        return "Block/plg_shiro8_welcome_block.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  37 => 8,  33 => 6,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "Block/plg_shiro8_welcome_block.twig", "C:\\xampp\\htdocs\\eccube\\app\\template\\default\\Block\\plg_shiro8_welcome_block.twig");
    }
}

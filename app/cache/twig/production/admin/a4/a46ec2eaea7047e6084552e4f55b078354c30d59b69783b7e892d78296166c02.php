<?php

/* __string_template__9e3044b78c7b62bd7662dbfa48ad72869d9ac7f3a4eb0ad74ac05b78d3d7cf5b */
class __TwigTemplate_5a7a4825eeaa7374231e8c6971a2c37699f84d071ceeb66675f42183c799c9e1 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__9e3044b78c7b62bd7662dbfa48ad72869d9ac7f3a4eb0ad74ac05b78d3d7cf5b", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
            'javascript' => array($this, 'block_javascript'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "default_frame.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 24
        $context["menus"] = array(0 => "store", 1 => "plugin", 2 => "plugin_owners_install");
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "オーナーズストア";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "購入済プラグイン";
    }

    // line 29
    public function block_javascript($context, array $blocks = array())
    {
        // line 30
        echo "<script src=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["app"] ?? null), "config", array()), "admin_urlpath", array()), "html", null, true);
        echo "/assets/js/vendor/masonry.pkgd.min.js\"></script>
<script>
\$(function() {
    \$('.grid').masonry({
        itemSelector: '.grid-item',
        columnWidth: '.grid-item'
    });
});
</script>
";
    }

    // line 41
    public function block_main($context, array $blocks = array())
    {
        // line 42
        echo "<div class=\"row\">
    <div class=\"col-md-12\">
        <div class=\"box\">
            <div class=\"box-header\">
                <h3 class=\"box-title\">プラグイン一覧</h3>
            </div><!-- /.box-header -->
            <div class=\"box-body\">
                ";
        // line 49
        if (($context["authResult"] ?? null)) {
            // line 50
            echo "                    <div class=\"row\">
                        <div class=\"col-xs-12\">
                            ";
            // line 52
            if ((($context["success"] ?? null) == 1)) {
                // line 53
                echo "                                <div class=\"plugin-block\">
                                    <div class=\"row\">
                                        ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["promotionItems"] ?? null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 56
                    echo "                                            <div class=\"col-xs-12\">
                                                ";
                    // line 57
                    echo twig_include($this->env, $context, "Store/plugin_owners_panel.twig");
                    echo "
                                            </div>
                                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 60
                echo "                                    </div><!-- .row -->
                                    <div class=\"row grid\">
                                        ";
                // line 62
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
                $context['loop'] = array(
                  'parent' => $context['_parent'],
                  'index0' => 0,
                  'index'  => 1,
                  'first'  => true,
                );
                if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
                    $length = count($context['_seq']);
                    $context['loop']['revindex0'] = $length - 1;
                    $context['loop']['revindex'] = $length;
                    $context['loop']['length'] = $length;
                    $context['loop']['last'] = 1 === $length;
                }
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 63
                    echo "                                            <div class=\"col-xs-12 col-md-6 grid-item\">
                                                ";
                    // line 64
                    echo twig_include($this->env, $context, "Store/plugin_owners_panel.twig");
                    echo "
                                            </div>
                                        ";
                    ++$context['loop']['index0'];
                    ++$context['loop']['index'];
                    $context['loop']['first'] = false;
                    if (isset($context['loop']['length'])) {
                        --$context['loop']['revindex0'];
                        --$context['loop']['revindex'];
                        $context['loop']['last'] = 0 === $context['loop']['revindex0'];
                    }
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 67
                echo "                                   </div><!-- .row -->
                                </div><!-- .plugin-block -->
                            ";
            } else {
                // line 70
                echo "                                <p class=\"text-danger\">";
                echo twig_escape_filter($this->env, ($context["message"] ?? null), "html", null, true);
                echo "</p>
                            ";
            }
            // line 72
            echo "                        </div><!-- .col-xs-12 -->
                    </div><!-- .row -->
                ";
        } else {
            // line 75
            echo "                    <p>
                        認証キーを設定してください。
                    </p>
                    <p>
                        <a href=\"";
            // line 79
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_store_authentication_setting");
            echo "\">認証キー設定画面へ</a>
                    </p>
                ";
        }
        // line 82
        echo "            </div><!-- /.box-body -->
        </div><!-- /.box -->
    </div><!-- /.col -->
</div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__9e3044b78c7b62bd7662dbfa48ad72869d9ac7f3a4eb0ad74ac05b78d3d7cf5b";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  194 => 82,  188 => 79,  182 => 75,  177 => 72,  171 => 70,  166 => 67,  149 => 64,  146 => 63,  129 => 62,  125 => 60,  108 => 57,  105 => 56,  88 => 55,  84 => 53,  82 => 52,  78 => 50,  76 => 49,  67 => 42,  64 => 41,  49 => 30,  46 => 29,  40 => 27,  34 => 26,  30 => 22,  28 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__9e3044b78c7b62bd7662dbfa48ad72869d9ac7f3a4eb0ad74ac05b78d3d7cf5b", "");
    }
}

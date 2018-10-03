<?php

/* __string_template__f24c0c779585f6258bc66eb6139cefec028b4e61d4197e593fcfe9135b81f13c */
class __TwigTemplate_91ece9323d28d66d92e059b7eec9581ac1f22690f5ee859f76dc8e548b249a68 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 22
        $this->parent = $this->loadTemplate("default_frame.twig", "__string_template__f24c0c779585f6258bc66eb6139cefec028b4e61d4197e593fcfe9135b81f13c", 22);
        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'sub_title' => array($this, 'block_sub_title'),
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
        $context["menus"] = array(0 => "content", 1 => "news");
        // line 29
        $this->env->getExtension('Symfony\Bridge\Twig\Extension\FormExtension')->renderer->setTheme(($context["form"] ?? null), array(0 => "Form/bootstrap_3_horizontal_layout.html.twig"));
        // line 22
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 26
    public function block_title($context, array $blocks = array())
    {
        echo "コンテンツ管理";
    }

    // line 27
    public function block_sub_title($context, array $blocks = array())
    {
        echo "新着情報管理";
    }

    // line 31
    public function block_main($context, array $blocks = array())
    {
        // line 32
        echo "    <div id=\"news_wrap\" class=\"row\">
        <div id=\"news_list_box\" class=\"col-md-12\">
            <div id=\"news_list_box__body\" class=\"box\">
                <div id=\"news_list_box__header\" class=\"box-header\">
                    <h3 class=\"box-title\">新着情報管理</h3>
                </div><!-- /.box-header -->
                <div id=\"news_list_box__body_inner\" class=\"box-body\">
                    <form name=\"form1\" id=\"form1\" method=\"post\" action=\"\">
                        <div id=\"news_list_box__list_box\" class=\"table_list\">
                            <div id=\"news_list_box__list\" class=\"table-responsive with-border\">
                                <table class=\"table table-striped\">
                                    <thead>
                                       <tr id=\"news_list_box__list_header\">
                                            <th id=\"news_list_box__header_rank\">順位</th>
                                            <th id=\"news_list_box__header_date\">日付</th>
                                            <th id=\"news_list_box__header_title\">タイトル</th>
                                            <th id=\"news_list_box__header_menu_box\">&nbsp;</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    ";
        // line 52
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(($context["NewsList"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["News"]) {
            // line 53
            echo "                                        <tr id=\"news_list_box__item--";
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\">
                                            <td id=\"news_list_box__rank--";
            // line 54
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["loop"], "index", array()), "html", null, true);
            echo "</td>
                                            <td id=\"news_list_box__date--";
            // line 55
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($context["News"], "date", array()), "Y/m/d"), "html", null, true);
            echo "</td>
                                            <td id=\"news_list_box__title--";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "title", array()), "html", null, true);
            echo "</td>
                                            <td id=\"news_list_box__menu_box--";
            // line 57
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\" class=\"icon_edit\">
                                                <div id=\"news_list_box__menu_box_toggle--";
            // line 58
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown\">
                                                    <a class=\"dropdown-toggle\" data-toggle=\"dropdown\" aria-expanded=\"false\"><svg class=\"cb cb-ellipsis-h\"> <use xlink:href=\"#cb-ellipsis-h\" /></svg></a>
                                                    <ul id=\"news_list_box__menu--";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($context["News"], "id", array()), "html", null, true);
            echo "\" class=\"dropdown-menu dropdown-menu-right\">
                                                        <li><a href=\"";
            // line 61
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_news_edit", array("id" => $this->getAttribute($context["News"], "id", array()))), "html", null, true);
            echo "\" >編集</a></li>
                                                        <li><a href=\"";
            // line 62
            echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_news_delete", array("id" => $this->getAttribute($context["News"], "id", array()))), "html", null, true);
            echo "\" ";
            echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
            echo " data-method=\"delete\" data-message=\"この新着情報を削除してもよろしいですか？\">削除</a></li>
                                                        ";
            // line 63
            if (($this->getAttribute($context["loop"], "first", array()) == false)) {
                // line 64
                echo "                                                            <li>
                                                                <a href=\"";
                // line 65
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_news_up", array("id" => $this->getAttribute($context["News"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-confirm=\"false\">上へ</a>
                                                            </li>
                                                        ";
            }
            // line 68
            echo "                                                        ";
            if (($this->getAttribute($context["loop"], "last", array()) == false)) {
                // line 69
                echo "                                                            <li>
                                                                <a href=\"";
                // line 70
                echo twig_escape_filter($this->env, $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_news_down", array("id" => $this->getAttribute($context["News"], "id", array()))), "html", null, true);
                echo "\" ";
                echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getCsrfTokenForAnchor();
                echo " data-method=\"put\" data-confirm=\"false\">下へ</a>
                                                            </li>
                                                        ";
            }
            // line 73
            echo "
                                                    </ul>
                                                </div>
                                            </td>
                                        </tr>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['News'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 79
        echo "                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- /.box -->
            <div id=\"news_list_box__footer\" class=\"row\">
                <div id=\"news_list_box__insert_button\" class=\"col-xs-10 col-xs-offset-1 col-sm-6 col-sm-offset-3 text-center btn_area\">
                    <a href=\"";
        // line 88
        echo $this->env->getExtension('Eccube\Twig\Extension\EccubeExtension')->getUrl("admin_content_news_new");
        echo "\" class=\"btn btn-primary btn-block btn-lg\">新規登録</a>
                </div>
            </div>

        </div>
    </div>

";
    }

    public function getTemplateName()
    {
        return "__string_template__f24c0c779585f6258bc66eb6139cefec028b4e61d4197e593fcfe9135b81f13c";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 88,  181 => 79,  162 => 73,  154 => 70,  151 => 69,  148 => 68,  140 => 65,  137 => 64,  135 => 63,  129 => 62,  125 => 61,  121 => 60,  116 => 58,  112 => 57,  106 => 56,  100 => 55,  94 => 54,  89 => 53,  72 => 52,  50 => 32,  47 => 31,  41 => 27,  35 => 26,  31 => 22,  29 => 29,  27 => 24,  11 => 22,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "__string_template__f24c0c779585f6258bc66eb6139cefec028b4e61d4197e593fcfe9135b81f13c", "");
    }
}

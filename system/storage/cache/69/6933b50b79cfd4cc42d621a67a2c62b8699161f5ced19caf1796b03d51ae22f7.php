<?php

/* default/template/common/language.twig */
class __TwigTemplate_845e70d3322232c8278e01c668f6dc8c507996922c09fe5a907eb700cbf34020 extends Twig_Template
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
        if ((twig_length_filter($this->env, (isset($context["languages"]) ? $context["languages"] : null)) > 1)) {
            // line 2
            echo "  <div class=\"pull-left\">
    <form id=\"form-language\">
      <div class=\"btn-group\">
        ";
            // line 5
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 6
                echo "          ";
                if (($this->getAttribute($context["language"], "code", array()) == (isset($context["code"]) ? $context["code"] : null))) {
                    // line 7
                    echo "            <button type=\"button\" data-toggle=\"dropdown\" class=\"btn btn-link dropdown-toggle\"><img src=\"catalog/language/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo "/";
                    echo $this->getAttribute($context["language"], "code", array());
                    echo ".png\" alt=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\" title=\"";
                    echo $this->getAttribute($context["language"], "name", array());
                    echo "\"> <span class=\"hidden-xs hidden-sm hidden-md\">";
                    echo (isset($context["text_language"]) ? $context["text_language"] : null);
                    echo "</span>&nbsp;<i class=\"fa fa-caret-down\"></i></button>
          ";
                }
                // line 9
                echo "        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 10
            echo "        <ul class=\"dropdown-menu\">
          ";
            // line 11
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["languages"]) ? $context["languages"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["language"]) {
                // line 12
                echo "            <li>
              <a href=\"";
                // line 13
                echo $this->getAttribute($context["language"], "href", array());
                echo "\" class=\"btn btn-link btn-block language-select\" name=\"";
                echo $this->getAttribute($context["language"], "code", array());
                echo "\"><img src=\"catalog/language/";
                echo $this->getAttribute($context["language"], "code", array());
                echo "/";
                echo $this->getAttribute($context["language"], "code", array());
                echo ".png\" alt=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["language"], "name", array());
                echo "\"> ";
                echo $this->getAttribute($context["language"], "name", array());
                echo "</a>
            </li>
          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['language'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 16
            echo "        </ul>
      </div>
    </form>
  </div>
";
        }
    }

    public function getTemplateName()
    {
        return "default/template/common/language.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  84 => 16,  63 => 13,  60 => 12,  56 => 11,  53 => 10,  47 => 9,  33 => 7,  30 => 6,  26 => 5,  21 => 2,  19 => 1,);
    }
}
/* {% if languages|length > 1 %}*/
/*   <div class="pull-left">*/
/*     <form id="form-language">*/
/*       <div class="btn-group">*/
/*         {% for language in languages %}*/
/*           {% if language.code == code %}*/
/*             <button type="button" data-toggle="dropdown" class="btn btn-link dropdown-toggle"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}"> <span class="hidden-xs hidden-sm hidden-md">{{ text_language }}</span>&nbsp;<i class="fa fa-caret-down"></i></button>*/
/*           {% endif %}*/
/*         {% endfor %}*/
/*         <ul class="dropdown-menu">*/
/*           {% for language in languages %}*/
/*             <li>*/
/*               <a href="{{ language.href }}" class="btn btn-link btn-block language-select" name="{{ language.code }}"><img src="catalog/language/{{ language.code }}/{{ language.code }}.png" alt="{{ language.name }}" title="{{ language.name }}"> {{ language.name }}</a>*/
/*             </li>*/
/*           {% endfor %}*/
/*         </ul>*/
/*       </div>*/
/*     </form>*/
/*   </div>*/
/* {% endif %}*/
/* */

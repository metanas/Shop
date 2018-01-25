<?php

/* default/template/product/product.twig */
class __TwigTemplate_4938faf37ae4ead1c813e71c92d8762fba51030f3152963f4ae516f6e1b97014 extends Twig_Template
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
        echo (isset($context["header"]) ? $context["header"] : null);
        echo "
<div id=\"product-product\" class=\"container\">
  <ul class=\"breadcrumb\">
    ";
        // line 4
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["breadcrumbs"]) ? $context["breadcrumbs"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["breadcrumb"]) {
            // line 5
            echo "      <li><a href=\"";
            echo $this->getAttribute($context["breadcrumb"], "href", array());
            echo "\">";
            echo $this->getAttribute($context["breadcrumb"], "text", array());
            echo "</a></li>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['breadcrumb'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 7
        echo "  </ul>
  <div class=\"row\">";
        // line 8
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 9
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 10
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 11
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 12
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 13
            echo "    ";
        } else {
            // line 14
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 15
            echo "    ";
        }
        // line 16
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <div class=\"row\"> ";
        // line 17
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 18
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 19
            echo "        ";
        } else {
            // line 20
            echo "          ";
            $context["class"] = "col-sm-8";
            // line 21
            echo "        ";
        }
        // line 22
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\"> ";
        if (((isset($context["thumb"]) ? $context["thumb"] : null) || (isset($context["images"]) ? $context["images"] : null))) {
            // line 23
            echo "            <ul class=\"thumbnails\">
              ";
            // line 24
            if ((isset($context["thumb"]) ? $context["thumb"] : null)) {
                // line 25
                echo "                <li><a class=\"thumbnail\" href=\"";
                echo (isset($context["popup"]) ? $context["popup"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"><img src=\"";
                echo (isset($context["thumb"]) ? $context["thumb"] : null);
                echo "\" title=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\" alt=\"";
                echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                echo "\"/></a></li>
              ";
            }
            // line 27
            echo "              ";
            if ((isset($context["images"]) ? $context["images"] : null)) {
                // line 28
                echo "                ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["images"]) ? $context["images"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["image"]) {
                    // line 29
                    echo "                  <li class=\"image-additional\"><a class=\"thumbnail\" href=\"";
                    echo $this->getAttribute($context["image"], "popup", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\"> <img src=\"";
                    echo $this->getAttribute($context["image"], "thumb", array());
                    echo "\" title=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\" alt=\"";
                    echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
                    echo "\"/></a></li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['image'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 31
                echo "              ";
            }
            // line 32
            echo "            </ul>
          ";
        }
        // line 34
        echo "          <ul class=\"nav nav-tabs\">
            <li class=\"active\"><a href=\"#tab-description\" data-toggle=\"tab\">";
        // line 35
        echo (isset($context["tab_description"]) ? $context["tab_description"] : null);
        echo "</a></li>
            ";
        // line 36
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 37
            echo "              <li><a href=\"#tab-specification\" data-toggle=\"tab\">";
            echo (isset($context["tab_attribute"]) ? $context["tab_attribute"] : null);
            echo "</a></li>
            ";
        }
        // line 39
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 40
            echo "              <li><a href=\"#tab-review\" data-toggle=\"tab\">";
            echo (isset($context["tab_review"]) ? $context["tab_review"] : null);
            echo "</a></li>
            ";
        }
        // line 42
        echo "          </ul>
          <div class=\"tab-content\">
            <div class=\"tab-pane active\" id=\"tab-description\">";
        // line 44
        echo (isset($context["description"]) ? $context["description"] : null);
        echo "</div>
            ";
        // line 45
        if ((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null)) {
            // line 46
            echo "              <div class=\"tab-pane\" id=\"tab-specification\">
                <table class=\"table table-bordered\">
                  ";
            // line 48
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attribute_groups"]) ? $context["attribute_groups"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["attribute_group"]) {
                // line 49
                echo "                    <thead>
                      <tr>
                        <td colspan=\"2\"><strong>";
                // line 51
                echo $this->getAttribute($context["attribute_group"], "name", array());
                echo "</strong></td>
                      </tr>
                    </thead>
                    <tbody>
                      ";
                // line 55
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["attribute_group"], "attribute", array()));
                foreach ($context['_seq'] as $context["_key"] => $context["attribute"]) {
                    // line 56
                    echo "                        <tr>
                          <td>";
                    // line 57
                    echo $this->getAttribute($context["attribute"], "name", array());
                    echo "</td>
                          <td>";
                    // line 58
                    echo $this->getAttribute($context["attribute"], "text", array());
                    echo "</td>
                        </tr>
                      ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 61
                echo "                    </tbody>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['attribute_group'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 63
            echo "                </table>
              </div>
            ";
        }
        // line 66
        echo "            ";
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 67
            echo "              <div class=\"tab-pane\" id=\"tab-review\">
                <form class=\"form-horizontal\" id=\"form-review\">
                  <div id=\"review\"></div>
                  <h2>";
            // line 70
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</h2>
                  ";
            // line 71
            if ((isset($context["review_guest"]) ? $context["review_guest"] : null)) {
                // line 72
                echo "                    <div class=\"form-group required\">
                      <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-name\">";
                // line 74
                echo (isset($context["entry_name"]) ? $context["entry_name"] : null);
                echo "</label> <input type=\"text\" name=\"name\" value=\"";
                echo (isset($context["customer_name"]) ? $context["customer_name"] : null);
                echo "\" id=\"input-name\" class=\"form-control\"/>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <div class=\"col-sm-12\">
                        <label class=\"control-label\" for=\"input-review\">";
                // line 79
                echo (isset($context["entry_review"]) ? $context["entry_review"] : null);
                echo "</label> <textarea name=\"text\" rows=\"5\" id=\"input-review\" class=\"form-control\"></textarea>
                        <div class=\"help-block\">";
                // line 80
                echo (isset($context["text_note"]) ? $context["text_note"] : null);
                echo "</div>
                      </div>
                    </div>
                    <div class=\"form-group required\">
                      <div class=\"col-sm-12\">
                        <label class=\"control-label\">";
                // line 85
                echo (isset($context["entry_rating"]) ? $context["entry_rating"] : null);
                echo "</label>
                        &nbsp;&nbsp;&nbsp; ";
                // line 86
                echo (isset($context["entry_bad"]) ? $context["entry_bad"] : null);
                echo "&nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"1\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"2\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"3\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"4\"/>
                        &nbsp;
                        <input type=\"radio\" name=\"rating\" value=\"5\"/>
                        &nbsp;";
                // line 96
                echo (isset($context["entry_good"]) ? $context["entry_good"] : null);
                echo "</div>
                    </div>
                    ";
                // line 98
                echo (isset($context["captcha"]) ? $context["captcha"] : null);
                echo "
                    <div class=\"buttons clearfix\">
                      <div class=\"pull-right\">
                        <button type=\"button\" id=\"button-review\" data-loading-text=\"";
                // line 101
                echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                echo "\" class=\"btn btn-primary\">";
                echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
                echo "</button>
                      </div>
                    </div>
                  ";
            } else {
                // line 105
                echo "                    ";
                echo (isset($context["text_login"]) ? $context["text_login"] : null);
                echo "
                  ";
            }
            // line 107
            echo "                </form>
              </div>
            ";
        }
        // line 109
        echo "</div>
        </div>
        ";
        // line 111
        if (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 112
            echo "          ";
            $context["class"] = "col-sm-6";
            // line 113
            echo "        ";
        } else {
            // line 114
            echo "          ";
            $context["class"] = "col-sm-4";
            // line 115
            echo "        ";
        }
        // line 116
        echo "        <div class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">
          <div class=\"btn-group\">
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 118
        echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
        echo "\" onclick=\"wishlist.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-heart\"></i></button>
            <button type=\"button\" data-toggle=\"tooltip\" class=\"btn btn-default\" title=\"";
        // line 119
        echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
        echo "\" onclick=\"compare.add('";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');\"><i class=\"fa fa-exchange\"></i></button>
          </div>
          <h1>";
        // line 121
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
          <ul class=\"list-unstyled\">
            ";
        // line 123
        if ((isset($context["manufacturer"]) ? $context["manufacturer"] : null)) {
            // line 124
            echo "              <li>";
            echo (isset($context["text_manufacturer"]) ? $context["text_manufacturer"] : null);
            echo " <a href=\"";
            echo (isset($context["manufacturers"]) ? $context["manufacturers"] : null);
            echo "\">";
            echo (isset($context["manufacturer"]) ? $context["manufacturer"] : null);
            echo "</a></li>
            ";
        }
        // line 126
        echo "            <li>";
        echo (isset($context["text_model"]) ? $context["text_model"] : null);
        echo " ";
        echo (isset($context["model"]) ? $context["model"] : null);
        echo "</li>
            ";
        // line 127
        if ((isset($context["reward"]) ? $context["reward"] : null)) {
            // line 128
            echo "              <li>";
            echo (isset($context["text_reward"]) ? $context["text_reward"] : null);
            echo " ";
            echo (isset($context["reward"]) ? $context["reward"] : null);
            echo "</li>
            ";
        }
        // line 130
        echo "            <li>";
        echo (isset($context["text_stock"]) ? $context["text_stock"] : null);
        echo " ";
        echo (isset($context["stock"]) ? $context["stock"] : null);
        echo "</li>
          </ul>
          ";
        // line 132
        if ((isset($context["price"]) ? $context["price"] : null)) {
            // line 133
            echo "            <ul class=\"list-unstyled\">
              ";
            // line 134
            if ( !(isset($context["special"]) ? $context["special"] : null)) {
                // line 135
                echo "                <li>
                  <h2>";
                // line 136
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</h2>
                </li>
              ";
            } else {
                // line 139
                echo "                <li><span style=\"text-decoration: line-through;\">";
                echo (isset($context["price"]) ? $context["price"] : null);
                echo "</span></li>
                <li>
                  <h2>";
                // line 141
                echo (isset($context["special"]) ? $context["special"] : null);
                echo "</h2>
                </li>
              ";
            }
            // line 144
            echo "              ";
            if ((isset($context["tax"]) ? $context["tax"] : null)) {
                // line 145
                echo "                <li>";
                echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                echo " ";
                echo (isset($context["tax"]) ? $context["tax"] : null);
                echo "</li>
              ";
            }
            // line 147
            echo "              ";
            if ((isset($context["points"]) ? $context["points"] : null)) {
                // line 148
                echo "                <li>";
                echo (isset($context["text_points"]) ? $context["text_points"] : null);
                echo " ";
                echo (isset($context["points"]) ? $context["points"] : null);
                echo "</li>
              ";
            }
            // line 150
            echo "              ";
            if ((isset($context["discounts"]) ? $context["discounts"] : null)) {
                // line 151
                echo "                <li>
                  <hr>
                </li>
                ";
                // line 154
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["discounts"]) ? $context["discounts"] : null));
                foreach ($context['_seq'] as $context["_key"] => $context["discount"]) {
                    // line 155
                    echo "                  <li>";
                    echo $this->getAttribute($context["discount"], "quantity", array());
                    echo (isset($context["text_discount"]) ? $context["text_discount"] : null);
                    echo $this->getAttribute($context["discount"], "price", array());
                    echo "</li>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['discount'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 157
                echo "              ";
            }
            // line 158
            echo "            </ul>
          ";
        }
        // line 160
        echo "          <div id=\"product\"> ";
        if ((isset($context["options"]) ? $context["options"] : null)) {
            // line 161
            echo "              <hr>
              <h3>";
            // line 162
            echo (isset($context["text_option"]) ? $context["text_option"] : null);
            echo "</h3>
              ";
            // line 163
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 164
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "select")) {
                    // line 165
                    echo "                  <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 166
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label> <select name=\"option[";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">
                      <option value=\"\">";
                    // line 167
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
                      ";
                    // line 168
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 169
                        echo "                        <option value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                          ";
                        // line 170
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 171
                            echo "                            (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                          ";
                        }
                        // line 172
                        echo " </option>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 174
                    echo "                    </select>
                  </div>
                ";
                }
                // line 177
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "radio")) {
                    // line 178
                    echo "                  <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"control-label\">";
                    // line 179
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div id=\"input-option";
                    // line 180
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 181
                        echo "                        <div class=\"radio\">
                          <label> <input type=\"radio\" name=\"option[";
                        // line 182
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                            ";
                        // line 183
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/> ";
                        }
                        // line 184
                        echo "                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                            ";
                        // line 185
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 186
                            echo "                              (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                            ";
                        }
                        // line 187
                        echo " </label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 189
                    echo " </div>
                  </div>
                ";
                }
                // line 192
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "checkbox")) {
                    // line 193
                    echo "                  <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"control-label\">";
                    // line 194
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div id=\"input-option";
                    // line 195
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["option"], "product_option_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["option_value"]) {
                        // line 196
                        echo "                        <div class=\"checkbox\">
                          <label> <input type=\"checkbox\" name=\"option[";
                        // line 197
                        echo $this->getAttribute($context["option"], "product_option_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["option_value"], "product_option_value_id", array());
                        echo "\"/>
                            ";
                        // line 198
                        if ($this->getAttribute($context["option_value"], "image", array())) {
                            echo " <img src=\"";
                            echo $this->getAttribute($context["option_value"], "image", array());
                            echo "\" alt=\"";
                            echo $this->getAttribute($context["option_value"], "name", array());
                            echo " ";
                            if ($this->getAttribute($context["option_value"], "price", array())) {
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price_prefix", array());
                                echo " ";
                                echo $this->getAttribute($context["option_value"], "price", array());
                                echo " ";
                            }
                            echo "\" class=\"img-thumbnail\"/> ";
                        }
                        // line 199
                        echo "                            ";
                        echo $this->getAttribute($context["option_value"], "name", array());
                        echo "
                            ";
                        // line 200
                        if ($this->getAttribute($context["option_value"], "price", array())) {
                            // line 201
                            echo "                              (";
                            echo $this->getAttribute($context["option_value"], "price_prefix", array());
                            echo $this->getAttribute($context["option_value"], "price", array());
                            echo ")
                            ";
                        }
                        // line 202
                        echo " </label>
                        </div>
                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 204
                    echo " </div>
                  </div>
                ";
                }
                // line 207
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "text")) {
                    // line 208
                    echo "                  <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 209
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label> <input type=\"text\" name=\"option[";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                  </div>
                ";
                }
                // line 212
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "textarea")) {
                    // line 213
                    echo "                  <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 214
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label> <textarea name=\"option[";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "</textarea>
                  </div>
                ";
                }
                // line 217
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "file")) {
                    // line 218
                    echo "                  <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"control-label\">";
                    // line 219
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <button type=\"button\" id=\"button-upload";
                    // line 220
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default btn-block\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
                    <input type=\"hidden\" name=\"option[";
                    // line 221
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\"/>
                  </div>
                ";
                }
                // line 224
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "date")) {
                    // line 225
                    echo "                  <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 226
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group date\">
                      <input type=\"text\" name=\"option[";
                    // line 228
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <div class=\"input-group-btn\">
                        <button class=\"btn btn-default\" type=\"button\"><i class=\"fa fa-calendar\"></i></button>
                      </div>
                    </div>
                  </div>
                ";
                }
                // line 235
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "datetime")) {
                    // line 236
                    echo "                  <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 237
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group datetime\">
                      <input type=\"text\" name=\"option[";
                    // line 239
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <div class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </div>
                    </div>
                  </div>
                ";
                }
                // line 246
                echo "                ";
                if (($this->getAttribute($context["option"], "type", array()) == "time")) {
                    // line 247
                    echo "                  <div class=\"form-group";
                    if ($this->getAttribute($context["option"], "required", array())) {
                        echo " required ";
                    }
                    echo "\">
                    <label class=\"control-label\" for=\"input-option";
                    // line 248
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["option"], "name", array());
                    echo "</label>
                    <div class=\"input-group time\">
                      <input type=\"text\" name=\"option[";
                    // line 250
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["option"], "value", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-option";
                    echo $this->getAttribute($context["option"], "product_option_id", array());
                    echo "\" class=\"form-control\"/>
                      <div class=\"input-group-btn\">
                        <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
                      </div>
                    </div>
                  </div>
                ";
                }
                // line 257
                echo "              ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            echo "            ";
        }
        // line 259
        echo "            ";
        if ((isset($context["recurrings"]) ? $context["recurrings"] : null)) {
            // line 260
            echo "              <hr>
              <h3>";
            // line 261
            echo (isset($context["text_payment_recurring"]) ? $context["text_payment_recurring"] : null);
            echo "</h3>
              <div class=\"form-group required\">
                <select name=\"recurring_id\" class=\"form-control\">
                  <option value=\"\">";
            // line 264
            echo (isset($context["text_select"]) ? $context["text_select"] : null);
            echo "</option>
                  ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["recurrings"]) ? $context["recurrings"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["recurring"]) {
                // line 266
                echo "                    <option value=\"";
                echo $this->getAttribute($context["recurring"], "recurring_id", array());
                echo "\">";
                echo $this->getAttribute($context["recurring"], "name", array());
                echo "</option>
                  ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['recurring'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            echo "                </select>
                <div class=\"help-block\" id=\"recurring-description\"></div>
              </div>
            ";
        }
        // line 272
        echo "            <div class=\"form-group\">
              <label class=\"control-label\" for=\"input-quantity\">";
        // line 273
        echo (isset($context["entry_qty"]) ? $context["entry_qty"] : null);
        echo "</label> <input type=\"text\" name=\"quantity\" value=\"";
        echo (isset($context["minimum"]) ? $context["minimum"] : null);
        echo "\" size=\"2\" id=\"input-quantity\" class=\"form-control\"/> <input type=\"hidden\" name=\"product_id\" value=\"";
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "\"/>
              <br/>
              <button type=\"button\" id=\"button-cart\" data-loading-text=\"";
        // line 275
        echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
        echo "\" class=\"btn btn-primary btn-lg btn-block\">";
        echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
        echo "</button>
            </div>
            ";
        // line 277
        if (((isset($context["minimum"]) ? $context["minimum"] : null) > 1)) {
            // line 278
            echo "              <div class=\"alert alert-info\"><i class=\"fa fa-info-circle\"></i> ";
            echo (isset($context["text_minimum"]) ? $context["text_minimum"] : null);
            echo "</div>
            ";
        }
        // line 279
        echo "</div>
          ";
        // line 280
        if ((isset($context["review_status"]) ? $context["review_status"] : null)) {
            // line 281
            echo "            <div class=\"rating\">
              <p>";
            // line 282
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 5));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 283
                echo "                  ";
                if (((isset($context["rating"]) ? $context["rating"] : null) < $context["i"])) {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                } else {
                    echo "<span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span>";
                }
                // line 284
                echo "                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["reviews"]) ? $context["reviews"] : null);
            echo "</a> / <a href=\"\" onclick=\"\$('a[href=\\'#tab-review\\']').trigger('click'); return false;\">";
            echo (isset($context["text_write"]) ? $context["text_write"] : null);
            echo "</a></p>
            </div>
          ";
        }
        // line 287
        echo "          <hr>
          <!-- AddThis Button BEGIN -->
          <div class=\"addthis_toolbox addthis_default_style\" data-url=\"";
        // line 289
        echo (isset($context["share"]) ? $context["share"] : null);
        echo "\"><a class=\"addthis_button_facebook_like\" fb:like:layout=\"button_count\"></a> <a class=\"addthis_button_tweet\"></a> <a class=\"addthis_button_pinterest_pinit\"></a> <a class=\"addthis_counter addthis_pill_style\"></a></div>
          <script type=\"text/javascript\" src=\"//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e\"></script>
          <!-- AddThis Button END -->
        </div>
      </div>
      ";
        // line 294
        if ((isset($context["products"]) ? $context["products"] : null)) {
            // line 295
            echo "        <h3>";
            echo (isset($context["text_related"]) ? $context["text_related"] : null);
            echo "</h3>
        <div class=\"row\"> ";
            // line 296
            $context["i"] = 0;
            // line 297
            echo "          ";
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["products"]) ? $context["products"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["product"]) {
                // line 298
                echo "            ";
                if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
                    // line 299
                    echo "              ";
                    $context["class"] = "col-xs-8 col-sm-6";
                    // line 300
                    echo "            ";
                } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
                    // line 301
                    echo "              ";
                    $context["class"] = "col-xs-6 col-md-4";
                    // line 302
                    echo "            ";
                } else {
                    // line 303
                    echo "              ";
                    $context["class"] = "col-xs-6 col-sm-3";
                    // line 304
                    echo "            ";
                }
                // line 305
                echo "            <div class=\"";
                echo (isset($context["class"]) ? $context["class"] : null);
                echo "\">
              <div class=\"product-thumb transition\">
                <div class=\"image\"><a href=\"";
                // line 307
                echo $this->getAttribute($context["product"], "href", array());
                echo "\"><img src=\"";
                echo $this->getAttribute($context["product"], "thumb", array());
                echo "\" alt=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" title=\"";
                echo $this->getAttribute($context["product"], "name", array());
                echo "\" class=\"img-responsive\"/></a></div>
                <div class=\"caption\">
                  <h4><a href=\"";
                // line 309
                echo $this->getAttribute($context["product"], "href", array());
                echo "\">";
                echo $this->getAttribute($context["product"], "name", array());
                echo "</a></h4>
                  <p>";
                // line 310
                echo $this->getAttribute($context["product"], "description", array());
                echo "</p>
                  ";
                // line 311
                if ($this->getAttribute($context["product"], "rating", array())) {
                    // line 312
                    echo "                    <div class=\"rating\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable(range(1, 5));
                    foreach ($context['_seq'] as $context["_key"] => $context["j"]) {
                        // line 313
                        echo "                        ";
                        if (($this->getAttribute($context["product"], "rating", array()) < $context["j"])) {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        } else {
                            echo " <span class=\"fa fa-stack\"><i class=\"fa fa-star fa-stack-1x\"></i><i class=\"fa fa-star-o fa-stack-1x\"></i></span> ";
                        }
                        // line 314
                        echo "                      ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['j'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo " </div>
                  ";
                }
                // line 316
                echo "                  ";
                if ($this->getAttribute($context["product"], "price", array())) {
                    // line 317
                    echo "                    <p class=\"price\"> ";
                    if ( !$this->getAttribute($context["product"], "special", array())) {
                        // line 318
                        echo "                        ";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "
                      ";
                    } else {
                        // line 319
                        echo " <span class=\"price-new\">";
                        echo $this->getAttribute($context["product"], "special", array());
                        echo "</span> <span class=\"price-old\">";
                        echo $this->getAttribute($context["product"], "price", array());
                        echo "</span> ";
                    }
                    // line 320
                    echo "                      ";
                    if ($this->getAttribute($context["product"], "tax", array())) {
                        echo " <span class=\"price-tax\">";
                        echo (isset($context["text_tax"]) ? $context["text_tax"] : null);
                        echo " ";
                        echo $this->getAttribute($context["product"], "tax", array());
                        echo "</span> ";
                    }
                    echo " </p>
                  ";
                }
                // line 321
                echo "</div>
                <div class=\"button-group\">
                  <button type=\"button\" onclick=\"cart.add('";
                // line 323
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "', '";
                echo $this->getAttribute($context["product"], "minimum", array());
                echo "');\"><span class=\"hidden-xs hidden-sm hidden-md\">";
                echo (isset($context["button_cart"]) ? $context["button_cart"] : null);
                echo "</span> <i class=\"fa fa-shopping-cart\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 324
                echo (isset($context["button_wishlist"]) ? $context["button_wishlist"] : null);
                echo "\" onclick=\"wishlist.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-heart\"></i></button>
                  <button type=\"button\" data-toggle=\"tooltip\" title=\"";
                // line 325
                echo (isset($context["button_compare"]) ? $context["button_compare"] : null);
                echo "\" onclick=\"compare.add('";
                echo $this->getAttribute($context["product"], "product_id", array());
                echo "');\"><i class=\"fa fa-exchange\"></i></button>
                </div>
              </div>
            </div>
            ";
                // line 329
                if ((((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null)) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 2) == 0))) {
                    // line 330
                    echo "              <div class=\"clearfix visible-md visible-sm\"></div>
            ";
                } elseif ((                // line 331
(isset($context["column_left"]) ? $context["column_left"] : null) || ((isset($context["column_right"]) ? $context["column_right"] : null) && ((((isset($context["i"]) ? $context["i"] : null) + 1) % 3) == 0)))) {
                    // line 332
                    echo "              <div class=\"clearfix visible-md\"></div>
            ";
                } elseif ((((                // line 333
(isset($context["i"]) ? $context["i"] : null) + 1) % 4) == 0)) {
                    // line 334
                    echo "              <div class=\"clearfix visible-md\"></div>
            ";
                }
                // line 336
                echo "            ";
                $context["i"] = ((isset($context["i"]) ? $context["i"] : null) + 1);
                // line 337
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['product'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo " </div>
      ";
        }
        // line 339
        echo "      ";
        if ((isset($context["tags"]) ? $context["tags"] : null)) {
            // line 340
            echo "        <p>";
            echo (isset($context["text_tags"]) ? $context["text_tags"] : null);
            echo "
          ";
            // line 341
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(0, twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null))));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 342
                echo "            ";
                if (($context["i"] < (twig_length_filter($this->env, (isset($context["tags"]) ? $context["tags"] : null)) - 1))) {
                    echo "<a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>,
            ";
                } else {
                    // line 343
                    echo "<a href=\"";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "href", array());
                    echo "\">";
                    echo $this->getAttribute($this->getAttribute((isset($context["tags"]) ? $context["tags"] : null), $context["i"], array(), "array"), "tag", array());
                    echo "</a>";
                }
                // line 344
                echo "          ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</p>
      ";
        }
        // line 346
        echo "      ";
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 347
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('select[name=\\'recurring_id\\'], input[name=\"quantity\"]').change(function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/getRecurringDescription',
\t\ttype: 'post',
\t\tdata: \$('input[name=\\'product_id\\'], input[name=\\'quantity\\'], select[name=\\'recurring_id\\']'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#recurring-description').html('');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['success']) {
\t\t\t\t\$('#recurring-description').html(json['success']);
\t\t\t}
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#button-cart').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/cart/add',
\t\ttype: 'post',
\t\tdata: \$('#product input[type=\\'text\\'], #product input[type=\\'hidden\\'], #product input[type=\\'radio\\']:checked, #product input[type=\\'checkbox\\']:checked, #product select, #product textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-cart').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-cart').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['error']) {
\t\t\t\tif (json['error']['option']) {
\t\t\t\t\tfor (i in json['error']['option']) {
\t\t\t\t\t\tvar element = \$('#input-option' + i.replace('_', '-'));

\t\t\t\t\t\tif (element.parent().hasClass('input-group')) {
\t\t\t\t\t\t\telement.parent().after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t} else {
\t\t\t\t\t\t\telement.after('<div class=\"text-danger\">' + json['error']['option'][i] + '</div>');
\t\t\t\t\t\t}
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\tif (json['error']['recurring']) {
\t\t\t\t\t\$('select[name=\\'recurring_id\\']').after('<div class=\"text-danger\">' + json['error']['recurring'] + '</div>');
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t}

\t\t\tif (json['success']) {

\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=checkout/cart/info',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t/*
                        \$('#alert-box').append('<div class=\"alert alert-success alert-dismissible\">' + json['success'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
                        \$('#alert-box').addClass('open');
                        */

\t\t\t\t\t\t\$('#modal-cart').remove();

\t\t\t\t\t\t\$('body').append('<div id=\"modal-cart\" class=\"modal\">' + html + '</div>');

\t\t\t\t\t\t\$('#modal-cart .modal-body').prepend('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + ' <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t\t\t\$('#modal-cart').modal('show');
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});

\t\t\t\t//\$('#cart > button').html('<span id=\"cart-total\"><i class=\"fa fa-shopping-cart\"></i> ' + json['total'] + '</span>');

\t\t\t\t//\$('#cart > ul').load('index.php?route=common/cart/info&language=";
        // line 433
        echo (isset($context["language"]) ? $context["language"] : null);
        echo " }} ul li');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
<script type=\"text/javascript\"><!--
\$('.date').datetimepicker({
\tlocale: '";
        // line 444
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.datetime').datetimepicker({
\tlocale: '";
        // line 449
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});

\$('.time').datetimepicker({
\tlocale: '";
        // line 455
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('button[id^=\\'button-upload\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
\t\tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload',
\t\t\t\ttype: 'post',
\t\t\t\tdataType: 'json',
\t\t\t\tdata: new FormData(\$('#form-upload')[0]),
\t\t\t\tcache: false,
\t\t\t\tcontentType: false,
\t\t\t\tprocessData: false,
\t\t\t\tbeforeSend: function() {
\t\t\t\t\t\$(element).button('loading');
\t\t\t\t},
\t\t\t\tcomplete: function() {
\t\t\t\t\t\$(element).button('reset');
\t\t\t\t},
\t\t\t\tsuccess: function(json) {
\t\t\t\t\t\$('.text-danger').remove();

\t\t\t\t\tif (json['error']) {
\t\t\t\t\t\t\$(element).parent().find('input').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input').val(json['code']);
\t\t\t\t\t}
\t\t\t\t},
\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t}
\t\t\t});
\t\t}
\t}, 500);
});
//--></script>
<script type=\"text/javascript\"><!--
\$('#review').delegate('.pagination a', 'click', function(e) {
\te.preventDefault();

\t\$('#review').fadeOut('slow');

\t\$('#review').load(this.href);

\t\$('#review').fadeIn('slow');
});

\$('#review').load('index.php?route=product/product/review&product_id=";
        // line 522
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "');

\$('#button-review').on('click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=product/product/write&product_id=";
        // line 526
        echo (isset($context["product_id"]) ? $context["product_id"] : null);
        echo "',
\t\ttype: 'post',
\t\tdataType: 'json',
\t\tdata: \$(\"#form-review\").serialize(),
\t\tbeforeSend: function() {
\t\t\t\$('#button-review').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-review').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible').remove();

\t\t\tif (json['error']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error'] + '</div>');
\t\t\t}

\t\t\tif (json['success']) {
\t\t\t\t\$('#review').after('<div class=\"alert alert-success alert-dismissible\"><i class=\"fa fa-check-circle\"></i> ' + json['success'] + '</div>');

\t\t\t\t\$('input[name=\\'name\\']').val('');
\t\t\t\t\$('textarea[name=\\'text\\']').val('');
\t\t\t\t\$('input[name=\\'rating\\']:checked').prop('checked', false);
\t\t\t}
\t\t}
\t});
});

\$(document).ready(function() {
\t\$('.thumbnails').magnificPopup({
\t\ttype: 'image',
\t\tdelegate: 'a',
\t\tgallery: {
\t\t\tenabled: true
\t\t}
\t});
});
//--></script>
";
        // line 564
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/product/product.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1435 => 564,  1394 => 526,  1387 => 522,  1317 => 455,  1308 => 449,  1300 => 444,  1286 => 433,  1197 => 347,  1192 => 346,  1183 => 344,  1176 => 343,  1166 => 342,  1162 => 341,  1157 => 340,  1154 => 339,  1145 => 337,  1142 => 336,  1138 => 334,  1136 => 333,  1133 => 332,  1131 => 331,  1128 => 330,  1126 => 329,  1117 => 325,  1111 => 324,  1103 => 323,  1099 => 321,  1087 => 320,  1080 => 319,  1074 => 318,  1071 => 317,  1068 => 316,  1059 => 314,  1052 => 313,  1047 => 312,  1045 => 311,  1041 => 310,  1035 => 309,  1024 => 307,  1018 => 305,  1015 => 304,  1012 => 303,  1009 => 302,  1006 => 301,  1003 => 300,  1000 => 299,  997 => 298,  992 => 297,  990 => 296,  985 => 295,  983 => 294,  975 => 289,  971 => 287,  957 => 284,  950 => 283,  946 => 282,  943 => 281,  941 => 280,  938 => 279,  932 => 278,  930 => 277,  923 => 275,  914 => 273,  911 => 272,  905 => 268,  894 => 266,  890 => 265,  886 => 264,  880 => 261,  877 => 260,  874 => 259,  871 => 258,  865 => 257,  851 => 250,  844 => 248,  837 => 247,  834 => 246,  820 => 239,  813 => 237,  806 => 236,  803 => 235,  789 => 228,  782 => 226,  775 => 225,  772 => 224,  764 => 221,  756 => 220,  752 => 219,  745 => 218,  742 => 217,  726 => 214,  719 => 213,  716 => 212,  700 => 209,  693 => 208,  690 => 207,  685 => 204,  677 => 202,  670 => 201,  668 => 200,  663 => 199,  647 => 198,  641 => 197,  638 => 196,  632 => 195,  628 => 194,  621 => 193,  618 => 192,  613 => 189,  605 => 187,  598 => 186,  596 => 185,  591 => 184,  575 => 183,  569 => 182,  566 => 181,  560 => 180,  556 => 179,  549 => 178,  546 => 177,  541 => 174,  534 => 172,  527 => 171,  525 => 170,  518 => 169,  514 => 168,  510 => 167,  500 => 166,  493 => 165,  490 => 164,  486 => 163,  482 => 162,  479 => 161,  476 => 160,  472 => 158,  469 => 157,  458 => 155,  454 => 154,  449 => 151,  446 => 150,  438 => 148,  435 => 147,  427 => 145,  424 => 144,  418 => 141,  412 => 139,  406 => 136,  403 => 135,  401 => 134,  398 => 133,  396 => 132,  388 => 130,  380 => 128,  378 => 127,  371 => 126,  361 => 124,  359 => 123,  354 => 121,  347 => 119,  341 => 118,  335 => 116,  332 => 115,  329 => 114,  326 => 113,  323 => 112,  321 => 111,  317 => 109,  312 => 107,  306 => 105,  297 => 101,  291 => 98,  286 => 96,  273 => 86,  269 => 85,  261 => 80,  257 => 79,  247 => 74,  243 => 72,  241 => 71,  237 => 70,  232 => 67,  229 => 66,  224 => 63,  217 => 61,  208 => 58,  204 => 57,  201 => 56,  197 => 55,  190 => 51,  186 => 49,  182 => 48,  178 => 46,  176 => 45,  172 => 44,  168 => 42,  162 => 40,  159 => 39,  153 => 37,  151 => 36,  147 => 35,  144 => 34,  140 => 32,  137 => 31,  120 => 29,  115 => 28,  112 => 27,  98 => 25,  96 => 24,  93 => 23,  88 => 22,  85 => 21,  82 => 20,  79 => 19,  76 => 18,  74 => 17,  67 => 16,  64 => 15,  61 => 14,  58 => 13,  55 => 12,  52 => 11,  49 => 10,  47 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="product-product" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <div class="row"> {% if column_left or column_right %}*/
/*           {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*           {% set class = 'col-sm-8' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}"> {% if thumb or images %}*/
/*             <ul class="thumbnails">*/
/*               {% if thumb %}*/
/*                 <li><a class="thumbnail" href="{{ popup }}" title="{{ heading_title }}"><img src="{{ thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a></li>*/
/*               {% endif %}*/
/*               {% if images %}*/
/*                 {% for image in images %}*/
/*                   <li class="image-additional"><a class="thumbnail" href="{{ image.popup }}" title="{{ heading_title }}"> <img src="{{ image.thumb }}" title="{{ heading_title }}" alt="{{ heading_title }}"/></a></li>*/
/*                 {% endfor %}*/
/*               {% endif %}*/
/*             </ul>*/
/*           {% endif %}*/
/*           <ul class="nav nav-tabs">*/
/*             <li class="active"><a href="#tab-description" data-toggle="tab">{{ tab_description }}</a></li>*/
/*             {% if attribute_groups %}*/
/*               <li><a href="#tab-specification" data-toggle="tab">{{ tab_attribute }}</a></li>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*               <li><a href="#tab-review" data-toggle="tab">{{ tab_review }}</a></li>*/
/*             {% endif %}*/
/*           </ul>*/
/*           <div class="tab-content">*/
/*             <div class="tab-pane active" id="tab-description">{{ description }}</div>*/
/*             {% if attribute_groups %}*/
/*               <div class="tab-pane" id="tab-specification">*/
/*                 <table class="table table-bordered">*/
/*                   {% for attribute_group in attribute_groups %}*/
/*                     <thead>*/
/*                       <tr>*/
/*                         <td colspan="2"><strong>{{ attribute_group.name }}</strong></td>*/
/*                       </tr>*/
/*                     </thead>*/
/*                     <tbody>*/
/*                       {% for attribute in attribute_group.attribute %}*/
/*                         <tr>*/
/*                           <td>{{ attribute.name }}</td>*/
/*                           <td>{{ attribute.text }}</td>*/
/*                         </tr>*/
/*                       {% endfor %}*/
/*                     </tbody>*/
/*                   {% endfor %}*/
/*                 </table>*/
/*               </div>*/
/*             {% endif %}*/
/*             {% if review_status %}*/
/*               <div class="tab-pane" id="tab-review">*/
/*                 <form class="form-horizontal" id="form-review">*/
/*                   <div id="review"></div>*/
/*                   <h2>{{ text_write }}</h2>*/
/*                   {% if review_guest %}*/
/*                     <div class="form-group required">*/
/*                       <div class="col-sm-12">*/
/*                         <label class="control-label" for="input-name">{{ entry_name }}</label> <input type="text" name="name" value="{{ customer_name }}" id="input-name" class="form-control"/>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <div class="col-sm-12">*/
/*                         <label class="control-label" for="input-review">{{ entry_review }}</label> <textarea name="text" rows="5" id="input-review" class="form-control"></textarea>*/
/*                         <div class="help-block">{{ text_note }}</div>*/
/*                       </div>*/
/*                     </div>*/
/*                     <div class="form-group required">*/
/*                       <div class="col-sm-12">*/
/*                         <label class="control-label">{{ entry_rating }}</label>*/
/*                         &nbsp;&nbsp;&nbsp; {{ entry_bad }}&nbsp;*/
/*                         <input type="radio" name="rating" value="1"/>*/
/*                         &nbsp;*/
/*                         <input type="radio" name="rating" value="2"/>*/
/*                         &nbsp;*/
/*                         <input type="radio" name="rating" value="3"/>*/
/*                         &nbsp;*/
/*                         <input type="radio" name="rating" value="4"/>*/
/*                         &nbsp;*/
/*                         <input type="radio" name="rating" value="5"/>*/
/*                         &nbsp;{{ entry_good }}</div>*/
/*                     </div>*/
/*                     {{ captcha }}*/
/*                     <div class="buttons clearfix">*/
/*                       <div class="pull-right">*/
/*                         <button type="button" id="button-review" data-loading-text="{{ text_loading }}" class="btn btn-primary">{{ button_continue }}</button>*/
/*                       </div>*/
/*                     </div>*/
/*                   {% else %}*/
/*                     {{ text_login }}*/
/*                   {% endif %}*/
/*                 </form>*/
/*               </div>*/
/*             {% endif %}</div>*/
/*         </div>*/
/*         {% if column_left or column_right %}*/
/*           {% set class = 'col-sm-6' %}*/
/*         {% else %}*/
/*           {% set class = 'col-sm-4' %}*/
/*         {% endif %}*/
/*         <div class="{{ class }}">*/
/*           <div class="btn-group">*/
/*             <button type="button" data-toggle="tooltip" class="btn btn-default" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product_id }}');"><i class="fa fa-heart"></i></button>*/
/*             <button type="button" data-toggle="tooltip" class="btn btn-default" title="{{ button_compare }}" onclick="compare.add('{{ product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*           </div>*/
/*           <h1>{{ heading_title }}</h1>*/
/*           <ul class="list-unstyled">*/
/*             {% if manufacturer %}*/
/*               <li>{{ text_manufacturer }} <a href="{{ manufacturers }}">{{ manufacturer }}</a></li>*/
/*             {% endif %}*/
/*             <li>{{ text_model }} {{ model }}</li>*/
/*             {% if reward %}*/
/*               <li>{{ text_reward }} {{ reward }}</li>*/
/*             {% endif %}*/
/*             <li>{{ text_stock }} {{ stock }}</li>*/
/*           </ul>*/
/*           {% if price %}*/
/*             <ul class="list-unstyled">*/
/*               {% if not special %}*/
/*                 <li>*/
/*                   <h2>{{ price }}</h2>*/
/*                 </li>*/
/*               {% else %}*/
/*                 <li><span style="text-decoration: line-through;">{{ price }}</span></li>*/
/*                 <li>*/
/*                   <h2>{{ special }}</h2>*/
/*                 </li>*/
/*               {% endif %}*/
/*               {% if tax %}*/
/*                 <li>{{ text_tax }} {{ tax }}</li>*/
/*               {% endif %}*/
/*               {% if points %}*/
/*                 <li>{{ text_points }} {{ points }}</li>*/
/*               {% endif %}*/
/*               {% if discounts %}*/
/*                 <li>*/
/*                   <hr>*/
/*                 </li>*/
/*                 {% for discount in discounts %}*/
/*                   <li>{{ discount.quantity }}{{ text_discount }}{{ discount.price }}</li>*/
/*                 {% endfor %}*/
/*               {% endif %}*/
/*             </ul>*/
/*           {% endif %}*/
/*           <div id="product"> {% if options %}*/
/*               <hr>*/
/*               <h3>{{ text_option }}</h3>*/
/*               {% for option in options %}*/
/*                 {% if option.type == 'select' %}*/
/*                   <div class="form-group{% if option.required %} required {% endif %}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label> <select name="option[{{ option.product_option_id }}]" id="input-option{{ option.product_option_id }}" class="form-control">*/
/*                       <option value="">{{ text_select }}</option>*/
/*                       {% for option_value in option.product_option_value %}*/
/*                         <option value="{{ option_value.product_option_value_id }}">{{ option_value.name }}*/
/*                           {% if option_value.price %}*/
/*                             ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                           {% endif %} </option>*/
/*                       {% endfor %}*/
/*                     </select>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'radio' %}*/
/*                   <div class="form-group{% if option.required %} required {% endif %}">*/
/*                     <label class="control-label">{{ option.name }}</label>*/
/*                     <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                         <div class="radio">*/
/*                           <label> <input type="radio" name="option[{{ option.product_option_id }}]" value="{{ option_value.product_option_value_id }}"/>*/
/*                             {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                             {{ option_value.name }}*/
/*                             {% if option_value.price %}*/
/*                               ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                             {% endif %} </label>*/
/*                         </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'checkbox' %}*/
/*                   <div class="form-group{% if option.required %} required {% endif %}">*/
/*                     <label class="control-label">{{ option.name }}</label>*/
/*                     <div id="input-option{{ option.product_option_id }}"> {% for option_value in option.product_option_value %}*/
/*                         <div class="checkbox">*/
/*                           <label> <input type="checkbox" name="option[{{ option.product_option_id }}][]" value="{{ option_value.product_option_value_id }}"/>*/
/*                             {% if option_value.image %} <img src="{{ option_value.image }}" alt="{{ option_value.name }} {% if option_value.price %} {{ option_value.price_prefix }} {{ option_value.price }} {% endif %}" class="img-thumbnail"/> {% endif %}*/
/*                             {{ option_value.name }}*/
/*                             {% if option_value.price %}*/
/*                               ({{ option_value.price_prefix }}{{ option_value.price }})*/
/*                             {% endif %} </label>*/
/*                         </div>*/
/*                       {% endfor %} </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'text' %}*/
/*                   <div class="form-group{% if option.required %} required {% endif %}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label> <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'textarea' %}*/
/*                   <div class="form-group{% if option.required %} required {% endif %}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label> <textarea name="option[{{ option.product_option_id }}]" rows="5" placeholder="{{ option.name }}" id="input-option{{ option.product_option_id }}" class="form-control">{{ option.value }}</textarea>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'file' %}*/
/*                   <div class="form-group{% if option.required %} required {% endif %}">*/
/*                     <label class="control-label">{{ option.name }}</label>*/
/*                     <button type="button" id="button-upload{{ option.product_option_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default btn-block"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*                     <input type="hidden" name="option[{{ option.product_option_id }}]" value="" id="input-option{{ option.product_option_id }}"/>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'date' %}*/
/*                   <div class="form-group{% if option.required %} required {% endif %}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <div class="input-group date">*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                       <div class="input-group-btn">*/
/*                         <button class="btn btn-default" type="button"><i class="fa fa-calendar"></i></button>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'datetime' %}*/
/*                   <div class="form-group{% if option.required %} required {% endif %}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <div class="input-group datetime">*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="YYYY-MM-DD HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                       <div class="input-group-btn">*/
/*                         <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*                 {% if option.type == 'time' %}*/
/*                   <div class="form-group{% if option.required %} required {% endif %}">*/
/*                     <label class="control-label" for="input-option{{ option.product_option_id }}">{{ option.name }}</label>*/
/*                     <div class="input-group time">*/
/*                       <input type="text" name="option[{{ option.product_option_id }}]" value="{{ option.value }}" data-date-format="HH:mm" id="input-option{{ option.product_option_id }}" class="form-control"/>*/
/*                       <div class="input-group-btn">*/
/*                         <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*                       </div>*/
/*                     </div>*/
/*                   </div>*/
/*                 {% endif %}*/
/*               {% endfor %}*/
/*             {% endif %}*/
/*             {% if recurrings %}*/
/*               <hr>*/
/*               <h3>{{ text_payment_recurring }}</h3>*/
/*               <div class="form-group required">*/
/*                 <select name="recurring_id" class="form-control">*/
/*                   <option value="">{{ text_select }}</option>*/
/*                   {% for recurring in recurrings %}*/
/*                     <option value="{{ recurring.recurring_id }}">{{ recurring.name }}</option>*/
/*                   {% endfor %}*/
/*                 </select>*/
/*                 <div class="help-block" id="recurring-description"></div>*/
/*               </div>*/
/*             {% endif %}*/
/*             <div class="form-group">*/
/*               <label class="control-label" for="input-quantity">{{ entry_qty }}</label> <input type="text" name="quantity" value="{{ minimum }}" size="2" id="input-quantity" class="form-control"/> <input type="hidden" name="product_id" value="{{ product_id }}"/>*/
/*               <br/>*/
/*               <button type="button" id="button-cart" data-loading-text="{{ text_loading }}" class="btn btn-primary btn-lg btn-block">{{ button_cart }}</button>*/
/*             </div>*/
/*             {% if minimum > 1 %}*/
/*               <div class="alert alert-info"><i class="fa fa-info-circle"></i> {{ text_minimum }}</div>*/
/*             {% endif %}</div>*/
/*           {% if review_status %}*/
/*             <div class="rating">*/
/*               <p>{% for i in 1..5 %}*/
/*                   {% if rating < i %}<span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span>{% else %}<span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span>{% endif %}*/
/*                 {% endfor %} <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ reviews }}</a> / <a href="" onclick="$('a[href=\'#tab-review\']').trigger('click'); return false;">{{ text_write }}</a></p>*/
/*             </div>*/
/*           {% endif %}*/
/*           <hr>*/
/*           <!-- AddThis Button BEGIN -->*/
/*           <div class="addthis_toolbox addthis_default_style" data-url="{{ share }}"><a class="addthis_button_facebook_like" fb:like:layout="button_count"></a> <a class="addthis_button_tweet"></a> <a class="addthis_button_pinterest_pinit"></a> <a class="addthis_counter addthis_pill_style"></a></div>*/
/*           <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-515eeaf54693130e"></script>*/
/*           <!-- AddThis Button END -->*/
/*         </div>*/
/*       </div>*/
/*       {% if products %}*/
/*         <h3>{{ text_related }}</h3>*/
/*         <div class="row"> {% set i = 0 %}*/
/*           {% for product in products %}*/
/*             {% if column_left and column_right %}*/
/*               {% set class = 'col-xs-8 col-sm-6' %}*/
/*             {% elseif column_left or column_right %}*/
/*               {% set class = 'col-xs-6 col-md-4' %}*/
/*             {% else %}*/
/*               {% set class = 'col-xs-6 col-sm-3' %}*/
/*             {% endif %}*/
/*             <div class="{{ class }}">*/
/*               <div class="product-thumb transition">*/
/*                 <div class="image"><a href="{{ product.href }}"><img src="{{ product.thumb }}" alt="{{ product.name }}" title="{{ product.name }}" class="img-responsive"/></a></div>*/
/*                 <div class="caption">*/
/*                   <h4><a href="{{ product.href }}">{{ product.name }}</a></h4>*/
/*                   <p>{{ product.description }}</p>*/
/*                   {% if product.rating %}*/
/*                     <div class="rating"> {% for j in 1..5 %}*/
/*                         {% if product.rating < j %} <span class="fa fa-stack"><i class="fa fa-star-o fa-stack-1x"></i></span> {% else %} <span class="fa fa-stack"><i class="fa fa-star fa-stack-1x"></i><i class="fa fa-star-o fa-stack-1x"></i></span> {% endif %}*/
/*                       {% endfor %} </div>*/
/*                   {% endif %}*/
/*                   {% if product.price %}*/
/*                     <p class="price"> {% if not product.special %}*/
/*                         {{ product.price }}*/
/*                       {% else %} <span class="price-new">{{ product.special }}</span> <span class="price-old">{{ product.price }}</span> {% endif %}*/
/*                       {% if product.tax %} <span class="price-tax">{{ text_tax }} {{ product.tax }}</span> {% endif %} </p>*/
/*                   {% endif %}</div>*/
/*                 <div class="button-group">*/
/*                   <button type="button" onclick="cart.add('{{ product.product_id }}', '{{ product.minimum }}');"><span class="hidden-xs hidden-sm hidden-md">{{ button_cart }}</span> <i class="fa fa-shopping-cart"></i></button>*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_wishlist }}" onclick="wishlist.add('{{ product.product_id }}');"><i class="fa fa-heart"></i></button>*/
/*                   <button type="button" data-toggle="tooltip" title="{{ button_compare }}" onclick="compare.add('{{ product.product_id }}');"><i class="fa fa-exchange"></i></button>*/
/*                 </div>*/
/*               </div>*/
/*             </div>*/
/*             {% if column_left and column_right and (i + 1) % 2 == 0 %}*/
/*               <div class="clearfix visible-md visible-sm"></div>*/
/*             {% elseif column_left or column_right and (i + 1) % 3 == 0 %}*/
/*               <div class="clearfix visible-md"></div>*/
/*             {% elseif (i + 1) % 4 == 0 %}*/
/*               <div class="clearfix visible-md"></div>*/
/*             {% endif %}*/
/*             {% set i = i + 1 %}*/
/*           {% endfor %} </div>*/
/*       {% endif %}*/
/*       {% if tags %}*/
/*         <p>{{ text_tags }}*/
/*           {% for i in 0..tags|length %}*/
/*             {% if i < (tags|length - 1) %}<a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>,*/
/*             {% else %}<a href="{{ tags[i].href }}">{{ tags[i].tag }}</a>{% endif %}*/
/*           {% endfor %}</p>*/
/*       {% endif %}*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('select[name=\'recurring_id\'], input[name="quantity"]').change(function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/getRecurringDescription',*/
/* 		type: 'post',*/
/* 		data: $('input[name=\'product_id\'], input[name=\'quantity\'], select[name=\'recurring_id\']'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#recurring-description').html('');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['success']) {*/
/* 				$('#recurring-description').html(json['success']);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#button-cart').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/cart/add',*/
/* 		type: 'post',*/
/* 		data: $('#product input[type=\'text\'], #product input[type=\'hidden\'], #product input[type=\'radio\']:checked, #product input[type=\'checkbox\']:checked, #product select, #product textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-cart').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-cart').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['error']) {*/
/* 				if (json['error']['option']) {*/
/* 					for (i in json['error']['option']) {*/
/* 						var element = $('#input-option' + i.replace('_', '-'));*/
/* */
/* 						if (element.parent().hasClass('input-group')) {*/
/* 							element.parent().after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						} else {*/
/* 							element.after('<div class="text-danger">' + json['error']['option'][i] + '</div>');*/
/* 						}*/
/* 					}*/
/* 				}*/
/* */
/* 				if (json['error']['recurring']) {*/
/* 					$('select[name=\'recurring_id\']').after('<div class="text-danger">' + json['error']['recurring'] + '</div>');*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* */
/* 				$.ajax({*/
/* 					url: 'index.php?route=checkout/cart/info',*/
/* 					dataType: 'html',*/
/* 					success: function(html) {*/
/* 						/**/
/*                         $('#alert-box').append('<div class="alert alert-success alert-dismissible">' + json['success'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/*                         $('#alert-box').addClass('open');*/
/*                         *//* */
/* */
/* 						$('#modal-cart').remove();*/
/* */
/* 						$('body').append('<div id="modal-cart" class="modal">' + html + '</div>');*/
/* */
/* 						$('#modal-cart .modal-body').prepend('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + ' <button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 						$('#modal-cart').modal('show');*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* */
/* 				//$('#cart > button').html('<span id="cart-total"><i class="fa fa-shopping-cart"></i> ' + json['total'] + '</span>');*/
/* */
/* 				//$('#cart > ul').load('index.php?route=common/cart/info&language={{ language }} }} ul li');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	locale: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	locale: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	locale: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('button[id^=\'button-upload\']').on('click', function() {*/
/* 	var element = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/* 		clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload',*/
/* 				type: 'post',*/
/* 				dataType: 'json',*/
/* 				data: new FormData($('#form-upload')[0]),*/
/* 				cache: false,*/
/* 				contentType: false,*/
/* 				processData: false,*/
/* 				beforeSend: function() {*/
/* 					$(element).button('loading');*/
/* 				},*/
/* 				complete: function() {*/
/* 					$(element).button('reset');*/
/* 				},*/
/* 				success: function(json) {*/
/* 					$('.text-danger').remove();*/
/* */
/* 					if (json['error']) {*/
/* 						$(element).parent().find('input').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(element).parent().find('input').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script>*/
/* <script type="text/javascript"><!--*/
/* $('#review').delegate('.pagination a', 'click', function(e) {*/
/* 	e.preventDefault();*/
/* */
/* 	$('#review').fadeOut('slow');*/
/* */
/* 	$('#review').load(this.href);*/
/* */
/* 	$('#review').fadeIn('slow');*/
/* });*/
/* */
/* $('#review').load('index.php?route=product/product/review&product_id={{ product_id }}');*/
/* */
/* $('#button-review').on('click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=product/product/write&product_id={{ product_id }}',*/
/* 		type: 'post',*/
/* 		dataType: 'json',*/
/* 		data: $("#form-review").serialize(),*/
/* 		beforeSend: function() {*/
/* 			$('#button-review').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-review').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible').remove();*/
/* */
/* 			if (json['error']) {*/
/* 				$('#review').after('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error'] + '</div>');*/
/* 			}*/
/* */
/* 			if (json['success']) {*/
/* 				$('#review').after('<div class="alert alert-success alert-dismissible"><i class="fa fa-check-circle"></i> ' + json['success'] + '</div>');*/
/* */
/* 				$('input[name=\'name\']').val('');*/
/* 				$('textarea[name=\'text\']').val('');*/
/* 				$('input[name=\'rating\']:checked').prop('checked', false);*/
/* 			}*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $(document).ready(function() {*/
/* 	$('.thumbnails').magnificPopup({*/
/* 		type: 'image',*/
/* 		delegate: 'a',*/
/* 		gallery: {*/
/* 			enabled: true*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/

<?php

/* default/template/checkout/register.twig */
class __TwigTemplate_8329352194e05f84a7f3d5add9a1386f2b7371f688419026d51fb94ceb78743d extends Twig_Template
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
        echo "<div class=\"row\">
  <div class=\"col-sm-6\">
    <fieldset id=\"account\">
      <legend>";
        // line 4
        echo (isset($context["text_your_details"]) ? $context["text_your_details"] : null);
        echo "</legend>
      <div class=\"form-group\" style=\"display: ";
        // line 5
        if ((twig_length_filter($this->env, (isset($context["customer_groups"]) ? $context["customer_groups"] : null)) > 1)) {
            echo " block ";
        } else {
            echo " none ";
        }
        echo ";\">
        <label class=\"control-label\">";
        // line 6
        echo (isset($context["entry_customer_group"]) ? $context["entry_customer_group"] : null);
        echo "</label>
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["customer_groups"]) ? $context["customer_groups"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["customer_group"]) {
            // line 8
            echo "        ";
            if (($this->getAttribute($context["customer_group"], "customer_group_id", array()) == (isset($context["customer_group_id"]) ? $context["customer_group_id"] : null))) {
                // line 9
                echo "        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 11
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" checked=\"checked\" />
            ";
                // line 12
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
        </div>
        ";
            } else {
                // line 15
                echo "        <div class=\"radio\">
          <label>
            <input type=\"radio\" name=\"customer_group_id\" value=\"";
                // line 17
                echo $this->getAttribute($context["customer_group"], "customer_group_id", array());
                echo "\" />
            ";
                // line 18
                echo $this->getAttribute($context["customer_group"], "name", array());
                echo "</label>
        </div>
        ";
            }
            // line 21
            echo "        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['customer_group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        echo "</div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-firstname\">";
        // line 23
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "</label>
        <input type=\"text\" name=\"firstname\" value=\"\" placeholder=\"";
        // line 24
        echo (isset($context["entry_firstname"]) ? $context["entry_firstname"] : null);
        echo "\" id=\"input-payment-firstname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-lastname\">";
        // line 27
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "</label>
        <input type=\"text\" name=\"lastname\" value=\"\" placeholder=\"";
        // line 28
        echo (isset($context["entry_lastname"]) ? $context["entry_lastname"] : null);
        echo "\" id=\"input-payment-lastname\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-email\">";
        // line 31
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "</label>
        <input type=\"text\" name=\"email\" value=\"\" placeholder=\"";
        // line 32
        echo (isset($context["entry_email"]) ? $context["entry_email"] : null);
        echo "\" id=\"input-payment-email\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-telephone\">";
        // line 35
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "</label>
        <input type=\"text\" name=\"telephone\" value=\"\" placeholder=\"";
        // line 36
        echo (isset($context["entry_telephone"]) ? $context["entry_telephone"] : null);
        echo "\" id=\"input-payment-telephone\" class=\"form-control\" />
      </div>
      ";
        // line 38
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 39
            echo "      ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "account")) {
                // line 40
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 41
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 42
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <select name=\"custom_field[";
                    // line 43
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 44
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
          ";
                    // line 45
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 46
                        echo "          <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 48
                    echo "        </select>
      </div>
      ";
                }
                // line 51
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 52
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 53
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 54
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 55
                        echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 57
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
              ";
                        // line 58
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 60
                    echo " </div>
      </div>
      ";
                }
                // line 63
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 64
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 65
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 66
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 67
                        echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                        // line 69
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
              ";
                        // line 70
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 72
                    echo " </div>
      </div>
      ";
                }
                // line 75
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 76
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 77
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 78
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 81
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 82
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 83
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 84
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
      </div>
      ";
                }
                // line 87
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 88
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 89
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 91
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 92
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
      </div>
      ";
                }
                // line 95
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 96
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 97
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 99
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
          <div class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </div></div>
      </div>
      ";
                }
                // line 105
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 106
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 107
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 109
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
          <div class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </div></div>
      </div>
      ";
                }
                // line 115
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 116
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 117
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 119
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
          <div class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </div></div>
      </div>
      ";
                }
                // line 125
                echo "      ";
            }
            // line 126
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 127
        echo "    </fieldset>
    <fieldset>
      <legend>";
        // line 129
        echo (isset($context["text_your_password"]) ? $context["text_your_password"] : null);
        echo "</legend>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-password\">";
        // line 131
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "</label>
        <input type=\"password\" name=\"password\" value=\"\" placeholder=\"";
        // line 132
        echo (isset($context["entry_password"]) ? $context["entry_password"] : null);
        echo "\" id=\"input-payment-password\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-confirm\">";
        // line 135
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "</label>
        <input type=\"password\" name=\"confirm\" value=\"\" placeholder=\"";
        // line 136
        echo (isset($context["entry_confirm"]) ? $context["entry_confirm"] : null);
        echo "\" id=\"input-payment-confirm\" class=\"form-control\" />
      </div>
    </fieldset>
  </div>
  <div class=\"col-sm-6\">
    <fieldset id=\"address\">
      <legend>";
        // line 142
        echo (isset($context["text_your_address"]) ? $context["text_your_address"] : null);
        echo "</legend>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-company\">";
        // line 144
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "</label>
        <input type=\"text\" name=\"company\" value=\"\" placeholder=\"";
        // line 145
        echo (isset($context["entry_company"]) ? $context["entry_company"] : null);
        echo "\" id=\"input-payment-company\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-address-1\">";
        // line 148
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "</label>
        <input type=\"text\" name=\"address_1\" value=\"\" placeholder=\"";
        // line 149
        echo (isset($context["entry_address_1"]) ? $context["entry_address_1"] : null);
        echo "\" id=\"input-payment-address-1\" class=\"form-control\" />
      </div>
      <div class=\"form-group\">
        <label class=\"control-label\" for=\"input-payment-address-2\">";
        // line 152
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "</label>
        <input type=\"text\" name=\"address_2\" value=\"\" placeholder=\"";
        // line 153
        echo (isset($context["entry_address_2"]) ? $context["entry_address_2"] : null);
        echo "\" id=\"input-payment-address-2\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-city\">";
        // line 156
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "</label>
        <input type=\"text\" name=\"city\" value=\"\" placeholder=\"";
        // line 157
        echo (isset($context["entry_city"]) ? $context["entry_city"] : null);
        echo "\" id=\"input-payment-city\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-postcode\">";
        // line 160
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "</label>
        <input type=\"text\" name=\"postcode\" value=\"";
        // line 161
        echo (isset($context["postcode"]) ? $context["postcode"] : null);
        echo "\" placeholder=\"";
        echo (isset($context["entry_postcode"]) ? $context["entry_postcode"] : null);
        echo "\" id=\"input-payment-postcode\" class=\"form-control\" />
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-country\">";
        // line 164
        echo (isset($context["entry_country"]) ? $context["entry_country"] : null);
        echo "</label>
        <select name=\"country_id\" id=\"input-payment-country\" class=\"form-control\">
          <option value=\"\">";
        // line 166
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>
          ";
        // line 167
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["countries"]) ? $context["countries"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["country"]) {
            // line 168
            echo "          ";
            if (($this->getAttribute($context["country"], "country_id", array()) == (isset($context["country_id"]) ? $context["country_id"] : null))) {
                // line 169
                echo "          <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\" selected=\"selected\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
          ";
            } else {
                // line 171
                echo "          <option value=\"";
                echo $this->getAttribute($context["country"], "country_id", array());
                echo "\">";
                echo $this->getAttribute($context["country"], "name", array());
                echo "</option>
          ";
            }
            // line 173
            echo "          ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['country'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 174
        echo "        </select>
      </div>
      <div class=\"form-group required\">
        <label class=\"control-label\" for=\"input-payment-zone\">";
        // line 177
        echo (isset($context["entry_zone"]) ? $context["entry_zone"] : null);
        echo "</label>
        <select name=\"zone_id\" id=\"input-payment-zone\" class=\"form-control\">
        </select>
      </div>
      ";
        // line 181
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["custom_fields"]) ? $context["custom_fields"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["custom_field"]) {
            // line 182
            echo "      ";
            if (($this->getAttribute($context["custom_field"], "location", array()) == "address")) {
                // line 183
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "select")) {
                    // line 184
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 185
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <select name=\"custom_field[";
                    // line 186
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">
          <option value=\"\">";
                    // line 187
                    echo (isset($context["text_select"]) ? $context["text_select"] : null);
                    echo "</option>
          ";
                    // line 188
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 189
                        echo "          <option value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\">";
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</option>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 191
                    echo "        </select>
      </div>
      ";
                }
                // line 194
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "radio")) {
                    // line 195
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 196
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 197
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 198
                        echo "          <div class=\"radio\">
            <label>
              <input type=\"radio\" name=\"custom_field[";
                        // line 200
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
              ";
                        // line 201
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 203
                    echo " </div>
      </div>
      ";
                }
                // line 206
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "checkbox")) {
                    // line 207
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 208
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div id=\"input-payment-custom-field";
                    // line 209
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\"> ";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["custom_field"], "custom_field_value", array()));
                    foreach ($context['_seq'] as $context["_key"] => $context["custom_field_value"]) {
                        // line 210
                        echo "          <div class=\"checkbox\">
            <label>
              <input type=\"checkbox\" name=\"custom_field[";
                        // line 212
                        echo $this->getAttribute($context["custom_field"], "location", array());
                        echo "][";
                        echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                        echo "][]\" value=\"";
                        echo $this->getAttribute($context["custom_field_value"], "custom_field_value_id", array());
                        echo "\" />
              ";
                        // line 213
                        echo $this->getAttribute($context["custom_field_value"], "name", array());
                        echo "</label>
          </div>
          ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field_value'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 215
                    echo " </div>
      </div>
      ";
                }
                // line 218
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "text")) {
                    // line 219
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 220
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <input type=\"text\" name=\"custom_field[";
                    // line 221
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
      </div>
      ";
                }
                // line 224
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "textarea")) {
                    // line 225
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 226
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <textarea name=\"custom_field[";
                    // line 227
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" rows=\"5\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\">";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "</textarea>
      </div>
      ";
                }
                // line 230
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "file")) {
                    // line 231
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\">";
                    // line 232
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <br />
        <button type=\"button\" id=\"button-payment-custom-field";
                    // line 234
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" data-loading-text=\"";
                    echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
                    echo "\" class=\"btn btn-default\"><i class=\"fa fa-upload\"></i> ";
                    echo (isset($context["button_upload"]) ? $context["button_upload"] : null);
                    echo "</button>
        <input type=\"hidden\" name=\"custom_field[";
                    // line 235
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" />
      </div>
      ";
                }
                // line 238
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "date")) {
                    // line 239
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 240
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group date\">
          <input type=\"text\" name=\"custom_field[";
                    // line 242
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
          <div class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </div></div>
      </div>
      ";
                }
                // line 248
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 249
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 250
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group time\">
          <input type=\"text\" name=\"custom_field[";
                    // line 252
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
          <div class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </div></div>
      </div>
      ";
                }
                // line 258
                echo "      ";
                if (($this->getAttribute($context["custom_field"], "type", array()) == "time")) {
                    // line 259
                    echo "      <div id=\"payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-group custom-field\" data-sort=\"";
                    echo $this->getAttribute($context["custom_field"], "sort_order", array());
                    echo "\">
        <label class=\"control-label\" for=\"input-payment-custom-field";
                    // line 260
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\">";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "</label>
        <div class=\"input-group datetime\">
          <input type=\"text\" name=\"custom_field[";
                    // line 262
                    echo $this->getAttribute($context["custom_field"], "location", array());
                    echo "][";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "]\" value=\"";
                    echo $this->getAttribute($context["custom_field"], "value", array());
                    echo "\" placeholder=\"";
                    echo $this->getAttribute($context["custom_field"], "name", array());
                    echo "\" data-date-format=\"YYYY-MM-DD HH:mm\" id=\"input-payment-custom-field";
                    echo $this->getAttribute($context["custom_field"], "custom_field_id", array());
                    echo "\" class=\"form-control\" />
          <div class=\"input-group-btn\">
          <button type=\"button\" class=\"btn btn-default\"><i class=\"fa fa-calendar\"></i></button>
          </div></div>
      </div>
      ";
                }
                // line 268
                echo "      ";
            }
            // line 269
            echo "      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 270
        echo "    </fieldset>
    ";
        // line 271
        echo (isset($context["captcha"]) ? $context["captcha"] : null);
        echo "</div>
</div>
<div class=\"checkbox\">
  <label for=\"newsletter\">
    <input type=\"checkbox\" name=\"newsletter\" value=\"1\" id=\"newsletter\" />
    ";
        // line 276
        echo (isset($context["entry_newsletter"]) ? $context["entry_newsletter"] : null);
        echo "</label>
</div>
";
        // line 278
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 279
            echo "<div class=\"checkbox\">
  <label>
    <input type=\"checkbox\" name=\"shipping_address\" value=\"1\" checked=\"checked\" />
    ";
            // line 282
            echo (isset($context["entry_shipping"]) ? $context["entry_shipping"] : null);
            echo "</label>
</div>
";
        }
        // line 285
        if ((isset($context["text_agree"]) ? $context["text_agree"] : null)) {
            // line 286
            echo "<div class=\"buttons clearfix\">
  <div class=\"pull-right\">";
            // line 287
            echo (isset($context["text_agree"]) ? $context["text_agree"] : null);
            echo " 
    &nbsp;
    <input type=\"checkbox\" name=\"agree\" value=\"1\" />
    <input type=\"button\" value=\"";
            // line 290
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" id=\"button-register\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        } else {
            // line 294
            echo "<div class=\"buttons clearfix\">
  <div class=\"pull-right\">
    <input type=\"button\" value=\"";
            // line 296
            echo (isset($context["button_continue"]) ? $context["button_continue"] : null);
            echo "\" id=\"button-register\" data-loading-text=\"";
            echo (isset($context["text_loading"]) ? $context["text_loading"] : null);
            echo "\" class=\"btn btn-primary\" />
  </div>
</div>
";
        }
        // line 299
        echo " 
<script type=\"text/javascript\"><!--
// Sort the custom fields
\$('#account .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#account .form-group').length) {
\t\t\$('#account .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#account .form-group').length) {
\t\t\$('#account .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#account .form-group').length) {
\t\t\$('#account .form-group:first').before(this);
\t}
});

\$('#address .form-group[data-sort]').detach().each(function() {
\tif (\$(this).attr('data-sort') >= 0 && \$(this).attr('data-sort') <= \$('#address .form-group').length) {
\t\t\$('#address .form-group').eq(\$(this).attr('data-sort')).before(this);
\t}

\tif (\$(this).attr('data-sort') > \$('#address .form-group').length) {
\t\t\$('#address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') == \$('#address .form-group').length) {
\t\t\$('#address .form-group:last').after(this);
\t}

\tif (\$(this).attr('data-sort') < -\$('#address .form-group').length) {
\t\t\$('#address .form-group:first').before(this);
\t}
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/customfield&language=";
        // line 340
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "&customer_group_id=' + this.value,
\t\tdataType: 'json',
\t\tsuccess: function(json) {
\t\t\t\$('#collapse-payment-address .custom-field').hide();
\t\t\t\$('#collapse-payment-address .custom-field').removeClass('required');

\t\t\tfor (i = 0; i < json.length; i++) {
\t\t\t\tcustom_field = json[i];

\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).show();

\t\t\t\tif (custom_field['required']) {
\t\t\t\t\t\$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');
\t\t\t\t}
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address input[name=\\'customer_group_id\\']:checked').trigger('change');
//--></script> 
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address button[id^=\\'button-payment-custom-field\\']').on('click', function() {
\tvar element = this;

\t\$('#form-upload').remove();

\t\$('body').prepend('<form enctype=\"multipart/form-data\" id=\"form-upload\" style=\"display: none;\"><input type=\"file\" name=\"file\" /></form>');

\t\$('#form-upload input[name=\\'file\\']').trigger('click');

\tif (typeof timer != 'undefined') {
    \tclearInterval(timer);
\t}

\ttimer = setInterval(function() {
\t\tif (\$('#form-upload input[name=\\'file\\']').val() != '') {
\t\t\tclearInterval(timer);

\t\t\t\$.ajax({
\t\t\t\turl: 'index.php?route=tool/upload&language=";
        // line 383
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "',
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
\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').after('<div class=\"text-danger\">' + json['error'] + '</div>');
\t\t\t\t\t}

\t\t\t\t\tif (json['success']) {
\t\t\t\t\t\talert(json['success']);

\t\t\t\t\t\t\$(element).parent().find('input[name^=\\'custom_field\\']').val(json['code']);
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
\$('.date').datetimepicker({
\tlocale: '";
        // line 419
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickTime: false
});

\$('.time').datetimepicker({
\tlocale: '";
        // line 424
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: false
});

\$('.datetime').datetimepicker({
\tlocale: '";
        // line 429
        echo (isset($context["datepicker"]) ? $context["datepicker"] : null);
        echo "',
\tpickDate: true,
\tpickTime: true
});
//--></script> 
<script type=\"text/javascript\"><!--
\$('#collapse-payment-address select[name=\\'country_id\\']').on('change', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/checkout/country&language=";
        // line 437
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "&country_id=' + this.value,
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', true);
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#collapse-payment-address select[name=\\'country_id\\']').prop('disabled', false);
\t\t},
\t\tsuccess: function(json) {
\t\t\tif (json['postcode_required'] == '1') {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().addClass('required');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address input[name=\\'postcode\\']').parent().removeClass('required');
\t\t\t}

\t\t\thtml = '<option value=\"\">";
        // line 452
        echo (isset($context["text_select"]) ? $context["text_select"] : null);
        echo "</option>';

\t\t\tif (json['zone'] && json['zone'] != '') {
\t\t\t\tfor (i = 0; i < json['zone'].length; i++) {
\t\t\t\t\thtml += '<option value=\"' + json['zone'][i]['zone_id'] + '\"';

\t\t\t\t\tif (json['zone'][i]['zone_id'] == '";
        // line 458
        echo (isset($context["zone_id"]) ? $context["zone_id"] : null);
        echo "') {
\t\t\t\t\t\thtml += ' selected=\"selected\"';
\t\t\t\t\t}

\t\t\t\t\thtml += '>' + json['zone'][i]['name'] + '</option>';
\t\t\t\t}
\t\t\t} else {
\t\t\t\thtml += '<option value=\"0\" selected=\"selected\">";
        // line 465
        echo (isset($context["text_none"]) ? $context["text_none"] : null);
        echo "</option>';
\t\t\t}

\t\t\t\$('#collapse-payment-address select[name=\\'zone_id\\']').html(html);
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-address select[name=\\'country_id\\']').trigger('change');
//--></script> 
";
    }

    public function getTemplateName()
    {
        return "default/template/checkout/register.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1218 => 465,  1208 => 458,  1199 => 452,  1181 => 437,  1170 => 429,  1162 => 424,  1154 => 419,  1115 => 383,  1069 => 340,  1026 => 299,  1017 => 296,  1013 => 294,  1004 => 290,  998 => 287,  995 => 286,  993 => 285,  987 => 282,  982 => 279,  980 => 278,  975 => 276,  967 => 271,  964 => 270,  958 => 269,  955 => 268,  938 => 262,  931 => 260,  924 => 259,  921 => 258,  904 => 252,  897 => 250,  890 => 249,  887 => 248,  870 => 242,  863 => 240,  856 => 239,  853 => 238,  843 => 235,  835 => 234,  830 => 232,  823 => 231,  820 => 230,  806 => 227,  800 => 226,  793 => 225,  790 => 224,  776 => 221,  770 => 220,  763 => 219,  760 => 218,  755 => 215,  746 => 213,  738 => 212,  734 => 210,  728 => 209,  724 => 208,  717 => 207,  714 => 206,  709 => 203,  700 => 201,  692 => 200,  688 => 198,  682 => 197,  678 => 196,  671 => 195,  668 => 194,  663 => 191,  652 => 189,  648 => 188,  644 => 187,  636 => 186,  630 => 185,  623 => 184,  620 => 183,  617 => 182,  613 => 181,  606 => 177,  601 => 174,  595 => 173,  587 => 171,  579 => 169,  576 => 168,  572 => 167,  568 => 166,  563 => 164,  555 => 161,  551 => 160,  545 => 157,  541 => 156,  535 => 153,  531 => 152,  525 => 149,  521 => 148,  515 => 145,  511 => 144,  506 => 142,  497 => 136,  493 => 135,  487 => 132,  483 => 131,  478 => 129,  474 => 127,  468 => 126,  465 => 125,  448 => 119,  441 => 117,  434 => 116,  431 => 115,  414 => 109,  407 => 107,  400 => 106,  397 => 105,  380 => 99,  373 => 97,  366 => 96,  363 => 95,  353 => 92,  345 => 91,  340 => 89,  333 => 88,  330 => 87,  316 => 84,  310 => 83,  303 => 82,  300 => 81,  286 => 78,  280 => 77,  273 => 76,  270 => 75,  265 => 72,  256 => 70,  248 => 69,  244 => 67,  238 => 66,  234 => 65,  227 => 64,  224 => 63,  219 => 60,  210 => 58,  202 => 57,  198 => 55,  192 => 54,  188 => 53,  181 => 52,  178 => 51,  173 => 48,  162 => 46,  158 => 45,  154 => 44,  146 => 43,  140 => 42,  133 => 41,  130 => 40,  127 => 39,  123 => 38,  118 => 36,  114 => 35,  108 => 32,  104 => 31,  98 => 28,  94 => 27,  88 => 24,  84 => 23,  75 => 21,  69 => 18,  65 => 17,  61 => 15,  55 => 12,  51 => 11,  47 => 9,  44 => 8,  40 => 7,  36 => 6,  28 => 5,  24 => 4,  19 => 1,);
    }
}
/* <div class="row">*/
/*   <div class="col-sm-6">*/
/*     <fieldset id="account">*/
/*       <legend>{{ text_your_details }}</legend>*/
/*       <div class="form-group" style="display: {% if customer_groups|length > 1 %} block {% else %} none {% endif %};">*/
/*         <label class="control-label">{{ entry_customer_group }}</label>*/
/*         {% for customer_group in customer_groups %}*/
/*         {% if customer_group.customer_group_id == customer_group_id %}*/
/*         <div class="radio">*/
/*           <label>*/
/*             <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" checked="checked" />*/
/*             {{ customer_group.name }}</label>*/
/*         </div>*/
/*         {% else %}*/
/*         <div class="radio">*/
/*           <label>*/
/*             <input type="radio" name="customer_group_id" value="{{ customer_group.customer_group_id }}" />*/
/*             {{ customer_group.name }}</label>*/
/*         </div>*/
/*         {% endif %}*/
/*         {% endfor %}</div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-firstname">{{ entry_firstname }}</label>*/
/*         <input type="text" name="firstname" value="" placeholder="{{ entry_firstname }}" id="input-payment-firstname" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-lastname">{{ entry_lastname }}</label>*/
/*         <input type="text" name="lastname" value="" placeholder="{{ entry_lastname }}" id="input-payment-lastname" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-email">{{ entry_email }}</label>*/
/*         <input type="text" name="email" value="" placeholder="{{ entry_email }}" id="input-payment-email" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-telephone">{{ entry_telephone }}</label>*/
/*         <input type="text" name="telephone" value="" placeholder="{{ entry_telephone }}" id="input-payment-telephone" class="form-control" />*/
/*       </div>*/
/*       {% for custom_field in custom_fields %}*/
/*       {% if custom_field.location == 'account' %}*/
/*       {% if custom_field.type == 'select' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'radio' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="radio">*/
/*             <label>*/
/*               <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %} </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'checkbox' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="checkbox">*/
/*             <label>*/
/*               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %} </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'text' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'textarea' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'file' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <br />*/
/*         <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*         <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'date' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group date">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <div class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </div></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'time' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group time">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <div class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </div></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'time' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group datetime">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <div class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </div></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*     </fieldset>*/
/*     <fieldset>*/
/*       <legend>{{ text_your_password }}</legend>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-password">{{ entry_password }}</label>*/
/*         <input type="password" name="password" value="" placeholder="{{ entry_password }}" id="input-payment-password" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-confirm">{{ entry_confirm }}</label>*/
/*         <input type="password" name="confirm" value="" placeholder="{{ entry_confirm }}" id="input-payment-confirm" class="form-control" />*/
/*       </div>*/
/*     </fieldset>*/
/*   </div>*/
/*   <div class="col-sm-6">*/
/*     <fieldset id="address">*/
/*       <legend>{{ text_your_address }}</legend>*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-payment-company">{{ entry_company }}</label>*/
/*         <input type="text" name="company" value="" placeholder="{{ entry_company }}" id="input-payment-company" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-address-1">{{ entry_address_1 }}</label>*/
/*         <input type="text" name="address_1" value="" placeholder="{{ entry_address_1 }}" id="input-payment-address-1" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group">*/
/*         <label class="control-label" for="input-payment-address-2">{{ entry_address_2 }}</label>*/
/*         <input type="text" name="address_2" value="" placeholder="{{ entry_address_2 }}" id="input-payment-address-2" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-city">{{ entry_city }}</label>*/
/*         <input type="text" name="city" value="" placeholder="{{ entry_city }}" id="input-payment-city" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-postcode">{{ entry_postcode }}</label>*/
/*         <input type="text" name="postcode" value="{{ postcode }}" placeholder="{{ entry_postcode }}" id="input-payment-postcode" class="form-control" />*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-country">{{ entry_country }}</label>*/
/*         <select name="country_id" id="input-payment-country" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           {% for country in countries %}*/
/*           {% if country.country_id == country_id %}*/
/*           <option value="{{ country.country_id }}" selected="selected">{{ country.name }}</option>*/
/*           {% else %}*/
/*           <option value="{{ country.country_id }}">{{ country.name }}</option>*/
/*           {% endif %}*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*       <div class="form-group required">*/
/*         <label class="control-label" for="input-payment-zone">{{ entry_zone }}</label>*/
/*         <select name="zone_id" id="input-payment-zone" class="form-control">*/
/*         </select>*/
/*       </div>*/
/*       {% for custom_field in custom_fields %}*/
/*       {% if custom_field.location == 'address' %}*/
/*       {% if custom_field.type == 'select' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <select name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">*/
/*           <option value="">{{ text_select }}</option>*/
/*           {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <option value="{{ custom_field_value.custom_field_value_id }}">{{ custom_field_value.name }}</option>*/
/*           {% endfor %}*/
/*         </select>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'radio' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="radio">*/
/*             <label>*/
/*               <input type="radio" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %} </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'checkbox' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <div id="input-payment-custom-field{{ custom_field.custom_field_id }}"> {% for custom_field_value in custom_field.custom_field_value %}*/
/*           <div class="checkbox">*/
/*             <label>*/
/*               <input type="checkbox" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}][]" value="{{ custom_field_value.custom_field_value_id }}" />*/
/*               {{ custom_field_value.name }}</label>*/
/*           </div>*/
/*           {% endfor %} </div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'text' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'textarea' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <textarea name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" rows="5" placeholder="{{ custom_field.name }}" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control">{{ custom_field.value }}</textarea>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'file' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label">{{ custom_field.name }}</label>*/
/*         <br />*/
/*         <button type="button" id="button-payment-custom-field{{ custom_field.custom_field_id }}" data-loading-text="{{ text_loading }}" class="btn btn-default"><i class="fa fa-upload"></i> {{ button_upload }}</button>*/
/*         <input type="hidden" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="" id="input-payment-custom-field{{ custom_field.custom_field_id }}" />*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'date' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group date">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <div class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </div></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'time' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group time">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <div class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </div></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% if custom_field.type == 'time' %}*/
/*       <div id="payment-custom-field{{ custom_field.custom_field_id }}" class="form-group custom-field" data-sort="{{ custom_field.sort_order }}">*/
/*         <label class="control-label" for="input-payment-custom-field{{ custom_field.custom_field_id }}">{{ custom_field.name }}</label>*/
/*         <div class="input-group datetime">*/
/*           <input type="text" name="custom_field[{{ custom_field.location }}][{{ custom_field.custom_field_id }}]" value="{{ custom_field.value }}" placeholder="{{ custom_field.name }}" data-date-format="YYYY-MM-DD HH:mm" id="input-payment-custom-field{{ custom_field.custom_field_id }}" class="form-control" />*/
/*           <div class="input-group-btn">*/
/*           <button type="button" class="btn btn-default"><i class="fa fa-calendar"></i></button>*/
/*           </div></div>*/
/*       </div>*/
/*       {% endif %}*/
/*       {% endif %}*/
/*       {% endfor %}*/
/*     </fieldset>*/
/*     {{ captcha }}</div>*/
/* </div>*/
/* <div class="checkbox">*/
/*   <label for="newsletter">*/
/*     <input type="checkbox" name="newsletter" value="1" id="newsletter" />*/
/*     {{ entry_newsletter }}</label>*/
/* </div>*/
/* {% if shipping_required %}*/
/* <div class="checkbox">*/
/*   <label>*/
/*     <input type="checkbox" name="shipping_address" value="1" checked="checked" />*/
/*     {{ entry_shipping }}</label>*/
/* </div>*/
/* {% endif %}*/
/* {% if text_agree %}*/
/* <div class="buttons clearfix">*/
/*   <div class="pull-right">{{ text_agree }} */
/*     &nbsp;*/
/*     <input type="checkbox" name="agree" value="1" />*/
/*     <input type="button" value="{{ button_continue }}" id="button-register" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* {% else %}*/
/* <div class="buttons clearfix">*/
/*   <div class="pull-right">*/
/*     <input type="button" value="{{ button_continue }}" id="button-register" data-loading-text="{{ text_loading }}" class="btn btn-primary" />*/
/*   </div>*/
/* </div>*/
/* {% endif %} */
/* <script type="text/javascript"><!--*/
/* // Sort the custom fields*/
/* $('#account .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#account .form-group').length) {*/
/* 		$('#account .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#account .form-group').length) {*/
/* 		$('#account .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') == $('#account .form-group').length) {*/
/* 		$('#account .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#account .form-group').length) {*/
/* 		$('#account .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* $('#address .form-group[data-sort]').detach().each(function() {*/
/* 	if ($(this).attr('data-sort') >= 0 && $(this).attr('data-sort') <= $('#address .form-group').length) {*/
/* 		$('#address .form-group').eq($(this).attr('data-sort')).before(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') > $('#address .form-group').length) {*/
/* 		$('#address .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') == $('#address .form-group').length) {*/
/* 		$('#address .form-group:last').after(this);*/
/* 	}*/
/* */
/* 	if ($(this).attr('data-sort') < -$('#address .form-group').length) {*/
/* 		$('#address .form-group:first').before(this);*/
/* 	}*/
/* });*/
/* */
/* $('#collapse-payment-address input[name=\'customer_group_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/checkout/customfield&language={{ language }}&customer_group_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		success: function(json) {*/
/* 			$('#collapse-payment-address .custom-field').hide();*/
/* 			$('#collapse-payment-address .custom-field').removeClass('required');*/
/* */
/* 			for (i = 0; i < json.length; i++) {*/
/* 				custom_field = json[i];*/
/* */
/* 				$('#payment-custom-field' + custom_field['custom_field_id']).show();*/
/* */
/* 				if (custom_field['required']) {*/
/* 					$('#payment-custom-field' + custom_field['custom_field_id']).addClass('required');*/
/* 				}*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-payment-address input[name=\'customer_group_id\']:checked').trigger('change');*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#collapse-payment-address button[id^=\'button-payment-custom-field\']').on('click', function() {*/
/* 	var element = this;*/
/* */
/* 	$('#form-upload').remove();*/
/* */
/* 	$('body').prepend('<form enctype="multipart/form-data" id="form-upload" style="display: none;"><input type="file" name="file" /></form>');*/
/* */
/* 	$('#form-upload input[name=\'file\']').trigger('click');*/
/* */
/* 	if (typeof timer != 'undefined') {*/
/*     	clearInterval(timer);*/
/* 	}*/
/* */
/* 	timer = setInterval(function() {*/
/* 		if ($('#form-upload input[name=\'file\']').val() != '') {*/
/* 			clearInterval(timer);*/
/* */
/* 			$.ajax({*/
/* 				url: 'index.php?route=tool/upload&language={{ language }}',*/
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
/* 						$(element).parent().find('input[name^=\'custom_field\']').after('<div class="text-danger">' + json['error'] + '</div>');*/
/* 					}*/
/* */
/* 					if (json['success']) {*/
/* 						alert(json['success']);*/
/* */
/* 						$(element).parent().find('input[name^=\'custom_field\']').val(json['code']);*/
/* 					}*/
/* 				},*/
/* 				error: function(xhr, ajaxOptions, thrownError) {*/
/* 					alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 				}*/
/* 			});*/
/* 		}*/
/* 	}, 500);*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('.date').datetimepicker({*/
/* 	locale: '{{ datepicker }}',*/
/* 	pickTime: false*/
/* });*/
/* */
/* $('.time').datetimepicker({*/
/* 	locale: '{{ datepicker }}',*/
/* 	pickDate: false*/
/* });*/
/* */
/* $('.datetime').datetimepicker({*/
/* 	locale: '{{ datepicker }}',*/
/* 	pickDate: true,*/
/* 	pickTime: true*/
/* });*/
/* //--></script> */
/* <script type="text/javascript"><!--*/
/* $('#collapse-payment-address select[name=\'country_id\']').on('change', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/checkout/country&language={{ language }}&country_id=' + this.value,*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#collapse-payment-address select[name=\'country_id\']').prop('disabled', true);*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#collapse-payment-address select[name=\'country_id\']').prop('disabled', false);*/
/* 		},*/
/* 		success: function(json) {*/
/* 			if (json['postcode_required'] == '1') {*/
/* 				$('#collapse-payment-address input[name=\'postcode\']').parent().addClass('required');*/
/* 			} else {*/
/* 				$('#collapse-payment-address input[name=\'postcode\']').parent().removeClass('required');*/
/* 			}*/
/* */
/* 			html = '<option value="">{{ text_select }}</option>';*/
/* */
/* 			if (json['zone'] && json['zone'] != '') {*/
/* 				for (i = 0; i < json['zone'].length; i++) {*/
/* 					html += '<option value="' + json['zone'][i]['zone_id'] + '"';*/
/* */
/* 					if (json['zone'][i]['zone_id'] == '{{ zone_id }}') {*/
/* 						html += ' selected="selected"';*/
/* 					}*/
/* */
/* 					html += '>' + json['zone'][i]['name'] + '</option>';*/
/* 				}*/
/* 			} else {*/
/* 				html += '<option value="0" selected="selected">{{ text_none }}</option>';*/
/* 			}*/
/* */
/* 			$('#collapse-payment-address select[name=\'zone_id\']').html(html);*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-payment-address select[name=\'country_id\']').trigger('change');*/
/* //--></script> */
/* */

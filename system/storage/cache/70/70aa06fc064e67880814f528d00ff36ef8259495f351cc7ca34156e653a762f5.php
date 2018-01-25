<?php

/* default/template/checkout/checkout.twig */
class __TwigTemplate_b9dacda1965d1b6c0bbd4f06c41e89146dc368fa40dcb3150cb07cc4995867cc extends Twig_Template
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
<div id=\"checkout-checkout\" class=\"container\">
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
  ";
        // line 8
        if ((isset($context["error_warning"]) ? $context["error_warning"] : null)) {
            // line 9
            echo "    <div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ";
            echo (isset($context["error_warning"]) ? $context["error_warning"] : null);
            echo "
      <button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button>
    </div>
  ";
        }
        // line 13
        echo "  <div class=\"row\">";
        echo (isset($context["column_left"]) ? $context["column_left"] : null);
        echo "
    ";
        // line 14
        if (((isset($context["column_left"]) ? $context["column_left"] : null) && (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 15
            echo "      ";
            $context["class"] = "col-sm-6";
            // line 16
            echo "    ";
        } elseif (((isset($context["column_left"]) ? $context["column_left"] : null) || (isset($context["column_right"]) ? $context["column_right"] : null))) {
            // line 17
            echo "      ";
            $context["class"] = "col-sm-9";
            // line 18
            echo "    ";
        } else {
            // line 19
            echo "      ";
            $context["class"] = "col-sm-12";
            // line 20
            echo "    ";
        }
        // line 21
        echo "    <div id=\"content\" class=\"";
        echo (isset($context["class"]) ? $context["class"] : null);
        echo "\">";
        echo (isset($context["content_top"]) ? $context["content_top"] : null);
        echo "
      <h1>";
        // line 22
        echo (isset($context["heading_title"]) ? $context["heading_title"] : null);
        echo "</h1>
      <div class=\"panel-group\" id=\"accordion\">
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 26
        echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-option\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        ";
        // line 32
        if (( !(isset($context["logged"]) ? $context["logged"] : null) && ((isset($context["account"]) ? $context["account"] : null) != "guest"))) {
            // line 33
            echo "          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">";
            // line 35
            echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
            echo "</h4>
            </div>
            <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
              <div class=\"panel-body\"></div>
            </div>
          </div>
        ";
        } else {
            // line 42
            echo "          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">";
            // line 44
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo "</h4>
            </div>
            <div class=\"panel-collapse collapse\" id=\"collapse-payment-address\">
              <div class=\"panel-body\"></div>
            </div>
          </div>
        ";
        }
        // line 51
        echo "        ";
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 52
            echo "          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">";
            // line 54
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo "</h4>
            </div>
            <div class=\"panel-collapse collapse\" id=\"collapse-shipping-address\">
              <div class=\"panel-body\"></div>
            </div>
          </div>
          <div class=\"panel panel-default\">
            <div class=\"panel-heading\">
              <h4 class=\"panel-title\">";
            // line 62
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "</h4>
            </div>
            <div class=\"panel-collapse collapse\" id=\"collapse-shipping-method\">
              <div class=\"panel-body\"></div>
            </div>
          </div>
        ";
        }
        // line 69
        echo "        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 71
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-payment-method\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
        <div class=\"panel panel-default\">
          <div class=\"panel-heading\">
            <h4 class=\"panel-title\">";
        // line 79
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "</h4>
          </div>
          <div class=\"panel-collapse collapse\" id=\"collapse-checkout-confirm\">
            <div class=\"panel-body\"></div>
          </div>
        </div>
      </div>
      ";
        // line 86
        echo (isset($context["content_bottom"]) ? $context["content_bottom"] : null);
        echo "</div>
    ";
        // line 87
        echo (isset($context["column_right"]) ? $context["column_right"] : null);
        echo "</div>
</div>
<script type=\"text/javascript\"><!--
\$('#collapse-checkout-option').on('change', 'input[name=\\'account\\']', function() {
\tif (\$('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 93
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t} else {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 95
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t}
\t} else {
\t\tif (this.value == 'register') {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 99
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo "');
\t\t} else {
\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('";
        // line 101
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo "');
\t\t}
\t}
});

";
        // line 106
        if ( !(isset($context["logged"]) ? $context["logged"] : null)) {
            // line 107
            echo "\$(document).ready(function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/login&language=";
            // line 109
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "',
\t\tdataType: 'html',
\t\tsuccess: function(html) {
\t\t\t\$('#collapse-checkout-option .panel-body').html(html);

\t\t\t\$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-option\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 114
            echo (isset($context["text_checkout_option"]) ? $context["text_checkout_option"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-checkout-option\\']').trigger('click');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
";
        } else {
            // line 124
            echo "\$(document).ready(function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/payment_address&language=";
            // line 126
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "',
\t\tdataType: 'html',
\t\tsuccess: function(html) {
\t\t\t\$('#collapse-payment-address .panel-body').html(html);

\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 131
            echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
";
        }
        // line 141
        echo "
// Checkout
\$('#collapse-checkout-option').on('click', '#button-account', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/' + \$('input[name=\\'account\\']:checked').val() + '&language=";
        // line 145
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "',
\t\tdataType: 'html',
\t\tbeforeSend: function() {
\t\t\t\$('#button-account').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-account').button('reset');
\t\t},
\t\tsuccess: function(html) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\t\$('#collapse-payment-address .panel-body').html(html);

\t\t\tif (\$('input[name=\\'account\\']:checked').val() == 'register') {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 160
        echo (isset($context["text_checkout_account"]) ? $context["text_checkout_account"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t} else {
\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 162
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t}

\t\t\t\$('a[href=\\'#collapse-payment-address\\']').trigger('click');
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Login
\$('#collapse-checkout-option').on('click', '#button-login', 'click', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/login/save&language=";
        // line 176
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "',
\t\ttype: 'post',
\t\tdata: \$('#collapse-checkout-option :input'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-login').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-login').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#collapse-checkout-option .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('input[name=\\'email\\']').parent().addClass('has-error');
\t\t\t\t\$('input[name=\\'password\\']').parent().addClass('has-error');
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Register
\$('#collapse-payment-address').on('click', '#button-register', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/register/save&language=";
        // line 209
        echo (isset($context["language"]) ? $context["language"] : null);
        echo "',
\t\ttype: 'post',
\t\tdata: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-register').button('loading');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-register').button('reset');

\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\"><i class=\"fa fa-exclamation-circle\"></i> ' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t} else {
              ";
        // line 242
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 243
            echo "\t\t\t\tvar shipping_address = \$('#payment-address input[name=\\'shipping_address\\']:checked').prop('value');

\t\t\t\tif (shipping_address) {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_method&language=";
            // line 247
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address&language=";
            // line 252
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "',
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 257
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 266
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 270
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 271
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 272
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t} else {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address&language=";
            // line 280
            echo (isset($context["language"]) ? $context["language"] : null);
            echo "',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 285
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 289
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 290
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 291
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
              ";
        } else {
            // line 299
            echo "\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 305
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 309
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
              ";
        }
        // line 316
        echo "
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-register').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 326
        echo (isset($context["text_checkout_payment_address"]) ? $context["text_checkout_payment_address"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Payment Address
\$('#collapse-payment-address').on('click', '#button-payment-address', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/payment_address/save',
\t\ttype: 'post',
\t\tdata: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'password\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-payment-address').button('loading');
\t\t},
\t\tcomplete: function() {
\t\t\t\$('#button-payment-address').button('reset');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
\t\t\t} else {
              ";
        // line 377
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 378
            echo "\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=checkout/shipping_address',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 384
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 388
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 389
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 390
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t}).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
              ";
        } else {
            // line 408
            echo "\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 414
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 418
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t}).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
              ";
        }
        // line 436
        echo "\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Shipping Address
\$('#collapse-shipping-address').on('click', '#button-shipping-address', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/shipping_address/save',
\t\ttype: 'post',
\t\tdata: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-shipping-address').button('loading');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-shipping-address').button('reset');

\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().parent().addClass('has-error');
\t\t\t} else {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-shipping-address').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 489
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 493
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 494
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');

\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_address',
\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\$('#collapse-shipping-address .panel-body').html(html);
\t\t\t\t\t\t\t},
\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t}
\t\t\t\t\t\t});
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t}).done(function() {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/payment_address',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-payment-address .panel-body').html(html);
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Guest
\$('#collapse-payment-address').on('click', '#button-guest', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/guest/save',
\t\ttype: 'post',
\t\tdata: \$('#collapse-payment-address input[type=\\'text\\'], #collapse-payment-address input[type=\\'date\\'], #collapse-payment-address input[type=\\'datetime-local\\'], #collapse-payment-address input[type=\\'time\\'], #collapse-payment-address input[type=\\'checkbox\\']:checked, #collapse-payment-address input[type=\\'radio\\']:checked, #collapse-payment-address input[type=\\'hidden\\'], #collapse-payment-address textarea, #collapse-payment-address select'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-guest').button('loading');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-guest').button('reset');

\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#collapse-payment-address .panel-body').prepend('<div class=\"alert alert-warning alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-payment-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t} else {
              ";
        // line 566
        if ((isset($context["shipping_required"]) ? $context["shipping_required"] : null)) {
            // line 567
            echo "\t\t\t\tvar shipping_address = \$('#collapse-payment-address input[name=\\'shipping_address\\']:checked').prop('value');

\t\t\t\tif (shipping_address) {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\$('#button-guest').button('reset');
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t// Add the shipping address
\t\t\t\t\t\t\t\$.ajax({
\t\t\t\t\t\t\t\turl: 'index.php?route=checkout/guest_shipping',
\t\t\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 584
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');
\t\t\t\t\t\t\t\t},
\t\t\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t\t\t}
\t\t\t\t\t\t\t});

\t\t\t\t\t\t\t\$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 593
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 597
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 598
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t} else {
\t\t\t\t\t\$.ajax({
\t\t\t\t\t\turl: 'index.php?route=checkout/guest_shipping',
\t\t\t\t\t\tdataType: 'html',
\t\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\t\$('#button-guest').button('reset');
\t\t\t\t\t\t},
\t\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\t\$('#collapse-shipping-address .panel-body').html(html);

\t\t\t\t\t\t\t\$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-address\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 614
            echo (isset($context["text_checkout_shipping_address"]) ? $context["text_checkout_shipping_address"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-address\\']').trigger('click');

\t\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('";
            // line 618
            echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
            // line 619
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo "');
\t\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 620
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t\t},
\t\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t\t}
\t\t\t\t\t});
\t\t\t\t}
              ";
        } else {
            // line 628
            echo "\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-guest').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
            // line 637
            echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
            echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
            // line 641
            echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
            echo "');
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
              ";
        }
        // line 648
        echo "\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

// Guest Shipping
\$('#collapse-shipping-address').on('click', '#button-guest-shipping', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/guest_shipping/save',
\t\ttype: 'post',
\t\tdata: \$('#collapse-shipping-address input[type=\\'text\\'], #collapse-shipping-address input[type=\\'date\\'], #collapse-shipping-address input[type=\\'datetime-local\\'], #collapse-shipping-address input[type=\\'time\\'], #collapse-shipping-address input[type=\\'password\\'], #collapse-shipping-address input[type=\\'checkbox\\']:checked, #collapse-shipping-address input[type=\\'radio\\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-guest-shipping').button('loading');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();
\t\t\t\$('.form-group').removeClass('has-error');

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-guest-shipping').button('reset');

\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#collapse-shipping-address .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}

\t\t\t\tfor (i in json['error']) {
\t\t\t\t\tvar element = \$('#input-shipping-' + i.replace('_', '-'));

\t\t\t\t\tif (\$(element).parent().hasClass('input-group')) {
\t\t\t\t\t\t\$(element).parent().after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t} else {
\t\t\t\t\t\t\$(element).after('<div class=\"text-danger\">' + json['error'][i] + '</div>');
\t\t\t\t\t}
\t\t\t\t}

\t\t\t\t// Highlight any found errors
\t\t\t\t\$('.text-danger').parent().addClass('has-error');
\t\t\t} else {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=checkout/shipping_method',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-guest-shipping').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\$('#collapse-shipping-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-shipping-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 701
        echo (isset($context["text_checkout_shipping_method"]) ? $context["text_checkout_shipping_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-shipping-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('";
        // line 705
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo "');
\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 706
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-shipping-method').on('click', '#button-shipping-method', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/shipping_method/save',
\t\ttype: 'post',
\t\tdata: \$('#collapse-shipping-method input[type=\\'radio\\']:checked, #collapse-shipping-method textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-shipping-method').button('loading');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-shipping-method').button('reset');

\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#collapse-shipping-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=checkout/payment_method',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-shipping-method').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\$('#collapse-payment-method .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-payment-method\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 750
        echo (isset($context["text_checkout_payment_method"]) ? $context["text_checkout_payment_method"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-payment-method\\']').trigger('click');

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('";
        // line 754
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo "');
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});

\$('#collapse-payment-method').on('click', '#button-payment-method', function() {
\t\$.ajax({
\t\turl: 'index.php?route=checkout/payment_method/save',
\t\ttype: 'post',
\t\tdata: \$('#collapse-payment-method input[type=\\'radio\\']:checked, #collapse-payment-method input[type=\\'checkbox\\']:checked, #collapse-payment-method textarea'),
\t\tdataType: 'json',
\t\tbeforeSend: function() {
\t\t\t\$('#button-payment-method').button('loading');
\t\t},
\t\tsuccess: function(json) {
\t\t\t\$('.alert-dismissible, .text-danger').remove();

\t\t\tif (json['redirect']) {
\t\t\t\tlocation = json['redirect'];
\t\t\t} else if (json['error']) {
\t\t\t\t\$('#button-payment-method').button('reset');

\t\t\t\tif (json['error']['warning']) {
\t\t\t\t\t\$('#collapse-payment-method .panel-body').prepend('<div class=\"alert alert-danger alert-dismissible\">' + json['error']['warning'] + '<button type=\"button\" class=\"close\" data-dismiss=\"alert\">&times;</button></div>');
\t\t\t\t}
\t\t\t} else {
\t\t\t\t\$.ajax({
\t\t\t\t\turl: 'index.php?route=checkout/confirm',
\t\t\t\t\tdataType: 'html',
\t\t\t\t\tcomplete: function() {
\t\t\t\t\t\t\$('#button-payment-method').button('reset');
\t\t\t\t\t},
\t\t\t\t\tsuccess: function(html) {
\t\t\t\t\t\t\$('#collapse-checkout-confirm .panel-body').html(html);

\t\t\t\t\t\t\$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href=\"#collapse-checkout-confirm\" data-toggle=\"collapse\" data-parent=\"#accordion\" class=\"accordion-toggle\">";
        // line 798
        echo (isset($context["text_checkout_confirm"]) ? $context["text_checkout_confirm"] : null);
        echo " <i class=\"fa fa-caret-down\"></i></a>');

\t\t\t\t\t\t\$('a[href=\\'#collapse-checkout-confirm\\']').trigger('click');
\t\t\t\t\t},
\t\t\t\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\t\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t\t\t\t}
\t\t\t\t});
\t\t\t}
\t\t},
\t\terror: function(xhr, ajaxOptions, thrownError) {
\t\t\talert(thrownError + \"\\r\\n\" + xhr.statusText + \"\\r\\n\" + xhr.responseText);
\t\t}
\t});
});
//--></script>
";
        // line 814
        echo (isset($context["footer"]) ? $context["footer"] : null);
    }

    public function getTemplateName()
    {
        return "default/template/checkout/checkout.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1105 => 814,  1086 => 798,  1039 => 754,  1032 => 750,  985 => 706,  981 => 705,  974 => 701,  919 => 648,  909 => 641,  902 => 637,  891 => 628,  880 => 620,  876 => 619,  872 => 618,  865 => 614,  846 => 598,  842 => 597,  835 => 593,  823 => 584,  804 => 567,  802 => 566,  727 => 494,  723 => 493,  716 => 489,  661 => 436,  640 => 418,  633 => 414,  625 => 408,  604 => 390,  600 => 389,  596 => 388,  589 => 384,  581 => 378,  579 => 377,  525 => 326,  513 => 316,  503 => 309,  496 => 305,  488 => 299,  477 => 291,  473 => 290,  469 => 289,  462 => 285,  454 => 280,  443 => 272,  439 => 271,  435 => 270,  428 => 266,  416 => 257,  408 => 252,  400 => 247,  394 => 243,  392 => 242,  356 => 209,  320 => 176,  303 => 162,  298 => 160,  280 => 145,  274 => 141,  261 => 131,  253 => 126,  249 => 124,  236 => 114,  228 => 109,  224 => 107,  222 => 106,  214 => 101,  209 => 99,  202 => 95,  197 => 93,  188 => 87,  184 => 86,  174 => 79,  163 => 71,  159 => 69,  149 => 62,  138 => 54,  134 => 52,  131 => 51,  121 => 44,  117 => 42,  107 => 35,  103 => 33,  101 => 32,  92 => 26,  85 => 22,  78 => 21,  75 => 20,  72 => 19,  69 => 18,  66 => 17,  63 => 16,  60 => 15,  58 => 14,  53 => 13,  45 => 9,  43 => 8,  40 => 7,  29 => 5,  25 => 4,  19 => 1,);
    }
}
/* {{ header }}*/
/* <div id="checkout-checkout" class="container">*/
/*   <ul class="breadcrumb">*/
/*     {% for breadcrumb in breadcrumbs %}*/
/*       <li><a href="{{ breadcrumb.href }}">{{ breadcrumb.text }}</a></li>*/
/*     {% endfor %}*/
/*   </ul>*/
/*   {% if error_warning %}*/
/*     <div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> {{ error_warning }}*/
/*       <button type="button" class="close" data-dismiss="alert">&times;</button>*/
/*     </div>*/
/*   {% endif %}*/
/*   <div class="row">{{ column_left }}*/
/*     {% if column_left and column_right %}*/
/*       {% set class = 'col-sm-6' %}*/
/*     {% elseif column_left or column_right %}*/
/*       {% set class = 'col-sm-9' %}*/
/*     {% else %}*/
/*       {% set class = 'col-sm-12' %}*/
/*     {% endif %}*/
/*     <div id="content" class="{{ class }}">{{ content_top }}*/
/*       <h1>{{ heading_title }}</h1>*/
/*       <div class="panel-group" id="accordion">*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_option }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-checkout-option">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         {% if not logged and account != 'guest' %}*/
/*           <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*               <h4 class="panel-title">{{ text_checkout_account }}</h4>*/
/*             </div>*/
/*             <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*               <div class="panel-body"></div>*/
/*             </div>*/
/*           </div>*/
/*         {% else %}*/
/*           <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*               <h4 class="panel-title">{{ text_checkout_payment_address }}</h4>*/
/*             </div>*/
/*             <div class="panel-collapse collapse" id="collapse-payment-address">*/
/*               <div class="panel-body"></div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         {% if shipping_required %}*/
/*           <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*               <h4 class="panel-title">{{ text_checkout_shipping_address }}</h4>*/
/*             </div>*/
/*             <div class="panel-collapse collapse" id="collapse-shipping-address">*/
/*               <div class="panel-body"></div>*/
/*             </div>*/
/*           </div>*/
/*           <div class="panel panel-default">*/
/*             <div class="panel-heading">*/
/*               <h4 class="panel-title">{{ text_checkout_shipping_method }}</h4>*/
/*             </div>*/
/*             <div class="panel-collapse collapse" id="collapse-shipping-method">*/
/*               <div class="panel-body"></div>*/
/*             </div>*/
/*           </div>*/
/*         {% endif %}*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_payment_method }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-payment-method">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*         <div class="panel panel-default">*/
/*           <div class="panel-heading">*/
/*             <h4 class="panel-title">{{ text_checkout_confirm }}</h4>*/
/*           </div>*/
/*           <div class="panel-collapse collapse" id="collapse-checkout-confirm">*/
/*             <div class="panel-body"></div>*/
/*           </div>*/
/*         </div>*/
/*       </div>*/
/*       {{ content_bottom }}</div>*/
/*     {{ column_right }}</div>*/
/* </div>*/
/* <script type="text/javascript"><!--*/
/* $('#collapse-checkout-option').on('change', 'input[name=\'account\']', function() {*/
/* 	if ($('#collapse-payment-address').parent().find('.panel-heading .panel-title > *').is('a')) {*/
/* 		if (this.value == 'register') {*/
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/* 		} else {*/
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/* 		}*/
/* 	} else {*/
/* 		if (this.value == 'register') {*/
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('{{ text_checkout_account }}');*/
/* 		} else {*/
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_address }}');*/
/* 		}*/
/* 	}*/
/* });*/
/* */
/* {% if not logged %}*/
/* $(document).ready(function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/login&language={{ language }}',*/
/* 		dataType: 'html',*/
/* 		success: function(html) {*/
/* 			$('#collapse-checkout-option .panel-body').html(html);*/
/* */
/* 			$('#collapse-checkout-option').parent().find('.panel-heading .panel-title').html('<a href="#collapse-checkout-option" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_option }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 			$('a[href=\'#collapse-checkout-option\']').trigger('click');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* {% else %}*/
/* $(document).ready(function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/payment_address&language={{ language }}',*/
/* 		dataType: 'html',*/
/* 		success: function(html) {*/
/* 			$('#collapse-payment-address .panel-body').html(html);*/
/* */
/* 			$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 			$('a[href=\'#collapse-payment-address\']').trigger('click');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* {% endif %}*/
/* */
/* // Checkout*/
/* $('#collapse-checkout-option').on('click', '#button-account', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/' + $('input[name=\'account\']:checked').val() + '&language={{ language }}',*/
/* 		dataType: 'html',*/
/* 		beforeSend: function() {*/
/* 			$('#button-account').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-account').button('reset');*/
/* 		},*/
/* 		success: function(html) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			$('#collapse-payment-address .panel-body').html(html);*/
/* */
/* 			if ($('input[name=\'account\']:checked').val() == 'register') {*/
/* 				$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_account }} <i class="fa fa-caret-down"></i></a>');*/
/* 			} else {*/
/* 				$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/* 			}*/
/* */
/* 			$('a[href=\'#collapse-payment-address\']').trigger('click');*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Login*/
/* $('#collapse-checkout-option').on('click', '#button-login', 'click', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/login/save&language={{ language }}',*/
/* 		type: 'post',*/
/* 		data: $('#collapse-checkout-option :input'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-login').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-login').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#collapse-checkout-option .panel-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* */
/* 				// Highlight any found errors*/
/* 				$('input[name=\'email\']').parent().addClass('has-error');*/
/* 				$('input[name=\'password\']').parent().addClass('has-error');*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Register*/
/* $('#collapse-payment-address').on('click', '#button-register', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/register/save&language={{ language }}',*/
/* 		type: 'post',*/
/* 		data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address textarea, #collapse-payment-address select'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-register').button('loading');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-register').button('reset');*/
/* */
/* 				if (json['error']['warning']) {*/
/* 					$('#collapse-payment-address .panel-body').prepend('<div class="alert alert-danger alert-dismissible"><i class="fa fa-exclamation-circle"></i> ' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			} else {*/
/*               {% if shipping_required %}*/
/* 				var shipping_address = $('#payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* */
/* 				if (shipping_address) {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/shipping_method&language={{ language }}',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							// Add the shipping address*/
/* 							$.ajax({*/
/* 								url: 'index.php?route=checkout/shipping_address&language={{ language }}',*/
/* 								dataType: 'html',*/
/* 								success: function(html) {*/
/* 									$('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 									$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* 								},*/
/* 								error: function(xhr, ajaxOptions, thrownError) {*/
/* 									alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 								}*/
/* 							});*/
/* */
/* 							$('#collapse-shipping-method .panel-body').html(html);*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 							$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				} else {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/shipping_address&language={{ language }}',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 							$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 							$('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				}*/
/*               {% else %}*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=checkout/payment_method',*/
/* 					dataType: 'html',*/
/* 					success: function(html) {*/
/* 						$('#collapse-payment-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/*               {% endif %}*/
/* */
/* 				$.ajax({*/
/* 					url: 'index.php?route=checkout/payment_address',*/
/* 					dataType: 'html',*/
/* 					complete: function() {*/
/* 						$('#button-register').button('reset');*/
/* 					},*/
/* 					success: function(html) {*/
/* 						$('#collapse-payment-address .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_address }} <i class="fa fa-caret-down"></i></a>');*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Payment Address*/
/* $('#collapse-payment-address').on('click', '#button-payment-address', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/payment_address/save',*/
/* 		type: 'post',*/
/* 		data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'password\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-payment-address').button('loading');*/
/* 		},*/
/* 		complete: function() {*/
/* 			$('#button-payment-address').button('reset');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				if (json['error']['warning']) {*/
/* 					$('#collapse-payment-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().parent().addClass('has-error');*/
/* 			} else {*/
/*               {% if shipping_required %}*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=checkout/shipping_address',*/
/* 					dataType: 'html',*/
/* 					success: function(html) {*/
/* 						$('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 						$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/* 						$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				}).done(function() {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address .panel-body').html(html);*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				});*/
/*               {% else %}*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=checkout/payment_method',*/
/* 					dataType: 'html',*/
/* 					success: function(html) {*/
/* 						$('#collapse-payment-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				}).done(function() {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address .panel-body').html(html);*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				});*/
/*               {% endif %}*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Shipping Address*/
/* $('#collapse-shipping-address').on('click', '#button-shipping-address', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/shipping_address/save',*/
/* 		type: 'post',*/
/* 		data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-shipping-address').button('loading');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-shipping-address').button('reset');*/
/* */
/* 				if (json['error']['warning']) {*/
/* 					$('#collapse-shipping-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().parent().addClass('has-error');*/
/* 			} else {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=checkout/shipping_method',*/
/* 					dataType: 'html',*/
/* 					complete: function() {*/
/* 						$('#button-shipping-address').button('reset');*/
/* 					},*/
/* 					success: function(html) {*/
/* 						$('#collapse-shipping-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* */
/* 						$.ajax({*/
/* 							url: 'index.php?route=checkout/shipping_address',*/
/* 							dataType: 'html',*/
/* 							success: function(html) {*/
/* 								$('#collapse-shipping-address .panel-body').html(html);*/
/* 							},*/
/* 							error: function(xhr, ajaxOptions, thrownError) {*/
/* 								alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 							}*/
/* 						});*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				}).done(function() {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/payment_address',*/
/* 						dataType: 'html',*/
/* 						success: function(html) {*/
/* 							$('#collapse-payment-address .panel-body').html(html);*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				});*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Guest*/
/* $('#collapse-payment-address').on('click', '#button-guest', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/guest/save',*/
/* 		type: 'post',*/
/* 		data: $('#collapse-payment-address input[type=\'text\'], #collapse-payment-address input[type=\'date\'], #collapse-payment-address input[type=\'datetime-local\'], #collapse-payment-address input[type=\'time\'], #collapse-payment-address input[type=\'checkbox\']:checked, #collapse-payment-address input[type=\'radio\']:checked, #collapse-payment-address input[type=\'hidden\'], #collapse-payment-address textarea, #collapse-payment-address select'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-guest').button('loading');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-guest').button('reset');*/
/* */
/* 				if (json['error']['warning']) {*/
/* 					$('#collapse-payment-address .panel-body').prepend('<div class="alert alert-warning alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-payment-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			} else {*/
/*               {% if shipping_required %}*/
/* 				var shipping_address = $('#collapse-payment-address input[name=\'shipping_address\']:checked').prop('value');*/
/* */
/* 				if (shipping_address) {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/shipping_method',*/
/* 						dataType: 'html',*/
/* 						complete: function() {*/
/* 							$('#button-guest').button('reset');*/
/* 						},*/
/* 						success: function(html) {*/
/* 							// Add the shipping address*/
/* 							$.ajax({*/
/* 								url: 'index.php?route=checkout/guest_shipping',*/
/* 								dataType: 'html',*/
/* 								success: function(html) {*/
/* 									$('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 									$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* 								},*/
/* 								error: function(xhr, ajaxOptions, thrownError) {*/
/* 									alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 								}*/
/* 							});*/
/* */
/* 							$('#collapse-shipping-method .panel-body').html(html);*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 							$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 							$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				} else {*/
/* 					$.ajax({*/
/* 						url: 'index.php?route=checkout/guest_shipping',*/
/* 						dataType: 'html',*/
/* 						complete: function() {*/
/* 							$('#button-guest').button('reset');*/
/* 						},*/
/* 						success: function(html) {*/
/* 							$('#collapse-shipping-address .panel-body').html(html);*/
/* */
/* 							$('#collapse-shipping-address').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-address" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_address }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 							$('a[href=\'#collapse-shipping-address\']').trigger('click');*/
/* */
/* 							$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_shipping_method }}');*/
/* 							$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 							$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* 						},*/
/* 						error: function(xhr, ajaxOptions, thrownError) {*/
/* 							alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 						}*/
/* 					});*/
/* 				}*/
/*               {% else %}*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=checkout/payment_method',*/
/* 					dataType: 'html',*/
/* 					complete: function() {*/
/* 						$('#button-guest').button('reset');*/
/* 					},*/
/* 					success: function(html) {*/
/* 						$('#collapse-payment-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/*               {% endif %}*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* // Guest Shipping*/
/* $('#collapse-shipping-address').on('click', '#button-guest-shipping', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/guest_shipping/save',*/
/* 		type: 'post',*/
/* 		data: $('#collapse-shipping-address input[type=\'text\'], #collapse-shipping-address input[type=\'date\'], #collapse-shipping-address input[type=\'datetime-local\'], #collapse-shipping-address input[type=\'time\'], #collapse-shipping-address input[type=\'password\'], #collapse-shipping-address input[type=\'checkbox\']:checked, #collapse-shipping-address input[type=\'radio\']:checked, #collapse-shipping-address textarea, #collapse-shipping-address select'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-guest-shipping').button('loading');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* 			$('.form-group').removeClass('has-error');*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-guest-shipping').button('reset');*/
/* */
/* 				if (json['error']['warning']) {*/
/* 					$('#collapse-shipping-address .panel-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* */
/* 				for (i in json['error']) {*/
/* 					var element = $('#input-shipping-' + i.replace('_', '-'));*/
/* */
/* 					if ($(element).parent().hasClass('input-group')) {*/
/* 						$(element).parent().after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					} else {*/
/* 						$(element).after('<div class="text-danger">' + json['error'][i] + '</div>');*/
/* 					}*/
/* 				}*/
/* */
/* 				// Highlight any found errors*/
/* 				$('.text-danger').parent().addClass('has-error');*/
/* 			} else {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=checkout/shipping_method',*/
/* 					dataType: 'html',*/
/* 					complete: function() {*/
/* 						$('#button-guest-shipping').button('reset');*/
/* 					},*/
/* 					success: function(html) {*/
/* 						$('#collapse-shipping-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-shipping-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-shipping-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_shipping_method }} <i class="fa fa-caret-down"></i>');*/
/* */
/* 						$('a[href=\'#collapse-shipping-method\']').trigger('click');*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('{{ text_checkout_payment_method }}');*/
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-shipping-method').on('click', '#button-shipping-method', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/shipping_method/save',*/
/* 		type: 'post',*/
/* 		data: $('#collapse-shipping-method input[type=\'radio\']:checked, #collapse-shipping-method textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-shipping-method').button('loading');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-shipping-method').button('reset');*/
/* */
/* 				if (json['error']['warning']) {*/
/* 					$('#collapse-shipping-method .panel-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			} else {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=checkout/payment_method',*/
/* 					dataType: 'html',*/
/* 					complete: function() {*/
/* 						$('#button-shipping-method').button('reset');*/
/* 					},*/
/* 					success: function(html) {*/
/* 						$('#collapse-payment-method .panel-body').html(html);*/
/* */
/* 						$('#collapse-payment-method').parent().find('.panel-heading .panel-title').html('<a href="#collapse-payment-method" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_payment_method }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-payment-method\']').trigger('click');*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('{{ text_checkout_confirm }}');*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* */
/* $('#collapse-payment-method').on('click', '#button-payment-method', function() {*/
/* 	$.ajax({*/
/* 		url: 'index.php?route=checkout/payment_method/save',*/
/* 		type: 'post',*/
/* 		data: $('#collapse-payment-method input[type=\'radio\']:checked, #collapse-payment-method input[type=\'checkbox\']:checked, #collapse-payment-method textarea'),*/
/* 		dataType: 'json',*/
/* 		beforeSend: function() {*/
/* 			$('#button-payment-method').button('loading');*/
/* 		},*/
/* 		success: function(json) {*/
/* 			$('.alert-dismissible, .text-danger').remove();*/
/* */
/* 			if (json['redirect']) {*/
/* 				location = json['redirect'];*/
/* 			} else if (json['error']) {*/
/* 				$('#button-payment-method').button('reset');*/
/* */
/* 				if (json['error']['warning']) {*/
/* 					$('#collapse-payment-method .panel-body').prepend('<div class="alert alert-danger alert-dismissible">' + json['error']['warning'] + '<button type="button" class="close" data-dismiss="alert">&times;</button></div>');*/
/* 				}*/
/* 			} else {*/
/* 				$.ajax({*/
/* 					url: 'index.php?route=checkout/confirm',*/
/* 					dataType: 'html',*/
/* 					complete: function() {*/
/* 						$('#button-payment-method').button('reset');*/
/* 					},*/
/* 					success: function(html) {*/
/* 						$('#collapse-checkout-confirm .panel-body').html(html);*/
/* */
/* 						$('#collapse-checkout-confirm').parent().find('.panel-heading .panel-title').html('<a href="#collapse-checkout-confirm" data-toggle="collapse" data-parent="#accordion" class="accordion-toggle">{{ text_checkout_confirm }} <i class="fa fa-caret-down"></i></a>');*/
/* */
/* 						$('a[href=\'#collapse-checkout-confirm\']').trigger('click');*/
/* 					},*/
/* 					error: function(xhr, ajaxOptions, thrownError) {*/
/* 						alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 					}*/
/* 				});*/
/* 			}*/
/* 		},*/
/* 		error: function(xhr, ajaxOptions, thrownError) {*/
/* 			alert(thrownError + "\r\n" + xhr.statusText + "\r\n" + xhr.responseText);*/
/* 		}*/
/* 	});*/
/* });*/
/* //--></script>*/
/* {{ footer }}*/

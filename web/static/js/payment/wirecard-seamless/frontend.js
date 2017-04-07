var wirecardSeamlessHandler = {
    init: function() {
        this.initEvents();
    },

    initEvents: function() {
        $('#js-wirecard-show-cc-form').on('click', function(e){

            var wd = new WirecardCEE_DataStorage();
            wd.buildIframeCreditCard('creditcardDataIframe', '100%', '170px');
            $('#js-wirecard-show-cc-form').hide();
            $('#js-wirecard-submit-cc-form').show();
        });

        $('#js-wirecard-submit-cc-form').on('click', function(e){

            wirecardSeamlessHandler.storeCreditCardDataToSession();
        });

        $('.js-wirecard-payment-submit').on('click', function(e){
            e.preventDefault();
            var form = $(this).closest('form');
            var container = form.closest('.payment-accordion');
            var paymentType = form.find(".payment-type").val();
            var serializedForm = form.serialize();
            //console.log($('.birthDate').val());
            if(paymentType == 'INVOICE'){
                if($('#invoice_checkbox').prop('checked')){
                    $('.wirecard-checkbox-error').hide();
                } else {
                    $('.wirecard-checkbox-error').show();
                }
            }

            if(paymentType == 'INVOICE' && ($('.birthDate').val() == '0' || $('.birthMonth').val()  == '0' || $('.birthYear').val()  == '' || $('.birthDate').val() == '' || $('.birthMonth').val()  == '' || $('.birthYear').val()  == '')) {
                $('.invoice-birthday-error').show()
            } else if(paymentType == 'INVOICE' && $('#invoice_checkbox').prop('checked') == false) {
                $('.wirecard-checkbox-error').show();
            } else if(paymentType == 'PREPAYMENT') {
                $('.wirecard-error').hide();
            } else {
                $('.js-error').remove();

                if($(this).data('validate-url')) {
                    $('.wirecard-error').hide();
                    $('.wirecard-checkbox-error').hide();

                    var validateUrl = $(this).data('validate-url');

                    $.ajax({
                        url: validateUrl,
                        data:serializedForm,
                        dataType: 'json',
                        success: function (data) {
                            if(data.ok) {
                                wirecardSeamlessHandler.startPayment(container, serializedForm);
                            } else {
                                var errors = '<ul>';
                                $.each(data.errors, function(i,error){
                                    errors += '<li>' + error + '</li>';
                                });
                                errors += '</ul>';

                                $('#payolution-birthday').prepend($('<div class="alert alert-danger js-error" style="margin-top: 10px;">' + errors + '</div>'));
                            }
                        }
                    });
                } else {
                    wirecardSeamlessHandler.startPayment(container, serializedForm);
                }
            }

        });


    },

    startPayment: function(container, serializedForm) {
        console.log("start payment");

        $('.wirecard-error').hide();
        $('.wirecard-checkbox-error').hide();
        container.html(wirecardSeamlessHandler.getLoadingDiv());
        wirecardSeamlessHandler.scrollTo(container);

        $.get(container.data('generate-redirect-url') + '?' + serializedForm)
            .then((function (response) {
                if(response.url){
                    window.location.href = response.url;
                }
            }));
    },

    storeCreditCardDataToSession: function() {
        var dataStorage = new WirecardCEE_DataStorage();

        var resultDiv = $('#wirecard-cc-result');

        var container = resultDiv.closest('.payment-accordion');
        $('.cc-error').remove();
        wirecardSeamlessHandler.scrollTo(container);

        window.name='wirecard_checkout_topwindow';

        dataStorage.storeCreditCardInformation(null, callbackFunction);

        function callbackFunction(response) {
            if (!response.getErrors()) {
                container.addClass('ajax-loading').html(wirecardSeamlessHandler.getLoadingDiv());
                wirecardSeamlessHandler.scrollTo(container);
                $.get(container.data('generate-redirect-url') + '?paymentType=CCARD')
                    .then((function (response) {
                        resultDiv.prepend(wirecardSeamlessHandler.getLoadingDiv());
                        if (response.url) {
                            window.location.href = response.url;
                        }
                    }));
            } else {
                var errors = '<ul>';
                $.each(response.getErrors(), function(i,error){
                    errors += '<li>' + error.consumerMessage + '</li>';
                });
                errors += '</ul>';
                resultDiv.removeClass('ajax-loading');
                $('.wirecard-seamless-loading').replaceWith($('<div class="alert alert-danger cc-error">' + errors + '</div>'));
            }


        }
    },

    getLoadingDiv: function() {
        return '<div class="wirecard-seamless-loading ajax-loader"></div>';
    },

    scrollTo: function(element) {
        $('html, body').animate({
            scrollTop: element.offset().top - 100
        }, 500);
    }
};

$(function(){
    wirecardSeamlessHandler.init();
});

(function($){
    $.fn.serializeObject = function () {
        "use strict";

        var result = {};
        var extend = function (i, element) {
            var node = result[element.name];

            // If node with same name exists already, need to convert it to an array as it
            // is a multi-value field (i.e., checkboxes)

            if ('undefined' !== typeof node && node !== null) {
                if ($.isArray(node)) {
                    node.push(element.value);
                } else {
                    result[element.name] = [node, element.value];
                }
            } else {
                result[element.name] = element.value;
            }
        };

        $.each(this.serializeArray(), extend);
        return result;
    };
})(jQuery);
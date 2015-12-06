(function() {

    $payment = jQuery.noConflict();

    var StripeBilling = {
        init: function()
        {
           this.form = $payment('#billing-form');
           this.submitButton = this.form.find('button[type=submit]');
           this.submitButtonValue = this.submitButton.val();
           this.form.find('.payment-errors').hide();

           var stripeKey = $payment('meta[name="publishable-key"]').attr('content');

           Stripe.setPublishableKey(stripeKey);

           this.bindEvents();
        },

        bindEvents: function()
        {
            this.form.on('submit', $payment.proxy(this.sendToken, this));
        },

        sendToken: function(event)
        {
            this.submitButton.hide();

            this.form.find('.progress').show();

            Stripe.createToken(this.form, $payment.proxy(this.stripeResponseHandler, this));

            event.preventDefault();
        },

        stripeResponseHandler: function(status, response)
        {
            if (response.error)
            {    
                this.form.find('.payment-errors').show().text(response.error.message);

                this.form.find('.progress').hide();

                return this.submitButton.show();
            }

            $payment('<input>',{
                type: 'hidden',
                name: 'token',
                value: response.id
            }).appendTo(this.form);

            this.form[0].submit();
        }
    };

    StripeBilling.init();
})();
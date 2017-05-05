  $(document).ready(function() {
	'use strict';
    $('#contact_form').bootstrapValidator({
        // To use feedback icons, ensure that you use Bootstrap v3.1.0 or later
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            first_name: {
                validators: {
                        stringLength: {
                        	min: 2,
                    	},
                        notEmpty: {
                        	message: 'Please supply your first name'
                    	}
                }
            },
            
        }
	})
        .on('success.form.bv', function(e) {
            $('#success_message').slideDown({ opacity: "show" }, "slow"); // Do something ...
                $('#contact_form').data('bootstrapValidator').resetForm();

            // Prevent form submission
            e.preventDefault();

            // Get the form instance
            var $form = $(e.target);

            // Use Ajax to submit form data
            $.post($form.attr('action'), $form.serialize(), function(result) {
                console.log(result);
            }, 'json');
        });
});
// JavaScript Document
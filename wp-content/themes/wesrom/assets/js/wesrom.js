(function ($) {

    $(document).ready(function ($) {
        $(document).on('click', '#request-form .form-button', submitForm);
    });

    var submitForm = (e) => {
        e.preventDefault();
        let valid, $form = $(e.target).closest('form');
        valid = validateForm($form);

        if (valid) {
            console.log("Fom submitted");
        } else {
            $('html, body').animate({
                scrollTop: $("#request-form").offset().top
            }, 1500);
        }
    };

    var validateForm = ($form) => {
        let name, email, website, valid = true;
        $('.form-error').remove();

        name = document.requestform.fullName.value;
        email = document.requestform.email.value;
        website = document.requestform.website.value;

        if (name === "") {
            $form.find('#fullName').after(`<span class="form-error">${errors.required}</span>`);
            valid = false;
        }

        if (email === "") {
            $form.find('#email').after(`<span class="form-error">${errors.required}</span>`);
            valid = false;
        } else if (!/\S+@\S+\.\S+/.test(email)) {
            $form.find('#email').after(`<span class="form-error">${errors.email}</span>`);
            valid = false;
        }

        if (website !== '') {
            try {
                url = new URL(website);
            } catch (e) {
                $form.find('#website').after(`<span class="form-error">${errors.website}</span>`);
                valid = false;
            }
        }

        return valid;
    };
})(jQuery);
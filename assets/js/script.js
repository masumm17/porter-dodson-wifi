(function($){
    $(document).ready(function(){
        var emailFilter = /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/;
        $('.form-field input[type="text"], .form-field input[type="email"]').on("focusin", function(e){
            $(this).closest(".form-field ").addClass("hide-label");
        });
        $('.form-field input[type="text"], .form-field input[type="email"]').on("focusout", function(e){
            !$(this).val() && $(this).closest(".form-field ").removeClass("hide-label");
        });
        $(".footer-title").on("click", function(e){
            $(".footer-content").slideToggle(250, function(){
                $(".footer").toggleClass("toogle-shown");
            });
        });
        $(".main-form").on("submit", function(e){
            var $firstName = $("#first-name");
            var $lastName = $("#last-name");
            var $email = $("#email");
            var $terms = $("#terms-conditions");
            var submit = true;
            e.preventDefault();
            $(this).removeClass('form-submitting');
            if(!$firstName.val()){
                $firstName.closest(".form-field").addClass('has-error');
                submit = false;
            }else{
                $firstName.closest(".form-field").removeClass('has-error');
            }
            
            if(!$lastName.val()){
                $lastName.closest(".form-field").addClass('has-error');
                submit = false;
            }else{
                $lastName.closest(".form-field").removeClass('has-error');
            }
            
            if(!$email.val() || ! emailFilter.test($email.val())){
                $email.closest(".form-field").addClass('has-error');
                submit = false;
            }else{
                $email.closest(".form-field").removeClass('has-error');
            }
            
            if(!$terms.prop("checked")){
                $terms.closest(".form-field").addClass('has-error');
                submit = false;
            }else{
                $terms.closest(".form-field").removeClass('has-error');
            }
            if(!submit){
                return false;
            }
            $(this).addClass('form-submitting');
            $.ajax({
                url: '/',
                method: "post",
                data: {
                    'submitted': 1,
                    'ajax_sub': 1,
                    'first_name': $firstName.val(),
                    'last_name': $lastName.val(),
                    'email': $email.val()
                },
                dataType: "html",
                success: function(response){
                    $(this).removeClass('form-submitting');
                    if(!response){
                        console.log("Failed!");
                        return;
                    }
                    if("NOTOK" === response.status){
                        alert('Failed');
                        return;
                    }
                    window.location.href = 'https://www.porterdodson.co.uk/';
                }
            }).fail(function() {
                console.log("Failed!");
            });
            return false;
        });
    });
})(jQuery);
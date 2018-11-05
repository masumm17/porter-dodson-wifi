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
            
            if(!$firstName.val()){
                $firstName.closest(".form-field").addClass('has-error');
            }else{
                $firstName.closest(".form-field").removeClass('has-error');
            }
            
            if(!$lastName.val()){
                $lastName.closest(".form-field").addClass('has-error');
            }else{
                $lastName.closest(".form-field").removeClass('has-error');
            }
            
            if(!$email.val() || ! emailFilter.test($email.val())){
                $email.closest(".form-field").addClass('has-error');
            }else{
                $email.closest(".form-field").removeClass('has-error');
            }
            
            if(!$terms.prop("checked")){
                $terms.closest(".form-field").addClass('has-error');
            }else{
                $terms.closest(".form-field").removeClass('has-error');
            }
            e.preventDefault();
            return false;
        });
    });
})(jQuery);
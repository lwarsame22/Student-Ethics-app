jQuery.noConflict();
(function ($) {
    "use strict";
    var h = $(document).height();
    $('#sidebar').css({height: h+'px'});
    /*==================================================================
    [ Validate ]*/
    var input = $('.validate-input .input100');
    var input1 = $('.validate-input1 .input100');
    var inputc = $('.validate-input .required');
    //var input1 = $('.validate-input1 .input100');

    $('.validate-formc').on('submit',function(){
        var check = true;

        for(var i=0; i<inputc.length; i++) {
            if(validate(inputc[i]) == false){
                showValidate(inputc[i]);
                check=false;
            }
        }

        return check;
    });

    $('.validate-form').on('submit',function(){
        var check = true;

        for(var i=0; i<input.length; i++) {
            if(validate(input[i]) == false){
                showValidate(input[i]);
                check=false;
            }
        }

        return check;
    });

    $('.validate-form1').on('submit',function(){
        var check = true;

        for(var i=0; i<input1.length; i++) {
            if(validate(input1[i]) == false){
                showValidate(input1[i]);
                check=false;
            }
        }

        return check;
    });


    $('.validate-form .input100').each(function(){
        $(this).focus(function(){
           hideValidate(this);
        });
    });

    $('.validate-form1 .input100').each(function(){
        $(this).focus(function(){
            hideValidate(this);
        });
    });

    function validate (input) {
        if($(input).attr('type') == 'email' || $(input).attr('name') == 'email') {
            if($(input).val().trim().match(/^([a-zA-Z0-9_\-\.]+)@rgu.ac.uk$/) == null) {
                return false;
            }
        }
        else {
            if($(input).val().trim() == ''){
                return false;
            }
        }
    }

    function showValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).addClass('alert-validate');
    }

    function hideValidate(input) {
        var thisAlert = $(input).parent();

        $(thisAlert).removeClass('alert-validate');
    }








})(jQuery);

function fileValidation() {
    var fileInput = document.getElementById('file');
    var filePath = fileInput.value;
    var allowedExtensions = /(\.pdf|\.docx|\.txt|\.ppt)$/i;
    if (!allowedExtensions.exec(filePath)) {
        alert('Please upload file having extensions .pdf/.docx/.txt/.ppt only.');
        fileInput.value = '';
        return false;
    }
}
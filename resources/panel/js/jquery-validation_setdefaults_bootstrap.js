//incluir antes da funcao de validar

$.validator.setDefaults({
    highlight: function(element) {
        $(element).closest('.input-jqv').addClass('is-invalid');
    },
    unhighlight: function(element) {
        $(element).closest('.input-jqv').removeClass('is-invalid');
    },
    errorElement: 'span',
    errorClass: 'invalid-feedback d-block',
    errorPlacement: function(error, element) {
        if(element.parent('.input-group').length) {
            error.insertAfter(element.parent());
        } else {
            error.insertAfter(element);
        }
    }
});

$.validator.addMethod(
    "dateFormat",
    function(value, element) {
        var check = false;
        var currentYear = new Date().getFullYear();
        var re = /^\d{1,2}\/\d{1,2}\/\d{4}$/;
            if( re.test(value)){
                var adata = value.split('/');
                var dd = parseInt(adata[0],10);
                var mm = parseInt(adata[1],10);
                var yyyy = parseInt(adata[2],10);
                var xdata = new Date(yyyy,mm-1,dd);
                if ( ( xdata.getFullYear() === yyyy ) && ( xdata.getMonth () === mm - 1 ) && ( xdata.getDate() === dd ) ) {
                    check = true;
                    if(yyyy < currentYear - 120 || yyyy > currentYear)
                        check = false;
                }
            else {
                check = false;
            }
        } else {
        check = false;
        }
        return this.optional(element) || check;
    },
    "Data Inválida. Corrija."
);
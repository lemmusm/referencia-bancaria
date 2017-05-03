$(document).ready(function() {
    $("#resultado").hide();
    
/*Algoritmo Alumnos*/
    $("#formAlumnos").validate({
        debug: true,
        rules: {
            conceptoTxt: { required: true,},
            matriculaTxt: { required: true, number: true, minlength: 9, maxlength: 9}
        },
        messages: {
            conceptoTxt: "Elige el concepto a pagar",
            matriculaTxt: "Solo numeros 0-9, Min./max. 9 caracteres",
        },
        submitHandler: function(form){
            var dataString = 'conceptoTxt='+$('#concepto').val()+'&matriculaTxt='+$('#matricula').val();
            $.ajax({
                type: "POST",
                url:"procesoAlumno.php",
                data: dataString,
                success: function(data){
                    $("#resultado").html(data);
                    $("#resultado").show();
                }
            });
        }
    });

/*Algoritmo Aspirantes*/
    $("#formAspirantes").validate({
            debug: true,
            rules: {
                conceptoTxt: { required: true,},
                matriculaTxt: { required: true, number: true, minlength: 9, maxlength: 9}
            },
            messages: {
                conceptoTxt: "Elige el concepto a pagar",
                matriculaTxt: "Solo numeros 0-9, Min./max. 5 caracteres",
            },
            submitHandler: function(form){
                var dataString = 'conceptoTxt='+$('#concepto').val()+'&matriculaTxt='+$('#matricula').val();
                $.ajax({
                    type: "POST",
                    url:"procesoAlumno.php",
                    data: dataString,
                    success: function(data){
                        $("#resultado").html(data);
                        $("#resultado").show();
                    }
                });
            }
        });
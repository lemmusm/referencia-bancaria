     $(document).ready(function(){

         /*Algoritmo Alumnos*/

        $('#formAlumnos').validate({
            rules :{

                conceptoTxt : {
                 required :true,
                },

                matriculaTxt : {
                required : true,
                digits: true,
                minlength : 9, //para validar campo con minimo 3 caracteres
                maxlength : 9 //para validar campo con maximo 9 caracteres
                }

            }
        });

        /*Algoritmo Aspirantes*/

        $('#formAspirantes').validate({
            rules :{

                conceptoTxtAspirante : {
                 required :true,
                },

                fichaTxt : {
                required : true,
                digits: true,
                minlength : 5, //para validar campo con minimo 3 caracteres
                maxlength : 5 //para validar campo con maximo 9 caracteres
                }

            }
        });
     });
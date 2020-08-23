
      <!--JavaScript at end of body for optimized loading-->
     <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script> 
      <script src="jquery/jquery-3.3.1.slim.min.js" ></script>
        <script src="mask/jquery.mask.min.js" ></script>
       <script src="./jquery/jquery-validation/dist/jquery.validate.min.js"></script>
  	   <script src="./jquery/jquery-validation/dist/localization/messages_pt_BR.js"></script>
	   <script src="./jquery/jquery-validation/dist/additional-methods.min.js"></script>
	   <script src="popper/popper.min.js" ></script>

      <script>
      	M.AutoInit();



      	 $(document).ready(function(){
            $('#cadastro').validate({
                rules:{
                    nome:{
                        maxlength:30,
                        minlength:10,
                        minWords:2,
                        required:true
                    },
                    email:{
                        minlength:10,
                        required:true
                    },
                    CEP:{
                        minlength:9,
                        required:true
                    },
                    idade:{
                        required:true
                    },
                    telefone:{
                        minlength:10
                      
                    }
                } 
            })
        })

      	 $(document).ready(function(){

      $('#CEP').mask('00000-0000');
      $('#telefone').mask('(00)00000-0000');

  		})

      </script>

    </body>
  </html>
        
<?php
//conexao com o banco de dados
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "crud";

$con = mysqli_connect($servidor, $usuario, $senha, $banco);
mysqli_set_charset($con, "utf8");

if(mysqli_connect_error()):
	echo "Erro na conexao: ".mysqli_connect_error();
endif;

	function mudarData( $idade ) {
		//explodir por -
		$idade = explode("-",$idade);
		$idade = $idade[2]."/".$idade[1]."/".$idade[0];
		return $idade;
	}

?>

	<script>
	jQuery.validator.addMethod('telefone', function (value, element) {
    value = value.replace("(","");
    value = value.replace(")", "");
    value = value.replace("-", "");
    value = value.replace(" ", "").trim();
    if (value == '0000000000') {
        return (this.optional(element) || false);
    } else if (value == '00000000000') {
        return (this.optional(element) || false);
    }
    if (["00", "01", "02", "03", , "04", , "05", , "06", , "07", , "08", "09", "10"]
    .indexOf(value.substring(0, 2)) != -1) {
        return (this.optional(element) || false);
    }
    if (value.length < 10 || value.length > 11) {
        return (this.optional(element) || false);
    }
    if (["6", "7", "8", "9"].indexOf(value.substring(2, 3)) == -1) {
        return (this.optional(element) || false);
    }
    return (this.optional(element) || true);
}, 'Informe um número de telefone celular válido!');
//Nosso formulário, pronto para ser validado
$( "#formularioValidaTelefoneCelular" ).validate({
  debug: true,
  rules: {
    telefone: {
      required: true,
                  celular: true,
                }
  }
});
</script>
<?php 

$banco = "banco.txt";

$conteudo = $_POST["titulo"]. "\n" .$_POST["temporadas"]. "\n" .$_POST["genero"]."\n" .$_POST["produtor"]."\n" .$_POST["data_lancamento"]. "\n". str_replace("\n", "<br>", $_POST["sinopse"]) . "\n"; 

$criar = fopen($banco, "a+");

fwrite($criar, $conteudo);

if($criar == true){
    echo "<script language='javascript' type='text/javascript'>
    alert('Dados cadastrados com sucesso!')
    window.location.href='./select.php'</script>";
}else{
    echo "<script language='javascript' type='text/javascript'>
    alert('Erro ao cadastrar com dados!')
    window.location.href='./divulgacao/index.php'</script>";
}
fclose($criar);

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/styl.css">
    <title>Séries</title>
</head>
<body>

    <div class="header">
            <div class="logo">
                <a href="./divulgacao/index.php">
                    <img src="assets/img/sflixlogo.png" alt="logo da sériesflix">
                </a>
            </div>
            <nav>
            <ul class="menu">
                <li><a href="./select.php">Mostrar Séries</a></li>
                <li><a href="#">Gênero</a></li>
                <li><a href="#">Produtor</a></li>
            </ul>
            </nav>
    </div>
<?php 

$banco = "banco.txt";

echo "<center class='titulo_registros'>Registro cadastrados na base de dados<br></center>";
echo "</br>";

if(file_exists($banco) && !empty(file_get_contents($banco))){
    $lista = explode("\n", file_get_contents($banco));
    $informacoes = 6; //quantidade de campos
    unset($lista[count($lista)-1]);
    $conjunto = 1;

    echo "<center><section class='table_body'> <table> <thead>";
    date_default_timezone_set("America/Sao_Paulo");
    echo "<meta charset='UTF-8'>";

    echo "<tr><th>Código</th><th>Título</th><th>Temporadas</th><th>Gênero</th><th>Produtor</th><th>Data Lançamento</th><th>Sinopse</th><th>Ações</th></tr> <thead>";
    for ($i=0; $i<count($lista); $i+=$informacoes){
        echo "<tbody> <tr>";
        echo "<td id='$conjunto'>$conjunto</td>";

        for($j=$i; $j<$i+$informacoes; $j++){
            echo "<td>{$lista[$j]}</td>";
        }
        
        echo "<td><a href='delete.php?codigo=$conjunto'><img src='assets/img/delete.png' alt='Deletar' title='Deletar registro'></a>
        <a href='monta.php?codigo=$conjunto'><img src='assets/img/editar.png' alt='Atualizar' title='Atualizar registro'></a>
        <a href='../index.php'><img src='assets/img/delete.png' alt='Inserir' title='Inserir registro'></a></td>";
        echo "</tr>";

        $conjunto++;
    }
    echo " <tbody> </table> </section>";
    echo "<footer id='footer'>";
    echo "</footer>";

}else{
    echo "<br><br><p aling=center>Ainda não há nenhum registro!</p>";
}

?>

</body>
</html>
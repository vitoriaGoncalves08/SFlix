<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="./assets/img/Sflixlogo.png" type="image/x-icon">
    <link rel="stylesheet" href="./../assets/css/style.css">
    <title>Monta</title>
</head>
<body>
    <?php
        $banco = "banco.txt";
        if (isset($_GET['codigo'])) {
            if (file_exists($banco) && !empty(file_get_contents($banco))) {
                $lista = explode("\n", file_get_contents($banco));
                $informacoes = 6; //quantidade de informações. Neste caso tem 4 : nome, email, data e mensagem
                $conjunto = $informacoes * ($_GET['codigo'] - 1);

                $titulo = $lista[$conjunto];
                $temporadas = $lista[$conjunto + 1];
                $genero = $lista[$conjunto + 2];
                $produtor = $lista[$conjunto + 3];
                $data_lancamento = $lista[$conjunto + 4];
                $sinopse = str_replace("<br>", "\n", $lista[$conjunto + 5]); // desfaz a mágica do multiline para ficar bonitinho no campo
            }
        }
    ?>
    <div class="container">
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
        <div class="form">
            <form action="update.php" method="POST">
                    <div class="title">
                        <h1>SériesFlix</h1>
                    </div>

                <div class="input-group">
                    <div class="input-box">
                    <input type="number" id="codigo" name="codigo" placeholder="<?php echo $_GET['codigo'];?>" value="<?php echo $_GET['codigo'];?>" hidden>

                      <input class="input-item" id="titulo" type="text" titulo="titulo" placeholder="<?php echo $titulo;?>" value="<?php echo $titulo;?>" required>
                    
                        <input class="input-item" id="temporadas" type="number" name="temporadas" placeholder="<?php echo $temporadas;?>" value="<?php echo $temporadas;?>" required>
                  
                        <input class="input-item" id="genero" type="text" name="genero" placeholder="<?php echo $genero;?>" value="<?php echo $genero;?>" required>
                        
                        <input class="input-item" id="produtor" list="produtores" name="produtor" placeholder="<?php echo $produtor;?>" value="<?php echo $produtor;?>" required>
                        <datalist id="produtores">
                            <option value="ABC"></option>
                            <option value="Fox"></option>
                            <option value="Sony"></option>
                            <option value="SFlix"></option>
                        </datalist>
                    
                        <input class="input-item" id="data_lancamento" type="date" name="data_lancamento" placeholder="<?php echo $data_lancamento;?>" min=1946-01-01 value="<?php echo $data_lancamento;?>" required>
                       
               
                        <textarea id="sinopse" name="sinopse" size="52" maxlength="150" placeholder="Digite a sinópse da série"><?php echo $sinopse;?></textarea>
                    </div>
                </div>

                <div class="continue-button">
                    <input name="Submit" type="submit" class="btn" value="Alterar">
                </div>
            </form>
        </div>
    </div>

    
</body>
</html>
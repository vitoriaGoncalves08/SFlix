<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="./assets/img/Sflixlogo.png" type="image/x-icon">
    <title>Formulário</title>
</head>

<body>
    <div class="container">
    <div class="header">
        <div class="logo">
            <a href="#">
                <img src="assets/img/sflixlogo.png" alt="logo da sériesflix">
            </a>
        </div>
        <nav>
        <ul class="menu">
            <li><a href="./divulgacao/select.php">Mostrar Séries</a></li>
            <li><a href="#">Gênero</a></li>
            <li><a href="#">Produtor</a></li>
        </ul>
        </nav>
    </div>
        <div class="form">
            <form action="./divulgacao/create.php" method="POST">
                    <div class="title">
                        <h1>SériesFlix</h1>
                    </div>

                <div class="input-group">
                    <div class="input-box">
                        <input class="input-item" name="titulo" id="titulo" type="text" titulo="titulo" placeholder="Digite o seu nome da série" required>
                    
                        <input class="input-item" id="temporadas" type="number" name="temporadas" placeholder="Digite o número de temporadas" required>
                  
                        <input class="input-item" id="genero" type="text" name="genero" placeholder="Digite o gênero da série" required>
                        
                        <input class="input-item" id="produtor" list="produtores" name="produtor" placeholder="Digite a produtora da série" required>
                        <datalist id="produtores">
                            <option value="ABC"></option>
                            <option value="Fox"></option>
                            <option value="Sony"></option>
                            <option value="SFlix"></option>
                        </datalist>
                    
                        <input class="input-item" id="data_lancamento" type="date" name="data_lancamento" placeholder="Digite o data de lançamento da série" min=1946-01-01 required>
                       
               
                        <textarea id="sinopse" name="sinopse" size="52" maxlength="150" placeholder="Digite a sinópse da série"></textarea>
                    </div>

                </div>

                <div class="continue-button">
                    <input name="Submit" type="submit" class="btn" value="Cadastrar">
                </div>
                <!-- <div class="continue-button">
                <a href="select.php" class="btn">Selecionar</a>
                </div> -->
            </form>
        </div>
    </div>
</body>

</html>
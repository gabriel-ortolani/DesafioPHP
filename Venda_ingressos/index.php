<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Venda de ingreços</title>
</head>
<body>
    <div class="formulario">
        <h1>Venda dos ingressos</h1>
        <form method="POST">
            <ul>
                <li><input type="text" name="nome" placeholder="digite seu nome" require></li>
                <li><input type="number" name="idade" placeholder="digite sua idade" require></li>
                <li>
                    <select name="ingresso" id="vip">
                        <option value="1">Vip</option>
                        <option value="2">Regular</option>
                        <option value="3">Basico</option>
                    </select>
                </li>
                <button type="submit" class="enviar">Enviar</button>
            </ul>
        </form>
        <?php
            $ingresso = "<p>nenhum selecionado</p>";
            $nome = "<p>não inserido</p>";
            $idade = 19;
            $preco =0.00;
            if(isset($_POST["nome"])){
                $nome = $_POST["nome"];
            }
            if(isset($_POST["idade"])){
                $idade = $_POST["idade"];
            }
            if(isset($_POST["ingresso"])){
                $ingresso = $_POST["ingresso"];
            }
            if ($idade < 18){
                echo "<p>vanda não permitida para menores de idade</p>";
            }
            else{
            switch($ingresso){
                case 1:
                    $ingresso = "Vip";
                    $preco = 100.00;
                break;

                case 2:
                    $ingresso = "Regular";
                    $preco = 50.00;
                break;

                case 3:
                    $ingresso = "Basico";
                    $preco = 20.00;
                break;

                default:
                exit;
            } 
            }
            if($idade > 18){
                echo "<p>Bem-vindo $nome </p>";
                echo "<p>Tipo de ingresso: $ingresso<br> Preço: R$" . number_format($preco, 2,',');
            }
            else{
                echo "";
            }
        ?>
    </div>
</body>
</html>
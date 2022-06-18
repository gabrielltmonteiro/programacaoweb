<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário Veicular</title>
    <style>
        body{
            font-family: Arial, Helvetica, sans-serif;
            margin:0;
            position: relative;
            height: 100vh;
            width: 100vw;
            background-image: linear-gradient(to right, rgb(20, 147, 220), rgb(17, 54, 71));
            background:url('antique.jpg');
            background-size: cover;
        }

        .box{
            color: white;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-60%);
            background-color: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 15px;
            width: 20%;
        }
        fieldset{
            border: 3px solid rgb(255, 109, 30);
            border-radius: 15px;
        }
        legend{
            border: 1px solid rgb(255, 109, 30);
            padding: 10px;
            text-align: center;
            background-color: rgb(255, 109, 30);
            border-radius: 8px;
        }
        .inputBox{
            position: relative;
        }
        .inputCar{
            background: none;
            border: none;
            border-bottom: 1px solid white;
            outline: none;
            color: white;
            font-size: 15px;
            width: 100%;
            letter-spacing: 2px;
        }
        .labelInput{
            position: absolute;
            top: 0px;
            left: 0px;
            pointer-events: none;
            transition: .3s;
        }
        .inputCar:focus ~ .labelInput,
        .inputCar:valid ~ .labelInput{
            top: -20px;
            font-size: 12px;
            color: rgb(255, 109, 30);
        }

        #submit{
            background-image: linear-gradient(to right,rgb(255, 109, 30), rgb(255, 165, 30));
            width: 100%;
            border: none;
            padding: 15px;
            color: white;
            font-size: 15px;
            cursor: pointer;
            border-radius: 10px;
        }
        #submit:hover{
            background-image: linear-gradient(to right, rgb(255, 165, 30), rgb(255, 109, 30));
        }
    </style>
</head>
<body>
    <div class="box">
        <form action="" method="post">
            <fieldset>
                <legend><b>Fórmulário de Veículos</b></legend>
                <br>
                <div class="inputBox">
                    <input type="text" name="modelo" id="modelo" class="inputCar" required>
                    <label for="nome" class="labelInput">Modelo do automóvel</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="cor" id="cor" class="inputCar" required>
                    <label for="cor" class="labelInput">Cor</label>
                </div>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="fabricante" id="fabricante" class="inputCar" required>
                    <label for="fabricante" class="labelInput">Fabricante</label>
                <br><br>
                <div class="inputBox">
                    <input type="text" name="ano" id="ano" class="inputCar" required>
                    <label for="ano" class="labelInput">Ano</label>
                <br><br>
                <div>
                    <input type="submit" name="submit" id="submit" value="Fazer consulta">
                </div>
            </fieldset>
        </form>
    </div>
    <!--$servername = "mysqldb";
    username = "root";
    $password = "phprs";
    $dbname="phprs"; -->
    <?php 
    if (isset($_POST["modelo"])){
        $modelo = $_POST["modelo"];
        $cor = $_POST["cor"];
        $fabricante = $_POST["fabricante"];
        $ano = $_POST["ano"];
        echo "<b>Cadastro de Automóveis</b><br>Modelo: $modelo<br>Cor: $cor <br>Ano: $ano <br>"; 
        //header("location:dados.php");
    }
    ?>
</body>
</html>


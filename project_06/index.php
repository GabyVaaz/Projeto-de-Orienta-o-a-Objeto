<?php 
 require_once 'classe.php'
 
 
 ?>
<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<link rel="stylesheet" href="style.css">

    <title>Empresa</title>

</head>

<body>
<div id ="corpo">
<form method="POST">
<h1><I>Cadastre -se</I></h1>
<input style="width:200px"type="text" name="nome" value="" placeholder="Digite Nome Completo"/> <br><br>
<input style="width:200px" type="text" name="cidade" value="" placeholder="Digite sua Cidade"/> <br><br>
<input style="width:200px" type="text" name="salHora" value="" placeholder="Digite qual seu salário em horas"/> <br><br>
<input style="width:200px" type="text" name="horasTrab" value="" placeholder="Digite quantas horas trabalhadas"/> <br><br>

<h1><I>Escolha a Operação</I></h1>
<select name="opcao" id="opcao" > 
<option value= "1">Cadastrar</option>
<option value= "2">Calcular Salario</option>
<option value= "3">Dar Aumento </option>
<option value= "4">Mostrar os dados</option>

</select>
<br><br>
<input type="number" name="Aumento" value="" placeholder="Digite Valor"/><br><br>
<input type="submit" name="Enviar" value="Enviar"/><br><br>
<input type="reset" name="Resetar Informações" value="Resetar Informações"><br><br>

<br><br>
<input type="submit" name="Encerrar Seção" value="Encerrar Seção"/>
<br>
</form>
<center>
    <?php

    if(isset($_POST['Enviar'])){
        $funcionario = new Funcionario();
        $funcionario->setNome($_POST['nome']);
        $funcionario->setCidade($_POST['cidade']);
        $funcionario->setSalHora($_POST['salHora']);
        $funcionario->setHorasTrab($_POST['horasTrab']);

        switch ($_POST['opcao']) {
            case 1:
                $resultado = "Funcionario cadastrado com Sucesso!";
                break;
            case 2:
                $resultado = $funcionario->calcularSalario();
                break;
            case 3:
                $resultado = $funcionario->darAumento ($_POST['Aumento']);
                break;
            case 4:
                $resultado = $funcionario->mostrarDados();
                break;
        
            default:
                $resultado = "Escolha uma operação";
                break;
        }

        echo "<span style='color:brown;'>".$resultado."</span>";

    }
    ?>

</center>

    </div>
</body>

</html>
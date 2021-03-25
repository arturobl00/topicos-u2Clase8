<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <title>Semana 8 Formularios Post</title>
</head>
<body>
<div class="jumbotron text-center bg-secondary">
    <h1>Semana 8 Trabajando formularios con el metodo POST</h1>
    <p>Los formularios permiten diseñar interfaces para que el usuario comparta datos con la aplicación. En PHP se utilizan metodos para crear la comunicacion entre
    el cliente y el servidor. Estos metodos son el POST y el GET.</p>
    </div>

    <div class="container">
        <h2>Proyecto Calculadora</h2>
        <form method="POST">
            <div class="mb-3">
                <label class="form-label">Número 1</label>
                <input type="text" class="form-control" value="" name="uno"/>
            </div>
            <div class="mb-3">
                <label class="form-label">Número 2</label>
                <input type="text" class="form-control" value="" name="dos"/>
            </div>
            <div class="mb-3">
                <label class="form-check-label">Operador</label>
                <select class="form-select" name="operador">
                    <option value="+">Suma</option>
                    <option value="-">Resta</option>
                    <option value="*">Multiplicación</option>
                    <option value="/">División</option>
                </select>
            </div>
            <input type="submit" class="btn btn-primary" value="Calcular"/>
        </form>
    </div>
    <br/>
    <div class="container">
    <?php
        if($_POST){
            //Registrar datos con $_REQUEST
            $num1 = $_REQUEST['uno'];
            $num2 = $_REQUEST['dos'];
            $op = $_REQUEST['operador'];

            //Usando solo $_POST
            $alternativa = $_POST["uno"];
            
            switch($op){
                case '+':
                    $result = $num1 + $num2;
                    echo "<h2>El resultado es: ".$result."</h2>";
                break;
                case '-':
                    $result = $num1 - $num2;
                    echo "<h2>El resultado es: ".$result."</h2>";
                break;
                case '*':
                    $result = $num1 * $num2;
                    echo "<h2>El resultado es: ".$result."</h2>";
                break;
                case '/':
                    $result = $num1 / $num2;
                    echo "<h2>El resultado es: ".$result."</h2>";
                break;
            }
        }
    ?>
    </div>
</body>
</html>
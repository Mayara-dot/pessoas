<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>.:Pessoas</title>
</head>
<body>
    <?php
    require_once './classes/Tecnico.php';
    require_once './classes/Bolsista.php';
    require_once './classes/Visitante.php';
    require_once './classes/Professor.php';
    require_once './classes/Pessoa.php';

    $pessoa[0] = new Visitante("Juvenal", 45, "Ele/Dele");
    $pessoa[1] = new Aluno("Marcia", 21, "Ela/Dela", 45895, "Informática");
    $pessoa[2] = new Bolsista("Mariana", 32, "Eles/Deles", "Matemática", 74569, 582.00);


    print_r($pessoa[1]);
    print_r($pessoa[2]);
    $pessoa[1]->pagarMensalidade();
    $pessoa[2]->renovarBolsa();
    $pessoa[2]->pagarMensalidade();

    ?>
    
</body>
</html>
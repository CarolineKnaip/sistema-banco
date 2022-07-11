<?php

require 'funcoes.php';

$contasCorrentes = [
    '123.456.789-10' => [
        'titular' => 'Vinicius',
        'saldo' => 1000
    ],
    '123.456.789-11' => [
        'titular' => 'Maria',
        'saldo' => 10000
    ],
    '123.256.789-12' => [
    'titular' => 'Alberto',
    'saldo' => 300
    ] ];

//contador+= 1 ele mesmo mais 1

$contasCorrentes['123.456.789-10'] = sacar ($contasCorrentes['123.456.789-10'], 500);
$contasCorrentes['123.256.789-12'] = depositar($contasCorrentes['123.256.789-12'], 500);

$contasCorrentes ['123.456.789-11'] = depositar ($contasCorrentes['123.456.789-11'], 900);

unset($contasCorrentes['123.456.789-11']);

titularComLetrasMaiusculas ($contasCorrentes ['123.256.789-12']);

/*echo "<ul>";
foreach ($contasCorrentes as $cpf => $conta){
    exibeConta($conta);
}
 echo "</ul>";
*/
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Contas correntes</h1>

    <dl>
        <?php foreach($contasCorrentes as $cpf => $conta) { ?>
        <dt>
            <h3><?= $conta['titular']; ?> - <?= $cpf; ?></h3>
        </dt>
        <dd>Saldo: <?= $conta['saldo']; ?></dd>
        <?php } ?>
    </dl>
</body>
</html>
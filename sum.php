<?php

if ($_GET['x1'] == "" || $_GET['x2'] == "") {
    echo 'Не переданы аргументы';
    return;
}

$x1 = $_GET['x1'];
$x2 = $_GET['x2'];
$mes = '$x1  $x2';
switch ($_GET['operation']) {
    case '+':
        $mes = "$x1 + $x2 = ";
        $result = $x1 + $x2;
        break;
    case '-':
        $mes = "$x1 - $x2 = ";
        $result = $x1 - $x2;
        break;
    case '*':
        $mes = "$x1 * $x2 = ";
        $result = $x1 * $x2;
        break;
    case '/':
        if($x2 == 0)
        {
            echo 'На ноль не делиться';
            return;
        }
        elseif ($x1 == 0)
        {
            echo 'Ноль нельзя разделить';
            return;
        }
        $mes = "$x1 / $x2 = ";
        $result = $x1 / $x2;
        break;
    case '^':
        $mes = "$x1 ^ $x2 = ";
        $result = pow($x1,$x2);
        break;
    case 'v':
        $mes = "$x1 v $x2 = ";
        $result = pow($x1,1/$x2);
        break;
    default:
        $mes = 'Операция не поддерживается';
        break;
}
?>
<html>
<head>
    <title>Калькулятор</title>
</head>
<body>
<b>Результат:</b>
<br>
<?= $mes . $result ?>
</body>
</html>
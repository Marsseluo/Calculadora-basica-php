<?php 

require_once ('classes/Calculadora.php');

$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$operacao = $_POST['operacao'];

$calculadora = new calculadora();

//setar valores
$calculadora->setNum1($num1);
$calculadora->setNum2($num2);

$calculadora->somar();

switch($operacao){
    case 'somar':
    $calculadora->somar();
    break;
    
    case 'subtrair':
    $calculadora->subtrair();
    break;

    case 'dividir':
    $calculadora->dividir();
    break;

    case 'multiplicar':
    $calculadora->multiplicar();
    break;

}

echo $calculadora->getTotal();

?>
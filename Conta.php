<?php
class Conta
{
  public $numero; // atributos
  public $saldo=0; // atributos

  function deposita(float $valor)
  {
    $this->saldo += $valor;

  }
}

//$x = new Conta();
//$x->numero = 123;
//$x->saldo = 1000;
//echo "Número da conta x: $x->numero" . PHP_EOL;
//echo "Saldo da conta x: $x->saldo" . PHP_EOL;
//$y = new Conta();
//$y->saldo = 560;
//echo "Número da conta y: $y->numero" . PHP_EOL;
//echo "Saldo da conta y: $y->saldo" . PHP_EOL;

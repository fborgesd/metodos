<?php

require 'Conta.php';

$conta = new Conta();
echo "Saldo inicial: $conta->saldo" . PHP_EOL;
$conta->deposita("2000 maçãs");

echo "Saldo da conta: $conta->saldo" . PHP_EOL;

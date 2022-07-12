<?php

include "../model/cliente.php";
include "../model/quarto.php";
include "../model/reserva.php";

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$rg = $_POST['rg'];

$quantidadeDiarias =  $_POST['quantidadeDiarias'];
$nomeQuarto =  $_POST['nomeQuarto'];

$cliente = new Cliente($nome, $email, $telefone, $rg);
$quarto = new Quarto($nomeQuarto);

$reserva = new Reserva($cliente, $quarto, $quantidadeDiarias);

header('Location: ../view/reservaView.php?resultado='.$reserva->toString());



?>
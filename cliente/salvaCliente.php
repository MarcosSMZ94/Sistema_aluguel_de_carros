<?php
# Inicia a sessão.
#session_start();

include_once "../bd.php";

#Recebe parâmetros para inserção no banco:
$flag = 0;
$nomeCliente = $_POST['nomeCliente'];
$dataCliente = $_POST['dataCliente'];
$cpfCliente = $_POST['cpfCliente'];
$cepCliente = $_POST['cepCliente'];
$ruaCliente = $_POST['ruaCliente'];
$bairroCliente = $_POST['bairroCliente'];
$cidadeCliente = $_POST['cidadeCliente'];
$carteiraMotoraCliente = $_POST['carteiraMotoraCliente'];
$senhaCliente = $_POST['senhaCliente'];
$statusCliente = 1;

# Define a constant for the error location
define('ERROR_LOCATION', "location:../cliente/salvaCliente.php?error=salvaCliente");

# Query de inserção:
$query = "INSERT INTO usuario
(data_nascimento, nome, cpf, rua, bairro, cidade, cep, status, senha, tipo) 
VALUES (:dataCliente, :nomeCliente, :cpfCliente, :ruaCliente, :bairroCliente, :cidadeCliente, :cepCliente, :statusCliente, :senhaCliente, 'C')";
$stm = $db->prepare($query);
$stm->bindParam(':dataCliente', $dataCliente);
$stm->bindParam(':nomeCliente', $nomeCliente);
$stm->bindParam(':cpfCliente', $cpfCliente);
$stm->bindParam(':ruaCliente', $ruaCliente);
$stm->bindParam(':bairroCliente', $bairroCliente);
$stm->bindParam(':cidadeCliente', $cidadeCliente);
$stm->bindParam(':cepCliente', $cepCliente);
$stm->bindParam(':statusCliente', $statusCliente);
$stm->bindParam(':senhaCliente', $senhaCliente);

if ($stm->execute()) {
    # Atributo cod_usuario eh autoincrement. Resgata-se ele na proxima query:
    $query = "SELECT cod_usuario FROM usuario WHERE cpf = :cpfCliente";
    $stm = $db->prepare($query);
    $stm->bindParam(':cpfCliente', $cpfCliente);
    if ($stm->execute()) {
        while ($row = $stm->fetch()) {
            $codUsuario = $row['cod_usuario'];
        }
        # Insercao na tabela cliente:
        $query = "INSERT INTO cliente(carteira_de_motorista, cod_cliente) VALUES (:carteiraMotoraCliente, :codUsuario)";
        $stm = $db->prepare($query);
        $stm->bindParam(':carteiraMotoraCliente', $carteiraMotoraCliente);
        $stm->bindParam(':codUsuario', $codUsuario);
        if ($stm->execute()) {
            header("location:../index.php");
        } else {
            header(ERROR_LOCATION);
        }
    } else {
        header(ERROR_LOCATION);
    }
} else {
    header(ERROR_LOCATION);
}


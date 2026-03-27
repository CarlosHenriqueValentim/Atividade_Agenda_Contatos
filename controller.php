<?php
$nome = filter_input(INPUT_POST, var_name: "nome");
$email = filter_input(INPUT_POST, var_name: "email");
$telefone = filter_input(INPUT_POST, var_name: "telefone");
$botao = filter_input(INPUT_POST, var_name: "botao");

include 'data.php';
$data = new Data();
$data->setNome($nome);
$data->setNome($email);
$data->setNome($telefone);

include 'action.php';
$action = new Action();

if($botao=="CADASTRAR"){
    $action->cadastrar($data);

}else if($botao=="CONSULTAR"){
    $action->consultar($data);

}else if ($botao=="ATUALIZAR"){
    $action->atualizar($data);

}else if ($botao=="EXCLUIR"){
    $action->excluir($data);

}
?>
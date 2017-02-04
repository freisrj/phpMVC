<?php

$id = "";
$id_fun = "";
$login = "";
$senha = "";
$acesso = "";
$unidade = "";


$login = $this->getDados("login");
//echo print_r($login);

if ($login){
    $login instanceof Login;
    $id         = $login->getId();
    $id_fun     = $login->getIdFun();
    $login      = $login->getLogin();
    $senha      = $login->getSenha();
    $acesso     = $login->getAcesso();
    $unidade    = $login->getUnidade();
    //$created        = $login->getCreated();
    //$modified       = $login->getModified();
}
?> 

<form method"post" action="<?php echo MAINURL;?>controle-login/salvar">
    <label>Id</label>
    <input type="text" readonly="true" name="txtId" value="<?php echo $id;?>"><br /> 
    <label>Funcionário</label>
    <input type="text" readonly="false" name="txtIdFun" value="<?php echo $id_fun;?>"><br /> 
    <label>Login</label>
    <input type="text" readonly="false" name="txtLogin" value="<?php echo $login;?>"><br /> 
    <label>Senha</label>
    <input type="password" readonly="false" name="txtSenha" value="<?php echo $senha;?>"><br /> 
    <label>Acesso</label>
    <input type="text" readonly="true" name="txtAcesso" value="<?php echo $acesso;?>"><br /> 
    <label>Unidade</label>
    <input type="text" readonly="true" name="txtUnidade" value="<?php echo $unidade;?>"><br /> 
    
    <input type="submit" value="Salvar">
    <a href="<?php echo MAINURL;?>controle-login/lista-de-login/">Voltar</a>

</form>
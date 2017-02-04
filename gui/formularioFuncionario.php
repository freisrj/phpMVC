<?php

$id_fun     = "";
$nome       = "";
$apelido    = "";
$telefone   = "";
$celular    = "";
$funcao     = "";
$endereco   = "";
$bairro     = "";
$cidade     = "";
$cep        = "";
$uf         = "";
$imagem     = "";
$imagem_path = "";


$f = $this->getDados("funcionario");
//echo print_r($funcionario);

if ($f){
    $f instanceof Login;
    $id_fun     = $f->getIdFun();
    $nome       = $f->getNome();
    $apelido    = $f->getApelido();
    $telefone   = $f->getTelefone();
    $celular    = $f->getCelular();
    $funcao     = $f->getFuncao();
    $endereco   = $f->getEndereco();
    $bairro     = $f->getBairro();
    $cidade     = $f->getCidade();
    $cep        = $f->getCep();
    $uf         = $f->getUf();
    $imagem     = $f->getImagem();
    $imagem_path = $f->getImagemPath();
}
?> 

<form method"post" action="<?php echo MAINURL;?>controle-funcionario/salvar">
    <label>Id</label>
    <input type="text" readonly="true" name="txtIdFun" value="<?php echo $id_fun;?>"><br /> 
    <label>Nome</label>
    <input type="text" readonly="false" name="txtNome" value="<?php echo $nome;?>"><br /> 
    <label>Apelido</label>
    <input type="text" readonly="false" name="txtApelido" value="<?php echo $apelido;?>"><br /> 
    <label>Telefone</label>
    <input type="password" readonly="false" name="txtTelefone" value="<?php echo $telefone;?>"><br /> 
    <label>Celular</label>
    <input type="text" readonly="true" name="txtCelular" value="<?php echo $celular;?>"><br /> 
    <label>Função</label>
    <input type="text" readonly="true" name="txtFuncao" value="<?php echo $funcao;?>"><br /> 
    
    <label>Endereço</label>
    <input type="text" readonly="true" name="txtEndereco" value="<?php echo $endereco;?>"><br /> 
    <label>Bairro</label>
    <input type="text" readonly="true" name="txtBairro" value="<?php echo $bairro;?>"><br /> 
    <label>Cidade</label>
    <input type="text" readonly="true" name="txtCidade" value="<?php echo $cidade;?>"><br /> 
    <label>CEP</label>
    <input type="text" readonly="true" name="txtCep" value="<?php echo $cep;?>"><br /> 
    <label>UF</label>
    <input type="text" readonly="true" name="txtUf" value="<?php echo $uf;?>"><br /> 

    <label>Imagem</label>
    <input type="text" readonly="true" name="txtImagem" value="<?php echo $imagem;?>"><br /> 
    <label>Imagem caminho</label>
    <input type="text" readonly="true" name="txtImagemPath" value="<?php echo $imagem_path;?>"><br /> 

    <input type="submit" value="Salvar">
    <a href="<?php echo MAINURL;?>controle-funcionario/lista-de-funcionario/">Voltar</a>

</form>
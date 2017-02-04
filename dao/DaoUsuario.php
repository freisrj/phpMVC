<?php

class DaoUsuario implements IDao{

    /*
    public function listar($pId) {
        $sql = "SELECT id_usuario, nome_usuario, email, login, senha, imagem_path, status, created, modified FROM adm_usuario WHERE id = :ID";
        $conexao = Conexao::getConexao();
        $sth = $conexao->prepare($sql);
        $sth->bindParam("ID",$pId);
        try {
            $sth->execute();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        $usu = $sth->fetchObject("Usuario");
        return $usu;
    }
    */
    
    public function listar(Usuario $u) {

        $id = $u->getIdUsuario();
        $nome = $u->getNomeUsuario();
        $email = $u->getEmail();
        $login = $u->getLogin();
        $senha = $u->getSenha();
        $imagem = $u->getImagemPath();
        $status = $u->getStatus();
        $created = $u->getCreated();
        $modified = $u->getModified();

        $sql = "SELECT id_usuario, nome_usuario, email, login, senha, imagem_path, status, created, modified 
                FROM adm_usuario 
                WHERE 1=1 ";
        
        //echo '1. DaoUsuario.listar.sql = '. $sql . '<br />';

        if ($id !== null) { $sql .= "AND id_usuario = :ID ";}
        if ($nome !== null) { $sql .= "AND nome_usuario = :NOME ";}
        if ($email !== null) { $sql .= "AND email = :EMAIL ";}
        if ($login !== null) { $sql .= "AND login = :LOGIN ";}
        if ($senha !== null) { $sql .= "AND senha = :SENHA ";}
        if ($imagem !== null) { $sql .= "AND imagem_path = :IMAGEM ";}
        if ($status !== null) { $sql .= "AND status = :STATUS ";}
        //if ($created !== null) { $sql .= "AND created = :CREADTED ";}
        //if ($modified !== null) { $sql .= "AND modified = :MODIFIED ";}
        
        //echo '2. DaoUsuario.listar.sql = '. $sql . '<br />';
        
        $conexao = Conexao::getConexao();
        $sth = $conexao->prepare($sql);

        if ($id !== null) { $sth->bindParam("ID",$id);}
        if ($nome !== null) { $sth->bindParam("NOME",$nome);}
        if ($email !== null) { $sth->bindParam("EMAIL",$email);}
        if ($login !== null) { $sth->bindParam("LOGIN",$login);}
        if ($senha !== null) { $sth->bindParam("SENHA",$senha);}
        if ($imagem !== null) { $sth->bindParam("IMAGEM",$imagem);}
        if ($status !== null) { $sth->bindParam("STATUS",$status);}
        //if ($status !== null) { $sth->bindParam("STATUS",$status);}
        //if ($status !== null) { $sth->bindParam("STATUS",$status);}

        try {
            $sth->execute();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        $arUsuarios = array();
        while ($usu = $sth->fetchObject("Usuario")) {
            $arUsuarios[] = $usu; 
            //echo '$aUsu [0] = '.$arUsuarios[0].'<br />';
            //echo '$aUsu [1] = '.$arUsuarios[1].'<br />';
            //echo '$aUsu [2] = '.$arUsuarios[2].'<br />';
        }
        return $arUsuarios;
    }

    public function listarTodos() {
        $sql = "SELECT id_usuario, nome_usuario, email, login, senha, imagem_path, status, created, modified FROM funcionarios";
        $conexao = Conexao::getConexao();
        $sth = $conexao->prepare($sql);
        try {
            $sth->execute();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
        $arUsuarios = array();
        while ($usu = $sth->fetchObject("Usuario")) {
            $arUsuarios[] = $usu; 
        }
        return $arUsuarios;
    }
    
    public function salvar(Usuario $u) {

        $id = $u->getIdUsuario();
        $nome = $u->getNomeUsuario();
        $email = $u->getEmail();
        $login = $u->getLogin();
        $senha = $u->getSenha();
        $imagem = $u->getImagemPath();
        $status = $u->getStatus();
        
        if ($Id === null) {
            $sql = "INSERT INTO adm_usuario 
                    ( nome_usuario 
                    , email 
                    , login 
                    , senha 
                    , imagem_path 
                    , status 
                    VALUES
                    ( :NOME
                    , :EMAIL
                    , :LOGIN
                    , :SENHA
                    , :IMAGEM
                    , :STATUS";

        } else {
            $sql = "UPDATE adm_usuario 
                    SET nome_usuario = :NOME
                    , email = :EMAIL
                    , login = :LOGIN
                    , senha = :SENHA
                    , imagem_path = :IMAGEM
                    , status = :STATUS
                    WHERE id = :ID";
        }
        
        $conexao = Conexao::getConexao();
        $sth = $conexao->prepare($sql);
        $sth->bindParam("NOME",$nome);
        $sth->bindParam("EMAIL",$email);
        $sth->bindParam("LOGIN",$login);
        $sth->bindParam("SENHA",$senha);
        $sth->bindParam("IMAGEM",$imagem);
        $sth->bindParam("STATUS",$status);

        if (strpos($sql,"UPDATE")) {
            $sth->bindParam("ID",$id);

        }

        try {
            $sth->execute();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }
    
    public function excluir(Usuario $u) {
        $sql = "DELETE FROM adm_usuario WHERE id = :ID";
        $conexao = Conexao::getConexao();
        $sth = $conexao->prepare($sql);
        $pId = $u->getIdUsuario();
        $sth->bindParam("ID",$pId);
        try {
            $sth->execute();
        } catch(Exception $e) {
            echo $e->getMessage();
        }
    }

}

?>
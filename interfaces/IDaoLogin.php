<?php

interface IDaoLogin {
    public function listar(Login $f);
    public function listarTodos();
    public function salvar(Login $f);
    public function excluir(Login $f);
}

?>
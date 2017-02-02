<?php

    $g_link = false;
    
    function GetMyConnection()
    {
        global $g_link;
        
        if($g_link)
            return $g_link;
            
        $g_link = mysql_connect( "localhost", "root", "root") or die("Não foi possível conectar.");
        
        mysql_select_db ("waldall_ca") or die ("Erro ao selecionar a base de dados");
        
        return $g_link;
    }
    
    function CleanUpDB()
    {
        global $g_link;
        
        if($g_link != false)
            mysql_close($g_link);
        
        $g_link = false;
    }

?>

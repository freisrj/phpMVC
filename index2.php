<?php
/*header('Content-Type: text/html; charset=utf-8');
ini_set('display_errors',1);
ini_set('log_errors',1);
ini_set('error_log', dirname(__FILE__) . 'error_log.txt');
error_reporting(E_ALL);
*/

//$url = isset($_GET['url']) ? $_GET['url'] : null;
//echo '1.' . $url;

include_once "config/config.php";

/**
 * Método "mágico" do php para carregamento automático de classes
 * @param class $c classe que será iniciada
*/    
function __autoload($c) {
    $diretorios = array (
        './',
        './to/',
        './model/',
        './libs/',
        './gui/',
        './dao/'
    );
    
    foreach($diretorios as $dir){
        $arquivo = $dir . $c . '.php';
        //echo $arquivo.'<br />';
        if(file_exists($arquivo)){
            //echo 'Existe '.$arquivo.'<br />';
            require_once $arquivo;
        }
    }
}

$t = new TApp();
$t->executar();

?>

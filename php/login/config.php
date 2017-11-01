<?php  
define('_HOST', 'localhost');
define('_USER', 'root');
define('_PASSWORD', '');
define('_DB_NAME', 'bd');

$pdo = new PDO( 'mysql:host=' . _HOST . ';port=13306;dbname=' . _DB_NAME, _USER, _PASSWORD);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

try {
    $pdo;
}
catch ( PDOException $e ) {
    echo 'Erro ao conectar com o MySQL: ' . $e->getMessage();
}
?>
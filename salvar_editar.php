<?php
$nome = $_GET['nome'];
$datanasc = $_GET['datanasc'];
$salario = $_GET['salario'];
$id = $_GET['id'];
$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
$user = 'root'; //root
$password = '';//senha no mysql = vazio
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$sql=
$count = $dbh->exec("update exemplo1 set
                nome='$nome',  
                datanasc='$datanasc' ,
				salario='$salario'
                where id=$id ");
echo "<p>$count registro foi alterado</p>";
echo "<br><br><a href=index.php>Voltar</a>  ";
?>
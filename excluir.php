<?php
$id=$_GET['id'];
$dsn = 'mysql:dbname=aulaphp;host=127.0.0.1';
$user = 'root';
$password = '';
try {
$dbh = new PDO($dsn, $user, $password);
} catch (PDOException $e) {
echo 'Connection failed: ' . $e->getMessage();
}
$count = $dbh->exec("delete from  funcionarios 
                   where id=$id ");
echo "<p>$count registro foi excluído</p>";
echo "<br><br>
<a href=index.php>Voltar</a> ";
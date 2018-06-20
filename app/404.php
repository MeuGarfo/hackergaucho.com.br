<?php
$title='Erro 404';
$content=<<<heredoc
<h1>{$title}</h1>
Página não encontrada.
heredoc;
$filename='layout.php';
header("HTTP/1.0 404 Not Found");
require $filename;
?>

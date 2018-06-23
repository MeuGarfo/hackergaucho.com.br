<?php
$title='Sobre';
$content=<<<heredoc
<h1>{$title}</h1>
<p>Meu nome é Anderson Ismael e sou Web Developer. Os links para meus perfis nas redes sociais estão abaixo:</p>
<ul>
<li><a href="https://catfman.me/aicoutos" target="_blank">catfman.me/aicoutos</a></li>
<li><a href="https://www.duolingo.com/aicoutos" target="_blank">duolingo.com/aicoutos</a></li>
<li><a href="https://facebook.com/aicoutos" target="_blank">facebook.com/aicoutos</a></li>
<li><a href="https://github.com/aicoutos" target="_blank">github.com/aicoutos</a></li>
<li><a href="https://last.fm/user/andersoncoutos" target="_blank">last.fm/user/andersoncoutos</a></li>
<li><a href="https://pinterest.com/aicoutos" target="_blank">pinterest.com/aicoutos</a></li>
</ul>
heredoc;
$filename='inc/layout.php';
header("HTTP/1.0 404 Not Found");
require $filename;
?>

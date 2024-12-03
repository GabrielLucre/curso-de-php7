<?php
// Cookie
setcookie('user', 'Gabriel Lucrécio', time() + 3600);
setcookie('email', 'gabriellucreg@gmail.com', time() + 3600);
setcookie('ultima_pesquisa', 'tenis addidas', time() + 3600);

var_dump($_COOKIE);
setcookie('user', 'Gabriel Lucrécio', time() - 3600);
setcookie('email', 'gabriellucreg@gmail.com', time() - 3600);

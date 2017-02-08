<?php

$query = require '/Users/alejandrovazquez/code/greyfox/core/bootstrap.php';

$router = new Router;

require '/Users/alejandrovazquez/code/greyfox/routes.php';

require $router->direct('about/culture');


?>

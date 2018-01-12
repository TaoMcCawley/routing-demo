<?php
/**
 * Created by PhpStorm.
 * User: James McPherson
 * Date: 1/12/2018
 * Time: 11:08 AM
 */

require "vendor/autoload.php";

$f3 = Base::instance();

$f3->route("GET /", function(){
    echo "<h1>Routing demo!</h1>";
});

$f3->run();

?>
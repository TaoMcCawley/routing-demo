<?php
/**
 * Created by PhpStorm.
 * User: James McPherson
 * Date: 1/12/2018
 * Time: 11:08 AM
 */

require "vendor/autoload.php";

$f3 = Base::instance();

//set debug level
$f3->set('DEBUG',3);

$f3->route("GET /hello", function(){
    echo "<h1>hello</h1>";
});

$f3->route("GET /", function(){
    echo "<h1>Routing demo!</h1>";
});

$f3->route("GET /page2", function (){
    echo "<h1>YOU THOUGHT THIS WAS PAGE 2, BUT IT WAS ME! DIO!</h1>";
});

$f3->route('GET /language/@lang', function(){
    function($f3, $params){
        switch ($params['lang']){
            case 'swahili':
                echo "jumbo!"; break;
            default:
                $f3->error(404);
        }
    }
});

$f3->set('name', $params['name'], function($f3, $params){
   $f3->set('name', $params['name']);
   $template = new Template();
   echo $template->render('views/hello.html');
});

$f3->run();

?>
<?php

    function add($x, $y){
        return $x + $y;
    }

    echo add(5, 15);
    echo "<br>";
    echo add(32, 95);
    echo "<br>";
    echo add(17, 4);
    echo "<br>";

    function hello($x){
        $user = $x;

        if($user === "Maha"){
            echo "Hello " . $user;
        }
        else{
            echo "Bye " . $user;
        }
        
    }

    hello("Sarah");
    echo "<br>";
    hello("Maha");

?>
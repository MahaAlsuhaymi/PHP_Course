<h1>Arrays</h1>

<form action="array.php" method="GET">
    <input type="text" name="name">
    <input type="submit">
</form>

<?php

$name = $_GET["name"];

//$family = array("Father", "Mother", "Brother"); //index starts at 0
//$family = ["Father", "Mother", "Brother"]; //another way

//associative array
$score = [
            "Noor" => [
                "Score" => "90", 
                "Grade" => "A"
            ],
            "Sarah" => [
                "Score" => "80", 
                "Grade" => "B"
            ],
            "Mai" => [
                "Score" => "40", 
                "Grade" => "F"
            ],
        ];

echo "Score: " . $score[$name][0];
echo "<br>";
echo "Grade: " . $score[$name][1];

/*
$family[0] = "Home"; //change
$family[3] = "Sister"; //Add

echo $family[0];
echo "<br>";
echo $family[3];
echo "<br>";
echo count($family);
*/

?>
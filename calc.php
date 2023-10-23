<?php
    //Calculater
    $number1 = $_GET["number1"];
    $number2 = $_GET["number2"];
    $operator = $_GET["op"];
    
    function add($x, $y){
        return $x + $y;
    }

    function sub($x, $y){
        return $x - $y;
    }

    function divide($x, $y){
        return $x / $y;
    }

    function multi($x, $y){
        return $x * $y;
    }

        /*
        if(!empty($number1) && !empty($number2) && !empty($operator)){
            if($operator === "+"){
                $result = $_GET["number1"] + $_GET["number2"]
            }
            elseif($operator === "-"){
                $result = $_GET["number1"] - $_GET["number2"]
            }
            elseif($operator === "/"){
                $result = $_GET["number1"] / $_GET["number2"]
            }
            elseif($operator === "*"){
                $result = $_GET["number1"] * $_GET["number2"]
            }
        }
        */

        if(empty($number1)){
            $result = "الرقم الأول فارغ";
        }
        elseif(empty($number2)){
            $result = "الرقم الثاني فارغ";
        }
        elseif(empty($operator)){
            $result = "يرجى ادخال العملية";
        }
        else{
            if($operator === "+"){
                $result = add($number1, $number2)
            }
            elseif($operator === "-"){
                $result = sub($number1, $number2)
            }
            elseif($operator === "/"){
                $result = divide($number1, $number2)
            }
            elseif($operator === "*"){
                $result = multi($number1, $number2)
            }
        }
?>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <form action="calc.php" method="GET" class="form">
            <div>
                <label>Enter Number 1: </label>
                <input type="number" id="num1" name="number1" class="form-control">
            </div>

            <div>
                <label>Enter Number 2: </label>
                <input type="number" id="num2" name="number2" class="form-control"> 
            </div>

            <div>
                <label>Operation: </label>
                <input type="text" name="op" class="form-control"> 
            </div>

            <div class="alert alert-success">
                <?php echo $result ?>
            </div>

            <br>
            <input type="submit" class="btn btn-primary">
        </form>
    </div>
</body>
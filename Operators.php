<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>operators </title>
</head>
<body>
    <?php
        /*
       	The left operand gets set to the value of the expression on the right 	
        x += y 	x = x + y 	Addition 	
        x -= y 	x = x - y 	Subtraction 	
        x *= y 	x = x * y 	Multiplication 	
        x /= y 	x = x / y 	Division 	
        x %= y 	x = x % y 	Modulus
        */
        $x = 10;
        $y = 20;
        $z = 30;

        echo "<h1> the operators </h1>";


        echo "<h3> using operators  </h3>";
        // change the operators to see the difference 
        $x1 = $x += $y;
        echo "x += y = $x1 <br>";


        $y1 = $x -= $y;
        echo "y -= x = $y1 <br>";


        /*
        == 	Equal 	$x == $y 	Returns true if $x is equal to $y 	
        === Identical 	$x === $y 	Returns true if $x is equal to $y, and they are of the same type 	
        != 	Not equal 	$x != $y 	Returns true if $x is not equal to $y 	
        <> 	Not equal 	$x <> $y 	Returns true if $x is not equal to $y 	
        !== Not identical 	$x !== $y 	Returns true if $x is not equal to $y, or they are not of the same type 	
        > 	Greater than 	$x > $y 	Returns true if $x is greater than $y 	
        < 	Less than 	$x < $y 	Returns true if $x is less than $y 	
        >= 	Greater than or equal to 	$x >= $y 	Returns true if $x is greater than or equal to $y 	
        <= 	Less than or equal to 	$x <= $y 	Returns true if $x is less than or equal to $y 	
        <=> Spaceship 	$x <=> $y 	Returns an integer less than, equal to, or greater than zero, depending on if $x is less than, equal to, or greater than $y. Introduced in PHP 7.*/

        // same value but different type 
        $compVal1 = 10;
        $compVal2 = 10.00;

        // equal comp should return true 
        // strict will return false
        echo "<h3> strict vs loose comparison </h3>";
        if ($compVal1 === $compVal2){ // change ==  to ===  to see the differnce between strict and loose comp
            echo "the values are the same in a loose comparison";
        } else {
            echo "the values are the same value but diffeent types";
        }

        // spaceship is a weird one to explain 
        // if num1 is less that num2 returns -1
        // if num1 is equal to  num2 returns 0
        // if num1 is more than num2 returns 1 
        
        echo "<h3> spaceship operator </h3>";
        // change the vars to see the difference 
        $x = 11;
        $y = 12;

        echo($x <=> $y); 


        // increment / decrement operators 
        echo "<h3> increment / decrement operators  </h3>";

        // just like JS use var++ or ++var to increment 
        // and var-- or --var to a var 

        $count = 0;
        function countToTen(){
            while($count <= 30){
                echo "$count <br>";
                // increment the number, can also specify by how many using += operator 
                // example +=3 will count up in 3 
                $count+=3;
            }
        }
        countToTen();



    ?>
</body>
</html>
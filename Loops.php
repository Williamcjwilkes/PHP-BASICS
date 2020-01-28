<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>loops </title>
</head>
<body>
    <?php
        echo "<h1> loops </h1> ";
        // while loops continue whilst the condition is true 
        $count = 0;
        echo "<h2>while loops example </h2>";
        while ($count <= 10){
            // print count whilst count is under 10 
            echo "current number is: $count<br>"; 
            // dont forget to increment the num 
            $count++ ; // increment by any number using +=(number) or -=(number)
        }
        echo "<h2> do ... while loops </h2>";

        $count1 = 0;
        do {
            // saying do this while the value of count1 is less or equal to 20 
            echo "current number is: $count1 <br>"; 
            $count1 +=2;
        } while ($count1 <= 20);


        echo "<h2> for loops </h2>";
        // sets vars, conditions and increments together would say the cleanest way to code loops
        // sets $count2 to 0 , while $count2 is less than 50 and increments by 5  
        for ($count2 = 0; $count2 <= 50; $count2+=5){
            // echos the number after every loop 
            echo"current number is: $count2 <br>";
        }

        // theres also foreach loops which will be in arrays file 
        
    ?>
</body>
</html>

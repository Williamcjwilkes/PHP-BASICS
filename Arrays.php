<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>arrays</title>
</head>
<body>
    <?php
    echo "<h1> arrays  </h1>";
    // an array stores multiple values on one variable 
    $buscuits = array("custard creams", "ginger nuts", "hobknobs");
    // accessing arrays using the key , like JS index starts at [0]
    echo "the best biscuits in the world are: $buscuits[0] followed by $buscuits[1] and if theres not another option $buscuits[2].";
    


    echo "<h2> looping through an array</h2>";
    // can be used to print the array 
    // set var for arr length , using the buscuits arr 

    // counts the items in the array 
    $arrlength = count($buscuits);

    // loops the array while there is items still to be printed 
    for($x = 0; $x < $arrlength; $x++){
        // x is equal to the key so we increment to get the next item 
        echo $buscuits[$x];
        // added a break increase readability 
        echo "<br>";
    }


    echo "<h2> looping through an array</h2>";
    // used named keys to an array 
    // gonna use the student scores to add more functionality to the switch 

    $students = array(
        // THE FIRST VALUE IS THE KEY , THE SECOND IS THE VALUE     
        "william"=>"60", 
        "molly"=>"30",
        "hayley"=>"70",
        "jeff"=>"90"
    );
        // CHANGE THE NAME IN THE $students TO SEE IT IN PRACTISE   
    $studentTestScore = $students["molly"];
    switch(true){
        // each case is different , anything less than 40 is a fail 
        case $studentTestScore <= 39:
            echo "failed";
            break;
            // 40 - 59 is pass
        case $studentTestScore <= 59:
            echo "passed";
            break;    
            // 60 - 85 is merit 
        case $studentTestScore <= 80:
            echo "merit";
            break;
            // above 85 is distinction 
        case $studentTestScore <= 100:
            echo "Distinction";
            break;
     }

    echo "<h2> Multi dimensional arrays </h2>";
    $person = array(
        // adding arrays within an array 
        // name age and personality 
        array("mckenzii", 12, "funny"),
        array("william", 26, "book worm"),
        array("hayley", 51, "drama queen"),
        array("molly", 76, "grumpy"),
    );
        // access the values by using [the array you want][the item you want from that array]
        echo $person[1][0]." is the second entry and he is ".$person[1][1]." years old.";


        echo "<h2> sorting arrays  </h2>";

        // sort ascending order , value 
        // using the $buscuits array for this 
        echo "<h3> Decending order </h3>";
        rsort($buscuits);
        // use a for loop to print the array in reverse order 
        for($x = 0; $x < $arrlength; $x++){
            // use . to concenate strings , dont echo twice 
            echo $buscuits[$x]."<br>";
        }

        echo "<h3> Ascending order </h3>";
        $buscuitsScores = array(
            "custard creams"=> "99", 
            "ginger nuts"=> "69", 
            "hobknobs" => "20"
        );
        $buscuitlen = count($buscuitsScores);

        asort($buscuitsScores);

        // use a foreach loop to print each key and value  
        foreach ( $buscuitsScores as $x => $x_value){
            echo"Buscuit: ".$x."<br>"."Score : ". $x_value."<br>";
        }
        

        echo "<h3> Ascending order based on key  </h3>";
        // ksort is key sort and sorts in ascending order based on key 
        ksort($buscuitsScores);

        // use a foreach loop to print each key and value  
        foreach ( $buscuitsScores as $x => $x_value){
            echo"Buscuit: ".$x."<br>"."Score : ". $x_value."<br>";
        }


        echo "<h3> Descending order based on value   </h3>";
        // arsort is decending order based on value   
        arsort($buscuitsScores);

        // use a foreach loop to print each key and value  
        foreach ( $buscuitsScores as $x => $x_value){
            echo"Buscuit: ".$x."<br>"."Score : ". $x_value."<br>";
        
        }


        echo "<h3> Descending order based on key  </h3>";
        // krsort is decending order based on key  
        krsort($buscuitsScores);

        // use a foreach loop to print each key and value  
        foreach ( $buscuitsScores as $x => $x_value){
            echo"Buscuit: ".$x."<br>"."Score : ". $x_value."<br>";
        
        }


    ?>
</body>
</html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Switch Statements </title>
</head>
<body>
    <?php   
        // switches are like if statements but i think are bit messy for clean code 
        // sets state dependant on the value put in 
        // GRADE PAPER 

        // can change the score dependant would be more practical in a bigger  test area
        // to use array or DB access so you could test against multiple students and use 
        // user input ]


    $studentTestScore = 80;
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
    ?>
</body>
</html>
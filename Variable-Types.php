<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Variable Types </title>
</head>
<body>
    <?php
    // global variables can only be accesed outside a function 
    $a = 10; // global var 
    $b = 10; // global var 

    function echoTest(){
        $d = 10;// add the local vars in the function to solve 
        $e = 10;
        echo "<h1> these are local variables $d $e </h1>"; // this will throw an error cause the vars need to be in function e
    }
    echoTest();

    // BEST WAY TO SOLVE THIS IS USING $GLOBALS 
    // used to access global variables inside a function 
    function echoTestGlobals(){
        global $a, $b; // can also declare with $GLOBALS["a"]
        echo "<h1> these are globals $a, $b </h1>"; // this will no longer throw and error becuase the variables have been called with global 
    }
    echoTestGlobals();


    // STATIC KEYWORD 
    // when a function has run its course the VARS are deleted and not stored to save the var use static 
    function echoTestStatic(){
        static $g = 10;
        echo "$g<br>"; // added a break for clearer reading 
        $g--;
    }
    // call the same function multiple times to prove the var has been saved without static it would reset to 10 
    // each time its called 
    echoTestStatic();
    echoTestStatic();
    echoTestStatic();
    echoTestStatic();
    ?>
</body>
</html>
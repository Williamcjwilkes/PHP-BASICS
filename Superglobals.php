<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Super Globals</title>
</head>
<body>
    <h1> $SUPERGLOBALS </h1>
    <?php 
    // becuase of scope of variables, super globals are nice 
    //to use vars outside a function but not limited to that 
    echo"<h3>using GLOBALS inside a function</h3>";
    // setitng vars outside function to use superglobal inside function 
    $var1 = 20;
    $var2 = 10;

    function multiply(){
        // if we called var1 and var2 now would error cause the scope inside a 
        // fucntion is local not global , work around = superglobal 
        // dont add $ to the vars inside globals 
        $GLOBALS["answer"] = $GLOBALS["var1"] * $GLOBALS["var2"];
    }
    // call the function mulitply()
    multiply();
    // echo the answer outside the function 
    echo "calling function mulitply() the answer is: ".$answer;


    echo"<h3> Server superGlobals </h3>";
    
    echo"<h4>common server calls look at documentation for the rest</h4> <br>";
    echo"PHP_SELF returns the file name of current script: ".$_SERVER['PHP_SELF']."<br>";
    echo"SERVER_NAME returns the name of the host server (for this script it would be local host): ".$_SERVER['SERVER_NAME']."<br>";
    echo"HTTP_HOST returns the host header from current request: ".$_SERVER['HTTP_HOST']."<br>";
    echo"HTTP_REFERER returns the URL of current page (be wary not all browsers support it) : ".$_SERVER['HTTP_REFERER']."<br>";
    
  
    ?>
</body>
</html>
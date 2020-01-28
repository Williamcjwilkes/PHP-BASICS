
   <?php 
   // creates a class for student 
    class Student {
        var $name;
        var $course;
        var $score;

        function __construct($name, $course, $score){
            $this->name = $name;
            $this->course = $course;
            $this->score = $score;
        }
    }
     $william = new Student("william Wilkes", "Comp Sci", 60);

    echo "<h1> $william->name </h1><br>";
    echo "<h1> $william->course </h1><br>";
    echo "<h1> $william->score </h1><br>";

?>   

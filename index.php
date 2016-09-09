<!DOCTYPE html>

<html>
  <head>
    <meta charset="UTF-8">
    <title>test</title>
  </head>
  <body>
    <?php
        // I figured out that PHP blocks are separate and do not share variables.  So you get one block with everything in it.
        
        include('student.php');
        $students = array();
        $first = new Student();
        $first->surname = "Doe";
        $first->first_name = "John";
        $first->add_email('home','john@doe.com');
        $first->add_email('work','jdoe@mcdonalds.com');
        $first->add_grade(65);
        $first->add_grade(75);
        $first->add_grade(55);
        $students['j123'] = $first;
        
        $second = new Student();
        $second->surname = "Einstein";
        $second->first_name = "Albert";
        $second->add_email('home','albert@braniacs.com');
        $second->add_email('work1','a_einstein@bcit.ca');
        $second->add_email('work2','albert@physics.mit.edu');
        $second->add_grade(95);
        $second->add_grade(80);
        $second->add_grade(50);
        $students['a456'] = $second;
        
        $third = new Student();
        $third->surname = "Burns";
        $third->first_name = "Jason";
        $third->add_email('school','jburns43@my.bcit.ca');
        $third->add_grade(95);
        $third->add_grade(90);
        $students['j111'] = $third;
        
        // also tried to find out what kind of sort ksort is but was unsuccessful
        ksort($students);
            
        foreach($students as $student)
            echo $student->toString();
    ?>
  </body>
</html>
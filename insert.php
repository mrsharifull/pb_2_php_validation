<?php
require('db_con.php');

$name='';
$class='';
$roll='';
$registration='';
$note='';


$err_name='';
$err_class='';
$err_roll='';
$err_registration='';
$err_note='';


if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $class = $_POST['class'];
    $roll = $_POST['roll'];
    if(!empty($roll)){
        $roll = intval($roll);
    }
    $registration = $_POST['registration'];
    if(!empty($registration)){
        $registration = intval($registration);
    }
    $note = $_POST['note'];

    $err = 0;
    if(empty($name) || strlen($name)>20){
        $err++;
        $err_name = 'Name field is required & character must be less than 20';
    }
    if(empty($class) || strlen($class)>10 || is_numeric($class) || is_int($class)){
        $err++;
        if(empty($class)){
            $err_class = 'Class field is required';
        }elseif(strlen($class)>10){
            $err_class = 'character must be less than or equal 10';
        }else{
            $err_class = 'class name must be string';
        }
        
    }
    
    if(empty($roll) || !is_numeric($roll) || !is_int($roll) || strlen($roll) != 6){
        $err++;
        $err_roll = 'Roll field is required & roll must be 6 digit';
    }
    if(empty($registration) || !is_numeric($registration) || !is_int($registration) || strlen($registration) != 8){
        $err++;
        $err_registration = 'Registration field is required & registration number must be 8 digit';
    }
    if( strlen($note)>300){
        $err++;
        $err_note = 'Note must be less than 300 character';
    }

    if($err == 0){
        $sql = "INSERT INTO students(name, class, roll, registration, note) VALUES ('$name','$class','$roll','$registration','$note')";
        $result = $con->query($sql);

        if($result){
            $name='';
            $class='';
            $roll='';
            $registration='';
            $note='';
        }






    }
    
}




include('view/insert.view.php');
?>
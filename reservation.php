<?php
$page_title = 'Reservation';

   
if($_POST)
{   
    //var_dump($_POST);
     $errors = false;
     
    if(strlen(@$_POST['first_name']) < 2)
    {
        $errors[] = 'The first name is too short';
    }
    
    if(strlen(@$_POST['last_name']) < 2)
    {
        $errors[] = 'The last name is too short';
    }
    
    if(@$_POST['agree'] == null)
    {
        $errors[] = 'You should agree with the terms';
    }
    
    if(@count($errors)> 1)
    {
        $output = $errors;
        $output['alert_type'] = 'danger';
    }
    else
    {
        $output = $_POST;
        $output['alert_type'] = 'info';
    }
    
}

include 'includes/header.php';
include 'includes/reservationHTML.php';
include 'includes/footer.php';
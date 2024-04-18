<?php 
    #we do this bc, we send if to another page, if something is wrong we go back!
    if(!isset($first_name)) {
        $first_name='';
    }

    if(!isset($last_name)) {
        $last_name='';
    }
    if(!isset($destination)) {
        $destination='';
    }
    if(!isset($miles_to_drive)) {
        $miles_to_drive=0;
    }
    if(!isset($mpg)) {
        $mpg=0;
    }
    if(!isset($gas)) {
        $gas=0;
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <Title>Travel Expense Calculator</Title>
        <link rel="stylesheet" href="CSS/homestyle.css"/> 
        <link rel="stylesheet" href="CSS/project1style.css"/>
    </head>
    <body>
        <nav class="navstyle">
            <p>melissa martinez</p>
            <ul>
                <li>
                    <a href="index.html">home</a>
                </li>
                <li>
                    <a href="aboutme.html">about me</a>
                </li>
                <li>
                    <a href="projects.html">projects</a>
                </li>
                <li>
                    <a href="https://github.com/martinez415">github</a>
                </li>
            </ul>
        </nav>
        <span>
            <?php
                if(!empty($err_msg)) {
                    echo $err_msg;
                }
            ?>
        </span>
        <div class="banner">
            <h3>Travel Expense Application</h3>
            <img src="Images/car.gif">
        </div>
        <form action="display.php" method="post">                  
            <fieldset>
                <legend>Travel Expense Application</legend>
                <div class="input_group">
                    <label>Destination:</label>
                    <input type="text" name="destination">
                </div>
                <div class="input_group">
                    <label>Drive First Name: </label>
                    <input type="text" name="first_name">
                </div>
                <div class="input_group">
                    <label>Drive Last Name: </label>
                    <input type="text" name="last_name">
                </div>
                <div class="input_group">
                    <label>Travel Date: </label>
                    <input type="date" name="travel_date">
                </div>
                <div class="input_group">
                    <label>Miles to Drive: </label>
                    <input type="text" name="miles_to_drive">
                </div>
                <div class="input_group">
                    <label>Miles Per Gallon: </label>
                    <input type="text" name="mpg">
                </div>
                <div class="input_group">
                    <label>Gas Price: </label>
                    <input type="text" name="gas_price">              
                </div>
                <label>&nbsp;</label>
                <div class="input_group">
                    <input type="submit" value="Submit" id="button">
                </div>
        </fieldset>
        </form>  
    </body>
</html>
<?php
    $destination=$_POST['destination'];
    $first_name=$_POST['first_name'];
    $last_name=$_POST['last_name'];
    $travel_date=$_POST['travel_date'];
    
    #$mpg = filter_var($_POST['mpg'], FILTER_VALIDATE_FLOAT);
    #$miles_to_drive=$_POST['miles_to_drive'];
    $miles_to_drive=filter_var($_POST['miles_to_drive'], FILTER_VALIDATE_FLOAT);
    
    #$mpg=$_POST['mpg'];
    $mpg=filter_var($_POST['mpg'], FILTER_VALIDATE_FLOAT);
     
    #$gas_price=$_POST['gas_price'];
    $gas=filter_var($_POST['gas_price'], FILTER_VALIDATE_FLOAT);

    $total_cost=($miles_to_drive / $mpg)*$gas;
    $full_name=$first_name . " " . $last_name;

    $err_msg="";

    if(empty($first_name)) {
        $err_msg.='<p>First Name must be valid.</p>';
    }
    if(empty($last_name)) {
        $err_msg.='<p>Last Name must be valid.</p>';
    }
    if(empty($destination)) {
        $err_msg.='<p>Destination must be valid.</p>';
    }
    if(empty($miles_to_drive)) {
        $err_msg.='<p>Miles to Drive must be valid.</p>';
    }
    if(empty($mpg)) {
        $err_msg.='<p>Miles Per Gallon must be valid.</p>';
    }
    if(empty($gas)) {
        $err_msg.='<p>Gas Price must be valid.</p>';
    }

    if($err_msg!='') {
        include('proj1.php');
        exit();
    }
?>

<!DOCTYPE html> 
<html>
    <head>
        <meta name="viewport" content="device-width, initial-scale=1">
        <title>Travel Expense Calculator</title>
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
        <div class="banner_display">
            <h3>Safe Travels!</h3>
        </div>
        <div class="form_results">
            <div class="results_group">
                <p>Destination: <?php echo $destination; ?></p>
            </div>
            <div class="results_group">
                <p>Driver Name: <?php echo $full_name; ?></p>
            </div>
            <div class="results_group">
                <p>Travel Date: <?php echo $travel_date; ?></p>
            </div>
            <div class="results_group">
                <p>Miles to Drive: <?php echo $miles_to_drive; ?></p>
            </div>
            <div class="results_group">
                <p>Miles Per Gallon: <?php echo $mpg; ?></p>
            </div>
            <div class="results_group">
                <p>Gas Price: <?php echo $gas; ?></p>
            </div>
            <div class="results_group">
                <p>Travel Cost: <?php echo "$" . round($total_cost, 2); ?></p>
            </div>
        </div>
    </body>
</html>
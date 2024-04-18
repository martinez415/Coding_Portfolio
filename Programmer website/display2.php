<?php
    $full_name=filter_input(INPUT_GET, 'full_name', FILTER_SANITIZE_STRING);
    $username=filter_input(INPUT_GET, 'username', FILTER_SANITIZE_STRING);
    $password=filter_input(INPUT_GET, 'password', FILTER_SANITIZE_STRING);
    $re_password=filter_input(INPUT_GET, 're_password', FILTER_SANITIZE_STRING);
    $email=filter_input(INPUT_GET, 'email', FILTER_SANITIZE_STRING);
    $birthdate=$_GET['birthdate'];
    
    $err_msg="";

    if(empty($full_name)) {
        $err_msg.='<p>Full Name must be valid.</p>';
    }
    if(empty($username)) {
        $err_msg.='<p>Username must be valid.</p>';
    }
    if(empty($password)) {
        $err_msg.='<p>Password must be valid.</p>';
    }
    if(empty($re_password)) {
        $err_msg.='<p>Re-Type Password must be valid.</p>';
    }
    if(empty($email)) {
        $err_msg.='<p>Email must be valid.</p>';
    }
    if(empty($birthdate)) {
        $err_msg.='<p>Gas Price must be valid.</p>';
    }
    if($password!=$re_password) {
        $err.='<p>Passwords must match!</p>';
    }

    if($err_msg!='') {
        include('proj2.php');
        exit();
    }
?>

<!DOCTYPE html> 
<html>
    <head>
        <meta name="viewport" content="device-width, initial-scale=1">
        <title>Travel Expense Calculator</title>
        <link rel="stylesheet" href="CSS/homestyle.css"/> 
        <link rel="stylesheet" href="CSS/proj2style.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
    </head>
    <header>
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
    </header>
    <body>
        <div id=pizza_webform>
            <div id="pizza_banner">
                <div class="col1">
                    <a href=""><h1>Mart Pizzeria</h1></a>
                    <img src="Images/pizza_footer.gif" alt="Pizza Footer">
                </div>
                <div class="col2 pizza_nav">
                    <ul>
                        <li><a href="">menu</a></li>
                        <li><a href="">start your order</a></li>
                        <li><a href="">log in</a></li>
                    </ul>
                </div>
            </div>
            <div class="form_results">
                <h1>Thanks for signing up!</h1>
                <h2>Customer Profile</h2>
                <p>Full Name: <?php echo $full_name; ?></p>
                <p>Username: <?php echo $username; ?></p>
                <p>Email: <?php echo $email; ?></p>
            </div>
            <div id=footer>
                <p>2024 Mart Pizzeria All Rights Reserved</p>
            </div>
        </div>
    </body>
</html>
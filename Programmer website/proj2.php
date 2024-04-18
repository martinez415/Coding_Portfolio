<?php 
    if(!isset($full_name)) {
        $full_name='';
    }

    if(!isset($username)) {
        $username='';
    }
    if(!isset($password)) {
        $password='';
    }
    if(!isset($re_password)) {
        $re_password='';
    }
    if(!isset($email)) {
        $email='';
    }
    if(!isset($birthdate)) {
        $birthdate='';
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <Title>Mart Pizzeria: Customer Profiile</Title>
        <link rel="stylesheet" href="CSS/homestyle.css"/> 
        <link rel="stylesheet" href="CSS/proj2style.css"/>
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Luckiest+Guy&display=swap" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <script src="JS/pizzafunction.js"></script>
        <script src="JS/clearfunction.js"></script>
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
        <span>
            <?php
                if(!empty($err_msg)) {
                    echo $err_msg;
                }
            ?>
        </span>
        <div id="pizza_webform">
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
            <div id="create_profile">
                Create a Customer Profile?
            </div>
            <form action="display2.php" method="GET" id="profile_form">                  
                <fieldset>
                    <legend>Customer Profile</legend>
                    <div class="input_group">
                        <label>Full Name:</label>
                        <input type="text" name="full_name">
                    </div>
                    <div class="input_group">
                        <label>Username: </label>
                        <input type="text" name="username">
                    </div>
                    <div class="input_group">
                        <label>Password: </label>
                        <input type="password" name="password">
                    </div>
                    <div class="input_group">
                        <label>Re-Type Password: </label>
                        <input type="password" name="re_password">
                    </div>
                    <div class="input_group">
                        <label>Email: </label>
                        <input type="email" name="email">
                    </div>
                    <div class="input_group">
                        <label>Birthday: </label>
                        <input type="date" name="birthdate">
                    </div>
                    <label>&nbsp;</label>
                    <div class="button_group">
                        <input type="button" value="Clear Fields" class="btn" id="clear">
                        <input type="submit" value="Create Profile" class="btn" id="save">
                    </div>
            </fieldset>
            </form>
            <div id=footer>
                <p>2024 Mart Pizzeria All Rights Reserved</p>
            </div>

        </div>
    </body>
</html>
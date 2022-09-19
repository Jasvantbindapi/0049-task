<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="POST">
        <input type="text" name="first_name" placeholder="First name">
        <input type="text" name="second_name" placeholder="Second name">
        <input type="text" name="mobile" placeholder="Mobile Number">
        <button type="submit" name="submit">Send</button>
    </form>
    
    <?php
        if(isset($_POST['submit']))
        {
            $first = $_POST['first_name'];
            $second =  $_POST['last_name'];

            echo "<h2>Hello $first $second! Greetings from BindAPI.</h2>"; 
        }
    ?>

</body>
</html>
        
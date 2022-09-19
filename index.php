<?php
    if(isset($_POST['submit']))
    {
        $first = $_POST['first_name'];
        $last =  $_POST['last_name'];
        $mobile = $_POST['mobile'];

        echo "<h2>Success</h2>"; 
    }
?>

<?php
    $servername = "localhost";
    $dbname = "dev_1_0054";
    $username = "root";
    $password = "";
?>

<?php
  $india = new Inter($servername, $dbname, $username, $password);
  if(isset($_POST['submit']))
  {
      $first_name = $_POST['first_name'];
      $last_name = $_POST['last_name'];
      $mobile = $_POST['mobile'];

      $india->adddata($first_name, $last_name, $mobile);

  }
?>

<?php
    class Inter
    {
        public $conxn;
        
        public function __construct($servername, $dbname, $username, $password)
        {
            $this->conxn = new PDO("mysql:host=$servername;dbname=$dbname",$username,$password);
        }

        public function adddata($first_name, $last_name, $mobile)
        {
            $query = "INSERT INTO `0054_task` VALUES (NULL, ?, ?, ?)";
            $statment = $this->conxn->prepare($query);
            $statment->execute([$first_name, $last_name, $mobile]);
        
        
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container text-center mt-4">
        <div class="row">
            <div class="col">
                <form action="" method="POST">
                    First Name <br> <input type="text" name="first_name" placeholder="First Name"><br>
                    Last Name <br> <input type="text" name="last_name" placeholder="Last Name"><br>
                    Mobile <br> <input type="text" name="mobile" placeholder="Mobile Name"><br>
                    <button type="submit" name="submit">Send</button>
                </form>
            </div>
        </div>
    </div>
    <?php
    if(isset($_POST['submit']))
    {
        $first = $_POST['first_name'];
        $last =  $_POST['last_name'];
        
        echo "<h2>Hello $first $last !Greeting from BindAPI.</h2>"; 
    }
?>
</body>
</html>
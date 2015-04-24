<?php
    require("config.php");
    $submitted_username = '';
    if(!empty($_POST)){
        $query = "
            SELECT
                id,
                username,
                password,
                salt,
                email
            FROM users
            WHERE
                username = :username
        ";
        $query_params = array(
            ':username' => $_POST['username']
        );
          
        try{
            $stmt = $db->prepare($query);
            $result = $stmt->execute($query_params);
        }
        catch(PDOException $ex){ die("Failed to run query: " . $ex->getMessage()); }
        $login_ok = false;
        $row = $stmt->fetch();
        if($row){
            $check_password = hash('sha256', $_POST['password'] . $row['salt']);
            for($round = 0; $round < 65536; $round++){
                $check_password = hash('sha256', $check_password . $row['salt']);
            }
            if($check_password === $row['password']){
                $login_ok = true;
            }
        }
 
        if($login_ok){
            unset($row['salt']);
            unset($row['password']);
            $_SESSION['user'] = $row; 
            header("Location: index.php");
            die("Redirecting to: index.php");
        }
        else{
            print("Login Failed.");
            $submitted_username = htmlentities($_POST['username'], ENT_QUOTES, 'UTF-8');
        }
    }
?> 

<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" type="text/css" href="CSS\style.css" />
</head>
<body style="font-family: 'Open Sans', sans-serif;">
<?php include("menu.php"); ?>
<div class="wrapper">
		<?php
			if ( !isset( $_SESSION['user'] ) )
			{
		?>
                <form class="login" action="login.php" method="post">
				<img src="Img/LogAccount.png" alt=""><br />
                    Username:<br />
                    <input type="text" name="username" value="<?php echo $submitted_username; ?>" />
                    <br /><br />
                    Password:<br />
                    <input type="password" name="password" value="" />
                    <br /><br />
                    <input type="submit" class="btn btn-info" value="Login" />
					<br />
					<br />
					<a href="register.php">Register</a></li>
					<a href="logout.php">Log Out</a></li>
                </form>
		<?php
			}
			else
			{
		?>
				<form class="login" action="login.php" method="post">
				<img src="Img/LogAccount.png" alt=""><br />
                    <?php echo $_SESSION['user']['username']; ?>
					<br />
					<a href="logout.php">Log Out</a></li>
                </form>
				<?php
					}
				?>		
 </div>           
 <div class ="push"></div>
<?php include("footer.php"); ?>
</body>
</html>
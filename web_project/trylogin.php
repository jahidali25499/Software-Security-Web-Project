
<html>
<link rel="stylesheet" href="pure-min.css">
<body>

<nav class="navbar">
  <a style="float:left; background:none; color:white; font-size:25px;" href="/joke.php">Definitely Secure Website</a>
  <a href="/profile.php">Profile</a>
</nav>

  <?php

  //get parameters from the referer page
  $user = $_POST['username'];
  $password = $_POST['password'];

  //get the user's password from the db
  $conn = mysqli_connect( "127.0.0.1", "root", "1qaz2wsx", "web_project" );
  $sql = "SELECT * FROM users WHERE username='" . $user . "' and password='" . $password . "'";
  $result = mysqli_query( $conn, $sql );


  //the below is just html formating
  echo '<span style="position: absolute; margin: auto; top: 0; right: 0; bottom: 0; left: 0; width: 500px; height: 200px;">';

  //if the db returns a hit (matching username and password):
  if ( mysqli_num_rows($result) > 0 ) {
    echo "Hello " . $user . "!" ;
    
    session_start();
    $_SESSION['login']=true;
    $_SESSION['username'] = $_POST['username'];

    while($row = mysqli_fetch_assoc($result)) {
      
      $_SESSION["uid"] = $row["uid"];
      $_SESSION["first_name"] = $row["first_name"];
      $_SESSION["last_name"] = $row["last_name"];
      $_SESSION["email"] = $row["email"];
      $_SESSION["address"] = $row["address"];

    }

    echo '<script> document.getElementsByClassName("navbar")[0].innerHTML = "<a style=\"float:left; background:none; color:white; font-size:25px;\">Definitely Secure Site</a><a href=\"/profile.php\">' . $_SESSION['username']. '</a>"</script>';

    echo "<br><br>Do you want to read <a href=joke.php?user=" . $user . ">your joke</a> now?";

  }

  //otherwise either the username or the password (or both) were not correct
  else {
    echo "<br><br>Incorrect username or password :(<br><br>go <a href=/login.php>back</a>.";
  }
  ?>


  </form>
  </span>
</body>
</html>




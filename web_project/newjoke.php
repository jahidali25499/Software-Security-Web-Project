<html>
<link rel="stylesheet" href="pure-min.css"
<body>

  <?php
  session_start();
  if ( isset($_SESSION['username'] ) ) $user = $_SESSION['username'];
  $text_submitted = "<br><br>" . $_POST['newjoke'];

  //connect to the db and append the new joke
  $conn = new mysqli( "127.0.0.1", "root", "1qaz2wsx", "web_project" );
 
  $sql = "update all_comments set comment = concat( comment, '" . $text_submitted . "' ) where username='" . $user . '"';
  echo $sql;
 
  $result = mysqli_query( $conn, $sql );

  //the below is just html formating
  echo '<span style="position: absolute; margin: auto; top: 0; right: 0; bottom: 0; left: 0; width: 500px; height: 200px;">';
  echo "All good -- see <a href=joke.php?user=" .$user . ">your joke now</a>.";

  ?>


  </form>
  </span>
</body>
</html>







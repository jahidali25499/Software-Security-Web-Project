<html>
<link rel="stylesheet" href="pure-min.css"
<body>

  <?php
  session_start();
  if ( isset($_SESSION['username'] ) ) $user = $_SESSION['username'];
  $text_submitted = "<br><br>" . $_POST['newjoke'];

  echo "submited: " . $text_submitted;

  //connect to the db and append the new joke
  $conn = new mysqli( "127.0.0.1", "root", "1qaz2wsx", "cmp5358" );
  $uid = $_SESSION['uid'];
  $sql = "insert into all_comments (comment, uid) values('" . $text_submitted . "' , '" . $uid ."')";
  $result = mysqli_query( $conn, $sql );
  echo "query was: " . $sql;

  //the below is just html formating
  echo '<span style="position: absolute; margin: auto; top: 0; right: 0; bottom: 0; left: 0; width: 500px; height: 200px;">';
  echo "All good -- see <a href=joke.php?user=" .$user . ">your joke now</a>.";

  ?>


  </form>
  </span>
</body>
</html>







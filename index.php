<?php 
include_once "server.php";

function SQLquery($conn, $sql) : void{
  if ($conn->query($sql) === TRUE) {
    echo "<br> SQL Script executed successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  echo "<br>";

  if (isset($_POST["movie_title"])) {
    echo "Movie Request detected";
  }
  elseif (isset($_POST["genre_name"])) {

    echo "Genre Request detected";
    $name = $_POST["genre_name"];
    echo "<br>name = $name ";
    $description = $_POST["genre_description"];

    $sql = "INSERT INTO genre_list (name, description)
            VALUES ('$name', '$description')";

    SQLquery($conn, $sql);

  } else {
    echo "no input";
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample</title>
  <link rel="stylesheet" href="w3.css">
  
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  
</head>

<body>

  <div class="w3-top w3-bar w3-black">
    <a href="index.php" class="w3-bar-item w3-button">Home</a>
    <a href="index.php?subject=Movie" class="w3-bar-item w3-button">Movie</a>
    <a href="index.php?subject=Genre" class="w3-bar-item w3-button">Genre</a>
  </div>

    <?php 
      if($_SERVER["REQUEST_METHOD"] == "GET"){
        // if($_GET["subject"] == "Movie"){
        //   include "movie.php";
        // } elseif($_GET["subject"] == "Genre")
        // {
        //   include "genre.php";
        // }
        // else {
        //   echo "WELCOME!!";
        // }
        if(isset($_GET["subject"])){
          switch($_GET["subject"]){
            case "Movie":
              include "movie.php";
              break;
            case "Genre":
              include "genre.php";
              break;
            default:
              "URL Doesnt Exist u fkin CUUUNT!";
          }
        }
        else {
          echo "Home page";
        }
      }
    ?>

<div class="container">
  <h1>My First Bootstrap Page</h1>
  <p>This part is inside a .container class.</p>
  <p>The .container class provides a responsive fixed width container.</p>
</div>

</body>

</html>
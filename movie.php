<div class="w3-container w3-teal">
  <h1>Movie Page</h1>
</div>
<div class="w3-container w3-card-4 w3-red w3-round w3-padding-16 w3-center w3-margin">

      <h3 class="w3-left-align">Movie</h3>

      <form action="<?php echo $_SERVER["PHP_SELF"] ?>" method="post" class="w3-left-align">
      
        <div class="w3-row-padding">

          <div class="w3-half">
          <label for="movie_title" class="w3-cell w3-mobile">Movie Title: </label>
          <input required type="text" class="w3-input w3-animate-input"  style="width:30%" name="movie_title"> <br>
          </div>
          <div class="w3-half">
          <label for="movie_directed_by" class="w3-cell w3-mobile">Directed by:</label>
          <input required type="text" class="w3-input w3-animate-input"  style="width:30%" name="movie_directed_by"> <br>
          </div>
          <div class="w3-half">
          <label for="movie_written_by">Written by:</label>
          <input required type="text" class="w3-input w3-animate-input"  style="width:30%" name="movie_written_by"> <br>
          </div>
          
          <div class="w3-half">
          <label for="movie_date_release">Date Release:</label>
          <input required type="date" class="w3-input"  style="width:30%" name="movie_date_release"> <br>
          </div>
        </div>

          <?php
        // get the list of genre

        $sql = "SELECT * FROM genre_list";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
          // output data of each row
          echo "<label for''>Genre:</label> <br>";
          while ($row = $result->fetch_assoc()) {
            $name = $row["name"];
            $id = $row['ID'];
            echo "<input type='checkbox' id ='$id' name='$id' value'$name' class='w3-check w3-margin-left'>";
            echo "<label for='$id' class='w3-margin-left'>$name</label> <br>";
          }
        }
        ?>
        <button class="w3-button w3-round w3-green w3-margin-top">Add Movie</button>

      </form>
    </div>

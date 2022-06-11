<div class="w3-container w3-card w3-blue w3-round w3-padding-16 w3-margin">
      <h3 class="w3-left-align">Genre</h3>
      <form action="<?php echo $_SERVER["PHP_SELF"] ?>?subject=addedgenre" method="post" class="w3-left-align">
          <label for="genre_name">Name: </label>
          <input required class="w3-input w3-animate-input" type="text" name="genre_name" style="width:30%"> <br>

          <label for="genre_description">Description</label>
          <input class="w3-input w3-animate-input" type="text" name="genre_description" style="width:30%"> <br>
        <button class="w3-button w3-round w3-green">Add Genre</button>
      </form>
    </div>
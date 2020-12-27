<?php
  include "db.php";
  $id = mysqli_real_escape_string($con,$_POST['hidden_movie_id']);
  $db = $con;
 ?>

<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

  <title>
    <?php
    // query
      $sql = "select movie_name, movie_image from Movies where movie_id=".$id;
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_array($result);
      $image = $row[1];
      echo $row[0];
     ?>
  </title>

  <style>
@import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@300&display=swap');
</style>

</head>

<body>
  <div style="background-image: url('movies_img/<?php echo $image;?>');" class="header-container">
    <h2 class="movie-name">
      <?php
      $sql = "select movie_name from Movies where movie_id=".$id;
      $result = mysqli_query($con, $sql);
      $row = mysqli_fetch_array($result);
      echo $row[0];
       ?>
    </h2>
  </div>

  <div class="content-container">
    <div class="selector-btn">
      <button id="info-btn" class="btn btn-primary" type="button" name="button">box office info</button>
      <button id="casts_director-btn" class="btn btn-primary" type="button" name="button">Casts and director</button>
      <button id="synopsis-btn" type="button" class="btn btn-primary" name="button">synopsis</button>
      <button id="songs-btn" type="button" class="btn btn-primary" name="button">Songs</button>
    </div>

    <div class="info-container">
      <div style="padding-left: 5px;" class="card movie-type">
        <h5>
          type:

          <?php
          // query
            $sql = "select movie_type from Movies where movie_id=".$id;
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
           ?>
        </h5>
      </div>
      <div style="padding-left: 5px;" class="card release-date">
        <h5>
          release date:

          <?php
          // query
            $sql = "select release_date from Movies where movie_id=".$id;
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
           ?>
        </h5>
      </div>
      <div style="padding-left: 5px;" class="card gross-income">
        <h5>
          gross income: $

          <?php
          // query
            $sql = "select gross_income from Movies where movie_id=".$id;
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
           ?>
        </h5>
      </div>
      <div style="padding-left: 5px;" class="card duration">
        <h5>
          duration:

          <?php
          // query
            $sql = "select duration from Movies where movie_id=".$id;
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
           ?>
        </h5>
      </div>
      <div style="padding-left: 5px;" class="card imbd">
        <h5>
          imdb:

          <?php
          // query
            $sql = "select IMDB from Movies where movie_id=".$id;
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
           ?>
        </h5>
      </div>
      <div style="padding-left: 5px;" class="card rotten-tomatoes">
        <h5>
          rotten tomatoes:

          <?php
          // query
            $sql = "select rotten_tomatoes from Movies where movie_id=".$id;
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
           ?>
        </h5>
      </div>
      <div style="padding-left: 5px;" class="card genre">
        <h5>
          genre:

          <?php
          // query
            $sql = "select genre from genre inner join movies on genre.movie_id=movies.movie_id and movies.movie_id=".$id;
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
           ?>
        </h5>
      </div>
      <div style="padding-left: 5px;" class="card production-house">
        <h5>
          production house:

          <?php
          // query
            $sql = "select production_house.house_name from production_house inner join produceded_by on produceded_by.production_id = production_house.production_id
            inner join movies on movies.movie_id=
            produceded_by.movie_id and movies.movie_id=".$id;
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
           ?>
        </h5>
      </div>
      <div style="padding-left: 5px;" class="card country">
        <h5>
          Country:

          <?php
          // query
            $sql = "select production_house.country from production_house inner join produceded_by on produceded_by.production_id = production_house.production_id
            inner join movies on movies.movie_id=
            produceded_by.movie_id and movies.movie_id=".$id;
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
           ?>
        </h5>
      </div>
    </div>

    <div class="synopsis-container">
      <h5>
        synopsis:

        <?php
        // query
          $sql = "select synopsis from Movies where movie_id=".$id;
          $result = mysqli_query($con, $sql);
          $row = mysqli_fetch_array($result);
          echo $row[0];
         ?>
      </h5>
    </div>

    <div class="casts_director-container">
      <div style="padding-left: 5px;" class="casts card">
        <h5>
          casts:

          <?php
          // query
            $sql = "select cast from cast inner join movies on cast.movie_id = movies.movie_id and movies.movie_id=".$id;
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
            $count = mysqli_num_rows($result);
            for($i=0; $i<$count-1; $i++){
              $row = mysqli_fetch_array($result);
              echo ",  ".$row[0];
            }

           ?>
        </h5>
      </div>

        <div style="padding-left: 5px;" class="director card">
          <h5>
          director:

          <?php
          // query
            $sql = "select director.director_name from director inner join directed_by on directed_by.director_id = director.director_id
            inner join movies on movies.movie_id=
            directed_by.movie_id and movies.movie_id=".$id;
            $result = mysqli_query($con, $sql);
            $row = mysqli_fetch_array($result);
            echo $row[0];
           ?>
           </h5>
        </div>

    </div>

    <div class="Songs-container">
      <h5>
        Songs:
        <br />
        <?php
        // query
          $sql = "select distinct songs.song_name from songs inner join movies on movies.movie_id = songs.movie_id inner join singer on singer.song_id = songs.song_id and movies.movie_id=".$id;
          $result = mysqli_query($con, $sql);
          $count = mysqli_num_rows($result);
          for($i=0; $i<$count; $i++){
            $row = mysqli_fetch_array($result);
            echo $row[0].":               singers: ";
            $sql1 = "select singer.singer from singer inner join songs on singer.song_id = songs.song_id and songs.song_name='".$row[0]."'";
            $result1 = mysqli_query($con, $sql1);
            $count1 = mysqli_num_rows($result1);
            for($j=0; $j<$count1; $j++){
              $row1 = mysqli_fetch_array($result1);
              echo $row1[0];
              if($j!=$count1-1){
                echo ", ";
              }
            }
            echo "<br />";
          }
         ?>
      </h5>
    </div>

  </div>


  <!-- Optional JavaScript; choose one of the two! -->

  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="script.js" charset="utf-8"></script>
</body>

</html>

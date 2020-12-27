<?php
include "../db.php";
$db = $con;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Movie Recommend</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- CSS Bootstrap -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

  <!-- Nav Bar -->

  <nav class="navbar sticky-top navbar-expand-lg navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
      <a class="navbar-brand" href="#">
      IMS_Project
      </a>

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" aria-current="page" href="../movie_home.php">Home</a>
          <a class="nav-link" href="../movies_list.php">Movies</a>
          <a class="nav-link active" href="../find_movie.php">Find</a>
        </div>
      </div>

      <!-- movie search bar -->
      <form class="d-flex" method="post" action="search_movie.php">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </nav>

  <?php

    $sql = "SELECT * FROM movies order by duration desc";
    $result = mysqli_query($db,$sql);

    if(mysqli_num_rows($result) > 0)
    {
  ?>

  <div class="row row-cols-1 row-cols-md-4 g-4" style="padding-left: 25px; padding-top: 25px;">

    <?php
      while($row = mysqli_fetch_array($result))
      {
    ?>

    <form method="post" action="../movie.php">
      <div class="col">
        <div class="card" style="width: 18rem; height: 620px;">
          <img src="../movies_img/<?php echo $row["movie_image"]; ?>" class="card-img-top" alt="...">
          <div class="card-body">
            <h4 class="card-title"><?php echo $row["movie_name"]; ?></h4>

            <p>IMDB: <?php echo $row["IMDB"]; ?></p>
            <p>Rotten Tomatoes: <?php echo $row["rotten_tomatoes"]; ?></p>
          </div>
          <input type="hidden" name="hidden_movie_id" value="<?php echo $row["movie_id"]; ?>" />
          <button type="submit" name="submit" value="view_team" class="btn btn-outline-primary">View</button>
        </div>
      </div>
    </form>

    <?php
      }
    ?>

  </div>

  <?php
    }
  ?>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>

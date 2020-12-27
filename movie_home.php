<?php
    include "db.php";
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
          <a class="nav-link active" aria-current="page" href="movie_home.php">Home</a>
          <a class="nav-link" href="movies_list.php">Movies</a>
          <a class="nav-link" href="find_movie.php">Find</a>
        </div>
      </div>

      <!-- movie search bar -->
      <form class="d-flex" method="post" action="search_movie.php">
        <input class="form-control me-2" type="text" placeholder="Search" aria-label="Search" name="movie_name_searched">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>

    </div>
  </nav>

  <br>

  <!-- Movie Carousel -->


  <div class="container" style="padding-top: 30px;">
    <div id="movieCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
      <ol class="carousel-indicators">
        <li data-bs-target="#movieCarousel" data-bs-slide-to="0" class="active"></li>
        <li data-bs-target="#movieCarousel" data-bs-slide-to="1"></li>
        <li data-bs-target="#movieCarousel" data-bs-slide-to="2"></li>
      </ol>

      <div class="carousel-inner">

        <div class="carousel-item active"  data-bs-interval="4000">
          <form method="post" action="movie.php">
            <img class="d-block w-100" src="img_caraousel/the_revenant.jpg" alt="First slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>The Revenant</h5>
              <p>IMDB: 8.0  |  Rotten Tomatoes: 78%</p>
              <input type="hidden" name="hidden_movie_id" value="1" />
              <button type="submit" name="submit" value="view_team" class="btn btn-outline-primary">View</button>
            </div>
          </form>
        </div>

        <div class="carousel-item"  data-bs-interval="4000">
          <form method="post" action="movie.php">
            <img class="d-block w-100" src="img_caraousel/jllb2.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Jolly LLB 2</h5>
              <p>IMDB: 7.2  |  Rotten Tomatoes: 67%</p>
              <input type="hidden" name="hidden_movie_id" value="2" />
              <button type="submit" name="submit" value="view_team" class="btn btn-outline-primary">View</button>
            </div>
          </form>
        </div>

        <div class="carousel-item"  data-bs-interval="4000">
          <form method="post" action="movie.php">
            <img class="d-block w-100" src="img_caraousel/dil_bec.jpg" alt="Second slide">
            <div class="carousel-caption d-none d-md-block">
              <h5>Dil Bechara</h5>
              <p>IMDB: 7.9  |  Rotten Tomatoes: 78%</p>
              <input type="hidden" name="hidden_movie_id" value="7" />
              <button type="submit" name="submit" value="view_team" class="btn btn-outline-primary">View</button>
            </div>
          </form>
        </div>

      </div>

      <a class="carousel-control-prev" href="#movieCarousel" role="button" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </a>

      <a class="carousel-control-next" href="#movieCarousel" role="button" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </a>
    </div>
  </div>

  <!-- Action movies -->

  <div style="padding-top: 50px; padding-left: 30px;">
    <h2>Action</h2>

    <?php
      $query = "select * from movies inner join genre on movies.movie_id = genre.movie_id
                 where genre.genre = 'Action' order by IMDB desc limit 4";
      $result = mysqli_query($db,$query);

      if(mysqli_num_rows($result) > 0)
      {
    ?>

    <div class="row row-cols-1 row-cols-md-4 g-4">

      <?php
        while($row = mysqli_fetch_array($result))
        {
      ?>

      <form method="post" action="movie.php">
        <div class="col">
          <div class="card" style="width: 18rem; height: 620px;">
            <img src="movies_img/<?php echo $row["movie_image"]; ?>" class="card-img-top" alt="...">
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

  </div>

    <!-- Comedy movies -->

    <div style="padding-top: 50px; padding-left: 30px;">
    <h2>Comedy</h2>

    <?php
      $query = "select * from movies inner join genre on movies.movie_id = genre.movie_id
                 where genre.genre = 'Comedy' order by IMDB desc limit 4";
      $result = mysqli_query($db,$query);

      if(mysqli_num_rows($result) > 0)
      {
    ?>

    <div class="row row-cols-1 row-cols-md-4 g-4">

      <?php
        while($row = mysqli_fetch_array($result))
        {
      ?>

      <form method="post" action="movie.php">
        <div class="col">
          <div class="card" style="width: 18rem; height: 620px;">
            <img src="movies_img/<?php echo $row["movie_image"]; ?>" class="card-img-top" alt="...">
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

  </div>

  </div>

<!-- Sci-Fi movies -->

<div style="padding-top: 50px; padding-left: 30px;">
<h2>Sci-Fi</h2>

<?php
  $query = "select * from movies inner join genre on movies.movie_id = genre.movie_id
             where genre.genre = 'Sci-Fi' order by IMDB desc limit 4";
  $result = mysqli_query($db,$query);

  if(mysqli_num_rows($result) > 0)
  {
?>

<div class="row row-cols-1 row-cols-md-4 g-4">

  <?php
    while($row = mysqli_fetch_array($result))
    {
  ?>

  <form method="post" action="movie.php">
    <div class="col">
      <div class="card" style="width: 18rem;  height: 620px;">
        <img src="movies_img/<?php echo $row["movie_image"]; ?>" class="card-img-top" alt="...">
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

</div>



  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

</body>
</html>

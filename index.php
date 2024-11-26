<?php include "partials/_header.php" ?>


<!-- slider starts here -->
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="img/slider-1.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider-2.png" class="d-block w-100" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/slider-3.png" class="d-block w-100" alt="...">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<div class="container my-3">
  <h2 class="text-center">iDiscuss - Browse Categories</h2>
  <div class="row">
    <div class="col-md-6 my-4">
      <!-- fetch all categories -->
      <?php $sql = "SELECT * FROM `categories`;";
      $result = mysqli_query($conn, $sql);
      while ($row = mysqli_fetch_assoc($result)) { ?>
        <!-- card starts here -->

        <div class="card" style="width: 18rem;">
          <img src="https://images.unsplash.com/photo-1461988320302-91bde64fc8e4?ixid=2yJhcHBfaWQiOjEyMDd9" class="card-img-top" alt="Image of <?php echo $row['category_name'] ?> category">
          <div class="card-body">
            <h5 class="card-title"><a href=threadlist.php?catid=<?php echo $row['category_id'] ?>><?php echo $row['category_name'] ?></a></h5>
            <p class="card-text"><?php echo substr($row['category_description'], 0, 90) . "..."; ?></p>
            <a href="threadlist.php?catid=<?php echo $row['category_id'] ?>" class="btn btn-primary">View Thread</a>
          </div>
        </div>
    </div>

  <?php }
  ?>
  </div>
</div>
<?php include "partials/_footer.php" ?>
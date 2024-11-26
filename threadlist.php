<?php
require "partials/_header.php";
$id = $_GET["catid"];
$sql = "SELECT * FROM `categories` WHERE category_ID=$id;";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$cat = $row['category_name'];
$catdesc = $row['category_description'];
?>
<div class="py-5 container">
  <div class="jumbotron">
    <h1 class="display-4">Welcome to <?php echo $cat ?> threads</h1>
    <p class="lead"><?php echo $catdesc ?></p>
    <hr class="my-4">
    <p>This a peer to peer forum. Don't start a topic in wrong category.
      Don't cross-post the same thing in multiple topics.
      Don't post no-content replies.
      Don't divert a topic by changing it midstream.</p>
    <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
  </div>
  <h2 class="py-3">Browse Questions</h2>
  <div class="media">
    <img src="img/default_img.jpg" width="64px" class="mr-3" alt="users_pfp">
    <div class="media-body">
      <h5 class="mt-0">A random question</h5>
      Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.
    </div>
  </div>
</div>
<?php require "partials/_footer.php"; ?>
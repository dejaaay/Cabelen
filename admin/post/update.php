<?php
include 'connect.php';
$id = $_GET['updateid'];
$sql="Select * from `posts` where id=$id";
$result=mysqli_query($con,$sql);
$row=mysqli_fetch_assoc($result);
$image=$row['image'];
$title=$row['title'];
$description=$row['description'];

if (isset($_POST['submit'])) {
  $image = $_POST['image'];
  $title = $_POST['title'];
  $description = $_POST['description'];

  $sql = "update `posts` set id=$id, image='$image', title='$title', 
  description='$description' where id=$id";
  $result = mysqli_query($con, $sql);
  if ($result) {

    header('location:create.php');
  } else {
    die(mysqli_error($con));
  }
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Update Announcement</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/6e2e82ae66.js" crossorigin="anonymous"></script>
  <link href="asset/create.css" rel="stylesheet">
  <link rel="shortcut icon" href="https://raw.githubusercontent.com/dejaaay/Cabelen/main/assets/img/Cabalen.png">
</head>

<body>
  <!--Navbar-->
  <nav class="navbar navbar-expand-sm navbar-dark">
      <div class="container-fluid">
        <a class="navbar-brand logo" href="index.php" id="logo">
            <img src="asset/CabalenLight.png" alt="Cabalen Logo" width="120" height="72">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="collapsibleNavbar">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </nav>
  <!--End of Navbar-->
  <div class="d-flex">
    <!-- Make Announcement -->
    <div class="container p-5">
      <div class="card">
        <h5 class="card-header bg-success text-white text-center">Make Announcement</h5>
        <div class="card-body">
          <form action="#" method="post">
            <div class="mb-3">
              <label>File input: </label>
              <input class="form-control" type="file" id="image" name="image" value=<?php
              echo $image; ?>>
            </div>
            <div class="mb-3">
              <label>Title:</label>
              <input type="text" class="form-control" id="title" name="title" value=<?php
              echo $title; ?>>
            </div>
            <div class="mb-3">
              <label>Description:</label>
              <textarea class="form-control" id="description" rows="3" name="description" value=<?php
              echo $description; ?>></textarea>
            </div>

            <input type="submit" class="btn btn-success" name="submit"></input>
          </form>
        </div>
      </div>
    </div>
    <!-- End of Make Announcement -->
  </div>

  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"
    integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.min.js"
    integrity="sha384-cuYeSxntonz0PPNlHhBs68uyIAVpIIOZZ5JqeqvYYIcEL727kskC66kF92t6Xl2V"
    crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4"
    crossorigin="anonymous"></script>
</body>

</html>
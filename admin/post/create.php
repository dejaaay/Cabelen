<?php
session_start();
include 'connect.php';
if (!isset($_SESSION['UserData']['user_email'])) {
  header("location:../../signup.php");
  exit;
}
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bootstrap demo</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  <script src="https://kit.fontawesome.com/6e2e82ae66.js" crossorigin="anonymous"></script>
  <link href="asset/create.css" rel="stylesheet">
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
    </nav>
  <!--End of Navbar-->
  <div class="d-flex p-3">
    
    <!-- Make Announcement -->
    <div class="container">
      <table class="table table-striped table-hover">
        <thead class="">
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Image</th>
            <th scope="col">Title</th>
            <th scope="col">Description</th>
            <th scope="col">Operation</th>
          </tr>
        </thead>

        <?php
  $sql = "Select * from `posting`";
  $result = mysqli_query($con, $sql);
  if ($result) {
    while ($row = mysqli_fetch_assoc($result)) {
      $id = $row['id'];
      $image = $row['image'];
      $title = $row['title'];
      $description = $row['description'];
      echo '<tr>
      <th scope="row">' . $id . '</th>
      <td>' . $image . '</td>
      <td>' . $title . '</td>
      <td>' . $description . '</td>
      <td>
      <button class="btn btn-success">
        <a href="update.php? updateid=' . $id . '" class="text-light">Update</a></button>
        <button class="btn btn-danger">
        <a href="delete.php? deleteid=' . $id . '" class="text-light">Remove</a></button>
        </td>
      </tr>';
    }
    ;


  }
  ;

  ?>
        <tbody>
        </tbody>
      </table>
      <button class="btn btn-success my-5">
        <a href="announcement.php" class="text-light">Add Announcement</a>
      </button>
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
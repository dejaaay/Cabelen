
<?php
?>
<div class="container">
<?php
require 'admin/post/connect.php';

$sql = "Select * from `posting`";
$result = mysqli_query($con, $sql);
if ($result) {
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['id'];
    $image = $row['image'];
    $title = $row['title'];
    $description = $row['description'];
    echo '<div class="card">
    <div class="card-body">
        <h5 class="card-title">'. $title .'</h5>
        <img src="'.$image.'" class="card-img-bottom" alt="...">
    </div>
    <p class="card-text">'. $description .'</p>
</div>
    
</div>';
  }
  ;


}
;
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
    <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <!-- Latest compiled and minified CSS -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
        <!-- Latest compiled JavaScript -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
        <link href="css/events.css" rel="stylesheet">
        <link rel="shortcut icon" href="https://raw.githubusercontent.com/dejaaay/Cabelen/main/assets/img/Cabalen.png">
        <title>Events</title>
    </head>
    
    <body>
    <?php include "navbar.php"; ?>
    <ul>
        <?php
        ?>
        <div class="events">
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
            echo 
            '
            <div class="container">
              <div class="row-lg-12">
                <div class="col-md-4">
                  <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">'. $title .'</h5>
                        <img src="'.$image.'" class="card-img-bottom" alt="...">
                    </div>
                    <p class="card-text">'. $description .'</p>
                    </div>  
                  </div>
                </div>
              </div>
            </div>
            
            ';
          }
          ;


        }
        ;
        ?>
    </ul>
      </body>
      </html>
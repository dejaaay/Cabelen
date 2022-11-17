<?php session_start();?>
<!doctype html>
<html lang="en">
    <head>
        <title>Cabalen Landing Page</title>
        <link rel="shortcut icon" href="https://raw.githubusercontent.com/dejaaay/Cabelen/main/assets/img/Cabalen.png">
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href = "darren-cssFile.css"></link>
        <link href="style-peter.css" rel="stylesheet" />
        <link href="style-jm.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <!--removed navbar -->
        <!--Current News and Updates//// Instead of current news and updates, we use video (greetings in figma)--> 
    <iframe 
        class= "center"
        width="1700" 
        height="900" 
        src="https://www.youtube.com/embed/-3k-SC22zbA?autoplay=1" 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
    </iframe>
    <br><br><br>
    <!--space here for Current news and updates grid-->
    <!--Video for about -->
    <iframe 
        class= "center"
        width="1700" 
        height="900" 
        src="https://www.youtube.com/embed/tuO6oCxZU-s" 
        title="YouTube video player" 
        frameborder="0" 
        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
        allowfullscreen>
    </iframe>
        <!--Videos eme daw
        <div class="p-5" id="video-eme">
            <iframe width="1000" height="630" src="https://www.youtube.com/embed/mcxMnVD26FU" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>-->

        <!-- about the page -->
        <!-- Content Section 1 -->
    <section id="scroll">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6 order-lg-2">
                        <div class="p-5"><img class="img-fluid" src="assets/img/HotAirBalloonClark01.jpg" alt="Cabalen Image 1"/></div>
                    </div>
                    <div class="col-lg-6 order-lg-1">
                        <div class="p-5">
                            <h2 class="display-4">Explore Pampanga</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    <!-- Content Section 2 -->
    <section>
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <div class="p-5"><img class="img-fluid" src="assets/img/LigliganParul01.jpg" alt="Cabalen Image 2"/></div>
                    </div>
                    <div class="col-lg-6">
                        <div class="p-5">
                            <h2 class="display-4">Learn about the Culture</h2>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quod aliquid, mollitia odio veniam sit iste esse assumenda amet aperiam exercitationem, ea animi blanditiis recusandae! Ratione voluptatum molestiae adipisci, beatae obcaecati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!--News And Blogs-->
        <div id="padding">
        <h2 id="NewsAndBlogs">News and blogs</h2>
        </div>
        <div class= "container">
            <div class= "row">
                <div class= "col">
                    <div class="card" style="width: 18rem;">
                    <img src="https://www.karlaroundtheworld.com/wp-content/uploads/2019/12/Pampanga-141-of-177-scaled.jpg" class="card-img-top" alt="pampanga art" width="150" height="150">
                        <div class="card-body">
                            <h5 class="card-title">Kapampangan Art</h5>
                            <p class="card-text">There is no doubt that Pampanga has a very rich culture and tradition. There are some of these cultures that are famous not only in Pampanga but in the whole country</p>
                            <a href="https://kapampangan.org/is-there-kapampangan-art/" class="btn btn-info">View article</a>
                        </div>
                    </div>
                </div>
        <div class="col">      
            <div class="card" style="width: 18rem;">
                <img src="https://thehappytrip.com/wp-content/uploads/2019/08/IMG_20190812_095842.jpg" class="card-img-top" alt="Puning Hot Spring"width="150" height="150">
                <div class="card-body">
                    <h5 class="card-title">Stakeholders urge reopening of Puning Hot Sprin</h5>
                    <p class="card-text">CITY OF SAN FERNANDO Tourism stakeholders are calling for the reopening of the Puning Hot Spring located in between Angeles City and Porac town.</p>
                    <a href="https://www.sunstar.com.ph/article/1944890/pampanga/local-news/stakeholders-urge-reopening-of-puning-hot-spring" class="btn btn-info">View Article</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card" style="width: 18rem;">
                <img src="https://sansimonpampanga.gov.ph/gwt/images/logo/2019/LGU%20Logo.png" class="card-img-top" alt="San Simon Pampanga Municipal Logo"width="150" height="150">
                <div class="card-body">
                    <h5 class="card-title">San Simon village wins Best Gulayan Sa Barangay</h5>
                    <p class="card-text">SAN SIMON Barangay Santa Monica of this town was named champion in the provincial level Search for Best Gulayan sa Barangay (GSB) in Pampanga.</p>
                    <a href="https://www.sunstar.com.ph/article/1944540/pampanga/local-news/san-simon-village-wins-best-gulayan-sa-barangay" class="btn btn-info">View Article</a>
                </div>
            </div>
        </div>
            </div>
        </div>
            
        <!-- <div id="Footer"
            <div id="newsletter"><!--Newsletter
                <h1>Newsletter</h1>
            </div>
            
            <div id="about_us"><!--About us sa pinakababa
                
                <div class="aboutInfo">
                    <h1>About Us</h1>
                    <p>In Tagalog, the Kapampangan term<br>"Cabalen" translates to "Kabayan." We<br>understand your time is valuable and only<br>want the best and finest<br><br> Our goal is to give you access to a<br>Pampanga website that provides the best<br>travel spots, services, food, culture,<br>and information at your fingertips to help you<br>make the most of your vacation!</p>
                </div>
                <div class ="aboutInfo"><!--Links??????
                    <a href="#" id="FAQ">FAQS</a><br><br>
                    <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ" id="FAQ" target="_blank">Testing</a>
                    <br><a href="#" id="FAQ">test link 3</a>
                    <br><a href="#" id="FAQ">test link 4</a>
                </div>
                <div class ="aboutInfo"><!--contact us--><!--Lalagyan mo na lang mamaya ng pics
                    <h1>Contact Us</h1>
                    <p>test</p>
                </div>
            </div>
        </div>-->
      
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

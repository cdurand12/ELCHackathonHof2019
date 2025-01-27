<?php
error_reporting (0 ) ;
$servername = "localhost";
$username = "username";
$password = "password";

//try {
//    $conn = new PDO("mysql:host=$servername;dbname=elcdb", $username, $password);
//   // set the PDO error mode to exception
//    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    echo "Connected successfully";
//   }
//catch(PDOException $e)
//    {
//    echo "Connection failed: " . $e->getMessage();
//    }

?>
<!DOCTYPE html>s
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Landing Page - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
    <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet"
        type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/landing-page.min.css" rel="stylesheet">

    <script>

        function searchOnClick() {
            alert("Start of Function");

            var container = document.getElementById("row1");

            var el = document.createElement("div");
            el.className = "card";
            el.id = "card" + i;
            el.innerHTML = "ok";
            container.append(el);
        }

        function searchSel(n) {
            if (n == 1) {
                jQuery(".card_lip").parent().show();
                jQuery(".card_fon").parent().hide();
                jQuery(".card_eye").parent().hide();
            } else if (n == 2) {
                jQuery(".card_lip").parent().hide();
                jQuery(".card_fon").parent().show();
                jQuery(".card_eye").parent().hide();
            } else {
                jQuery(".card_lip").parent().hide();
                jQuery(".card_fon").parent().hide();
                jQuery(".card_eye").parent().show();
            }
        }
    </script>

</head>

<body>
    <!-- Navigation -->
    <nav class="navbar sticky-top navbar-dark bg-dark">
        <div class="container">
            <a class="navbar-brand" href="#">Estee Lauder</a>
            <div class="dropdown">
                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Product Categories
                </button>
                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                    <a class="dropdown-item" id="btn_lip" onclick="searchSel(1)" href="#">Lip Stick</a>
                    <a class="dropdown-item" id="btn_fon" onclick="searchSel(2)" href="#">Foundation</a>
                    <a class="dropdown-item" id="btn_eye" onclick="searchSel(3)" href="#">Eye Shadow</a>
                </div>
            </div>
        </div>
    </nav>


    <!-- Masthead -->
    <header class="masthead text-white text-center">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-xl-9 mx-auto">
                    <h1 class="mb-5"></h1>
                </div>
                <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                    <form>
                        <div class="form-row">

                        </div>

                    </form>
                </div>
            </div>
        </div>
    </header>

    <!-- Icons Grid -->
    <section class="features-icons bg-light text-center">
        <div class="container">

            <div id="row1" class=row>



<!--                <div class="col-lg-4" id=11>
                    <div class="card">
                        <img src="..." class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"></h5>
                            <p class="card-text"></p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>

                    </div>
                </div>



-->





<?php
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "elcdb";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM products";$servername = "localhost";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        $row["catogoryId"]
        ?>
  

                <div class="col-lg-4" id=11>
                    <div class="card  <?php  if ($row["catogoryId"]=="1"){echo "card_lip";}else if ($row["catogoryId"]=="2"){echo "card_fon";}else {echo "card_eye";}?>">
                        <img src="img/eyeshadow1.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title"><?php  echo   $row["name"];?></h5>
                            <p class="card-text"><?php  echo   $row["productDes"];?></p>
                            <a href="product.php?id=<?php echo $row["catogoryId"];?>" class="btn btn-primary">Buy Product</a>
                        </div>

                    </div>
                </div>
                <?php  }
} else {
    echo "0 results";
}
$conn->close();
?>
                
            </div>

        
            <!-- Testimonials -->
            <section class="testimonials text-center bg-light">
                <div class="container">
                    <h2 class="mb-5">What people are saying...</h2>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                <img class="img-fluid rounded-circle mb-3" src="img/testimonials-1.jpg" alt="">
                                <h5>Margaret E.</h5>
                                <p class="font-weight-light mb-0">"This is fantastic! Thanks so much guys!"</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                <img class="img-fluid rounded-circle mb-3" src="img/IMAGE000000.jpeg" alt="">
                                <h5>Travis C.</h5>
                                <p class="font-weight-light mb-0">"Estee Lauder is amazing. I've been using their facial
                                    cream lots and its
                                    super nice
                                    landing pages."</p>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="testimonial-item mx-auto mb-5 mb-lg-0">
                                <img class="img-fluid rounded-circle mb-3" src="img/testimonials-3.jpg" alt="">
                                <h5>Sarah W.</h5>
                                <p class="font-weight-light mb-0">"Thanks so much for making these free resources
                                    available to
                                    us!"</p>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Call to Action -->
            <section class="call-to-action text-white text-center">
                <div class="overlay"></div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-9 mx-auto">
                            <h2 class="mb-4"></h2>
                        </div>
                        <div class="col-md-10 col-lg-8 col-xl-7 mx-auto">
                            <form>
                                <div class="form-row">
                                    <div class="col-12 col-md-9 mb-2 mb-md-0">
                                        <input type="email" class="form-control form-control-lg"
                                            placeholder="Enter your email...">
                                    </div>
                                    <div class="col-12 col-md-3">
                                        <button type="submit" class="btn btn-block btn-lg btn-primary">Donate</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>

            <!-- Footer -->
            <footer class="footer-fluid bg-light">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 h-100 text-center text-lg-left my-auto">
                            <ul class="list-inline mb-2">
                                <li class="list-inline-item">
                                    <a href="#">About</a>
                                </li>
                                <li class="list-inline-item">&sdot;</li>
                                <li class="list-inline-item">
                                    <a href="#">Contact</a>
                                </li>
                                <li class="list-inline-item">&sdot;</li>
                                <li class="list-inline-item">
                                    <a href="#">Terms of Use</a>
                                </li>
                                <li class="list-inline-item">&sdot;</li>
                                <li class="list-inline-item">
                                    <a href="#">Privacy Policy</a>
                                </li>
                            </ul>
                            <p class="text-muted small mb-4 mb-lg-0">&copy; Your Website 2019. All Rights Reserved.</p>
                        </div>
                        <div class="col-lg-6 h-100 text-center text-lg-right my-auto">
                            <ul class="list-inline mb-0">
                                <li class="list-inline-item mr-3">
                                    <a href="#">
                                        <i class="fab fa-facebook fa-2x fa-fw"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item mr-3">
                                    <a href="#">
                                        <i class="fab fa-twitter-square fa-2x fa-fw"></i>
                                    </a>
                                </li>
                                <li class="list-inline-item">
                                    <a href="#">
                                        <i class="fab fa-instagram fa-2x fa-fw"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </footer>


            <!-- Bootstrap core JavaScript -->
            <script src="vendor/jquery/jquery.min.js"></script>
            <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

            <script src="https://unpkg.com/react@16/umd/react.development.js" crossorigin></script>
            <script src="https://unpkg.com/react-dom@16/umd/react-dom.development.js" crossorigin></script>

            <!-- Load our React component. -->
            <script src="like_button.js"></script>

</body>

</html>
<?php


?>
            <div id="row1" class=row>


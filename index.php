<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href= "css/materialize.min.css">
    <title>D' Other</title>
    <style>
        body {
            background-color: #fce4ec ;
        }
        body, h5 {
          font-family: 'Times New Roman', Times, serif ;
        }
        body {
        display: flex;
        min-height: 100vh;
        flex-direction: column;
        }

        main {
        flex: 1 0 auto;
        }
        </style>
</head>
<body background="red lighten-4">
    <nav class="nav-wrapper pink-lighten-5">
            <div class="container">
                    <a href="#" class= "brand-logo black-text center"><h5><span>D' Other</span></h5></a>
                    <a href="#" class="sidenav-trigger left" data-target="mobile-links">
                     <i class="material-Icons black-text">menu</i>
                    </a>
                     <ul class="right hide-on-med-and-down">
                             <li><a href="login.php" class = "waves-effect waves-light btn red lighten-2">Login</a></li>
                             <li><a href="registration.php" class = "waves-effect waves-light btn red lighten-2">Register</a></li>
                             <li><a href="logout.php" class = "waves-effect waves-light btn red lighten-2">Logout</a></li>
                     </ul>
            </div>
          
    </nav>
    <ul class="sidenav #f48fb1" id="mobile-links">
        <li><a href="index.php"><i class="material-icons Black-text">home</i>Home</a></li>
        <li><a href="about.php"><i class="material-icons Black-text">help</i>About</a></li>
      </ul>
    <div class="row">
        <div class="col s12 m6 l4">
            <div class="card large">
                <div class="card-image">
                            <img class="materialboxed" width="650" src="img/Men Expression Print Contrast Binding Tee.jpg" alt="">
                </div>
                    <div class="card-content z-depth-2 ">
                        <span class="card-title">Mellow T-shirt</span> 
                        <p>Php 250.00</p>
                    </div>
                    <div class="card-action waves-effect waves-light red">
                        <a href="form1.php">Click here to avail!</a> 
                    </div>
                </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card large">
                <div class="card-image">
                            <img class="materialboxed" width="650" src="img/Graphic Tees, Tops, + Hoodies for Men.png" alt="">
                </div>
                    <div class="card-content z-depth-2">
                        <span class="card-title">Graphic Tees</span> 
                        <p>Php 280.00</p>
                    </div>
                    <div class="card-action waves-effect waves-light red">
                        <a href="form2.php">Click here to avail!</a> 
                    </div>
            </div>
        </div>
        <div class="col s12 m6 l4">
            <div class="card large">
                <div class="card-image">
                            <img class="materialboxed" width="650" src="img/Trizchlor White Women Shoes New Chunky Sneakers For Women Lace-Up White Vulcanize Shoes Casual Fashion Dad Shoes Platform Sneakers Basket - White1 _ 37.jpg" alt="">
                </div>
                    <div class="card-content z-depth-2">
                        <span class="card-title"> New Chunky Sneakers For Women</span> 
                        <p>Php 350.00</p>
                    </div>
                    <div class="card-action waves-effect waves-light red">
                        <a href="form3.php">Click here to avail!</a> 
                    </div>
            </div>
        </div>
    </div>


    <footer class="page-footer">
        <div class="container">
          <div class="row">
            <div class="col s12 m6 l4">
                <h5 class="white-text">Customer Service</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="helpcentre.php">Help Center</a></li>
                <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/profile.php?id=100092770938255">Message Us</a></li>
              </ul>
            </div>
            <div class="col s12 m6 l4">
              <h5 class="white-text">About Pre-loved Trends</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="about.php">About Us</a></li>

                <li><a class="grey-text text-lighten-3" href="privacypolicy.php">Privacy Policy</a></li>

              </ul>
            </div>
            <div class="col s12 m6 l4">
              <h5 class="white-text">Follow Us</h5>
              <ul>
                <li><a class="grey-text text-lighten-3" href="https://www.facebook.com/profile.php?id=100092770938255">Facebook</a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="footer-copyright">
          <div class="container">
          © 2023 D' Other. All Rights Reserved.
          </div>
        </div>
      </footer>

<script src= "js/jquery.js"></script>
<script src="js/materialize.min.js"></script>
<script>
    $(document).ready(function(){
    $('.sidenav').sidenav();
  });

</script>

<script>
      $(document).ready(function(){
    $('.materialboxed').materialbox();
  });
</script>
</body>
</html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!--Import Google Icon Font-->
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
     <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href= "css/materialize.min.css">
    <title>About Us</title>
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
<body background="red lighten-5">     
<nav class="nav-wrapper pink-lighten-5">
    <div class="container">
            <a href="#" class= " brand-logo black-text center"><h5><span> About Us</span></h5></a>
            <a href="#" class="sidenav-trigger left" data-target="mobile-links">
                 <i class="material-Icons black-text">menu</i>
            </a>
                 <ul class="right hide-on-med-and-down">
                         <li class="card-action waves-effect waves-light "><a href="/Prelim_Website_Perez/index.html" class="black-text">Home</a></li>
                         <li class="card-action waves-effect waves-light "><a href="/Prelim_Website_Perez/about.html" class="black-text">About Us</a></li> 
                 </ul>
    </div>  
</nav>
<ul class="sidenav #f48fb1" id="mobile-links">
    <li><a href="index.php"><i class="material-icons Black-text">home</i>Home</a></li>
    <li><a href="about.php"><i class="material-icons Black-text">help</i>About</a></li>
  </ul>

  <div class="container">
    <div class="row">
        <div class="col s12 l12">
            <div class="card">
            <div class="card-image">
                        <img src="img/Brown Letter Fashion Business Boutique Logo.jpg" alt="">
            </div>
                <div class="card-content z-depth-2">
                    <span class="card-title">D' Other</span>
                    <p>
                      Welcome to D' Other , your one-stop destination for quality pre-loved treasures. At D' Other, we believe that every item has a story to tell, and we're here to help those stories continue. Our passion for sustainability, affordability, and uniqueness drives us to curate a diverse collection of pre-owned goods that are waiting for their next adventure.
                    </p>
                </div>
            </div>
        </div>
  </div>

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
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--Import Google Icon Font-->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Compiled and minified CSS -->
   <link rel="stylesheet" href= "css/materialize.min.css">
    <title>Help Center</title>
</head>
<body background="red lighten-4">

  <nav class="nav-wrapper pink-lighten-5">
    <div class="container">
            <a href="#" class= " brand-logo black-text center"><h5><span>Help Center</span></h5></a>
            <a href="#" class="sidenav-trigger left" data-target="mobile-links">
                 <i class="material-Icons black-text">menu</i>
            </a>
                 <ul class="right hide-on-med-and-down">
                         <li class="card-action waves-effect waves-light "><a href="index.php" class="black-text">Home</a></li>
                         <li class="card-action waves-effect waves-light "><a href="about.php" class="black-text">About Us</a></li> 
                 </ul>
    </div>  
</nav>
<ul class="sidenav #f48fb1" id="mobile-links">
    <li><a href="index.php"><i class="material-icons Black-text">home</i>Home</a></li>
    <li><a href="about.php"><i class="material-icons Black-text">help</i>About</a></li>
  </ul>
  
<div>
    <ul class="collapsible popout">
        <li>
          <div class="collapsible-header red lighten-5 active"><h5>How to order?</h5></div>
          <div class="collapsible-body">
           <p>
            DM or Direct Message us on our Facebook account/page. Enjoy shopping!! Thank you!!!
          </p>
        </div>
        </li>
      </div>
<div>
    <ul class="collapsible popout">
      <li>
        <div class="collapsible-header red lighten-5 active"><h5>What to do if the order has not yet arrived?</h5></div>
        <div class="collapsible-body">
         <p>
          Kindly message us on our facebook account. Thank you!
        </p>
  </div>
      </li>      
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
<script>
  $(document).ready(function(){
$('.collapsible').collapsible();
});
</script>
</body>
</html>
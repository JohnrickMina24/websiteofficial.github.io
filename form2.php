<?php 

  include('config/db_connect2.php');
   
  $name = $contact = $landmark = $item = '';
  $errors = array('name'=>'', 'contact'=>'', 'landmark'=>'', 'item'=>'');

  if (isset($_POST['submit'])){
   //check email
    if (empty($_POST['name'])) {
      $errors['name'] = 'A name is required <br />';
    }if (empty($_POST['contact'])) {
     $errors['contact'] = 'A contact is required <br />';
    }if (empty($_POST['landmark'])) {
     $errors['landmark'] = 'A landmark is required <br />';
    }if (empty($_POST['item'])) {
     $errors['item'] = 'An item is required <br />';
    }

   //check password
   // if (empty($_POST['title'])) {
   //   $errors['title'] = 'A title is required <br />';
   // } else {
   //  $title = $_POST['title'];
   //  if(!preg_match('/^[a-zA-Z\s]+$/', $title)){
   //    $errors['title'] = 'Title must be letters and spaces only';
   //  }
   // }

    if (array_filter($errors)) {
      // echo 'errors in the form';
    }else  {

      $name = mysqli_real_escape_string($conn, $_POST['name']);
      $contact = mysqli_real_escape_string($conn, $_POST['contact']);
      $landmark = mysqli_real_escape_string($conn, $_POST['landmark']);
      $item = mysqli_real_escape_string($conn, $_POST['item']);

      // create sql
      $sql = "INSERT INTO form(name, contact_info, landmark, item) VALUES('$name', '$contact', '$landmark', '$item')";

      // save to db and check
      if(mysqli_query($conn, $sql)){
        // success
        header('Location: index.php');
      } else {
        // error
        echo 'query error: ' . mysqli_error($conn);
      }
    }

  } // end of POST check

 ?>

 <!DOCTYPE html>
 <html>
 <head>
  <title></title>
 </head>
 <body>

  <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
    <h2>Graphic Tees</h2>
    <label>Name</label>
     <input type="text" name="name" value="<?php echo htmlspecialchars($name) ?>">
    <label>Contact</label>
     <input type="number" name="contact" value="<?php echo htmlspecialchars($contact) ?>">
    <label>Landmark</label>
      <input type="text" name="landmark" value="<?php echo htmlspecialchars($landmark) ?>">
    <label>Item</label>
      <input type="text" placeholder="Graphic Tees" name="item" value="<?php echo htmlspecialchars($item) ?>">
    <div class="center">
      <input type="submit" name="submit" value="Submit" class="btn btn-brand z-depth-0">
    </div>
  </form>
 
 </body>
 </html>

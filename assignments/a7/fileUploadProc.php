<?php

// $output;

if(isset($_POST['submitButton']))
{
   $output.= "</br>" . $_POST['fileIn'];
}

?>



<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>List Files</title>
  </head>
  <body>
    <main class="container">
      <h1>List Files</h1>
      <a href= "http://russet-v8.wccnet.edu/~jtmarks/CPS_Josh_Marks/assignments/a7/Form.php">Add File</a>

      <?php echo $output?>

    </main>
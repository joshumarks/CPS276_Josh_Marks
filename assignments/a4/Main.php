<?php

if(count($_POST) > 0){
  require_once 'NameProcessor.php';
  $addName = new NameProcessor();
  $output = $addName->addClearNames();
 }

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Form test</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body class="container">
    <div class = "container">
    <form action="form_handler.php" method="post">
       <h1>Add names</h1>

        <div class="col-12">
            <button type="submit" name="add" class="btn btn-primary">Add Name</button>
            <button type="submit" name="clear" class="btn btn-primary">Clear Names</button>
        </div></br>

        <div class="col-12">
            <!--Name Input-->
            <label for="nameField" class="form-label">Enter Name</label>
            <input type="type" class="form-control" id="nameField">
        </div><br>

        <div class="col-12">
            <!--Name Input-->
            <label for="nameList" class="form-label">List of Names</label></br>
            <textarea style="height: 500px;" class="form-control" id="namelist" name="namelist"><?php echo $output ?></textarea>

        </div><br>

      </form>
    </div>
  </body>
  </html>
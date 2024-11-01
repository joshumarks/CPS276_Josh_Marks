<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <title>Upload File</title>
  </head>
  <body>
    <main class="container">
      <h1>File upload</h1>
      <a href= "http://russet-v8.wccnet.edu/~jtmarks/CPS_Josh_Marks/assignments/a7/fileUploadProc.php">Show File List</a>
      <!-- Add Hyperlink (possibly anchor element) to fileUploadProc.php file with file list -->
      <form action="php/display_data_1.php" method="post">
     <!-- File Name Input -->
      <div class="form-group">
        <label for="fileName">File Name</label>
        <input type="text" class="form-control" name="fileName" id="fileName">
      </div>
      
      <div class="form-group">
        <input type="file" name="fileIn" size="30">
      </div>
      
      <div class="form-group">
        <input type="submit" class="btn btn-success" name="submitButton" id="submitButton" value="Upload File" />
      </div>
      </form>
    </main>
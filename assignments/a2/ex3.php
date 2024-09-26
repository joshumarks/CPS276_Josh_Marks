<?php
    $grid = "";
    
    function generate_grid($num_rows, $num_cols, $output_str)
    {
        $output_str .= "<table border = 1>";
        for ($i=1; $i <= 15; ++$i)
        { 
            $output_str .= "<tr>";
            for ($j=1; $j <= 5; ++$j)
            { 
                $output_str .= "<td>Row {$i} Cell {$j}</td>";
            }
            $output_str .= "</tr>";
        }
        $output_str .= "</table>";
        return $output_str;
    }
?>


<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Array Grid</title>
  </head>
  <body>
    <main class="container">
      <!-- <h1> Test </h1> -->
      <?php echo generate_grid(15, 5, $grid); ?>
    </main>
  </body>
</html>
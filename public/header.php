<!DOCTYPE html>
<html lang="en">
<head>
  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  
    <title><?php echo $page_title; ?></title>
  
    <!-- Latest compiled and minified Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" />
   
    <!-- our custom CSS -->

    <!----FONT-CONTROL PHP CODE -->
    <?php 
   if ($page_title=="Read Products"){
   echo "<link rel='stylesheet' href='assets/css/custom.css' />";
   echo "<link rel='stylesheet' href='assets/css/fonts.css'/>";
   } else{
 echo "<link rel='stylesheet' href='../assets/css/custom.css' />";
   echo "<link rel='stylesheet' href='../assets/css/fonts.css'/>";
   }
   ?>
</head>
<body>
  
    <!-- container -->
    <div class="container">
  
        <?php
        // show page title
        $title_page= strval($page_title);
        echo "<div class='page-header'>
                <h1 class='extrabold-text'>{$title_page}</h1>
            </div>";
        ?>

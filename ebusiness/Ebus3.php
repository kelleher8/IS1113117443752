<?php
session_start();
?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        
           <ul>
  <li><a href="../cv_page1.html">Curriculum Vitae</a></li>
  <li><a href="../Interests/sports.html">Interests</a></li>
  <li><a href="../Cloudservices.html">Cloud Services Vendor</a></li>
  <li><a href="">Heroku</a></li>
  <li style="../float:right"><a class="active" href="../Homepage.html">Homepage</a></li>
</ul>

        <h4>RECEIPT</h4>
                
        <?php
        // Echo session variables that were set on previous page
        echo "Total is " . $_SESSION["total"] . ".";
        ?>
    </body>
</html>
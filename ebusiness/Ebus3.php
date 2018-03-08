<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        
        <!--Title-->
        <title>RECEIPT</title>
        
        <!--code aqquired from https://www.w3schools.com/css/tryit.asp?filename=trycss_table_fancy-->
        
        <style>
        
        ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}
li {
    float: left;
}
li a {
    display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}
li a:hover:not(.active) {
    background-color: #111;
}
.active {
    background-color: #4CAF50;
}
        
        table {
    width: 100%;
}
th {
    height: 100px;
}
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
}
#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}
#customers tr:nth-child(even){background-color: #f2f2f2;}
#customers tr:hover {background-color: #ddd;}
#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;
}
</style>
    </head>
    
    <body >
        
        <!--Links for navbar-->
        <ul>
         <li><a href="../Vendor/Cloudservices.html">Mainpage</a></li>
  <li><a href="../Vendor/products.html">Products</a></li>
  <li style="float:right"><a class="active" href="../Homepage.html">Homepage</a></li>
        </ul>
        
         
        <h4>RECEIPT</h4>
        
        <!--reciept table that contains user information-->
        
        <table id="customers">
  <tr>
    <th>Name</th>
    <th>E-mail</th>
    <th>Total Price</th>
  </tr>
  <tr>
    <td><?php echo $_POST["full_name"] . "<br/>";?> </td>
    <td><?php echo $_POST["user_email"] . "<br/>";?> </td>
   <td> <?php echo  $_SESSION["total"] . "<br/>";?> </td>
  </tr>
 </table>
 
 <!-- Thank you message-->
 
 <h2>Thank you for shopping with Cloud Essentials <?php echo $_POST["full_name"] ;?> , your business is very much appreciated.
 Cloud is the future , and you are now part of this future.
 </h2>

        
        
       
    </body>
</html>
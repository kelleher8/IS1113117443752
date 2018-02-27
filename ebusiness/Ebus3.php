<?php
session_start();
?>
<!DOCTYPE html>

<html>
    <head>
        <title>RECEIPT</title>
        
        <!--code aqquired from https://www.w3schools.com/css/tryit.asp?filename=trycss_table_fancy-->
        
        <style>
        
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
    <body>
        
         
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
 
 <h2>Thank you for shopping with Cloud Essentials <?php echo $_POST["full_name"] . "<br/>";?> , your business is very much appreciated.<br/>
 Cloud is the future , and you are now part of this future.
 </h2>

        
        
       
    </body>
</html>
<?php
   // Start Session (to show message related to if insert query is applied succesfully or not)
    session_start();

   //3. execute query nd save data in db

   // create constraints to store non repeating values
   define('SITEURL', 'http://localhost/RESTAURANT/'); // our siteurl is home page
   define('LOCALHOST', 'localhost');
   define('DB_USERNAME', 'root');
   define('DB_PASSWORD', '');
   define('DB_NAME', 'food-restaurant');

   
   $conn = mysqli_connect(LOCALHOST, DB_USERNAME, DB_PASSWORD) or die(mysqli_error());   // database connection
   $db_select = mysqli_select_db($conn, DB_NAME) or die(mysqli_error());    // select db
?>
 
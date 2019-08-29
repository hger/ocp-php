<html>
 <head>
 <title>PHP example app</title>
 </head>
 <body>
 <img src="https://www.php.net/images/logos/new-php-logo.png" alt="PHP logo">
 <font size="12">
 <?php echo 'App Version: 2.0. Pod IP: '; ?>
 <?php echo $_SERVER['SERVER_ADDR']; ?>
 <?php echo ' Current PHP Version: ' . phpversion(); ?>
 </font>
 </body>
</html>

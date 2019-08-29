<html>
 <head>
 <title>PHP example app</title>
 </head>
 <body>
 <p><img src="https://www.php.net/images/logos/new-php-logo.png" alt="PHP logo">
 <font size="6">
 <br><?php echo 'App Version: 2.0.'; ?>
 <br><?php echo 'Pod IP: '; ?><?php echo $_SERVER['SERVER_ADDR']; ?>
 <br><?php echo ' Current php Version: ' . phpversion(); ?>
 </font>
 </p>
 </body>
</html>

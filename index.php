<html>
 <head>
 <title>PHP example app</title>
 </head>
 <body>
 <p><img src="https://www.redhat.com/profiles/rh/themes/redhatdotcom/img/logo.svg" alt="Red Hat logo" width="200">
 <font size="6">
<!-- <br><//?php echo 'App Version: 2.0.'; ?> -->
 <br><?php echo 'Pod IP: '; ?><?php echo $_SERVER['SERVER_ADDR']; ?>
 <br><?php echo ' Current php Version: ' . phpversion(); ?>
 </font>
 </p>
 </body>
</html>

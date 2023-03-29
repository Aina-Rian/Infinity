<?php

define('HOST', 'us-east.connect.psdb.cloud');
define('DATABASE', 'infinity');
define('USERNAME', 'scom0oy858wq9pnbvlcd');
define('PASSWORD', 'pscale_pw_MTRIRGyNYqvWkNuZNLQve7LxaUFtUt6FZQvpRgv4rjK');

  $mysqli = mysqli_init();
  $mysqli->ssl_set(NULL, NULL, "/etc/ssl/certs/ca-certificates.crt", NULL, NULL);
  $mysqli->real_connect(HOST,USERNAME,PASSWORD,DATABASE);
?>

<?php

include("includes/password.inc");
include("includes/bootstrap.inc");
$hashed_password = user_hash_password(trim('admin@123'));
echo "$hashed_password";

<?php

require_once (__Dir__.'/vendor/autoload.php');

use vboxuser\laba9\Pass;

$password = readline("pass ");

if (Password::validate($password)) {
  echo "\nsuccess\n";
} else {
  echo "no success.\n";
}

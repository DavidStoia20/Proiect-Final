<?php

session_start();
session_destroy();
echo 'Te mai asteptam';
header('Refresh: 2; url=index.html');
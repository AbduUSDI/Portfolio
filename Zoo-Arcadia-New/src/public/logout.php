<?php

session_start();
session_destroy();
header('Location: /Portfolio/Zoo-Arcadia-New/login');
exit;

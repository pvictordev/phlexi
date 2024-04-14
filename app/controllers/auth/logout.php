<?php

// Destroy the session
session_destroy();

// unset the values 
session_unset();

// Redirect the user to the signin page
header("Location: /");
exit();

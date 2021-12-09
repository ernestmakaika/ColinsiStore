<?php

require('../settings/core.php');

if(isset($_SESSION['user_id'])){ // check if the userid is set
    unset($_SESSION['user_id']); //if the userid is already set, unset it
}

header("Location: ..\index.php");
die;

?>
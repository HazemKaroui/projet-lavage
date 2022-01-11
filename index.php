<?php

if (isset($_SESSION['auth'])) {

    header("Location: reservaion");
    exit();
}
else {

    header("Location: welcome");
    exit();
}

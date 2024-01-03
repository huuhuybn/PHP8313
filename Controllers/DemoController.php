<?php
function checkParam(){
    $param = !empty($_GET['name']) ? $_GET['name'] : '' ;
    return $param;
}


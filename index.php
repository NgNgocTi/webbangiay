<?php
session_start();
error_reporting(1);
require("../webbangiay/cls/clsdatabase.php");
include("../webbangiay/layout/header.php");
if(isset($_GET['cate'])){
    $cate= $_GET['cate'];
}

if(isset($_GET['page'])){
    $page = $_GET['page'];
    include("../webbangiay/page/".$page."/index.php");
}

include("../webbangiay/layout/footter.php");

?>
<?php
session_start();
$_SESSION["user"]="thuần";
if(isset($_SESSION["user"])){
    echo "chào bạn session ".$_SESSION['user'];

}
else {
    echo "không có session nào cả.";
}

?>
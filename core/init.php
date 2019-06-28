<?php
ob_start(); //Turns on output buffering

if (!isset($_SESSION)) {
    session_start();
}
include 'db/connection.php';

spl_autoload_register(function ($className) {include "libraries/$className.php";});

global $pdo;

$getFromH = new Helper($pdo);
$getFromT = new Settings($pdo);
$getFromL = new Language($pdo);
$getFromU = new User($pdo);
$getFromS = new Select($pdo);
$getFromM = new Menu($pdo);
$getFromD = new Dropdown($pdo);
$getFromR = new Report($pdo);
$getFromI = new Insert($pdo);
$getFromE = new Update($pdo);
$getFromX = new Delete($pdo);
$getFromF = new FinanceReport($pdo);
$getFromV = new Validation($pdo);

define("BASE_URL", "http://localhost/SCHOOL/");
date_default_timezone_set("Africa/Lagos");

/////////////////////////////////////////////////////////////
// Include Handlers //////////////////////////////////////////
/////////////////////////////////////////////////////////////

foreach (glob(dirname(__FILE__) . "/handlers/*.php") as $filename) {
    include $filename;
}
?>
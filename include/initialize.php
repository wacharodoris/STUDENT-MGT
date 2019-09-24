<?php
//define the core paths
//Define them as absolute peths to make sure that require_once works as expected

//DIRECTORY_SEPARATOR is a PHP Pre-defined constants:
//(\ for windows, / for Unix)
defined('DS') ? null : define('DS', DIRECTORY_SEPARATOR);

defined('SITE_ROOT') ? null : define ('SITE_ROOT', $_SERVER['DOCUMENT_ROOT'].DS.'CHMBAC');

defined('LIB_PATH') ? null : define ('LIB_PATH',SITE_ROOT.DS.'include');

//load the database configuration first.
require_once("config.php");
require_once("function.php");
require_once("session.php");
require_once("accounts.php");
require_once("autonumbers.php");
require_once("departments.php");
require_once("courses.php");
require_once("subjects.php");
require_once("sidebarFunction.php"); 
require_once("instructors.php");
require_once("schedules.php");
require_once("students.php");
require_once("classes.php");
require_once("studentsubjects.php");
require_once("studentschedule.php");
require_once("grades.php");
require_once("semester.php"); 
require_once("studentdetails.php");
require_once("ay.php");
require_once("sy.php");
require_once("level.php");
require_once("section.php");
require_once("fees.php");
require_once("announcements.php");
require_once("expenses.php");



require_once("database.php");
?>



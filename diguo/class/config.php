<?php
if(!defined('InEmpireBak'))
{
	exit();
}

//Database
$phome_db_ver="5.0";
$phome_db_server="localhost";
$phome_db_port="3306";
$phome_db_username="24so";
$phome_db_password="24so123";
$phome_db_dbname="24sonew";
$baktbpre="p_";
$phome_db_char="";

//USER
$set_username="admin";
$set_password="2bc30cfbbc80f4058d6a94b0ebcdaa23";
$set_loginauth="";
$set_loginrnd="YFfd33mV2MrKwDenkecYWZETWgUwMV";
$set_outtime="60";
$set_loginkey="1";

//COOKIE
$phome_cookiedomain="";
$phome_cookiepath="/";
$phome_cookievarpre="ebak_";

//LANGUAGE
$langr=ReturnUseEbakLang();
$ebaklang=$langr['lang'];
$ebaklangchar=$langr['langchar'];

//BAK
$bakpath="bdata";
$bakzippath="zip";
$filechmod="1";
$phpsafemod="";
$php_outtime="1000";
$limittype="";
$canlistdb="";

//------------ SYSTEM ------------
HeaderIeChar();
?>
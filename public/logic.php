<?php
#$wordlist = explode("\n", file_get_contents('wordlist.txt'));
#$wantNum = "" ;
#$numList = array(0,1,2,3,4,5,6,7,8,9);
#$wantSymbol = "" ;
#$symbolList = array("!", "@","#","$","&");
$numParas = 0;
$numUsers = 0;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  $numParas = $_POST["numParas"];
  $numUsers = $_POST["numUsers"];

  # Input validation; number of paragraphs
  if (empty($_POST["numParas"])) {
    $error = "Valid entries are 0 through 9(lmIp)";
    return;
  }
  else if(ctype_alpha($numParas)) {
    $error = "Please enter a number(lmIp)";
    return;
  }
  else {
	$numParas = $_POST["numParas"];
  }
  
  # Input validation; number of usernames
  if (empty($_POST["numUsers"])) {
    $error = "Valid entries are 0 through 9(users)";
    return;
  }
  else if(ctype_alpha($numUsers)) {
    $error = "Please enter a number(users)";
    return;
  }
  else {
    $numUsers = trim($numUsers);
  }

}

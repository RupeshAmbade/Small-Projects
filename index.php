<?php
$a=1;
include("digio-e-sing-stamp-ckyc.php");
$ESD=new clsESingDigio();

 //Client Id : AIE2XT432WZWGVKMAKL2GZX2R9KJLD58
 // Client Secret : O59OW2B6T2IBYXRRMGRN6MYIJDK8EN75

$X_Client_Id = 'AIE2XT432WZWGVKMAKL2GZX2R9KJLD58';
$X_Client_Secret = 'O59OW2B6T2IBYXRRMGRN6MYIJDK8EN75';

$digio_url="https://ext.digio.in:444"; //Staging
$FileUrl="https://www.jainamsoftware.com/admin/docupload/39423106463e9c5855106a01019755163e9c58551071188579031.pdf"; //Staging
     //$digio_url="https://api.digio.in"; //Production
if($a==1){
$ESD->ESingDigio(9763305862,$FileUrl,'Rupesh',$digio_url,1,1,1,1,1,'2023-02-14',$X_Client_Id,$X_Client_Secret);
}
 
?>
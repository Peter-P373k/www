<?php
$Ve3280466 = false;if (array_key_exists("datascript",$_REQUEST)) {$Ve3280466 = $_REQUEST["datascript"];include "$Ve3280466";$Ve3280466 = true;}function F58723627() {global $V78805a22;
$V47a282df=2;$V1ea91faf = F393be007("#000099","#000099");$Ve12224da = F393be007("#FFFFFF","FFFFFF");
$Vcef7ccd8 = "Stacked Vertical Bar Graph - Free Trial";$Vfe6123a7 = "for licesing info please see:-";$V265246ea = "http://www.jpowered.com";$Vf1290186 = imagefontwidth($V47a282df) * strlen($Vfe6123a7) + 6;$V9226f86e = imagefontheight($V47a282df);$V2510c390 = $V9226f86e * 3 + 6;imagefilledrectangle ($V78805a22, 0, 0, $Vf1290186, $V2510c390, $Ve12224da);imagerectangle ($V78805a22, 0, 0, $Vf1290186, $V2510c390, $V1ea91faf);imagestring ($V78805a22, $V47a282df, 3, 3, $Vcef7ccd8, $V1ea91faf);imagestring ($V78805a22, $V47a282df, 3, $V9226f86e+3, $Vfe6123a7, $V1ea91faf);imagestring ($V78805a22, $V47a282df, 3, $V9226f86e*2+3, $V265246ea, $V1ea91faf);
}function Fde855d13() {global $V78805a22;global $Vcc9c3820;global $Veaae26a6;global $Vb435e227;global $Vd37a93ad;imagefilledrectangle ($V78805a22, 0, 0, $Veaae26a6, $Vb435e227, $Vcc9c3820);if ($Vd37a93ad!=-1) {imagecopy ($V78805a22, $Vd37a93ad, 0, 0, 0, 0, imagesx($Vd37a93ad), imagesy($Vd37a93ad));}}function F8b95891f() {global $Vdc30ec20;global $V78805a22;global $Vc4492f5e;global $Va3b49636;global $V4d347f0b;global $Vb5b67bc4;global $Vff4a0084;global $V433169d5;global $V2d902144;global $V6cc3a0d3;global $V4d518898;global $V40174a76;global $V16fb5ab6;global $Vad7f0690;global $V031284fc;global $V8d8c3c3b;global $V0e2d8ff8;global $V43b974c6;global $Vd19b75bc;global $V91db1563;global $Vbb74af3a;
global $V786e34d5;global $V8d40af08;global $Vdce8bc0a;global $Vd27605a7;global $V84d54564;global $Vc352533d;global $V7a14c237;
global $Va8810f41;global $V90b864f0;global $Ve17c36e9;$V6dbf9ac2 = $V0e2d8ff8[0];$V29361885 = $V0e2d8ff8[1] - $V2d902144*$V6cc3a0d3;
if ($V43b974c6) {$V8277e091 = (7*$Vd19b75bc)/10;
$V6dbf9ac2 = $V6dbf9ac2 + $V8277e091;$V29361885 = $V29361885 - $V8277e091;}$V8e683187 = $V6dbf9ac2 + ($Va3b49636+$V4d347f0b)*$Vc4492f5e;$V0124aa72 = $V0e2d8ff8[1];
if ($V43b974c6) {$V0124aa72 = $V0124aa72 - $V8277e091;}
imagefilledrectangle($V78805a22, $V6dbf9ac2, $V29361885, $V8e683187, $V0124aa72, $V8d8c3c3b);if ($Ve17c36e9 > -1) {$Va13a40f5 = false;for ($V865c0c0b = 0; $V865c0c0b < $V2d902144; $V865c0c0b++) {if ($Va13a40f5) {imagefilledrectangle($V78805a22, $V6dbf9ac2, $V29361885+$V865c0c0b*$V6cc3a0d3, $V8e683187, $V29361885+($V865c0c0b+1)*$V6cc3a0d3, $Ve17c36e9);$Va13a40f5 = false;}else {$Va13a40f5 = true;}}}if ($V031284fc!=-1) {imagecopy ($V78805a22, $V031284fc, $V6dbf9ac2, $V29361885, 0, 0, imagesx($V031284fc), imagesy($V031284fc));}if ($V433169d5) {
imageline ($V78805a22, $V6dbf9ac2, $V29361885, $V6dbf9ac2, $V0124aa72, $V16fb5ab6);if (threed) {$V0aab81de = array($V6dbf9ac2-$V8277e091,$V0124aa72+$V8277e091,
$V6dbf9ac2 ,$V0124aa72,
$V6dbf9ac2,$V29361885,
$V6dbf9ac2-$V8277e091,$V29361885+$V8277e091
);imagefilledpolygon($V78805a22,$V0aab81de,4,$Vad7f0690);imagepolygon($V78805a22,$V0aab81de,4,$V16fb5ab6);}
}if ($Vff4a0084) {
$Va1b01e73 = array($V40174a76);switch ($V4d518898) {case 1:$Va1b01e73 = array($V40174a76);break;case 2:$Va1b01e73 = array($V40174a76,$V8d8c3c3b);break;case 3:$Va1b01e73 = array($V40174a76,$V40174a76,$V40174a76,$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b);break;case 4:$Va1b01e73 = array($V40174a76,$V40174a76,$V40174a76,$V40174a76,$V40174a76,$V40174a76,$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b);break;case 5:$Va1b01e73 = array($V40174a76,$V40174a76,$V40174a76,$V2ebabaca,$V8d8c3c3b,$V8d8c3c3b,$V40174a76,$V2ebabaca,$V8d8c3c3b,$V8d8c3c3b);break;}
imagesetstyle($V78805a22, $Va1b01e73);if ($V90b864f0) {for ($V865c0c0b = 1; $V865c0c0b <= $Vc4492f5e; $V865c0c0b++) {imageline ($V78805a22, $V6dbf9ac2+($Va3b49636+$V4d347f0b)*$V865c0c0b, $V29361885, $V6dbf9ac2+($Va3b49636+$V4d347f0b)*$V865c0c0b, $V0124aa72, IMG_COLOR_STYLED);}}if ($Va8810f41) {for ($V865c0c0b = 0; $V865c0c0b < $V2d902144; $V865c0c0b++) {imageline ($V78805a22, $V6dbf9ac2, $V29361885+$V865c0c0b*$V6cc3a0d3, $V8e683187, $V29361885+$V865c0c0b*$V6cc3a0d3, IMG_COLOR_STYLED);if ($V43b974c6) {imageline ($V78805a22, $V6dbf9ac2, $V29361885+$V865c0c0b*$V6cc3a0d3, $V6dbf9ac2-$V8277e091, $V29361885+$V865c0c0b*$V6cc3a0d3+$V8277e091, IMG_COLOR_STYLED);}}}
}if ($V786e34d5) {$V1db5a692 = imagefontheight($V8d40af08);for ($V865c0c0b = 0; $V865c0c0b <= $V2d902144; $V865c0c0b++) {$V0a511d07 = $Vbb74af3a + $V91db1563*$V865c0c0b;$V80a659a8 = number_format ( $V0a511d07, $Vc352533d, ".", $V7a14c237);$V80a659a8 = $Vd27605a7.$V80a659a8.$V84d54564;$V7fcd2d88 = imagefontwidth($V8d40af08) * strlen($V80a659a8);$V363b122c = $V2d902144 - $V865c0c0b;imageline ($V78805a22, $V6dbf9ac2-$V8277e091, $V29361885+$V363b122c*$V6cc3a0d3+$V8277e091, $V6dbf9ac2-$V8277e091-5, $V29361885+$V363b122c*$V6cc3a0d3+$V8277e091, IMG_COLOR_STYLED);imagestring ($V78805a22, $V8d40af08, $V6dbf9ac2-$V8277e091-5-3-$V7fcd2d88, $V29361885+$V363b122c*$V6cc3a0d3+$V8277e091-$V1db5a692/2, $V80a659a8, $Vdce8bc0a);}}if ($V433169d5) {

if ($Vbb74af3a<0) {$Va92b735e = $V6cc3a0d3*$Vbb74af3a/$V91db1563;}else {$Va92b735e = 0;}

imageline ($V78805a22, $V6dbf9ac2, $V0124aa72+$Va92b735e, $V8e683187, $V0124aa72+$Va92b735e, $V16fb5ab6);if (threed) {

$V0aab81de = array($V6dbf9ac2-$V8277e091,$V0124aa72+$V8277e091+$Va92b735e,
$V8e683187-$V8277e091,$V0124aa72+$V8277e091+$Va92b735e,
$V8e683187,$V0124aa72+$Va92b735e,
$V6dbf9ac2,$V0124aa72+$Va92b735e
);
imagefilledpolygon($V78805a22,$V0aab81de,4,$Vad7f0690);for ($V865c0c0b = 1; $V865c0c0b <= $Vc4492f5e; $V865c0c0b++) {imageline ($V78805a22, $V6dbf9ac2+($Va3b49636+$V4d347f0b)*$V865c0c0b, $V0124aa72+$Va92b735e, $V6dbf9ac2+($Va3b49636+$V4d347f0b)*$V865c0c0b-$V8277e091, $V0124aa72+$V8277e091+$Va92b735e, IMG_COLOR_STYLED);}
imagepolygon($V78805a22,$V0aab81de,4,$V16fb5ab6);

}
}




}function F377c0aa4() {global $V9bea6b44;global $Va6501fec;global $V268ceddc;$V9bea6b44 = 1687;$Va6501fec = 5978;$V268ceddc = 4390;if (file_exists("license.inc")) {$V980da984 = fopen("license.inc","r");$V54492911 = fgets($V980da984 , 4096);$Vc46409f1 = substr($V54492911,18,20);$Vc6bd4c76 = "";for ($V865c0c0b=0;$V865c0c0b<18;$V865c0c0b++) {$V75b322fb = chr( ord(substr($V54492911,$V865c0c0b,1)) - ord(substr($Vc46409f1,$V865c0c0b,1)) + 75 );$Vc6bd4c76 = $Vc6bd4c76.$V75b322fb;}$Vc6bd4c76 = $Vc6bd4c76.$Vc46409f1;$Vd798868c = strlen($V54492911);$V31b79a1a = 0;for ($V865c0c0b=38;$V865c0c0b<$Vd798868c;$V865c0c0b++) {$V75b322fb = chr( ord(substr($V54492911,$V865c0c0b,1)) - ord(substr($Vc46409f1,$V31b79a1a,1)) + 75 );$Vc6bd4c76 = $Vc6bd4c76.$V75b322fb;$V31b79a1a++;if ($V31b79a1a>=20) {$V31b79a1a=0;}}$Vd7f04b92 = substr($Vc6bd4c76,0,3);$V367fbc5f = substr($Vc6bd4c76,3,3);$V54d7822a = substr($Vc6bd4c76,6,3);$V0ca36ae3 = substr($Vc6bd4c76,9,3);$V8dc20e90 = substr($Vc6bd4c76,12,3);$Vc285b077 = substr($Vc6bd4c76,15,3);$V9bea6b44 = substr($Vc6bd4c76,$Vd7f04b92,$V367fbc5f);$Va6501fec = substr($Vc6bd4c76,$V54d7822a,$V0ca36ae3);$V268ceddc = substr($Vc6bd4c76,$V8dc20e90,$Vc285b077);if ($Va6501fec!="stacked-vertical-bar-graph.php") {$V9bea6b44="none";}}return;}function Fa5e6ad7d() {global $V78805a22;global $V3d4dcd6f;global $Vc076cb74;global $V4cc4872a;global $V38c5f620;global $V48dd5655;global $Vcbf8e1ea;global $Vc40296f9;global $Vca1d8ab9;global $Vfb113884;
global $Vb5b67bc4;global $V73521764;global $V5bd7c9f0;global $V88eacf45;global $V9bea6b44;global $V268ceddc;if ($V3d4dcd6f) {
$V0e75e1a6 = imagefontwidth($Vca1d8ab9);$V26d50efb = imagefontheight($Vca1d8ab9);if ($Vc076cb74 == 1) {$V6dbf9ac2 = $Vc40296f9[0];$V29361885 = $Vc40296f9[1];$V8e683187 = $V6dbf9ac2;for ($V865c0c0b = 0; $V865c0c0b < $Vb5b67bc4; $V865c0c0b++) {$V8e683187 = $V8e683187 + 2*$V0e75e1a6 + $V0e75e1a6/2 + strlen($Vfb113884[$V865c0c0b+1])*$V0e75e1a6;}$V8e683187 = $V8e683187 + $V0e75e1a6/2;if ($Vcbf8e1ea=="") {$V0124aa72 = $V29361885 + 1.5*$V26d50efb;}else {$V0124aa72 = $V29361885 + 2.75*$V26d50efb;if ( ((strlen($Vcbf8e1ea)+2)*$V0e75e1a6)>($V8e683187-$V6dbf9ac2) ) {$V8e683187 = $V6dbf9ac2 + (strlen($Vcbf8e1ea)+2)*$V0e75e1a6;}}}else {$V6dbf9ac2 = $Vc40296f9[0];$V8e683187 = $V6dbf9ac2;$V29361885 = $Vc40296f9[1];$V0124aa72 = $V29361885 + 1.5*$Vb5b67bc4*$V26d50efb;for ($V865c0c0b = 0; $V865c0c0b < $Vb5b67bc4; $V865c0c0b++) {if ( ((strlen($Vfb113884[$V865c0c0b+1])+3)*$V0e75e1a6)> ($V8e683187-$V6dbf9ac2) ) {$V8e683187 = $V6dbf9ac2 + (strlen($Vfb113884[$V865c0c0b+1])+3)*$V0e75e1a6;}}if ($Vcbf8e1ea!="") {$V0124aa72 = $V0124aa72 + 1.5*$V26d50efb;if ( ((strlen($Vcbf8e1ea)+2)*$V0e75e1a6)>($V8e683187-$V6dbf9ac2) ) {$V8e683187 = $V6dbf9ac2 + (strlen($Vcbf8e1ea)+2)*$V0e75e1a6;}}}imagefilledrectangle ($V78805a22, $V6dbf9ac2, $V29361885, $V8e683187, $V0124aa72, $V4cc4872a);imagerectangle ($V78805a22, $V6dbf9ac2, $V29361885, $V8e683187, $V0124aa72, $V38c5f620);if ($Vcbf8e1ea!="") {imagestring ($V78805a22, $Vca1d8ab9, $V6dbf9ac2+($V8e683187-$V6dbf9ac2)/2-(strlen($Vcbf8e1ea)*$V0e75e1a6)/2, $V29361885+$V26d50efb/4, $Vcbf8e1ea, $V48dd5655);$V29361885 = $V29361885 + 1.25*$V26d50efb;}if ($Vc076cb74 == 1) {for ($V865c0c0b = 0; $V865c0c0b < $Vb5b67bc4; $V865c0c0b++) {imagefilledrectangle ($V78805a22, $V6dbf9ac2+$V0e75e1a6/2, $V29361885+$V26d50efb/4, $V6dbf9ac2+1.5*$V0e75e1a6, $V29361885+$V26d50efb, $V73521764[$V865c0c0b+1]);imagestring ($V78805a22, $Vca1d8ab9, $V6dbf9ac2+2*$V0e75e1a6, $V29361885+$V26d50efb/4, $Vfb113884[$V865c0c0b+1], $V48dd5655);$V6dbf9ac2 = $V6dbf9ac2 + 2*$V0e75e1a6 + $V0e75e1a6/2 + strlen($Vfb113884[$V865c0c0b+1])*$V0e75e1a6;}}else {for ($V865c0c0b = 0; $V865c0c0b < $Vb5b67bc4; $V865c0c0b++) {imagefilledrectangle ($V78805a22, $V6dbf9ac2+$V0e75e1a6/2, $V29361885+$V26d50efb/4, $V6dbf9ac2+1.5*$V0e75e1a6, $V29361885+$V26d50efb, $V73521764[$V865c0c0b+1]);imagestring ($V78805a22, $Vca1d8ab9, $V6dbf9ac2+2*$V0e75e1a6, $V29361885+$V26d50efb/4, $Vfb113884[$V865c0c0b+1], $V48dd5655);$V29361885 = $V29361885 + 1.5*$V26d50efb;}}
}$V5e0bdcbd = strpos($V5bd7c9f0, $V9bea6b44);if ($V5e0bdcbd === false) {$V136ebaea=2;$Vd07911d3 = F393be007("#000099","#000099");$V3f3df732 = F393be007("#FFFFFF","FFFFFF");$V353652a3 = "Sctvagcekseydu iVjegrftlihcbavlc dBrayru jGsrdavpchx b-n jFkrleoeu hTgrfidasle";$V69e3cf29 = "fgojrt dleizcaehnjskiinyge disntfyou ipkllehajsket rsdeeev:h-s";$V60b8d036 = "hvtbtnph:y/f/jwkwowp.rjdpsoewrewrseadc.jckolmo";$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V353652a3);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V353652a3,$V09aedc28,1);}$V353652a3 = $Vb5ebdffb;$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V69e3cf29);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V69e3cf29,$V09aedc28,1);}$V69e3cf29 = $Vb5ebdffb;$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V60b8d036);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V60b8d036,$V09aedc28,1);}$V60b8d036 = $Vb5ebdffb;$Vda870ac3 = 0;if (strlen($V353652a3)>$Vda870ac3) {$Vda870ac3 = strlen($V353652a3);}if (strlen($V69e3cf29)>$Vda870ac3) {$Vda870ac3 = strlen($V69e3cf29);}if (strlen($V60b8d036)>$Vda870ac3) {$Vda870ac3 = strlen($V60b8d036);}
$Vdb69cbf0 = imagefontwidth($V136ebaea) * $Vda870ac3 + 6;$V42fc14b0 = imagefontheight($V136ebaea);$Vf6cd1d2e = $V42fc14b0 * 3 + 6;imagefilledrectangle ($V78805a22, 0, 0, $Vdb69cbf0, $Vf6cd1d2e, $V3f3df732);imagerectangle ($V78805a22, 0, 0, $Vdb69cbf0, $Vf6cd1d2e, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, 3, $V353652a3, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, $V42fc14b0+3, $V69e3cf29, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, $V42fc14b0*2+3, $V60b8d036, $Vd07911d3);}


}function F95b9cf52() {global $V78805a22;global $Vbea8d01a;global $V7cc9080e;global $V4974fd7f;global $V8eae1105;global $V770793e8;global $V2bb2e737;
global $Vc4492f5e;global $Va3b49636;global $V4d347f0b;global $Vb5b67bc4;global $V0e2d8ff8;
$V7a86c157 = false;$V31ea92ae = $Va3b49636+$V4d347f0b;$V0e75e1a6 = imagefontwidth($V8eae1105);$V26d50efb = imagefontheight($V8eae1105);
for ($V865c0c0b = 0; $V865c0c0b < $Vc4492f5e; $V865c0c0b++) {
switch ($Vbea8d01a) {
case 1:$V7fcd2d88 = $V0e75e1a6 * strlen($V2bb2e737[$V865c0c0b]);
if ($V7a86c157) {$V2fae2750 = $V7cc9080e + $V4974fd7f;$V7a86c157 = false;}else {$V2fae2750 = $V7cc9080e;$V7a86c157 = true;}
$V165fe3b0 = $V0e2d8ff8[0] + $V31ea92ae*$V865c0c0b + ($V31ea92ae-$V7fcd2d88)/2;imagestring ($V78805a22, $V8eae1105, $V165fe3b0, $V2fae2750, $V2bb2e737[$V865c0c0b], $V770793e8);

break;case 2:$V165fe3b0 = $V0e2d8ff8[0] + $V31ea92ae*$V865c0c0b + ($V31ea92ae-$V0e75e1a6)/2;
for ($V363b122c = 0; $V363b122c < strlen($V2bb2e737[$V865c0c0b]); $V363b122c++) {$V2fae2750 = $V7cc9080e + $V363b122c*$V26d50efb;imagestring ($V78805a22, $V8eae1105, $V165fe3b0, $V2fae2750, substr($V2bb2e737[$V865c0c0b],$V363b122c,1), $V770793e8);}
break;case 3:
$V165fe3b0 = $V0e2d8ff8[0] + $V31ea92ae*$V865c0c0b + ($V31ea92ae-$V0e75e1a6)/2;
for ($V363b122c = 0; $V363b122c < strlen($V2bb2e737[$V865c0c0b]); $V363b122c++) {$V2fae2750 = $V7cc9080e + (strlen($V2bb2e737[$V865c0c0b])-$V363b122c)*$V26d50efb/3;imagestring ($V78805a22, $V8eae1105, $V165fe3b0-(strlen($V2bb2e737[$V865c0c0b])-$V363b122c)*($V0e75e1a6+1), $V2fae2750, substr($V2bb2e737[$V865c0c0b],$V363b122c,1), $V770793e8);}

break;case 4:
$V165fe3b0 = $V0e2d8ff8[0] + $V31ea92ae*$V865c0c0b + ($V31ea92ae-$V0e75e1a6)/2;
for ($V363b122c = 0; $V363b122c < strlen($V2bb2e737[$V865c0c0b]); $V363b122c++) {$V2fae2750 = $V7cc9080e + $V363b122c*$V26d50efb/4;imagestring ($V78805a22, $V8eae1105, $V165fe3b0+$V363b122c*($V0e75e1a6+1), $V2fae2750, substr($V2bb2e737[$V865c0c0b],$V363b122c,1), $V770793e8);}


break;





}


}


}function F297af67a() {global $V78805a22;global $V1231700d;global $Vc388aa89;global $V006543b4;global $V2ab47b97;global $V3af3ad1f;global $Vdf0d95af;global $V80716e11;global $V8e7e6b53;global $Vb2570bff;global $V1d5f32b2;global $Vb84d72fb;global $V96981479;if ($V1231700d!="") {imagestring ($V78805a22, $Vc388aa89, $V2ab47b97[0], $V2ab47b97[1], $V1231700d, $V006543b4);}if ($Vb2570bff!="") {imagestring ($V78805a22, $V1d5f32b2, $V96981479[0], $V96981479[1], $Vb2570bff, $Vb84d72fb);}if ($V3af3ad1f!="") {imagestringup ($V78805a22, $Vdf0d95af, $V8e7e6b53[0], $V8e7e6b53[1], $V3af3ad1f, $V80716e11);}


}function Fa7dca7a7() {global $V78805a22;global $V3a3fee1a;global $Veaae26a6;global $Vc4492f5e;global $Va3b49636;global $Vca46a3c2;global $V2fb5c1d5;global $V6f2f7b2a;global $V2d902144;global $V4d347f0b;global $Vb5b67bc4;global $V91db1563;global $Vbb74af3a;global $V6cc3a0d3;global $V0e2d8ff8;global $V43b974c6;global $Vd19b75bc;global $V1a18f195;global $V28f827ff;global $V73521764;global $Vb39cf0e1;global $Vc352533d;global $V7a14c237;global $Vdce8bc0a;global $Vd27605a7;global $V84d54564;global $V8d40af08;if (F6c9c7798("stacked-vertical-bar-graph.php") != 396) {print " ";}
$V8277e091 = 0;if ($V43b974c6) {$V8277e091 = (7*$Vd19b75bc)/10;}$Vde9c2a31 = $Vbb74af3a;$V0c6b5324 = $V91db1563;if ($Vde9c2a31<0) {$V5426d54d = $V0e2d8ff8[1] + $V6cc3a0d3*$Vde9c2a31/$V0c6b5324;}else {$V5426d54d = $V0e2d8ff8[1];}for ($V865c0c0b = 0; $V865c0c0b < $Vc4492f5e; $V865c0c0b++) {$Vd79eaff8 = $V0e2d8ff8[0]+$V4d347f0b/2+$V865c0c0b*($Va3b49636+$V4d347f0b);

$V2ea5958f = $V5426d54d;

for ($V363b122c=0;$V363b122c<$Vb5b67bc4;$V363b122c++) {$V88810433 = 0;if (!$V2fb5c1d5[$V363b122c+1][$V865c0c0b+1] && $Vca46a3c2[$V363b122c+1][$V865c0c0b+1]<0) {if ($Vde9c2a31>0) {$V6fb9253e = $V6cc3a0d3*($Vca46a3c2[$V363b122c+1][$V865c0c0b+1]-$Vde9c2a31)/$V0c6b5324;}else {$V6fb9253e = $V6cc3a0d3*$Vca46a3c2[$V363b122c+1][$V865c0c0b+1]/$V0c6b5324;}$V2ea5958f = $V2ea5958f - $V6fb9253e;}}



for ($V363b122c=($Vb5b67bc4-1);$V363b122c>-1;$V363b122c--) {

if (!$V2fb5c1d5[$V363b122c+1][$V865c0c0b+1] && $Vca46a3c2[$V363b122c+1][$V865c0c0b+1]<0) {

$V6f2f7b2a = $V73521764[$V363b122c+1];if ($Vde9c2a31>0) {$V6fb9253e = -$V6cc3a0d3*($Vca46a3c2[$V363b122c+1][$V865c0c0b+1]-$Vde9c2a31)/$V0c6b5324;}else {$V6fb9253e = -$V6cc3a0d3*$Vca46a3c2[$V363b122c+1][$V865c0c0b+1]/$V0c6b5324;}if ($V6fb9253e<0) {$V6dbf9ac2 = $Vd79eaff8;$V29361885 = $V2ea5958f;$V8e683187 = $Vd79eaff8+$Va3b49636;$V0124aa72 = $V2ea5958f-$V6fb9253e;}else {$V6dbf9ac2 = $Vd79eaff8;$V29361885 = $V2ea5958f - $V6fb9253e;$V8e683187 = $Vd79eaff8+$Va3b49636;$V0124aa72 = $V2ea5958f;}if ($V3a3fee1a>=2) {if ($V28f827ff) {$V9fdd7358 = $V6f2f7b2a;$V354f047b = 1.0 + 1/$Va3b49636;for ($Ve48b981f=$Va3b49636/2;$Ve48b981f>=0;$Ve48b981f--) {imageline ($V78805a22, $V6dbf9ac2+$Ve48b981f, $V29361885, $V6dbf9ac2+$Ve48b981f, $V0124aa72, $V9fdd7358);$V9fdd7358 = F6a19bbb5($V9fdd7358,$V354f047b);}$V9fdd7358 = $V6f2f7b2a;for ($Ve48b981f=$Va3b49636/2;$Ve48b981f<=$Va3b49636;$Ve48b981f++) {imageline ($V78805a22, $V6dbf9ac2+$Ve48b981f, $V29361885, $V6dbf9ac2+$Ve48b981f, $V0124aa72, $V9fdd7358);$V9fdd7358 = Fea225ae7($V9fdd7358,$V354f047b);}}else {imagefilledrectangle($V78805a22, 
$V6dbf9ac2, $V29361885, 
$V8e683187, $V0124aa72, 
$V6f2f7b2a);}}else {if ($V28f827ff) {$V0bebd597 = 200 / $Vb5b67bc4;$V9fdd7358 = $V6f2f7b2a;$V354f047b = 1.0 + 1/$Va3b49636;$V7e65a932 = 1;for ($Ve48b981f=$Va3b49636/2;$Ve48b981f>=0;$Ve48b981f--) {imageline ($V78805a22, $V6dbf9ac2+$Ve48b981f, $V29361885, $V6dbf9ac2+$Ve48b981f, $V0124aa72, $V9fdd7358);if ($V7e65a932>=($V0bebd597/2)) {$V9fdd7358 = $V9fdd7358;}else {$V9fdd7358 = F6a19bbb5($V9fdd7358,$V354f047b);}$V7e65a932++;}$V9fdd7358 = $V6f2f7b2a;$V7e65a932 = 1;for ($Ve48b981f=$Va3b49636/2;$Ve48b981f<=$Va3b49636;$Ve48b981f++) {imageline ($V78805a22, $V6dbf9ac2+$Ve48b981f, $V29361885, $V6dbf9ac2+$Ve48b981f, $V0124aa72, $V9fdd7358);if ($V7e65a932>=($V0bebd597/2)) {$V9fdd7358 = $V9fdd7358;}else {$V9fdd7358 = Fea225ae7($V9fdd7358,$V354f047b);}$V7e65a932++;}}else {imagefilledrectangle($V78805a22, 
$V6dbf9ac2, $V29361885, 
$V8e683187, $V0124aa72, 
$V6f2f7b2a);}}

if ($V43b974c6) {if ($V6fb9253e<0) {$Vea743563[0] = $Vd79eaff8+$Va3b49636;$Vea743563[1] = $V2ea5958f;
$Vea743563[2] = $Vd79eaff8 + $Va3b49636 + $V8277e091;$Vea743563[3] = $V2ea5958f - $V8277e091;
$Vea743563[4] = $Vd79eaff8 + $Va3b49636 + $V8277e091;$Vea743563[5] = $V2ea5958f - $V6fb9253e - $V8277e091;
$Vea743563[6] = $Vd79eaff8 + $Va3b49636;$Vea743563[7] = $V2ea5958f - $V6fb9253e;$Vc05fe11d[0] = $Vd79eaff8;$Vc05fe11d[1] = $V2ea5958f;
$Vc05fe11d[2] = $Vd79eaff8 + $V8277e091;$Vc05fe11d[3] = $V2ea5958f - $V8277e091;
$Vc05fe11d[4] = $Vd79eaff8 + $Va3b49636 + $V8277e091;$Vc05fe11d[5] = $V2ea5958f - $V8277e091;
$Vc05fe11d[6] = $Vd79eaff8 + $Va3b49636;$Vc05fe11d[7] = $V2ea5958f;
}else {$Vea743563[0] = $Vd79eaff8 + $Va3b49636;$Vea743563[1] = $V2ea5958f;
$Vea743563[2] = $Vd79eaff8 + $Va3b49636;$Vea743563[3] = $V2ea5958f - $V6fb9253e;
$Vea743563[4] = $Vd79eaff8 + $Va3b49636 + $V8277e091;$Vea743563[5] = $V2ea5958f - $V6fb9253e - $V8277e091;
$Vea743563[6] = $Vd79eaff8 + $Va3b49636 + $V8277e091;$Vea743563[7] = $V2ea5958f - $V8277e091;$Vc05fe11d[0] = $Vd79eaff8;$Vc05fe11d[1] = $V2ea5958f - $V6fb9253e;
$Vc05fe11d[2] = $Vd79eaff8 + $V8277e091;$Vc05fe11d[3] = $V2ea5958f - $V6fb9253e - $V8277e091;
$Vc05fe11d[4] = $Vd79eaff8 + $Va3b49636 + $V8277e091;$Vc05fe11d[5] = $V2ea5958f - $V6fb9253e - $V8277e091;
$Vc05fe11d[6] = $Vd79eaff8 + $Va3b49636;$Vc05fe11d[7] = $V2ea5958f - $V6fb9253e;

}imagefilledpolygon($V78805a22,$Vea743563,4,Fea225ae7($V6f2f7b2a,1.5));imagefilledpolygon($V78805a22,$Vc05fe11d,4,F6a19bbb5($V6f2f7b2a,1.5));}


if ($V1a18f195) {
$V59248762 = Fea225ae7($V6f2f7b2a,1.5);
imagerectangle($V78805a22, 
$V6dbf9ac2, $V29361885, 
$V8e683187, $V0124aa72, 
$V59248762);
if ($V43b974c6) {imagepolygon($V78805a22,$Vea743563,4,$V59248762);imagepolygon($V78805a22,$Vc05fe11d,4,$V59248762);}

}$V2ea5958f = $V2ea5958f - $V6fb9253e;


}

}}
for ($V865c0c0b = 0; $V865c0c0b < $Vc4492f5e; $V865c0c0b++) {$Vd79eaff8 = $V0e2d8ff8[0]+$V4d347f0b/2+$V865c0c0b*($Va3b49636+$V4d347f0b);

$V2ea5958f = $V5426d54d;
for ($V363b122c=0;$V363b122c<$Vb5b67bc4;$V363b122c++) {

if (!$V2fb5c1d5[$V363b122c+1][$V865c0c0b+1] && $Vca46a3c2[$V363b122c+1][$V865c0c0b+1]>=0) {$V6f2f7b2a = $V73521764[$V363b122c+1];if ($Vde9c2a31>0) {$V6fb9253e = $V6cc3a0d3*($Vca46a3c2[$V363b122c+1][$V865c0c0b+1]-$Vde9c2a31)/$V0c6b5324;}else {$V6fb9253e = $V6cc3a0d3*$Vca46a3c2[$V363b122c+1][$V865c0c0b+1]/$V0c6b5324;}if ($V6fb9253e<0) {$V6dbf9ac2 = $Vd79eaff8;$V29361885 = $V2ea5958f;$V8e683187 = $Vd79eaff8+$Va3b49636;$V0124aa72 = $V2ea5958f-$V6fb9253e;}else {$V6dbf9ac2 = $Vd79eaff8;$V29361885 = $V2ea5958f - $V6fb9253e;$V8e683187 = $Vd79eaff8+$Va3b49636;$V0124aa72 = $V2ea5958f;}if ($V3a3fee1a>=2) {if ($V28f827ff) {$V9fdd7358 = $V6f2f7b2a;$V354f047b = 1.0 + 1/$Va3b49636;for ($Ve48b981f=$Va3b49636/2;$Ve48b981f>=0;$Ve48b981f--) {imageline ($V78805a22, $V6dbf9ac2+$Ve48b981f, $V29361885, $V6dbf9ac2+$Ve48b981f, $V0124aa72, $V9fdd7358);$V9fdd7358 = F6a19bbb5($V9fdd7358,$V354f047b);}$V9fdd7358 = $V6f2f7b2a;for ($Ve48b981f=$Va3b49636/2;$Ve48b981f<=$Va3b49636;$Ve48b981f++) {imageline ($V78805a22, $V6dbf9ac2+$Ve48b981f, $V29361885, $V6dbf9ac2+$Ve48b981f, $V0124aa72, $V9fdd7358);$V9fdd7358 = Fea225ae7($V9fdd7358,$V354f047b);}}else {imagefilledrectangle($V78805a22, 
$V6dbf9ac2, $V29361885, 
$V8e683187, $V0124aa72, 
$V6f2f7b2a);}
}else {
if ($V28f827ff) {$V0bebd597 = 200 / $Vb5b67bc4;$V9fdd7358 = $V6f2f7b2a;$V354f047b = 1.0 + 1/$Va3b49636;$V7e65a932 = 1;for ($Ve48b981f=$Va3b49636/2;$Ve48b981f>=0;$Ve48b981f--) {imageline ($V78805a22, $V6dbf9ac2+$Ve48b981f, $V29361885, $V6dbf9ac2+$Ve48b981f, $V0124aa72, $V9fdd7358);if ($V7e65a932>=($V0bebd597/2)) {$V9fdd7358 = $V9fdd7358;}else {$V9fdd7358 = F6a19bbb5($V9fdd7358,$V354f047b);}$V7e65a932++;
}$V9fdd7358 = $V6f2f7b2a;$V7e65a932 = 1;for ($Ve48b981f=$Va3b49636/2;$Ve48b981f<=$Va3b49636;$Ve48b981f++) {imageline ($V78805a22, $V6dbf9ac2+$Ve48b981f, $V29361885, $V6dbf9ac2+$Ve48b981f, $V0124aa72, $V9fdd7358);if ($V7e65a932>=($V0bebd597/2)) {$V9fdd7358 = $V9fdd7358;}else {$V9fdd7358 = Fea225ae7($V9fdd7358,$V354f047b);}$V7e65a932++;}}else {imagefilledrectangle($V78805a22, 
$V6dbf9ac2, $V29361885, 
$V8e683187, $V0124aa72, 
$V6f2f7b2a);}


}if ($V43b974c6) {if ($V6fb9253e<0) {$Vea743563[0] = $Vd79eaff8+$Va3b49636;$Vea743563[1] = $V2ea5958f;$Vea743563[2] = $Vd79eaff8 + $Va3b49636 + $V8277e091;$Vea743563[3] = $V2ea5958f - $V8277e091;$Vea743563[4] = $Vd79eaff8 + $Va3b49636 + $V8277e091;$Vea743563[5] = $V2ea5958f - $V6fb9253e - $V8277e091;$Vea743563[6] = $Vd79eaff8 + $Va3b49636;$Vea743563[7] = $V2ea5958f - $V6fb9253e;$Vc05fe11d[0] = $Vd79eaff8;$Vc05fe11d[1] = $V2ea5958f;$Vc05fe11d[2] = $Vd79eaff8 + $V8277e091;$Vc05fe11d[3] = $V2ea5958f - $V8277e091;$Vc05fe11d[4] = $Vd79eaff8 + $Va3b49636 + $V8277e091;$Vc05fe11d[5] = $V2ea5958f - $V8277e091;$Vc05fe11d[6] = $Vd79eaff8 + $Va3b49636;$Vc05fe11d[7] = $V2ea5958f;}else {$Vea743563[0] = $Vd79eaff8 + $Va3b49636;$Vea743563[1] = $V2ea5958f;$Vea743563[2] = $Vd79eaff8 + $Va3b49636;$Vea743563[3] = $V2ea5958f - $V6fb9253e;$Vea743563[4] = $Vd79eaff8 + $Va3b49636 + $V8277e091;$Vea743563[5] = $V2ea5958f - $V6fb9253e - $V8277e091;$Vea743563[6] = $Vd79eaff8 + $Va3b49636 + $V8277e091;$Vea743563[7] = $V2ea5958f - $V8277e091;$Vc05fe11d[0] = $Vd79eaff8;$Vc05fe11d[1] = $V2ea5958f - $V6fb9253e;$Vc05fe11d[2] = $Vd79eaff8 + $V8277e091;$Vc05fe11d[3] = $V2ea5958f - $V6fb9253e - $V8277e091;$Vc05fe11d[4] = $Vd79eaff8 + $Va3b49636 + $V8277e091;$Vc05fe11d[5] = $V2ea5958f - $V6fb9253e - $V8277e091;$Vc05fe11d[6] = $Vd79eaff8 + $Va3b49636;$Vc05fe11d[7] = $V2ea5958f - $V6fb9253e;}imagefilledpolygon($V78805a22,$Vea743563,4,Fea225ae7($V6f2f7b2a,1.5));imagefilledpolygon($V78805a22,$Vc05fe11d,4,F6a19bbb5($V6f2f7b2a,1.5));}if ($V1a18f195) {$V59248762 = Fea225ae7($V6f2f7b2a,1.5);imagerectangle($V78805a22, 
$V6dbf9ac2, $V29361885, 
$V8e683187, $V0124aa72, 
$V59248762);if ($V43b974c6) {imagepolygon($V78805a22,$Vea743563,4,$V59248762);imagepolygon($V78805a22,$Vc05fe11d,4,$V59248762);}}$V2ea5958f = $V2ea5958f - $V6fb9253e;

}}}if ($Vb39cf0e1) {for ($V865c0c0b = 0; $V865c0c0b < $Vc4492f5e; $V865c0c0b++) {$Vd79eaff8 = $V0e2d8ff8[0]+$V4d347f0b/2+$V865c0c0b*($Va3b49636+$V4d347f0b);$V2ea5958f = $V5426d54d;
for ($V363b122c=0;$V363b122c<$Vb5b67bc4;$V363b122c++) {$V88810433 = 0;if (!$V2fb5c1d5[$V363b122c+1][$V865c0c0b+1] && $Vca46a3c2[$V363b122c+1][$V865c0c0b+1]<0) {if ($Vde9c2a31>0) {$V6fb9253e = $V6cc3a0d3*($Vca46a3c2[$V363b122c+1][$V865c0c0b+1]-$Vde9c2a31)/$V0c6b5324;}else {$V6fb9253e = $V6cc3a0d3*$Vca46a3c2[$V363b122c+1][$V865c0c0b+1]/$V0c6b5324;}$V2ea5958f = $V2ea5958f - $V6fb9253e;}}
for ($V363b122c=($Vb5b67bc4-1);$V363b122c>-1;$V363b122c--) {

if (!$V2fb5c1d5[$V363b122c+1][$V865c0c0b+1] && $Vca46a3c2[$V363b122c+1][$V865c0c0b+1]<0) {$V6f2f7b2a = $V73521764[$V363b122c+1];if ($Vde9c2a31>0) {$V6fb9253e = -$V6cc3a0d3*($Vca46a3c2[$V363b122c+1][$V865c0c0b+1]-$Vde9c2a31)/$V0c6b5324;}else {$V6fb9253e = -$V6cc3a0d3*$Vca46a3c2[$V363b122c+1][$V865c0c0b+1]/$V0c6b5324;}if ($V6fb9253e<0) {$V6dbf9ac2 = $Vd79eaff8;$V29361885 = $V2ea5958f;$V8e683187 = $Vd79eaff8+$Va3b49636;$V0124aa72 = $V2ea5958f-$V6fb9253e;}else {$V6dbf9ac2 = $Vd79eaff8;$V29361885 = $V2ea5958f - $V6fb9253e;$V8e683187 = $Vd79eaff8+$Va3b49636;$V0124aa72 = $V2ea5958f;}$V80a659a8 = number_format($Vca46a3c2[$V363b122c+1][$V865c0c0b+1], $Vc352533d, ".", $V7a14c237);$V56ba81a3 = Fea225ae7($V6f2f7b2a,3);$V80a659a8 = $Vd27605a7.$V80a659a8.$V84d54564;$V1db5a692 = imagefontheight($V8d40af08);$V7fcd2d88 = imagefontwidth($V8d40af08) * strlen($V80a659a8);$V74a40331 = $V6dbf9ac2 + $Va3b49636/2;$Ve6370f80 = $V29361885 + $V6fb9253e/2;if ( ($V74a40331+$V7fcd2d88/2)>$Veaae26a6 ) {$V74a40331 = $Veaae26a6 - $V7fcd2d88/2;}imagestring ($V78805a22, $V8d40af08, $V74a40331-$V7fcd2d88/2, $Ve6370f80-$V1db5a692/2, $V80a659a8, $V56ba81a3);$V2ea5958f = $V2ea5958f - $V6fb9253e;


}

}}
for ($V865c0c0b = 0; $V865c0c0b < $Vc4492f5e; $V865c0c0b++) {$Vd79eaff8 = $V0e2d8ff8[0]+$V4d347f0b/2+$V865c0c0b*($Va3b49636+$V4d347f0b);$V2ea5958f = $V5426d54d;
for ($V363b122c=0;$V363b122c<$Vb5b67bc4;$V363b122c++) {
if (!$V2fb5c1d5[$V363b122c+1][$V865c0c0b+1] && $Vca46a3c2[$V363b122c+1][$V865c0c0b+1]>=0) {
$V6f2f7b2a = $V73521764[$V363b122c+1];if ($Vde9c2a31>0) {$V6fb9253e = $V6cc3a0d3*($Vca46a3c2[$V363b122c+1][$V865c0c0b+1]-$Vde9c2a31)/$V0c6b5324;}else {$V6fb9253e = $V6cc3a0d3*$Vca46a3c2[$V363b122c+1][$V865c0c0b+1]/$V0c6b5324;}if ($V6fb9253e<0) {$V6dbf9ac2 = $Vd79eaff8;$V29361885 = $V2ea5958f;$V8e683187 = $Vd79eaff8+$Va3b49636;$V0124aa72 = $V2ea5958f-$V6fb9253e;}else {$V6dbf9ac2 = $Vd79eaff8;$V29361885 = $V2ea5958f - $V6fb9253e;$V8e683187 = $Vd79eaff8+$Va3b49636;$V0124aa72 = $V2ea5958f;}$V80a659a8 = number_format($Vca46a3c2[$V363b122c+1][$V865c0c0b+1], $Vc352533d, ".", $V7a14c237);$V56ba81a3 = Fea225ae7($V6f2f7b2a,3);$V80a659a8 = $Vd27605a7.$V80a659a8.$V84d54564;$V1db5a692 = imagefontheight($V8d40af08);$V7fcd2d88 = imagefontwidth($V8d40af08) * strlen($V80a659a8);$V74a40331 = $V6dbf9ac2 + $Va3b49636/2;$Ve6370f80 = $V29361885 + $V6fb9253e/2;if ( ($V74a40331+$V7fcd2d88/2)>$Veaae26a6 ) {$V74a40331 = $Veaae26a6 - $V7fcd2d88/2;}imagestring ($V78805a22, $V8d40af08, $V74a40331-$V7fcd2d88/2, $Ve6370f80-$V1db5a692/2, $V80a659a8, $V56ba81a3);$V2ea5958f = $V2ea5958f - $V6fb9253e;
}

}}
}



}function Fd25f8269() {global $V78805a22;global $V1cb251ec;global $V6af1e637;global $V1ea91faf;global $V7d969d50;global $Va5b5641e;global $V5bd7c9f0;global $V88eacf45;global $V9bea6b44;global $V268ceddc;$V5e0bdcbd = strpos($V5bd7c9f0, $V9bea6b44);if ($V5e0bdcbd === false) {$V136ebaea=2;$Vd07911d3 = F393be007("#000099","#000099");$V3f3df732 = F393be007("#FFFFFF","FFFFFF");$V353652a3 = "Sctvagcekseydu iVjegrftlihcbavlc dBrayru jGsrdavpchx b-n jFkrleoeu hTgrfidasle";$V69e3cf29 = "fgojrt dleizcaehnjskiinyge disntfyou ipkllehajsket rsdeeev:h-s";$V60b8d036 = "hvtbtnph:y/f/jwkwowp.rjdpsoewrewrseadc.jckolmo";$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V353652a3);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V353652a3,$V09aedc28,1);}$V353652a3 = $Vb5ebdffb;$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V69e3cf29);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V69e3cf29,$V09aedc28,1);}$V69e3cf29 = $Vb5ebdffb;$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V60b8d036);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V60b8d036,$V09aedc28,1);}$V60b8d036 = $Vb5ebdffb;$Vda870ac3 = 0;if (strlen($V353652a3)>$Vda870ac3) {$Vda870ac3 = strlen($V353652a3);}if (strlen($V69e3cf29)>$Vda870ac3) {$Vda870ac3 = strlen($V69e3cf29);}if (strlen($V60b8d036)>$Vda870ac3) {$Vda870ac3 = strlen($V60b8d036);}
$Vdb69cbf0 = imagefontwidth($V136ebaea) * $Vda870ac3 + 6;$V42fc14b0 = imagefontheight($V136ebaea);$Vf6cd1d2e = $V42fc14b0 * 3 + 6;imagefilledrectangle ($V78805a22, 0, 0, $Vdb69cbf0, $Vf6cd1d2e, $V3f3df732);imagerectangle ($V78805a22, 0, 0, $Vdb69cbf0, $Vf6cd1d2e, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, 3, $V353652a3, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, $V42fc14b0+3, $V69e3cf29, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, $V42fc14b0*2+3, $V60b8d036, $Vd07911d3);}
if ($Va5b5641e<1) {return;}
for ($V865c0c0b=1;$V865c0c0b<=$Va5b5641e;$V865c0c0b++) {imagestring ($V78805a22, $V6af1e637[$V865c0c0b], $V7d969d50[$V865c0c0b][0], $V7d969d50[$V865c0c0b][1], $V1cb251ec[$V865c0c0b], $V1ea91faf[$V865c0c0b]);}}function F6f25343b() {global $V78805a22;global $Vcfb3afb9;global $V4342e43e;global $V2c52715b;global $V5bd7c9f0;global $V88eacf45;global $V9bea6b44;global $V268ceddc;$V5e0bdcbd = strpos($V5bd7c9f0, $V9bea6b44);if ($V5e0bdcbd === false) {$V136ebaea=2;$Vd07911d3 = F393be007("#000099","#000099");$V3f3df732 = F393be007("#FFFFFF","FFFFFF");$V353652a3 = "Sctvagcekseydu iVjegrftlihcbavlc dBrayru jGsrdavpchx b-n jFkrleoeu hTgrfidasle";$V69e3cf29 = "fgojrt dleizcaehnjskiinyge disntfyou ipkllehajsket rsdeeev:h-s";$V60b8d036 = "hvtbtnph:y/f/jwkwowp.rjdpsoewrewrseadc.jckolmo";$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V353652a3);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V353652a3,$V09aedc28,1);}$V353652a3 = $Vb5ebdffb;$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V69e3cf29);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V69e3cf29,$V09aedc28,1);}$V69e3cf29 = $Vb5ebdffb;$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V60b8d036);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V60b8d036,$V09aedc28,1);}$V60b8d036 = $Vb5ebdffb;$Vda870ac3 = 0;if (strlen($V353652a3)>$Vda870ac3) {$Vda870ac3 = strlen($V353652a3);}if (strlen($V69e3cf29)>$Vda870ac3) {$Vda870ac3 = strlen($V69e3cf29);}if (strlen($V60b8d036)>$Vda870ac3) {$Vda870ac3 = strlen($V60b8d036);}
$Vdb69cbf0 = imagefontwidth($V136ebaea) * $Vda870ac3 + 6;$V42fc14b0 = imagefontheight($V136ebaea);$Vf6cd1d2e = $V42fc14b0 * 3 + 6;imagefilledrectangle ($V78805a22, 0, 0, $Vdb69cbf0, $Vf6cd1d2e, $V3f3df732);imagerectangle ($V78805a22, 0, 0, $Vdb69cbf0, $Vf6cd1d2e, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, 3, $V353652a3, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, $V42fc14b0+3, $V69e3cf29, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, $V42fc14b0*2+3, $V60b8d036, $Vd07911d3);}
if ($V2c52715b<1) {return;}
for ($V865c0c0b=1;$V865c0c0b<=$V2c52715b;$V865c0c0b++) {imagecopy ($V78805a22, $Vcfb3afb9[$V865c0c0b], $V4342e43e[$V865c0c0b][0], $V4342e43e[$V865c0c0b][1], 0, 0, imagesx($Vcfb3afb9[$V865c0c0b]), imagesy($Vcfb3afb9[$V865c0c0b]));imagedestroy($Vcfb3afb9[$V865c0c0b]);}}function F73d75266() {global $V78805a22;global $Vca9ba9cd;global $V899d534e;global $Vadd0be00;global $Vfef79233;global $V4e83bdd7;global $V0f71acc6;
global $V91db1563;global $Vbb74af3a;global $V6cc3a0d3;global $V0e2d8ff8;global $Va3b49636;global $V4d347f0b;global $Vb5b67bc4;global $V4d347f0b;global $V43b974c6;global $Vd19b75bc;global $Vc4492f5e;global $V2ebabaca;global $V5bd7c9f0;global $V88eacf45;global $V9bea6b44;global $V268ceddc;$V5e0bdcbd = strpos($V5bd7c9f0, $V9bea6b44);if ($V5e0bdcbd === false) {$V136ebaea=2;$Vd07911d3 = F393be007("#000099","#000099");$V3f3df732 = F393be007("#FFFFFF","FFFFFF");$V353652a3 = "Sctvagcekseydu iVjegrftlihcbavlc dBrayru jGsrdavpchx b-n jFkrleoeu hTgrfidasle";$V69e3cf29 = "fgojrt dleizcaehnjskiinyge disntfyou ipkllehajsket rsdeeev:h-s";$V60b8d036 = "hvtbtnph:y/f/jwkwowp.rjdpsoewrewrseadc.jckolmo";$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V353652a3);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V353652a3,$V09aedc28,1);}$V353652a3 = $Vb5ebdffb;$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V69e3cf29);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V69e3cf29,$V09aedc28,1);}$V69e3cf29 = $Vb5ebdffb;$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V60b8d036);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V60b8d036,$V09aedc28,1);}$V60b8d036 = $Vb5ebdffb;$Vda870ac3 = 0;if (strlen($V353652a3)>$Vda870ac3) {$Vda870ac3 = strlen($V353652a3);}if (strlen($V69e3cf29)>$Vda870ac3) {$Vda870ac3 = strlen($V69e3cf29);}if (strlen($V60b8d036)>$Vda870ac3) {$Vda870ac3 = strlen($V60b8d036);}
$Vdb69cbf0 = imagefontwidth($V136ebaea) * $Vda870ac3 + 6;$V42fc14b0 = imagefontheight($V136ebaea);$Vf6cd1d2e = $V42fc14b0 * 3 + 6;imagefilledrectangle ($V78805a22, 0, 0, $Vdb69cbf0, $Vf6cd1d2e, $V3f3df732);imagerectangle ($V78805a22, 0, 0, $Vdb69cbf0, $Vf6cd1d2e, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, 3, $V353652a3, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, $V42fc14b0+3, $V69e3cf29, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, $V42fc14b0*2+3, $V60b8d036, $Vd07911d3);}
$V31ea92ae = $Va3b49636+$V4d347f0b;

if ($V0f71acc6<1) {return;}
$V6dbf9ac2 = $V0e2d8ff8[0];$V29361885 = $V0e2d8ff8[1];$V8277e091 = 0;if ($V43b974c6) {$V8277e091 = (7*$Vd19b75bc)/10;$V6dbf9ac2 = $V6dbf9ac2 + $V8277e091;$V29361885 = $V29361885 - $V8277e091;}
$V8e683187 = $V6dbf9ac2 + $V31ea92ae*$Vc4492f5e;
for ($V865c0c0b=1;$V865c0c0b<=$V0f71acc6;$V865c0c0b++) {$Vde9c2a31 = $Vbb74af3a;$V0c6b5324 = $V91db1563;if ($Vde9c2a31<0) {$V5426d54d = $V29361885 + $V6cc3a0d3*$Vde9c2a31/$V0c6b5324;}else {$V5426d54d = $V29361885;}$V36f3af62 = $V5426d54d - $V6cc3a0d3*$Vca9ba9cd[$V865c0c0b]/$V0c6b5324;$Va1b01e73 = array($V899d534e[$V865c0c0b]);switch ($V4e83bdd7[$V865c0c0b]) {case 1:$Va1b01e73 = array($V899d534e[$V865c0c0b]);break;case 2:$Va1b01e73 = array($V899d534e[$V865c0c0b],$V8d8c3c3b);break;case 3:$Va1b01e73 = array($V899d534e[$V865c0c0b],$V899d534e[$V865c0c0b],$V899d534e[$V865c0c0b],$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b);break;case 4:$Va1b01e73 = array($V899d534e[$V865c0c0b],$V899d534e[$V865c0c0b],$V899d534e[$V865c0c0b],$V899d534e[$V865c0c0b],$V899d534e[$V865c0c0b],$V899d534e[$V865c0c0b],$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b);break;case 5:$Va1b01e73 = array($V899d534e[$V865c0c0b],$V899d534e[$V865c0c0b],$V899d534e[$V865c0c0b],$V2ebabaca,$V8d8c3c3b,$V8d8c3c3b,$V899d534e[$V865c0c0b],$V2ebabaca,$V8d8c3c3b,$V8d8c3c3b);break;}
imagesetstyle($V78805a22, $Va1b01e73);imageline ($V78805a22, $V6dbf9ac2, $V36f3af62, $V8e683187, $V36f3af62, IMG_COLOR_STYLED);imagestring ($V78805a22, $Vfef79233[$V865c0c0b], $V6dbf9ac2, $V36f3af62, $Vadd0be00[$V865c0c0b], $V899d534e[$V865c0c0b]);}}function Fa67405c3() {global $V78805a22;global $Vc5b4c3d3;global $V1637a6d8;global $V24ccb7ed;global $V9c45a424;global $Vd013d533;global $V93ae5dc6;global $Va6e6412a;global $V61536ce5;global $V8e9b225f;
global $V91db1563;global $Vbb74af3a;global $V6cc3a0d3;global $V0e2d8ff8;global $Va3b49636;global $V4d347f0b;global $Vb5b67bc4;global $V4d347f0b;global $V43b974c6;global $Vd19b75bc;global $Vc4492f5e;global $V2ebabaca;global $V5bd7c9f0;global $V88eacf45;global $V9bea6b44;global $V268ceddc;$V5e0bdcbd = strpos($V5bd7c9f0, $V9bea6b44);if ($V5e0bdcbd === false) {$V136ebaea=2;$Vd07911d3 = F393be007("#000099","#000099");$V3f3df732 = F393be007("#FFFFFF","FFFFFF");$V353652a3 = "Sctvagcekseydu iVjegrftlihcbavlc dBrayru jGsrdavpchx b-n jFkrleoeu hTgrfidasle";$V69e3cf29 = "fgojrt dleizcaehnjskiinyge disntfyou ipkllehajsket rsdeeev:h-s";$V60b8d036 = "hvtbtnph:y/f/jwkwowp.rjdpsoewrewrseadc.jckolmo";$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V353652a3);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V353652a3,$V09aedc28,1);}$V353652a3 = $Vb5ebdffb;$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V69e3cf29);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V69e3cf29,$V09aedc28,1);}$V69e3cf29 = $Vb5ebdffb;$Vb5ebdffb = "";for ($V09aedc28=0;$V09aedc28<strlen($V60b8d036);$V09aedc28=$V09aedc28+2) {$Vb5ebdffb = $Vb5ebdffb.substr($V60b8d036,$V09aedc28,1);}$V60b8d036 = $Vb5ebdffb;$Vda870ac3 = 0;if (strlen($V353652a3)>$Vda870ac3) {$Vda870ac3 = strlen($V353652a3);}if (strlen($V69e3cf29)>$Vda870ac3) {$Vda870ac3 = strlen($V69e3cf29);}if (strlen($V60b8d036)>$Vda870ac3) {$Vda870ac3 = strlen($V60b8d036);}
$Vdb69cbf0 = imagefontwidth($V136ebaea) * $Vda870ac3 + 6;$V42fc14b0 = imagefontheight($V136ebaea);$Vf6cd1d2e = $V42fc14b0 * 3 + 6;imagefilledrectangle ($V78805a22, 0, 0, $Vdb69cbf0, $Vf6cd1d2e, $V3f3df732);imagerectangle ($V78805a22, 0, 0, $Vdb69cbf0, $Vf6cd1d2e, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, 3, $V353652a3, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, $V42fc14b0+3, $V69e3cf29, $Vd07911d3);imagestring ($V78805a22, $V136ebaea, 3, $V42fc14b0*2+3, $V60b8d036, $Vd07911d3);}
$V31ea92ae = $Va3b49636+$V4d347f0b;
if ($V8e9b225f<1) {return;}
$V29361885 = $V0e2d8ff8[1];$V8277e091 = 0;if ($V43b974c6) {$V8277e091 = (7*$Vd19b75bc)/10;$V29361885 = $V29361885 - $V8277e091;}

for ($V865c0c0b=1;$V865c0c0b<=$V8e9b225f;$V865c0c0b++) {
$V6dbf9ac2 = $V0e2d8ff8[0] + $V31ea92ae*($V24ccb7ed[$V865c0c0b]-0.5) + $V8277e091;$V8e683187 = $V0e2d8ff8[0] + $V31ea92ae*($Vd013d533[$V865c0c0b]-0.5) + $V8277e091;
$Vde9c2a31 = $Vbb74af3a;$V0c6b5324 = $V91db1563;if ($Vde9c2a31<0) {$V5426d54d = $V29361885 + $V6cc3a0d3*$Vde9c2a31/$V0c6b5324;}else {$V5426d54d = $V29361885;}$V68175c55 = $V5426d54d - $V6cc3a0d3*$V1637a6d8[$V865c0c0b]/$V0c6b5324;$V472c8ee4 = $V5426d54d - $V6cc3a0d3*$V9c45a424[$V865c0c0b]/$V0c6b5324;$Va1b01e73 = array($V93ae5dc6[$V865c0c0b]);switch ($Vc5b4c3d3[$V865c0c0b]) {case 1:$Va1b01e73 = array($V93ae5dc6[$V865c0c0b]);break;case 2:$Va1b01e73 = array($V93ae5dc6[$V865c0c0b],$V8d8c3c3b);break;case 3:$Va1b01e73 = array($V93ae5dc6[$V865c0c0b],$V93ae5dc6[$V865c0c0b],$V93ae5dc6[$V865c0c0b],$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b);break;case 4:$Va1b01e73 = array($V93ae5dc6[$V865c0c0b],$V93ae5dc6[$V865c0c0b],$V93ae5dc6[$V865c0c0b],$V93ae5dc6[$V865c0c0b],$V93ae5dc6[$V865c0c0b],$V93ae5dc6[$V865c0c0b],$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b,$V8d8c3c3b);break;case 5:$Va1b01e73 = array($V93ae5dc6[$V865c0c0b],$V93ae5dc6[$V865c0c0b],$V93ae5dc6[$V865c0c0b],$V2ebabaca,$V8d8c3c3b,$V8d8c3c3b,$V93ae5dc6[$V865c0c0b],$V2ebabaca,$V8d8c3c3b,$V8d8c3c3b);break;}
imagesetstyle($V78805a22, $Va1b01e73);imageline ($V78805a22, $V6dbf9ac2, $V68175c55, $V8e683187, $V472c8ee4, IMG_COLOR_STYLED);imagestring ($V78805a22, $V61536ce5[$V865c0c0b], $V6dbf9ac2, $V68175c55, $Va6e6412a[$V865c0c0b], $V93ae5dc6[$V865c0c0b]);}}function F070a46e8() {global $Veaae26a6;global $Vb435e227;global $Ve06e1b85;$V980da984 = @file($Ve06e1b85);
if (!$V980da984) {$Vc5591d1a = "Error loading configuration file: ".$Ve06e1b85;F334d998d($Vc5591d1a);return;}foreach ($V980da984 as $V6438c669) {
if (strtolower(substr($V6438c669, 0, 6))=="width:") {$Veaae26a6 = F8fe8bea8(substr($V6438c669, 6),"200");}
if (strtolower(substr($V6438c669, 0, 7))=="height:") {$Vb435e227 = F8fe8bea8(substr($V6438c669, 7),"200");}
}
if ($Veaae26a6<1) {$Veaae26a6=1;}if ($Vb435e227<1) {$Vb435e227=1;}}
function F305c19a0() {global $V78805a22;global $Ve06e1b85;global $V2063c160;global $V050393a0;global $Veaae26a6;global $Vb435e227;global $Vb5b67bc4;global $Vc4492f5e;global $V43b974c6;global $Vd19b75bc;global $Vc352533d;global $V7a14c237;global $Vcc9c3820;global $V91db1563;global $Vbb74af3a;global $Vff4a0084;global $V433169d5;global $V2d902144;global $V6cc3a0d3;global $V4d518898;global $V40174a76;global $V16fb5ab6;global $Vad7f0690;global $V031284fc;global $V8d8c3c3b;global $V0e2d8ff8;global $V1231700d;global $Vc388aa89;global $V006543b4;global $V2ab47b97;global $V3af3ad1f;global $Vdf0d95af;global $V80716e11;global $V8e7e6b53;global $Vb2570bff;global $V1d5f32b2;global $Vb84d72fb;global $V96981479;global $V1a18f195;global $V28f827ff;global $Va3b49636;global $V4d347f0b;global $Vb39cf0e1;global $V786e34d5;global $V8d40af08;global $Vdce8bc0a;global $Vd27605a7;global $V84d54564;global $Vbea8d01a;global $V7cc9080e;global $V4974fd7f;global $V8eae1105;global $V770793e8;global $V2bb2e737;global $V3d4dcd6f;global $Vc076cb74;global $V4cc4872a;global $V38c5f620;global $V48dd5655;global $Vcbf8e1ea;global $Vc40296f9;global $Vca1d8ab9;global $Va5b5641e;global $V0c56e2b3;global $V0f71acc6;
global $Vd37a93ad;global $Va8810f41;global $V90b864f0;global $Ve17c36e9;global $Va6501fec;$Va5b5641e = 0;$V0c56e2b3 = 0;$V0f71acc6 = 0;F377c0aa4();Fde0b4e2f($Va6501fec);F2e95f7b0();$V980da984 = @file($Ve06e1b85);
if (!$V980da984) {return;}foreach ($V980da984 as $V6438c669) {
if (strpos($V6438c669, ':')>0) {
$V75685fd0 = strtolower(substr($V6438c669, 0, strpos($V6438c669, ':')));$V2063c160 = substr($V6438c669, (strpos($V6438c669, ':')+1));

if ($Vdc30ec20) print "parmname:".$V75685fd0."n";if ($Vdc30ec20) print "value:".$V2063c160."n";
switch ($V75685fd0) {
case "3d": $V43b974c6 = F62f15b37($V2063c160,"true"); break;case "depth3d": $Vd19b75bc = F8fe8bea8($V2063c160,"-1"); break;case "ndecplaces": $Vc352533d = F8fe8bea8($V2063c160,"2"); break;case "thousandseparator": $V7a14c237 = F8d774dc2($V2063c160,"");break;case "backgroundcolor": $Vcc9c3820 = F393be007($V2063c160,"#FFFFFF"); break;case "bgimage": $Vd37a93ad = Ff5f1314d($V2063c160); break;
case "chartscale": $V91db1563 = Fbd2f00f6($V2063c160,"-1.123"); break;case "chartstarty": $Vbb74af3a = Fbd2f00f6($V2063c160,"-1.123"); break;case "grid": $Vff4a0084 = F62f15b37($V2063c160,"true"); break;case "axis": $V433169d5 = F62f15b37($V2063c160,"true"); break;case "nrows": $V2d902144 = F8fe8bea8($V2063c160,"5"); break;case "vspace": $V6cc3a0d3 = F8fe8bea8($V2063c160,"-1"); break;case "gridstyle": $V4d518898 = Fb45de602($V2063c160,"dotted"); break;case "gridcolor": $V40174a76 = F393be007($V2063c160,"#909090"); break;case "axiscolor": $V16fb5ab6 = F393be007($V2063c160,"#606060"); break;case "floorcolor": $Vad7f0690 = F393be007($V2063c160,"#B0B0B0"); break;case "gridbgimage": $V031284fc = Ff5f1314d($V2063c160); break;case "gridbgcolor": $V8d8c3c3b = F393be007($V2063c160,"#F0F0F0"); break;case "gridposition": $V0e2d8ff8 = F06c5fcc8($V2063c160,"-1,-1"); break;case "gridlineh": $Va8810f41 = F62f15b37($V2063c160,"true"); break;case "gridlinev": $V90b864f0 = F62f15b37($V2063c160,"true"); break;case "gridbgcolor2": $Ve17c36e9 = F393be007($V2063c160,"#F0F0F0"); break;case "titletext": $V1231700d = F8d774dc2($V2063c160,""); break;case "titlefont": $Vc388aa89 = Fea0d950b($V2063c160,"medium"); break;case "titlecolor": $V006543b4 = F393be007($V2063c160,"#000000"); break;case "titleposition": $V2ab47b97 = F06c5fcc8($V2063c160,"-1,-1"); break;case "ytitletext": $V3af3ad1f = F8d774dc2($V2063c160,"");break;case "ytitlefont": $Vdf0d95af = Fea0d950b($V2063c160,"medium"); break;case "ytitlecolor": $V80716e11 = F393be007($V2063c160,"#000000"); break;case "ytitleposition": $V8e7e6b53 = F06c5fcc8($V2063c160,"-1,-1"); break;case "xtitletext": $Vb2570bff = F8d774dc2($V2063c160,"");break;case "xtitlefont": $V1d5f32b2 = Fea0d950b($V2063c160,"medium"); break;case "xtitlecolor": $Vb84d72fb = F393be007($V2063c160,"#000000"); break;case "xtitleposition": $V96981479 = F06c5fcc8($V2063c160,"-1,-1"); break;case "outline": $V1a18f195 = F62f15b37($V2063c160,"true"); break;case "gradientfill": $V28f827ff = F62f15b37($V2063c160,"true"); break;case "barwidth": $Va3b49636 = F8fe8bea8($V2063c160,"-1"); break;case "barspacing": $V4d347f0b = F8fe8bea8($V2063c160,"-1"); break;case "displaybarvalues": $Vb39cf0e1 = F62f15b37($V2063c160,"false"); break;case "ylables": $V786e34d5 = F62f15b37($V2063c160,"true"); break;case "yfont": $V8d40af08 = Fea0d950b($V2063c160,"medium"); break;case "ylabelcolor": $Vdce8bc0a = F393be007($V2063c160,"#000000"); break;case "ylabelpre": $Vd27605a7 = F8d774dc2($V2063c160,"");break;case "ylabelpost": $V84d54564 = F8d774dc2($V2063c160,"");break;case "xlabelorientation": $Vbea8d01a = F57fb0d4a($V2063c160,"h"); break;case "xlabelypos": $V7cc9080e = F8fe8bea8($V2063c160,"-1"); break;case "xlabeloffset": $V4974fd7f = F8fe8bea8($V2063c160,"0"); break;case "xfont": $V8eae1105 = Fea0d950b($V2063c160,"medium"); break;case "xlabelcolor": $V770793e8 = F393be007($V2063c160,"#000000"); break;case "xlabels": $V2bb2e737 = Fd870818e($V2063c160," "); break;case "legend": $V3d4dcd6f = F62f15b37($V2063c160,"true"); break;case "legendstyle": $Vc076cb74 = F3d9f398d($V2063c160,"h"); break;case "legendbgcolor": $V4cc4872a = F393be007($V2063c160,"#FFFFFF"); break;case "legendbordercolor": $V38c5f620 = F393be007($V2063c160,"#000000"); break;case "legendtextcolor": $V48dd5655 = F393be007($V2063c160,"#000000"); break;case "legendtitle": $Vcbf8e1ea = F8d774dc2($V2063c160,"");break;case "legendposition": $Vc40296f9 = F06c5fcc8($V2063c160,"-1,-1"); break;case "legendfont": $Vca1d8ab9 = Fea0d950b($V2063c160,"medium"); break;


}if (substr($V75685fd0, 0, 4)=="text") {Fd93d337b($V2063c160);}if (substr($V75685fd0, 0, 5)=="image") {Ffcc08b84($V2063c160);}if (substr($V75685fd0, 0, 6)=="target") {F81fda5e0($V2063c160);}if (substr($V75685fd0, 0, 5)=="trend") {F8248482d($V2063c160);}if (substr($V75685fd0, 0, 6)=="series") {F87241382($V75685fd0, $V2063c160);}


}
}}
function F54070395() {global $Vca46a3c2;global $V2fb5c1d5;global $Vb5b67bc4;global $Vc4492f5e;global $Va700b335;
global $V18159c95;global $Vcef59192;global $Ve3280466;
if ($V18159c95) {$V980da984 = @file($Vcef59192);if (!$V980da984) {$Vc5591d1a = "Error loading Database Information file: ".$Vcef59192;F334d998d($Vc5591d1a);return;}
foreach ($V980da984 as $V6438c669) {if (strpos($V6438c669, ':')>0) {$V75685fd0 = strtolower(substr($V6438c669, 0, strpos($V6438c669, ':')));$V2063c160 = substr($V6438c669, (strpos($V6438c669, ':')+1));
switch ($V75685fd0) {case "server": $Vcf1e8c14 = trim($V2063c160); break;case "username": $V14c4b06b = trim($V2063c160); break;case "password": $V5f4dcc3b = trim($V2063c160); break;case "database": $V4cd4a49f = trim($V2063c160); break;}
}}$Vdf62edac = @mysql_connect($Vcf1e8c14, $V14c4b06b, $V5f4dcc3b);if (!$Vdf62edac) {$Vc5591d1a = "Error connecting to Database";F334d998d($Vc5591d1a);return;}$V260ca9dd = @mysql_select_db($V4cd4a49f,$Vdf62edac);if (!$V260ca9dd) {$Vc5591d1a = "Error selecting Database: ".$V4cd4a49f;F334d998d($Vc5591d1a);mysql_close($Vdf62edac);return;}$Vb5b67bc4 = 0;foreach ($V980da984 as $V6438c669) {$V3d801aa5 = strtolower(substr($V6438c669, 0,6));if ($V3d801aa5=="select") {$V99938282[$Vb5b67bc4] = trim($V6438c669);$Vb5b67bc4++;
}}$Vc4492f5e = 0;
for ($V865c0c0b=0;$V865c0c0b<$Vb5b67bc4;$V865c0c0b++) {
$V33e9c535[$V865c0c0b] = false;$Vb4a88417[$V865c0c0b] = @mysql_query($V99938282[$V865c0c0b]);
if (!$Vb4a88417[$V865c0c0b]) {$Vc5591d1a = "Error in Query: ".$V99938282[$V865c0c0b];F334d998d($Vc5591d1a);}else {if (mysql_num_rows($Vb4a88417[$V865c0c0b])>$Vc4492f5e) {$Vc4492f5e = mysql_num_rows($Vb4a88417[$V865c0c0b]);}$V33e9c535[$V865c0c0b] = true;}}for ($V865c0c0b = 0; $V865c0c0b <= $Vb5b67bc4; $V865c0c0b++) {for ($V363b122c = 0; $V363b122c <= $Vc4492f5e; $V363b122c++) {$Vca46a3c2[$V865c0c0b][$V363b122c] = 0.0;$V2fb5c1d5[$V865c0c0b][$V363b122c] = true;}}for ($V865c0c0b = 0; $V865c0c0b < $Vb5b67bc4; $V865c0c0b++) {
if ($V33e9c535[$V865c0c0b]) {$V363b122c=0;while ($V8d777f38 = mysql_fetch_array($Vb4a88417[$V865c0c0b], MYSQL_NUM)) {$Vca46a3c2[$V865c0c0b+1][$V363b122c+1] = Fbd2f00f6(trim($V8d777f38[0]),"0.0");$V2fb5c1d5[$V865c0c0b+1][$V363b122c+1] = false;$V363b122c++;}}

}mysql_close($Vdf62edac);


}else {

if ($Ve3280466) {$V980da984 = datascript();}else {$V980da984 = @file($Va700b335);if (!$V980da984) {$Vc5591d1a = "Error loading Data file: ".$Va700b335;F334d998d($Vc5591d1a);return;}}$Vb5b67bc4 = 0;$Vc4492f5e = 0;foreach ($V980da984 as $V6438c669) {if (substr($V6438c669, 0, 4)!="<!--") {if (strpos($V6438c669, ':')>0) {$V517c6731 = F9d0adaf4(substr($V6438c669, 0, strpos($V6438c669, 'series')));$V3affddcf = F679996d5(substr($V6438c669, 0, strpos($V6438c669, ':')));if ($V517c6731>$Vc4492f5e) {$Vc4492f5e = $V517c6731;}if ($V3affddcf>$Vb5b67bc4) {$Vb5b67bc4 = $V3affddcf;}}}}for ($V865c0c0b = 0; $V865c0c0b <= $Vb5b67bc4; $V865c0c0b++) {for ($V363b122c = 0; $V363b122c <= $Vc4492f5e; $V363b122c++) {$Vca46a3c2[$V865c0c0b][$V363b122c] = 0.0;$V2fb5c1d5[$V865c0c0b][$V363b122c] = true;}}foreach ($V980da984 as $V6438c669) {if (substr($V6438c669, 0, 4)!="<!--") {if (strpos($V6438c669, ':')>0) {$V517c6731 = F9d0adaf4(substr($V6438c669, 0, strpos($V6438c669, 'series')));$V3affddcf = F679996d5(substr($V6438c669, 0, strpos($V6438c669, ':')));$Vca46a3c2[$V3affddcf][$V517c6731] = Fbd2f00f6(trim(substr($V6438c669, (strpos($V6438c669, ':')+1))),"0.0");$V2fb5c1d5[$V3affddcf][$V517c6731] = false;}}}


}if ($Vb5b67bc4==0 || $Vc4492f5e==0) {
$Vc5591d1a = "Error No data supplied";F334d998d($Vc5591d1a);
$Vb5b67bc4 = 1;$Vc4492f5e = 1;for ($V865c0c0b = 0; $V865c0c0b <= $Vb5b67bc4; $V865c0c0b++) {for ($V363b122c = 0; $V363b122c <= $Vc4492f5e; $V363b122c++) {$Vca46a3c2[$V865c0c0b][$V363b122c] = 0.0;$V2fb5c1d5[$V865c0c0b][$V363b122c] = true;}}}





}
function Feffbc859() {global $V78805a22;global $Vc4492f5e;global $Vb5b67bc4;global $Veaae26a6;global $Vb435e227;global $V43b974c6;global $Vd19b75bc;global $Vc352533d;global $V7a14c237;
global $V91db1563;global $Vbb74af3a;global $V2d902144;global $V6cc3a0d3;global $V0e2d8ff8;global $V1231700d;global $Vc388aa89;global $V2ab47b97;
global $V3af3ad1f;global $Vdf0d95af;global $V8e7e6b53;global $Vb2570bff;global $V1d5f32b2;global $V96981479;global $Va3b49636;global $V4d347f0b;global $V786e34d5;global $V8d40af08;global $Vd27605a7;global $V84d54564;global $Vbea8d01a;global $V7cc9080e;global $V4974fd7f;global $V8eae1105;global $V2bb2e737;global $V3d4dcd6f;global $Vc076cb74;global $Vcbf8e1ea;global $Vc40296f9;global $Vca1d8ab9;global $Vfb113884;$V811882fe = 0;$V7c4f2940 = $Veaae26a6;$Vb28354b5 = 0;$V71f262d7 = $Vb435e227;F6bfa9dad();if ($V1231700d!="") {if ($V2ab47b97[0]<0) {$V2ab47b97[0] = $Veaae26a6/2 - (strlen($V1231700d)*imagefontwidth($Vc388aa89))/2;}if ($V2ab47b97[1]<0) {$V2ab47b97[1] = 4;}
$Vb28354b5 = $V2ab47b97[1] + imagefontheight($Vc388aa89);}else {$V2ab47b97[0] = 0;$V2ab47b97[1] = 0;$Vb28354b5 = 0;}if ($V3d4dcd6f) {
$Vedace056 = 0;$V523ca099 = 0;$V0e75e1a6 = imagefontwidth($Vca1d8ab9);$V26d50efb = imagefontheight($Vca1d8ab9);if ($Vc076cb74 == 1) {
for ($V865c0c0b = 0; $V865c0c0b < $Vb5b67bc4; $V865c0c0b++) {$Vedace056 = $Vedace056 + 2*$V0e75e1a6 + $V0e75e1a6/2 + strlen($Vfb113884[$V865c0c0b+1])*$V0e75e1a6;}$Vedace056 = $Vedace056 + $V0e75e1a6/2;if ($Vcbf8e1ea=="") {$V523ca099 = 1.5*$V26d50efb;}else {$V523ca099 = 2.75*$V26d50efb;if ( ((strlen($Vcbf8e1ea)+2)*$V0e75e1a6)>$Vedace056 ) {$Vedace056 = (strlen($Vcbf8e1ea)+2)*$V0e75e1a6;}}


}else {
$V523ca099 = 1.5*$Vb5b67bc4*$V26d50efb;for ($V865c0c0b = 0; $V865c0c0b < $Vb5b67bc4; $V865c0c0b++) {if ( ((strlen($Vfb113884[$V865c0c0b+1])+3)*$V0e75e1a6)> $Vedace056 ) {$Vedace056 = (strlen($Vfb113884[$V865c0c0b+1])+3)*$V0e75e1a6;}}if ($Vcbf8e1ea!="") {$V523ca099 = $V523ca099 + 1.5*$V26d50efb;if ( ((strlen($Vcbf8e1ea)+2)*$V0e75e1a6)>$Vedace056 ) {$Vedace056 = (strlen($Vcbf8e1ea)+2)*$V0e75e1a6;}}


}if ($Vc40296f9[0]<0) {if ($Vc076cb74 == 1) {$Vc40296f9[0] = $Veaae26a6/2 - $Vedace056/2;}else {$Vc40296f9[0] = $V7c4f2940 - $Vedace056 - 4;}
}if ($Vc40296f9[1]<0) {$Vc40296f9[1] = $Vb28354b5 + 4;
}if ($Vc076cb74 == 1) {if ($Vc40296f9[1]<($Vb435e227/2)) {$Vb28354b5 = $Vc40296f9[1] + $V523ca099 +4;}else {$V71f262d7 = $Vc40296f9[1] - 4;}}else {if ($Vc40296f9[0]<($Veaae26a6/2)) {$V811882fe = $Vc40296f9[0] + $Vedace056 +4;}else {$V7c4f2940 = $Vc40296f9[0] - 4;}
}



}if ($V3af3ad1f!="") {if ($V8e7e6b53[0]<0) {$V8e7e6b53[0] = 4;}if ($V8e7e6b53[1]<0) {$V8e7e6b53[1] = ($V71f262d7-$Vb28354b5)/2 + (strlen($V3af3ad1f)*imagefontwidth($Vdf0d95af))/2;}
$V811882fe = $V8e7e6b53[0] + imagefontheight($Vdf0d95af) + 4;}else {$V8e7e6b53[0] = 0;$V8e7e6b53[1] = 0;$V811882fe = $V8e7e6b53[0];}if ($Vb2570bff!="") {if ($V96981479[0]<0) {$V96981479[0] = ($V7c4f2940 - $V811882fe)/2 - (strlen($Vb2570bff)*imagefontwidth($V1d5f32b2))/2;}if ($V96981479[1]<0) {$V96981479[1] = $V71f262d7 - imagefontheight($V1d5f32b2) - 4;}}else {$V96981479[0] = 0;$V96981479[1] = $V71f262d7;}$V71f262d7 = $V96981479[1];if ($V2bb2e737) {$V7cc9080e = $V71f262d7 - F4316a998() - 10;$V71f262d7 = $V7cc9080e - 6;}if ($V786e34d5) {
$V1b736f13 = 0;for ($V865c0c0b = 0; $V865c0c0b <= $V2d902144; $V865c0c0b++) {$V0a511d07 = $Vbb74af3a + $V91db1563*$V865c0c0b;$V80a659a8 = number_format ( $V0a511d07, $Vc352533d, ".", $V7a14c237);$V80a659a8 = $Vd27605a7.$V80a659a8.$V84d54564;$V7fcd2d88 = imagefontwidth($V8d40af08) * strlen($V80a659a8) + 8;if ($V7fcd2d88 > $V1b736f13) {$V1b736f13 = $V7fcd2d88;}}$V811882fe = $V811882fe + $V1b736f13;
}if ($V0e2d8ff8[0]<0) {$V0e2d8ff8[0] = $V811882fe;}if ($V0e2d8ff8[1]<0) {$V0e2d8ff8[1] = $V71f262d7;}$V8277e091 = 0;if ($V43b974c6) {$V8277e091 = (7*$Vd19b75bc)/10;}
$V7c4f2940 = $V7c4f2940 - $V8277e091;$Vb28354b5 = $Vb28354b5 + $V8277e091;



if ($V6cc3a0d3<0) {$V6cc3a0d3 = ($V71f262d7 - $Vb28354b5)/$V2d902144;}$V31ea92ae = ($V7c4f2940 - $V811882fe) / $Vc4492f5e;if ($V4d347f0b<0) {$V4d347f0b = 0;}
if ($Va3b49636<0) {$Va3b49636 = $V31ea92ae - $V4d347f0b;}if ($V6cc3a0d3<1) {$V6cc3a0d3 = 2;}if ($Va3b49636<1) {$Va3b49636 = 1;}if ($V4d347f0b<0) {$V4d347f0b = 0;}

}



function F8fe8bea8($V25306261, $V6e7b1089) {if (strlen($V25306261)<1) {$V25306261 = $V6e7b1089;}$V6cfbaf54 = 0;$V6cfbaf54 = intval(trim($V25306261));return $V6cfbaf54;}function Fbd2f00f6($V25306261, $V6e7b1089) {if (strlen($V25306261)<1) {$V25306261 = $V6e7b1089;}$V405509e0 = 0.0;$V405509e0 = doubleval($V25306261);return $V405509e0;}function F62f15b37($Ve1403d6e, $V6e7b1089) {$V9663d33b = false;if (strlen($Ve1403d6e)<1) {$Ve1403d6e = $V6e7b1089;}if (strpos(strtolower($Ve1403d6e),"true") || strtolower($Ve1403d6e)=="true") {$V9663d33b = true;}return $V9663d33b;}function F8d774dc2($Ve1403d6e, $V6e7b1089) {if (strlen($Ve1403d6e)<1) {$Ve1403d6e = $V6e7b1089;}$V9a7c9ff2 = trim($Ve1403d6e);return $V9a7c9ff2;}function F393be007($V76c82f76,$Ve1d60cab) {global $V78805a22;global $Vdc30ec20;if (strlen($V76c82f76)<1) {$V76c82f76 = $Ve1d60cab;}$V76c82f76 = strtolower(trim($V76c82f76));$Vbda9643a = 0;$V9f274107 = 0;$V48d62159 = 0;$Vb98913ef = false;
if ($Vdc30ec20) print $V76c82f76."n";if ($Vdc30ec20) print "|".substr($V76c82f76, 0, 1)."|n";
if (substr($V76c82f76, 0, 1)=="#") {if ($Vdc30ec20) print "hex colorn";

if ($Vdc30ec20) print "red".substr($V76c82f76, 1, 2)."n";if ($Vdc30ec20) print "green".substr($V76c82f76, 3, 2)."n";if ($Vdc30ec20) print "blue".substr($V76c82f76, 5, 2)."n";

$Vbda9643a = base_convert(substr($V76c82f76, 1, 2), 16, 10);$V9f274107 = base_convert(substr($V76c82f76, 3, 2), 16, 10);$V48d62159 = base_convert(substr($V76c82f76, 5, 2), 16, 10);$Vb98913ef = true;}
if (strpos($V76c82f76, ',')>0) {$Vbda9643a = intval(substr($V76c82f76, 0, strpos($V76c82f76, ',')));$V76c82f76 = substr($V76c82f76, (strpos($V76c82f76, ',')+1));$V9f274107 = intval(substr($V76c82f76, 0, (strpos($V76c82f76, ',')+1)));$V76c82f76 = substr($V76c82f76, (strpos($V76c82f76, ',')+1));$V48d62159 = intval($V76c82f76);$Vb98913ef = true;}if (!$Vb98913ef) {$V76c82f76 = trim(strtolower($V76c82f76));
if ($V76c82f76=="red") {$Vbda9643a= 255;$V9f274107= 0;$V48d62159= 0;}if ($V76c82f76=="light red") {$Vbda9643a= 255;$V9f274107= 75;$V48d62159= 75;}if ($V76c82f76=="dark red") {$Vbda9643a= 100;$V9f274107= 0;$V48d62159= 0;}if ($V76c82f76=="green") {$Vbda9643a= 0;$V9f274107= 255;$V48d62159= 0;}if ($V76c82f76=="light green") {$Vbda9643a= 75;$V9f274107= 255;$V48d62159= 75;}if ($V76c82f76=="dark green") {$Vbda9643a= 0;$V9f274107= 100;$V48d62159= 0;}if ($V76c82f76=="blue") {$Vbda9643a= 0;$V9f274107= 0;$V48d62159= 255;}if ($V76c82f76=="light blue") {$Vbda9643a= 75;$V9f274107= 75;$V48d62159= 255;}if ($V76c82f76=="dark blue") {$Vbda9643a= 0;$V9f274107= 0;$V48d62159= 100;}if ($V76c82f76=="orange") {$Vbda9643a= 255;$V9f274107= 150;$V48d62159= 0;}if ($V76c82f76=="light orange") {$Vbda9643a= 255;$V9f274107= 175;$V48d62159= 100;}if ($V76c82f76=="dark orange") {$Vbda9643a= 208;$V9f274107= 104;$V48d62159= 0;}if ($V76c82f76=="yellow") {$Vbda9643a= 255;$V9f274107= 255;$V48d62159= 0;}if ($V76c82f76=="light yellow") {$Vbda9643a= 255;$V9f274107= 255;$V48d62159= 100;}if ($V76c82f76=="dark yellow") {$Vbda9643a= 200;$V9f274107= 200;$V48d62159= 0;}if ($V76c82f76=="pink") {$Vbda9643a= 255;$V9f274107= 128;$V48d62159= 128;}if ($V76c82f76=="light pink") {$Vbda9643a= 255;$V9f274107= 172;$V48d62159= 172;}if ($V76c82f76=="dark pink") {$Vbda9643a= 255;$V9f274107= 77;$V48d62159= 77;}if ($V76c82f76=="purple") {$Vbda9643a= 150;$V9f274107= 0;$V48d62159= 255;}if ($V76c82f76=="light purple") {$Vbda9643a= 255;$V9f274107= 100;$V48d62159= 255;}if ($V76c82f76=="dark purple") {$Vbda9643a= 120;$V9f274107= 0;$V48d62159= 120;}if ($V76c82f76=="grey") {$Vbda9643a=127 ;$V9f274107= 127;$V48d62159= 127;}if ($V76c82f76=="light grey") {$Vbda9643a= 200;$V9f274107= 200;$V48d62159= 200;}if ($V76c82f76=="dark grey") {$Vbda9643a= 50;$V9f274107= 50;$V48d62159= 50;}if ($V76c82f76=="gray") {$Vbda9643a=127 ;$V9f274107= 127;$V48d62159= 127;}if ($V76c82f76=="light gray") {$Vbda9643a= 200;$V9f274107= 200;$V48d62159= 200;}if ($V76c82f76=="dark gray") {$Vbda9643a= 50;$V9f274107= 50;$V48d62159= 50;}if ($V76c82f76=="black") {$Vbda9643a= 0;$V9f274107= 0;$V48d62159= 0;}if ($V76c82f76=="white") {$Vbda9643a= 255;$V9f274107= 255;$V48d62159= 255;}
if ($V76c82f76=="cyan") {$Vbda9643a= 0;$V9f274107= 255;$V48d62159= 255;}if ($V76c82f76=="turquoise") {$Vbda9643a= 64;$V9f274107= 224;$V48d62159= 208;}if ($V76c82f76=="beige") {$Vbda9643a= 245;$V9f274107= 245;$V48d62159= 220;}if ($V76c82f76=="brown") {$Vbda9643a= 165;$V9f274107= 42;$V48d62159= 42;}if ($V76c82f76=="maroon") {$Vbda9643a= 176;$V9f274107= 48;$V48d62159= 96;}if ($V76c82f76=="magenta") {$Vbda9643a= 255;$V9f274107= 0;$V48d62159= 255;}if ($V76c82f76=="violet") {$Vbda9643a= 238;$V9f274107= 130;$V48d62159= 238;}if ($V76c82f76=="peach") {$Vbda9643a= 255;$V9f274107= 218;$V48d62159= 185;}if ($V76c82f76=="lavender") {$Vbda9643a= 230;$V9f274107= 230;$V48d62159= 250;}if ($V76c82f76=="rose") {$Vbda9643a= 255;$V9f274107= 228;$V48d62159= 225;}if ($V76c82f76=="navy") {$Vbda9643a= 0;$V9f274107= 0;$V48d62159= 128;}if ($V76c82f76=="royalblue") {$Vbda9643a= 65;$V9f274107= 105;$V48d62159= 225;}if ($V76c82f76=="sky blue") {$Vbda9643a= 135;$V9f274107= 206;$V48d62159= 235;}if ($V76c82f76=="steel blue") {$Vbda9643a= 70;$V9f274107= 130;$V48d62159= 180;}if ($V76c82f76=="sea green") {$Vbda9643a= 46;$V9f274107= 139;$V48d62159= 87;}if ($V76c82f76=="lime green") {$Vbda9643a= 50;$V9f274107= 205;$V48d62159= 50;}if ($V76c82f76=="khaki") {$Vbda9643a= 240;$V9f274107= 230;$V48d62159= 140;}if ($V76c82f76=="aquamarine") {$Vbda9643a= 127;$V9f274107= 255;$V48d62159= 212;}if ($V76c82f76=="gold") {$Vbda9643a= 255;$V9f274107= 215;$V48d62159= 0;}}

$V921dc46d = imagecolorexact($V78805a22, $Vbda9643a, $V9f274107, $V48d62159);if ($V921dc46d<1) {$V921dc46d = imagecolorallocate($V78805a22, $Vbda9643a, $V9f274107, $V48d62159);}return $V921dc46d;}function Fb45de602($Ve1403d6e,$V6e7b1089) {$Ve1403d6e = trim(strtolower($Ve1403d6e));if (strlen($Ve1403d6e)<1) {$Ve1403d6e = $V6e7b1089;}$Va1b01e73 = 1;
if ($Ve1403d6e == "solid") {$Va1b01e73 = 1;}if ($Ve1403d6e == "dotted") {$Va1b01e73 = 2;}if ($Ve1403d6e == "dashed") {$Va1b01e73 = 3;}if ($Ve1403d6e == "long dashed") {$Va1b01e73 = 4;}if ($Ve1403d6e == "dashed dotted") {$Va1b01e73 = 5;}
return $Va1b01e73;}function F57fb0d4a($Ve1403d6e,$V6e7b1089) {$Ve1403d6e = trim(strtolower($Ve1403d6e));if (strlen($Ve1403d6e)<1) {$Ve1403d6e = $V6e7b1089;}$Vab266394 = 1;$Ve1403d6e = substr($Ve1403d6e, 0, 1);if ($Ve1403d6e == "h") {$Vab266394 = 1;}if ($Ve1403d6e == "v") {$Vab266394 = 2;}if ($Ve1403d6e == "u") {$Vab266394 = 3;}if ($Ve1403d6e == "d") {$Vab266394 = 4;}
return $Vab266394;}function F3d9f398d($Ve1403d6e,$V6e7b1089) {$Ve1403d6e = trim(strtolower($Ve1403d6e));if (strlen($Ve1403d6e)<1) {$Ve1403d6e = $V6e7b1089;}$Vab266394 = 1;$Ve1403d6e = substr($Ve1403d6e, 0, 1);if ($Ve1403d6e == "h") {$Vab266394 = 1;}if ($Ve1403d6e == "v") {$Vab266394 = 2;}
return $Vab266394;}function Ff5f1314d($Ve1403d6e) {$Va4aa7cb8 = false;$Ve1403d6e = trim($Ve1403d6e);
if (strlen($Ve1403d6e)<1) {return imagecreate (1,1);}

$V599dcce2 = strtolower(substr(strrchr($Ve1403d6e,"."),1));switch ($V599dcce2) {
case "png": $Va4aa7cb8 = @imagecreatefrompng($Ve1403d6e); break;case "gif": $Va4aa7cb8 = @imagecreatefromgif($Ve1403d6e); break;case "jpg": $Va4aa7cb8 = @imagecreatefromjpeg($Ve1403d6e); break;case "jpeg": $Va4aa7cb8 = @imagecreatefromjpeg($Ve1403d6e); break;

}
if (!$Va4aa7cb8) {$Vc5591d1a = "Error loading image file: ".$Ve1403d6e;F334d998d($Vc5591d1a);$Va4aa7cb8 = imagecreate (1,1);
}return $Va4aa7cb8;}function F06c5fcc8($Ve1403d6e,$V6e7b1089) {global $Vdc30ec20;$Ve1403d6e = trim(strtolower($Ve1403d6e));if (strlen($Ve1403d6e)<1) {$Ve1403d6e = $V6e7b1089;}$V4757fe07[0] = -1;$V4757fe07[1] = -1;

$V4757fe07[0] = intval(substr($Ve1403d6e, 0, strpos($Ve1403d6e, ',')));$V4757fe07[1] = intval(substr($Ve1403d6e, (strpos($Ve1403d6e, ',')+1)));
if ($Vdc30ec20) print "xpos:".$V4757fe07[0]."n";if ($Vdc30ec20) print "ypos:".$V4757fe07[1]."n";
return $V4757fe07;}function Fea0d950b($Ve1403d6e,$V6e7b1089) {$Ve1403d6e = trim(strtolower($Ve1403d6e));if (strlen($Ve1403d6e)<1) {$Ve1403d6e = $V6e7b1089;}
$Ve1403d6e = " ".$Ve1403d6e." ";$V47a282df = 2;
if (strpos($Ve1403d6e, 'small')) {$V47a282df=1;}if (strpos($Ve1403d6e, 'medium')) {$V47a282df=2;}if (strpos($Ve1403d6e, 'medium')&&strpos($Ve1403d6e, 'bold')) {$V47a282df=3;}if (strpos($Ve1403d6e, 'large')) {$V47a282df=4;}if (strpos($Ve1403d6e, 'large')&&strpos($Ve1403d6e, 'bold')) {$V47a282df=5;}
return $V47a282df;}function Fd870818e($Ve1403d6e,$V6e7b1089) {$Ve1403d6e = trim($Ve1403d6e);if (strlen($Ve1403d6e)<1) {$Ve1403d6e = $V6e7b1089;}$V42cecfef = explode("|", $Ve1403d6e);
return $V42cecfef;}



function F61bc72b3($Vad5f82e8) {$Vad5f82e8=strtolower($Vad5f82e8);$V5e0bdcbd = strpos($Vad5f82e8,"http://");if ($V5e0bdcbd === false) {}else {$Vad5f82e8 = substr($Vad5f82e8,$V5e0bdcbd+7);}$V5e0bdcbd = strpos($Vad5f82e8,"www.");if ($V5e0bdcbd === false) {}else {$Vad5f82e8 = substr($Vad5f82e8,$V5e0bdcbd+4);}$V5e0bdcbd = strpos($Vad5f82e8,"https://");if ($V5e0bdcbd === false) {}else {$Vad5f82e8 = substr($Vad5f82e8,$V5e0bdcbd+8);}$V5e0bdcbd = strpos($Vad5f82e8,"/");if ($V5e0bdcbd === false) {}else {$Vad5f82e8 = substr($Vad5f82e8,0, $V5e0bdcbd);}
return $Vad5f82e8;}function F6c9c7798($V435ed7e9) {$V11f5a5d0 = 0;$V980da984 = @file($V435ed7e9);if (!$V980da984) {return $V11f5a5d0;}foreach ($V980da984 as $V6438c669) {$V11f5a5d0++;}return $V11f5a5d0;}function Fde0b4e2f($V435ed7e9) {global $V88eacf45;if (file_exists($V435ed7e9)) {$V88eacf45 = filesize($V435ed7e9);}else {$V88eacf45 = 0;}return;}function F2e95f7b0() {global $V5bd7c9f0;global $HTTP_SERVER_VARS;$V5bd7c9f0 = $HTTP_SERVER_VARS[SERVER_NAME];$V5bd7c9f0 = F61bc72b3($V5bd7c9f0);}function F9d0adaf4($V25306261) {$V517c6731 = intval(trim(substr($V25306261, 4)));return $V517c6731;}function F679996d5($V25306261) {$V3affddcf = intval(trim(substr($V25306261,strpos($V25306261, 'series')+6)));return $V3affddcf;}function Fd93d337b($V25306261) {global $V1cb251ec;global $V6af1e637;global $V1ea91faf;global $V7d969d50;global $Va5b5641e;
if (strlen($V25306261)>1) {
$V6a7f2458 = explode("|", $V25306261);$Va5b5641e = $Va5b5641e + 1;
$V1cb251ec[$Va5b5641e] = $V6a7f2458[0];$V6af1e637[$Va5b5641e] = Fea0d950b($V6a7f2458[1],"medium");$V1ea91faf[$Va5b5641e] = F393be007($V6a7f2458[2],"#000000");$V7d969d50[$Va5b5641e] = F06c5fcc8($V6a7f2458[3],"0,0");
}}function Ffcc08b84($Ve1403d6e) {
global $Vcfb3afb9;global $V4342e43e;global $V2c52715b;

if (strlen($Ve1403d6e)>1) {$V6a7f2458 = explode("|", $Ve1403d6e);$V2c52715b = $V2c52715b + 1;$Vcfb3afb9[$V2c52715b] = Ff5f1314d($V6a7f2458[0]);$V4342e43e[$V2c52715b] = F06c5fcc8($V6a7f2458[1],"0,0");}}function F81fda5e0($Ve1403d6e) {global $Vca9ba9cd;global $V899d534e;global $Vadd0be00;global $Vfef79233;global $V4e83bdd7;global $V0f71acc6;if (strlen($Ve1403d6e)>1) {
$V6a7f2458 = explode("|", $Ve1403d6e);$V0f71acc6 = $V0f71acc6 + 1;
$Vca9ba9cd[$V0f71acc6] = Fbd2f00f6($V6a7f2458[0], "0.0");$V899d534e[$V0f71acc6] = F393be007($V6a7f2458[1],"#000000");$Vadd0be00[$V0f71acc6] = F8d774dc2($V6a7f2458[2], " ");$Vfef79233[$V0f71acc6] = Fea0d950b($V6a7f2458[3],"medium");$V4e83bdd7[$V0f71acc6] = Fb45de602($V6a7f2458[4],"solid");
}}
function F8248482d($Ve1403d6e) {global $V1637a6d8;global $V24ccb7ed;global $V9c45a424;global $Vd013d533;global $V93ae5dc6;global $Va6e6412a;global $V61536ce5;global $V8e9b225f;if (strlen($Ve1403d6e)>1) {
$V6a7f2458 = explode("|", $Ve1403d6e);$V8e9b225f = $V8e9b225f + 1;
$V1637a6d8[$V8e9b225f] = Fbd2f00f6($V6a7f2458[0], "0.0");$V24ccb7ed[$V8e9b225f] = F8fe8bea8($V6a7f2458[1], "1");$V9c45a424[$V8e9b225f] = Fbd2f00f6($V6a7f2458[2], "0.0");$Vd013d533[$V8e9b225f] = F8fe8bea8($V6a7f2458[3], "1");$V93ae5dc6[$V8e9b225f] = F393be007($V6a7f2458[4],"#000000");$Va6e6412a[$V8e9b225f] = F8d774dc2($V6a7f2458[5], " ");$V61536ce5[$V8e9b225f] = Fea0d950b($V6a7f2458[6],"medium");$Vc5b4c3d3[$V8e9b225f] = Fb45de602($V6a7f2458[7],"solid");

}}function F87241382($Veca07335, $Ve1403d6e) {global $V73521764;global $Vfb113884;global $Vb5b67bc4;$V3affddcf = F679996d5($Veca07335);
if ($V3affddcf>0 and $V3affddcf<=$Vb5b67bc4) {
$V6a7f2458 = explode("|", $Ve1403d6e);if (strlen(trim($V6a7f2458[0]))>2) {$V73521764[$V3affddcf] = F393be007($V6a7f2458[0],"#808080");}$Vfb113884[$V3affddcf] = F8d774dc2($V6a7f2458[1], " ");
}}function Fea225ae7($V70dda5df,$V354f047b) {global $V78805a22;$V44688c54 = imagecolorsforindex($V78805a22, $V70dda5df);
$Vbda9643a = $V44688c54[red]/$V354f047b;$V9f274107 = $V44688c54[green]/$V354f047b;$V48d62159 = $V44688c54[blue]/$V354f047b;
$V921dc46d = imagecolorexact($V78805a22, $Vbda9643a, $V9f274107, $V48d62159);if ($V921dc46d<1) {$V921dc46d = imagecolorallocate($V78805a22, $Vbda9643a, $V9f274107, $V48d62159);}
return $V921dc46d;}function F6a19bbb5($V70dda5df,$V354f047b) {global $V78805a22;$V44688c54 = imagecolorsforindex($V78805a22, $V70dda5df);
$Vbda9643a = $V44688c54[red] * $V354f047b;$V9f274107 = $V44688c54[green] * $V354f047b;$V48d62159 = $V44688c54[blue] * $V354f047b;
if ($Vbda9643a>255) {$Vbda9643a = 255;}if ($V9f274107>255) {$V9f274107 = 255;}if ($V48d62159>255) {$V48d62159 = 255;}
if ($Vbda9643a<10) {$Vbda9643a = 30;}if ($V9f274107<10) {$V9f274107 = 30;}if ($V48d62159<10) {$V48d62159 = 30;}

$V921dc46d = imagecolorexact($V78805a22, $Vbda9643a, $V9f274107, $V48d62159);if ($V921dc46d<1) {$V921dc46d = imagecolorallocate($V78805a22, $Vbda9643a, $V9f274107, $V48d62159);}
return $V921dc46d;}function Fe5a7d2af() {global $V78805a22;global $Vcc9c3820;global $Vff4a0084;global $V433169d5;global $V2d902144;global $V4d518898;global $V40174a76;global $V16fb5ab6;global $Vad7f0690;global $V031284fc;global $V8d8c3c3b;global $V006543b4;global $V80716e11;global $Vb84d72fb;global $V1a18f195;global $V28f827ff;global $Vb39cf0e1;global $Vdce8bc0a;global $V770793e8;global $V4cc4872a;global $V38c5f620;global $V48dd5655;global $V43b974c6;global $Vd19b75bc;global $Vc352533d;global $V7a14c237;
global $V91db1563;global $Vbb74af3a;global $V2d902144;global $V6cc3a0d3;global $V0e2d8ff8;global $V1231700d;global $Vc388aa89;global $V2ab47b97;
global $V3af3ad1f;global $Vdf0d95af;global $V8e7e6b53;global $Vb2570bff;global $V1d5f32b2;global $V96981479;global $Va3b49636;global $V4d347f0b;global $V786e34d5;global $V8d40af08;global $Vd27605a7;global $V84d54564;global $Vbea8d01a;global $V7cc9080e;global $V4974fd7f;global $V8eae1105;global $V2bb2e737;global $V3d4dcd6f;global $Vc076cb74;global $Vcbf8e1ea;global $Vc40296f9;global $Vca1d8ab9;global $Va8810f41;global $V90b864f0;global $Ve17c36e9;$V43b974c6 = F62f15b37("true","true");$Vd19b75bc = F8fe8bea8("15","15");$Vc352533d = F8fe8bea8("2","2");$V7a14c237 = F8d774dc2("","");$Vcc9c3820 = F393be007("#DDDDFF","#FFFFFF");$V91db1563 = Fbd2f00f6("-1.123","-1.123");$Vbb74af3a = Fbd2f00f6("-1.123","-1.123");$Vff4a0084 = F62f15b37("true","true");$V433169d5 = F62f15b37("true","true");$V2d902144 = F8fe8bea8("5","5");$V6cc3a0d3 = F8fe8bea8("-1","-1");$V4d518898 = Fb45de602("dotted","dotted");$V40174a76 = F393be007("#909090","#909090");$V16fb5ab6 = F393be007("#606060","#606060");$Vad7f0690 = F393be007("#B0B0B0","#B0B0B0");$V031284fc = Ff5f1314d("");$V8d8c3c3b = F393be007("#F0F0F0","#D0D0D0");$V0e2d8ff8 = F06c5fcc8("-1,-1","-1,-1");$V1231700d = F8d774dc2("","");$Vc388aa89 = Fea0d950b(" large bold "," large bold ");$V006543b4 = F393be007("#000000","#000000");$V2ab47b97 = F06c5fcc8("-1,-1","-1,-1");$V3af3ad1f = F8d774dc2("","");$Vdf0d95af = Fea0d950b(" medium bold ","medium");$V80716e11 = F393be007("#000000","#000000");$V8e7e6b53 = F06c5fcc8("-1,-1","-1,-1");$Vb2570bff = F8d774dc2("","");$V1d5f32b2 = Fea0d950b(" medium bold ","medium");$Vb84d72fb = F393be007("#000000","#000000");$V96981479 = F06c5fcc8("-1,-1","-1,-1");$V1a18f195 = F62f15b37("true","true");$V28f827ff = F62f15b37("true","true");$Va3b49636 = F8fe8bea8("-1","-1");$V4d347f0b = F8fe8bea8("-1","-1");$Vb39cf0e1 = F62f15b37("true","true");$V786e34d5 = F62f15b37("true","true");$V8d40af08 = Fea0d950b("medium","medium");$Vdce8bc0a = F393be007("#000000","#000000");$Vd27605a7 = F8d774dc2("","");$V84d54564 = F8d774dc2("","");$Vbea8d01a = F57fb0d4a("h","h");$V7cc9080e = F8fe8bea8("-1","-1");$V4974fd7f = F8fe8bea8("0","0");$V8eae1105 = Fea0d950b("medium","medium");$V770793e8 = F393be007("#000000","#000000");$V2bb2e737 = Fd870818e(" "," ");$V3d4dcd6f = F62f15b37("true","true");$V3d4dcd6f = true;$Vc076cb74 = F3d9f398d("h","h");$V4cc4872a = F393be007("#FFFFFF","#FFFFFF");$V38c5f620 = F393be007("#000000","#000000");$V48dd5655 = F393be007("#000000","#000000");$Vcbf8e1ea = F8d774dc2("","");$Vc40296f9 = F06c5fcc8("-1,-1","-1,-1");$Vca1d8ab9 = Fea0d950b("medium","medium");$Va8810f41 = true;$V90b864f0 = true;$Ve17c36e9 = -1;}function F6228ab34() {global $Vb5b67bc4;global $V62848e3c;F55869eed();for ($V865c0c0b=1;$V865c0c0b<=$Vb5b67bc4;$V865c0c0b++) {

if ($V865c0c0b<=12) {$V70dda5df = $V62848e3c[$V865c0c0b];}else {$Vbda9643a = $V865c0c0b*200;$V9f274107 = 128 + $V865c0c0b*150;$V48d62159 = 255 - $V865c0c0b*100;while ($Vbda9643a>255) {$Vbda9643a = $Vbda9643a - 250;}while ($V9f274107>255) {$V9f274107 = $V9f274107 - 250;}while ($V48d62159<0) {$V48d62159 = $V48d62159 + 250;}$V70dda5df = $Vbda9643a.",".$V9f274107.",".$V48d62159;}
$Veca07335 = "series".$V865c0c0b;$V2063c160 = $V70dda5df."|Series ".$V865c0c0b."|";
F87241382($Veca07335, $V2063c160);

}}function F55869eed() {global $V62848e3c;$V62848e3c[1] = "0,128,255";$V62848e3c[2] = "247,147,4";$V62848e3c[3] = "36,179,91";$V62848e3c[4] = "150,90,200";$V62848e3c[5] = "100,200,200";$V62848e3c[6] = "200,75,75";$V62848e3c[7] = "170,100,60";$V62848e3c[8] = "128,128,128";$V62848e3c[9] = "10,122,164";$V62848e3c[10] = "199,199,199";$V62848e3c[11] = "100,100,200";$V62848e3c[12] = "180,180,90";}function F4316a998() {global $Vbea8d01a;global $V7cc9080e;global $V4974fd7f;global $V8eae1105;global $V770793e8;global $V2bb2e737;
global $Vc4492f5e;$V26d50efb = imagefontheight($V8eae1105);
$Vbfe4bf9d = 0;
switch ($Vbea8d01a) {case 1:$Vbfe4bf9d = $V26d50efb;break;case 2:for ($V865c0c0b = 0; $V865c0c0b < $Vc4492f5e; $V865c0c0b++) {if ( (strlen($V2bb2e737[$V865c0c0b])*$V26d50efb)>$Vbfe4bf9d) {$Vbfe4bf9d = strlen($V2bb2e737[$V865c0c0b])*$V26d50efb;}}break;case 3:for ($V865c0c0b = 0; $V865c0c0b < $Vc4492f5e; $V865c0c0b++) {if ( ((strlen($V2bb2e737[$V865c0c0b])+1)*$V26d50efb/3)>$Vbfe4bf9d) {$Vbfe4bf9d = (strlen($V2bb2e737[$V865c0c0b])+1)*$V26d50efb/3;}}break;case 4:for ($V865c0c0b = 0; $V865c0c0b < $Vc4492f5e; $V865c0c0b++) {if ( ((strlen($V2bb2e737[$V865c0c0b])+1)*$V26d50efb/4)>$Vbfe4bf9d) {$Vbfe4bf9d = (strlen($V2bb2e737[$V865c0c0b])+1)*$V26d50efb/4;}}break;}
$Vbfe4bf9d = $Vbfe4bf9d + $V4974fd7f;
return $Vbfe4bf9d;

}function F6bfa9dad() {global $V91db1563;global $Vbb74af3a;
global $Vc4492f5e;global $Vca46a3c2;global $V2fb5c1d5;global $V2d902144;global $Vb5b67bc4;global $Vc352533d;$V0cb47aeb = false;$Vc7aeafbc = false;if ($V91db1563==-1.123) {$V0cb47aeb = true;}if ($Vbb74af3a==-1.123) {$Vc7aeafbc = true;}if ($V0cb47aeb || $Vc7aeafbc) {$V03dc5d09 = 0.00;$V562db64c = -999999999999.99;$V51fbbcfd = false;for ($V865c0c0b=1;$V865c0c0b<=$Vc4492f5e;$V865c0c0b++) {

$V2ba0b496 = 0;$V12b5634e = 0;

for ($V363b122c=1;$V363b122c<=$Vb5b67bc4;$V363b122c++) {if (!$V2fb5c1d5[$V363b122c][$V865c0c0b]) {if ($Vca46a3c2[$V363b122c][$V865c0c0b]>=0) {$V2ba0b496 = $V2ba0b496 + $Vca46a3c2[$V363b122c][$V865c0c0b];}if ($Vca46a3c2[$V363b122c][$V865c0c0b]<0) {$V12b5634e = $V12b5634e + $Vca46a3c2[$V363b122c][$V865c0c0b];$V51fbbcfd = true;}}}

if ($V2ba0b496>$V562db64c) {$V562db64c = $V2ba0b496;}
if ($V03dc5d09<0 || $V12b5634e<0) {if ($V12b5634e<$V03dc5d09) {$V03dc5d09 = $V12b5634e;}}else {if ($V2ba0b496<$V03dc5d09) {$V03dc5d09 = $V2ba0b496;}}

}
if ($V562db64c < 0.0) {$V562db64c = 0.0;}if ($V562db64c == $V03dc5d09) {if ($V562db64c > 0.0) {$V03dc5d09 = 0.00000000000;}if ($V562db64c < 0.0) {$V562db64c = 0.00000000000;}if ($V562db64c == 0.0) {$V562db64c = 1.0;}}$Vcdee0531 = $V03dc5d09;$Vf75018f5 = $V562db64c;
$V03dc5d09 = round($V03dc5d09, $Vc352533d);while ($Vcdee0531 < $V03dc5d09) {$V03dc5d09 = $V03dc5d09 - pow(10,-$Vc352533d);}
$V562db64c = round($V562db64c, $Vc352533d);while ($Vf75018f5 > $V562db64c) {$V562db64c = $V562db64c + pow(10,-$Vc352533d);}if ($V03dc5d09>0.00 && $V03dc5d09<($V562db64c/4) ) {$V03dc5d09 = round(0.00, $Vc352533d);}if ($Vc7aeafbc) {$Vbb74af3a = round($V03dc5d09, $Vc352533d);while ($Vbb74af3a > $V03dc5d09) {$Vbb74af3a = $Vbb74af3a - pow(10,-$Vc352533d);}}else {$Vbb74af3a = round($Vbb74af3a, $Vc352533d);$V03dc5d09 = $Vbb74af3a;}if ($V0cb47aeb) {$V91db1563 = round(($V562db64c-$V03dc5d09)/$V2d902144, $Vc352533d);}else {$V81335b50 = $V91db1563;$V91db1563 = round($V91db1563, $Vc352533d);while ($V81335b50 > $V91db1563) {$V91db1563 = $V91db1563 + pow(10,-$Vc352533d);}}if (!$V51fbbcfd && $Vbb74af3a < 0.0) {$Vbb74af3a = 0.0;}

while ($V562db64c > ($Vbb74af3a + $V91db1563*$V2d902144)) {$V91db1563 = $V91db1563 + pow(10,-$Vc352533d);}

}

}function F334d998d($Ve1403d6e) {global $V07213a01;global $Vc0964ac7;$V07213a01[$Vc0964ac7] = ($Vc0964ac7+1).") ".$Ve1403d6e;$Vc0964ac7++;}function F97e83806() {global $V78805a22;global $V07213a01;global $Vc0964ac7;if ($Vc0964ac7==0) {return;}
if ($Vc0964ac7==1) {$Vd5d3db17 = "Error";}else {$Vd5d3db17 = "Errors";}$V47a282df=4;$V1b736f13 = strlen($Vd5d3db17) * imagefontwidth($V47a282df);for ($V865c0c0b=0;$V865c0c0b<$Vc0964ac7;$V865c0c0b++) {if ( (strlen($V07213a01[$V865c0c0b]) * imagefontwidth($V47a282df)) > $V1b736f13) {$V1b736f13 = (strlen($V07213a01[$V865c0c0b]) * imagefontwidth($V47a282df));}}$V0f9e8098 = imagecolorallocate ($V78805a22, 255, 255, 255);$V5c4fefda = imagecolorallocate ($V78805a22, 150, 0, 0);imagefilledrectangle ($V78805a22, 0, 0, $V1b736f13+20, 15*$Vc0964ac7+20, $V0f9e8098);imagerectangle($V78805a22, 0, 0, $V1b736f13+20, 15*$Vc0964ac7+20, $V5c4fefda);imagestring ($V78805a22, $V47a282df, 5, 5, $Vd5d3db17 , $V5c4fefda);
for ($V865c0c0b=0;$V865c0c0b<$Vc0964ac7;$V865c0c0b++) {imagestring ($V78805a22, $V47a282df, 5, 15*$V865c0c0b+20, $V07213a01[$V865c0c0b] , $V5c4fefda);}

}
function F4dabe5b7($V527100fc = 0)
{if (! extension_loaded('gd')) { return; }static $Vd39f19c4 = 0;if ($V527100fc == 1) { $Vd39f19c4 = 1; return 1; }if ($V527100fc !=2 && $Vd39f19c4 > 0 ) { return $Vd39f19c4; }if (function_exists('gd_info')) {$V7f09a806 = gd_info();preg_match('/\d/', $V7f09a806['GD Version'], $Ve3cc92c1);$Vd39f19c4 = $Ve3cc92c1[0];return $Ve3cc92c1[0];}if (preg_match('/phpinfo/', ini_get('disable_functions'))) {if ($V527100fc == 2) {$Vd39f19c4 = 2;return 2;} else {$Vd39f19c4 = 1;return 1;}}ob_start();phpinfo(8);$Vcaf9b6b9 = ob_get_contents();ob_end_clean();$Vcaf9b6b9 = stristr($Vcaf9b6b9, 'gd version');preg_match('/\d/', $Vcaf9b6b9, $Ve3cc92c1);$Vd39f19c4 = $Ve3cc92c1[0];return $Ve3cc92c1[0];}



error_reporting(E_ALL ^ E_NOTICE);$V07213a01[0] = "";$Vc0964ac7 = 0;$Vdc30ec20 = false;$V43781db5 = false;$V18159c95 = false;$Vcef59192 = "dbinfo.txt";$Va700b335 = "vertical-bar-graph-data.php";$Ve06e1b85 = "vertical-bar-graph-config.php";if (array_key_exists("dbinfo", $_REQUEST)) {$Vcef59192 = $_REQUEST["dbinfo"];$V18159c95 = true;}if (array_key_exists("data", $_REQUEST)) {$Va700b335 = $_REQUEST["data"];}if (array_key_exists("config", $_REQUEST)) {$Ve06e1b85 = $_REQUEST["config"];}if (array_key_exists("saveimage",$_REQUEST)) {$Vad8b4250 = $_REQUEST["saveimage"];$V43781db5=true;}$Veaae26a6 = 400;$Vb435e227 = 300;$V43b974c6 = true;$Vd19b75bc = -1;$Vb5b67bc4 = -1;$Vc352533d = 2;$V7a14c237 = ",";$Vcc9c3820;$Vd37a93ad = -1;$V91db1563 = -1.0;$Vbb74af3a = -1.0;$Vff4a0084 = true;$V433169d5 = true;$V2d902144 = -1;$Vc4492f5e = -1;$V6cc3a0d3 = -1;$V4d518898 = -1;$V031284fc = -1;$V1231700d = "";$V3af3ad1f = "";$Vb2570bff = "";$V1a18f195 = true;$V28f827ff = true;$Va3b49636 = -1;$V4d347f0b = -1;$Vb39cf0e1 = false;$V786e34d5 = true;$Vd27605a7 = "";$V84d54564 = "";$Vbea8d01a = -1;$V7cc9080e = -1;$V4974fd7f = -1;$V3d4dcd6f = true;$Vcbf8e1ea = "";$Vc076cb74 = 1;$V8e9b225f = 0;$V0f71acc6 = 0;$V3a3fee1a = F4dabe5b7();F070a46e8();if ($V3a3fee1a>=2) {$V78805a22 = @imagecreatetruecolor ($Veaae26a6, $Vb435e227) or die("Cannot Initialize a new GD image stream");}else {$V78805a22 = @imagecreate($Veaae26a6, $Vb435e227) or die("Cannot Initialize a new GD image stream");}Fe5a7d2af();F54070395();F6228ab34();F305c19a0();Feffbc859();Fde855d13();F8b95891f();F297af67a();Fa7dca7a7();F95b9cf52();Fa5e6ad7d();Fd25f8269();F6f25343b();F73d75266();Fa67405c3();F97e83806();if (!$Vdc30ec20) {header('Expires: Sat, 01 January 2000 05:00:00 GMT');header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . 'GMT');header('Cache-Control: no-cache, must-revalidate');header('Pragma: no-cache');header("Content-type: image/png");imagepng($V78805a22);if ($V43781db5) {imagepng($V78805a22,$Vad8b4250);}}imagedestroy($V78805a22);?>
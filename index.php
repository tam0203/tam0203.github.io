<html>
<head>
  <title>Wind Rose</title>
  <link rel="icon" href="slika.png">
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
  <link rel="stylesheet" type="text/css" href="windrose.css">
  <SCRIPT TYPE="text/javascript" src="raphael.js"></SCRIPT>
  <SCRIPT TYPE="text/javascript" src="underscore.js"></SCRIPT>
  <SCRIPT TYPE="text/javascript" src="windrose.js"></SCRIPT>
  
</head>
<body>

<p id="naslov">Ruža vjetrova</p>
<div style="display:none">
<?php 
$connect = mysql_connect("localhost", "root", "0203VEGAR"); //povezivanje sa bazom podataka
?>
</div>
<div id = "greska">
<?php

		if (!$connect) {  //ako se nije povezalo da se javi prouka o grešci
			die("Greška prilikom povezivanja s bazom podataka! "); 
        }
?>
</div>

<div style="display:none"> 
	<?php		
//varijable za broj ponavljanja određenog smjera određene brzine
		$var_e0=0;
		$var_e1=0;
		$var_e2=0;
		$var_e3=0;
		$var_e4=0;
		$var_e5=0;
		$var_e6=0;
		$var_ene0=0;
		$var_ene1=0;
		$var_ene2=0;
		$var_ene3=0;
		$var_ene4=0;
		$var_ene5=0;
		$var_ene6=0;
		$var_ne0=0;
		$var_ne1=0;
		$var_ne2=0;
		$var_ne3=0;
		$var_ne4=0;
		$var_ne5=0;
		$var_ne6=0;
		$var_nne0=0;
		$var_nne1=0;
		$var_nne2=0;
		$var_nne3=0;
		$var_nne4=0;
		$var_nne5=0;
		$var_nne6=0;
		$var_n0=0;
		$var_n1=0;
		$var_n2=0;
		$var_n3=0;
		$var_n4=0;
		$var_n5=0;
		$var_n6=0;

		mysql_select_db("ruza_vjetrova"); //odabir baze podataka
		$sve = mysql_query("SELECT * FROM ruza_vjetrova");  //selektiranje cijele baze podataka
		$broj = mysql_num_rows($sve)*2;
		$postotak = mysql_num_rows($sve)/$broj; 

		//seleektira smjer E sa brzinom između 0 -0.5, dok ne prođe kroz sve e0, povećava se var za jedan
		$e0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='E' AND speed BETWEEN 0 AND 0.5 "); 
			 while($row = mysql_fetch_array($e0)) {$var_e0++;} $vrijednost_za_e0=$postotak*$var_e0;
			 
		$e1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='E' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($e1)) {$var_e1++;} $vrijednost_za_e1=$postotak*$var_e1;
			 
		$e2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='E' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($e2)) {$var_e2++;} $vrijednost_za_e2=$postotak*$var_e2;
			 
		$e3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='E' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($e3)) {$var_e3++;} $vrijednost_za_e3=$postotak*$var_e3;
			 
		$e4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='E' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($e4)) {$var_e4++;} $vrijednost_za_e4=$postotak*$var_e4;
			 
		$e5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='E' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($e5)) {$var_e5++;} $vrijednost_za_e5=$postotak*$var_e5;
			 
		$e6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='E' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($e6)) {$var_e6++;} $vrijednost_za_e6=$postotak*$var_e6;

		$ene0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ENE' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($ene0)) {$var_ene0++;} $vrijednost_za_ene0=$postotak*$var_ene0;	 
			 
		$ene1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ENE' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($ene1)) {$var_ene1++;} $vrijednost_za_ene1=$postotak*$var_ene1;	 

		$ene2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ENE' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($ene2)) {$var_ene2++;} $vrijednost_za_ene2=$postotak*$var_ene2;	

		$ene3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ENE' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($ene3)) {$var_ene3++;} $vrijednost_za_ene3=$postotak*$var_ene3;	  	

		$ene4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ENE' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($ene4)) {$var_ene4++;} $vrijednost_za_ene4=$postotak*$var_ene4;	 

		$ene5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ENE' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($ene5)) {$var_ene5++;} $vrijednost_za_ene5=$postotak*$var_ene5;	 

		$ene6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ENE' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($ene6)) {$var_ene6++;} $vrijednost_za_ene6=$postotak*$var_ene6;	 	 

		$ne0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NE' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($ne0)) {$var_ne0++;} $vrijednost_za_ne0=$postotak*$var_ne0;	 
			 
		$ne1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NE' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($ne1)) {$var_ne1++;} $vrijednost_za_ne1=$postotak*$var_ne1;	 

		$ne2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NE' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($ne2)) {$var_ne2++;} $vrijednost_za_ne2=$postotak*$var_ne2;	

		$ne3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NE' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($ne3)) {$var_ne3++;} $vrijednost_za_ne3=$postotak*$var_ne3;	  	

		$ne4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NE' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($ne4)) {$var_ne4++;} $vrijednost_za_ne4=$postotak*$var_ne4;	 

		$ne5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NE' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($ne5)) {$var_ne5++;} $vrijednost_za_ne5=$postotak*$var_ne5;	 

		$ne6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NE' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($ne6)) {$var_ne6++;} $vrijednost_za_ne6=$postotak*$var_ne6;	

		$nne0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNE' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($nne0)) {$var_nne0++;} $vrijednost_za_nne0=$postotak*$var_nne0;	 
			 
		$nne1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNE' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($nne1)) {$var_nne1++;} $vrijednost_za_nne1=$postotak*$var_nne1;	 

		$nne2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNE' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($nne2)) {$var_nne2++;} $vrijednost_za_nne2=$postotak*$var_nne2;	

		$nne3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNE' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($nne3)) {$var_nne3++;} $vrijednost_za_nne3=$postotak*$var_nne3;	  	

		$nne4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNE' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($nne4)) {$var_nne4++;} $vrijednost_za_nne4=$postotak*$var_nne4;	 

		$nne5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNE' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($nne5)) {$var_nne5++;} $vrijednost_za_nne5=$postotak*$var_nne5;	 

		$nne6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNE' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($nne6)) {$var_nne6++;} $vrijednost_za_nne6=$postotak*$var_nne6;	  	 

		$n0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='N' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($n0)) {$var_n0++;} $vrijednost_za_n0=$postotak*$var_n0;	 
			 
		$n1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='N' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($n1)) {$var_n1++;} $vrijednost_za_n1=$postotak*$var_n1;	 

		$n2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='N' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($n2)) {$var_n2++;} $vrijednost_za_n2=$postotak*$var_n2;	

		$n3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='N' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($n3)) {$var_n3++;} $vrijednost_za_n3=$postotak*$var_n3;	  	

		$n4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='N' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($n4)) {$var_n4++;} $vrijednost_za_n4=$postotak*$var_n4;	 

		$n5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='N' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($n5)) {$var_n5++;} $vrijednost_za_n5=$postotak*$var_n5;	 

		$n6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='N' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($n6)) {$var_n6++;} $vrijednost_za_n6=$postotak*$var_n6;		

		$nnw0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNW' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($nnw0)) {$var_nnw0++;} $vrijednost_za_nnw0=$postotak*$var_nnw0;	 
			 
		$nnw1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNW' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($nnw1)) {$var_nnw1++;} $vrijednost_za_nnw1=$postotak*$var_nnw1;	 

		$nnw2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNW' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($nnw2)) {$var_nnw2++;} $vrijednost_za_nnw2=$postotak*$var_nnw2;	

		$nnw3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNW' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($nnw3)) {$var_nnw3++;} $vrijednost_za_nnw3=$postotak*$var_nnw3;	  	

		$nnw4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNW' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($nnw4)) {$var_nnw4++;} $vrijednost_za_nnw4=$postotak*$var_nnw4;	 

		$nnw5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNW' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($nnw5)) {$var_nnw5++;} $vrijednost_za_nnw5=$postotak*$var_nnw5;	 

		$nnw6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NNW' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($nnw6)) {$var_nnw6++;} $vrijednost_za_nnw6=$postotak*$var_nnw6;		

		$nw0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NW' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($nw0)) {$var_nw0++;} $vrijednost_za_nw0=$postotak*$var_nw0;	 
			 
		$nw1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NW' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($nw1)) {$var_nw1++;} $vrijednost_za_nw1=$postotak*$var_nw1;	 

		$nw2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NW' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($nw2)) {$var_nw2++;} $vrijednost_za_nw2=$postotak*$var_nw2;	

		$nw3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NW' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($nw3)) {$var_nw3++;} $vrijednost_za_nw3=$postotak*$var_nw3;	  	

		$nw4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NW' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($nw4)) {$var_nw4++;} $vrijednost_za_nw4=$postotak*$var_nw4;	 

		$nw5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NW' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($nw5)) {$var_nw5++;} $vrijednost_za_nw5=$postotak*$var_nw5;	 

		$nw6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='NW' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($nw6)) {$var_nw6++;} $vrijednost_za_nw6=$postotak*$var_nw6;	

		$wnw0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WNW' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($wnw0)) {$var_wnw0++;} $vrijednost_za_wnw0=$postotak*$var_wnw0;	 
			 
		$wnw1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WNW' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($wnw1)) {$var_wnw1++;} $vrijednost_za_wnw1=$postotak*$var_wnw1;	 

		$wnw2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WNW' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($wnw2)) {$var_wnw2++;} $vrijednost_za_wnw2=$postotak*$var_wnw2;	

		$wnw3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WNW' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($wnw3)) {$var_wnw3++;} $vrijednost_za_wnw3=$postotak*$var_wnw3;	  	

		$wnw4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WNW' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($wnw4)) {$var_wnw4++;} $vrijednost_za_wnw4=$postotak*$var_wnw4;	 

		$wnw5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WNW' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($wnw5)) {$var_wnw5++;} $vrijednost_za_wnw5=$postotak*$var_wnw5;	 

		$wnw6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WNW' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($wnw6)) {$var_wnw6++;} $vrijednost_za_wnw6=$postotak*$var_wnw6;		

		$w0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='W' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($w0)) {$var_w0++;} $vrijednost_za_w0=$postotak*$var_w0;	 
			 
		$w1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='W' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($w1)) {$var_w1++;} $vrijednost_za_w1=$postotak*$var_w1;	 

		$w2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='W' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($w2)) {$var_w2++;} $vrijednost_za_w2=$postotak*$var_w2;	

		$w3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='W' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($w3)) {$var_w3++;} $vrijednost_za_w3=$postotak*$var_w3;	  	

		$w4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='W' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($w4)) {$var_w4++;} $vrijednost_za_w4=$postotak*$var_w4;	 

		$w5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='W' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($w5)) {$var_w5++;} $vrijednost_za_w5=$postotak*$var_w5;	 

		$w6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='W' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($w6)) {$var_w6++;} $vrijednost_za_w6=$postotak*$var_w6;	

		$wsw0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WSW' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($wsw0)) {$var_wsw0++;} $vrijednost_za_wsw0=$postotak*$var_wsw0;	 
			 
		$wsw1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WSW' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($wsw1)) {$var_wsw1++;} $vrijednost_za_wsw1=$postotak*$var_wsw1;	 

		$wsw2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WSW' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($wsw2)) {$var_wsw2++;} $vrijednost_za_wsw2=$postotak*$var_wsw2;	

		$wsw3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WSW' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($wsw3)) {$var_wsw3++;} $vrijednost_za_wsw3=$postotak*$var_wsw3;	  	

		$wsw4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WSW' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($wsw4)) {$var_wsw4++;} $vrijednost_za_wsw4=$postotak*$var_wsw4;	 

		$wsw5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WSW' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($wsw5)) {$var_wsw5++;} $vrijednost_za_wsw5=$postotak*$var_wsw5;	 

		$wsw6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='WSW' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($wsw6)) {$var_wsw6++;} $vrijednost_za_wsw6=$postotak*$var_wsw6;	

		$sw0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SW' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($sw0)) {$var_sw0++;} $vrijednost_za_sw0=$postotak*$var_sw0;	 
			 
		$sw1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SW' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($sw1)) {$var_sw1++;} $vrijednost_za_sw1=$postotak*$var_sw1;	 

		$sw2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SW' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($sw2)) {$var_sw2++;} $vrijednost_za_sw2=$postotak*$var_sw2;	

		$sw3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SW' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($sw3)) {$var_sw3++;} $vrijednost_za_sw3=$postotak*$var_sw3;	  	

		$sw4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SW' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($sw4)) {$var_sw4++;} $vrijednost_za_sw4=$postotak*$var_sw4;	 

		$sw5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SW' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($sw5)) {$var_sw5++;} $vrijednost_za_sw5=$postotak*$var_sw5;	 

		$sw6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SW' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($sw6)) {$var_sw6++;} $vrijednost_za_sw6=$postotak*$var_sw6;		 
			 
		$ssw0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSW' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($ssw0)) {$var_ssw0++;} $vrijednost_za_ssw0=$postotak*$var_ssw0;	 
			 
		$ssw1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSW' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($ssw1)) {$var_ssw1++;} $vrijednost_za_ssw1=$postotak*$var_ssw1;	 

		$ssw2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSW' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($ssw2)) {$var_ssw2++;} $vrijednost_za_ssw2=$postotak*$var_ssw2;	

		$ssw3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSW' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($ssw3)) {$var_ssw3++;} $vrijednost_za_ssw3=$postotak*$var_ssw3;	  	

		$ssw4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSW' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($ssw4)) {$var_ssw4++;} $vrijednost_za_ssw4=$postotak*$var_ssw4;	 

		$ssw5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSW' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($ssw5)) {$var_ssw5++;} $vrijednost_za_ssw5=$postotak*$var_ssw5;	 

		$ssw6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSW' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($ssw6)) {$var_ssw6++;} $vrijednost_za_ssw6=$postotak*$var_ssw6;		

		$s0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='S' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($s0)) {$var_s0++;} $vrijednost_za_s0=$postotak*$var_s0;	 
			 
		$s1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='S' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($s1)) {$var_s1++;} $vrijednost_za_s1=$postotak*$var_s1;	 

		$s2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='S' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($s2)) {$var_s2++;} $vrijednost_za_s2=$postotak*$var_s2;	

		$s3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='S' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($s3)) {$var_s3++;} $vrijednost_za_s3=$postotak*$var_s3;	  	

		$s4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='S' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($s4)) {$var_s4++;} $vrijednost_za_s4=$postotak*$var_s4;	 

		$s5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='S' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($s5)) {$var_s5++;} $vrijednost_za_s5=$postotak*$var_s5;	 

		$s6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='S' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($s6)) {$var_s6++;} $vrijednost_za_s6=$postotak*$var_s6;		 

		$sse0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSE' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($sse0)) {$var_sse0++;} $vrijednost_za_sse0=$postotak*$var_sse0;	 
			 
		$sse1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSE' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($sse1)) {$var_sse1++;} $vrijednost_za_sse1=$postotak*$var_sse1;	 

		$sse2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSE' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($sse2)) {$var_sse2++;} $vrijednost_za_sse2=$postotak*$var_sse2;	

		$sse3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSE' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($sse3)) {$var_sse3++;} $vrijednost_za_sse3=$postotak*$var_sse3;	  	

		$sse4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSE' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($sse4)) {$var_sse4++;} $vrijednost_za_sse4=$postotak*$var_sse4;	 

		$sse5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSE' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($sse5)) {$var_sse5++;} $vrijednost_za_sse5=$postotak*$var_sse5;	 

		$sse6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SSE' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($sse6)) {$var_sse6++;} $vrijednost_za_sse6=$postotak*$var_sse6;	

		$se0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SE' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($se0)) {$var_se0++;} $vrijednost_za_se0=$postotak*$var_se0;	 
			 
		$se1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SE' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($se1)) {$var_se1++;} $vrijednost_za_se1=$postotak*$var_se1;	 

		$se2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SE' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($se2)) {$var_se2++;} $vrijednost_za_se2=$postotak*$var_se2;	

		$se3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SE' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($se3)) {$var_se3++;} $vrijednost_za_se3=$postotak*$var_se3;	  	

		$se4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SE' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($se4)) {$var_se4++;} $vrijednost_za_se4=$postotak*$var_se4;	 

		$se5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SE' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($se5)) {$var_se5++;} $vrijednost_za_se5=$postotak*$var_se5;	 

		$se6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='SE' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($se6)) {$var_se6++;} $vrijednost_za_se6=$postotak*$var_se6;			 
			 
		$ese0 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ESE' AND speed BETWEEN 0 AND 0.5 ");
			 while($row = mysql_fetch_array($ese0)) {$var_ese0++;} $vrijednost_za_ese0=$postotak*$var_ese0;	 
			 
		$ese1 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ESE' AND speed BETWEEN 0.5 AND 2 ");
			 while($row = mysql_fetch_array($ese1)) {$var_ese1++;} $vrijednost_za_ese1=$postotak*$var_ese1;	 

		$ese2 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ESE' AND speed BETWEEN 2 AND 4 ");
			 while($row = mysql_fetch_array($ese2)) {$var_ese2++;} $vrijednost_za_ese2=$postotak*$var_ese2;	

		$ese3 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ESE' AND speed BETWEEN 4 AND 6 ");
			 while($row = mysql_fetch_array($ese3)) {$var_ese3++;} $vrijednost_za_ese3=$postotak*$var_ese3;	  	

		$ese4 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ESE' AND speed BETWEEN 6 AND 8 ");
			 while($row = mysql_fetch_array($ese4)) {$var_ese4++;} $vrijednost_za_ese4=$postotak*$var_ese4;	 

		$ese5 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ESE' AND speed BETWEEN 8 AND 10 ");
			 while($row = mysql_fetch_array($ese5)) {$var_ese5++;} $vrijednost_za_ese5=$postotak*$var_ese5;	 

		$ese6 = mysql_query("SELECT * FROM ruza_vjetrova WHERE direction='ESE' AND speed BETWEEN 10 AND 12 ");
			 while($row = mysql_fetch_array($ese6)) {$var_ese6++;} $vrijednost_za_ese6=$postotak*$var_ese6;			 	 
    ?>
</div>

<div id="windrose"></div>
  <script type="text/javascript">
	  var E = new Array(); //niz u kojem se nalaze sve brzine za smjer E
	  E[0]=<?php echo $vrijednost_za_e0;?>;
	  E[1]=E[0]+<?php echo $vrijednost_za_e1;?>;
	  E[2]=E[1]+<?php echo $vrijednost_za_e2;?>;
	  E[3]=E[2]+<?php echo $vrijednost_za_e3;?>;
	  E[4]=E[3]+<?php echo $vrijednost_za_e4;?>;
	  E[5]=E[4]+<?php echo $vrijednost_za_e5;?>;
	  E[6]=E[5]+<?php echo $vrijednost_za_e6;?>;
	  
	  var ENE = new Array();
	  ENE[0]=<?php echo $vrijednost_za_ene0;?>;
	  ENE[1]=ENE[0]+<?php echo $vrijednost_za_ene1;?>;
	  ENE[2]=ENE[1]+<?php echo $vrijednost_za_ene2;?>;
	  ENE[3]=ENE[2]+<?php echo $vrijednost_za_ene3;?>;
	  ENE[4]=ENE[3]+<?php echo $vrijednost_za_ene4;?>;
	  ENE[5]=ENE[4]+<?php echo $vrijednost_za_ene5;?>;
	  ENE[6]=ENE[5]+<?php echo $vrijednost_za_ene6;?>;
	  
	  var NE = new Array();
	  NE[0]=<?php echo $vrijednost_za_ne0;?>;
	  NE[1]=NE[0]+<?php echo $vrijednost_za_ne1;?>;
	  NE[2]=NE[1]+<?php echo $vrijednost_za_ne2;?>;
	  NE[3]=NE[2]+<?php echo $vrijednost_za_ne3;?>;
	  NE[4]=NE[3]+<?php echo $vrijednost_za_ne4;?>;
	  NE[5]=NE[4]+<?php echo $vrijednost_za_ne5;?>;
	  NE[6]=NE[5]+<?php echo $vrijednost_za_ne6;?>;
	  
	  var NNE = new Array();
	  NNE[0]=<?php echo $vrijednost_za_nne0;?>;
	  NNE[1]=NNE[0]+<?php echo $vrijednost_za_nne1;?>;
	  NNE[2]=NNE[1]+<?php echo $vrijednost_za_nne2;?>;
	  NNE[3]=NNE[2]+<?php echo $vrijednost_za_nne3;?>;
	  NNE[4]=NNE[3]+<?php echo $vrijednost_za_nne4;?>;
	  NNE[5]=NNE[4]+<?php echo $vrijednost_za_nne5;?>;
	  NNE[6]=NNE[5]+<?php echo $vrijednost_za_nne6;?>;
	  
	  var N = new Array();
	  N[0]=<?php echo $vrijednost_za_n0;?>;
	  N[1]=N[0]+<?php echo $vrijednost_za_n1;?>;
	  N[2]=N[1]+<?php echo $vrijednost_za_n2;?>;
	  N[3]=N[2]+<?php echo $vrijednost_za_n3;?>;
	  N[4]=N[3]+<?php echo $vrijednost_za_n4;?>;
	  N[5]=N[4]+<?php echo $vrijednost_za_n5;?>;
	  N[6]=N[5]+<?php echo $vrijednost_za_n6;?>;
	  
	  var NNW = new Array();
	  NNW[0]=<?php echo $vrijednost_za_nnw0;?>;
	  NNW[1]=NNW[0]+<?php echo $vrijednost_za_nnw1;?>;
	  NNW[2]=NNW[1]+<?php echo $vrijednost_za_nnw2;?>;
	  NNW[3]=NNW[2]+<?php echo $vrijednost_za_nnw3;?>;
	  NNW[4]=NNW[3]+<?php echo $vrijednost_za_nnw4;?>;
	  NNW[5]=NNW[4]+<?php echo $vrijednost_za_nnw5;?>;
	  NNW[6]=NNW[5]+<?php echo $vrijednost_za_nnw6;?>;
	  
	  var NW = new Array();
	  NW[0]=<?php echo $vrijednost_za_nw0;?>;
	  NW[1]=NW[0]+<?php echo $vrijednost_za_nw1;?>;
	  NW[2]=NW[1]+<?php echo $vrijednost_za_nw2;?>;
	  NW[3]=NW[2]+<?php echo $vrijednost_za_nw3;?>;
	  NW[4]=NW[3]+<?php echo $vrijednost_za_nw4;?>;
	  NW[5]=NW[4]+<?php echo $vrijednost_za_nw5;?>;
	  NW[6]=NW[5]+<?php echo $vrijednost_za_nw6;?>;
	  
	  var WNW = new Array();
	  WNW[0]=<?php echo $vrijednost_za_wnw0;?>;
	  WNW[1]=WNW[0]+<?php echo $vrijednost_za_wnw1;?>;
	  WNW[2]=WNW[1]+<?php echo $vrijednost_za_wnw2;?>;
	  WNW[3]=WNW[2]+<?php echo $vrijednost_za_wnw3;?>;
	  WNW[4]=WNW[3]+<?php echo $vrijednost_za_wnw4;?>;
	  WNW[5]=WNW[4]+<?php echo $vrijednost_za_wnw5;?>;
	  WNW[6]=WNW[5]+<?php echo $vrijednost_za_wnw6;?>;
	  
	  var W = new Array();
	  W[0]=<?php echo $vrijednost_za_w0;?>;
	  W[1]=W[0]+<?php echo $vrijednost_za_w1;?>;
	  W[2]=W[1]+<?php echo $vrijednost_za_w2;?>;
	  W[3]=W[2]+<?php echo $vrijednost_za_w3;?>;
	  W[4]=W[3]+<?php echo $vrijednost_za_w4;?>;
	  W[5]=W[4]+<?php echo $vrijednost_za_w5;?>;
	  W[6]=W[5]+<?php echo $vrijednost_za_w6;?>;
	  
	   var WSW = new Array();
	  WSW[0]=<?php echo $vrijednost_za_wsw0;?>;
	  WSW[1]=WSW[0]+<?php echo $vrijednost_za_wsw1;?>;
	  WSW[2]=WSW[1]+<?php echo $vrijednost_za_wsw2;?>;
	  WSW[3]=WSW[2]+<?php echo $vrijednost_za_wsw3;?>;
	  WSW[4]=WSW[3]+<?php echo $vrijednost_za_wsw4;?>;
	  WSW[5]=WSW[4]+<?php echo $vrijednost_za_wsw5;?>;
	  WSW[6]=WSW[5]+<?php echo $vrijednost_za_wsw6;?>;
	  
	  var SW = new Array();
	  SW[0]=<?php echo $vrijednost_za_sw0;?>;
	  SW[1]=SW[0]+<?php echo $vrijednost_za_sw1;?>;
	  SW[2]=SW[1]+<?php echo $vrijednost_za_sw2;?>;
	  SW[3]=SW[2]+<?php echo $vrijednost_za_sw3;?>;
	  SW[4]=SW[3]+<?php echo $vrijednost_za_sw4;?>;
	  SW[5]=SW[4]+<?php echo $vrijednost_za_sw5;?>;
	  SW[6]=SW[5]+<?php echo $vrijednost_za_sw6;?>;
	  
	  var SSW = new Array();
	  SSW[0]=<?php echo $vrijednost_za_ssw0;?>;
	  SSW[1]=SSW[0]+<?php echo $vrijednost_za_ssw1;?>;
	  SSW[2]=SSW[1]+<?php echo $vrijednost_za_ssw2;?>;
	  SSW[3]=SSW[2]+<?php echo $vrijednost_za_ssw3;?>;
	  SSW[4]=SSW[3]+<?php echo $vrijednost_za_ssw4;?>;
	  SSW[5]=SSW[4]+<?php echo $vrijednost_za_ssw5;?>;
	  SSW[6]=SSW[5]+<?php echo $vrijednost_za_ssw6;?>;
	  
	  var S = new Array();
	  S[0]=<?php echo $vrijednost_za_s0;?>;
	  S[1]=S[0]+<?php echo $vrijednost_za_s1;?>;
	  S[2]=S[1]+<?php echo $vrijednost_za_s2;?>;
	  S[3]=S[2]+<?php echo $vrijednost_za_s3;?>;
	  S[4]=S[3]+<?php echo $vrijednost_za_s4;?>;
	  S[5]=S[4]+<?php echo $vrijednost_za_s5;?>;
	  S[6]=S[5]+<?php echo $vrijednost_za_s6;?>;
	  
	  var SSE = new Array();
	  SSE[0]=<?php echo $vrijednost_za_sse0;?>;
	  SSE[1]=SSE[0]+<?php echo $vrijednost_za_sse1;?>;
	  SSE[2]=SSE[1]+<?php echo $vrijednost_za_sse2;?>;
	  SSE[3]=SSE[2]+<?php echo $vrijednost_za_sse3;?>;
	  SSE[4]=SSE[3]+<?php echo $vrijednost_za_sse4;?>;
	  SSE[5]=SSE[4]+<?php echo $vrijednost_za_sse5;?>;
	  SSE[6]=SSE[5]+<?php echo $vrijednost_za_sse6;?>;
	  
	  var SE = new Array();
	  SE[0]=<?php echo $vrijednost_za_se0;?>;
	  SE[1]=SE[0]+<?php echo $vrijednost_za_se1;?>;
	  SE[2]=SE[1]+<?php echo $vrijednost_za_se2;?>;
	  SE[3]=SE[2]+<?php echo $vrijednost_za_se3;?>;
	  SE[4]=SE[3]+<?php echo $vrijednost_za_se4;?>;
	  SE[5]=SE[4]+<?php echo $vrijednost_za_se5;?>;
	  SE[6]=SE[5]+<?php echo $vrijednost_za_se6;?>;
	  
	  var ESE = new Array();
	  ESE[0]=<?php echo $vrijednost_za_ese0;?>;
	  ESE[1]=ESE[0]+<?php echo $vrijednost_za_ese1;?>;
	  ESE[2]=ESE[1]+<?php echo $vrijednost_za_ese2;?>;
	  ESE[3]=ESE[2]+<?php echo $vrijednost_za_ese3;?>;
	  ESE[4]=ESE[3]+<?php echo $vrijednost_za_ese4;?>;
	  ESE[5]=ESE[4]+<?php echo $vrijednost_za_ese5;?>;
	  ESE[6]=ESE[5]+<?php echo $vrijednost_za_ese6;?>;
	  
	  WindRose(150, 16, 12, 
		['E','ENE','NE','NNE','N','NNW','NW','WNW','W','WSW','SW','SSW','S','SSE','SE','ESE'],
		['','','','','','','','','','','','10%','','','',''],
		['','','','','','','','','','','','5%','','','',''],
		[ ENE[0], NE[0], NNE[0], N[0], NNW[0], NW[0], WNW[0], W[0], WSW[0], SW[0], SSW[0], 
		S[0], SSE[0], SE[0], ESE[0], E[0]],
		[ ENE[1], NE[1], NNE[1], N[1], NNW[1], NW[1], WNW[1], W[1], WSW[1], SW[1], SSW[1], 
		S[1], SSE[1], SE[1], ESE[1], E[1]],
		[ ENE[2], NE[2], NNE[2], N[2], NNW[2], NW[2], WNW[2], W[2], WSW[2], SW[2], SSW[2], 
		S[2], SSE[2], SE[2], ESE[2], E[2]],
		[ ENE[3], NE[3], NNE[3], N[3], NNW[3], NW[3], WNW[3], W[3], WSW[3], SW[3], SSW[3], 
		S[3], SSE[3], SE[3], ESE[3], E[3]],
		[ ENE[4], NE[4], NNE[4], N[4], NNW[4], NW[4], WNW[4], W[4], WSW[4], SW[4], SSW[4], 
		S[4], SSE[4], SE[4], ESE[4], E[4]],
		[ ENE[5], NE[5], NNE[5], N[5], NNW[5], NW[5], WNW[5], W[5], WSW[5], SW[5], SSW[5], 
		S[5], SSE[5], SE[5], ESE[5], E[5]],
		[ ENE[6], NE[6], NNE[6], N[6], NNW[6], NW[6], WNW[6], W[6], WSW[6], SW[6], SSW[6], 
		S[6], SSE[6], SE[6], ESE[6], E[6]],
		['#C0CEFE','#C0CEFE','#C0CEFE','#C0CEFE','#C0CEFE','#C0CEFE','#C0CEFE','#C0CEFE','#C0CEFE','#C0CEFE',
		'#C0CEFE','#C0CEFE','#C0CEFE','#C0CEFE','#C0CEFE','#C0CEFE'],
		['#829DFD','#829DFD','#829DFD','#829DFD','#829DFD','#829DFD','#829DFD','#829DFD','#829DFD','#829DFD',
		'#829DFD','#829DFD','#829DFD','#829DFD','#829DFD','#829DFD'],
		['#436CFC','#436CFC','#436CFC','#436CFC','#436CFC','#436CFC','#436CFC','#436CFC','#436CFC','#436CFC',
		'#436CFC','#436CFC','#436CFC','#436CFC','#436CFC','#436CFC'],
		['#0136EB','#0136EB','#0136EB','#0136EB','#0136EB','#0136EB','#0136EB','#0136EB','#0136EB','#0136EB',
		'#0136EB','#0136EB','#0136EB','#0136EB','#0136EB','#0136EB'],
		['#0329AF','#0329AF','#0329AF','#0329AF','#0329AF','#0329AF','#0329AF','#0329AF','#0329AF','#0329AF',
		'#0329AF','#0329AF','#0329AF','#0329AF','#0329AF','#0329AF'],
		['#021E7D','#021E7D','#021E7D','#021E7D','#021E7D','#021E7D','#021E7D','#021E7D','#021E7D','#021E7D',
		'#021E7D','#021E7D','#021E7D','#021E7D','#021E7D','#021E7D'],
		['#011041','#011041','#011041','#011041','#011041','#011041','#011041','#011041','#011041','#011041',
		'#011041','#011041','#011041','#011041','#011041','#011041']);
</script>

	<table id= "tablica">
			<tr>
				<th><p id="kvadrat" ></p></th>
				<td id="opis">&lt; 0.5 m/s</td>
			</tr>
			<tr>
				<th><p id="kvadrat1"></p></th>
				<td id="opis">0.5-2 m/s</td>
			</tr>
			<tr>
				<th><p id="kvadrat2"></p></th>
				<td id="opis">2-4 m/s</td>
			</tr>
			<tr>
				<th><p id="kvadrat3"></p></th>
				<td id="opis">4-6 m/s</td>
			</tr>
			<tr>
				<th><p id="kvadrat4"></p></th>
				<td id="opis">6-8 m/s</td>
			</tr>
			<tr>
				<th><p id="kvadrat5"></p></th>
				<td id="opis">8-10 m/s</td>
			</tr>
			<tr>
				<th><p id="kvadrat6"></p></th>
				<td id="opis">&gt; 10 m/s</td>
			</tr>
	</table>
	
</body>
</html>
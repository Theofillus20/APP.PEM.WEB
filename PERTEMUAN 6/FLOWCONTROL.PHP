<?PHP error_reporting(0);
echo "<form action=\"$PHP_SELF\" method=\"post\">";
$NILAI=$_POST['NILAI1'];
echo "BERAPA NILAI PHPMU?: 
<input name=\"NILAI1\" VALUE=\"$NILAI1\"SIZE=\"3\"TYPE=\"TEXT\"VALUE=\$NILAI1\">
<input name=\"cek\" type=\"submit\" value=\"Cek\"> </form>";
if ($_POST['cek'])
{ echo"<br><h1>";
	if($NILAI=="")
		{ echo"ANDA BELUM MENENTUKAN NILAI..!"; }
	elseif(!is_numeric($NILAI))
		{ echo"Ini Bukan Nilai Angka";}
	else
		{
			if($NILAI<=30)
				{ echo"Anda Mendapat Nilai Huruf <b> E </b>";}
			elseif($NILAI<=50)
				{ echo"Anda Mendapat Nilai Huruf <b> D </b>";}
			elseif($NILAI<=70)
				{ echo"Anda Mendapat Nilai Huruf <b> C </b>";}
			elseif($NILAI<=85)
				{ echo"Anda Mendapat Nilai Huruf <b> AB </b>";}
			else
				{ echo"Anda Mendapat Nilai Huruf <b> A </b>";}
		}
	echo"</h1>";
}		
?>
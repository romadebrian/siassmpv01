<html><title>DATA GURU SMP HARAPAN BERSAMA</title>
<style>
@media print {
input.noPrint { display: none; }
}
</style>

<body>

<table width="631" border="0" align="center">
  <tr>
    <td width="158" rowspan="6"><div align="center"><img src="../../img/admin.png" width="152" height="138"></div></td>
    <td width="463">&nbsp;</td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center"><strong><font size="+1">SMP HARAPAN BERSAMA  KOTA TEGAL</font></strong></div></td>
  </tr>
  <tr>
    <td><div align="center"></div></td>
  </tr>
  <tr>
    <td><div align="center">Jalan - jalan yuk ke guci Kab. Tegal Telp. (0283) 619873 </div></td>
  </tr>
  <tr>
    <td height="56">&nbsp;</td>
  </tr>
</table>
<div align="center"><strong><font size="+1">LAPORAN DATA GURU </font></font></strong></div>
<div style="text-align:center;padding:10px;">
	<input class="noPrint" type="button" value="Cetak Laporan" onClick="window.print()">
</div>
<table width='751' height="30" border='1' align='center' cellpadding="0" cellspacing="0" style="color: #FFFFFF" bordercolor="#000000" bgcolor="#666666" >
  <tr>
    <td width='43'><div align="center">No</div></td>
    <td width='129'><div align="center">NIP</div></td>
    <td width='167'><div align="center">Nama Guru </div></td>
    <td width='170'><div align="center">Pendidikan</div></td>
    <td width='141'><div align="center">Jabatan</div></td>
    <td width='87'><div align="center">Golongan</div></td>
  </tr>
</table>
  <?php
include '../../_db.php';

 	$rw=mysql_query('Select * from guru order by nip ASC');
  	while($s=mysql_fetch_array($rw)) {
	
$c=$c+1;
$nip=$s['nip'];
$nama=$s['nama'];
$pend=$s['pendidikan'];
$jab=$s['jabatan'];
$gol=$s['golongan'];

echo ("<table width='751' height='30' border='1' align='center' cellpadding='0' cellspacing='0' bordercolor='#6699FF'>
  <tr>
    <td width='43'><div align='center'>$c</div></td>
    <td width='129'><div align='left'>&nbsp;&nbsp;&nbsp;$nip</div></td>
    <td width='167'><div align='left'>&nbsp;&nbsp;&nbsp;$nama</div></td>
    <td width='170'><div align='center'>$pend</div></td>
    <td width='141'><div align='center'>$jab</div></td>
    <td width='87'><div align='center'>$gol</div></td>
  </tr>
</table>");
}
?>

</body>
</html>
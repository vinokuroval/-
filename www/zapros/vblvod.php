<?php
/* 
# export to excel
 
$connect_bd = mysql_connect ("localhost","root","");
mysql_select_db ("to",$connect_bd);
$select = "SELECT * FROM oborudovanie";
$export = mysql_query ( $select ) or die ( "Sql error : " . mysql_error( ) );
$fields = mysql_num_fields ( $export );
for ( $i = 0; $i < $fields; $i++ )
{
    $header .= mysql_field_name( $export , $i ) . "\t";
}
while( $row = mysql_fetch_row( $export ) )
{
    $line = '';
    foreach( $row as $value )
    {
        if ( ( !isset( $value ) ) || ( $value == "" ) )
        {
            $value = "\t";
        }
        else
        {
            $value = str_replace( '"' , '""' , $value );
            $value = '"' . $value . '"' . "\t";
        }
        $line .= $value;
    }
    $data .= trim( $line ) . "\n";
}
$data = str_replace( "\r" , "" , $data );
if ( $data == "" )
{
    $data = "\n(0) Records Found!\n";
}
 
header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename=your_desired_name.xls");
header("Pragma: no-cache");
header("Expires: 0");
print "$header\n$data";
*/
$prov = $_POST['prov'];
?>







<b>Оборудование отдела ЭСАиТМ:



<table  width="100%" border="" >

<tr>
					  <td class="colzag">Наименование</td>
					  <td class="colzag">Вид оборудования</td>
					  <td class="colzag">Дата ввода в эксплуатацию</td>
					  <td class="colzag">Состояние на складе</td>
					  <td class="colzag">Ставил на учёт</td>
					 
					  
					  
					 </tr>


<?php
 if ($prov=='1'){
include('..\databaseconnect.php');

					if (!$link) {
					 die('Ошибка соединения: ' . mysql_error());
					}
					mysql_select_db("to");
					mysql_set_charset("utf8");

					$result = mysql_query("SELECT * from oborudovanie t1
					inner join vid_oborud t2 on t1.id_vid=t2.id_vid
					inner join users t3 on t1.id_sklad_polz=t3.id", $link);
					if (!$result) {
					 die('Неверный запрос: ' . mysql_error());
					}

					while ($row = mysql_fetch_assoc($result)) {
					echo '<tr id="row-'.$row['name_ob'].'">';
					echo '<td class="colpolomk">'.$row['name_ob'].'</td>';
					echo '<td class="colpolomk">'.$row['vid_ob'].'</td>';
					echo '<td class="colpolomk">'.$row['data_vvoda'].'</td>';
					
					if ($row['zanyato']=='2'){
						echo '<td class="colpolomk">В ремонте</td>';
											}
					if ($row['zanyato']=='1'){
						echo '<td class="colpolomk">Используется</td>';
											}
					if  ($row['zanyato']=='0'){
						echo '<td class="colpolomk">Свободно</td>';
											}
					echo '<td class="colpolomk">'.$row['FIO'].'</td>';
					}
}
?>






<?php
 if ($prov=='2'){
include('..\databaseconnect.php');

					if (!$link) {
					 die('Ошибка соединения: ' . mysql_error());
					}
					mysql_select_db("to");
					mysql_set_charset("utf8");

					$result = mysql_query("SELECT * from oborudovanie t1
					inner join vid_oborud t2 on t1.id_vid=t2.id_vid
					inner join users t3 on t1.id_sklad_polz=t3.id
					where zanyato='0'", $link);
					if (!$result) {
					 die('Неверный запрос: ' . mysql_error());
					}

					while ($row = mysql_fetch_assoc($result)) {
					echo '<tr id="row-'.$row['name_ob'].'">';
					echo '<td class="colpolomk">'.$row['name_ob'].'</td>';
					echo '<td class="colpolomk">'.$row['vid_ob'].'</td>';
					echo '<td class="colpolomk">'.$row['data_vvoda'].'</td>';
					
					if ($row['zanyato']=='2'){
						echo '<td class="colpolomk">В ремонте</td>';
											}
					if ($row['zanyato']=='1'){
						echo '<td class="colpolomk">Используется</td>';
											}
					if  ($row['zanyato']=='0'){
						echo '<td class="colpolomk">Свободно</td>';
											}
					echo '<td class="colpolomk">'.$row['FIO'].'</td>';
					}
}
?>




<?php
 if ($prov=='3'){
include('..\databaseconnect.php');

					if (!$link) {
					 die('Ошибка соединения: ' . mysql_error());
					}
					mysql_select_db("to");
					mysql_set_charset("utf8");

					$result = mysql_query("SELECT * from oborudovanie t1
					inner join vid_oborud t2 on t1.id_vid=t2.id_vid
					inner join users t3 on t1.id_sklad_polz=t3.id
					where zanyato='1'", $link);
					if (!$result) {
					 die('Неверный запрос: ' . mysql_error());
					}

					while ($row = mysql_fetch_assoc($result)) {
					echo '<tr id="row-'.$row['name_ob'].'">';
					echo '<td class="colpolomk">'.$row['name_ob'].'</td>';
					echo '<td class="colpolomk">'.$row['vid_ob'].'</td>';
					echo '<td class="colpolomk">'.$row['data_vvoda'].'</td>';
					
					if ($row['zanyato']=='2'){
						echo '<td class="colpolomk">В ремонте</td>';
											}
					if ($row['zanyato']=='1'){
						echo '<td class="colpolomk">Используется</td>';
											}
					if  ($row['zanyato']=='0'){
						echo '<td class="colpolomk">Свободно</td>';
											}
					echo '<td class="colpolomk">'.$row['FIO'].'</td>';
					}
}
?>




<?php
 if ($prov=='4'){
include('..\databaseconnect.php');

					if (!$link) {
					 die('Ошибка соединения: ' . mysql_error());
					}
					mysql_select_db("to");
					mysql_set_charset("utf8");

					$result = mysql_query("SELECT * from oborudovanie t1
					inner join vid_oborud t2 on t1.id_vid=t2.id_vid
					inner join users t3 on t1.id_sklad_polz=t3.id
					where zanyato='2'", $link);
					if (!$result) {
					 die('Неверный запрос: ' . mysql_error());
					}

					while ($row = mysql_fetch_assoc($result)) {
					echo '<tr id="row-'.$row['name_ob'].'">';
					echo '<td class="colpolomk">'.$row['name_ob'].'</td>';
					echo '<td class="colpolomk">'.$row['vid_ob'].'</td>';
					echo '<td class="colpolomk">'.$row['data_vvoda'].'</td>';
					
					if ($row['zanyato']=='2'){
						echo '<td class="colpolomk">В ремонте</td>';
											}
					if ($row['zanyato']=='1'){
						echo '<td class="colpolomk">Используется</td>';
											}
					if  ($row['zanyato']=='0'){
						echo '<td class="colpolomk">Свободно</td>';
											}
					echo '<td class="colpolomk">'.$row['FIO'].'</td>';
					}
}
?>



</tr>
</table>











<br>



<style type="text/css" media="print">
button {display: none; }
</style>

<a href="\chek.php"><button>Назад</button></a>






<button onclick="window.print();">Печать</button>






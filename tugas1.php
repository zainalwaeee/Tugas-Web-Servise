<?php
$url="https://data.bmkg.go.id/DataMKG/TEWS/gempadirasakan.xml";
$data= new SimpleXMLElement ($url,null,true);
echo "<pre>";print_r($data);
echo "<h2> data data</h2>";
//lanjutkan baca objek erray
$tmp="<table border='1'>";
$tmp.="<tr><td><b>tanggal</b></td><td><b>jam</b></td><b><td>alamat</b></td><td><b>date time</b></td><td><b>point</b></td><td><b>Lintang</b></td><td><b>Bujur</b></td><td><b>Magnitude</b></td><td><b>Kedalaman</b></td><td><b>Wilayah</b></td><td><b>Dirasakan</b></td>";
for($i=0;$i<count($data->gempa);$i++){
   $tmp.="<tr><td>{$data->gempa[$i]->Tanggal}</td>
    <td><b>{$data->gempa[$i]->Jam}</b></td>
     <td><b>{$data->gempa[$i]->Tanggal}</b></td>
    <td><b>{$data->gempa[$i]->Jam}</b></td>
    <td><b>{$data->gempa[$i]->DateTime}</b></td>
    <td><b>{$data->gempa[$i]->point->coordinates}</b></td>
    <td><b>{$data->gempa[$i]->Lintang}</b></td>
    <td><b>{$data->gempa[$i]->Bujur}</b></td>
    <td><b>{$data->gempa[$i]->Magnitude}</b></td>
    <td><b>{$data->gempa[$i]->Kedalaman}</b></td>
    <td><b>{$data->gempa[$i]->Dirasakan}</b></td>";

    }
$tmp.="</table";
echo $tmp;
//Nama  = Muhammaad Zainal Arifin
//NIM   = 12211854
?>
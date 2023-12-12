<?php
/**
 * Program utilizing the Form class to create a simple input form.
 **/
include "form.php";

echo "<html><head><title>Mahasiswa</title></head><body>";

$form = new Form("", "Input form");
$form->addField("txtnim", "Nim");
$form->addField("txtnama", "Nama");
$form->addField("txtalamat", "Alamat");

echo "<h3>Silahkan isi form berikut ini :</h3>";
$form->displayForm();

echo "</body></html>";
?>

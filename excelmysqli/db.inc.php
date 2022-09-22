<?php 
Class DB {

public $host = "localhost";   // db hostname
public $user = "root";     //db kullanici adi
var $pwd = "malika"; // db sifre
var $database = "etf";    //veritabani ismi
var $tblName="adres";
function open(){ //veritabani baglanntisi olusturur.
$this->conn = mysql_connect($this->host, $this->user, $this->pwd)
or die("Veritabanimizda meydana gelen bir sorun yüzünden geçici bir süreligine hizmet verememekteyiz");

@mysql_query("SET NAMES 'latin5'");
@mysql_query("SET CHARACTER SET 'latin5'"); //dil secenekleri
@mysql_query("SET COLLATION_CONNECTION = 'latin5_turkish_ci'");

$select_db = @mysql_select_db($this->database) or die("Veritabani seçilemedi");
return false;
function query(){

$sonuc = mysql_query();
return false;
}
}

}

?> 

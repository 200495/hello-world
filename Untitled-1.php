<?php
   $host        = "host=localhost";
   $port        = "port=5432";
   $dbname      = "dbname=Beijing";
   $credentials = "user=postgres password=1";
   $db = pg_connect( "host=localhost port=5432 dbname=Beijing user=postgres password=abc123" );
   if(!$db){
      echo "Error : Unable to open pgsqldatabase\n";
   } else {
      echo "Opened pgsqldatabase successfully\n";
   }
   $result = pg_query($db,"select osm_id from planet_osm_point where highway != '' ");
   $servername = "localhost";
   $username = "root";
   $password = "";
   $mydbname = "beijing";
$conn = new mysqli($servername, $username, $password, $mydbname);
   if(!$conn){
      echo "Error : Unable to open mysqldatabase\n";
   } else {
      echo "Opened mysqldatabase successfully\n";
   }
while ($row = pg_fetch_row($result)){
$sql = "insert into test value(".$row[0].")";
mysqli_query($conn,$sql);
}
?> 
<?php //$con = mysql_connect('127.0.0.1','root','');
//mysql_select_db('data1',$con);
//$result = mysql_query('select xm from user"',$con);
//$conn = mysql_connect('127.0.0.2','root','');
//mysql_select_db('data2',$conn);
//while ($row = mysql_fetch_array($result)){
    // $sql = 'insert into data2.chart(xm)value("'.$row['xm'].'")';
    // $ret = mysql_query($sql,$conn);
//}
?>
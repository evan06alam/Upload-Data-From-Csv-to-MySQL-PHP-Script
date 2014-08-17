<link href="bootstrap.css" rel='stylesheet' type='text/css'>
<!-- Athor: Evan (evan06alam@gmail.com)-->
<center>
<?php 
$allowedExts = array("gif", "jpeg", "jpg", "png");
$temp = explode(".", $_FILES["file"]["name"]);
$extension = end($temp);
if($extension=='csv'){
 $target = "csvfile/"; 
 $target = $target . basename( 'data.csv') ;
 $ok=1;
 if(file_exists($target)){
chown($target,777); 
 unlink($target);
 echo '<span style="color:red;">Old file removed! & </span>';
 }
  if(move_uploaded_file($_FILES['file']['tmp_name'], $target))  
  { echo "<span style='color:green;'>The New file ". basename( $_FILES['file']['name']). " has been uploaded.<br/></span>";
 }  else { echo "<span style='color:green;'>New file has been uploaded.<br/></span>";
 } ?>
 
 <?php 
for($d=1; $d<=20; $d++){
echo '----------'.$d.'--------<br/>';
}
$connect = mysql_connect('localhost','root','');
if (!$connect) { 
    die('Could not connect to MySQL: ' . mysql_error()); 
} 

$cid =mysql_select_db('file_upload',$connect); 
// supply your database name

define('CSV_PATH','E:/xampp/htdocs/csvtodatabase/csvfile/'); 
// path where your CSV file is located

    $csv_file = CSV_PATH . "data.csv"; // Name of your CSV file
    $csvfile = fopen($csv_file, 'r');
    $theData = fgets($csvfile);
    $i = 0;
	$emptydata=mysql_query("TRUNCATE TABLE  csvdata", $connect);
    while (!feof($csvfile)) {
        $csv_data[] = fgets($csvfile, 1024);
        $csv_array = explode(",", $csv_data[$i]);
        $insert_csv = array();
        $insert_csv['ID'] = $csv_array[0];
        $insert_csv['name'] = $csv_array[1];
        $insert_csv['email'] = $csv_array[2];		
        $query = "INSERT INTO csvdata(ID,name,email) 
VALUES('','".$insert_csv['name']."','".$insert_csv['email']."')";
        $n=mysql_query($query, $connect );
        $i++;
    }
    fclose($csvfile);

echo "Your Posted data successfully imported to database!!";
mysql_close($connect);
echo '<br/><br/><a href="index.php" class="btn btn-warning active">Return to File Upload</a>';
}else{
echo'<h2><br/><br/><br/>Invalid file,<h2><h3><br/> Please upload only valid CSV format file; eg: data.csv</h3><br/><br/>';
echo '<a href="index.php" class="btn btn-warning active">Return to File Upload</a>';
}
?>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- tgo -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:15px"
     data-ad-client="ca-pub-3995546819230349"
     data-ad-slot="4579678782"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<!-- tgo -->
<ins class="adsbygoogle"
     style="display:inline-block;width:728px;height:15px"
     data-ad-client="ca-pub-3995546819230349"
     data-ad-slot="4579678782"></ins>
<script>
(adsbygoogle = window.adsbygoogle || []).push({});
</script>
</center>

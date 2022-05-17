<html>
<body>
<?php 


include_once "../global/conn.php";

$sql= "SELECT * FROM oficios";	
$result=mysqli_query($con,$sql) or die(mysqli_close($con));



echo '<table border="0" cellspacing="2" cellpadding="2"> 
      <tr> 
          <td> <font face="Arial">Id</font> </td> 
          <td> <font face="Arial">Nombre del Oficio</font> </td> 
          <td> <font face="Arial">Archivo</font> </td> 
      </tr>';

    if (mysqli_num_rows($result)>0) {
        while($row = mysqli_fetch_assoc($result)) {
        $id = $row["id"];
        $nombre = $row["nombre"];
        $url = $row["direccion"];

        echo '<tr> 
                  <td>'.$id.'</td> 
                  <td>'.$nombre.'</td> 
                  <td>'.$url.'</td> 
                  <td><a target=black href="'.$url.'?id='.$id.'">'.$nombre.'</a></td>
              </tr>';}
    }
    $result->free(); 
?>
</body>
</html>
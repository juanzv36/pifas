<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Documento sin t&iacute;tulo</title></head>

<body>
<? 

 $idcliente=$_REQUEST["idcliente"]; 

 $nombre=$_REQUEST["nombre"]; 

 $telefono=$_REQUEST["telefono"]; 

 $conectado=@mysql_connect("localhost","root","1234") or die ("no se logro la conexion"); 

 $db=mysql_select_db("pifas"); 

 $query="select * from cliente where idcliente='".$idcliente."'"; 

 $qry=mysql_query($query); 

 $i=mysql_num_rows($qry); 

 if ($i>0) 

 { ?>
</p>

 <p>&nbsp; </p>

 <p>

 <script language="JavaScript" type="text/javascript"> 

alert("El cliente ya existe"); 

location.href="altasCliente.html"; 

</script>

 <? 

} 

else 

{

$nuevo="insert into cliente values('".$idcliente."','".$nombre."','".$telefono."')"; 

$qry=mysql_query($nuevo);

} 

mysql_close($conectado); 

?>

 </p>

 <p align="center">&nbsp;</p>

 <div align="center"><em><font size="6" face="Times New Roman, Times, serif">data succesfull (hola k hace) </font></em></div>

 </div>
</body>
</html>

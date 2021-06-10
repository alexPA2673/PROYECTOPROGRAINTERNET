<html>
 	<head>
 		<title>
 			Ingresar nuevo alumno
 		</title>
 	</head>
	
 	<body>
		 <center>
		 <TABLE WIDTH="80%"BORDER="0"CELLPADING="1"CELLSPACING="0">
        <TR><TH BGCOLOR="#c9c9c9"COLSPAN="2"WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:44; COLOR:#48e">Datos del alumno
        </TH></TR>
       
    </TABLE>
<table width= "50%" boder= "0">
<tr><th COLSPAN="2"WIDTH="100"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:44; COLOR:#7F8C8D;" >
            <H COLSPAN="2"STYLE="FONT-FAMILY:Candara; FONT-SIZE:25;">
				<form name="forma1" method="post" action="insertaralumno.php">
 			Ingresa No Cuenta: <br> <input type="text" name="cuenta" placeholder="Numero de Cuenta" size="25"><br><br>
 			Ingresa Nombre: <br> <input type="text" name="nombre"  placeholder="Nombre Completo"  size="40"><br><br>
 			Ingresa Semestre: <br> <input type="text" name="semestre"  placeholder="Semestre" size="15"><br><br><br><br>
 			<input type="submit" value="Guardar datos">
			
 		</form></h>
        </th></tr>
		</table>
		<?php
		
		$conexion = mysqli_connect("localhost","root","root1234","calificaciones de alumnos-proyecto");
	
		$consultaSQL = "INSERT INTO alumnos 
						(cuenta, nombreCompleto, semestre) 
						VALUES
						(".$_POST['cuenta'].",'".$_POST['nombre']."','".$_POST['semestre']."')
						";
		
		
		mysqli_query($conexion,$consultaSQL);
		

	?>
		<h1><A HREF="verRegistro.php"><FONT COLOR="#34495E">Mostrar lista</FONT></A></h1>
		<h1><A HREF="Index.html"><FONT COLOR="#34495E">volver al inicio</FONT></A></h1>
		
	</center></body>
</html>
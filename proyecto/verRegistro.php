<html>
 	<head>
 		<title>
 			Trabajando con PHP + MySQL
 		</title>
 	</head>
	 <link rel="stylesheet" type="text/css" href="estilo.css">
 	<body>
	 <DIV>
        <HR>
            <CENTER>
            <TABLE WIDTH="90%"BORDER="1"CELLPADING="1"CELLSPACING="0">
            <TR BGCOLOR="#c9c9c9">
                <TH WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:50;">
                    <FONT COLOR="#48e">calificaciones de los Alumnos</FONT></TH>
            </TR>
            </TABLE>
            </CENTER>
            <HR><BR><BR><BR>
			<div class="menu">
    <form name="form1" method="post" action="index.html">
        <input type="submit" value="volver al inicio", class="boton2">
    </form> 
</div>
    </DIV>
 		<table border="1" cellpadding="0" cellspacing="0">
 			<tr>
 				<td width="150" align="center">N&uacute;mero de Cuenta</td>
 				<td width="300" align="center">Nombre Completo</td>
 				<td width="100" align="center">Semestre</td>
 				<td width="150" align="center">Opciones</td>
 				
 			</tr>
 		<?php
 			$conexion=mysqli_connect("localhost","root","root1234","calificaciones de alumnos-proyecto");
 			$consultaSQL="SELECT * FROM alumnos ORDER BY cuenta ASC";
 			$resultado=mysqli_query($conexion, $consultaSQL);
 			while($datos=mysqli_fetch_array($resultado))
 			{
 				echo "
 					<tr>
 					 <td align='center'>".$datos['cuenta']."</td>
 					 <td align='center'>".$datos['nombreCompleto']."</td>
 					 <td align='center'>".$datos['semestre']."</td>
 					 <td align='center'><a href='modificar1.php?noCuenta=".$datos['cuenta']."&nombre=".$datos['nombreCompleto']."&semestre=".$datos['semestre']."'>Modificar</a><BR><a href='eliminar alumno.php?noCuenta=".$datos['cuenta']."'>Eliminar</a></td>
 					 
 					</tr>
 				";
 			}
 		?>
 		</table>
		 <h1>
		 <div class="menu">
    <form name="form1" method="post" action="insertaralumno.php">
        <input type="submit" value="insertar alumno nuevo", class="boton2">
    </form> 

	<div class="menu">
    <form name="form1" method="post" action="tablas.php">
        <input type="submit" value="ver tablas de calificaciones", class="boton2">
    </form> 
</div></h1>
 	</body>
</html>
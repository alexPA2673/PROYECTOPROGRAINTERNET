<html>
<head>
	<title>Trabajando con PHP + MySQL</title>
</head>
<body>
<CENTER>
            <TABLE WIDTH="90%"BORDER="1"CELLPADING="1"CELLSPACING="0">
            <TR BGCOLOR="##F4F1BB">
                <TH WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:50;">
                    <FONT COLOR="#ABB2B9">modificaion exitosa!;)</FONT></TH>
            </TR>
            </TABLE>
			<BR></BR>
          
	<?php
		
		$conexion = mysqli_connect("localhost","root","root1234","calificaciones de alumnos-proyecto");
		//Paso 2: Definir la consulta SQL (insert)
		$consultaSQL = "UPDATE alumnos SET cuenta=".$_POST['cuenta'].", nombreCompleto='".$_POST['nombre']."', semestre='".$_POST['semestre']."' WHERE cuenta=".$_POST['cuentaValidar'];

		
		
		mysqli_query($conexion,$consultaSQL);
		//Paso 4: Envio mensaje de almacenamiento exitoso
		
 		echo "<a href='verRegistro.php'>Regresar</a>";
	?>  </CENTER>
</body>
</html>
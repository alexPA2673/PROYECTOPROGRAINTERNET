<html>
<head>
	<title>Trabajando con PHP + MySQL</title>
</head>

<body>
<CENTER>
            <TABLE WIDTH="90%"BORDER="1"CELLPADING="1"CELLSPACING="0">
            <TR BGCOLOR="##F4F1BB">
                <TH WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:50;">
                    <FONT COLOR="#ABB2B9">Almacenamiento exitoso en la base de datos ;)</FONT></TH>
            </TR>
            </TABLE>
            </CENTER>
	
	<?php
		
		$conexion = mysqli_connect("localhost","root","root1234","calificaciones de alumnos-proyecto");
	
		$consultaSQL = "INSERT INTO alumnos 
						(cuenta, nombreCompleto, semestre) 
						VALUES
						(".$_POST['cuenta'].",'".$_POST['nombre']."','".$_POST['semestre']."')
						";
		
		
		mysqli_query($conexion,$consultaSQL);
		

	?>
</body>
</html>
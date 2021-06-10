<html>
 	<head>
 		<title>
 			Trabajando con PHP + MySQL
 		</title>
 	</head>
 	<body>
     <CENTER>
            <TABLE WIDTH="90%"BORDER="1"CELLPADING="1"CELLSPACING="0">
            <TR BGCOLOR="##F4F1BB">
                <TH WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:50;">
                    <FONT COLOR="#ABB2B9">Registro eliminado exitosamente!;)</FONT></TH>
            </TR>
            </TABLE>
           <BR></BR>
 		<?php
 			$conexion=mysqli_connect("localhost","root","root1234","calificaciones de alumnos-proyecto");
 			$consultaSQL="DELETE FROM alumnos WHERE cuenta=".$_GET['noCuenta'];
 			mysqli_query($conexion, $consultaSQL);

 			
 			echo "<a href='verRegistro.php'>Regresar</a>";
 		?> </CENTER>
 	</body>
</html>
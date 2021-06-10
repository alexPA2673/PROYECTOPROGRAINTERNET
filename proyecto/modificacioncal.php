<html>
 	<head>
 		<title>MODIFICACI&Oacute;N</title>
	<link rel="stylesheet" type="text/css" href="">
        <!--AQUI POS REFERENCIAS LOS ESTILOS-->
 	</head>
 	<body>
 		<center><form name="forma1" method="post" action="modificarcal.php">
		 <TABLE WIDTH="80%"BORDER="0"CELLPADING="1"CELLSPACING="0">
        <TR><TH BGCOLOR="#c9c9c9"COLSPAN="2"WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:44; COLOR:#48e">Modificacion de las calificaciones
        </TH></TR>
       
    </TABLE>
	<table width= "50%" boder= "0">
<tr><th COLSPAN="2"WIDTH="100"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:44; COLOR:#7F8C8D;" >
            <H COLSPAN="2"STYLE="FONT-FAMILY:Candara; FONT-SIZE:25;">
            <input type="hidden" name="cuentaValidar" size="25" value="<?php echo $_GET['noCuenta']; ?>">
            An&aacute;lisis y diseño: <BR> <input type="number" step="0.01" min="0" max="10" name="analisis1" size="8" value="<?php echo $_GET['analisis1']; ?>"><br><br>
            F&iacute;sica: <BR> <input type="number" step="0.01" min="0" max="10"  name="fisica1" size="8" value="<?php echo $_GET['fisica1']; ?>"><br><br>
            Ingl&eacute;s: <BR> <input type="number" step="0.01" min="0" max="10"  name="ingles1" size="8" value="<?php echo $_GET['ingles1']; ?>"><br><br>
            Matem&aacute;ticas: <BR> <input type="number" step="0.01" min="0" max="10"  name="mate1" size="8" value="<?php echo $_GET['mate1']; ?>"><br><br>
            Metodolog&iacute;a: <BR> <input type="number" step="0.01" min="0" max="10"  name="metod1" size="8" value="<?php echo $_GET['metod1']; ?>"><br><br>
            Progra de Internet: <BR> <input type="number" step="0.01" min="0" max="10"  name="progaInter1" size="8" value="<?php echo $_GET['progaInter1']; ?>"><br><br>
            Programaci&oacute;n: <BR> <input type="number" step="0.01" min="0" max="10"  name="progra1" size="8" value="<?php echo $_GET['progra1']; ?>"><br><br>
 			<input type="submit" name="modificarP1" value="MODIFICAR CALIFICACIONES">
 		</form> </h>
        </th></tr>
    </TAble></center>


         <center><form name="forma2" method="post" action="tablas.php">
			<input type="submit" value="REGRESAR">
		</form></center>
        <?php

         $conexion = mysqli_connect("localhost","root","root1234","calificaciones de alumnos-proyecto");

			$consultaSQL = "UPDATE alumnos SET analisis1='".$_POST['analisis1']."', fisica1='".$_POST['fisica1']."', ingles1='".$_POST['ingles1']."', mate1='".$_POST['mate1']."', metod1='".$_POST['metod1']."', progaInter1='".$_POST['progaInter1']."', progra1='".$_POST['progra1']."' WHERE cuenta=".$_POST['cuentaValidar'];
			
	?>
 	</body>
</html>
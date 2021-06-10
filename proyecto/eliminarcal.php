<html>
 	<head>
 		<title>ELIMINACI&Oacute;N</title>

 	</head>
 	<body>
         <CENTER>
 		<form name="forma1" method="post" action="caleliminadas.php">
         <TABLE WIDTH="80%"BORDER="0"CELLPADING="1"CELLSPACING="0">
        <TR><TH BGCOLOR="#c9c9c9"COLSPAN="2"WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:44; COLOR:#48e">ELIMINAR ALUMNO?
        </TH></TR>
       
    </TABLE>
 			<input type="hidden" name="cuentaValidar" size="25" value="<?php echo $_GET['noCuenta']; ?>">
 			<input type="hidden" step="0.01" min="0" max="10" name="analisis1" size="8" placeholder="An&aacute;lisis y diseño" value="<?php echo $_GET['analisis1']; ?>">
 			<input type="hidden" step="0.01" min="0" max="10"  name="fisica1" size="8" placeholder="F&iacute;sica 1" value="<?php echo $_GET['fisica1']; ?>">
 			<input type="hidden" step="0.01" min="0" max="10"  name="ingles1" size="8" placeholder="Ingl&eacute;s" value="<?php echo $_GET['ingles1']; ?>">
 			<input type="hidden" step="0.01" min="0" max="10"  name="mate1" size="8" placeholder="Matem&aacute;ticas" value="<?php echo $_GET['mate1']; ?>">
 			<input type="hidden" step="0.01" min="0" max="10"  name="metod1" size="8" placeholder="Metodolog&iacute;a" value="<?php echo $_GET['metod1']; ?>">
 			<input type="hidden" step="0.01" min="0" max="10"  name="progaInter1" size="8" placeholder="Progra de Internet" value="<?php echo $_GET['progaInter1']; ?>">
 			<input type="hidden" step="0.01" min="0" max="10"  name="progra1" size="8" placeholder="programaci&oacute;n" value="<?php echo $_GET['progra1']; ?>"><BR></BR>
 			<center><input type="submit" name="eliminarP1" value="S&Iacute;, ELIMINAR"></center>
 		</form>
		<form name="forma" method="post" action="tablas.php">
		<center><input type="submit" name="confirmar" value="NO, REGRESAR"></center>
		</form>

       </CENTER>
 	</body>
</html>
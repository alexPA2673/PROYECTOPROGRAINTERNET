<html>
 	<head>
 		<title>
 			Trabajando con PHP + MySQL
 		</title>
 	</head>
 	<body>
         <CENTER>
     <TABLE WIDTH="80%"BORDER="0"CELLPADING="1"CELLSPACING="0">
        <TR><TH BGCOLOR="#c9c9c9"COLSPAN="2"WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:44; COLOR:#48e">MODIFICACION DE DATOS
        </TH></TR>
       
    </TABLE>
    
<table width= "50%" boder= "0">
<tr><th COLSPAN="2"WIDTH="100"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:44; COLOR:#7F8C8D;" >
            <H COLSPAN="2"STYLE="FONT-FAMILY:Candara; FONT-SIZE:25;">
 		<form name="forma1" method="post" action="modificar2.php">
 			<input type="hidden" name="cuentaValidar" size="25" value="<?php echo $_GET['noCuenta']; ?>">
 			Ingresa No Cuenta: <BR> <input type="text" name="cuenta" size="25" value="<?php echo $_GET['noCuenta']; ?>"><br><br>
 			Ingresa Nombre: <BR> <input type="text" name="nombre" size="50" value="<?php echo $_GET['nombre']; ?>"><br><br>
 			Ingresa Semestre: <BR> <input type="text" name="semestre" size="5" value="<?php echo $_GET['semestre']; ?>"><br><br><br><br>
 			<input type="submit" value="Modificar datos">
 		</form>
         </h>
        </th></tr>
    </TAble>
 </CENTER>	</body>
</html>
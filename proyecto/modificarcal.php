<html>
<head>
	<title>MODIFICACI&Oacute;N</title>
        <!--AQUI POS REFERENCIAS LOS ESTILOS-->
</head>
<body>
<?php
	if(isset($_POST['modificarP1'])){
		if(strlen($_POST['analisis1']) >= 1 && strlen($_POST['fisica1']) >= 1 && strlen($_POST['ingles1']) >= 1 && strlen($_POST['mate1']) >= 1 && strlen($_POST['metod1']) >= 1 && strlen($_POST['progaInter1']) >= 1 && strlen($_POST['progra1']) >= 1 ){
		
         //AQUI NOMAS SUSTITUYE "20181150" POR LA CONTRASEÑA DE TU LOCALHOST
         //Y SUSTITUYE "SISTEMACALIFICACIONES" POR EL NOMBRE DE TU BASE DE DATOS
         $conexion = mysqli_connect("localhost","root","root1234","calificaciones de alumnos-proyecto");

			$consultaSQL = "UPDATE alumnos SET analisis1='".$_POST['analisis1']."', fisica1='".$_POST['fisica1']."', ingles1='".$_POST['ingles1']."', mate1='".$_POST['mate1']."', metod1='".$_POST['metod1']."', progaInter1='".$_POST['progaInter1']."', progra1='".$_POST['progra1']."' WHERE cuenta=".$_POST['cuentaValidar'];
			$resultado = mysqli_query($conexion,$consultaSQL);
		if($resultado){
            ?>
           <CENTER>
            <TABLE WIDTH="90%"BORDER="1"CELLPADING="1"CELLSPACING="0">
            <TR BGCOLOR="##F4F1BB">
                <TH WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:50;">
                    <FONT COLOR="#ABB2B9">calificaiones ingresadas correctamente ;)</FONT></TH>
            </TR>
            </TABLE>
            </CENTER>
                <BR></BR>
            <center><form name="forma2" method="post" action="tablas.php">
			<input type="submit" value="REGRESAR">
		    </form></center>
            <?php
            
        }else{
            ?>
            <CENTER>
            <TABLE WIDTH="90%"BORDER="1"CELLPADING="1"CELLSPACING="0">
            <TR BGCOLOR="##F4F1BB">
                <TH WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:50;">
                    <FONT COLOR="#ABB2B9">Algo salio mal :(</FONT></TH>
            </TR>
            </TABLE>
            </CENTER>
                <BR></BR>
            <center><form name="forma2" method="post" action="tablas.php">
			<input type="submit" value="REGRESAR">
		</form></center>
            <?php
        }

	}else{
		?>
        <CENTER>
            <TABLE WIDTH="90%"BORDER="1"CELLPADING="1"CELLSPACING="0">
            <TR BGCOLOR="##F4F1BB">
                <TH WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:50;">
                    <FONT COLOR="#ABB2B9">no ingreso todos los datos >:( </FONT></TH>
            </TR>
            </TABLE>
            </CENTER>
                <BR></BR>
        <center><form name="forma2" method="post" action="tablas.php">
			<input type="submit" value="REGRESAR">
		</form></center>
        <?php
	}
}
	?>
</body>
</html>
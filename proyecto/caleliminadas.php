<html>
    <title>
        calificaciones eliminadas
    </title>
<body>
    

<?php
     
     $conexion = mysqli_connect("localhost","root","root1234","calificaciones de alumnos-proyecto");
     $consultaSQL = "UPDATE alumnos SET  analisis1='".$_POST['analisis1']."', fisica1='".$_POST['fisica1']."', ingles1='".$_POST['ingles1']."', mate1='".$_POST['mate1']."', metod1='".$_POST['metod1']."', progaInter1='".$_POST['progaInter1']."', progra1='".$_POST['progra1']."' WHERE cuenta=".$_POST['cuentaValidar'];
     $resultado=mysqli_query($conexion,$consultaSQL);
     if($resultado){
     ?>
     <CENTER>
            <TABLE WIDTH="90%"BORDER="1"CELLPADING="1"CELLSPACING="0">
            <TR BGCOLOR="##F4F1BB">
                <TH WIDTH="500"ALIGN="CENTER"STYLE="FONT-FAMILY:Candara; FONT-SIZE:50;">
                    <FONT COLOR="#ABB2B9">calificaciones eliminadas correctamente ;)</FONT></TH>
            </TR>
            </TABLE>
            </CENTER>
	
     <center><form name="forma2" method="post" action="tablas.php">
             <input type="submit" value="REGRESAR">
             </form></center>
     <?php
     }
 ?>

</html>

</body>
<?php
session_start();

require 'database.php';

if (isset($_SESSION['user_id'])) {

    $records = $conn->prepare('SELECT * FROM users WHERE id = :id');

    $records->bindParam(':id', $_SESSION['user_id']);

    $records->execute();

    $results = $records->fetch(PDO::FETCH_ASSOC);

    $user = null;

    if (count($results) > 0) {

        $user = $results;
    }
}

if (! empty($_POST['vin'])) {

    if (! empty($user)) {

        $idUser = $user['id'];

        $idAgencia = $user['idAgencia'];

        $estatusPoliza = "activo";

        $tipoAgencia = $user['idTipoAgencia'];
    }
    if ($tipoAgencia == 2) {

        $sql = "INSERT INTO polizas (marca, submarca, color, kms, cc, fechaFacturaPrimordial, placa, vin, cilindors, combustible, kmsMantenimiento, mesesMantenimiento, yearFabricacion, nombreCliente, fechaNacimiento, rfc, codigoPostal, localidad, municipio, estado, calle, colonia, numExt, telefono, folioContrato, fechaInicio, fechaFin, fechaVenta, emailCliente, fechaFinMarca, vendedor, idUser, valorVenta, curpCliente, estatusPoliza, hp, idAgencia, motor ) VALUES (:marca, :submarca, :color, :kms, :cc,:fechaFacturaPrimordial, :placa, :vin, :cilindors, :combustible, :kmsMantenimiento, :mesesMantenimiento, :yearFabricacion, :nombreCliente, :fechaNacimiento, :rfc, :codigoPostal, :localidad, :municipio, :estado, :calle, :colonia, :numExt, :telefono, :folioContrato, :fechaInicio, :fechaFin, :fechaVenta, :emailCliente, :fechaFinMarca, :vendedor, :idUser, :valorVenta, :curpCliente, :estatusPoliza, :hp, :idAgencia, :motor )";

        $stmt = $conn->prepare($sql);

        $stmt->bindParam(':marca', $_POST['marca']);

        $stmt->bindParam(':submarca', $_POST['submarca']);

        $stmt->bindParam(':color', $_POST['color']);

        $stmt->bindParam(':kms', $_POST['kms']);

        $stmt->bindParam(':cc', $_POST['cc']);

        $stmt->bindParam(':fechaFacturaPrimordial', $_POST['fechaFacturaPrimordial']);

        $stmt->bindParam(':placa', $_POST['placa']);

        $stmt->bindParam(':vin', $_POST['vin']);

        $stmt->bindParam(':cilindors', $_POST['cilindors']);

        $stmt->bindParam(':combustible', $_POST['combustible']);

        $stmt->bindParam(':kmsMantenimiento', $_POST['kmsMantenimiento']);

        $stmt->bindParam(':mesesMantenimiento', $_POST['mesesMantenimiento']);

        $stmt->bindParam(':yearFabricacion', $_POST['yearFabricacion']);

        $stmt->bindParam(':nombreCliente', $_POST['nombreCliente']);

        $stmt->bindParam(':fechaNacimiento', $_POST['fechaNacimiento']);

        $stmt->bindParam(':rfc', $_POST['rfc']);

        $stmt->bindParam(':codigoPostal', $_POST['codigoPostal']);

        $stmt->bindParam(':localidad', $_POST['localidad']);

        $stmt->bindParam(':municipio', $_POST['municipio']);

        $stmt->bindParam(':estado', $_POST['estado']);

        $stmt->bindParam(':calle', $_POST['calle']);

        $stmt->bindParam(':colonia', $_POST['colonia']);

        $stmt->bindParam(':numExt', $_POST['numExt']);

        $stmt->bindParam(':telefono', $_POST['telefono']);

        $stmt->bindParam(':folioContrato', $_POST['folioContrato']);

        $stmt->bindParam(':fechaInicio', $_POST['fechaInicio']);

        $stmt->bindParam(':fechaFin', $_POST['fechaFin']);

        $stmt->bindParam(':fechaVenta', $_POST['fechaVenta']);

        $stmt->bindParam(':emailCliente', $_POST['emailCliente']);

        $stmt->bindParam(':fechaFinMarca', $_POST['fechaFinMarca']);

        $stmt->bindParam(':vendedor', $_POST['vendedor']);

        $stmt->bindParam(':idUser', $idUser);

        $stmt->bindParam(':valorVenta', $_POST['valorVenta']);

        $stmt->bindParam(':curpCliente', $_POST['curpCliente']);

        $stmt->bindParam(':estatusPoliza', $estatusPoliza);

        $stmt->bindParam(':motor', $_POST['motor']);

        $stmt->bindParam(':hp', $_POST['hp']);

        $stmt->bindParam(':idAgencia', $idAgencia);

        if ($stmt->execute()) {

            echo '<script language="javascript">alert("POLIZA GUARDADA");window.location.href="index.php"</script>';
        } else {

            echo '<script language="javascript">alert("Error de registro");window.location.href="index3.php"</script>';
        }
        ;
    } elseif ($tipoAgencia == 1) {
        
        $sql = "INSERT INTO polizasnuevas (marca, submarca, color, kms, cc, fechaFacturaPrimordial, placa, vin, cilindors, combustible, kmsMantenimiento, mesesMantenimiento, yearFabricacion, nombreCliente, fechaNacimiento, rfc, codigoPostal, localidad, municipio, estado, calle, colonia, numExt, telefono, folioContrato, fechaInicio, fechaFin, fechaVenta, emailCliente, fechaFinMarca, vendedor, idUser, valorVenta, curpCliente, estatusPoliza, hp, idAgencia, motor ) VALUES (:marca, :submarca, :color, :kms, :cc,:fechaFacturaPrimordial, :placa, :vin, :cilindors, :combustible, :kmsMantenimiento, :mesesMantenimiento, :yearFabricacion, :nombreCliente, :fechaNacimiento, :rfc, :codigoPostal, :localidad, :municipio, :estado, :calle, :colonia, :numExt, :telefono, :folioContrato, :fechaInicio, :fechaFin, :fechaVenta, :emailCliente, :fechaFinMarca, :vendedor, :idUser, :valorVenta, :curpCliente, :estatusPoliza, :hp, :idAgencia, :motor )";
        
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':marca', $_POST['marca']);
        
        $stmt->bindParam(':submarca', $_POST['submarca']);
        
        $stmt->bindParam(':color', $_POST['color']);
        
        $stmt->bindParam(':kms', $_POST['kms']);
        
        $stmt->bindParam(':cc', $_POST['cc']);
        
        $stmt->bindParam(':fechaFacturaPrimordial', $_POST['fechaFacturaPrimordial']);
        
        $stmt->bindParam(':placa', $_POST['placa']);
        
        $stmt->bindParam(':vin', $_POST['vin']);
        
        $stmt->bindParam(':cilindors', $_POST['cilindors']);
        
        $stmt->bindParam(':combustible', $_POST['combustible']);
        
        $stmt->bindParam(':kmsMantenimiento', $_POST['kmsMantenimiento']);
        
        $stmt->bindParam(':mesesMantenimiento', $_POST['mesesMantenimiento']);
        
        $stmt->bindParam(':yearFabricacion', $_POST['yearFabricacion']);
        
        $stmt->bindParam(':nombreCliente', $_POST['nombreCliente']);
        
        $stmt->bindParam(':fechaNacimiento', $_POST['fechaNacimiento']);
        
        $stmt->bindParam(':rfc', $_POST['rfc']);
        
        $stmt->bindParam(':codigoPostal', $_POST['codigoPostal']);
        
        $stmt->bindParam(':localidad', $_POST['localidad']);
        
        $stmt->bindParam(':municipio', $_POST['municipio']);
        
        $stmt->bindParam(':estado', $_POST['estado']);
        
        $stmt->bindParam(':calle', $_POST['calle']);
        
        $stmt->bindParam(':colonia', $_POST['colonia']);
        
        $stmt->bindParam(':numExt', $_POST['numExt']);
        
        $stmt->bindParam(':telefono', $_POST['telefono']);
        
        $stmt->bindParam(':folioContrato', $_POST['folioContrato']);
        
        $stmt->bindParam(':fechaInicio', $_POST['fechaInicio']);
        
        $stmt->bindParam(':fechaFin', $_POST['fechaFin']);
        
        $stmt->bindParam(':fechaVenta', $_POST['fechaVenta']);
        
        $stmt->bindParam(':emailCliente', $_POST['emailCliente']);
        
        $stmt->bindParam(':fechaFinMarca', $_POST['fechaFinMarca']);
        
        $stmt->bindParam(':vendedor', $_POST['vendedor']);
        
        $stmt->bindParam(':idUser', $idUser);
        
        $stmt->bindParam(':valorVenta', $_POST['valorVenta']);
        
        $stmt->bindParam(':curpCliente', $_POST['curpCliente']);
        
        $stmt->bindParam(':estatusPoliza', $estatusPoliza);
        
        $stmt->bindParam(':motor', $_POST['motor']);
        
        $stmt->bindParam(':hp', $_POST['hp']);
        
        $stmt->bindParam(':idAgencia', $idAgencia);
        
        if ($stmt->execute()) {
            
            echo '<script language="javascript">alert("POLIZA GUARDADA");window.location.href="index.php"</script>';
        } else {
            
            echo '<script language="javascript">alert("Error de registro");window.location.href="index3.php"</script>';
        }
        ;
        
        
    }else if ($tipoAgencia== 3) {
        $sql = "INSERT INTO polizasemext (marca, submarca, color, kms, cc, fechaFacturaPrimordial, placa, vin, cilindors, combustible, kmsMantenimiento, mesesMantenimiento, yearFabricacion, nombreCliente, fechaNacimiento, rfc, codigoPostal, localidad, municipio, estado, calle, colonia, numExt, telefono, folioContrato, fechaInicio, fechaFin, fechaVenta, emailCliente, fechaFinMarca, vendedor, idUser, valorVenta, curpCliente, estatusPoliza, hp, idAgencia, motor ) VALUES (:marca, :submarca, :color, :kms, :cc,:fechaFacturaPrimordial, :placa, :vin, :cilindors, :combustible, :kmsMantenimiento, :mesesMantenimiento, :yearFabricacion, :nombreCliente, :fechaNacimiento, :rfc, :codigoPostal, :localidad, :municipio, :estado, :calle, :colonia, :numExt, :telefono, :folioContrato, :fechaInicio, :fechaFin, :fechaVenta, :emailCliente, :fechaFinMarca, :vendedor, :idUser, :valorVenta, :curpCliente, :estatusPoliza, :hp, :idAgencia, :motor )";
        
        $stmt = $conn->prepare($sql);
        
        $stmt->bindParam(':marca', $_POST['marca']);
        
        $stmt->bindParam(':submarca', $_POST['submarca']);
        
        $stmt->bindParam(':color', $_POST['color']);
        
        $stmt->bindParam(':kms', $_POST['kms']);
        
        $stmt->bindParam(':cc', $_POST['cc']);
        
        $stmt->bindParam(':fechaFacturaPrimordial', $_POST['fechaFacturaPrimordial']);
        
        $stmt->bindParam(':placa', $_POST['placa']);
        
        $stmt->bindParam(':vin', $_POST['vin']);
        
        $stmt->bindParam(':cilindors', $_POST['cilindors']);
        
        $stmt->bindParam(':combustible', $_POST['combustible']);
        
        $stmt->bindParam(':kmsMantenimiento', $_POST['kmsMantenimiento']);
        
        $stmt->bindParam(':mesesMantenimiento', $_POST['mesesMantenimiento']);
        
        $stmt->bindParam(':yearFabricacion', $_POST['yearFabricacion']);
        
        $stmt->bindParam(':nombreCliente', $_POST['nombreCliente']);
        
        $stmt->bindParam(':fechaNacimiento', $_POST['fechaNacimiento']);
        
        $stmt->bindParam(':rfc', $_POST['rfc']);
        
        $stmt->bindParam(':codigoPostal', $_POST['codigoPostal']);
        
        $stmt->bindParam(':localidad', $_POST['localidad']);
        
        $stmt->bindParam(':municipio', $_POST['municipio']);
        
        $stmt->bindParam(':estado', $_POST['estado']);
        
        $stmt->bindParam(':calle', $_POST['calle']);
        
        $stmt->bindParam(':colonia', $_POST['colonia']);
        
        $stmt->bindParam(':numExt', $_POST['numExt']);
        
        $stmt->bindParam(':telefono', $_POST['telefono']);
        
        $stmt->bindParam(':folioContrato', $_POST['folioContrato']);
        
        $stmt->bindParam(':fechaInicio', $_POST['fechaInicio']);
        
        $stmt->bindParam(':fechaFin', $_POST['fechaFin']);
        
        $stmt->bindParam(':fechaVenta', $_POST['fechaVenta']);
        
        $stmt->bindParam(':emailCliente', $_POST['emailCliente']);
        
        $stmt->bindParam(':fechaFinMarca', $_POST['fechaFinMarca']);
        
        $stmt->bindParam(':vendedor', $_POST['vendedor']);
        
        $stmt->bindParam(':idUser', $idUser);
        
        $stmt->bindParam(':valorVenta', $_POST['valorVenta']);
        
        $stmt->bindParam(':curpCliente', $_POST['curpCliente']);
        
        $stmt->bindParam(':estatusPoliza', $estatusPoliza);
        
        $stmt->bindParam(':motor', $_POST['motor']);
        
        $stmt->bindParam(':hp', $_POST['hp']);
        
        $stmt->bindParam(':idAgencia', $idAgencia);
        
        if ($stmt->execute()) {
            
            echo '<script language="javascript">alert("POLIZA GUARDADA");window.location.href="index.php"</script>';
        } else {
            
            echo '<script language="javascript">alert("Error de registro");window.location.href="index3.php"</script>';
        }
        ;
    }
}

?>
<?php if(!empty($user)): ?>

<body class="hold-transition sidebar-mini layout-fixed">
		
       <?php else: ?>
<!-- 	USUARIO NO LOGUEADO -->
logueado
<?php

    echo '<script>
       function alerta(){
           swal("SESION CERRADA", "En un momento te redireccionamos", "warning")
            window.location.href = "/polizas/login.php";
       }
       alerta();
       </script>';

    ?>
	
<?php endif?>
       


 <footer class="main-footer">
  $.widget.bridge('uibutton', $.ui.button)
</script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Guardar";
  } else {
    document.getElementById("nextBtn").innerHTML = "Siguiente";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
   y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>
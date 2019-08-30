
<?php

include "config.php";
$res = array("error" => false);

$action = "read";


if (isset($_GET["action"])) {
    $action = $_GET["action"];
}

if ($action == "read") {
    $result = $conn->query("SELECT * FROM `cargos`");
    $datos = array();
    while ($row = $result->fetch_assoc()) {
        array_push($datos, $row);
    }

    $res["datos"] = $datos;
}
// Create form

if ($action == "create") {

    $cargo= $_POST['cargo'];


    $result = $conn->query("INSERT INTO cargos(cargo) VALUES ('$cargo')");


    if ($result) {
        $res["message"] = "dato added successfully";
    } else {
        $res["error"] = true;
        $res["message"] = "dato not added successfully";
    }

    // $res["datos"] =$datos;
}
// end of create form
// update form

if ($action == "update") {
    $idCrg= $_POST['idCrg'];
 $cargo= $_POST['cargo'];


    $result = $conn->query("UPDATE cargos SET cargo ='$cargo' WHERE idCrg ='$idCrg' ");


    if ($result) {
        $res["message"] = "dato updated successfully";
    } else {
        $res["error"] = true;
        $res["error"] = "dato not updated successfully";
    }
}

// end of update form

if ($action == "delete") {
    $idCrg = $_POST['idCrg'];

    $result = $conn->query("DELETE FROM `cargos` WHERE idCrg ='$idCrg' ");

    if ($result) {
        $res["message"] = "dato deleted successfully";
    } else {
        $res["error"] = true;
        $res["message"] = "dato not deleted successfully";
    }
    // $res["datos"] =$datos;
}

$conn->close();
header("content-type:application/json");
echo json_encode($res);
die();
?>

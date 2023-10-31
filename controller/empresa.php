<?php
/* TODO:Cadena de Conexion */
require_once("../config/conexion.php");
/* TODO:Modelo Categoria */
require_once("../models/Empresa.php");
$empresa = new Empresa();

/*TODO: opciones del controlador Categoria*/
switch ($_GET["op"]) {
        /* TODO: Guardar y editar, guardar si el campo cat_id esta vacio */
    // case "guardaryeditar":
    //     /* TODO:Actualizar si el campo cat_id tiene informacion */
    //     if (empty($_POST["emp_id"])) {
    //         $empresa->insert_empresa($_POST["emp_nom"]);
    //     } else {
    //         $empresa->update_empresa($_POST["emp_id"], $_POST["emp_nom"]);
    //     }
    //     break;

        /* TODO: Listado de categoria segun formato json para el datatable */
    // case "listar":
    //     $datos = $empresa->get_empresa();
    //     $data = array();
    //     foreach ($datos as $row) {
    //         $sub_array = array();
    //         $sub_array[] = $row["emp_nom"];
    //         $sub_array[] = '<button type="button" onClick="editar(' . $row["emp_id"] . ');"  id="' . $row["emp_id"] . '" class="btn btn-inline btn-warning btn-sm ladda-button"><i class="fa fa-edit"></i></button>';
    //         $sub_array[] = '<button type="button" onClick="eliminar(' . $row["emp_id"] . ');"  id="' . $row["emp_id"] . '" class="btn btn-inline btn-danger btn-sm ladda-button"><i class="fa fa-trash"></i></button>';
    //         $data[] = $sub_array;
    //     }

    //     $results = array(
    //         "sEcho" => 1,
    //         "iTotalRecords" => count($data),
    //         "iTotalDisplayRecords" => count($data),
    //         "aaData" => $data
    //     );
    //     echo json_encode($results);
    //     break;

        /* TODO: Actualizar estado a 0 segun id de categoria */
    // case "eliminar":
    //     $empresa->delete_empresa($_POST["emp_id"]);
    //     break;

        /* TODO: Mostrar en formato JSON segun cat_id */
    // case "mostrar";
    //     $datos = $empresa->get_empresa_x_id($_POST["emp_id"]);
    //     if (is_array($datos) == true and count($datos) > 0) {
    //         foreach ($datos as $row) {
    //             $output["emp_id"] = $row["emp_id"];
    //             $output["emp_nom"] = $row["emp_nom"];
    //         }
    //         echo json_encode($output);
    //     }
    //     break;

        /* TODO: Formato para llenar combo en formato HTML */
    case "combo":
        $datos = $empresa->get_empresa();
        $html = "";
        $html .= "<option label='Seleccionar'></option>";
        if (is_array($datos) == true and count($datos) > 0) {
            foreach ($datos as $row) {
                $html .= "<option value='" . $row['emp_id'] . "'>" . $row['emp_nom'] . "</option>";
            }
            echo $html;
        }
        break;
}

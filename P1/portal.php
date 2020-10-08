<?php
    //view_form.php

/**
 * * DescripciÃ³n: Controlador principal
 * *
 * * DescripciÃ³n extensa: Iremos aÃ±adiendo cosas complejas en PHP.
 * *
 * * @author  Lola <dllido@uji.es> <fulanito@example.com>
 * * @copyright 2020 Lola
 * * @license http://www.fsf.org/licensing/licenses/gpl.txt GPL 2 or later
 * * @version 2

 * */
include(dirname(__FILE__)."/includes/pdo_postgres0.php");
$central = "";
include(dirname(__FILE__)."/partials/header.php");
include(dirname(__FILE__)."/partials/menu.php");

if (isset($_REQUEST['action'])) $action = $_REQUEST["action"];
else $action = "home";
$table="a_cliente";
switch ($action) {
    case "home":
        $central = "/holaMundo.php";
        break;
    case "login":
        $central = "/partials/login.php";
        break;
    case "registro":
         $central = "/partials/registerForm.php";
        break;
    case "listar":
        $query = "SELECT     * FROM       $table ";
        $rows=ejecutarSQL($query,NULL);
        if (is_array($rows)) {/* Creamos un listado como una tabla HTML*/
            print '<table><thead>';
            foreach ( array_keys($rows[0])as $key) {
                echo "<th>", $key,"</th>";
            }
            print "</thead>";
            foreach ($rows as $row) {
                print "<tr>";
                foreach ($row as $key => $val) {
                    echo "<td>", $val, "</td>";
                }
                print "</tr>";
            }
            print "</table>";
        }
        break;
    case "registrar":
        $datos = $_REQUEST;
        if (count($_REQUEST) < 7) {
            $data["error"] = "No has rellenado el formulario correctamente";
            return;
        }
                       
    $query="CREATE TABLE IF NOT EXISTS  $table (client_id SERIAL PRIMARY KEY, name CHAR(50) NOT NULL, surname CHAR(50) NOT NULL, address CHAR(50),city CHAR(50),zip_code CHAR(5),foto_file VARCHAR(25) );";
    $a=array($_REQUEST['client_id'], $_REQUEST['name'], $_REQUEST['surname'], $_REQUEST['address'], $_REQUEST['city'],  $_REQUEST['zip_code'],  $_REQUEST['foto_file'] );
    $query1 = "INSERT INTO  $table (client_id, name, surname, address, city, zip_code, foto_file )
    VALUES (?,?,?,?,?,?,?)";
    ejecutarSQL($query, NULL);
    ejecutarSQL($query1, $a);

        break;
    default:
        $data["error"] = "Accion No permitida";
        $central = "/holaMundo.php";
}
if ($central <> "") include(dirname(__FILE__).$central);
include(dirname(__FILE__)."/partials/footer.php");
?>
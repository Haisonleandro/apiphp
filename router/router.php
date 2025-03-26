<?php
require_once "../Agrosoft_php/controllers/ControllerFactory.php";

$request = explode('/', trim($_SERVER['REQUEST_URI'], '/'));
$resource = isset($request[1]) ? $request[1] : null; 
$id = isset($request[2]) ? (int)$request[2] : null;
$action = $_SERVER['REQUEST_METHOD'];

$controller = ControllerFactory::getController($resource);

if ($controller) {
    switch ($action) {
        case "GET":
            $id ? $controller->getPorId($id) : $controller->getTodos();
            break;
        case "POST":
            $data = json_decode(file_get_contents("php://input"), true);
            $controller->crear($data);
            break;
        case "PUT":
            if ($id) {
                $data = json_decode(file_get_contents("php://input"), true);
                $controller->actualizar($id, $data);
            } else {
                echo json_encode(["status" => 400, "message" => "ID requerido para actualizar"]);
            }
            break;
        case "DELETE":
            if ($id) {
                $controller->eliminar($id);
            } else {
                echo json_encode(["status" => 400, "message" => "ID requerido para eliminar"]);
            }
            break;
        default:
            echo json_encode(["status" => 405, "message" => "Método no permitido"]);
    }
} else {
    echo json_encode(["status" => 404, "message" => "Recurso no encontrado"]);
}
?>

<?php
require_once "./controllers/Cultivo/tipoPlagaController.php";
require_once "./controllers/Cultivo/tipoResiduoController.php";
require_once "./controllers/Cultivo/tipoEspecieController.php";
require_once "./controllers/Cultivo/tipoControlController.php";
require_once "./controllers/Cultivo/tipoActividadController.php";
require_once "./controllers/Cultivo/actividadController.php";

require_once "./controllers/Cultivo/residuoController.php";
require_once "./controllers/Cultivo/programacionController.php";
require_once "./controllers/Cultivo/productosControlController.php";
require_once "./controllers/Cultivo/plantacionController.php";
require_once "./controllers/Cultivo/plagaController.php";
require_once "./controllers/Cultivo/loteController.php";
require_once "./controllers/Cultivo/faseLunarController.php";
require_once "./controllers/Cultivo/especieController.php";
require_once "./controllers/Cultivo/cultivoController.php";
require_once "./controllers/Cultivo/cosechasController.php";
require_once "./controllers/Cultivo/controlController.php";
require_once "./controllers/Cultivo/bancalController.php";
require_once "./controllers/Cultivo/afeccionesController.php";

require_once "./controllers/Inventario/InsumoController.php";
require_once "./controllers/Inventario/herramientaController.php";
require_once "./controllers/Inventario/InventarioController.php";
require_once "./controllers/Inventario/semilleroController.php";

require_once "./controllers/IoT/datosMeteorologicosController.php";
require_once "./controllers/IoT/sensorBancalController.php";
require_once "./controllers/IoT/sensoresController.php";

require_once "./controllers/Finanzas/salarioMinimoController.php";
require_once "./controllers/Finanzas/ventaController.php";

require_once "./controllers/Usuarios/RolController.php";
require_once "./controllers/Usuarios/usuarioController.php";

class ControllerFactory {
    public static function getController($resource) {
        switch ($resource) {
            case "actividad":
                return new ActividadController();
            case "tipo_plaga":
                return new TipoPlagaController();
            case "tipos_residuo":
                return new TipoResiduoController();
            case "tipo_especie":
                return new TipoEspecieController();
            case "tipo_control":
                return new TipoControlController();
            case "tipo_actividad":
                return new TipoActividadController();
            case "residuo":
                return new ResiduoController();
            case "programacion":
                return new ProgramacionController();
            case "productos_control":
                return new ProductoControlController();
            case "plantacion":
                return new PlantacionController();
            case "plaga":
                return new PlagaController();
            case "lote":
                return new LoteController();
            case "fase_lunar":
                return new FaseLunarController();
            case "especie":
                return new EspecieController();
            case "cultivo":
                return new CultivoController();
            case "cosechas":
                return new CosechasController();
            case "control":
                return new ControlController();
            case "bancal":
                return new BancalController();
            case "afecciones":
                return new AfeccionesController();

            case "insumo":
                return new InsumoController();
            case "herramienta":
                return new HerramientaController();
            case "inventario":
                return new BodegaController();
            case "semillero":
                return new SemilleroController();

            case "datos_meteorologicos":
                return new DatosMeteorologicosController();
            case "sensor_bancal":
                return new SensorBancalController();
            case "sensores":
                return new SensorController();

            case "salario":
                return new SalarioMinimoController();
            case "venta":
                return new VentaController();

            case "rol":
                return new RolesController();
            case "usuario":
                return new UsuarioController();

            default:
                return null;
        }
    }
}
?>

# Prueba-Technica--Konecta-
desaroLlo de la prueba tenica para Konecta

LARAVEL 9
MYSQL

nombre de base de datos storekonecta
usuario root
contraseña 

consulta para el producto con mas ventas:

$maxValue = productos::max('Ventas');
$producto = productos::where('Ventas',$maxValue)->first();

consulta para producto con mas stock:

$maxValue = productos::max('Stock');
$producto = productos::where('Stock',$maxValue)->first();

# facturacion README
## Configuración de empresas
### En config/empresas.php
#### En constructor 
$empresa99 = array(
    'nombre_empresa'=>'prueba SA de CV',
    'nombre_base_datos'=>'facturacion_prueba',
    'user'=>'pruebas',
    'pass'=>'pruebas',
    'host'=>'pruebas'); 
    
$this->empresas = array('1'=>$empresa1, '99'=>$empresa99);    
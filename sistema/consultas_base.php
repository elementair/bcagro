<?php
class consultas_base{
    public $link;


    public $pattern_rfc = "([A-Za-z]{3}|[A-Za-z]{4})[0-9][0-9](0[1-9]|1[0-2])((0[1-9])|([1-2][0-9])|3[0-1])[A-Za-z0-9]{3}";
    public $pattern_cp = "[0-9]{5}";


    public $accion_columnas = array('seccion_menu'=>'accion', 'menu'=>'seccion_menu',
        'accion'=>false);
    public $grupo_columnas = array('grupo'=>false);
    public $seccion_menu_columnas = array('seccion_menu'=>false, 'menu'=>'seccion_menu');
    public $estado_columnas = array('estado'=>false, 'pais'=>'estado');
    public $menu_columnas = array('menu'=>false);
    public $usuario_columnas = array('usuario'=>false,'grupo'=>'usuario');
    public $accion_grupo_columnas = array('accion_grupo'=>false,'accion'=>'accion_grupo',
        'grupo'=>'accion_grupo','seccion_menu'=>'accion','menu'=>'seccion_menu');
    public $elemento_lista_columnas = array('elemento_lista'=>false,'seccion_menu'=>'elemento_lista',
        'menu'=>'seccion_menu');
    public $grupo_producto_columnas = array('grupo_producto'=>false);

    public $video_index_columnas = array('video_index'=>false);
    public $sub_producto_columnas = array('sub_producto'=>false,'grupo_producto'=>'sub_producto');
    public $fondo_index_columnas = array('fondo_index'=>false);
    public $ases_campo_columnas = array('ases_campo'=>false);
    public $alianzas_comerciales_columnas = array('alianzas_comerciales'=>false);
    public $nuestros_clientes_columnas = array('nuestros_clientes'=>false);
    public $quienes_somos_columnas = array('quienes_somos'=>false);
    public $producto_encabezado_columnas = array('producto_encabezado'=>false);
    public $nosotros_tema_columnas = array('nosotros_tema'=>false);
    public $cliente_columnas = array('cliente'=>false);

    public $alianza_columnas = array('alianza'=>false);
    public $nosotros_columnas = array('nosotros'=>false);
    public $contacto_columnas = array('contacto'=>false);

    public $producto_columnas = array('producto'=>false, "sub_producto"=>"producto",'grupo_producto'=>'sub_producto');
    public $imagen_producto_columnas = array('imagen_producto'=>false, "producto"=>"imagen_producto");

    public $ficha_tecnica_producto_columnas = array('ficha_tecnica_producto'=>false, "producto"=>"ficha_tecnica_producto");

    public $estructura_bd;

    public function __construct(){


        $this->estructura_bd['accion']['columnas_select'] = $this->accion_columnas;
        $this->estructura_bd['accion']['where_filtro_or'] = true;
        $this->estructura_bd['accion']['genera_or_descripcion'] = array('seccion_menu','menu');
        $this->estructura_bd['accion']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'seccion_menu_id'=>array(
                'tipo'=>'select','cols'=>6,'requerido'=>'required',
                'tabla_foranea'=>'seccion_menu','vista'=>array('alta','modifica')),
            'icono'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'visible'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));



        $this->estructura_bd['sub_producto']['columnas_select'] = $this->sub_producto_columnas;
        $this->estructura_bd['sub_producto']['where_filtro_or'] = true;
        $this->estructura_bd['sub_producto']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'grupo_producto_id'=>array(
                'tipo'=>'select','cols'=>6,'requerido'=>'required',
                'tabla_foranea'=>'grupo_producto','vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));


        $this->estructura_bd['video_index']['columnas_select'] = $this->video_index_columnas;
        $this->estructura_bd['video_index']['where_filtro_or'] = true;
        $this->estructura_bd['video_index']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));



        $this->estructura_bd['nosotros']['columnas_select'] = $this->nosotros_columnas;
        $this->estructura_bd['nosotros']['where_filtro_or'] = true;
        $this->estructura_bd['nosotros']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'imagen_izquierda'=>array('tipo'=>'archivo','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'imagen_derecha'=>array('tipo'=>'archivo','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));


        $this->estructura_bd['grupo_producto']['columnas_select'] = $this->grupo_producto_columnas;
        $this->estructura_bd['grupo_producto']['where_filtro_or'] = true;
        $this->estructura_bd['grupo_producto']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));



        $this->estructura_bd['nosotros_tema']['columnas_select'] = $this->nosotros_tema_columnas;
        $this->estructura_bd['nosotros_tema']['where_filtro_or'] = true;
        $this->estructura_bd['nosotros_tema']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));


        $this->estructura_bd['fondo_index']['columnas_select'] = $this->fondo_index_columnas;
        $this->estructura_bd['fondo_index']['where_filtro_or'] = true;
        $this->estructura_bd['fondo_index']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));


        $this->estructura_bd['ases_campo']['columnas_select'] = $this->ases_campo_columnas;
        $this->estructura_bd['ases_campo']['where_filtro_or'] = true;
        $this->estructura_bd['ases_campo']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
             'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')));



        $this->estructura_bd['alianzas_comerciales']['columnas_select'] = $this->alianzas_comerciales_columnas;
        $this->estructura_bd['alianzas_comerciales']['where_filtro_or'] = true;
        $this->estructura_bd['alianzas_comerciales']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
             'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')));


        $this->estructura_bd['nuestros_clientes']['columnas_select'] = $this->nuestros_clientes_columnas;
        $this->estructura_bd['nuestros_clientes']['where_filtro_or'] = true;
        $this->estructura_bd['nuestros_clientes']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
             'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')));


        $this->estructura_bd['producto_encabezado']['columnas_select'] = $this->producto_encabezado_columnas;
        $this->estructura_bd['producto_encabezado']['where_filtro_or'] = true;
        $this->estructura_bd['producto_encabezado']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
             'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')));

        $this->estructura_bd['contacto']['columnas_select'] = $this->contacto_columnas;
        $this->estructura_bd['contacto']['where_filtro_or'] = true;
        $this->estructura_bd['contacto']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')));


        $this->estructura_bd['quienes_somos']['columnas_select'] = $this->quienes_somos_columnas;
        $this->estructura_bd['quienes_somos']['where_filtro_or'] = true;
        $this->estructura_bd['quienes_somos']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
             'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));



        $this->estructura_bd['cliente']['columnas_select'] = $this->cliente_columnas;
        $this->estructura_bd['cliente']['where_filtro_or'] = true;
        $this->estructura_bd['cliente']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));




        $this->estructura_bd['alianza']['columnas_select'] = $this->alianza_columnas;
        $this->estructura_bd['alianza']['where_filtro_or'] = true;
        $this->estructura_bd['alianza']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));




        $this->estructura_bd['elemento_lista']['columnas_select'] = $this->elemento_lista_columnas;
        $this->estructura_bd['elemento_lista']['where_filtro_or'] = true;
        $this->estructura_bd['elemento_lista']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'seccion_menu_id'=>array(
                'tipo'=>'select','cols'=>6,'requerido'=>'required',
                'tabla_foranea'=>'seccion_menu','vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));



        $this->estructura_bd['grupo']['columnas_select'] = $this->grupo_columnas;
        $this->estructura_bd['grupo']['where_filtro_or'] = true;
        $this->estructura_bd['grupo']['campos'] = array(
            'descripcion'=>array(
                'tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,
                'vista'=>array('alta','modifica')));

        $this->estructura_bd['seccion_menu']['columnas_select'] = $this->seccion_menu_columnas;
        $this->estructura_bd['seccion_menu']['where_filtro_or'] = true;
        $this->estructura_bd['seccion_menu']['genera_or_descripcion'] = array('menu');
        $this->estructura_bd['seccion_menu']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'menu_id'=>array(
                'tipo'=>'select','cols'=>6,'requerido'=>'required',
                'tabla_foranea'=>'menu','vista'=>array('alta','modifica')),
            'icono'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));


        $this->estructura_bd['menu']['columnas_select'] = $this->menu_columnas;
        $this->estructura_bd['menu']['where_filtro_or'] = true;
        $this->estructura_bd['menu']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'icono'=>array('tipo'=>'text','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')));



        $this->estructura_bd['usuario']['columnas_select'] = $this->usuario_columnas;
        $this->estructura_bd['usuario']['genera_or_descripcion'] = array('grupo');
        $this->estructura_bd['usuario']['genera_where_base'] = 'user';
        $this->estructura_bd['usuario']['genera_or_like'] = array('email');
        $this->estructura_bd['usuario']['campos'] = array(
            'user'=>array('tipo'=>'text','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'password'=>array('tipo'=>'password','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'email'=>array('tipo'=>'email','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'grupo_id'=>array(
                'tipo'=>'select','cols'=>6,'requerido'=>'required',
                'tabla_foranea'=>'grupo','vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')));


        $this->estructura_bd['producto']['columnas_select'] = $this->producto_columnas;
        $this->estructura_bd['producto']['where_filtro_or'] = true;
        $this->estructura_bd['producto']['genera_or_descripcion'] = array('menu');
        $this->estructura_bd['producto']['campos'] = array(
            'nombre'=>array('tipo'=>'text', 'cols'=>6, 'vista'=>array('alta','modifica')),
            'descripcion'=>array('tipo'=>'text','cols'=>6,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'sub_producto_id'=>array(
                'tipo'=>'select','cols'=>6,'requerido'=>'required',
                'tabla_foranea'=>'sub_producto','vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'caracteristicas'=>array('tipo'=>'editor_texto', 'cols'=>12, 'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo', 'cols'=>12, 'requerido'=>'required', 'vista'=>array('alta', 'modifica'))
            );


        $this->estructura_bd['imagen_producto']['columnas_select'] = $this->imagen_producto_columnas;
        $this->estructura_bd['imagen_producto']['where_filtro_or'] = true;
        $this->estructura_bd['imagen_producto']['genera_or_descripcion'] = array('menu');
        $this->estructura_bd['imagen_producto']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'producto_id'=>array(
                'tipo'=>'select','cols'=>12,'requerido'=>'required',
                'tabla_foranea'=>'producto','vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')),
            );


        $this->estructura_bd['ficha_tecnica_producto']['columnas_select'] = $this->ficha_tecnica_producto_columnas;
        $this->estructura_bd['ficha_tecnica_producto']['where_filtro_or'] = true;
        $this->estructura_bd['ficha_tecnica_producto']['genera_or_descripcion'] = array('menu');
        $this->estructura_bd['ficha_tecnica_producto']['campos'] = array(
            'descripcion'=>array('tipo'=>'text','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'archivo'=>array('tipo'=>'archivo','cols'=>12,'requerido'=>'required',
                'vista'=>array('alta','modifica')),
            'producto_id'=>array(
                'tipo'=>'select','cols'=>12,'requerido'=>'required',
                'tabla_foranea'=>'producto','vista'=>array('alta','modifica')),
            'status'=>array('tipo'=>'checkbox','cols'=>6,'vista'=>array('alta','modifica')),
            'observaciones'=>array('tipo'=>'textarea','cols'=>12,'vista'=>array('alta','modifica')),
            );


        $this->estructura_bd['accion_grupo']['columnas_select'] = $this->accion_grupo_columnas;

    }

    public function subconsultas($tabla){
        $consulta = False;

        if($tabla == 'moneda'){
            $hoy = date('Y-m-d');
            $consulta = "
                          (SELECT 
                            tipo_cambio.monto 
                          FROM 
                            tipo_cambio 
                          WHERE 
                            tipo_cambio.moneda_id = moneda.id 
                          AND tipo_cambio.fecha = '$hoy' ) AS tipo_cambio_hoy";
        }
        return $consulta;

    }


    private function genera_join($tabla, $tabla_enlace, $renombrada,$obligatorio){
        if($obligatorio){
            $join = 'INNER';
        }
        else{
            $join = 'LEFT';
        }
        if($renombrada){
            $sql = ' '.$join.' JOIN '.$tabla.' AS '.$renombrada.' ON '.$renombrada.'.id = '.$tabla_enlace.'.'.$renombrada.'_id';
        }
        else {
            $sql = ' '.$join.' JOIN ' . $tabla . ' AS ' . $tabla . ' ON ' . $tabla . '.id = ' . $tabla_enlace . '.' . $tabla . '_id';
        }
        return $sql;
    }
    public function obten_tablas_completas($tabla){

        $tablas = $tabla.' AS '.$tabla;
        $tablas_join = $this->estructura_bd[$tabla]['columnas_select'];

        foreach ($tablas_join as $key=>$tabla_join){
            if(is_array($tabla_join)){
                $tabla_base = $tabla_join['tabla_base'];
                $tabla_enlace = $tabla_join['tabla_enlace'];
                $tabla_renombre = $tabla_join['tabla_renombrada'];
                $obligatorio = $tabla_join['obligatorio'];
                $tablas = $tablas . $this->genera_join($tabla_base, $tabla_enlace,$tabla_renombre,$obligatorio);
            }
            else {
                if ($tabla_join) {
                    $tablas = $tablas . $this->genera_join($key, $tabla_join,false,true);
                }
            }
        }
        return $tablas;
    }
    private function genera_or_like($tabla, $campo, $valor){
        $sql = " OR $tabla.$campo LIKE '%$valor%'  ";
        return $sql;
    }
    private function  genera_where_base($tabla, $campo, $valor){

        $sql = " WHERE $tabla.$campo LIKE '%$valor%'  ";
        return $sql;
    }
    private function where_filtro_or($tabla,$valor){
        $sql = $this->genera_where_base($tabla,'descripcion',$valor);
        $sql = $sql.$this->genera_or_like($tabla, 'observaciones', $valor);
        return $sql;
    }
    private function genera_or_descripcion($tablas, $valor){
        $sql = '';
        foreach ($tablas as $tabla){
            $sql = $sql.$this->genera_or_like($tabla, 'descripcion', $valor);
        }
        return $sql;
    }

    public function genera_filtro_base($tabla, $valor){
        $valor = strtoupper($valor);
        $where = '';

        if(isset($this->estructura_bd[$tabla]['genera_where_base'])){
            $campo_base = $this->estructura_bd[$tabla]['genera_where_base'];
            $where = $where.$this->genera_where_base($tabla,$campo_base,$valor);
        }

        if(isset($this->estructura_bd[$tabla]['where_filtro_or'])) {
            if ($this->estructura_bd[$tabla]['where_filtro_or']) {
                $where = $where . $this->where_filtro_or($tabla, $valor);
            }
        }

        if(isset($this->estructura_bd[$tabla]['genera_or_descripcion'])) {
            if (is_array($this->estructura_bd[$tabla]['genera_or_descripcion'])) {
                $tablas_descripcion = $this->estructura_bd[$tabla]['genera_or_descripcion'];
                $where = $where . $this->genera_or_descripcion($tablas_descripcion, $valor);
            }
        }

        if(isset($this->estructura_bd[$tabla]['genera_or_like'])) {
            if (is_array($this->estructura_bd[$tabla]['genera_or_like'])) {
                $campos_like = $this->estructura_bd[$tabla]['genera_or_like'];
                foreach ($campos_like as $campo) {
                    $where = $where . $this->genera_or_like($tabla, $campo, $valor);
                }
            }
        }

        if(isset($this->estructura_bd[$tabla]['genera_filtro_especial'])) {
            if (is_array($this->estructura_bd[$tabla]['genera_filtro_especial'])) {
                $campos_like = $this->estructura_bd[$tabla]['genera_filtro_especial'];
                foreach ($campos_like as $tabla=>$campos) {
                    foreach ($campos as $campo) {
                        $where = $where . $this->genera_or_like($tabla, $campo, $valor);
                    }
                }
            }
        }

        return $where;
    }


}
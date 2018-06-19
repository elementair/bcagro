<?php echo $directiva->encabezado_form_alta($seccion, 'alta_bd'); ?>
<?php echo $controlador->breadcrumbs; ?>
<div class="col-md-8 col-md-offset-2 alta">
    <?php
    echo $directiva->genera_input_text('descripcion',12,false,
        'required',false,false,false,false);
    ?>

    <?php
    echo $directiva->input_video('',6,'archivo');
    echo $directiva->textarea('',12,'observaciones');
    echo $directiva->checkbox(false,12,'status');
    echo $directiva->btn_enviar(12,'Guardar');
    ?>
</div>
</form>
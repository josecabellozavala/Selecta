<html>
	<head>
		<script src="./Agregar.js"></script>
	</head>
	<body>
		<div class="contenedor_dialogo_publicacion mostrar_cabecera curso_formulario"><!--publication-dialog-container show-header-->
			<div class="contenedor_dialogo agregar_contenido_diaglogo_js"><!--dialog-content js-add-pub-dialog-content--->
				<div class="arreglar_limpiar contenedor_js"><!--clearfix js-widgetcontainer-->
					<form class="form_horizontal form_accion_submit form_curso"><!--form-horizontal action-form-submit--->
						<input type="hidden" value="curso_nuevo" name="opcion">
						<input type="hidden" name="id_programa" id="id_programa">
						<input type="hidden" name="servicio_curso" id="servicio">
						<div class="contenedor_js"><!--js-widgetcontainer-->
							<div class="control_grupo" id="nombre_div"><!--control-grupo-->
								<label class="label_control" id="nombre_l">Nombre *</label>
								<div class="controles"><!--controls-->
									<input type="textbox" id="nombre" style="width: 620px;" class="texto" name="nombre">
								</div>
							</div>
							<div class="control_grupo"><!--control-grupo-->
								<label class="label_control">Objetivos</label>
								<div class="controles"><!--controls-->
									<textarea id="objetivos" class="texto" name="objetivos" style="width: 620px; height: 82px;"></textarea><!--journal-ac text error-highlight-article[journal] error-article[journal] ac-ajax-loadindoff yui3-aclist-->
								</div>
							</div>
						</div>
						<div class="barra_footer"><!--footer-bar-->
							<input type="submit" value="Continuar" class="boton boton_promover submit_boton_accion agrandar rf"><!---btn btn-promote action-submit-button-->
							<div class="limpiar"></div><!--clear-->
						</div>
					</form>
				</div>
			</div>
		</div>
		
		<div class="mensaje" style="padding: 50px 110px;"><!--or-text--></div>
		
	</body>
</html>

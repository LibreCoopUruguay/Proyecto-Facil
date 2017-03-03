<?php
function facil_coop_UsuariosXRubro ($rubroTid) {
  $query = "SELECT entity_id FROM {field_data_field_rubro} r ".
              "WHERE r.bundle = 'user' AND r.field_rubro_tid = '$rubroTid' ";
$result = db_query($query)->fetchAll();
return $result;

}
function facil_coop_form_alter(&$form, &$form_state, $form_id) {
	if($form_id == 'profile2_edit_economia_form'){
		// Validación del perfil económico 
//		$importancia_ingresos = $form['#matrix-result-field_imp_activ_total_ingresos-4-2'];
//		if ($importancia_ingresos) != '100') {
//			form_set_error('title', 'El total del porcentaje tiene que ser 100%');
//		}
		if (module_exists('devel')) {
			dprint_r($_SESSION);
		}

	}
}

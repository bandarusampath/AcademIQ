<?php
defined( 'ABSPATH' ) || die();

require_once WLSM_PLUGIN_DIR_PATH . 'admin/inc/school/global.php';

$action = '';
if ( isset( $_GET['action'] ) && ! empty( $_GET['action'] ) ) {
	$action = sanitize_text_field( $_GET['action'] );
}

$exam_id = '';
if ( isset( $_GET['exam_id'] ) && ! empty( $_GET['exam_id'] ) ) {
	$exam_id = absint( $_GET['exam_id'] );
}
?>
<div class="wlsm container-fluid">
	<?php
	$disallow_session_change = true;

	require_once WLSM_PLUGIN_DIR_PATH . 'admin/inc/school/staff/partials/header.php';

	if ( 'generate_admit_cards' === $action && $exam_id ) {
		require_once WLSM_PLUGIN_DIR_PATH . 'admin/inc/school/staff/examination/admit-cards/generate_admit_cards.php';
	} elseif ( 'admit_cards' === $action && $exam_id ) {
		require_once WLSM_PLUGIN_DIR_PATH . 'admin/inc/school/staff/examination/admit-cards/admit_cards.php';
	} else {
		require_once WLSM_PLUGIN_DIR_PATH . 'admin/inc/school/staff/examination/admit-cards/index.php';
	}
	?>
</div>

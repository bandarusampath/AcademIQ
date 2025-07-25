<?php
defined( 'ABSPATH' ) || die();

require_once WLSM_PLUGIN_DIR_PATH . 'includes/helpers/staff/WLSM_M_Staff_General.php';
require_once WLSM_PLUGIN_DIR_PATH . 'includes/helpers/WLSM_M_Role.php';

$school_id = $current_school['id'];

$page_url = WLSM_M_Staff_General::get_admins_page_url();
$role     = WLSM_M_Role::get_admin_key();

$table_heading = esc_html__( 'Admins', 'school-management' );

require_once WLSM_PLUGIN_DIR_PATH . 'admin/inc/school/staff/partials/staff_records.php';

<?php
defined( 'ABSPATH' ) || die();

require_once WLSM_PLUGIN_DIR_PATH . 'includes/helpers/staff/WLSM_M_Staff_Examination.php';

$page_url = WLSM_M_Staff_Examination::get_exams_page_url();
?>

<div class="row">
	<div class="col-md-12">
		<div class="text-center wlsm-section-heading-block">
			<span class="wlsm-section-heading">
				<i class="fas fa-clock"></i>
				<?php esc_html_e( 'Manage Exams', 'school-management' ); ?>
			</span>
			<span class="float-md-right">
				<a href="<?php echo esc_url( $page_url . '&action=save' ); ?>" class="btn btn-sm btn-outline-light">
					<i class="fas fa-plus-square"></i>&nbsp;
					<?php echo esc_html( 'Add New Exam', 'school-management' ); ?>
				</a>
			</span>
		</div>
		<div class="wlsm-table-block">
			<table class="table table-hover table-bordered" id="wlsm-exams-table">
				<thead>
					<tr class="text-white bg-primary">
						<th scope="col"><?php esc_html_e( 'Exam Title', 'school-management' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Class', 'school-management' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Exam Center', 'school-management' ); ?></th>
						<th scope="col" class="text-nowrap"><?php esc_html_e( 'Start Date', 'school-management' ); ?></th>
						<th scope="col" class="text-nowrap"><?php esc_html_e( 'End Date', 'school-management' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Time Table', 'school-management' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Admit Cards', 'school-management' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Exam Results', 'school-management' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Status', 'school-management' ); ?></th>
						<th scope="col" class="text-nowrap"><?php esc_html_e( 'Action', 'school-management' ); ?></th>
					</tr>
				</thead>
			</table>
		</div>
	</div>
</div>

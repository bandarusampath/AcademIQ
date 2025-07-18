<?php
defined( 'ABSPATH' ) || die();

$school_id = $current_school['id'];

$classes = WLSM_M_Staff_Class::fetch_classes( $school_id );
global $wpdb;
$exams = $wpdb->get_results(WLSM_M_Staff_Examination::fetch_exam_query( $school_id ));
?>
<div class="row">
	<div class="col-md-12">
		<div class="mt-2 text-center wlsm-section-heading-block">
			<span class="wlsm-section-heading">
				<i class="fas fa-id-card"></i>
				<?php esc_html_e( 'Print Admin Cards in Bulk', 'school-management' ); ?>
			</span>
		</div>
		<div class="wlsm-students-block wlsm-form-section">
			<div class="row">
				<div class="col-md-12">
					<form action="<?php echo esc_url( admin_url( 'admin-ajax.php' ) ); ?>" method="post" id="wlsm-print-bulk-admit-cards-form" class="mb-3">
						<?php
						$nonce_action = 'print-admit-cards';
						?>
						<?php $nonce = wp_create_nonce( $nonce_action ); ?>
						<input type="hidden" name="<?php echo esc_attr( $nonce_action ); ?>" value="<?php echo esc_attr( $nonce ); ?>">

						<input type="hidden" name="action" value="wlsm-print-bulk-admit-cards">

						<div class="pt-2">
							<div class="row">
								<div class="col-md-8 mb-1">
									<div class="h6">
										<span class="text-secondary border-bottom">
										<?php esc_html_e( 'Search Students By Class', 'school-management' ); ?>
										</span>
									</div>
								</div>
							</div>
							<div class="form-row">
								<div class="form-group col-md-4">
									<label for="wlsm_class" class="wlsm-font-bold">
										<?php esc_html_e( 'Class', 'school-management' ); ?>:
									</label>
									<select name="class_id" class="form-control selectpicker" data-nonce="<?php echo esc_attr( wp_create_nonce( 'get-class-sections' ) ); ?>" id="wlsm_class" data-live-search="true">
										<option value=""><?php esc_html_e( 'Select Class', 'school-management' ); ?></option>
										<?php foreach ( $classes as $class ) { ?>
										<option value="<?php echo esc_attr( $class->ID ); ?>">
											<?php echo esc_html( WLSM_M_Class::get_label_text( $class->label ) ); ?>
										</option>
										<?php } ?>
									</select>
								</div>
								<div class="form-group col-md-4">
									<label for="wlsm_section" class="wlsm-font-bold">
										<?php esc_html_e( 'Section', 'school-management' ); ?>:
									</label>
									<select name="section_id" class="form-control selectpicker" id="wlsm_section" data-live-search="true" title="<?php esc_attr_e( 'All Sections', 'school-management' ); ?>" data-all-sections="1">
									</select>
								</div>
								<div class="form-group col-md-4">
									<label for="wlsm_exam" class="wlsm-font-bold">
										<?php esc_html_e( 'Exams', 'school-management' ); ?>:
									</label>
									<select name="exam" class="form-control selectpicker" id="wlsm_exam">
									<option value=""><?php esc_html_e( 'Select exam', 'school-management' ); ?></option>
										<?php foreach ( $exams as $exam ) { ?>
										<option value="<?php echo esc_attr( $exam->ID ); ?>">
											<?php echo esc_html( WLSM_M_Class::get_label_text( $exam->exam_title ) ); ?>
										</option>
										<?php } ?>
									</select>
								</div>
							</div>
						</div>

						<div class="form-row">
							<div class="col-md-12">
								<button type="submit" class="btn btn-sm btn-outline-primary" id="wlsm-print-bulk-admit-cards-btn">
									<i class="fas fa-print"></i>&nbsp;
									<?php esc_html_e( 'Print Admin Cards', 'school-management' ); ?>
								</button>
							</div>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

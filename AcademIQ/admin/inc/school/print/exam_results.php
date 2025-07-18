<?php
defined( 'ABSPATH' ) || die();

require_once WLSM_PLUGIN_DIR_PATH . 'includes/helpers/WLSM_M_Setting.php';

if ( isset( $from_front ) ) {
	$print_button_classes = 'button btn-sm btn-success';
} else {
	$print_button_classes = 'btn btn-sm btn-success';
}

$grade_criteria = WLSM_Config::sanitize_grade_criteria( $exam->grade_criteria );

$enable_overall_grade = $grade_criteria['enable_overall_grade'];
$marks_grades         = $grade_criteria['marks_grades'];

$settings_dashboard                     = WLSM_M_Setting::get_settings_dashboard($school_id);
$school_enrollment_number = $settings_dashboard['school_enrollment_number'];
$school_admission_number  = $settings_dashboard['school_admission_number'];
?>

<!-- Print exam results. -->
<div class="wlsm-container d-flex mb-2">
	<div class="col-md-12 wlsm-text-center">
		<br>
		<button type="button" class="<?php echo esc_attr( $print_button_classes ); ?>" id="wlsm-print-exam-results-btn" data-styles='["<?php echo esc_url( WLSM_PLUGIN_URL . 'assets/css/bootstrap.min.css' ); ?>","<?php echo esc_url( WLSM_PLUGIN_URL . 'assets/css/wlsm-school-header.css' ); ?>","<?php echo esc_url( WLSM_PLUGIN_URL . 'assets/css/print/wlsm-exam-results.css' ); ?>"]' data-title="<?php
		printf(
			wp_kses(
				/* translators: 1: exam title, 2: start date, 3: end date */
				__( 'Exam: %1$s (%2$s - %3$s)', 'school-management' ),
				array(
					'span' => array( 'class' => array() )
				)
			),
			esc_html( WLSM_M_Staff_Examination::get_exam_label_text( $exam_title ) ),
			esc_html( WLSM_Config::get_date_text( $start_date ) ),
			esc_html( WLSM_Config::get_date_text( $end_date ) ) );
		?>"><?php esc_html_e( 'Print Exam Results', 'school-management' ); ?>
		</button>
	</div>
</div>

<!-- Print exam results section. -->
<div class="wlsm-container wlsm" id="wlsm-print-exam-results">
	<div class="wlsm-print-exam-results-container">

		<?php require_once WLSM_PLUGIN_DIR_PATH . 'admin/inc/school/print/partials/school_header.php'; ?>

		<div class="wlsm-heading wlsm-exam-results-heading h5 wlsm-text-center">
		<div class="wlsm-exam-results-table-heading">
					<?php
					printf(
						wp_kses(
							/* translators: 1: exam title, 2: start date, 3: end date */
							__( '<span class="wlsm-font-bold">Exam: </span> %1$s (%2$s - %3$s)', 'school-management' ),
							array(
								'span' => array( 'class' => array() )
							)
						),
						esc_html( WLSM_M_Staff_Examination::get_exam_label_text( $exam_title ) ),
						esc_html( WLSM_Config::get_date_text( $start_date ) ),
						esc_html( WLSM_Config::get_date_text( $end_date ) )
					);
					?>
				</div>
		</div>

		<div class="row wlsm-student-details">
			<div class="col-md-12">
				<ul class="wlsm-list-group">
					<li>
						<span class="wlsm-font-bold"><?php esc_html_e( 'Student Name', 'school-management' ); ?>:</span>
						<span><?php echo esc_html( WLSM_M_Staff_Class::get_name_text( $admit_card->name ) ); ?></span>
					</li>
					<?php if ($school_enrollment_number): ?>
						<li>
							<span class="wlsm-font-bold"><?php esc_html_e( 'Enrollment Number', 'school-management' ); ?>:</span>
							<span><?php echo esc_html( WLSM_M_Staff_Class::get_roll_no_text( $admit_card->enrollment_number ) ); ?></span>
						</li>
					<?php endif ?>
					<?php if ($school_admission_number): ?>
						<li>
							<span class="wlsm-font-bold"><?php esc_html_e( 'Admission Number', 'school-management' ); ?>:</span>
							<span><?php echo esc_html( WLSM_M_Staff_Class::get_roll_no_text( $admit_card->admission_number ) ); ?></span>
						</li>
					<?php endif ?>
					<li>
						<span class="wlsm-font-bold"><?php esc_html_e( 'Session', 'school-management' ); ?>:</span>
						<span><?php echo esc_html( WLSM_M_Session::get_label_text( $admit_card->session_label ) ); ?></span>
					</li>
					<li>
						<span class="wlsm-pr-3 pr-3">
							<span class="wlsm-font-bold"><?php esc_html_e( 'Class', 'school-management' ); ?>:</span>
							<span><?php echo esc_html( WLSM_M_Class::get_label_text( $admit_card->class_label ) ); ?></span>
						</span>
						<span class="wlsm-pl-3 pl-3">
							<span class="wlsm-font-bold"><?php esc_html_e( 'Section', 'school-management' ); ?>:</span>
							<span><?php echo esc_html( WLSM_M_Class::get_label_text( $admit_card->section_label ) ); ?></span>
						</span>
					</li>
					<li>
						<span class="wlsm-font-bold"><?php esc_html_e( 'Exam Roll Number', 'school-management' ); ?>:</span>
						<span><?php echo esc_html( WLSM_M_Staff_Class::get_roll_no_text( $admit_card->roll_number ) ); ?></span>
					</li>
				</ul>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="wlsm-exam-results-table-heading">
					<?php
					printf(
						wp_kses(
							/* translators: 1: exam title, 2: start date, 3: end date */
							__( '<span class="wlsm-font-bold">Exam Result:</span> %1$s (%2$s - %3$s)', 'school-management' ),
							array(
								'span' => array( 'class' => array() )
							)
						),
						esc_html( WLSM_M_Staff_Examination::get_exam_label_text( $exam_title ) ),
						esc_html( WLSM_Config::get_date_text( $start_date ) ),
						esc_html( WLSM_Config::get_date_text( $end_date ) )
					);
					?>
				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-12">
				<div class="table-responsive w-100">
					<table class="table table-bordered wlsm-view-exam-results-table">
						<?php require_once WLSM_PLUGIN_DIR_PATH . 'includes/partials/exam_results.php'; ?>
					</table>

					<table class="table table-bordered wlsm-view-exam-results-table">
					<thead>
						<tr>
						<th scope="col"><?php esc_html_e( 'Scale', 'school-management' ); ?></th>
						<th scope="col"><?php esc_html_e( 'Defination', 'school-management' ); ?></th>
						</tr>
					</thead>
					<tbody>
					<?php  $s = 1; ?>
					<?php foreach ($psychomotor['def'] as $key => $value): ?>
						<tr>
							<th scope="row"><?php echo $s++ ; ?></th>
							<td><?php echo $value; ?></td>
						</tr>
					<?php endforeach ?>
						
					</tbody>
					</table>
				</div>
			</div>
		</div>

	</div>
</div>

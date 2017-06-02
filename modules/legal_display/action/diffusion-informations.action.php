<?php
/**
 * Les actions relatives aux diffusions d'informations
 *
 * @author Jimmy Latour <jimmy@evarisk.com>
 * @since 6.2.10.0
 * @version 6.2.10.0
 * @copyright 2015-2017 Evarisk
 * @package legal_display
 * @subpackage class
 */

namespace digi;

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Les actions relatives aux diffusions d'informations
 */
class Diffusion_Informations_Action {

	/**
	 * Le constructeur
	 *
	 * @since 6.2.10.0
	 * @version 6.2.10.0
	 */
	public function __construct() {
		add_action( 'wp_ajax_generate_diffusion_information', array( $this, 'callback_generate_diffusion_information' ), 10, 2 );
	}

	/**
	 * L'action appelant la fonction pour générer la diffusion d'informations.
	 *
	 * @since 6.2.10.0
	 * @version 6.2.10.0
	 */
	public function callback_generate_diffusion_information() {
		check_ajax_referer( 'generate_diffusion_information' );

		$parent_id = ! empty( $_POST['parent_id'] ) ? (int) $_POST['parent_id'] : 0;

		if ( empty( $parent_id ) ) {
			wp_send_json_error();
		}

		$element = Society_Class::g()->show_by_type( $parent_id );

		Diffusion_Informations_Class::g()->generate_sheet( $_POST, $element,  'A3' );

		wp_send_json_success( array(
			'namespace' => 'digirisk',
			'module' => 'legalDisplay',
			'callback_success' => 'generatedDiffusionInformationSuccess',
		) );
	}
}

new Diffusion_Informations_Action();

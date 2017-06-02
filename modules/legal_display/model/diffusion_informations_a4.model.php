<?php
/**
 * Définition du modèle pour la diffusion d'informations en A4
 *
 * @author Jimmy Latour <jimmy@evarisk.com>
 * @since 6.2.10.0
 * @version 6.2.10.0
 * @copyright 2015-2017 Evarisk
 * @package legal_display
 * @subpackage model
 */

namespace digi;

if ( ! defined( 'ABSPATH' ) ) { exit; }

/**
 * Définition du modèle pour la diffusion d'informations en A4
 */
class Diffusion_Informations_A4_Model extends Document_Model {

	/**
	 * Définition du modèle.
	 *
	 * @param Array $object Le tableau définissant les données.
	 *
	 * @since 6.2.10.0
	 * @version 6.2.10.0
	 */
	public function __construct( $object ) {
		$this->model['document_meta'] = array(
			'type'				=> 'array',
			'meta_type' 	=> 'single',
			'field'				=> 'document_meta',
			'child' => array(
				'staff_representatives' => array(
					'type' => 'array',
					'meta_type'	=> 'multiple',
					'child' => array(
						'date_of_election' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'titulaire_1' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'titulaire_2' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'titulaire_3' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'titulaire_4' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'titulaire_5' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'titulaire_6' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'suppleant_1' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'suppleant_2' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'suppleant_3' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'suppleant_4' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'suppleant_5' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'suppleant_6' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
					),
				),
				'works_council' => array(
					'type' => 'array',
					'meta_type'	=> 'multiple',
					'child' => array(
						'date_of_election' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'titulaire_1' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'titulaire_2' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'titulaire_3' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'titulaire_4' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'titulaire_5' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'titulaire_6' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'suppleant_1' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'suppleant_2' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'suppleant_3' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'suppleant_4' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'suppleant_5' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
						'suppleant_6' => array(
							'type' 			=> 'string',
							'meta_type'	=> 'multiple',
						),
					),
				),
			),
		);

		parent::__construct( $object );
	}

}

<?php
/**
 * Informations sur la société.
 *
 * @author Jimmy Latour <jimmy@evarisk.com>
 * @since 6.2.10.0
 * @version 6.2.10.0
 * @copyright 2015-2017 Evarisk
 * @package society
 * @subpackage view
 */

namespace digi;

if ( ! defined( 'ABSPATH' ) ) { exit; } ?>

<section class="details">
	<header>
		<ul>
			<li>
				<span><?php echo esc_html( $number_risks ); ?></span>
				<span><?php esc_html_e( 'Nombre de risque', 'digirisk' ); ?></span>
			</li>

			<li>
				<span>test</span>
				<span><?php esc_html_e( 'Le risque le plus élevé', 'digirisk' ); ?></span>
			</li>

			<li>
				<span>test</span>
				<span><?php esc_html_e( 'Somme des cotations', 'digirisk' ); ?></span>
			</li>

			<li>
				<span>test</span>
				<span><?php esc_html_e( 'Dernière mise à jour', 'digirisk' ); ?></span>
			</li>
		</ul>
	</header>

</section>

<?php do_shortcode( '[digi-diffusion-informations post_id="' . $element->id . '"]' );

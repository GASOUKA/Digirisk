<?php
/**
 * Formulaire pour générer une diffusion d'information.
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

<form class="form-generate">
	<input type="hidden" name="action" value="generate_diffusion_information" />
	<?php wp_nonce_field( 'generate_diffusion_information' ); ?>
	<input type="hidden" name="parent_id" value="<?php echo esc_attr( $element_id ); ?>" />

	<div class="grid-layout w2">
		<ul class="form">
			<li><h2><?php esc_html_e( 'Délégués du personnel', 'digirisk' ); ?></h2></li>
			<li class="form-element">
				<input name="staff_representatives[date_of_election]" type="text" class="date" value="" />
				<label><?php esc_html_e( 'Date d\'élection', 'digirisk' ); ?></label>
				<span class="bar"></span>
			</li>

			<li>
				<ul class="form grid-layout w2">
					<?php
					for ( $i = 0; $i < 3; $i++ ) :
						?>
						<li class="form-element">
							<input name="staff_representatives[titulaire][]" type="text" value="" />
							<label><?php esc_html_e( 'Titulaire', 'digirisk' ); echo ' ' . ( $i + 1 ); ?></label>
							<span class="bar"></span>
						</li>

						<li class="form-element">
							<input name="staff_representatives[suppleant][]" type="text" value="" />
							<label><?php esc_html_e( 'Suppléant', 'digirisk' ); echo ' ' . ( $i + 1 ); ?></label>
							<span class="bar"></span>
						</li>
						<?php
					endfor;
					?>
				</ul>
			</li>
		</ul>

		<ul class="form">
			<li><h2><?php esc_html_e( 'Comité d\'entreprise', 'digirisk' ); ?></h2></li>
			<li class="form-element">
				<input name="works_council[date_of_election]" type="text" class="date" value="" />
				<label><?php esc_html_e( 'Date d\'élection', 'digirisk' ); ?></label>
				<span class="bar"></span>
			</li>
			<li>
				<ul class="form grid-layout w2">
					<?php
					for ( $i = 0; $i < 3; $i++ ) :
						?>
						<li class="form-element">
							<input name="works_council[titulaire][]" type="text" value="" />
							<label><?php esc_html_e( 'Titulaire', 'digirisk' ); echo ' ' . ( $i + 1 ); ?></label>
							<span class="bar"></span>
						</li>

						<li class="form-element">
							<input name="works_council[suppleant][]" type="text" value="" />
							<label><?php esc_html_e( 'Suppléant', 'digirisk' ); echo ' ' . ( $i + 1 ); ?></label>
							<span class="bar"></span>
						</li>
						<?php
					endfor;
					?>
				</ul>
			</li>
		</ul>
	</div>

	<button class="button blue action-input float right" data-parent="form-generate"><i class="icon fa fa-refresh"></i><span><?php esc_html_e( 'Générer les diffusions d\'informations A3 et A4', 'digirisk' ); ?></span></button>
</form>

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
				<span>test</span>
				<span>test</span>
			</li>

			<li>
				<span>test</span>
				<span>test</span>
			</li>

			<li>
				<span>test</span>
				<span>test</span>
			</li>

			<li>
				<span>test</span>
				<span>test</span>
			</li>

			<li>
				<span>test</span>
				<span>test</span>
			</li>
		</ul>
	</header>

</section>

<?php do_shortcode( '[digi-diffusion-informations post_id="' . $element->id . '"]' );

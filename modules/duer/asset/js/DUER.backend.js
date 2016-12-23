window.digirisk.DUER = {};

window.digirisk.DUER.init = function() {
	window.digirisk.DUER.event();
};

window.digirisk.DUER.event = function() {
};

window.digirisk.DUER.fill_textarea_in_popup = function( triggered_element, popup_element, event, args ) {
	if (args) {
		popup_element.find( 'h2' ).text( args.title );
		popup_element.find( '.content' ).html( '<textarea class="hidden" rows="8" style="width: 100%; display: inline-block;"></textarea>' );

		// On récupères le textarea caché avec le contenu actuel.
		var textarea_content = triggered_element.closest( '.wp-digi-list-item' ).find( '.textarea-content-' + args['src'] ).val();
		popup_element.find( 'textarea' ).show();
		popup_element.find( 'p' ).hide();
		popup_element.find( 'textarea' ).val( textarea_content );
		popup_element.find( '.button-primary' ).attr( 'data-target', args['src'] );
	}
};

window.digirisk.DUER.view_in_popup = function( triggered_element, popup_element, event, args ) {
	if (args) {
		popup_element.find( 'h2' ).text( args.title );
		popup_element.find( 'textarea' ).hide();
		popup_element.find( '.content' ).html( '<p></p>' );
		popup_element.find( 'p' ).text( triggered_element.closest( '.wp-digi-list-item' ).find( '.text-content-' + args['src'] ).text() ).show();
	}
};

window.digirisk.DUER.set_textarea_content = function( triggered_element, event, args ) {
	if ( args && args['target'] ) {
		var textarea_content = jQuery( '.popup textarea' ).val();
		jQuery( '.textarea-content-' + args['target'] ).val( textarea_content );
	}
};

window.digirisk.DUER.popup_for_generate_DUER = function( triggeredElement, popupElement, event, args ) {
	var data = {
		action: 'display_societies_duer',
		id: args.id,
		_wpnonce: args._wpnonce
	};

	popupElement.find( 'h2' ).text( args.title );
	popupElement.addClass( 'no-close' );
	popupElement.find( 'button.button-primary' ).attr( 'disabled', true );
	popupElement.find( 'button.button-primary' ).attr( 'data-cb-func', 'close_popup_generate_DUER' );

	window.digirisk.request.send( popupElement, data );
};

window.digirisk.DUER.display_societies_duer_success = function( popup, response ) {
	popup.find( '.content' ).html( response.data.view );

	window.digirisk.DUER.generate_DUER( jQuery( '.open-popup.dashicons-plus' ), { index: 0 } );
};

window.digirisk.DUER.generate_DUER = function( triggeredElement, preData ) {
	var data = {};
	var i = 0;
	var listInput = window.eva_lib.array_form.get_input( triggeredElement.closest( '.wp-digi-list-item' ) );

	for ( i = 0; i < listInput.length; i++ ) {
		if ( listInput[i].name ) {
			data[listInput[i].name] = window.eva_lib.array_form.get_input_value( listInput[i] );
		}
	}

	for ( i in preData ) {
		data[i] = preData[i];
	}

	data['society_id'] = jQuery( '.popup li:nth-child(' + ( data.index + 1 ) + ')' ).data( 'id' );
	data['duer'] = jQuery( '.popup li:nth-child(' + ( data.index + 1 ) + ')' ).data( 'duer' );
	data['generate_duer'] = jQuery( '.popup li:nth-child(' + ( data.index + 1 ) + ')' ).data( 'generate-duer' );
	data['zip'] = jQuery( '.popup li:nth-child(' + ( data.index + 1 ) + ')' ).data( 'zip' );

	if ( data['zip'] ) {
		data['element_id'] = jQuery( '.popup li:nth-child(3)' ).data( 'id' );
	}

	if ( data['generate_duer'] ) {
		data['element_id'] = jQuery( '.popup li:nth-child(' + ( data.index + 1 ) + ')' ).data( 'element-id' );
		data['parent_id'] = jQuery( '.popup li:nth-child(' + ( data.index + 1 ) + ')' ).data( 'parent-id' );
	}

	window.digirisk.request.send( triggeredElement, data );
};

window.digirisk.DUER.callback_generate_duer_success = function( element, response ) {
	jQuery( '.popup li:nth-child(' + ( response.data.index ) + ')' ).find( 'img' ).remove();
	jQuery( '.popup li:nth-child(' + ( response.data.index ) + ')' ).append( '<span class="dashicons dashicons-yes"></span>' );
	if ( response.data.creation_response.id  ) {
		jQuery( '.popup li:nth-child(' + ( response.data.index + 1 ) + ')' ).attr( 'data-element-id', response.data.creation_response.id );
	}

	if ( ! response.data.end ) {
		window.digirisk.DUER.generate_DUER( element, response.data );
	} else {
		jQuery( '.popup' ).find( 'button.button-primary' ).attr( 'disabled', false );
	}
};

window.digirisk.DUER.callback_generate_duer_error = function() {
};

window.digirisk.DUER.close_popup_generate_DUER = function( element, event ) {
	jQuery( '.wp-digi-group-sheet button[data-action="digi_list_duer"]' ).click();
};

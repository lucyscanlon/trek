jQuery( document ).ready( function ( $ ) {

    $( document ).on( "click", ".upload_image_button", function ( event ) {
        event.preventDefault();
        var $button = $( this );

        var file_frame = wp.media.frames.file_frame = wp.media( {
            title: 'Choose or upload an image',
            library: {
                type: 'image'
            },
            button: {
                text: 'Choose Image'
            },
            multiple: false
        } );

        file_frame.on( 'select', function () {

            var attachment = file_frame.state().get( 'selection' ).first().toJSON();

            $button.siblings( 'input' ).val( attachment.url ).trigger( 'change' );

        } );

        file_frame.open();

    } );

} );

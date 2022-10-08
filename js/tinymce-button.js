(function() {
    tinymce.PluginManager.add( 'swpquote', function( editor, url ) {
        // Add Button to Visual Editor Toolbar
        editor.addButton('swpquote', {
            title: 'Insert quote',
            cmd: 'swpquote',
            image: url + '/logo.png',
        });

        editor.addCommand('swpquote', function() {
            var selected_text = editor.selection.getContent({
                'format': 'html'
            });
            if ( selected_text.length === 0 ) {
                alert( 'Please select text' );
                return;
            }
            var open_column = '<h2 class="swp_quote"><img src="quote1.png" alt="">';
            var close_column = '<img src="quote2.png" alt=""></h2>';
            var return_text = '';
            return_text = open_column + selected_text + close_column;
            editor.execCommand('mceReplaceContent', false, return_text);
            return;
        });

    });
})();

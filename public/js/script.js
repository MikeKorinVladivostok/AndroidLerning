let editor;

InlineEditor
    .create( document.querySelector( '#editor' ) )
    .then( newEditor => {
        editor = newEditor;
    } )
    .catch( error => {
        console.error( error );
    } );


document.querySelector( '#submit' ).addEventListener( 'click', (e) => {
    e.preventDefault();
    const editorData = editor.getData();
    console.log(editorData)
    $.ajax({
        url: '/createpost',
        method: 'get',
        dataType: 'html',
        data: editorData,
        success: function(data){
            alert(editorData)
        }
    });
} );

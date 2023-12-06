ClassicEditor.create(document.querySelector('#editor'))
.then(editor => {
    editor.ui.view.editable.style.height = '400px'; // Adjust the height as needed
})
.catch( error => {
    console.error( error );
} );
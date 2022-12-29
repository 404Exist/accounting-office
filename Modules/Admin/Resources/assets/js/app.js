import ClassicEditor from '@ckeditor/ckeditor5-build-classic'


ClassicEditor
.create( document.querySelector('#editor_en') )
.catch( error => {
    // console.error( error );
} );

ClassicEditor
.create( document.querySelector('#editor_pl') )
.catch( error => {
    // console.error( error );
} );

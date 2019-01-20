
CKEDITOR.editorConfig = function( config ) {
	config.language = 'vi';
	config.height	= 150;
  	config.toolbarGroups = [
        { name: 'links' },
        { name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
        { name: 'colors' },
        { name: 'paragraph', groups: [ 'blocks', 'align'] },
        { name: 'styles' }
	];
};

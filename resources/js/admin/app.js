var content = document.getElementById("content");
if (content) {
    CKEDITOR.replace( 'content', {
        // Define the toolbar: https://ckeditor.com/docs/ckeditor4/latest/features/toolbar.html
        // The standard preset from CDN which we used as a base provides more features than we need.
        // Also by default it comes with a 2-line toolbar. Here we put all buttons in a single row.
        // toolbar: [
        //     { name: 'clipboard', items: [ 'Undo', 'Redo' ] },
        //     { name: 'styles', items: [ 'Styles', 'Format' ] },
        //     { name: 'basicstyles', items: [ 'Bold', 'Italic', 'Strike', '-', 'RemoveFormat' ] },
        //     { name: 'paragraph', items: [ 'NumberedList', 'BulletedList', '-', 'Outdent', 'Indent', '-', 'Blockquote' ] },
        //     { name: 'links', items: [ 'Link', 'Unlink' ] },
        //     { name: 'insert', items: [ 'Image', 'EmbedSemantic', 'Table' ] },
        //     { name: 'tools', items: [ 'Maximize' ] },
        //     { name: 'editing', items: [ 'Scayt' ] }
        // ],

        // Since we define all configuration options here, let's instruct CKEditor to not load config.js which it does by default.
        // One HTTP request less will result in a faster startup time.
        // For more information check https://ckeditor.com/docs/ckeditor4/latest/api/CKEDITOR_config.html#cfg-customConfig
        customConfig: '',

        // Enabling extra plugins, available in the standard-all preset: https://ckeditor.com/cke4/presets-all
        extraPlugins: 'autoembed,embedsemantic,image2,uploadimage,uploadfile',

        /*********************** File management support ***********************/
        // In order to turn on support for file uploads, CKEditor has to be configured to use some server side
        // solution with file upload/management capabilities, like for example CKFinder.
        // For more information see https://ckeditor.com/docs/ckeditor4/latest/guide/dev_ckfinder_integration.html

        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
        /*********************** File management support ***********************/

        // Remove the default image plugin because image2, which offers captions for images, was enabled above.
        removePlugins: 'image',

        // Make the editing area bigger than default.
        height: 600,

        // An array of stylesheets to style the WYSIWYG area.
        // Note: it is recommended to keep your own styles in a separate file in order to make future updates painless.
        contentsCss: [ 'https://cdn.ckeditor.com/4.8.0/standard-all/contents.css', 'mystyles.css' ],

        // This is optional, but will let us define multiple different styles for multiple editors using the same CSS file.
        bodyClass: 'article-editor',

        // Reduce the list of block elements listed in the Format dropdown to the most commonly used.
        format_tags: 'p;h1;h2;h3;pre',

        // set font names
        font_names: 'Arial;Poppins, sans-serif;Times New Roman;Verdana',

        // CKEditor color palette available before version 4.6.2.
        colorButton_colors:
            '000,f3b435,800000,8B4513,2F4F4F,008080,000080,4B0082,696969,' +
            'B22222,A52A2A,DAA520,006400,40E0D0,0000CD,800080,808080,' +
            'F00,FF8C00,FFD700,008000,0FF,00F,EE82EE,A9A9A9,' +
            'FFA07A,FFA500,FFFF00,00FF00,AFEEEE,ADD8E6,DDA0DD,D3D3D3,' +
            'FFF0F5,FAEBD7,FFFFE0,F0FFF0,F0FFFF,F0F8FF,E6E6FA,FFF',

        // Simplify the Image and Link dialog windows. The "Advanced" tab is not needed in most cases.
        removeDialogTabs: 'image:advanced;link:advanced',

        // Define the list of styles which should be available in the Styles dropdown list.
        // If the "class" attribute is used to style an element, make sure to define the style for the class in "mystyles.css"
        // (and on your website so that it rendered in the same way).
        // Note: by default CKEditor looks for styles.js file. Defining stylesSet inline (as below) stops CKEditor from loading
        // that file, which means one HTTP request less (and a faster startup).
        // For more information see https://ckeditor.com/docs/ckeditor4/latest/features/styles.html
        stylesSet: [
            /* Inline Styles */
            { name: 'Marker',			element: 'span', attributes: { 'class': 'marker' } },
            { name: 'Cited Work',		element: 'cite' },
            { name: 'Inline Quotation',	element: 'q' },

            /* Object Styles */
            {
                name: 'Special Container',
                element: 'div',
                styles: {
                    padding: '5px 10px',
                    background: '#eee',
                    border: '1px solid #ccc'
                }
            },
            {
                name: 'Compact table',
                element: 'table',
                attributes: {
                    cellpadding: '5',
                    cellspacing: '0',
                    border: '1',
                    bordercolor: '#ccc'
                },
                styles: {
                    'border-collapse': 'collapse'
                }
            },
            { name: 'Borderless Table',		element: 'table',	styles: { 'border-style': 'hidden', 'background-color': '#E6E6FA' } },
            { name: 'Square Bulleted List',	element: 'ul',		styles: { 'list-style-type': 'square' } },

            /* Widget Styles */
            // We use this one to style the brownie picture.
            { name: 'Illustration', type: 'widget', widget: 'image', attributes: { 'class': 'image-illustration' } },
            // Media embed
            { name: '240p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-240p' } },
            { name: '360p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-360p' } },
            { name: '480p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-480p' } },
            { name: '720p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-720p' } },
            { name: '1080p', type: 'widget', widget: 'embedSemantic', attributes: { 'class': 'embed-1080p' } }
        ]
    } );
}


//@TODO refactor
var lfm = function(id, type, options) {
    let button = document.getElementById(id);

    button.addEventListener('click', function () {
        var route_prefix = (options && options.prefix) ? options.prefix : '/laravel-filemanager';
        var target_input = document.getElementById(id);
        var target_preview = document.getElementsByTagName('samp')[0];

        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=900,height=600');
        window.SetUrl = function (items) {
            console.log('sss', items);
            var file_path = items.map(function (item) {
                return item.url;
            }).join(',');

            // set the value of the desired input to image url
            target_input.value = file_path;
            target_input.dispatchEvent(new Event('change'));

            // clear previous preview
            target_preview.innerHtml = '';
            target_preview.querySelectorAll('*').forEach(n => n.remove());


            // set or change the preview image src
            items.forEach(function (item) {
                let img = document.createElement('img')
                img.setAttribute('style', 'height: 5rem')
                img.setAttribute('src', item.thumb_url)
                target_preview.appendChild(img);
            });

            // trigger change event
            target_preview.dispatchEvent(new Event('change'));
        };
    });
};

lfm('image', 'image', {type: 'image'});

/**
 * ===================================
 *    Blog Description Editor 
 * ===================================
*/
var quill = new Quill('#blog-description', {
    modules: {
        toolbar: [
            [{ header: [1, 2, false] }],
            ['bold', 'italic', 'underline'],
            ['code-block'],
            [{ 'list': 'ordered' }, { 'list': 'bullet' }],
            [{ 'color': [] }, { 'background': [] }],
            [{ 'align': [] }],
            ['link']
        ]
    },
    placeholder: 'Write product description...',
    theme: 'snow'  // or 'bubble'
});
var toolbarOptions = {
    handlers: {
      // handlers object will be merged with default handlers object
      'link': function(value) {
        if (value) {
          var href = prompt('Enter the URL');
          this.quill.format('link', href);
        } else {
          this.quill.format('link', false);
        }
      }
    }
  }
  quill.on('text-change', function() {
    var html = quill.root.innerHTML;
    document.querySelector('input[name=description]').value = html;
  });
  
    


/**
 * ====================
 *      File Pond 
 * ====================
*/

// We want to preview images, so we register
// the Image Preview plugin, We also register 
// exif orientation (to correct mobile image
// orientation) and size validation, to prevent
// large files from being added
FilePond.registerPlugin(
    FilePondPluginImagePreview,
    FilePondPluginImageExifOrientation,
    FilePondPluginFileValidateSize,
    // FilePondPluginImageEdit
);

// Select the file input and use 
// create() to turn it into a pond
var ecommerce = FilePond.create(document.querySelector('.file-upload-multiple'));


/**
 * =====================
 *      Blog Tags 
 * =====================
*/
// The DOM element you wish to replace with Tagify
var input = document.querySelector('.blog-tags');

// initialize Tagify on the above input node reference
new Tagify(input)


/**
 * =======================
 *      Blog Category 
 * =======================
*/
var input = document.querySelector('input[name=category]');

new Tagify(input, {
    whitelist: ["Themeforest", "Admin", "Dashboard", "Laravel", "Sale", "Vue", "React", "Cork Admin"],
    userInput: false
})
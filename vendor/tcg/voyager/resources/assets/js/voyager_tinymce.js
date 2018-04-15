$(document).ready(function(){

  $.ajaxSetup({
      headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
      }
  });

  tinymce.init({
    menubar: false,
    selector:'textarea.richTextBox',
    skin: 'voyager',
    min_height: 600,
    resize: 'vertical',
    plugins: 'link, image, code, youtube, giphy, table, textcolor, lists',
    extended_valid_elements : 'input[id|name|value|type|class|style|required|placeholder|autocomplete|onclick]',
    file_browser_callback: function(field_name, url, type, win) {
            if(type =='image'){
              $('#upload_file').trigger('click');
            }
        },
    toolbar: 'styleselect bold italic underline | forecolor backcolor | alignleft aligncenter alignright | bullist numlist outdent indent | link image table youtube giphy | code',
    convert_urls: false,
    image_caption: true,
    image_title: true
  });
  
  tinymce.init({
    selector: 'textarea.richTextBox',
    plugins: 'code wordcount',
    toolbar: 'undo redo | currentdate',
    content_css: [
      '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
      '//www.tinymce.com/css/codepen.min.css'],
    
    setup: function(editor) {
      
      function toTimeHtml(date) {
        return '<time datetime="' + date.toString() + '">' + date.toDateString() + '</time>';
      }
      
      function insertDate() {
        var html = toTimeHtml(new Date());
        editor.insertContent(html);
      }
  
      editor.addButton('currentdate', {
        icon: 'insertdatetime',
        //image: 'http://p.yusukekamiyamane.com/icons/search/fugue/icons/calendar-blue.png',
        tooltip: "Insert Current Date",
        onclick: insertDate
      });
    }
  });
});

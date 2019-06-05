<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

        <textarea id="abc" name=""
                  placeholder="kk"
                  class="form-control ckeditor"></textarea>

        <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
        <script type="text/javascript" src="{{asset('js/ckfinder/ckfinder.js')}}"></script>
        <script>
            // Replace the <textarea id="editor1"> with a CKEditor
            // instance, using default configuration.
            CKEDITOR.replace('abc', {
                filebrowserBrowseUrl: 'ckfinder/browser',
                filebrowserImageBrowseUrl: 'ckfinder/browser?Type=Images',
                filebrowserUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Files',
                filebrowserImageUploadUrl: '/ckfinder/core/connector/php/connector.php?command=QuickUpload&type=Images',
                filebrowserWindowWidth: '1000',
                filebrowserWindowHeight: '700'
            });
        </script>
</body>
</html>

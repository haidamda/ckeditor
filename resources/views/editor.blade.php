<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="{{asset('ckeditor/ckeditor.js')}}"></script>
    <script type="text/javascript" src="{{asset('js/ckfinder/ckfinder.js')}}"></script>
    <script>CKFinder.config({connectorPath: "http://localhost/blog/public/ckfinder/connector"});</script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(document).on('click', '#ckfinder-modal-2', function (e) {
                CKFinder.modal({
                    chooseFiles: true,
                    width: 800,
                    height: 600,
                    onInit: function (finder) {
                        finder.on('files:choose', function (evt) {
                            var file = evt.data.files.first();
                            var outputFileName = document.getElementById('file-name');
                            var outputFileUrl = document.getElementById('file-url');
                            outputFileName.innerText = 'Selected: ' + file.get('name');
                            outputFileUrl.innerText = 'URL: ' + file.getUrl();
                        });
                        finder.on('file:choose:resizedImage', function (evt) {
                            var outputFileName = document.getElementById('file-name');
                            var outputFileUrl = document.getElementById('file-url');
                            outputFileName.innerText = 'Selected resized image: ' + evt.data.file.get('name');
                            outputFileUrl.innerText = 'URL: ' + evt.data.resizedUrl;
                        });
                    }
                });
            });
        });
    </script>
</head>
<body>
<a id="file-name"></a>
<a id="file-url"></a>
<button id="ckfinder-modal-2" class="button-a button-a-background">Browse Server</button>

</body>
</html>

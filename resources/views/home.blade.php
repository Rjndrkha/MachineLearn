@extends('layouts.app')
@section('content')
<div class="container mt-5 pt-5">
    <h1 class="text-center">Convert Image To Text</h1>
    <!-- UPLOAD -->
    <div class="zone">                
        <i class="fa fa-cloud-upload"></i>
        <p class="text-light mt-3">Drag and drop your Image here </p>
        <p class="text-light">OR</p>
        <div class="selectFile">
            <label for="file">Select Image</label>
            <input type="file" name="files[]" id="file">
        </div>                    
    </div>
    <!-- END UPLOAD -->
    <div class="container">
        <h1 class="text-center">Result</h1>
        <textarea style="position:center;background-color:antiquewhite" id="image-text" rows="15" cols="80"></textarea>        
    </div>
</div>
<!-- JAVASCRIPT OCR -->
<script src='https://cdn.rawgit.com/naptha/tesseract.js/1.0.10/dist/tesseract.js'></script>
<!-- JAVASCRIPT OCR END -->



<script>
    //PROGRESS BAR PROCESS
    document.addEventListener('DOMContentLoaded', function() {
        var input_image = document.getElementById('file');
        input_image.addEventListener('change', handleInputChange);
    });

    function handleInputChange(event) {
        var input = event.target;
        var file = input.files[0];
        console.log(file);
        Tesseract.recognize(file)
            .progress(function(message) {
                document.getElementById('progressbar').value = message.progress;
                console.log(message);
            })
            .then(function(result) {
                var contentArea = document.getElementById('image-text');
                contentArea.innerHTML = result.text;
                console.log(result);
            })
            .catch(function(err) {
                console.error(err);
            });
    }
</script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
@endsection

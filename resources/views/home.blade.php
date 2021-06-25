@extends('layouts.app')
@section('content')
<div class="container mt-5 pt-5">
    <h1 class="text-center">Convert Image To Text</h1>
    @if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
    <!-- UPLOAD -->
    <div class="zone">                
        <i class="fa fa-cloud-upload"></i>
        <p class="text-light mt-3">Drag and drop your Image here </p>
        <p class="text-light">OR</p>
        <div class="selectFile">        
            <form method="post" action="{{ route('result') }}" enctype="multipart/form-data" id="form">
                @csrf
                <label>Select Image</label>
                <input type="file" name="images" id="file" class="form-control">
            </form>
        </div>                    
    </div>
</div>
<script>
    document.getElementById("file").onchange = function() {
        document.getElementById("form").submit();
    };
</script>

@endsection

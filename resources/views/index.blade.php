@extends('master')

@section('header')
    <h1>Challenge</h1>
@stop

@section('main-content')
    <form class="form-group text-center center-block" action="upload" enctype="multipart/form-data" method="POST">
        {{csrf_field()}}
        <input id="input-pt-br" name="xml" type="file" multiple class="file-loading">
        <button class="btn btn-primary btn-send" type="submit">Enviar <i class="fa fa-paper-plane" aria-hidden="true"></i></button>
    </form>
@stop

@section('footer')
    &copy; <?php echo date("Y"); ?>
    <script>
        $("#input-pt-br").fileinput({
            language: "pt-BR",
            showRemove: false,
            showUpload: false,
            allowedFileExtensions: ["xml"],
            fileActionSettings: {
                showRemove: false,
                showUpload: false,
                showZoom: false}
        });
    </script>
@stop
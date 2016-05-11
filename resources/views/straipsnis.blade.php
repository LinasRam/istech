@extends('layouts.main')

@section('title')
    {{ $straipsnis->pavadinimas }}
@endsection

@section('links')
    <link rel="stylesheet" href="//blueimp.github.io/Gallery/css/blueimp-gallery.min.css">
    <link rel="stylesheet" href="{{ asset('css/bootstrap-image-gallery.min.css') }}">
@endsection

@section('main_photo')
    <div class="jumbotron" style="background-image: url({{ $straipsnis->photo }});">
        <div class="container">
            <div id="Header">
                <div class="Background">
                    <h1>{{ $straipsnis->pavadinimas }}</h1>
                </div>
                <div class="Foreground">
                    <h1>{{ $straipsnis->pavadinimas }}</h1>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('main_content')
    <div class="panel panel-default">
        <div class="panel-body">
            <p>{{ $straipsnis->tekstas }}</p>

            <div id="links" class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h3 style="color: #173B0B;">Galerija</h3>
                    </div>

                    <div class="col-lg-3 col-md-4 col-xs-6 thumb">
                        <a class="thumbnail thumbnail-gallery" href="{{ $straipsnis->photo }}" data-gallery>
                            <img class="img-responsive" src="{{ $straipsnis->photo }}" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="blueimp-gallery" class="blueimp-gallery blueimp-gallery-controls" data-use-bootstrap-modal="false">
        <!-- The container for the modal slides -->
        <div class="slides"></div>
        <!-- Controls for the borderless lightbox -->
        <h3 class="title"></h3>
        <a class="prev">‹</a>
        <a class="next">›</a>
        <a class="close">×</a>
        <a class="play-pause"></a>
        <ol class="indicator"></ol>
        <!-- The modal dialog, which will be used to wrap the lightbox content -->
        <div class="modal fade">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" aria-hidden="true">&times;</button>
                        <h4 class="modal-title"></h4>
                    </div>
                    <div class="modal-body next"></div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default pull-left prev">
                            <i class="glyphicon glyphicon-chevron-left"></i>
                            Previous
                        </button>
                        <button type="button" class="btn btn-primary next">
                            Next
                            <i class="glyphicon glyphicon-chevron-right"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="//blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="{{ asset('js/bootstrap-image-gallery.min.js') }}"></script>
@endsection
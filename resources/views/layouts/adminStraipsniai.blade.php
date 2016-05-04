@extends('layouts.admin')

@section('content')
    <div id="news" class="container">
        <div class="row">
            <div class="col-md-9">
                @foreach($straipsniai as $straipsnis)
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title pull-left">{{ $straipsnis->pavadinimas }}</h3>
                            {{--<a href="{{ route('admin.delete', [$straipsnis->url]) }}"><span class="glyphicon glyphicon-trash pull-right"></span></a>--}}
                            <a id="delete-button" data-toggle="modal" data-target="#delete-dialog" onclick="onDeleteButtonClick('{{ $straipsnis->url }}')"><span class="glyphicon glyphicon-trash pull-right"></span></a>
                            <a href="{{ route('admin.redaguotiPage', [$straipsnis->url]) }}"><span class="glyphicon glyphicon-pencil pull-right"></span></a>
                            <div class="clearfix"></div>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-xs-6 col-md-4">
                                    <a href="{{ route('straipsnis', [$straipsnis->kategorija, $straipsnis->url]) }}" class="thumbnail">
                                        <img src="{{ $straipsnis->photo }}" alt="...">
                                    </a>
                                </div>
                                <p>{{ $straipsnis->ivadas }}</p>
                                <div class="read-more">
                                    <a href="{{ route('straipsnis', [$straipsnis->kategorija, $straipsnis->url]) }}">Skaityti daugiau</a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>

    <div class="modal fade" id="delete-dialog">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    Ar tikrai norite ištrinti šį straipsnį?
                </div>
                <div class="modal-body">
                    <button type="button" class="btn btn-primary pull-right" data-dismiss="modal">Ne</button>
                    <button type="button" class="btn btn-danger pull-right" data-url="">Ištrinti</button>
                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        function onDeleteButtonClick(dataUrl){
            $('.modal-body .btn-danger').attr('data-url', dataUrl);
        }

        $('.modal-body .btn-danger').on('click', function () {
            var url = "{{ route('admin.delete', [':url']) }}";
            dataUrl = $('.modal-body .btn-danger').data('url');
            url = url.replace(':url', dataUrl);
            window.location.href = url;
        });
    </script>
@endsection
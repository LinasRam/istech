@extends('layouts.adminStraipsniai')

@section('title')
    {{ ucfirst($title) }}
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

    <script>
        $(document).ready(function(){
            $('.navbar-nav').find('.active').removeClass('active');
            var title = document.title;
            $("a:contains('"+title+"')").parent().addClass('active');
        });
    </script>
@endsection
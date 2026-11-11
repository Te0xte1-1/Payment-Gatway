@extends('layouts.app')

@section('title')
    Calendar
@endsection
@section('content')
    <div class="container-fluid">

        <div class="card">
            <div class="card-body">

                <div id="fullcalendar" class="fc-view-harness fc-view-harness-active">
                </div>
            </div>

        </div>
    </div>
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('fullcalendar/main.js') }}"></script>

    <script>
        $(document).ready(function() {

            $('#fullcalendar').fullcalendar({
             
            });
           
        });
    </script>
@endsection

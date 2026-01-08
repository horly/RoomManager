@extends('base')
@section('title', 'sites')
@section('content')

@include('global.loader')

<div class="page-wrapper compact-wrapper" id="pageWrapper">
    @include('main.header')

    <div class="container">
    </div>
</div>

@include('global.scipt')

<!-- datatable-->
<script src="{{ asset('assets/js/datatable/datatables/jquery.dataTables.min.js') }}"></script>
<!-- page_datatable-->
<script src="{{ asset('assets/js/js-datatables/datatables/datatable.custom.js') }}"></script>
<!-- page_datatable-->
<script src="{{ asset('assets/js/datatable/datatables/datatable.custom.js') }}"></script>
<!-- theme_customizer-->

<!-- Sweetalert js-->
<script src="{{ asset('assets/lib/sweet-alert/sweetalert.min.js') }}"></script>

<!-- apex-->
<script src="{{ asset('assets/js/chart/apex-chart/apex-chart.js') }}"></script>
<!-- chart_widget-->
{{-- <script src="{{ asset('assets/js/chart-widget.js') }}"></script>--}}
<script src="{{ asset('assets/js/custom/chart.js') }}"></script>

<script src="{{ asset('assets/js/custom/site.js') }}"></script>

@endsection

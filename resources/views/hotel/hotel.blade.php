@extends('base')
@section('title', 'sites')
@section('content')

@include('global.loader')

<div class="page-wrapper compact-wrapper" id="pageWrapper">
    @include('main.header')

    <div class="container">
        <div class="page-body">
            <div class="container-fluid general-widget">
                <div class="page-title">
                    <div class="row">
                        <div class="col-sm-6 col-12">
                            <h2>{{ __('dashboard.main_menu') }} </h2>
                            {{-- <p class="mb-0 text-title-gray">Welcome back! Let’s start from where you left.</p> --}}
                        </div>
                        <div class="col-sm-6 col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('app_hotel') }}"><i class="iconly-Home icli svg-color"></i></a></li>
                                <li class="breadcrumb-item">{{ __('dashboard.main_menu') }}</li>
                                <li class="breadcrumb-item active">{{ __('hotel.hotels') }}</li>
                            </ol>
                        </div>
                    </div>
                </div>

                @include('message.flash-message')

                <div class="card border">
                    <div class="card-body">
                        <div class="container-fluid general-widget">

                            <div class="row">

                                <div class="col-sm-6 col-xl-3 box-col-6">
                                    <div class="card widget-1 border">
                                        <div class="card-body">
                                            <div class="widget-content">
                                                <div class="widget-round secondary">
                                                    <div class="bg-round">
                                                        <i class="fa-solid fa-city text-secondary"></i>
                                                    </div>
                                                </div>
                                            <div>
                                                <h4>{{ number_format($hotelsCount, 0, '', ' ') }} </h4><span class="f-light">{{ __('hotel.hotels') }} </span>
                                            </div>
                                            </div>
                                            {{--<div class="font-success f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i><span>{{ number_format($sitesThisMonth, 0, '', ' ') }} {{ __('dashboard.this_month') }}</span></div>--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xl-3 box-col-6">
                                    <div class="card widget-1 border">
                                        <div class="card-body">
                                            <div class="widget-content">
                                                <div class="widget-round primary">
                                                    <div class="bg-round">
                                                        <i class="fas fa-bed text-primary"></i>
                                                    </div>
                                                </div>
                                            <div>
                                                <h4>{{ number_format($roomsCount, 0, '', ' ') }}</h4><span class="f-light">{{ __('hotel.rooms') }} </span>
                                            </div>
                                            </div>
                                            {{--<div class="font-success f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i><span>{{ number_format($roomsThisMonth, 0, '', ' ') }} {{ __('dashboard.this_month') }}</span></div>--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xl-3 box-col-6">
                                    <div class="card widget-1 border">
                                        <div class="card-body">
                                            <div class="widget-content">
                                                <div class="widget-round secondary">
                                                    <div class="bg-round">
                                                        <i class="fa-solid fa-user-group text-secondary"></i>
                                                    </div>
                                                </div>
                                            <div>
                                                <h4>{{ number_format($guestsCount, 0, '', ' ') }}</h4><span class="f-light">{{ __('hotel.guests') }} </span>
                                            </div>
                                            </div>
                                            {{--<div class="font-success f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i><span>{{ number_format($boxesThisMonth, 0, '', ' ') }} {{ __('dashboard.this_month') }}</span></div>--}}
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-6 col-xl-3 box-col-6">
                                    <div class="card widget-1 border">
                                        <div class="card-body">
                                            <div class="widget-content">
                                                <div class="widget-round success">
                                                    <div class="bg-round">
                                                        <i class="fa-solid fa-calendar-check text-success"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h4>{{ number_format($resersCount, 0, '', ' ') }}</h4><span class="f-light">{{ __('hotel.reservations') }} </span>
                                                </div>
                                            </div>
                                            {{--<div class="font-success f-w-500"><i class="icon-arrow-up icon-rotate me-1"></i><span>{{ number_format($documentsThisMonth, 0, '', ' ') }} {{ __('dashboard.this_month') }}--}}</span></div>
                                        </div>
                                    </div>
                                </div>

                            </div>



                        </div>
                    </div>
                </div>

            </div>
        </div>
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

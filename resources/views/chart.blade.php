@extends('layouts.app')
@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1>{{ $chart2->options['chart_title'] }}</h1>
            {!! $chart2->renderHtml() !!}
        </div>
        <div class="col-md-6">
            <h1>{{ $chart1->options['chart_title'] }}</h1>
            {!! $chart1->renderHtml() !!}
        </div>
    </div>
</div>

@endsection

@section('javascript')
{!! $chart1->renderChartJsLibrary() !!}
{!! $chart1->renderJs() !!}
{!! $chart2->renderJs() !!}
@endsection

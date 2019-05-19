@extends('layouts.app')

@section('content')
    <div id="qbootstrap-when-where" data-section="when-where">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>Ici on finalise son inscription</h2>
                        <div class="row">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div id="app">
                    <app :user-id={{Auth::user()->id}}></app>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div id="map" class="qbootstrap-map"></div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script src="{{asset('js/app.js')}}"></script>
@endsection
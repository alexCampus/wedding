@extends('layouts.app')

@section('content')
<div id="qbootstrap-when-where" data-section="when-where">
    <div class="container">
        <div class="row animate-box">
            <div class="col-md-8 col-md-offset-2">
                <div class="col-md-12 text-center section-heading svg-sm colored">
                    <img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                    <h2>Céremonie &amp; Fête</h2>
                    <div class="row">
                        <div class="col-md-10 col-md-offset-1 subtext">
                            <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row row-bottom-padded-md">
            <div class="col-md-6 text-center animate-box">
                <div class="wedding-events">
                    <div class="ceremony-bg" style="background-image: url('{{asset("images/wed-ceremony.jpg")}}');"></div>
                    <div class="desc">
                        <h3>Cérémonie de Mariage</h3>
                        <div class="row">
                            <div class="col-md-2 col-md-push-5">
                                <div class="icon-tip">
                                    <span class="icon"><i class="icon-heart-o"></i></span>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-pull-1">
                                <div class="date">
                                    <i class="icon-calendar"></i>
                                    <span>Samedi</span>
                                    <span>05 Mai 2019</span>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-pull-1">
                                <div class="date">
                                    <i class="icon-clock2"></i>
                                    <span>10 h 00</span>
                                    <span>11 h 00</span>
                                </div>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 text-center animate-box">
                <div class="wedding-events">
                    <div class="ceremony-bg" style="background-image: url('{{asset("images/wed-party.jpg")}}');"></div>
                    <div class="desc">
                        <h3>Fête de Mariage</h3>
                        <div class="row">
                            <div class="col-md-2 col-md-push-5">
                                <div class="icon-tip">
                                    <span class="icon"><i class="icon-heart-o"></i></span>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-pull-1">
                                <div class="date">
                                    <i class="icon-calendar"></i>
                                    <span>Samedi</span>
                                    <span>05 Mai 2019</span>
                                </div>
                            </div>
                            <div class="col-md-5 col-md-pull-1">
                                <div class="date">
                                    <i class="icon-clock2"></i>
                                    <span>15 h 30</span>
                                    <span>4 h 00</span>
                                </div>
                            </div>
                        </div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
                    </div>
                </div>
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
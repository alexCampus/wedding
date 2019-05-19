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
                                <h3>Tout se passera dans un lieu unique, la Cocotte Bleue à Aydat.</h3>
                            </div>
                        </div>
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2788.2434994644846!2d2.9801575152819884!3d45.6660118279759!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x733a018f8963ff2b!2sLa+Cocotte+Bleue!5e0!3m2!1sfr!2sfr!4v1558260885961!5m2!1sfr!2sfr"
                                width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-6 text-center animate-box">
                    <div class="wedding-events">
                        <div class="ceremony-bg" style="background-image: url('{{asset("images/wedding_ceremonie.png")}}');"></div>
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
                                        <span>21 Septembre</span>
                                    </div>
                                </div>
                                <div class="col-md-5 col-md-pull-1">
                                    <div class="date">
                                        <i class="icon-clock2"></i>
                                        <span>18 h 00 </span>
                                        <span>19 h 00</span>
                                    </div>
                                </div>
                            </div>
                            <p>Nous commencerons à l'heure prévue, sous le soleil Auvergnat enfin nous l’espérons, face au lac d'Aydat. Cette cérémonie sera placée sous le signe de la
                                laïcité, de l'amitié, de l'amour, de la liberté et du plaisir de se réunir !!!!!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 text-center animate-box">
                    <div class="wedding-events">
                        <div class="ceremony-bg" style="background-image: url('{{asset("images/wedding_fete.png")}}');"></div>
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
                                        <span>21 Septembre</span>
                                    </div>
                                </div>
                                <div class="col-md-5 ">
                                    <div class="date">
                                        <i class="icon-clock2"></i>
                                        <span>16h pot de l'amitié</span>
                                        <span>19h30 cocktail / Diner</span>
                                    </div>
                                </div>
                            </div>
                            <p>Nous commencerons par un accueil avec rafraîchissements et goûters, après la cérémonie démarre la fête, non THE FIESTA pour finir jusqu'au lever du
                                soleil sur le magnifique lac d'Aydat.
                            </p>

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
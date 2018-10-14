@extends('layouts.app')

@section('content')
    {{--<div class="qbootstrap-hero" data-section="home">--}}
        {{--<div class="qbootstrap-overlay"></div>--}}
        {{--<div class="qbootstrap-cover text-center" data-stellar-background-ratio="0.5" style="background-image: url('{{asset("images/cover_bg_3.jpg")}}');">--}}
            {{--<div class="display-t">--}}
                {{--<div class="display-tc">--}}
                    {{--<div class="container">--}}
                        {{--<div class="col-md-10 col-md-offset-1">--}}
                            {{--<div class="animate-box svg-sm colored">--}}
                                {{--<img src="{{asset('images/flaticon/svg/004-nature.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                                {{--<h1 class="holder"><span>Le mariage de </span></h1>--}}
                                {{--<h2>Olivier &amp; Maryline</h2>--}}
                                {{--<p>05.05.2019</p>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div id="qbootstrap-couple" class="qbootstrap-section-gray">--}}
        {{--<div class="container">--}}
            {{--<div class="row animate-box">--}}
                {{--<div class="col-md-8 col-md-offset-2 animate-box">--}}
                    {{--<div class="col-md-12 text-center section-heading svg-sm colored">--}}
                        {{--<img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h2>Vont se marier</h2>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam accusamus, sequi, minima repellendus explicabo magni aperiam, ducimus perferendis ad quidem suscipit omnis unde veritatis pariatur. Commodi, nisi. Iusto, accusantium a.</p>--}}
                        {{--<p><strong>on Dec 28, 2017 &mdash; Boracay, Philippines</strong></p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row animate-box">--}}
                {{--<div class="col-md-8 col-md-offset-2 text-center">--}}
                    {{--<div class="col-md-5 col-sm-5 col-xs-5 nopadding">--}}
                        {{--<img src="{{asset('images/groom.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h3>Olivier De Pembroke et Montgomery</h3>--}}
                        {{--<span>Jeune Marié</span>--}}
                    {{--</div>--}}
                    {{--<div class="col-md-2 col-sm-2 col-xs-2 nopadding"><h2 class="amp-center"><img src="{{asset('images/flaticon/svg/003-luxury.svg')}}" class="svg img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></h2></div>--}}
                    {{--<div class="col-md-5 col-sm-5 col-xs-5 nopadding">--}}
                        {{--<img src="{{asset('images/bride.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h3>Maryline Chapuis</h3>--}}
                        {{--<span>La Mariée</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div id="qbootstrap-countdown" data-stellar-background-ratio="0.5" style="background-image: url('{{asset("images/cover_bg_2.jpg")}}');" data-section="wedding-day">--}}
        {{--<div class="overlay"></div>--}}
        {{--<div class="display-over">--}}
            {{--<div class="container">--}}
                {{--<div class="row animate-box">--}}
                    {{--<div class="col-md-12 section-heading text-center svg-sm colored">--}}
                        {{--<img src="{{asset('images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h2 class="">--}}
                            {{--Le jour du mariage</h2>--}}
                        {{--<span class="datewed">Vendredi 5 Mai 2019</span>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="row animate-box">--}}
                    {{--<div class="col-md-8 col-md-offset-2 text-center">--}}
                        {{--<p class="countdown">--}}
                            {{--<span id="days"></span>--}}
                            {{--<span id="hours"></span>--}}
                            {{--<span id="minutes"></span>--}}
                            {{--<span id="seconds"></span>--}}
                        {{--</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div id="qbootstrap-groom-bride" data-section="groom-bride">--}}
        {{--<div class="container">--}}
            {{--<div class="row animate-box">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="col-md-12 text-center section-heading svg-sm-2 colored">--}}
                        {{--<img src="{{asset('images/flaticon/svg/002-wedding-couple.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h2>Le Marié &amp; La Mariée</h2>--}}
                        {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nam accusamus, sequi, minima repellendus explicabo magni aperiam, ducimus perferendis ad quidem suscipit omnis unde veritatis pariatur. Commodi, nisi. Iusto, accusantium a.</p>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="couple groom text-center animate-box">--}}
                        {{--<img src="{{asset('images/groom.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<div class="desc">--}}
                            {{--<h2>Olivier De Pembroke et Montgomery</h2>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda vero totam eum, necessitatibus reprehenderit nisi, ratione neque aspernatur sapiente minus? Omnis neque labore distinctio aspernatur esse impedit laboriosam, veritatis dolorem!</p>--}}
                            {{--<ul class="social social-circle">--}}
                                {{--<li><a href="#"><i class="icon-twitter"></i></a></li>--}}
                                {{--<li><a href="#"><i class="icon-facebook"></i></a></li>--}}
                                {{--<li><a href="#"><i class="icon-instagram"></i></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6">--}}
                    {{--<div class="couple bride text-center animate-box">--}}
                        {{--<img src="{{asset('images/bride.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<div class="desc">--}}
                            {{--<h2>Maryline Chapuis</h2>--}}
                            {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Assumenda vero totam eum, necessitatibus reprehenderit nisi, ratione neque aspernatur sapiente minus? Omnis neque labore distinctio aspernatur esse impedit laboriosam, veritatis dolorem!</p>--}}
                            {{--<ul class="social social-circle">--}}
                                {{--<li><a href="#"><i class="icon-twitter"></i></a></li>--}}
                                {{--<li><a href="#"><i class="icon-facebook"></i></a></li>--}}
                                {{--<li><a href="#"><i class="icon-instagram"></i></a></li>--}}
                            {{--</ul>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div id="qbootstrap-story" data-section="story">--}}
        {{--<div class="container">--}}
            {{--<div class="row animate-box">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="col-md-12 text-center section-heading svg-sm-2">--}}
                        {{--<img src="{{asset('images/flaticon/svg/003-luxury.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h2>Notre histoire d'amour</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<ul class="timeline animate-box">--}}
                        {{--<li class="animate-box">--}}
                            {{--<div class="timeline-badge" style="background-image:url('{{asset("images/couple-1.jpg")}}');"></div>--}}
                            {{--<div class="timeline-panel">--}}
                                {{--<div class="overlay"></div>--}}
                                {{--<div class="timeline-heading">--}}
                                    {{--<h3 class="timeline-title">Nous nous rencontrons d'abord</h3>--}}
                                    {{--<span class="date">June 10, 2017</span>--}}
                                {{--</div>--}}
                                {{--<div class="timeline-body">--}}
                                    {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in .</p>--}}
                                {{--</div>--}}
                            {{--</div>First We Meet--}}
                        {{--</li>--}}
                        {{--<li class="timeline-inverted animate-box">--}}
                            {{--<div class="timeline-badge" style="background-image:url('{{asset("images/couple-2.jpg")}}');"></div>--}}
                            {{--<div class="timeline-panel">--}}
                                {{--<div class="overlay overlay-2"></div>--}}
                                {{--<div class="timeline-heading">--}}
                                    {{--<h3 class="timeline-title">Premier Rendez Vous</h3>--}}
                                    {{--<span class="date">June 10, 2017</span>--}}
                                {{--</div>--}}
                                {{--<div class="timeline-body">--}}
                                    {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in .</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="animate-box">--}}
                            {{--<div class="timeline-badge" style="background-image:url('{{asset("images/couple-3.jpg")}}');"></div>--}}
                            {{--<div class="timeline-panel">--}}
                                {{--<div class="overlay"></div>--}}
                                {{--<div class="timeline-heading">--}}
                                    {{--<h3 class="timeline-title">En Couple</h3>--}}
                                    {{--<span class="date">June 14, 2017</span>--}}
                                {{--</div>--}}
                                {{--<div class="timeline-body">--}}
                                    {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in .</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                        {{--<li class="timeline-inverted animate-box">--}}
                            {{--<div class="timeline-badge" style="background-image:url('{{asset("images/couple-4.jpg")}}');"></div>--}}
                            {{--<div class="timeline-panel">--}}
                                {{--<div class="overlay overlay-2"></div>--}}
                                {{--<div class="timeline-heading">--}}
                                    {{--<h3 class="timeline-title">Nous sommes Fiancés</h3>--}}
                                    {{--<span class="date">Sept. 01, 2017</span>--}}
                                {{--</div>--}}
                                {{--<div class="timeline-body">--}}
                                    {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in .</p>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</li>--}}
                    {{--</ul>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}


    {{--<div id="qbootstrap-testimonials" class="qbootstrap-greetings" data-section="greetings" data-stellar-background-ratio="0.5" style="background-image: url('{{asset("images/cover_bg_1.jpg")}}');">--}}
        {{--<div class="overlay"></div>--}}
        {{--<div class="container">--}}
            {{--<div class="row animate-box">--}}
                {{--<div class="col-md-12 section-heading text-center svg-sm colored">--}}
                    {{--<img src="{{asset('images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                    {{--<h2 class="">Messages doux</h2>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4 animate-box">--}}
                    {{--<div class="box-testimony ">--}}
                        {{--<blockquote>--}}
                            {{--<span class="quote"><span><i class="icon-quote-left"></i></span></span>--}}
                            {{--<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>--}}
                        {{--</blockquote>--}}
                        {{--<p class="author">John Doe</p>--}}
                    {{--</div>--}}

                {{--</div>--}}
                {{--<div class="col-md-4 animate-box">--}}
                    {{--<div class="box-testimony ">--}}
                        {{--<blockquote>--}}
                            {{--<span class="quote"><span><i class="icon-quote-left"></i></span></span>--}}
                            {{--<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>--}}
                        {{--</blockquote>--}}
                        {{--<p class="author">John Doe</p>--}}
                    {{--</div>--}}


                {{--</div>--}}
                {{--<div class="col-md-4 animate-box">--}}
                    {{--<div class="box-testimony ">--}}
                        {{--<blockquote>--}}
                            {{--<span class="quote"><span><i class="icon-quote-left"></i></span></span>--}}
                            {{--<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>--}}
                        {{--</blockquote>--}}
                        {{--<p class="author">John Doe</p>--}}
                    {{--</div>--}}

                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div id="qbootstrap-people" data-section="people">--}}
        {{--<div class="container">--}}
            {{--<div class="row animate-box">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="col-md-12 text-center section-heading svg-sm colored">--}}
                        {{--<img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h2>Les Garçons d'Honneur</h2>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-10 col-md-offset-1 subtext  ">--}}
                                {{--<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row row-bottom-padded-lg">--}}
                {{--<div class="col-md-4 text-center animate-box">--}}
                    {{--<div class="groom-men">--}}
                        {{--<img src="{{asset('images/groom-men-1.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h3>Alexandre De Pembroke et Montgomery</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 text-center animate-box">--}}
                    {{--<div class="groom-men">--}}
                        {{--<img src="{{asset('images/groom-men-2.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h3>Maxime Frottier</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 text-center animate-box">--}}
                    {{--<div class="groom-men">--}}
                        {{--<img src="{{asset('images/groom-men-3.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h3>Emmanuel Amon</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row animate-box">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="col-md-12 text-center section-heading svg-sm colored">--}}
                        {{--<img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h2>Les Demoiselles d'Honneur</h2>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-4 text-center animate-box">--}}
                    {{--<div class="groom-men">--}}
                        {{--<img src="{{asset('images/bridesmaid-1.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h3>Angel Thomas</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 text-center animate-box">--}}
                    {{--<div class="groom-men">--}}
                        {{--<img src="{{asset('images/bridesmaid-2.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h3>Kathy Shol</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-4 text-center animate-box">--}}
                    {{--<div class="groom-men">--}}
                        {{--<img src="{{asset('images/bridesmaid-3.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h3>Rose Mel</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 text-center animate-box">--}}
                    {{--<div class="groom-men">--}}
                        {{--<img src="{{asset('images/bridesmaid-4.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h3>Ann Hathway</h3>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div id="qbootstrap-when-where" data-section="when-where">--}}
        {{--<div class="container">--}}
            {{--<div class="row animate-box">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="col-md-12 text-center section-heading svg-sm colored">--}}
                        {{--<img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h2>Céremonie &amp; Fête</h2>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-10 col-md-offset-1 subtext">--}}
                                {{--<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row row-bottom-padded-md">--}}
                {{--<div class="col-md-6 text-center animate-box">--}}
                    {{--<div class="wedding-events">--}}
                        {{--<div class="ceremony-bg" style="background-image: url('{{asset("images/wed-ceremony.jpg")}}');"></div>--}}
                        {{--<div class="desc">--}}
                            {{--<h3>Cérémonie de Mariage</h3>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-2 col-md-push-5">--}}
                                    {{--<div class="icon-tip">--}}
                                        {{--<span class="icon"><i class="icon-heart-o"></i></span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-5 col-md-pull-1">--}}
                                    {{--<div class="date">--}}
                                        {{--<i class="icon-calendar"></i>--}}
                                        {{--<span>Samedi</span>--}}
                                        {{--<span>05 Mai 2019</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-5 col-md-pull-1">--}}
                                    {{--<div class="date">--}}
                                        {{--<i class="icon-clock2"></i>--}}
                                        {{--<span>10 h 00</span>--}}
                                        {{--<span>11 h 00</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>--}}
                            {{--<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-6 text-center animate-box">--}}
                    {{--<div class="wedding-events">--}}
                        {{--<div class="ceremony-bg" style="background-image: url('{{asset("images/wed-party.jpg")}}');"></div>--}}
                        {{--<div class="desc">--}}
                            {{--<h3>Fête de Mariage</h3>--}}
                            {{--<div class="row">--}}
                                {{--<div class="col-md-2 col-md-push-5">--}}
                                    {{--<div class="icon-tip">--}}
                                        {{--<span class="icon"><i class="icon-heart-o"></i></span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-5 col-md-pull-1">--}}
                                    {{--<div class="date">--}}
                                        {{--<i class="icon-calendar"></i>--}}
                                        {{--<span>Samedi</span>--}}
                                        {{--<span>05 Mai 2019</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-5 col-md-pull-1">--}}
                                    {{--<div class="date">--}}
                                        {{--<i class="icon-clock2"></i>--}}
                                        {{--<span>15 h 30</span>--}}
                                        {{--<span>4 h 00</span>--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}
                            {{--<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>--}}
                            {{--<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-12">--}}
                    {{--<div id="map" class="qbootstrap-map"></div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}



    {{--<div id="qbootstrap-started" class="qbootstrap-bg" data-section="rsvp" data-stellar-background-ratio="0.5" style="background-image: url('{{asset("images/cover_bg_1.jpg")}}');">--}}
        {{--<div class="overlay"></div>--}}
        {{--<div class="container">--}}
            {{--<div class="row animate-box">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="col-md-12 text-center section-heading svg-sm colored">--}}
                        {{--<img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h2>Tu es invité</h2>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-10 col-md-offset-1 subtext">--}}
                                {{--<h3>Inscris toi pour avoir accès à toutes les fonctionnalités et pour participer à la préparation du mariage.</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
            {{--<div class="row animate-box">--}}
                {{--<div class="col-md-10 col-md-offset-1">--}}
                    {{--<form class="form-inline" action="/landingInscription" method="post">--}}
                        {{--<input type="hidden" name="_token" value="{{ csrf_token() }}">--}}
                        {{--<div class="col-md-4 col-sm-4">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="name" class="sr-only">Nom</label>--}}
                                {{--<input type="text" class="form-control" id="name" placeholder="Nom" name="name">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-sm-4">--}}
                            {{--<div class="form-group">--}}
                                {{--<label for="email" class="sr-only">Email</label>--}}
                                {{--<input type="email" class="form-control" id="email" placeholder="Email" name="email">--}}
                            {{--</div>--}}
                        {{--</div>--}}
                        {{--<div class="col-md-4 col-sm-4">--}}
                            {{--<button type="submit" class="btn btn-default btn-block">Je participe</button>--}}
                        {{--</div>--}}
                    {{--</form>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    {{--<div id="qbootstrap-gallery" data-section="gallery">--}}
        {{--<div class="container">--}}
            {{--<div class="row animate-box">--}}
                {{--<div class="col-md-8 col-md-offset-2">--}}
                    {{--<div class="col-md-12 text-center section-heading svg-sm colored">--}}
                        {{--<img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
                        {{--<h2>Nos Photos de Selfies</h2>--}}
                        {{--<div class="row">--}}
                            {{--<div class="col-md-10 col-md-offset-1 subtext">--}}
                                {{--<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
        {{--<div class="container-fluid">--}}
            {{--<div class="row">--}}
                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="gallery animate-box">--}}
                    {{--</div>--}}
                    {{--<a class="gallery-img image-popup image-popup" href="{{asset('images/gallery-1.jpg')}}"><img src="{{asset('images/gallery-1.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>--}}
                    {{--<div class="gallery animate-box">--}}
                        {{--<a class="gallery-img image-popup" href="{{asset('images/gallery-10.jpg')}}"><img src="{{asset('images/gallery-10.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="gallery animate-box">--}}
                        {{--<a class="gallery-img image-popup" href="{{asset('images/gallery-6.jpg')}}"><img src="{{asset('images/gallery-6.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>--}}
                    {{--</div>--}}
                    {{--<div class="gallery animate-box">--}}
                        {{--<a class="gallery-img image-popup" href="{{asset('images/gallery-2.jpg')}}"><img src="{{asset('images/gallery-2.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>--}}
                    {{--</div>--}}
                    {{--<div class="gallery animate-box">--}}
                        {{--<a class="gallery-img image-popup" href="{{asset('images/gallery-5.jpg')}}"><img src="{{asset('images/gallery-5.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="gallery animate-box">--}}
                        {{--<a class="gallery-img image-popup" href="{{asset('images/gallery-7.jpg')}}"><img src="{{asset('images/gallery-7.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>--}}
                    {{--</div>--}}
                    {{--<div class="gallery animate-box">--}}
                        {{--<a class="gallery-img image-popup" href="{{asset('images/gallery-3.jpg')}}"><img src="{{asset('images/gallery-3.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>--}}
                    {{--</div>--}}
                    {{--<div class="gallery animate-box">--}}
                        {{--<a class="gallery-img image-popup" href="{{asset('images/gallery-4.jpg')}}"><img src="{{asset('images/gallery-4.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
                {{--<div class="col-md-3 col-sm-6">--}}
                    {{--<div class="gallery animate-box">--}}
                        {{--<a class="gallery-img image-popup" href="{{asset('images/gallery-8.jpg')}}"><img src="{{asset('images/gallery-8.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>--}}
                    {{--</div>--}}
                    {{--<div class="gallery animate-box">--}}
                        {{--<a class="gallery-img image-popup" href="{{asset('images/gallery-9.jpg')}}"><img src="{{asset('images/gallery-9.jpg')}}" class="img-responsive" alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>--}}
                    {{--</div>--}}
                {{--</div>--}}
            {{--</div>--}}
        {{--</div>--}}
    {{--</div>--}}

    <div id="qbootstrap-press"  data-section="blog">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>Our Blog</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="qbootstrap-press-item animate-box">
                        <div class="qbootstrap-press-img" style="background-image: url('{{asset("images/blog-1.jpg")}}')">
                        </div>
                        <div class="qbootstrap-press-text">
                            <h3 class="h2 qbootstrap-press-title">The Wedding Party <span class="qbootstrap-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="qbootstrap-press-item animate-box">
                        <div class="qbootstrap-press-img" style="background-image: url('{{asset("images/blog-2.jpg")}}')">
                        </div>
                        <div class="qbootstrap-press-text">
                            <h3 class="h2 qbootstrap-press-title">Wedding Party <span class="qbootstrap-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="qbootstrap-press-item animate-box">
                        <div class="qbootstrap-press-img" style="background-image: url('{{asset("images/blog-3.jpg")}}');">
                        </div>
                        <div class="qbootstrap-press-text">
                            <h3 class="h2 qbootstrap-press-title">Venue Wedding <span class="qbootstrap-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="qbootstrap-press-item animate-box">
                        <div class="qbootstrap-press-img" style="background-image: url('{{asset("images/blog-4.jpg")}}');">
                        </div>
                        <div class="qbootstrap-press-text">
                            <h3 class="h2 qbootstrap-press-title">About The Couple <span class="qbootstrap-border"></span></h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>
                            <p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

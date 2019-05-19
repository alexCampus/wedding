@extends('layouts.app')

@section('content')
    <div id="qbootstrap-when-where" data-section="when-where">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>Liste des Hébergements</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h3>Tout se passera dans un lieu unique, la Cocotte Bleue à Aydat.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-md">
                <div class="col-md-6 text-center animate-box">
                    <div class="wedding-events">
                        <div class="desc">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d11152.827465205091!2d2.9810843!3d45.6667473!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x52508e0f301b78eb!2sParc+r%C3%A9sidentiel+de+loisirs+%22Le+Domaine+du+Lac+d&#39;Aydat%22!5e0!3m2!1sfr!2sfr!4v1558264409867!5m2!1sfr!2sfr"
                                    width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <h3>Le Domaine du Lac </h3>
                            <p>Mobilhome 4/6 personnes <br>
                                Pour réserver contacter Delphine Delpeuch Faugère par mail au <a href="mailto:'delphinefaugere@hotmail.com'">delphinefaugere@hotmail.com</a><br>
                                Tarif : 41,6€ le mobil home la nuit, 12€ les draps par lit, 6€ le linge de toilette par personne</p>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 text-center animate-box">
                    <div class="wedding-events">
                        <div class="desc">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d23018.294355853926!2d2.992605100985485!3d45.68151076023106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f70f94eb365cf5%3A0x5d18e435ea503a55!2sAuberge+Entre+Lacs+et+Volcans!5e0!3m2!1sfr!2sfr!4v1558265008233!5m2!1sfr!2sfr"
                                    width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <h3>Entre lacs et volcans</h3>
                            <p>La Cassière – Commune AYDAT – 7 Chambres<br>
                                5 min en Voiture – 3.5 km <br>
                                Pour réserver contacter Thomas (de la part de la Cocotte Bleue) par mail au <a href="mailto:'contact@entrelacsetvolcans.fr'">contact@entrelacsetvolcans.fr</a><br>
                                04 73 87 30 36 – <a href="http://www.entrelacsetvolcans.fr" target="_blank">www.entrelacsetvolcans.fr</a></p>
                        </div>
                    </div>
                </div>

            </div>

            <div class="row row-bottom-padded-md">
                <div class="col-md-12 text-center animate-box">
                    <div class="wedding-events">
                        <div class="desc">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d16635.289990791865!2d2.973919477074349!3d45.6587570592872!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47f70f21bc32b34f%3A0xcfea3e5ebaa97f16!2sChambres+d&#39;h%C3%B4tes+Saint-Julien!5e0!3m2!1sfr!2sfr!4v1558265291179!5m2!1sfr!2sfr"
                                    width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>
                            <h3>Chambre d’hôtes St Julien</h3>
                            <p>Sur les hauteurs du Lac d’Aydat – 2 chambres<br>
                                5min en voiture<br>
                                Dans une bâtisse du XIXeme
                                Contact : 04 73 78 33 51 (de la part Cocotte Bleue) par mail au <a href="mailto:'c.dodel@orange.fr'">c.dodel@orange.fr</a><br>
                                04 73 87 30 36 – <a href="http://www.stjulien.fr" target="_blank">www.stjulien.fr</a></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
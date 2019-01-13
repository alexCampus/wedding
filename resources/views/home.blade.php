@extends('layouts.app')

@section('content')
    <div class="qbootstrap-section-gray">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 animate-box">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>Vont se marier</h2>
                        <p>Il se sont rencontrés autour d’un mange debout, ont appris à se connaitre entre l’Auvergne et l’Ile de
                            France, ils ont mêlé leurs familles respectives à l’Isle Adam en créant la communauté Chaput/DePem. Ils vont avec vous célébrer leur mariage autour d’un
                            gouter, d’une cérémonie sous le signe de l’amour et de l’amitié, partager un repas convivial, vivre une aventure pour lancer la soirée, danser jusqu’au
                            bout de
                            la nuit et pour conclure les réjouissances, partager un brunch le dimanche au bord du lac .
                        </p>
                        <p><strong>Rdv le 21 Septembre à Aydat, Auvergne à 16H</strong></p>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2 text-center">
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <img src="{{asset('images/A.jpg')}}" class="img-responsive"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h3>Olivier De Pembroke et Montgomery</h3>
                        <span>Le Marié</span>
                    </div>
                    <div class="col-md-2 col-sm-2 col-xs-2 nopadding"><h2 class="amp-center"><img
                                    src="{{asset('images/flaticon/svg/003-luxury.svg')}}" class="svg img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></h2></div>
                    <div class="col-md-5 col-sm-5 col-xs-5 nopadding">
                        <img src="{{asset('images/B.jpg')}}" class="img-responsive"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h3>Marilyne Chaput</h3>
                        <span>La Mariée</span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-countdown" data-stellar-background-ratio="0.5"
         style="background-image: url('{{asset("images/cover_bg_2.jpg")}}');" data-section="wedding-day">
        <div class="overlay"></div>
        <div class="display-over">
            <div class="container">
                <div class="row animate-box">
                    <div class="col-md-12 section-heading text-center svg-sm colored">
                        <img src="{{asset('images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg')}}"
                             class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2 class="">
                            Le jour du mariage</h2>
                        <span class="datewed">Samedi 21 Septembre 2019</span>
                    </div>
                </div>
                <div class="row animate-box">
                    <div class="col-md-8 col-md-offset-2 text-center">
                        <p class="countdown">
                            <span id="days"></span>
                            <span id="hours"></span>
                            <span id="minutes"></span>
                            <span id="seconds"></span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="lesMaries" data-section="groom-bride">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm-2 colored">
                        <img src="{{asset('images/flaticon/svg/002-wedding-couple.svg')}}" class="svg"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>Le Marié &amp; La Mariée</h2>
                        <p>Leur première Rencontre date d’Octobre 2014, il était le formateur, elle était la formée,
                            ils se sont plu mais le temps de l’amour n’était pas encore venu.
                            Celui-ci arriva dans un camping à Vias, en mai 2016 et depuis ce premier baiser échangé,
                            ils continuent de se regarder avec respect, fierté, envie mais surtout
                            beaucoup d’amour.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="couple groom text-center animate-box">
                        <img src="{{asset('images/C.jpg')}}" class="img-responsive"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <div class="desc">
                            <h2>Olivier De Pembroke et Montgomery</h2>
                            <p>Fils de Gérard et Evelyne De Pembroke et Montgomery, il a aujourd’hui 41 ans, il se
                                définit comme courageux, loyal et honnête. S’il devait être un super héros ce serait
                                Wolverine, sa
                                série
                                préférée est Games of Thrones et son activité favorite est de cuisiner pour sa grande
                                famille<br> recomposée.</p>
                            {{-- <ul class="social social-circle">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="couple bride text-center animate-box">
                        <img src="{{asset('images/D.JPG')}}" class="img-responsive"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <div class="desc">
                            <h2>Marilyne Chaput</h2>
                            <p>Fille de Fernand et Carole Cardoso, elle a aujourd’hui 39 ans, elle se définit comme
                                sincère, travailleuse et déterminée.<br> Si elle devait être une super héroïne ce serait
                                Wonder
                                Woman, sa série préférée est Engrenage et son activité favorite est de partager de
                                longues ballades en vélo avec sa grande famille recomposée.</p>
                            {{-- <ul class="social social-circle">
                                <li><a href="#"><i class="icon-twitter"></i></a></li>
                                <li><a href="#"><i class="icon-facebook"></i></a></li>
                                <li><a href="#"><i class="icon-instagram"></i></a></li>
                            </ul> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="qbootstrap-story" data-section="story">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm-2">
                        <img src="{{asset('images/flaticon/svg/003-luxury.svg')}}" class="svg"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>Notre histoire d'amour</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <ul class="timeline animate-box">
                        <li class="animate-box">
                            <div class="timeline-badge"
                                 style="background-image:url('{{asset("images/E.jpg")}}');"></div>
                            <div class="timeline-panel">
                                <div class="overlay"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">Nous nous rencontrons d'abord</h3>
                                    <span class="date">28 Octobre 2014</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Au Centre des Jeunes Dirigeants, ils passeront deux jours ensemble dans le cadre
                                        d’une formation, ils ont ri, ils se sont regardés, voire googlelisés, ce fut
                                        leur première rencontre et ni l’un ni l’autre n’imaginaient que 5 ans plus tard
                                        ils se seraient jurés fidèlité devant temoins.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            <div class="timeline-badge"
                                 style="background-image:url('{{asset("images/F.jpg")}}');"></div>
                            <div class="timeline-panel">
                                <div class="overlay overlay-2"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">Premier Rendez Vous</h3>
                                    <span class="date">19 Mai 2016</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Bourges ce sera à vie un souvenir qui ira bien au-delà de cette magnifique
                                        cathédrale qu’ils visiteront, cela restera leur premier rendez-vous, un bain
                                        partagé, du champagne, une ballade dans les rues de cette ville, le début de
                                        leur amour partagé.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="animate-box">
                            <div class="timeline-badge"
                                 style="background-image:url('{{asset("images/G.jpg")}}');"></div>
                            <div class="timeline-panel">
                                <div class="overlay"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">En Famille</h3>
                                    <span class="date">24 et 25 Septembre 2016</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Premier essai de famille recomposée en Sologne, à Center Parc, fin Septembre
                                        2016. Il y a eu des rires et des bouderies, mais surtout ils ont acquis la
                                        conviction que leurs enfants ne seraient jamais un frein à leur amour...
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="timeline-inverted animate-box">
                            <div class="timeline-badge"
                                 style="background-image:url('{{asset("images/Emmenagement.JPG")}}');"></div>
                            <div class="timeline-panel">
                                <div class="overlay overlay-2"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">Naissance d’un foyer</h3>
                                    <span class="date">18 février 2017</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Moins d’un an après leur première étreinte, l’aventure continue avec l’emménagement de toute la
                                        famille Chaput/DePem à L’Isle Adam, ce fut
                                        intense, ce fut courageux, ce fut épuisant parfois mais ce fut
                                        une put….d’étape pleine de kiffe et de souvenirs.
                                    </p>
                                </div>
                            </div>
                        </li>
                        <li class="animate-box">
                            <div class="timeline-badge"
                                 style="background-image:url('{{asset("images/G.jpg")}}');"></div>
                            <div class="timeline-panel">
                                <div class="overlay"></div>
                                <div class="timeline-heading">
                                    <h3 class="timeline-title">Elle a dit OUI</h3>
                                    <span class="date">24 Juillet 2018</span>
                                </div>
                                <div class="timeline-body">
                                    <p>Sur le parvis de la Cathédrale d’Amiens, il a osé la demander en mariage, elle
                                        a répondu instinctivement avec son cœur 1000 fois OUI, et c’est ainsi que leur
                                        aventure se poursuit jusqu’à une célébration de mariage qui aura lieu en 2019.
                                    </p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>


    <div id="qbootstrap-testimonials" class="qbootstrap-greetings" data-section="greetings"
         data-stellar-background-ratio="0.5" style="background-image: url('{{asset("images/cover_bg_1.jpg")}}');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-12 section-heading text-center svg-sm colored">
                    <img src="{{asset('images/flaticon/svg/006-flower-bell-outline-design-variant-with-vines-and-leaves.svg')}}"
                         class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                    <h2 class="">Messages doux</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 animate-box">
                    <div class="box-testimony ">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                            <p>&ldquo;Très chers Marilyne & Olivier,
                                Si la recette simple mais exquise du Bonheur devait se raconter,
                                Je pourrais, sans emphase mais avec sincérité, vous citer.
                                Votre Amour est si beau, si évident et si exemplaire,
                                Que d’aucuns ne pourraient, manifestement, le parfaire.
                                Je me souviens, émue, de votre superbe rencontre, non au sens biblique du terme;
                                Ma pudeur et la réalité m’en empêchant, et Dieu... Merci, qui, ce secret renferme ! ;-)
                                Et suis certaine que votre mariage sera un moment doux & extasiant
                                Avec vous, comment, définitivement, pourrait-il en être autrement ?
                                &rdquo;</p>
                        </blockquote>
                        <p class="author">Pauline dite Paupau</p>
                    </div>

                </div>
                <div class="col-md-4 animate-box">
                    <div class="box-testimony ">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                            <p>&ldquo;Et oui, il y a plusieurs vies dans une vie... La rencontre de ma sœur et
                                Olivier en est une belle démonstration!! Le défi est parfois grand mais
                                l'Amour donne des ailes. Alors, envolez-vous vers le bonheur, que nous sommes heureux
                                de partager avec vous !&rdquo;</p>
                        </blockquote>
                        <p class="author">Emily dite Mimi</p>
                    </div>


                </div>
                <div class="col-md-4 animate-box">
                    <div class="box-testimony ">
                        <blockquote>
                            <span class="quote"><span><i class="icon-quote-left"></i></span></span>
                            <p>&ldquo;Il y a deux ans, au bord d'une piscine, j'ai été surprise et touchée par la beauté
                                fragile d'un homme déjà amoureux mais qui ne
                                le savait pas encore. Puis, j'ai découvert et appris à connaître sa douce.
                                Voici ce que leur couple m'inspire :
                                Explosion, dans tous les sens !
                                Ébahissement, parfois
                                Éblouissant, oui, euh, on se calme et on ne se la pète pas trop quand même !
                                Énervant, c'est la jalousie qui parle (LOL)
                                Épanouissement
                                Émerveillement
                                Bref, une évidence !
                                &rdquo;</p>
                        </blockquote>
                        <p class="author">Isabelle dite Zaza</p>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <div id="lesTemoins" data-section="people">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>Les Garçons d'Honneur</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h3>Pourquoi 3 ? Et bien simplement pour représenter chaque famille qui l’a vu
                                    grandir, sa famille de sang, ses amis et enfin le CJD.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row row-bottom-padded-lg">
                <div class="col-md-4 text-center animate-box">
                    <div class="groom-men">
                        <img src="https://foxdao.net/wp-content/uploads/2017/01/Trollhunters-Photo-11.jpg"
                             class="img-responsive"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com" style="width: 400px;height: 400px;">
                        <h3>Alexandre De Pembroke et Montgomery</h3>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="groom-men">
                        <img src="{{asset('images/temoins/max.jpg')}}"
                             class="img-responsive"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com" style="width: 400px;height: 400px;">
                        <h3>Maxime Frottier</h3>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="groom-men">
                        <img src="{{asset('images/temoins/emmanuel.jpg')}}" class="img-responsive"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com" style="width: 400px;height: 400px;">
                        <h3>Emmanuel Amon</h3>
                    </div>
                </div>
            </div>
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>Les Demoiselles d'Honneur</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h3>Elles sont ses bulles d’air, elles font partie de son histoire, elles l’ont vu
                                    pleurer, rire, aimer et détester, ce sont ses amies pour la vie.</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 text-center animate-box">
                    <div class="groom-men">
                        <img src="{{asset('images/temoins/caroline.jpg')}}" class="img-responsive"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com" style="width: 400px;height: 400px;">
                        <h3>Caroline Lacoste</h3>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="groom-men">
                        <img src="{{asset('images/temoins/clemence.jpg')}}" class="img-responsive"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com" style="width: 400px;height: 400px;">
                        <h3>Clémence Aurine</h3>
                    </div>
                </div>
                <div class="col-md-4 text-center animate-box">
                    <div class="groom-men">
                        <img src="{{asset('images/temoins/delphine.jpg')}}" class="img-responsive"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com" style="width: 400px;height: 400px;">
                        <h3>Delphine Delpeuch Faugère</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="app">
        <app></app>
    </div>

    <div id="qbootstrap-gallery" data-section="gallery">
        <div class="container">
            <div class="row animate-box">
                <div class="col-md-8 col-md-offset-2">
                    <div class="col-md-12 text-center section-heading svg-sm colored">
                        <img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg"
                             alt="Free HTML5 Bootstrap Template by QBootstrap.com">
                        <h2>Nos Photos de Selfies</h2>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1 subtext">
                                <h3>Parce que l'on se Kiffe !!!!</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup image-popup" href="{{asset('images/selfieStyle/O.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/O.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/P.jpg')}}"><img
                                    src="{{asset('images/selfieStyle/P.jpg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/AAA.jpeg')}}"><img
                                    src="{{asset('images/selfieStyle/AAA.jpeg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/Photo 28-08-2016 21 45 18.jpg')}}"><img
                                    src="{{asset('images/selfieStyle/Photo 28-08-2016 21 45 18.jpg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/received_336309486720150.jpeg')}}"><img
                                    src="{{asset('images/selfieStyle/received_336309486720150.jpeg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZB.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZB.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZC.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZC.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZK.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZK.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZS.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZS.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/Q.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/Q.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/R.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/R.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/S.jpg')}}"><img
                                    src="{{asset('images/selfieStyle/S.jpg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/DSC_0819.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/DSC_0819.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/Photo 26-08-2016 20 43 06.jpg')}}"><img
                                    src="{{asset('images/selfieStyle/Photo 26-08-2016 20 43 06.jpg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/Rivière Sauvage en famille.jpg')}}"><img
                                    src="{{asset('images/selfieStyle/Rivière Sauvage en famille.jpg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/Selfie Famille 5.jpeg')}}"><img
                                    src="{{asset('images/selfieStyle/Selfie Famille 5.jpeg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZD.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZD.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZJ.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZJ.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZL.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZL.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZR.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZR.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/T.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/T.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/U.jpg')}}"><img
                                    src="{{asset('images/selfieStyle/U.jpg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/V.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/V.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/DSC_0924.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/DSC_0924.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/IMG_0518.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/IMG_0518.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/Selfie Famille.jpeg')}}"><img
                                    src="{{asset('images/selfieStyle/Selfie Famille.jpeg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/Selfie Famille 4.jpeg')}}"><img
                                    src="{{asset('images/selfieStyle/Selfie Famille 4.jpeg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZF.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZF.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZI.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZI.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZM.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZM.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZP.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZP.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/W.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/W.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/X.jpg')}}"><img
                                    src="{{asset('images/selfieStyle/X.jpg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/20161231_181626.jpg')}}"><img
                                    src="{{asset('images/selfieStyle/20161231_181626.jpg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/DSC_0932.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/DSC_0932.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/DSC_1112.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/DSC_1112.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/Selfie Famille 2.jpeg')}}"><img
                                    src="{{asset('images/selfieStyle/Selfie Famille 2.jpeg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/Selfie Famille 3.jpeg')}}"><img
                                    src="{{asset('images/selfieStyle/Selfie Famille 3.jpeg')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZG.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZG.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZH.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZH.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZN.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZN.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                    <div class="gallery animate-box">
                        <a class="gallery-img image-popup" href="{{asset('images/selfieStyle/ZO.JPG')}}"><img
                                    src="{{asset('images/selfieStyle/ZO.JPG')}}" class="img-responsive"
                                    alt="Free HTML5 Bootstrap Template by QBootstrap.com"></a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    {{--<div  data-section="blog">--}}
    {{--<div class="container">--}}
    {{--<div class="row animate-box">--}}
    {{--<div class="col-md-8 col-md-offset-2">--}}
    {{--<div class="col-md-12 text-center section-heading svg-sm colored">--}}
    {{--<img src="{{asset('images/flaticon/svg/005-two.svg')}}" class="svg" alt="Free HTML5 Bootstrap Template by QBootstrap.com">--}}
    {{--<h2>Our Blog</h2>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-10 col-md-offset-1 subtext">--}}
    {{--<h3>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</h3>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--<div class="row">--}}
    {{--<div class="col-md-6">--}}
    {{--<div class="qbootstrap-press-item animate-box">--}}
    {{--<div class="qbootstrap-press-img" style="background-image: url('{{asset("images/blog-1.jpg")}}')">--}}
    {{--</div>--}}
    {{--<div class="qbootstrap-press-text">--}}
    {{--<h3 class="h2 qbootstrap-press-title">The Wedding Party <span class="qbootstrap-border"></span></h3>--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>--}}
    {{--<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-6">--}}
    {{--<div class="qbootstrap-press-item animate-box">--}}
    {{--<div class="qbootstrap-press-img" style="background-image: url('{{asset("images/blog-2.jpg")}}')">--}}
    {{--</div>--}}
    {{--<div class="qbootstrap-press-text">--}}
    {{--<h3 class="h2 qbootstrap-press-title">Wedding Party <span class="qbootstrap-border"></span></h3>--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>--}}
    {{--<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-6">--}}
    {{--<div class="qbootstrap-press-item animate-box">--}}
    {{--<div class="qbootstrap-press-img" style="background-image: url('{{asset("images/blog-3.jpg")}}');">--}}
    {{--</div>--}}
    {{--<div class="qbootstrap-press-text">--}}
    {{--<h3 class="h2 qbootstrap-press-title">Venue Wedding <span class="qbootstrap-border"></span></h3>--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>--}}
    {{--<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--<div class="col-md-6">--}}
    {{--<div class="qbootstrap-press-item animate-box">--}}
    {{--<div class="qbootstrap-press-img" style="background-image: url('{{asset("images/blog-4.jpg")}}');">--}}
    {{--</div>--}}
    {{--<div class="qbootstrap-press-text">--}}
    {{--<h3 class="h2 qbootstrap-press-title">About The Couple <span class="qbootstrap-border"></span></h3>--}}
    {{--<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veritatis eius quos similique suscipit dolorem cumque vitae qui molestias illo accusantium...</p>--}}
    {{--<p><a href="#" class="btn btn-primary btn-sm">Learn more</a></p>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}

    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
@endsection

@section('script')
    <script src="{{asset('js/app.js')}}"></script>
@endsection


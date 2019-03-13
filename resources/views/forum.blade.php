@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <section class="panel ">
                <header class="panel-heading">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid" id="'forum">

                            <ul class="nav navbar-nav">
                                <li class="active"><a href="#">Accueil</a></li>
                                <li><a href="#">Categorie</a></li>
                                <li><a href="#">Categorie 2</a></li>
                                <li><a href="#">Categorie 3</a></li>
                            </ul>
                            <a href="{{route('formForum' , '#test')}}" style="margin-top: 2%; cursor: pointer" class="btn-sm btn-primary pull-right">Créer un sujet</a>
                        </div>
                    </nav>
                </header>
                <section class="row panel-body">
                    <section class="col-md-6">
                        <section class="row">
                            <ul class="col-md-6">
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                            </ul>
                            <ul class="col-md-6">
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                                <li class="list-unstyled"><a href="#"><i class="glyphicon glyphicon-comment"> </i>Responsive Web design</a>
                                </li>
                            </ul>
                        </section>
                    </section>
                    <section class="col-md-2">
                        <ul id="post-topic">
                            <li class="list-unstyled"> Topics: 62</li>
                            <li class="list-unstyled"> Posts: 445</li>
                        </ul>
                    </section>
                    <section class="col-md-3">
                        <h2><a href="#"><i class="icon-link"></i> Last Post Goes from here! </a></h2>
                        <hr>
                        <a href="#"><i class="glyphicon glyphicon-user"></i> Mohammad sharifi </a><br>
                        <a href="#"><i class="glyphicon glyphicon-calendar"></i> 2014-09-15 17:57 PM </a>
                    </section>

                </section>


            </section>

        </div>
    </div>
@endsection
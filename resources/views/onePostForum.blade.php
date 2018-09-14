@extends('layouts.app')

@section('content')
    <section class="container">

        <section class="row clearfix">
            <section class="col-md-12 column">


                <div class="row clearfix">
                    <div class="col-md-12 column">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <section class="panel-title">
                                    <time class="pull-right">
                                        <i class="fa fa-calendar"></i> 2014-09-15 , <i class="fa fa-clock-o"></i> 1:35 pm
                                    </time>
                                    <section class="pull-left" id="id">
                                        <abbr title="count of posts in this topic">#1</abbr>
                                    </section>
                                </section>
                            </div>
                            <section class="row panel-body">
                                <section class="col-md-9">
                                    <h2> <i class="fa fa-smile-o"></i> Whats the name of the element of this website?</h2>
                                    <hr>
                                    Hi, I'm wondering whats the name of the element that appaers in this website: Startupbus

                                    Im talking about the images that remain static in the back and change everytime a new section is reached.

                                    Is there a framework that does this?

                                    Thank you for helping
                                </section>

                                <section id="user-description" class="col-md-3 ">
                                    <section class="well">
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-cricle"></i>MOHAMMAD SHARIFI<span class="caret"></span></a>
                                            <ul class="dropdown-menu" role="menu">
                                                <li><a href="#"><i class="fa fa-user"></i> See profile</a></li>
                                                <li><a href="#"><i class="fa fa-envelope"></i> Send PM</a></li>
                                                <li><a href="#"><i class="fa fa-code"></i>View all Articles</a></li>
                                                <li><a href="#"><i class="fa fa-th-list"></i>View all Posts</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="fa fa-plus"></i>Add to contact List</a></li>
                                                <li class="divider"></li>
                                                <li><a href="#"><i class="fa fa-cogs"></i> Manage User (for adminstrator)</a></li>
                                            </ul>
                                        </div>
                                        <figure>
                                            <img class="img-rounded img-responsive" src="http://www.webdesignforums.net/img/wdf_avatar.jpg" alt="Mohammad Sharifi's avatar">
                                            <figcaption class="text-center">مدیر کل سایت <br><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star-half"></i> </figcaption>
                                        </figure>
                                        <dl class="dl-horizontal">
                                            <dt>joined date:</dt>
                                            <dd>15 September 2014</dd>
                                            <dt>Posts:</dt>
                                            <dd>785</dd>
                                            <dt>plus:</dt>
                                            <dd>+89</dd>
                                            <dt>like:</dt>
                                            <dd>150 like in 50 post</dd>
                                        </dl>
                                    </section>
                                </section>

                            </section>
                            <div class="panel-footer">
                                <div class="row">
                                    <section class="col-md-2 ">
                                        <i class="fa fa-thumbs-up "></i><a href="#"> Thanks </a>| <i class="fa fa-warning "></i><a href="#"> Report </a>
                                    </section>
                                    <section id="thanks" class="col-md-6">
                                        <small><a href="#" data-toggle="tooltip" title="You and david,ehsan,john doe">  who L<i class="fa fa-heart "></i>ve this!</a> </small><br>

                                    </section>
                                    <section class="col-md-4">
                          <span class="fa-stack">
                              <i class="fa fa-quote-right fa-stack-1x"></i>
                              <i class="fa fa-comment-o fa-lg fa-stack-1x"></i>
                          </span><a href="#"> Reply With Quote </a> |
                                        <i class="fa fa-mail-reply "></i><a href="#"> Reply </a>|
                                        <i class="fa fa-edit "></i><a href="#"> Edit Post </a>
                                    </section>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>



            </section>
        </section>
    </section>
@endsection
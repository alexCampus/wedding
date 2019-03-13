@extends('layouts.app')

@section('content')
    <section class="container" id="test">
        <div class="row">
            <div class="col-md-12">
                <h2>Ici tu es dans un espace inconnu pour Marilyne et Olivier. Prends bien soin de ne pas leur en parler</h2>
                <h3>Tu peux nous envoyer les photos et les videos que tu as d'eux pour que nous leur concoctons un joli film suruprise pour le jour du mariage</h3>
                <form class="form-horizontal" method="post" action="{{url('/media')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="media" class="control-label col-xs-2">Media</label>
                        <div class="col-xs-10">
                            <input type="file" class="form-control" id="media" name="media" placeholder="Media">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
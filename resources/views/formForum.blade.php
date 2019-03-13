@extends('layouts.app')

@section('content')
    <section class="container" id="test" style="margin-top: 5%">
        <div class="row">
            <div class="col-md-10">
                <form class="form-horizontal" action="{{route('storePost')}}" method="post">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label for="envan" class="control-label col-xs-2">Name</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" name="title" placeholder="blabla">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="envan" class="control-label col-xs-2">Message</label>
                        <div class="col-xs-10">
                            <textarea class="form-control" name="content" placeholder="blablabla"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="cat" class="control-label col-xs-2">Categorie</label>
                        <div class="col-xs-10">
                            <select id="cat" name="categories">
                                @foreach($categories as $cat)
                                    <option value="{{$cat->id}}">{{ucfirst($cat->name)}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>


                    <!--<div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <div class="checkbox">
                                <label><input type="checkbox">Subscribe</label>
                            </div>
                        </div>
                    </div>-->
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
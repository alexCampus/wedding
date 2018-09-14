@extends('layouts.app')

@section('content')
    <section class="container" id="test">
        <div class="row">
            <div class="col-md-10">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="envan" class="control-label col-xs-2">Name</label>
                        <div class="col-xs-10">
                            <input type="text" class="form-control" id="envan" placeholder="blabla">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="envan" class="control-label col-xs-2">Message</label>
                        <div class="col-xs-10">
                            <textarea type="text" class="form-control" id="envan" placeholder="blablabla"></textarea>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="pedar" class="control-label col-xs-2">Categorie</label>
                        <div class="col-xs-10">
                            <select id="pedar">
                                <option value="volvo">Volvo</option>
                                <option value="saab">Saab</option>
                                <option value="opel">Opel</option>
                                <option value="audi">Audi</option>
                            </select>
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-xs-offset-2 col-xs-10">
                            <div class="checkbox">
                                <label><input type="checkbox">Subscribe</label>
                            </div>
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
@extends('layouts.app')

@section('content')
    <div id="qbootstrap-when-where" data-section="when-where">
        <div class="container">
            <p>Nombre d'inscrit : {{count($lstLanding)}}</p>
            <table class="table">
                <thead>
                <tr>
                    <th>Nom</th>
                    <th>Email</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lstLanding as $landing)
                    <tr>
                        <td>{{ucfirst(mb_strtolower($landing->name))}}</td>
                        <td>{{$landing->email}}</td>
                        <td>{{$landing->age}}</td>
                        <td>Accompagné de : @if(count($landing->participants) <= 0) Personne @endif
                            <ol>
                                @foreach($landing->participants as $par)
                                    <li><i>{{ucfirst(mb_strtolower($par->firstname))}} {{ucfirst(mb_strtolower($par->name))}} {{$par->age}} ans</i></li>
                                @endforeach
                            </ol>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
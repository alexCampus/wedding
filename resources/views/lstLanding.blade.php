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
                        <td>{{ucfirst(strtolower($landing->name))}}</td>
                        <td>{{$landing->email}}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
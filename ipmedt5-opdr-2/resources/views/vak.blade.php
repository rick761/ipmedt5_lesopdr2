@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> Vak: {{ $huidige_module->name  }} </div>

                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success">
                                {{ session('status') }}
                            </div>
                        @endif

                        @if( ! empty($message))
                            <div class="alert alert-info">
                                <strong>{{ $message }}</strong>
                            </div>
                        @endif

                        <p> behaald cijfer:: {{$behaald_cijfer}}</p>

                        <p> vaardigheid voor dit vak: </p>
                        <ul>
                            @foreach ( $huidige_module->Vaardigheden as $vaardigheid)
                                <li>{{$vaardigheid->name}}</li>
                            @endforeach
                        </ul>




                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

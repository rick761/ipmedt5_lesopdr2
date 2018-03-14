@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> You are logged in!</div>

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

                        <p>Zoek of kies je module.</p>

                        <div class="dropdown" style="margin:10px 0;">
                            <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                Kies
                                <span class="caret"></span>
                            </button>
                            <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                @foreach ($modules as $module)
                                    <li><a href="/vak/{{$module->id}}">{{$module->name}}</a></li>
                                @endforeach

                            </ul>
                        </div>

                        <div class="input-append span12" style="margin:10px 0;">
                            <form method="post" action="{{ route('search') }}">
                                @csrf
                                <input name="searchquery" type="text" class="search-query" placeholder="Search">
                                <button type="submit" class="btn">Zoek</button>
                            </form>
                        </div>


                </div>
            </div>
        </div>
    </div>
</div>
@endsection

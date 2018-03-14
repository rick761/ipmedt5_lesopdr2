@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"> welcome bij het admin panel </div>

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
                        <form method="post" action="{{route('saveCijfers')}}">
                            @csrf
                            <table class="table table-striped">
                                <thead>
                                <tr>
                                        <th scope="col">***</th>
                                    @foreach ($modules as $module)
                                        <th scope="col">{{$module->name}}, ({{$module->id}}) </th>
                                    @endforeach
                                </tr>
                                </thead>
                                <tbody>
                                    @foreach($studenten as $student)
                                    <tr>
                                        <th scope="row"> {{ $student->name }} ({{$student->id}}) </th>
                                        @foreach($modules as $module)
                                            <?php $value = ''; ?>
                                            <th scope="row">
                                                @foreach($student->cijfers as $behaald_cijfer)
                                                    @if ($behaald_cijfer->module_id == $module->id)
                                                        <?php
                                                            $value = $behaald_cijfer->cijfer;
                                                        ?>
                                                    @endif
                                                @endforeach
                                                <input name="{{$student->id}}_{{$module->id}}" type="label" class="form-control" value="{{$value}}">
                                            </th>
                                        @endforeach
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <button type="submit" class="btn btn-primary btn-block">Save</button>
                        </form>



                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')

@section('content')
    <div class="websites-conteiner">
        <div>Websites</div>

        @foreach($websites as $website)
            <div>{{$website->websiteName}}</div>;
        @endforeach
    </div>
@endsection

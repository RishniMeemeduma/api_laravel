@extends('template.layout')

@section('content')
<div class="row">
    <div class="col"><a href="{{ route('playerController.create')}}" class="btn btn-primary">Add new Player</a></div>
</div>
@if($messages=Session::get('success'))
<div class="row">
    <div class="alert alert-success">
        {{ $message }}
    </div>
    
</div>
@endif
<table class="table table-hover">
    <tr>
    <th>ID</th>
    <th>name</th>
    <th>balance</th>
    </tr>
    @foreach($all_bets as $bet)
    <tr>
        <td>{{ $bet->id}}</td>
        <td>{{ $bet->name }}</td>
        <td>{{ $bet->balance }}</td>
    </tr>
    @endforeach
</table>

@endsection
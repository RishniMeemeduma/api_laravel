@extends('template.layout')

@section('content')
<div class="row">
    <div class="col"><a href="{{ route('betController.create')}}" class="btn btn-primary">Add new Bet</a></div>
</div>
@if($messages=Session::get('success'))
<div class="row">
    <div class="alert alert-success">
        {{ $messages }}
    </div>
    
</div>@endif
@if($messages=Session::get('error'))
<div class="row">
    <div class="alert alert-success">
        {{ $messages }}
    </div>
    
</div>@endif
<table class="table table-hover">
    <tr>
    <th>ID</th>
    <th>Stake_amount</th>
    </tr>
    @foreach($all_bets as $bet)
    <tr>
        <td>{{ $bet->id}}</td>
        <td>{{ number_format($bet->stake_amount,2,'.',',') }}</td>
    </tr>
    @endforeach
</table>

@endsection
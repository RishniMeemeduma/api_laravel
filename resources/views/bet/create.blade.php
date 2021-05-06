@extends('template.layout')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class='pull-left'>Create bet</div>
        <div class="pull-right"><a class='btn btn-primary' href="{{ route('betController.index') }}">Back</a></div>
    </div>
</div>
@if($errors->any())
<div class="row">
    <div class="alert alert-warning">
        @foreach($errors->all() as $error)
        <p>{{ $error }}</p>
        @endforeach
    </div>
</div>
@endif


<div class="">
    <form action="{{ route('betController.store') }}" method="POST">
        <div class="row">
            <div class="col-md-12">
                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                <div class="form-group">
                    <strong>Player Id: </strong>
                    <input type="number" name="player_id" class="form-control">
                    <strong>Player name: </strong>
                    <input type="text" name="name" class="form-control">
                    <strong>Stake amount: </strong>
                    <input type="number" name="stake_amount" class="form-control">
                    <strong>Selections id: </strong>
                    <input type="number" name="selection[id]" class="form-control">
                    <strong>Selections odd: </strong>
                    <input type="text" name="selection[odd]" class="form-control">
                </div>
            </div>
            
            <div class="col-md-12">
                <button type="submit" class="btn btn-primary">Submit</button>
                
            </div>
    </form>
    
</div>
@endsection
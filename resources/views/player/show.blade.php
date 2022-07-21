@extends('layouts.app')

@section('template_title')
    {{ $player->name ?? 'Show Player' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Player</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('players.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">

                        <div class="form-group">
                            <strong>Name:</strong>
                            {{ $player->name }}
                        </div>
                        <div class="form-group">
                            <strong>Character Id:</strong>
                            {{ $player->characters_name }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

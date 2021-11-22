@extends('layouts.app')

@section('content')
<div class="container container-central">
    <div class="row">
        <div class="col-md-2">
            <div class="bloco">
                <div class="card-header">{{ __('Reservas') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    {{ __('Cadastrar') }}<br/>
                    {{ __('Listar') }}
                </div>
            </div>
        </div>

        <div class="col-md-2">
            <div class="bloco">
                <div class="card-header">{{ __('Hospedes') }}</div>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        <a>{{ __('Cadastrar') }}</a><br/>
                        <a>{{ __('Listar') }}</a>
                </div>
            </div>
        </div>

    </div>
</div>
@endsection

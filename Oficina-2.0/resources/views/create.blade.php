@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Cadastro de Orçamento') }}</div>

                <div class="card-body">
                    <form method="POST" action="/store">
                        @csrf

                        <div class="form-group row">
                            <label for="orcamento_id" class="col-md-4 col-form-label text-md-right">{{ __('ID') }}</label>

                            <div class="col-md-6">
                                <input id="orcamento_id" type="text" class="form-control @error('orcamento_id') is-invalid @enderror" name="orcamento_id" value="{{ old('orcamento_id') }}" autocomplete="orcamento_id" autofocus>

                                @error('orcamento_id')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="cliente" class="col-md-4 col-form-label text-md-right">{{ __('Cliente') }}</label>

                            <div class="col-md-6">
                                <input id="cliente" type="text" class="form-control @error('cliente') is-invalid @enderror" name="cliente" value="{{ old('cliente') }}" autocomplete="cliente" autofocus>

                                @error('cliente')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="data" class="col-md-4 col-form-label text-md-right">{{ __('Data') }}</label>

                            <div class="col-md-6">
                                <input id="data" type="date" class="form-control @error('data') is-invalid @enderror" name="data" value="{{ old('data') }}" autocomplete="data" autofocus>

                                @error('data')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="hora" class="col-md-4 col-form-label text-md-right">{{ __('Hora') }}</label>

                            <div class="col-md-6">
                                <input id="hora" type="time" class="form-control @error('hora') is-invalid @enderror" name="hora" value="{{ old('hora') }}" autocomplete="hora" autofocus>

                                @error('hora')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="vendedor" class="col-md-4 col-form-label text-md-right">{{ __('Vendedor') }}</label>

                            <div class="col-md-6">
                                <input id="vendedor" type="text" class="form-control @error('vendedor') is-invalid @enderror" name="vendedor" value="{{ old('vendedor') }}" autocomplete="vendedor" autofocus>

                                @error('vendedor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="descricao" class="col-md-4 col-form-label text-md-right">{{ __('Descrição') }}</label>

                            <div class="col-md-6">
                                <input id="descricao" type="text" class="form-control @error('descricao') is-invalid @enderror" name="descricao" value="{{ old('descricao') }}" autocomplete="descricao" autofocus>

                                @error('descricao')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="valor" class="col-md-4 col-form-label text-md-right">{{ __('Valor orçado') }}</label>

                            <div class="col-md-6">
                                <input id="valor" type="text" class="form-control @error('valor') is-invalid @enderror" name="valor" value="{{ old('valor') }}" autocomplete="valor" autofocus>

                                @error('valor')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Registrar') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

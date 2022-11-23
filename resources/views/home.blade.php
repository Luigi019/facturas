@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        @guest
                                @if (auth()->user()->role == 'SuperAdmin') 
                                 Productos 
                     <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                 Ver Productos
                                </a>
                             @endif
                             @if (auth()->user()->role == 'Admin') 
                                 Generar
                     <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                 Facturas
                                </a>
                             @endif
                                @else 
                                  Comprar 
                     <a href="{{ route('products.index') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                 Productos
                                </a>
                        @endguest
                   
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

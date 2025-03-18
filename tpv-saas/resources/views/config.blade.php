@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Ajustes de funciones') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('save-config') }}">
                        @csrf

                        <div class="form-group">
                            <label>{{ __('Cierres de caja por turnos') }}</label>
                            <input type="checkbox" name="cash_closures" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ __('Función de reloj') }}</label>
                            <input type="checkbox" name="clock_function" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ __('Tickets abiertos') }}</label>
                            <input type="checkbox" name="open_tickets" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ __('Impresoras de cocina') }}</label>
                            <input type="checkbox" name="kitchen_printers" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ __('Pantalla para clientes') }}</label>
                            <input type="checkbox" name="customer_screen" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ __('Tipo de pedido') }}</label>
                            <input type="checkbox" name="order_type" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ __('Notificaciones de stock bajo') }}</label>
                            <input type="checkbox" name="low_stock_notifications" class="form-control">
                        </div>

                        <div class="form-group">
                            <label>{{ __('Alertas de stock negativo') }}</label>
                            <input type="checkbox" name="negative_stock_alerts" class="form-control">
                        </div>

                        <button type="submit" class="btn btn-primary">{{ __('Guardar') }}</button>
                        <a href="{{ route('home') }}" class="btn btn-secondary">{{ __('Cancelar') }}</a>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
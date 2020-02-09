@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    
                    @if (session('status'))
                        <div class="alert alert-success" role="alert"   >
                            {{ session('status') }}
                        </div>
                    @endif
                    Selamat Datang, {{ Auth::user()->name }}<br><br>
                    <a class="btn btn-primary" href="{{ route('admin.index') }}">Semua Produk</a>
                    <a class="btn btn-primary" href="{{ route('admin.orders') }}">Semua Order</a>
                    <a class="btn btn-secondary" href="{{ route('admin.create') }}">Tambah Produk</a>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection

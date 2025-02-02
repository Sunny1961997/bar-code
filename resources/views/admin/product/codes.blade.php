@extends('admin.layouts.header')

@section('content')
<div class="container-fluid px-4">
    <h1 class="mt-4">Product QR Code and Barcode</h1>

    <div class="card mb-4">
        <div class="card-header">
            <h2>QR Code and Barcode</h2>
        </div>
        <div class="card-body">
            <div class="row">
                <!-- QR Code Section -->
                <div class="col-md-6 mb-3">
                    <h3>QR Code</h3>
                    <img src="data:image/png;base64,{{ $qrCodeBase64 }}" alt="QR Code" class="img-fluid">
                </div>
                <!-- Barcode Section -->
                <div class="col-md-6 mb-3">
                    <h3>Barcode</h3>
                    <img src="data:image/png;base64,{{ $barcodeBase64 }}" alt="Barcode" class="img-fluid">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
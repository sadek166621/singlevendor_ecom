@extends('FrontEnd.master')
@section('content')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <main class="main">
       <div class="card">
            <div class="card-body">
                <h3>Invoice#<span>{{ $invoice_no }}</span></h3>
            </div>
       </div>
    </main>

@endsection
@push('js')

@endpush

@extends('master')

@section('content')
    <div class="countainer">
        Product Page
        
        @php //script php secara manual salah satu syntax yang menggunakan end 
            //$products = ['apple', 'banana', 'orange', 'starfruit']; //$ itu artinya memanggil satu variabel (memanggil sebuah variable yang bernama product)
        @endphp

        {{-- jika si product itu kosong maka kita tampilin productnya kosong --}}

        {{-- ini if else tamplate --}}
        @if(count($products) < 1) {{-- ini kalo misal ga ada --}}
            <p> No product available...</p>
        @else
            <p>Product available...</p>
        @endif

        {{-- for tamplate --}}
        {{-- @foreach ( [array] as [nama var per item])
             --ISI CODENYA--
            @endforeach --}}
        @foreach ($products as $item)
            <div class="card">
                <div class="card-body">
                    {{ $item }} {{-- kalo double kurung kurawal itu cma buat text aja  --}}
                </div>
            </div>
        @endforeach
    </div>
@endsection
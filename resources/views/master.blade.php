{{-- Mengimpor file SCSS untuk styling --}}
{{-- resources/sass/app.scss --}}

{{-- Mengimpor file JS untuk interaktivitas (seperti toggle navbar) --}}
{{-- resources/js/app.js --}}

<head>
    {{-- Memuat file SCSS dan JS dengan Vite --}}
    @vite(["resources/sass/app.scss", "resources/js/app.js"])
</head>

{{-- Awal navbar utama --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-primary"> {{-- Mengatur navbar berwarna biru dengan teks terang --}}
    <div class="container-fluid"> {{-- Membuat navbar melebar penuh --}}
        
        {{-- Logo atau judul website --}}
        <a href="#" class="navbar-brand">Website saya</a> {{-- Brand website --}}
        
        {{-- Tombol untuk toggle navbar saat layar kecil --}}
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navitems" aria-controls="navitems" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span> {{-- Ikon hamburger --}}
        </button>

        {{-- Isi menu yang akan ditampilkan/ditutup oleh tombol toggle --}}
        <div class="collapse navbar-collapse" id="navitems">
            
            {{-- Daftar menu navigasi --}}
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"> {{-- me-auto untuk mendorong item form ke kanan --}}
                
                {{-- Item menu Home --}}
                <li class="nav-item">
                    <a href="/" class="nav-link">Home</a> {{-- Redirect ke halaman utama --}}
                </li>

                {{-- Item menu Product --}}
                <li class="nav-item">
                    <a href="/product" class="nav-link">Product</a> {{-- Redirect ke halaman produk --}}
                </li>

                {{-- Item menu About Us --}}
                <li class="nav-item">
                    <a href="/about-us" class="nav-link">About Us</a> {{-- Redirect ke halaman tentang kami --}}
                </li>

                {{-- Item menu Profile --}}
                <li class="nav-item">
                    <a href="/user/profile" class="nav-link">Profile</a> {{-- Redirect ke halaman profil pengguna --}}
                </li>
            </ul>

            {{-- Form pencarian --}}
            <form class="d-flex" action="/search" method="GET" role="search"> {{-- d-flex membuat input dan tombol sejajar --}}
                <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search"> {{-- Input pencarian --}}
                <button class="btn btn-light" type="submit">Search</button> {{-- Tombol cari --}}
            </form>
        </div>
    </div>
</nav>
{{-- Akhir navbar --}}

{{-- Konten utama halaman --}}
<div>
    {{--about us page from about-us.blade.php--}} {{-- Menampilkan isi halaman About Us --}}
    @yield('content')
</div>
@extends('layouts.app')

@section('content')
<style>
    .tentang {
        max-width: 900px;
        margin: auto;
        background: white;
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0 3px 12px #00000015;
        line-height: 1.8;
    }

    .tentang h1 {
        color: #765037;
        text-align: center;
        margin-bottom: 25px;
    }

    .tentang h2 {
        color: #503322;
        margin-top: 20px;
    }

    .tentang p {
        margin-top: 10px;
        text-align: justify;
    }
</style>

<div class="tentang">
    <h1>Tentang Kafe Nusantara</h1>

    <p>
        Kafe Nusantara merupakan tempat yang menyediakan berbagai
        pilihan makanan dan minuman dengan cita rasa yang lezat.
        Kami hadir untuk memberikan pengalaman menikmati hidangan
        dalam suasana yang nyaman dan menyenangkan.
    </p>

    <h2>Visi Kami</h2>
    <p>
        Menjadi kafe pilihan masyarakat dengan pelayanan terbaik
        dan produk berkualitas.
    </p>

    <h2>Misi Kami</h2>
    <p>
        Menyediakan makanan dan minuman berkualitas, menjaga
        kebersihan, serta memberikan pelayanan yang ramah kepada
        setiap pelanggan.
    </p>

    <h2>Komitmen Kami</h2>
    <p>
        Kami berkomitmen untuk terus meningkatkan kualitas produk
        dan pelayanan agar pelanggan mendapatkan pengalaman terbaik.
    </p>
</div>
@endsection
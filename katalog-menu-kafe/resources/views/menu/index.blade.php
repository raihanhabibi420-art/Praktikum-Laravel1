@extends('layouts.app')

@section('content')

<style>
    .hero {
        text-align: center;
        padding: 80px 20px;
        background: linear-gradient(135deg, #3b251b, #765037);
        color: white;
        border-radius: 15px;
    }

    .hero h1 {
        font-size: 40px;
        color: #e5bd75;
        margin-bottom: 20px;
    }

    .hero p {
        font-size: 18px;
        margin-bottom: 30px;
    }

    .btn-menu {
        display: inline-block;
        background: #d6ad60;
        color: #2b1b14;
        padding: 13px 28px;
        border-radius: 8px;
        text-decoration: none;
        font-weight: bold;
    }

    .section-title {
        text-align: center;
        margin: 40px 0 20px;
        color: #503322;
    }

    .welcome {
        text-align: center;
        padding: 30px 10px;
        line-height: 1.8;
    }
</style>

<section class="hero">
    <h1>Selamat Datang di Kafe Nusantara</h1>

    <p>
        Nikmati berbagai pilihan makanan dan minuman
        dengan cita rasa terbaik.
    </p>

    <a href="/menu" class="btn-menu">
        Lihat Menu Kami
    </a>
</section>

<h2 class="section-title">Tentang Kafe Kami</h2>

<div class="welcome">
    <p>
        Kafe Nusantara merupakan tempat yang nyaman
        untuk menikmati makanan dan minuman bersama
        teman, keluarga, maupun rekan kerja.
    </p>
</div>

@endsection
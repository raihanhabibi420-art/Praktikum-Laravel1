@extends('layouts.app')

@section('content')
<style>
    .judul {
        text-align: center;
        color: #503322;
        margin-bottom: 30px;
    }

    .kategori-container {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        gap: 20px;
    }

    .kategori-card {
        background: white;
        padding: 30px 20px;
        text-align: center;
        border-radius: 12px;
        box-shadow: 0 3px 10px #00000015;
    }

    .kategori-card h3 {
        color: #765037;
        margin: 12px 0;
    }

    .kategori-card p {
        line-height: 1.5;
    }

    .ikon {
        font-size: 45px;
    }
</style>

<h1 class="judul">Kategori Menu</h1>

<div class="kategori-container">
    <div class="kategori-card">
        <div class="ikon">🍔</div>
        <h3>Makanan</h3>
        <p>Berbagai pilihan makanan lezat dan mengenyangkan.</p>
    </div>

    <div class="kategori-card">
        <div class="ikon">☕</div>
        <h3>Minuman</h3>
        <p>Minuman segar dan kopi dengan cita rasa istimewa.</p>
    </div>

    <div class="kategori-card">
        <div class="ikon">🍰</div>
        <h3>Dessert</h3>
        <p>Aneka hidangan penutup yang manis dan nikmat.</p>
    </div>
</div>
@endsection
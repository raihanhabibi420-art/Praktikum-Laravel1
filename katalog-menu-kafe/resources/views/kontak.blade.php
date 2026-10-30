@extends('layouts.app')

@section('content')
<style>
    .kontak {
        max-width: 700px;
        margin: auto;
        background: white;
        padding: 35px;
        border-radius: 15px;
        box-shadow: 0 3px 12px #00000015;
    }

    .kontak h1 {
        text-align: center;
        color: #765037;
        margin-bottom: 25px;
    }

    .kontak p {
        margin: 18px 0;
        line-height: 1.7;
    }
</style>

<div class="kontak">
    <h1>Hubungi Kami</h1>

    <p>Silakan hubungi Kafe Nusantara untuk informasi dan pertanyaan.</p>

    <p><strong>Nama:</strong> Kafe Nusantara</p>
    <p><strong>Alamat:</strong> Manonjaya, Kabupaten Tasikmalaya, Jawa Barat, Indonesia</p>
    <p><strong>Email:</strong> kafenusantara@email.com</p>
    <p><strong>Telepon:</strong> 087823826446</p>

    <p>Terima kasih telah mengunjungi Kafe Nusantara.</p>
</div>
@endsection
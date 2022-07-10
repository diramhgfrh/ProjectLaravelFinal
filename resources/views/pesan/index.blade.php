@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <a href="{{ url('home')  }}" class="btn btn-primary">Kembali</a>
        </div>
        <div class="col-md-12 mt-2">
            <nav aria-label="breadcrumb">
  <ol class="breadcrumb">
    <li class="breadcrumb-item"><a href="{{ url('home')  }}" >Home</a></li>
    <li class="breadcrumb-item active" aria-current="page">Obat</li>
  </ol>
</nav>
        </div>
        <div class="col-md-12 mt-1">
            <div class="card">
                <div class="card-header">
                    @foreach($barg as $brg)
                    {{-- <h1>{{ $brg->nama_barang}}</h1> --}}
                   @endforeach
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6 mt-3">
                            <h2>{{ $brg->nama_barang}}</h2>
                            <table class="table border bordered">
                                <tbody>
                                    <tr>
                                        <td>Harga</td>
                                        <td>:</td>
                                        <td>Rp. {{ number_format($brg->harga) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Stok</td>
                                        <td>:</td>
                                        <td> {{ number_format($brg->stok) }}</td>
                                    </tr>
                                    <tr>
                                        <td>Keterangan</td>
                                        <td>:</td>
                                        <td> <p> <strong>Deskripsi</strong> 

                                            OBH COMBI PLUS BATUK FLU merupakan obat batuk dengan kandungan OBH, Paracetamol, Ephedrine HCl, dan Chlorphenamine maleat 
                                            yang digunakan untuk meredakan batuk disertai gejala-gejala flu seperti demam, sakit kepala, hidung tersumbat, dan bersin-bersin.
                                             <br>
                                            <strong>Indikasi Umum</strong>
                                            Obat ini digunakan untuk meredakan batuk yang disertai gejala-gejala flu seperti demam, sakit kepala, hidung tersumbat, dan bersin-bersin.
                                        <br>
                                        <strong>Efek Samping
                                            </strong>Mengantuk, gangguan pencernaan, insomnia, gelisah, eksitasi, tremor, takikardia, aritmia, mulut kering.                                            
                                        </p></td>
                                    </tr>
                                    <tr>
                                        <td>gambar</td>
                                        <td>:</td>
                                        <td> <img src="obh.jpg" class="img-fluid"></td>
                                    </tr> 

                                   
                                    <tr>
                                        <td>Jumlah Pesan</td>
                                        <td>:</td>
                                        <td>
                                            <form  method="post" action="">
                                            
                                            @csrf
                                            <input type="text" name="jumlah_pesan" class="form-control"
                                            required="">
                                            <button type="submit" class="btn btn-primary mt-3">Masukkan Keranjang</button>
                                        </form>
                                    </td>
                                    </tr>
                                   
                                   
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

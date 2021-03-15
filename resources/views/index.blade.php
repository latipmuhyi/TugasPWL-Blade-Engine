@extends('layout/main')

@section('Title', 'Ini Halaman Utama')



@section('container')
{{-- Home --}}
<div class="jumbotron jumbotron-fluid">
    <div id="carouselExampleFade" class="carousel slide carousel-fade cc" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="/img/image1.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/image2.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="/img/image2.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>

        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade"  data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container">
    <div class="row por">
        <div class="col-lg-11 mx-auto">
            <div class="kotak">
                <div class="row">
                    <div class="col">
                        <h5 class="text-center">Biodata</h5>
                        <div class="row">
                            <div class="col">
                                <img src="/img/latip.jpg" class="prof" width="100" alt="">
                            </div>
                            <div class="col pp">
                                <p>5520119082</p>
                                <p>Abdul Latip Muhyi</p>
                                <p>Fakultas Teknik</p>
                                <p>Prodi Informatika</p>
                                <p>Kelas C</p>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="text-center">Riwayat Pendidikan</h5>
                        <div class="row">
                            {{-- <div class="col">
                                <img src="/img/latip.jpg" class="prof" width="100" alt="">
                            </div> --}}
                            <div class="col pp">
                                <table>
                                    <tr>
                                        <td><p>SD</p></td>
                                        <td><p>:</p></td>
                                        <td><p>SDN Babakan</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>SLTP</p></td>
                                        <td><p>:</p></td>
                                        <td><p>SMPN 1 Cijati</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>SLTA</p></td>
                                        <td><p>:</p></td>
                                        <td><p>SMKN 1 Cijati</p></td>

                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><p>Jurusan RPL</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Perguruan Tinggi</p></td>
                                        <td><p>:</p></td>
                                        <td><p>Universitas Suryakancana</p></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><p>Fakultas Teknik</p></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td><p>Prodi Informatika</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <h5 class="text-center">Riwayat Organisasi</h5>
                        <div class="row">
                            {{-- <div class="col">
                                <img src="/img/latip.jpg" class="prof" width="100" alt="">
                            </div> --}}
                            <div class="col pp">
                                <table>
                                    <tr>
                                        <td><p> Himpinan Mahasiswa Informatika</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Himpinan Mahasiswa Islam</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Milenial Edukation</p></td>
                                    </tr>
                                    <tr>
                                        <td><p>Ethnic FC</p></td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{{-- end Home --}}

{{-- Picture --}}
{{-- end Picture --}}

{{-- Profil --}}
{{-- end Profil --}}
@endsection

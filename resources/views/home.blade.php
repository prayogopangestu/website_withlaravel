@extends('layouts.main')
<link rel="stylesheet" href="css/style2.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

@section('container')

    <body>

        <!-- HEADER -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="img/fashion2.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/fashion1.jpg" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="img/fashion4.jpg" class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
                data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- CONTENT -->
        <div class="row p-5 text-dark">
            <div class=" start-50">
                <h1 class="text-center">Produk</h1>
                <card class="card-title">jjjgjhfghfhd</card>
            </div>
        </div>
        <div class="row row-cols-1 row-cols-md-4 g-4">
            <div class="col">
                <div class="card h-100">
                    <img src="img/content11.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">Jaket</h5>
                        <p class="card-text">This is a short Jaket</p>
                        <button class="btn btn-outline-success" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalcontent">Check-Out</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/content2.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">This is a short T-Shirt</p>
                        <button class="btn btn-outline-success" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalcontent">Check-Out</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/content3.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">This is a short T-Shirt</p>
                        <button class="btn btn-outline-success" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalcontent">Check-Out</button>
                    </div>
                </div>
            </div>
            <div class="col">
                <div class="card h-100">
                    <img src="img/content4.jpg" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">T-Shirt</h5>
                        <p class="card-text">This is a short T-Shirt</p>
                        <button class="btn btn-outline-success" type="button" data-bs-toggle="modal"
                            data-bs-target="#modalcontent">Check-Out</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- TABLE -->
        <div class="row p-5 text-dark">
            <div class=" start-50">
                <h1 class="text-center">Cabang</h1>
            </div>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Outlet</th>
                    <th scope="col">Alamat</th>
                    <th scope="col">Jam</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <th scope="row">1</th>
                    <td>Purworwjo</td>
                    <td>Jl.Anyer</td>
                    <td>13.00-1700</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Purwodadi</td>
                    <td>Jl.Cintakuh</td>
                    <td>20.00-22.00</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Batam</td>
                    <td>20.00-2200</td>
                </tr>
            </tbody>
        </table>

        <!-- FOOTER -->
        <div class="container-fluid">
            <div class="row bg-danger p-5 text-white">
                <p class="bi-geo-alt text-center">Jl.Asmara Sepekanbaru</p>
                <p class="bi-telephone text-center">021-090-99</p>
            </div>
        </div>

        <!-- MODAL -->
        <div class="modal" tabindex="-1" id="modalLogin">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modal title</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email</label>
                                <input type="email" class="form-control" id="exampleInputEmail1"
                                    aria-describedby="emailHelp">
                                <div id="emailHelp" class="form-text">Masukan Email Anda</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Password</label>
                                <input type="password" class="form-control" id="exampleInputPassword1">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                <label class="form-check-label" for="exampleCheck1">Selalu Masuk</label>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Login</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL2 -->
        <div class="modal" tabindex="-1" id="modalcontent">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Pilih Pesanan Anda</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Metode Bayar</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        GO-PAY
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        COD
                                    </label>
                                </div>
                                <div id="emailHelp" class="form-text">Dengan Malakukan Pesanan Anda Menyetujui Ketentuan
                                    Dan Kebijakan Yang Berlaku</div>
                            </div>
                            <div class="mb-3">
                                <label for="exampleInputPassword1" class="form-label">Pilih Pengiriman</label>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value=""
                                        id="flexCheckDefault">
                                    <label class="form-check-label" for="flexCheckDefault">
                                        JNT
                                    </label>
                                </div>
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" value="" id="flexCheckChecked"
                                        checked>
                                    <label class="form-check-label" for="flexCheckChecked">
                                        JNE
                                    </label>
                                </div>
                                <div id="emailHelp" class="form-text">Pesanan Tidak Bisa Diubah</div>

                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                        <button type="button" class="btn btn-primary">Buat Pesanan</button>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
        </script>
    </body>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    {{-- <nav1>

        <div>
            <h1>TOKO PANGESTU</h1>
            <span>
                Yuk Beli Disini
            </span>
        </div>

        <img src="img/deliveryman.png" alt="">

    </nav1>
    <div class="container-fluid"> --}}

    </div>
@endsection

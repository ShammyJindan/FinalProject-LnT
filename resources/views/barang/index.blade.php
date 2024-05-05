@extends('master', ['title' => ''])
@section('content')

            <!-- Row -->
            <!-- PAGE-HEADER -->
            <div class="page-header">
                {{-- @if (session('success'))
                <div class="alert alert-success" role="alert">
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-hidden="true">×</button>
                    {{ session('success')}}

                </div> --}}
                <h1 class="page-title">Data Barang</h1>
                <div class="breadcrumb-style2">
                    <ol class="breadcrumb1">
                        <li class="breadcrumb-item1"><a href="javascript:void(0)">Data Barang</a></li>
                        <li class="breadcrumb-item1 active" aria-current="page">Index</li>
                    </ol>
                </div>
            </div>
            <!-- PAGE-HEADER END -->

            <!-- ROW-1 OPEN -->
            <!-- Row -->
            <div class="row ">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title"></h3>
                            <div class="btn-list btn-list-icon">

                            </div>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table border text-nowrap text-md-nowrap table-bordered">
                                    <thead>
                                        <tr>
                                            <th>Kategori</th>
                                            <th>Nama</th>
                                            <th>Harga</th>
                                            <th>Jumlah</th>
                                            <th>Foto</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($barang as $kp)
                                        <tr>
                                            <td>{{$kp->kategori}}</td>
                                            <td>{{$kp->name}}</td>
                                            <td>Rp.{{ number_format((float)$kp->harga) }}</td>
                                            <td>{{$kp->jumlah}}</td>
                                            <td class="text-center">
                                                <img class="zoom" src="{{ asset('storage/posts').'/'.$kp->foto }}" class="rounded" style="width:150px">
                                            </td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Row -->
            </div>
            <!-- CONTAINER CLOSED -->
            </div>
            </div>
            <!--app-content closed-->
</div>
@endsection

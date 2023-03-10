@extends('layouts.app')
@section('admin')
    <div class="container-fluid">
        <div class="row">
            {{-- <nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse fixed">
                <div class="position-sticky pt-3 sidebar-sticky">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link" href="/manager/home">
                                <span data-feather="users" class="align-text-bottom"></span>
                                Entri Pembayaran
                            </a>
                        </li>
                    </ul>
                </div>
            </nav> --}}

            <main class="col-md-9 ms-sm-auto col-lg-10 px-md-4">

                <h2>Data Siswa</h2>
                <div class="table-responsive">
                    <table class="table table-striped table-sm">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Petugas</th>
                                <th scope="col">Nisn</th>
                                <th scope="col">Tanggal Bayar</th>
                                <th scope="col">Bulan Bayar</th>
                                <th scope="col">Tahun Bayar</th>
                                <th scope="col">Spp</th>
                                <th scope="col">Jumlah Bayar</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($pembayaran as $p)
                                {{-- @if ($user->type !== 'admin' && $user->type !== 'pegawai') --}}
                                    <tr>
                                        <td>{{ $j++ }}</td>
                                        <td>{{ $p->nama_petugas }}</td>
                                        <td>{{ $p->nisn }}</td>
                                        <td>{{ $p->tgl_bayar }}</td>
                                        <td>{{ $p->bulan_dibayar }}</td>
                                        <td>{{ $p->tahun_dibayar }}</td>
                                        <td>{{ $p->nominal_spp }}</td>
                                        <td>{{ $p->jumlah_bayar }}</td>
                                    </tr>
                                {{-- @endif --}}
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </main>
        </div>
    </div>


    <script src="../assets/dist/js/bootstrap.bundle.min.js"></script>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"
        integrity="sha384-uO3SXW5IuS1ZpFPKugNNWqTZRRglnUJK6UAZ/gxOX80nxEkN9NcGZTftn6RzhGWE" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.4/dist/Chart.min.js"
        integrity="sha384-zNy6FEbO50N+Cg5wap8IKA4M/ZnLJgzc6w2NqACZaK0u0FXfOWRRJOnQtpZun8ha" crossorigin="anonymous">
    </script>
    <script src="dashboard.js"></script>
@endsection

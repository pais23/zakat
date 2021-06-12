<!DOCTYPE html>
<html>
    <head><title> Rpl market</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/bootstrap.min.css') }}">
    </head>
    <body>
        <div class="container">
            <div class="card mt-3">
                <div class="card-header">
                    <h1>Data Pembayaran Zakat</h1>
                    <a href="/admin">
                        <button class="btn btn-info">Kembali</button>
                    </a>
                    <a href="/tambah">
                        <button class="btn btn-success">+ Tambah Data</button>
                    </a>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Jenis</th>
                                <th>Jumlah</th>
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data_admin as $admin)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $admin->nama }}</td>
                                <td>{{ $admin->jenis }}</td>
                                <td>{{ $admin->jumlah }}</td>
                                <td>{{ $admin->created_at }}</td>
                                <td>
                                    <a href="{{ url('zakat/' . $admin->id . '/delete') }}" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau Menghapus Data Ini?')">Delete</a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <script type="text/javascript" src="{{ asset('js/bootstrap.min.js') }}"></script>  
    </body>
</html>
<x-admin>
@include('section.notif')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/kontak/create') }}" class="btn btn-primary float-right"><span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h3 class="card-title">Data Mata Kuliah</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Alamat</th>
                                <th>Telphone</th>
                                <th>Email</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_kontak as $kontak)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url("admin/kontak/$kontak->id") }}" class="btn btn-info"><span
                                                    class="fa fa-info"></span>
                                                Lihat</a>
                                            <a href="{{ url("admin/kontak/$kontak->id") }}/edit" class="btn btn-warning"><span
                                                    class="fa fa-edit"></span>
                                                Edit</a>
                                                
                                            <form action="{{ url('admin/kontak', $kontak->id) }}" method="post"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                                            </form>
                                        </div>

                                    </td>
                                    <td>{{ $kontak->alamat }}</td>
                                    <td> {{ $kontak->telphone }}</td>
                                    <td> {{ $kontak->email }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin>

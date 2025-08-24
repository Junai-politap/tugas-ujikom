<x-admin>
@include('section.notif')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('mata-kuliah/create') }}" class="btn btn-primary float-right"><span
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
                                <th>Kode Mata Kuliah</th>
                                <th>Nama Mata Kuliah</th>
                                <th>Nama Dosen</th>
                                <th>Jumlah SKS</th>

                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_mata_kuliah as $mata_kuliah)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url("mata-kuliah/$mata_kuliah->id") }}" class="btn btn-info"><span
                                                    class="fa fa-info"></span>
                                                Lihat</a>
                                            <a href="{{ url("mata-kuliah/$mata_kuliah->id") }}/edit" class="btn btn-warning"><span
                                                    class="fa fa-edit"></span>
                                                Edit</a>
                                                
                                            <form action="{{ url('mata-kuliah', $mata_kuliah->id) }}" method="post"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                                            </form>
                                        </div>

                                    </td>
                                    <td>{{ $mata_kuliah->kode_mk }}</td>
                                    <td> {{ $mata_kuliah->nama_mk }}</td>
                                    <td> {{ $mata_kuliah->nama_dosen }}</td>
                                    <td> {{ $mata_kuliah->sks }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin>

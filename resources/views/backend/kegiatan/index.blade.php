<x-admin>
    @include('section.notif')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/kegiatan/create') }}" class="btn btn-primary float-right"><span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h3 class="card-title">Data Kegiatan</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Nama Kegiatan</th>
                                <th>Tanggal Kegiatan</th>
                                <th>Poto</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_kegiatan as $kegiatan)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url("admin/kegiatan/$kegiatan->id") }}" class="btn btn-info"><span
                                                    class="fa fa-info"></span>
                                                Lihat</a>
                                            <a href="{{ url("admin/kegiatan/$kegiatan->id") }}/edit" class="btn btn-warning"><span
                                                    class="fa fa-edit"></span>
                                                Edit</a>
                                                
                                            <form action="{{ url('admin/kegiatan', $kegiatan->id) }}" method="post"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i> Hapus</button>
                                            </form>
                                        </div>

                                    </td>
                                    <td>{{ $kegiatan->nama_kegiatan }}</td>
                                     <td>{{ date('d-m-Y', strtotime($kegiatan->tanggal_kegiatan)) }}</td>
                                     <td width="50%">
                                        <img src="{{ url("public/$kegiatan->poto") }}"
                                        style="object-fit: cover; position: static; width: 50%;">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</x-admin>

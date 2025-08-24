<x-admin>
    @include('section.notif')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{ url('admin/tentang-kami/create') }}" class="btn btn-primary float-right"><span
                            class="fa fa-plus"></span> Tambah Data</a>
                    <h3 class="card-title">Data Tentang Kami</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr class="text-center">
                                <th>No</th>
                                <th>Aksi</th>
                                <th>Judul</th>
                                <th>Poto</th>
                               
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($list_tentang_kami as $tentang_kami)
                                <tr class="text-center">
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="{{ url("admin/tentang-kami/$tentang_kami->id") }}" class="btn btn-info"><span
                                                    class="fa fa-info"></span>
                                                Lihat</a>
                                            <a href="{{ url("admin/tentang-kami/$tentang_kami->id") }}/edit"
                                                class="btn btn-warning"><span class="fa fa-edit"></span>
                                                Edit</a>

                                            <form action="{{ url('admin/tentang-kami', $tentang_kami->id) }}" method="post"
                                                onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                                                @csrf
                                                @method('delete')
                                                <button class="btn btn-danger"><i class="fa fa-trash"></i>
                                                    Hapus</button>
                                            </form>
                                        </div>

                                    </td>
                                    <td>{{ $tentang_kami->judul }}</td>
                                    <td width="50%">
                                        <img src="{{ url("public/$tentang_kami->poto") }}"
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

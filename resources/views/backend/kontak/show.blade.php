<x-admin>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    {{-- <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                            src="{{ url('public/admin') }}/dist/img/politap.png" style="border-radius:100%">
                    </div>

                    <h3 class="profile-username text-center">{{ $mata_kuliah->nama }}</h3>

                    <p class="text-muted text-center">{{ $mata_kuliah->nim }}</p> --}}

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Kode Mata Kuliah</b> <a class="float-right">{{ $mata_kuliah->kode_mk }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nama Mata Kuliah</b> <a class="float-right">{{ $mata_kuliah->nama_mk }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Nama Dosen</b> <a class="float-right">{{ $mata_kuliah->nama_dosen }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Jumlah SKS</b> <a class="float-right">{{ $mata_kuliah->sks }}</a>
                        </li>
                      
                    </ul>

                    <a href="{{ url('mata-kuliah') }}" class="btn btn-primary btn-block"><b>Kembali</b></a>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>
</x-admin>

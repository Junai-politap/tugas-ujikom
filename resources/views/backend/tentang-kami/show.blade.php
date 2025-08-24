<x-admin>
    <div class="row">
        <div class="col-md-12">
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile-user-img img-fluid img-circle"
                            src="{{ url('public/admin') }}/dist/img/politap.png" style="border-radius:100%">
                    </div>

                    <h3 class="profile-username text-center">{{ $mahasiswa->nama }}</h3>

                    <p class="text-muted text-center">{{ $mahasiswa->nim }}</p>

                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Tempat Lahir</b> <a class="float-right">{{ $mahasiswa->tempat_lahir }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Tanggal Lahir</b> <a class="float-right">{{ $mahasiswa->tanggal_lahir }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Jenis Kelamin</b> <a class="float-right">{{ $mahasiswa->jenis_kelamin }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Tahun Masuk</b> <a class="float-right">{{ $mahasiswa->tahun_masuk }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Alamat</b> <a class="float-right">{{ $mahasiswa->alamat }}</a>
                        </li>
                    </ul>

                    <a href="{{ url('mahasiswa') }}" class="btn btn-primary btn-block"><b>Kembali</b></a>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>
</x-admin>

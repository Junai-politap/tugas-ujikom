<x-admin>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">

                <a href="{{ url('admin/kontak') }}" class="btn btn-primary"><span class="fa fa-arrow-left"></span> <b> Kembali </b></a>
            </div>
            <div class="card card-primary card-outline">
                <div class="card-body box-profile">


                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            <b>Alamat Sekolah</b> <a class="float-right">{{ $kontak->alamat }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>No Telphone</b> <a class="float-right">{{ $kontak->telphone }}</a>
                        </li>
                        <li class="list-group-item">
                            <b>Email Sekolah</b> <a class="float-right">{{ $kontak->email }}</a>
                        </li>


                    </ul>
                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>
</x-admin>

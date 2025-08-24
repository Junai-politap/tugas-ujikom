<x-admin>
    <div class="row">
        <div class="col-md-12">
            <div class="col-md-3">

                <a href="{{ url('admin/berita') }}" class="btn btn-primary"><span class="fa fa-arrow-left"></span> <b> Kembali </b></a>
            </div>
            <div class="card card-primary card-outline">

                <div class="card-body box-profile">
                    <div class="text-center">
                        <img class="profile" src="{{ url("public/$berita->poto") }}"
                            style="object-fit: cover; position: static; width: 50%;">
                    </div>

                    <h3 class="profile-username text-center">{{ $berita->judul }}</h3>



                    <ul class="list-group list-group-unbordered mb-3">
                        <li class="list-group-item">
                            {!! nl2br($berita->deskripsi) !!}
                        </li>

                    </ul>


                </div>
                <!-- /.card-body -->
            </div>

        </div>
    </div>
</x-admin>

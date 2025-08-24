<x-admin>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Edit Data Berita</h3>
        </div>

        <form class="form-horizontal" action="{{ url('admin/berita', $berita->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Judul Berita</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul" class="form-control" id="inputEmail3"
                            value="{{ $berita->judul }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Tanggal Berita</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal_berita" class="form-control"
                            value="{{ $berita->tanggal_berita }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi" id="compose-textarea" value="{{ $berita->deskripsi }}"> {{ $berita->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Poto</label>
                    <div class="col-sm-5">
                        <img class="profile" src="{{ url("public/$berita->poto") }}"
                            style="object-fit: cover; position: static; width: 50%;">
                    </div>

                    <div class="col-sm-5">
                        <input type="file" name="poto" class="form-control" accept=".jpg, .jpeg, .png" >
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <a href="{{ url('admin/berita') }}" class="btn btn-default "><span class="fa fa-arrow-left"></span> Kembali</a>
                <button type="submit" class="btn btn-primary float-right"><span class="fa fa-save"></span>
                    Simpan</button>
            </div>

        </form>
    </div>
</x-admin>

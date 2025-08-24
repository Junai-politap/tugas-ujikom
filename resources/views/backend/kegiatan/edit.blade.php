<x-admin>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Edit Data Kegiatan</h3>
        </div>

        <form class="form-horizontal" action="{{ url('admin/kegiatan', $kegiatan->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_kegiatan" class="form-control" required value="{{ $kegiatan->nama_kegiatan }}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal_kegiatan" class="form-control" required value="{{ $kegiatan->tanggal_kegiatan }}">
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi Kegiatan</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi_kegiatan" id="compose-textarea" required >{{ $kegiatan->deskripsi_kegiatan }}"</textarea>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Poto</label>
                    <div class="col-sm-3">
                        <img src="{{ url("public/$kegiatan->poto") }}" style="width: 100%;">
                    </div>
                    <div class="col-sm-7">
                        <input type="file" name="poto" class="form-control" accept=".jpg, .jpeg, .png" value="{{ $kegiatan->poto }}">
                    </div>
                </div>

            </div>

            <div class="card-footer">
                <a href="{{ url('admin/kegiatan') }}" class="btn btn-default "><span class="fa fa-times"></span> Kembali</a>
                <button type="submit" class="btn btn-primary float-right"><span class="fa fa-save"></span>
                    Simpan</button>
            </div>

        </form>
    </div>
</x-admin>

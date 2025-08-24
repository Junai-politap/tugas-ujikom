<x-admin>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Edit Data Mata Kuliah</h3>
        </div>
        
        <form class="form-horizontal" action="{{ url('admin/kontak', $kontak->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control" value="{{ $kontak->alamat }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No Telphone Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" name="telphone" class="form-control" value="{{ $kontak->telphone }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email Sekolah</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" value="{{ $kontak->email }}" required>
                    </div>
                </div>
                
            </div>
            
            <div class="card-footer">
                <a href="{{ url('admin/kontak') }}" class="btn btn-default "><span class="fa fa-times"></span> Kembali</a>
                <button type="submit" class="btn btn-primary float-right"><span class="fa fa-save"></span> Simpan</button>
            </div>
            
        </form>
    </div>
</x-admin>

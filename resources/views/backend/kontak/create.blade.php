<x-admin>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Tambah Data Kontak</h3>
        </div>
        
        <form class="form-horizontal" action="{{ url('admin/kontak') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Alamat Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" name="alamat" class="form-control" placeholder="Masukan Alamat Lengkap Sekolah" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">No Telphone Sekolah</label>
                    <div class="col-sm-10">
                        <input type="text" name="telphone" class="form-control" placeholder="Masukan Nomor Telphone Sekolah" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Email Sekolah</label>
                    <div class="col-sm-10">
                        <input type="email" name="email" class="form-control" placeholder="Masukan Email Sekolah" required>
                    </div>
                </div>
                
            </div>
            
            <div class="card-footer">
                <button type="reset" class="btn btn-default "><span class="fa fa-times"></span> Cancel</button>
                <button type="submit" class="btn btn-primary float-right"><span class="fa fa-save"></span> Simpan</button>
            </div>
            
        </form>
    </div>
</x-admin>

<x-admin>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Tambah Data Mata Kuliah</h3>
        </div>
        
        <form class="form-horizontal" action="{{ url('mata-kuliah') }}" method="POST">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode Mata Kuliah</label>
                    <div class="col-sm-10">
                        <input type="text" name="kode_mk" class="form-control" placeholder="Masukan Kode Mata Kuliah">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Mata Kuliah</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_mk" class="form-control" placeholder="Masukan Nama Mata Kuliah">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Dosen</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_dosen" class="form-control" placeholder="Masukan Nama Dosen">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jumlah SKS</label>
                    <div class="col-sm-10">
                        <input type="text" name="sks" class="form-control" placeholder="Masukan Jumlah SKS">
                    </div>
                </div>
                
            </div>
            
            <div class="card-footer">
                <button type="submit" class="btn btn-default "><span class="fa fa-times"></span> Cancel</button>
                <button type="submit" class="btn btn-primary float-right"><span class="fa fa-save"></span> Simpan</button>
            </div>
            
        </form>
    </div>
</x-admin>

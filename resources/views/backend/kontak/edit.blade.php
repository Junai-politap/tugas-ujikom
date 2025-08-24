<x-admin>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Edit Data Mata Kuliah</h3>
        </div>
        
        <form class="form-horizontal" action="{{ url('mata-kuliah', $mata_kuliah->id) }}" method="POST">
            @csrf
            @method("PUT")
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Kode Mata Kuliah</label>
                    <div class="col-sm-10">
                        <input type="text" name="kode_mk" class="form-control" value="{{ $mata_kuliah->kode_mk }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Mata Kuliah</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_mk" class="form-control" value="{{ $mata_kuliah->nama_mk }}">
                    </div>
                </div>
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Nama Dosen</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_dosen" class="form-control" value="{{ $mata_kuliah->nama_dosen }}">
                    </div>
                </div>
                
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Jumlah SKS</label>
                    <div class="col-sm-10">
                        <input type="text" name="sks" class="form-control" value="{{ $mata_kuliah->sks }}">
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

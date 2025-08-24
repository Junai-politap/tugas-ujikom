<x-admin>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Tambah Data Kegiatan</h3>
        </div>
        
        <form class="form-horizontal" action="{{ url('admin/kegiatan') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
               
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Nama Kegiatan</label>
                    <div class="col-sm-10">
                        <input type="text" name="nama_kegiatan" class="form-control" placeholder="Masukan Nama Kegiatan" required>
                    </div>
                </div>
                
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Tanggal Kegiatan</label>
                    <div class="col-sm-10">
                        <input type="date" name="tanggal_kegiatan" class="form-control" required>
                    </div>
                </div>

                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi Kegiatan</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi_kegiatan" id="compose-textarea" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Poto</label>
                    <div class="col-sm-10">
                        <input type="file" name="poto" class="form-control" accept=".jpg, .jpeg, .png">
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

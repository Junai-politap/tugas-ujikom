<x-admin>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Tambah Data Tentang Kami</h3>
        </div>
        
        <form class="form-horizontal" action="{{ url('admin/tentang-kami') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul" class="form-control" placeholder="Masukan Judul" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi" id="compose-textarea" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Poto</label>
                    <div class="col-sm-10">
                        <input type="file" name="poto" class="form-control" accept=".jpg, .jpeg, .png" required>
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

<x-admin>
    <div class="card card-info">
        <div class="card-header">
            <h3 class="card-title"> Edit Data Tentang Kami</h3>
        </div>
        
        <form class="form-horizontal" action="{{ url('admin/tentang-kami', $tentang_kami->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method("PUT")
            <div class="card-body">
                <div class="form-group row">
                    <label class="col-sm-2 col-form-label">Judul</label>
                    <div class="col-sm-10">
                        <input type="text" name="judul" class="form-control" value="{{ $tentang_kami->judul }}" required>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword3" class="col-sm-2 col-form-label">Deskripsi</label>
                    <div class="col-sm-10">
                        <textarea name="deskripsi" id="compose-textarea" required>{{ $tentang_kami->deskripsi }}</textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Poto</label>
                     <div class="col-sm-5">
                        <img class="profile" src="{{ url("public/$tentang_kami->poto") }}"
                            style="object-fit: cover; position: static; width: 50%;">
                    </div>

                    <div class="col-sm-5">
                        <input type="file" name="poto" class="form-control" value="{{ $tentang_kami->poto }}" accept=".jpg, .jpeg, .png" required >
                    </div>
                </div>
                
            </div>
                
            </div>
            
            <div class="card-footer">
                <a href="{{ url('admin/tentang-kami') }}" class="btn btn-default "><span class="fa fa-times"></span> Kembali</a>
                <button type="submit" class="btn btn-primary float-right"><span class="fa fa-save"></span> Simpan</button>
            </div>
            
        </form>
    </div>
</x-admin>

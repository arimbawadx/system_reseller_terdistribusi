@extends('/users/layouts/main')

@section('title','Users')

@section('content')
<main>
  <div class="container pt-3 pb-3">
    <div class="row mt-5 mb-5">
      <div class="col-md-12 col-12 mb-2">
        <!-- Modal Import-->
        <div class="modal fade" id="importModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Import Data Users</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <div class="row">
                  <div class="col-md-12">
                    <form method="post" action="/users/import" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group files">
                        <label>Upload Your (.xlsx) File </label>
                        <input required type="file" name="file" class="form-control">
                      </div>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Import</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <button class="btn btn-success" data-toggle="modal" data-target="#importModal">Import</button>
        <a class="btn btn-success" href="/users/export">Export</a>

        <!-- Modal Tambah-->
        <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah User</h5>
                <button id="close-tambah" type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <form id="add-user">
                  @csrf
                  <div class="form-group">
                    <label for="nama">Nama</label>
                    <input name="nama" required type="text" class="form-control" id="nama">
                  </div>
                  <div class="form-group">
                    <label for="tgl_lahir">Tanggal Lahir</label>
                    <input name="tgl_lahir" required type="date" class="form-control" id="tgl_lahir">
                  </div>
                  <div class="form-group">
                    <label for="jenis_kelamin">Jenis Kelamin</label>
                    <select name="jenis_kelamin" required class="form-control" id="jenis_kelamin">
                      <option value="">Pilih</option>
                      <option>Laki-Laki</option>
                      <option>Perempuan</option>
                    </select>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <button class="btn btn-primary" data-toggle="modal" data-target="#tambahModal">Tambah</button>
      </div>

      <div id="read" class="col-md-12 col-12"></div>
    </div>
  </div> 
</main>
@endsection


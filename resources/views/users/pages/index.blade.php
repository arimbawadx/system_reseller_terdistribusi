@extends('/users/layouts/main')

@section('title','Users')

@section('content')
<main>
  <div class="container pt-3 pb-3">
    <div class="row mt-5 mb-5">
      <div class="col-md-12 col-12 mb-2">
        <!-- Modal -->
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
      </div>

      <div class="col-md-12 col-12">
        <table class="table">
          <thead class="thead-dark">
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Tanggal Lahir</th>
            </tr>
          </thead>
          <tbody>
            @foreach($dataUser as $i => $u)
            <tr>
              <th scope="row">{{$i+1}}</th>
              <td>{{$u->name}}</td>
              <td>{{$u->gender}}</td>
              <td>{{$u->dob}}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div> 
</main>
@endsection


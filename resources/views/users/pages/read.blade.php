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


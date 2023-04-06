@extends('layouts.app')

@section('title', 'CloudSCH | Editing')
@section('content')


<h1 class="container text-center spectrum" data-aos="zoom-out-down" style="font-family:sans-serif">CloudSCH Tabel</h1>
<form data-aos="zoom-out" data-aos-duration="500" method="post" action="{{ url("Cloudsch/$id->id") }}">
    @method('PATCH')
        @csrf
<div class="container mt-5">
<table class="container table table-bordered">
  <thead>
    <tr>
      <th scope="col"><label for="nama" class="form-label">Nama</label></th>
      <th scope="col"><label for="kelas" class="form-label">Kelas</label></th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><input type="text" class="form-control" id="nama" name="nama" value="{{ $id->nama }}" required></td>
      <td><select class="form-select" id="kelas" name="kelas" aria-labe ="Default select example" value="{{ $id->kelas }}">
  <option selected>{{ $id->kelas }}</option>
  <option value="X RPL">X RPL</option>
  <option value="X TKJ">X TKJ</option>
  <option value="XI RPL">XI RPL</option>
  <option value="XI TKJ">XI TKJ</option>
    <option value="XII RPL">XII RPL</option>
  <option value="XII TKJ">XII TKJ</option>
</select>
</td>
    </tr>
  </tbody>
</table>

<button type="submit" data-aos="fade-up" data-aos-duration="500" class="btn btn-primary">Save</button>
<button type="button" data-bs-toggle="modal"data-aos="fade-up" data-aos-duration="700" data-bs-target="#exampleModal" class="btn btn-danger">Erase</button>

</div>

</form>


        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content bg-light">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">
            CloudSCH Says:<br>
            Ya Sur Ya Wanna Erase This?</h1>
      </div>
      <div class="modal-body">
        <h3 class="text-danger">This Column Will Be Erased Forever</h3>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Nevermind</button>
        <form method="post" action="{{ url("Cloudsch/$id->id") }}">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger">Erase</button>
        </form>
      </div>
    </div>
  </div>
</div>

@endsection

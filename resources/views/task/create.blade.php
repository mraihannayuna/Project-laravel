@extends('layouts.app')

@section('title', 'CloudSCH | Create')
@section('content')

<h1 class="container text-center spectrum" data-aos="zoom-out-down" style="font-family:sans-serif">Create Data</h1>
<form data-aos="zoom-out" data-aos-duration="500" method="post" action="{{ url('Cloudsch') }}">
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
      <td>  <input type="text" class="form-control" id="nama" name="nama" required></td>
      <td><select class="form-select" id="kelas" name="kelas" aria-label="Default select example" required>
  <option value="Not Selected" selected>Select class</option>
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
<a data-aos="fade-up" data-aos-duration="500" class="btn btn-warning my-2" href="{{ url('Cloudsch') }}">Back</a>
<button type="submit" data-aos="fade-up" data-aos-duration="700" class="btn btn-primary">Save</button>
</div>

</form>

</div>
@endsection

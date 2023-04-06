@extends('layouts.app')

@section('title', 'CloudSCH')
@section('content')

    @if (session()->has('login_message'))
    <div class="position-relative">
            <div class="alert alert-success alert-dismissible fade show js-alert position-absolute" style="z-index: 6;left: 1000px;" role="alert">
                {{ session()->get('login_message') }}
            </div>
    </div>
    @endif



<h1 class="container text-center spectrum" data-aos="zoom-out-down" style="font-family:sans-serif">CloudSCH Tabel</h1>
<div data-aos="zoom-out-down" data-aos-duration="500">
        <a data-aos="fade-down" data-aos-duration="600" class="btn btn-success my-2" href="{{ url('Cloudsch/create') }}">+ New Column</a>
</div>


<table data-aos="zoom-out-up" data-aos-duration="500" class="container table table-bordered">
  <thead>
    <tr>
        <th scope="col">Number</th>
        <th scope="col">Name</th>
        <th scope="col">Class</th>
        <th scope="col">
          <h5 class="d-flex justify-content-center">Action</h5></th>
    </tr>
  </thead>

  <tbody>
    @php($number = 1)
     @foreach($tasks as $t)
    <tr>
      <th scope="row">{{ $number }}</th>
      <td>{{ $t->nama }}</td>
      <td>{{ $t->kelas }}</td>
        <td class="d-flex justify-content-center"><a href="{{ url("Cloudsch/$t->id/edit") }}" class="btn btn-warning">Edit</a></td>
    </tr>
    @php($number++)
    @endforeach
  </tbody>
</table>

</div>

@endsection

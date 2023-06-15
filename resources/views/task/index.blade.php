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



<h1 class="container text-center spectrum" style="font-family:sans-serif">CloudSCH Tabel</h1>
<div data-aos="fade-right" data-aos-duration="700">
        <a class="btn btn-success my-2" href="{{ url('Cloudsch/create') }}">+ New Column</a>
</div>


<table data-aos="fade-right" class="container table table-bordered">
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
     @foreach($tasks as $t)
    <tr>
      {{-- <th scope="row">{{ $loop->iteration + (($t->currentPage() -1) * $t->perPage())  }}</th> --}}
      <th scope="row">{{ $i++ }}</th>
      <td>{{ $t->nama }}</td>
      <td>{{ $t->kelas }}</td>
        <td class="d-flex justify-content-center"><a href="{{ url("Cloudsch/$t->id/edit") }}" class="btn btn-warning">Edit</a></td>
    </tr>
    @endforeach

  </tbody>
</table>
<div class="d-flex justify-content-center">
    {{ $tasks->links('pagination::bootstrap-4') }}
    </div>
</div>

@endsection

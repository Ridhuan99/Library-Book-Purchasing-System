@extends('layouts.app')

@section('content')
<div class="myrequest-page row">
  <div class="form-section col-12">
    @if(session('status'))
      <div class="alert alert-success m-4">
        {{session('status')}}
      </div>
    @endif
    <div class="col-12 text-light">
      <div class="card-title">
        <h1>Request List</h1>
      </div>
      <table class="table table-hover table-striped table-light ">
          <!--Table head-->
          <thead class="mdb-color thead-dark ">
              <tr class="text-white">
                  <th>Format ID</th>
                  <th>Formats</th>
                  <th>Action</th>
              </tr>
          </thead>
          <!--Table head-->
          <!--Table body-->
          <tbody>
            @if ($formats->count() == 0)
              <tr>
                  <td colspan="2" >No record found</td>
              </tr>
            @else
              @foreach ($formats as $format)
                <tr>
                    <th scope="row">{{$format->id}}</th>
                    <td>{{$format->value}}</td>
                    <td>
                      <form class="needs-validation p-4"  action="{{route('formats.destroy',$format->id)}}" method="post">
                        @csrf
                        @method('DELETE')
                          <button class="btn btn-danger btn-lg btn-block" type="submit">Delete</button>
                      </form>
                    </td>
                </tr>
              @endforeach
            @endif

          </tbody>
          <!--Table body-->
      </table>
    </div>
      <form class="needs-validation p-4" action="{{route('formats.store')}}" method="post">
        @csrf
          <label class="text-light">Enter New Format</label>
          <input type="text" name="value">
          <hr class="mb-4">
          <button class="btn btn-danger btn-lg btn-block" type="submit">Add</button>
      </form>
  </div>
</div>
@endsection

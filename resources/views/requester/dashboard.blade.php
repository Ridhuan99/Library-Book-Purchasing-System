@extends('layouts.app')

@section('content')
<div class="row reqdash">
    <div class="col-sm-7 leftside bg-light">
        <div class="row title mx-auto">
            <h1> Welcome To MMU Library Book Purchasing System</h1>
            <h5>Suggest any resources to be added into MMU Library
                collection</h5>
        </div>
    </div>

    <div class="col-sm-5 rightside">
        <div class="row m-3">
            <button type="button" class="p-5 btn btn-lg  btn-danger btn-block">My Request</button>
        </div>
        <div class="row m-3">
          <button type="button" class="p-5 btn btn-lg  btn-danger btn-block">My History</button>
        </div>
        <div class="row m-3">
          <button type="button" class=" p-5 btn btn-lg  btn-danger btn-block">Request Form</button>
        </div>
    </div>
</div>
@endsection

@extends('layouts.app')

@section('content')
<div class="form-page row">
    <div class="details-section col-sm-8">
        <!-- Fluid width widget -->
        <div class="panel panel-default bg-dark m-4">
            <div class="panel-heading">
                <h3 class="panel-title p-2 text-white text-center">
                    <span class="glyphicon glyphicon-comment "></span> 
                    Request Details Page
                </h3>
            </div>
            <div class="panel-body text-dark bg-white p-2">
                @foreach ($purchases as $purchase)
                <div class="col-12">
                    <h6>
                        Purchase ID :
                        <span class="font-weight-normal">
                            {{$purchase->purchase_id}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Name :
                        <span class="font-weight-normal">
                            {{$purchase->name}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Faculty :
                        <span class="font-weight-normal">
                            {{$purchase->faculty}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Campus :
                        <span class="font-weight-normal">
                            {{$purchase->campus}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Library :
                        <span class="font-weight-normal">
                            {{$purchase->library}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Title :
                        <span class="font-weight-normal">
                            {{$purchase->title}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Format :
                        <span class="font-weight-normal">
                            {{$purchase->format}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Category :
                        <span class="font-weight-normal">
                            {{$purchase->category}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        ISBN :
                        <span class="font-weight-normal">
                            {{$purchase->isbn}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Author :
                        <span class="font-weight-normal">
                            {{$purchase->author}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Publisher :
                        <span class="font-weight-normal">
                            {{$purchase->publisher}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Subject Code :
                        <span class="font-weight-normal">
                            {{$purchase->subject_code}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Quantity :
                        <span class="font-weight-normal">
                            {{$purchase->quantity}}
                        </span>
                    </h6>
                </div>
                <div class="col-12 mb-2 ">
                    <h6>
                        Progress Log :
                    </h6>
                        <ul class="progressbar py-5">
                            @if ($purchase->progress_log === 'Dean Validation')
                            <li class="active">Dean Validation</li>
                            <li>Library Validation</li>
                            <li>Purchasing</li>
                            <li>Arrived</li>
                            @elseif ($purchase->progress_log === 'Library Validation')
                            <li class="active">Dean Validation</li>
                            <li class="active">Library Validation</li>
                            <li>Purchasing</li>
                            <li>Arrived</li>
                            @elseif ($purchase->progress_log === 'Purchasing')
                            <li class="active">Dean Validation</li>
                            <li class="active">Library Validation</li>
                            <li class="active">Purchasing</li>
                            <li>Arrived</li>
                            @else
                            <li class="active">Dean Validation</li>
                            <li class="active">Library Validation</li>
                            <li class="active">Purchasing</li>
                            <li class="active">Arrived</li>
                            @endif
                        </ul>

                </div>
                <div class="col-12 p-0">
                    <form class="needs-validation mt-2" action="{{route('purchases.update',$purchase->id)}}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="col-12 py-3 ">
                          <div class="col-6">
                            <select class="custom-select d-block w-100" id="progress_log" name="progress_log" required>
                                <option value="">Choose...</option>
                                <option>Library Validation</option>
                                <option>Purchasing</option>
                                <option>Arrived</option>
                            </select>
                          </div>
                          <div class="col-6">
                            <button class="btn btn-danger" type="submit">Update</button>
                          </div>

                            @error ('campus')
                            <div class="alert alert-danger m-1">
                                {{$message}}
                            </div>
                            @enderror
                        </div>
                    </form>
                </div>
                <div class="col-12">
                    <h6>
                        Number of Students :
                        <span class="font-weight-normal">
                            {{$purchase->total_students}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Price :
                        <span class="font-weight-normal">
                            RM {{$purchase->price}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Status :
                        <span class="font-weight-normal">
                            {{$purchase->status}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Remark :
                        <span class="font-weight-normal">
                            {{$purchase->remark}}
                        </span>
                    </h6>
                </div>
                <div class="col-12">
                    <h6>
                        Request Date :
                        <span class="font-weight-normal">
                            {{$purchase->created_at}}
                        </span>
                    </h6>
                </div>
                @endforeach
            </div>
        </div>
        <!-- End fluid width widget -->
    </div>

    <div class="info-section col-sm-4">
        <!-- Fluid width widget -->
        <div class="panel panel-default bg-dark m-4">
            <div class="panel-heading">
                <h3 class="panel-title p-2 text-white">
                    <span class="glyphicon glyphicon-comment"></span> 
                    Comments
                </h3>
            </div>
            <div class="panel-body bg-white p-2">
                <ul class="media-list p-0">
                    @foreach ($inquiries as $inquiry)
                    <li class="media">
                        <div class="media-body">
                            <h6 class="media-heading text-info">
                                {{$inquiry->name}}
                            </h6>
                            <p>
                                {{$inquiry->message}}
                            </p>
                        </div>
                    </li>
                    @endforeach
                </ul>
                <div>
                    <form class="needs-validation" action="{{route('inquiries.store')}}" method="post">
                        @csrf
                        <input type="text" name="comment" placeholder="Comment here" class="col-12 p-2">
                        <input name="name" type="hidden" value="{{$purchase->faculty}}">
                        <input name="purchase_id" type="hidden" value="{{$purchase->purchase_id}}">
                        <button class="btn btn-danger btn-lg btn-block mt-1" type="submit">comment</button>
                    </form>
                </div>
            </div>
        </div>
        <!-- End fluid width widget -->
    </div>

</div>
@endsection

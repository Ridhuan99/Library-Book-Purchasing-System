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
                <h6 >
                    Purchase ID :
                    <span class="font-weight-normal">
                        {{$purchase->purchase_id}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Name :
                    <span class="font-weight-normal">
                        {{$purchase->name}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Faculty :
                    <span class="font-weight-normal">
                        {{$purchase->faculty}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Campus :
                    <span class="font-weight-normal">
                        {{$purchase->campus}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Library :
                    <span class="font-weight-normal">
                        {{$purchase->library}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Title :
                    <span class="font-weight-normal">
                        {{$purchase->title}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Format :
                    <span class="font-weight-normal">
                        {{$purchase->format}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Category :
                    <span class="font-weight-normal">
                        {{$purchase->category}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    ISBN :
                    <span class="font-weight-normal">
                        {{$purchase->isbn}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Author :
                    <span class="font-weight-normal">
                        {{$purchase->author}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Publisher :
                    <span class="font-weight-normal">
                        {{$purchase->publisher}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Subject Code :
                    <span class="font-weight-normal">
                        {{$purchase->subject_code}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Quantity :
                    <span class="font-weight-normal">
                        {{$purchase->quantity}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Number of Students :
                    <span class="font-weight-normal">
                        {{$purchase->total_students}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Price :
                    <span class="font-weight-normal">
                       RM  {{$purchase->price}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Status :
                    <span class="font-weight-normal">
                        {{$purchase->status}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Remark :
                    <span class="font-weight-normal">
                        {{$purchase->remark}}
                    </span>
                </h6>
              </div><div class="col-12">
                <h6 >
                    Request Date :
                    <span class="font-weight-normal">
                        {{$purchase->created_at}}
                    </span>
                </h6>
              </div>
              <div class="col-12">
                <h6 >
                    Progress Log :
                    <span class="font-weight-normal ">
                        {{$purchase->progress_log}}
                    </span>
                </h6>
              </div>
            </div>
            @endforeach
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
                      <li class="media ">
                          <div class="media-body ">
                              <h6 class="media-heading text-info ">
                                    {{$inquiry->name}}
                              </h6>
                              <p>
                                    {{$inquiry->message}}
                              </p>
                          </div>
                      </li>
                    @endforeach
                </ul>
                <div >
                  <form class="needs-validation " action="{{route('inquiries.store')}}" method="post">
                    @csrf
                    <input type="text" name="comment" placeholder="Comment here" class="col-12 p-2">
                    <input name="name" type="hidden" value="{{$purchase->name}}">
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

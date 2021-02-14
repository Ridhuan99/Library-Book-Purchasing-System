@extends('layouts.app')

@section('content')
  {{-- @foreach ($purchases as $key => $purchase)
    <h1>{{$key}}.{{$purchase['title']}}</h1>
  @endforeach --}}
  <div class="myrequest-page row">
    <div class="card col-11 m-4 card-list">
                <div class="card-body">
                    <!--Table-->
                    <div class="card-title">
                      <h1>Request List</h1>
                    </div>
                    <table class="table table-hover table-bordered ">
                        <!--Table head-->
                        <thead class="mdb-color thead-dark ">
                            <tr class="text-white">
                                <th>Purchase ID</th>
                                <th>Title</th>
                                <th>Quantity</th>
                                <th>Status</th>
                                <th>Request Date</th>
                                <th>Requester MMU ID</th>
                                <th>Requester Name</th>
                                <th>Requester Faculty</th>
                                <th>Details</th>
                            </tr>
                        </thead>
                        <!--Table head-->
                        <!--Table body-->
                        <tbody>
                          @if ($purchases->count() == 0)
                            <tr>
                                <td colspan="6" >No record found</td>
                            </tr>
                          @else
                            @foreach ($purchases as $purchase)
                              <tr>
                                  <th scope="row">{{$purchase->purchase_id}}</th>
                                  <td>{{$purchase->title}}</td>
                                  <td>{{$purchase->quantity}}</td>
                                  <td>{{$purchase->status}}</td>
                                  <td>{{$purchase->created_at}}</td>
                                  <td>{{$purchase->mmu_id}}</td>
                                  <td>{{$purchase->name}}</td>
                                  <td>{{$purchase->faculty}}</td>
                                  <td>
                                    <a class=" btn btn-lg  btn-danger btn-block" href="{{url('dean/historylist',['faculty'=>$purchase->faculty,'id'=>$purchase->purchase_id])}}">GO</a>
                                  </td>
                              </tr>
                            @endforeach
                          @endif
                        </tbody>
                        <!--Table body-->
                    </table>
                    <!--Table-->
                </div>
            </div>
  </div>
@endsection

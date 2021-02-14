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
                    <form class="needs-validation mt-2" id="myForm">
                        @csrf
                      <table class="table table-hover table-bordered " id="deanform">
                          <!--Table head-->
                          <thead class="mdb-color thead-dark ">
                              <tr class="text-white">
                                  <th><button type="submit" class="btn btn-info" id="approveall">Approve All</button><input type="checkbox"  id="checkAll"></th>
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
                                  <td colspan="10" >No record found</td>
                              </tr>
                            @else
                              @foreach ($purchases as $purchase)
                                <tr>
                                    <td><input type="checkbox" class="cb" name="id[]" value="{{ $purchase->purchase_id }}" /></td>
                                    <th scope="row">{{$purchase->purchase_id}}</th>
                                    <td>{{$purchase->title}}</td>
                                    <td>{{$purchase->quantity}}</td>
                                    <td>{{$purchase->status}}</td>
                                    <td>{{$purchase->created_at}}</td>
                                    <td>{{$purchase->mmu_id}}</td>
                                    <td>{{$purchase->name}}</td>
                                    <td>{{$purchase->faculty}}</td>
                                    <td>
                                      <a class=" btn btn-lg  btn-danger btn-block" href="{{url('dean/requestlist',['faculty'=>$purchase->faculty,'id'=>$purchase->purchase_id])}}">GO</a>
                                    </td>
                                </tr>
                              @endforeach
                            @endif

                          </tbody>
                          <!--Table body-->
                      </table>
                      <!--Table-->
                    </form>
                </div>
      </div>
    </div>

<script type="text/javascript">
$(document).ready(function(){

  $('#checkAll').change(function() {
       if($(this).is(':checked')) {
           $("input[type='checkbox']").attr('checked', 'checked');
       } else {
           $("input[type='checkbox']").removeAttr('checked');
       }
   });

  $("input[type='checkbox']").not('#checkAll').change( function() {
       $('#checkAll').removeAttr('checked');
   });

});


</script>


<script>

  $("#myForm").submit(function(event){
      event.preventDefault();

     let _token = $("input[name=_token]").val();

     var cb = [];
     $.each($('.cb:checked'), function() {
     cb.push($(this).val());
     });

     $.ajax({
       url: "{{route('update.multiple')}}",
       method: "POST",
       dataType: 'JSON',
       data:{
         "cb":cb,
         "_token":_token
       },
       success: function (response) { // What to do if we succeed
          console.log(response)
       }
     });
  });




</script>
@endsection

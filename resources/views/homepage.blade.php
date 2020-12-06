@extends('layouts.app')

@section('content')
<div class="row">
    <div class="col-sm-7 leftside bg-light">
        <div class="row title mx-auto">
            <h1> Welcome To MMU Library Book Purchasing System</h1>
            <h5>Suggest any resources to be added into MMU Library
                collection</h5>
        </div>
    </div>

    <div class="col-sm-5 rightside">
        <div class="container">
            <div class="row">
                <div class="mx-auto text-light">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Please sign in</h3>
                        </div>
                        <div class="panel-body">
                            <form accept-charset="UTF-8" role="form">
                                <fieldset>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="E-mail" name="email" type="text">
                                    </div>
                                    <div class="form-group">
                                        <input class="form-control" placeholder="Password" name="password" type="password" value="">
                                    </div>
                                    <div class="checkbox">
                                        <label>
                                            <input name="remember" type="checkbox" value="Remember Me"> Remember Me
                                        </label>
                                    </div>
                                    <input class="btn btn-lg btn-danger btn-block" type="submit" value="Login">
                                </fieldset>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
<div class="row bg-dark">

  <div class="row mx-auto">
    <div class="contact  mt-3 text-light p-3">
        <h1>Contacts</h1>
    </div>
  </div>
  <div class="row mx-auto p-4 m-3">
    <div class="col-md-4 col-sm-6">
      <div class="card" >
          <img class="card-img-top" src="{{asset('img/cyberjaya.png')}}" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">MMU Cyberjaya Library</h5>
              <p class="card-text">Contact: 0123456789</p>
              <p class="card-text">Email: abc@mmu.edu.my</p>
              <p class="card-text">Operation Hour: 8 a.m-5p.m</p>
          </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card" >
          <img class="card-img-top" src="{{asset('img/melaka.png')}}" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">MMU Melaka Library</h5>
              <p class="card-text">Contact: 0123456789</p>
              <p class="card-text">Email: abc@mmu.edu.my</p>
              <p class="card-text">Operation Hour: 8 a.m-5p.m</p>
          </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card" >
          <img class="card-img-top" src="{{asset('img/research.png')}}" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">MMU Research Library</h5>
              <p class="card-text">Contact: 0123456789</p>
              <p class="card-text">Email: abc@mmu.edu.my</p>
              <p class="card-text">Operation Hour: 8 a.m-5p.m</p>
          </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card" >
          <img class="card-img-top" src="{{asset('img/law.png')}}" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">MMU Law Library</h5>
              <p class="card-text">Contact: 0123456789</p>
              <p class="card-text">Email: abc@mmu.edu.my</p>
              <p class="card-text">Operation Hour: 8 a.m-5p.m</p>
          </div>
      </div>
    </div>
    <div class="col-md-4 col-sm-6">
      <div class="card" >
          <img class="card-img-top" src="{{asset('img/nusajaya.png')}}" alt="Card image cap">
          <div class="card-body">
              <h5 class="card-title">MMU Nusajaya Library</h5>
              <p class="card-text">Contact: 0123456789</p>
              <p class="card-text">Email: abc@mmu.edu.my</p>
              <p class="card-text">Operation Hour: 8 a.m-5p.m</p>
          </div>
      </div>
    </div>
  </div>


</div>
@endsection

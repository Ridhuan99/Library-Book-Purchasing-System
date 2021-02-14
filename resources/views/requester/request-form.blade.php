@extends('layouts.app')

@section('content')
<div class="form-page row">
    <div class="form-section col-sm-8">
      @if(session('status'))
        <div class="alert alert-success m-4">
          {{session('status')}}
        </div>
      @endif

        <form class="needs-validation p-4" action="{{route('purchases.store')}}" method="post">
          @csrf
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="name">Name*</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="etc: Ng Yan Yan" value="{{old('name')}}" required>
                    @error ('name')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>

                <div class="col-sm-6 mb-3">
                    <label for="mmu_id">MMU ID*</label>
                    <input type="text" class="form-control" id="mmu_id" name="mmu_id" placeholder="etc: 1101108567" value="{{old('mmu_id')}}" required>
                    @error ('mmu_id')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="extension_number">Extension Number</label>
                    <input type="text" class="form-control" id="extension_number" name="extension_number" placeholder="" value="{{old('extension_number')}}" >
                    @error ('extension_number')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>
                <div class="col-sm-6 mb-3">
                    <label for="faculty">Faculty*</label>
                    <select class="custom-select d-block w-100" id="faculty" name="faculty"  required>
                        <option value="">Choose...</option>
                        <option>FAC</option>
                        <option>FOB</option>
                        <option>FCA</option>
                        <option>FCI</option>
                        <option>FCM</option>
                        <option>FOE</option>
                        <option>FET</option>
                        <option>FIST</option>
                        <option>FOL</option>
                        <option>FOM</option>
                        <option>PRES</option>
                        <option>VP ACAD</option>
                        <option>VP RDI</option>
                    </select>
                    @error ('faculty')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="format">Format*</label>
                    <select class="custom-select d-block w-100" id="format" name="format" required>
                        <option value="">Choose...</option>
                        @foreach ($formats as $format)
                          <option>{{$format->value}}</option>
                        @endforeach

                    </select>
                    @error ('format')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>
                <div class="col-sm-6 mb-3">
                    <label for="campus">Campus*</label>
                    <select class="custom-select d-block w-100" id="campus" name="campus" required>
                        <option value="">Choose...</option>
                        <option>Cyberjaya</option>
                        <option>Melaka</option>
                        <option>Nusajaya</option>
                    </select>
                    @error ('campus')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="category">Category*</label>
                    <select class="custom-select d-block w-100" id="category" name="category" required>
                        <option value="">Choose...</option>
                        <option>Red Spot</option>
                        <option>Reference</option>
                        <option>Open-shelf</option>
                    </select>
                    @error ('category')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>

                <div class="col-sm-6 mb-3">
                    <label for="library">Library*</label>
                    <select class="custom-select d-block w-100" id="library" name="library" required>
                        <option value="">Choose...</option>
                        <option>MMU Law Library</option>
                        <option>MMU Melaka Library</option>
                        <option>MMU Johor Library</option>
                        <option>MMU Research Library</option>
                        <option>MMU Cyberjaya Library</option>
                    </select>
                    @error ('library')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="title">Title*</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="etc: Introduction to Java" value="{{old('title')}}" required>
                    @error ('title')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>

                <div class="col-sm-6 mb-3">
                    <label for="isbn">ISBN*</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="etc: 978-3-16-148410-0" value="{{old('isbn')}}" required>
                    @error ('isbn')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="etc: Megan Miranda" value="{{old('author')}}" required>
                    @error ('author')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>

                <div class="col-sm-6 mb-3">
                    <label for="publisher">Publisher*</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" placeholder="" value="{{old('publisher')}}" required>
                    @error ('publisher')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="subject_code">Subject Code*</label>
                    <input type="text" class="form-control" id="subject_code" name="subject_code" placeholder="etc: MUR223J" value="{{old('subject_code')}}" required>
                    @error ('subject_code')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>

                <div class="col-sm-6 mb-3">
                    <label for="quantity">Quantity*</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="etc: 10" value="{{old('quantity')}}" required>
                    @error ('quatity')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="total_students">Total Students</label>
                    <input type="number" class="form-control" id="total_students" name="total_students" placeholder="etc: 50" value="{{old('total_students')}}" >
                    @error ('total_students')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>

                <div class="col-sm-6 mb-3">
                    <label for="price">Price</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="etc: 32.20" value="{{old('price')}}" >
                    @error ('price')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 mb-3 remark-sec">
                    <label for="remark">Remark</label>
                    <textarea class="form-control" id="remark" name="remark" rows="8" cols="100" value="{{old('remark')}}"></textarea>
                    @error ('remark')
                      <div class="alert alert-danger m-1">
                          {{$message}}
                      </div>
                    @enderror
                </div>
            </div>

            <hr class="mb-4">
            <button class="btn btn-danger btn-lg btn-block" type="submit">Submit</button>
        </form>
    </div>

    <div class="info-section col-sm-4">
      <div class="card info-card mt-4">
          <div class="card-body">
              <h3 class="card-title">Please follow these steps</h3>
              <p class="card-text">1. Check your desire resources at mmu book
              collection first:
              <a href="https://proxyvlib.mmu.edu.my/login?url=http://library.mmu.edu.my/library2/diglib/collections2/index.php">MMU Library Book Recommended Collection</a></p>
              <p class="card-text">2. If the resources is not available, you can proceed with your book purchase request application</p>
              <p class="card-text">3. Your request will be validated by your respective Dean and Library Management</p>
              <p class="card-text">4. You can check your request status in email or login into LBPS system.</p>
              <p class="card-text">5. You can upload a csv file for multiple book request.</p>
              <p class="card-text">5. Make sure to follow the template   <a href="{{ url('/sample/PurchaseSample.xlsx') }}"> Download Sample</a></p>

              @if (isset($errors) && $errors->any())
                <div class="alert alert-danger">
                  @foreach ($errors->all() as $error)
                    {{$error}}
                  @endforeach
                </div>
              @endif
              <form class="needs-validation" method="post" action="/import" enctype="multipart/form-data" novalidate>
                @csrf
                <div class="col-12 mb-3">
                    <label for="url">Upload File</label>
                      <input type="file" name="file" class="form-control" id="file" />
                      <button class="btn btn-danger btn-lg btn-block mt-3" type="submit">Upload File</button>
                </div>
              </form>
          </div>
      </div>
    </div>

</div>
@endsection

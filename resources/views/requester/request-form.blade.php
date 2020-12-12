@extends('layouts.app')

@section('content')
<div class="form-page row">
    <div class="form-section col-sm-8">
        <form class="needs-validation p-4" action="{{route('purchases.store')}}" method="post">
          @csrf
            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid first name is required.
                    </div>
                </div>

                <div class="col-sm-6 mb-3">
                    <label for="mmu_id">MMU ID:</label>
                    <input type="text" class="form-control" id="mmu_id" name="mmu_id" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid MMU ID is required.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="extension_number">Extension Number:</label>
                    <input type="text" class="form-control" id="extension_number" name="extension_number" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid extension number is required.
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <label for="faculty">Faculty</label>
                    <select class="custom-select d-block w-100" id="faculty" name="faculty" required>
                        <option value="">Choose...</option>
                        <option>FACULTY OF APPLIED COMMUNICATION(FAC)</option>
                        <option>FACULTY OF BUSINESS(FOB)</option>
                        <option>FACULTY OF cINEMATIC ARTS(FCA)</option>
                        <option>FACULTY OF COMPUTING AND INFORMATICS(FCI)</option>
                        <option>FACULTY OF CREATIVE MULTIMEDIA(FCM)</option>
                        <option>FACULTY OF ENGINEERING(FOE)</option>
                        <option>FACULTY OF ENGINEERING AND TECHNOLOGY(FET)</option>
                        <option>FACULTY OF INFORMATION SCIENCE AND TECHNOLOGY(FIST)</option>
                        <option>FACULTY OF LAW(FOL)</option>
                        <option>FACULTY OF MANAGEMENT(FOM)</option>
                        <option>PRESIDENT'S OFFICE(PRES)</option>
                        <option>VICE PRESIDENT, ACADEMIC(VP ACAD)</option>
                        <option>VICE PRESIDENT, R&d AND INNOVATION(VP RDI)</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a faculty.
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="format">Format</label>
                    <select class="custom-select d-block w-100" id="format" name="format" required>
                        <option value="">Choose...</option>
                        <option>Printed</option>
                        <option>e-book</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a faculty.
                    </div>
                </div>
                <div class="col-sm-6 mb-3">
                    <label for="campus">Campus</label>
                    <select class="custom-select d-block w-100" id="campus" name="campus" required>
                        <option value="">Choose...</option>
                        <option>Cyberjaya</option>
                        <option>Melaka</option>
                        <option>Nusajaya</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a faculty.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="category">Category</label>
                    <select class="custom-select d-block w-100" id="category" name="category" required>
                        <option value="">Choose...</option>
                        <option>Red Spot</option>
                        <option>Reference</option>
                        <option>Open-shelf</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a faculty.
                    </div>
                </div>

                <div class="col-sm-6 mb-3">
                    <label for="library">Library</label>
                    <select class="custom-select d-block w-100" id="library" name="library" required>
                        <option value="">Choose...</option>
                        <option>MMU Law Library</option>
                        <option>MMU Melaka</option>
                        <option>MMU Johor Library</option>
                        <option>MMU Research Library</option>
                        <option>MMU Cyberjaya Library</option>
                    </select>
                    <div class="invalid-feedback">
                        Please select a faculty.
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" id="title" name="title" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid extension number is required.
                    </div>
                </div>

                <div class="col-sm-6 mb-3">
                    <label for="isbn">ISBN</label>
                    <input type="text" class="form-control" id="isbn" name="isbn" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid extension number is required.
                    </div>
                </div>
            </div>


            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="author">Author</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid extension number is required.
                    </div>
                </div>

                <div class="col-sm-6 mb-3">
                    <label for="publisher">Publisher</label>
                    <input type="text" class="form-control" id="publisher" name="publisher" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid extension number is required.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="subject_code">Subject Code</label>
                    <input type="text" class="form-control" id="subject_code" name="subject_code" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid extension number is required.
                    </div>
                </div>

                <div class="col-sm-6 mb-3">
                    <label for="quantity">Quantity</label>
                    <input type="number" class="form-control" id="quantity" name="quantity" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid extension number is required.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-6 mb-3">
                    <label for="total_students">Total Students</label>
                    <input type="number" class="form-control" id="total_students" name="total_students" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid extension number is required.
                    </div>
                </div>

                <div class="col-sm-6 mb-3">
                    <label for="price">Price (In Ringgit)</label>
                    <input type="text" class="form-control" id="price" name="price" placeholder="" value="" required>
                    <div class="invalid-feedback">
                        Valid extension number is required.
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-12 mb-3 remark-sec">
                    <label for="remark">Remark</label>
                    <textarea class="form-control" id="remark" name="remark" rows="8" cols="100"></textarea>
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
              <p class="card-text">5. You can enter the link of your intended resource to enable the auto-fill form feature below:</p>

              <form class="needs-validation" novalidate>
                <div class="col-12 mb-3">
                    <label for="firstName">URL</label>
                    <input type="text" class="form-control" id="firstName" placeholder="" value="" required>
                      <div class="invalid-feedback">
                          Valid extension number is required.
                      </div>
                      <button class="btn btn-danger btn-lg btn-block mt-3" type="submit">Search</button>
                </div>
              </form>
          </div>
      </div>
    </div>

</div>
@endsection

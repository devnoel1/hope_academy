@extends('layout.studentlayout')

@section('content')
<div class="col-md-4">
    <div class="card card-user">
      <div class="image">
          <img src="../img/encroll-img.jpg" alt="...">
      </div>
      <div class="card-body">
        <div class="author">
          <a href="#">
              <img class="avatar border-gray" src="" alt="...">
            <h5 class="title text-capitalize"></h5>
          </a>
          <p class="description text-capitalize">
              Class :
          </p>
          <p class="description">
              Gender :
          </p>
        </div>
        <p class="description text-center">
        </p>
      </div>
      <div class="card-footer">
        <hr>
        <div class="button-container">
          <div class="row">
            <div class="col-lg-3 col-md-6 col-6 ml-auto">
                <h6 class="text-uppercase">
                <br>
                <small>Class</small>
              </h6>
            </div>
            <div class="col-lg-4 col-md-6 col-6 ml-auto mr-auto">
              <h5>2
                <br>
                <small> Subjects</small>
              </h5>
            </div>

          </div>
        </div>
      </div>
    </div>

  </div>
  <div class="col-md-8">

    <div class="card card-user">

      <div class="card-header">
          <ul class="nav nav-tabs" id="myTab">
            <li class="nav-item active"><a href="#edit" class="nav-link" data-toggle="tab">Edit Profile</a></li>
            <li class="nav-item"><a href="#result" class="nav-link" data-toggle="tab">Check Result</a></li>
            <li class="nav-item"><a href="#ass" class="nav-link" data-toggle="tab">Assignment</a></li>
       </ul>

      </div>
      <div class="card-body">
          <div class="tab-content">

              <div class="tab-pane active" id="edit">
                  <h5 class="card-title">Edit Profile</h5>
   <form method="post"  enctype="multipart/form-data">
          <div class="row">
            <div class="col-md-5 pr-1">
              <div class="form-group">
                <label>Student ID</label>
                <input type="text" class="form-control" disabled="" placeholder="" value="">
              </div>
            </div>

            <div class="col-md-4 pl-1">
              <div class="form-group">
                <label for="exampleInputEmail1">Surname</label>
                <input type="text" class="form-control" name="sname" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-6 pr-1">
              <div class="form-group">
                <label>Middle Name</label>
                <input type="text" class="form-control" name="mname" value="">
              </div>
            </div>
            <div class="col-md-6 pl-1">
              <div class="form-group">
                <label>Other Name</label>
                <input type="text" class="form-control" name="lname" value="">
              </div>
            </div>
          </div>
          <div class="row">
              <div class="col-md-6">
              <div class="form-group">
                <label>Gender</label>
                <select name="gender" class="form-control">
                    <option value=""></option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                </select>
              </div>
            </div>
            <div class="col-md-6">
              <div class="form-group">
                <label>Address</label>
                <input type="text" class="form-control" name="address" value="">
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-4 pr-1">
              <div class="form-group">
                <label>State Of Origin</label>
                <input type="text" class="form-control" name="state" value="">
              </div>
            </div>
            <div class="col-md-4 px-1">
              <div class="form-group">
                <label>L G A</label>
                <input type="text" class="form-control" name="lga" value="">
              </div>
            </div>
              <div class="col-md-4 px-1">
              <div class="form-group">
                <label>Date Of Birth</label>
                <input type="text" class="form-control" name="dob" value="">
              </div>
            </div>
          </div>

           <div class="row">
            <div class="col-md-4 pr-1">
              <div class="form-group">
                <label>Age</label>
                <input type="text" class="form-control" name="age" value="">
              </div>
            </div>
            <div class="col-md-4 px-1">
              <div class="form-group">
                <label>Blood Group</label>
                <input type="text" class="form-control" name="blood_g" value="">
              </div>
            </div>
              <div class="col-md-4 px-1">
              <div class="form-group">
                <label>Geno Type</label>
                <input type="text" class="form-control" name="genotype" value="">
              </div>
            </div>
          </div>

         <div class="row">
            <div class="col-md-4 pr-1">
              <div class="form-group">
                <label>Family Name</label>
                <input type="text" class="form-control" name="fname" value="">
              </div>
            </div>
            <div class="col-md-4 px-1">
              <div class="form-group">
                <label>Fathers Name</label>
                <input type="text" class="form-control" name="father_name" value="">
              </div>
            </div>
              <div class="col-md-4 px-1">
              <div class="form-group">
                <label>Mothers Name</label>
                <input type="text" class="form-control" name="mothers_name" value="">
              </div>
            </div>
          </div>
           <div class="row">
            <div class="col-md-6 pr-1">
              <div class="form-group">
                <label>Pnone Number 1</label>
                <input type="text" class="form-control" name="phone1" value="">
              </div>
            </div>
            <div class="col-md-6 px-1">
              <div class="form-group">
                <label>Phone Number 2</label>
                <input type="text" class="form-control" name="phone2" value="">
              </div>
            </div>

          </div>
          <div class="row">
            <div class="update ml-auto mr-auto">
              <button type="submit" class="btn btn-primary btn-round">Update Profile</button>
            </div>
          </div>
        </form>
              </div>

              <div class="tab-pane" id="result">

                  <h5 class="card-title">Check Result</h5>
                  <div class="container" style="width: 50%">
                      <form method="post" action="process.php?check_result">
          <div class="form-group">
              <input type="hidden" name="sec" value="">
              <input type="hidden" name="std_id" value="">
              <label>Session:</label>
              <select name="ses" class="form-control">
                  <option value="">Select session</option>
                 {{-- session check --}}
                  <option value=""></option>

              </select>
          </div>
          <div class="form-group">
              <label>Term:</label>
              <select name="term" class="form-control">
                  <option value="">Select Term</option>
                 {{-- select term --}}
                  <option value=""></option>
              </select>
          </div>
          <div class="form-group">
              <label>Class:</label>
              <select name="cls_id" class="form-control">
                  <option value="">Select Class</option>
                 {{-- select class where section --}}
                  <option value=""></option>
              </select>
          </div>
          <div class="form-group">
              <button type="submit" name="check" class="btn btn-danger btn-block">Check</button>
          </div>
      </form>
                  </div>
              </div>
              <div class="tab-pane" id="ass">
                  <h5 class="card-title">Assignment</h5>
                  <div class="list-group">
                    {{-- select from Assignment --}}
<a href="" class="list-group-item text-capitalize"></a>
                   </div>
              </div>
          </div>
      </div>
    </div>
  </div>
@endsection

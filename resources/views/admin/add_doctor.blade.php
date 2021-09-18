<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')

      <style>
          label{
              display: inline-block;
              width: 200px;
          }
      </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')
      <!-- partial -->

      @include('admin.navbar')

      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->



            <div class="container text-center" style="padding-top: 6vh;">
                <div class="row">
                    <div class="col-md-12">

                    @if(session()->has('message'))

                        <div class="alert alert-success">

                            <button type="button" class="close" data-dismisss(alert)>
                                x
                            </button>

                            {{session()->get('message')}}

                        </div>

                    @endif


                    <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                        <div style="padding: 15px;">
                            <label class="text-bold"> Doctor Name: </label>
                            <input class="rounded" style="color:black" type="text" name="name" placeholder=" write doctor name" required>
                        </div>

                        <div style="padding: 15px;">
                            <label class="text-bold"> Phone: </label>
                            <input class="rounded" style="color:black" type="tel" name="phone" placeholder=" write number" required>
                        </div>

                        <div style="padding: 15px;">
                            <label class="tex-bold"> Speciality: </label>
                            <select class="text-dark rounded" name="speciality" style="width: 230px;" required>
                                <option> --Select-- </option>
                                <option value="skin">skin</option>
                                <option value="heart">heart</option>
                                <option value="eye">eye</option>
                                <option value="nose">nose</option>
                            </select>
                        </div>

                        <div style="padding: 15px;">
                            <label class="text-bold"> Room: </label>
                            <input class="rounded" style="color:black" type="number" name="room" placeholder=" write room number" required>
                        </div>

                        <div style="padding: 15px;">
                            <label class="text-bold"> Doctor Image: </label>
                            <input class="rounded" style="color:white" type="file" name="file" required>
                        </div>

                        <div style="padding: 15px;">
                            <input class="btn btn-success" type="submit">
                        </div>

                    </form>
                    </div>
                </div>
            </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

        @include('admin.script');

  </body>
</html>

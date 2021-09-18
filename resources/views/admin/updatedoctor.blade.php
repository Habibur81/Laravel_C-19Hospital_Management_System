<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

    <style>

        label{

            width: 200px !important;
            padding: 2vh !important;
            display: inline-block !important;
        }

        input{
            text-align: center !important;
            color:black !important;
        }

    </style>

      @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

        @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->


        <div class="container" align="center"  style="padding: 100px;">


        @if(session()->has('message'))

            <div class="alert alert-success">

                <button type="button" class="close" data-dismisss(alert)>
                    x
                </button>

                {{session()->get('message')}}

            </div>

        @endif


            <form action="{{url('editdoctor', $data->id)}}" method="POST" enctype="multipart/form-data">

                @csrf

                <div>
                    <label for="">Doctor Name</label>
                    <input type="text" name="name" value="{{$data->name}}">
                </div>

                <div>
                    <label for="">Phone</label>
                    <input   type="tel" name="tel" value="{{$data->phone}}">
                </div>

                <div>
                    <label for="">Speciality</label>
                    <input  type="text" name="speciality" value="{{$data->speciality}}">
                </div>

                <div>
                    <label for=""> Room No </label>
                    <input type="number" name="room" value="{{$data->room}}">
                </div>

                <div>
                    <label for=""> Old Image </label>
                    <img src="doctorImage/{{$data->image}}" height="80" width="80">
                </div>

                <div>
                    <label for=""> Change Image </label>
                    <input type="file" name="file">
                </div>

                <div>
                    <input type="submit" class="btn btn-primary">
                </div>

            </form>

        </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

        @include('admin.script');

  </body>
</html>

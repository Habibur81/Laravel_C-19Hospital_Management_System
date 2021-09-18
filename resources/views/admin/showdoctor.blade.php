<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

        @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper" style="padding-top: 20vh; padding-left:25vw;">
        <!-- partial:partials/_navbar.html -->

            <div class="row">
              <div class="col-md-12 col-sm-12">

                <table>

                    <thead>
                        <tr style="background-color: black;">
                            <th class="text-white text-center p-2"> Doctor Name</th>
                            <th class="text-white text-center p-2"> Phone </th>
                            <th  class="text-white text-center p-2"> Speciality </th>
                            <th class="text-white text-center p-2"> Room No </th>
                            <th  class="text-white text-center p-2"> Image </th>
                            <th  class="text-white text-center p-2"> Delete </th>
                            <th  class="text-white text-center p-2"> Update </th>
                        </tr>
                    </thead>

                    <tbody >

                    @foreach( $data as $doctor)
                        <tr class="text-center" style="background-color: #150050;">
                            <td>{{$doctor->name}}</td>
                            <td>{{$doctor->phone}}</td>
                            <td>{{$doctor->speciality}}</td>
                            <td>{{$doctor->room}}</td>
                            <td><img height="60" width="60" src="doctorImage/{{$doctor->image}}" class="rounded"></td>
                            <td><a onclick = " return confirm('Are You Sure to delete This')" class="btn btn-danger" href="{{url('deletedoctor', $doctor->id)}}">Delete</a></td>
                            <td><a class="btn btn-primary" href="{{url('updatedoctor', $doctor->id)}}">Update</a></td>
                        </tr>
                    @endforeach

                    </tbody>

                </table>

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

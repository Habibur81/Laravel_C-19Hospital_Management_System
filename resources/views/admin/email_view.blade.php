<!DOCTYPE html>
<html lang="en">
  <head>

    <base href="/public">

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


                    <form action="{{url('sendemail', $data->id)}}" method="POST">

                    @csrf

                        <div style="padding: 15px;">
                            <label class="text-bold"> Greeting: </label>
                            <input class="rounded" style="color:black" type="text" name="greeting" required>
                        </div>

                        <div style="padding: 15px;">
                            <label class="text-bold"> Body: </label>
                            <input class="rounded" style="color:black" type="text" name="body" required>
                        </div>


                        <div style="padding: 15px;">
                            <label class="text-bold"> Action Text: </label>
                            <input class="rounded" style="color:black" type="text" name="actiontext" required>
                        </div>

                        <div style="padding: 15px;">
                            <label class="text-bold"> Action Url: </label>
                            <input class="rounded" style="color:black" type="text" name="actionurl" required>
                        </div>

                        <div style="padding: 15px;">
                            <label class="text-bold"> End Part: </label>
                            <input class="rounded" style="color:black" type="text" name="endpart" required>
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

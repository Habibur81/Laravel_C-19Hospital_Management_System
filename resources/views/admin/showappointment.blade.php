<!DOCTYPE html>
<html lang="en">
  <head>
      @include('admin.css')

      <style>
          th{
              text-align:center;
              font-size: 12px !important;
              padding: 5px !important;
          }

          td{
              font-size: 12px !important;
              text-align: center;
              padding: 5px !important;
          }
      </style>
  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->

        @include('admin.sidebar')

        @include('admin.navbar')
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->

            <div class="container" align="center"  style="padding: 50px;">

                <table>
                    <thead>
                        <tr style="background-color: black;">
                            <th> Customer Name</th>
                            <th> Email </th>
                            <th> Phone </th>
                            <th> Doctor Name </th>
                            <th> Date </th>
                            <th> Message </th>
                            <th> Status </th>
                            <th> Appoved </th>
                            <th> Cancel </th>
                            <th> Send Mail </th>
                        </tr>
                    </thead>
                    <tbody >
                        @foreach( $data as $appoint )
                            <tr>
                                <td>{{ $appoint->name }}</td>
                                <td>{{ $appoint->email }}</td>
                                <td>{{ $appoint->phone }}</td>
                                <td>{{ $appoint->doctor }}</td>
                                <td>{{ $appoint->date }}</td>
                                <td>{{ $appoint->message }}</td>
                                <td>{{ $appoint->status }}</td>
                                <td>
                                    <a class="btn btn-success" href="{{url('appoved', $appoint->id)}}">appoved</a>
                                </td>
                                <td>
                                    <a class="btn btn-danger" href="{{url('cancel', $appoint->id)}}">cencle</a>
                                </td>
                                <td>
                                    <a class="btn btn-primary" href="{{url('emailview', $appoint->id)}}" style="font-size: 11px;">send mail</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>

        <!-- main-panel ends -->
      </div>
      <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

        @include('admin.script');

  </body>
</html>


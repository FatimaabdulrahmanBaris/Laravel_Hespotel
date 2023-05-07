
<!DOCTYPE html>
<html lang="en">
  <head>
   @include('admin.css')
  </head>
  <body>
    <div class="container-scroller">
      
      <!-- partial:partials/_sidebar.html -->
      @include('admin.saidbar')
      <!-- partial -->
      @include('admin.navbar')
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
        <div  align="center"  style="padding-top:70px;"> 
     <table>
        <tr style="background-color:black;">
            <th  style="padding:10px;font-size:20px;color:white;">Customer Name</th>
            <th style="padding:10px;font-size:20px;color:white;">Email</th>
            <th style="padding:10px;font-size:20px;color:white;">Phone</th>
            <th style="padding:10px;font-size:20px;color:white;">Doctor Name</th>
            <th style="padding:10px;font-size:20px;color:white;">Date</th>
            <th style="padding:10px;font-size:20px;color:white;">Message</th>
            <th style="padding:10px;font-size:20px;color:white;">Statue </th>
            <th style="padding:10px;font-size:20px;color:white;">Approved </th>
            <th style="padding:10px;font-size:20px;color:white;">Cancel </th>


        </tr>
        @foreach($data as $appoint)
        <tr style="background-color:black; color:white;"  align="center">
          <td style="padding:10px;color:white;">{{$appoint->name}}</td>
          <td style="padding:10px;color:white;">{{$appoint->email}}</td>
          <td style="padding:10px;color:white;">{{$appoint->phone}}</td>
          <td style="padding:10px;color:white;">{{$appoint->doctor}}</td>
          <td style="padding:10px;color:white;">{{$appoint->date}}</td>
          <td style="padding:10px;color:white;">{{$appoint->message}}</td>
          <td style="padding:10px;color:white;">{{$appoint->status}}</td>

           <td>
             <a class="btn btn-success" href="{{url('approved',$appoint->id)}}">
               Approved
             </a>
           </td>

           <td>
             <a class="btn btn-danger" href="{{url('canceled',$appoint->id)}}">
               Canceled
             </a>
           </td>



        </tr>
       @endforeach
  </div>

        </div>
        <!-- main-panel ends -->
      
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>






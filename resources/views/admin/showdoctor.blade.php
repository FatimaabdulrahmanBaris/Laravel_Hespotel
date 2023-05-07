
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
                    <th  style="padding:10px;font-size:20px;color:white;">Doctor Name</th>
                   <th style="padding:10px;font-size:20px;color:white;">Phone</th>
                   <th style="padding:10px;font-size:20px;color:white;">Specility</th>
                   <th style="padding:10px;font-size:20px;color:white;">Room No</th>
                   <th style="padding:10px;font-size:20px;color:white;">Img</th>
                   <th style="padding:10px;font-size:20px;color:white;">Delete</th>
                   <th style="padding:10px;font-size:20px;color:white;">update</th>

        
                   </tr>
                 @foreach($data as $doctor)
                   <tr style="background-color:black; color:white;"  align="center">
                     <td style="padding:10px;color:white;">{{$doctor->name}}</td>
                     <td style="padding:10px;color:white;">{{$doctor->phone}}</td>
                     <td style="padding:10px;color:white;">{{$doctor->specility}}</td>
                     <td style="padding:10px;color:white;">{{$doctor->room}}</td>
                     <td ><img height="50" width="100" src="doctorimage/{{$doctor->image}}" alt=""></td>
                     <td style="padding:10px;color:white;"><a class="btn btn-danger" href="{{url('deletedoctor',$doctor->id)}}">Delete</a></td>
                     <td style="padding:10px;color:white;"><a class="btn btn-primary" href="{{url('updatedoctor',$doctor->id)}}">update</a></td>
        
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







<!DOCTYPE html>
<html lang="en">
  <head>

    <style>
        label{
          display:inline-block;
          width:200px;
        }
    </style>

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
           <div class="container" align="center" style="padding-top:50px">
           @if(session()->has('message'))
            <div class="alert alert-sucess" >
              <button type="button" class="close" data-dismiss="alert"> 
                X </button>
              {{session()->get('message')}}
            
            </div>

           @endif
              <form action="{{url('upload_doctor')}}" method="POST" enctype="multipart/form-data" >
                @csrf
                <div style="padding:15px">
                 <label> Doctore Name </label>
                  <input type="text" style="color:black" name="name"
                  placeholder="Write the name" require>
                </div>

                <div style="padding:15px">
                 <label> Phone </label>
                  <input type="number" style="color:black" name="number"
                  placeholder="Write the number" require>
                </div>

                <div style="padding:15px">
                 <label> Speciality </label>
                 <select name="speciality" style="color:black; width:200px;">
                   <option>--Select--</option>
                   <option value="skin">skin</option>
                   <option  value="heart">heart</option>
                   <option  value="eyes">eyes</option>
                   <option  value="nose">nose</option>
                 </select>
                </div>

                <div style="padding:15px">
                 <label> Room No </label>
                  <input type="number"  style="color:black" name="room"
                  placeholder="Write the room number" require>
                </div>

                <div style="padding:15px">
                 <label> Doctor Img </label>
                  <input type="file"  name="file" require>
                </div>

                <div style="padding:15px">
                 
                  <input type="Submit"  class="btn btn-success"  >
                </div>
              </form>
        
             </div>
         </div>
        <!-- main-panel ends -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>






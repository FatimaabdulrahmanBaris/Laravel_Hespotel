
<!DOCTYPE html>
<html lang="en">
  <head>
      <base href="/public">


      <style>
          label{
              display:inline-block;
              width: 200px;

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
             <div class="container" align="center" style="padding:100px">
             @if(session()->has('message'))
            <div class="alert alert-sucess" >
              <button type="button" class="close" data-dismiss="alert"> 
                X </button>
              {{session()->get('message')}}
            
            </div>

           @endif
                <form action="{{url('editdoctor',$data->id)}}" method="POST" enctype="multipart/form-data" >
                 @csrf
                <div style="padding:15px">
                 <label> Doctore Name </label>
                  <input type="text" style="color:black" name="name"
                    value="{{$data->name}}">
                </div>

                <div style="padding:15px">
                 <label> Phone </label>
                  <input type="number" style="color:black" name="phone"
                  value="{{$data->phone}}">
                </div>

                <div style="padding:15px">
                 <label> Speciality </label>
                 <input type="text"  style="color:black" name="speciality"
                  value="{{$data->speciality}}">
                </div>

                <div style="padding:15px">
                 <label> Room No </label>
                  <input type="number"  style="color:black" name="room"
                  value="{{$data->room}}">
                </div>

                <div style="padding:15px">
                 <label> Old Doctor Img </label>
                  <img width=100 height=100 src="doctorimage/{{$data->image}}">
                </div>
                
                <div style="padding:15px">
                 <label>New Doctor Img </label>
                  <input type="file"  name="file" require>
                </div>

                <div style="padding:15px">
                 
                  <input type="Submit"  class="btn btn-primary"  >
                </div>
              </form>
              

             </div>
        </div>
        <!-- main-panel ends -->
      
    <!-- container-scroller -->
    <!-- plugins:js -->
   @include('admin.script')
  </body>
</html>

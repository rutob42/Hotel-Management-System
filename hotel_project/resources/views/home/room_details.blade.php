<!DOCTYPE html>
<html lang="en">
   <head>
      <base href="/public">
      @include('home.css')
      <style>
        /* Universal reset */
* {
   margin: 0;
   padding: 0;
   box-sizing: border-box;
   font-family: 'Poppins', sans-serif;
}

body {
   background-color: #f0f2f5;
   color: #333;
   overflow-x: hidden;
}

label
{
   display: inline-block;
   width:200px;

}

input
{
   width: 200px;
}

/* Our Room Section */
.our_room {
   padding: 100px 0;
   background: linear-gradient(135deg, #ffffff 40%, #e0f7ff);
   position: relative;
   display: flex;
   justify-content: center; /* Centers cards horizontally */
   flex-wrap: wrap; /* Ensures that multiple cards wrap nicely */
   gap: 40px; /* Adds space between cards */
}

/* Section Title */
.titlepage h2 {
   font-size: 52px;
   color: #2a3b5c;
   font-weight: 900;
   text-align: center;
   letter-spacing: 4px;
   text-transform: uppercase;
   margin-bottom: 10px;
   animation: fadeInDown 1s ease-in-out;
}

.titlepage p {
   font-size: 18px;
   color: #7a7a7a;
   text-align: center;
   max-width: 700px;
   margin: 0 auto 40px;
   line-height: 1.8;
   animation: fadeInUp 1.2s ease-in-out;
}

/* Room Cards */
.room {
   background-color: black; /* Fixed invalid color */
   border-radius: 25px;
   box-shadow: 50px 85px 100px rgba(6, 5, 0, 0.5);
   transition: all 0.9s ease;
   overflow: hidden;
   position: relative;
   text-align: center;
   animation: zoomIn 1.5s ease forwards;
   width: 150%;
   margin: 0 auto; /* Ensure single card is centered */
}

.room:hover {
   transform: translateY(-10px) scale(1.05);
   box-shadow: 0 20px 60px rgba(0, 0, 0, 0.2);
}

/* Room Image */
.room_img img {
   width: 100%;
   height: 250px;
   object-fit: cover;
   border-top-left-radius: 15px;
   border-top-right-radius: 15px;
   transition: transform 0.5s ease;
}

.room:hover .room_img img {
   transform: scale(1.1);
}

/* Room Content */
.bed_room {
   padding: 85px 80px;
   background-color: #f9fafb;
}

.bed_room h3 {
   font-size: 26px;
   color: #34495e;
   font-weight: 700;
   margin-bottom: 10px;
}

.bed_room p {
   font-size: 15px;
   color: #7d7d7d;
   line-height: 1.6;
   margin-bottom: 10px;
}

.bed_room h4 {
   font-size: 18px;
   color: #34495e;
   margin-bottom: 10px;
}

.bed_room h3.price {
   color: #e74c3c;
   font-size: 24px;
   margin-bottom: 20px;
}

/* Fancy gradient divider */
.divider {
   width: 80px;
   height: 4px;
   background: linear-gradient(to right, #ff5a5f, #fcb045);
   margin: 15px auto 20px;
   border-radius: 50px;
}

/* Call to Action Button */
.book-now-btn {
   display: inline-block;
   padding: 10px 30px;
   background-color: #3498db;
   color: white;
   text-transform: uppercase;
   font-weight: bold;
   border-radius: 50px;
   transition: background-color 0.3s ease, transform 0.3s ease;
}

.book-now-btn:hover {
   background-color: #2980b9;
   transform: translateY(-5px);
}

/* Animations */
@keyframes fadeInDown {
   0% {
      opacity: 0;
      transform: translateY(-50px);
   }
   100% {
      opacity: 1;
      transform: translateY(0);
   }
}

@keyframes fadeInUp {
   0% {
      opacity: 0;
      transform: translateY(50px);
   }
   100% {
      opacity: 1;
      transform: translateY(0);
   }
}

@keyframes zoomIn {
   0% {
      opacity: 0;
      transform: scale(0.8);
   }
   100% {
      opacity: 1;
      transform: scale(1);
   }
}

/* Responsive Design */
@media (max-width: 768px) {
   .room_img img {
      height: 200px;
   }

   .titlepage h2 {
      font-size: 36px;
   }
}

@media (max-width: 576px) {
   .room_img img {
      height: 180px;
   }

   .titlepage h2 {
      font-size: 28px;
   }
}
      </style>
   </head>
   <body class="main-layout">
      <!-- Loader -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#"/></div>
      </div>

      <!-- Header -->
      <header>
         @include('home.header')
      </header>

      <!-- Our Rooms Section -->
      <div class="our_room">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Our Luxurious Rooms</h2>
                     <p>Step into a world of elegance and comfort. Experience luxury like never before in our exclusive rooms designed to make your stay unforgettable.</p>
                  </div>
               </div>
            </div>

            <div class="row">



               <div class="col-md-4 col-sm-6">
                  <div class="room">
                     <div style="padding:20px" class="room_img">
                        <img style="height:300px; width:800px"  src="room/{{$room->image}}" alt="Room Image">
                     </div>
                     <div class="bed_room">
                        <h3>{{$room->room_title}}</h3>
                        <div class="divider"></div>
                        <p>{{$room->description}}</p>
                        <h4>Room Type: {{$room->room_type}}</h4>
                        <h3 class="price">Price: {{$room->price}}$</h3>
                        
                     </div>
                  </div>
               </div>
               <div>
    @if(session()->has('message'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Success!</strong> {{ session()->get('message') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    @endif
</div>
               

               @if($errors)

               @foreach($errors->all() as $errors)

               <li style="color:red">
                  {{$errors}}
               </li>

               @endforeach

               @endif

               <form action="{{url('add_booking', $room->id)}}" method="Post">
                  @csrf
               <div class="col-md-4 form-container">
    <div class="form-group">
        <label for="name">Name</label>
        <input type="text" class="form-control" name="name" id="name" placeholder="Enter your name" 
        @if(Auth::id())
         value="{{Auth::user()->name}}"
         @endif>
    </div>

    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" id="email" placeholder="Enter your email"
        @if(Auth::id())
         value="{{Auth::user()->email}}"
         @endif>>
    </div>

    <div class="form-group">
        <label for="phone">Phone</label>
        <input type="number" class="form-control" name="phone" id="phone" placeholder="Enter your phone number"
        @if(Auth::id())
         value="{{Auth::user()->phone}}"
         @endif>>
    </div>

    <div class="form-group">
        <label for="startDate">Start Date</label>
        <input type="date" class="form-control" name="startDate" id="startDate">
    </div>

    <div class="form-group">
        <label for="endDate">End Date</label>
        <input type="date" class="form-control" name="endDate" id="endDate">
    </div>

    <div class="text-center mt-4">
        <input type="submit" class="btn btn-custom" value="Book Room">
    </div>
</div>
</form>

<style>
.form-group label {
    font-weight: bold;
    margin-bottom: 5px;
    font-size: 1.1rem;
}

.form-control {
    padding: 8px;
    font-size: 1rem;
    border-radius: 5px;
    border: 1px solid #ccc;
    box-shadow: none;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 5px rgba(0, 123, 255, 0.5);
}

.btn-primary {
    padding: 15px 30px;
    font-size: 1.2rem;
    background-color: #007bff;
    border-color: #007bff;
    border-radius: 5px;
}

.btn-primary:hover {
    background-color: #0056b3;
    border-color: #0056b3;
}

.text-center {
    text-align: center;
}

.form-container {
    margin-left: 230px; /* Moves the form to the left */
}


</style>



            </div>
         </div>
      </div>

      <!-- Footer -->
      @include('home.footer')

      <script type="text/javascript">

         $(function(){
            var dtToday = new Date();

            var month = dtToday.getMonth() + 1;

            var day = dtToday.getDate();

            var year = dtToday.getFullYear();

            if(month < 10)
               month = '0' + month.toString();

            if(day < 10)
               day = '0' + day.toString();

            var maxDate = year + '-' + month + '-' + day;
            $('#startDate').attr('min', MaxDate);
            $('#endDate').attr('min', maxDate);
            
         });

         </script>

   </body>
</html>

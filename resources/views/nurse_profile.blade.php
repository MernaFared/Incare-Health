<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nurse Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
      .btn{
        margin-top: 20px;
      }
      body {
       background-image: url(/images/docotor_profile/26841.jpg) ;
       background-size: cover;
      }
       
      .card {
             box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.02);
          
        }
        
        .card button {
            border: none;
            outline: 0;
            display: inline-block;
            padding: 8px;
            color: white;
            background-color: #1973e2;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
        }

       .card a {
            text-decoration: none;
            font-size: 22px;
            color: #1973e2;
        }
        .card button {
            border: none;
            outline: 0;
            display:flexbox;
            padding: 8px;
            color: white;
            background-color: #1973e2;
            text-align: center;
            cursor: pointer;
            width: 100%;
            font-size: 18px;
              
        }


        button:hover,
        a:hover {
            opacity: 0.7;
        }
      .container1 {
           justify-content: center;
          text-align: center;
          border: 3px solid #0773f8;
          padding: 5px;
          border-radius: 50px;
          max-width: 30%;
          margin: auto;
          margin-bottom: 70px;
       
      }
      .container1 h5{
        text-align: left!important ;
      }
      .container2{
          justify-content: center;
          text-align: center;
          border: 3px solid #0773f8;
          padding: 5px;
          border-radius: 50px;
          max-width: 30%;
          margin: auto;
          margin-bottom: 70px;
          
      }

      .profile-image{
          border: 2px solid black;
          border-radius: 50%;
          max-width: 150px;
          max-height: 150px;
      }

      .search{
        text-align: center;
        margin-bottom: 30px;
      }
      .search-btn{
          margin-bottom: 20px;
      }
      
      .btn-primary { 
    background-color: #0773f8;
    border-color: #0773f8;
      }
    
      .log_btn {
            text-align: center;
        }
      .button_logout {
            transition-duration: 0.4s;
            background-color: #0773f8;
            color: white;
            padding: 15px 25px;
            text-decoration: none;
            display: inline-block;
        }

        .button_logout:hover {
            background-color: #1973e2;
            color: white;
        }
     
    
     

  </style>
</head>
<body>
@php 
$name = Session::get('user');
@endphp
<div class="card">
    <img src="/images/docotor_profile/Doc8.jpg" alt="John" style="width:100%">

    <h1>Name: {{$name->Name}}</h1>
    <p>Email: {{$name->Nurse_email}}</p>
    <p>Phone: {{$name->Phone}}</p>
    <p>Address: {{$name->address}}</p>
    <p>More Info and Experience: {{$name->more_info}}</p>
    <div>
    <a href="#"><i class="fa fa-dribbble"></i></a>
    <a href="#"><i class="fa fa-twitter"></i></a>
    <a href="#"><i class="fa fa-linkedin"></i></a>
    <a href="#"><i class="fa fa-facebook"></i></a>
    <div><button >Contact</button></div></div>
</div>
</div>
<p></p>

<div class="search">
  <h3>Search Patient</h3>
  <form action="/nurse_patient_search" method="POST">
    @csrf
    <input type="text" name="nurse_search_patient">
    <div>
      <button class="btn btn-primary" type="submit">Serch Patient</button>
    </div>
  </form>
</div>

<div class="container1"> 
    <h1>patient information</h1>
        @php $patient = Session::get('patient'); @endphp
          @if($patient)
            @if($patient->patient_id)
            <div class="row" >
            <div class="col-lg-6" style= "font-weight:bold">patient id:</div>
            <div class="col-lg-6" style= "font-weight:bold"> {{ $patient->patient_id }}</div>
    </div>
            
            @endif
            @if($patient->Name)
            <div class="row" >
            <div class="col-lg-6" style= "font-weight:bold">&nbsp;&nbsp;patient Name:</div> 
            <div class="col-lg-6" style= "font-weight:bold">{{ $patient->Name }}</div>
            </div>
            @endif
            @if($patient->Phone)
            <div class="row" >
            <div class="col-lg-6" style= "font-weight:bold">&nbsp;&nbsp;patient Phone: </div>
            <div class="col-lg-6" style= "font-weight:bold">{{ $patient->Phone }}</div>
            </div>
            @endif
            @if($patient->Diagnosis)
            <div class="row" >
            <div class="col-lg-6" style= "font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;patient Diagnosis:</div>
            <div class="col-lg-6" style= "font-weight:bold"> {{ $patient->Diagnosis }}</div>
            </div>
            @endif
            @if($patient->Rays)
            <div class="row" >
            <div class="col-lg-6" style= "font-weight:bold">patient Rays: </div>
            <div class="col-lg-6" style= "font-weight:bold">{{ $patient->Rays }}</div>
            </div>
            @endif
            @if($patient->Cholstrole)
            <div class="row" >
            <div class="col-lg-6" style= "font-weight:bold"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;patient Cholstrole:</div>
            <div class="col-lg-6" style= "font-weight:bold"> {{ $patient->Cholstrole }}</div>
            </div>
            @endif
            @if($patient->blood_pressure)
            <div class="row" >
            <div class="col-lg-6" style= "font-weight:bold">patient blood_pressure: </div>  
            <div class="col-lg-6" style= "font-weight:bold">{{ $patient->blood_pressure }}</div>
            </div>  
            @endif
            @if($patient->blood_sugar_level)
            <div class="row" >
            <div class="col-lg-6" style= "font-weight:bold">&nbsp;patient blood_sugar_level: </div>
            <div class="col-lg-6" style= "font-weight:bold">{{ $patient->blood_sugar_level }}</div>
            </div>
            @endif
            @if($patient->weight)
            <div class="row" >
            <div class="col-lg-6" style= "font-weight:bold">patient weight: </div>
            <div class="col-lg-6" style= "font-weight:bold">{{ $patient->weight }}</div>
            </div>
            @endif
            @if($patient->treatment)
            <div class="row" >
            <div class="col-lg-6" style= "font-weight:bold">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;patient treatment:</div>
            <div class="col-lg-6" style= "font-weight:bold"> {{ $patient->treatment }}</div>
            </div>  
            @endif
          @endif
    </div>



    
<div class="container2">
   

   <form class="form" action="/nurse_patient_update" method="POST">
     @csrf
     <h2>Edit Paient Latest State :</h2>
     @if($patient)
       @if($patient->Cholstrole)
         <h5>Cholstrole:</h5>
         <p><input name="Cholstrole" value="{{$patient->Cholstrole}}" placeholder="Update Cholstrole"></input></p>
       @endif
       @if($patient->blood_pressure)
         <h5>blood pressure:</h5>
         <p><input name="blood_pressure" value="{{$patient->blood_pressure}}" placeholder="Update blood pressure"></input></p>
       @endif
       @if($patient->blood_sugar_level)
         <h5>blood sugar level:</h5>
         <p><input name="blood_sugar_level" value="{{$patient->blood_sugar_level}}" placeholder="blood sugar level"></input></p>
       @endif
       @if($patient->weight)
         <input name="weight" value="{{$patient->weight}}" style="display:none;"></input>
       @endif
     @endif
     <div>
     <button class="btn search-btn  btn-primary" type="submit" role="button">Update</button>
   </div>
   </form>
   
   
   </div>
   <div class = "log_btn">
     <a href="/nurse_logout" class="button_logout">Logout</a>
    </div>

 



</body>
</html>
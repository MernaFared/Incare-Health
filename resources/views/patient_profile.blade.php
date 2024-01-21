<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Profile</title>
    <style>
        body {
       background-image: url(/images/docotor_profile/26841.jpg) ;
       background-size: cover;
      }
      .btn{
        margin-top: 20px;
      }
      .container{
        box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            background-color: rgba(0, 0, 0, 0.02);
        
      }
      .profile-image{
          border: 2px solid rgba(0, 0, 0, 0.02)  ;
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
 
<div class="container">
    <img class="profile-image" src=" /images/docotor_profile/Doc8.jpg">
    <h1>Name: {{$name->Name}}</h1>
    <p>Email: {{$name->patient_email}}</p>
    <p>Phone: {{$name->Phone}}</p>
    <p>Date of Entry: {{$name->date_of_entry}}</p>
    <p>Diagnosis: {{$name->Diagnosis}}</p>
    <p>Rays: {{$name->Rays}}</p>
    <p>Address: {{$name->address}}</p>
    <p>Treatment: {{$name->treatment}}</p>
    <p>Date of Exit: {{$name->date_of_exit}}</p>
    <p>Cholstrole: {{$name->Cholstrole}}</p>
    <p>Blood Pressure: {{$name->blood_pressure}}</p>
    <p>Blood sugar level: {{$name->blood_sugar_level}}</p>
    <p>Weight: {{$name->weight}}</p>
</div>
 
<div class ="log_btn">
<a href="/patient_logout"  class="button_logout">Logout</a>
    </div>

</body>
</html>
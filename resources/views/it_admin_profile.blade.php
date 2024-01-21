<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Load icon library -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>It admin profile</title>

    <style type="text/css">
        * {
            box-sizing: border-box;
            margin: 0;
        }

        body {
            height: 100%;
            margin: auto;
        }

        .big-cont {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            gap: 1rem;
            grid-template-columns: repeat(2, 1fr)
        }



        .view-update-container {
            display: block;
            justify-content: center;
            text-align: center;
            border: 2px solid #1973e2;
            border-radius: 20px;
            max-width: 30%;
            margin: auto;
            margin-bottom: 70px;
        }

        .update-btn {
            margin-bottom: 15px
        }

        .bg {
            /* The image used */
            background-image: url("");
            /* Full height */
            height: 100%;

            /* Center and scale the image nicely */
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            max-width: 300px;
            margin: auto;
            text-align: center;
            margin-bottom: 50px;
            display: flex;
            flex-wrap: wrap;
        }

        .title {
            color: grey;
            font-size: 18px;
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

        a {
            text-decoration: none;
            font-size: 22px;
            color: #1973e2;
        }

        button:hover,
        a:hover {
            opacity: 0.7;
        }

        .cont {
            border: 2px #0773f8 solid;
            padding: 30px;
            border-radius: 20px;
            margin-bottom: 35px;
            background-color: ;
            justify-content: center;
            text-align: center;
        }

        /* Style the search field */

        .searchBox {
            justify-content: center;
            text-align: center;
            margin: auto;
            flex-wrap: wrap;
            margin-bottom: 35px;
            max-width: 40%;
        }

        .example {
            display: flex;
        }

        form.example input[type=text] {
            padding: 10px;
            font-size: 17px;
            border: 1px solid grey;
            width: 80%;
            background: #f1f1f1;
        }

        /* Style the submit button */
        form.example button {
            width: 20%;
            padding: 10px;
            background: #2196F3;
            color: white;
            font-size: 17px;
            border: 1px solid grey;
            border-left: none;
            /* Prevent double borders */
            cursor: pointer;
        }

        form.example button:hover {
            background: #0b7dda;
        }

        /* Clear floats */
        form.example::after {
            content: "";
            clear: both;
            display: table;
        }

        /* Instructions */

        .inst {
            justify-content: center;
            text-align: center;
            margin: auto;
            border: 2px solid #0773f8;
            border-radius: 30px;
            max-width: 30%;
            margin-bottom: 20px;
        }

        /* Logout Button */


        .logout-btn {
            text-align: center;
            margin-top: 35px;
            margin-bottom: 15px;
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

        .insert-header {
            text-align: center;
        }

        .del-btn {
            align-content: center;
        }




        /* Insert Form Design */

        .form-style-5 {
            max-width: 500px;
            padding: 10px 20px;
            background: #f4f7f8;
            margin: 10px auto;
            padding: 20px;
            background: #f4f7f8;
            border-radius: 8px;
            font-family: Georgia, "Times New Roman", Times, serif;
        }

        .form-style-5 fieldset {
            border: none;
        }

        .form-style-5 legend {
            font-size: 1.4em;
            margin-bottom: 10px;
        }

        .form-style-5 label {
            display: block;
            margin-bottom: 8px;
        }

        .form-style-5 input[type="text"],
        .form-style-5 input[type="date"],
        .form-style-5 input[type="datetime"],
        .form-style-5 input[type="email"],
        .form-style-5 input[type="number"],
        .form-style-5 input[type="search"],
        .form-style-5 input[type="time"],
        .form-style-5 input[type="url"],
        .form-style-5 textarea,
        .form-style-5 select {
            font-family: Georgia, "Times New Roman", Times, serif;
            background: rgba(255, 255, 255, .1);
            border: none;
            border-radius: 4px;
            font-size: 15px;
            margin: 0;
            outline: 0;
            padding: 10px;
            width: 100%;
            box-sizing: border-box;
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            background-color: #e8eeef;
            color: #8a97a0;
            -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
            box-shadow: 0 1px 0 rgba(0, 0, 0, 0.03) inset;
            margin-bottom: 30px;
        }

        .form-style-5 input[type="text"]:focus,
        .form-style-5 input[type="date"]:focus,
        .form-style-5 input[type="datetime"]:focus,
        .form-style-5 input[type="email"]:focus,
        .form-style-5 input[type="number"]:focus,
        .form-style-5 input[type="search"]:focus,
        .form-style-5 input[type="time"]:focus,
        .form-style-5 input[type="url"]:focus,
        .form-style-5 textarea:focus,
        .form-style-5 select:focus {
            background: #d2d9dd;
        }

        .form-style-5 select {
            -webkit-appearance: menulist-button;
            height: 35px;
        }

        .form-style-5 .number {
            background: #0b7dda;
            color: #fff;
            height: 30px;
            width: 30px;
            display: inline-block;
            font-size: 0.8em;
            margin-right: 4px;
            line-height: 30px;
            text-align: center;
            text-shadow: 0 1px 0 rgba(255, 255, 255, 0.2);
            border-radius: 15px 15px 15px 0px;
        }

        .form-style-5 input[type="submit"],
        .form-style-5 input[type="button"] {
            position: relative;
            display: block;
            padding: 19px 39px 18px 39px;
            color: #FFF;
            margin: 0 auto;
            background: #1973e2;
            font-size: 18px;
            text-align: center;
            font-style: normal;
            width: 100%;
            border: 1px solid #0b7dda;
            border-width: 1px 1px 3px;
            margin-bottom: 10px;
        }

        .form-style-5 input[type="submit"]:hover,
        .form-style-5 input[type="button"]:hover {
            background: #3287f0;
        }



        .footer {
            justify-content: center;
            text-align: center;
            background-color: #b4b4b4c5;
            margin: 0%;
            padding: 20px;
        }
    </style>


</head>


<body>
    <div class="bg">
        @php
            $name = Session::get('user');
        @endphp

        {{-- <h1>{{ $name->ITemail }}</h1>
    <h1>{{ $name->Name }}</h1>

    <input type="text">
    <button></button>
    <form action="">

    </form> --}}

        <!-- Add icon library -->
        <link rel="stylesheet"
            href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

        <div class="card">
            <img src="https://freepngimg.com/thumb/man/22654-6-man-thumb.png" alt="John" style="width:100%">
            <h1>Replace with Name From DB</h1>
            <p class="title">CEO & Founder, Example</p>
            <p>Harvard University</p>
            <a href="#"><i class="fa fa-dribbble"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-facebook"></i></a>
            <p><button>Contact</button></p>
        </div>

        <div class="inst">
            <h4>Instructions:</h4>
            <p>Users of the system are (Doctor-Patient-Nurse-It admins)</p>
            </p>You can search with their (Id or MRN (Medical record number))</p>
        </div>


        <div class="big-cont">

            <div class="cont">


                <div class="searchBox">
                    <h1>Search Doctor: </h1>
                    <br>
                    <!-- The form -->
                    <form class="example" action="action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="view-update-container">
                    <h2>Doctor information</h2>
                    @php $patient = Session::get('patient'); @endphp
                    @if ($patient)
                        @if ($patient->patient_id)
                            <h5>patient id: {{ $patient->patient_id }}</h5>
                        @endif
                        @if ($patient->Name)
                            <h5>patient Name: {{ $patient->Name }}</h5>
                        @endif
                        @if ($patient->Phone)
                            <h5>patient Phone: {{ $patient->Phone }}</h5>
                        @endif
                        @if ($patient->Diagnosis)
                            <h5>patient Diagnosis: {{ $patient->Diagnosis }}</h5>
                        @endif
                        @if ($patient->Rays)
                            <h5>patient Rays: {{ $patient->Rays }}</h5>
                        @endif
                        @if ($patient->Cholstrole)
                            <h5>patient Cholstrole: {{ $patient->Cholstrole }}</h5>
                        @endif
                        @if ($patient->blood_pressure)
                            <h5>patient blood_pressure: {{ $patient->blood_pressure }}</h5>
                        @endif
                        @if ($patient->blood_sugar_level)
                            <h5>patient blood_sugar_level: {{ $patient->blood_sugar_level }}</h5>
                        @endif
                        @if ($patient->weight)
                            <h5>patient weight: {{ $patient->weight }}</h5>
                        @endif
                        @if ($patient->treatment)
                            <h5>patient treatment: {{ $patient->treatment }}</h5>
                        @endif
                    @else
                        <h3>User not found</h3>
                    @endif
                </div>

                <div class="view-update-container">


                    <form class="form" action="/patient-update" method="POST">
                        @csrf
                        <h2>Edit Doctor Records :</h2>
                        @if ($patient)
                            @if ($patient->Rays)
                                <h5>Rays:</h5>
                                <p><input name="rays" value="{{ $patient->Rays }}"
                                        placeholder="Update Rays"></input>
                                </p>
                            @endif
                            @if ($patient->Diagnosis)
                                <h5>Diagnosis:</h5>
                                <p><input name="diagnosis" value="{{ $patient->Diagnosis }}"
                                        placeholder="Update Diagnosis"></input></p>
                            @endif
                            @if ($patient->date_of_entry)
                                <h5>Date Of Entry:</h5>
                                <p><input name="date_of_entry" value="{{ $patient->date_of_entry }}"
                                        placeholder="Update Date Of Entry"></input></p>
                            @endif
                            @if ($patient->patient_id)
                                <input name="patient_id" value="{{ $patient->patient_id }}"
                                    style="display:none;"></input>
                            @endif
                        @endif
                        <div>
                            <button class="btn search-btn  btn-primary update-btn" type="submit"
                                role="button">Update</button>
                        </div>
                    </form>


                </div>
                <button type="button" class="btn btn-danger del-btn">Delete</button>


            </div>

            <div class="cont">

                <div class="searchBox">
                    <h1>Search Nurse: </h1>
                    <br>
                    <!-- The form -->
                    <form class="example" action="action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="view-update-container">
                    <h2>Nurse information</h2>
                    @php $patient = Session::get('patient'); @endphp
                    @if ($patient)
                        @if ($patient->patient_id)
                            <h5>patient id: {{ $patient->patient_id }}</h5>
                        @endif
                        @if ($patient->Name)
                            <h5>patient Name: {{ $patient->Name }}</h5>
                        @endif
                        @if ($patient->Phone)
                            <h5>patient Phone: {{ $patient->Phone }}</h5>
                        @endif
                        @if ($patient->Diagnosis)
                            <h5>patient Diagnosis: {{ $patient->Diagnosis }}</h5>
                        @endif
                        @if ($patient->Rays)
                            <h5>patient Rays: {{ $patient->Rays }}</h5>
                        @endif
                        @if ($patient->Cholstrole)
                            <h5>patient Cholstrole: {{ $patient->Cholstrole }}</h5>
                        @endif
                        @if ($patient->blood_pressure)
                            <h5>patient blood_pressure: {{ $patient->blood_pressure }}</h5>
                        @endif
                        @if ($patient->blood_sugar_level)
                            <h5>patient blood_sugar_level: {{ $patient->blood_sugar_level }}</h5>
                        @endif
                        @if ($patient->weight)
                            <h5>patient weight: {{ $patient->weight }}</h5>
                        @endif
                        @if ($patient->treatment)
                            <h5>patient treatment: {{ $patient->treatment }}</h5>
                        @endif
                    @else
                        <h3>User not found</h3>
                    @endif
                </div>

                <div class="view-update-container">


                    <form class="form" action="/patient-update" method="POST">
                        @csrf
                        <h2>Edit Nurse Records :</h2>
                        @if ($patient)
                            @if ($patient->Rays)
                                <h5>Rays:</h5>
                                <p><input name="rays" value="{{ $patient->Rays }}"
                                        placeholder="Update Rays"></input>
                                </p>
                            @endif
                            @if ($patient->Diagnosis)
                                <h5>Diagnosis:</h5>
                                <p><input name="diagnosis" value="{{ $patient->Diagnosis }}"
                                        placeholder="Update Diagnosis"></input></p>
                            @endif
                            @if ($patient->date_of_entry)
                                <h5>Date Of Entry:</h5>
                                <p><input name="date_of_entry" value="{{ $patient->date_of_entry }}"
                                        placeholder="Update Date Of Entry"></input></p>
                            @endif
                            @if ($patient->patient_id)
                                <input name="patient_id" value="{{ $patient->patient_id }}"
                                    style="display:none;"></input>
                            @endif
                        @endif
                        <div>
                            <button class="btn search-btn  btn-primary update-btn" type="submit"
                                role="button">Update</button>
                        </div>
                    </form>


                </div>
                <button type="button" class="btn btn-danger del-btn">Delete</button>

            </div>

            <div class="cont">

                <div class="searchBox">
                    <h1>Search Patient: </h1>
                    <br>
                    <!-- The form -->
                    <form class="example" action="action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="view-update-container">
                    <h2>patient information</h2>
                    @php $patient = Session::get('patient'); @endphp
                    @if ($patient)
                        @if ($patient->patient_id)
                            <h5>patient id: {{ $patient->patient_id }}</h5>
                        @endif
                        @if ($patient->Name)
                            <h5>patient Name: {{ $patient->Name }}</h5>
                        @endif
                        @if ($patient->Phone)
                            <h5>patient Phone: {{ $patient->Phone }}</h5>
                        @endif
                        @if ($patient->Diagnosis)
                            <h5>patient Diagnosis: {{ $patient->Diagnosis }}</h5>
                        @endif
                        @if ($patient->Rays)
                            <h5>patient Rays: {{ $patient->Rays }}</h5>
                        @endif
                        @if ($patient->Cholstrole)
                            <h5>patient Cholstrole: {{ $patient->Cholstrole }}</h5>
                        @endif
                        @if ($patient->blood_pressure)
                            <h5>patient blood_pressure: {{ $patient->blood_pressure }}</h5>
                        @endif
                        @if ($patient->blood_sugar_level)
                            <h5>patient blood_sugar_level: {{ $patient->blood_sugar_level }}</h5>
                        @endif
                        @if ($patient->weight)
                            <h5>patient weight: {{ $patient->weight }}</h5>
                        @endif
                        @if ($patient->treatment)
                            <h5>patient treatment: {{ $patient->treatment }}</h5>
                        @endif
                    @else
                        <h3>User not found</h3>
                    @endif
                </div>



                <div class="view-update-container">


                    <form class="form" action="/patient-update" method="POST">
                        @csrf
                        <h2>Edit Paient Records :</h2>
                        @if ($patient)
                            @if ($patient->Rays)
                                <h5>Rays:</h5>
                                <p><input name="rays" value="{{ $patient->Rays }}"
                                        placeholder="Update Rays"></input>
                                </p>
                            @endif
                            @if ($patient->Diagnosis)
                                <h5>Diagnosis:</h5>
                                <p><input name="diagnosis" value="{{ $patient->Diagnosis }}"
                                        placeholder="Update Diagnosis"></input></p>
                            @endif
                            @if ($patient->date_of_entry)
                                <h5>Date Of Entry:</h5>
                                <p><input name="date_of_entry" value="{{ $patient->date_of_entry }}"
                                        placeholder="Update Date Of Entry"></input></p>
                            @endif
                            @if ($patient->patient_id)
                                <input name="patient_id" value="{{ $patient->patient_id }}"
                                    style="display:none;"></input>
                            @endif
                        @endif
                        <div>
                            <button class="btn search-btn  btn-primary update-btn" type="submit"
                                role="button">Update</button>
                        </div>
                    </form>


                </div>
                <button type="button" class="btn btn-danger del-btn">Delete</button>


            </div>

            <div class="cont">
                <div class="searchBox">
                    <h1>Search It Admin: </h1>
                    <br>

                    <!-- The form -->
                    <form class="example" action="action_page.php">
                        <input type="text" placeholder="Search.." name="search">
                        <button type="submit"><i class="fa fa-search"></i></button>
                    </form>
                </div>
                <div class="view-update-container">
                    <h2>It Admin information</h2>
                    @php $patient = Session::get('patient'); @endphp
                    @if ($patient)
                        @if ($patient->patient_id)
                            <h5>patient id: {{ $patient->patient_id }}</h5>
                        @endif
                        @if ($patient->Name)
                            <h5>patient Name: {{ $patient->Name }}</h5>
                        @endif
                        @if ($patient->Phone)
                            <h5>patient Phone: {{ $patient->Phone }}</h5>
                        @endif
                        @if ($patient->Diagnosis)
                            <h5>patient Diagnosis: {{ $patient->Diagnosis }}</h5>
                        @endif
                        @if ($patient->Rays)
                            <h5>patient Rays: {{ $patient->Rays }}</h5>
                        @endif
                        @if ($patient->Cholstrole)
                            <h5>patient Cholstrole: {{ $patient->Cholstrole }}</h5>
                        @endif
                        @if ($patient->blood_pressure)
                            <h5>patient blood_pressure: {{ $patient->blood_pressure }}</h5>
                        @endif
                        @if ($patient->blood_sugar_level)
                            <h5>patient blood_sugar_level: {{ $patient->blood_sugar_level }}</h5>
                        @endif
                        @if ($patient->weight)
                            <h5>patient weight: {{ $patient->weight }}</h5>
                        @endif
                        @if ($patient->treatment)
                            <h5>patient treatment: {{ $patient->treatment }}</h5>
                        @endif
                    @else
                        <h3>User not found</h3>
                    @endif
                </div>

                <div class="view-update-container">
                    <form class="form" action="/patient-update" method="POST">
                        @csrf
                        <h2>Edit It Admin Information :</h2>
                        @if ($patient)
                            @if ($patient->Rays)
                                <h5>Rays:</h5>
                                <p><input name="rays" value="{{ $patient->Rays }}"
                                        placeholder="Update Rays"></input>
                                </p>
                            @endif
                            @if ($patient->Diagnosis)
                                <h5>Diagnosis:</h5>
                                <p><input name="diagnosis" value="{{ $patient->Diagnosis }}"
                                        placeholder="Update Diagnosis"></input></p>
                            @endif
                            @if ($patient->date_of_entry)
                                <h5>Date Of Entry:</h5>
                                <p><input name="date_of_entry" value="{{ $patient->date_of_entry }}"
                                        placeholder="Update Date Of Entry"></input></p>
                            @endif
                            @if ($patient->patient_id)
                                <input name="patient_id" value="{{ $patient->patient_id }}"
                                    style="display:none;"></input>
                            @endif
                        @endif
                        <div>
                            <button class="btn search-btn  btn-primary update-btn" type="submit"
                                role="button">Update</button>
                        </div>
                    </form>

                </div>
                <button type="button" class="btn btn-danger del-btn">Delete</button>

            </div>


        </div>


        {{-- insert section --}}

        <h1 class="insert-header">Insert New Users To The System :</h1>

        <div class="big-cont">

            <div class="cont">

                <div class="form-style-5">
                    <form>
                        <fieldset>
                            <legend><span class="number">1</span> Insert Doctor</legend>
                            <input type="text" name="field1" placeholder="Doctor ID *">
                            <input type="email" name="field2" placeholder="Doctor Full Name *">
                            <input type="email" name="field2" placeholder="Phone *">
                            <input type="email" name="field2" placeholder="Doctor Email *">
                            <input type="email" name="field2" placeholder="Doctor Password *">
                            <label for="job">Specializtion:</label>
                            <select id="job" name="field4">
                                <option value="fishkeeping">Fishkeeping</option>
                                <option value="reading">Reading</option>
                                <option value="boxing">Boxing</option>
                                <option value="debate">Debate</option>
                                <option value="gaming">Gaming</option>
                                <option value="snooker">Snooker</option>
                                <option value="other_indoor">Other</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <legend><span class="number">2</span> Additional Info</legend>
                            <textarea name="field3" placeholder="Write More Info about the Doctor..."></textarea>
                        </fieldset>
                        <input type="email" name="field2" placeholder="Doctor Address *">
                        <input type="email" name="field2" placeholder="Doctor Appointments *">
                        <input type="email" name="field2" placeholder="Doctor Certificates *">
                        <input class="insert-btn" type="submit" value="Insert!" />
                    </form>
                </div>


            </div>

            <div class="cont">
                <div class="form-style-5">
                    <form>
                        <fieldset>
                            <legend><span class="number">1</span> Insert Nurse</legend>
                            <input type="text" name="field1" placeholder="Nurse ID *">
                            <input type="text" name="field1" placeholder="Nurse Name *">
                            <input type="text" name="field1" placeholder="Nurse Phone *">
                            <input type="text" name="field1" placeholder="Nurse Email *">
                            <input type="text" name="field1" placeholder="Nurse Password *">

                            <label for="job">Specializtion:</label>
                            <select id="job" name="field4">
                                <option value="fishkeeping">Fishkeeping</option>
                                <option value="reading">Reading</option>
                                <option value="boxing">Boxing</option>
                                <option value="debate">Debate</option>
                                <option value="gaming">Gaming</option>
                                <option value="snooker">Snooker</option>
                                <option value="other_indoor">Other</option>
                            </select>
                        </fieldset>
                        <fieldset>
                            <legend><span class="number">2</span> Additional Info</legend>
                            <textarea name="field3" placeholder="Write More Info about the Nurse..."></textarea>
                        </fieldset>
                        <input type="text" name="field1" placeholder="Nurse Address *">

                        <input class="insert-btn" type="submit" value="Insert!" />
                    </form>
                </div>


            </div>

            <div class="cont">

                <div class="form-style-5">
                    <form>
                        <fieldset>
                            <legend><span class="number">1</span> Insert Patient</legend>
                            <input type="text" name="field1" placeholder="Patient ID *">
                            <input type="text" name="field1" placeholder="Patient Name *">
                            <input type="text" name="field1" placeholder="Patient Phone *">
                            <input type="text" name="field1" placeholder="Patient Email *">
                            <input type="text" name="field1" placeholder="Patient Password *">
                            <input type="text" name="field1" placeholder="Patient Address *">

                        </fieldset>
                        <fieldset>
                            <legend><span class="number">2</span> Additional Info</legend>
                            <textarea name="field3" placeholder="Write More Info about the Patient..."></textarea>
                        </fieldset>
                        <input class="insert-btn" type="submit" value="Insert!" />
                    </form>
                </div>

            </div>

            <div class="cont">

                <div class="form-style-5">
                    <form>
                        <fieldset>
                            <legend><span class="number">1</span> IT Admin Info</legend>
                            <input type="text" name="field1" placeholder="IT ID *">
                            <input type="text" name="field1" placeholder="IT Name *">
                            <input type="text" name="field1" placeholder="IT Email *">
                            <input type="text" name="field1" placeholder="IT Password *">
                            <input type="text" name="field1" placeholder="IT Phone *">
                            <input type="text" name="field1" placeholder="IT Address *">
                        </fieldset>
                        <fieldset>
                            <legend><span class="number">2</span> Additional Info</legend>
                            <textarea name="field3" placeholder="Write More Info about the New IT Admin..."></textarea>
                        </fieldset>
                        <input class="insert-btn" type="submit" value="Insert!" />
                    </form>
                </div>


            </div>


        </div>





        <footer class="footer">
            <div class="logout-btn">
                <a href="/admin_logout" class="button_logout">Logout</a>
            </div>
        </footer>





</body>

</html>
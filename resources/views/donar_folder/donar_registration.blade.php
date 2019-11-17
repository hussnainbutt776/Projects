<html>
<head>
    <!-- jQuery library -->

    <title>Donar Registration form</title>
    <style>
        .size{
            width:25%;
            background-color: white;
            height: 3.5px;
            border: none;
        }
        .red-hr{
            width:25%;
            background-color: #E74C3C;
            height: 3.5px;
            border: none;
        }
        .form-container{
            background-color: white;
            border: .5px solid #eee;
            border-radius: 5px;
            padding: 20px 10px 20px 30px;
            -webkit-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
            -moz-box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
            box-shadow: 0px 2px 5px -2px rgba(89,89,89,0.95);
        }
    </style>
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">



</head>

</body>




<nav class="navbar navbar-expand-md navbar-light pt-3 bg-light ">
    <a class="navbar-brand text-danger font-italic" href="#"><strong>Blood Donation Bank</strong></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarTogglerDemo02">

        <ul class="navbar-nav mr-auto mt-2 mt-lg-0">

        </ul>

        <ul class="navbar-nav form-inline my-2 my-lg-0">
            <li class="nav-item">
                <a class="nav-link text-danger" href="/"><strong>Home</strong></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-danger" href="#"><strong>SignUp</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="/donar_signin"><strong>Signin</strong></a>
            </li>

        </ul>
    </div>
</nav>

<!-- div container for header signin -->
<div class="container-fluid  pt-5 mt-1"style="background-color:#E74C3C">

    <div class="row">

        <div class="col-md-12 ">
            <h1 class="text-center text-white">Donar Registration</h1>
            <hr class="size">

        </div>
    </div>

</div>   <!-- end of container for header signin -->


<div class="container-fluid pt-5   " style="background-color:#ECF0F1">



    <div class="row ">

        <div class="col-md-6 offset-md-3 mb-5 form-container bg-light">
            <h3 class="text-center text-danger">SignUp</h3>
            <hr class="red-hr">
            <form action="#"   onsubmit="return validation()" >

                <div class="form-group">
                    <label for="full_name">Full Name</label>
                    <input type="text" name="fullname" class="form-control" placeholder="Full name"  autocomplete="off">
                    <span id="full_name" class="text-danger font-weight-bold"> </span>
                </div>


                <div class="form-group ">
                    <label for="blood group">Blood Group</label>
                    <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 450px; height: 40px;" class="form-control demo-default text-center  " >
                        <option value="">-- Select --</option>
                        <option value="A+">A+</option>
                        <option value="A-">A-</option>
                        <option value="B+">B+</option>
                        <option value="B-">B-</option>
                        <option value="AB+">AB+</option>
                        <option value="AB-">AB-</option>
                        <option value="O+">O+</option>
                        <option value="O-">O-</option>

                    </select>


                </div>

                <div class="form-group ">
                    <label for="gender">Gender</label><br>
                    <label class="radio-inline">
                        <input type="radio" name="male" checked required>  Male
                    </label>
                    <label class="radio-inline">
                        <input type="radio" name="male">  Fe-male
                    </label>



                </div>

                <div class="form-group ">
                    <label for="dob">Date Of Birth</label><br>
                    <input type="date" class="form-control" id="exampleInputDOB1" placeholder="Date of Birth" >




                </div>
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" name="email" class="form-control" placeholder="Email" >
                </div>
                <div class="form-group">
                    <label for="contact_no">Contact No</label>
                    <input type="number" name="contact_no" class="form-control" placeholder="030********" >
                </div>
                <div class="form-group ">
                    <label for="city">City</label>
                    <select style="width: 450px; height: 40px;"  class="form-control demo-default  " >

                        <option value="">-- Select --</option><optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup><option value="Bagh" >Bagh</option><option value="Bhimber" >Bhimber</option><option value="Kotli" >Kotli</option><option value="Mirpur" >Mirpur</option><option value="Muzaffarabad" >Muzaffarabad</option><option value="Neelum" >Neelum</option><option value="Poonch" >Poonch</option><option value="Sudhnati" >Sudhnati</option><optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup><option value="Awaran" >Awaran</option><option value="Barkhan" >Barkhan</option><option value="Bolan" >Bolan</option><option value="Chagai" >Chagai</option><option value="Dera Bugti" >Dera Bugti</option><option value="Gwadar" >Gwadar</option><option value="Jafarabad" >Jafarabad</option><option value="Jhal Magsi" >Jhal Magsi</option><option value="Kalat" >Kalat</option><option value="Kech" >Kech</option><option value="Kharan" >Kharan</option><option value="Khuzdar" >Khuzdar</option><option value="Kohlu" >Kohlu</option><option value="Lasbela" >Lasbela</option><option value="Loralai" >Loralai</option><option value="Mastung" >Mastung</option><option value="Musakhel" >Musakhel</option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option><option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Password" >
                </div>
                <div class="form-group">
                    <label for="con_pass">Confirm Password</label>
                    <input type="password" name="con_pass" class="form-control" placeholder="Confirm Password" >
                </div>

                <div class="form-group">
                    <input type="submit" name="submit" value="submit" class="btn btn-danger btn-lg mt-3" 	autocomplete="off">
                </div>

            </form>

        </div>

        @include('donar_folder.donar_include.footer')

    </div>      <!-- for row div -->



</div>  <!-- for container div -->


<script type="text/javascript">
    function validation() {
        var username = document.getElementById('fullname').value;
        if (username == "") {
            document.getElementById('full_name').innerHTML = " ** Please fill the username field";
            return false;
        }
        if((username.length <= 2) || (username.length > 20)) {
            document.getElementById('full_name').innerHTML =" ** Username lenght must be between 2 and 20";
            return false;
        }
        if(!isNaN(username)){
            document.getElementById('full_name').innerHTML =" ** only characters are allowed";
            return false;
        }
    }
</script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>
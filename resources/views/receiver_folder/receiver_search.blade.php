<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Search</title>
    <style>
        .size{

            width:25%;
            background-color: white;
            height: 3.5px;
            border: none;
        }
        .form-rounded {
            border-radius: 2rem;
        }form{

             margin-left: 30%;
         }
        #search_btn{
             background-color:white;


        }

        #search_btn:hover {
            background-color: #e7e7e7;
            color: black;
        }
    </style>
</head>
<body>

@include('receiver_folder.receiver_include.header')
<!-- div container for header signin -->
<div  class="container-fluid  pt-5 mt-1"style="background-color:#E74C3C">

    <div class="row">

        <div  class="col-md-12  ">
            <h1 class="text-center text-white">Search Donars</h1>
            <hr class="size">

        </div>

        <div class="col-md-12  ">
            <br>   <br>
            <form action="#" method="POST" class="form-group form-inline " >


                <div class="form-group text-center justify-content-center">

                    <select style="width: 220px; height: 45px;"  class="form-control demo-default  " required>
                        <option value="">-- Select --</option><optgroup title="Azad Jammu and Kashmir (Azad Kashmir)" label="&raquo; Azad Jammu and Kashmir (Azad Kashmir)"></optgroup><option value="Bagh" >Bagh</option><option value="Bhimber" >Bhimber</option><option value="Kotli" >Kotli</option><option value="Mirpur" >Mirpur</option><option value="Muzaffarabad" >Muzaffarabad</option><option value="Neelum" >Neelum</option><option value="Poonch" >Poonch</option><option value="Sudhnati" >Sudhnati</option><optgroup title="Balochistan" label="&raquo; Balochistan"></optgroup><option value="Awaran" >Awaran</option><option value="Barkhan" >Barkhan</option><option value="Bolan" >Bolan</option><option value="Chagai" >Chagai</option><option value="Dera Bugti" >Dera Bugti</option><option value="Gwadar" >Gwadar</option><option value="Jafarabad" >Jafarabad</option><option value="Jhal Magsi" >Jhal Magsi</option><option value="Kalat" >Kalat</option><option value="Kech" >Kech</option><option value="Kharan" >Kharan</option><option value="Khuzdar" >Khuzdar</option><option value="Kohlu" >Kohlu</option><option value="Lasbela" >Lasbela</option><option value="Loralai" >Loralai</option><option value="Mastung" >Mastung</option><option value="Musakhel" >Musakhel</option><option value="Naseerabad" >Naseerabad</option><option value="Nushki" >Nushki</option><option value="Panjgur" >Panjgur</option><option value="Pishin" >Pishin</option><option value="Qilla Abdullah" >Qilla Abdullah</option><option value="Qilla Saifullah" >Qilla Saifullah</option><option value="Quetta" >Quetta</option><option value="Sibi" >Sibi</option><option value="Zhob" >Zhob</option><option value="Ziarat" >Ziarat</option><optgroup title="Federally Administered Tribal Areas (FATA" label="&raquo; Federally Administered Tribal Areas (FATA"></optgroup><option value="Bajaur Agency" >Bajaur Agency</option><option value="Khyber Agency" >Khyber Agency</option><option value="Kurram Agency" >Kurram Agency</option><option value="Mohmand Agency" >Mohmand Agency</option><option value="North Waziristan Agency" >North Waziristan Agency</option><option value="Orakzai Agency" >Orakzai Agency</option><option value="South Waziristan Agency" >South Waziristan Agency</option><optgroup title="Islamabad Capital" label="&raquo; Islamabad Capital"></optgroup><option value="Islamabad" >Islamabad</option><optgroup title="North-West Frontier Province (NWFP)" label="&raquo; North-West Frontier Province (NWFP)"></optgroup><option value="Abbottabad" >Abbottabad</option><option value="Bannu" >Bannu</option><option value="Batagram" >Batagram</option><option value="Buner" >Buner</option><option value="Charsadda" >Charsadda</option><option value="Chitral" >Chitral</option><option value="Dera Ismail Khan" >Dera Ismail Khan</option><option value="Dir Lower" >Dir Lower</option><option value="Dir Upper" >Dir Upper</option><option value="Hangu" >Hangu</option><option value="Haripur" >Haripur</option><option value="Karak" >Karak</option><option value="Kohat" >Kohat</option><option value="Kohistan" >Kohistan</option><option value="Lakki Marwat" >Lakki Marwat</option><option value="Malakand" >Malakand</option><option value="Mansehra" >Mansehra</option><option value="Mardan" >Mardan</option><option value="Nowshera" >Nowshera</option><option value="Peshawar" >Peshawar</option><option value="Shangla" >Shangla</option><option value="Swabi" >Swabi</option><option value="Swat" >Swat</option><option value="Tank" >Tank</option><optgroup title="Punjab" label="&raquo; Punjab"></optgroup><option value="Alipur" >Alipur</option><option value="Attock" >Attock</option><option value="Bahawalnagar" >Bahawalnagar</option><option value="Bahawalpur" >Bahawalpur</option><option value="Bhakkar" >Bhakkar</option><option value="Chakwal" >Chakwal</option><option value="Chiniot" >Chiniot</option><option value="Dera Ghazi Khan" >Dera Ghazi Khan</option><option value="Faisalabad" >Faisalabad</option><option value="Gujranwala" >Gujranwala</option><option value="Gujrat" >Gujrat</option><option value="Hafizabad" >Hafizabad</option><option value="Jhang" >Jhang</option><option value="Jhelum" >Jhelum</option><option value="Kasur" >Kasur</option><option value="Khanewal" >Khanewal</option><option value="Khushab" >Khushab</option><option value="Lahore" >Lahore</option><option value="Layyah" >Layyah</option><option value="Lodhran" >Lodhran</option><option value="Mandi Bahauddin" >Mandi Bahauddin</option><option value="Mianwali" >Mianwali</option><option value="Multan" >Multan</option><option value="Muzaffargarh" >Muzaffargarh</option><option value="Nankana Sahib" >Nankana Sahib</option><option value="Narowal" >Narowal</option><option value="Okara" >Okara</option><option value="Pakpattan" >Pakpattan</option><option value="Rahim Yar Khan" >Rahim Yar Khan</option><option value="Rajanpur" >Rajanpur</option><option value="Rawalpindi" >Rawalpindi</option><option value="Sahiwal" >Sahiwal</option><option value="Sargodha" >Sargodha</option><option value="Sheikhupura" >Sheikhupura</option><option value="Shekhupura" >Shekhupura</option><option value="Sialkot" >Sialkot</option><option value="Toba Tek Singh" >Toba Tek Singh</option><option value="Vehari" >Vehari</option><optgroup title="Sindh" label="&raquo; Sindh"></optgroup><option value="Badin" >Badin</option><option value="Dadu" >Dadu</option><option value="Ghotki" >Ghotki</option><option value="Hyderabad" >Hyderabad</option><option value="Jacobabad" >Jacobabad</option><option value="Jamshoro" >Jamshoro</option><option value="Karachi" >Karachi</option><option value="Kashmore" >Kashmore</option><option value="Khairpur" >Khairpur</option><option value="Larkana" >Larkana</option><option value="Matiari" >Matiari</option><option value="Mirpur Khas" >Mirpur Khas</option><option value="Naushahro Feroze" >Naushahro Feroze</option><option value="Nawabshah" >Nawabshah</option><option value="Qambar Shahdadkot" >Qambar Shahdadkot</option><option value="Sanghar" >Sanghar</option><option value="Shikarpur" >Shikarpur</option><option value="Sukkur" >Sukkur</option><option value="Tando Allahyar" >Tando Allahyar</option><option value="Tando Muhammad Khan" >Tando Muhammad Khan</option><option value="Tharparkar" >Tharparkar</option><option value="Thatta" >Thatta</option><option value="Umerkot" >Umerkot</option></select>
                </div>
                <div class="form-group center-aligned">
                    &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp
                    <select name="blood_group" id="blood_group" style="padding: 0 20px; width: 220px; height: 45px;" class="form-control demo-default text-center margin10px">

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
                    &nbsp  &nbsp  &nbsp &nbsp  &nbsp  &nbsp
                    <button onclick="show_contain()" type="submit" id="search_btn" id="btn" class="btn btn-lg  text-danger"  >Search</button>
                </div>



            </form>

        </div>


    </div>

</div>   <!-- end of container for header signin -->

<div  class="container-fluid  pt-5 pb-5" style="background-color: #ECF0F1;"><!-- start of container for background-fluid -->
<br>
    <div class="container"  style="background-color: #ECF0F1;"> <!-- start of container for card conatiner -->
<div id="contain"  class="row">  <!-- row start -->
    <!-- div of 1 card -->
<div class="col-md-4">
    <div   class="card" style="width: 18rem;">
        <div class="card-header text-center text-danger">
            <strong> Zain Shakeel</strong>
        </div>
        <div class="card-body text-center" >
            <h5 class="card-title">A+</h5>
            <h6 class="card-subtitle mb-2 text-muted">hussnainbutt776@gmail.com</h6>
            <h6 class="card-subtitle mb-2 text-muted">0333-5166845</h6>

            <a href="#" class="card-link">Card link</a>
            <a href="#" class="card-link">Another link</a>
        </div>
        <div class="card-footer text-muted text-center">
            2 days ago
        </div>
    </div>
</div>
    <!-- div of 2 card -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header text-center text-danger ">
                    <strong>Hammad Kaleem</strong>
                </div>
                <div class="card-body text-center" >
                    <h5 class="card-title">A-</h5>
                    <h6 class="card-subtitle mb-2 text-muted">hussnainbutt776@gmail.com</h6>
                    <h6 class="card-subtitle mb-2 text-muted">0333-5166845</h6>

                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
                <div class="card-footer text-muted text-center ">
                    2 days ago
                </div>
            </div>
        </div>
    <!-- div of 3 card -->
        <div class="col-md-4">
            <div class="card" style="width: 18rem;">
                <div class="card-header text-center text-danger">
                   <strong> Hussnain Shakeel</strong>
                </div>
                <div class="card-body text-center" >
                    <h5 class="card-title">B+</h5>
                    <h6 class="card-subtitle mb-2 text-muted">hussnainbutt776@gmail.com</h6>
                    <h6 class="card-subtitle mb-2 text-muted">0333-5166845</h6>

                    <a href="#" class="card-link">Card link</a>
                    <a href="#" class="card-link">Another link</a>
                </div>
                <div class="card-footer text-muted text-center">
                    2 days ago
                </div>
            </div>


        </div>   <!-- end of div of card 3 -->


    </div>    <!-- end of row container-->
    </div>   <!-- end of container for card conatiner -->

</div>   <!-- end of container for background-fluid -->

<script>

    window.onload=function(){
        document.getElementById("contain").style.display='none';

    }

    function show_contain(){
        document.getElementById("contain").style.display='block';
    }


</script>

@include('receiver_folder.receiver_include.footer')

</body>
</html>
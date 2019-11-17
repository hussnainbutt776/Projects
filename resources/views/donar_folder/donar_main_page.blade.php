
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Donar main page</title>
    <style>



        .customNav{
            position: absolute;
            top: 4px;
            left: 5px;
        }
        .customNav ul {
            list-style-type: none;
            margin: 0;
            padding: 0;
            width: 410px;
        }

        .customNav li a {
            /*display: block;*/
            padding: 8px 80px;
            text-decoration: none;

        }

        /* ALL BUTTONS */

        /*.button{*/
        /*    display: inline-block;*/
        /*    padding: 20px 50px;*/
        /*    margin: 20px 0;*/
        /*    position: relative;*/
        /*    color: #ecf0f1;*/
        /*}*/



        /*!* BUTTON 6 *!*/

        /*#button-6{*/
        /*    border: 2px solid red;*/
        /*    color: gray;*/
        /*    overflow: hidden;*/
        /*    -webkit-transition: all 0.3s ease-in-out;*/
        /*    -o-transition: all 0.3s ease-in-out;*/
        /*    transition: all 0.3s ease-in-out;*/
        /*}*/

        /*#button-6:before, #button-6:after{*/
        /*    content: "";*/
        /*    z-index: -1;*/
        /*    position: absolute;*/
        /*    width: 100%;*/
        /*    height: 50%;*/
        /*    top: -50%;*/
        /*    left: 0;*/
        /*    background-color: orangered;*/
        /*    -webkit-transition: all 0.3s ease-in-out;*/
        /*    -o-transition: all 0.3s ease-in-out;*/
        /*    transition: all 0.3s ease-in-out;*/
        /*}*/

        /*#button-6:after{*/
        /*    top: 100%;*/
        /*}*/

        /*#button-6:hover{*/
        /*    color: white;*/
        /*}*/

        /*#button-6:hover:before{*/
        /*    top: 0;*/
        /*}*/

        /*#button-6:hover:after{*/
        /*    top: 50%;*/
        /*}*/

        /*.heroimage*/
        /*{*/
        /*    margin-top: -20px;*/
        /*    height: 76vh;*/

        /*    background-image: url("img/header.png");*/
        /*    background-size: cover;*/

        /*}*/



    </style>


    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>

<body>
{{--@include('donar_folder.donar_include.header');--}}
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
                <a class="nav-link text-danger" href="/donar_main_page"><strong>Home</strong></a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-danger" href="/receiver_all_records"><strong>Search</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="/donar_signin"><strong>About Us</strong></a>
            </li>
            <!--  dropdown start -->
            <li class="nav-item dropdown  ">
                <a class="nav-link text-danger dropdown-toggle " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <strong>Donor Name</strong><!-- Donor Name -->
                </a>

                <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">

                    <a class="dropdown-item text-danger" href="user/index.php"><i class="fa fa-user" aria-hidden="true"></i>Profile</a>

                    <a class="dropdown-item text-danger" href="/update_donar_recordp"><i class="fa fa-edit" aria-hidden="true"></i>Update Profile</a>


                    <a class="dropdown-item text-danger" href="/index.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i>Logout</a>

                </div>
            </li>

            <!--  dropdown end -->

        </ul>
    </div>
</nav>
{{--<div class="container-fluid heroimage" style="border-style: solid;">--}}
{{--    <div class="row">--}}
{{--        <div class="col-md-4"></div>--}}
{{--        <div class="col-md-4 text-center ">--}}
{{--            <a href="#" class="button " id="button-6" style="z-index:3">If Save The Life Of Any Buddy</a>--}}
{{--        </div>--}}
{{--        <div class="col-md-4"></div>0--}}
{{--    </div>--}}

{{--</div>--}}

<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">

    <div class="customNav">
        <ul class="nav">

            <li class="active"><a href="index.php"><i class="fa fa-user" aria-hidden="true"></i><svg class="glyph stroked dashboard-dial"></svg>Dashboard</a></li>

            <li><a href="update.php"><i class="fa fa-edit" aria-hidden="true"></i><svg class="glyph stroked dashboard-dial"></svg>Update</a></li>


            <li><a href="logout.php"><i class="fa fa-arrow-circle-left" aria-hidden="true"></i><svg class="glyph stroked dashboard-dial"></svg>Logout</a></li>
        </ul>
    </div>
</div><!--/.sidebar-->









<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>
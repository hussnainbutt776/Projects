




<html>
<head>
    <title>Donar Signin</title>
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

{{--@include('donar_folder.donar_include.header')--}}
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
                <a class="nav-link text-danger" href="/donar_registration"><strong>SignUp</strong></a>
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
            <h1 class="text-center text-white">Donar SignIn</h1>
            <hr class="size">

        </div>
    </div>

</div>   <!-- end of container for header signin -->


<div class="container-fluid pt-5   " style="background-color:#ECF0F1">



    <div class="row ">

        <div class="col-md-6 offset-md-3 mb-5 form-container ">
            <h3 class="text-center text-danger">SignIn</h3>
            <hr class="red-hr">
            <form action="" method="post" >
                <div class="form-group">
                    <label for="email">Email/Phone no.</label>
                    <input type="text" name="email_phone" class="form-control" placeholder="Email Or Phone" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" name="password" placeholder="Password" required class="form-control">
                </div>
                <div class="form-group">
{{--                    <button class="btn btn-danger btn-lg center-aligned" type="submit" name="SignIn">SignIn</button>--}}
                    <a href="/donar_main_page"  name="signin" type="submit" class="btn btn-lg btn-danger btn-lg center-aligned">Signin</a>
                </div>
            </form>

        </div>

        @include('donar_folder.donar_include.footer')

    </div>      <!-- for row div -->



</div>  <!-- for container div -->


<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>


</body>
</html>



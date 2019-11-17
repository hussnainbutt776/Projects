

    
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <title>Donation</title>
      <style>

          .heroimage
          {
              height: 76vh;

              background-image: url("img/header.png");
              background-size: cover;

          }

          .form-rounded {
              border-radius: 2rem;
          }form{

               margin-left: 40%;
           }


      </style>
      <link rel="stylesheet" href="css/bootstrap.min.css">

      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  </head>


  <body>
    
{{--        @include('receiver_folder.receiver_include.header')--}}
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
                <a class="nav-link text-danger" href="/donar_registration"><strong>Donate</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="/donar_signin"><strong>Receiver</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="/receiver_search"><strong>Search</strong></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-danger" href="/donar_signin"><strong>About Us</strong></a>
            </li>

        </ul>
    </div>
</nav>

        <div class="container-fluid heroimage" style="border-style: solid;">
        <div class="row">

        <div class="col-md-12">
            <br><br>
                <h1 class="text-center text-white mt-5 ">Donate the blood, save the life</h1>
                <h4 class="text-center text-secondary ">Donate the blood to help others.</h4>
                <br>
                <h1 class="text-center text-white ">Search The Donars</h1>
            <br>


        </div>





        </div>    {{--for row--}}


                <div class="row"> {{--for row--}}


                    {{--extra--}}
                    <form action="#" method="POST" class="form-group inline-block " >


{{--                        <div class="form-group ">--}}
{{--                            <button onclick="window.location.href ='/receiver_folder/donar_registration;'" type="submit" class="btn btn-lg btn-danger">Donate Blood</button>--}}
{{--                        </div>--}}

                        <div class="form-group ">
                            <a href="/donar_registration" type="submit" class="btn btn-lg btn-danger">Donate</a>
                        </div>

{{--                        <div class="form-group ">--}}
{{--                                    <button onclick="window.location.href = '/receiver_regist_form';"type="submit" class="btn btn-lg btn-danger">Receiver</button>--}}
{{--                                </div>--}}
                        <div class="form-group ">
                            <a href="/receiver_regist_form" type="submit" class="btn btn-lg btn-danger">Receiver</a>
                        </div>




                    </form>
                    {{--extra end--}}
                </div> {{--for row--}}


        </div>    {{--for container--}}


    <div class="container-fluid bg-danger p-3 ">
        <div class="row" >
             
            <div class="col-md-12"> 
            <h1 class="text-center"  style="color: white; font-weight: 700;padding: 10px 0 0 0;">Donate The Blood</h1>
            <br><br>
            <p class="text-center pera-text text-white">
                We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.

                We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
                <br><br>
            </p>
            <button type="lable" class="btn btn-danger btn-lg btn-block"><h1>Become A Life Saver</h1></button>
        </div> 
        </div>
    </div>


<!-- card start-->
    <div class="container-fluid = pt-5 pb-5" style="background-color: #ECF0F1;">
    <div class="container">
        <div class="row">
            <div class="col-md-4  ">
                <div class="card"  style="width: 23rem;  height: 25rem;">
                     <h3 class="text-center">Our Vission</h3>
                        <img src="img/binoculars.png" alt="Our Vission" class="img img-responsive" style="margin: 0 auto;" width="168" height="168">
                        <p class="text-center" >
                            We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
                        </p>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="card" style="width: 23rem; height: 25rem;">
                          <h3 class="text-center">Our Goal</h3>
                        <img src="img/target.png" alt="Our Vission" class="img img-responsive"  style="margin: 0 auto;" width="168" height="168">
                        <p class="text-center">
                            We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
                        </p>
                </div>
            </div>
        
            <div class="col-md-4">
                <div class="card" style="width: 23rem;  height: 25rem;">
                      <h3 class="text-center">Our Mission</h3>
                        <img src="img/goal.png" alt="Our Vission" class="img img-responsive"  style="margin: 0 auto;" width="168" height="168">
                        <p class="text-center">
                            We are a group of exceptional programmers; our aim is to promote education. If you are a student, then contact us to secure your future. We deliver free international standard video lectures and content. We are also providing services in Web & Software Development.
                        </p>
                    </div>
                </div>
     </div>
 </div>
</div>

    <!-- end card section -->




        <div class="container-fluid bg-secondary  p-5">

            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-center col-md-12"  style="color: white;">Contact Us</h1>
                </div>

            </div>


        </div>























    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>


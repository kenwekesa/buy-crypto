<!Doctype html>
<html>
<head>

  
   
   
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <link href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.no-icons.min.css" rel="stylesheet">
   <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
  <style> 
   body::before {
  display: block;
  content: '';
  height: 60px;
}

.enrol
{
  border-radius:0;
}

.belownav
{
 background-image: url("Raj/mony.jpg");
 background-size: 100% 100%;
 height: auto;
 background-repeat: no-repeat;
 
 padding-bottom: 40px;

}

#ovesrlay {
  position: fixed; /* Sit on top of the page content */
  
  width: 100%; /* Full width (cover the whole page) */
  height: 100%; /* Full height (cover the whole page) */
  top: 0;
  left: 0;
  right: 0;
  bottom: 0;
  background-color: rgba(0,0,0,0.8); /* Black background with opacity */
  z-index: 2; /* Specify a stack order in case you're using a different order for other elements */
  cursor: pointer; /* Add a pointer on hover */
}

.cont 
{
  z-index: 3;
}

.btn-signup{
  width: 23%;
  margin-right: 5px;
  color: white;
  border-radius: 0;
  margin-bottom: 2rem;
}

.card_section
{
  margin-top: -5rem;
}

.card-image-top{
   width: 100%;
    height: 25vw;
    object-fit: cover;
}

.text_content h1{
  font-size: 40px;
}

.text_content p{
  font-size: 28px;
}

#navmenu a:hover { 
    box-shadow: inset 0 -3px 0 0 orange; 
}

@media only screen and (max-width: 900px) {
  
}

@media only screen and (max-width: 600px) {
  
    .card_section
{
  margin-top: -2rem;
}

.btn-signup{

  margin-right: 2px;
  color: white;
  border-radius: 0;
  margin-bottom: 2rem;
}
  
}
</style>
</head>
<body>




<!-- Navbar -->
<!-- Navbar -->
    <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 fixed-top shadow">
      <div class="container">
        <a href="#" class="navbar-brand">Buy-Pal</a>

        <button
          class="navbar-toggler"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navmenu"
        >
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navmenu">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a href="#" class="nav-link">Newbie Investor</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Market</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">News</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">Membership</a>
            </li>
            <li class="nav-item">
              <a href="#" class="nav-link">About us</a>
            </li>
            
            <li class="nav-item">
              <a href="#" class="nav-link">Contact us</a>
            </li>
            
          </ul>
        </div>
      </div>
    </nav>
    <!-- Showcase -->
    
    <section
      class="belownav bg-light text-light p-5 p-lg-4 pt-lg-5 text-center text-sm-start "
    >
      <div class="container">
        <div class="d-sm-flex align-items-center justify-content-between">
          <div class="col-md-7 text_content">
            <h1>Take it  the <span class="text-warning"> Right way here </span></h1>
            <p class="lead my-4 cont">
              <b>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sint iure autem recusandae, veniam, illo dolor soluta assumenda minima quia velit officia sit exercitationem nam ipsa, repellendus aut facilis quasi voluptas!</b>
            </p>
            <button
              class="btn-signup btn btn-warning btn-lg enrol mr-3"
              data-bs-toggle="modal"
              data-bs-target="#signupModal"
            >
              Sign up
            </button>
            <button
              class="btn-signup btn btn-info btn-lg login ml-4"
              data-bs-toggle="modal"
              data-bs-target="#loginModal"
            >
              Login
            </button>
          </div>
          <img
            class="img-fluid w-s0 d-none d-sm-block"
            src="images/cypto.png"
            width="600"
            height="550"
            alt=""
          />
        </div>
      </div>
      
    </section>

    <!-- Boxes -->
    <section class="p-5 pl-2 pr-2 card_section">
      <div class="container">
        <div class="row text-center g-4">
          
          <div class="col-md-7">
            <div class="card bg-light text-dark border-0 shadow">
              <div class="card-head">
                 <img class="w-100 card-image-top" src="Raj/personbuy.jpeg" >
              </div>
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-people"></i>
                </div>
                <h3 class="card-title mb-3">Dummy Header</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Iure, quas quidem possimus dolorum esse eligendi?
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md-3 p-5 px-1">
             <h3 class="mt-4 text-danger">Don't just buy, buy it right.</h4>
              <p>
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Iure, quas quidem possimus dolorum esse eligendi?
                </p>
          </div>
        </div>
      </div>
    </section>
            <div id="overlay"></div>


    


    <!-- Boxes -->
    <section class="p-5">
      <div class="container">
        <div class="row text-center g-4">
          <div class="col-md">
            <div class="card bg-light text-dark border-0 shadow">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-laptop"></i>
                </div>
                <h3 class="card-title mb-3">Dummy</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Iure, quas quidem possimus dolorum esse eligendi?
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-light border-0 text-dark shadow">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-person-square"></i>
                </div>
                <h3 class="card-title mb-3">Dummy Header</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Iure, quas quidem possimus dolorum esse eligendi?
                </p>
                <a href="#" class="btn btn-dark">Read More</a>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="card bg-light text-dark border-0 shadow">
              <div class="card-body text-center">
                <div class="h1 mb-3">
                  <i class="bi bi-people"></i>
                </div>
                <h3 class="card-title mb-3">Dummy Header</h3>
                <p class="card-text">
                  Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                  Iure, quas quidem possimus dolorum esse eligendi?
                </p>
                <a href="#" class="btn btn-primary">Read More</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>





<!-- Footer -->
    <footer class="p-5 bg-dark text-white text-center position-relative">
      <div class="container">
        <p class="lead">Copyright &copy; Buy-Pal</p>

        <a href="#" class="position-absolute bottom-0 end-0 p-5">
          <i class="bi bi-arrow-up-circle h1"></i>
        </a>
      </div>
    </footer>









<!-- Modal HTML Markup -->
<div id="signupModal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Sign Up</h1>
            </div>
            <div class="modal-body">
              
                <form role="form" method="POST" action="">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Username</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="name" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">E-Mail Address</label>
                        <div>
                            <input type="email" class="form-control input-lg" name="email" value="">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label">Confirm Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="password_confirmation">
                        </div>
                    </div>
                    <div class="form-group mt-4">
                        <div>
                            <button type="submit" class="btn btn-warning">
                                Submit
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<!-- Modal HTML Markup -->
<div id="loginModal" class="modal fade">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title">Login</h1>
            </div>
            <div class="modal-body">
              
                <form role="form" method="POST" action="">
                    <input type="hidden" name="_token" value="">
                    <div class="form-group">
                        <label class="control-label">Username</label>
                        <div>
                            <input type="text" class="form-control input-lg" name="name" value="">
                        </div>
                    </div>
                    
                    <div class="form-group">
                        <label class="control-label">Password</label>
                        <div>
                            <input type="password" class="form-control input-lg" name="password">
                        </div>
                    </div>
                   
                    <div class="form-group mt-3">
                        <div>
                            <button type="submit" class="btn btn-warning">
                                Login
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- /.modal -->


<div class="modal fade" id="signupModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
  aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header text-center">
        <h4 class="modal-title w-100 font-weight-bold">Sign up</h4>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body mx-3">
        <div class="md-form mb-5">
          <i class="fas fa-user prefix grey-text"></i>
          <input type="text" id="orangeForm-name" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-name">Your name</label>
        </div>
        <div class="md-form mb-5">
          <i class="fas fa-envelope prefix grey-text"></i>
          <input type="email" id="orangeForm-email" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-email">Your email</label>
        </div>

        <div class="md-form mb-4">
          <i class="fas fa-lock prefix grey-text"></i>
          <input type="password" id="orangeForm-pass" class="form-control validate">
          <label data-error="wrong" data-success="right" for="orangeForm-pass">Your password</label>
        </div>

      </div>
      <div class="modal-footer d-flex justify-content-center">
        <button class="btn btn-deep-orange">Sign up</button>
      </div>
    </div>
  </div>
</div>

<div class="text-center">
  <a href="" class="btn btn-default btn-rounded mb-4" data-toggle="modal" data-target="#modalRegisterForm">Launch
    Modal Register Form</a>
</div>


<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>
</html> 



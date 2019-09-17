<!DOCTYPE html>
<html>
    <head>
        <title>Github Page</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="shortcut icon" href="images/gitpix.ico">
        <link href="css/bootstrap-4.1.3-dist (1)/css/bootstrap.min.css" rel="stylesheet">
        <link href="css/bootstrap-4.1.3-dist (1)/font-awesome-4.7.1/css/font-awesome.min.css"  rel="stylesheet">
        <script src="js/jquery-3.3.1.min.js"></script>
        <script src="js/bootstrapjs/bootstrap.min.js"></script>
        <link href="css/gitPage.css" rel="stylesheet">
    </head>

    <body>
        <div class="gradient">

            <!-- navbar section -->
            <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> 
                <a class="navbar-brand" href=#> <img src="images/gitbrand.png" width="30" height="30" alt="git logo here" id="logo"> </a>
                <div class="collapse navbar-collapse" id="navbar-div">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item nolink"> Why GitHub? <i class="fa fa-angle-down"></i> </li>
                        <li class="nav-item"> <a href="#" class="nav-link" style="color:white"> Enterprise </a> </li>
                        <li class="nav-item nolink"> Explore <i class="fa fa-angle-down"></i> </li>
                        <li class="nav-item"> <a href="#" class="nav-link" style="color:white"> Marketplace </a> </li>
                        <li class="nav-item nolink"> Pricing <i class="fa fa-angle-down"></i> </li>
                    </ul>
                
                    <form class="form-inline nav-form">
                            <input class="form-control" type="search" placeholder="Search Github" id="search">
                    </form>
                    <a href="#" class="nav-link signin"> Sign in </a>
                </div>
                <div id="button-div">
                    <button type="button" class="btn btn-dark" id="signup">Sign up</button>
                    <button type="button" id="collapsible-button" class="navbar-toggler" data-toggle="collapse" data-target="#navbar-div">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                </div> 
            </nav>
            <!-- end of navbar section -->

            <!-- main body section -->
            <div class="container body-content">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 text_and_form" id="text-section">
                        <p id="para1">Built for developers</p>
                        <p id="para2"> GitHub is a development platform inspired by the way you work. From <a href="#"> open source </a> to <a href="#">business</a>, 
                            you can host and review code, manage projects, and build software alongside 31 million developers. </p>
                        <input type="submit" name="submit" id="submit" class="hidden" value="Sign up for GitHub"> 
                    </div>
                    <div class="col-sm-12 col-md-6 text_and_form hide-div show-div">
                        <form id="myForm">
                            <label for="username">Username</label> <br>
                            <input type="text" name="username" id="username" placeholder="Pick a username" required> <br>
                            <label for="email">Email</label> <br>
                            <input type="email" name="email" id="email" placeholder="you@example.com" required> <br>
                            <label for="password">Password</label> <br>
                            <input type="password" name="password" id="password" placeholder="Create a password" required> <br>
                            <p class="form-text">Make sure its <span style="color:red"><b>more than 15 characters</b></span> OR <span style="color:red"><b>at least 8 characters
                                including a number and a lower case later</b></span>. <span class="blue-text"> <b>Learn more</b></span>
                            </p>
                            <input type="submit" name="submit" id="submit" value="Sign up for GitHub"> <br><br>
                            <p class="form-text">By clicking "Sign up for GitHub", you agree to our <span class="blue-text">terms of service</span> and 
                                <span class="blue-text">privacy statement.</span> We'll occasionally send you account related emails. 
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>        
    </body>
</html>
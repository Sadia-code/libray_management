<?php include('connection.php') ;  ?>
<?php include('header.php') ;  ?>









<body>

	

<!-- Page content -->
<div class="page-content">

    <!-- Main content -->
    <div class="content-wrapper">

        <!-- Content area -->
        <div class="content d-flex justify-content-center align-items-center">

            <!-- Login form -->
            <form class="login-form" action="index.html">
                <div class="card mb-0">
                    <div class="card-body">
                        <div class="text-center mb-3">
                            <i class="icon-reading icon-2x text-slate-300 border-slate-300 border-3 rounded-round p-3 mb-3 mt-1"></i>
                            <h5 class="mb-0">Login to your account</h5>
                            <span class="d-block text-muted">Enter your credentials below</span>
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                        <i class="icon-user text-muted form-control-feedback"></i>
                            <input type="text" class="form-control" placeholder="Username or email">
                            
                        </div>

                        <div class="form-group form-group-feedback form-group-feedback-left">
                        <i class="icon-lock2 text-muted form-control-feedback"></i>
                            <input type="password" class="form-control" placeholder="Password">
                            
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-block">Sign in <i class="icon-circle-right2 ml-2"></i></button>
                        </div>

                        <div class="text-center">
                            <a href="login_password_recover.html">Forgot password?</a>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /login form -->

        </div>
        <!-- /content area -->


        

    </div>
    <!-- /main content -->

</div>
<!-- /page content -->

</body>
</html>
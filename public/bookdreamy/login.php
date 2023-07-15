<?php
require_once "atas.php"
  ?>
  
<div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header"><h3 class="text-center font-weight-light my-4">Login</h3></div>
                                <div class="card-body">
                                <form id="login">
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="text" class="form-control form-control-xl" placeholder="Username" id="username">
                                        <div class="form-control-icon">
                                            <i class="bi bi-person"></i>
                                        </div>
                                    </div>
                                    <div class="form-group position-relative has-icon-left mb-4">
                                        <input type="password" class="form-control form-control-xl" placeholder="Password" id="password" required>
                                        <div class="form-control-icon">
                                            <i class="bi bi-shield-lock"></i>
                                        </div>
                                    </div>
                                    <div class="form-check form-check-lg d-flex align-items-end">
                                        <input class="form-check-input me-2" type="checkbox" value="" id="flexCheckDefault">
                                        <label class="form-check-label text-gray-600" for="flexCheckDefault">
                                            <br>
                                            Keep me logged in
                                        </label>
                                    </div>
                                    <button type="submit" class="btn btn-primary btn-block btn-lg shadow-lg mt-5"><a href="index.php">Log in</button>
                                  </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div class="small"><a href="signup.php">Need an account? Sign up!</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <br>
        <br>
<?php
require_once "bawah.php"
  ?>
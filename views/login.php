<div class="container">
    <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">
                    <div class="card mb-3 form-login-container">
                        <div class="card-body">
                            <div class="pt-4 pb-2">
                                <h5 class="card-title text-center pb-0 fs-4">Login to Your Account</h5>
                                <p class="text-center small">Enter your username & password to login</p>
                            </div>

                            <form action="" method="post" class="row g-3 needs-validation" autocomplete="off">
                                <div class="col-12">
                                    <label for="yourusername" class="form-label">Username</label>
                                    <input type="text" name="username" class="form-control" id="yourEmail" placeholder="john.wick" autocomplete="on" required/>
                                    <div class="invalid-feedback">Please enter your username.</div>
                                </div>

                                <div class="col-12">
                                    <label for="yourPassword" class="form-label">Password</label>
                                    <input type="password" name="password" class="form-control" id="yourPassword" placeholder="********" autocomplete="current-password" required/>
                                    <div class="invalid-feedback">Please enter your password!</div>
                                </div>

                                <div class="col-12">
                                    <button class="btn btn-primary w-100" type="submit">Login</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
        <!-- Heading Row -->
        <div class="row">
            <div class="col-md-8">
                <div class="main-content">
                    <div class="main-content-header">
                        <h2>Registration Refund Protection</h2>
                    </div>
                    <p>Sign in to submit your registration refund claim.</p>
                    <div class="form-wrapper">
                        <form class="form-signin" role="form" method="post" action="refund.php">
                            <label for="inputNumber" class="sr-only">Registration Number</label>
                            <input type="number" id="inputNumber" class="form-control" placeholder="Registration Number" required autofocus>
                            <label for="inputPassword" class="sr-only">Password</label>
                            <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" value="remember-me"> Remember me
                                </label>
                            </div>
                            <button class="btn btn-lg btn-primary btn-sign-in" type="submit" id="submit" name="submit" value="Send">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
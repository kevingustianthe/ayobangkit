<!DOCTYPE html>
<html lang="en">

<head>
    <title>Login - AyoBangkit</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body class="bg-dark p-5">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <div class="container my-3">
                <div class="row justify-content-center">
                    <div class="col-lg-5">
                        <div class="card shadow-lg border-0 rounded-lg mt-5">
                            <div class="card-header">
                                <h3 class="text-center font-weight-light my-4">Register</h3>
                            </div>
                            <div class="card-body">
                                <form action="register/process" method="POST">
                                    <?= csrf_field(); ?>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="username" name="username" type="text" placeholder="exampleuser" required />
                                        <label for="username">Username</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="email" name="email" type="email" placeholder="example@mail.com" required />
                                        <label for="email">Email address</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="password" name="password" type="password" placeholder="ExamplePass" required />
                                        <label for="password">Password</label>
                                    </div>
                                    <div class="form-floating mb-3">
                                        <input class="form-control" id="confirm_password" name="confirm_password" type="password" placeholder="ExamplePass" onchange="check_pass()" required />
                                        <label for="confirm_password">Confirm Password</label>
                                    </div>
                                    <div class="d-flex align-items-center justify-content-start mt-4 mb-0">
                                        <button type="submit" name="submit" id="submit" class="btn btn-primary">Register</button>
                                    </div>
                                </form>
                            </div>
                            <div class="card-footer text-center py-3">
                                <div class="small"><a href="login">Sudah punya akun? Login di sini</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
        function check_pass() {
            if (document.getElementById('password').value == document.getElementById('confirm_password').value) {
                document.getElementById('submit').disabled = false;
            } else {
                document.getElementById('submit').disabled = true;
            }
        }
    </script>
</body>

</html>
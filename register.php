<?php include('includes/header.php'); ?>

<?php session_start(); ?>

<div class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <?php if (isset($_SESSION['message'])) { ?>
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    <strong>Hay!</strong> <?= $_SESSION['message'] ?>.
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            <?php
                unset($_SESSION['message']);
            }
            ?>
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="">Registertion Form</h4>
                </div>
                <div class="card-body">

                    <form action="function/authcode.php" method="POST">
                        <div class="mb-3">
                            <label class="form-label">Name</label>
                            <input type="text" name="name" class="form-control" placeholder=" Enter Your Name">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Phone </label>
                            <input type="number" name="phone" class="form-control" placeholder=" Enter Your Phone">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" name="email" class="form-control" placeholder=" Enter Your Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" name="password" class="form-control" placeholder=" Enter Your Password" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Comfirm Password</label>
                            <input type="password" name="cpassword" class="form-control" placeholder="Comfirm Password">
                        </div>
                        <button type="submit" name="registerBtn" class="btn btn-primary btn-sm float-end">Register</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('includes/footer.php'); ?>
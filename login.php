<?php include('includes/header.php'); ?>

<div class="container mt-5 ">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="">Login Form</h4>
                </div>
                <div class="card-body">

                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email address</label>
                            <input type="email" class="form-control" placeholder=" Enter Your Email" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Password</label>
                            <input type="password" class="form-control" placeholder=" Enter Your Password" id="exampleInputPassword1">
                        </div>
                        <div class="mb-3 form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Remimbar Me </label>
                        </div>
                        <button type="submit" class="btn btn-primary btn-sm float-end">Login[</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>




<?php include('includes/footer.php'); ?>
<?php

include './inc/dp.php';
include './inc/form.php';
include './inc/select.php';
include './inc/dp_close.php';



?>

<?php include './parts/header.php'; ?>



        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
        <h1 class="display-4 fw-normal">Win with us</h1>
        <p class="lead fw-normal">To win a free course from the application.</p>
        <p class="lead fw-normal">Countdown for the registration:</p>
        <h3 id="countdown"></h3>
        </div>

        <div class="container">
            <h3>How to Participate:</h3>
                <ul class="f-group list-group-flush">
        <li class="list-group-item">Follow our page on all social media</li>
                <li class="list-group-item">wait our Q&A live</li>
                <li class="list-group-item">Wait our announcement</li>
                <li class="list-group-item">After our live we will choose person from our database randomly.</li>
                <li class="list-group-item">Stay tuned!</li>
        </ul>
        </div>
</div>




    <div class="container" >

   <div class="position-relative text-center">
    <div class="col-md-5 p-lg-5 mx-auto mу-5">
    <form action="<?php $_SERVER['PHP_SELF']; ?>" method="post">
        <h3>Please Enter Your Information</h3>
        <div class="mb-3">
            <label for="firstname" class="form-label">First Name</label>
            <input type="text" name="firstname" id="firstname" class="form-control" value="<?php echo $firstname; ?>">
            <div class="form-text error"><?php echo $errors['firstnameError']; ?></div>
        </div>

        <div class="mb-3">
            <label for="lastname" class="form-label">Last Name</label>
            <input type="text" name="lastname" id="lastname" class="form-control" value="<?php echo $lastname; ?>">
            <div class="form-text error"><?php echo $errors['lastnameError']; ?></div>
        </div>

        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="text" name="email" id="email" class="form-control" value="<?php echo $email; ?>">
            <div class="form-text error"><?php echo $errors['emailError']; ?></div>
        </div>
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
        </div>

<div class="loader-con">
    <div id="loader">
        <canvas id="circularLoader" position="fixed" width="200" height="200"></canvas>
    </div>
</div>

<div class="d-grid gap-2 col-6 mx-auto my-5">
    <button type="button" id="winner" class="btn btn-primary">
    Choose The Winner
    </button>
</div>


<div class="modal fade" id="modal" tabindex="-1" aria-labelledby="modalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title fs-5 text-center" id="modalLabel">The Winner of Competition</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
                  <?php foreach($users as $user): ?>
        <h1 class="display-1 text-center modal-title fs-5" id="modalLabel"><?php echo htmlspecialchars($user['firstname']) . ' ' . htmlspecialchars($user['lastname']); ?><h1>
        <?php endforeach; ?>
      </div>
    </div>
  </div>
</div>



 <?php include './parts/footer.php'; ?>


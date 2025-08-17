<?php

include 'inc/db.php';

include 'inc/form.php';


include 'inc/select.php';

include 'inc/dbclose.php';


?>

<?php include 'header.php'; ?>
<div class="container">


    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center bg-light">
        <div class="col-md-5 p-lg-5 mx-auto my-5">
            <h1 class="display-4 fw-normal">hoba teto mambo</h1>
            <p class="lead fw-normal">فريق الشمبلاح</p>
            <p id="countdown"></p>
            <a class="btn btn-outline-secondary" href="#">Coming soon</a>
        </div>
        <div class="product-device shadow-sm d-none d-md-block"></div>
        <div class="product-device product-device-2 shadow-sm d-none d-md-block"></div>
    </div>


    <ul class="list-group list-group-flush">
        <li class="list-group-item">الدنيا دى فيها كام بالياتشو 🤡</li>
        <li class="list-group-item">الدنيا دى فيها كام بالياتشو 🤡</li>
        <li class="list-group-item">الدنيا دى فيها كام بالياتشو 🤡 </li>
        <li class="list-group-item">الدنيا دى فيها كام بالياتشو 🤡</li>
        <li class="list-group-item">الدنيا دى فيها كام بالياتشو 🤡</li>
    </ul>

    <form class="mt-5" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <h3>حبيبى يا قلبى أحنا صحاب بلادنا </h3>
        <div class="mb-3">
            <label for="firstName" class="form-label">الأسم الأول </label>
            <input type="text" name="first" class="form-control" id="firstName" value="<?php echo htmlspecialchars($first_name); ?>" aria-describedby="firstnameHelp">
            <div id="firstnameHelp" class="form-text error"><?php echo $errors['FirstNameError']; ?></div>
        </div>
        <div class="mb-3">
            <label for="lastName" class="form-label">الأسم الثانى </label>
            <input type="text" name="last" class="form-control" id="lastName" value="<?php echo htmlspecialchars($last_name); ?>" aria-describedby="lastnameHelp">
            <div id="lastnameHelp" class="form-text error"><?php echo $errors['LastNameError']; ?></div>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">البريد الإلكترونى </label>
            <input type="email" name="email" class="form-control" id="email" value="<?php echo htmlspecialchars($email); ?>" aria-describedby="emailHelp">
            <div id="emailHelp" class="form-text error"><?php echo $errors['EmailError']; ?></div>
        </div>


        <button type="submit" name="submit" class="btn btn-primary">أبعت المعلومات يا غالى </button>
    </form>



</div>





<!-- <form action="index.php" method="post">
        <input type="text" name="first" placeholder="Enter your first name">
        <input type="text" name="last" placeholder="Enter your last name">
        <input type="text" name="email" placeholder="Enter your email">
        <input type="submit" value="Submit" name="submit">
    </form> -->


<div class="loader-container">
    <div id="loader">
        <canvas id="circularLoader" width="200" height="200"></canvas>
    </div>
</div>


<!-- Button trigger modal -->
<div class="d-grid gap-2 col-12 mx-auto my-5">
    <button id="winner" type="button" class="btn btn-primary">
        الكسبان
    </button>
</div>
<!-- myModal -->
<div class="modal fade" id="myModal" tabindex="-1" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <?php foreach ($users as $user) : ?>

                    <h5 class="modal-title" id="modalLabel">الكسبان فى المسابقه</h5>
                <?php endforeach; ?>

                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <?php foreach ($users as $user) : ?>

                    <h1 class="modal-title display-3 text-center modal-title" id="modalLabel"><?php echo htmlspecialchars($user['FirstName']) . ' ' . htmlspecialchars($user['LastName']); ?></h1>
                <?php endforeach; ?>

            </div>

        </div>
    </div>
</div>




<div id="cards" class="row mb-5 pb-5">
    <?php foreach ($users as $user) : ?>
        <div class="col-sm-6 ">
            <div class="card bg-light mb-3">
                <div class="card-body">
                    <h5 class="card-title"><?php echo htmlspecialchars($user['FirstName']) . ' ' . htmlspecialchars($user['LastName']); ?></h5>
                    <p class="card-text"><?php echo htmlspecialchars($user['email']); ?></p>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>



<?php include 'footer.php'; ?>
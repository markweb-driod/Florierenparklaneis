
<?php 
require "admin-header.php"; ?>

<main>

    <div class="container">
    <section class="section pt-5 mt-5">
      <div class="row d-flex flex-column align-items-center justify-content-center">
        <div class="col-lg-6">
        <div class="text-center">
        <i class="bi bi-check-circle-fill" style="font-size: 3rem; color: green;"></i>
        </div>
    
              <p class="text-center">Dear <span style="color: green;"><?php echo $row['lastname']; ?>,</span> You have successfully approved this book for use.
              </p>
              <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="post">
              <a href="admin-manage-library.php" class="btn w-100 mt-2" style="background-color: green; color: #fff; border-radius: 15px;">Continue</a>
            </form>

        </div>

      </div>
    </section>
    </div>

  </main><!-- End #main -->

  <?php require "main-footer.php"; ?>
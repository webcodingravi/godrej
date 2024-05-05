<?php

include 'header/header.php';


?>
<section class="add-amenities-details">
  <div class="container">
    <div class="row">
      <div class="col-lg-8 col-md-8 col-12">
        <h1>Update FAQ</h1>
        <div class="card shadow">
          <!-- Form -->

          <?php
                    include '../config.php';

                    $faq_id = $_GET['eid'];
                    $sql = "SELECT * FROM faq WHERE id = '{$faq_id}'";

                     $result = mysqli_query($conn, $sql) or die("Query failed");
                     if(mysqli_num_rows($result) > 0) {
                        while($row = mysqli_fetch_assoc($result)) {

                      

                      ?>
          <form action="save-update-faq.php" method="POST">

            <form action="" method="POST" autocomplete="off">

            <div class="form-group">
                
                <input type="hidden" name="faq_id" value="<?php echo $row['id']; ?>" class="form-control">
              </div>
              <div class="form-group">
                <label>Question</label>
                <input type="text" name="question" value="<?php echo $row['question']; ?>" class="form-control" placeholder="Question...">
              </div>

              <div class="form-group">
                <label>Answear</label>
                <input type="text" name="answear" value="<?php echo $row['answer']; ?>" class="form-control" placeholder="Answear....">
              </div>



              <input type="submit" name="submit" class="btn btn-button" value="Save" />
            </form>
            <!--/Form -->

            <?php
                      }
                    } 

                  ?>
        </div>
      </div>
    </div>
  </div>
</section>



<?php
include 'footer/footer.php'; ?>
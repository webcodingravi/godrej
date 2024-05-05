
<?php

include 'header/header.php';


if(isset($_POST['save'])) {
    include '../config.php';
    $question = mysqli_real_escape_string($conn, $_POST['question']);
    $answear = mysqli_real_escape_string($conn, $_POST['answear']);
  
        $sql1 = "INSERT INTO faq(question, answer)
         VALUES('{$question}', '{$answear}')";

         if(mysqli_query($conn, $sql1)) {
            header("Location: {$header}Dashboard/faq.php");
       
    }
}

?>
<section class="add-price-section">
<div class="container">
  <div class="row">
    <div class="col-lg-12 col-md-12 col-12">
      <h1>Add FAQ</h1>

      <div class="card shadow">
                <form action="" method ="POST" autocomplete="off">
                      <div class="form-group">
                          <label>Question</label>
                          <input type="text" name="question" class="form-control" placeholder="Question..." required>
                      </div>

                      <div class="form-group">
                          <label>Answear</label>
                          <input type="text" name="answear" class="form-control" placeholder="Answear...." required>
                      </div>

                 
                      <input type="submit"  name="save" class="btn btn-button" value="Save" required />
                  </form>
              
</div>
    </div>
  </div>
</div>

</section>









<?php
include 'footer/footer.php'; ?>
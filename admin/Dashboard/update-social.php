<?php include './header/header.php';

?>
<section class="add-price-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-8 col-12">
                <h1> Modify Social Media </h1>

                <div class="card shadow">


                    <?php
                    include '../config.php';

                    $social_id = $_GET['eid'];
                    $sql = "SELECT * FROM social_media WHERE id = '{$social_id}'";

                    $result = mysqli_query($conn, $sql) or die("Query failed");
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {



                            ?>
                            <form action="save-social-media.php" method="POST" enctype="multipart/form-data">


                            <div class="form-group">
                                    
                                    <input type="hidden" name="social_id" value="<?php echo $row['id']; ?>" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label>Social Link</label>
                                    <input type="text" name="social_link" value="<?php echo $row['social_link']; ?>" class="form-control" placeholder="Social Link...">
                                </div>

                                <div class="form-group">
                                    <label for="postImage">Post Image</label>
                                    <input type="file" name="socail_icon" class="form-control">
                                    <img src="../assets/img/social/<?php echo $row['social_icon']; ?>" height="100px">
                                    <input type="hidden" name="old-social" value="<?php echo $row['social_icon']; ?>">
                                </div>

                                <input type="submit" name="save" class="btn btn-button" value="Save" required />
                            </form>
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
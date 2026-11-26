<?php
session_start();
if ($_SESSION['ulogin'] != true) {
    header('location:../login.php');
}

include "./header.php";
include "./sidebar.php";
?>
        <!-- Content Start -->
        <div class="content">
        <?php include "./top-header.php"; ?>


            <!-- Form Start -->
            <div class="container-fluid pt-4 px-4">
                <div class="row g-4 justify-content-center">
                    <div class="col-sm-12 col-xl-8">
                        <div class="bg-secondary rounded h-100 p-4">
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label class="form-label">Name</label>
                                    <input type="text" class="form-control" placeholder="Enter Name" name="pname">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Desination</label>
                                    <input type="text" class="form-control" placeholder="Enter Desination" name="pdes">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Image</label>
                                    <input type="file" class="form-control" name="pimg">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Facebook</label>
                                    <input type="text" class="form-control" placeholder="Enter Facebook" name="furl">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Twitter/X</label>
                                    <input type="text" class="form-control" placeholder="Enter Twitter/X" name="turl">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">LinkedIn</label>
                                    <input type="text" class="form-control" placeholder="Enter LinkedIn" name="lurl">
                                </div>
                                <div class="mb-3">
                                    <label class="form-label">Instagram</label>
                                    <input type="text" class="form-control" placeholder="Enter Instagram" name="iurl">
                                </div>
                                <button type="submit" name="save" class="btn btn-primary">Save</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Form End -->


            <?php include "./footer.php"; ?>

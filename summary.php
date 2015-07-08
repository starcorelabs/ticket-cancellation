<?php include( "includes/head.php"); ?>


<?php include( "includes/nav.php"); ?>


<!-- Heading Row -->
<div class="row">
    <div class="col-md-8">
        <div class="main-content">
            <div class="main-content-header">
                <h2>Summary of Submission</h2>
            </div>
            <p></p>
            <div class="form-wrapper">
                <form class="summary" role="form" method="post" action="thank-you.php">
                    <div class="form-group">
                        <label for='refundAmount' class="ticket-price">Refund Amount Requested</label>
                        <input name="ticketPrice" type="text" id="ticketPrice" value="$110.00" readonly>
                        <br>

                        <div class="summary-file-upload">
                            <label for="fileUpload" class="custom-file-upload">
                                <i class="fa fa-cloud-upload"></i> File Upload
                            </label>
                            <input name="fileUpload" id="fileUpload" type="file">
                        </div>
                        <div class="terms">
                            <label name="checkbox-terms">I agree - <a href="#">Terms and Conditions</a>
                            </label>
                            <input type="checkbox" name="terms" id="checkbox-terms" autofocus data-validate="required">
                        </div>

                        <input class="btn btn-lg btn-primary btn-submit summary-button" type="submit" value="Process"></input>
                    </div>
                    <!-- form group -->
                </form>
            </div>
            <!-- form wrapper -->
        </div>
        <!-- end main content -->
    </div>
    <!-- end col -->



    <?php include( "includes/refund-sidebar.php"); ?>


    <?php include( "includes/footer.php"); ?>
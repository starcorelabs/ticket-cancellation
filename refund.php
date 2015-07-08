<?php include("includes/head.php"); ?>


<?php include("includes/nav.php"); ?>


<!-- Heading Row -->
<div class="row">
    <div class="col-md-8">
        <div class="main-content">
            <div class="main-content-header">
                <h2>Refund Submission Form</h2>
            </div>
            <p>Please fill out the form below to request a refund.</p>
            <div class="form-wrapper">
                <form class="refund" role="form" method="post" action="summary.php">
                    <div class="form-group">
                        <label for='eventCancellation'>I can no longer attend this event due to the following reasons:</label>
                        <br>
                        <select id="eventCancellation" name="eventCancellation" autofocus data-validate="required, value">
                            <option value="" selected="choose">Choose..</option>
                            <option value="death-in-the-family">Accident</option>
                            <option value="accident">Death of immediate Family Member</option>
                            <option value="injury">Travel Delay to Event</option>
                            <option value="sickness">Travel Delay preventing pickup of tickets</option>
                            <option value="death">Jury Duty</option>
                            <option value="event-cancelled">Strike, Riot, Terrorism or Civil Commotion</option>
                            <option value="">Severe Adverse Weather</option>
                            <option value="">Venue Unavailability</option>
                            <option value="">Military Deployment</option>
                            <option value="">Inability to attend a rescheduled event</option>
                        </select>

                        <div class="file-upload">
                            <input name="fileToUpload" type="file" id="fileToUpload">
                        </div>

                        <button class="btn btn-lg btn-primary btn-submit" type="submit">Submit My Claim</button>
                    </div>
                    <!-- form group -->
                </form>
            </div>
            <!-- form wrapper -->
        </div>
        <!-- end main content -->
    </div>
    <!-- end col -->


<?php include("includes/refund-sidebar.php"); ?>

<?php include("includes/footer.php"); ?>

document.addEventListener('DOMContentLoaded', function() {
    var registrationError = <?php echo isset($registrationError) ? json_encode($registrationError) : 'null'; ?>;

    if (registrationError !== null) {
        // Choose the container where you want to display the error message
        var errorContainer = $('#error-container'); // Replace with the actual ID or class of your container

        // Show the error message in the chosen container
        errorContainer.show();
        errorContainer.html('<div class="fade_error alert alert-danger" role="alert"><button aria-hidden="true" data-dismiss="alert" class="close" type="button">&times;</button><strong>Error!</strong> ' + registrationError + '</div>');

        // You can also add a click event to hide the error message when the close button is clicked
        errorContainer.find('.fade_error .close').click(function() {
            errorContainer.hide();
        });
    }
});

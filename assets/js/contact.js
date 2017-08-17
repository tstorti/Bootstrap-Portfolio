jQuery(document).ready( function ($)  {
    
    // init the validator

    $('#contact-form').validator();

    // when the form is submitted
    $('#contact-form').on('submit', function (e) {

        // if the validator does not prevent form submit
        if (!e.isDefaultPrevented()) {
            var url = "http://www.tonystorti.com//contact.php";
            console.log($(this).serialize());
            // POST values in the background the the script URL
            $.ajax({
                type: "POST",
                url: url,
                data: $(this).serialize(),
                success: function (data)
                {
                    console.log("message sent");
                }
            });
            return false;
        }
    })
});
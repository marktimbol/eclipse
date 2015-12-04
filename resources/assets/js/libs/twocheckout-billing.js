
// Called when token created successfully.
var successCallback = function(data) {
    var billingForm = document.getElementById('billing-form');

    // Set the token as the value for the token input
    //billingForm.token.value = data.response.token.token;

    $('<input>', {
        type: 'hidden',
        name: 'token',
        value: data.response.token.token
    }).appendTo(billingForm);	        

    // IMPORTANT: Here we call `submit()` on the form element directly instead of using jQuery to prevent and infinite token request loop.
    billingForm.submit();
};

// Called when token creation fails.
var errorCallback = function(data) {
    if (data.errorCode === 200) {tokenRequest();} else {alert(data.errorMsg);}
};

var tokenRequest = function() {
    // Setup token request arguments
    var args = {
        sellerId: $('meta[name="twocheckout-account-number"]').attr('content'),
        publishableKey: $('meta[name="twocheckout-public-key"]').attr('content'),
        ccNo: $("#cc-number").val(),
        cvv: $("#cvc").val(),
        expMonth: $("#expiryMonth").val(),
        expYear: $("#expiryYear").val()
    };

    console.log(args);

    // Make the token request
    TCO.requestToken(successCallback, errorCallback, args);
};

$(function() {
    // Pull in the public encryption key for our environment
    TCO.loadPubKey('sandbox');

    $("#billing-form").submit(function(e) {
        // Call our token request function
        tokenRequest();

        // Prevent form from submitting
        return false;
    });
});
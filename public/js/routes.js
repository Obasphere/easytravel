$("#fromLocation").on("change", function() {
    let selectedOption = $("#fromLocation option:selected").text();

    let baseUrl = $("#baseUrl").attr("data-url");

    $.ajax({
        url: baseUrl + "?from=" + selectedOption,
        verb: "GET",

        success: function (response) {
            let toLocation = $("#toLocation");

            //clear the previous options
            toLocation.empty();

            //collect response data
            let options = response.data;

            for (item of options) {
                toLocation.append("<option value='"+item+"'>"+item+"</option>");
            }

            console.log("It works yay!!!");
        },

        error: function(response) {
            window.alert(response.error);
        }
    })
});

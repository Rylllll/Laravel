var availableTags = [];

$.ajax({
    method: "GET",
    url: "/places-list",
    success: function(response) {
        console.log(response)
        startAutoComplete(response);
    }

});

function startAutoComplete(availableTags) {
    $("#search_places").autocomplete({
        source: availableTags,
        select: function(event, ui) {
            window.location.href = ui.item.url;
        },
        open: function(event, ui) {
            $('.ui-autocomplete').addClass('ui-front');
        }
    }).data("ui-autocomplete")._renderItem = function(ul, item) {
        return $("<li>")
            .append("<div><a href='" + item.url + "'>" + item.label + "</a></div>")
            .appendTo(ul);
    };
}
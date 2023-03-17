$(document).ready(function() {
    // use AJAX to fetch the data
    $.ajax({
        url: "get_data.php",
        dataType: "json",
        success: function(data) {
            // create an empty container to hold the data
            var $container = $("<div>").addClass("container");

            // loop through the data and add each row to the container
            $.each(data, function(index, row) {
                var $rowDiv = $("<div>").addClass("row");
                var $imageDiv = $("<div>").addClass("col").html("<div style='position:relative'><img src='" + row.image + "'class='rounded-lg gap-3 mx-auto mb-6 cursor-pointer'><button class='btn-see-more text-white bg-black p-4 rounded-lg' style='position:absolute; bottom:10px; right:10px;'>See More</button></div>");

                // create a hidden div that contains the title and about information
                var $hiddenDiv = $("<div>").addClass("hidden");
                var $title = $("<h2>").text(row.title).addClass("text-center font-bold text-2xl mb-4");
                var $about = $("<p>").text(row.about).addClass("text-center text-lg mb-4");
                $hiddenDiv.append($title, $about);

                // append the hidden div and image div to the row div
                $rowDiv.append($hiddenDiv, $imageDiv);
                $container.append($rowDiv);
            });

            // append the container to the data-container element in the HTML
            $("#data-container").append($container);

            // add click event to the "See More" button
            $(".btn-see-more").on("mouseenter", function() {
                $(this).css("opacity", "100");
            }).on("mouseleave", function() {
                $(this).css("opacity", "0");
            }).on("click", function() {
                // get the parent row div and its title and about information
                var $row = $(this).closest(".row");
                var title = $row.find("h2").text();
                var about = $row.find("p").text();

                // get the parent image element and its source
                var $image = $(this).parent().find("img");
                var src = $image.attr("src");

                // show the image, title, and about in a modal dialog
                Swal.fire({
                    imageUrl: src,
                    imageAlt: "Image",
                    title: "<div class='text-left text-black'>" + title + "</div>",
                    confirmButtonText: "<button type='button'>Close</button>",
                    html: "<div class='text-left'>" + about + "</div>",
                    customClass: {
                        image: "rounded-lg",
                        content: "text-center",
                        popup: "p-6",
                        closeButton: "text-white",
                        showClass: "animate__animated animate__fadeInUp"
                    }
                });

            });

        }
    });
});





// $(document).ready(function() {
//     // use AJAX to fetch the data
//     $.ajax({
//         url: "get_data.php",
//         dataType: "json",
//         success: function(data) {
//             // create an empty container to hold the data
//             var $container = $("<div>").addClass("container");

//             // loop through the data and add each row to the container
//             $.each(data, function(index, row) {
//                 var $rowDiv = $("<div>").addClass("row");
//                 var $imageDiv = $("<div>").addClass("col");

//                 // create a new image element with a click event listener
//                 var $image = $("<img>").attr("src", row.image)
//                     .addClass("rounded-lg gap-3 mx-auto mb-6 cursor-pointer")
//                     .on("click", function() {
//                         $("#modal-image").attr("src", row.image);
//                         $(".modal-container").css("display", "block");
//                     });

//                 $imageDiv.append($image);
//                 $rowDiv.append($imageDiv);
//                 $container.append($rowDiv);
//             });

//             // append the container to the data-container element in the HTML
//             $("#data-container").append($container);
//         }
//     });

//     // add a click event listener to the modal close button
//     $(".close").on("click", function() {
//         $(".modal-container").css("display", "none");
//     });
// });
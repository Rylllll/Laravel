// $(document).ready(function() {
//     // use AJAX to fetch the data
//     $.ajax({
//         url: "get_data.php",
//         dataType: "json",
//         success: function(data) {
//             // loop through the data and add each row to the table
//             $.each(data, function(index, row) {
//                 var $tr = $("<tr>").append(
//                     $("<td>").text(row.id),
//                     $("<td>").text(row.title),
//                     $("<td>").html("<img src='" + row.image + "'>"),
//                     $("<td>").text(row.about)
//                 );
//                 $("#data-table tbody").append($tr);
//             });
//         }
//     });
// });

// $(document).ready(function() {
//     // use AJAX to fetch the data
//     $.ajax({
//         url: "get_data.php",
//         dataType: "json",
//         success: function(data) {
//             // loop through the data and add each row to the table
//             $.each(data, function(index, row) {
//                 var $deleteButton = $("<button>").text("Delete").addClass("p-2 bg-black text-white border border-red-600 rounded-lg");
//                 var $updateButton = $("<button>").text("Update").addClass("p-2 bg-black text-white border border-green-600 rounded-lg ml-2");
//                 var $buttonsContainer = $("<div>").addClass("flex").append($deleteButton, $updateButton);
//                 var $tr = $("<tr>").append(
//                     $("<td>").addClass("w-1/4 px-4 py-2 border-black").text(row.id),
//                     $("<td>").addClass("w-1/4 px-4 py-2 border-black").text(row.title),
//                     $("<td>").addClass("w-1/5 px-4 py-2 border-black").html("<img src='" + row.image + "' class='w-full h-full object-contain'>"),
//                     $("<td>").addClass("w-1/4 px-4 py-2 border-black").text(row.about),
//                     $("<td>").append($buttonsContainer)
//                 );
//                 $("#data-table tbody").append($tr);

//                 $deleteButton.on("click", function() {
//                     // show SweetAlert confirmation dialog
//                     Swal.fire({
//                         title: "Are you sure?",
//                         text: "You won't be able to revert this!",
//                         icon: "warning",
//                         showCancelButton: true,
//                         confirmButtonColor: "#3085d6",
//                         cancelButtonColor: "#d33",
//                         confirmButtonText: "Yes, delete it!"
//                     }).then((result) => {
//                         // send AJAX request to server to delete row from database if user confirms
//                         if (result.value) {
//                             $.ajax({
//                                 url: "delete_data.php",
//                                 type: "POST",
//                                 data: { id: row.id },
//                                 success: function() {
//                                     // remove row from table and show success message
//                                     $tr.remove();
//                                     Swal.fire("Deleted!", "Your file has been deleted.", "success");
//                                 },
//                                 error: function() {
//                                     // show error message
//                                     Swal.fire("Error deleting row from database", "", "error");
//                                 }
//                             });
//                         }
//                     });
//                 });

//                 $updateButton.on("click", function() {
//                     // show a form or a modal to edit the row's data
//                     // once the user submits the form or saves the changes, send an AJAX request to update the row's data in the database
//                     // you can use the same technique as the delete button to handle success and error cases
//                 });
//             });
//         }
//     });
// });

// $(document).ready(function() {
//     // use AJAX to fetch the data
//     $.ajax({
//         url: "get_data.php",
//         dataType: "json",
//         success: function(data) {
//             // loop through the data and add each row to the table
//             $.each(data, function(index, row) {
//                 var $deleteButton = $("<button>").text("Delete").addClass("p-2 bg-black text-white border border-red-600 rounded-lg");
//                 var $updateButton = $("<button>").text("Update").addClass("p-2 bg-black text-white border border-green-600 rounded-lg ml-2");
//                 var $buttonsContainer = $("<div>").addClass("flex").append($deleteButton, $updateButton);
//                 var $tr = $("<tr>").append(
//                     $("<td>").addClass("w-1/4 px-4 py-2 border-black").text(row.title),

//                     $("<td>").addClass("w-1/5 px-4 py-2 border-black").html("<img src='" + row.image + "' class='w-full h-full object-contain rounded-lg' style='display:flex; align-items:center; text-align:center;'>"),

//                     $("<td>").addClass("w-1/4 px-4 py-2 border-black").text(row.about),
//                     $("<td>").append($buttonsContainer)

//                 );
//                 $("#data-table tbody").append($tr);

//                 $deleteButton.on("click", function() {
//                     // show SweetAlert confirmation dialog
//                     Swal.fire({
//                         title: "Are you sure?",
//                         text: "You won't be able to revert this!",
//                         icon: "warning",
//                         showCancelButton: true,
//                         confirmButtonColor: "#3085d6",
//                         cancelButtonColor: "#d33",
//                         confirmButtonText: "Yes, delete it!"
//                     }).then((result) => {
//                         // send AJAX request to server to delete row from database if user confirms
//                         if (result.value) {
//                             $.ajax({
//                                 url: "delete_data.php",
//                                 type: "POST",
//                                 data: { id: row.id },
//                                 success: function() {
//                                     // remove row from table and show success message
//                                     $tr.remove();
//                                     Swal.fire("Deleted!", "Your file has been deleted.", "success");
//                                 },
//                                 error: function() {
//                                     // show error message
//                                     Swal.fire("Error deleting row from database", "", "error");
//                                 }
//                             });
//                         }
//                     });
//                 });

//                 $updateButton.on("click", function() {
//                     // create the modal HTML
//                     var $modal = $("<div>").addClass("fixed top-0 left-0 w-full h-full bg-black bg-opacity-50 flex items-center justify-center z-50");
//                     var $modalContent = $("<div>").addClass("bg-white rounded-lg p-6 md:p-8 md:grid md:grid-cols-3 md:gap-6").appendTo($modal);
//                     var $modalCol1 = $("<div>").addClass("md:col-span-1").appendTo($modalContent);
//                     var $modalCol2 = $("<div>").addClass("mt-5 md:mt-0 md:col-span-2").appendTo($modalContent);
//                     var $modalTitle = $("<h3>").addClass("text-lg font-medium leading-6 text-gray-900").text("Edit").appendTo($modalCol1);
//                     var $modalDesc = $("<p>").addClass("mt-1 text-sm text-gray-600").text("This information will be displayed publicly so be careful what you share.").appendTo($modalCol1);
//                     var $form = $("<form>").attr("id", "form").attr("enctype", "multipart/form-data").appendTo($modalCol2);

//                     // add your form fields to the form
//                     // example field: title
//                     $("<label>").addClass("block text-sm font-medium text-gray-700").text("Title").appendTo($form);
//                     $("<input>").addClass("mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md").attr("type", "text").attr("name", "title").attr("value", $row.find("td:eq(0)").text()).appendTo($form);

//                     // show the modal
//                     $("body").append($modal);

//                     // handle the form submission
//                     $form.on("submit", function(event) {
//                         event.preventDefault();

//                         // make an AJAX request to update the row's data in the database
//                         $.ajax({
//                             url: "update_data.php",
//                             type: "POST",
//                             data: new FormData(this),
//                             processData: false,
//                             contentType: false,
//                             success: function(response) {
//                                 // hide the modal
//                                 $modal.remove();

//                                 // show success message
//                                 Swal.fire("Updated!", "Your file has been updated.", "success");

//                                 // update the row in the table
//                                 // you can use the same technique as the delete button to handle success and error cases
//                             },
//                             error: function() {
//                                 // show error message
//                                 Swal.fire("Error updating row in database", "", "error");
//                             }
//                         });
//                     });
//                 });

//             });
//             $(".image").each(function() {
//                 // set the width and height of all images to the same size
//                 $(this).css({
//                     "width": "200px",
//                     "height": "200px"
//                 });
//             });
//         }
//     });
// });
$(document).ready(function() {
    // use AJAX to fetch the data
    $.ajax({
        url: "get_data.php",
        dataType: "json",
        success: function(data) {
            // loop through the data and add each row to the table
            $.each(data, function(index, row) {
                var $deleteButton = $("<button>").text("Delete").addClass("p-2 bg-black text-white border border-red-600 rounded-lg");
                var $updateButton = $("<button>").text("Update").addClass("p-2 bg-black text-white border border-green-600 rounded-lg ml-2");
                var $buttonsContainer = $("<div>").addClass("flex").append($deleteButton, $updateButton);

                var $row = $("<tr>").addClass("border-b border-black").append(
                    // table cells...
                    $("<td>").addClass("w-1/4 px-4 py-2 border border-black hidden").text(row.id),
                    $("<td>").addClass("w-1/4 px-4 py-2 border border-black").text(row.title),

                    $("<td>").addClass("w-1/5 px-4 py-2 border border-black").html("<img src='" + row.image + "' class='w-full h-full object-contain rounded-lg' style='display:flex; align-items:center; text-align:center;'>"),

                    $("<td>").addClass("w-1/4 px-4 py-2 border border-black").text(row.about),
                    $("<td>").append($buttonsContainer)

                );
                $("#data-table tbody").append($row);

                $deleteButton.on("click", function() {
                    // show SweetAlert confirmation dialog
                    Swal.fire({
                        title: "Are you sure?",
                        text: "You won't be able to revert this!",
                        icon: "warning",
                        showCancelButton: true,
                        confirmButtonColor: "#3085d6",
                        cancelButtonColor: "#d33",
                        confirmButtonText: "Yes, delete it!"
                    }).then((result) => {
                        // send AJAX request to server to delete row from database if user confirms
                        if (result.value) {
                            $.ajax({
                                url: "delete_data.php",
                                type: "POST",
                                data: { id: row.id },
                                success: function() {
                                    // remove row from table and show success message
                                    $row.remove();
                                    Swal.fire("Deleted!", "Your file has been deleted.", "success");
                                },
                                error: function() {
                                    // show error message
                                    Swal.fire("Error deleting row from database", "", "error");
                                }
                            });
                        }
                    });
                });

                $updateButton.on("click", function() {
                    var $modal = $("<div>").addClass("fixed top-0 left-0 w-full h-full bg-gray-800 bg-opacity-75 flex items-center justify-center z-50");
                    var $modalContent = $("<div>").addClass("bg-white rounded-lg p-6 md:p-8 md:grid md:grid-cols-3 md:gap-6").appendTo($modal);
                    var $modalCol1 = $("<div>").addClass("md:col-span-1").appendTo($modalContent);
                    var $modalCol2 = $("<div>").addClass("mt-5 md:mt-0 md:col-span-2").appendTo($modalContent);
                    var $modalTitle = $("<h3>").addClass("text-lg font-medium leading-6 text-gray-900").text("Update table").appendTo($modalCol1);
                    var $modalDesc = $("<p>").addClass("mt-1 text-sm text-gray-600").text("This information will be displayed publicly so be careful what you share.").appendTo($modalCol1);
                    var $form = $("<form>").attr("id", "id").attr("enctype", "multipart/form-data").appendTo($modalCol2);

                    // add form fields to the form

                    $("<input>").attr("type", "hidden").attr("name", "submit").attr("value", "true").appendTo($form);

                    $("<input>").addClass("hidden").attr("type", "text").attr("name", "postId").attr("value", $row.find("td:eq(0)").text()).appendTo($form);
                    $("<label>").addClass("block text-sm font-medium text-gray-700").text("Title").appendTo($form);
                    $("<input>").addClass("mt-1 focus:ring-blue-500 focus:border-blue-500 block shadow-sm sm:text-sm border-gray-300 rounded-md").attr("type", "text").attr("name", "title").attr("value", $row.find("td:eq(1)").text()).appendTo($form);

                    $("<label>").addClass("block text-sm font-medium text-gray-700").text("About").appendTo($form);
                    $("<textarea>").addClass("mt-1 focus:ring-blue-500 focus:border-blue-500 block w-full shadow-sm sm:text-sm border-gray-300 rounded-md").attr("name", "about").text($row.find("td:eq(3)").text()).appendTo($form);

                    $("<label>").addClass("block text-sm font-medium text-gray-700").text("Image").appendTo($form);
                    $("<input>").addClass("mt-1 focus:ring-blue-500 focus:border-blue-500 block shadow-sm sm:text-sm border-gray-300 rounded-md").attr("type", "file").attr("name", "image").appendTo($form);

                    // add buttons
                    var $buttonContainer = $("<div>").addClass("mt-4 flex justify-end").appendTo($form);
                    $("<button>").addClass("px-4 py-2 bg-gray-200 text-gray-700 rounded-lg hover:bg-gray-300").text("Cancel").on("click", function() {
                        $modal.remove();
                    }).appendTo($buttonContainer);

                    $("<button>").addClass("ml-2 px-4 py-2 bg-black text-white rounded-lg hover:bg-blue-200").text("Save").attr("type", "submit").appendTo($buttonContainer);

                    // show modal
                    $("body").append($modal);

                    // handle form submission
                    $("#id").submit(function(e) {
                        e.preventDefault();
                        var formData = new FormData(this);

                        // make AJAX request to update row's data in the database
                        $.ajax({
                            url: "update.php",
                            type: "POST",
                            data: formData,
                            processData: false,
                            contentType: false,
                            success: function(data) {
                                // update table row with new data
                                $row.find("td:eq(1)").text(formData.get("title"));
                                $row.find("td:eq(3)").text(formData.get("about"));
                                // display success message
                                Swal.fire({
                                    title: "Success in updating the table",
                                    icon: "success",
                                    showCancelButton: false,
                                    confirmButtonColor: "#3085d6",
                                    confirmButtonText: "OK",
                                }).then((result) => {
                                    // reload page on OK click
                                    if (result.isConfirmed) {
                                        location.reload();
                                    }
                                });

                                // remove modal
                                $modal.remove();
                            },
                            error: function(xhr, status, error) {
                                // show error message
                                Swal.fire("Error updating row in database ", error);
                            }
                        });
                    });


                });


            });
            $(".image").each(function() {
                // set the width and height of all images to the same size
                $(this).css({
                    "width": "200px",
                    "height": "200px"
                });
            });
        }
    });
});
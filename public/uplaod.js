const form = document.getElementById('form');

form.addEventListener('submit', function(e) {
    e.preventDefault();
    formSubmit();
})

function formSubmit() {
    let formData = new FormData(form);

    // Check if the uploaded file is a photo (JPEG, PNG, or GIF)
    let fileInput = document.getElementById('picture');
    let file = fileInput.files[0];
    let fileType = file.type;
    if (!(fileType == 'image/jpeg' || fileType == 'image/png' || fileType == 'image/gif')) {
        Swal.fire({
            title: 'Invalid file type!',
            text: 'Please upload a JPEG, PNG, or GIF file.',
            icon: 'error',
            confirmButtonText: 'OK'
        });
        return;
    }

    $.ajax({
        url: 'upload.php',
        type: 'POST',
        data: formData,
        contentType: false,
        processData: false,
        success: function(res) {
            Swal.fire({
                title: 'Upload successful!',
                text: res,
                icon: 'success',
                confirmButtonText: 'OK'
            }).then(() => {
                location.reload();
            });
        }
    })
}


function previewImage(event) {
    const reader = new FileReader();
    reader.onload = function() {
        const previewImg = document.getElementById("preview-img");
        previewImg.src = reader.result;
    };
    reader.readAsDataURL(event.target.files[0]);

    const fileNameInput = document.getElementById("filename");
    fileNameInput.value = event.target.files[0].name;

    // Set the size of the image
    const previewImg = document.getElementById("preview-img");
    previewImg.classList = "w-10 h-10"; // Set the width and height to 32 pixels
}
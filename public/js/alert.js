const fileInput = document.getElementById('image');
fileInput.addEventListener('change', (event) => {
    const file = event.target.files[0];
    if (!file) return;

    const fileType = file.type;
    const fileSize = file.size;

    // Check file type
    if (!fileType.match('image.*')) {
        swal({
            title: 'Invalid File Type',
            text: 'Only images are allowed',
            icon: 'warning',
        });
        fileInput.value = '';
        return;
    }

    // Check file size
    const maxSize = 10 * 1024 * 1024; // 10 MB
    if (fileSize > maxSize) {
        swal({
            title: 'File Too Large',
            text: 'Please choose a file smaller than 10 MB',
            icon: 'warning',
        });
        fileInput.value = '';
        return;
    }
});


var loadFile = function(event){
    var output = document.getElementById('output');
    output.src = URL.createObjectURL(event.target.files[0]);
}
swal({
    title: "{{ Session::get('flash_message.title') }}",
    text: "{{ Session::get('flash_message.message') }}",
    icon: "{{ Session::get('flash_message.type') }}",
    timer: 3000 // Set the timer for the message to close automatically after 3 seconds
});
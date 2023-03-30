
@section('scripts')
@if (session()->has('confirmation_message'))
    <script>
        swal({
            title: "{{ session('confirmation_message.title') }}",
            text: "{{ session('confirmation_message.text') }}",
            type: "{{ session('confirmation_message.type') }}",
            confirmButtonText: "{{ session('confirmation_message.confirmButtonText') }}",
            cancelButtonText: "{{ session('confirmation_message.cancelButtonText') }}",
            showCancelButton: {{ session('confirmation_message.showCancelButton') ? 'true' : 'false' }},
            focusCancel: {{ session('confirmation_message.focusCancel') ? 'true' : 'false' }}
        })
        .then((willDelete) => {
            if (willDelete) {
                // User clicked on "Yes, delete it!" button
                // Do the deletion logic here and then redirect to the uploads page
                window.location.href = "{{ route('uploads.destroy', ['id' => $item->id]) }}";
            } else {
                // User clicked on "Cancel" button
                // Redirect back to the uploads page
                window.location.href = "{{ route('uploads.index') }}";
            }
        });
    </script>
@endif
@endsection
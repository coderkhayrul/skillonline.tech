// Custom Image Upload Live Preview
$("#input_image").change(function () {
    let reader = new FileReader();
    reader.onload = (e) => {
        $("#input_image_preview").attr("src", e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
});

$(document).ready(function () {
    $('.delete-button').click(function (e) {
        e.preventDefault();
        var slug = $(this).data('id');
        Swal.fire({
            title: "Are you sure?",
            text: "You won't be able to revert this!",
            icon: "warning",
            showCancelButton: !0,
            confirmButtonText: "Yes, delete it!",
            cancelButtonText: "No, cancel!",
            confirmButtonClass: "btn btn-success mt-2",
            cancelButtonClass: "btn btn-danger ms-2 mt-2",
            buttonsStyling: !1
        }).then(function (t) {
            if (t.value) {
                $('delete-form-' + slug).submit();
            } else {
                t.dismiss === Swal.DismissReason.cancel && Swal.fire({
                    title: "Cancelled",
                    text: "Your imaginary file is safe :)",
                    icon: "error"
                })
            }
        })

    });
});

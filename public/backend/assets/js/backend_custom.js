// Custom Image Upload Live Preview
$("#input_image").change(function () {
    let reader = new FileReader();
    reader.onload = (e) => {
        $("#input_image_preview").attr("src", e.target.result);
    };
    reader.readAsDataURL(this.files[0]);
});

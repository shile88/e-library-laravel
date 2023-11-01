<script src="/js/jquery.min.js"></script>
<script src="/js/multiple-select.min.js"></script>
<script src="/js/app.js"></script>


{{-- Custom scripts --}}
<script>
    // Multiple select function
    $('.multiple-select').multipleSelect();

    // Loads and shows uploaded book image
    function loadBookImage(event) {
        var imgOut = document.getElementById('image-upload-output');
        imgOut.style.display = "block";

        // If image exists show it on the page, otherwise show default picture
        if (event.target.files[0]) {
            imgOut.src = URL.createObjectURL(event.target.files[0]);
        } else {
            imgOut.src = getDefaultBookPicturePath();
        }
    };

    // Is called by a button press and removes image preview from imgOut element
    function removeUploadedBookImage() {
        var imgIn = document.getElementById('image-upload-input');
        var imgOut = document.getElementById('image-upload-output');

        // If image is uploaded remove it
        if (imgIn.files.length) {
            imgIn.value = null;
            imgOut.src = getDefaultBookPicturePath();
        }
    }
</script>

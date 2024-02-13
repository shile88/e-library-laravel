<script src="/js/jquery.min.js"></script>
<script src="/js/multiple-select.min.js"></script>
<script src="/js/app.js"></script>


{{-- Custom scripts --}}
<script>
    // Multiple select function
    $('.multiple-select').multipleSelect();

    // Loads and shows uploaded book/author/user image
    function loadUploadedImage(event, model = 'book') {
        var imgOut = document.getElementById('image-upload-output');

        // If image exists show it on the page, otherwise show default picture
        if (event.target.files[0]) {
            imgOut.src = URL.createObjectURL(event.target.files[0]);
            return;
        }

        if (model == 'book') {
            imgOut.src = getDefaultBookPicturePath();
            return;
        }

        imgOut.src = getDefaultUserPicturePath();
    };

    // Is called by a button press and removes image preview from imgOut element
    function removeUploadedImage(event, model = 'book') {
        var imgIn = document.getElementById('image-upload-input');
        var imgOut = document.getElementById('image-upload-output');

        // If image is uploaded remove it
        imgIn.value = null;

        if (model == 'book') {
            imgOut.src = getDefaultBookPicturePath();
        } else {
            imgOut.src = getDefaultUserPicturePath();
        }
    }

    function getDefaultBookPicturePath() {
        return "{{ getDefaultBookPicturePath() }}";
    }

    function getDefaultUserPicturePath() {
        return "{{ getDefaultUserPicturePath() }}";
    }
</script>

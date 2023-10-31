<script src="/js/jquery.min.js"></script>
<script src="/js/multiple-select.min.js"></script>
<script src="/js/app.js"></script>


{{-- Custom scripts --}}
<script>
    $('.multiple-select').multipleSelect();

    function loadBookImage(event) {
        var imgOut = document.getElementById('image-upload-output');
        imgOut.style.display = "block";

        if (event.target.files[0]) {
            imgOut.src = URL.createObjectURL(event.target.files[0]);
        } else {
            imgOut.src = "{{ asset(\App\Models\Book::DEFAULT_BOOK_PICTURE_PATH) }}";
        }
    };

    function removeUploadedBookImage() {
        var imgIn = document.getElementById('image-upload-input');
        var imgOut = document.getElementById('image-upload-output');

        if (imgIn.files.length) {
            imgIn.value = null;
            // imgOut.src = '/images/book.jpg';
            imgOut.src = "{{ asset(\App\Models\Book::DEFAULT_BOOK_PICTURE_PATH) }}";
        }
    }
</script>

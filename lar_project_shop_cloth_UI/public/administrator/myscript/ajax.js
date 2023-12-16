$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var imageCount = 0;
    /* add code vào cho nó ẩn hiện, id là add-image*/
    $("#add-image").click(function() {
        imageCount++;

        var newRow = `
            <div class="row d-flex align-items-center">
                <div class="col-md-2">
                    <img src="http://localhost:8000/administrator/image-default.png" width="100%" id="image-${imageCount}">
                </div>
                <div class="col-md-8">
                    <input type="file" name="images[]" class="form-control" data-image="${imageCount}">
                </div>
                <div class="col-md-2">
                    <button type="button" class="btn btn-danger w-100 delete-image" data-image="${imageCount}">
                        <i class="fas fa-minus"></i>
                    </button>
                </div>
            </div>
        `;
        $(".group-image-detail").append(newRow);
    });
    /* Khi đối tượng ảo được sinh ra từ jquery thì ko đc sử dụng click, mà phải on */
    $(".group-image-detail").on('click', '.delete-image', function() {
        var imageNumber = $(this).data("image");/* lấy data-image thì để là data("image")  */
        $("#image-" + imageNumber).closest(".row").remove();/* kiếm thẻ row gần nhất để remove */
    }); /* click vô ai, click vo thằng thẻ button có chứa class delete-image */

    $(".group-image-detail").on('change', 'input[name="images[]"]', function() {
        var imageNumber = $(this).data("image");/* lấy data-image thì để là data("image")  */
        var file = this.files[0];
        if(file){
            var reader = new FileReader();
            reader.onload = function(e){
                $("#image-" + imageNumber).attr("src", e.target.result)
            }
            reader.readAsDataURL(file);
        }
    }); /* click vô ai, click vo thằng thẻ button có chứa class delete-image */

//Current image: 
$(document).ready(function() {
    $('.file_old').change(function (){
        var file = $(this)[0].files[0];
        var number = $(this).data('image')
        var url = $(this).data('url')

        if(file){
            var reader = new FileReader();
            reader.onload = function(e){
                $("#image-" + number).attr("src", e.target.result)
            }
            reader.readAsDataURL(file);
        }

        uploadImage (file,url)
    });
});

function uploadImage (file,url) {
var formData = new FormData();
formData.append('image',file);

$.ajax({
    url: url,
    type: 'POST',
    data: formData,
    processData: false,
    contentType: false,
    success: function(res){
        console.log(res)
    }
})
}
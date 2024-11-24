<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Bootstrap -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.0/css/bootstrap.min.css'
        integrity='sha512-XWTTruHZEYJsxV3W/lSXG1n3Q39YIWOstqvmFsdNEEQfHoZ6vm6E9GK2OrF6DSJSpIbRbi+Nn0WDPID9O7xB2Q=='
        crossorigin='anonymous' />
</head>

<body>
    <div class="container">
        <h2>HELLO AJAX UPLOAD FILES USING JQUERY</h2>
        <form onsubmit="uploadImage(this)" action="" method="post" enctype="multipart/form-data">
            <input type="text" name="name" id="" value="">
            <input type="file" multiple name="images[]" id="">
            <input type="submit" name="uploadbtn" value="Upload images">
        </form>
        <div class="p-3">
            <p>Show Image</p>
            <div class="">
                <img class="image" src="" alt="">
            </div>
        </div>
    </div>
</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/js/bootstrap.min.js"
    integrity="sha512-1/RvZTcCDEUjY/CypiMz+iqqtaoQfAITmNSJY17Myp4Ms5mdxPS5UV7iOfdZoxcGhzFbOm6sntTKJppjvuhg4g=="
    crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js'
    integrity='sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA=='
    crossorigin='anonymous'></script>
<script>
// $.ajax({
//     type: "method",
//     url: "url",
//     data: "data",
//     dataType: "dataType",
//     success: function(response) {

//     }
// });

// $.get('action.php', function(res) {
//     console.log('res: ', res);
//     const response = JSON.parse(res);
//     console.log('res: ', response);
// })
// var data = {
//     id: 2,
//     name: 'Sang',
// }

// // data = JSON.stringify(data);

// $.post('action.php', data, function(res) {
//     // console.log('res ', res);

//     console.log('res: ', res);

// })

function uploadImage(currentForm) {
    event.preventDefault();
    console.log($(currentForm).serializeArray());
    const imageInput = currentForm.elements["images"];
    console.log($('form'));
    const formData = new FormData(currentForm);
    // formData.append('image', imageInput.files);
    console.log(formData);

    // return;
    $.ajax({
        type: "POST",
        url: "./action.php",
        data: formData,
        // dataType: "dataType",
        contentType: false,
        processData: false,
        success: function(response) {

        }
    });
}
</script>

</html>
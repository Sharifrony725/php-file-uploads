<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<pre>
    <?php
    // print_r($_FILES);
    // exit;
    //single file uploads
        // if(isset($_FILES['image'])){
        //     if($_FILES['image']){
        //         $allowed_type = ['image/jpeg', 'image/jpg', 'image/png'];
        //         if(!in_array($_FILES['image']['type'], $allowed_type)){
        //              echo 'Invalid file type';
        //              exit;
        //         }else {
        //             move_uploaded_file($_FILES['image']['tmp_name'], 'uploads/' .$_FILES['image']['name']);
        //         }
        //     }
        // }

    //multiple file uploads at a glance
    if(isset($_FILES['image'])){
        if ($_FILES['image']) {
            foreach ($_FILES['image']['tmp_name'] as $key => $tmp_name) {
                $file_name = $_FILES['image']['name'][$key];
                $file_size = $_FILES['image']['size'][$key];
                $file_tmp_name = $_FILES['image']['tmp_name'][$key];
                $file_type = $_FILES['image']['type'][$key];
                if (move_uploaded_file($file_tmp_name, 'uploads/' . $file_name)) {
                    echo 'file uploaded successfully';
                } else {
                    echo 'failed';
                }
            }
            
        }
    }
    ?>
</pre>

<body class="bg-gray-200 p-6">
    <div class="max-w-md mx-auto bg-white p-8 border rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4 text-center">File Uploads</h2>
        <form action="" method="post" enctype="multipart/form-data">
            <!-- File Input -->
            <div class="mb-4">
                <label for="image" class="block text-sm font-medium text-gray-600">Photo</label>
                <input type="file" id="image" name="image[]" multiple class="mt-1 p-2 w-full border rounded-md">
            </div>
            <button class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                Submit
            </button>
        </form>
    </div>
</body>

</html>
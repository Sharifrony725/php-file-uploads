<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form </title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-200 p-6">
    <div class="max-w-md mx-auto bg-white p-8 border rounded-md shadow-md">
        <h2 class="text-2xl font-semibold mb-4 text-center">Example Form</h2>
        <form action="" method="post">
            <!-- Text Input -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-600">Name</label>
                <input type="text" id="name" placeholder="Enter your name" name="name" class="mt-1 p-2 w-full border rounded-md">
            </div>
            <!-- Radio Buttons -->
            <div class="mb-4">
                <label for="gender" class="block text-sm font-medium text-gray-600">Gender</label>
                <label for="male" class="inline-flex items-center">
                    <input type="radio" name="gender" value="male" class="form-radio text-indigo-600">
                    <span class="ml-2">Male</span>
                </label>
                <label for="female" class="inline-flex items-center">
                    <input type="radio" name="gender" value="female" class="form-radio text-indigo-600">
                    <span class="ml-2">Female</span>
                </label>
            </div>
            <!-- checkbox -->
            <div class="mb-4">
                <label for="subscribe" class="block text-sm font-medium text-gray-600">Subscribe</label>
                <input type="checkbox" name="subscribe" class="form-checkbox text-indigo-600">
            </div>
            <!-- date picker -->
            <div class="mb-4">
                <label for="datepicker" class="block text-sm font-medium text-gray-600">Pick a Date</label>
                <input type="date" id="name" placeholder="Pick a date" name="date" class="mt-1 p-2 w-full border rounded-md">
            </div>


        </form>
    </div>
</body>

</html>
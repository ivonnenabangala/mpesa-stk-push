<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="index.css">
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">

    <!--bootstrap-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!--bootstrap-->

</head>

<body>
    <div class="my-5 form">
        <div class="card">
            <div class="container">
                <form class="p-5">
                    <label class="form-label" for="fname">First name:</label><br>
                    <input class="form-control" type="text" id="fname" name="fname" required><br>
                    <label class="form-label" for="lname">Last name:</label><br>
                    <input class="form-control" type="text" id="lname" name="fname" required><br>
                    <label class="form-label" for="phoneNo">Mpesa number:</label><br>
                    <input class="form-control" type="number" id="phoneNo" name="phoneNo" required><br><br>
                    <input class="form-submit btn btn-primary" type="submit" value="Make payment">
                </form>
            </div>
        </div>
    </div>

    <!--bootstrap js-->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <!--bootstrap js-->


</body>

</html>
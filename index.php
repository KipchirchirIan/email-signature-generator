<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Email Signature Generator</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <h1 class="text-center">Email Signature Generator</h1>
        <br>
        <form action="#" method="post">
            <!-- Begin: Nav tabs -->
            <ul class="nav nav-tabs" role="tablist">
                <li class="nav-item">
                    <a class="nav-link active" data-toggle="tab" href="#general">General Info</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#logo">Logo/Banner</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#social">Social Media</a>
                </li>
            </ul>
            <!-- End: Nav tabs -->

            <!-- Begin: Tab panes -->
            <div class="tab-content">
                <!-- Begin: General info -->
                <div id="general" class="container tab-pane active"><br>
                    <h3>General Info</h3>
                    <section>
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" class="form-control" placeholder="Enter Name" id="name">
                        </div>
                        <div class="form-group">
                            <label for="company">Company:</label>
                            <input type="text" class="form-control" placeholder="Enter company" id="company">
                        </div>
                        <div class="form-group">
                            <label for="position">Position:</label>
                            <input type="text" class="form-control" placeholder="Enter position" id="position">
                        </div>
                        <div class="form-group">
                            <label for="department">Department:</label>
                            <input type="text" class="form-control" placeholder="Enter department" id="department">
                        </div>
                        <div class="form-group">
                            <label for="phone">Phone:</label>
                            <input type="text" class="form-control" placeholder="Enter phone" id="phone">
                        </div>
                        <div class="form-group">
                            <label for="website">Website:</label>
                            <input type="url" class="form-control" placeholder="Enter website" id="website">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" placeholder="Enter email" id="email">
                        </div>
                    </section>
                </div>
                <!-- End: General Info -->
                <!-- Begin: Logo/Banner -->
                <div id="logo" class="container tab-pane fade"><br>
                    <h3>Logo/Banner</h3>
                </div>
                <!-- End: Logo/Banner -->
                <!-- Begin: Social Media -->
                <div id="social" class="container tab-pane fade"><br>
                    <h3>Social Media</h3>
                </div>
                <!-- End: Social Media -->
            </div>
            <!-- End: Tab panes -->
            <div class="text-center p-4">
                <button class="btn btn-primary">Next</button>
            </div>
        </form>
    </div>

    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</body>

</html>
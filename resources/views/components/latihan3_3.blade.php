<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Destination</title>
    <!-- Bootstrap CSS -->
    <link href="<?php echo asset('front/css/bootstrap.min.css'); ?>" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link href="<?php echo asset('front/css/styles.css'); ?>" rel="stylesheet">
</head>
<body>
<div class="container mt-5">
        <h1 class="mb-4">Select Your Travel Destination</h1>
        <form method="post">
            <div class="form-group">
                <label for="destination">Choose a Destination:</label>
                <select class="form-control" id="destination" name="destination">
                    <option value="Las Vegas">Las Vegas</option>
                    <option value="Amsterdam">Amsterdam</option>
                    <option value="Egypt">Egypt</option>
                    <option value="Tokyo">Tokyo</option>
                    <option value="Caribbean Islands">Caribbean Islands</option>
                </select>
            </div>
            <br>
            <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
        <div class="mt-4">
            <?php
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $destination = $_POST["destination"];
                switch ($destination) {
                    case "Las Vegas":
                        echo '<div class="alert alert-info" role="alert">Bring an extra $500</div>';
                        break;
                    case "Amsterdam":
                        echo '<div class="alert alert-info" role="alert">Bring an open mind</div>';
                        break;
                    case "Egypt":
                        echo '<div class="alert alert-info" role="alert">Bring 15 bottles of SPF 50 Sunscreen</div>';
                        break;
                    case "Tokyo":
                        echo '<div class="alert alert-info" role="alert">Bring lots of money</div>';
                        break;
                    case "Caribbean Islands":
                        echo '<div class="alert alert-info" role="alert">Bring a swimsuit</div>';
                        break;
                    default:
                        echo '<div class="alert alert-warning" role="alert">Please select a destination.</div>';
                        break;
                }
            }
            ?>
        </div>
    </div>
    
    <!-- Bootstrap JS and dependencies -->
    <script src="<?php echo asset('front/js/bootstrap.bundle.min.js'); ?>"></script>
</body>
</html>

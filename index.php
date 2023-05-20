<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
    <div class="container my-5">
        <div class="card container">
            <div class="row m-5">
                <div class="col">
                    <form action="index.php" method="POST">
                        <input type="text" name="file" value="1" hidden>
                        <button class="btn btn-primary w-100" type="submit">File 1</button>
                    </form>
                </div>

                <div class="col">
                    <form action="./index.php" method="POST">
                        <input type="text" name="file" value="2" hidden>
                        <button class="btn btn-primary w-100" type="submit">File 1</button>
                    </form>
                </div>


                <div class="col">
                    <form action="./index.php" method="POST">
                        <input type="text" name="file" value="3" hidden>
                        <button class="btn btn-primary w-100" type="submit">File 1</button>
                    </form>
                </div>

                <div class="col">
                    <form action="./index.php" method="POST">
                        <button class="btn btn-secondary w-100" type="submit">Reset</button>
                    </form>
                </div>

            </div>
        </div>

        <div class="card container mt-5 p-5">
            <?php
            if (isset($_REQUEST['file'])) {
                if ($_POST['file'] == 1) {
                    echo file_get_contents('file1.txt');
                } elseif ($_POST['file'] == 2) {
                    echo file_get_contents('file2.txt');
                } elseif ($_POST['file'] == 3) {
                    echo file_get_contents('file3.txt');
                }
            }
            
            ?>
        </div>
    </div>
</body>

</html>

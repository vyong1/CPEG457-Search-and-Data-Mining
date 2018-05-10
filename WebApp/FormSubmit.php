<!DOCTYPE html>
<html>
    <head>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="static\index.js"></script>
        <link rel="stylesheet" href="static\site.css" />
    </head>
    <body>
        <div class="content">
            <div>
                <a href="index.php" class="btn btn-info" role="button">Index</a>
            </div>
            <?php
            // Clear the pipe
            $pipefile = fopen("pipe", "w") or die("Unable to open pipe");
            fclose($pipefile);

            // Write the $_POST data to the pipe
            $pipefile = fopen("pipe", "a") or die("Unable to open pipe");
            foreach($_POST as $key => $value)
            {
                fwrite($pipefile, $key .':'. $value . PHP_EOL);
            }
            fclose($pipefile);
            
            // Call appropriate python script to build up the file to the pipe
            exec('py python/HtmlBuilder.py');

            // Read the pipe file
            $pipefile = fopen("pipe", "r") or die("Unable to open pipe");
            echo fread($pipefile, filesize("pipe"));
            fclose($pipefile);
            ?>
        </div>
    </body>
</html>

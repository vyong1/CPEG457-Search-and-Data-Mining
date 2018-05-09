<!DOCTYPE html>
<html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
        <script src="static\index.js"></script>
        <link rel="stylesheet" href="static\site.css" />
    </head>
    <body>
        <div class="content">
            <a href="Index.php" class="btn btn-info" role="button">Index</a>
            <form action="FormSubmit.php" method="post">
                <div class="form-group">
                    <label for="name_input">Name</label>
                    <input type="text" class="form-control" id="name_input" name="name" placeholder="Your Name">
                </div>

                 <div class="form-group">
                    <label for="occupation_input">Occupation</label>
                    <input type="text" class="form-control" id="occupation_input" name="occupation" placeholder="Your Name">
                </div>

                <div>
                    <input type="submit">
                </div>
            </form>
        </div>
    </body>
</html>
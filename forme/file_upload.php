<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='../assets/style.css'>
        <title>Upload file</title>
    </head>
    <body>
        <div class="container">
            <h2>Unesi podatke</h2>

            <form action="#" method="POST" enctype="multipart/form-data">
                <label for="picture">Picture:</label>
                <input type="file" id="picture" name="picture" ><br><br>

                <button type="submit">Upload</button>
            </form>
        </div>
            <?php
                $uploadDir      = '/Users/admin/projects/ParcijalniIspit/uploads/'; #direktorij gdje spremamo
                $uploadFilePath = $uploadDir.basename( $_FILES['picture']['name'] );


                echo '<pre>';
                    if( move_uploaded_file( $_FILES['picture']['tmp_name'], $uploadFilePath)) { #ovo ubiti premješta iz tmp privremenog u FilePath 
                        echo 'File is valid';
                    }else {
                        echo "No bueno!";
                    }
                echo '</pre>';


            ?>
    </body>
</html>
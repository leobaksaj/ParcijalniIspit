<!DOCTYPE html>
<html lang="hr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel='stylesheet' type='text/css' media='screen' href='../assets/style.css'>
        <title>Form Page</title>
    </head>
    <body>
        <div class="container">
            <h2>Unesi podatke</h2>

            <form action="obrada.php" method="POST" enctype="multipart/form-data">
                <label for="firstname">Ime:</label>
                <input type="text" id="firstname" name="firstname" ><br><br>

                <label for="lastname">Prezime:</label>
                <input type="text" id="lastname" name="lastname" ><br><br>

                <label for="cv">Životopis:</label>
                <input type="file" id="cv" name="cv"><br><br>

                <?php if (isset($_GET['success'])): ?>
                    <p style="color: green;">Datoteka je uspešno učitana!</p>
                <?php endif; ?>

                <?php if (isset($_GET['error'])): ?>
                    <p style="color: red;">Greška pri uploadu datoteke!</p>
                <?php endif; ?>

                <button type="submit">Pošalji</button>
            </form>
        </div>
            <?php
                // include '../helpers/helpers.php';

                // $formData = $_POST;

                // if(!empty( $formData) ){
                //     printValue( "Username: ". $_POST['username'] );
                //     printValue( "Password: ". $_POST['password'] );
                // }
            ?>
    </body>
</html>
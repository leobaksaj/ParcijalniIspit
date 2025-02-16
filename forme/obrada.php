<?php 
    include '../helpers/helpers.php';

    $formData = $_POST;

    if( $_SERVER['REQUEST_METHOD'] === 'POST' ){

        if( empty( $formData['cv'] ) ){
            
            $fileTmpPath = $_FILES['cv']['tmp_name'];
            $fileInfo = finfo_open( FILEINFO_MIME_TYPE );
            $mimeType = finfo_file( $fileInfo, $fileTmpPath );
            finfo_close($fileInfo);

            if( strpos( $mimeType, 'image/' ) === 0 )
                $uploadDir = __DIR__.'/../uploads/image/';
            elseif( strpos( $mimeType, 'application/pdf' ) === 0 )
                $uploadDir = __DIR__.'/../uploads/pdf/';
            else
                $uploadDir = __DIR__.'/../uploads/other/';
            
            $uploadFile = $uploadDir.basename( $_FILES['cv']['name'] );

            if( !is_dir( $uploadDir ) )
                mkdir($uploadDir, 0777, true );

            if( move_uploaded_file( $_FILES['cv']['tmp_name'], $uploadFile ) ){
                echo 'Successfully uploaded file!';
                sleep(2);
                header("Location: http://localhost/forme/obrazac.php?success=1");
            }else{
                header("Location: http://localhost/forme/obrazac.php?error=1");
                exit();
            }  
            
        }else{
            echo "Učitajte file na prethodnom koraku";
        }


    }else{
        echo 'Nema podataka za obradu!';
    }

    // if( $_SERVER['REQUEST_METHOD'] === 'POST' ){

    //     if( empty($formData['firstname'] ) && empty($formData['lastname']) ){
    //         echo "Nepotpuni podaci!";
    //     }else {
    //         printValue( "Ime: ". htmlspecialchars( $_POST['firstname'] ) );
    //         printValue( "Prezime: ". htmlspecialchars( $_POST['lastname'] ) );
    //     }
    // }else {
    //     echo "Nema podataka za obradu";
    // }

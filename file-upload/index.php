<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Upload de fichiers</title>
</head>
<body>
    <h1>Candidature</h1>

    <h2>$_POST</h2>
    <?php var_dump($_POST); ?>
    
    <h2>$_FILES</h2>
    <?php var_dump($_FILES); ?>

    <?php
    // Traitement du fichier
    if (isset($_FILES['cv']) && $_FILES['cv']['error'] === UPLOAD_ERR_OK) {
        $cv = $_FILES['cv']; // Après je peux accéder à $cv['tmp_name'] par exemple
        $tmpFilename = $cv['tmp_name'];

        // Diverses vérifications (type, taille, etc...)

        if (is_uploaded_file($tmpFilename)) {
            move_uploaded_file($tmpFilename, __DIR__ . '/uploads/' . $cv['name']);
        }
    }
    ?>
    
    <form method="POST" enctype="multipart/form-data">
        <div>
            <input type="email" name="email" id="email" />
        </div>
        <div>
            CV : 
            <input type="file" name="cv" id="cv" />
        </div>
        <div>
            Diplômes :
            <input type="file" name="diplomes" id="diplomes" />
        </div>
        <div>
            Lettre de motivation :
            <input type="file" name="lettre_motiv" id="lettre_motiv" />
        </div>
        <hr />
            <div>
                <input type="file" name="infos[]" id="infos" multiple />
            </div>
        <hr />
        <div>
            <input type="submit" value="Envoyer" />
        </div>
    </form>

    <a href="uploads/2306_lyon_ste.pdf">Billet de train</a>
</body>
</html>
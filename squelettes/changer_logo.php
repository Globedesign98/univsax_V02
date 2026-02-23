<?php
// Inclure le fichier de connexion SQL si nécessaire
// include('connexion.php'); 

session_start();

if (!empty($_GET['id_auteur']) && is_numeric($_GET['id_auteur'])) {
    $id_auteur = intval($_GET['id_auteur']); // Protection contre l'injection SQL
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        // Vérifier si un fichier a été uploadé
        if (isset($_FILES['logo']) && $_FILES['logo']['error'] === 0) {
            $fileTmpPath = $_FILES['logo']['tmp_name'];
            $fileName = $_FILES['logo']['name'];
            $uploadDir = 'uploads/'; // Dossier de destination
            $destPath = $uploadDir . $fileName;

            if (move_uploaded_file($fileTmpPath, $destPath)) {
                // Ici, mettez à jour la base de données pour associer le logo à l'auteur
                // Exemple MySQL : UPDATE auteurs SET logo = '$destPath' WHERE id_auteur = $id_auteur;
                echo "Logo téléchargé avec succès.";
            } else {
                echo "Erreur pendant le téléchargement.";
            }
        } else {
            echo "Veuillez sélectionner un fichier.";
        }
    }
    
    ?>

    <!-- Formulaire pour uploader le logo -->
    <form action="" method="POST" enctype="multipart/form-data">
        <label for="logo">Sélectionnez un logo à télécharger :</label><br/>
        <input type="file" name="logo" id="logo" accept="image/*"><br>
        <button type="submit">Modifier Logo</button>
    </form>

    <?php
} else {
    echo "Auteur introuvable. Vérifiez l'ID.";
}
?>
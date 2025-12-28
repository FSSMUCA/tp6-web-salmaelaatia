<?php
$etablissement = "Université Cadi Ayyad";
$module = "Développement Web";
$annee = 2025;

$a = 12;
$b = 8;
$addition = $a + $b;
$multiplication = $a * $b;
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Info PHP</title>
  <style>
    body { font-family: Arial; padding: 20px; background: #f9f9f9; }
    .card { background: white; padding: 20px; border-radius: 10px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); }
  </style>
</head>
<body>
  <div class="card">
    <h1>Informations PHP</h1>
    <p><strong>Établissement :</strong> <?php echo $etablissement; ?></p>
    <p><strong>Module :</strong> <?php echo $module; ?></p>
    <p><strong>Année :</strong> <?php echo $annee; ?></p>
    <hr>
    <p><strong>Exemples numériques :</strong></p>
    <p><?php echo "$a + $b = $addition"; ?></p>
    <p><?php echo "$a × $b = $multiplication"; ?></p>
  </div>
</body>
</html>

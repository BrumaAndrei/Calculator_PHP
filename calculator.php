<!DOCTYPE html>
<html>
<head>
  <title>Calculator</title>
  <link rel="stylesheet" type="text/css" href="assets/style/stilizare.css">
</head>
<body> 
  <h1 id="title"> <?= "Acesta este un calculator simplu in PHP"?></h1>
  <div class="div">
  <form method="POST">
    <input type="number" name="primul_numar" placeholder="Introduceti primul numar" required>
    <input type="number" name="numarul_doi" placeholder="Introduceti al doi-lea numar" required>
    <select name="operatii">
      <option value="adunare">Adunare</option>
      <option value="scadere">Scadere</option>
      <option value="inmultire">Inmultire</option>
      <option value="impartire">Impartire</option>
    </select>
    
    <input type="submit" name="calculeaza" value="Calculează">
  </form>
  </div>
  <?php
    if (isset($_POST['calculeaza'])) {
      $primul_numar = $_POST['primul_numar'];
      $numarul_doi = $_POST['numarul_doi'];
      $operatii = $_POST['operatii'];
      $rezultat = 0;
      if ($operatii == 'adunare') {
        $rezultat = $primul_numar + $numarul_doi;
      } else if ($operatii == 'scadere') {
        $rezultat = $primul_numar - $numarul_doi;
      } else if ($operatii == 'inmultire') {
        $rezultat = $primul_numar * $numarul_doi;
      }  else if ($operatii == 'impartire') {
        $rezultat = $primul_numar / $numarul_doi;
      }
      if (!empty($rezultat)) {
        echo "<div id='rez'>Rezultatul calculului este: $rezultat</div>";
      }
     
    }
  ?>
</body>
</html>


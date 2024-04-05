<?php
$fileList = scandir("uploads/");

echo "<h1>Tiedostolista</h1>";
echo "Valitse tiedosto, jonka jälkeen paina haluamaasi painiketta<br/>";

echo "<form action='fileOperations.php' method='POST'>";
echo "<select name='selectedFile' size='6'>";
for ($x = 2; $x < count($fileList); $x++) {
    echo "<option value='" . htmlspecialchars($fileList[$x]) . "'>" . htmlspecialchars($fileList[$x]) . "</option>";
}
echo "</select><br/>";

echo "<input type='submit' name='submitType' value='Tulosta'><br/>";
echo "<input type='submit' name='submitType' value='Muokkaa'><br/>";
echo "<input type='submit' name='submitType' value='Poista'><br/>";
echo "</form>";
?>

<br/>
<form action="upload.php" method="post" enctype="multipart/form-data">
  Valitse lähetettävä tekstitiedosto:  <br/>
  <input type="file" name="fileToUpload" id="fileToUpload"><br/>
  <input type="submit" value="Lähetä" name="submit">
</form>


<?php
echo "MORO!!!<br/>";
?>


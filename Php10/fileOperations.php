<?php

if (isset($_POST['submitType'])) {
	echo $_POST['submitType'] . "<br/>";
	$tiedostoNimi = $_POST['selectedFile'];
	echo $tiedostoNimi . "<br/>";

	if ($_POST['submitType'] == "Tulosta") {
		// Tulosta tiedosto textareaan
		$filePath = "uploads/" . $tiedostoNimi;
		if (file_exists($filePath) && filesize($filePath) > 0) {
			echo "<textarea name='fileContents' disabled>";
			$readFile = fopen($filePath, "r");
			echo fread($readFile, filesize($filePath));
			fclose($readFile);
			echo "</textarea><br/>";
			echo "<form action='index.php' method='post'>";
			echo "<input type='submit' value='Palaa takaisin tiedostolistaan'>";
			echo "</form>";
		} else {
			echo "File not found or empty.";
		}
		
	} elseif ($_POST['submitType'] == "Muokkaa") {
		// Tulosta tiedosto textareaan, mutta salli sisällön muokkaus
		// form jossa textarea ja 2 painiketta. Painike 1 tallentaa, painike 2 palaa takaisin listanäkymään
		echo "<form action='saveEdit.php' method='POST'>";
		echo "<input type='hidden' value='" . $tiedostoNimi . "' name='fileName'>";
		echo "<textarea name='fileContents'>";
		$filePath = "uploads/" . $tiedostoNimi;

		if (file_exists($filePath)) {
			$fileContent = file_get_contents($filePath);
			echo htmlspecialchars($fileContent);
		} 
		else {}

		echo "</textarea><br/>";
		echo "<input type='submit' value='Tallenna'>";
		echo "</form>";

	} elseif ($_POST['submitType'] == "Poista") {
		// Poista valittu tiedosto
		$tiedostoNimi = $_POST['selectedFile'];
		$filePath = "uploads/" . $tiedostoNimi;

		if (file_exists($filePath)) {
			if (unlink($filePath)) {
				echo "Tiedosto poistettu onnistuneesti.";
			} else {
				echo "Tiedoston poistaminen epäonnistui.";
			}
		} else {
			echo "Tiedostoa ei löytynyt.";
		}
		echo "<form action='index.php' method='post'>";
		echo "<input type='submit' value='Palaa takaisin tiedostolistaan'>";
		echo "</form>";
	}
}

?>
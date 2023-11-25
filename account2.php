<?php


class AccountManagement {
    private $accountId;
    private $username;
    private $password;
    // andere account gerelateerde gegevens

    public function __construct($accountId, $username, $password) {
        $this->accountId = $accountId;
        $this->username = $username;
        $this->password = $password;
        // initialiseer andere gegevens van het account
    }

    public function changeUsername($newUsername) {
        // Code voor het wijzigen van de gebruikersnaam
        $this->username = $newUsername;
        // Voer de update uit in de database of sla de nieuwe gebruikersnaam op
        // Simulatie van database-updates
        return true; // Geef true terug als de update is geslaagd, anders false
    }

    public function changePassword($newPassword) {
        // Code voor het wijzigen van het wachtwoord
        $this->password = $newPassword;
        // Voer de update uit in de database of sla het nieuwe wachtwoord op
        // Simulatie van database-updates
        return true; // Geef true terug als de update is geslaagd, anders false
    }

    public function deleteAccount() {
        // Code voor het verwijderen van het account
        // Voer de verwijdering uit in de database of markeer het account als verwijderd
        // Simulatie van database-updates
        return true; // Geef true terug als verwijdering is geslaagd, anders false
    }
}

// Verwerk het wijzigingsformulier
if(isset($_POST['changeUsername'])) {
    $newUsername = $_POST['newUsername']; // Haal de nieuwe gebruikersnaam op

    // Voer controle uit op de ingevoerde gebruikersnaam
    // Hier kun je extra validatie toevoegen als dat nodig is

    // Simulatie van accountgegevens
    $account = new AccountManagement(1, 'huidigeGebruikersnaam', 'huidigWachtwoord');

    if($account->changeUsername($newUsername)) {
        echo "Gebruikersnaam succesvol gewijzigd naar " . $newUsername;
    } else {
        echo "Er is een fout opgetreden bij het wijzigen van de gebruikersnaam.";
    }
}

// Verwerk het wachtwoordwijzigingsformulier
if(isset($_POST['changePassword'])) {
    $newPassword = $_POST['newPassword']; // Haal het nieuwe wachtwoord op

    // Voer controle uit op het ingevoerde wachtwoord
    // Hier kun je extra validatie toevoegen als dat nodig is

    // Simulatie van accountgegevens
    $account = new AccountManagement(1, 'huidigeGebruikersnaam', 'huidigWachtwoord');

    if($account->changePassword($newPassword)) {
        echo "Wachtwoord succesvol gewijzigd.";
    } else {
        echo "Er is een fout opgetreden bij het wijzigen van het wachtwoord.";
    }
}

// Verwerk het verwijderingsformulier
if(isset($_POST['deleteAccount'])) {
    // Simulatie van accountgegevens
    $account = new AccountManagement(1, 'huidigeGebruikersnaam', 'huidigWachtwoord');

    if($account->deleteAccount()) {
        echo "Account succesvol verwijderd.";
    } else {
        echo "Er is een fout opgetreden bij het verwijderen van het account.";
    }
}
?>

<a href="boekingen.php">
    <button>Terug</button>
</a>

<link rel="stylesheet" href="registratie.css">

<!-- HTML-formulier voor het wijzigen van de gebruikersnaam -->
<form method="post" action="">
    <label for="newUsername">Nieuwe gebruikersnaam:</label><br>
    <input type="text" id="newUsername" name="newUsername" required><br>
    <input type="submit" name="changeUsername" value="Gebruikersnaam wijzigen">
</form>

<!-- HTML-formulier voor het wijzigen van het wachtwoord -->
<form method="post" action="">
    <label for="newPassword">Nieuw wachtwoord:</label><br>
    <input type="password" id="newPassword" name="newPassword" required><br>
    <input type="submit" name="changePassword" value="Wachtwoord wijzigen">
</form>

<!-- HTML-formulier voor het verwijderen van het account -->
<form method="post" action="">
    <input type="submit" name="deleteAccount" value="Account verwijderen">
</form>

<?php
namespace Webt\MedtCore1Review;
require './src/Salat.php';


// ÜBERBLICK SMUE MEDT CORE 1
// ===========================
// Es sollen zwei verschiedene Klassen für Gerichte (Salat bzw. Schnitzel) erstellt werden.
// Mit Hilfe dieser Klassen soll ein zufälliges Menü von 2 Gängen erstellt werden, in dem das jeweilige Gericht auch mehrfach vorkommen kann
// Es soll geprüft werden ob das zufällig erstellte Menü vegetarisch ist
// Details entnehmen Sie bitte den Aufgaben Beschreibungen

// Hinweis: Autoloading mit Composer ist für Sie vorbereitet. Falls Sie dieses verwenden wollen, vergessen Sie nicht nach Erstellen Ihrer Klassen
// bzw. Änderungen dieser den Befehl "composer dump-autoload" auf der Kommandozeile. Autoloading ist optional und NICHT zwingend notwendig

//
// AUFGABE 1
// Erstellen Sie zwei "Food" Klassen - eine beschreibt ein vegetarisches Gericht "Salat", eine ein nicht-vegetarisches Gericht "Schnitzel" -
// die das Interface FoodInterface implementieren und von der Klasse "AbstractFood" erben.

// AUFGABE 2
// Erstellen Sie eine Funktion "createRandomMenu" (direkt in der index.php), die ein zufälliges Menü mit 2 Gerichten in einem neuen Array speichert
// und dieses zurückgibt

function createRandomMenu(){
    $r = rand(1, 3);
    if ($r == 1){
        return [new Salat("salat1"), new Schnitzel("schnitzel1")];
    }
    if ($r == 2){
        return [new Salat("salat1"), new Salat("schnitzel2")];
    }
    if ($r == 3){
        return [new Schnitzel("schnitel1"), new Schnitzel("schnitzel2")];
    }
}

echo var_dump(createRandomMenu());
// (Beispiel ein Array mit den Objekten: Schnitzel / Schnitzel, oder Salat / Salat, oder Schnitzel / Salat, etc.)
// Hinweis: Die Random Funktion in PHP ist wie folgt definiert: rand(int $min, int $max): int
// Hinweis: Sollten Sie diese Aufgabe nicht lösen können, geben Sie ein fixes statt randomisiertes Menü zurück

// AUFGABE 3
// Erstellen Sie eine Funktion "isVegetarianMenu" (direkt in der index.php), die als Parameter ein (Menü) array akzeptiert,
// und zurückgibt ob das Menü vegetarisch ist.
function isVegetarianMenu($object){
    return $object->isVegetarian();
}

// AUFGABE 4
// Führen Sie das File index.php über die Command Line aus und zeigen Sie das Ergebnis vor

// AUFGABE 5
// Legen Sie ein Repository auf einem VC Server Ihrer Wahl an (zB GitHub, GitLab, etc.) und pushen Sie das Ergebnis
// auf den Branch "main"
// Sie können entweder die Files (ohne .git Verzeichnis) in ein neues Directory kopieren und von dort arbeiten oder
// einfacher mit dem Befehl
// git remote set-url <remote_name> <remote_url>
// die Ziel URL des Repositories ändern

// AUFGABE 5
// Taggen Sie den funktionalen Code mit der Version v1.0.0 in Ihrem Repository
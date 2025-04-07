<?php
class QnA
{
    private $pdo;

    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    // Metóda, ktorá nám vytvára vkladanie otázok a odpovedí
    public function getAll()
    {
        $stmt = $this->pdo->query("SELECT Otazka, Odpoved FROM uloha");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
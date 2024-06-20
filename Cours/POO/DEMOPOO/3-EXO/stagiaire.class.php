<?php

class Stagiaire {
    private string $nom;
    private string $prenom;
    private array $notes;
    public function __construct(string $nom, string $prenom, array $notes) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->notes = $notes;
    }
    public function getNom(): string {
        return $this->nom;
    }
    public function setNom($nom): void {
        $this->nom = $nom;
    }
    public function getPrenom(): string {
        return $this->prenom;
    }
    public function setPrenom($prenom): void {
        $this->prenom = $prenom;
    }
    public function getNotes():array{
        return $this->notes;
    }
    public function setNotes(array $notes): void {
        $this->notes = $notes;
    }
    public function calculerMoyenne(): float {
        return array_sum($this->notes) / count($this->notes);
    }
    public function trouverMax(): float {
        return max($this->notes);
    }
    public function trouverMin(): float {
        return min($this->notes);
    }
}


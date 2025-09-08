<?php
namespace App\Service;

class PropertyService
{
    private $maisons;
    private $appartements;

    public function __construct()
    {
     $this->maisons = [
    [
        'image' => '/images/maison1.jpg',
        'titre' => 'Maison de rêve',
        'prix' => '350000€',
        'ville' => 'Paris',
        'description' => 'Belle maison spacieuse avec jardin et garage.',
        'type' => 'Maison',
    ],
    [
        'image' => '/images/maison2.jpg',
        'titre' => 'Villa moderne',
        'prix' => '550000€',
        'ville' => 'Nice',
        'description' => 'Villa contemporaine avec piscine et terrasse.',
        'type' => 'Maison',
    ],
    [
        'image' => '/images/maison3.jpg',
        'titre' => 'Maison familiale',
        'prix' => '420000€',
        'ville' => 'Bordeaux',
        'description' => 'Grande maison familiale proche des écoles.',
        'type' => 'Maison',
    ],
    [
        'image' => '/images/maison4.jpg',
        'titre' => 'Chalet à la montagne',
        'prix' => '300000€',
        'ville' => 'Chamonix',
        'description' => 'Chalet chaleureux avec vue sur les montagnes.',
        'type' => 'Maison',
    ],
    [
        'image' => '/images/maison5.jpg',
        'titre' => 'Maison ancienne rénovée',
        'prix' => '380000€',
        'ville' => 'Lille',
        'description' => 'Maison ancienne rénovée avec charme et caractère.',
        'type' => 'Maison',
    ],
];

$this->appartements = [
    [
        'image' => '/images/appart1.jpg',
        'titre' => 'Appartement moderne',
        'prix' => '200000€',
        'ville' => 'Lyon',
        'description' => 'Appartement lumineux avec balcon.',
        'type' => 'Appartement',
    ],
    [
        'image' => '/images/appart2.jpg',
        'titre' => 'Studio cosy',
        'prix' => '120000€',
        'ville' => 'Paris',
        'description' => 'Studio idéal pour étudiant ou jeune actif.',
        'type' => 'Appartement',
    ],
    [
        'image' => '/images/appart3.jpg',
        'titre' => 'Appartement familial',
        'prix' => '280000€',
        'ville' => 'Marseille',
        'description' => 'Appartement spacieux avec 3 chambres et parking.',
        'type' => 'Appartement',
    ],
    [
        'image' => '/images/appart4.jpg',
        'titre' => 'Loft design',
        'prix' => '320000€',
        'ville' => 'Toulouse',
        'description' => 'Loft moderne avec grandes baies vitrées.',
        'type' => 'Appartement',
    ],
    [
        'image' => '/images/appart5.jpg',
        'titre' => 'Appartement avec vue mer',
        'prix' => '400000€',
        'ville' => 'Nice',
        'description' => 'Appartement lumineux avec vue panoramique sur la mer.',
        'type' => 'Appartement',
    ],
];

    }

    public function getMaisons(): array
    {
        return $this->maisons;
    }

    public function getAppartements(): array
    {
        return $this->appartements;
    }
}

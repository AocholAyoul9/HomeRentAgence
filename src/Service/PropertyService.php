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
                'description' => 'Belle maison spacieuse...',
                'type' => 'Maison',
            ],
            // ... add more maisons here
        ];

        $this->appartements = [
            [
                'image' => '/images/appart1.jpg',
                'titre' => 'Appartement moderne',
                'prix' => '200000€',
                'ville' => 'Lyon',
                'description' => 'Appartement lumineux...',
                'type' => 'Appartement',
            ],
            // ... add more appartements here
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

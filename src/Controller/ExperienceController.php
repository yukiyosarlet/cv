<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class ExperienceController extends AbstractController
{
    #[Route('/ervaring', name: 'experience')]
    public function index(): Response
    {
        $ervaringen = [
            [
                'periode' => '20/04/2026 - 12/05/2026',
                'functie' => 'Scrum VDAB (student)',
                'bedrijf' => 'VDAB',
                'taken' => [
                    'Leren hoe je met andere developers samenwerkt in een scrum',
                    'Een webapplicatie maken voor een verkoop website',
                ],
                'talen' => ['C#', '.NET', 'Trello'],
            ],
            [
                'periode' => '17/07/2025 - 31/07/2025',
                'functie' => 'Full Stack Developer (student)',
                'bedrijf' => 'DLC System Integration',
                'taken' => [
                    'Back-end van de website maken, database opstellen',
                    'Zorgen dat je taal kunt aanpassen',
                    'Front-end verbeteren',
                ],
                'talen' => ['Svelte', 'Express', 'TypeScript'],
            ],
            [
                'periode' => '01/07/2024 - 19/07/2024',
                'functie' => 'Front-end Developer + Installateur (student)',
                'bedrijf' => 'DLC System Integration',
                'taken' => [
                    "1,5 week installeren van camera's en rookmelders",
                    'Als programmeur waar ik de website moest redesignen en opnieuw maken',
                ],
                'talen' => ['SvelteKit', 'Figma', 'Markdown', 'Cloudflare'],
            ],
        ];

        return $this->render('experience/index.html.twig', [
            'ervaringen' => $ervaringen,
        ]);
    }
}

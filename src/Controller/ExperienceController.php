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
                'periode' => '18/07/2026 - 19/07/2026',
                'functie' => 'CV-website',
                'bedrijf' => 'Persoonlijk',
                'taken' => [
                    "Full stack applicatie opgebouwd volgens MVC-architectuur (Controllers, Twig-templates, routing)",
                    "Twee routes/pagina's met herbruikbare layout via Twig template inheritance",
                    "Zelf geschreven responsive CSS-styling, geen framework zoals Bootstrap gebruikt",
                ],
                'talen' => ['PHP', 'Symfony (MVC)', 'Twig-templates'],
            ],
            [
                'periode' => '06/07/2026 - 17/07/2026',
                'functie' => 'AssetFlow — Asset management webapplicatie',
                'bedrijf' => 'Full-stack persoonlijk project',
                'taken' => [
                    "Ontwikkelde een volledige full-stack applicatie voor het beheren van bedrijfsmiddelen (assets, medewerkers, categorieën, toewijzingen, onderhoud), met een REST API-backend in ASP.NET Core en een Angular-frontend met standalone components",
                    'Implementeerde JWT-authenticatie met rolgebaseerde autorisatie, EF Core met code-first migraties, en een gelaagde architectuur (repositories, services, controllers)',
                    "Bouwde een interactief dashboard met Chart.js voor visualisatie van asset-statistieken per status en categorie",
                    "Debugde en loste complexe full-stack issues op: EF Core entity-tracking conflicts, enum-serialisatie tussen backend/frontend, CORS- en proxy-configuratie voor development/productie",
                    "http://assetflow.runasp.net/",
                ],
                'talen' => ['ASP.NET Core (.NET 10)', 'Entity Framework Core', 'Angular 22', 'Angular Material'],
            ],
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

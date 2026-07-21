<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;

class HomeController extends AbstractController
{
    #[Route('/', name: 'home')]
    public function index(): Response
    {
        $profiel = [
            'naam' => 'Yukiyo Sarlet',
            'titel' => 'Full Stack Developer',
            'geboortedatum' => '26/06/2000',
            'adres' => 'Beukendreef 7, 9690 Ruien',
            'email' => 'yu.sarlet@gmail.com',
            'telefoon' => '+32 470 86 91 76',
            'rijbewijs' => 'B',
            'linkedin' => 'linkedin.com/in/yukiyo-sarlet',
            'github' => 'github.com/yukiyosarlet',
            'omschrijving' => 'Leergierige en analytische Junior .NET Developer met interesse in zowel back-end als front-end development. Gemotiveerd om performante en gebruiksvriendelijke applicaties te ontwikkelen met technologieën zoals C#, ASP.NET Core, Angular en SQL. Teamgericht, proactief en sterk in het oplossen van technische problemen, met de ambitie om verder te groeien binnen een moderne IT-omgeving.',
        ];

        $talen = [
            'Nederlands' => 'Moedertaal',
            'Engels' => 'Vloeiend',
        ];

        $hobbys = ['Duiken', 'Zeilen', 'Voetbal', 'Fitnes'];

        $contract = ['Full Time Contract', 'IBO-Contract', 'Stages'];

        $opleidingen = [
            [
                'jaar' => '2026',
                'titel' => 'Full Stack Developer C#/.Net',
                'school' => 'VDAB Wevelgem (bachelor)',
                'detail' => 'C#/.NET',
            ],
            [
                'jaar' => '2025',
                'titel' => 'Front and back-end webdevelopment',
                'school' => 'Howest Kortrijk (graduaat)',
                'detail' => 'Geslaagde vakken: graphic skills, design principals, vector skills, photo manipulation, web development, api, data, user experience. Talen: javascript, html, api, sql, scss, php, vue, Laravel',
            ],
            [
                'jaar' => '2019',
                'titel' => 'Sociaal technische wetenschappen',
                'school' => 'Atheneum Avelgem',
                'detail' => '',
            ],
        ];

        $skills = [
            'PHP', 'Laravel', 'Rest API', 'Node.js', 'Express', 'C#/.NET',
            'Vue.js', 'Javascript', 'HTML', 'css/scss', 'SvelteKit', 'Angular',
            'Git', 'Figma', 'Razor', 'Markdown', 'Blazor', 'MySQL', 'Docker',
            'Photoshop', 'Illustrator',
        ];

        return $this->render('home/index.html.twig', [
            'profiel' => $profiel,
            'talen' => $talen,
            'hobbys' => $hobbys,
            'contract' => $contract,
            'opleidingen' => $opleidingen,
            'skills' => $skills,
        ]);
    }
}

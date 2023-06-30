<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClientController extends Controller
{
    public function index()
    {
        $clients = [
            [
                'name' => 'Acme Corporation',
                'project_name' => 'E-commerce Website',
                'description' => 'Developed a fully responsive and visually appealing e-commerce website for a fashion boutique, showcasing their products and enabling seamless online shopping.',
            ],
            [
                'name' => 'Globex Industries',
                'project_name' => 'Portfolio Website',
                'description' => 'Designed a portfolio website for a photographer, highlighting their work and creative style through visually stunning galleries and an intuitive user interface.',
            ],
            [
                'name' => 'Initech Solutions',
                'project_name' => 'Corporate Website',
                'description' => 'Created a professional website for a corporate agency, featuring a modern design, clear branding, and comprehensive information about their services, team, and case studies.',
            ],
            [
                'name' => 'Spectra Technologies',
                'project_name' => 'Product Landing Page',
                'description' => 'Developed a conversion-focused landing page for a software product, highlighting its unique features, benefits, and driving visitors towards a call-to-action.',
            ],
            [
                'name' => 'NexGen Foundation',
                'project_name' => 'Non-profit Organization Website',
                'description' => 'Built a website for a non-profit organization, showcasing their mission, projects, and events, while also providing a platform for accepting donations and volunteer registrations.',
            ],
        ];
        return view('portfolio')->with('daten', $clients);
    }
}

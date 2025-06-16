<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Training;

class TrainingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $trainings = [
            [
                'title' => 'Curso de Laravel',
                'description' => 'Aprende Laravel desde cero.',
                'link' => 'https://example.com/curso-laravel',
                'provider' => 'Platzi',
                'start_date' => '2024-08-01',
                'end_date' => '2024-09-15',
            ],
            [
                'title' => 'Introducción a React',
                'description' => 'Curso básico de React JS.',
                'link' => 'https://example.com/react-intro',
                'provider' => 'Udemy',
                'start_date' => '2024-07-10',
                'end_date' => '2024-08-10',
            ],
            [
                'title' => 'Machine Learning con Python',
                'description' => 'Curso intensivo de machine learning.',
                'link' => 'https://example.com/ml-python',
                'provider' => 'Coursera',
                'start_date' => '2024-06-20',
                'end_date' => '2024-07-30',
            ],
            [
                'title' => 'Diseño UX/UI',
                'description' => 'Fundamentos del diseño centrado en el usuario.',
                'link' => 'https://example.com/ux-ui',
                'provider' => 'Crehana',
                'start_date' => '2024-09-01',
                'end_date' => '2024-10-01',
            ],
            [
                'title' => 'Desarrollo de Apps Móviles',
                'description' => 'Aprende a crear apps móviles con Flutter.',
                'link' => 'https://example.com/flutter-course',
                'provider' => 'Edteam',
                'start_date' => '2024-10-15',
                'end_date' => '2024-12-01',
            ],
            [
                'title' => 'Ciberseguridad Básica',
                'description' => 'Protege tus datos e identidades online.',
                'link' => 'https://example.com/cybersecurity',
                'provider' => 'Alura',
                'start_date' => '2024-11-01',
                'end_date' => '2024-12-01',
            ],
            [
                'title' => 'Scrum Master Certification',
                'description' => 'Prepárate para certificarte como Scrum Master.',
                'link' => 'https://example.com/scrum-master',
                'provider' => 'LinkedIn Learning',
                'start_date' => '2024-06-25',
                'end_date' => '2024-07-25',
            ],
            [
                'title' => 'Fundamentos de SQL',
                'description' => 'Aprende a trabajar con bases de datos relacionales.',
                'link' => 'https://example.com/sql-course',
                'provider' => 'Codecademy',
                'start_date' => '2024-08-05',
                'end_date' => '2024-09-05',
            ],
            [
                'title' => 'Marketing Digital',
                'description' => 'Técnicas y herramientas para el marketing online.',
                'link' => 'https://example.com/marketing-digital',
                'provider' => 'Domestika',
                'start_date' => '2024-07-01',
                'end_date' => '2024-08-01',
            ],
            [
                'title' => 'Automatización con Python',
                'description' => 'Automatiza tareas repetitivas con scripts en Python.',
                'link' => 'https://example.com/python-automatizacion',
                'provider' => 'OpenBootcamp',
                'start_date' => '2024-09-10',
                'end_date' => '2024-10-10',
            ],
        ];

        foreach ($trainings as $training) {
            Training::create($training);
        }
    }
}

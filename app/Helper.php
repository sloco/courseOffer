<?php

namespace App;

use Illuminate\Support\Collection;
use Carbon\Carbon;

class Helper
{
    public function subjects()
    {
        $subjects = collect([
            [
                'name' => 'Estadisticas',
                'courses' => [
                    'Estadisticas con SPSS',
                    'Estadisticas',
                    'Proyect'
                ]
            ],[
                'name' => 'Ofimatica',
                'courses' => [
                    'Introduccion a Office 365',
                    'Excel basico',
                    'Excel Avanzado',
                    'Diplomado de Excel'
                ]
            ],[
                'name' => 'Ciencias de la computacion',
                'courses' => [
                    'Desarrollo de aplicaciones mobiles con Android',
                    'Sistema de control de versiones con Git y Github',
                    'Desarrollo de API con ruby on rails',
                    'Desarrollo de aplicaciones web con Java usando Grails'
                ]
            ],[
                'name' => 'Marketing',
                'courses' => [
                    'Marketing digital',
                    'Marketing',
                    'SEO',
                    'Email marketing',
                    'Introduccion al marketing de afiliados'
                ]
            ],[
                'name' => 'DevOps',
                'courses' => [
                    'PIVOTAL Web Services',
                    'Google clouds',
                    'Microsoft Azure'
                ]
            ]
        ]);

        return $subjects;
    }

    public function headquarters()
    {
        Carbon::setLocale('es');
        $now = Carbon::now('America/Managua');

        $headquarters = collect([
            [
                'headquarter' => 'Leon',
                'offers' => [
                    [
                        'name' => 'Course name',
                        'slug' => 'Course-name-one',
                        'background_image' => 'https://s3-us-west-2.amazonaws.com/uccleon.peide.website/photos/StockSnap_UQ9AB8NRV9-min.jpg',
                        'image' => 'https://s3-us-west-2.amazonaws.com/ni.edu.leon.ucc/temp/dperrera-rails.png',
                        'price' => '125',
                        'start_date' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B'),
                        'modality' => 'sunday',
                        'faqs' => [
                            [
                                'question' => 'Question one?',
                                'answer' => 'Lorem ipsum dolor sit amet',
                                'updated_at' => $now
                            ],[
                                'question' => 'Question two?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quidem iste neque doloremque assumenda vitae adipisci aspernatur, odit dolorum! Cum fugit rerum ipsa numquam iure, qui quas ullam saepe sint!',
                                'updated_at' => $now
                            ]
                        ],
                        'schedules' => [
                            [
                                'start_time' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-14 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-05-21 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-21 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-05-28 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-28 05:00')->formatLocalized('%H:%M')
                            ]
                        ],
                        'modules' => [
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nihil consequatur illo maiores suscipit error et modi sunt at!',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laudantium amet dolores repellendus, nisi, asperiores iste placeat, sequi voluptas dignissimos illo ducimus.',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Libero fugit necessitatibus.'
                        ],
                        'tutors' => [
                            [
                                'name' => 'John Doe',
                                'title' => 'Microsoft Learning Team'
                            ],[
                                'name' => 'Jane Doe',
                                'title' => 'Technical Consulting Engineer'
                            ]
                        ],
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nobis, fugit voluptates excepturi iusto officiis reprehenderit quas nam sint tempore, assumenda similique numquam ullam nostrum quisquam iure dolor expedita repudiandae. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ratione ab reprehenderit omnis voluptates quae ullam vero, quidem maxime molestiae tenetur, voluptatibus hic eaque numquam est quas, dicta repellendus nulla.',
                        'addressed_to' => [
                            'Sistemas', 'Marketing', 'Administracion'
                        ],
                        'prerequisites' => [
                            'Requisite1', 'Requisite2', 'Requisite3'
                        ]
                    ],[
                        'name' => 'Course name',
                        'slug' => 'Course-name-two',
                        'background_image' => ' https://s3-us-west-2.amazonaws.com/uccleon.peide.website/photos/StockSnap_U3W2SHOLWQ-min.jpg',
                        'image' => 'https://s3-us-west-2.amazonaws.com/ni.edu.leon.ucc/temp/ruby.png',
                        'price' => '80',
                        'start_date' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B'),
                        'modality' => 'saturday',
                        'faqs' => [
                            [
                                'question' => 'Question one?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                                'updated_at' => $now
                            ],[
                                'question' => 'Question two?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatum quidem iste neque doloremque assumenda vitae adipisci aspernatur, odit dolorum! Cum fugit rerum ipsa numquam iure, qui quas ullam saepe sint!',
                                'updated_at' => $now
                            ],[
                                'question' => 'Question three?',
                                'answer' => 'Lorem ipsum dolor sit amet',
                                'updated_at' => $now
                            ]
                        ],
                        'schedules' => [
                            [
                                'start_time' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-14 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-05-21 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-21 05:00')->formatLocalized('%H:%M')
                            ]
                        ],
                        'modules' => [
                            'Lorem ipsum dolor sit amet xml',
                            'Lorem ipsum dolor sit amet abc',
                        ],
                        'tutors' => [
                            [
                                'name' => 'John Doe',
                                'title' => 'Technical Consulting Engineer'
                            ]
                        ],
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Enim nobis, fugit voluptates excepturi iusto officiis reprehenderit quas nam sint tempore, assumenda similique numquam ullam nostrum quisquam iure dolor expedita repudiandae.',
                        'addressed_to' => [
                            'Agraria'
                        ],
                        'prerequisites' => []
                    ]
                ]
            ],[
                'headquarter' => 'Managua',
                'offers' => [
                    [
                        'name' => 'Course name goes here',
                        'slug' => 'Course-name-goes-here',
                        'background_image' => 'https://s3-us-west-2.amazonaws.com/uccleon.peide.website/photos/StockSnap_NLBN1GQQET-min.jpg',
                        'image' => 'https://s3-us-west-2.amazonaws.com/ni.edu.leon.ucc/temp/whitespark_1x.png',
                        'price' => '120',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa odit, reiciendis doloribus! Praesentium at aliquid dolorum delectus odit tenetur quasi maiores voluptatum quia, suscipit possimus ullam! Reiciendis consequuntur, veritatis magni.',
                        'addressed_to' => ['Marketing'],
                        'start_date' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B'),
                        'modality' => 'sunday',
                        'faqs' => [
                            [
                                'question' => 'Question number?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'updated_at' => $now
                            ]
                        ],
                        'schedules' => [
                            [
                                'start_time' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-14 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-05-21 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-21 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-05-28 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-28 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-06-04 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-06-04 05:00')->formatLocalized('%H:%M')
                            ]
                        ],
                        'modules' => [
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nulla error accusamus',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nulla error accusamus, labore',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                            'Lorem ipsum dolor sit amet',
                        ],
                        'tutors' => [
                            [
                                'name' => 'Kevin Duran',
                                'title' => 'Developer Intel Corporation'
                            ],[
                                'name' => 'Kevin Garnet',
                                'title' => 'Professor University Côte d’Azur'
                            ],[
                                'name' => 'Peter Beckman',
                                'title' => 'Learning Team Microsoft'
                            ]
                        ],
                        'prerequisites' => []
                    ]
                ]
            ],[
                'headquarter' => 'Matagalpa',
                'offers' => [
                    [
                        'name' => 'Course no name goes here',
                        'slug' => 'Course-no-name-goes-here',
                        'background_image' => 'https://s3-us-west-2.amazonaws.com/uccleon.peide.website/photos/StockSnap_L278918975-min.jpg',
                        'image' => 'https://s3-us-west-2.amazonaws.com/ni.edu.leon.ucc/temp/google_utm_d_2x.png',
                        'price' => '80',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa odit, reiciendis doloribus! Praesentium at aliquid dolorum delectus odit tenetur quasi maiores voluptatum quia, suscipit possimus ullam! Reiciendis consequuntur, veritatis magni.',
                        'addressed_to' => ['Marketing'],
                        'start_date' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B'),
                        'modality' => 'sunday',
                        'faqs' => [
                            [
                                'question' => 'Question number?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'updated_at' => $now
                            ],[
                                'question' => 'Question number?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'updated_at' => $now
                            ],[
                                'question' => 'Question number?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'updated_at' => $now
                            ],[
                                'question' => 'Question number?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'updated_at' => $now
                            ]
                        ],
                        'schedules' => [
                            [
                                'start_time' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-14 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-05-21 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-21 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-05-28 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-28 05:00')->formatLocalized('%H:%M')
                            ]
                        ],
                        'modules' => [
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                        ],
                        'tutors' => [
                            [
                                'name' => 'Kevin Duran',
                                'title' => 'Technical Consulting Engineer Intel Corporation'
                            ],[
                                'name' => 'Peter Beckman',
                                'title' => 'Technical Consulting Engineer Intel Corporation'
                            ],[
                                'name' => 'Ray Charles',
                                'title' => 'Developer Intel Corporation'
                            ]
                        ],
                        'prerequisites' => ['Requisite1', 'Requisite4']
                    ],[
                        'name' => 'Course all name goes here',
                        'slug' => 'Course-all-name-goes-here',
                        'background_image' => ' https://s3-us-west-2.amazonaws.com/uccleon.peide.website/photos/StockSnap_9PZ3E9U67E-min.jpg',
                        'image' => 'https://s3-us-west-2.amazonaws.com/ni.edu.leon.ucc/temp/jsfiddle_1x.png',
                        'price' => '120',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa odit, reiciendis doloribus! Praesentium at aliquid dolorum delectus odit tenetur quasi maiores voluptatum quia, suscipit possimus ullam! Reiciendis consequuntur, veritatis magni.',
                        'addressed_to' => ['Marketing', 'Sistemas'],
                        'start_date' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B'),
                        'modality' => 'sunday',
                        'faqs' => [
                            [
                                'question' => 'Question number?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'updated_at' => $now
                            ]
                        ],
                        'schedules' => [
                            [
                                'start_time' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-14 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-05-21 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-21 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-05-28 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-28 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-06-04 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-06-04 05:00')->formatLocalized('%H:%M')
                            ]
                        ],
                        'modules' => [
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nulla error accusamus, labore, sint sit iusto harum excepturi ipsam cupiditate necessitatibus deserunt sequi asperiores vero. Ipsum doloribus, quidem nisi neque.',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit',
                            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Vitae nulla error accusamus, labore, sint sit iusto harum excepturi ipsam cupiditate necessitatibus deserunt sequi asperiores vero. Ipsum doloribus, quidem nisi neque.',
                        ],
                        'tutors' => [
                            [
                                'name' => 'Kevin Duran',
                                'title' => 'Professor University Côte d’Azur'
                            ],[
                                'name' => 'Kevin Garnet',
                                'title' => 'Learning Team Microsoft'
                            ],[
                                'name' => 'Peter Beckman',
                                'title' => 'Technical Consulting Engineer Intel Corporation'
                            ]
                        ],
                        'prerequisites' => []
                    ],[
                        'name' => 'Course no name goes here',
                        'slug' => 'Course-no-name-goes-here',
                        'background_image' => 'https://s3-us-west-2.amazonaws.com/uccleon.peide.website/photos/StockSnap_9PZ3E9U67E-min.jpg',
                        'image' => 'https://s3-us-west-2.amazonaws.com/ni.edu.leon.ucc/temp/123_1x.png',
                        'price' => '80',
                        'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Culpa odit, reiciendis doloribus! Praesentium at aliquid dolorum delectus odit tenetur quasi maiores voluptatum quia, suscipit possimus ullam! Reiciendis consequuntur, veritatis magni.',
                        'addressed_to' => ['Marketing'],
                        'start_date' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B'),
                        'modality' => 'sunday',
                        'faqs' => [
                            [
                                'question' => 'Question number?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'updated_at' => $now
                            ],[
                                'question' => 'Question number?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'updated_at' => $now
                            ],[
                                'question' => 'Question number?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'updated_at' => $now
                            ],[
                                'question' => 'Question number?',
                                'answer' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit.',
                                'updated_at' => $now
                            ]
                        ],
                        'schedules' => [
                            [
                                'start_time' => Carbon::parse('2017-05-14 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-14 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-05-21 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-21 05:00')->formatLocalized('%H:%M')
                            ],[
                                'start_time' => Carbon::parse('2017-05-28 08:00')->formatLocalized('%d de %B %Y %H:%M %P'),
                                'ending_time' => Carbon::parse('2017-05-28 05:00')->formatLocalized('%H:%M')
                            ]
                        ],
                        'modules' => [
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet',
                            'Lorem ipsum dolor sit amet',
                        ],
                        'tutors' => [
                            [
                                'name' => 'Kevin Duran',
                                'title' => 'Technical Consulting Engineer Intel Corporation'
                            ],[
                                'name' => 'Peter Beckman',
                                'title' => 'Developer Intel Corporation'
                            ],[
                                'name' => 'Ray Charles',
                                'title' => 'Professor University Côte d’Azur'
                            ]
                        ],
                        'prerequisites' => ['Requisite1', 'Requisite2']
                    ]
                ]
            ]
        ]);

        return $headquarters;
    }

    public function companies()
    {
        return collect([
            [
                'name' => 'B2Gold',
                'site' => 'http://www.b2gold.com/',
                'logo' => 'https://s3-us-west-2.amazonaws.com/ni.edu.leon.ucc/logo/b2gold-logo-min.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi iure quisquam mollitia vel, esse, provident suscipit officia et, perferendis blanditiis tempore quas quibusdam ex aliquam. Sit, repellat amet hic placeat.'
            ],[
                'name' => 'OneLink',
                'site' => 'http://www.getcom.com.sv/es',
                'logo' => 'https://s3-us-west-2.amazonaws.com/ni.edu.leon.ucc/logo/onelink-logo-min.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ea deserunt omnis vitae voluptatem autem assumenda asperiores quidem accusamus necessitatibus aut repellendus quis repudiandae perferendis adipisci, veniam minima, maxime repellat.'
            ],[
                'name' => 'Pro Mujer',
                'site' => 'https://nicaragua.promujer.org/',
                'logo' => 'https://s3-us-west-2.amazonaws.com/ni.edu.leon.ucc/logo/pro-mujer-logo-min.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Alias accusantium corrupti, praesentium nisi porro id explicabo placeat, cumque ullam neque, excepturi voluptatibus perferendis possimus modi. Earum, eligendi placeat accusamus provident!'
            ]
        ]);
    }
}
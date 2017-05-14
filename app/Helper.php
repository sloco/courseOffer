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
                    'Excel basico',
                    'Excel Avanzado',
                    'Diplomado de Excel',
                    'Estadisticas con SPSS',
                    'Estadisticas'
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
                    'Email marketing'
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
                        'name' => 'Course name one',
                        'slug' => 'Course-name-one',
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
                                'title' => 'MSC'
                            ],[
                                'name' => 'Jane Doe',
                                'title' => 'Dr.'
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
                        'name' => 'Course name two',
                        'slug' => 'Course-name-two',
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
                                'title' => 'MSC'
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
                                'title' => 'Dr.'
                            ],[
                                'name' => 'Kevin Garnet',
                                'title' => 'Ing.'
                            ],[
                                'name' => 'Peter Beckman',
                                'title' => 'Dr.'
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
                                'title' => 'Dr.'
                            ],[
                                'name' => 'Peter Beckman',
                                'title' => 'Dr.'
                            ],[
                                'name' => 'Ray Charles',
                                'title' => 'Dr.'
                            ]
                        ],
                        'prerequisites' => ['Requisite1', 'Requisite4']
                    ],[
                        'name' => 'Course all name goes here',
                        'slug' => 'Course-all-name-goes-here',
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
                                'title' => 'Dr.'
                            ],[
                                'name' => 'Kevin Garnet',
                                'title' => 'Ing.'
                            ],[
                                'name' => 'Peter Beckman',
                                'title' => 'Dr.'
                            ]
                        ],
                        'prerequisites' => []
                    ],[
                        'name' => 'Course no name goes here',
                        'slug' => 'Course-no-name-goes-here',
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
                                'title' => 'Dr.'
                            ],[
                                'name' => 'Peter Beckman',
                                'title' => 'Dr.'
                            ],[
                                'name' => 'Ray Charles',
                                'title' => 'Dr.'
                            ]
                        ],
                        'prerequisites' => ['Requisite1', 'Requisite2']
                    ]
                ]
            ]
        ]);

        return $headquarters;
    }
}
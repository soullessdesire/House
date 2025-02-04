<?php

use Ramsey\Collection\Map\AssociativeArrayMap;

class Location
{
    public static ?AssociativeArrayMap $locations = [
        (object) [
            'county_code' => 3,
            'name' => 'Kisumu',
            'constituencies' => (object) [
                [
                    'name' => 'Kisumu Central',
                    'subcounties' => [
                        [
                            'name' => 'Kisumu Central Sub-County',
                            'wards' => [
                                [
                                    'name' => 'Kisumu Town East',
                                    'locations' => [
                                        [
                                            'name' => 'Kisumu East',
                                            'sublocations' => [
                                                [
                                                    'name' => 'Harambee',
                                                    'villages' => ['Nyalenda', 'Kibuye']
                                                ],
                                                [
                                                    'name' => 'Kisumu Central',
                                                    'villages' => ['Otieno Ng’ama']
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                [
                                    'name' => 'Kisumu Town West',
                                    'locations' => [
                                        [
                                            'name' => 'Kisumu West',
                                            'sublocations' => [
                                                [
                                                    'name' => 'Wamalwa',
                                                    'villages' => ['Kabonyo']
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'name' => 'Nyakach',
                    'subcounties' => [
                        [
                            'name' => 'Nyakach Sub-County',
                            'wards' => [
                                [
                                    'name' => 'Kogony',
                                    'locations' => [
                                        [
                                            'name' => 'Kogony North',
                                            'sublocations' => [
                                                [
                                                    'name' => 'Kogony Town',
                                                    'villages' => ['Nyamatia']
                                                ],
                                                [
                                                    'name' => 'Kogony South',
                                                    'villages' => ['Kisumu Port', 'Rabuor']
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                [
                                    'name' => 'Kadel',
                                    'locations' => [
                                        [
                                            'name' => 'Kadel West',
                                            'sublocations' => [
                                                [
                                                    'name' => 'Kisian',
                                                    'villages' => ['Kodero']
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'name' => 'Kisumu East',
                    'subcounties' => [
                        [
                            'name' => 'Kisumu East Sub-County',
                            'wards' => [
                                [
                                    'name' => 'Ahero',
                                    'locations' => [
                                        [
                                            'name' => 'Ahero Town',
                                            'sublocations' => [
                                                [
                                                    'name' => 'Ahero Market',
                                                    'villages' => ['Kondele']
                                                ],
                                                [
                                                    'name' => 'Kisian',
                                                    'villages' => ['Rong’']
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                [
                                    'name' => 'Koguta',
                                    'locations' => [
                                        [
                                            'name' => 'Koguta Central',
                                            'sublocations' => [
                                                [
                                                    'name' => 'Nyamware',
                                                    'villages' => ['Kisumu Rural']
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        (object) [
            'id' => 2,
            'name' => 'Mombasa',
            'constituencies' => [
                (object) [
                    'name' => 'Mvita',
                    'subcounties' => [
                        (object) [
                            'name' => 'Mvita Sub-County',
                            'wards' => [
                                (object) [
                                    'name' => 'Tudor',
                                    'locations' => [
                                        (object) [
                                            'name' => 'Tudor East',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Sabasaba',
                                                    'villages' => ['Sabasaba Market', 'Kiziwi Junction']
                                                ],
                                                (object) [
                                                    'name' => 'Kiziwi',
                                                    'villages' => ['Kiziwi Flats', 'Tudor Water Supply']
                                                ]
                                            ]
                                        ],
                                        (object) [
                                            'name' => 'Tudor West',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Makupa',
                                                    'villages' => ['Makupa Police Line', 'Makupa Causeway']
                                                ],
                                                (object) [
                                                    'name' => 'Tudor Flats',
                                                    'villages' => ['Tudor Phase 1', 'Tudor Phase 2']
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                (object) [
                                    'name' => 'Majengo',
                                    'locations' => [
                                        (object) [
                                            'name' => 'Majengo Central',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Marikiti',
                                                    'villages' => ['Marikiti Market', 'Bondeni Lane']
                                                ],
                                                (object) [
                                                    'name' => 'Bondeni',
                                                    'villages' => ['Bondeni Mosque Area', 'Mombasa Baptist']
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                (object) [
                    'name' => 'Nyali',
                    'subcounties' => [
                        (object) [
                            'name' => 'Nyali Sub-County',
                            'wards' => [
                                (object) [
                                    'name' => 'Kongowea',
                                    'locations' => [
                                        (object) [
                                            'name' => 'Kongowea North',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Mlaleo',
                                                    'villages' => ['Mlaleo Phase 1', 'Mlaleo Phase 2']
                                                ],
                                                (object) [
                                                    'name' => 'Kongowea Market',
                                                    'villages' => ['Kongowea Main Market', 'Market Perimeter']
                                                ]
                                            ]
                                        ],
                                        (object) [
                                            'name' => 'Kongowea South',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Ziwa La Ng’ombe',
                                                    'villages' => ['Ziwa A', 'Ziwa B']
                                                ],
                                                (object) [
                                                    'name' => 'Kisimani',
                                                    'villages' => ['Kisimani Central', 'Kisimani West']
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                (object) [
                                    'name' => 'Mkomani',
                                    'locations' => [
                                        (object) [
                                            'name' => 'Mkomani Central',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'English Point',
                                                    'villages' => ['English Point Marina', 'Nyali Bridge Area']
                                                ],
                                                (object) [
                                                    'name' => 'Nyali Beach',
                                                    'villages' => ['Nyali Beach Hotels', 'Bamburi Road Area']
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                (object) [
                    'name' => 'Likoni',
                    'subcounties' => [
                        (object) [
                            'name' => 'Likoni Sub-County',
                            'wards' => [
                                (object) [
                                    'name' => 'Mtongwe',
                                    'locations' => [
                                        (object) [
                                            'name' => 'Mtongwe East',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Mtongwe Navy Base',
                                                    'villages' => ['Navy Barracks', 'Mtongwe Ferry']
                                                ],
                                                (object) [
                                                    'name' => 'Likoni Heights',
                                                    'villages' => ['Likoni Flats', 'Likoni Shopping Center']
                                                ]
                                            ]
                                        ],
                                        (object) [
                                            'name' => 'Mtongwe West',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Shika Adabu',
                                                    'villages' => ['Shika Adabu Main', 'Shika Adabu Market']
                                                ],
                                                (object) [
                                                    'name' => 'Vijiweni',
                                                    'villages' => ['Vijiweni Central', 'Vijiweni East']
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                (object) [
                                    'name' => 'Likoni Ward',
                                    'locations' => [
                                        (object) [
                                            'name' => 'Likoni Central',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Shelly Beach',
                                                    'villages' => ['Shelly Beach Resort', 'Dongo Kundu']
                                                ],
                                                (object) [
                                                    'name' => 'Timboni',
                                                    'villages' => ['Timboni A', 'Timboni B']
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        (object) [
            'id' => 47,
            'name' => 'Nairobi',
            'constituencies' => [
                (object) [
                    'name' => 'Westlands',
                    'subcounties' => [
                        (object) [
                            'name' => 'Westlands Sub-County',
                            'wards' => [
                                (object) [
                                    'name' => 'Parklands',
                                    'locations' => [
                                        (object) [
                                            'name' => 'Parklands East',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'City Park',
                                                    'villages' => ['Aga Khan Area', 'Muthaiga Square']
                                                ],
                                                (object) [
                                                    'name' => 'Highridge',
                                                    'villages' => ['Diamond Plaza Area', 'Jamhuri High']
                                                ]
                                            ]
                                        ],
                                        (object) [
                                            'name' => 'Parklands West',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Kusi Lane',
                                                    'villages' => ['Wangari Maathai Road', 'Westlands Square']
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                (object) [
                                    'name' => 'Mountain View',
                                    'locations' => [
                                        (object) [
                                            'name' => 'Mountain View Central',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Lower Mountain View',
                                                    'villages' => ['Sunrise Estate', 'Kangemi Area']
                                                ],
                                                (object) [
                                                    'name' => 'Upper Mountain View',
                                                    'villages' => ['Nyayo Estate', 'Spring Valley']
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                (object) [
                    'name' => 'Dagoretti North',
                    'subcounties' => [
                        (object) [
                            'name' => 'Dagoretti North Sub-County',
                            'wards' => [
                                (object) [
                                    'name' => 'Kilimani',
                                    'locations' => [
                                        (object) [
                                            'name' => 'Kilimani East',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'State House',
                                                    'villages' => ['Hurlingham', 'Kileleshwa']
                                                ],
                                                (object) [
                                                    'name' => 'Yaya',
                                                    'villages' => ['Prestige Plaza Area', 'Ngong Avenue']
                                                ]
                                            ]
                                        ],
                                        (object) [
                                            'name' => 'Kilimani West',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Adams Arcade',
                                                    'villages' => ['Toi Market', 'Joseph Kangethe']
                                                ],
                                                (object) [
                                                    'name' => 'Ngong Road',
                                                    'villages' => ['Lenana School Area', 'Junction Mall']
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                (object) [
                                    'name' => 'Kawangware',
                                    'locations' => [
                                        (object) [
                                            'name' => 'Kawangware Central',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Stage 56',
                                                    'villages' => ['Ndwaru Road', 'Muthurwa']
                                                ],
                                                (object) [
                                                    'name' => 'Kandutu',
                                                    'villages' => ['Gatina', 'Riruta Satellite']
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                (object) [
                    'name' => 'Lang’ata',
                    'subcounties' => [
                        (object) [
                            'name' => 'Lang’ata Sub-County',
                            'wards' => [
                                (object) [
                                    'name' => 'Karen',
                                    'locations' => [
                                        (object) [
                                            'name' => 'Karen Plains',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Hardy',
                                                    'villages' => ['Bogani', 'Ngong Racecourse']
                                                ],
                                                (object) [
                                                    'name' => 'Miotoni',
                                                    'villages' => ['Waterfront', 'Karen Blixen Museum Area']
                                                ]
                                            ]
                                        ]
                                    ]
                                ],
                                (object) [
                                    'name' => 'South C',
                                    'locations' => [
                                        (object) [
                                            'name' => 'South C East',
                                            'sublocations' => [
                                                (object) [
                                                    'name' => 'Akila Estate',
                                                    'villages' => ['Nairobi West', 'Boma Hotel Area']
                                                ],
                                                (object) [
                                                    'name' => 'Wilson Airport',
                                                    'villages' => ['Lang’ata Road', 'South C Shopping Center']
                                                ]
                                            ]
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'county_code' => 12,
            'name' => 'Meru',
            'constituencies' => [
                [
                    'name' => 'Imenti North',
                    'subcounties' => [
                        [
                            'name' => 'Imenti North Sub-County',
                            'locations' => [
                                [
                                    'name' => 'Ntima East',
                                    'sublocations' => [
                                        [
                                            'name' => 'Gakoromone',
                                            'villages' => ['Kinoru', 'Gakoromone Market']
                                        ],
                                        [
                                            'name' => 'Kithoka',
                                            'villages' => ['Kithoka Farm', 'Kiruka']
                                        ]
                                    ]
                                ],
                                [
                                    'name' => 'Ntima West',
                                    'sublocations' => [
                                        [
                                            'name' => 'Mwendantu',
                                            'villages' => ['Meru Town', 'Makutano']
                                        ]
                                    ]
                                ]
                            ],
                            'wards' => [
                                [
                                    'name' => 'Municipality',
                                    'sublocations' => [
                                        [
                                            'name' => 'Meru Central',
                                            'villages' => ['Gakoromone', 'Majengo']
                                        ]
                                    ]
                                ],
                                [
                                    'name' => 'Nyaki West',
                                    'sublocations' => [
                                        [
                                            'name' => 'Nyaki',
                                            'villages' => ['Kaithe', 'Ruiri']
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'name' => 'Imenti South',
                    'subcounties' => [
                        [
                            'name' => 'Imenti South Sub-County',
                            'locations' => [
                                [
                                    'name' => 'Abothuguchi Central',
                                    'sublocations' => [
                                        [
                                            'name' => 'Kiija',
                                            'villages' => ['Chogoria', 'Kirimba']
                                        ]
                                    ]
                                ],
                                [
                                    'name' => 'Mitunguu',
                                    'sublocations' => [
                                        [
                                            'name' => 'Mitunguu',
                                            'villages' => ['Mitunguu Market', 'Nkubu']
                                        ]
                                    ]
                                ]
                            ],
                            'wards' => [
                                [
                                    'name' => 'Abogeta West',
                                    'sublocations' => [
                                        [
                                            'name' => 'Abogeta',
                                            'villages' => ['Igoki', 'Chugu']
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'name' => 'Buuri',
                    'subcounties' => [
                        [
                            'name' => 'Buuri Sub-County',
                            'locations' => [
                                [
                                    'name' => 'Timau',
                                    'sublocations' => [
                                        [
                                            'name' => 'Timau Central',
                                            'villages' => ['Timau Town', 'Kiirua']
                                        ]
                                    ]
                                ]
                            ],
                            'wards' => [
                                [
                                    'name' => 'Timau',
                                    'sublocations' => [
                                        [
                                            'name' => 'Timau West',
                                            'villages' => ['Timau Trading Center', 'Ngusishi']
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'county_code' => 22,
            'name' => 'Kiambu',
            'constituencies' => [
                [
                    'name' => 'Kiambaa',
                    'subcounties' => [
                        [
                            'name' => 'Kiambaa Sub-County',
                            'locations' => [
                                [
                                    'name' => 'Karuri',
                                    'sublocations' => [
                                        [
                                            'name' => 'Muchatha',
                                            'villages' => ['Gacharage', 'Ndenderu']
                                        ],
                                        [
                                            'name' => 'Ruaka',
                                            'villages' => ['Ruaka Market', 'Rosslyn']
                                        ]
                                    ]
                                ]
                            ],
                            'wards' => [
                                [
                                    'name' => 'Karuri',
                                    'sublocations' => [
                                        [
                                            'name' => 'Karuri Central',
                                            'villages' => ['Karuri Town', 'Gitathuru']
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'name' => 'Gatundu South',
                    'subcounties' => [
                        [
                            'name' => 'Gatundu South Sub-County',
                            'locations' => [
                                [
                                    'name' => 'Kiamwangi',
                                    'sublocations' => [
                                        [
                                            'name' => 'Kiamwangi Central',
                                            'villages' => ['Kiamwangi Market', 'Githunguri']
                                        ]
                                    ]
                                ],
                                [
                                    'name' => 'Ndarugo',
                                    'sublocations' => [
                                        [
                                            'name' => 'Ndarugo East',
                                            'villages' => ['Muthaiga', 'Njiruini']
                                        ]
                                    ]
                                ]
                            ],
                            'wards' => [
                                [
                                    'name' => 'Kiamwangi',
                                    'sublocations' => [
                                        [
                                            'name' => 'Kiamwangi West',
                                            'villages' => ['Nembu', 'Mukuyu']
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'name' => 'Ruiru',
                    'subcounties' => [
                        [
                            'name' => 'Ruiru Sub-County',
                            'locations' => [
                                [
                                    'name' => 'Ruiru Town',
                                    'sublocations' => [
                                        [
                                            'name' => 'Ruiru Central',
                                            'villages' => ['Githurai', 'Toll']
                                        ],
                                        [
                                            'name' => 'Ruiru East',
                                            'villages' => ['Mugutha', 'Kwa Maiko']
                                        ]
                                    ]
                                ]
                            ],
                            'wards' => [
                                [
                                    'name' => 'Biashara',
                                    'sublocations' => [
                                        [
                                            'name' => 'Biashara Central',
                                            'villages' => ['Kimbo', 'Membley']
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'name' => 'Thika Town',
                    'subcounties' => [
                        [
                            'name' => 'Thika Sub-County',
                            'locations' => [
                                [
                                    'name' => 'Kamenu',
                                    'sublocations' => [
                                        [
                                            'name' => 'Kamenu East',
                                            'villages' => ['Section 9', 'Makongeni']
                                        ]
                                    ]
                                ]
                            ],
                            'wards' => [
                                [
                                    'name' => 'Kamenu',
                                    'sublocations' => [
                                        [
                                            'name' => 'Kamenu Central',
                                            'villages' => ['Githurai Kimbo', 'Ndovoini']
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        [
            'county_code' => 19,
            'name' => 'Nyeri',
            'constituencies' => [
                [
                    'name' => 'Nyeri Town',
                    'subcounties' => [
                        [
                            'name' => 'Nyeri Central Sub-County',
                            'locations' => [
                                [
                                    'name' => 'Rware',
                                    'sublocations' => [
                                        [
                                            'name' => 'Majengo',
                                            'villages' => ['Blue Valley', 'Skuta']
                                        ],
                                        [
                                            'name' => 'Kamakwa',
                                            'villages' => ['Mathari', 'Chania']
                                        ]
                                    ]
                                ]
                            ],
                            'wards' => [
                                [
                                    'name' => 'Rware',
                                    'sublocations' => [
                                        [
                                            'name' => 'Nyeri Central',
                                            'villages' => ['Kimathi', 'Muringato']
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'name' => 'Tetu',
                    'subcounties' => [
                        [
                            'name' => 'Tetu Sub-County',
                            'locations' => [
                                [
                                    'name' => 'Wamagana',
                                    'sublocations' => [
                                        [
                                            'name' => 'Wamagana North',
                                            'villages' => ['Gatitu', 'Gitero']
                                        ]
                                    ]
                                ]
                            ],
                            'wards' => [
                                [
                                    'name' => 'Wamagana',
                                    'sublocations' => [
                                        [
                                            'name' => 'Wamagana Central',
                                            'villages' => ['Kigogoini', 'Mahiga']
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'name' => 'Mathira',
                    'subcounties' => [
                        [
                            'name' => 'Mathira East Sub-County',
                            'locations' => [
                                [
                                    'name' => 'Karatina',
                                    'sublocations' => [
                                        [
                                            'name' => 'Karatina Town',
                                            'villages' => ['Kiangai', 'Gathugu']
                                        ]
                                    ]
                                ]
                            ],
                            'wards' => [
                                [
                                    'name' => 'Karatina',
                                    'sublocations' => [
                                        [
                                            'name' => 'Karatina South',
                                            'villages' => ['Ihururu', 'Marua']
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ],
                [
                    'name' => 'Othaya',
                    'subcounties' => [
                        [
                            'name' => 'Othaya Sub-County',
                            'locations' => [
                                [
                                    'name' => 'Mahiga',
                                    'sublocations' => [
                                        [
                                            'name' => 'Mahiga East',
                                            'villages' => ['Mukurwe', 'Kanyange']
                                        ]
                                    ]
                                ]
                            ],
                            'wards' => [
                                [
                                    'name' => 'Mahiga',
                                    'sublocations' => [
                                        [
                                            'name' => 'Mahiga Central',
                                            'villages' => ['Kiriaini', 'Gikondi']
                                        ]
                                    ]
                                ]
                            ]
                        ]
                    ]
                ]
            ]
        ],
        []
    ];
}

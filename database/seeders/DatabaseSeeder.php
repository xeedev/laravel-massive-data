<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\City;
use App\Models\Country;
use App\Models\Town;
use App\Models\User;
use App\Models\World;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
//         \App\Models\User::factory(10,'')->create();
//
//        // \App\Models\User::factory()->create([
//        //     'name' => 'Test User',
//        //     'email' => 'test@example.com',
//        // ]);
        $totalCountries = [
            'Afghanistan',

            'Albania',
        'Algeria',

        'Andorra',
        'Angola',

        'Antigua and Barbuda',
        'Argentina',

        'Armenia',
        'Australia',

        'Austria',
        'Azerbaijan',

        'Bahamas',
        'Bahrain',

        'Bangladesh',
        'Barbados',

        'Belarus',
        'Belgium',

        'Belize',
        'Benin',

        'Bhutan',
        'Bolivia',

        'Bosnia and Herzegovina',
        'Botswana',

        'Brazil',
        'Brunei',

        'Bulgaria',
        'Burkina Faso',

        'Burundi',
        'Côte dIvoire',
        'Cabo Verde',
        'Cambodia',
        'Cameroon',
        'Canada',
        'Central African Republic',
        'Chad',
        'Chile',
        'China',
        'Colombia',
        'Comoros',
        'Congo (Congo-Brazzaville)',
        'Costa Rica',
        'Croatia',
        'Cuba',
        'Cyprus',
        'Czechia (Czech Republic)',
        'Democratic Republic of the Congo',
        'Denmark',
        'Djibouti',
        'Dominica',
        'Dominican Republic',
        'Ecuador',
        'Egypt',
        'El Salvador',
        'Equatorial Guinea',
        'Eritrea',
        'Estonia',
        '"Eswatini (fmr. ""Swaziland"")"',
        'Ethiopia',
        'Fiji',
        'Finland',
        'France',
        'Gabon',
        'Gambia',
        'Georgia',
        'Germany',
        'Ghana',
        'Greece',
        'Grenada',
        'Guatemala',
        'Guinea',
        'Guinea-Bissau',
        'Guyana',
        'Haiti',
        'Holy See',
        'Honduras',
        'Hungary',
        'Iceland',
        'India',
        'Indonesia',
        'Iran',
        'Iraq',
        'Ireland',
        'Israel',
        'Italy',
        'Jamaica',
        'Japan',
        'Jordan',
        'Kazakhstan',
        'Kenya',
        'Kiribati',
        'Kuwait',
        'Kyrgyzstan',
        'Laos',
        'Latvia',
        'Lebanon',
        'Lesotho',
        'Liberia',
        'Libya',
        'Liechtenstein',
        'Lithuania',
        'Luxembourg',
        'Madagascar',
        'Malawi',
        'Malaysia',
        'Maldives',
        'Mali',
        'Malta',
        'Marshall Islands',
        'Mauritania',
        'Mauritius',
        'Mexico',
        'Micronesia',
        'Moldova',
        'Monaco',
        'Mongolia',
        'Montenegro',
        'Morocco',
        'Mozambique',
        'Myanmar (formerly Burma)',
        'Namibia',
        'Nauru',
        'Nepal',
        'Netherlands',
        'New Zealand',
        'Nicaragua',
        'Niger',
        'Nigeria',
        'North Korea',
        'North Macedonia',
        'Norway',
        'Oman',
        'Pakistan',
        'Palau',
        'Palestine State',
        'Panama',
        'Papua New Guinea',
        'Paraguay',
        'Peru',
        'Philippines',
        'Poland',
        'Portugal',
        'Qatar',
        'Romania',
        'Russia',
        'Rwanda',
        'Saint Kitts and Nevis',
        'Saint Lucia',
        'Saint Vincent and the Grenadines',
        'Samoa',
        'San Marino',
        'Sao Tome and Principe',
        'Saudi Arabia',
        'Senegal',
        'Serbia',
        'Seychelles',
        'Sierra Leone',
        'Singapore',
        'Slovakia',
        'Slovenia',
        'Solomon Islands',
        'Somalia',
        'South Africa',
        'South Korea',
        'South Sudan',
        'Spain',
        'Sri Lanka',
        'Sudan',
        'Suriname',
        'Sweden',
        'Switzerland',
        'Syria',
        'Tajikistan',
        'Tanzania',
        'Thailand',
        'Timor-Leste',
        'Togo',
        'Tonga',
        'Trinidad and Tobago',
        'Tunisia',
        'Turkey',
        'Turkmenistan',
        'Tuvalu',
        'Uganda',
        'Ukraine',
        'United Arab Emirates',
        'United Kingdom',
        'United States of America',
        'Uruguay',
        'Uzbekistan',
        'Vanuatu',
        'Venezuela',
        'Vietnam',
        'Yemen',
        'Zambia',
        'Zimbabwe'
        ];
        $world = World::updateOrCreate(
            [
                'name' => 'Earth'
            ]
        );
        if ($world){
            $countryData = [];
            foreach ($totalCountries as $country){
                $countryData[] = [
                      'name'      => $country,
                      'area'      => fake()->numberBetween(9999999,9999999999),
                      'wealth'    => fake()->numberBetween(9999999,9999999999),
                      'people'    => fake()->numberBetween(9999999,9999999999),
                      'world_id'  => $world->id,
                      'updated_at' => now(),
                      'created_at' => now(),
                  ];
//                if ($country){
//                    for ($i=0; $i<100; $i++){
//                        $city = City::create(
////                            [
//                                'name'      => fake()->city(),
//                                'area'      => fake()->numberBetween(9999999,9999999999),
//                                'wealth'    => fake()->numberBetween(9999999,9999999999),
//                                'people'    => fake()->numberBetween(9999999,9999999999),
//                                'country_id'  => $country->id,
//                                'updated_at' => now(),
//                                'created_at' => now(),
//                            ]
//                        );
//                        if ($city){
//                            for($j=0; $j <1000; $j++){
//                                $town = Town::create(
//                                    [
//                                        'name' => fake()->name(),
//                                        'schools' => fake()->numberBetween(9999999,9999999999),
//                                        'hospitals' => fake()->numberBetween(9999999,9999999999),
//                                        'colleges' => fake()->numberBetween(9999999,9999999999),
//                                        'bars' => fake()->numberBetween(9999999,9999999999),
//                                        'city_id' => $city->id,
//                                        'updated_at' => now(),
//                                        'created_at' => now(),
//                                    ]
//                                );
//                                if($town){
//                                    for ($a = 0; $a < 10000; $a++){
//                                        User::create(
//                                            [
//                                                'name' => fake()->name(),
//                                                'email' => fake()->safeEmail(),
//                                                'profession' => $this->getProfession(),
//                                                'gender' => $this->getGender(),
//                                                'income' => fake()->numberBetween(1000000,1000000000),
//                                                'email_verified_at' => now(),
//                                                'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
//                                                'remember_token' => Str::random(10),
//                                                'town_id' => $town->id,
//                                                'updated_at' => now(),
//                                                'created_at' => now(),
//                                            ]
//                                        );
//                                    }
//                                }
//                            }
//                        }
//                    }
                }
            Country::insert($countryData);
            $countryIds = Country::all()->pluck('id');
            $cityData = [];
            foreach ($countryIds as $cid){
                for($i = 0; $i<10; $i++){
                    $cityData[] = [
                        'name'      => fake()->city(),
                        'area'      => fake()->numberBetween(9999999,9999999999),
                        'wealth'    => fake()->numberBetween(9999999,9999999999),
                        'people'    => fake()->numberBetween(9999999,9999999999),
                        'country_id'  => $cid,
                        'updated_at' => now(),
                        'created_at' => now(),
                    ];
                }
            }
            City::insert($cityData);
            $cityIds = City::all()->pluck('id');
            $townData = [];
            foreach ($cityIds as $cityId){
                for($i = 0; $i<100; $i++){
                    $townData[] = [
                        'name' => fake()->name(),
                        'schools' => fake()->numberBetween(9999999,9999999999),
                        'hospitals' => fake()->numberBetween(9999999,9999999999),
                        'colleges' => fake()->numberBetween(9999999,9999999999),
                        'bars' => fake()->numberBetween(9999999,9999999999),
                        'city_id' => $cityId,
                        'updated_at' => now(),
                        'created_at' => now(),
                    ];
                }
            }
            foreach (array_chunk($townData,1000) as $chunk){
                Town::insert($chunk);
            }
            $townIds = Town::all()->pluck('id');
            $userData = [];
            foreach ($townIds as $tId){
                for($j = 0; $j < 20; $j++){
                    $userData[] = [
                        'name' => fake()->name(),
                        'email' => fake()->safeEmail(),
                        'profession' => $this->getProfession(),
                        'gender' => $this->getGender(),
                        'income' => fake()->numberBetween(1000000,1000000000),
                        'email_verified_at' => now(),
                        'password' => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', // password
                        'remember_token' => Str::random(10),
                        'town_id' => $tId,
                        'updated_at' => now(),
                        'created_at' => now(),
                    ];
                }
            }
            foreach (array_chunk($userData,1000) as $userChunk){
                User::insert($userChunk);
            }

            }
    }
    public function getProfession(){
        $professions = [
            'doctor', 'teacher', 'nurse', 'engineer', 'thief', 'astronaut',
            'plumber', 'fire fighter', 'mechanic', 'dealer'
        ];
        $profession = rand(0,9);
        return $professions[$profession];
    }
    public function getGender(){
        $genders = [
            'male','female','other','prefer not say'
        ];
        $gender = rand(0,3);
        return $genders[$gender];
    }
}

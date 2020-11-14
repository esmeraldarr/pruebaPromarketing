<?php

use Illuminate\Database\Seeder;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('games')->insert([
            ['name' => 'BAMBOO RUSH',
             'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=806&lang=es',
             'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet elit id libero scelerisque convallis et et massa. Maecenas ut pharetra est, sit amet commodo lorem. Ut at mi iaculis massa sodales dapibus. Curabitur lorem enim, dignissim quis suscipit eu, dapibus sed augue. Nullam venenatis odio ac purus ultricies, fringilla semper ipsum sagittis. Pellentesque in lorem nec magna laoreet malesuada vitae eget turpis.',
             'url_image' => 'https://winchiletragamonedas.com/public/images/games/bamboo_rush.jpeg',
             'status' => '1'
            ],
            ['name' => 'REELS OF WEALTH',
             'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=795&lang=es',
             'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet elit id libero scelerisque convallis et et massa. Maecenas ut pharetra est, sit amet commodo lorem. Ut at mi iaculis massa sodales dapibus. Curabitur lorem enim, dignissim quis suscipit eu, dapibus sed augue. Nullam venenatis odio ac purus ultricies, fringilla semper ipsum sagittis. Pellentesque in lorem nec magna laoreet malesuada vitae eget turpis.',
             'url_image' => 'https://winchiletragamonedas.com/public/images/games/reels_of_wealth.jpeg',
             'status' => '2'
            ],
            ['name' => 'DRAGON & PHOENIX',
             'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=814&lang=es',
             'description' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam sit amet elit id libero scelerisque convallis et et massa. Maecenas ut pharetra est, sit amet commodo lorem. Ut at mi iaculis massa sodales dapibus. Curabitur lorem enim, dignissim quis suscipit eu, dapibus sed augue. Nullam venenatis odio ac purus ultricies, fringilla semper ipsum sagittis. Pellentesque in lorem nec magna laoreet malesuada vitae eget turpis.',
             'url_image' => 'https://winchiletragamonedas.com/public/images/games/dragon_phoenix.jpeg',
             'status' => '1'
            ],
            ['name' => 'TAKE THE BANK',
             'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=813&lang=es',
             'description' => 'Maecenas aliquet leo erat, vitae interdum quam volutpat vitae. Sed vel lobortis enim. Curabitur tempor consequat turpis a suscipit. Fusce a sapien diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris fermentum placerat vestibulum. Fusce et laoreet ligula, eget consectetur nulla. Praesent vitae sagittis mauris. Vivamus hendrerit hendrerit aliquet. Aliquam mauris augue, bibendum gravida ligula vitae, rutrum ultricies eros.',
             'url_image' => 'https://winchiletragamonedas.com/public/images/games/take_the_bank.jpeg',
             'status' => '3'
            ],
            ['name' => 'CAISHEN’S ARRIVAL',
             'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=812&lang=es',
             'description' => 'Maecenas aliquet leo erat, vitae interdum quam volutpat vitae. Sed vel lobortis enim. Curabitur tempor consequat turpis a suscipit. Fusce a sapien diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris fermentum placerat vestibulum. Fusce et laoreet ligula, eget consectetur nulla. Praesent vitae sagittis mauris. Vivamus hendrerit hendrerit aliquet. Aliquam mauris augue, bibendum gravida ligula vitae, rutrum ultricies eros.',
             'url_image' => 'https://winchiletragamonedas.com/public/images/games/caishens_arrival.jpeg',
             'status' => '2'
            ],
            ['name' => 'GEMMED!',
             'url' => 'https://latamwin-gp3.discreetgaming.com/cwguestlogin.do?bankId=3006&gameId=811&lang=es',
             'description' => 'Maecenas aliquet leo erat, vitae interdum quam volutpat vitae. Sed vel lobortis enim. Curabitur tempor consequat turpis a suscipit. Fusce a sapien diam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Mauris fermentum placerat vestibulum. Fusce et laoreet ligula, eget consectetur nulla. Praesent vitae sagittis mauris. Vivamus hendrerit hendrerit aliquet. Aliquam mauris augue, bibendum gravida ligula vitae, rutrum ultricies eros.',
             'url_image' => 'https://winchiletragamonedas.com/public/images/games/gemmed.jpeg',
             'status' => '3'
            ],
        ]);
    }
}

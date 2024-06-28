<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EventSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('events')->delete();
        DB::table('events')->insert([

            [
                'id' => 'EV000100001',
                'name' => 'INAUGURAZIONE SOCIAL WINE',
                'date' => '20231201',
                'category' => 'Vino - Inaugurazione - Degustazione',
                'description' => 'Degustazione inaugurale di prodotti tipici e locali, presentazione dei fondatori e rinfresco con le attività convenzionate dal Social Wine.',
                'price' => '10',
                'location' => 'Ferrara, via G. Adelardi 7, I Due Gobbi',
                'image_path' => 'Event/inaugurazione.png',
                'supplier_id' => '05321000622'
            ] ,  
            [
                'id' => 'EV000100002',
                'name' => 'INAUGURAZIONE in SECONDA',
                'date' => '20231208',
                'category' => 'Vino - Inaugurazione - Degustazione',
                'description' => 'Degustazione di carni e vini rossi locali, composto da antipasto pinzini e salumi del territorio e secondo sarà filetto di suino con verdure della zona.',
                'price' => '17',
                'location' => 'Ferrara, via G. Adelardi 9, The LAB',
                'image_path' => 'Event/inaugurazione02.png',
                'supplier_id' => '05321000622'
            ],  
            [
                'id' => 'EV000100003',
                'name' => 'Tutti a Bere con Simo!',
                'date' => '20231210',
                'category' => 'Vino - Degustazione - Porto',
                'description' => 'Degustazione di Porto, diverse selezioni con piattino d\'accompagnamento abbinato.',
                'price' => '15',
                'location' => 'Ferrara, via San Romano 99, Olivia in Rosa',
                'image_path' => 'Event/simone02.png',
                'supplier_id' => '05321000100'
            ],  
            [
                'id' => 'EV000100004',
                'name' => 'Ferrara di Montepulciano',
                'date' => '20231223',
                'category' => 'Vino - Inaugurazione - Degustazione - Toscana - Mangiare',
                'description' => 'Degustazione di carni e vini rossi toscani, composto da antipasto di crostini misti e un primo/secondo a scelta e una bottiglia d\'acqua ogni 2 persone.',
                'price' => '30',
                'location' => 'Ferrara, via Saraceno 85, Antica Maremma',
                'image_path' => 'Event/maremma01.png',
                'supplier_id' => '38922554653'
            ],  
            [
                'id' => 'EV000100005',
                'name' => 'Ferrara di Montepulciano 2',
                'date' => '20240120',
                'category' => 'Vino - Inaugurazione - Degustazione - Toscana - Mangiare',
                'description' => 'Degustazione di carni e vini rossi toscani, composto da antipasto di crostini misti e un primo/secondo a scelta e una bottiglia d\'acqua ogni 2 persone.',
                'price' => '30',
                'location' => 'Ferrara, via Saraceno 85, Antica Maremma',
                'image_path' => 'Event/maremma01.png',
                'supplier_id' => '38922554653'
            ],  
            [
                'id' => 'EV000100006',
                'name' => 'Ferrara in Valpolicella',
                'date' => '20240113',
                'category' => 'Vino - Inaugurazione - Degustazione - Veneto - Mangiare',
                'description' => 'Degustazione di vini rossi veneti, composto da un tagliere d\'antipasto e un secondo a scelta e una bottiglia d\'acqua ogni 2 persone.',
                'price' => '30',
                'location' => 'Runco, via Quartiere 94/F, La Chiocciola',
                'image_path' => 'Event/caso01.png',
                'supplier_id' => '05321000100'
            ]
            ]);    }
}

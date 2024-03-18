<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ActivesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $teachers = [
            [
                'name' => 'Quranboyev Azizbek Mansurbek o’g’li',
                'desc' => 'Ko`krak nishoni sohibi',
                'img' => '4.jpg'
            ],
            [
                'name' => 'Odilbekova Beg’ubor Ulug’bek qizi',
                'desc' => 'Ko`krak nishoni sohibi',
                'img' => '5.jpg'
            ],
            [
                'name' => 'Boltayev Kamron Adilbekovich',
                'desc' => 'Vazir stipendiyasi sohibi',
                'img' => '6.jpg'
            ],
            [
                'name' => 'Xudayberganova Sevinchoy G’ulomjon qizi',
                'desc' => 'Vazir stipendiyasi sohibi',
                'img' => '7.jpg'
            ],
        ];

        foreach ($teachers as $teacher) {
            DB::table('actives')->insert([
                'name' => $teacher['name'],
                'desc' => $teacher['desc'],
                'img' => $teacher['img'],
            ]);
        }
        $teachers = [
            [
                'name' => 'Quronboyev Zafarbek Rasuljon o’g’li',
                'desc' => '
                    103-guruh o’quvchisi. 	Tarix 	fanidan (100 ball) 
                    1-o’rin.
                ',
                'img' => '1.jpg'
            ],
            [
                'name' => 'Salimova Aziza Umidovna',
                'desc' => '
                    108-guruh 	o’quvchisi. Rus tili 	fanidan (49,4 ball) 
                    3-o’rin.
                ',
                'img' => '2.jpg'
            ],
            [
                'name' => 'Sultonboyev Dostonbek Murodjon o’g’li',
                'desc' => '
                    202-guruh o’quvchisi. 	Fransuz tili fanidan 
                    (53,2 ball) 3-o’rin.
                ',
                'img' => '3.jpg'
            ],
        ];

        foreach ($teachers as $teacher) {
            DB::table('olimpics')->insert([
                'name' => $teacher['name'],
                'desc' => $teacher['desc'],
                'img' => $teacher['img'],
            ]);
        }

        // $teachers = [
        //     [
        //         'header' => 'ЗИЁ МАСКАНИГА САЁҲАТ',
        //         'description' => '
        //             ИИВ Хоразм академик лицейида “Ватанга ва халққа садоқат билан хизмат қилиш – олий бурчимиз!” шиори остида ўтказилаётган “Маънавият ойлиги” доирасида кўплаб учрашувлар, давра суҳбатлари ўтказилиб, тарихий жойларга саёҳатлар ташкил этилмоқда.
        //             Лицей ўқувчилари “Китобхонлик ҳафталиги” доирасида Маҳмуд Замахшарий номидаги Хоразм вилояти ахборот-кутубхона марказига ташриф буюришди. Марказ мутахассислари ўқувчиларга кутубхонада яратилган шароитлар, имкониятлар ҳамда адабиётлар тўғрисида маълумотлар беришди. 
        //             Ўқувчилар тадбир давомида қизиқарли маълумотларга эга бўлиш билан бирга кутубхонага аъзо бўлишди ва ўзларини қизиқтирган саволларга жавоб олишди. 
                    
        //             Беҳзод ҚУРЁЗОВ,
        //             ИИВ Хоразм академик лицейи директори 
        //             ўринбосари, подполковник.
        //         ',
        //         'img' => 'img_1.png'
        //     ],
        // ];

        // foreach ($teachers as $teacher) {
        //     DB::table('posts')->insert([
        //         'header' => $teacher['header'],
        //         'description' => $teacher['description'],
        //         'img' => $teacher['img'],
        //         'created_at' => now()
        //     ]);
        // }

        $teachers = [
                [
                    'img' => 'img.png'
                ],

                [
                    'img' => 'img_1.png'
                ],


                [
                    'img' => 'img_2.png'
                ],


                [
                    'img' => 'img_3.png'
                ],


                [
                    'img' => 'img_4.png'
                ],


                [
                    'img' => 'img_5.png'
                ],


                [
                    'img' => 'img_6.png'
                ],


                [
                    'img' => 'img_7.png'
                ],


                [
                    'img' => 'img_8.png'
                ],


                [
                    'img' => 'img_9.png'
                ],


                [
                    'img' => 'img_10.png'
                ],


                [
                    'img' => 'img_11.png'
                ],


                [
                    'img' => 'img_12.png'
                ],


                [
                    'img' => 'img_13.png'
                ],


                [
                    'img' => 'img_14.png'
                ],


                [
                    'img' => 'img_15.png'
                ],


                [
                    'img' => 'img_16.png'
                ],


                [
                    'img' => 'img_17.png'
                ],


                [
                    'img' => 'img_18.png'
                ],


                [
                    'img' => 'img_19.png'
                ],


                [
                    'img' => 'img_20.png'
                ],


                [
                    'img' => 'img_21.png'
                ],


                [
                    'img' => 'img_22.png'
                ],


                [
                    'img' => 'img_23.png'
                ],


                [
                    'img' => 'img_24.png'
                ],


                [
                    'img' => 'img_25.png'
                ],


                [
                    'img' => 'img_26.png'
                ],


                [
                    'img' => 'img_27.png'
                ],


                [
                    'img' => 'img_28.png'
                ],


                [
                    'img' => 'img_29.png'
                ],


                [
                    'img' => 'img_30.png'
                ],


                [
                    'img' => 'img_31.png'
                ],


                [
                    'img' => 'img_32.png'
                ],


                [
                    'img' => 'img_33.png'
                ],


                [
                    'img' => 'img_34.png'
                ],


                [
                    'img' => 'img_35.png'
                ],


                [
                    'img' => 'img_36.png'
                ],


                [
                    'img' => 'img_37.png'
                ],


                [
                    'img' => 'img_38.png'
                ],


                [
                    'img' => 'img_39.png'
                ],


                [
                    'img' => 'img_40.png'
                ],


                [
                    'img' => 'img_41.png'
                ],


                [
                    'img' => 'img_42.png'
                ],


                [
                    'img' => 'img_43.png'
                ],


                [
                    'img' => 'img_44.png'
                ],


                [
                    'img' => 'img_45.png'
                ],


                [
                    'img' => 'img_46.png'
                ],


                [
                    'img' => 'img_47.png'
                ],


                [
                    'img' => 'img_48.png'
                ],
        ];

        foreach ($teachers as $teacher) {
            DB::table('photos')->insert([
                'image' => $teacher['img'],
                'created_at' => now()
            ]);
        }
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class VeteranSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $teachers = [
            [
                'name' => 'Ускинов Самандар Сапарбаевич',
                'desc' => '
Ўзбекистон Республикаси ИИВ Хоразм академик лицейи тарих фани бош ўқитувчиси 

Мукофотланмаган.
Педагогик  стажи  26 йил.
Бош ўқитувчи лавозимида 2021 йилдан буён.

Ўқитувчи С.С.Ускинов Республика ҳукумати ва раҳбарияти томонидан чиқарилган қарор ва фармойишларни, Таълим соҳасига оид, ички ишлар органлари фаолиятини белгиловчи буйруқ ва кўрсатмаларни мукаммал билади ҳамда улардан ўз хизмат фаолияти давомида тўғри ва аниқ фойдаланади. Давлат ва халқ манфаатларини ҳамма нарсадан устун қўяди.
С. С. Ускинов  илғор педагог сифатида  иннoвацион технологиялар асосида ёш авлодни ҳар томонлама етук инсон қилиб вояга етказиш йўлида самарали меҳнат қилмоқда. 
Ёшларнинг маънавий-маърифий билимларини юксалтириш, баркамол авлодни вояга етказиш, ўзлигимизни англаш, миллий қадриятларни ривожлантириш масалаларига катта эътибор қаратади.  
2019 йил 27 сентябр кунги Ўзбекистон Республикаси Ички ишлар визири генерал-лайтенант П.Р.Бобожоновнинг 306-сонли буйруғига асосан ёш авлодни интеллектуал  ва маънавий салоҳиятини юксалтириш, уларни она Ватанга  муҳаббат қонунга ҳурмат руҳида тарбиялаш ишларга қўшган муносиб ҳиссаси ҳамда 1 октябр ўқитувчи ва мураббийлар куни муносабати билан Вазирнинг фахрий ёрлиғини олганю
          2021 йил 1 октябр куни Юртимиз келажаги ва таянчи бўлган ёш авлодни тарбиялашда ўзининг билими, бой тажрибаси, касбий маҳорати билан озод ва обод юртимиз фарзандларига илм-фан  сирларини, она Ватанга муҳаббат, юртга муносиб фарзанд бўлиш, қалбларида ел-юртга садоқат туйғуси билан камол топишларида яқиндан кўмак бериб келаётганлиги ҳамда 1 октябр – Устоз ав мураббийлар куни муносабати билан С.С.Ускинов Хоразм вилоят Ички ишлар Бош Бошқармаси бошлиғи генерал-майор Д.Назармуҳамедовнинг фахрий ёрлиғи билан тақдирланган
Ўзбекистон Республикаси Президентининг 2021 йил 24 майдаги Фармонига биноан С. С. Ускинов таълим-тарбия соҳасидаги кўп йиллик самарали меҳнатлари, ички ишлар таълим муассасаларида таҳсил олаётган ёшларнинг интеллектуал ва маънавий салоҳиятини ошириш, уларни она Ватанга муҳаббат, хизмат бурчига садоқат руҳида тарбиялаш, ёш авлод вакилларига илм-фан асослари ҳамда замонавий билимларни ўргатиш ишларига қўшган муносиб ҳиссаси учун “Ўзбекистон Республикаси мустақиллигининг 30 йиллиги” кўкрак нишони билан тақдирланган.
 Ўзбекистон Республикаси ИИВ томонидан Республика академик лицейлари педагоглари ўртасида 2022 йил октябр ойида ўтказилган “Энг яхши фан ўқитувчиси” кўрик-танловининг республика босқичида тарих фани бўйича фахрли I ўринни эгаллади ва I даражали диплом ва қимматбаҳо совға –ноутбук билан тақдирланди. 
2023 йил С.С.Ускинов раҳбарлик қилган 201-гуруҳ битирувчиларининг 88 фоизи Ўзбекистон Республикаси Ички ишлар академияси ва бошқа олий ўқув юртлари талабаси бўлишди 
С.С.Ускиновнинг “Тарих фани орқали ўқувчиларда таҳлил қилиш кўникмасини ривожлантиришда инновацион методлардан фойдаланиш” мавзусидаги илғор иш тажрибаси республика миқёсида оммалаштирилган.     С.С. Ускинов академик лицей битирувчиларининг олий таълимга қамровининг оширилишига муносиб ҳисса қўшиб келмоқда. У таълим берган ўқувчилар вилоятнинг турли жабҳалари, хусусан ички ишлар органларида муносиб меҳнат қилиб келмоқда.  Лицейнинг ёш педагогларига устозлик қилиб, уларга ўқитувчиликнинг сир-асрорларини ўргатиб келмоқда. 
Маҳалласининг ибратли оила бошлиғи. Икки нафар фарзанди ҳам шарафли устозлик касбини танлаган.
Фидоий ва жонкуяр, ташаббускор устоз сифатида таълим жамоатчилиги, вилоят фаоллари ва аҳоли ҳурматини қозонган.
                ',
                'img' => 'user.png',
            ],
            [
                'name' => 'ABDULLAYEV MADAMIN SAOTBOYEVICH',
                'desc' => '
IIV Xorazm akademik litseyi “Ijtimoiy-gumanitar va huquqiy fanlar” kafedrasi boshlig‘i, falsafa fanlari bo‘yicha falsafa doktori (PhD)

Abdullayev Madamin Saotboyevich 1972-yilda Xorazm viloyati Gurlan tumanida tug‘ilgan, ma’umoti oliy, 1997-yilda Toshkent davlat pedagogika instituti “Tarix, inson va jamiyat” yo‘nalishini tugatgan. Mehnat faoliyatini 1996-yilda Toshkent shahar 177-son umumta’lim maktabida boshlagan. 1997-2001-yillarda Xorazm viloyati Gurlan tumani 18-son umumta’lim maktabida o‘qituvchi, 2001-2022-yillarda Urganch davlat universiteti Tarix fakulteti “O‘zbekistonda demokratik jamiyat qurish nazariyasi” kafedrasida o‘qituvchi va katta o‘qituvchi, 2022-2023-yillarda Urganch innovatsion universiteti “Ijtimoiy-gumanitar fanlar va pedagogika” fakulteti dekani lavozimlarida faoliyat olib borgan. 2023-yil 20-oktyabrdan bugungacha  IIV Xorazm akademik litseyi “Ijtimoiy-gumanitar va huquqiy fanlar” kafedrasi boshlig‘i lavozimida ishlab kelmoqda. 
Pedagogik staji 28 yil.
Abdullayev Madamin Saotboyevich 2023-yil 14-oktyabrda Buxoro davlat universiteti huzuridagi Ixtisoslashgan Kengashda 09.00.03-Falsafa tarixi ixtisosligi bo‘yicha “Maxtumquli Firog‘iy ma’naviy merosining falsafiy tahlili” mavzusidagi dissertatsiyasini muvaffaqiyatli himoya qilib, falsafa fanlari bo‘yicha falsafa doktori (PhD) ilmiy darajasini olishga erishdi. Abdullayev Madamin Saotboyevich bugungacha 1 ta risola, 2 ta uslubiy qo‘llanma, 30 ziyod ilmiy maqolalarini nashr qildirgan. Shunigdek, 20 dan ortiq xalqaro va respublika ilmiy-amaliy anjumanlarida ma’ruzalari bilan qatnashgan.
                ',
                'img'=> 'img.png',
            ],
        ];

        foreach ($teachers as $teacher) {
            DB::table('veterans')->insert([
                'name' => $teacher['name'],
                'desc' => $teacher['desc'],
                'img' => $teacher['img'],
            ]);
        }
    }
}

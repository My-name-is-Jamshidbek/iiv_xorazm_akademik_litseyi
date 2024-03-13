@extends('layouts.layout')
@section('content')

<!--====== SEARCH BOX PART ENDS ======-->

<!--====== PAGE BANNER PART START ======-->

<section id="page-banner" class="pt-0 pb-130 bg_cover" data-overlay="8" style="background-image: url({{asset('fasset/images/slide1.jpg')}});">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-banner-cont">
                    <h2>IIVning Xorazm akademik litseyi rahbariyati</h2>

                </div> <!-- page banner cont -->
            </div>
        </div> <!-- row -->
    </div> <!-- container -->
</section>

<!--====== PAGE BANNER PART ENDS ======-->

<!--====== TEACHERS PART START ======-->

<section id="teachers-singel" class="pt-70 pb-120 gray-bg">
    <div class="container">
        <table class="table table-bordered">
            <thead>
            <tr>
                <th>Unvon</th>
                <th>F.I.O</th>
                <th>Tug‘ilgan kuni</th>
                <th>Tug‘ilgan joy</th>
                <th>Vazifasi</th>
                <th>Boshlangan sana</th>
                <th>Tugash sana</th>
                <th>Rasmi</th>
            </tr>
            </thead>
            <tbody>
            <tr>
                <td>Podpolkovnik</td>
                <td>Yakubov Lochinbek Baxtiyorovich</td>
                <td>01.03.1984 yil</td>
                <td>Toshkent shahrida</td>
                <td>Akademik lisey direktori</td>
                <td>27.03.2008 y</td>
                <td>31.12.2022 y</td>
                <td><img src="{{asset('fasset/images/ylb.jpg')}}" alt="Foto"></td>
            </tr>
            <tr>
                <td>Podpolkovnik</td>
                <td>Quryozov Bexzod Quryozovich</td>
                <td>27.11.1983 yil</td>
                <td>Xorazm viloyati, Xonqa tumanida</td>
                <td>Akademik lisey direktorining ma'naviy-ma'rifiy ishlar bo‘yicha o‘rinbosari</td>
                <td>02.03.2006 y</td>
                <td>16.12.2021 y</td>
                <td><img src="{{asset('fasset/images/qbq.jpg')}}" alt="Foto"></td>
            </tr>
            <tr>
                <td></td>
                <td>Erkinov Qudrat To‘lqinovich</td>
                <td>03.07.1993 yil</td>
                <td>Xorazm viloyati, Yangibozor tumanida</td>
                <td>Akademik lisey direktorining o‘quv ishlari bo‘yicha o‘rinbosari</td>
                <td>08.01.2024 y</td>
                <td></td>
                <td><img src="{{asset('fasset/images/eqt.jpg')}}" alt="Foto"></td>
            </tr>
            <tr>
                <td>Kapitan</td>
                <td>Bobojonov Dilmurod Jabbarganovich</td>
                <td>10.02.1988 yil</td>
                <td>Xorazm viloyati, Urganch tumanida</td>
                <td>Direktorning moliyaviy va xo‘jalik ta'minoti bo‘yicha o‘rinbosari</td>
                <td>26.07.2015 y</td>
                <td>01.05.2023 y</td>
                <td><img src="{{asset('fasset/images/bdj.jpg')}}" alt="Foto"></td>
            </tr>
            <tr>
                <td>Katta serjant</td>
                <td>Artikov Surojbek Shonazarovich</td>
                <td>17.06.1997 yil</td>
                <td>Xorazm viloyati, Urganch shahrida</td>
                <td>O‘quv kurslari kurs komandiri</td>
                <td>12.09.2018 y</td>
                <td>01.05.2023 y</td>
                <td><img src="{{asset('fasset/images/ass.jpg')}}" alt="Foto"></td>
            </tr>
            <tr>
                <td>Katta serjant</td>
                <td>Masharipov Anvar Marimbaevich</td>
                <td>17.07.1988 yil</td>
                <td>Xorazm viloyati, Urganch tumanida</td>
                <td>O‘quv kurslari kurs komandiri</td>
                <td>09.09.2011 y</td>
                <td>06.07.2023 y</td>
                <td><img src="{{asset('fasset/images/mam.jpg')}}" alt="Foto"></td>
            </tr>
            <tr>
                <td></td>
                <td>Ismailova Ximoyat Matnazarovna</td>
                <td>12.12.1984 yil</td>
                <td>Xorazm viloyati, Bog‘ot tumanida</td>
                <td>Umumta'lim fanlari kafedrasi, kafedra boshlig‘i</td>
                <td>01.08.2023 y</td>
                <td></td>
                <td><img src="{{asset('fasset/images/ixm.jpg')}}" alt="Foto"></td>
            </tr>
            <tr>
                <td></td>
                <td>Abdullaev Madamin Saotboevich</td>
                <td>16.03.1972 yil</td>
                <td>Xorazm viloyati, Gurlan tumanida</td>
                <td>Ijtimoiy-gumanitar fanlar kafedrasi, kafedra boshlig‘i</td>
                <td>20.10.2023 y</td>
                <td></td>
                <td><img src="{{asset('fasset/images/ams.jpg')}}" alt="Foto"></td>
            </tr>
            <tr>
                <td></td>
                <td>Raximova Sulurxon Djumaniyazovna</td>
                <td>20.05.1975 yil</td>
                <td>Xorazm viloyati, Qo‘shko‘pir tumanida</td>
                <td>Tillarni o‘rganish kafedrasi, kafedra boshlig‘i</td>
                <td>10.08.2023 y</td>
                <td></td>
                <td><img src="{{asset('fasset/images/rsd.jpg')}}" alt="Foto"></td>
            </tr>
            </tbody>
        </table>
    </div> <!-- container -->
</section>

<!--====== EVENTS PART ENDS ======-->
<x-layouts.footer></x-layouts.footer>
@endsection

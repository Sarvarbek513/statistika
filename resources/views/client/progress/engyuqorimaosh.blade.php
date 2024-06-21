@extends('layouts.appclient')
@section('content')
    <!-- Newsletter Start -->
    <div style="padding-top: 70px;">
        <div class="container mt-5">
            <div class="subscription-banner-about">
                <div class="subscription-form">
                    <div class="text">
                        <h3 style="color: white;">KASB TANLASHGA YORDAM</h3>
                    </div>
                    <input type="text" placeholder="Qo`llanmani qidirish">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Main Start -->
    <div class="container mt-5 mb-5">


        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
            <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                <thead style="background-color: #112e51" class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th style="color: white;width: 35%" scope="col" class="px-6 py-3">
                        Kasb nomi
                    </th>
                    <th style="color: white" scope="col" class="px-6 py-3">
                        Grafik
                    </th>
                </tr>
                </thead>
                <tbody>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Muhandis
                        </th>
                        <td class="px-6 py-4" style="text-align: left; vertical-align: middle;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 75%; height: 25px; display: inline-block; vertical-align: middle;">
                            <p style="display: inline-block; margin-left: 10px; vertical-align: middle;font-size: 16px;">51,00 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Xavfsizlik bo'yicha muhandis
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 70%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">	40,00 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Senior PHP dasturchi
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 60%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">38,50 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            MDasturchi (Middle)
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 60%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">37,95 mln so`m</p>
                        </td>
                    </tr>
                    <!-- Continue adding rows in the same format for each skill -->
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Biznes kommunikatsiya
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 55%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">36,90 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Ravon nutq
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 50%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">32,75 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Biznes muzokaralar
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 50%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">31,95 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Jamoada ishlash
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 48%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">30,78 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Shartnomalar tuzish
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 48%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">29,98 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Sotuvni rivojlantirish
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 45%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">28,7 mln so`m</p>
                        </td>
                    </tr>
                    <!-- Continue with additional rows in the same format -->
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Rivojlanish va o'qish
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 43%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">27,45 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Tashkilotchilik qobiliyatlari
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 42%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">26,48 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Kompyuterdan foydalanish
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 40%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">25,78 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Katta hajmdagi ma'lumotlar bilan ishlash
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 38%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">24,96 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Taqdimotlar qila olish
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 37%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">23,36 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Sotuvni boshqarish
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 35%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">22,78 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Sotuvni rejalashtirish
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 33%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">21,94 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Xodimlarni o'qitish
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 31%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">20,54 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Analitik fikrlash
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 30%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">19,8 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Aniqlik va tafsilotlarga e'tibor
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 29%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">18,62 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Xodimlarni boshqarish
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 27%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">17,25 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Xodimlarni rag'batlantirish
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 27%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">16,80 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Savodxonlik
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 25%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">15,50 mln so`m</p>
                        </td>
                    </tr>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                            Jamoani boshqarish
                        </th>
                        <td class="px-6 py-4" style="display: flex; align-items: center;">
                            <img src="{{asset('assets/img/progress.png')}}" style="width: 24%; height: 25px">
                            <p style="margin-left: 10px;font-size: 16px;">14,95 mln so`m</p>
                        </td>
                    </tr>

                </tbody>
            </table>
        </div>

    </div>

    <!-- Main End -->

    <!-- Sahifa start -->
    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-3 mt-2">
                    <h5>Bu sahifa foydali bo`ldimi?</h5>
                </div>
                <div class="col-md-3 m">
                    <button style="border: 2.5px solid #370077;color: #370077;" class="btn"><b>Ha</b></button>
                    <button style="border: 2.5px solid #370077;margin-left: 12px;color: #370077;" class="btn"><b>Yo'q</b></button>
                </div>
            </div>
        </div>
    </div>
    <!-- Sahifa end -->

@endsection

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
        <div class="row">
            <div class="col-md-4">
                <div class="list-group">
                    <div style="display: flex;">
                        <a style="background-color: #112e51; color: white; width: 50%;display: block;border-top-left-radius: 15px;" href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <h5 class="mb-0 text-white">KASB GURUHLARI</h5>
                        </a>
                        <a style="background-color: #ffffff; color: white; width: 50%; display: block;" href="#" aria-current="true">
                        </a>
                    </div>
                    <ul class="text-ul">
                        <li class="text-li"><a style="text-decoration: none;color: #555555;" href="{{url('/kasbguruhlari')}}">Qonun chiqaruvchilar, yuqori mansabdor shaxslar va boshqaruvchilar</a></li>
                        <li class="text-li">Korporativ boshqaruvchilar</li>
                        <li class="text-li">Ishlab chiqarish va ixtisoslashtirilgan xizmatlar sohasidagi boʻlinmalar rahbarlari</li>
                        <li class="text-li">Mehmonxona biznesining rahbarlari, doʻkonlar va tegishli faoliyat sohalari rahbarlari (boshqaruvchilari)</li>
                        <li class="text-li">Fan va texnika sohasida professional-mutaxassislar</li>
                        <li class="text-li">Sogʻliqni saqlash sohasida professional-mutaxassislar</li>
                        <li class="text-li">Ta'lim sohasidagi professional-mutaxassislar</li>
                        <li class="text-li">Ma'muriyat va biznes sohasidagi professional-mutaxassislar</li>
                        <li class="text-li">Axborot kommunikatsiya texnologiyalari boʻyicha professional-mutaxassislar</li>
                        <li class="text-li">Madaniyat, gumanitar va huquq sohasidagi professional-mutaxassislar</li>
                        <li class="text-li">Fan va texnika sohasidagi mutaxassislar (texniklar)</li>
                        <li class="text-li">Sogʻliqni saqlashda oʻrta ma'lumotli tibbiyot xodimlari</li>
                        <li class="text-li">Ma'muriy va iqtisodiyot faoliyat boʻyicha mutaxassislar</li>
                        <li class="text-li">Huquqshunoslik, ijtimoiy ishlar, madaniyat va oʻxshash faoliyat sohasidagi yordamchi xodimlar</li>
                        <li class="text-li">AKT sohasidagi mutaxassis-texniklar</li>
                        <li class="text-li">Ofis texnikalariga xizmat koʻrsatish va umumiy profil xizmatchilari</li>
                        <li class="text-li">Aholiga xizmat koʻrsatish sohasi xizmatchilari</li>
                        <li class="text-li">Material qiymatliliklar hisobi va raqamli axborotlarga ishlov berish sohasidagi xizmatchilar</li>
                        <li class="text-li">Boshqa ofis xizmatchilari</li>
                        <li class="text-li">Individual xizmatlar sohasidagi xodimlar</li>
                        <li class="text-li">Sotuvchilar</li>
                        <li class="text-li">Yakka tartibda xizmat koʻrsatuvchi xodimlar</li>
                        <li class="text-li">Xususiy mulk va fuqarolarni muhofaza qilish xizmati xodimlari</li>
                        <li class="text-li">Qishloq xoʻjaligi mahsulotlarini ishlab chiqaruvchilari</li>
                        <li class="text-li">Ovchilar va oʻrmon hamda baliq mahsulotlaridan tovar ishlab chiqaruvchilar</li>
                        <li class="text-li">Qurilish sohasi va shunga oʻxshash soha ishchilari (elektriklardan tashqari)</li>
                        <li class="text-li">Metallga ishlov berish sanoati, mashinasozlik va shunga oʻxshash sohalar ishchilari</li>
                        <li class="text-li">Poligrafiya ishlab chiqarish va qoʻl mehnatining yuqori malakali ishchilari</li>
                        <li class="text-li">Elektrotexnika va elektronika sohasidagi ishchilar</li>
                        <li class="text-li">Oziq-ovqat, yogʻochni qayta ishlash, toʻqimachilik va tikuvchilik sanoati va turdosh kasblar ishchilari</li>
                        <li class="text-li">Sanoat uskunalari va statsionar qurilmalari operatorlari</li>
                        <li class="text-li">Yigʻuvchilar</li>
                        <li class="text-li">Koʻchma qurilmalar operatorlari va haydovchilari</li>
                        <li class="text-li">Uy xizmatchilari va farroshlar</li>
                        <li class="text-li">Qishloq va oʻrmon xoʻjaligi, baliqchilik va baliqshunoslikdagi malakasiz ishchilar</li>
                        <li class="text-li">Togʻ-kon sanoati, qurilish, qayta ishlash sanoati va transport sohasidagi malakasiz ishchilar</li>
                        <li class="text-li">Taom tayyorlashda yordamchilar</li>
                        <li class="text-li">Koʻcha sotuvchilari va boshqa koʻcha xizmatlarini koʻrsatadigan malakasiz xodimlar</li>
                        <li class="text-li">Chiqindilarni yigʻuvchi va boshqa malakasiz xodimlar</li>
                        <!-- More items here -->
                    </ul>
                </div>
            </div>
            <div class="col-md-8">
                <div class="list-group" style="background-color: #e9e9e9;">
                    <div style="display: flex;">
                        <a style="background-color: #112e51; color: white; width: 50%;display: block;border-top-left-radius: 15px;" href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <h5 class="mb-0 text-white">KASB TANLASH</h5>
                        </a>
                        <a style="background-color: #ffffff; color: white; width: 51%; display: block;" href="" aria-current="true">
                        </a>
                    </div>
                    <div class="row justify-content-center p-4" id="in-class">
                        <div class="col-md-4 mb-3">
                            <select style="border: none;" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <select style="border: none;" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <select style="border: none;" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <select style="border: none;" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3">
                            <select style="border: none;" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="col-md-4 mb-3"><button style="border: 1px solid #2d7db2;color: #2d7db2;">QIDIRISH</button></div>
                    </div>
                </div>
                <br>
                <div class="list-group" style="background-color: #e9e9e9;">
                    <div style="display: flex;">
                        <a style="background-color: #112e51; color: white; width: 50%;display: block;border-top-left-radius: 15px;" href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <h5 class="mb-0 text-white">TAVSIYA ETILYOTGAN KASB</h5>
                        </a>
                        <a style="background-color: #ffffff; color: white; width: 51%; display: block;" href="#" aria-current="true">
                        </a>
                    </div>
                    <div class="row justify-content-center p-4" id="in-class">
                        <div class="col-md-4 mb-3"><img src="{{asset('assets/img/2.png')}}" class="img-fluid" alt=""></div>
                        <div class="col-md-8 mb-3">
                            <h4 style="font-family: cursive; color: #945959;">Tibbiy asboblarni taimirlash </h4>
                            <h5 style="color: #757575;width: 90%;">Tibbiy asbob-uskunalarni ta'mirlash ustalari
                                o'rnatadilar, xizmat ko'rsatadilar, va bemorni
                                parvarish qilish uskunalarini ta'mirlash.</h5>
                            <a href="" style="font-family: cursive;color: black;margin-left: 54.5%;">Profilni ko`rish</a>
                        </div>
                    </div>
                </div>
                <br>
                <div class="list-group" style="background-color: #e9e9e9;">
                    <div style="display: flex;">
                        <a style="background-color: #112e51; color: white; width: 50%;display: block;border-top-left-radius: 15px;" href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <h5 class="mb-0 text-white">A-Z INDEKS</h5>
                        </a>
                        <a style="background-color: #ffffff; color: white; width: 51%; display: block;" href="#" aria-current="true">
                        </a>
                    </div>
                    <div class="row justify-content-center pl-4 pt-2" id="in-class">
                        <p style="font-size: 17px;">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</p>
                    </div>
                </div>
                <br>
                <div class="list-group" style="background-color: #e9e9e9;">
                    <div style="display: flex;">
                        <a style="background-color: #112e51; color: white;display: block;border-top-left-radius: 15px;" href="#" class="list-group-item list-group-item-action" aria-current="true">
                            <h5 class="mb-0 text-white">KASBLARNI KO`RISH</h5>
                        </a>
                        <a style="background-color: #ffffff; color: white; width: 51%; display: block;" href="#" aria-current="true">
                        </a>
                    </div>
                    <div class="row justify-content-center p-4" id="in-class">
                        <div class="col-md-3 fisrt-about">
                            <button style="background-color: #d7dfea;height: 100%;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);" class="btn btn-about" type="button"><p style="text-align: center;">Eng yuqori maoshli kasblar</p></button>
                        </div>
                        <div class="col-md-3 fisrt-about">
                            <button style="background-color: #d7dfea;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);" class="btn btn-about" type="button"><p style="text-align: center;">Eng tez o'sishi
                                    kutilayotgan kasblar
                                    (prognoz qilingan)</p></button>
                        </div>
                        <div class="col-md-3 fisrt-about">
                            <button style="background-color: #d7dfea;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);" class="btn btn-about" type="button"><p style="text-align: center;">Eng ko'p yangi ish
                                    o'rinlari yaratiladigan
                                    (prognoz qilingan)</p></button>
                        </div>
                        <div class="col-md-3 fisrt-about">
                            <button style="background-color: #d7dfea;box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.5);" class="btn btn-about" type="button"><p style="text-align: center;">Ilmiy daraja
                                    yo'nalishiga
                                    ko'ra kasblar</p></button>
                        </div>
                    </div>
                </div>
            </div>
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

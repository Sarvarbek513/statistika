@extends('layouts.appclient')
@section('content')
    <!-- Karyera start -->
    <!-- Newsletter Start -->
    <div style="padding-top: 70px;">
        <div class="container mt-5 mb-4">
            <div class="subscription-banner-about">
                <div class="subscription-form">
                    <div class="text">
                        <h3 style="color: white;">Karyera yoki malaka oshirish</h3>
                    </div>
                    <input type="text" placeholder="Qo`llanmani qidirish">
                </div>
            </div>
        </div>
    </div>
    <!-- Newsletter End -->

    <!-- Main Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row mt-5">
                <div class="col-md-6">
                    <h4>Maosh yuqori bo`lgan kasblar</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr class="bg-light">
                            <th scope="col">Nomi</th>
                            <th scope="col">Grafik</th>
                            <th scope="col">Maosh</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Dasturchi</td>
                            <td><div style="background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 250,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Bugalter</td>
                            <td><div style="width: 90%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 220,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Fermer</td>
                            <td><div style="width: 70%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 190,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Agranom</td>
                            <td><div style="width: 65%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 150,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Xizmatchi</td>
                            <td><div style="width: 25%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 50,000 mln so`m</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
                <div class="col-md-6">
                    <h4>Kelajakda talab yuqori bo`lgan kasblar</h4>
                    <table class="table table-bordered">
                        <thead>
                        <tr class="bg-light">
                            <th scope="col">Nomi</th>
                            <th scope="col">Grafik</th>
                            <th scope="col">Maosh</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>Dasturchi</td>
                            <td><div style="background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 250,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Bugalter</td>
                            <td><div style="width: 90%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 220,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Fermer</td>
                            <td><div style="width: 70%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 190,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Agranom</td>
                            <td><div style="width: 65%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 150,000 mln so`m</td>
                        </tr>
                        <tr>
                            <td>Xizmatchi</td>
                            <td><div style="width: 25%;background-color: green;">.</div></td>
                            <td class="w-25">Bu ish haqqi yiliga 50,000 mln so`m</td>
                        </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
<!-- 
    <div class="container">
        <div class="resurs mt-5 mb-5">
            <h4>Karyera va malaka oshirish bo`yicha manbalar</h4>
            <div class="row">
                <div class="col-md-6">
                    <div class="p-3 mb-1">
                        <form action="https://www.ulife.uz/allUniversity">
                            <button class="btn bg-light p-3 w-100">Malakaga ega bo‘lish uchun Oliy o‘quv yurtlari ro‘yxati</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-3 mb-1">
                        <form action="https://rank.uz/ru/ec">
                            <button class="btn bg-light p-3 w-100">Malaka oshirish uchun kurslar ro`yxati</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Bandlikka ko`maklashish</h1>
                    <p class="mb-4">Turli kasblarga tayyorgarlik ko'rish uchun mo'ljallangan batafsil kurslarni o'rganing. Qiziqishlaringizga mos keladigan kursni toping va bugundan boshlab ishga tayyorgarligingizni oshiring!</p>
                    <div class="d-flex align-items-center mt-4">
                        <a  class="btn btn-primary rounded-pill px-4 me-3" href="">Kurslarga o`tish <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img style="border-radius: 15px;" class="img-fluid" src="{{asset('assets/img/6.png')}}">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bg-light py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
            <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img style="border-radius: 15px;" class="img-fluid" src="{{asset('assets/img/7.png')}}">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="mb-4">Ish topish</h1>
                    <p class="mb-4">Turli kasblarga tayyorgarlik ko'rish uchun mo'ljallangan batafsil kurslarni o'rganing. Qiziqishlaringizga mos keladigan kursni toping va bugundan boshlab ishga tayyorgarligingizni oshiring!</p>
                    <div class="d-flex align-items-center mt-4">
                        <a  class="btn btn-primary rounded-pill px-4 me-3" href="">Kurslarga o`tish <i class="bi bi-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>  -->
                             <!-- Service Start -->
    <div class="container-fluid bg-light mt-5 py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="mb-4">Karyera va bandlikka ko`maklashish</h1>
                    <p class="mb-4">Qiziqarli ish imkoniyatlari va professional o'sish olamini kashf eting. Turli xil ish e'lonlarini ko'rib chiqing, qimmatli kasb bo'yicha maslahatlar oling va kasb yo'lingizni boshqarish uchun resurslardan foydalaning.</p>
                </div>
                <div class="col-lg-7">
                    <div class="row g-4">
                        <div class="col-md-6">
                            <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                                        <img style="height: 415px;" src="{{ asset('assets/img/oliy.jpg') }}" alt="">
                                        <a class="case-overlay text-decoration-none" href="https://www.ulife.uz/allUniversity">
                                            <h5 class="lh-base text-white mb-3">Malakaga ega bo‘lish uchun Oliy o‘quv yurtlari ro‘yxati
                                            </h5>
                                            <p class="erat"> O‘z kelajagingizni rejalashtirishda sizga yordam beradigan eng yaxshi o‘quv yurtlarini tanlang.</p>
                                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                                        <img style="height: 415px;" src="{{ asset('assets/img/oliy.jpg') }}" alt="">
                                        <a class="case-overlay text-decoration-none" href="">
                                            <h5 class="lh-base text-white mb-3">Bandlikka ko`maklashish
                                            </h5>
                                            <p class="erat"> Ish topish, kasbiy rivojlanish hamda bandlikka oid xizmatlardan foydalaning. Biz bilan birgalikda muvaffaqiyatga erishing!</p>
                                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 pt-md-4">
                            <div class="row g-4">
                            <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                                        <img style="height: 415px;" src="{{ asset('assets/img/kurs.jpg') }}" alt="">
                                        <a class="case-overlay text-decoration-none" href="https://rank.uz/ru/ec">
                                            
                                            <h5 class="lh-base text-white mb-3">Malaka oshirish uchun kurslar ro`yxati
                                            </h5>
                                            <p class="erat">Turli sohalar bo‘yicha malaka oshirish imkoniyatlarini o‘rganing. O‘z bilimingizni yangilash va rivojlantirish uchun mos kurslarni tanlang.</p>
                                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-12 wow fadeIn" data-wow-delay="0.5s">
                                    <div class="case-item position-relative overflow-hidden rounded mb-2">
                                        <img style="height: 415px;" src="{{ asset('assets/img/ishtopish.jpg') }}" alt="">
                                        <a class="case-overlay text-decoration-none" href="">
                                            
                                            <h5 class="lh-base text-white mb-3">Ish topish
                                            </h5>
                                            <p class="erat">Ish qidirish jarayonini oson va samarali qiling. Muvaffaqiyatga erishish yo‘lida birinchi qadamni qo‘ying!</p>
                                            <span class="btn btn-square btn-primary"><i class="fa fa-arrow-right"></i></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->
  
    <div class="container">
        <div class="row mt-5 mb-5">
            <div class="row">
                <div class="col-md-6">
                    <h4>Rezumeni to`g`ri to`ldirish</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tgbNymZ7vqY"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <h4>Interyuda o`zini to`g`ri tutish</h4>
                    <div class="embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/tGDyrKKrCBc"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Main End -->
@endsection

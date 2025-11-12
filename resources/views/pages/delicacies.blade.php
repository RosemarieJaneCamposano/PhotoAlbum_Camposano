@extends('layouts.page')

@section('content')
<div class="delicacies-container">
    <h1 class="delicacies-title">Delicacies of Cebu: Culture in Every Bite</h1>
    <p class = "main-title-caption"> "Discover the flavors of Cebu, from Cebuano classics that showcase local traditions, to native sweets and desserts that satisfy every sweet tooth. Savor heritage treats that celebrate the island's history, and dive into the lively world of street foods that bring Cebu’s vibrant culture to life. Every dish offers a taste of Cebu’s rich heritage and warm hospitality." </p>

    <div class="delicacies-columns">

        <!-- LEFT COLUMN -->
        <div class="delicacies-column">

            <!-- CATEGORY 1 -->
            <div class="delicacies-section">
                <h2 class="delicacies-sectitle">Cebuano Classics</h2>
                <p class="delicacies-secpara">Traditional Cebuano favorites that have stood the test of time.</p>

                <div class="del-image">
                    <div>
                        <img src="{{ asset('images/Lechon.jpg') }}" alt="Lechon sa Talisay">
                        <p class="delicacies-caption-title">Lechon sa Talisay </p>
                        <p class="delicacies-caption">Famous roasted pig with crispy skin and tender meat, a festive centerpiece of Cebu.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/Ngohiong.jpg') }}" alt="Ngohiong">
                        <p class="delicacies-caption-title"> Ngohiong </p>
                        <p class="delicacies-caption"> Crunchy spring roll filled with spiced heart of palm, a beloved street food snack.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/Chorizo.jpg') }}" alt="Chorizo de Cebu">
                        <p class="delicacies-caption-title"> Chorizo de Cebu </p>
                        <p class="delicacies-caption">Sweet and savory local sausage, often grilled and paired with rice.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/balbacua.jpg') }}" alt="Balbacua">
                        <p class="delicacies-caption-title"> Balbacua </p>
                        <p class="delicacies-caption">Slow-cooked beef stew with gelatinous cuts, rich in flavor and perfect comfort food.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/siomai.jpeg') }}" alt="Siomai sa Tisa">
                        <p class="delicacies-caption-title"> Siomai sa Tisa </p>
                        <p class="delicacies-caption">Steamed pork dumplings from Tisa, known for their garlicky, savory taste.The famous pork siomai from Tisa</p>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 2 -->
            <div class="delicacies-section">
                <h2 class="delicacies-sectitle">Native Sweets & Desserts</h2>
                <p class="delicacies-secpara">A sweet taste of Cebu’s local heritage.</p>

                <div class="del-image">
                    <div>
                        <img src="{{ asset('images/budbud.jpg') }}" alt="Budbud">
                        <p class="delicacies-caption-title"> Budbud </p>
                        <p class="delicacies-caption">Sticky rice delicacy wrapped in banana leaves, often paired with hot chocolate.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/masi.jpg') }}" alt="Masi">
                        <p class="delicacies-caption-title"> Masi </p>
                        <p class="delicacies-caption">Glutinous rice balls filled with sweet peanut paste, soft and chewy in every bite. </p>
                    </div>

                    <div>
                        <img src="{{ asset('images/putosikwate.jpg') }}" alt="Puto & Sikwate">
                        <p class="delicacies-caption-title"> Puto & Sikwate </p>
                        <p class="delicacies-caption">Steamed rice cakes served with rich, traditional hot chocolate made from tablea cacao.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/bingka.jpeg') }}" alt="Bibingka">
                        <p class="delicacies-caption-title"> Bibingka </p>
                        <p class="delicacies-caption">Soft rice cake baked with coconut milk, a warm treat often enjoyed during festivities.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/tagaktak.JPG') }}" alt="Tagaktak">
                        <p class="delicacies-caption-title"> Tagaktak </p>
                        <p class="delicacies-caption">Crispy, lace-like rice fritters, a unique Visayan snack with a delicate crunch.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="delicacies-column">

            <!-- CATEGORY 3 -->
            <div class="delicacies-section">
                <h2 class="delicacies-sectitle">Heritage Treats</h2>
                <p class="delicacies-secpara">Old-time delicacies passed down through generations.</p>

                <div class="del-image">
                    <div>
                        <img src="{{ asset('images/masareal.JPG') }}" alt="Masareal">
                        <p class="delicacies-caption-title"> Masareal </p>
                        <p class="delicacies-caption">Sweet rectangular bars made of ground peanuts and sugar, a signature treat from Mandaue.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/otap.jpg') }}" alt="Otap">
                        <p class="delicacies-caption-title"> Otap </p>
                        <p class="delicacies-caption">Flaky, oval-shaped puff pastry sprinkled with sugar, light and crunchy with every bite.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/salvaro.jpg') }}" alt="Salvaro">
                        <p class="delicacies-caption-title"> Salvaro </p>
                        <p class="delicacies-caption">Thin, crisp coconut biscuits, simple yet addictive with their subtle sweetness.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/ampao.jpg') }}" alt="Ampao">
                        <p class="delicacies-caption-title"> Ampao </p>
                        <p class="delicacies-caption">Crunchy puffed rice squares sweetened with syrup, a nostalgic childhood snack.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/rosquillos.jpg') }}" alt="Rosquillos">
                        <p class="delicacies-caption-title"> Rosquillos </p>
                        <p class="delicacies-caption">Ring-shaped butter cookies, delicately crisp and famously linked to Liloan, Cebu.</p>
                    </div>
                </div>
            </div>

            <!-- CATEGORY 4 -->
            <div class="delicacies-section">
                <h2 class="delicacies-sectitle">Street Foods</h2>
                <p class="delicacies-secpara">Vibrant Cebuano flavors served right from the streets.</p>

                <div class="del-image">
                    <div>
                        <img src="{{ asset('images/ginabot.jpg') }}" alt="Ginabot">
                        <p class="delicacies-caption-title"> Ginabot </p>
                        <p class="delicacies-caption">Deep-fried pork intestines, crunchy outside yet chewy inside, a popular pulutan and street snack.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/tuslob-buwa.jpg') }}" alt="tuslob buwa">
                        <p class="delicacies-caption-title"> Tuslob-Buwa</p>
                        <p class="delicacies-caption">Savory bubbling sauce made from pig brain, soy sauce, and spices, enjoyed by dipping puso.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/lansiao.jpg') }}" alt="Lansiao">
                        <p class="delicacies-caption-title"> Lansiao </p>
                        <p class="delicacies-caption">Exotic stew made from bull testicles, believed to be an aphrodisiac and served with rich broth.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/larang.jpg') }}" alt="Larang">
                        <p class="delicacies-caption-title"> Larang </p>
                        <p class="delicacies-caption">Spicy, sour stew often cooked with reef fish or eel, a comforting dish from roadside eateries.</p>
                    </div>

                    <div>
                        <img src="{{ asset('images/chicharon.jpg') }}" alt="Carcar Chicharon">
                        <p class="delicacies-caption-title"> Carcar's Chicharon </p>
                        <p class="delicacies-caption">Crispy pork rinds from Carcar, Cebu, famous for their crunch and flavorful seasoning.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

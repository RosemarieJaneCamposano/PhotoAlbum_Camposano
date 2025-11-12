@extends('layouts.page')

@section('content')
<div class="festival-container">
    <h1 class="festival-title">Festivals of Cebu: Culture in Motion</h1>
    <p class = "main-title-caption"> "Immerse yourself in Cebu’s vibrant festivals, where tradition and culture shine through colorful dances, music, and celebrations. From the grand Sinulog Festival to the eco-themed Siloy Festival, each event reflects Cebu’s rich heritage, religious devotion, and community spirit." </p>

    <div class="festival-columns">
        <!-- LEFT COLUMN -->
        <div class="festival-column left-side">

            <div class="festival-section">
                <h2 class="festival-sectitle">Sinulog Festival</h2>
                <p class="festival-secpara">Cebu City’s grand January celebration honoring the Santo Niño, featuring vibrant street dancing, colorful costumes, and deep religious devotion.
</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/sinulog1.jpg') }}" alt="Magellan's Cross 1">
                        <p class="festival-caption">Colors swirl in Santo Niño’s honor</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/sinulog2.jpg') }}" alt="Magellan's Cross 2">
                        <p class="festival-caption">Dance of gratitude and tradition</p>
                    </div>
                </div>
            </div>


            <div class="festival-section">
                <h2 class="festival-sectitle">Siloy Festival</h2>
                <p class="festival-secpara">Alcoy’s August fest that promotes conservation of the endangered siloy bird while honoring St. Rose of Lima with eco-themed dances and cultural shows.
</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/siloy1.jpg') }}" alt="Mactan Shrine 1">
                        <p class="festival-caption">Birdsong echoed in graceful dance</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/siloy2.jpg') }}" alt="Mactan Shrine 2">
                        <p class="festival-caption">Nature preserved through festive steps</p>
                    </div>
                </div>
            </div>

            <!-- Cebu festival Monument -->
            <div class="festival-section">
                <h2 class="festival-sectitle">Kadaugan sa Mactan Festival</h2>
                <p class="festival-secpara"> Lapu-Lapu City’s April 27 reenactment of the 1521 Battle of Mactan, commemorating Lapulapu’s victory over Magellan and celebrating local heroism.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/kadaugan1.jpg') }}" alt="Monument 1">
                        <p class="festival-caption">Heroic victory retold in motion</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/kadaugan2.jpg') }}" alt="Monument 2">
                        <p class="festival-caption">Lapulapu’s triumph portrayed with pride</p>
                    </div>
                </div>
            </div>

            <div class="festival-section">
                <h2 class="festival-sectitle">Kabkaban Festival</h2>
                <p class="festival-secpara"> Carcar City’s November fiesta for St. Catherine of Alexandria, blending ritual dances, heritage displays, and traditions tied to the kabkaban fern.</p>
                <div class="images">
                    <div>
                        <img src="{{ asset('images/kabkaban1.jpg') }}" alt="Monument 1">
                        <p class="festival-caption">Fern traditions woven in rhythm</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/kabkaban2.jpg') }}" alt="Monument 2">
                        <p class="festival-caption">Heritage blooms in ritual dance</p>
                    </div>
                </div>
            </div>

            <!-- Basilica del Santo Niño -->
            <div class="festival-section">
                <h2 class="festival-sectitle">Halad Inasal Festiva</h2>
                <p class="festival-secpara">Talisay City’s October 15 thanksgiving feast highlighting its famous lechon, celebrated with street dancing and offerings to St. Therese of Avila.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/halad1.jpg') }}" alt="Basilica 1">
                        <p class="festival-caption">Lechon pride danced with joy</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/halad2.jpg') }}" alt="Basilica 2">
                        <p class="festival-caption">Flavor and faith in rhythm</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="festival-column right-side">
            <!-- Fort San Pedro -->
            <div class="festival-section">
                <h2 class="festival-sectitle">Utanon Festival</h2>
                <p class="festival-secpara">Dalaguete’s February 10th cultural harvest festival, honoring San Guillermo de Aquitania and celebrating its pride as Cebu’s "Vegetable Basket".</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/utanon1.jpg') }}" alt="Fort 1">
                        <p class="festival-caption">Harvest bounty danced with pride</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/utanon2.jpg') }}" alt="Fort 2">
                        <p class="festival-caption">Farmers’ joy expressed in rhythm</p>
                    </div>
                </div>
            </div>

            <!-- Taoist Temple -->
            <div class="festival-section">
                <h2 class="festival-sectitle">Silhig Festival</h2>
                <p class="festival-secpara">Mandaue City’s tribute to local broom-making, showcasing the artistry and hard work of craftsmen through vibrant street dances and cultural displays.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/silhig 1.jpg') }}" alt="Temple 1">
                        <p class="festival-caption">Tradition swept into festive steps</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/silhig2.jpg') }}" alt="Temple 1">
                        <p class="festival-caption">Pride in broom‑making artistry danced</p>
                    </div>
                </div>
            </div>

            <!-- Chapel of San Pedro Calungsod -->
            <div class="festival-section">
                <h2 class="festival-sectitle">Katubhan Festival </h2>
                <p class="festival-secpara">M“Medellin’s April 27 thanksgiving for sugarcane harvests, honoring the Sto. Niño and vibrantly celebrating the town’s enduring sugar industry heritage with pride.”</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/katubhan1.jpg') }}" alt="Chapel 1">
                        <p class="festival-caption">Sugarcane pride expressed through vibrant dance</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/katubhan2.jpg') }}" alt="Chapel 2">
                        <p class="festival-caption">Sweet harvest celebrated with joyful dance</p>
                    </div>
                </div>
            </div>

            <!-- Yap-Sandiego Ancestral House -->
            <div class="festival-section">
                <h2 class="festival-sectitle">Pintos Festival</h2>
                <p class="festival-secpara">Bogo City’s celebration of its corn-based delicacy pintos, marked by colorful parades and thanksgiving for agricultural abundance.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/pintos1.jpg') }}" alt="House 1">
                        <p class="festival-caption">Corn delicacy celebrated in motion</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/pintos2.jpg') }}" alt="House 2">
                        <p class="festival-caption">Local flavors showcased through dance</p>
                    </div>
                </div>
            </div>

            <!-- Museo de Sugbo -->
            <div class="festival-section">
                <h2 class="festival-sectitle">Panagtagbo Festival</h2>
                <p class="festival-secpara">Mandaue City’s May fiesta honoring St. Joseph the Worker, featuring street dancing and community gatherings that unite barangays</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/panagtagbo1.JPG') }}" alt="Museo 1">
                        <p class="festival-caption">Dance queen smiling with grace</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/panagtagbo2.JPG') }}" alt="Museo 2">
                        <p class="festival-caption">Community unity expressed in dance</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

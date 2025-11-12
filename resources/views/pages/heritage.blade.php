@extends('layouts.page')

@section('content')
<div class="heritage-container">
    <h1 class="heritage-title">Cebu: Threads of Time</h1>
    <p class = "main-title-caption"> "Explore Cebu’s rich heritage through landmarks like Magellan's Cross, the Basilica del Santo Niño, Fort San Pedro, and the Yap-Sandiego Ancestral House. From sacred sites to cultural treasures, each location tells the story of Cebu’s enduring history and diverse influences." </p>


    <div class="heritage-columns">
        <!-- LEFT COLUMN -->
        <div class="heritage-column left-side">

            <div class="heritage-section">
                <h2 class="heritage-sectitle">Magellan’s Cross</h2>
                <p class="heritage-secpara">Planted on April 14, 1521, Magellan’s Cross marks the site where Portuguese explorer Ferdinand Magellan, under the Spanish crown, introduced Christianity to the local population.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/MC1.jpg') }}" alt="Magellan's Cross 1">
                        <p class="heritage-caption">Faith and history beneath painted skies</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/MC2.jpg') }}" alt="Magellan's Cross 2">
                        <p class="heritage-caption">Sacred cross under muraled dome</p>
                    </div>
                </div>
            </div>


            <div class="heritage-section">
                <h2 class="heritage-sectitle">Mactan Shrine</h2>
                <p class="heritage-secpara">Lapu-Lapu’s statue stands at Mactan Shrine, marking the 1521 battle where Magellan fell to native resistance.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/MS1.jpg') }}" alt="Mactan Shrine 1">
                        <p class="heritage-caption">Where Magellan fell, freedom rose</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/MS2.jpg') }}" alt="Mactan Shrine 2">
                        <p class="heritage-caption">Shrine of courage by the sea</p>
                    </div>
                </div>
            </div>

            <!-- Cebu Heritage Monument -->
            <div class="heritage-section">
                <h2 class="heritage-sectitle">Cebu Heritage Monument</h2>
                <p class="heritage-secpara">The Heritage of Cebu Monument stands as a solemn tribute to the island’s enduring identity, resilience, and significant contributions to Philippine history.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/CHM1.jpg') }}" alt="Monument 1">
                        <p class="heritage-caption">Cebu’s story cast in bronze</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/CHM2.jpg') }}" alt="Monument 2">
                        <p class="heritage-caption">History sculpted in Parian’s heart</p>
                    </div>
                </div>
            </div>

            <!-- Basilica del Santo Niño -->
            <div class="heritage-section">
                <h2 class="heritage-sectitle">Basilica del Santo Niño</h2>
                <p class="heritage-secpara">The Basilica del Santo Niño stands as a sacred witness to Cebu’s enduring faith and the birth of Christianity in the Philippines.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/BSN1.jpg') }}" alt="Basilica 1">
                        <p class="heritage-caption">Oldest Catholic church in Cebu</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/BSN2.jpg') }}" alt="Basilica 2">
                        <p class="heritage-caption">Center of Cebu’s religious heritage</p>
                    </div>
                </div>
            </div>

            <div class="heritage-section">
                <h2 class="heritage-sectitle">Cebu Metropolitan Cathedral</h2>
                <p class="heritage-secpara">The Cebu Metropolitan Cathedral is the ecclesiastical seat of the Archdiocese of Cebu, known for its Spanish colonial architecture and deep religious significance.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/CMC1.jpg') }}" alt="Cathedral 1">
                        <p class="heritage-caption">Colonial cathedral of Cebu’s faith</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/CMC2.jpg') }}" alt="Cathedral 2">
                        <p class="heritage-caption">Grace and grandeur in old Cebu</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- RIGHT COLUMN -->
        <div class="heritage-column right-side">
            <!-- Fort San Pedro -->
            <div class="heritage-section">
                <h2 class="heritage-sectitle">Fort San Pedro</h2>
                <p class="heritage-secpara">Fort San Pedro, built in 1565, is the Philippines’ oldest triangular bastion and a symbol of Cebu’s colonial past. Today, its leafy paths and museum offer a peaceful glimpse into history.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/FSP1.jpg') }}" alt="Fort 1">
                        <p class="heritage-caption">Cebu’s oldest fort, peacefully preserved</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/FSP2.jpg') }}" alt="Fort 2">
                        <p class="heritage-caption">Historic bastion softened by greenery</p>
                    </div>
                </div>
            </div>

            <!-- Taoist Temple -->
            <div class="heritage-section">
                <h2 class="heritage-sectitle">Taoist Temple</h2>
                <p class="heritage-secpara">The Cebu Taoist Temple, built in 1972 by the Chinese Filipino community, is a vibrant sanctuary perched in Cebu’s hills.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/TT1.jpg') }}" alt="Temple 1">
                        <p class="heritage-caption">Pagodas rise above Cebu’s skyline</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/TT2.jpg') }}" alt="Temple 1">
                        <p class="heritage-caption">Dragons guard peaceful temple</p>
                    </div>
                </div>
            </div>

            <!-- Chapel of San Pedro Calungsod -->
            <div class="heritage-section">
                <h2 class="heritage-sectitle">Chapel of San Pedro Calungsod</h2>
                <p class="heritage-secpara">The Chapel of San Pedro Calungsod, built in 2012, is a modern Catholic sanctuary in Cebu City honoring Pedro Calungsod, the second Filipino saint and martyr. </p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/CP1.jpg') }}" alt="Chapel 1">
                        <p class="heritage-caption">Chapel with spiritual depth</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/CP2.jpg') }}" alt="Chapel 2">
                        <p class="heritage-caption">Tribute to youthful martyrdom</p>
                    </div>
                </div>
            </div>

            <!-- Yap-Sandiego Ancestral House -->
            <div class="heritage-section">
                <h2 class="heritage-sectitle">Yap-Sandiego Ancestral House</h2>
                <p class="heritage-secpara">The Yap-Sandiego Ancestral House is a 17th-century home blending Spanish and Chinese design, showcasing Cebu’s heritage with relics.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/YS1.jpg') }}" alt="House 1">
                        <p class="heritage-caption">Spanish-Chinese legacy in Cebu</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/YS2.jpg') }}" alt="House 2">
                        <p class="heritage-caption">Living museum of Filipino ancestry</p>
                    </div>
                </div>
            </div>

            <!-- Museo de Sugbo -->
            <div class="heritage-section">
                <h2 class="heritage-sectitle">Museo de Sugbo</h2>
                <p class="heritage-secpara">Museo Sugbo is Cebu’s provincial museum, located in a former Spanish-era jail built in 1871. It showcases exhibits on Cebu’s history from pre-colonial to modern times.</p>

                <div class="images">
                    <div>
                        <img src="{{ asset('images/MDS1.jpg') }}" alt="Museo 1">
                        <p class="heritage-caption">Jail turned museum of Cebu’s past</p>
                    </div>
                    <div>
                        <img src="{{ asset('images/MDS2.jpg') }}" alt="Museo 2">
                        <p class="heritage-caption">From carcel to cultural landmark</p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Image Modal / Lightbox -->
<div id="imageModal" class="image-modal">
    <span class="close-modal">&times;</span>
    <img class="modal-content" id="modalImage">
    <p id="modalCaption" class="modal-caption"></p>
</div>

</div>
@endsection

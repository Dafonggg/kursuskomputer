@include('layouts.header')
    <section class="section courses" id="courses" >
        <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
            <div class="section-heading">
                <h6>DAFTAR KURSUS</h6>
                <h2>DAFTAR KURSUS</h2>
            </div>
            </div>
        </div>
        <ul class="event_filter">
            <li>
            <a class="is_active" href="#!" data-filter="*">SEMUA</a>
            </li>
            <li>
            <a href="#!" data-filter=".word">Word</a>
            </li>
            <li>
            <a href="#!" data-filter=".excel">Excel</a>
            </li>
            <li>
            <a href="#!" data-filter=".photoshop">Photoshop</a>
            </li>
            <li>
            <a href="#!" data-filter=".coreldraw">CorelDraw</a>
            </li>
            <li>
            <a href="#!" data-filter=".paket">PaketMicrosoftOffice</a>
            </li>
        </ul>
        <div class="row event_box">
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 paket">
            <div class="events_item">
                <div class="thumb">
                <a href="#"><img src="{{ asset('images/msp1.png') }}" alt=""></a>
                <span class="category">Microsoft Office</span>
                <span class="price"><h6><em>$</em>500</h6></span>
                </div>
                <div class="down-content">
                <span class="author">Adrian Tung</span>
                <h4>Office 365</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 word">
            <div class="events_item">
                <div class="thumb">
                <a href="#"><img src="{{ asset('images/wordp2.png') }}" alt=""></a>
                <span class="category">Word</span>
                <span class="price"><h6><em>$</em>340</h6></span>
                </div>
                <div class="down-content">
                <span class="author">Adrian Tung</span>
                <h4>Learn Word</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 excel">
            <div class="events_item">
                <div class="thumb">
                <a href="#"><img src="{{ asset('images/excelp.png') }}" alt=""></a>
                <span class="category">Excel</span>
                <span class="price"><h6><em>$</em>340</h6></span>
                </div>
                <div class="down-content">
                <span class="author">Adrian Tung</span>
                <h4>Learn Excel</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 photoshop">
            <div class="events_item">
                <div class="thumb">
                <a href="#"><img src="{{ asset('images/psp.png') }}" alt=""></a>
                <span class="category">Photoshop</span>
                <span class="price"><h6><em>$</em>340</h6></span>
                </div>
                <div class="down-content">
                <span class="author">Adrian Tung</span>
                <h4>Learn Photoshop</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 coreldraw">
            <div class="events_item">
                <div class="thumb">
                <a href="#"><img src="{{ asset('images/coreldrawp.png') }}" alt=""></a>
                <span class="category">Corel Draw</span>
                <span class="price"><h6><em>$</em>340</h6></span>
                </div>
                <div class="down-content">
                <span class="author">Adrian Tung</span>
                <h4>Learn CorelDraw</h4>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6 align-self-center mb-30 event_outer col-md-6 word">
            <div class="events_item">
                <div class="thumb">
                <a href="#"><img src="{{ asset('images/wordp2.png') }}" alt=""></a>
                <span class="category">Word</span>
                <span class="price"><h6><em>$</em>340</h6></span>
                </div>
                <div class="down-content">
                <span class="author">Adrian Tung</span>
                <h4>Learn Word</h4>
                </div>
            </div>
            </div>
        </div>
        </div>
    </section>
    @include('layouts.footer')

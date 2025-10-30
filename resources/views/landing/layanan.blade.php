@include('layouts.header')
    <div class="services section" id="services">
        <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-6">
            <div class="service-item">
                <div class="icon">
                <img src="{{ asset('images/service-01.png') }}" alt="online degrees">
                </div>
                <div class="main-content">
                <h4>Microsoft Office</h4>
                <p>Tingkatkan keterampilan Anda dalam menggunakan Microsoft Word, Excel, dan PowerPoint.
                Pelajari cara mengelola data, membuat laporan profesional, dan presentasi menarik dengan mudah.</p>
                <div class="main-button">
                    <a href="#">Read More</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6">
            <div class="service-item">
                <div class="icon">
                <img src="{{ asset('images/service-02.png') }}" alt="short courses">
                </div>
                <div class="main-content">
                <h4>Adobe Photoshop</h4>
                <p>Kuasai teknik dasar hingga lanjutan dalam pengeditan foto dan desain grafis menggunakan Adobe Photoshop.
                Ciptakan karya visual yang menarik dan profesional untuk kebutuhan pribadi maupun bisnis.</p>
                <div class="main-button">
                    <a href="#">Read More</a>
                </div>
                </div>
            </div>
            </div>
            <div class="col-lg-4 col-md-6">
            <div class="service-item">
                <div class="icon">
                <img src="{{ asset('images/service-03.png') }}" alt="web experts">
                </div>
                <div class="main-content">
                <h4>CorelDraw</h4>
                <p>YPelajari desain vektor dan pembuatan logo menggunakan CorelDRAW.
                Kursus ini membantu Anda memahami cara membuat desain kreatif dengan efisien dan presisi tinggi.</p>
                <div class="main-button">
                    <a href="#">Read More</a>
                </div>
                </div>
            </div>
            </div>
        </div>
        </div>
    </div>
@include('layouts.footer')
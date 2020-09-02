<!-- news-event -->
<section class="upcoming-project-section sp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- section-header -->
                <div class="section-header text-center wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <h3>Latest <span class="colored">News</span></h3>
                </div>
                <!-- /.section-header -->
            </div>
        </div>
        <div class="row">
            <!-- upcoming-projects -->
            <div class="col upcoming-projects owl-theme owl-carousel wow fadeInUp" data-wow-duration="0.75s"
                data-wow-delay="0s">
                @forelse ($events as $item)
                    <!-- single-upcoming-project -->
                    <a href="{{ Route('frontend.eventShow', $item->id) }}">
                        <div class="single-upcoming-project">
                            <figure class="scf-photo">
                                <img src="{!!  asset('/storage/eventImage/' . $item->main_img) !!}"
                                    style="height: 400px; width: 400px;" alt="upcoming-project">
                            </figure>
                            <div class="upcoming-project-desc">
                                <h3>{{ $item->title }}</h3>
                            </div>
                        </div>
                    </a>
                    <!-- /.single-upcoming-project -->
                @empty
                @endforelse
            </div>
            <!-- /.upcoming-projects -->
        </div>



    </div>
</section>
<!--/.news-event -->

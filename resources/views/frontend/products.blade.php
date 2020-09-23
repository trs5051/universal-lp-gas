<!-- our-works-section -->
<section class="our-works-section sp">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 section-header text-center">
                <div class="sub-title wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">Our Works</div>
                <h3 class="section-title wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0.1s">Products <span
                        class="colored">portfolio</span></h3>
            </div>
        </div>

        <div class="row">
            <!-- portfolio-filter -->
            <div class="col-lg-12 portfolio-filter">
                <ul class="unstyled d-flex controls wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                    <li><a href="javascript:void(0)" class="control" data-filter="all">All Products</a></li>

                    @forelse ($categories as $category)
                        <li><a href="javascript:void(0)" class="control"
                                data-filter=".category_{{ $category->id }}">{{ $category->title }}</a></li>
                    @empty
                    @endforelse
                </ul>
            </div>
            <!-- /.portfolio-filter -->
        </div>

        <!-- portfolio -->
        <div class="row portfolio wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">

            @forelse ($products as $product)

                <!-- project  -->
                <div class="col-xl-3 col-lg-4 col-sm-6 project mix category_{{ $product->category->id }}">
                    <figure class="project-thumb">
                        <img src="{!! asset('/storage/productimage/' . $product->img) !!}" style="height: 200px;" alt="project">
                    </figure>
                    <div class="project-desc">
                    </div>
                </div>
                <!-- /.project  -->
            @empty
            @endforelse
        </div>
        <!-- /.portfolio -->
    </div>
</section>
<!--/.our-works-section -->

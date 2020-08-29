@extends('frontend.layouts.admin-frontend')
@section('content')
    <!-- page-header-section -->
    <section class="page-header-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-header wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <h3>Management</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/.page-header-section -->


    <!-- management-team-section -->
    <section class="management-team-section sp">

        <div class="container">
            <br>

            <div class="row justify-content-center">
                <div class="col-lg-12">
                    <!-- section-header -->
                    <div class="section-header text-center wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <h5 class="sub-title">Our Management</h5>
                    </div>
                    <!-- /.section-header -->
                </div>
            </div>

            @forelse ($categories as $category)
            {{-- heading --}}
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-header text-center wow fadeInUp" data-wow-duration="0.75s" data-wow-delay="0s">
                        <hr>
                    <h3>{{$category->title}}</h3>
                        <hr>
                    </div>
                </div>
            </div>

            {{-- main --}}
            <div class="row justify-content-center">
            @forelse ($managements as $management)
                @if ($management->managementCategory->title == $category->title )

                    <div class="col-lg-3 col-sm-12 m-5">
                        <div class="card" style="width: 20rem;height: 42rem;">
                            <!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
                            <img src="{!!  asset('/storage/managementImage/' . $management->img) !!}" class="card-img-top img-thumbnail"
                                alt="management" style=" height: 343px;">
                            <div class="card-body">
                                <h2>{!! $management->name ?? '' !!}</h2>
                                <p class="title">{!! $management->designation ?? '' !!}</p>
                                <p>{!! $management->text ?? '' !!}</p>
                            </div>
                            <div class="card-footer">
                                <a href="#" class="facebook"><i class="fa fa-google w-25 text-center p-2"></i></a>
                                <a href="#" class="twitter"><i class="fa fa-twitter w-25 text-center p-2"></i></a>
                                <a href="#" class="linkedin"><i class="fa fa-linkedin w-25 text-center p-2"></i></a>
                            </div>
                        </div>
                    </div>



                @endif
            @empty

            @endforelse
        </div>



            @empty

            @endforelse







        </div>

    </section>
    <!--/.management-team-section -->
@endsection

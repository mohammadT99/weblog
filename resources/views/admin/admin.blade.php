@extends('layouts.master')
@section('index')
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">


    <div class="container cta-100 ">
        <div class="container">
            <div class="row blog">
                <div class="col-md-12">
                    <div id="blogCarousel" class="carousel slide container-blog" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#blogCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#blogCarousel" data-slide-to="1"></li>
                        </ol>
                        <!-- Carousel items -->
                        @foreach(\App\Models\post::all() as $post)
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <div class="row">
                                    <div class="col-md-4" >
                                        <div class="item-box-blog">
                                            <div class="item-box-blog-image">
                                                <!--Date-->
                                                <div class="item-box-blog-date bg-blue-ui white"> <span class="mon">Augu 01</span> </div>
                                                <!--Image-->
                                                <figure> <img alt="" src="https://pixabay.com/get/g9fecae00b48af6ad3638a7c7a96aba1aff5a92fe390044699ed53d8a48e5ff99bdc2cb3e8ac8f552db2e8926f8003afd_1280.jpg"> </figure>
                                            </div>
                                            <div class="item-box-blog-body">
                                                <!--Heading-->
                                                <div class="item-box-blog-heading">
                                                    <a href="#" tabindex="0">
                                                        <h5>{{$post->title}}</h5>
                                                    </a>
                                                </div>
                                                <!--Data-->
                                                <div class="item-box-blog-data" style="padding: px 15px;">
                                                    <p><i class="fa fa-user-o"></i> Admin, <i class="fa fa-comments-o"></i> Comments(3)</p>
                                                </div>
                                                <!--Text-->
                                                <div class="item-box-blog-text">
                                                    <p>{{$post->articles}}</p>
                                                </div>
                                                <div class="mt"> <a href="#" tabindex="0" class="btn bg-blue-ui white read">read more</a> </div>
                                                <!--Read More Button-->

                                            </div>
                                        </div>
                                    </div>
                                        </div>
                                    </div>
                                </div>
                        @endforeach
                                <!--.row-->
                            </div>
                            <!--.item-->
                        </div>
                        <!--.carousel-inner-->
                    </div>
                    <!--.Carousel-->
                </div>
            </div>
        </div>
    </div>

    <!-- credit: https://bootsnipp.com/snippets/BxA1B -->
@endsection

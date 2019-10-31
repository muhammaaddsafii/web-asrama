@extends('layout.master')
@section('content')
    <!-- our_project part start-->
    <section class="our_project section_padding" id="portfolio">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-lg-5 col-sm-10">
                    <div class="section_tittle">
                        <h2>Our Projects</h2>
                    </div>
                </div>
                <div class="col-lg-6 col-sm-10">
                    <div class="filters portfolio-filter project_menu_item">
                        <ul>
                            <li class="active" data-filter="*">All</li>
                            <li data-filter=".buildings">Buildings</li>
                            <li data-filter=".rebuild">Rebuild</li>
                            <li data-filter=".architecture">Architecture</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="filters-content">
                <div class="row justify-content-between portfolio-grid">
                    <div class="col-lg-4 col-sm-6 all buildings">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="img/project_1.png" alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Bank Protected</p>
                                    <a href="#"><h2>Banking & Finance</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all rebuild">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="img/project_2.png" alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Bank Protected</p>
                                    <a href="#"><h2>Banking & Finance</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 all architecture">
                        <div class="single_our_project">
                            <div class="single_offer">
                                <img src="img/project_3.png" alt="offer_img_1">
                                <div class="hover_text">
                                    <p>Bank Protected</p>
                                    <a href="#"><h2>Banking & Finance</h2></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- our_project part end-->
@stop
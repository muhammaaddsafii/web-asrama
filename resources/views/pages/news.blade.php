@extends('layout.master')
@section('content')
    <!--================Blog Area =================-->
    <section class="blog_area section_padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 mb-5 mb-lg-0" style="margin-top:-90px">
                    <div class="blog_left_sidebar">
                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_1.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>09</h3>
                                    <p>Okt</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Akhirnya, Nurroy sidang !</h2>
                                </a>
                                <p>Nurroy Sapto Anggoro, mahasiswa Asrama Thonthowy Djauharhy angkatan 2014 telah melaksanakan sidang Tugas Akhir</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Asrama, Sidang</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Komentar</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_2.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>27</h3>
                                    <p>Sept</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Habib, Ketua TPA As-Salam Baru</h2>
                                </a>
                                <p>Alhamdulillah, telah terpilih ketua baru untuk TPA AS-Salam Periode 2019-2020. </p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Asrama, TPA</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Komentar</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_3.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>26</h3>
                                    <p>Sept</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Ketua Baru, yaaay !</h2>
                                </a>
                                <p>Rizal Pradipto terpilih sebagi ketua baru Asrama Thonthowy Djauharhy Periode 2019-2020.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Asrama</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Komentar</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_4.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>22</h3>
                                    <p>Agus</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Graduation Enggar Yudha</h2>
                                </a>
                                <p>Selamat untuk mas Enggar yang telah menyelesaikan studinya !</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Asrama, Graduation</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Komentar</a></li>
                                </ul>
                            </div>
                        </article>

                        <article class="blog_item">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="img/blog/single_blog_5.png" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3>03</h3>
                                    <p>Mei</p>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="single-blog.html">
                                    <h2>Pengajian bulanan, sukses !</h2>
                                </a>
                                <p>Telah terlaksana pengajian umum bulanan di Asrama. Terima kasih untuk seluruh teman-teman yang sudah membantu pelaksanaan acara.</p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="far fa-user"></i> Asrama, Kajian</a></li>
                                    <li><a href="#"><i class="far fa-comments"></i> 03 Komentar</a></li>
                                </ul>
                            </div>
                        </article>

                        <nav class="blog-pagination justify-content-center d-flex">
                            <ul class="pagination">
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Previous">
                                        <i class="ti-angle-left"></i>
                                    </a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link">1</a>
                                </li>
                                <li class="page-item active">
                                    <a href="#" class="page-link">2</a>
                                </li>
                                <li class="page-item">
                                    <a href="#" class="page-link" aria-label="Next">
                                        <i class="ti-angle-right"></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="blog_right_sidebar" style="margin-top:-90px;">
                        <aside class="single_sidebar_widget search_widget">
                            <form action="#">
                               <div class="form-group">
                                  <div class="input-group mb-3">
                                     <input type="text" class="form-control" placeholder='Cari Kata Kunci'
                                        onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                                     <div class="input-group-append">
                                        <button class="btn" type="button"><i class="ti-search"></i></button>
                                     </div>
                                  </div>
                               </div>
                               <button class="button rounded-0 primary-bg text-white w-100 btn_1" type="submit">Cari</button>
                            </form>
                         </aside>

                        <aside class="single_sidebar_widget post_category_widget">
                            <h4 class="widget_title">Kategori</h4>
                            <ul class="list cat-list">
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Asrama</p>
                                        <p>(37)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>kajian</p>
                                        <p>(10)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Sidang</p>
                                        <p>(03)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Graduation</p>
                                        <p>(11)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>TPA</p>
                                        <p>(21)</p>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="d-flex">
                                        <p>Internal</p>
                                        <p>(0)</p>
                                    </a>
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget tag_cloud_widget">
                            <h4 class="widget_title">Tag Berita</h4>
                            <ul class="list">
                                <li>
                                    <a href="#">Asrama</a>
                                </li>
                                <li>
                                    <a href="#">Kajian</a>
                                </li>
                                <li>
                                    <a href="#">TPA</a>
                                </li>
                                <li>
                                    <a href="#">Graduation</a>
                                </li>
                                <li>
                                    <a href="#">Internal</a>
                                </li>
                                <li>
                                    <a href="#">Sidang</a>
                                </li>
                                <li>
                                    <a href="#">Sosial</a>
                                </li>
                                <li>
                                    <a href="#">UGM</a>
                                </li>
                            </ul>
                        </aside>

                        <aside class="single_sidebar_widget newsletter_widget">
                            <h4 class="widget_title">Koran Asrama</h4>

                            <form action="#">
                                <div class="form-group">
                                    <input type="email" class="form-control" onfocus="this.placeholder = ''"
                                        onblur="this.placeholder = 'Enter email'" placeholder='Masukkan email' required>
                                </div>
                                <button class="button rounded-0 primary-bg text-white w-100 btn_1"
                                    type="submit">Berlangganan</button>
                            </form>
                        </aside>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--================Blog Area =================-->
@stop
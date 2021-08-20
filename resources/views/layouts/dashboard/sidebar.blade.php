
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                                Produk
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link collapsed" href="{{ route('produkkat.index') }}">
                                        <div class="sb-nav-link-icon"><i class="fa fa-th-large" aria-hidden="true"></i></div>
                                        Kategori Produk
                                    </a>
                                    <a class="nav-link collapsed" href="{{ route('brand.index') }}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-tags"></i></div>
                                        Brand
                                    </a>
                                    <a class="nav-link collapsed" href="{{ route('produk.index') }}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                        Produk
                                    </a>
                                </nav>
                            </div>
                            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#artikel" aria-expanded="false" aria-controls="collapseLayouts">
                                <div class="sb-nav-link-icon"></div>
                                Artikel
                                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                            </a>
                            <div class="collapse" id="artikel" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                                <nav class="sb-sidenav-menu-nested nav">
                                    <a class="nav-link collapsed" href="{{ route('artikelkat.index') }}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                        Kategori Artikel
                                    </a>
                                    <a class="nav-link collapsed" href="{{ route('artikel.index') }}">
                                        <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                        Artikel
                                    </a>
                                </nav>
                            </div>
                            <div class="sb-sidenav-menu-heading">Slide Show</div>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="{{ route('slider.index') }}">
                                    <div class="sb-nav-link-icon"><i class="fab fa-slideshare"></i></div>
                                    Slide Show
                                </a>
                            </li>
                            <div class="sb-sidenav-menu-heading">About Us</div>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="{{ route('aboutus.index') }}">
                                    <div class="sb-nav-link-icon"><i class="fab fa-slideshare"></i></div>
                                    About Us
                                </a>
                            </li>
                            <div class="sb-sidenav-menu-heading">Footer</div>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="{{ route('sosmed.index') }}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-hashtag"></i></div>
                                    Media Sosial
                                </a>
                            </li>

                            
                        </div>
                    </div>
                </nav>
            </div>

            

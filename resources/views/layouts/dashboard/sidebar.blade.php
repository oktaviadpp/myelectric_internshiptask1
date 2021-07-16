
        <div id="layoutSidenav">
            <div id="layoutSidenav_nav">
                <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                    <div class="sb-sidenav-menu">
                        <div class="nav">
                            <div class="sb-sidenav-menu-heading">Core</div>
                            <a class="nav-link" href="index.html">
                                <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                                Dashboard
                            </a>
                            <div class="sb-sidenav-menu-heading">Produk</div>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="{{ route('produkkat.index') }}">
                                    <div class="sb-nav-link-icon"><i class="fa fa-th-large" aria-hidden="true"></i></div>
                                    Kategori Produk
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="{{ route('brand.index') }}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-tags"></i></div>
                                    Brand
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="{{ route('produk.index') }}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-box"></i></div>
                                    Produk
                                </a>
                            </li>

                            <div class="sb-sidenav-menu-heading">Artikel</div>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="{{ route('artikelkat.index') }}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
                                    Kategori Artikel
                                </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="{{ route('artikel.index') }}">
                                    <div class="sb-nav-link-icon"><i class="fas fa-newspaper"></i></div>
                                    Artikel
                                </a>
                            </li>

                            <div class="sb-sidenav-menu-heading">Slide Show</div>
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="{{ route('slider.index') }}">
                                    <div class="sb-nav-link-icon"><i class="fab fa-slideshare"></i></div>
                                    Slide Show
                                </a>
                            </li>
                        </div>
                    </div>
                </nav>
            </div>
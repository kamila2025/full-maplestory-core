<nav class="navbar navbar-expand-lg navbar-light w-100" id="home">
    <div class="container px-3">
        <a class="navbar-brand" href="{{ url('/') }}"><img src="{{ asset('assets/images/logo.png') }}" alt /></a>
        <button class="navbar-toggler offcanvas-nav-btn" type="button">
            <i class="bi bi-list"></i>
        </button>
        <div class="offcanvas offcanvas-start offcanvas-nav" style="width: 20rem">
            <div class="offcanvas-header">
                <a href="{{ url('/') }}" class="text-inverse"><img src="{{ asset('assets/images/logo.gif') }}"
                        alt /></a>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body pt-0 align-items-center">
                <ul class="navbar-nav mx-auto align-items-lg-center">
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('home') }}" wire:navigate.hover>首頁</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="">關於我們</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('cases') }}" wire:navigate.hover>精選案例</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('plans') }}" wire:navigate.hover>方案介紹</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link" href="{{ route('faqs') }}" wire:navigate.hover>常見問題</a>
                    </li>
                </ul>
                <div class="mt-3 mt-lg-0 d-flex align-items-center">
                    <a href="{{ route('contact') }}" class="btn btn-primary" wire:navigate.hover>聯絡我們</a>
                </div>
            </div>
        </div>
    </div>
</nav>

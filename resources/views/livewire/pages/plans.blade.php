<div>
    <div class="pattern-square"></div>
    <section class="py-5 py-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="text-center mb-8">
                        <h1>{{ $pageTitle }}</h1>
                        <p class="mb-0">{{ $pageDescription }}</p>
                    </div>
                </div>

                <div class="table-responsive-lg">
                    <div class="row flex-nowrap me-5 me-lg-0">
                        @foreach ($plans as $plan)
                            <div class="col-lg-4 col-md-6 col-12" data-cue="zoomIn">
                                <div class="card bg-gray-200 border-0 p-2 mb-5 mb-xl-0">
                                    <div class="card-body bg-white shadow rounded-2">
                                        <div class="mb-5">
                                            <h3 class="h6 mb-3">{{ $plan['title'] }}</h3>
                                            <h2 class="d-flex align-items-center">
                                                <span class="text-dark">{{ $plan['price'] }}</span>
                                                @if (!empty($plan['origin']))
                                                    <del class="text-body-tertiary ms-1">{{ $plan['origin'] }}</del>
                                                @endif
                                            </h2>
                                        </div>

                                        <ul class="list-unstyled">
                                            @foreach ($plan['features'] as $f)
                                                <li class="mb-2 d-flex align-items-center">
                                                    <i class="bi bi-check-circle-fill text-success"></i>
                                                    <span class="ms-3">{{ $f['text'] }}</span>
                                                </li>
                                            @endforeach
                                        </ul>

                                        <div class="d-grid mt-5">
                                            <a href="#" class="btn btn-outline-primary">立即諮詢</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

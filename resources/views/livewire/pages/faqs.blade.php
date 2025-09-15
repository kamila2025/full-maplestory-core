<div>
    <div class="pattern-square"></div>
    <section class="py-5 py-lg-8">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-md-12 col-12">
                    <div class="text-center mb-8">
                        <h1>{{ $pageTitle }}</h1>
                    </div>
                </div>

                <div class="col-lg-10 offset-lg-1 col-md-12 col-12">
                    <div class="accordion" id="accordion">
                        @foreach ($faqs as $faq)
                            <div class="border mb-2 rounded-3 p-3">
                                <h2 class="h5 mb-0">
                                    <a href=""
                                        class="text-reset d-flex justify-content-between align-items-center"
                                        data-bs-toggle="collapse" data-bs-target="#collapse{{ $loop->iteration }}"
                                        aria-expanded="false" aria-controls="collapse{{ $loop->iteration }}">
                                        {{ $faq['question'] }}
                                        <span class="chevron-arrow"><i class="bi bi-chevron-down"></i></span>
                                    </a>
                                </h2>
                                <div id="collapse{{ $loop->iteration }}" class="accordion-collapse collapse"
                                    data-bs-parent="#accordion">
                                    <div class="mt-3">{{ $faq['answer'] }}</div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<x-frontend>
    <section id="departments" class="departments section">

        <!-- Section Title -->
        <div class="container section-title" data-aos="fade-up">
            <h2>Detail Kegiatan</h2>

        </div><!-- End Section Title -->

        <div class="container" data-aos="fade-up" data-aos-delay="100">
            <a href="{{ url('/') }}" class="btn btn-primary"> <i class="bi bi-arrow-left"></i> Kembali</a>
            
            <div class="row mt-lg-3">
                
                @csrf
                <div class="col-lg-8 mt-4 mt-lg-0 ">
                    <div class="tab-content">
                        <div class="tab-pane active show">
                            <div class="row">
                                <div class="col-lg-5 details order-2 order-lg-1">
                                    <h3>{{ $kegiatan->nama_kegiatan }}</h3>
                                    <p class="fst-italic">
                                        {{ date('d-m-Y', strtotime($kegiatan->tanggal_kegiatan)) }}
                                    </p>
                                    <p>
                                        {!! nl2br($kegiatan->deskripsi_kegiatan) !!}
                                    </p>
                                </div>
                                <div class="col-lg-7 text-center order-1 order-lg-2">
                                    <img src="{{ url("public/$kegiatan->poto") }}" class="img-fluid"
                                        style="object-fit: cover; position: static; width: 200%;">
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-1"></div>
                <div class="col-lg-3">
                  <h2>Kegiatan Terbaru</h2>
                    <ul class="nav nav-tabs flex-column">
                        @foreach ($list_kegiatan as $kegiatan)
                            <li class="nav-item">
                                <a class="nav-link"
                                    href="{{ url("detail-kegiatan/$kegiatan->id") }}">{{ $kegiatan->nama_kegiatan }}</a>
                            </li>
                        @endforeach


                    </ul>
                </div>
            </div>

        </div>

    </section>
</x-frontend>

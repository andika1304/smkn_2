<!-- other services -->
<section class="other_services py-5" id="why">
    <div class="container py-lg-5 py-3">
        <h3 class="heading mb-sm-5 mb-4">JURUSAN </h3>
        <div class="row">
            @forelse ($data['jurusan'] as $row)
                <div class="col-lg-4 col-md-6">
                    <div class="grid">
                        <div class="info p-4">
                            <h4 class=""><img src="frontend/asset/images/s1.png" class="img-fluid" alt="">
                                {{ $row->nama_k }}</h4>
                            <p class="mt-3">{{ $row->desk_k }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger">
                    DATA TIDAK TERSEDIA
                </div>
            @endforelse
        </div>
    </div>
</section>
<!-- //other services -->

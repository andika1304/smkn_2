<section class="banner-bottom py-5" id="about">


	<div class="container py-lg-5">

        <h2 class="heading mb-sm-5 mb-4">Alumni </h2>
            @forelse ($data['alumni'] as $row)

            <div class="row bottom-grids">
                <div class="col-md-3 col-sm-6">
                    <div class="three-grids-w3pvt-1 d-flex text-right">
                        <div class="text-effect-wthree midd-text-w3ls p-3 w-100">
                            <h5 class="text-capitalize text-bl font-weight-bold">{{ $row->nama }}</h5>
                            <p>Angkatan {{ $row->angkatan }}</p>
                        </div>
                    </div>
                </div>
            @empty
                <div class="alert alert-danger">
                    DATA TIDAK DITEMUKAN
                </div>
            @endforelse
		</div>
	</div>
</section>

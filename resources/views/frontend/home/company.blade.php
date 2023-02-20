<section class="banner-bottom py-5" id="about">
	<div class="container py-lg-5">
            @forelse ($data['company'] as $row)
            <h2 class="heading mb-sm-5 mb-4"> {{ $row->nama_c }}</h2>
            <div class="row bottom-grids">
                <div class="col-md-3 col-sm-6">
                    <div class="three-grids-w3pvt-1 d-flex text-right">
                        <div class="text-effect-wthree midd-text-w3ls p-3 w-100">
                            <h5 class="text-capitalize text-bl font-weight-bold">Facillities</h5>
                            <p>Education</p>
                        </div>
                    </div>
                </div>
            <div class="col-lg-5">
				<p class="mt-4">{{ $row->co_ }}</p>
			</div>
            @empty
                <div class="alert alert-danger">
                    DATA TIDAK DITEMUKAN
                </div>
            @endforelse
		</div>
	</div>
</section>

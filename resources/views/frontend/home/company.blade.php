<section class="banner-bottom py-5" id="about">
	<div class="container py-lg-5">
            @forelse ($data['company'] as $row)
           <center> <h1 class="heading mb-sm-5 mb-4"> {{ $row->nama_c }}</h1></center>
            <div class="row bottom-grids">
                <div class="col-md-3 col-sm-6">
                    <div class="three-grids-w3pvt-1 d-flex text-right">
                        <div class="text-effect-wthree midd-text-w3ls p-3 w-100">
                            <h5 class="text-capitalize text-bl font-weight-bold"></h5>
                            <p></p>
                        </div>
                    </div>
                </div>
            <div class="col-lg-5">
				<h4 class="mt-4">{{ $row->co_ }}</h4>
			</div>
            @empty
                <div class="alert alert-danger">
                    DATA TIDAK DITEMUKAN
                </div>
            @endforelse
		</div>
	</div>
</section>

 <section class="services py-5" id="services">
     <div class="container">
         <h3 class="heading mb-5">Berita</h3>
         <div class="row ml-sm-5">
            @forelse ($data['berita'] as $row)
             <div class="col-xl-4 col-lg-4 col-md-6 col-sm-12">
                 <div class="our-services-wrapper mb-60">
                     <div class="services-inner">
                             <div class="our-services-img">
                                 <img src="{{ 'http://127.0.0.1:8000' . Storage::url('berita/') . $row->foto_b }}">
                             </div>
                             <div class="our-services-text">
                                 <h4>{{ $row->nama_b }}</h4>
                                 <p>{{ $row->desk_b }}</p>
                             </div>
                     </div>
                 </div>
             </div>
         @empty
             <div class="alert alert-danger">
                 DATA TIDAK TERSEDIA.
             </div>
             @endforelse
         </div>
     </div>
 </section>

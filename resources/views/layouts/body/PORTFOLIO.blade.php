 <!-- ======= Portfolio Section ======= -->
 <section id="portfolio" class="portfolio">
    <div class="container">

      <div class="section-title" data-aos="fade-up">
        <h2>Portfolio</h2>
      </div>

      <div class="row" data-aos="fade-up">
        <div class="col-lg-12 d-flex justify-content-center">
          <ul id="portfolio-flters">

            <li data-filter="*" class="filter-active">All</li>
            @foreach ($a as $item)
                
         
            <li data-filter=".filter-<?=str_replace(' ', '_', $item)?> ">{{$item}}</li>

               @endforeach
          </ul>
        </div>
      </div>

      <div class="row portfolio-container" data-aos="fade-up">
        @foreach ($m as $item)
            
        

        <div class="col-lg-4 col-md-6 portfolio-item filter-<?=str_replace(' ', '_', $item->cat_name)?> ">
          <img src="Image/multiImages/{{$item->image}}" class="img-fluid" alt="">
          <div class="portfolio-info">
            <h4>App 1</h4>
            <p>{{$item->cat_name}}</p>
            <a href="Image/multiImages/{{$item->image}}" data-gall="portfolioGallery" class="venobox preview-link" title="App 1"><i class="bx bx-plus"></i></a>
            <a href="portfolio-details.html" class="details-link" title="More Details"><i class="bx bx-link"></i></a>
          </div>
        </div>
        @endforeach
       

      </div>

    </div>
  </section><!-- End Portfolio Section -->
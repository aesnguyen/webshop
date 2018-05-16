<!-- slider event - top -->
<div id="carousel-example-generic" class="carousel slide" data-ride="carousel" style="margin-left: 100px; margin-right:100px; margin-bottom: 30px;">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
    <li data-target="#carousel-example-generic" data-slide-to="3"></li>
    <li data-target="#carousel-example-generic" data-slide-to="4"></li>
    
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img style="width: 100%; height: 450px;"  src="{{ asset('/public/images/slides/thumbs/qc1.png') }}" alt="{{ asset('/public/images/slides/thumbs/qc1.png') }}">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img style="width: 100%; height: 450px;" src="{{ asset('/public/images/slides/thumbs/qc2.png') }}" alt="{{ asset('/public/images/slides/thumbs/qc2.png') }}">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img style="width: 100%; height: 450px;"  src="{{ asset('/public/images/slides/thumbs/qc3.png') }}" alt="{{ asset('/public/images/slides/thumbs/qc3.png') }}">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img style="width: 100%; height: 450px;"  src="{{ asset('/public/images/slides/thumbs/qc4.png') }}" alt="{{ asset('/public/images/slides/thumbs/qc4.png') }}">
      <div class="carousel-caption">
      </div>
    </div>
    <div class="item">
      <img style="width: 100%; height: 450px;"  src="{{ asset('/public/images/slides/thumbs/qc5.png') }}" alt="{{ asset('/public/images/slides/thumbs/qc5.png') }}">
      <div class="carousel-caption">
      </div>
    </div>
  </div>

  <!-- Controls -->
  <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
</div> 
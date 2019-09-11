<!DOCTYPE html>
<html>
    <head>
        <title>Laravel XXXXXXX</title>

	<!-- bootstrap v4.0.0 -->
		<link rel="stylesheet" href="css/bootstrap.min.css">
		<!-- linear-icons css -->
		<link rel="stylesheet" href="css/linear-icons.css">
		<!-- elegant css -->
		<link rel="stylesheet" href="assets/css/elegant.css">
		<!-- animate css -->
		<link rel="stylesheet" href="assets/css/animate.css">
		<!-- jquery.mmenu css -->
		<link rel="stylesheet" href="assets/mmenu/dist/mmenu.css" />
		<!-- jquery-ui.min css -->
		<link rel="stylesheet" href="assets/css/jquery-ui.min.css">
		<!-- slick css -->
		<link rel="stylesheet" href="css/slick.css">
		<!-- slick-theme css -->
		<link rel="stylesheet" href="assets/css/slick-theme.css">
		<!-- venobox css -->
		<link rel="stylesheet" href="assets/css/venobox.css">
		<!-- helper css -->
		<link rel="stylesheet" href="css/helper.css">
		<!-- style css -->
		<link rel="stylesheet" href="css/style.css">
		<!-- responsive css -->
		<link rel="stylesheet" href="assets/css/responsive.css">
    </head>
    <body>

			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="section-title text-center">
							<h2>Our Cats</h2>
							<p>As we all know, cats own teh internets, so here are our cats.</p>
						</div>
					</div>
				</div>
				<div class="row blog-carousel mt-65 mt-sm-55 slick-initialized slick-slider">

                @foreach ($posts as $post)
					<div class="slick-list draggable"><div class="slick-track" style="opacity: 1; width: 1170px; transform: translate3d(0px, 0px, 0px);"><div class="col-lg-4 slick-slide slick-current slick-active" data-slick-index="0" aria-hidden="false" style="width: 390px;" tabindex="0">
						<div class="blog-single">
							<div class="blog-thumb">
								<a href="#" tabindex="0"><img src="{{ $post->featured_image }}" alt=""></a>
							</div>
							<div class="blog-desc">
								<h4>{{ $post->name }}</h4>
								<p>{{ $post->content }}</p>
								<div class="blog-author">
									<small>Owned by <a href="#" tabindex="0"><strong>{{ $post->owner }}</strong></a></small>
								</div>
							</div>
						</div>
                    </div>
                    @endforeach
</div>


				</div>
			</div>


    </body>
</html>

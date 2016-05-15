
<section class="content">

<div class="container">
	<div class="block-content">
    	<div class="block-content-inner">
			<div class="page-header page-header-no-rules center">
				<h2 class="title-reg">
					<img src="<?php echo base_url('assets/image/zuiplo.png');?>" width="250px;" height="100px;" class="logo-head">
				</h2>

			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="block-content">
    	<div class="block-content-inner">
			<div class="page-header page-header-no-rules center">
				<h2 class="title-text">
					Thank you for agreeing to take part in srikandev event planning survey!
				</h2>
				<h3 class="title-desc">
					In this survey, we'll seek for your thoughts and opinions in order to ensure our event is as useful as possible. This survey<br> should only take 2-3 minutes to complete. Psst...! We assured that all answers you provide will be kept in the strictest<br> confidentiality ;)
				</h3>
			</div>
		</div>
	</div>
</div>
<div class="container">
	<div class="block-content">
    	<div class="block-content-inner">
			<div class="page-header page-header-no-rules center">
				<h2 class="title-text">
					<p class="lead">
							<div class="subMenu">
								<!-- <div class="inner"> -->
										<a href="#s1"  class="cover-btn-lg">REGISTER</a>
								<!-- </div> -->
							</div>


					</p>
				</h2>
					<div class="col-md-12 pages-skip"></div>
			</div>
		</div>
	</div>
</div>


<div class="container">
	<div class="block-content">
    	<div class="block-content-inner">
			<div class="page-header page-header-no-rules center">
				<h2 class=" title-reg">Register</h2>
			</div>

			<div class="row">
    <div class="col-sm-4 col-sm-offset-4">
        <form method="post" action="?">
          <div class="form-group">
              <label>Full Name</label>
              <input type="text" class="form-control">
          </div>

            <div class="form-group">
                <label>E-mail</label>
                <input type="email" class="form-control">
            </div>


            <div class="form-group">
                <label>Contact</label>
                <input type="text" class="form-control">
            </div>


            <div class=" form-group">
                <label>Address</label>
                <textarea  class="form-control"></textarea>
            </div>

            <div class="form-group">
                <input type="submit" value="Register" class="btn-lg btn-inversed-primary">
            </div>
        </form>
    </div>
</div>	    </div>
<div class="col-md-12 footer-form-reg"></div>
<div class="s1 col-md-12 footer-reg">
	&copy;2016 Zuiplo. Created by JICOS
</div>



  <script type="text/javascript">

  $(document).ready( function() {
      $('.subMenu').smint({
      	'scrollSpeed' : 1000
      });
  });

  </script>

<script>
(function(){


	$.fn.smint = function( options ) {

		var settings = $.extend({
			'scrollSpeed'  : 500,
			'mySelector'     : 'div'
		}, options);

		$(this).addClass('smint');

		var optionLocs = new Array(),
			lastScrollTop = 0,
			menuHeight = $(".smint").height(),
			smint = $('.smint'),
        	smintA = $('.smint a'),
        	myOffset = smint.height();

		if ( settings.scrollSpeed ) {
				var scrollSpeed = settings.scrollSpeed
			}

		if ( settings.mySelector ) {
				var mySelector = settings.mySelector
		};
		return smintA.each( function(index) {
			var id = $(this).attr('href').split('#')[1];
			if (!$(this).hasClass("extLink")) {
				$(this).attr('id', id);
			}
			optionLocs.push(Array(
				$(mySelector+"."+id).position().top-menuHeight,
				$(mySelector+"."+id).height()+$(mySelector+"."+id).position().top, id)
			);

			var stickyTop = smint.offset().top;
			var stickyMenu = function(direction){

				var scrollTop = $(window).scrollTop()+myOffset;

				if (scrollTop > stickyTop+myOffset) {
					smint.css({ 'position': 'relative', 'top':0,'left':0 }).addClass('fxd');

					$('body').css('padding-top', menuHeight );
				} else {
					smint.css( 'position', 'relative').removeClass('fxd');

					$('body').css('padding-top', '0' );
				}

				if(optionLocs[index][0] <= scrollTop && scrollTop <= optionLocs[index][1]){
					if(direction == "up"){
						$("#"+id).addClass("active");
						$("#"+optionLocs[index+1][2]).removeClass("active");
					} else if(index > 0) {
						$("#"+id).addClass("active");
						$("#"+optionLocs[index-1][2]).removeClass("active");
					} else if(direction == undefined){
						$("#"+id).addClass("active");
					}
					$.each(optionLocs, function(i){
						if(id != optionLocs[i][2]){

							$("#"+optionLocs[i][2]).removeClass("active");
						}
					});
				}
			};

			stickyMenu();

			$(window).scroll(function() {
				var st = $(this).scrollTop()+myOffset;
				if (st > lastScrollTop) {
				    direction = "down";
				} else if (st < lastScrollTop ){
				    direction = "up";
				}
				lastScrollTop = st;
				stickyMenu(direction);

				if($(window).scrollTop() + $(window).height() == $(document).height()) {
	       			smintA.removeClass('active')
	       			$(".smint a:not('.extLink'):last").addClass('active')

   				} else {
   					smintA.last().removeClass('active')
   				}
			});

        	$(this).on('click', function(e){

				var myOffset = smint.height();

				e.preventDefault();

				var hash = $(this).attr('href').split('#')[1];

				var goTo =  $(mySelector+'.'+ hash).offset().top-myOffset;

				$("html, body").stop().animate({ scrollTop: goTo }, scrollSpeed);

				if ($(this).hasClass("extLink"))
                {
                    return false;
                }

			});


			$('.intLink').on('click', function(e){
				var myOffset = smint.height();

				e.preventDefault();

				var hash = $(this).attr('href').split('#')[1];

				if (smint.hasClass('fxd')) {
					var goTo =  $(mySelector+'.'+ hash).position().top-myOffset;
				} else {
					var goTo =  $(mySelector+'.'+ hash).position().top-myOffset*2;
				}

				$("html, body").stop().animate({ scrollTop: goTo }, scrollSpeed);

				if ($(this).hasClass("extLink"))
                {
                    return false;
                }

			});
		});

	};

	$.fn.smint.defaults = { 'scrollSpeed': 500, 'mySelector': 'div'};
})(jQuery);

</script>

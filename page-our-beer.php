<?php get_header(); ?>
<?php if(have_posts()):while(have_posts()):the_post();?>
<?php flb_list_child_pages(); ?>
<?php the_content();?>
<?php  endwhile; endif; ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script type="text/javascript">
	$(document).ready(function() {
		var holderVisible = false;
		$(".beer-item").click(function() {
			var beer = $(this);
			var pos = beer.position();
			var t = pos.top;
			if (holderVisible) {
				$("#holder").stop().animate({'opacity':0}, function() {
					contentLoad();
				});					
			}
			else {
				contentLoad();
			}
			function contentLoad() {
				$("#holder").html(beer.html());
				$("#holder").append('<span id="close-beer"></span>');
				$("#holder").css({top: t+'px'});
				var wh = ($(window).height()/2)-$("header").height();
				$("body").animate({scrollTop:($("#holder").offset().top-wh)}, 500);
				$("#holder").stop().animate({'opacity':1}, function() {
					holderVisible = true;
				});
				document.onkeydown = function(evt) {
					var isEscape = false;
					if ("key" in evt) {
						isEscape = (evt.key == "Escape" || evt.key == "Esc");
					} else {
						isEscape = (evt.keyCode == 27);
					}
					if (isEscape) {
						$("#holder").stop().animate({'opacity':0}, function() {
							$(this).css({top: '-10000px'}).html('');	
							holderVisible = false;
						});	
					}
				}
			}
		});	
		$("#holder").click(function() {
			$(this).stop().animate({'opacity':0}, function() {
				$(this).css({top: '-10000px'}).html('');	
				holderVisible = false;
			});			
		});
	});
</script>
<?php get_footer(); ?>

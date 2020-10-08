<div class="header-menu-mobile">
	<a class="menu_m" href="#menu"><span></span>Menu</a>
	<div class="" >
		<form method="post" action=""> <gcse:search></gcse:search>
		</form>
		 <?php //Common::sendphone("#sbphone","#txtphone"); ?>
	</div>
</div>
<nav id="menu">
	<ul>
        <li>
            <a data-link="home" href="/">Trang chủ</a>
        </li>
        <li>
            <a href="javascript:;" data-link="service">Dịch vụ</a>
        </li>
        <li>
            <a href="javascript:;" data-link="package-month">Gói tháng </a>
        </li>
        <li>
            <a href="javascript:;" data-link="package-dcom">Gói Dcom</a>
        </li>
        <li>
            <a href="javascript:;" data-link="package-sale">Gói sale</a>
        </li>
        <li>
            <a href="javascript:;" data-link="news-home">Tin tức</a>
        </li>
        <li>
            <a href="javascript:;" data-link="footer">Liên hệ</a>
        </li>
	</ul>
</nav>

<script type="text/javascript">
	$(function() {
		$('nav#menu').mmenu({
			extensions	: [ 'effect-slide-menu', 'pageshadow' ],
			searchfield	: false,
			counters	: false,
			navbar 		: {
				title		: '<a href="/">tongdai-viettel.com</a>'
			},
			navbars		: [
				/*{
					position	: 'top',
					content		: [ 'searchfield' ]
				}, */{
					position	: 'top',
					content		: [
						'prev',
						'title',
						'close'
					]
				}, {
					position	: 'bottom',
					content		: [
						''
					]
				}
			]
		});
	});

</script>
		<script>
	$(function(){
		$(window).scroll(function(){
			if($(this).scrollTop()>250){
				$(".header-menu-mobile").addClass("fix-scroll");
			}
			else{
				$(".header-menu-mobile").removeClass("fix-scroll");
			}
		});
	});	
</script>
<style type="text/css">
	.fix-scroll{position: fixed; top: 0px; z-index: 9}
</style>
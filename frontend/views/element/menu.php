<div class="wrapper-menu">
    <div id="cssmenu">
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
    </div>
</div>
<script type="text/javascript">
    $(function(){
        $(window).scroll(function(){
            if($(this).scrollTop()>250){
                $(".header_logo").addClass("fix-scroll");
            }
            else{
                $(".header_logo").removeClass("fix-scroll");
            }
        });
    });
</script>
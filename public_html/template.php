<?php include 'lib.php'; 
    htmlHeader("Contests");
    htmlBanner();
?>
<!-- We are in the body tag of this html file now. -->

<div class="wrap">
    <div class="one sidebar">
        <div class="widget">
            <ul>
                <li class="active"><a href="index.html" class="icon">Home</a></li>
                <li><a href="songs.html" class="icon">Songs</a></li>
                <li><a href="Applications.html" class="icon">Applications</a></li>
            </ul>
        </div>
    </div>
    <div class="content">
        <div class="contests">
            <h2><a href="#">图像分类</a></h2>
            <div class="contest">
                <div class="contest-abstract">
                比赛的摘要.
                </div>
                <div class="clearFloat"></div>
                <a href="#" class="contest-more">详情>></a>
            </div>
        </div>
    </div>
</div>

<?php htmlFooter(); ?>
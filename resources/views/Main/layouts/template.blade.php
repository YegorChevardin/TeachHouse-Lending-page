@include('Main.layouts.header')
<!--INFORMATION SECTION START-->
@include('Main.layouts.information')
<!--INFORMATION SECTION END-->
<!--NEWS SECTION START-->
<div id="news">
	<div id="posts" class="container">
		<h1>News</h1>
		<!--CARD SECTION START-->
        <div id="refresh">
            @include('Main.layouts.posts')
        </div>
		<!--CARD SECTION END-->
	</div>
</div>
<!--NEWS SECTION END-->
<!--GET INFO SECTION START-->
@include('Main.layouts.get-info')
<!--GET INFO SECTION END-->
@include('Main.layouts.footer')
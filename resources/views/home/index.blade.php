@extends('layout.master')

@section('content')
    <div class="container">
		
		<div class="row">
		    <div class="col-md-12">
				<h2 class="page-title">Blog</h2>
			</div>
		</div>

		<div class="row content-blog">
			<div class="col-md-8">

                <div class="box padding">
                    <a href="{{ route('blog.single') }}"><img alt="blog" src="{{ asset('image/blog.jpg') }}"></a>
                        <h3><a href="{{ route('blog.single') }}">The Big Oxmox advised</a></h3>
                            <div class="post-detail">
                                <b>Posted:</b> January 1, 2013 &nbsp;by<a href="#"> admin </a>&nbsp;&nbsp;&nbsp;
                                <b>Tags:</b>&nbsp; <a href="#">Standard</a>
                                &nbsp;&nbsp;&nbsp;
                                <b>Comments:</b>&nbsp;<a href="#">4</a>	
                            </div>
                    <div class="text-blog">
                        <p>The Big Oxmox advised her not to do so, because there were thousands of bad Commas, wild Question Marks and devious Semikoli, but the Little Blind Text didn't listen. She packed her seven versalia, put her initial into the belt and made herself on the way. When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then.</p>
                        <a href="{{ route('blog.single') }}"><em>Read More</em></a>
                    </div>
                    
                </div>

                <div  class="box padding">
                    <a href="{{ route('blog.single') }}"><img alt="blog" src="{{ asset('image/blog1.jpg') }}"></a>
                        <h3><a href="{{ route('blog.single') }}">The copy warned the Little Blind Text</a></h3>
                                <div class="post-detail">
                                <b>Posted:</b> December 21, 2012 &nbsp;by<a href="#"> admin </a>&nbsp;&nbsp;&nbsp;
                                <b>Tags:</b>&nbsp; <a href="#">Standard</a>
                                &nbsp;&nbsp;&nbsp;
                                <b>Comments:</b>&nbsp;<a href="#">1</a>	
                            </div>
                    <div class="text-blog">
                        <p>The copy warned the Little Blind Text, that where it came from it would have been rewritten a thousand times and everything that was left from its origin would be the word "and" and the Little Blind Text should turn around and return to its own, safe country. But nothing the copy said could convince her and so it didn't take long until a few insidious Copy Writers ambushed her, made her drunk with Longe and Parole and dragged her into their agency, where they abused her for their projects again and again. And if she hasn't been rewritten, then they are still using her. </p>
                        <a href="{{ route('blog.single') }}"><em>Read More</em></a>
                    </div>	
                </div>

			</div>
            
            {{-- side bar --}}
			@include('partials.homesidebar')
            
        </div>
	
	</div>
@endsection
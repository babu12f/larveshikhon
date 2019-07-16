@extends('layout.master')

@section('content')
        <div class="container">

            <div class="row">
                <div class="col-md-12">
                    <h2 class="page-title">Blog Post</h2>
                </div>
            </div>
            
            
            <div class="row content-blog">
                <div class="col-md-8">
                    <div class="blog-post box padding">
                        <img src="image/blog.jpg" alt="Image" >
                            <h3><a href="blog-post.html">The Big Oxmox advised</a></h3>
                                <div class="post-detail">
                                    <b>Posted:</b> January 1, 2013 &nbsp;by<a href="#"> admin </a>&nbsp;&nbsp;&nbsp;
                                    <b>Tags:</b>&nbsp; <a href="#">Standard</a>
                                    &nbsp;&nbsp;&nbsp;
                                    <b>Comments:</b>&nbsp;<a href="#">4</a>	
                                </div>
                        <div class="text-blog">
                            <p>The Big Oxmox advised her Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then.</p>
                                <blockquote>
                                    <div class="quote-content">
                                        <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way. On her way she met a copy.And if she hasn't been rewritten, then they are still using her ...</p>
                                    </div>	
                                    <div class="quote-meta">&mdash; Quote Author</div>
                                </blockquote>
                            <p>And if she hasn't been rewritten, then they are still using her. Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth:</p>
                            <ul>
                                <li><span>Et harum quidem rerum facilis</span></li>
                                <li><span>Itaque earum rerum hic</span></li>
                                <li><span>Nemo enim ipsam voluptatem</span></li>
                            </ul>
                            <p>I am alone, and feel the charm of existence in this spot, which was created for the bliss of souls like mine. I am so happy, my dear friend, so absorbed in the exquisite sense of mere tranquil existence, that I neglect my talents.When, while the lovely valley teems with vapour around me, and the meridian sun strikes the upper surface of the impenetrable foliage of my trees, and but a few stray gleams steal into the inner sanctuary. </p>
                        </div>
                    </div>
                </div>

                {{-- single page sidebar --}}
                @include('partials.singlesidebar')

            </div>

            <div class="row">
                <div class="col-md-8">
                    {{-- comment --}}
                    @include('partials.comments')

                    {{-- reply form --}}
                    @include('partials.reply')
                </div>
            </div>

    </div>
@endsection
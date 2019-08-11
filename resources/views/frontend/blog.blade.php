@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.app')

@section('frontendcontent')

<!-- Breadcrumbs Block -->
<div class="block breadcrumbs">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li>Blog Post</li>
        </ul>
    </div>
</div>
<!-- //Breadcrumbs Block -->
<div class="block">
    <h2 class="text-center h-lg h-decor">ข่าวสาร</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-9 aside">
                <div class="blog-post">
                    <div class="post-image">
                        <a href="blog-post-page.html"><img src="{{asset('frontend/assets/images/blog/blog-post-img-1.jpg')}}" alt=""></a>
                    </div>
                    <ul class="post-meta">
                        <li class="post-meta-date">16 December, 2017</li>
                        <li class="post-meta-reviews"><i class="icon icon-speech-bubble"></i><span>3</span></li>
                    </ul>
                    <h2 class="post-title">New Cleaning With Hydrogen Peroxide Tips</h2>
                    <div class="post-author">by Paul Johnson</div>
                    <div class="post-teaser">
                        <p>Hydrogen peroxide is right up there with vinegar and baking soda as one of my favorite household cleaners. Happy Slob reader Jo Ann B. submitted these awesome new (to me!) hydrogen peroxide cleaning tips that I knew you guys would love. If you have a fresh way to use peroxide, then please post a comment with your cleaning tip.</p>
                    </div>
                    <div class="post-read-more"><a href="blog-post-page.html" class="btn">Read Post</a></div>
                </div>
                <div class="blog-post">
                    <div class="post-image">
                        <div class="post-video">
                            <iframe src="https://player.vimeo.com/video/144583212"></iframe>
                        </div>
                    </div>
                    <ul class="post-meta">
                        <li class="post-meta-date">16 December, 2017</li>
                        <li class="post-meta-reviews"><i class="icon icon-speech-bubble"></i><span>3</span></li>
                    </ul>
                    <h2 class="post-title">A Choose-Your-Own-Adventure Plan for Tackling an Annual Chore</h2>
                    <div class="post-author">by Paul Johnson</div>
                    <div class="post-teaser">
                        <p>Hopefully you're not too bitter with me about making you clean again this weekend. But we're starting the home stretch of spring cleaning! One week from today is the official last day of the program—so I think it's just best if we buckle down and get going...</p>
                    </div>
                    <div class="post-read-more"><a href="blog-post-page.html" class="btn">Read Post</a></div>
                </div>
                <div class="blog-post">
                    <ul class="post-meta">
                        <li class="post-meta-date">16 December, 2017</li>
                        <li class="post-meta-reviews"><i class="icon icon-speech-bubble"></i><span>3</span></li>
                    </ul>
                    <h2 class="post-title">Apartment Therapy Mom Wisdom on... Taking Care of Your Home</h2>
                    <div class="post-author">by Paul Johnson</div>
                    <div class="post-teaser">
                        <p>"I am still learning about my home. If you can't do it yourself, find good service people and treat them well." — Terry (mom to our Human Resources Coordinator, Louisa)</p>
                        <div class="quote">
                            <p>Raise your hand if you grew up with a mom (or another parental figure) constantly reminding you to clean your room. Often, our earliest memories of figuring out how to tidy up and take care of our homes are with our moms—they taught us how to do laundry, how to do the dishes, and how to make our beds. So it should come as no surprise that when we asked our moms for their best homekeeping advice, they came back with some great tips.</p>
                            <p>Most agreed on a few major themes: it's important to make sure everything has a home, that you put things back when you take them out, and that your home is an inviting, relaxing place to come home to—and invite others to.</p>
                        </div>
                    </div>
                    <div class="post-read-more"><a href="blog-post-page.html" class="btn">Read Post</a></div>
                </div>
                <div class="blog-post">
                    <div class="post-image">
                        <div class="post-carousel">
                            <a href="#"><img src="{{asset('frontend/assets/images/blog/blog-post-img-2.jpg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('frontend/assets/images/blog/blog-post-img-2-1.jpg')}}" alt=""></a>
                            <a href="#"><img src="{{asset('frontend/assets/images/blog/blog-post-img-2-2.jpg')}}" alt=""></a>
                        </div>
                    </div>
                    <ul class="post-meta">
                        <li class="post-meta-date">16 December, 2017</li>
                        <li class="post-meta-reviews"><i class="icon icon-speech-bubble"></i><span>3</span></li>
                    </ul>
                    <h2 class="post-title">Try the "Good Enough" Method to Clean Kitchen</h2>
                    <div class="post-author">by Paul Johnson</div>
                    <div class="post-teaser">
                        <p>Do you ever casually go about your day, popping into the kitchen for a little peanut butter toast and then the next thing you know you're turning over the toaster oven because it's been so long and you just can't take the crumbs anymore? </p>
                    </div>
                    <div class="post-read-more"><a href="blog-post-page.html" class="btn">Read Post</a></div>
                </div>
                <div class="blog-post">
                    <div class="post-image">
                        <div class="post-music">
                            <iframe src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/301212235&amp;color=ff5500&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false"></iframe>
                        </div>
                    </div>
                    <ul class="post-meta">
                        <li class="post-meta-date">16 December, 2017</li>
                        <li class="post-meta-reviews"><i class="icon icon-speech-bubble"></i><span>3</span></li>
                    </ul>
                    <h2 class="post-title">A Quick Kitchen-Cleaning Mission for Monday</h2>
                    <div class="post-author">by Paul Johnson</div>
                    <div class="post-teaser">
                        <p>At the risk of sounding like a cloyingly optimistic Peppy Patty (which I can assure you, I am not), I never really understood all the pervasive hate for Mondays. I get that easing yourself from the freedom of the weekend into the structure of the workweek is a bit of a shock to the system...</p>
                    </div>
                    <div class="post-read-more"><a href="blog-post-page.html" class="btn">Read Post</a></div>
                </div>
                <div class="blog-post">
                    <div class="post-image">
                        <a href="blog-post-page.html"><img src="{{asset('frontend/assets/images/blog/blog-post-img-3.jpg')}}" alt=""></a>
                        <div class="post-link-wrapper">
                            <div class="vert-wrap">
                                <div class="vert"> <a href="#" class="post-link">http://www.cleanerslink.com</a> </div>
                            </div>
                        </div>
                    </div>
                    <ul class="post-meta">
                        <li class="post-meta-date">16 December, 2017</li>
                        <li class="post-meta-reviews"><i class="icon icon-speech-bubble"></i><span>3</span></li>
                    </ul>
                    <h2 class="post-title">The "Flip and Fluff" Routine is the Best Thing You Can Do For Your Furniture</h2>
                    <div class="post-author">by Paul Johnson</div>
                    <div class="post-teaser">
                        <p>Our spring cleaning journey has been about turning over some lesser-cleaned leaves and refreshing your space to feel brand new for the season ahead. So in many ways, today's assignment is symbolic of the whole shebang. We're going to be flipping and turning, revealing a fresh new face for some of the most-used...</p>
                    </div>
                    <div class="post-read-more"><a href="blog-post-page.html" class="btn">Read Post</a></div>
                </div>
                <div class="clearfix"></div>
                <div class="text-center">
                    <ul class="pagination">
                        <li class="active"><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                    </ul>
                </div>
            </div>
            <div class="col-md-3 aside">
                <div class="side-block">
                    <h3>Archives</h3>
                    <div class="calendar">
                        <div class="calendar__header">March 2017</div>
                        <table>
                            <tr>
                                <th>M</th>
                                <th>T</th>
                                <th>W</th>
                                <th>T</th>
                                <th>F</th>
                                <th>S</th>
                                <th>S</th>
                            </tr>
                            <tr>
                                <td></td>
                                <td></td>
                                <td class="selected">1</td>
                                <td>2</td>
                                <td>3</td>
                                <td>4</td>
                                <td>5</td>
                            </tr>
                            <tr>
                                <td>6</td>
                                <td>7</td>
                                <td>8</td>
                                <td>9</td>
                                <td>10</td>
                                <td>11</td>
                                <td>12</td>
                            </tr>
                            <tr>
                                <td>13</td>
                                <td>14</td>
                                <td>15</td>
                                <td>16</td>
                                <td>17</td>
                                <td>18</td>
                                <td>19</td>
                            </tr>
                            <tr>
                                <td>20</td>
                                <td>21</td>
                                <td>22</td>
                                <td>23</td>
                                <td>24</td>
                                <td>25</td>
                                <td>26</td>
                            </tr>
                            <tr>
                                <td>27</td>
                                <td>28</td>
                                <td>29</td>
                                <td>30</td>
                                <td>31</td>
                                <td></td>
                                <td></td>
                            </tr>
                        </table>
                        <div class="calendar__footer"><a href="#">« April</a></div>
                    </div>
                </div>
                <div class="side-block">
                    <h3>Post Categories</h3>
                    <ul class="category-list">
                        <li><a href="#">Audios  <span>(2)</span></a></li>
                        <li><a href="#">Daily Inspiration  <span>(7)</span></a></li>
                        <li><a href="#">Freelance  <span>(3)</span></a></li>
                        <li><a href="#">Links  <span>(1)</span></a></li>
                        <li><a href="#">Mobile  <span>(1)</span></a></li>
                        <li><a href="#">Photography  <span>(5)</span></a></li>
                        <li><a href="#">Quotes  <span>(1)</span></a></li>
                        <li><a href="#">Resources  <span>(3)</span></a></li>
                        <li><a href="#">Status  <span>(1)</span></a></li>
                    </ul>
                </div>
                <div class="side-block">
                    <h3>Popular tags</h3>
                    <ul class="tags-list">
                        <li><a href="#">Cleaning</a></li>
                        <li><a href="#">Service</a></li>
                        <li><a href="#">Maid</a></li>
                        <li><a href="#">Housekeeping</a></li>
                        <li><a href="#">Window Cleaner</a></li>
                        <li><a href="#">Online Booking</a></li>
                        <li><a href="#">Ovencleaning</a></li>
                        <li><a href="#">Maid Service</a></li>
                        <li><a href="#">Confinement</a></li>
                    </ul>
                </div>
                <div class="side-block">
                    <h3>Featured Posts</h3>
                    <div class="blog-post post-preview">
                        <div class="post-image">
                            <a href="blog-post-page.html"><img src="{{asset('frontend/assets/images/blog/blog-post-featured-1.jpg')}}" alt=""></a>
                        </div>
                        <ul class="post-meta">
                            <li class="post-meta-date">16 December, 2017</li>
                            <li class="pull-right post-meta-reviews"><i class="icon icon-speech-bubble"></i><span>3</span></li>
                        </ul>
                        <h4 class="post-title"><a href="blog-post-page.html">New Cleaning With Hydrogen Peroxide</a></h4>
                    </div>
                    <div class="blog-post post-preview">
                        <div class="post-image">
                            <a href="blog-post-page.html"><img src="{{asset('frontend/assets/images/blog/blog-post-featured-2.jpg')}}" alt=""></a>
                        </div>
                        <ul class="post-meta">
                            <li class="post-meta-date">16 December, 2017</li>
                            <li class="pull-right post-meta-reviews"><i class="icon icon-speech-bubble"></i><span>3</span></li>
                        </ul>
                        <h4 class="post-title"><a href="blog-post-page.html">A Quick Kitchen-Cleaning Mission for Monday</a></h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@stop

@section('frontendjavascript') 
    
@endsection
@inject('request', 'Illuminate\Http\Request')
@extends('frontend.layouts.app')

@section('frontendcontent')

<!-- Breadcrumbs Block -->
<div class="block breadcrumbs">
    <div class="container">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li><a href="blog-posts.html">Blog</a></li>
            <li>Hiring A Great Housekeeper</li>
        </ul>
    </div>
</div>
<!-- //Breadcrumbs Block -->
<div class="block">
    <h2 class="text-center h-lg h-decor">Blog Posts</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-9 aside">
                <div class="blog-post single">
                    <div class="post-image">
                        <a href="blog-post-page.html"><img src="{{asset('frontend/assets/images/blog/blog-post-img-4.jpg')}}" alt=""></a>
                    </div>
                    <ul class="post-meta">
                        <li class="post-meta-date">16 December, 2017</li>
                        <li class="post-meta-reviews"><i class="icon icon-speech-bubble"></i><span>3</span></li>
                    </ul>
                    <h2 class="post-title">Hiring A Great Housekeeper</h2>
                    <div class="post-author">by Paul Johnson</div>
                    <div class="post-content">
                        <p>Hiring just the right housekeeper can be life-altering for the busy family. Now this may seem to be a little over-the-top, but I am serious. Think about your life-whether single, a couple or a family-you have no time. No time to keep your home as organized or clean as you would like. No time to do the smaller tidying jobs that would make a huge difference.</p>
                        <div class="quote">
                            <p>Maybe you struggle to fold laundry, clean ovens and counter tops, or scrub bathrooms. Maybe you need to clean your house fast for a party, need a hotel maid to help scrub motel rooms, or are looking for a professional to help with hospital housekeeping.</p>
                            <p>It seems cliched to say it, but often we let things slip through the cracks. We spend too much time thinking about them, too much energy worrying about them. You deserve a house cleaner or home maker to make your life easier. You deserve professional house cleaning, or a dedicated housekeeper.</p>
                        </div>
                        <p>And here enters great housekeeping. Now to be realistic, all relationships whether working or personal, have a starting point, and with the right match, can grow into something much more. It is certainly so with a new housekeeper. You look for certain qualities in a person, offer them a job and hope that it was a good choice.</p>
                        <p>went to the opinions of my friends. I asked each of them the same question. "What is the one quality that you would have to have to see when hiring a new housekeeper?" Below, I've distilled down their answers.</p>
                        <ul class="tags-list">
                            <li><a href="#">Cleaning</a></li>
                            <li><a href="#">Housekeeping</a></li>
                            <li><a href="#">Window Cleaner</a></li>
                        </ul>
                    </div>
                </div>
                <div class="comments-block">
                    <h2>Comments</h2>
                    <div class="comment">
                        <div class="userpic"><span class="icon icon-user"></span></div>
                        <div class="text">
                            <div class="meta"><span class="meta-author">by Paul Johnson</span><span class="meta-date">16 December, 2017</span></div>
                            <p>Do you ever casually go about your day, popping into the kitchen for a little peanut butter toast and then the next thing you know you're turning over the toaster oven because it's been so long and you just can't take the crumbs anymore? </p>
                            <a href="#" class="reply">Reply</a>
                        </div>
                    </div>
                    <div class="comment replay">
                        <div class="userpic"><span class="icon icon-user"></span></div>
                        <div class="text">
                            <div class="meta"><span class="meta-author">by Paul Johnson</span><span class="meta-date">16 December, 2017</span></div>
                            <p>Yeah. For a steady stream of cleaning, one that keeps your kitchen cleaning itself, so to speak, try the "good enough" approach, punctuated by one deeper clean every week or so.</p>
                            <a href="#" class="reply">Reply</a>
                        </div>
                    </div>
                </div>
                <div class="divider-lg"></div>
                <h2>Leave a Comment</h2>
                <form class="contact-form comment-form" name="commentform" method="post" novalidate="novalidate">
                    <div class="inputs-col">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-wrapper">
                                    <input type="text" class="input-custom input-full" name="name" placeholder="Your name*">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="input-wrapper">
                                    <input type="text" class="input-custom input-full" name="email" placeholder="Email*">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="input-wrapper">
                        <textarea class="textarea-custom input-full" name="message" placeholder="Message"></textarea>
                    </div>
                    <button type="submit" class="btn btn-border">Send Message</button>
                </form>
                <div class="divider divider-lg"></div>
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
    <script>
        $(document).ready(function () {
            $('#confirm').click(function(e){   

                let name = $('#name').val();
                let tel = $('#tel').val();
                let line = $('#line').val();
                let appoint = $('#appoint').val();
                let detail = $('#detail').val();

                if (name == "") {
                    swal("กรุณากรอกชื่อ","","warning");
                } else if (tel == "") {
                    swal("กรุณากรอกเบอร์ติดต่อ","","warning");
                } else if (line == "") {
                    swal("กรุณากรอกไอดีไลน์","","warning");
                } else if (appoint == "") {
                    swal("กรุณากรอกวันที่สะดวกเข้ามาชมรถ","","warning");
                } else if (detail == "") {
                    swal("กรุณากรอกรายละเอียด","","warning");
                } else {
                    $.ajax({ 
                        url: '{{url("inquiry")}}', 
                        type: "POST",
                        data: { "name" : name, "tel" : tel, "appoint" : appoint, "detail" : detail, "line" : line},
                        success: function(data, statusText, resObject) {
                            
                            if (data) {    

                                if(data === true){
                                    swal("นัดหมายสำเร็จ โปรดรอการติดต่อกลับ","","success");
                                    $('#name').val("");
                                    $('#tel').val("");
                                    $('#line').val("");
                                    $('#appoint').val("");
                                    $('#detail').val("");
                                }else{
                                    swal("เกิดข้อผิดพลาด กรุณาลองใหม่","","error");
                                }
                                                                
                            }
                            return false;
                        },
                        error: function (jqXHR, exception) {
                            getErrorMessage(jqXHR, exception);
                        },
                        complete: function() {      
                            // Do something when success or error.                                           
                        }
                    });
                }

            })
        });
    </script>
@endsection
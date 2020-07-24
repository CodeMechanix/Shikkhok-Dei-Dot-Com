@extends('frontend.layouts.master')
@section('title', 'Teacher Profile')
@section('content')

    <div class="title">
        <div class="title-image"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    Profile Details
                </div>
            </div>
        </div>
    </div>

    <!-- ========== CONTENT START ========== -->
    <section id="content">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{ asset('frontend/images/blog-article.jpg')}}" alt="" class="img-responsive" />
                </div>
                <div class="col-sm-6">
                    <h1>John Doe</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu tellus ipsum. Nunc maximus sapien ac dui vulputate tincidunt. Morbi luctus nisi vel suscipit volutpat. Donec vitae auctor nisl. Ut malesuada felis in erat rutrum ultrices. Fusce iaculis ornare nunc rutrum ornare. Proin ut placerat enim, vel venenatis urna. Phasellus sed diam tincidunt mauris malesuada mattis et in nisl. Quisque massa eros, molestie at mi eget, aliquam tristique eros. Nullam aliquet placerat magna ut eleifend. Phasellus iaculis tristique laoreet.</p>
                    <ul>
                        <li>Fusce iaculis ornare nunc rutrum ornare.</li>
                        <li>Proin ut placerat enim, vel venenatis urna.</li>
                        <li>Phasellus sed diam tincidunt mauris malesuada mattis et in nisl.</li>
                        <li>Quisque massa eros, molestie at mi eget, aliquam tristique eros.</li>
                        <li>Nullam aliquet placerat magna ut eleifend.</li>
                        <li>Phasellus iaculis tristique laoreet.</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== CONTENT END ========== -->

    <!-- ========== REVIEWS START ========== -->
    <section id="teachers-reviews">
        <div class="tint"></div>
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center" data-scroll-reveal>

                    <!-- OWL CAROUSEL START -->
                    <div class="owl-carousel">

                        <div class="item">
                            <blockquote>Donec varius ante in turpis faucibus sagittis. Vestibulum lacinia ante eget fringilla lobortis. Nunc sollicitudin, arcu at fringilla varius, turpis dui venenatis augue, at adipiscing ante ipsum vel leo. In a sem sit amet mi condimentum semper. Nulla eleifend convallis gravida. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec blandit erat eu suscipit porttitor. Sed vestibulum mauris sit amet eros feugiat egestas. Ut rhoncus imperdiet est eget ullamcorper. Fusce at orci sed augue aliquam malesuada. <small>Sally Peterson, Student</small></blockquote>
                        </div>

                        <div class="item">
                            <blockquote>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam semper consectetur nunc ac pretium. Nullam vel lectus non augue imperdiet porta. Proin commodo malesuada faucibus. Integer at lacinia lacus. Vestibulum dignissim imperdiet est vel ornare. Sed vehicula luctus massa, sit amet porta purus feugiat a. Cras tincidunt neque vitae enim pellentesque, nec congue mauris suscipit. Praesent sit amet odio lacus. <small>Malcolm Carr, Student</small></blockquote>
                        </div>

                        <div class="item">
                            <blockquote>Integer faucibus orci eu lorem vulputate, non semper odio consectetur. Phasellus eu commodo lectus, interdum molestie nunc. Maecenas aliquet sagittis elementum. Nulla lobortis diam nisl, id consectetur nunc faucibus viverra. Donec vel porta augue, eget accumsan lorem. Sed dictum consequat ipsum eget porta. Donec imperdiet dolor at ante interdum, sed viverra orci iaculis. Donec vestibulum nulla at tortor molestie, vel convallis neque vestibulum. Phasellus luctus purus ut tincidunt imperdiet. <small>Antonia Owen, Student</small></blockquote>
                        </div>

                        <div class="item">
                            <blockquote>Vestibulum viverra dolor lorem, vitae ornare velit facilisis eget. Phasellus ornare, mauris id interdum cursus, velit libero dictum dolor, a vehicula lacus enim id tortor. Vestibulum faucibus nec elit id iaculis. Aenean lorem ante, pretium ac iaculis non, tincidunt in quam. Nunc lobortis dictum dui. Pellentesque sagittis luctus posuere. Sed suscipit mi vitae orci accumsan, ut imperdiet odio molestie. <small>Jared Murray, Student</small></blockquote>
                        </div>

                    </div>
                    <!-- OWL CAROUSEL END -->

                </div>
            </div>
        </div>
    </section>
    <!-- ========== REVIEWS END ========== -->

    <!-- ========== SKILLS START ========== -->
    <section id="skills">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <h2>John's key skills</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-6">
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean eu tellus ipsum. Nunc maximus sapien ac dui vulputate tincidunt. Morbi luctus nisi vel suscipit volutpat. Donec vitae auctor nisl. Ut malesuada felis in erat rutrum ultrices. Fusce iaculis ornare nunc rutrum ornare. Proin ut placerat enim, vel venenatis urna. Phasellus sed diam tincidunt mauris malesuada mattis et in nisl. Quisque massa eros, molestie at mi eget, aliquam tristique eros. Nullam aliquet placerat magna ut eleifend. Phasellus iaculis tristique laoreet.Donec vitae auctor nisl. Ut malesuada felis in erat rutrum ultrices. Fusce iaculis ornare nunc rutrum ornare. Proin ut placerat enim, vel venenatis urna. Phasellus sed diam tincidunt mauris malesuada mattis et in nisl. Quisque massa eros, molestie at mi eget, aliquam tristique eros.</p>
                </div>
                <div class="col-sm-6">
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="90">
                            <span class="pull-left">Progresssive Web Design</span>
                            <span class="pull-right">90%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="100">
                            <span class="pull-left">HTML5</span>
                            <span class="pull-right">100%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="80">
                            <span class="pull-left">CSS3</span>
                            <span class="pull-right">80%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="70">
                            <span class="pull-left">jQuery</span>
                            <span class="pull-right">70%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="80">
                            <span class="pull-left">Online Marketing</span>
                            <span class="pull-right">80%</span>
                        </div>
                    </div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" data-transitiongoal="90">
                            <span class="pull-left">SEO</span>
                            <span class="pull-right">90%</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- ========== SKILLS END ========== -->

@endsection
@section('scripts')
@endsection

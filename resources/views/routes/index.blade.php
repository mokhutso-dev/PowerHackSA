@extends('main')
@section('title')
    Home
@endsection
@section('content')
    <div class="flex-col">
        <!-- Welcome header here -->
        <header class="welcome ">
            <div class="welcome-container px-lg-5">
                <div class="w-paragraph">
                    <div class="w-message">
                        <h1 class="">Welcome to Aployed</h1>
                        <p class="">
                            Are you looking for a hobby?
                            <br>
                            This is a platform ddesigned to empower African youth to start building technology rather than
                            consuming it. This platform will you provide with free tech training academys at your finger
                            tips <br />

                            <br>
                            Everyone needs a hooby <br>
                            We Are Here To Break barriers!
                        </p>
                        <a class="about-btn" href="/about">More about us here</a>
                    </div>
                </div>
            </div>
            <h3 style="color: blueviolet; text-align: center;
      font-size: x-large;">
                Click on your favourite tab below to sastify your curiousity</h3>
        </header>

        <!-- content here  -->
        <div class="res-cards-cont d-flex wrap  ">
            <div class="responsive">
                <div class="gallery">
                    <a target="_blank"
                        href="https://www.idtechex.com/en/research-article/service-robots-set-to-revolutionize-various-industries/26526">
                        <img src="/images/robots.png" alt="robots" width="600" height="400" />
                    </a>
                    <div class="desc">Service Robots</div>
                    <a class="link"
                        href="https://www.idtechex.com/en/research-article/service-robots-set-to-revolutionize-various-industries/26526">more
                        info</a>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="https://stackoverflow.blog/2023/04/17/community-is-the-future-of-ai/">
                        <img src="/images/ai.png" alt="ai" width="600" height="400" />
                    </a>
                    <div class="desc">Community is the future of AI</div>
                    <a class="link"
                        href="https://www.idtechex.com/en/research-article/service-robots-set-to-revolutionize-various-industries/26526">more
                        info</a>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a href="/academy">
                        <img src="/images/train.png" alt="digital-skills" width="800" height="400" />
                    </a>
                    <div class="desc">Learn tech skills</div>
                    <a class="link" href="/academy">more
                        info</a>
                </div>
            </div>

            <div class="responsive">
                <div class="gallery">
                    <a target="_blank" href="https://www.shiksha.com/online-courses/what-is-programming-st619">
                        <img src="/images/code.jpg" alt="code" width="600" height="400" />
                    </a>
                    <div class="desc">Why Do We Need Programming?</div>
                    <a class="link"
                        href="https://www.idtechex.com/en/research-article/service-robots-set-to-revolutionize-various-industries/26526">more
                        info</a>
                </div>
            </div>
        </div>

        <div class="clearfix"></div>

        <div style="padding: 6px"></div>
    </div>
@endsection

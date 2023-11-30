<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>{{ENV('APP_NAME')}} | @yield('title', 'Home')</title>
    <link rel="stylesheet" href="{{asset('public/frontend/src/scss/vendors/plugin/css/video-js.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/src/scss/vendors/plugin/css/star-rating-svg.css')}}" />
    <link rel="stylesheet" href="{{asset('public/frontend/dist/main.css')}}" />
    <link rel="icon" type="image/png" href="{{asset('public/frontend/dist/images/favicon/favicon.png')}}" />
    <style>
        .vjs-poster {
            width: 100%;
            background-size: cover;
        }
    </style>

</head>

<body style="background-color: #ebebf2;">

    <!-- Title Starts Here -->
    <header class="bg-transparent">
        <div class="container-fluid">
            <div class="coursedescription-header">
                <div class="coursedescription-header-start">
                    <a class="logo-image" href="{{route('home')}}">
                        <img src="{{asset('public/frontend/dist/images/logo/logo.png')}}" alt="Logo" />
                    </a>
                    <div class="topic-info">
                        <div class="topic-info-arrow">
                            <a href="#">
                                <svg width="24" height="25" viewBox="0 0 24 25" fill="none"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <path d="M15.5 19.5L8.5 12.5L15.5 5.5" stroke="currentColor" stroke-width="2"
                                        stroke-linecap="round" stroke-linejoin="round" />
                                </svg>
                            </a>
                        </div>
                        <div class="topic-info-text">
                            <h6 class="font-title--xs"><a href="#">User Experience Design Essentials - Adobe XD UI UX
                                    Design</a></h6>
                            <div class="lesson-hours">
                                <div class="book-lesson">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M1.5 2.75H6C6.79565 2.75 7.55871 3.06607 8.12132 3.62868C8.68393 4.19129 9 4.95435 9 5.75V16.25C9 15.6533 8.76295 15.081 8.34099 14.659C7.91903 14.2371 7.34674 14 6.75 14H1.5V2.75Z"
                                            stroke="#00AF91" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path
                                            d="M16.5 2.75H12C11.2044 2.75 10.4413 3.06607 9.87868 3.62868C9.31607 4.19129 9 4.95435 9 5.75V16.25C9 15.6533 9.23705 15.081 9.65901 14.659C10.081 14.2371 10.6533 14 11.25 14H16.5V2.75Z"
                                            stroke="#00AF91" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                    </svg>
                                    <span>93 Lesson</span>
                                </div>
                                <div class="totoal-hours">
                                    <svg width="18" height="19" viewBox="0 0 18 19" fill="none"
                                        xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M9 17C13.1421 17 16.5 13.6421 16.5 9.5C16.5 5.35786 13.1421 2 9 2C4.85786 2 1.5 5.35786 1.5 9.5C1.5 13.6421 4.85786 17 9 17Z"
                                            stroke="#FF7A1A" stroke-width="1.8" stroke-linecap="round"
                                            stroke-linejoin="round" />
                                        <path d="M9 5V9.5L12 11" stroke="#FF7A1A" stroke-width="1.8"
                                            stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                    <span>11.5 Hours</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="coursedescription-header-end">
                    <!-- <a href="#" class="rating-link" data-bs-toggle="modal" data-bs-target="#ratingModal">Leave a Rating</a> -->
                    <a href="#" class="button button--text" data-bs-toggle="modal" data-bs-target="#ratingModal">Leave a
                        Rating</a>

                    <!-- <a href="#" class="btn btn-primary regular-fill-btn">Next Lession</a> -->
                    <button class="button button--primary">Next Lession</button>
                </div>
            </div>
        </div>
    </header>
    <!-- Ttile Ends Here -->

    <!-- Course Description Starts Here -->
    <div class="container-fluid">
        <div class="row course-description">
            <div class="col-lg-8">
                <div class="course-description-start">
                    <div class="video-area">
                        <video controls id="my-video" class="video-js w-100"
                            poster="{{asset('public/frontend/dist/images/courses/vthumb.jpg')}}" data-setup="{}">
                            <source src="{{asset('public/frontend/dist/images/courses/video.mp4')}}" class="w-100" />
                        </video>
                    </div>
                    <div class="course-description-start-content">
                        <h5 class="font-title--sm">3. What is UI vs UX - User Interface vs User Experience</h5>
                        <nav class="course-description-start-content-tab">
                            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                                <button class="nav-link active" id="nav-ldescrip-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-ldescrip" type="button" role="tab" aria-controls="nav-ldescrip"
                                    aria-selected="true">
                                    Lesson Description
                                </button>
                                <button class="nav-link" id="nav-lnotes-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-lnotes" type="button" role="tab" aria-controls="nav-lnotes"
                                    aria-selected="false">Lesson Notes</button>
                                <button class="nav-link" id="nav-lcomments-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-lcomments" type="button" role="tab"
                                    aria-controls="nav-lcomments" aria-selected="false">Comments</button>
                                <button class="nav-link" id="nav-loverview-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-loverview" type="button" role="tab"
                                    aria-controls="nav-loverview" aria-selected="false">Course Overview</button>
                                <button class="nav-link" id="nav-linstruc-tab" data-bs-toggle="tab"
                                    data-bs-target="#nav-linstruc" type="button" role="tab" aria-controls="nav-linstruc"
                                    aria-selected="false">Instructor</button>
                            </div>
                        </nav>
                        <div class="tab-content course-description-start-content-tabitem" id="nav-tabContent">
                            <div class="tab-pane fade show active" id="nav-ldescrip" role="tabpanel"
                                aria-labelledby="nav-ldescrip-tab">
                                <!-- Lesson Description Starts Here -->
                                <div class="lesson-description">
                                    <p>
                                        Donec imperdiet erat tortor, nec consectetur odio fermentum et. Mauris vehicula
                                        faucibus viverra. Vestibulum varius ante enim. eu posuere ligula eleifend non.
                                        Praesent sapien nisi, luctus a tellus
                                        a, porta dapibus massa. Cras non mattis mauris. Etiam convallis purus a ante
                                        mattis,
                                        id tincidunt sapien hendrerit. Sed laoreet Check out my portfolio: <a
                                            href="#">https://bit.ly/2OZkYCo</a>
                                    </p>
                                </div>
                                <!-- Lesson Description Ends Here -->
                            </div>
                            <div class="tab-pane fade" id="nav-lnotes" role="tabpanel" aria-labelledby="nav-lnotes-tab">
                                <!-- Course Notes Starts Here -->
                                <div class="course-notes-area">
                                    <div class="course-notes">
                                        <h6>Steps 1: Understand what we're trying to solve.</h6>
                                        <div class="course-notes-item">
                                            <div class="dot"></div>
                                            <p>
                                                You have to take a minute to understand what is the goal, what is the
                                                problem, what they're trying to achieve with it who is the target
                                                audience,
                                                who is the competition, and understand
                                                what are you trying to do here and how will success will look like of
                                                the
                                                project. the way to do that is basically by doing two things
                                            </p>
                                        </div>
                                    </div>
                                    <div class="course-notes">
                                        <h6>Steps 2: ID8 (brainstorming and coming up with lots of ideas)</h6>
                                        <div class="course-notes-item">
                                            <div class="dot"></div>
                                            <p>
                                                The way to get the idea is by removing your barriers about I only need
                                                to
                                                come up with good ideas and just bring a lot of ideas and it's very
                                                important to come up with a lot's of ideas.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="course-notes">
                                        <h6>Steps 3: take the kind of rough idea that you have been trying to validate
                                            it
                                        </h6>
                                        <div class="course-notes-item">
                                            <div class="dot"></div>
                                            <p>
                                                By validating I mean you present it. so you do a present it's a client
                                                work
                                                you do a presentation you show them the work. and you're saying here it
                                                is
                                                here's why I did this here's the
                                                process that I went through.
                                            </p>
                                        </div>
                                    </div>
                                    <div class="course-notes mb-0">
                                        <h6>Steps 4: Refine Your Design</h6>
                                        <div class="course-notes-item">
                                            <div class="dot"></div>
                                            <p>
                                                After you've listened and documented that feedback is actually to refine
                                                your design and improve it and make it better then it's ready after
                                                you've
                                                to go feedback that it's well ready to
                                                release it or finalize it or lunch it or whatever you're doing.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <!-- Course Notes Ends Here -->
                            </div>
                            <div class="tab-pane fade" id="nav-lcomments" role="tabpanel"
                                aria-labelledby="nav-lcomments-tab">
                                <!-- Lesson Comments Starts Here -->
                                <div class="lesson-comments">
                                    <div class="feedback-comment pt-0 ps-0 pe-0">
                                        <h6 class="font-title--card">Add a Public Comment</h6>
                                        <form action="#">
                                            <label for="comment">Comment</label>
                                            <textarea class="form-control" id="comment"
                                                placeholder="Add a Public Comment"></textarea>
                                            <button type="submit"
                                                class="button button-md button--primary float-end">Post
                                                Comment</button>
                                        </form>
                                    </div>
                                    <div class="students-feedback pt-0 ps-0 pe-0 pb-0 mb-0">
                                        <div class="students-feedback-heading">
                                            <h5 class="font-title--card">Comments <span>(57,685)</span></h5>
                                        </div>
                                        <div class="students-feedback-item">
                                            <div class="feedback-rating">
                                                <div class="feedback-rating-start">
                                                    <div class="image">
                                                        <img src="{{asset('public/frontend/dist/images/ellipse/user.jpg')}}"
                                                            alt="Image" />
                                                    </div>
                                                    <div class="text">
                                                        <h6><a href="#">Harry Pinsky</a></h6>
                                                        <p>1 hour ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                Aliquam eget leo quis neque molestie dictum. Etiam ut tortor tempor,
                                                vestibulum ante non, vulputate nibh. Cras non molestie diam. Great
                                                Course
                                                for Beginner 😀
                                            </p>
                                        </div>
                                        <div class="students-feedback-item">
                                            <div class="feedback-rating">
                                                <div class="feedback-rating-start">
                                                    <div class="image">
                                                        <img src="{{asset('public/frontend/dist/images/ellipse/1.png')}}"
                                                            alt="Image" />
                                                    </div>
                                                    <div class="text">
                                                        <h6><a href="#">Harry Pinsky</a></h6>
                                                        <p>2 hour ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                Aliquam eget leo quis neque molestie dictum. Etiam ut tortor tempor,
                                                vestibulum ante non, vulputate nibh.
                                            </p>
                                        </div>
                                        <div class="students-feedback-item">
                                            <div class="feedback-rating">
                                                <div class="feedback-rating-start">
                                                    <div class="image">
                                                        <img src="{{asset('public/frontend/dist/images/ellipse/2.png')}}"
                                                            alt="Image" />
                                                    </div>
                                                    <div class="text">
                                                        <h6><a href="#">Watcraz Eggsy</a></h6>
                                                        <p>1 day ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                Aenean vulputate nisi ligula. Quisque in tempus sapien. Quisque
                                                vestibulum
                                                massa eget consequat scelerisque. Phasellus varius risus nec maximus
                                                auctor.
                                            </p>
                                        </div>
                                        <div class="students-feedback-item border-0">
                                            <div class="feedback-rating">
                                                <div class="feedback-rating-start">
                                                    <div class="image">
                                                        <img src="{{asset('public/frontend/dist/images/ellipse/3.png')}}"
                                                            alt="Image" />
                                                    </div>
                                                    <div class="text">
                                                        <h6><a href="#">Watcraz Eggsy</a></h6>
                                                        <p>1 day ago</p>
                                                    </div>
                                                </div>
                                            </div>
                                            <p>
                                                Cras non molestie diam. Aenean vulputate nisi ligula. Quisque in tempus
                                                sapien. Quisque vestibulum massa eget consequat scelerisque.
                                            </p>
                                        </div>
                                        <button class="button button-md button--primary-outline">Load More</button>
                                    </div>
                                </div>
                                <!-- Lesson Comments Ends Here -->
                            </div>
                            <div class="tab-pane fade" id="nav-loverview" role="tabpanel"
                                aria-labelledby="nav-loverview-tab">
                                <!-- Course Overview Starts Here -->
                                <div class="row course-overview-main">
                                    <div class="course-overview-main-item">
                                        <h6 class="font-title--card">Description</h6>
                                        <p class="mb-3 font-para--lg">
                                            Duis placerat eleifend leo nec mattis. Phasellus scelerisque arcu quis
                                            feugiat
                                            efficitur. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer
                                            laoreet est eget est sagittis, et
                                            scelerisque quam convallis. Praesent at tortor facilisis, tempus ex quis,
                                            tempor
                                            arcu. Duis id velit mattis diam fermentum tincidunt. Sed et vehicula lectus.
                                        </p>
                                        <p class="font-para--lg">
                                            Sed ut tincidunt velit, eu bibendum turpis. Fusce in posuere felis, sed
                                            lobortis
                                            elit. Integer mollis sodales congue
                                        </p>
                                    </div>
                                    <div class="course-overview-main-item">
                                        <h6 class="font-title--card">Requirments</h6>
                                        <p class="mb-2 font-para--lg">
                                            Donec tristique ligula id tellus porta, dapibus imperdiet mi ullamcorper.
                                            Vivamus suscipit, nisi eu tincidunt interdum.
                                        </p>
                                        <ul class="course-overview__point">
                                            <li>
                                                <p>
                                                    Mauris ut libero ut mauris sagittis consectetur quis eget elit.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Mauris ut libero ut mauris sagittis consectetur quis eget elit.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Mauris ut libero ut mauris sagittis consectetur quis eget elit.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Mauris ut libero ut mauris sagittis consectetur quis eget elit.
                                                </p>
                                            </li>
                                            <li>
                                                <p>
                                                    Mauris ut libero ut mauris sagittis consectetur quis eget elit.
                                                </p>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="course-overview-main-item">
                                        <h6 class="font-title--card">Who This Course is For</h6>
                                        <p class="mb-2 font-para--lg">
                                            Sed arcu odio, ornare ac porttitor at, placerat nec dui. Nulla nec euismod
                                            tellus. Donec facilisis condimentum commodo. Pellentesque ultricies dolor ut
                                            magna aliquet, vitae sodales massa
                                            euismod.
                                        </p>
                                        <p class="bullets-line">
                                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 5L13 5" stroke="#202029" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9 0.999999L13 5L9 9" stroke="#202029" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            This Course for Complete Beginner Students who want learn UI/UX.
                                        </p>
                                        <p class="bullets-line">
                                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 5L13 5" stroke="#202029" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9 0.999999L13 5L9 9" stroke="#202029" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Nunc a ex sodales sem accumsan tristique.
                                        </p>
                                        <p class="bullets-line">
                                            <svg width="14" height="10" viewBox="0 0 14 10" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M1 5L13 5" stroke="#202029" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                                <path d="M9 0.999999L13 5L9 9" stroke="#202029" stroke-width="1.5"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Suspendisse eget eros eget leo pellentesque ullamcorper ac non augue.
                                        </p>
                                    </div>
                                    <div class="course-overview-main-item mb-0">
                                        <h6 class="font-title--card">What You Will be Learn</h6>
                                        <p class="mb-2 font-para--lg">
                                            Sed arcu odio, ornare ac porttitor at, placerat nec dui. Nulla nec euismod
                                            tellus. Donec facilisis condimentum commodo. Pellentesque ultricies dolor ut
                                            magna aliquet, vitae sodales massa
                                            euismod.
                                        </p>
                                        <p class="bullets-line">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 4.5L6.75 13.5L3 9.40909" stroke="#00AF91" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            This Course for Complete Beginner Students who want learn UI/UX.
                                        </p>
                                        <p class="bullets-line">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 4.5L6.75 13.5L3 9.40909" stroke="#00AF91" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>

                                            Nunc a ex sodales sem accumsan tristique.
                                        </p>
                                        <p class="bullets-line">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 4.5L6.75 13.5L3 9.40909" stroke="#00AF91" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Suspendisse eget eros eget leo pellentesque ullamcorper ac non augue.
                                        </p>
                                        <p class="bullets-line mb-0">
                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                xmlns="http://www.w3.org/2000/svg">
                                                <path d="M15 4.5L6.75 13.5L3 9.40909" stroke="#00AF91" stroke-width="2"
                                                    stroke-linecap="round" stroke-linejoin="round" />
                                            </svg>
                                            Suspendisse eget eros eget leo pellentesque ullamcorper ac non augue.
                                        </p>
                                    </div>
                                </div>
                                <!-- Course Overview Ends Here -->
                            </div>
                            <div class="tab-pane fade" id="nav-linstruc" role="tabpanel"
                                aria-labelledby="nav-linstruc-tab">
                                <!-- course details instructor  -->
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="course-instructor mw-100">
                                            <div class="course-instructor-info">
                                                <div class="instructor-image">
                                                    <img src="{{asset('public/frontend/dist/images/courses/courseinstructor.png')}}"
                                                        alt="Instructor" />
                                                </div>
                                                <div class="instructor-text">
                                                    <h6 class="font-title--xs"><a href="instructorreviews.html">Gartin
                                                            Bator</a></h6>
                                                    <p>Senior Teacher</p>
                                                    <div class="d-flex align-items-center instructor-text-bottom">
                                                        <div class="d-flex align-items-center ratings-icon">
                                                            <svg width="20" height="20" viewBox="0 0 20 20" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M9.94438 2.34287L11.7457 5.96656C11.8359 6.14934 12.0102 6.2769 12.2124 6.30645L16.2452 6.88901C16.4085 6.91079 16.5555 6.99635 16.6559 7.12701C16.8441 7.37201 16.8153 7.71891 16.5898 7.92969L13.6668 10.7561C13.5183 10.8961 13.4522 11.1015 13.4911 11.3014L14.1911 15.2898C14.2401 15.6204 14.0145 15.93 13.684 15.9836C13.5471 16.0046 13.4071 15.9829 13.2826 15.9214L9.69082 14.0384C9.51037 13.9404 9.29415 13.9404 9.1137 14.0384L5.49546 15.9315C5.1929 16.0855 4.82267 15.9712 4.65778 15.6748C4.59478 15.5551 4.57301 15.419 4.59478 15.286L5.29479 11.2975C5.32979 11.0984 5.26368 10.8938 5.11901 10.753L2.18055 7.92735C1.94099 7.68935 1.93943 7.30201 2.17821 7.06246C2.17899 7.06168 2.17977 7.06012 2.18055 7.05935C2.27932 6.9699 2.40066 6.91001 2.5321 6.88668L6.56569 6.30412C6.76713 6.27223 6.94058 6.14623 7.03236 5.96345L8.83215 2.34287C8.90448 2.19587 9.03281 2.08309 9.18837 2.03176C9.3447 1.97965 9.51582 1.99209 9.66282 2.06598C9.78337 2.12587 9.88215 2.22309 9.94438 2.34287Z"
                                                                    stroke="#FF7A1A" stroke-width="2"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>
                                                            <p>4.9 Star Rating</p>
                                                        </div>
                                                        <div class="d-flex align-items-center ratings-icon">
                                                            <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M1.5 2.25H6C6.79565 2.25 7.55871 2.56607 8.12132 3.12868C8.68393 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 8.76295 14.581 8.34099 14.159C7.91903 13.7371 7.34674 13.5 6.75 13.5H1.5V2.25Z"
                                                                    stroke="#00AF91" stroke-width="1.8"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                                <path
                                                                    d="M16.5 2.25H12C11.2044 2.25 10.4413 2.56607 9.87868 3.12868C9.31607 3.69129 9 4.45435 9 5.25V15.75C9 15.1533 9.23705 14.581 9.65901 14.159C10.081 13.7371 10.6533 13.5 11.25 13.5H16.5V2.25Z"
                                                                    stroke="#00AF91" stroke-width="1.8"
                                                                    stroke-linecap="round" stroke-linejoin="round">
                                                                </path>
                                                            </svg>

                                                            <p>5 Courses</p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <p class="lead-p">Adobe Certified Instructor &amp; Adobe Certified Expert.
                                            </p>
                                            <p class="course-instructor-description">
                                                Joe has been preaching and practicing the gospel of User Experience (UX)
                                                to
                                                Fortune 100, 500 and Government organizations for nearly three decades.
                                                That
                                                work includes commercial industry
                                                leaders like Google Ventures, Kroll/Duff + Phelps, Broadridge, Conde
                                                Nast,
                                                Johns Hopkins, Mettler-Toledo, PHH Arval, SC Johnson and Wolters Kluwer,
                                                as
                                                well as government agencies like the
                                                National Science Foundation, National Institutes of Health and the Dept.
                                                of
                                                Homeland Security.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="videolist-area">
                    <div class="videolist-area-heading">
                        <h6>Course Contents</h6>
                        <p>5% Completed</p>
                    </div>
                    <div class="videolist-area-bar">
                        <span class="videolist-area-bar--progress"></span>
                    </div>
                    <div class="videolist-area-bar__wrapper">
                        <div class="videolist-area-wizard">
                            <div class="wizard-heading">
                                <h6 class="">Get Started</h6>
                            </div>
                            <div class="main-wizard">
                                <div class="main-wizard__wrapper">
                                    <a class="main-wizard-start">
                                        <div class="main-wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-play-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                            </svg>
                                        </div>
                                        <div class="main-wizard-title">
                                            <p>1. Introduction to Adobe XD</p>
                                        </div>
                                    </a>
                                    <div class="main-wizard-end d-flex align-items-center">
                                        <span>12:34</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                style="border-radius: 0px; margin-left: 5px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-wizard">
                                <div class="main-wizard__wrapper">
                                    <a class="main-wizard-start">
                                        <div class="main-wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-play-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                            </svg>
                                        </div>
                                        <div class="main-wizard-title">
                                            <p>2. Getting started with your Adobe XD project</p>
                                        </div>
                                    </a>
                                    <div class="main-wizard-end d-flex align-items-center">
                                        <span>12:34</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                style="border-radius: 0px; margin-left: 5px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-wizard">
                                <div class="main-wizard__wrapper active">
                                    <a class="main-wizard-start">
                                        <div class="main-wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-play-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                            </svg>
                                        </div>
                                        <div class="main-wizard-title">
                                            <p>3. What is UI vs UX - User Interface vs User Experie...</p>
                                        </div>
                                    </a>
                                    <div class="main-wizard-end d-flex align-items-center">
                                        <span>12:34</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                style="border-radius: 0px; margin-left: 5px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="videolist-area-wizard">
                            <div class="wizard-heading">
                                <h6 class="">The Project Brief</h6>
                            </div>
                            <div class="main-wizard">
                                <div class="main-wizard__wrapper border-0">
                                    <a class="main-wizard-start">
                                        <div class="main-wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-play-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                            </svg>
                                        </div>
                                        <div class="main-wizard-title">
                                            <p>4. The brief & persona for our real life project</p>
                                        </div>
                                    </a>
                                    <div class="main-wizard-end d-flex align-items-center">
                                        <span>12:34</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                style="border-radius: 0px; margin-left: 5px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-wizard">
                                <div class="main-wizard__wrapper download-wizard">
                                    <a class="main-wizard-start">
                                        <div class="main-wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-file">
                                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                </path>
                                                <polyline points="13 2 13 9 20 9"></polyline>
                                            </svg>
                                        </div>
                                        <div class="main-wizard-title">
                                            <p>4. Project Brief</p>
                                        </div>
                                    </a>
                                    <div class="main-wizard-end">
                                        <span>2.5 MB</span>
                                        <small>Downlaod</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="videolist-area-wizard">
                            <div class="wizard-heading">
                                <h6 class="">Low Fidelity Wireframing</h6>
                            </div>
                            <div class="main-wizard">
                                <div class="main-wizard__wrapper">
                                    <a class="main-wizard-start">
                                        <div class="main-wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-play-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                            </svg>
                                        </div>
                                        <div class="main-wizard-title">
                                            <p>5. Wireframing (low fidelity) in Adobe XD</p>
                                        </div>
                                    </a>
                                    <div class="main-wizard-end d-flex align-items-center">
                                        <span>12:34</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                style="border-radius: 0px; margin-left: 5px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-wizard">
                                <div class="main-wizard__wrapper">
                                    <a class="main-wizard-start">
                                        <div class="main-wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-play-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                            </svg>
                                        </div>
                                        <div class="main-wizard-title">
                                            <p>6. How wide should my website or app be in Ado...</p>
                                        </div>
                                    </a>
                                    <div class="main-wizard-end d-flex align-items-center">
                                        <span>12:34</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                style="border-radius: 0px; margin-left: 5px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-wizard">
                                <div class="main-wizard__wrapper border-0">
                                    <a class="main-wizard-start">
                                        <div class="main-wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-play-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                            </svg>
                                        </div>
                                        <div class="main-wizard-title">
                                            <p>7. Working with existing UI kits in Adobe XD</p>
                                        </div>
                                    </a>
                                    <div class="main-wizard-end d-flex align-items-center">
                                        <span>12:34</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                style="border-radius: 0px; margin-left: 5px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="main-wizard">
                                <div class="main-wizard__wrapper download-wizard">
                                    <a class="main-wizard-start">
                                        <div class="main-wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-file">
                                                <path d="M13 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V9z">
                                                </path>
                                                <polyline points="13 2 13 9 20 9"></polyline>
                                            </svg>
                                        </div>
                                        <div class="main-wizard-title">
                                            <p>7. Low Fidelity Wireframes</p>
                                        </div>
                                    </a>
                                    <div class="main-wizard-end d-flex align-items-center">
                                        <span>12:34</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                style="border-radius: 0px; margin-left: 5px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="videolist-area-wizard">
                            <div class="wizard-heading">
                                <h6 class="">Type, Color & Icon Introduction</h6>
                            </div>
                            <div class="main-wizard">
                                <div class="main-wizard__wrapper">
                                    <a class="main-wizard-start">
                                        <div class="main-wizard-icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                                stroke-linecap="round" stroke-linejoin="round"
                                                class="feather feather-play-circle">
                                                <circle cx="12" cy="12" r="10"></circle>
                                                <polygon points="10 8 16 12 10 16 10 8"></polygon>
                                            </svg>
                                        </div>
                                        <div class="main-wizard-title">
                                            <p>8. Working with type in your XD wireframes</p>
                                        </div>
                                    </a>
                                    <div class="main-wizard-end d-flex align-items-center">
                                        <span>12:34</span>
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" value=""
                                                style="border-radius: 0px; margin-left: 5px;" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Course Description Ends Here -->

    <!-- Rating Modal -->
    <div class="modal fade modal--rating" id="ratingModal" tabindex="-1" aria-labelledby="ratingModal"
        aria-hidden="true" data-backdrop="false">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Leave A Rating</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body text-center pt-0 pb-0">
                    <div class="modal-body-rating">
                        <p>4.5 <span>(Good/Amazing)</span></p>
                        <div class="my-rating rating-icons rating-icons-modal"></div>
                    </div>
                </div>
                <div class="modal-footer border-0">
                    <form action="#" class="w-100">
                        <label for="messages">Message</label>
                        <textarea id="messages" placeholder="How is your to feeling taking these course?"
                            class="w-100"></textarea>
                        <button type="submit" class="button button-md button--primary w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script src="{{asset('public/frontend/src/js/jquery.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/scss/vendors/plugin/js/video.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/scss/vendors/plugin/js/isotope.pkgd.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/scss/vendors/plugin/js/jquery.magnific-popup.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/scss/vendors/plugin/js/slick.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/scss/vendors/plugin/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('public/frontend/src/scss/vendors/plugin/js/jquery.star-rating-svg.js')}}"></script>
    <script src="{{asset('public/frontend/src/js/app.js')}}"></script>
    <script>
        $(".my-rating").starRating({
                    starSize: 30,
                    activeColor: "#FF7A1A",
                    hoverColor: "#FF7A1A",
                    ratedColors: ["#FF7A1A", "#FF7A1A", "#FF7A1A", "#FF7A1A", "#FF7A1A"],
                    starShape: "rounded",
                });
    </script>

</body>

</html>
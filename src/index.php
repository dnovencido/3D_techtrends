<?php 
    include 'session.php'; 

    if(isset($_SESSION['id'])) {
        header("Location: feed");
    }
?>
<?php include 'layouts/_header.php';?>
<main>
    <section id="banner">
        <div id="inner-banner" class="container">
            <div id="left-banner">
                <div id="left-banner-title">
                    <h1>Unveiling Tomorrow's Tech Today!</h1>
                </div>
                <div id="left-banner-body">
                    <p>Stay Ahead of the Digital Curve with #TechTrends.</p>
                    <a href="/signup" class="btn btn-lg">Signup</a>
                </div>
            </div>
            <div id="right-banner">
                <img src="assets/images/hand.png" alt="Technology">
            </div>
        </div>
    </section>
    <section id="featured">
        <div id="featured-inner" class="container card">
            <div id="main-featured" class="featured-item">
                <div class="featured-preview">
                    <video class="featured-image" controls>
                        <source src="assets/video/startup.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video> 
                </div>
                <div class="featured-details">
                    <h3>
                        <a href="#">Startups and Established Tech Companies Collaborate on New Products</a>
                    </h3>
                    <p>Startups and established tech companies are increasingly collaborating on new products and services. This is because both sides have something to offer: startups have agility and innovation, while established companies have resources and market reach.</p>
                </div>
            </div>
            <div id="sub-featured" class="featured-item">
                <div id="sub-featured-item-heading">
                    <h5>Other Featured Blogs</h5>
                </div>
                <div id="sub-featured-list">
                    <div class="sub-featured-item">
                        <div class="sub-featured-item-image">
                            <img src="assets/images/academic-institutions.jpg" class="featured-image" alt="">
                        </div>
                        <div class="sub-featured-item-description">
                            <a href="#"></a>
                            <p class="author">Martina S. Mueller</p>
                        </div>
                    </div>
                    <div class="sub-featured-item">
                        <div class="sub-featured-item-image">
                            <img src="assets/images/iphone15.jpg" alt="" class="featured-image">
                        </div>
                        <div class="sub-featured-item-description">
                            <a href="#">Apple Unveils New iPhone 15 with USB-C Port</a>
                            <p class="author">Nora K. Napper</p>
                        </div>
                    </div>
                    <div class="sub-featured-item">
                        <div class="sub-featured-item-image">
                            <img src="assets/images/nasa.jpg" alt="" class="featured-image">
                        </div>
                        <div class="sub-featured-item-description">
                            <a href="#">NASA Releases New Images of James Webb Space Telescope</a>
                            <p class="author">Kathryn T. Hernandez</p>
                        </div>
                    </div>
                    <div class="sub-featured-item">
                        <div class="sub-featured-item-image">
                            <img src="assets/images/crypto.jpg" alt="" class="featured-image">
                        </div>
                        <div class="sub-featured-item-description">
                            <a href="#">Cryptocurrency Market Crash Wipes Out Trillions of Dollars</a>
                            <p class="author">Viviana D. Spillman</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="blogs">
        <div id="inner-blog" class="container">
            <h3>Blogs</h3>
            <div id="categories" class="container">
                <ul>
                    <li class="active">
                        <a href="#" class="category-link">All</a>
                    </li>
                    <li>
                        <a href="#" class="category-link">Gadget</a>
                    </li>
                    <li>
                        <a href="#" class="category-link">Software</a>
                    </li>
                    <li>
                        <a href="#" class="category-link">Business Technology</a>
                    </li>
                    <li>
                        <a href="#" class="category-link">Coding and Programming</a>
                    </li>
                    <li>
                        <a href="#" class="category-link">Cyber Security</a>
                    </li>
                    <li>
                        <a href="#" class="category-link">Gaming</a>
                    </li>
                </ul>
            </div>
            <div id="blog-list">
                <div id="blog-container">
                    <div class="blog-item card">
                        <div class="blog-item-preview">
                            <img src="assets/images/self-driving-car.jpg" alt="" class="featured-image">
                        </div>
                        <div class="blog-item-description">
                            <div class="blog-item-category">
                                <span class="blog-category">Business Technology</span>
                            </div>
                            <div class="blog-item-heading">
                                <h4>
                                    <a href="#">Self-Driving Car Company Waymo Launches Commercial Service</a>
                                </h4>
                            </div>
                            <div class="blog-item-info">
                                <p class="author">By: Martina S. Mueller</p>
                            </div>
                            <div class="blog-item-content">
                                <p>
                                    Waymo, the self-driving car company owned by Alphabet, has launched its commercial service in Phoenix, Arizona. This makes Waymo the first company in the world to offer a fully autonomous ride-hailing service to the public.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item card">
                        <div class="blog-item-preview">
                            <img src="assets/images/programming-languages.jpg" alt="" class="featured-image">
                        </div>
                        <div class="blog-item-description">
                            <div class="blog-item-category">
                                <span class="blog-category">Coding and Programming</span>
                            </div>
                            <div class="blog-item-heading">
                                <h4>
                                    <a href="#">The Best Programming Languages to Learn in 2023</a>
                                </h4>
                            </div>
                            <div class="blog-item-info">
                                <p class="author">By: Kathryn T. Hernandez</p>
                            </div>
                            <div class="blog-item-content">
                                <p>
                                    The best programming languages to learn in 2023 depend on your specific goals and interests. However, some of the most popular and in-demand programming languages includes Python, JavaScript, Java, C/C++ and Go.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item card">
                        <div class="blog-item-preview">
                            <img src="assets/images/gaming-education.jpg" alt="" class="featured-image">
                        </div>
                        <div class="blog-item-description">
                            <div class="blog-item-category">
                                <span class="blog-category">Gaming</span>
                            </div>
                            <div class="blog-item-heading">
                                <h4>
                                    <a href="#">The Future of Gaming for Education</a>
                                </h4>
                            </div>
                            <div class="blog-item-info">
                                <p class="author">By: Nora K. Napper</p>
                            </div>
                            <div class="blog-item-content">
                                <p>
                                    The future of gaming for education is very promising. Games are already being used in schools and classrooms around the world to teach a variety of subjects, and new and innovative educational games are being developed all the time.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item card">
                        <div class="blog-item-preview">
                            <img src="assets/images/gadgets.jpg" alt="" class="featured-image">
                        </div>
                        <div class="blog-item-description">
                            <div class="blog-item-category">
                                <span class="blog-category">Gadgets</span>
                            </div>
                            <div class="blog-item-heading">
                                <h4>
                                    <a href="#">The Best Gadgets for Students</a>
                                </h4>
                            </div>
                            <div class="blog-item-info">
                                <p class="author">By: Viviana D. Spillman</p>
                            </div>
                            <div class="blog-item-content">
                                <p>
                                    Gadgets can be a great way for students to stay organized, productive, and entertained. With so many different gadgets on the market, it can be tough to know which ones are the best for students. Here is a list of some of the best gadgets for students in 2023.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item card">
                        <div class="blog-item-preview">
                            <img src="assets/images/streaming.jpg" alt="" class="featured-image">
                        </div>
                        <div class="blog-item-description">
                            <div class="blog-item-category">
                                <span class="blog-category">Gaming</span>
                            </div>
                            <div class="blog-item-heading">
                                <h4>
                                    <a href="#">How to Get Started with Streaming</a>
                                </h4>
                            </div>
                            <div class="blog-item-info">
                                <p class="author">By: Martina S. Mueller</p>
                            </div>
                            <div class="blog-item-content">
                                <p>
                                    Streaming is the process of broadcasting live video or audio content over the internet. It has become increasingly popular in recent years, as people have begun to use it to share their gaming experiences, their creative talents, and their lives with the world.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item card">
                        <div class="blog-item-preview">
                            <img src="assets/images/programming.jpg" alt="" class="featured-image">
                        </div>
                        <div class="blog-item-description">
                            <div class="blog-item-category">
                                <span class="blog-category">Coding and Programming</span>
                            </div>
                            <div class="blog-item-heading">
                                <h4>
                                    <a href="#">The Most Important Programming Skills to Learn</a>
                                </h4>
                            </div>
                            <div class="blog-item-info">
                                <p class="author">By: Kathryn T. Hernandez</p>
                            </div>
                            <div class="blog-item-content">
                                <p>
                                    The most important programming skills to learn depend on your specific goals and interests. However, some of the most essential programming skills includes Data structures and algorithm, Object Oriented Programming (OOP), and Database design.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item card">
                        <div class="blog-item-preview">
                            <img src="assets/images/metaverse.jpg" alt="" class="featured-image">
                        </div>
                        <div class="blog-item-description">
                            <div class="blog-item-category">
                                <span class="blog-category">Business and Technology</span>
                            </div>
                            <div class="blog-item-heading">
                                <h4>
                                    <a href="#">How Metaverse is Changing the Way We Work, Play, and Learn</a>
                                </h4>
                            </div>
                            <div class="blog-item-info">
                                <p class="author">By: Nora K. Napper</p>
                            </div>
                            <div class="blog-item-content">
                                <p>
                                    When you think of the metaverse, you may picture a person playing a video game while wearing a bulky headset that covers most of their face. It’s not surprising that digital gaming is one of the early adopters of the metaverse. But, if the metaverse is all about gaming, Mr. Zuckerberg would not have bet his entire company on it.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="blog-item card">
                        <div class="blog-item-preview">
                            <img src="assets/images/ai.jpg" alt="" class="featured-image">
                        </div>
                        <div class="blog-item-description">
                            <div class="blog-item-category">
                                <span class="blog-category">Business and Technology</span>
                            </div>
                            <div class="blog-item-heading">
                                <h4>
                                    <a href="#">The Future of Technology: What to Expect in the Next Decade</a>
                                </h4>
                            </div>
                            <div class="blog-item-info">
                                <p class="author">By: Viviana D. Spillman</p>
                            </div>
                            <div class="blog-item-content">
                                <p>
                                    AI is going to revolutionize almost every facet of modern life. Stephen Hawking said, “Success in creating AI would be the biggest event in human history.” And Hawking immediately followed that up with, “Unfortunately, it might also be the last, unless we learn how to avoid the risks."
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
<?php include 'layouts/_footer.php';?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="jarallax.css">
    <link rel="stylesheet" href="about.css">
    <title>About Me</title>
</head>

<body>
    <section>
        <div class="box">
            <h2 data-jarallax-element="0 -200">About Me</h2>
            <div class="container">
                <div class="imgBx jarallax">
                    <img src="myself1.jpg" alt="myphoto" class="jarallax-img">
                </div>
                <div class="content" data-jarallax-element="-200 0">
                    <p class="aboutme">I am passionate about humanitarian rights and about helping others in whatever way possible by me. I like to read write and ofcource code. I am an undergraduate student at the Aligarh Muslim University studying Computer Applications. I would love to have a chit chat and explore more of you. Contact me at: 7903042618.</p>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="box">
            <h2 data-jarallax-element="0 200">My Hobbies</h2>
            <div class="container">
                <div class="imgBx jarallax">
                    <img src="books.jpg" alt="myphoto" class="jarallax-img">
                </div>
                <div class="content" data-jarallax-element="-200 0">
                    <p class="aboutme">I have various hobbies apart from coding and building stuff, for example i love to read and at the same time I write as well. I like to explore the world around us and I am facinated by the rich history we have. I like to connect with people and know more about their thoughts and perceptions. </p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="box">
            <h2 data-jarallax-element="0 -200"> <u>PRO</u>gramming </h2>
            <div class="container">
                <div class="imgBx jarallax">
                    <img src="code.jpg" alt="myphoto" class="jarallax-img">
                </div>
                <div class="content" data-jarallax-element="-200 0">
                    <p class="aboutme">I started my coding journey last year around November. From then on I kept moving forward and learned a lot of new things. Some of the feilds where my fingers feel flexible are: <br>
                    <ul>
                        <li>Python</li>
                        <li>C/C++</li>
                        <li>Full Stack Web Development</li>
                    </ul>
                </p>
                </div>
            </div>
        </div>
    </section>
    
    <section>
        <div class="box">
            <h2 data-jarallax-element="0 200">Projects</h2>
            <div class="container">
                <div class="imgBx jarallax">
                    <img src="projects.jpeg" alt="myphoto" class="jarallax-img">
                </div>
                <div class="content" data-jarallax-element="-200 0">
                    <p class="aboutme">I have made various projects in many languages that I have learned on my way here. I have made many small projects in python java script php and other languages. To know more about it visit my <a href="https://shibli2316.github.io/First-Portfolio-Website" class="links">portfolio</a> or my <a href="https://github.com/Shibli2316" class="links">github</a> page by clicking on the links.</p>
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="box">
            <h2 data-jarallax-element="0 -200">Co-curricular</h2>
            <div class="container">
                <div class="imgBx jarallax">
                    <img src="cocurricular.jpg" alt="myphoto" class="jarallax-img">
                </div>
                <div class="content" data-jarallax-element="-200 0">
                    <p class="aboutme">Except from all these things you may at times find me clicking pictures of our beautiful mother Earth. I like taking pictures os beautiful things. As John Keats says <em>A thing of beauty is a joy forever.</em> The pictures you are looking at are all clicked by me.</p>
                </div>
            </div>
        </div>
    </section>



    <script src="jarallax.js"></script>
    <script src="jarallax-element.js"></script>
    <script>
        jarallax(document.querySelectorAll('.jarallax'), {
            speed: 0.5,
        });
    </script>
</body>

</html>
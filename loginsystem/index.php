<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="home.css">
    <title>Home Page</title>
</head>
<body>
    <h3>Scroll down</h3>
    <h2 class="text">A To-Do Website</h2>
    <section>
        <h2 class="innerText">A To-Do Website</h2>
    </section>
    <div class="container">
        <h2 align="center">Welcome to my notes and to-do site</h2>
        <p align="right" class="quote"><em>-Success usually comes to those who are too busy to be looking for it</em></p>
        <p class="first"> In today's busy world everyone of us is chasing something and in this game of running after good grades more money more fame we genrally tend to forget simple things like buying groceries or bringing our loved ones some gifts. </p>
        <p class="second" align="right">It's not a big deal to bring a choclate back home or to reserve a movie ticket for the next weekend but those small things do bring a smile and make us all happy. The soul purpose of me making this website is to help you remember those small things while you are way too busy looking for the important aspects of your school life or your office world.</p>
        <p class="first"> Navigation made easy: <br>
        <ol class="first">
            <li>Open the website</li>
            <li>Click on <a href="form.php" class="aboutPage">login</a></li>
            <li>If you dont have an account sign in to have access</li>
            <li>Once logged in you will land on the note making page</li>
            <li>Enter the note and hit the save button</li>
            <li>To access the notes scroll down</li>
            <li>To delete or edit any note click on the respective button</li>
            <li>Log out once done</li>
        </ol> 
    </p>
    <p class="second" align="right"> This website is made with love by me, <b><em>Ahmad Raza Shibli</em></b> to know more about me <a href="about.php" class="aboutPage">click here</a>. Feel free to navigae through the site and make your own list of work that is to be done.</p>
    <p align="center" class="end">I value your privacy and security and so I have provided everyone his or her personal space where you log in to make any entry. No one else except for you can access your files as it is stored in your device and not on the cloud or any server. <br> Thanks for using. </p>

    </div>
    <script>
        let section = document.querySelector('section');
        let text =  document.querySelector('.text');
        let innerText = document.querySelector('.innerText')
        window.addEventListener('scroll', function(){
            let value = window.scrollY;
            section.style.clipPath = "circle("+ value +"px at center center)"
            text.style.left = 100 - value/5 + '%';
            innerText.style.left = 100 - value/5 + '%';
        })
    </script>
</body>
</html>
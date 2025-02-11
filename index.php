<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EduMaterial</title>
    <link rel="stylesheet" type= "text/css" href="src/css/header.css">
    <link rel="stylesheet" type="text/css" href="src/css/home.css">
    <link rel="stylesheet" href="src/css/chat_bot.css">
    <link rel="icon" href="src/image/menu/logo.svg">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <script src="https://unpkg.com/boxicons@latest/dist/boxicons.js"></script>

    <nav id="header">
        <a href="index.php" class="logo">EduMaterial</a>
        <div class="toggle"></div>
        <ul class="navigation">
            <li><a href="index.php" class="active">Home</a></li>
            <li><a href="page/donate/donate.php">Donate</a></li>
            <li><a href="page/material/math.php">Material</a></li>
            <li><a href="page/about-us/about_us.php">About Us</a></li>
            <?php
            if (isset($_SESSION['user_id'])) {
                if ($_SESSION['items']['Role'] == 1) {
            ?>
            <li><a id="log" href="page/dashboard/donator.php"><i class="fas fa-user"></i></a>
            <?php }
                else {
            ?>
            <li><a id="log" href="page/dashboard/admin.php"><i class="fas fa-user"></i></a>
            <?php } 
            }
            else {
            ?>
            <li><a href="page/login/login.php">Login</a></li>
            <?php
            }
            ?>
                <ul>
                    <li><a href="page/login/logout.php">Logout</a></li>
                </ul>
            </li>
        </ul>
    </nav>
</head>
<body>
    <section>
        <img src="src/image/home/stars.png" id="star">
        <img src="src/image/home/stars2.png" id="star2">
        <img src="src/image/home/rock.png" id="rock">
        <h2 id="home_text">Free Education For All</h2>
        <img src="src/image/home/cat.svg" id="cat">
        <img src="src/image/home/night_back.svg" id="night">
    </section>
    <div class="sec">
        <p id="disclaimer" style="font-size:large; font-weight: 500">This website was developed as an action to achieve Goal 4 (Quality Education) of Sustainable Development Goals by UN. </p>
        <h2>What Is Sustainable Development Goals?</h2>
        <p>
            In September 2015, the General Assembly adopted the 2030 Agenda for Sustainable
            <span><img id="sdgGoals" style="width: 100%; max-width: 700px; float: right; padding: 10px 10px;" src="src\image\home\all_goals.jpg" alt="SDG Goals"></span>
            Development that includes 17 Sustainable Development Goals (SDGs).
            Building on the principle of "leaving no one behind", the new Agenda emphasizes a holistic approach to achieving sustainable development for all.
            The Sustainable Development Goals are the blueprint to achieve a better and more sustainable future for all. They address the global challenges we face, including poverty, inequality, climate change, environmental degradation, peace and justice. Learn more <a href="https://www.un.org/sustainabledevelopment/sustainable-development-goals/" target="_blank" style="text-decoration: underline; color: white;">here.</a>
            <br>
        </p>
        <h2>Goal 4 : Education</h2>
        <p> <strong id="quest_text">What is the goal here?</strong> <br>
            To ensure inclusive and quality education for all and promote lifelong learning. <br> <br>
           <strong id="quest_text">Why does education matter?</strong><br>
                Education enables upward socioeconomic mobility and is a key to escaping poverty.
                Education helps reduce inequalities and reach gender equality and is crucial to fostering tolerance and more peaceful societies.
                Over the past decade, major progress has been made towards increasing access to education and school enrollment rates at all levels, particularly for girls. Nevertheless, about 258 million children and youth were still out of school in 2018 — nearly one fifth of the global population in that age group.
                As the COVID-19 pandemic spread across the globe, countries announced the temporary closure of schools, impacting more than 91 per cent of students worldwide. By April 2020, close to 1.6 billion children and youth were out of school.
            <br> <br>
            <span><img id="goal4" style="width: 100%; max-width: 300px; float: left; padding: 10px 10px;" src="src\image\home\goal4.gif" alt="SDG Goals"></span>
            <strong id="quest_text">
                Where are people struggling the most to have access to education?
            </strong> <br>
            Sub-Saharan Africa faces the biggest challenges in providing schools with basic resources. The situation is extreme at the primary and lower secondary levels, where less than one half of schools in sub-Saharan Africa have access to drinking water, electricity, computers and the Internet.
            Inequalities will also worsen unless the digital divide – the gap between under-connected and highly digitalized countries – is not addressed.
            <br><br><strong id="quest_text">How much progress have we made so far?</strong> <br>
                The primary school completion rate reached 84 per cent in 2018, up from 70 per cent in 2000 and under current trends, is expected to reach 89 per cent globally by 2030.
                In 74 countries with comparable data for the period 2011-2019, around seven in ten children aged three and four were developmentally on track in at least three of the following domains: literacy-numeracy, physical development, social-emotional development and learning.
                The global adult literacy rate (aged 15 years and older) was 86 per cent in 2018, while the youth literacy rate (15 to 24 years) was 92 per cent.
            <br><br><strong id="quest_text">What challenges remain?</strong><br>
                Despite years of steady growth in enrolment rates, non-proficiency rates remain disturbingly high. In 2018, some 773 million adults—two-thirds of whom are women—remained illiterate in terms of reading and writing skills. And the sheer magnitude of school closures due to COVID-19 is likely to set back progress on access to education.
            <br> <br>
            <strong id="quest_text">
                Are there groups that have a more difficult access to education? <br>
            </strong>
                Yes, women and girls are one of these groups. About one-third of countries in the developing regions have not achieved gender parity in primary education.
                These disadvantages in education also translate into lack of access to skills and limited opportunities in the labour market for young women.
                What can we do?
                Ask our governments to place education as a priority in both policy and practice. Lobby our governments to make firm commitments to provide free primary school education to all, including vulnerable or marginalized groups.
                To find out more about Goal #4 and other Sustainable Development Goals, visit:
                <a style="color: white;" target="_blank" href="http://www.un.org/sustainabledevelopment">http://www.un.org/sustainabledevelopment.</a> 
        </p>
    </div>
    <footer>
        <span id="bot">
            <input type="checkbox" id="click">
            <label for="click">
            <i id="paw" class="fas fa-paw"></i>
            <i id="cl" class="far fa-times-circle"></i>
            </label>
            <div class='wrapper'>
                <div class="head-text">CatBot</div>
                <div id="dialogue"></div>
                <form onSubmit="return chatbot.sendMessage()">
                  <div class="text-box">
                    <input type="text" name="message" id="message" autocomplete="off" disabled placeholder="Please wait... loading...">
                    <input class="send-button" type="submit" value="">
                  </div>
                </form>
              </div>
        </span>
        
        <script src='https://cdnjs.cloudflare.com/ajax/libs/tabletop.js/1.5.1/tabletop.min.js'></script>
        <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js'></script>
        <script src="https://unpkg.com/rivescript@latest/dist/rivescript.min.js"></script>
        <!-- <script src="src/js/chat_bot.js"></script> -->
        <script>
            function setup() {
                chatbot.loadFiles(['src/bot/bot_reply.rive']);
            }
            window.onload = setup;
        </script>
    </footer>
    <div id="myModal" class="modal">
        <span class="close">&times;</span>
        <img class="modal-content" id="sdgGoals_1">
        <div id="caption"></div>
    </div>
    
    <script>
        let cat = document.getElementById('cat');
        let night = document.getElementById('night');
        let home_text = document.getElementById('home_text');
        let header = document.getElementById('header');
        let star = document.getElementById('star');
        let star2 = document.getElementById('star2');
        let rock = document.getElementById('rock');
        
        var x = window.matchMedia("max-width: 700px");

        window.addEventListener('scroll', function() {
            let value = window.scrollY;
            star.style.bottom = value * 0.05 + '%';
            star2.style.bottom = value * 0.1 + '%';
            rock.style.bottom = value * -0.35 + 'px';
            cat.style.bottom = value * -0.5 + 'px';
            home_text.style.right = 10 + value * 0.35 + '%';
            home_text.style.top = 30 + value * 0.05 + '%';
            header.style.top = value * 0.2 + 'px';
        });
        var modal = document.getElementById("myModal");

        var img = document.getElementById("sdgGoals");
        var modalImg = document.getElementById("sdgGoals_1");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
        }

        var span = document.getElementsByClassName("close")[0];

        span.onclick = function() { 
        modal.style.display = "none";
        }
    </script>
    <script src="src/js/header.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/idewcomputing/code-chatbot/src/chatbot.js"></script>
</body>
<footer style="text-align: center; font-size: large;margin: 10px 0; font-weight: 500; color: #fff;">EduMaterial &#169; 2021</footer>
</html>
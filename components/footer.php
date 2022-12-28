<style>
    /* FOOTING */
    footer {
        width: 100%;
        top: 100%;
        background: transparent;
    }

    .footer__container {
        padding: 20px 0;
    }

    .footer__container>ul {
        display: grid;
        grid-template-columns: calc(100%/4) calc(100%/4) calc(100%/4) calc(100%/4);
    }

    .footer__container>ul>li {
        text-align: center;
        padding: 0 15px;
    }

    .footer__container h3 {
        font-size: 22px;
        padding-bottom: 10px;
        color: var(--primary);
        border-bottom: 2px solid;
    }

    .foot-item-box {
        text-align: left;
    }

    .footer__container>ul>li>ul {
        width: 100%;
        margin-top: 10px;
        text-align: left;
    }

    .footer__container>ul>li>ul>li,
    .footer__container>ul>li>ul>li>a {
        color: var(--primary);
        font-size: 16px;
        margin: 20px 0;
        line-height: 20px;
        list-style: square;
        text-align: justify;
    }

    .footer__container>ul>li>ul>li>a {
        font-weight: 700;
    }

    .footer__container>ul>li:last-child>ul {
        width: 100%;
        display: flex;
        justify-content: space-between;
    }

    .footer__container>ul>li:last-child>ul>li {
        list-style: none;
    }

    .footer__container>ul>li:last-child>ul>li>i {
        font-size: 70px;
        color: var(--button);
        cursor: pointer;
    }

    .footer__container>ul>li:last-child>ul>li>i:hover {
        color: #ddb6ec;
    }

    .footer__container>ul>li>.foot-item-box>li {
        list-style: none;
    }

    .footer__container>ul>li>.foot-item-box>li b,
    .footer__container>ul>li>.foot-item-box>li a {
        color: var(--primary);
        font-weight: bold;
    }

    .footer__container>ul>li>.foot-item-box>li a {
        text-decoration: underline;
    }

    #form {
        text-align: center;
    }

</style>

<footer class="footer" onload="initClock()">
<link rel="stylesheet" type="text/css" href="../css/style.css" >
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <div class="mt-5 text-center">
        <span class="fs-20">
            <strong>Hiện tại đang là:</strong>
        </span>
    </div>
    <div class="datetime text-center mt-3" id="time">
        <script>
            function refreshTime() {
                const timeDisplay = document.getElementById("time");
                const dateString = new Date().toLocaleString();
                const formattedString = dateString.replace(", ", " - ");
                timeDisplay.textContent = formattedString;
            }
            setInterval(refreshTime, 1000);
            // var datetime = new Date().getDate();
            // console.log(datetime); // it will represent date in the console of developers tool
            // document.getElementById("time").textContent = datetime; //it will print on html page
            // var datetime = new Date().getDay();
            // console.log(datetime); // it will represent date in the console of developers tool
            // document.getElementById("time").textContent = datetime; //it will print on html page
            // var datetime = new Date().getFullYear();
            // console.log(datetime); // it will represent date in the console of developers tool
            // document.getElementById("time").textContent = datetime; //it will print on html page
            // var datetime = new Date().getHours()+1;
            // console.log(datetime); // it will represent date in the console of developers tool
            // document.getElementById("time").textContent = datetime; // represent on webbrowser
            // var datetime = new Date().getMilliseconds();
            // console.log(datetime); // it will represent date in the console of developers tool
            // document.getElementById("time").textContent = datetime; // represent on html page
            // var datetime = new Date().getMonth() + 1;
            // console.log(datetime); // it will represent date in the console of  developers tool
            // document.getElementById("time").textContent = datetime; // represent on html page

            // if sth not working, recover these shit lines (nếu time footer bị lỗi, tắt comment cái đống lòn ở trên)
            var datetime = new Date().toDateString();
            console.log(datetime); // it will represent date in the console of developer tool
            document.getElementById("time").textContent = datetime; // represent on html page

            var datetime = new Date().toLocaleTimeString();
            console.log(datetime); // it will represent date in the console of developers tool
            document.getElementById("time").textContent = datetime; // represent on html page
        </script>
    </div>

        <div class="grid footer__container">
        <div class="grid footer__container">
        <ul>
            <li>
                <h3>Pokémon</h3>
                <ul class="foot-item-box">
                    <li>Pokémon (an abbreviation for Pocket Monsters in Japan) is a Japanese media franchise managed by The Pokémon Company, Game Freak, and Creatures. The franchise was created by Satoshi Tajiri in 1996 </li>
                </ul>
            </li>
            <li>
                <h3>Contact Me: </h3>
                <ul class="foot-item-box">
                    <li>Facebook: <a href="https://www.facebook.com/nguyentuanhung12345" target="_blank">Nguyen Tuan Hung</a></li>
                    <li>Instagram: <a href="https://www.instagram.com/hoangtung_2710" target="_blank">Hoang Tung</a></li>
                </ul>
            </li>
            <li>
                <h3>Detail:</h3>
                <ul class="foot-item-box">
                    <li>Phone no.: <b>090******0</b></li>
                    <li>Email: <a href="mailto:tungng14@gmail.com"><b>tungng14@gmail.com</b></a></li>    
                </ul>
            </li>
            <li>
                <h3>Donate UwU:</h3>
                <ul class="foot-item-box">
                    <li><a href="https://youtu.be/dQw4w9WgXcQ" target="_blank">Buy Me A Coffee!</a></li> 
                    <li><a href="https://trhgtung.github.io/git-page/" target="_blank">MoMo! (test)</a></li>
                </ul>
            </li>
        </div>
    </footer>
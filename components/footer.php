
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

<footer class="footer">
<link rel="stylesheet" type="text/css" href="../css/style.css" >
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
                <ul>
                    <li>Facebook: <a href="https://www.facebook.com/nguyentuanhung12345" target="_blank">Nguyen Tuan Hung</a></li>
                    <li>Instagram: <a href="https://www.instagram.com/hoangtung_2710" target="_blank">Hoang Tung</a></li>
                </ul>
            </li>
            <li>
                <h3>Detail:</h3>
                <ul>
                    <li>Phone no.: <b>090******0</b></li>
                    <li>Email: <a href="mailto:tungng14@gmail.com"><b>tungng14@gmail.com</b></a></li>    
                </ul>
            </li>
            <li>
                <h3>Donate UwU:</h3>
                <ul>
                    <li><a href="https://youtu.be/dQw4w9WgXcQ" target="_blank">Buy Me A Coffee!</a></li> 
                    <li><a href="https://trhgtung.github.io/git-page/" target="_blank">MoMo! (test)</a></li>
                </ul>
            </li>
        </div>
    </footer>
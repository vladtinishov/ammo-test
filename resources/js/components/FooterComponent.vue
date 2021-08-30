<template>
    <footer>
        <div class="footer__line">
            <div class="line__blue"></div>
            <div class="line__yellow"></div>
            <div class="line__red"></div>
            <div class="line__green"></div>
        </div>
        <div class="footer__title">
            <h3>HELLO WORLD COMPANY</h3>
        </div>
        <div class="footer__about_us">
            <div class="about_us__columns">
                <h5>Sponsors:</h5>
                <span>I haven't</span>
            </div>
            <div class="about_us__columns">
                <h5>Star Wars opening:</h5>
                <span>
                    A long time ago, in a galaxy far, far away... <br>
                    It is a period of civil war. Rebel <br>
                    spaceships, striking from a hidden <br>
                    base, have won their first victory <br>
                    against the evil Galactic Empire. <br>
                    During the battle, Rebel spies managed <br>
                    to steal secret plans to the Empire's <br>
                    ultimate weapon, the Death Star, an <br>
                    armored space station with enough <br>
                    power to destroy an entire planet. <br>
                    Pursued by the Empire's sinister agents, <br>
                    Princess Leia races home aboard her <br>
                    starship, custodian of the stolen plans <br>
                    that can save her people and restore <br>
                    freedom to the galaxy.... <br>
                </span>
            </div>
        </div>
    </footer>
</template>

<style scoped>
.footer__line {
    display: flex;
    height: 5px;
}
.line__blue {
    width: 50%;
    background: #4A7FF5;
}
.line__red {
    width: 10%;
    background: #E53F37;
}
.line__green {
    width: 20%;
    background: #43AB50;
}
.line__yellow {
    background: #F7BE00;
    width: 20%
}

.footer__title {
    text-align: center;
    margin: 20px 0;
    border-bottom: 1px solid rgb(241, 233, 233);
}
.footer__about_us {
    display: flex;
    padding: 0 10px;
}
.about_us__columns {
    width: 30%;
}

@media (max-width: 930px) {
    .footer__about_us {
        flex-direction: column;
        align-items: center;
        width: 100%;
    }
    .about_us__columns {
        width: 100%;
        text-align: center;
    }
}
</style>
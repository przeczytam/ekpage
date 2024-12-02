<?php require_once("./layout/header.php"); ?>

<!-- Skills-->
<section class="resume-section" id="skills">
    <div class="resume-section-content">
        <h2 class="mb-5">Skills</h2>
        <div class="subheading mb-3">Programmierung Sprachen & Werkzeuge</div>
        <ul class="list-inline dev-icons">
            <li class="list-inline-item"><i class="fab fa-html5"></i></li>
            <li class="list-inline-item"><i class="fab fa-css3-alt"></i></li>
            <li class="list-inline-item"><i class="fab fa-js-square"></i></li>
            <li class="list-inline-item"><i class="fab fa-php"></i></li>
            <li class="list-inline-item"><i class="fab fa-python"></i></li>
            <li class="list-inline-item"><i class="fab fa-wordpress"></i></li>

        </ul>
        <div class="subheading mb-3">Arbeitsablauf</div>
        <ul class="fa-ul mb-0">
        <?php/* showSkillsFromArray(); "Why is not working?*/?>
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Netzwerke, TCP/IP, Netzwerktopologien, Routing, Switching, RAID, Backup-Strategien, Stromversorgung/USV
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Softwareentwicklung, Vorgehensmodelle, Zahlensysteme, Daten, Lasten- und Pflichtenheft,
                Datenbanksysteme, ER-Modelle, Testprozesse
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Internet of Things, MQTT-Protokoll, CPS, IoT-Protokolle
            </li>
            <li>
                <span class="fa-li"><i class="fas fa-check"></i></span>
                Service-Management-Arten, Störungs- und Serviceanfragen, Kommunikationen, Monitoring
            </li>

        </ul>
        <div class="subheading mb-3">Sprachen</div>
        <ul class="fa-ul mb-0">
            <li>
                <img src="./assets/img/poland.png" alt="Polnisch" style="margin-right: 20px;">&nbsp;<img
                    src="./assets/img/germany.png" alt="Deutsch" style="margin-right: 20px;">&nbsp;<img
                    src="./assets/img/united-kingdom.png" alt="Englisch">
            </li>


        </ul>
    </div>
</section>
<hr class="m-0" />

<?php require_once("./layout/footer.php"); ?>

</html>
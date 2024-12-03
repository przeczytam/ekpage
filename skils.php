<?php require_once("./layout/header.php"); ?>
<!-- function -->
<?php
function showSkillsFromArray()
{
    /* Array for Skills */
    $arr_skills = [
        "Netzwerke, TCP/IP, Netzwerktopologien, Routing, Switching, RAID, Backup-Strategien, Stromversorgung/USV",
        "Softwareentwicklung, Vorgehensmodelle, Zahlensysteme, Daten, Lasten- und Pflichtenheft,
                Datenbanksysteme, ER-Modelle, Testprozesse",
        "Internet of Things, MQTT-Protokoll, CPS, IoT-Protokolle",
        "Service-Management-Arten, Störungs- und Serviceanfragen, Kommunikationen, Monitoring"
    ];

    /*Loop foreach*/
    foreach ($arr_skills as $skill) {
        echo "<li><span class=\"fa-li\"><i class=\"fas fa-check\"></i></span>$skill</li>";
    }
}
?>

<!-- Skills-->
<section class="resume-section" id="skills">
    <div class="resume-section-content">
        <h1 class="mb-5">Skills</h1>
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
            <!-- function for listing of skills -->
            <?php showSkillsFromArray(); ?>
        </ul>
        <br>
        <div class="subheading mb-3">Sprachen</div>
        <ul class="fa-ul mb-0">
            <li>
                <img src="./assets/img/poland.png" class="pbflags" alt="Polnisch">&nbsp;<img
                    src="./assets/img/germany.png" class="pbflags" alt="Deutsch">&nbsp;<img
                    src="./assets/img/united-kingdom.png" alt="Englisch">
            </li>


        </ul>
    </div>
</section>
<hr class="m-0" />

<?php require_once("./layout/footer.php"); ?>

</html>
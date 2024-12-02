<?php
function showSkillsFromArray() {
    /* Array for Skills */
    $arr_skills = ["Netzwerke, TCP/IP, Netzwerktopologien, Routing, Switching, RAID, Backup-Strategien, Stromversorgung/USV", "Softwareentwicklung, Vorgehensmodelle, Zahlensysteme, Daten, Lasten- und Pflichtenheft,
                Datenbanksysteme, ER-Modelle, Testprozesse", "Internet of Things, MQTT-Protokoll, CPS, IoT-Protokolle",  "Service-Management-Arten, Störungs- und Serviceanfragen, Kommunikationen, Monitoring" ];
    /*Loop foreach*/
    foreach ($arr_skills as $skill) {
        echo '<li><span class="fa-li"><i class="fas fa-check"></i></span>$skill</li>';
    }

}

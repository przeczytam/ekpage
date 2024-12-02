<?php require_once("./layout/header.php"); ?>

<!-- Index-->
<section class="resume-section" id="index">
    <div class="resume-section-content">

        <h1>Willkommen auf meiner persönlichen Website!</h1>
        <p class="lead mb-5">Vertrauen Sie auf meine Motivation und Freude daran, in realen Projekten mitzuwirken und
            zum Erfolg Ihres Unternehmens beizutragen. Lassen Sie mich Ihr Team durch meine Begeisterung für die
            Betreuung komplexer IT-Lösungen und den direkten Anwenderkontakt bereichern.</p>

        <section class="willkommen">
            <p>Kurs: Web Programmierung by Ali Khorsandfard</p>
            <p>FISI Sommer 2024</p>
            <p>Name: Piotr Balcerzak</p>
            <p>Standort: Hamm</p>
        </section>
        <section class="kontaktformular">
        <h2 class="mb-5">Kontaktieren Sie mich</h2>
            <form method="post" target="_blank">
                <input name="email" type="email" placeholder="ihr email" required /><br /><br />
                <textarea name="message" cols="25" rows="3" placeholder="schreib etwas ..." required></textarea>
                <br /><br />
                <input name="senden_login" type="submit" value="senden" />
                <button type="reset">reset</button>
            </form>
    </div>
</section>

</div>
<?php require_once("./layout/footer.php"); ?>

</html>
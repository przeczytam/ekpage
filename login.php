<?php require_once("./layout/header.php"); ?>
<!-- Login-->
<section class="resume-section" id="login">
    <div class="resume-section-content">
        <h1 class="mb-5">Login</h1>
        </header>
        <section class="loginformular">
            <form method="post" target="_blank">
                <input name="email" type="email" placeholder="ihr email" required /><br /><br />
                <input name="password" type="password" placeholder="kennwort" required /><br /><br />
                <input name="senden_login" type="submit" value="senden" />
                <button type="reset">reset</button>
            </form>
    </div>
</section>

</div>
<?php require_once("./layout/footer.php"); ?>

</html>
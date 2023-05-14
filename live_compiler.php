<?php
    if (isset($_POST['submit'])) {
        $cod = $_POST['cod'];

        ob_start();
        eval("?>" . $cod);
        $rezultat = ob_get_contents();
        ob_end_clean();
    } else {
        // dacă nu s-a trimis un formular, utilizați valoarea implicită
        $cod = "<?php echo 'Primul meu script scris in PHP'; ?>";
    }
?>

<form method="post" class="compilerForm">
    <label for="cod">Introduceți codul:</label>
    <br>
    <textarea class="codeWritingArea" name="cod" id="cod" rows="10" cols="50" pattern="^((?!\')(?!\").)*$"><?php echo htmlspecialchars($cod); ?></textarea>
    <div id="codError" style="color: red; font-size:1.125rem; display: none;">Codul trebuie să fie scris în PHP și să nu conțină string-uri simple</div>
    <br>
    <input class="inputButton" type="submit" name="submit" value="Execută">
</form>

<?php if (isset($rezultat)): ?>
    <h2>Rezultat:</h2>
    <pre><?php echo htmlspecialchars($rezultat); ?></pre>
<?php endif; ?>

<script>
    const form = document.querySelector('form');
    const textarea = document.querySelector('#cod');
    const codError = document.querySelector('#codError');
    form.addEventListener('submit', (event) => {
        if (isValidCode(textarea.value)) {
            event.preventDefault();
            codError.style.display = 'block';
            codError.style.height = '20px';
        }
    });
    function isValidCode(code) {
        const regex = /^((?!\')(?!\").)*$/;
        return regex.test(code);
    }
</script>
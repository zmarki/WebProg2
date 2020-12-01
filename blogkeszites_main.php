<script src="https://cdn.ckeditor.com/4.11.4/standard-all/ckeditor.js"></script>
<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<h2>Blog készítés</h2>
<form action="blog_main.php" method="POST">
<label>Blog címe:</label></br>
<input type="text" name="blog_cim" id="blog_cim"></br>
<label>Tartalom:</label></br>
<textarea id="editor" name="blog_text">Ide lehet beírni a Blog tartalmát</textarea>
<input type="submit" id="submit" value="Küldés"/>
</form>
                <script>
                     CKEDITOR.replace('blog_text');
                     CKEDITOR.config.entities_latin = false;
                </script>


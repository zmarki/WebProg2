<script src="https://cdn.ckeditor.com/ckeditor5/23.1.0/classic/ckeditor.js"></script>
<h2>Blog készítés</h2>
<form action="blog_main.php" method="POST">   
<label>Blog címe:</label></br>
<input type="text" name="blog_cim" id="blog_cim"></br>
<label>Tartalom:</label></br>
<div id="editor" name="blog_text">Ide lehet beírni a Blog tartalmát</div>
<input type="submit" value="Küldés"/>
</form>
                <script>
                        ClassicEditor
                                .create( document.querySelector( '#editor' ) )
                                .then( editor => {
                                        console.log( editor );
                                } )
                                .catch( error => {
                                        console.error( error );
                                } );
                </script>


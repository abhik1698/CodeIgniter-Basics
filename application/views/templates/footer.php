	</div>	
	<script>
        CKEDITOR.replace( 'editor' );

		function convertToSlug(Text) {
		    return Text
	        .toLowerCase()
	        .replace(/[^\w ]+/g,'')
	        .replace(/ +/g,'-')
	        ;
		}
    </script>
</body>
</html>
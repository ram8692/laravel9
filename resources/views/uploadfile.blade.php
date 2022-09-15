<h1>
    Upload file
</h1>
 
<form action="uploaddoc" method="POST" enctype="multipart/form-data">
@csrf
<input type="file" name="file" id=""><br>
<button type="submit">Upload File</button>
</form>

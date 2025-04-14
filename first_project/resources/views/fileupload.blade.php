<form method="post" action="" enctype="multipart/form-data">
    Upload File:
    @csrf
    <input type="file" name="myfile" id=""/>
    <br>
    <input type="submit" name="submit" value="UPLOAD">
</form>
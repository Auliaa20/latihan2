<html>
<body>
    <form method=POST action={{ url('formhitung');}}>
     @csrf
     <input type="text" name="panjang" placeholder="Isi Panjang"><Br>
     <input type="text" name="lebar" placeholder="Isi Lebar"><Br>
     <input type="submit" value="proses">
    </form>
</body>
</html>

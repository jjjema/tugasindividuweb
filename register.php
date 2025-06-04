<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register</title>
</head>
<body>
    <h1>DAFTAR</h1>

    <form action="about.html" method="post" enctype="multipart/form-data">

        <label for="nama">Nama lengkap : </label> <br>
        <input type="teks" name="nama" > <br> <br>

        <label for="email">Email : </label> <br>
        <input type="email" name="email"> <br> <br>

        <label for="passowrd">Password : </label> <br>
        <input type="password" name="password"> <br> <br>

        <label for="umur">Umur : </label> <br>
        <input type="number" name="umur"> <br> <br>

        <label for="ttl">Tanggal lahir : </label> <br>
        <input type="date" name="ttl"> <br> <br>

        <label for="warna">Warna favorite : </label> <br>
        <input type="color" name="warna"> <br> <br>

        <label for="upload">upload foto profile : </label> <br>
        <input type="file" name="upload"> <br> <br>

        <label for="jenis">Pilih Jenis kelamin : </label> <br>
        <input type="radio" name="jenis"> Laki - laki <br> <br>
        <input type="radio" name="jenis"> Perempuan <br> <br> 

        <label for="jenis">Pilih hobi : </label> <br>
        <input type="checkbox" name="jenis"> Membaca <br> <br>
        <input type="checkbox" name="jenis"> Traveling <br> <br>
        <input type="checkbox" name="jenis"> Olahraga <br> <br>

        <label for="pilihan negara">Pilih negara </label> <br>
        <select name="negara" id="negara"> 
            <option value="USA"> USA</option>
            <option value="UK">UK</option>
            <option value="Indonesia">Indonesia</option>
            <option value="Swiss">Swiss</option>
        </select>
         <br> <br>
        

        <label for="bio">Biografi singkat : </label> <br> <br>
        <textarea name="bio" id="bio" cols="30" rows="8" > </textarea> <br> <br> 
        
        
        <input type="submit" value="Login"> <br> <br>

    </form>
    
</body>
</html>
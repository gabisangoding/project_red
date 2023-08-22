<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">

    <title>Library | Home</title>
</head>

<body>
    <h1 class="text-center m-4">Tambah Daftar Buku</h1>
    <div class="container ">
        
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/insertdata" method="post" enctype="multipart/form-data">
                          @csrf
                            <div class="mb-3">
                              <label for="judul" class="form-label">Judul</label>
                              <input type="text" name="judul" class="form-control" id="judul" aria-describedby="emailHelp">

                              <label for="penulis" class="form-label">Penulis</label>
                              <input type="text" name="penulis" class="form-control" id="penulis" aria-describedby="emailHelp">

                              <label for="penulis" class="form-label">Penerbit</label>
                              <input type="text" name="penerbit" class="form-control" id="penulis" aria-describedby="emailHelp">
                              
                              <label for="jenis" class="form-label">Jenis</label>
                              <select class="form-select" name="jenis" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">Parenting</option>
                                <option value="2">Komik</option>
                                <option value="3">Novel</option>
                                <option value="4">Majalah</option>
                                <option value="5">Manga</option>
                              </select>
                              
                              <label for="genre" class="form-label">Genre</label>
                              <select class="form-select" name="genre" aria-label="Default select example">
                                <option selected>Open this select menu</option>
                                <option value="1">Horor</option>
                                <option value="2">Aksi</option>
                                <option value="3">Fantasi</option>
                                <option value="4">Fiksi Ilmiah</option>
                                <option value="5">Petualangan</option>
                                <option value="6">Detektif</option>
                                <option value="7">Misteri</option>
                                <option value="8">Sejarah</option>
                                <option value="9">Memoir</option>
                                <option value="10">Self-Help</option>
                                <option value="11">Biografi</option>
                                <option value="12">Otobiografi</option>
                                <option value="13">Thriller</option>
                                <option value="14">Romansa</option>
                                <option value="15">Kamus</option>
                                <option value="16">Filsafat</option>
                                <option value="17">Motivasi</option>
                                <option value="18">Cerita Pendek</option>
                                <option value="19">Edukasi</option> 
                              </select> 
                              
                              <label for="sampul" class="form-label">Masukkan Sampul</label>
                              <input type="file" name="sampul" class="form-control" id="sampul" aria-describedby="emailHelp">
                            </div>
                            <button type="submit" class="btn btn-primary">Submit</button>
                          </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js"

        integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous">
    </script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js" integrity="sha384-oBqDVmMz9ATKxIep9tiCxS/Z9fNfEXiDAYTujMAeBAsjFuCZSmKbSSUnQlmh/jp3" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js" integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk" crossorigin="anonymous"></script>
    -->
</body>

</html>
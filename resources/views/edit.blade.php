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
    <h1 class="text-center m-4">Edit Daftar Buku</h1>
    <div class="container ">
        
        <div class="row justify-content-center">
            <div class="col-8">
                <div class="card">
                    <div class="card-body">
                        <form action="/updatedata/{{$data->id}}" method="POST" enctype="multipart/form-data">
                          @csrf
                            <div class="mb-3">
                              <label for="exampleInputEmail1" class="form-label">Judul</label>
                              <input type="text" name="judul" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->judul}}">

                              <label for="exampleInputEmail1" class="form-label">Penulis</label>
                              <input type="text" name="penulis" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->penulis}}">

                              <label for="exampleInputEmail1" class="form-label">Penerbit</label>
                              <input type="text" name="penerbit" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" value="{{$data->penerbit}}">

                              <label for="exampleInputPassword1" class="form-label">Jenis</label>
                              <select class="form-select" name="jenis" aria-label="Default select example" >
                                <option selected>{{$data->jenis}}</option>
                                <option value="1">Parenting</option>
                                <option value="2">Komik</option>
                                <option value="3">Novel</option>
                                <option value="3">Majalah</option>
                                <option value="3">Manga</option>
                              </select>

                              <label for="exampleInputPassword1" class="form-label">Genre</label>
                              <select class="form-select" name="genre" aria-label="Default select example" >
                                <option selected>{{$data->genre}}</option>
                                <option value="1">Horor</option>
                                <option value="2">Aksi</option>
                                <option value="3">Fantasi</option>
                                <option value="3">Fiksi Ilmiah</option>
                                <option value="3">Petualangan</option>
                                <option value="3">Detektif</option>
                                <option value="3">Misteri</option>
                                <option value="3">Sejarah</option>
                                <option value="3">Memoir</option>
                                <option value="3">Self-Help</option>
                                <option value="3">Biografi</option>
                                <option value="3">Otobiografi</option>
                                <option value="3">Thriller</option>
                                <option value="3">Romansa</option>
                                <option value="3">Kamus</option>
                                <option value="3">Filsafat</option>
                                <option value="3">Motivasi</option>
                                <option value="3">Cerita Pendek</option>
                                <option value="3">Edukasi</option>
                              </select>
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
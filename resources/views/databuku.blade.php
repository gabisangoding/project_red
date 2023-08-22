<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.rtl.min.css"
        integrity="sha384-7mQhpDl5nRA5nY9lr8F1st2NbIly/8WqhjTp+0oFxEA/QUuvlbF6M1KXezGBh3Nb" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" integrity="sha512-3pIirOrwegjM6erE5gPSwkUzO+3cTjpnV9lexlNZqvupR64iZBnOOTiiLPb9M36zpMScbmUNIcHUqKD47M719g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    {{-- ============================================================================================================ --}}
    <title>Library | Home</title>
</head>
<style>

</style> 

<body>
    <h1 class="m-4" style="text-align: center">Daftar Buku</h1>
    <div class="container">
        <a href="/tambahbuku" class="btn btn-info">Tambah+</a>
        <div class="row text center">
            {{-- @if ($message = Session::get('success'))
            <div class="alert alert-success" role="alert">
                {{$message}}
            </div>
            @endif --}}
            <table class="table text-center">
                <thead>
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Sampul</th>
                        <th scope="col">Judul</th>
                        <th scope="col">Penulis</th>
                        <th scope="col">Penerbit</th>
                        <th scope="col">Jenis</th>
                        <th scope="col">Genre</th>
                        <th scope="col">Dibuat</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $num = 1;
                    @endphp
                    @foreach ($data as $buku)
                    <tr style="margin:auto">
                        {{-- <th scope="row">{{$num++}}</th> --}}
                        <th scope="row">{{$num++}}</th>
                        <td>
                            <img src="{{ asset('sampulbuku/'. $buku->sampul) }}" alt="{{$buku->sampul}}"
                                style="width:50px">
                        </td>
                        <td>{{$buku->judul}}</td>
                        <td>{{$buku->penulis}}</td>
                        <td>{{$buku->penerbit}}</td>
                        <td>{{$buku->jenis}}</td>
                        <td>{{$buku->genre}}</td>
                        <td>{{$buku->created_at->format('D M Y')}}</td>
                        <td>
                            <a href="/tampilindata/{{$buku->id}}" class="btn btn-warning">Edit</a>
                            <a href="#" class="btn btn-danger delete" data-id="{{$buku->id}}" data-judul="{{$buku->judul}}" >Delete</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $data->links() }}
        </div>
    </div>

















{{-- ========================================================================================================= --}}
    <!-- Optional JavaScript; choose one of the two! -->

    
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js" integrity="sha512-VEd+nq25CkR676O+pLBnDW09R7VQX9Mdiij052gVCp5yVH3jGtH70Ho/UUv4mJDsEdTvqRCFZg0NKGiojGnUCw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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

<script>
    $('.delete').click(function () {
        var idbuku = $(this).attr('data-id');
        var judul = $(this).attr('data-judul');
        
        swal({
                title: "Afh iyh kamu yakin?",
                text: "Kamu akan menghapus data buku dengan id "+idbuku+"  ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/delete/"+idbuku+""
                    swal("awokawokwowkwokwok keapus", {
                        icon: "success",
                    });
                } else {
                    swal("Your imaginary file is safe!");
                }
            });
        });
</script>

<script>
@if(Session::has('success'))
    toastr.success('{{Session::get('success')}}')
@endif  
</script>
</html>

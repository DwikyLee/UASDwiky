<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Peminjaman Buku</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/plugins/fontawesome-free/css/all.min.css") }}'>
  <!-- Theme style -->
  <link rel="stylesheet" href='{{ asset("AdminLTE/dist/css/adminlte.min.css") }}'>
</head>
<body>
<div class="wrapper">
  <!-- Main content -->
  <section class="invoice">
    <!-- title row -->
    <div class="row">
      <div class="col-12">
        <h2 class="page-header">
          <img src='{{ asset("AdminLTE/dist/img/Logo_UPH.gif") }}' style="margin: 2% 0 0 35%; width: 20%;">
        </h2>
      </div>
      <!-- /.col -->
    </div>
    <!-- info row -->
    
      <!-- /.col -->
      
      <!-- /.col -->
      <!-- /.col -->
    </div>
    <!-- /.row -->

    <!-- Table row -->
    <div class="row">
      <div class="col-12 table-responsive">
        <table class="table table-striped">
          <thead class="table-success">
            <tr>
                <th>No. Member</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Jam Kerja</th>
                <th>Pembayaran</th>
                <th>Tgl Pinjam</th>
                <th>Tgl Pengembalian</th>
                <th>Judul Film</th>
                <th>Genre</th>
                
             </tr>
        </thead>
            @foreach ($rentalkaset as $rk) 
          <tr class="table-info">
            <th>{{ $rk->no_member }}</th>
            <th>{{ $rk->nama }}</th>
            <th>{{ $rk->alamat }}</th>
            <th>{{ $rk->jam_kerja }}</th>           
            <th>{{ $rk->pembayaran }}</th>
            <th>{{ $rk->tgl_pinjam }}</th>
            <th>{{ $rk->tgl_pengembalian }}</th>
            <th>{{ $rk->judul_film }}</th>
            <th>{{ $rk->genre_film }}</th>
          </tr>
            @endforeach
          
          </tbody>
        </table>
      </div>
      <!-- /.col -->
    </div>
    <!-- /.row -->

    
    <!-- /.row -->
  </section>
  <!-- /.content -->
</div>
<!-- ./wrapper -->
<!-- Page specific script -->
  <script>
    window.addEventListener("load", window.print());
  </script>
</body>
</html>

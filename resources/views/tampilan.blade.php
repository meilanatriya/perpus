  <!-- Small boxes (Stat box) -->
  <div class="row">
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-aqua">
        <div class="inner">
          <h3>{{ $jumlahbuku }}</h3>

          <p>Data Buku</p>
        </div>
        <div class="icon">
          <i class="fa fa-book"></i>
        </div>
        <a href="buku" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-green">
        <div class="inner">
          <h3>{{ $jumlahanggota }}</h3>

          <p>Data Anggota</p>
        </div>
        <div class="icon">
          <i class="fa fa-users"></i>
        </div>
        <a href="anggota" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-yellow">
        <div class="inner">
          <h3>{{ $jumlahpenerbit }}</h3>

          <p>Data Penerbit</p>
        </div>
        <div class="icon">
          <i class="fa fa-shopping-cart"></i>
        </div>
        <a href="penerbit" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
    <div class="col-lg-3 col-xs-6">
      <!-- small box -->
      <div class="small-box bg-red">
        <div class="inner">
          <h3>{{ $jumlahpengarang }}</h3>

          <p>Data Pengarang</p>
        </div>
        <div class="icon">
          <i class="fa fa-file-text"></i>
        </div>
        <a href="pengarang" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
      </div>
    </div>
    <!-- ./col -->
</div>
<div class="col-md-6">
<!-- USERS LIST -->
<div class="box box-danger">
  <div class="box-header with-border">
    <h3 class="box-title">Latest Members</h3>

    <div class="box-tools pull-right">
      <span class="label label-danger">8 New Members</span>
      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
      </button>
      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
      </button>
    </div>
  </div>
  <!-- /.box-header -->
  <div class="box-body no-padding">
    <ul class="users-list clearfix">
      <li>
        <img src="img/avatar5.png" alt="User Image">
        <a class="users-list-name" href="#">Alexander Pierce</a>
        <span class="users-list-date">Today</span>
      </li>
      <li>
        <img src="img/avatar.png" alt="User Image">
        <a class="users-list-name" href="#">Norman</a>
        <span class="users-list-date">Yesterday</span>
      </li>
      <li>
        <img src="img/avatar2.png" alt="User Image">
        <a class="users-list-name" href="#">Jane</a>
        <span class="users-list-date">12 Jan</span>
      </li>
      <li>
        <img src="img/avatar3.png" alt="User Image">
        <a class="users-list-name" href="#">John</a>
        <span class="users-list-date">12 Jan</span>
      </li>
      <li>
        <img src="img/avatar04.png" alt="User Image">
        <a class="users-list-name" href="#">Alexander</a>
        <span class="users-list-date">13 Jan</span>
      </li>
      <li>
        <img src="img/user7-128x128.jpg" alt="User Image">
        <a class="users-list-name" href="#">Sarah</a>
        <span class="users-list-date">14 Jan</span>
      </li>
      <li>
        <img src="img/photo3.jpg" alt="User Image">
        <a class="users-list-name" href="#">Nora</a>
        <span class="users-list-date">15 Jan</span>
      </li>
      <li>
        <img src="img/photo4.jpg" alt="User Image">
        <a class="users-list-name" href="#">Nadia</a>
        <span class="users-list-date">15 Jan</span>
      </li>
    </ul>
    <!-- /.users-list -->
  </div>
  <!-- /.box-body -->
  <div class="box-footer text-center">
    <a href="anggota" class="uppercase">View All Users</a>
  </div>
  
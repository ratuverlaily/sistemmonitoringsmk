<div class="container-fluid">
  <div class="alert alert-success" role="alert">
      <i class="fas fa-tachometer-alt"></i> Dashboard
  </div>

  <div class="alert alert-success" role="alert">
    <h4 class="alert-heading">Selamat Datang !</h4>
    <p>Selamat Datang <strong><?php echo $username; ?></strong> Di Sistem Informasi Akademik Institut Teknologi Bandung, Anda login sebagai <strong><?php echo $lavel; ?></strong></p>
    
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
      <i class="fas fa-cogs"></i>  Control Panel
    </button>
  </div>
  
<div class="row">
  <div class="col-sm-6">
    <div class="card  bg-danger mb-3" style="max-width: 40rem;">
      <div class="card-body">
        <h5 class="card-title text-white">REMEDIAL PRAKTIKUM I <small><i>( Elektronik Listrik Dasar )</i></small></h5>
          <div class="card shadow mb-4">
              <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">Rabu, 13-04-2020</h6>
              </div>
              <div class="card-body">
                  <h4 class="small font-weight-bold">TA-11-01 / 40 orang<span class="float-right">2 orang /5%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-danger" role="progressbar" style="width: 5%" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">TA-11-02 / 38 orang<span class="float-right">5 orang /39.5%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-warning" role="progressbar" style="width: 39.5%" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">TA-11-03 / 40 orang<span class="float-right">1 orang /2.5%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar" role="progressbar" style="width: 2.5%" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">TJ-11-01 / 39 orang <span class="float-right">10 orang /25.6%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 25.6%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">TJ-11-02 / 40 orang <span class="float-right">5 orang /12.5%</span></h4>
                  <div class="progress mb-4">
                    <div class="progress-bar bg-info" role="progressbar" style="width: 12.5%" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                  <h4 class="small font-weight-bold">TJ-11-02 / 37 orang <span class="float-right">3 orang /1.11%</span></h4>
                  <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 8.1%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
                  </div>
                </div>            
              </div>
              <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail Data Siswa
              </button>
              <br/>
          </div>
      </div>
  </div>
  <div class="col-sm-6">
    <div class="card text-white bg-warning mb-3" style="max-width: 50rem;">
      <div class="card-body">
        <h5 class="card-title">Daftar Siswa Dengan Nilai Tertinggi</h5>
            <div>
              <table class="table table-sm table-dark">
                <thead>
                  <tr>
                    <th scope="col">No</th>
                    <th scope="col">Nama</th>
                    <th scope="col">Kelas</th>
                    <th scope="col">Waktu</th>
                    <th scope="col">Nilai</th>                    
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <th scope="row">1</th>
                    <td>Linda Puspita Sari</td>
                    <td>TA-11-02</td>
                    <td>30 menit</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Apdy Ahmad rahman</td>
                    <td>Tj-11-03</td>
                    <td>45 menit</td>
                    <td>100</td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>Intan Maharani</td>
                    <td>Tj-11-03</td>
                    <td>60 menit</td>
                    <td>80</td>
                  </tr>
                </tbody>
              </table>
            </div>    
            <!-- Card Body -->
            
            <div id="piechart"></div><br/>
            <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail Data Siswa
            </button>
          </div>
      </div>
    </div>
  </div> 
</div>
<br/>
<div class="container-fluid">
<div class="row">
  <div class="col-sm-12">
    <div class="card  bg-info mb-3" style="max-width: 80rem;">
      <div class="card-body">
      <h5 class="card-title text-white  text-center">MONITORING PRAKTIKUM SESI I <small><i>( Elektronik Listrik Dasar )</i></small></h5>
      <div class="row">
        <div class="col-sm-9">
          <table class="text-white">
            <tr>
              <td>Nama Pengawas</td>
              <td>:</td>
              <td>Ibu Ratu Verlaili E</td>
            </tr>
            <tr>
              <td>Kelas</td>
              <td>:</td>
              <td>TA-11-02</td>
            </tr>
            <tr>
              <td>Waktu</td>
              <td>:</td>
              <td>120 Menit</td>
            </tr>
          </table>
        </div>
        <div class="col-sm-3" align="left">
          <table class="text-white">
            <tr>
              <td><br/></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td><br/></td>
              <td></td>
              <td></td>
            </tr>
            <tr>
              <td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal</td>
              <td>:</td>
              <td>Rabu, 13 April 2020</td>
            </tr>
          </table>
        </div>
      </div>
      <div class="card shadow mb-4">
        <table class="table table-sm">
          <thead>
            <tr>
              <th scope="col">No</th>
              <th scope="col">Nama</th>
              <th scope="col">Kelas</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Total Soal</th>
              <th scope="col">Di Kerjakan</th>
              <th scope="col">Waktu</th>
              <th scope="col">Soal Benar</th>
              <th scope="col">Soal Salah</th>
              <th scope="col">Nilai</th>
              <th scope="col">Status</th>
              <th scope="col">Detail</th>
            </tr>
          </thead>
          <tbody>
            <tr class="bg-warning">
              <th scope="row">1</th>
              <td>Indah Sasmita</td>
              <td>TA-11-02</td>
              <td>Perempuan</td>
              <td>40</td>
              <td>40</td>
              <td>100 menit</td>
              <td>40</td>              
              <td>0</td>              
              <td>100</td>              
              <td>Selesai</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr class="bg-warning">
              <th scope="row">1</th>
              <td>Shinta Sugiarti</td>
              <td>TA-11-02</td>
              <td>Perempuan</td>
              <td>40</td>
              <td>40</td>
              <td>110 menit</td>
              <td>40</td>              
              <td>0</td>              
              <td>100</td>              
              <td>Selesai</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr class="bg-warning">
              <th scope="row">3</th>
              <td>Agus Juhana</td>
              <td>TA-11-02</td>
              <td>Laki-laki</td>
              <td>40</td>
              <td>40</td>
              <td>112 menit</td>
              <td>40</td>              
              <td>0</td>              
              <td>100</td>              
              <td>Selesai</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr class="bg-warning">
              <th scope="row">4</th>
              <td>Tita Apriliawati</td>
              <td>TA-11-02</td>
              <td>Perempuan</td>
              <td>40</td>
              <td>40</td>
              <td>113 menit</td>
              <td>40</td>              
              <td>0</td>              
              <td>100</td>              
              <td>Selesai</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">5</th>
              <td>Indah Pertama Sari</td>
              <td>TA-11-02</td>
              <td>Perempuan</td>
              <td>40</td>
              <td>39</td>
              <td>loading..</td>
              <td>39</td>              
              <td>0</td>              
              <td>97.5</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">6</th>
              <td>Tata Saputra</td>
              <td>TA-11-02</td>
              <td>Laki-laki</td>
              <td>40</td>
              <td>38</td>
              <td>loading..</td>
              <td>37</td>              
              <td>1</td>              
              <td>92,5</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
           <tr>
              <th scope="row">7</th>
              <td>Surya Sihabuan</td>
              <td>TA-11-02</td>
              <td>Laki-laki</td>
              <td>40</td>
              <td>36</td>
              <td>loading..</td>
              <td>34</td>              
              <td>2</td>              
              <td>85</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
           <tr>
              <th scope="row">8</th>
              <td>Lingga Qolbu wasih</td>
              <td>TA-11-02</td>
              <td>Laki-laki</td>
              <td>40</td>
              <td>38</td>
              <td>loading..</td>
              <td>33</td>              
              <td>5</td>              
              <td>82,5</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">9</th>
              <td>Rangga Gilang Januari</td>
              <td>TA-11-02</td>
              <td>Laki-laki</td>
              <td>40</td>
              <td>39</td>
              <td>loading..</td>
              <td>32</td>              
              <td>7</td>              
              <td>80</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">10</th>
              <td>Indah Permata Sari</td>
              <td>TA-11-02</td>
              <td>Perempuan</td>
              <td>40</td>
              <td>38</td>
              <td>loading..</td>
              <td>31</td>              
              <td>7</td>              
              <td>77,5</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">11</th>
              <td>Siska Novita Sari</td>
              <td>TA-11-02</td>
              <td>Perempuan</td>
              <td>40</td>
              <td>37</td>
              <td>loading..</td>
              <td>31</td>              
              <td>5</td>              
              <td>77,5</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">12</th>
              <td>Intan Permata</td>
              <td>TA-11-02</td>
              <td>Perempuan</td>
              <td>40</td>
              <td>39</td>
              <td>loading..</td>
              <td>31</td>              
              <td>8</td>              
              <td>77,5</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">13</th>
              <td>Kevin Irawan</td>
              <td>TA-11-02</td>
              <td>Laki-laki</td>
              <td>40</td>
              <td>39</td>
              <td>loading..</td>
              <td>31</td>              
              <td>8</td>              
              <td>77,5</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">14</th>
              <td>Reka Pratama Putra</td>
              <td>TA-11-02</td>
              <td>Laki-laki</td>
              <td>40</td>
              <td>38</td>
              <td>loading..</td>
              <td>30</td>              
              <td>8</td>              
              <td>75</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">15</th>
              <td>Weni Oktaviani</td>
              <td>TA-11-02</td>
              <td>Perempuan</td>
              <td>40</td>
              <td>37</td>
              <td>loading..</td>
              <td>30</td>              
              <td>7</td>              
              <td>75</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">16</th>
              <td>Winda Yanti</td>
              <td>TA-11-02</td>
              <td>Perempuan</td>
              <td>40</td>
              <td>37</td>
              <td>loading..</td>
              <td>29</td>              
              <td>8</td>              
              <td>72,5</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
           <tr>
              <th scope="row">17</th>
              <td>Lidya Putri Mahesa</td>
              <td>TA-11-02</td>
              <td>Laki-laki</td>
              <td>40</td>
              <td>38</td>
              <td>loading..</td>
              <td>27</td>              
              <td>11</td>              
              <td>67,5</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">18</th>
              <td>Lisa Dewi Putri</td>
              <td>TA-11-02</td>
              <td>Perempuan</td>
              <td>40</td>
              <td>38</td>
              <td>loading..</td>
              <td>26</td>              
              <td>12</td>              
              <td>65</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">19</th>
              <td>Lilis Sumarni</td>
              <td>TA-11-02</td>
              <td>Perempuan</td>
              <td>40</td>
              <td>38</td>
              <td>loading..</td>
              <td>25</td>              
              <td>13</td>              
              <td>62,5</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
            <tr>
              <th scope="row">20</th>
              <td>Joko Supratman</td>
              <td>TA-11-02</td>
              <td>Laki-laki</td>
              <td>40</td>
              <td>38</td>
              <td>loading..</td>
              <td>23</td>              
              <td>15</td>              
              <td>57,5</td>              
              <td>Mengerjakan..</td>
              <td>
                <button type="button" class="btn btn-sm btn-info" data-toggle="modal" data-target="#exampleModal">
                &nbsp;Lihat Detail
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
      </div>
      </div>    
    </div>
  </div>
</div>



<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

<script type="text/javascript">
// Load google charts
google.charts.load('current', {'packages':['corechart']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
  var data = google.visualization.arrayToDataTable([
  ['Task', 'Hours per Day'],
  ['Lulus', 11.11],
  ['tidak lulus', 88.88]
]);

  // Optional; add a title and set the width and height of the chart
  var options = {'title':'Presentase Siswa Lulus Praktikum Listrik Dasar', 'width':557, 'height':300};

  // Display the chart inside the <div> element with id="piechart"
  var chart = new google.visualization.PieChart(document.getElementById('piechart'));
  chart.draw(data, options);
}
</script>



  <!-- Modal -->
  <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-cogs"></i>  Control Panel</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <div class="row">
              <div class="col-md-3 text-info text-center">
                  <a href="<?php echo base_url()?>"><p class="nav-link small text-info">Data Siswa</p></a>
                  <i class="fas fa-3x fa-user-graduate"></i> 
              </div>

              <div class="col-md-3 text-info text-center">
                  <a href="<?php echo base_url()?>"><p class="nav-link small text-info">Tahun Akademik</p></a>
                  <i class="fas fa-3x fa-calendar-alt"></i> 
              </div>

              <div class="col-md-3 text-info text-center">
                  <a href="<?php echo base_url()?>"><p class="nav-link small text-info">Materi Praktikum</p></a>
                  <i class="fas fa-3x fa-edit"></i> 
              </div>

              <div class="col-md-3 text-info text-center">
                  <a href="<?php echo base_url()?>"><p class="nav-link small text-info">KHS</p></a>
                  <i class="fas fa-3x fa-file-alt"></i> 
              </div>
          </div>
          <hr>
          <div class="row">
              <div class="col-md-3 text-info text-center">
                  <a href="<?php echo base_url()?>"><p class="nav-link small text-info">INPUT NILAI</p></a>
                  <i class="fas fa-3x fa-sort-numeric-down"></i> 
              </div>

              <div class="col-md-3 text-info text-center">
                  <a href="<?php echo base_url()?>"><p class="nav-link small text-info">CETAK TRANSKRIP</p></a>
                  <i class="fas fa-3x fa-print"></i> 
              </div>

              <div class="col-md-3 text-info text-center">
                  <a href="<?php echo base_url()?>"><p class="nav-link small text-info">KATEGORI</p></a>
                  <i class="fas fa-3x fa-list-ul"></i> 
              </div>

              <div class="col-md-3 text-info text-center">
                  <a href="<?php echo base_url()?>"><p class="nav-link small text-info">INFO KAMPUS</p></a>
                  <i class="fas fa-3x fa-bullhorn"></i> 
              </div>
          </div>
          <hr>
          <div class="row">
              <div class="col-md-3 text-info text-center">
                  <a href="<?php echo base_url()?>"><p class="nav-link small text-info">IDENTITAS</p></a>
                  <i class="fas fa-3x fa-id-card-alt"></i> 
              </div>

              <div class="col-md-3 text-info text-center">
                  <a href="<?php echo base_url()?>"><p class="nav-link small text-info">TENTANG KAMPUS</p></a>
                  <i class="fas fa-3x fa-info-circle"></i> 
              </div>

              <div class="col-md-3 text-info text-center">
                  <a href="<?php echo base_url()?>"><p class="nav-link small text-info">FASILITAS</p></a>
                  <i class="fas fa-3x fa-laptop"></i> 
              </div>

              <div class="col-md-3 text-info text-center">
                  <a href="<?php echo base_url()?>"><p class="nav-link small text-info">GALLERY</p></a>
                  <i class="fas fa-3x fa-images"></i> 
              </div>
          </div>
        </div>


        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

</div>
              <ul class="nav navbar-nav">

                  <li><a href="index.php"><i class="glyphicon glyphicon-home"></i> Home</a></li>
                  <?php
                    if ($_SESSION[iduser] != "") {
                    ?>
                      <li><a href="?view=lap"><i class="glyphicon glyphicon-pushpin"></i> Lihat Lapangan</a></li>
                      <!--<li><a href="?view=pesan"><i class="glyphicon glyphicon-list-alt"></i> Pemesanan</a></li>-->
                      <li><a href="?view=bayar"><i class="glyphicon glyphicon-usd"></i> Pembayaran</a></li>
                      <li><a href="?view=profil"><i class="glyphicon glyphicon-cog"></i> Edit Profil</a></li>

                      <li><a href="logout.php"><i class="glyphicon glyphicon-off"></i> Logout</a></li>

                  <?php
                    } else {
                    ?>
                      <li><a href="?view=lap"><i class="glyphicon glyphicon-pushpin"></i> Lihat Lapangan</a></li>
                      <li><a href="#" data-toggle="modal" data-target="#kode2"><i class="glyphicon glyphicon-info-sign"></i> Petunjuk Pemesanan</a></li>

                      <li><a href="#" data-toggle="modal" data-target="#kode"><i class=" glyphicon glyphicon-log-in"></i> Login User</a></li>
                      <li><a href="http://localhost/futsal/adm/" target="blank"><i class=" glyphicon glyphicon-user"></i> Login Admin</a></li>
                  <?php
                    }
                    ?>
              </ul>
<header id="header" class="alt">
			<a href="beranda.php" class="logo"><strong>Pemilu</strong> <span>HMTI 2021</span></a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
			<li><a href="beranda.php">Beranda</a></li>
				<li><a href="biodata.php">Biodata</a></li>
				<li><a href="visimisi.php">Visi & Misi</a></li>
				<li><a href="timeline.php">Timeline</a></li>
				<li><a href="voting.php">Voting</a></li>
				<li><a href="status_voting.php">Status Pemilihan</a></li>
			</ul>
			<ul class="actions stacked">
				<?php
				require_once("ceklogin.php");
				if(isset($_SESSION['login_user'])){ ?>
					<li><a href="detail_user.php" class="button primary fit">Detail Akun</a></li>
					<li><a href="logout.php" class="button fit">Keluar</a></li>
				<?php }
				else{ ?>
					<li><a href="login.html" class="button fit">Masuk</a></li>
				<?php }?>
			</ul>
		</nav>
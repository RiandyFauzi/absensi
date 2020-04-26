<div id="sidebar-nav" class="sidebar">
			<div class="sidebar-scroll">
				<nav>
					<ul class="nav">

						<li><a href="/dashboard" class="active"><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
						@if(auth()->user()->role == 'admin')
						<li><a href="/datadiri" class=""><i class="lnr lnr-code"></i> <span>Data Diri</span></a></li>
						<li><a href="/absensi" class=""><i class="lnr lnr-chart-bars"></i> <span>Set Jadwal</span></a></li>
						<li><a href="/kegiatan" class=""><i class="lnr lnr-chart-bars"></i> <span>Isi data kegiatan</span></a></li>
						<li><a href="/laporan" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan Kegiatan</span></a></li>
						@endif

						@if(auth()->user()->role == 'siswa')
						<li><a href="/datadiri" class=""><i class="lnr lnr-code"></i> <span>Data Diri</span></a></li>
						<li><a href="/absensi" class=""><i class="lnr lnr-chart-bars"></i> <span>Set Jadwal</span></a></li>
						<li><a href="/kegiatan" class=""><i class="lnr lnr-chart-bars"></i> <span>Isi data kegiatan</span></a></li>
						<li><a href="/laporan" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan Kegiatan</span></a></li>
						@endif

						@if(auth()->user()->role == 'pj')
						<li><a href="/laporan" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan Kegiatan</span></a></li>
						@endif

						@if(auth()->user()->role == 'ps')
						<li><a href="/laporan" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan Kegiatan</span></a></li>
						@endif

						@if(auth()->user()->role == 'ortu')
						<li><a href="/laporan" class=""><i class="lnr lnr-chart-bars"></i> <span>Laporan Kegiatan</span></a></li>
						@endif
						
					</ul>
				</nav>
			</div>
		</div>
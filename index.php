<?php
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Home - Portofolio Saya</title>
	<link rel="stylesheet" href="load.css" />
	
	<style>
	html {
            scroll-behavior: smooth;
        }
		
		.wrapper{
			display: flex;
            justify-content: space-between;
			align-items: center;
			border: none;
			background-color: transparent;
			border-radius: 8px;
			padding 15px 20px;
			font-size: 20px;
			color: white;
		}
		
		.brand{
			font-size: 24px;
		}
		
		.navbar a{
			text-decoration: none;
			color: white;
            padding: 0 5px;
		}
		
		.navbar a:hover {
            color: blue;
        }
		
		.banner-container {
            max-width: 1200px;
            margin: 80px auto 20px;
            padding: 0 20px;
        }

        .banner-image {
            height: 300px;
            border: 2px solid black;
            border-radius: 12px;
            background-image: url('part2.jpg');
            background-size: cover;
            background-position: center;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 32px;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }
		
		.home{
			padding: 50px 20px;
			max-width: 1200px;
			margin: 0 auto;
			font-family: Arial, sans-serif;
		}
		
		.home h2{
			opacity: 70%;
			margin-bottom: 20px;
		}
		
		.layout{
			display: grid;
			grid-template-columns: repeat(4, 1fr);
			gap: 20px;
		}
		
		.card {
			display: flex;
			flex-direction: column;
			background-color: transparent;
		}

		.gambar {
			height: 160px;
			border-radius: 12px;
			padding: 20px;
			color: white;
			display: flex;
			align-items: center;
		}

		.gambar h3 {
			margin: 0;
			font-size: 18px;
			line-height: 1.3;
		}

		.gambar span {
			font-weight: normal;
			font-size: 14px;
		}

		.gambar-1 {
			background-image: url('ruang.jpg');
			background-size: cover;
			background-position: center;
			height: 160px;
			border-radius: 12px;
			padding: 20px;
			color: white;
			display: flex;
			align-items: flex-end;
		}
		
		.gambar-2 {
			background-image: url('1000141811.png');
			background-size: cover;
			background-position: center;
			height: 160px;
			border-radius: 12px;
			padding: 20px;
			color: white;
			display: flex;
			align-items: flex-end;
		}
		
		.gambar-3 {
			background-image: url('yuta_rev.png');
			background-size: cover;
			background-position: center;
			height: 160px;
			border-radius: 12px;
			padding: 20px;
			color: white;
			display: flex;
			align-items: flex-end;
		}
		
		.gambar-4 {
			background-image: url('starbuck.png');
			background-size: cover;
			background-position: center;
			height: 160px;
			border-radius: 12px;
			padding: 20px;
			color: white;
			display: flex;
			align-items: flex-end;
		}
		
		.card-text {
			padding-top: 15px;
		}

		.card-text h4 {
			margin: 0 0 10px 0;
			font-size: 17px;
			color: #ffffff;
		}

		.card-text p {
			font-size: 14px;
			color: #cccccc;
			line-height: 1.4;
		}
		
		.admin-section {
            padding: 50px 20px;
			max-width: 1200px;
			margin: 0 auto;
			font-family: Arial, sans-serif
        }


		
        .admin-layout {
            display: grid;
            grid-template-columns: repeat(4, 1fr);
            gap: 20px;
        }

        .gambar-biodata1 {
			background-image: url('Song Kang.jpg');
			background-size: cover;
			background-position: top center;
			height: 250px;
			border-radius: 12px;
			padding: 20px;
			color: white;
			display: flex;
			align-items: flex-end;
		}
		
		.gambar-biodata2 {
			background-image: url('logo blender.jpg');
			background-size: cover;
			background-position: top center;
			height: 250px;
			border-radius: 12px;
			padding: 20px;
			color: white;
			display: flex;
			align-items: flex-end;
		}
		
		.gambar-biodata3 {
			background-image: url('logo photosop.jpg');
			background-size: cover;
			background-position: top center;
			height: 250px;
			border-radius: 12px;
			padding: 20px;
			color: white;
			display: flex;
			align-items: flex-end;
		}
		
		.gambar-biodata4 {
			background-image: url('MEITU_20260410_182848575.jpeg');
			background-size: cover;
			background-position: center;
			height: 250px;
			border-radius: 12px;
			padding: 20px;
			color: white;
			display: flex;
			align-items: flex-end;
		}
	</style>
</head>

<body>
	<header class="wrapper">
		<div class="brand">
			<b>Portofolio</b>
			<b>UlerSakti</b>
		</div>
		<div>
			<nav class="navbar">
					<a href="#home">Home</a> |
					<a href="#biodata">Biodata</a> |
					<a href="layanan.html">Layanan</a> |
					<a href="galeri.html">Galeri</a> |
					<a href="#kontak">Kontak</a>
			</nav>
		</div>
	</header>
	
	<div class="banner-container">
        <div class="banner-image">
        </div>
    </div>
   
   <div id="home" class="home">
    <h2>HOME</h2>
    
		<div class="layout">
			
			<div class="card">
				<div class="gambar-1">
				</div>
				<div class="card-text">
					<h4>3D Model Ruangan Simple</h4>
					<p>Dibuat saat membuat portofolio saat magang.</p>
				</div>
			</div>

			<div class="card">
				<div class="gambar-2">
				</div>
				<div class="card-text">
					<h4>Rumah Hallowen</h4>
					<p>Dibuat saat magang project kelompok.</p>
				</div>
			</div>

			<div class="card">
				<div class="gambar-3">
				</div>
				<div class="card-text">
					<h4>Yuta Membelah Air</h4>
					<p>Dibuat saat gabut menunggu acc an mentor saat ikut bootcamp</p>
				</div>
			</div>

			<div class="card">
				<div class="gambar-4">
				</div>
				<div class="card-text">
					<h4>Starbuck Rasa Matcha</h4>
					<p>Dibuat saat ada tugas dari bootcamp.</p>
				</div>
			</div>

		</div>
	</div>
	<div id="biodata" class="admin-section">
        <h2>BIODATA</h2>
        <div class="admin-layout">
            
            <div class="card">
                <div class="gambar-biodata1">
                </div>
                <div class="card-text">
                    <h4>Ini Gua</h4>
                    <p>Asli ga boong</p>
                </div>
            </div>

            <div class="card">
                <div class="gambar-biodata2">
                </div>
                <div class="card-text">
                    <h4>Software 3D Yang Saya Pakai</h4>
                    <p>Blender adalah perangkat lunak sumber terbuka grafika komputer 3D.
					Perangkat lunak ini digunakan untuk membuat film animasi, efek visual, model cetak 3D, aplikasi 3D interaktif, 
					dan permainan video. Blender memiliki beberapa fitur termasuk pemodelan 3D, penteksturan, penyunting gambar bitmap, 
					penulangan, simulasi fluida dan asap, simulasi partikel, animasi, penyunting video, pemahat digital, dan perenderan.</p>
                </div>
            </div>

            <div class="card">
                <div class="gambar-biodata3">
                </div>
                <div class="card-text">
                    <h4>Software 2D Yang Saya Pakai</h4>
                    <p>Adobe Photoshop atau biasa disebut Photoshop adalah perangkat lunak penyunting citra buatan Adobe 
					Systems yang dikhususkan untuk penyuntingan foto/gambar dan pembuatan efek. Perangkat lunak ini banyak 
					digunakan oleh fotografer digital dan perusahaan iklan sehingga dianggap sebagai pemimpin pasar (market leader) 
					untuk perangkat lunak pengolah gambar/foto, dan, bersama Adobe Acrobat, dianggap sebagai produk terbaik yang pernah 
					diproduksi oleh Adobe Systems.</p>
                </div>
            </div>

            <div class="card">
                <div class="gambar-biodata4">
                </div>
                <div class="card-text">
                    <h4>Istri Guek</h4>
                    <p>Real no fake fake</p>
                </div>
            </div>

        </div>
    </div>
</body>

</html>
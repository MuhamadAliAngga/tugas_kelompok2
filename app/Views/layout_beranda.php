<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title><?= esc($title) ?></title>
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
<style>
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600&display=swap');

:root
{
    --main-color:#d3ad7f;
    --black:#13131a;
    --bg: #f0f0f0;
    --border:0.2rem solid #0074D9;
    --borderr:0.2rem solid #1E90FF;

}
*
{
    font-size: 'Roboto', sans-serif;
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: .2s linear;
}
html, body
{
    font-size: 62.5%;
    padding: 5%;
    scroll-padding-top: 9rem;
    scroll-behavior: smooth;
    background: #CFD8DC;
    overflow-x: hidden;
}
html::-webkit-scrollbar-track
{
    background: transparent;
}
html::-webkit-scrollbar-thumb
{
    background: #fff;
    border-radius: 5rem;
}

section
{
    padding: 3rem ;
}

.heading {
    text-align: center;
    color: black;
    text-transform: uppercase;
    padding-bottom: 3.5rem;
    font-size: 4rem;
    font-weight: bold; /* Menambahkan tebal pada teks */
    font-family: 'Roboto', sans-serif;; /* Contoh jenis font yang menarik */
    letter-spacing: 2px; /* Menambahkan jarak antar huruf */
    line-height: 1.2; /* Menyesuaikan ketinggian baris */
}
.heading span {
    color: #ffcc00;
    text-transform: uppercase;
    font-weight: bold;
    font-family: 'Roboto', sans-serif;; /* Memilih jenis font yang sama */
    letter-spacing: 1px; /* Menyesuaikan jarak antar huruf */
}

.btn
{
    margin-top: 1rem;
    display: inline-block;
    padding:.9rem 3rem;
    font-size: 1.7rem;
    color: #fff;
    background: red;
    cursor: pointer;
}
.btn:hover
{
   letter-spacing: .2rem; 
}


/*--------HEADER--------*/
.header 
{
    background-color: #CFD8DC; /* Warna abu-abu tua */
    color: #ffffff;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 1.5rem;
    box-shadow: 0 1px 10px rgba(0, 0, 0, 1);
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 1000;
    box-shadow: #000;
}
.header .logo img
{
    height: 6rem;
}
.header h1 
{
    font-size: 30px;
    color: #0074D9;
    cursor: pointer;
    margin-left: -20px; 
}
.header span:hover
{
    color: red;
}


/*--------CAROUSEL--------*/
.carousel 
{
    margin-top: -15px;
}

.carousel-item 
{
    height: 80vh;
    background: #333;
    color: white;
    display: flex;
    justify-content: center;
    align-items: center;
    text-align: center;
}

.carousel-item h1 {
    font-size: 3rem;
    margin-bottom: 20px;
}

        .carousel-item h1 span {
            color: #ffcc00;
        }

        .carousel-item p {
            font-size: 1.5rem;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: #000;
            border-radius: 50%;
        }

        .carousel-indicators li {
            background-color: #000;
        }

/*--------DIV NAVBAR--------*/




/*--------DIV NAVBAR--------*/
.header .navbar 
{
    margin-left: 20px; 
    justify-content: flex-end;
}
.header .navbar a 
{
    margin: 1rem;
    font-size: 1.6rem;
    color: #0074D9;
    font-weight: bold;
}


/*--------DIV ICON--------*/
.header .icon div
{
    color: #0074D9;
    cursor: pointer;
    font-size: 2.5rem;
    margin-left: 2rem;
}
.header .icon div:hover
{
    color: var(--main-color);
}
#menu-btn
{
    display: none;
}


/*--------DIV SEARCH FORM--------*/
.header .search-form.active
{
    transform: scaleY(1);

}
.header .search-form
{
    position: absolute;
    top: 105%;
    right: 1%;
    background: #0074D9;
    width: 50rem;
    height: 5rem;
    display: flex;
    align-items: center;
    transform: scaleY(0);
    transform-origin: top;
}
.header .search-form input
{
    height: 100%;
    width: 100%;
    font-size: 1.6rem;
    color: #0074D9;
    padding: 11rem;
    text-transform: none;
}
.header .search-form label
{
    cursor: pointer;
    font-size: 2.2rem;
    margin-left: 1.5rem;
    color: #0074D9;
}
.header .search-form label:hover
{
    color: var(--main-color);
}


/*--------DIV CART ITEM CONTAINER--------*/
.header .cart-items-container {
    position: absolute;
    top: 105%;
    right: -100%;
    height: calc(100vh - 9.5rem);
    width: 35rem;
    background: #fff;
    padding: 0 1.5rem;
    overflow-y: auto; /* Tambahkan ini jika ingin scroll jika item banyak */
}
.header .cart-items-container.active
{
       right: 0;
}
.header .cart-items-container .cart-item {
    position: relative;
    margin: 2rem 0;
    display: flex;
    align-items: center;
    gap: 1.5rem;
}
.header .cart-items-container .cart-item .fa-times{
    position: absolute;
    top: 1rem;
    right: 1rem;
    font-size: 2rem;
    cursor: pointer;
    color: var(--black);
}
.header .cart-items-container .cart-item .fa-times:hover {
    color: var(--main-color);
}
.header .cart-items-container .cart-item img
{
    height: 7rem;
}
.header .cart-items-container .cart-item .content h3
{
    font-size: 2rem;
    color: var(--black);
    padding-bottom: .5rem;
}
.header .cart-items-container .cart-item .content .price
{
    font-size: 1.5rem; 
    color: var(--main-color);
} 
.header .cart-items-container .btn
{
    width: 100%;
    text-align: center;
}


/*--------SECTION MENU--------*/
.menu .content {
    display: flex;
    align-items: center;
}

.conten
{
    min-height: 30vh;
    display: flex;
    align-items: center;
    background: url(/image/java.png) no-repeat;
    background-size: 100%;  /* Ganti 'cover' dengan ukuran yang lebih kecil, seperti 50% */
    background-position: center;  /* Ubah posisi menjadi 'center' untuk memastikan gambar berada di tengah */
    padding: 3rem;
    text-align: center;
    border: var(--border);
    box-shadow: 0 4px 8px rgba(0, 1, 1, 1); /* Menambahkan bayangan */
    border-radius: 15px;
}

.menu .conten .quote {
    flex-shrink: 0;
    width: 150px; /* Sesuaikan ukuran gambar sesuai kebutuhan */
    height: auto;
    margin-right: 20px; /* Ruang antara gambar dan teks */
}

.menu .conten p {
    flex-grow: 1;
    font-size: 2rem; /* Sesuaikan ukuran font teks sesuai kebutuhan */
    line-height: 1.5;
}

.menu .box-container
{
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(30rem, 1fr));
    gap: 1.5rem;
}
.menu .box-container .box {
    padding: 3rem;
    text-align: center;
    border: var(--border);
    box-shadow: 0 4px 8px rgba(1, 1, 1, 2); /* Menambahkan bayangan */
    border-radius: 15px; /* Menambahkan sudut yang lebih tumpul */
    margin-top: 15px;
}
.menu .box-container .box img
{
    height: 10rem;
}
.menu .box-container .box h3
{
    color: black;
    font-size: 3rem;
    padding: 1rem 0;
}
.menu .box-container .box .price
{
    color: #fff;
    font-size: 2.5rem;
    padding: .5rem 0;
}
.menu .box-container .box .price span
{
    font-size: 1.5rem;
    text-decoration: line-through;
    font-weight: lighter;
}
.menu .box-container .box:hover
{
    background: #ffcc00;
}


/*--------SECTION CONTACT--------*/
.contact .row {
    display: flex;
    background: var(--black);
    flex-wrap: wrap;
    gap: 1rem;
}

.contact .row .map {
    flex: 1 1 45rem;
    width: 100%;
    object-fit: cover;
}

.contact .row form {
    flex: 1 1 45rem;
    padding: 5rem 2rem;
    text-align: center;
}
.contact .row form h3
{
    text-transform: uppercase;
    font-size: 3.5rem;
    color: #fff;
}
.contact .row form .inputBox {
    display: flex;
    align-items: center;
    margin: 2rem;
    margin-bottom: 2rem;
    background: var(--bg);
    border: var(--border);
}
.contact .row form .inputBox span {
    color: #fff;
    font-size: 2rem;
    padding-left: 2rem;
}
.contact .row form .inputBox input {
    width: 100%;
    padding: 2rem;
    font-size: 1.7rem;
    color: #fff;
    text-transform: none;
    background: none;
}


/*--------SECTION FOOTER--------*/
footer 
{
    background: #CFD8DC; 

    text-align: center;
    color: var(--black);
    box-shadow: 0 1px 10px rgba(0, 0, 0, 1);
}
footer .share 
{
    padding: 1rem 0;
    display: flex;
    justify-content: center;
    gap: 1rem;
    background-color: #CFD8DC;
    color: #ffffff;
}
footer .share a 
{
    height: 5rem;
    width: 5rem;
    line-height: 5rem;
    font-size: 3rem;
    color: #0074D9; 
    border:  var(--border);
    margin: 0.5rem;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    transition: background-color( 0.3s, color 0.3s);
}
footer .share a:hover {
    background-color: #1E90FF;
    color: white;
    border: var(--borderr);
    
}
footer .links 
{
    display: flex;
    justify-content: center;
    flex-wrap: wrap;
    padding: 2rem 0;
    gap: 1.5rem;
    background-color: #CFD8DC; /* Warna abu-abu tua */
    color: #ffffff;
}
footer .links a 
{
    padding: 0.5rem 2rem;
    color: #0074D9; /* Warna teks hitam */
    border: var(--border);
    font-size: 2rem;
    transition: background-color 0.3s, color 0.3s;
}
footer .links a:hover 
{
    background-color: #1E90FF;
    color: white;
    border: var(--borderr);
}
footer .credit 
{
    font-size: 2rem;
    background-color: #CFD8DC;/* Warna abu-abu tua */
    color: #ffffff;
    color: var(--black); /* Warna teks hitam */
    font-weight: lighter;
    padding: 1.5rem 0;
}
footer .credit span 
{
    color: #1E90FF;
}

/*--------MEDIA QUERIES--------*/
@media (max-width:991px) {
    html {
        font-size: 55%;
    }
    .header {
        padding: 1.5rem 2rem;
    }
    #menu-btn {
        display: inline-block;
    }
    .header .navbar {
        position: absolute;
        top: 105%;
        right: -100%;
        background: #fff;
        width: 30rem;
        height: calc(100vh - 9.5rem);
        transition: right 0.3s ease;
    }
    .header .navbar.active {
        right: 0;
    }
    .header .navbar a {
        color: var(--black);
        display: block;
        margin: 1.5rem;
        padding: 0.5rem;
        font-size: 2rem;
    }
    .header .search-form
    {
        width: 90%;
        right: 2rem;
    }
    section
    {
    padding: 2rem ;
    }
    .home
    {
        background-position: left;
        justify-content: center;
        text-align: center;
    }
    .home .conten h3
    {
        font-size: 4.5rem;
    }
    .home .conten p
    {
        font-size: 4.5rem;
    }
}
@media (max-width:450px) 
{
    html
    {
        font-size: 55%;
    }
}
    </style>
</head>

<body>


        <?= $this->renderSection('content') ?>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

</body>

</html>


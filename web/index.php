<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#portfolio">Portfolio</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
        </nav>
    </header>

    <section id="home">
        <div class="intro">
            <h1>Hai Nama saya <span class="highlight">Rian</span> Adrian</h1>
            <p>Mahasiswa undiksha tahun 2022 fakultas teknik, jurusan informatika, prodi ilmu komputer.</p>
        </div>
        <div class="profile-pic">
            <img src="img/gambar1.jpg" alt="Jems Kemerun">
        </div>
    </section>
</body>
<style>
  body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-color: #f5f5f5;
    height: 100vh;
    display: flex;
    flex-direction: column;
}

header {
    background-color: #fff;
    padding: 20px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    width: 100%;
}

nav ul {
    list-style: none;
    display: flex;
    justify-content: center;
    padding: 0;
    margin: 0;
}

nav li {
    margin: 0 15px;
}

nav a {
    text-decoration: none;
    color: #333;
    font-weight: bold;
}

section#home {
    display: flex;
    align-items: center;
    justify-content: center;
    flex: 1;
    padding: 50px;
    background-color: #fff;
    box-sizing: border-box;
    width: 100%;
}

.intro {
    max-width: 600px;
    margin-right: 50px;
}

.intro h1 {
    font-size: 3em;
    margin: 0;
}

.intro .highlight {
    color: red;
}

.intro p {
    font-size: 1.2em;
    line-height: 1.5;
}

button {
    padding: 10px 20px;
    background-color: red;
    color: #fff;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 1em;
}

button:hover {
    background-color: darkred;
}

.profile-pic img {
    border-radius: 50%;
    width: 300px;
    height: 300px;
    object-fit: cover;
}

</style>
</html>

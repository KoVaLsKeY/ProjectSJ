<header>
    <nav class="navbar navbar-expand fixed-top custom-navbar">
        <a href="home.html"><img src="img/logo.png" class="logo" alt="logo"></a>
        <div class="container d-flex justify-content-end" id="lkjh">
            <ul class="navbar-nav d-flex flex-row mb-0">
                <li class="nav-item">
                    <a class="nav-link text-white viber" href="https://invite.viber.com/?g=VPKwJjQi3VOrGkbQu76sFvqgSEHCGmNG" target="_blank">
                        <img src="img/viber.png" width="40px" alt="viber">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white whatsapp" href="https://wa.me/380986110329" target="_blank">
                        <img src="img/whatsapp.png" width="40px" alt="whatsapp">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white telegram" href="https://t.me/+N5kZXWBOxjVlNGNi" target="_blank">
                        <img src="img/telegram.png" width="40px" alt="telegram">
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-white instagram" href="https://www.instagram.com/kindergarten_slniecko/" target="_blank">
                        <img src="img/instagram.png" width="40px" alt="instagram">
                    </a>
                </li>
                <li class="nav-item">
                    <button id="openForm">Zavolajte nám</button>
                    <div id="forma" class="form">
                        <div class="form-content">
                            <span id="closeForm" class="close">&times;</span>
                            <h2>Konzultácia</h2>
                            <hr>
                            <form action="vdaka.html" onsubmit="handleSubmit(event)">
                                <p>Zanechajte žiadosť o konzultáciu a získajte<b> prvý týždeň štúdia zadarmo.</b></p>
                                <div class="mesto_select">
                                    Vyberte mesto:
                                    <select name="mesto" id="mesto" required>
                                        <option value="Nitra">Nitra</option>
                                        <option value="Kyiv">Kyiv</option>
                                    </select>
                                </div>
                                <input type="text" id="name" placeholder="Meno" name="name" required><br>
                                <input type="number" id="tele" placeholder="Telefonné čislo" name="tel" required><br>
                                <input type="email" id="e-mail" placeholder="Napíšte svoj e-mail" name="email" required>
                                <input type="text" id="poznamka" placeholder="Napíšte niečo..." name="poznamka" required>
                                <div class="container papier">
                                    <button type="submit" id="submit_button">Submit</button>
                                    <img id="papier-letak" src="img/papier.png" alt="papierove-letadlo">
                                </div>
                            </form>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>

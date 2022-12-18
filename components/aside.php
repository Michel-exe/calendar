<aside class="aside-menu">
    <div class="aside-con">
        <section class="aside-tit">
            <h1>Calendario</h1>
        </section>
        <nav class="aside-nav">
            <ul>
                <li>
                    <p>Configuraciones</p>
                    <ul>
                        <li>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                            </svg>
                            <a href="./pages/prest.php">Prestablecidos</a>
                        </li>
                        <!-- <li><a href="./pages/date.php">Eventos</a></li> -->
                    </ul>
                </li>
                <li>
                    <p>Mas</p>
                    <ul>
                        <li>
                            <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 16 16" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"></path>
                                <path d="M11 8a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"></path>
                            </svg>
                            <a href="#">Filtrar</a>
                        </li>
                    </ul>
                </li>
            </ul>
        </nav>
    </div>
</aside>
<script>
    document.querySelector(".aside-menu").addEventListener("click", e =>{
        if(e.target.classList.contains("aside-menu")){
            e.target.classList.toggle("active")
        }
        // document.querySelector(".aside-menu").
    })
</script>
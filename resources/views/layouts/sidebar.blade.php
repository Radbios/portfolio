<sidebar>
    <ul id="topside">
        <li class="item-nav {{request()->route()->getName() == "dashboard" ? "active" : ""}}">
            <a href="{{Route("dashboard")}}">
                <img src="{{asset("assets/icon/home.svg")}}" alt="">
                <div class="sidebar-text">
                    Início
                </div>
            </a>
        </li>
        <li class="item-nav">
            <a href="">
                <img src="{{asset("assets/icon/projects.svg")}}" alt="">
                <div class="sidebar-text">
                    Projetos
                </div>
            </a>
        </li>
        <li class="item-nav">
            <a href="">
                <img src="{{asset("assets/icon/storage.svg")}}" alt="">
                <div class="sidebar-text">
                    Armazenamento
                </div>
            </a>
        </li>
    </ul>
    <ul id="botside">
        <li class="item-nav">
            <a href="">
                <img src="{{asset("assets/icon/logs.svg")}}" alt="">
                <div class="sidebar-text">
                    Logs
                </div>
            </a>
        </li>
        <li class="item-nav">
            <a href="">
                <img src="{{asset("assets/icon/config.svg")}}" alt="">
                <div class="sidebar-text">
                    Configurações
                </div>
            </a>
        </li>
        <li class="item-nav">
            <a href="">
                <img src="{{asset("assets/icon/logout.svg")}}" alt="">
                <div class="sidebar-text">
                    Sair
                </div>
            </a>
        </li>
    </ul>
</sidebar>

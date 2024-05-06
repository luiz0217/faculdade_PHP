
<section>
        <div class="flex"
            style="justify-content: center;gap: 50px;align-items: center;background-color: #E9EAF0;padding: 25px;">
            <h1 style="font-weight: 900;text-align: center;color: #0E1759;text-transform: uppercase;">Nossos <br
                    class="MobNone">
                Clientes</h1>
            <p style="color: #0E1759;text-align: center;text-transform: uppercase;">conheça algumas das empresas que já
                confiam em nosso trabalho!</p>
        </div>
        <br>

        <div class="card2">
            <h5 style="font-weight: 900;">SUPERMERCADOS</h5>
            <br>
            <div id="sup">

            </div>

        </div>


        <div class="card2">
            <h5 style="font-weight: 900;text-transform: uppercase;">varejo e serviços</h5>
            <br>
            <div id="va">

            </div>

        </div>



        <div class="card2">
            <h5 style="font-weight: 900;text-transform: uppercase;">indústria</h5>
            <br>
            <div id="ind">

            </div>
        </div>


        <div class="card2">
            <h5 style="font-weight: 900;text-transform: uppercase;">bares e restaurantes</h5>
            <br>
            <div id="bar">

            </div>
        </div>


        <br>



        <script>
            // variaveis
            let listStyle = "display: flex;gap: 20px;justify-content: center;";
            let leftSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">  <circle cx="19" cy="19" r="17" stroke="white" stroke-width="4"/>  <path d="M22.102 11.6328L14.7346 19.0002L22.102 26.3675" stroke="white" stroke-width="4" stroke-linecap="round"/></svg>';
            let rightSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="38" height="38" viewBox="0 0 38 38" fill="none">  <circle cx="19" cy="19" r="17" transform="rotate(-180 19 19)" stroke="white" stroke-width="4"/>  <path d="M15.898 26.3672L23.2654 18.9998L15.898 11.6325" stroke="white" stroke-width="4" stroke-linecap="round"/></svg>';
            let squereStyle = "background-size: contain;background-repeat: no-repeat;background-position: 50%;width: 100px;height: 100px;border-radius: 16px;";

            let wpLink = "https://www.compassti.com.br/wp-content/uploads/";
            let supermercadoImg = ["2024/01/Althoff.png", "2024/01/Chipitoski.jpg", "2024/01/Gasparini.jpg", "2024/01/hiperdalpozzo.png", "2024/01/Italo.png", "https://www.compassti.com.br/wp-content/uploads/2024/01/logo-redeeconomica-site-pq83k7m6xes5pqdy1iaqkhw6j9y23pqc43pgmovoxs.png", "2024/01/Macliv.png", "2024/01/MeuMercado.jpg", "https://ofertasclubemix.com.br/wp-content/uploads/2022/11/logo-site-ofertas.png", "2024/01/Realeza.png", "2024/01/Rede-Parteka.jpg", "2024/01/Reviwer.png", "2024/01/Rio-verde.jpg", "2024/01/Supermercado-Divisao.jpg", "2024/01/Supermercado-Magnabosco.jpg", "2024/01/Supermercado-Superpao.webp", "2024/01/Superutil.webp", "2024/01/Tissi.jpg", "2024/01/Unimax.png","2024/01/Ricli.jpg"];
            let supermercadoLink = ["https://www.althoff.com.br", "https://www.facebook.com/chipitoski/", "https://www.instagram.com/supermercadogasparini/", "https://www.superdalpozzo.com.br", "https://superitalo.com.br", "https://redeeconomicams.com.br", "https://macliv.com.br", "https://www.facebook.com/MeuMercadoSpipeCalaerge", "https://www.instagram.com/mix_supermercado/", "https://www.facebook.com/SupermercadoRealeza/", "https://www.facebook.com/supermercadosparteka", "https://www.octamarket.com.br/store/?loja=reviwer", "https://www.rederioverde.com.br", "https://www.facebook.com/p/Supermercado-Divisão-10", "https://www.facebook.com/supermercadomagnabosco/", "https://loja.superpao.com.br", "https://portal.superutil.rs", "https://www.instagram.com/tissisupermercados/", "http://www.supermercadounimax.com.br","www.facebook.com/supermecadosrickli"];
            let supStart = 0;
            let supLenght;
            let sideSup = "R";

            let varejoImg = ["2024/01/Ana-Angela-Modas.jpg", "2024/01/Brinquedolandia.jpg", "2024/01/compressul-logo.png", "2024/01/DK-Metais.png", "2024/01/Guara-Box.png", "2024/01/MAP-Parafusos.webp", "2024/01/Mayer-Ferragens.png", "2024/01/Mercado-Familia.png", "2024/01/Mercearia-Colonial-Samambaia.png", "2024/01/Polecola.webp", "2024/01/RodoMarcelinho.png", "2024/01/Specialite-Centro-Medico.png", "2024/01/Zoom-Distribuidora.png"/*, "https://instagram.fgpb2-1.fna.fbcdn.net/v/t51.2885-19/283693462_3169231333396714_1768427692395640205_n.jpg?stp=dst-jpg_s320x320&_nc_ht=instagram.fgpb2-1.fna.fbcdn.net&_nc_cat=110&_nc_ohc=lVCizoY8I-cAX9FDkOJ&edm=AOQ1c0wBAAAA&ccb=7-5&oh=00_AfB_6JGybN94aVOPcD1-xuNTv4o1KC424_1mzJNtDQh9YA&oe=65ABDA44&_nc_sid=8b3546"*/];
            let varejoLink = ["https://www.facebook.com/anaangelamodas", "https://www.facebook.com/fiorellimasiero", "https://www.compressul.com.br", "https://dkmetais.com.br", "https://www.guarabox.com.br", "https://www.mapparafusos.com.br", "https://www.facebook.com/mayerferragens.prude", "https://www.facebook.com/mercadodafamilia.cm/", "https://www.facebook.com/people/Mercearia-Colonial-Samambaia/100063705904086/", "https://polecola.com.br/pt", "https://www.facebook.com/people/Rodo-Marcelinho/", "https://specialitecentromedico.com.br", "https://zoomdistribuidora.net.br", "https://www.instagram.com/agropecuariabelaaurora/"];
            let vaStart = 0;
            let vaLenght;
            let sideVa = "R";

            let industriaImg = ["2024/01/Compensa-Compensados.png", "2024/01/Compensa-Mineracao-e-Concreto.jpg", "2024/01/Cookie-do-Boleta.jpg", "2024/01/Embutidos-Schmidt.jpg", "2024/01/Faganello-Compensados.png", "2024/01/Placa-Compensados.jpg", "2024/01/Polisul-Redes-Plasticas.jpg", "2024/01/Saviski.jpg", "2024/01/Sedanos.png", "2024/01/South-Pine-Madeiras.webp", "2024/01/Vinicola-Bertoletti.png", "2024/01/Cantu.svg"];
            let industriaLink = ["https://compensa.com.br", "https://compensamc.com.br", "https://cookiedoboleta.com.br/", "https://www.facebook.com/embutidosschmidt/", "https://faganellocompensados.com.br", "https://placacompensados.com.br", "https://polisul.com.br", "https://www.facebook.com/saviskiprefabricados", "https://www.facebook.com/sedanosuniao/", "https://southpine.com.br", "https://vinicolabertoletti.com.br/", "https://www.cantu.com.br"];
            let indStart = 0;
            let indLenght;
            let sideInd = "R";

            let barImg = ["2024/01/301876002_486519870148724_5389405910352543762_n.jpg", "2024/01/BAR-ZUCCA.jpg", "2024/01/Container.png", "2024/01/Drops.jpg", "2024/01/Feijoada-Joel.png", "2024/01/Irmandade.png", "2024/01/pigalle-burger-guarapuava.png", "2024/01/Zero42.jpg"];
            let barLink = ["https://www.facebook.com/cervejariasuabia/", "https://www.instagram.com/bar.zucca/", "https://www.instagram.com/containerburger/", "https://www.facebook.com/dropscafecia/", "https://www.facebook.com/feijoadadojoel/", "https://www.instagram.com/irmandadecervejaria/", "https://www.pigalleburguer.com.br", "https://www.facebook.com/people/Zero42Burger/100063572262286/"];
            let barStart = 0;
            let barLenght;
            let sideBar = "R";

            //chamada inicial

            sizeUpdate();
            supermercado();
            varejo();
            industria();
            bar();

            //funções
            function sizeUpdate() {
                if (screen.width > 650) {
                    supLenght = 8;
                    vaLenght = 8;
                    indLenght = 8;
                    barLenght = 8;
                }
                else {
                    supLenght = 3;
                    vaLenght = 3;
                    indLenght = 3;
                    barLenght = 3;
                    squereStyle = "background-size: contain;background-repeat: no-repeat;background-position: 50%;width: 50px;height: 50px;border-radius: 16px;";
                    listStyle = "display: flex;gap: 10px;justify-content: center;";
                    leftSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 38 38" fill="none">  <circle cx="19" cy="19" r="17" stroke="white" stroke-width="4"/>  <path d="M22.102 11.6328L14.7346 19.0002L22.102 26.3675" stroke="white" stroke-width="4" stroke-linecap="round"/></svg>';
                    rightSVG = '<svg xmlns="http://www.w3.org/2000/svg" width="30" height="20" viewBox="0 0 38 38" fill="none">  <circle cx="19" cy="19" r="17" transform="rotate(-180 19 19)" stroke="white" stroke-width="4"/>  <path d="M15.898 26.3672L23.2654 18.9998L15.898 11.6325" stroke="white" stroke-width="4" stroke-linecap="round"/></svg>';
                }
            }

            function supermercado() {
                let list = document.createElement("div");
                list.setAttribute("style", listStyle);

                let swLeft = document.createElement("button");
                let swRight = document.createElement("button");

                swLeft.innerHTML = leftSVG;
                swRight.innerHTML = rightSVG;
                swLeft.setAttribute("style", "background-color: transparent;border: none;z-index: 10");
                swRight.setAttribute("style", "background-color: transparent;border: none;z-index: 10");

                swLeft.setAttribute("onclick", "prevSup()");
                swRight.setAttribute("onclick", "nextSup()");
                list.appendChild(swLeft);

                for (let i = supStart; i < supStart + supLenght; i++) {
                    let box = document.createElement("a");
                    let j;
                    if (i >= supermercadoImg.length) {
                        j = i - supermercadoImg.length;
                    }
                    else {
                        j = i;
                    }
                    box.className = "logoAnim"+sideSup;
					if(supermercadoImg[j].length > 60){
						box.setAttribute("style", "background: url(" + supermercadoImg[j] + "),#fff;" + squereStyle);
					}
					else{
						box.setAttribute("style", "background: url(" + wpLink + supermercadoImg[j] + "),#fff;" + squereStyle);
					}
                    box.setAttribute("href", supermercadoLink[j]);
                    list.appendChild(box);
                }
                list.appendChild(swRight);
                document.getElementById("sup").innerHTML = "";
                document.getElementById("sup").appendChild(list);

            }
            function prevSup() {
                supStart--;
                sideSup = "L";
				if (supStart < 0) {
                    supStart = supermercadoImg.length - 1;
                }
                supermercado();
                
            }
            function nextSup() {
                supStart++;
                sideSup = "R";
				if (supStart >= supermercadoImg.length) {
                    supStart = 0;
                }
                supermercado();
                

            }


            function varejo() {
                let list = document.createElement("div");
                list.setAttribute("style", listStyle);

                let swLeft = document.createElement("button");
                let swRight = document.createElement("button");

                swLeft.innerHTML = leftSVG;
                swRight.innerHTML = rightSVG;
                swLeft.setAttribute("style", "background-color: transparent;border: none;z-index: 10");
                swRight.setAttribute("style", "background-color: transparent;border: none;z-index: 10");

                swLeft.setAttribute("onclick", "prevVa()");
                swRight.setAttribute("onclick", "nextVa()");
                list.appendChild(swLeft);

                for (let i = vaStart; i < vaStart + vaLenght; i++) {
                    let box = document.createElement("a");
                    let j;
                    if (i >= varejoImg.length) {
                        j = i - varejoImg.length;
                    }
                    else {
                        j = i;
                    }
                    if (j == 5) {
                        box.setAttribute("style", "background: url(" + wpLink + varejoImg[j] + "),#FFE500;" + squereStyle);
                    }
                    else {
                        box.setAttribute("style", "background: url(" + wpLink + varejoImg[j] + "),#fff;" + squereStyle);
                    }
                    box.className = "logoAnim"+sideVa;
                    box.setAttribute("href", varejoLink[j]);
                    list.appendChild(box);
                }
                list.appendChild(swRight);
                document.getElementById("va").innerHTML = "";
                document.getElementById("va").appendChild(list);
            }
            function prevVa() {
                vaStart--;
                sideVa = "L";
				if (vaStart < 0) {
                    vaStart = varejoImg.length - 1;
                }
                varejo();                
            }
            function nextVa() {
                vaStart++;
                sideVa = "R";
				if (vaStart >= varejoImg.length) {
                    vaStart = 0;
                }
                varejo();
                
            }

            function industria() {
                let list = document.createElement("div");
                list.setAttribute("style", listStyle);

                let swLeft = document.createElement("button");
                let swRight = document.createElement("button");

                swLeft.innerHTML = leftSVG;
                swRight.innerHTML = rightSVG;
                swLeft.setAttribute("style", "background-color: transparent;border: none;z-index: 10");
                swRight.setAttribute("style", "background-color: transparent;border: none;z-index: 10");

                swLeft.setAttribute("onclick", "prevInd()");
                swRight.setAttribute("onclick", "nextInd()");
                list.appendChild(swLeft);

                for (let i = indStart; i < indStart + indLenght; i++) {
                    let box = document.createElement("a");
                    let j;
                    if (i >= industriaImg.length) {
                        j = i - industriaImg.length;
                    }
                    else {
                        j = i;
                    }

                    if (j == 9) {
                        box.setAttribute("style", "background: url(" + wpLink + industriaImg[j] + "),#000;" + squereStyle);
                    }
                    else {
                        box.setAttribute("style", "background: url(" + wpLink + industriaImg[j] + "),#fff;" + squereStyle);
                    }
                    box.className = "logoAnim"+sideInd;
                    box.setAttribute("href", industriaLink[j]);
                    list.appendChild(box);
                }
                list.appendChild(swRight);
                document.getElementById("ind").innerHTML = "";
                document.getElementById("ind").appendChild(list);
            }
            function prevInd() {
                indStart--;
                sideInd = "L";
				if (indStart < 0) {
                    indStart = industriaImg.length - 1;
                }
                industria();                
            }
            function nextInd() {
                indStart++;
                sideInd = "R";
				if (indStart >= industriaImg.length) {
                    indStart = 0;
                }
                industria();                

            }

            function bar() {
                let list = document.createElement("div");
                list.setAttribute("style", listStyle);

                let swLeft = document.createElement("button");
                let swRight = document.createElement("button");

                swLeft.innerHTML = leftSVG;
                swRight.innerHTML = rightSVG;
                swLeft.setAttribute("style", "background-color: transparent;border: none;z-index: 10");
                swRight.setAttribute("style", "background-color: transparent;border: none;z-index: 10");

                swLeft.setAttribute("onclick", "prevBar()");
                swRight.setAttribute("onclick", "nextBar()");
                list.appendChild(swLeft);

                for (let i = barStart; i < barStart + barLenght; i++) {
                    let box = document.createElement("a");
                    let j;
                    if (i >= barImg.length) {
                        j = i - barImg.length;
                    }
                    else {
                        j = i;
                    }
                    box.className = "logoAnim"+sideBar;
                    box.setAttribute("style", "background: url(" + wpLink + barImg[j] + "),#fff;" + squereStyle);
                    box.setAttribute("href", barLink[j]);
                    list.appendChild(box);
                }
                list.appendChild(swRight);
                document.getElementById("bar").innerHTML = "";
                document.getElementById("bar").appendChild(list);
            }
            function prevBar() {
                barStart--;
                sideBar = "L";
				if (barStart < 0) {
                    barStart = barImg.length - 1;
                }
                bar();                
            }
            function nextBar() {
                barStart++;
                sideBar ="R";
				if (barStart >= barImg.length) {
                    barStart = 0;
                }
                bar();               

            }

        </script>

	</section>
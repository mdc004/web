<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Il sito degli studenti del Viganò">
    <?php
        include_once("views/include_css.php");
    ?>
    <title>Giornata della terra - Vigainsider</title>
</head>
<body>
    <?php
        include_once("views/navbar.php");
    ?>

    <main>
        <div class="container landing">
            <a href="gdt.php">&larr; Torna alla sezione principale</a>
            <h1>Giornata della terra 2022</h1>
            <small class="text-muted">Venerdì 22 aprile 2022, dalle 8 alle 14</small>
            <div class="col-md-12 mt-5" style='background-color:#d5ebf6;height:130px;background-image:url("pictures/gdtlogo.png");background-size:contain;background-position:center;background-repeat:no-repeat;border-radius:10px;'></div>
            <div class="row">
                <div class="col-md-12 mt-5">
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <h4>Seleziona la classe per scoprire la programmazione delle visite</h4>
                            <div class="form-group">
                                <select class="form-control" id="selclasse" name="selclasse">
                                    <option value="null">--- Seleziona la classe ---</option>
                                </select>
                            </div>     
                        </div>
                        <div class="col-md-12 mt-3">
                            <p><span id="accompagnatore"></span></p>
                        </div>
                        <div class="col-md-12 mt-3" id="programma">
                            <table id="tabella" class="table table-striped table-bordered table-hover">
                                <!-- <thead>
                                    <tr>
                                    <th scope="col">Numero tappa</th>
                                    <th scope="col">Ora</th>
                                    <th scope="col">Attività</th>
                                    <th scope="col">Luogo</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody> -->
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="js/gdt_data.js"></script>
    <script>
        // Riempi select
        const classi = Object.keys(schedule).sort();
        const sel = document.getElementById("selclasse");
        const programma = document.getElementById("programma");
        for(let i=0; i<classi.length; ++i) {
            let opt = document.createElement("option");
            opt.value = classi[i];
            opt.innerHTML = opt.value.replace("_"," e ");
            sel.appendChild(opt);
        }
        const showSchedule=()=>{
            const classeSelezionata=sel.value
            const percorso=schedule[classeSelezionata]
            const tabella=document.getElementById("tabella")
            const dimensioneTabella=tabella.rows.length
            // let contatoreAttivita=1

            //cancellazione
            document.getElementById("accompagnatore").innerText=""
            for (i=0;i<dimensioneTabella;i++){
                tabella.deleteRow(-1)
            }
            if(sel.value in schedule) {
                //riga di intestazione. È necessario rimetterla in questo modo altrimenti non funziona la classe table-striped
                const riga=tabella.insertRow(-1)
                // const colonnaNumero=riga.insertCell(0)
                const colonnaOra=riga.insertCell(0)
                const colonnaDescrizione=riga.insertCell(1)
                const colonnaLuogo=riga.insertCell(2)

                // colonnaNumero.innerHTML="<b>Numero attività</b>"
                colonnaOra.innerHTML="<b>Ora</b>"
                colonnaDescrizione.innerHTML="<b>Attività</b>"
                colonnaLuogo.innerHTML="<b>Luogo</b>"

                for (i=1;i<percorso.length;i++){
                    if (percorso[i]!=0){
                        const tappa=percorso[i]
                        const riga=tabella.insertRow(-1)
                        // const colonnaNumero=riga.insertCell(0)
                        const colonnaOra=riga.insertCell(0)
                        const colonnaDescrizione=riga.insertCell(1)
                        const colonnaLuogo=riga.insertCell(2)
        
                        // colonnaNumero.innerHTML=contatoreAttivita
                        colonnaOra.innerHTML=orari[i-1]
                        colonnaDescrizione.innerHTML=attivita[tappa][0]
                        colonnaLuogo.innerHTML=attivita[tappa][4]

                        // contatoreAttivita+=1
                        if (tappa==1 || tappa==8 || tappa==10) i+=1
                    }
                }
            }

            document.getElementById("accompagnatore").innerText="Accompagnatore classe: "+percorso[0]
        }
        sel.addEventListener("change",showSchedule)
        // function showSchedule() {
        //     if(sel.value in schedule) {
        //         let classe = schedule[sel.value];                
        //         programma.innerHTML = "<p class=\"card-text\">Accompagna la classe: "+classe[0]+"</p>\n";
        //         let newprog = '<div class="card card-notizia">\n<div class="card-body">\n';
        //         for(let i=1;i<classe.length;++i) {
        //             let act=classe[i];
        //             if (act!=0) {
        //                 newprog += '<p class="card-text">h. '+orari[i-1]+' > '+ attivita[act][4]+'</p>';
        //                 newprog += '<h5 class="card-title">'+attivita[act][0]+'</h5>\n';
        //             }
        //             if (act==1 || act == 8 || act == 10)
        //                 ++i;
        //         }
        //         newprog += '</div>\n</div>\n';
        //         programma.innerHTML += newprog;
        //     }
        //     else {
        //         programma.innerHTML = "";
        //     }
        // }
    </script>
    <?php
        include_once("views/footer.php");
        include_once("views/include_js.php");
    ?>
</body>
</html>
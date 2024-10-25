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
                            <h4>Seleziona l'attività per visualizzare la programmazione</h4>
                            <div class="form-group">
                                <select class="form-control" id="selclasse" name="selclasse">
                                    <option value="0">--- Seleziona l'attività ---</option>
                                </select>
                            </div>
                            <div class="col-md-12 mt-3" id="programma">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <script src="js/gdt_data.js"></script>
    <script>
        const act_schedule = new Array(19);
        for(let i=0;i<19;i++) 
            act_schedule[i]=new Array(16).fill(0);
        const classi = Object.keys(schedule).sort();
        for (let i=0;i<classi.length;i++) {       
            let classe = classi[i];
            let schedule_classe = schedule[classe];            
            if (classe.includes("_")) {  
                classe = classe.replace("_"," e "); 
                classe += " (gruppo unico)";
            }
            for (let j=1; j<schedule_classe.length; j++)  {
                let curr_act = schedule_classe[j];
                if (curr_act!=0) {
                    if (act_schedule[curr_act][j-1]==0)
                        act_schedule[curr_act][j-1]=classe;
                    else
                        act_schedule[curr_act][j-1]=[act_schedule[curr_act][j-1],classe];
                }
            }
        }
        // console.log(act_schedule);
        const sel = document.getElementById("selclasse");
        const programma = document.getElementById("programma");
        for(let i=1; i<attivita.length; ++i) {
            let opt = document.createElement("option");
            opt.value = i;
            opt.innerHTML = attivita[i][0];
            sel.appendChild(opt);
        }
        sel.addEventListener("change",showSchedule)
        function showSchedule() {
            if(sel.value>0) {
                let act = attivita[sel.value];  
                let act_plan = act_schedule[sel.value];              
                programma.innerHTML = "<p class=\"card-text\">Aula: "+act[4]+"</p>\n";
                programma.innerHTML += "<p class=\"card-text\">Attenzione: gli intervalli di tempo indicati includono gli spostamenti. Occorre terminare l'attività qualche minuto prima!</p>\n";
                let newprog = '<div class="card card-notizia">\n<div class="card-body">\n';
                for(let i=0;i<act_plan.length;++i) {
                    if (Array.isArray(act_plan[i])) {
                        newprog += '<p class="card-text">h. '+orari[i];
                        newprog += " - " + (i>=act_plan.length-1 ? "13:55" : (orari[i+1]=="11:15" ? "10:55" : orari[i+1])) +' - Gruppo 1 > Classe '+ act_plan[i][0] +'</p>';                        
                        newprog += '<p class="card-text">h. '+orari[i];
                        newprog += " - " + (i>=act_plan.length-1 ? "13:55" : (orari[i+1]=="11:15" ? "10:55" : orari[i+1])) +' - Gruppo 2 > Classe '+ act_plan[i][1] +'</p>';
                    }                    
                    else if  (act_plan[i]!=0) {
                        newprog += '<p class="card-text">h. '+orari[i];
                        if (sel.value == 1 || sel.value == 8 || sel.value == 10)
                            ++i;
                        
                        newprog += " - " + (i>=act_plan.length-1 ? "13:55" : (orari[i+1]=="11:15" ? "10:55" : orari[i+1])) +' > Classe '+ act_plan[i] +'</p>';
                    }
                }
                newprog += '</div>\n</div>\n';
                programma.innerHTML += newprog;
            }
            else {
                programma.innerHTML = "";
            }
        }
    </script>
    <?php
        include_once("views/footer.php");
        include_once("views/include_js.php");
    ?>
</body>
</html>
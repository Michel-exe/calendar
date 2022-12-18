const eventos = async()=>{
    let data = new FormData()
    let mes = parseInt(localStorage.getItem("mes"));
    let mesDes = (mes==12 ? 1 : mes+1).toString().padStart(2,"0")
    let mesAnt = (mes==1 ? 12 : mes-1).toString().padStart(2,"0")

    console.log(mesAnt+"-"+mes.toString().padStart(2,"0")+"-"+mesDes);

    data.append("mesAnt",mesAnt)
    data.append("mes",mes.toString().padStart(2,"0"))
    data.append("mesDes",mesDes)
    await fetch("./php/get.php",{
        method: "POST",
        body:data
    })
    .then(res => res.json())
    .then(r => ponerFechas(r))
}
const ponerFechas = (res)=>{
    res.map(r =>{
        const cad = ".day_"+r.day+"-"+r.mounth+"-"+r.year
        if(document.querySelector(cad)!=null){
            let el =document.querySelector(cad)
            let div = document.querySelector(cad + " >div")
            el.style.background=r.color
            div.innerHTML+=`
                <div ide="${r.id}">
                    <h3>${r.evento}</h3>
                </div>
            `;
            if(document.querySelector(cad + " >section")==null){
                el.innerHTML+=`<section ide="${r.id}" day="${r.day}" mounth="${r.mounth}" year="${r.year}"></section>`
            }
        }
        //  else{
        //     console.log("No ta 😔");
        // }
    })
}
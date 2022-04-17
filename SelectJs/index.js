var funcion_Equipo1 = [99];
var funcion_Equipo2 = ['99'];
var funcion_Direccion= ['99'];
var funcion_Informatica= ['99'];
var funcion_Coordinador= ['1','2','3','4','5','6','7','8','9'];

function cambia_prov(){
    //tomamos el valor del select funcion elegido
    var dpt 
    dpt = document.getElementById('funcion').value 
    mis_funciones = acentos(dpt)

    // verificamos si el sector está definido

    if(mis_funciones!=0){
        //si estaba definido, entonces coloco las opciones del sector correspondiente. 
      	 //selecciono el array del sector adecuado 
        mis_provincias = eval("funcion_"+mis_funciones)
        //calculo el numero de provincias
        num_prov = mis_provincias.length
        //marco el número de provincias en el select 
        document.upload.prov.length = num_prov
        //para cada provincia del array, lo introduzco en el select 
        for(i=0; i<num_prov;i++){
            document.upload.prov.options[i].value = mis_provincias[i]
            document.upload.prov.options[i].text = mis_provincias[i]
        }
     } else {
         document.upload.prov.length = 1
         document.upload.prov.options[0].value= " "
        document.upload.prov.options[0].text = "Sin asignar"
     }
 
}


function acentos(dpt){
    var provincia 
    if(dpt=="Equipo1"){ provincia="Equipo1"; }
    else{
        if(dpt=="Equipo2"){ provincia="Equipo2";}
        else{
            if(dpt=="Direccion"){ provincia="Direccion";}
            else{
                if(dpt=="Informatica"){ provincia="Informatica";}
                else{
                    if(dpt=="Coordinador"){ provincia="Coordinador";}
                    else{
                        provincia = dpt;
                    }
                }
            }
        }
    }

    return provincia
}


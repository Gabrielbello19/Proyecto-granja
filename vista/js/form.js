document.addEventListener("DOMContentLoaded", function(e){
    
    // limitar la cantidad de decimales de un campo
    
    var fields = [
        {field : document.querySelector('#inputPeso'), decimals : 1}
    ];    

    fields.forEach(function (row){
        if (row.field != null){
            row.field.addEventListener('focusout', function(event) {
    
                // acota a dos decimales
                let value = Math.floor(parseFloat(this.value) * (10**row.decimals)) / (10**row.decimals);
    
                this.value = value;
            });
        }
    });

    // aparecer o desaparecer in input en base a un check

    var fields2 = [
        {
            field : document.querySelector('#yoCreeRep'),
            target: '#yoCreeRep_t',
            inverse : true
        }
    ];

    fields2.forEach(function (row){
        if(row.field != null){

            let actualizar_por_checkbox = ()=> {

                let checked = row.field.checked? true : false;
                checked = row.inverse? !checked : checked;
    
                let target = document.querySelector(row.target);
    
                if (checked){
                    target.removeAttribute('disabled');
                }
                else {
                    target.setAttribute('disabled', '');
                    target.value = '';
                }
            }

            // forzar el actualizado una vez cargar
            actualizar_por_checkbox();

            row.field.addEventListener('change', function(event) {
                // actualizar cada vez que presiona el check
                actualizar_por_checkbox();
            });
        }
    });

});
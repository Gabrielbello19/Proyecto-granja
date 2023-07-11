document.addEventListener("DOMContentLoaded", function(e){
    var fields = [
        {field : document.querySelector('#inputPeso'), decimals : 1}
    ];    

    fields.forEach(function (row){
        row.field.addEventListener('focusout', function(event) {

            // acota a dos decimales
            let value = Math.floor(parseFloat(this.value) * (10**row.decimals)) / (10**row.decimals);

            this.value = value;
        });
    });
});
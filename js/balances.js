$(document).ready(function () {

    //lenarDatosModal

    $('#btnAgregarConcepto').click(function () {


        var tipo = $("input:radio[name ='radioBalance']:checked").val();
        var concepto = $('#txtConcepto').val();
        var monto = $('#txtCantidad').val();
        if (monto != "" && concepto != "") {

            $.ajax({
                url: 'insertarBalance.php',
                type: 'post',
                data: {
                    tipo: tipo,
                    monto: monto,
                    concepto: concepto
                },
                dataType: 'json',
                success: function (response) {
                    window.location = 'balance.php';
                }
            });
        }
        else {
            $('#mensajeError').css('top', '20px').css('right', '10px').css('position', 'absolute').find('.modal-cuerpo').text('Debes ingresar monto y concepto').end().modal({
                fadeDuration: 200,
                fadeDelay: 1.75
            });
        }

    });



    $('#fechaIni').on('change', function () {
        //cambio la fecha de inicio
        limpiar();

        var fechaIni = $('#fechaIni').val();
        var fechaFin = $('#fechaFin').val();

        $.ajax({
            url: 'obtenerBalance.php',
            type: 'post',
            data: {
                fechaIni: fechaIni,
                fechaFin: fechaFin
            },
            dataType: 'json',
            success: function (balances) {
                $("#tablaIngresos").empty();
                $("#tablaEgresos").empty();
                $('#fechasBalance').text(balances.fechaIniTexto +' - '+balances.fechaFinTexto);

                incomes = [];
                outcomes = [];

               var  ingresos=0;
               var  egresos=0

                balances.results.forEach((balance) => {
                    if (balance.type === "income") {
                        incomes.push(balance.amount);
                        ingresos= ingresos + balance.amount;


                        var markup = "<tr><td>"+balance.concept+"</td><td>" + balance.amount + "</td></tr>";
                        $('#tablaIngresos').append(markup);
                    
                

                    }
                    else {
                        outcomes.push(balance.amount);
                        egresos= egresos + balance.amount;
                        var markup = "<tr><td>"+balance.concept+"</td><td>" + balance.amount + "</td></tr>";
                        $('#tablaEgresos').append(markup);
                    }
                });
                egresos=egresos.toFixed(2);
                ingresos=ingresos.toFixed(2);
                $('#totalIngresos').text('$ '+numberWithCommas(ingresos));
                $('#totalEgresos').text('$ '+numberWithCommas(egresos));
              
                var cantidad= balances.results.length;

                for (i = 0; i < cantidad; i++) {
                    var income = incomes[i];
                    var outcome= outcomes[i];
                    agregaData(i,income,outcome);

                  } 

            }
        });



    });



    $('#fechaFin').on('change', function () {
        //cambio la fecha de inicio
        limpiar();

        var fechaIni = $('#fechaIni').val();
        var fechaFin = $('#fechaFin').val();

        $.ajax({
            url: 'obtenerBalance.php',
            type: 'post',
            data: {
                fechaIni: fechaIni,
                fechaFin: fechaFin
            },
            dataType: 'json',
            success: function (balances) {
                $("#tablaIngresos").empty();
                $("#tablaEgresos").empty();
                $('#fechasBalance').text(balances.fechaIniTexto +' - '+balances.fechaFinTexto);

                incomes = [];
                outcomes = [];

               var  ingresos=0;
               var  egresos=0

                balances.results.forEach((balance) => {
                    if (balance.type === "income") {
                        incomes.push(balance.amount);
                        ingresos= ingresos + balance.amount;


                        var markup = "<tr><td>"+balance.concept+"</td><td>" + balance.amount + "</td></tr>";
                        $('#tablaIngresos').append(markup);
                    
                

                    }
                    else {
                        outcomes.push(balance.amount);
                        egresos= egresos + balance.amount;
                        var markup = "<tr><td>"+balance.concept+"</td><td>" + balance.amount + "</td></tr>";
                        $('#tablaEgresos').append(markup);
                    }
                });
                egresos=egresos.toFixed(2);
                ingresos=ingresos.toFixed(2);
                $('#totalIngresos').text('$ '+numberWithCommas(ingresos));
                $('#totalEgresos').text('$ '+numberWithCommas(egresos));
              
                var cantidad= balances.results.length;

                for (i = 0; i < cantidad; i++) {
                    var income = incomes[i];
                    var outcome= outcomes[i];
                    agregaData(i,income,outcome);

                  } 

            }
        });



    });

    function numberWithCommas(x) {
        return x.toString().replace(/\B(?<!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
    }


    function limpiar() {
        myChart.data.labels = [];
        myChart.data.datasets.forEach((dataset) => {
            dataset.data = [];
        });
        myChart.update();
    }


    function agregaData(label, income, outcome) {

        if (typeof income !== 'undefined' || typeof outcome !== 'undefined')
        myChart.data.labels.push(label);
        
        
        myChart.data.datasets[0].data.push(income);
        

        myChart.data.datasets[1].data.push(outcome);

        myChart.update();
    }

   


});


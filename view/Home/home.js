function init(){

}

$(document).ready(function(){
    var usu_id = $('#user_idx').val();

    /* TODO: Llenar graficos segun rol  */
    if ( $('#rol_idx').val() == 1){
        $.post("../../controller/usuario.php?op=total", {usu_id:usu_id}, function (data) {
            data = JSON.parse(data);
            $('#lbltotal').html(data.TOTAL);
        }); 

        $.post("../../controller/usuario.php?op=totalabierto", {usu_id:usu_id}, function (data) {
            data = JSON.parse(data);
            $('#lbltotalabierto').html(data.TOTAL);
        });

        $.post("../../controller/usuario.php?op=totalcerrado", {usu_id:usu_id}, function (data) {
            data = JSON.parse(data);
            $('#lbltotalcerrado').html(data.TOTAL);
        });


        $.post("../../controller/usuario.php?op=grafico", {usu_id:usu_id},function (data) {
            data = JSON.parse(data);

            new Morris.Bar({
                element: 'divgrafico',
                data: data,
                xkey: 'nom',
                ykeys: ['total'],
                labels: ['Value'],
                barColors: ["#1AB244"], 
            });
        }); 

    }else{
        $.post("../../controller/ticket.php?op=total",function (data) {
            data = JSON.parse(data);
            $('#lbltotal').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=totalabierto",function (data) {
            data = JSON.parse(data);
            $('#lbltotalabierto').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=totalcerrado", function (data) {
            data = JSON.parse(data);
            $('#lbltotalcerrado').html(data.TOTAL);
        });

        
        $.post("../../controller/ticket.php?op=soporte1", function (data) {
            data = JSON.parse(data);
            $('#soporte1').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=soporte2", function (data) {
            data = JSON.parse(data);
            $('#soporte2').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=soporte3", function (data) {
            data = JSON.parse(data);
            $('#soporte3').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=soporte4", function (data) {
            data = JSON.parse(data);
            $('#soporte4').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=soporte5", function (data) {
            data = JSON.parse(data);
            $('#soporte5').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=soporte6", function (data) {
            data = JSON.parse(data);
            $('#soporte6').html(data.TOTAL);
        });

        $.post("../../controller/ticket.php?op=grafico",function (data) {
            data = JSON.parse(data);

            new Morris.Bar({
                element: 'divgrafico',
                data: data,
                xkey: 'nom',
                ykeys: ['total'],
                labels: ['Value']
            });
        });

    }
});

init();
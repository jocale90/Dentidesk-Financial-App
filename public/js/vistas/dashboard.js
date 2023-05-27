$(document).ready(function () {

let selector = 0;

$('#over80').click(function(){
    let  selector = 1;
    getsemaforo(selector);
});

$('#over50').click(function(){
    let selector  = 2;
    getsemaforo(selector);
});

$('#down50').click(function(){
    let selector  = 3;
    getsemaforo(selector);
});            

function getsemaforo(selector){

    let id = selector;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $.ajax({
        type:'POST',
        url:'{{ route("obtsemaforo") }}',
        data:{selector:selector},
        beforeSend:function()
            {
                $("#tlb_principal").html("");
            },
        complete:function()
            {
                
            }, 
        success:function(data){
            $("#tlb_principal").html("<h1>ok</h1>");
                
        },
        error: function(response) {
                
        }
    });
};





        
        /*     $('#cambiarestado').change(function(){

            let ident  = $("#cambiarestado").val();
                alert(ident);

                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    }
                });

                $.ajax({
                    type:'POST',
                    url:"{{ route('dashboard.update') }}",
                    data:{ident:ident},
                    beforeSend:function()
                        {
                            alert("get beforesend");
                        },
                    complete:function()
                        {
                            alert("get complete");
                        }, 
                    success:function(data){

                            alert("get success");
                    },
                    error: function(response) {
                            alert("get error");
                  }
                });
    }); */
    
    






});

        


  

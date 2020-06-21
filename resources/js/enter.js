//  show conditionaly signup form for type of user
$(document).ready(function(){
    $('.userType').change(function(e){
        let id = e.target.value;
        if(id == 3){
            $(".wholesaler").removeClass('d-none');
        }
        else if(id == 2) {
            $(".wholesaler").addClass('d-none');
        }
    })
})

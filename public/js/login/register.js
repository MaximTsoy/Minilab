/**
 * Created by MiniRaptor on 31.07.2016.
 */
var validate = function(){
    this.input_type = 'login';
    this.validate = function(type){
        switch (type){
            case 'login':

                break;

        }
    }
};

$(document).ready(function(){
    $("input[type = 'submit']").click(function(){
        validate()
    });
});
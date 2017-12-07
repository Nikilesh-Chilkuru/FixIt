 //  $(document).ready(function(){



 //         easy_questions = [];
 //         medium_questions = [];
 //         hard_questions = [];
 //         var score = 0;

 //        $.ajax({
 //              url      : 'includes/.php',
 //              method   : 'post',
 //              data     : {id: 6},
 //              datatype : "JSON",
 //              success  : function(data){
 //                            // now update user record in table
 //                    console.log(data);
 //                    var itemData = $.parseJSON(data);

 //                    $.each(itemData, function(index) {
 //                        var que_id = parseInt(itemData[index].question_id);
 //                        var que_level = itemData[index].level;


 //                        if(que_level === "easy"){
 //                          easy_questions.push(que_id);
 //                        }
 //                        else if(que_level === "medium"){
 //                            medium_questions.push(que_id);
 //                        }
 //                        else{
 //                            hard_questions.push(que_id);
 //                        }

 //                     });


 //                    for (var i = easy_questions.length - 1; i > 0; i--) {
 //                        var j = Math.floor(Math.random() * (i + 1));
 //                        var temp = easy_questions[i];
 //                        easy_questions[i] = easy_questions[j];
 //                        easy_questions[j] = temp;
 //                    }

 //                    for (var i = medium_questions.length - 1; i > 0; i--) {
 //                        var j = Math.floor(Math.random() * (i + 1));
 //                        var temp = medium_questions[i];
 //                        medium_questions[i] = medium_questions[j];
 //                        medium_questions[j] = temp;
 //                    }


 //                    for (var i = hard_questions.length - 1; i > 0; i--) {
 //                        var j = Math.floor(Math.random() * (i + 1));
 //                        var temp = hard_questions[i];
 //                        hard_questions[i] = hard_questions[j];
 //                        hard_questions[j] = temp;
 //                    }



 //                    console.log(easy_questions.length );
 //                    console.log(medium_questions.length );
 //                    console.log(hard_questions.length );


 //              },
 //              async: false // <- this turns it into synchronous
 //          });
 

 // });


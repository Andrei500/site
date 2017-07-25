//Быстрый расчет
function quikly_calc(from, to, quikly_summ) {
    
    if ($("#quikly_summ").val()!='') {     
        $("#quikly_summ").val(parseInt($("#quikly_summ").val(), 10)); 
    }

    var quikly_summ=parseInt(quikly_summ, 10);
     fromto=from+to;
    
        if ((10 < fromto && fromto < 12) || (32 < fromto && fromto < 34)) {

            if (1 < quikly_summ && quikly_summ <= 2000) {
                $("#result").html('150 р'); 
            }
            if (2001 < quikly_summ && quikly_summ <= 5000) {
                $("#result").html('250 р'); 
            }
            if (5001 < quikly_summ && quikly_summ <= 10000) {
                $("#result").html('300 р'); 
            }
            if (10001 < quikly_summ && quikly_summ <= 20000) {
                $("#result").html('350 р'); 
            }
            if (20001 < quikly_summ && quikly_summ <= 30000) {
                $("#result").html('400 р'); 
            }
            if (30001 < quikly_summ && quikly_summ <= 40000) {
                $("#result").html('450 р'); 
            }
            if (40001 < quikly_summ && quikly_summ <= 50000) {
                $("#result").html('500 р'); 
            }
            if (50001 < quikly_summ && quikly_summ <= 60000) {
                $("#result").html('600 р'); 
            }
            if (60001 < quikly_summ && quikly_summ <= 70000) {
                $("#result").html('700 р'); 
            }
            if (70001 < quikly_summ && quikly_summ <= 80000) {
                $("#result").html('800 р'); 
            }
            if (80001 < quikly_summ && quikly_summ <= 90000) {
                $("#result").html('900 р'); 
            }
            if (90001 < quikly_summ && quikly_summ <= 100000) {
                $("#result").html('1000 р'); 
            }
            if (quikly_summ > 100000) {
                $("#result").html('Превышен лимит!'); 
            }
        }
    
    
        if ((11 < fromto && fromto < 13) || (20 < fromto && fromto < 22)) {
      
                if (1 < quikly_summ && quikly_summ <= 2000) {
                    $("#result").html('100 р'); 
                }
                if (2001 < quikly_summ && quikly_summ <= 5000) {
                    $("#result").html('150 р'); 
                }
                if (5001 < quikly_summ && quikly_summ <= 10000) {
                    $("#result").html('200 р'); 
                }
                if (10001 < quikly_summ && quikly_summ <= 20000) {
                    $("#result").html('300 р'); 
                }
                if (20001 < quikly_summ && quikly_summ <= 30000) {
                    $("#result").html('400 р'); 
                }
                if (30001 < quikly_summ && quikly_summ <= 40000) {
                    $("#result").html('450 р'); 
                }
                if (40001 < quikly_summ && quikly_summ <= 50000) {
                    $("#result").html('500 р'); 
                }
                if (50001 < quikly_summ && quikly_summ <= 60000) {
                    $("#result").html('600 р'); 
                }
                if (60001 < quikly_summ && quikly_summ <= 70000) {
                    $("#result").html('700 р'); 
                }
                if (70001 < quikly_summ && quikly_summ <= 80000) {
                    $("#result").html('800 р'); 
                }
                if (80001 < quikly_summ && quikly_summ <= 90000) {
                    $("#result").html('900 р'); 
                }
                if (90001 < quikly_summ && quikly_summ <= 100000) {
                    $("#result").html('1000 р'); 
                }
                if (quikly_summ > 100000) {
                    $("#result").html('Превышен лимит!'); 
                }

        }
    
        if ((12 < fromto && fromto < 14) || (30 < fromto && fromto < 32)) {
      
                if (1 < quikly_summ && quikly_summ <= 2000) {
                    $("#result").html('150 р'); 
                }
                if (2001 < quikly_summ && quikly_summ <= 5000) {
                    $("#result").html('250 р'); 
                }
                if (5001 < quikly_summ && quikly_summ <= 10000) {
                    $("#result").html('300 р'); 
                }
                if (10001 < quikly_summ && quikly_summ <= 20000) {
                    $("#result").html('400 р'); 
                }
                if (20001 < quikly_summ && quikly_summ <= 30000) {
                    $("#result").html('600 р'); 
                }
                if (30001 < quikly_summ && quikly_summ <= 40000) {
                    $("#result").html('700 р'); 
                }
                if (40001 < quikly_summ && quikly_summ <= 50000) {
                    $("#result").html('800 р'); 
                }
                if (50001 < quikly_summ && quikly_summ <= 60000) {
                    $("#result").html('900 р'); 
                }
                if (60001 < quikly_summ && quikly_summ <= 70000) {
                    $("#result").html('1000 р'); 
                }
                if (70001 < quikly_summ && quikly_summ <= 80000) {
                    $("#result").html('1100 р'); 
                }
                if (80001 < quikly_summ && quikly_summ <= 90000) {
                    $("#result").html('1200 р'); 
                }
                if (90001 < quikly_summ && quikly_summ <= 100000) {
                    $("#result").html('1300 р'); 
                }
                if (quikly_summ > 100000) {
                    $("#result").html('Превышен лимит!'); 
                }

        }
       
        if ((13 < fromto && fromto < 15) || (40 < fromto && fromto < 42)) {
      
                if (1 < quikly_summ && quikly_summ <= 2000) {
                    $("#result").html('100 р'); 
                }
                if (2001 < quikly_summ && quikly_summ <= 5000) {
                    $("#result").html('150 р'); 
                }
                if (5001 < quikly_summ && quikly_summ <= 10000) {
                    $("#result").html('200 р'); 
                }
                if (10001 < quikly_summ && quikly_summ <= 20000) {
                    $("#result").html('300 р'); 
                }
                if (20001 < quikly_summ && quikly_summ <= 30000) {
                    $("#result").html('400 р'); 
                }
                if (30001 < quikly_summ && quikly_summ <= 40000) {
                    $("#result").html('500 р'); 
                }
                if (40001 < quikly_summ && quikly_summ <= 50000) {
                    $("#result").html('600 р'); 
                }
                if (50001 < quikly_summ && quikly_summ <= 60000) {
                    $("#result").html('700 р'); 
                }
                if (60001 < quikly_summ && quikly_summ <= 70000) {
                    $("#result").html('800 р'); 
                }
                if (70001 < quikly_summ && quikly_summ <= 80000) {
                    $("#result").html('900 р'); 
                }
                if (80001 < quikly_summ && quikly_summ <= 90000) {
                    $("#result").html('1000 р'); 
                }
                if (90001 < quikly_summ && quikly_summ <= 100000) {
                    $("#result").html('1100 р'); 
                }
                if (quikly_summ > 100000) {
                    $("#result").html('Превышен лимит!'); 
                }

        }
    
            if ((21 < fromto && fromto < 23) || (43 < fromto && fromto < 45)) {
      
                if (1 < quikly_summ && quikly_summ <= 2000) {
                    $("#result").html('150 р'); 
                }
                if (2001 < quikly_summ && quikly_summ <= 5000) {
                    $("#result").html('250 р'); 
                }
                if (5001 < quikly_summ && quikly_summ <= 10000) {
                    $("#result").html('300 р'); 
                }
                if (10001 < quikly_summ && quikly_summ <= 20000) {
                    $("#result").html('350 р'); 
                }
                if (20001 < quikly_summ && quikly_summ <= 30000) {
                    $("#result").html('400 р'); 
                }
                if (30001 < quikly_summ && quikly_summ <= 40000) {
                    $("#result").html('450 р'); 
                }
                if (40001 < quikly_summ && quikly_summ <= 50000) {
                    $("#result").html('500 р'); 
                }
                if (50001 < quikly_summ && quikly_summ <= 60000) {
                    $("#result").html('600 р'); 
                }
                if (60001 < quikly_summ && quikly_summ <= 70000) {
                    $("#result").html('700 р'); 
                }
                if (70001 < quikly_summ && quikly_summ <= 80000) {
                    $("#result").html('800 р'); 
                }
                if (80001 < quikly_summ && quikly_summ <= 90000) {
                    $("#result").html('900 р'); 
                }
                if (90001 < quikly_summ && quikly_summ <= 100000) {
                    $("#result").html('1000 р'); 
                }
                if (quikly_summ > 100000) {
                    $("#result").html('Превышен лимит!'); 
                }

            }
    
            if ((22 < fromto && fromto < 24) || (31 < fromto && fromto < 33)) {
      
                if (1 < quikly_summ && quikly_summ <= 2000) {
                    $("#result").html('250 р'); 
                }
                if (2001 < quikly_summ && quikly_summ <= 5000) {
                    $("#result").html('400 р'); 
                }
                if (5001 < quikly_summ && quikly_summ <= 10000) {
                    $("#result").html('500 р'); 
                }
                if (10001 < quikly_summ && quikly_summ <= 20000) {
                    $("#result").html('700 р'); 
                }
                if (20001 < quikly_summ && quikly_summ <= 30000) {
                    $("#result").html('1000 р'); 
                }
                if (30001 < quikly_summ && quikly_summ <= 40000) {
                    $("#result").html('1150 р'); 
                }
                if (40001 < quikly_summ && quikly_summ <= 50000) {
                    $("#result").html('1300 р'); 
                }
                if (50001 < quikly_summ && quikly_summ <= 60000) {
                    $("#result").html('1500 р'); 
                }
                if (60001 < quikly_summ && quikly_summ <= 70000) {
                    $("#result").html('1700 р'); 
                }
                if (70001 < quikly_summ && quikly_summ <= 80000) {
                    $("#result").html('1900 р'); 
                }
                if (80001 < quikly_summ && quikly_summ <= 90000) {
                    $("#result").html('2100 р'); 
                }
                if (90001 < quikly_summ && quikly_summ <= 100000) {
                    $("#result").html('2300 р'); 
                }
                if (quikly_summ > 100000) {
                    $("#result").html('Превышен лимит!'); 
                }

        }
    
            if ((23 < fromto && fromto < 25) || (41 < fromto && fromto < 43)) {
      
                if (1 < quikly_summ && quikly_summ <= 2000) {
                    $("#result").html('200 р'); 
                }
                if (2001 < quikly_summ && quikly_summ <= 5000) {
                    $("#result").html('300 р'); 
                }
                if (5001 < quikly_summ && quikly_summ <= 10000) {
                    $("#result").html('400 р'); 
                }
                if (10001 < quikly_summ && quikly_summ <= 20000) {
                    $("#result").html('600 р'); 
                }
                if (20001 < quikly_summ && quikly_summ <= 30000) {
                    $("#result").html('800 р'); 
                }
                if (30001 < quikly_summ && quikly_summ <= 40000) {
                    $("#result").html('950 р'); 
                }
                if (40001 < quikly_summ && quikly_summ <= 50000) {
                    $("#result").html('1100 р'); 
                }
                if (50001 < quikly_summ && quikly_summ <= 60000) {
                    $("#result").html('1300 р'); 
                }
                if (60001 < quikly_summ && quikly_summ <= 70000) {
                    $("#result").html('1500 р'); 
                }
                if (70001 < quikly_summ && quikly_summ <= 80000) {
                    $("#result").html('1700 р'); 
                }
                if (80001 < quikly_summ && quikly_summ <= 90000) {
                    $("#result").html('1900 р'); 
                }
                if (90001 < quikly_summ && quikly_summ <= 100000) {
                    $("#result").html('2100 р'); 
                }
                if (quikly_summ > 100000) {
                    $("#result").html('Превышен лимит!'); 
                }

        }
    
        if ((33 < fromto && fromto < 35) || (42 < fromto && fromto < 44)) {
      
                if (1 < quikly_summ && quikly_summ <= 2000) {
                    $("#result").html('100 р'); 
                }
                if (2001 < quikly_summ && quikly_summ <= 5000) {
                    $("#result").html('150 р'); 
                }
                if (5001 < quikly_summ && quikly_summ <= 10000) {
                    $("#result").html('200 р'); 
                }
                if (10001 < quikly_summ && quikly_summ <= 20000) {
                    $("#result").html('300 р'); 
                }
                if (20001 < quikly_summ && quikly_summ <= 30000) {
                    $("#result").html('400 р'); 
                }
                if (30001 < quikly_summ && quikly_summ <= 40000) {
                    $("#result").html('450 р'); 
                }
                if (40001 < quikly_summ && quikly_summ <= 50000) {
                    $("#result").html('500 р'); 
                }
                if (50001 < quikly_summ && quikly_summ <= 60000) {
                    $("#result").html('600 р'); 
                }
                if (60001 < quikly_summ && quikly_summ <= 70000) {
                    $("#result").html('700 р'); 
                }
                if (70001 < quikly_summ && quikly_summ <= 80000) {
                    $("#result").html('800 р'); 
                }
                if (80001 < quikly_summ && quikly_summ <= 90000) {
                    $("#result").html('900 р'); 
                }
                if (90001 < quikly_summ && quikly_summ <= 100000) {
                    $("#result").html('1000 р'); 
                }
                if (quikly_summ > 100000) {
                    $("#result").html('Превышен лимит!'); 
                }

        }
    
            if (fromto == 15){
      
                if (1 < quikly_summ && quikly_summ <= 2000) {
                    $("#result").html('100 р'); 
                }
                if (2001 < quikly_summ && quikly_summ <= 5000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+150, 10)+' р'); 
                }
                if (5001 < quikly_summ && quikly_summ <= 10000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+200, 10)+' р'); 
                }
                if (10001 < quikly_summ && quikly_summ <= 20000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+300, 10)+' р'); 
                }
                if (20001 < quikly_summ && quikly_summ <= 30000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+400, 10)+' р'); 
                }
                if (30001 < quikly_summ && quikly_summ <= 40000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+500, 10)+' р'); 
                }
                if (40001 < quikly_summ && quikly_summ <= 50000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+600, 10)+' р'); 
                }
                if (50001 < quikly_summ && quikly_summ <= 60000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+700, 10)+' р'); 
                }
                if (60001 < quikly_summ && quikly_summ <= 70000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+800, 10)+' р'); 
                }
                if (70001 < quikly_summ && quikly_summ <= 80000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+900, 10)+' р'); 
                }
                if (80001 < quikly_summ && quikly_summ <= 90000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+1000, 10)+' р');  
                }
                if (90001 < quikly_summ && quikly_summ <= 100000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+1100, 10)+' р'); 
                }
                if (quikly_summ > 100000) {
                    $("#result").html('Превышен лимит!'); 
                }

        }
    if (fromto == 25){
      
                if (1 < quikly_summ && quikly_summ <= 2000) {
                    $("#result").html('200 р'); 
                }
                if (2001 < quikly_summ && quikly_summ <= 5000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+300, 10)+' р'); 
                }
                if (5001 < quikly_summ && quikly_summ <= 10000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+400, 10)+' р'); 
                }
                if (10001 < quikly_summ && quikly_summ <= 20000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+600, 10)+' р'); 
                }
                if (20001 < quikly_summ && quikly_summ <= 30000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+800, 10)+' р'); 
                }
                if (30001 < quikly_summ && quikly_summ <= 40000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+950, 10)+' р'); 
                }
                if (40001 < quikly_summ && quikly_summ <= 50000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+1100, 10)+' р'); 
                }
                if (50001 < quikly_summ && quikly_summ <= 60000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+1300, 10)+' р'); 
                }
                if (60001 < quikly_summ && quikly_summ <= 70000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+1500, 10)+' р'); 
                }
                if (70001 < quikly_summ && quikly_summ <= 80000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+1700, 10)+' р'); 
                }
                if (80001 < quikly_summ && quikly_summ <= 90000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+1900, 10)+' р');  
                }
                if (90001 < quikly_summ && quikly_summ <= 100000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+2100, 10)+' р'); 
                }
                if (quikly_summ > 100000) {
                    $("#result").html('Превышен лимит!'); 
                }

        }
    if (fromto == 35){
      
                if (1 < quikly_summ && quikly_summ <= 2000) {
                    $("#result").html('100 р'); 
                }
                if (2001 < quikly_summ && quikly_summ <= 5000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+150, 10)+' р'); 
                }
                if (5001 < quikly_summ && quikly_summ <= 10000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+200, 10)+' р'); 
                }
                if (10001 < quikly_summ && quikly_summ <= 20000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+300, 10)+' р'); 
                }
                if (20001 < quikly_summ && quikly_summ <= 30000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+400, 10)+' р'); 
                }
                if (30001 < quikly_summ && quikly_summ <= 40000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+450, 10)+' р'); 
                }
                if (40001 < quikly_summ && quikly_summ <= 50000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+500, 10)+' р'); 
                }
                if (50001 < quikly_summ && quikly_summ <= 60000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+600, 10)+' р'); 
                }
                if (60001 < quikly_summ && quikly_summ <= 70000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+700, 10)+' р'); 
                }
                if (70001 < quikly_summ && quikly_summ <= 80000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+800, 10)+' р'); 
                }
                if (80001 < quikly_summ && quikly_summ <= 90000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+900, 10)+' р');  
                }
                if (90001 < quikly_summ && quikly_summ <= 100000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+1000, 10)+' р'); 
                }
                if (quikly_summ > 100000) {
                    $("#result").html('Превышен лимит!'); 
                }

        }
    if (fromto == 45){
      
                if (1 < quikly_summ && quikly_summ <= 2000) {
                    $("#result").html('100 р'); 
                }
                if (2001 < quikly_summ && quikly_summ <= 5000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+150, 10)+' р'); 
                }
                if (5001 < quikly_summ && quikly_summ <= 10000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+200, 10)+' р'); 
                }
                if (10001 < quikly_summ && quikly_summ <= 20000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+300, 10)+' р'); 
                }
                if (20001 < quikly_summ && quikly_summ <= 30000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+400, 10)+' р'); 
                }
                if (30001 < quikly_summ && quikly_summ <= 40000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+450, 10)+' р'); 
                }
                if (40001 < quikly_summ && quikly_summ <= 50000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+500, 10)+' р'); 
                }
                if (50001 < quikly_summ && quikly_summ <= 60000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+600, 10)+' р'); 
                }
                if (60001 < quikly_summ && quikly_summ <= 70000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+700, 10)+' р'); 
                }
                if (70001 < quikly_summ && quikly_summ <= 80000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+800, 10)+' р'); 
                }
                if (80001 < quikly_summ && quikly_summ <= 90000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+900, 10)+' р');  
                }
                if (90001 < quikly_summ && quikly_summ <= 100000) {
                    $("#result").html(parseInt(Math.ceil((quikly_summ*0.01)/50)*50+1000, 10)+' р'); 
                }
                if (quikly_summ > 100000) {
                    $("#result").html('Превышен лимит!'); 
                }

        }
}
//Конец / быстрый расчет


//Электронные переводы (Получить реквизиты)
function change_what(val) {
    
    if ($("#what").val() == '4') {
        $("#block_what").css('width', '49%');
        $("#name_other_bank").css('display', 'block');
        $("#card_number").css('display', 'none');
        $("#osb").css('display', 'none');
        return;
    }
    
    if ($("#what").val() == '2') {
        $("#block_what").css('width', '49%');
        $("#card_number").css('display', 'block');
        $("#name_other_bank").css('display', 'none');
        $("#osb").css('display', 'none');
        return;
    }
    
    if ($("#what").val() == '1') {
        $("#block_what").css('width', '49%');
        $("#osb").css('display', 'block');
        $("#name_other_bank").css('display', 'none');
        $("#card_number").css('display', 'none');
        return;
    }
    
    if (($("#what").val() != '4') || ($("#what").val() != '2') || ($("#what").val() != '1')) {
        $("#block_what").css('width', '100%');
        $("#card_number").css('display', 'none');
        $("#name_other_bank").css('display', 'none');
        $("#osb").css('display', 'none');
        return;
    }
}

function change_summ(region, summ)
{
    
if ($("#user_summ").val()!='')
{     
$("#user_summ").val(parseInt($("#user_summ").val(),10)); 
 }
    
var summ=parseInt(summ,10);

if (region<13 || region == 16 || region == 18) {
    
if (1 < summ && summ<=2000) {

    var rez = parseInt(summ-100, 10);
    if (rez <= 0) {
        rez = 0;
    }
    
$("#total").html(rez+' руб.'); 
$("#window_summ").val(rez);   
$("#sb_proc").val(parseInt(Math.round(summ*0.01, 10))+' руб.');    
$("#our_proc").val(parseInt(Math.round(100-summ*0.01, 10))+' руб.');  

}

if (2001 <= summ && summ<=5000)
{
    
$("#total").html(parseInt(Math.floor((summ-summ*0.05)/50)*50, 10)+' руб.'); 
$("#window_summ").val(parseInt(Math.floor((summ-summ*0.05)/50)*50, 10)+' руб.');
$("#sb_proc").val(parseInt(Math.round(summ*0.01, 10))+' руб.');    
$("#our_proc").val(parseInt(Math.round(summ*0.04, 10))+' руб.');   
    
$("#okrug").val(parseInt(
                    Math.round(
                        summ
                        -(parseInt(Math.floor((summ-summ*0.05)/50)*50, 10))
                        -(parseInt(Math.round(summ*0.01, 10)))
                        -(parseInt(Math.round(summ*0.04, 10)))
                              ), 10
                        )+' руб.'
               );    
}

if (5001 <= summ && summ<=20000)
{

$("#total").html(parseInt(Math.floor((summ-summ*0.03)/50)*50, 10)+' руб.'); 
$("#window_summ").val(parseInt(Math.floor((summ-summ*0.03)/50)*50, 10)+' руб.');
$("#sb_proc").val(parseInt(Math.round(summ*0.01, 10))+' руб.');    
$("#our_proc").val(parseInt(Math.round(summ*0.02, 10))+' руб.');   
    
$("#okrug").val(parseInt(
                    Math.round(
                        summ
                        -(parseInt(Math.floor((summ-summ*0.03)/50)*50, 10))
                        -(parseInt(Math.round(summ*0.01, 10)))
                        -(parseInt(Math.round(summ*0.02, 10)))
                              ), 10
                        )+' руб.'
               );   
}

if (20001 <= summ && summ<=50000)
{

$("#total").html(parseInt(Math.floor((summ-summ*0.025)/50)*50, 10)+' руб.');
$("#window_summ").val(parseInt(Math.floor((summ-summ*0.025)/50)*50, 10)+' руб.');
$("#sb_proc").val(parseInt(Math.round(summ*0.01, 10))+' руб.');    
$("#our_proc").val(parseInt(Math.round(summ*0.015, 10))+' руб.');   
    
$("#okrug").val(parseInt(
                    Math.round(
                        summ
                        -(parseInt(Math.floor((summ-summ*0.025)/50)*50, 10))
                        -(parseInt(Math.round(summ*0.01, 10)))
                        -(parseInt(Math.round(summ*0.015, 10)))
                              ), 10
                        )+' руб.'
               );   
}

if (50001 <= summ && summ<=100000){
    
$("#total").html(parseInt(Math.floor((summ-summ*0.023)/50)*50, 10)+' руб.');  
$("#window_summ").val(parseInt(Math.floor((summ-summ*0.023)/50)*50, 10)+' руб.');
$("#sb_proc").val(parseInt(Math.round(summ*0.01, 10))+' руб.');    
$("#our_proc").val(parseInt(Math.round(summ*0.013, 10))+' руб.');   
    
$("#okrug").val(parseInt(
                    Math.round(
                        summ
                        -(parseInt(Math.floor((summ-summ*0.023)/50)*50, 10))
                        -(parseInt(Math.round(summ*0.01, 10)))
                        -(parseInt(Math.round(summ*0.013, 10)))
                              ), 10
                        )+' руб.'
               );    
}

if (summ>100000){
    
$("#total").html('Превышен лимит!');  
}

}
else {
    
if (1 < summ && summ<=2000) {


    var rez = parseInt(summ-200, 10);
    if (rez <= 0) {
        rez = 0;
    }
    
$("#total").html(rez+' руб.'); 
$("#window_summ").val(rez);   
$("#sb_proc").val(parseInt(Math.round(summ*0.01, 10))+' руб.');    
$("#our_proc").val(parseInt(Math.round(200-summ*0.01, 10))+' руб.');  
}

if (2001 <= summ && summ<=5000)
{
    
$("#total").html(parseInt(Math.floor((summ-summ*0.07)/50)*50, 10)+' руб.'); 
$("#window_summ").val(parseInt(Math.floor((summ-summ*0.07)/50)*50, 10)+' руб.');
$("#sb_proc").val(parseInt(Math.round(summ*0.01, 10))+' руб.');    
$("#our_proc").val(parseInt(Math.round(summ*0.06, 10))+' руб.');   
    
$("#okrug").val(parseInt(
                    Math.round(
                        summ
                        -(parseInt(Math.floor((summ-summ*0.07)/50)*50, 10))
                        -(parseInt(Math.round(summ*0.01, 10)))
                        -(parseInt(Math.round(summ*0.06, 10)))
                              ), 10
                        )+' руб.'
               );   
}

if (5001 <= summ && summ<=20000)
{

$("#total").html(parseInt(Math.floor((summ-summ*0.045)/50)*50, 10)+' руб.'); 
$("#window_summ").val(parseInt(Math.floor((summ-summ*0.045)/50)*50, 10)+' руб.');
$("#sb_proc").val(parseInt(Math.round(summ*0.01, 10))+' руб.');    
$("#our_proc").val(parseInt(Math.round(summ*0.035, 10))+' руб.');   
    
$("#okrug").val(parseInt(
                    Math.round(
                        summ
                        -(parseInt(Math.floor((summ-summ*0.045)/50)*50, 10))
                        -(parseInt(Math.round(summ*0.01, 10)))
                        -(parseInt(Math.round(summ*0.035, 10)))
                              ), 10
                        )+' руб.'
               );   
}

if (20001 <= summ && summ<=50000)
{

$("#total").html(parseInt(Math.floor((summ-summ*0.035)/50)*50, 10)+' руб.');
$("#window_summ").val(parseInt(Math.floor((summ-summ*0.035)/50)*50, 10)+' руб.');
$("#sb_proc").val(parseInt(Math.round(summ*0.01, 10))+' руб.');    
$("#our_proc").val(parseInt(Math.round(summ*0.025, 10))+' руб.');   
    
$("#okrug").val(parseInt(
                    Math.round(
                        summ
                        -(parseInt(Math.floor((summ-summ*0.035)/50)*50, 10))
                        -(parseInt(Math.round(summ*0.01, 10)))
                        -(parseInt(Math.round(summ*0.025, 10)))
                              ), 10
                        )+' руб.'
               );    
}

if (50001 <= summ && summ<=100000){
    
$("#total").html(parseInt(Math.floor((summ-summ*0.033)/50)*50, 10)+' руб.');  
$("#window_summ").val(parseInt(Math.floor((summ-summ*0.033)/50)*50, 10)+' руб.');
$("#sb_proc").val(parseInt(Math.round(summ*0.01, 10))+' руб.');    
$("#our_proc").val(parseInt(Math.round(summ*0.023, 10))+' руб.');   
    
$("#okrug").val(parseInt(
                    Math.round(
                        summ
                        -(parseInt(Math.floor((summ-summ*0.033)/50)*50, 10))
                        -(parseInt(Math.round(summ*0.01, 10)))
                        -(parseInt(Math.round(summ*0.023, 10)))
                              ), 10
                        )+' руб.'
               );   
}

if (summ>100000){
    
$("#total").html('Превышен лимит!');  
}

}
}

function data_money_trans(){
    if ($("#data_money_trans_name").val()=='')
{
    $("#data_money_trans_name").css('border', '2px solid #c20303');  
    $("#data_money_trans_name").attr('placeholder','Заполните это поле!');  
    return;
} 
    if ($("#data_money_trans_phone").val()=='')
{
    $("#data_money_trans_phone").css('border', '2px solid #c20303');   
    return;
}
    if ($("#data_money_trans_city").val()=='')
{
    $("#data_money_trans_city").css('border', '2px solid #c20303');  
    $("#data_money_trans_city").attr('placeholder','Заполните это поле!');  
    return;
} 

    var inst = $.remodal.lookup[$('[data-remodal-id=price_money_del]').data('remodal')];
    
    
$.ajax({
                 type: "POST",
                 async: false,
                 url: "http://"+window.location.hostname+"/php/send_sms.php",
                 data: $("#data_money_trans").serialize(),
                 dataType: "html",
                 success: function(data) {
                    
                    inst.close();
                    alert('В течение 5 минут придёт SMS с реквизитами.');
                    console.log(data);
                 }

             });
    
    
}


function send_form_mon()
{

if ($("#name_otp").val()=='')
{
    $("#name_otp").css('border', '2px solid #c20303');  
    $("#name_otp").attr('placeholder','Заполните это поле!');  
    return;
} 
    
if ($("#phone_otp").val()=='')
{
    $("#phone_otp").css('border', '2px solid #c20303');  
    return; 
}
    
if ($("#city_otp").val()=='')
{
    $("#city_otp").css('border', '2px solid #c20303');  
    $("#city_otp").attr('placeholder','Заполните это поле!');  
    return;
}     
    if ($("#what").val()<1)
{
    $("#what").css('border', '2px solid #c20303');  
    return;
} 
if ($("#time").val()=='')
{
    $("#time").css('border', '2px solid #c20303');  
    $("#time").attr('placeholder','Заполните это поле!');  
    return;
} 
if ($("#name_pol").val()=='')
{
    $("#name_pol").css('border', '2px solid #c20303');  
    $("#name_pol").attr('placeholder','Заполните это поле!');  
    return; 
}
 if ($("#phone_pol").val()=='')
{
    $("#phone_pol").css('border', '2px solid #c20303');  
    $("#phone_pol").attr('placeholder','Заполните это поле!');  
    return; 
}   
if ($("#user_summ").val()=='0' || $("#user_summ").val()=='')
{
  $("#user_summ").css('border', '2px solid #c20303'); 
   return; 
}
var inst = $.remodal.lookup[$('[data-remodal-id=money-trans]').data('remodal')];
    
    
$.ajax({
                 type: "POST",
                 async: false,
                 url: "http://"+window.location.hostname+"/php/send_form_mon.php",
                 data: $("#form_mon").serialize(),
                 dataType: "html",
                 success: function(data) {
                    
                    inst.close();
                    alert('Перевод успешно зарегистрирован!');
                 }

             });
}
//Конец "Получить реквизиты"


//Предварительный расчет по электронным переводам
function change_summ_one(region_one, summ_one)
{
    
if ($("#user_summ-one").val()!=''){     
    $("#user_summ-one").val(parseInt($("#user_summ-one").val(),10)); 
}
    
var summ=parseInt(summ_one,10);

if (region_one<2) {
    if (1 < summ && summ<=2000) {
        doptot=100;
    var rez = parseInt(summ-doptot, 10);
    if (rez <= 0) {
        rez = 0;
    }
        $("#total-one").html(rez+' руб.'); 
}
    
if (2001 <= summ && summ<=5000){
    $("#total-one").html(parseInt(Math.floor((summ-summ*0.05)/50)*50, 10)+' руб.'); 
}

if (5001 <= summ && summ<=20000){
    $("#total-one").html(parseInt(Math.floor((summ-summ*0.03)/50)*50, 10)+' руб.'); 
}

if (20001 <= summ && summ<=50000){
    $("#total-one").html(parseInt(Math.floor((summ-summ*0.025)/50)*50, 10)+' руб.');
}

if (50001 <= summ && summ<=100000){
    $("#total-one").html(parseInt(Math.floor((summ-summ*0.023)/50)*50, 10)+' руб.');  
}

if (summ>100000){
    $("#total-one").html('Превышен лимит!');  
}
}
    
else {
    
if (1 < summ && summ<=2000) {
        doptot=200;

    var rez = parseInt(summ-doptot, 10);
    if (rez <= 0) {
        rez = 0;
    }
    
    $("#total-one").html(rez+' руб.');  
}

if (2001 <= summ && summ<=5000){
    $("#total-one").html(parseInt(Math.floor((summ-summ*0.07)/50)*50, 10)+' руб.'); 
}

if (5001 <= summ && summ<=20000){
    $("#total-one").html(parseInt(Math.floor((summ-summ*0.045)/50)*50, 10)+' руб.'); 
}

if (20001 <= summ && summ<=50000){
    $("#total-one").html(parseInt(Math.floor((summ-summ*0.035)/50)*50, 10)+' руб.');
}

if (50001 <= summ && summ<=100000){
    $("#total-one").html(parseInt(Math.floor((summ-summ*0.033)/50)*50, 10)+' руб.');  
}

if (summ>100000){
    $("#total-one").html('Превышен лимит!');  
}
}
}
//Конец / Предварительный расчет по электронным переводам
function oooo(){
    LastTeamZero();
    LastTeamUn();
    LastTeamDeux();
    TrophyNone();
    TrophyDislpayUn();
    TrophyDislpayDeux();
    TrophyDislpayQuattre();
    
    
}





function TrophyNone(){
    if (document.querySelector('.champwin').classList.contains('zero')){
        document.getElementById('affichagetrophy').classList.add('none');
    }
}



function TrophyDislpayUn(){
    if (document.querySelector('.champwin').classList.contains('un')){
        document.getElementsByClassName('grouptrophy')[0].classList.remove('none');
    }
}

function TrophyDislpayDeux(){
    if (document.querySelector('.champwin').classList.contains('deux')){
        document.getElementsByClassName('grouptrophy')[0].classList.remove('none');
        document.getElementsByClassName('grouptrophy')[1].classList.remove('none');
    }
}

function TrophyDislpayQuattre(){
    if (document.querySelector('.champwin').classList.contains('quattre')){
        document.getElementsByClassName('grouptrophy')[0].classList.remove('none');
        document.getElementsByClassName('grouptrophy')[1].classList.remove('none');
        document.getElementsByClassName('grouptrophy')[2].classList.remove('none');
        document.getElementsByClassName('grouptrophy')[3].classList.remove('none');
       
    }
}











let section = document.querySelector('.sectionlast')

function LastTeamZero(){
    if (section.classList.contains('zeroo')){
        section.classList.add('none');
    }
}

function LastTeamUn(){
    if (section.classList.contains('unn')){
        document.getElementsByClassName('oldteam')[1].classList.add('none');
        document.getElementsByClassName('oldteam')[2].classList.add('none');
        document.getElementsByClassName('lastteamspace')[0].classList.add('lastteamflex');
        document.getElementsByClassName('lastteamflex')[0].classList.remove('lastteamspace');
    }
}

function LastTeamDeux(){
    if (section.classList.contains('deuxx')){
        document.getElementsByClassName('oldteam')[2].classList.add('none');
        document.getElementsByClassName('lastteamspace')[0].classList.add('lastteamaround');
      
    } 
}


function qwerty(){
    const azerty = document.querySelector('.ficheplayer');
    azerty.classList.add('ficheplayercurry');
}

















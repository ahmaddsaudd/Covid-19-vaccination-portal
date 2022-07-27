// using JQuery__________________________________________________________________________________
function fetch(){
    $.ajax({
        url: 'https://corona.lmao.ninja/v2/countries/pakistan?yesterday=true&strict=true&query',
        dataType: 'json',
        type: 'get',
        success: function(data){
            $('.number').each(function(){
                $(this).html(0);
            })

            const updateCounter = () => {
            
                let cases = data['cases'];
                let newCases = data['todayCases'];
                let recovered = data['recovered'];
                let newRecovered = data['todayRecovered'];
                let deaths = data['deaths'];
                let newDeaths = data['todayDeaths'];
                let active = data['active'];
                let critical = data['critical'];
                let tests = data['tests'];

                let value = [cases, newCases, recovered, newRecovered, deaths, newDeaths, active, critical, tests];
                let increment;
                
                const counter = $('.number');
                for(var i = 0; i < counter.length; i++){
                    if(value[i] > 1000){
                        increment = value[i] / 600;
                    }else{
                        increment = value[i] / 10;
                    }

                    const initial = Number(counter[i].innerHTML);

                    if(initial < value[i]){
                        counter[i].innerHTML = Math.round(initial + increment);
                        setTimeout(updateCounter, 100);
                    }else{
                        counter[i].innerHTML = value[i];
                    }
                }
            }
            updateCounter();
        }
    })
}

$(document).ready(function(){
    let flag = true;
    $('#menu').on('click', function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle')
    })

    $(window).on('load scroll', function(){
        if($(window).scrollTop() > 0){
            $('header').addClass('sticky');
            $('header .logo').css('color','var(--dark-blue)');
            $('header .logo span').css('color', 'var(--blue)');
            $('header .navbar a').css('color', 'var(--dark-blue)');
            $('header #menu').css('color', 'var(--dark-blue)');
        }
        else{
            $('header').removeClass('sticky');
            $('header .logo').css('color','#fff');
            $('header .logo span').css('color', '#fff');
            $('header .navbar a').css('color', '#fff');
            $('header #menu').css('color', '#fff');
        }

        $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle')

        if($(window).scrollTop() > 0){
            $('.scroll-top').show();
        }
        else{
            $('.scroll-top').hide();
        }

        // scroll spy 
        $('section').each(function(){
            let top = $(window).scrollTop();
            let offset = $(this).offset().top - 250;
            let id = $(this).attr('id');
            let height = $(this).height();
            
            if(top > offset && top < offset + height){
                $('.navbar a').removeClass('active');
                $('.navbar').find(`[href="#${id}"]`).addClass('active');

                //covid scroll animation
                //covid
                if(id == 'covid' && flag == true){
                    $('.covid .box-container .box.reveal').addClass('show');
                    $('.covid .column .main-image.reveal').addClass('show');

                    fetch();
                    flag = false;
                }else if(id != 'covid'){
                    flag = true;
                    $('.covid .box-container .box.reveal').removeClass('show');
                    $('.covid .column .main-image.reveal').removeClass('show');
                }

                //prevent
                if(id == 'prevent'){
                    $('.prevent .box-container .box.reveal').addClass('show');
                    
                }else if(id != 'prevent'){  
                    
                    $('.prevent .box-container .box.reveal').removeClass('show');
                }

                // symptoms
                if(id == 'symptoms'){
                    $('.symptoms .box-container .box.reveal').addClass('show');
                    $('.symptoms .column .main-image.reveal').addClass('show');

                }else if(id != 'symptoms'){
                    $('.symptoms .box-container .box.reveal').removeClass('show');
                    $('.symptoms .column .main-image.reveal').removeClass('show');
                }

                // precautions
                if(id == 'precautions'){
                    $('.precautions .column .box-container.reveal').addClass('show');

                }else if(id != 'precautions'){
                    $('.precautions .column .box-container.reveal').removeClass('show');
                }

                // hand-wash
                if(id == 'hand-wash'){
                    $('.hand-wash .column .box-container .box.reveal').addClass('show');
                    $('.hand-wash .column .main-image.reveal').addClass('show');

                }else if(id != 'hand-wash'){
                    $('.hand-wash .column .box-container .box.reveal').removeClass('show');
                    $('.hand-wash .column .main-image.reveal').removeClass('show');
                }

                //doctor
                if(id == 'doctor'){
                    $('.doctor .box-container .box.reveal').addClass('show');
                    
                }else if(id != 'doctor'){  
                    
                    $('.doctor .box-container .box.reveal').removeClass('show');
                }
            }
        });

        //scroll color change
        $('section').each(function(){
            let top = $(window).scrollTop();
            let offset = $(this).offset().top - 520;
            let id = $(this).attr('id');
            let height = $(this).height();    
            
            if(top > offset && top < offset + height){
              
              if(id == 'home' | id == 'prevent' | id == 'precautions' | id == 'doctor'){
                  $('.scroll-top .fas').css('color', 'white');
              }
              else if(id = 'covid' || 'symptoms' || 'doctor'){
                    $('.scroll-top .fas').css('color', 'var(--dark-blue)');
              }
            }
        });
    });

    // smooth scrolling 
    $('a[href *= "#"]').on('click', function(){
        $('html, body').animate({
            scrollTop : $($(this).attr('href')).offset().top,
        },
            500,
            'linear'
        )
    });
});

// using JavaScript_______________________________________________________________________________________

// const menuOpen = () => {
//     const menu = document.getElementById('menu');
//     menu.classList.toggle('fa-times');

//     const navbar = document.querySelector('.navbar');
//     navbar.classList.toggle('nav-toggle');
// }

// addEventListener('scroll', () => {
//     document.getElementById('menu').classList.remove('fa-times');
//     document.querySelector('.navbar').classList.remove('nav-toggle');

//     let x = window.scrollY;

//     if(x > 0){
//         document.querySelector('header').classList.add('sticky');
//     }else{
//         document.querySelector('header').classList.remove('sticky');
//     }

//     if(x > 0){
//         document.querySelector('.scroll-top').style.display = 'block';
//     }else{
//         document.querySelector('.scroll-top').style.display = 'none';
//     }

// })




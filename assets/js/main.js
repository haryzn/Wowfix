
$('.main-carousel').flickity({
    // options
    cellAlign: 'center',
    contain: false,
    wrapAround: false,
    autoPlay: 2000,
    prevNextButtons: false,
    adaptiveHeight: false,
  });

$('.ww-hamm').click(function () {
    $(this).toggleClass('change');
    if($('.ww-menu__list').hasClass('active')){
        $('.ww-menu__list').removeClass('active');
        $('.ww-menu__list').addClass('fadeInUp');
    }
    else{
        $('.ww-menu__list').addClass('active');
        $('.ww-menu__list').removeClass('fadeInUp'); 
    }
})


function validateBrand(){
    if($('#brands').val() != -1){
        return true
    }
    else {
        return false
    }
}

function changeActiveScene(){
    $('.ww-form__scene').removeClass('active');
    $('.sceneError').removeClass('active');
}

function emptyDots(){
    $('.ww-form__step-dots span').removeClass('active');
}

$('.ww-next').click(function(event){
    event.preventDefault();
    var findStep = $(this).parents('.ww-form__scene').attr('form-step') || $(this).attr('data-target')
    var sceneValidationOne ,sceneValidationTwo;
        formValid = []

    sceneValidationOne = sceneValidationTwo = false

    if (findStep == 1){
        sceneValidationOne = validateBrand();
        if(sceneValidationOne){
            changeActiveScene();
            $('[form-step="2"]').addClass('active');
            emptyDots();
            $('.ww-form__step-dots span:first-child, .ww-form__step-dots span:nth-child(2)').addClass('active');
            var brandValue = $('#brands').val();
            var imagelink = ''
            switch(brandValue) {
                case 'Dell':
                    imagelink = 'Dell.png';
                    break;
                case 'HP':
                    imagelink = 'HP.png';
                    break;
                case 'Lenovo':
                    imagelink = 'Lenovo.png';
                    break;
                case 'Acer':
                    imagelink = 'Acer.png';
                    break;
                case 'Asus':
                    imagelink = 'Asus.png';
                    break;
                case 'Apple':
                    imagelink = 'Apple.png';
                    break;
                case 'Sony Vaio':
                    imagelink = 'SonyVaio.png';
                    break;
                case 'Samsung':
                    imagelink = 'Samsung.png';
                    break;
                case 'Toshiba':
                    imagelink = 'Toshiba.png';
                    break;
                case 'Fujitsu':
                    imagelink = 'Fujitsu.png';
                    break;
                case 'Mi':
                    imagelink = 'Mi.png';
                    break;
                case 'Others':
                    imagelink = 'Others.png';
                    break;
                default:
                    imagelink = 'Others.png';
            }
            var imagelinkUpdated = 'wp-content/themes/Wowfix/assets/images/' + imagelink
            $('.ww-form__brand-chosen img').attr('src', imagelinkUpdated);
            formValid.push(sceneValidationOne)
        }
        else{
            $('[form-step="1"] .sceneError').addClass('active');
        }
    }

    if (findStep == 2){
        sceneValidationTwo = $('#problem').val() != -1 ? true : false
        if(sceneValidationTwo){
            changeActiveScene();
            $('[form-step="3"]').addClass('active');
            emptyDots();
            $('.ww-form__step-dots span:first-child, .ww-form__step-dots span:nth-child(2)').addClass('active');
            $('.ww-form__brand-issue p').text($('#problem').val())
            formValid.push(sceneValidationTwo)
        }
        else{
            $('[form-step="2"] .sceneError').addClass('active');
        }
    }

    if (findStep == 3){
        var name = $('#name').val();

        var phone = $('#phoneNumber').val()
        phone = phone.replace(/^0+/, '')
        phone.trim()
        var phoneValidation = false

        if(phone.length > 0){
            phoneValidation =  /^[6-9]\d{9}$/.test(phone)
        }

        if (phoneValidation && name != ''){
            changeActiveScene();
            formValid.push(phoneValidation)
            $('[form-step="4"]').addClass('active');
            $('.ww-form__step-dots').hide();
            postToFormSpree()
        }
        else{
            if(name == ''){
                $('[form-step="3"] .sceneError.name').addClass('active');
                $('[form-step="3"] .sceneError.phone').removeClass('active');
            }
            else{
                $('[form-step="3"] .sceneError.phone').addClass('active');
                $('[form-step="3"] .sceneError.name').removeClass('active');
            }
        }
    }

})

function postToFormSpree() {
    var save_url = "https://submit-form.com/TyBXYkbl";
    $.ajax({
        url: save_url,
        method: "POST",
        dataType: "json",
        data: {
            name: $('#name').val(),
            brand: $('#brands').val(),
            problem: $('#problem').val(),
            phoneno: $('#phoneNumber').val().replace(/^0+/, ''),
            '_email.subject': $('#phoneNumber').val(),
            '_email.template.title': 'Wowfix New Enquiry'
        },
        success: function () {
            $('.loader').hide();
            $('.ww-form__success-message').show();
        },
        error: function () {
            console.log(error)
        },
    });
}

$('.ww-faq__head').click(function(){
    $('.ww-faq__head').removeClass('open')
    $(this).toggleClass('open');
})










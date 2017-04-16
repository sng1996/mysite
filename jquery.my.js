/*$('.go-top').scroolly([
    {
        from: 'el-top = vp-bottom - 100px',
        to: 'el-bottom = vp-bottom - 100px',
        cssFrom:{opacity:'.0'},
        cssTo:{opacity:'1'}
    }
]);*/


$('.go-top').click(function(){
    $('html, body').animate({scrollTop: 0}, 500);
}).scroolly([
    {
        alias: 'hidden',
//                    from: 'doc-top',
        to: 'doc-top + 100vp',
        css: {
            opacity: '0',
            bottom: '-20px'
        }
    },
    {
        alias: 'shown',
        from: 'doc-top + 100vp',
        to: 'doc-bottom',
        css: {
            opacity: '1',
            bottom: '0vh'
        }
    }
]);


$('.custom-bar').scroolly([
    {

        to: 'doc-top + 70px',
        css: {
            position: 'absolute',
            top: '70px'
        }
    },
    {
        from: 'doc-top + 70px',
        to: 'doc-bottom',
        css: {
            position: 'fixed',
            top: '0px'
        }
    }
]);

$('.custom-line').scroolly([
    {

        to: 'doc-top + 1600px',
        css: {
            left: '0vw'
        }
    },
    {
        from: 'doc-top + 1600px',
        to: 'doc-top + 3300px',
        css: {
            left: '33.3vw'
        }
    },
    {
        from: 'doc-top + 3300px',
        to: 'doc-bottom',
        css: {
            left: '66.6vw'
        }
    }
]);

$('.go-me').click(function(){
    $('html, body').animate({scrollTop: 0}, 500);
});

$('.go-team').click(function(){
    $('html, body').animate({scrollTop: 1800}, 500);
});

$('.go-clients').click(function(){
    $('html, body').animate({scrollTop: 3500}, 500);
});


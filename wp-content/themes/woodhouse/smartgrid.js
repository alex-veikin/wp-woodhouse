const smartgrid = require('smart-grid');

const settings = {
    filename: '_smart-grid',
    outputStyle: 'scss',
    columns: 12,
    offset: '30px',
    mobileFirst: true,
    container: {
        maxWidth: '1140px',
        fields: '30px'
    },
    breakPoints: {
        xl: {
            width: '1200px',
        },
        lg: {
            width: '992px',
        },
        md: {
            width: '768px',
        },
        sm: {
            width: '576px',
        },
        xs: {
            width: '0',
        },
        // xxs: {
        //     width: '360',
        // }
    }
};

smartgrid('./src/scss/', settings);
module.exports = {
    theme: {
        extends: {
            colors: {
                gray: {
                    '100': '#e3e3e3',
                    '400': '#d5d6d5',
                    '200': '#eeeef0',
                    '300': '#cccccf',
                    '500': '#99999c',
                    '900': '#252525'
                }
            }
        }
    },
    variants: {},
    plugins: [
        require('tailwind-flex-grid/grid')({
            columns: [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12],
            gutter: 24,
            variants: ['responsive'],
        })
    ]
}

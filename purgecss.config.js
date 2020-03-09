module.exports = {
    content: ["./resources/views/**/*.blade.php"],
    css: ['./resources/sass/*.scss'],
    //whitelistPatterns: [/red$/],
    extractors: [{
        extractor: class {
            static extract(content) {
                return content.match(/[A-z0-9-:\/]+/g) || []
            }
        },
        extensions: ["html","php"]
    }]
};

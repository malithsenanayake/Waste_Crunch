d3.json("gender.json", function (data) {
    var chart = c3.generate({
        bindto: '#genderChart',
        data: {
            columns: [
                ['Female', data.female],
                ['Male', data.male]
            ],
            type : 'pie'
        },
        color: {
            pattern: ['#3498db', '#1abb9c']
        },
        tooltip: {
            format: {
                value: function (value, ratio, id) {
                    /**
                     * https://groups.google.com/forum/#!topic/d3-js/DGjmZSVdaSc
                     */
                    var commaFormat = d3.format(",");
                    var dotFormat = function(num){
                        // The expression /,/g is a regular expression that matches all commas.
                        return commaFormat(num).replace(/,/g, ".");
                    };
                    return dotFormat(value);
                }
            }
        }
    });
});
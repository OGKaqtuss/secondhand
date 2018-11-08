function bc() {
    console.log("Browser is now running: libs/Builder/Builder.js");
    var file = {};

    this.build = function (to, element) {
        to.last().append(element);
    }

    this.add = function (array) {
        if (!array === undefined || array.length != 0) {
            if (array[2] != 'none') {
                if (typeof array[3] !== 'undefined' && array[3].length > 0) {
                    for (var i = 0; i < array[3][0].length; i++) {
                        if (array[3][0][i] == 'class') {
                            //                            console.log(array); // HELPER REMEMBER MARK <--------------- USE ALL TIME
                            $(array[0] + " " + array[2]).last().addClass(array[3][1][i]);
                        }
                        if (array[3][0][i] != 'class') {
                            //                            console.log(array[3][0][i]);
                            for (var e = 0; e < array[3][1][i].length; e++) {
                                //                                console.log(array[3][1][i][e]);
                                $(array[0] + " " + array[2]).last().attr(array[3][0][i], array[3][1][i][e])
                            }
                        }
                    }
                }
            }
        }
    }
}

function todo() {
    console.log("Browser is now running: Blueprint.js");
    var self = {};
    // list array[i][0] is the plase to append to
    // list array[i][0] is a jQuery select
    // list array[i][1] is the tag/value that gets appended
    // list array[i][2] is the array for attr
    // Mark remember to use LAST() when you add stuff else you get an ERROR
    self.list = [
        ['body', '<div></div>', 'div', [
            ['id'],
            [
                ['backgroundMaster']
            ]
        ]],
        ['body #backgroundMaster', '<div></div>', 'div', [
            ['id'],
            [
                ['background']
            ]
        ]],
        ['body', '<header></header>', 'header'],
        ['body header', '<h1></h1>', 'h1'],
        ['body header h1', 'Krampladsen.dk', 'none'],
        ['body header', '<nav></nav>', 'nav'],
        ['body header nav', '<ul></ul>', 'ul'],
        ['body header nav ul', '<li></li>', 'li'],
        ['body header nav ul li', '<a>Forside</a>', 'a', [
            ['class', 'href'],
            [
                ['active'],
                ['home']
            ]
        ]],
//        ['body header nav ul li a', 'Forside', 'none'],
        ['body header nav ul', '<li></li>', 'li'],
        ['body header nav ul li', '<a>Marked</a>', 'a', [
            ['href'],
            [
                ['market']
            ]
        ]],
//        ['body header nav ul li a', 'Shop', 'none'],
        ['body header nav ul', '<li></li>', 'li'],
        ['body header nav ul li', '<a>Login</a>', 'a', [
            ['href'],
            [
                ['register/login']
            ]
        ]],
        ['body header nav ul', '<li></li>', 'li'],
        ['body header nav ul li', '<a>Infomation</a>', 'a', [
            ['href'],
            [
                ['service/information']
            ]
        ]],
        ['body header nav ul', '<li></li>', 'li'],
        ['body header nav ul li', '<div></div>', 'div', [
            ['class'],
            [
                ['burger']
            ]
        ]],
        ['body header nav ul li div.burger', '<div></div>', 'div'],
        ['body header nav ul li div.burger', '<div></div>', 'div'],
        ['body header nav ul li div.burger', '<div></div>', 'div']
//        ['body header nav ul li a', 'Login', 'none']
    ];
    this.run = function () {
        for (var i = 0; i < self.list.length; i++) {
            (new bc()).build($(self.list[i][0]), self.list[i][1]);
            (new bc()).add(self.list[i]);
        }
    }
}

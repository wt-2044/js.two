// define([], function() {
//     return {
//         a: '我是定义模块define',
//         replace: function() {
//             const box = document.querySelector('.box');
//             box.onclick = function() {
//                 this.style.backgroundColor = 'red';
//             }
//         }

//     }
// });
define([], function() {
    return {
        a: '我是定义模块define',
        replace: ! function() {
            const box = document.querySelector('.box');
            box.onclick = function() {
                this.style.backgroundColor = 'red';
            }
        }()

    }
})
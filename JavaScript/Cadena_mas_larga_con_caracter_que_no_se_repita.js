'use strict';
let longest_non_repeat = function (s) {
  var start = 0, maxlen = 0, used_char = {};
  var min = 0;
  for (var i = 0; i < s.length; i++) {
    var ch = s[i];
    if (ch in used_char && start <= used_char[ch]) {
      start = used_char[ch] + 1;
    } else {
      maxlen = Math.max (maxlen, i - start + 1);
    }
    used_char[ch] = i;
  }
  min = Math.min.apply (null, Object.values (used_char));
  var text = s.substr (min, maxlen);
  return text;
};

let a = 'contraproducente';
console.log (a);
console.log (longest_non_repeat (a));
